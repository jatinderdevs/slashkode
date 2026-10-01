<?php
require_once __DIR__ . '/config.php';

$messages = [
    'start'   => "Thanks! Check your inbox. We'll send your $99 kick-off link shortly.",
    'quote'   => "Thanks! We'll review your project and send a tailored quote within 24 hours.",
    'contact' => "Thanks for getting in touch. We'll reply within one business day.",
];
$msg = $messages[$_GET['type'] ?? ''] ?? "Thanks! We'll be in touch soon.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you | Slashkode</title>
    <meta name="robots" content="noindex">
    <?php require_once __DIR__ . '/includes/stylesheets.php'; ?>
</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once __DIR__ . '/includes/navbar.php'; ?>

            <section class="wd-section" style="padding: 80px 0; text-align: center;">
                <div class="sk-container">
                    <h1 style="margin-bottom: 16px;">You're all set</h1>
                    <p style="font-size: 1.125rem; max-width: 480px; margin: 0 auto 32px;">
                        <?php echo htmlspecialchars($msg); ?>
                    </p>
                    <a href="<?php echo BASE_PATH; ?>/" class="sk-btn sk-btn-primary">
                        Back to home
                        <span></span>
                    </a>
                </div>
            </section>

        </div>
        <?php require_once __DIR__ . '/includes/footer.php'; ?>

    </main>
    <?php require_once __DIR__ . '/includes/customjs.php'; ?>
</body>

</html>