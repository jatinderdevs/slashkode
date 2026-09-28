<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Your Website | $99 to Start, $39/Fortnightly | Slashkode Melbourne</title>
    <meta name="description"
        content="Start your website with Slashkode for $99, then $39 fortnightly — no lock-in, no cancellation fees. Tell us about your business and we'll get you online." />
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
                        <a href="<?php echo BASE_PATH; ?>/index.php" class="breadcrumb-btn"> / Home</a>

                        <h1 class="heroheading">Let's get your website started</h1>
                        <p class="start-hero-lead">
                            $99 to start, then $39 fortnightly. No lock-in, no cancellation fees —
                            just tell us a bit about your business.
                        </p>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 FORM
            ════════════════════════════════════ -->
            <section class="wd-section start-form-section">
                <div class="sk-container">
                    <div class="wd-hero-card start-card" id="startCard">

                        <div id="startFormWrap">
                            <?php $formMode = 'standard'; require_once('includes/sections/start-form.php'); ?>
                        </div>

                        <div id="startConfirm" class="start-confirm" hidden></div>

                    </div>

                    <p class="start-trust">No lock-in &middot; No cancellation fees &middot; No handover</p>

                    <p class="start-switch-link">
                        Need something beyond the standard package?
                        <a href="<?php echo BASE_PATH; ?>/quote.php">Request a quote &rarr;</a>
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
            <?php require_once('includes/sections/process.php'); ?>


            <?php require_once('includes/island.php'); ?>
        </div>
        <?php $faqPage = 'home';
        require_once('includes/sections/faq.php'); ?>
        <?php require_once('includes/footer.php'); ?>
    </main>
    <?php require_once('includes/customjs.php'); ?>

    <script src="<?php echo BASE_PATH; ?>/public/js/pages/start.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/process.js" defer></script>

</body>

</html>