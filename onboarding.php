<?php
/**
 * Onboarding page — opens only after a paid Stripe Checkout Session.
 *
 * No database. Stripe is the source of truth:
 *   1. The Payment Link redirects here with ?session_id={CHECKOUT_SESSION_ID}.
 *   2. We ask Stripe (server-side, restricted read-only key) whether that session is paid
 *      AND came from our $99 Payment Link.
 *   3. If so, a PHP session remembers the visitor, so refreshing /onboarding still works.
 *
 * Config (env.php, never committed):
 *   STRIPE_RESTRICTED_KEY   restricted key, Checkout Sessions: read only
 *   STRIPE_PAYMENT_LINK_ID  the plink_... ID of the $99 Payment Link
 *   ONBOARDING_FORM_URL     the OpnForm public URL
 *   ONBOARDING_FORM_FIELD   key OpnForm uses to prefill the hidden session ID field
 *                           (from Share > Url form pre-fill). Defaults to "session_id".
 *   STRIPE_API_BASE         optional, defaults to https://api.stripe.com (used only for local testing)
 */
require_once __DIR__ . '/config.php';

header('X-Robots-Tag: noindex, nofollow');
header('Cache-Control: no-store');

/**
 * Ask Stripe about one Checkout Session.
 * Returns ['status' => 'paid', 'email' => ..., 'name' => ...]
 *      or ['status' => 'unpaid']   (not paid, not ours, or not found)
 *      or ['status' => 'error']    (we could not check: never treat this as "unpaid")
 */
function sk_check_checkout_session($sessionId)
{
    if (!preg_match('/^cs_(live|test)_[A-Za-z0-9]{10,200}$/', $sessionId)) {
        return ['status' => 'unpaid'];
    }

    if (!defined('STRIPE_RESTRICTED_KEY') || STRIPE_RESTRICTED_KEY === ''
        || !defined('STRIPE_PAYMENT_LINK_ID') || STRIPE_PAYMENT_LINK_ID === '') {
        error_log('[slashkode] onboarding: STRIPE_RESTRICTED_KEY / STRIPE_PAYMENT_LINK_ID not set');
        return ['status' => 'error'];
    }

    $base = defined('STRIPE_API_BASE') ? STRIPE_API_BASE : 'https://api.stripe.com';

    $ch = curl_init($base . '/v1/checkout/sessions/' . rawurlencode($sessionId));
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 15,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . STRIPE_RESTRICTED_KEY],
    ]);
    $response = curl_exec($ch);
    $code     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response === false) {
        error_log('[slashkode] onboarding: could not reach Stripe');
        return ['status' => 'error'];
    }

    // Stripe says this session does not exist (or the ID is malformed): not a paying customer.
    if ($code === 404 || $code === 400) {
        return ['status' => 'unpaid'];
    }
    // Anything else that is not a clean 200 (bad key, rate limit, Stripe outage) is OUR problem.
    if ($code !== 200) {
        error_log('[slashkode] onboarding: Stripe returned HTTP ' . $code);
        return ['status' => 'error'];
    }

    $s = json_decode($response, true);
    if (!is_array($s)) {
        return ['status' => 'error'];
    }

    $paid = ($s['status'] ?? '') === 'complete'
        && ($s['payment_status'] ?? '') === 'paid'
        && ($s['mode'] ?? '') === 'payment'
        // Must come from the $99 link, so a paid session from any other link in the
        // same Stripe account cannot open this page.
        && ($s['payment_link'] ?? '') === STRIPE_PAYMENT_LINK_ID;

    if (!$paid) {
        return ['status' => 'unpaid'];
    }

    return [
        'status' => 'paid',
        'email'  => (string) ($s['customer_details']['email'] ?? ''),
        'name'   => (string) ($s['customer_details']['name'] ?? ''),
    ];
}

