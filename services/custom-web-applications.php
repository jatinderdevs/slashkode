<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Web Applications Melbourne | Tailored Business Software | Slashkode</title>
    <meta name="description"
        content="Custom web applications and tailored CMS for Melbourne businesses. Admin dashboards, internal portals, workflow tools and secure systems built to fit how you actually work — not forced into a template." />
    <meta name="keywords"
        content="custom web application development Melbourne, custom CMS Melbourne, admin dashboard development Melbourne, internal business portal development" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/services/custom-web-applications" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Custom Web Applications Melbourne | Tailored Business Software | Slashkode" />
    <meta property="og:description"
        content="Custom web applications, admin dashboards and internal portals built in Melbourne for the way your business actually works." />
    <meta property="og:url" content="https://slashkode.com.au/services/custom-web-applications" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Custom Web Applications Melbourne | Slashkode" />
    <meta name="twitter:description"
        content="Tailored web applications, CMS and dashboards built around your processes — not the other way around." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Custom Web Applications",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Slashkode",
            "url": "https://slashkode.com.au",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Melbourne",
                "addressRegion": "VIC",
                "addressCountry": "AU"
            }
        },
        "areaServed": {
            "@type": "City",
            "name": "Melbourne"
        },
        "description": "Custom web application development in Melbourne. Tailored CMS platforms, admin dashboards, internal business portals, workflow tools and secure user systems designed around real business processes.",
        "serviceType": "Custom Software Development"
    }
    </script>

    <?php require_once('../includes/stylesheets.php'); ?>

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>public/css/services/web-design.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/whyusSection.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/process.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/bientoGrid.css" />

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/cta.css" />

</head>

<body class="wd-page">
    <main>
        <div class="container-fluid">
            <!-- ── Header ── -->
            <?php require_once('../includes/navbar.php'); ?>

            <!-- ════════════════════════════════════
             SECTION 1 — Hero
        ════════════════════════════════════ -->
            <section class="wd-hero">
                <div class="sk-container">
                    <div class="text-container">
                        <!-- ── Breadcrumb ── -->
                        <div>
                            <div class="flexBreadcrumb">
                                <a href="<?php echo BASE_PATH; ?>/services" class="breadcrumb-btn"> / home</a>
                                <a href="<?php echo BASE_PATH; ?>/services" class="breadcrumb-btn"> / Services</a>
                            </div>

                            <h1 class="heroheading">
                                Custom Web Applications Built Around How Your Business Actually Works

                            </h1>
                            <p>
                                We build software made specifically for your business - not a generic tool you have to
                                adjust to. We start by learning how your team actually works, then build something
                                around that, so things get done faster and with less hassle.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <?php $portfolioPage = 'custom-apps';
            require_once('../includes/sections/portfolio.php'); ?>

            <!-- about us / why us bento -->
            <section class="sk-container p-0">
                <div class="bento-grid">
                    <!-- About Me -->
                    <article class="bento-card card-about" data-animate>
                        <div>
                            <div class="row align-items-center no-gutters">
                                <div class="col-sm-3">
                                    <div class="about-avatar">
                                        <img src="<?php echo BASE_PATH; ?>public/img/js.jpg" class="img-fluid"
                                            alt="Jatinder Singh, Founder of Slashkode" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h3 class="about-name">JATINDER SINGH</h3>
                                        <p class="about-role">Founder &amp; Lead Developer, Slashkode</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                Every custom application is designed, coded and delivered by me - no hand-offs,
                                no junior developers guessing at your requirements. Based in Melbourne, working
                                directly with local businesses that need software that fits, not software they
                                have to fight.
                            </p>
                        </div>
                        <div class="about-tags">
                            <span class="about-tag">Custom CMS</span>
                            <span class="about-tag">Dashboards</span>
                            <span class="about-tag">Portals</span>
                            <span class="about-tag">Workflows</span>
                        </div>
                    </article>

                    <!-- CTA -->
                    <article class="bento-card card-cta" data-animate>
                        <div class="servicebeinto">
                            <h3>Not sure exactly what you need? That's normal.</h3>
                            <p class="available-desc">
                                Most people don't come to me with a finished spec - just a problem they're tired of
                                dealing with. We talk it through together, and I'll tell you honestly if a custom build
                                is the right fit, or if something simpler would do the job.
                            </p>
                            <a href="" class="sk-btn sk-btn-secondary"> Let's Talk <img
                                    src="/Slashkode//public/icons/top-right.png" class="img-fluid" alt="" width="15"
                                    height="15"><span></span></a>
                        </div>
                    </article>
                </div>
            </section>

            <?php $deliverablesPage = 'custom-apps';
                require_once('../includes/sections/deliverables.php'); ?>
        </div>
        <?php $ctaPage = 'custom-apps';
        require_once('../includes/sections/cta.php'); ?>

        <!-- Testimonial -->
        <section class="sk-container text-center">
            <span class="sk-statement-eyebrow">/what clients say</span>
            <h2 class="testimonial-quote">
                We finally have a system that matches how we actually work. Clear, fast, and built
                exactly for our team - no more workarounds or forced processes.
            </h2>
            <div class="testimonial-author justify-content-center">
                <div class="author-avatar">CL</div>
                <div>
                    <!-- TODO: replace with a real client name/business once available -->
                    <div class="author-name">Client Lead</div>
                    <div class="author-role">Melbourne Business</div>
                </div>
            </div>
        </section>

        <?php require_once('../includes/sections/process.php'); ?>


        <?php $faqPage = 'custom-apps-service';
        require_once('../includes/sections/faq.php'); ?>

        <?php require_once('../includes/island.php'); ?>

        <?php require_once('../includes/footer.php'); ?>

    </main>

    <!-- GSAP + ScrollTrigger -->
    <?php require_once('../includes/customjs.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js" defer></script>

    <script src="<?php echo BASE_PATH; ?>/public/js/services/web-design.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/whyusSection.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/process.js" defer></script>


    <script src="<?php echo BASE_PATH; ?>/public/js/cta.js" defer></script>
</body>

</html>