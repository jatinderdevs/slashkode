<?php
require_once __DIR__ . '/config.php';

// Stripe Payment Link for the $99 start fee. Set STRIPE_PAYMENT_LINK_URL in env.php.
$payUrl      = defined('STRIPE_PAYMENT_LINK_URL') ? STRIPE_PAYMENT_LINK_URL : '';
$needPayment = ($_GET['need'] ?? '') === 'payment'; // bounced here from /onboarding
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Your Website | $99 to Start | Slashkode Melbourne</title>
    <meta name="description"
        content="Start your website with Slashkode for $99, then $39 fortnightly once it's live. No lock-in, no cancellation fees. Pay to start, then tell us about your business and we'll get you online." />
    <meta name="keywords"
        content="start website Melbourne, $99 website Melbourne, affordable website design Melbourne, get website built Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/start" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Start Your Website | $99 to Start, $39/Fortnightly | Slashkode" />
    <meta property="og:description"
        content="$99 to start, then $39 fortnightly. No lock-in, no cancellation fees — tell us about your business and we'll get you online." />
    <meta property="og:url" content="https://slashkode.com.au/start" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Start Your Website | Slashkode Melbourne" />
    <meta name="twitter:description" content="$99 to start, then $39 fortnightly. No lock-in, no cancellation fees." />

    <!-- Schema.org — Breadcrumb -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://slashkode.com.au/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Start",
                "item": "https://slashkode.com.au/start"
            }
        ]
    }
    </script>

    <?php require_once('includes/stylesheets.php'); ?>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/start.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/process.css" />

</head>

<body class="wd-page start-page">
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php'); ?>

            <!-- ════════════════════════════════════
                 HERO
            ════════════════════════════════════ -->
            <section class="wd-hero start-hero">
                <div class="sk-container">
                    <div class="text-container">
                        <a href="<?php echo  BASE_PATH; ?>/" class="breadcrumb-btn"> / Home</a>

                        <h1 class="heroheading mb-0">Let's start</h1>

                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 PAY TO START
            ════════════════════════════════════ -->
            <section class="wd-section start-form-section pt-0">
                <div class="sk-container">
                    <div class="wd-hero-card start-card start-pay" id="startCard">

                        <?php if ($needPayment) : ?>
                        <p class="start-need-payment" role="status">
                            The next step opens once your payment is complete. Pay below to get started.
                        </p>
                        <?php endif; ?>

                        <h2 class="wd-hero-card-title">Your website plan</h2>

                        <p class="start-price">
                            <span class="start-price__now">$99</span>
                            <span class="start-price__label">to start</span>
                        </p>
                        <p class="start-price__then">then $39 fortnightly once your website is live</p>

                        <ul class="start-pay-list">
                            <li>Up to 10 custom-designed, mobile-friendly pages</li>
                            <li>Hosting, and help connecting your domain</li>
                            <li>On-page SEO and Google Search Console monitoring</li>
                            <li>One small update every month</li>
                        </ul>

                        <?php if ($payUrl !== '') : ?>
                        <a href="<?php echo htmlspecialchars($payUrl); ?>"
                            class="p-3 sk-btn sk-btn-primary start-pay-btn" rel="noopener">
                            Pay $99 and get started
                            <span></span>
                        </a>
                        <?php else : ?>
                        <a href="<?php echo BASE_PATH; ?>/contact" class="p-3 sk-btn sk-btn-primary start-pay-btn">
                            Talk to us to get started
                            <span></span>
                        </a>
                        <?php endif; ?>

                        <p class="start-next-info">
                            Secure payment by Stripe. Straight after paying, you'll tell us about your business:
                            your current website, logo, brand guidelines and any instructions.
                        </p>
                        <p class="start-consent-note">
                            By paying you accept our
                            <a href="<?php echo BASE_PATH; ?>/terms" target="_blank" rel="noopener">Terms of Service</a>
                            and
                            <a href="<?php echo BASE_PATH; ?>/privacy" target="_blank" rel="noopener">Privacy
                                Policy</a>,
                            and agree that $39 fortnightly starts once your website is live.
                        </p>

                    </div>

                    <p class="start-trust">No lock-in &middot; No cancellation fees</p>

                    <p class="start-switch-link">
                        Need something beyond the standard package?
                        <a href="<?php echo BASE_PATH; ?>/quote">Request a quote &rarr;</a>
                    </p>
                </div>
            </section>
            <section class="sk-container">
                <div class="packages-cta-band">
                    <h2>Have a question before you start?</h2>
                    <p>Happy to talk it through. Send a message or book a short chat — I’ll answer clearly and with no
                        pressure.</p>
                    <a href="<?php echo BASE_PATH; ?>/contact" class="sk-btn sk-btn-primary">Let’s talk
                        <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" class="img-fluid" alt=""
                            width="15" height="15">
                        <span></span></a>
                </div>

            </section>


            <?php require_once('includes/island.php'); ?>
        </div>
        <?php require_once('includes/sections/process.php'); ?>

        <?php $faqPage = 'start';
        require_once('includes/sections/faq.php'); ?>
        <?php require_once('includes/footer.php'); ?>
    </main>
    <?php require_once('includes/customjs.php'); ?>


    <script src="<?php echo BASE_PATH; ?>/public/js/services/process.js" defer></script>

</body>

</html>