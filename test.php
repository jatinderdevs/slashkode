<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/config.php';

// 1. Verify Constant
if (!defined('RESEND_API_KEY') || empty(RESEND_API_KEY)) {
    die("<h3 style='color:red;'>Error: RESEND_API_KEY is missing or empty in env.php.</h3>");
}

echo "<p>🔑 API Key Loaded: " . substr(RESEND_API_KEY, 0, 7) . "..." . "</p>";

// 2. Prepare Payload (Note: using info@mail.slashkode.com.au)
$url = 'https://api.resend.com/emails';
$payload = [
    'from'     => 'Slashkode <info@mail.slashkode.com.au>', // Must use mail.slashkode.com.au
    'reply_to' => 'info@slashkode.com.au',                 // Replies route to main inbox
    'to'       => ['info@slashkode.com.au'],
    'subject'  => 'Resend API Debug Test',
    'html'     => '<p>Testing Resend integration with debug script.</p>'
];

// 3. Run cURL Request with Full Error Capturing
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . RESEND_API_KEY,
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// 4. Output Diagnostic Results
echo "<h3>Diagnostic Results:</h3>";
echo "<ul>";
echo "<li><strong>HTTP Code:</strong> " . $httpCode . "</li>";

if ($curlError) {
    echo "<li style='color:red;'><strong>cURL Error:</strong> " . htmlspecialchars($curlError) . "</li>";
}

echo "<li><strong>Resend API Response:</strong> <pre>" . htmlspecialchars($response) . "</pre></li>";
echo "</ul>";