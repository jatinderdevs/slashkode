<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Website Quote | Custom Projects | Slashkode Melbourne</title>
    <meta name="description"
        content="Request a custom website quote from Slashkode — for RTO/VET sites, custom web applications, e-commerce or anything beyond the standard package. No pressure, no lock-in." />
    <meta name="keywords"
        content="custom website quote Melbourne, website quote Melbourne, custom web application quote, RTO website quote, bespoke web design quote Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/quote" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Request a Website Quote | Custom Projects | Slashkode" />
    <meta property="og:description"
        content="For RTO & VET sites, custom web applications, e-commerce or anything beyond the standard package — tell us what you need and we'll send a tailored quote." />
    <meta property="og:url" content="https://slashkode.com.au/quote" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Request a Website Quote | Slashkode Melbourne" />
    <meta name="twitter:description"
        content="Custom website and web application quotes for Melbourne businesses. No pressure, no lock-in." />

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
                "name": "Quote",
                "item": "https://slashkode.com.au/quote"
            }
        ]
    }
    </script>

    <?php require_once('includes/stylesheets.php'); ?>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/start.css" />
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

                        <h1 class="heroheading">Let's scope out your project</h1>
                        <p class="start-hero-lead">
                            For RTO &amp; VET sites, custom web applications, e-commerce or anything
                            beyond the standard package — tell us what you're building and we'll
                            follow up with a tailored quote.
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
                            <?php $formMode = 'quote'; require_once('includes/sections/start-form.php'); ?>
                        </div>

                        <div id="startConfirm" class="start-confirm" hidden></div>

                    </div>

                    <p class="start-trust">No lock-in &middot; No cancellation fees &middot; No handover</p>

                    <p class="start-switch-link">
                        Think the $99 standard package covers it instead?
                        <a href="<?php echo BASE_PATH; ?>/start.php">Start here &rarr;</a>
                    </p>
                </div>
            </section>
            <?php $faqPage = 'home';
        require_once('includes/sections/faq.php'); ?>
            <?php require_once('includes/island.php'); ?>
        </div>
        <?php require_once('includes/footer.php'); ?>
    </main>
    <?php require_once('includes/customjs.php'); ?>

    <script src="<?php echo BASE_PATH; ?>/public/js/pages/start.js" defer></script>
</body>

</html>