// ── Session ──────────────────────────────────────────────────────────────
function sk_open_session()
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }
    $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');

    // Refuse session IDs the server did not issue (blocks planted/forged IDs).
    ini_set('session.use_strict_mode', '1');
    session_name('sk_onboarding');
    session_set_cookie_params([
        'lifetime' => 60 * 60 * 24 * 7,
        'path'     => '/',
        'secure'   => $isHttps,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

// Only open a session for visitors who already hold our cookie, so random hits
// (bots, people typing the URL) don't create session files or get a cookie.
if (isset($_COOKIE['sk_onboarding'])) {
    sk_open_session();
}

$verifyFailed = false;

// ── Arriving from Stripe: verify, remember, then drop the ID from the URL ──
if (isset($_GET['session_id'])) {
    $sid    = is_string($_GET['session_id']) ? $_GET['session_id'] : '';
    $result = sk_check_checkout_session($sid);

    if ($result['status'] === 'paid') {
        sk_open_session();
        session_regenerate_id(true);
        $_SESSION['sk_paid'] = [
            'sid'   => $sid,
            'email' => $result['email'],
            'name'  => $result['name'],
            'at'    => time(),
        ];
        header('Location: ' . BASE_URL . '/onboarding');
        exit;
    }

    if ($result['status'] === 'unpaid') {
        header('Location: ' . BASE_URL . '/start?need=payment');
        exit;
    }

    // 'error': we could not check. Do NOT bounce someone who may have just paid.
    $verifyFailed = true;
}

// ── Gate ─────────────────────────────────────────────────────────────────
$paid = $_SESSION['sk_paid'] ?? null;
$open = is_array($paid) && !empty($paid['sid']);

if (!$open && !$verifyFailed) {
    header('Location: ' . BASE_URL . '/start?need=payment');
    exit;
}

if ($verifyFailed) {
    http_response_code(503);
}

// ── Form URL (session_id rides along so each submission matches its payment) ──
$formUrl = '';
if ($open && defined('ONBOARDING_FORM_URL') && ONBOARDING_FORM_URL !== '') {
    // OpnForm prefills a field from the query string, keyed by whatever its
    // "Url form pre-fill" tool generates (often a long ID, not the field name).
    $formField = (defined('ONBOARDING_FORM_FIELD') && ONBOARDING_FORM_FIELD !== '')
        ? ONBOARDING_FORM_FIELD
        : 'session_id';

    $formUrl = ONBOARDING_FORM_URL
        . (strpos(ONBOARDING_FORM_URL, '?') === false ? '?' : '&')
        . rawurlencode($formField) . '=' . rawurlencode($paid['sid']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell us about your business | Slashkode</title>
    <meta name="robots" content="noindex, nofollow">
    <?php require_once __DIR__ . '/includes/stylesheets.php'; ?>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/start.css" />
</head>

<body class="wd-page start-page onboarding-page">
    <main>
        <div class="container-fluid">
            <?php require_once __DIR__ . '/includes/navbar.php'; ?>

            <?php if ($verifyFailed) : ?>

            <section class="wd-hero start-hero">
                <div class="sk-container">
                    <div class="text-container">
                        <h1 class="heroheading">We couldn't confirm your payment just yet</h1>
                        <p class="start-hero-lead">
                            Please don't pay again. Refresh this page in a minute. If it still doesn't open, email
                            <a href="mailto:info@slashkode.com.au">info@slashkode.com.au</a> or WhatsApp
                            <a href="https://wa.me/61499167608">+61 499 167 608</a> and we'll sort it out straight away.
                        </p>
                    </div>
                </div>
            </section>

            <?php else : ?>

            <section class="wd-hero start-hero">
                <div class="sk-container">
                    <div class="text-container">
                        <p class="onboard-eyebrow alert alert-success">Payment received</p>
                        <h1 class="heroheading">Now, tell us about your business</h1>
                        <p class="start-hero-lead">
                            Share your current website (if you have one), your logo, any brand guidelines and
                            anything you'd like us to know. A rough answer is fine, and you can send more later.
                        </p>
                        <?php if (!empty($paid['email'])) : ?>
                        <p class="onboard-paid-for">Payment confirmed for
                            <?php echo htmlspecialchars($paid['email']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="wd-section start-form-section pt-0">
                <div class="sk-container">
                    <div class="">
                        <?php if ($formUrl !== '') : ?>
                        <iframe class="onboard-frame" src="<?php echo htmlspecialchars($formUrl); ?>"
                            title="Onboarding form" loading="lazy"></iframe>
                        <p class="onboard-fallback">
                            Form not loading?
                            <a href="<?php echo htmlspecialchars($formUrl); ?>" target="_blank" rel="noopener">Open it
                                in a
                                new tab</a>.
                        </p>
                        <?php else : ?>
                        <p class="onboard-fallback">
                            Our form isn't available right now. Please email
                            <a href="mailto:info@slashkode.com.au">info@slashkode.com.au</a> with your details and
                            we'll take it from there.
                        </p>
                        <?php endif; ?>
                    </div>
                    <p class="start-trust">Questions? WhatsApp <a href="https://wa.me/61499167608">+61 499 167 608</a>
                    </p>
                </div>
            </section>

            <?php endif; ?>

        </div>
        <?php require_once __DIR__ . '/includes/footer.php'; ?>
    </main>
    <?php require_once __DIR__ . '/includes/customjs.php'; ?>
</body>

</html>