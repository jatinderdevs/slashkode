<?php

define('SK_ADMIN_EMAIL', 'info@slashkode.com.au');
define('SK_FROM', 'Slashkode <info@mail.slashkode.com.au>');

/**
 * Send one email through the Resend API. Returns true/false.
 */
function sk_send_email($to, $subject, $html, $replyTo = null)
{
    $payload = [
        'from'    => SK_FROM,
        'to'      => is_array($to) ? $to : [$to],
        'subject' => $subject,
        'html'    => $html,
    ];
    if ($replyTo) {
        $payload['reply_to'] = $replyTo;
    }

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_TIMEOUT        => 15,
        CURLOPT_POSTFIELDS     => json_encode($payload),
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . RESEND_API_KEY,
            'Content-Type: application/json',
        ],
    ]);
    $response = curl_exec($ch);
    $code     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($code < 200 || $code >= 300) {
        error_log('[slashkode] Resend failed (' . $code . '): ' . $response);
        return false;
    }
    return true;
}

/**
 * Shared branded email layout.
 */
function sk_email_wrapper($contentHtml)
{
    return "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>
  body { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #EDEDEA; margin: 0; padding: 20px; color: #0f172a; }
  .container { max-width: 600px; margin: 0 auto; background: #FFFFFF; border-radius: 8px; overflow: hidden; }
  .header { background: #0f172a; padding: 24px; text-align: center; }
  .header h1 { color: #FFFFFF; font-size: 22px; margin: 0; font-weight: 700; letter-spacing: -0.5px; }
  .header span { color: #E52F22; }
  .content { padding: 32px 24px; line-height: 1.6; font-size: 15px; }
  .box { background: #F8F8F6; border-left: 4px solid #E52F22; padding: 15px; margin: 20px 0; border-radius: 0 6px 6px 0; }
  .footer { background: #F8F8F6; padding: 20px 24px; text-align: center; font-size: 13px; color: #6B6B67; }
</style>
</head>
<body>
  <div class='container'>
    <div class='header'><h1>slash<span>kode</span></h1></div>
    <div class='content'>{$contentHtml}</div>
    <div class='footer'>
      <strong>Slashkode</strong> · Web Design &amp; Development Melbourne<br>
      +61 499 167 608 | info@slashkode.com.au
    </div>
  </div>
</body>
</html>";
}

/**
 * Wording for each form type. Edit the text here, nowhere else.
 */
function sk_form_copy($type, $data)
{
    $biz = htmlspecialchars($data['business_name'] ?? '');

    $copy = [
        'start' => [
            'label'   => '$99 Start Package Submission',
            'admin'   => 'New $99 Start Submission',
            'subject' => 'Slashkode $99 Website Package – Next Steps',
            'intro'   => "We've received your details" . ($biz ? " for <strong>{$biz}</strong>" : '') . " and are ready to get your project started.",
            'next'    => '<ol style="margin:10px 0 0;padding-left:20px;">
                <li>Jazz will review the details you sent.</li>
                <li>You\'ll get a follow-up email or WhatsApp with your <strong>$99 kick-off payment link</strong>.</li>
                <li>Once that\'s paid, we start building your website.</li>
              </ol>',
            'footer'  => 'No lock-in · No cancellation fees · Built and managed directly by Jazz in Melbourne.',
        ],
        'quote' => [
            'label'   => 'Custom Quote Request',
            'admin'   => 'New Quote Request',
            'subject' => "We've received your quote request",
            'intro'   => "We've received your quote request" . ($biz ? " for <strong>{$biz}</strong>" : '') . '.',
            'next'    => "Jazz will review your requirements and come back within 24 hours with a detailed scope and estimate, or a quick call request if we need to clarify anything.",
            'footer'  => 'No pressure, no lock-in.',
        ],
        'contact' => [
            'label'   => 'Contact Form Message',
            'admin'   => 'New Contact Message',
            'subject' => 'Thanks for getting in touch',
            'intro'   => "We've received your message.",
            'next'    => "We'll reply within one business day.",
            'footer'  => '',
        ],
    ];

    return $copy[$type] ?? $copy['contact'];
}

/**
 * Confirmation email sent to the client.
 */
function sk_client_email($type, $data)
{
    $c    = sk_form_copy($type, $data);
    $name = htmlspecialchars($data['name']);

    $body  = "<p>Hi {$name},</p>";
    $body .= "<p>Thanks for contacting <strong>Slashkode</strong>! {$c['intro']}</p>";
    $body .= "<div class='box'><strong>What happens next:</strong><br>{$c['next']}</div>";
    if ($c['footer']) {
        $body .= "<p>{$c['footer']}</p>";
    }
    $body .= "<p>Cheers,<br><strong>Jazz (Jatinder)</strong><br>Founder &amp; Lead Developer, Slashkode</p>";

    return sk_email_wrapper($body);
}

/**
 * Notification email sent to you, listing every submitted field.
 */
function sk_admin_email($type, $data)
{
    $c    = sk_form_copy($type, $data);
    $rows = '';
    foreach ($data as $key => $value) {
        $label = ucwords(str_replace('_', ' ', $key));
        $value = nl2br(htmlspecialchars($value));
        $rows .= "<tr><td style='padding:8px;border-bottom:1px solid #EDEDEA;font-weight:bold;width:35%;'>{$label}</td>"
               . "<td style='padding:8px;border-bottom:1px solid #EDEDEA;'>{$value}</td></tr>";
    }

    return sk_email_wrapper(
        "<h2 style='margin-top:0;color:#E52F22;'>New Lead: {$c['label']}</h2>
         <table style='width:100%;border-collapse:collapse;'>{$rows}</table>"
    );
}

/**
 * The one function each page calls: 'start', 'quote' or 'contact'.
 * Not a POST        -> returns '' (page just shows the form)
 * Validation fails  -> returns an error message to display
 * Success           -> emails both sides, redirects to /success, exits
 */
function sk_handle_form($type)
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return '';
    }

    // Honeypot: bots fill the hidden field, people never see it
    if (!empty($_POST['company_url'])) {
        header('Location: ' . BASE_URL . '/success?type=' . $type);
        exit;
    }

    // Take only the fields we expect
    $data = [];
    foreach (['name', 'email', 'phone', 'business_name', 'website', 'extra_details', 'message'] as $field) {
        $value = trim(strip_tags($_POST[$field] ?? ''));
        if ($value !== '') {
            $data[$field] = mb_substr($value, 0, 3000);
        }
    }

    if (empty($data['name']) || !filter_var($data['email'] ?? '', FILTER_VALIDATE_EMAIL)) {
        return 'Please check your name and email address.';
    }

    $c   = sk_form_copy($type, $data);
    $who = preg_replace('/[\r\n]+/', ' ', $data['business_name'] ?? $data['name']);

    // 1. To you (reply goes straight to the client)
    $sent = sk_send_email(SK_ADMIN_EMAIL, $c['admin'] . ' - ' . $who, sk_admin_email($type, $data), $data['email']);
    if (!$sent) {
        return 'Something went wrong sending your message. Please WhatsApp us on +61 499 167 608.';
    }

    // 2. To the client
    sk_send_email($data['email'], $c['subject'], sk_client_email($type, $data), SK_ADMIN_EMAIL);

    // 3. Success page
    header('Location: ' . BASE_URL . '/success?type=' . $type);
    exit;
}