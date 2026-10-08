<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RTO & VET College Website Design Melbourne | ASQA Compliant | Slashkode</title>
    <meta name="description"
        content="ASQA-compliant RTO and VET college websites built in Melbourne. Course catalogues, enrolment forms, student information and SEO that actually bring enquiries — not just a pretty site." />
    <meta name="keywords"
        content="RTO website design Melbourne, VET college website Melbourne, ASQA compliant website, CRICOS website design, Registered Training Organisation website developer, RTO enrolment website" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/services/rto-vet-colleges-website" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RTO & VET College Website Design Melbourne | ASQA Compliant | Slashkode" />
    <meta property="og:description"
        content="ASQA-compliant websites for RTOs and VET colleges in Melbourne. Built for compliance, student enrolment journeys and real Google rankings." />
    <meta property="og:url" content="https://slashkode.com.au/services/rto-vet-colleges-website" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="RTO & VET College Website Design Melbourne | Slashkode" />
    <meta name="twitter:description"
        content="ASQA-compliant RTO websites built in Melbourne. Compliance, course pages, enrolment forms and VET-focused SEO." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "RTO & VET College Website Design",
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
        "description": "Custom ASQA-compliant website design and development for Registered Training Organisations and VET colleges in Melbourne. Includes course catalogues, enrolment systems, student information pages and VET-specific SEO.",
        "serviceType": "Website Design & Development"
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
                                <a href="<?php echo BASE_PATH; ?>/index" class="breadcrumb-btn"> / home</a>
                                <a href="<?php echo BASE_PATH; ?>/services" class="breadcrumb-btn"> / Services</a>
                            </div>

                            <h1 class="heroheading">
                                RTO &amp; VET College Websites Built for ASQA Compliance &amp; Enrolments
                            </h1>
                            <p>
                                Websites for Registered Training Organisations and VET colleges in Australia that meet
                                ASQA requirements, guide students clearly, and turn search traffic into real enrolment
                                enquiries - not just another brochure site.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('../includes/sections/pricing-strip.php'); ?>

            <?php $portfolioPage = 'rto-vet';
            require_once('../includes/sections/portfolio.php'); ?>

            <!-- about us / why us bento -->
            <section class="sk-container">
                <div class="bento-grid">
                    <!-- About Me -->
                    <article class="bento-card card-about" data-animate>
                        <div>
                            <div class="row align-items-center no-gutters">
                                <div class="col-sm-3">
                                    <div class="about-avatar">
                                        <img src="<?php echo BASE_PATH; ?>/public/img/js.jpg" class="img-fluid"
                                            alt="Jatinder Singh, Founder of Slashkode" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h3 class="about-name">JATINDER SINGH</h3>
                                        <p class="about-role">Founder &amp; Developer, Slashkode</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                I have spent years working inside the VET industry in Melbourne. That means every
                                RTO website I build already understands ASQA obligations, student decision journeys,
                                and what actually needs to be on the site - not just what looks modern.
                            </p>
                        </div>
                        <div class="about-tags">
                            <span class="about-tag">ASQA Compliance</span>
                            <span class="about-tag">VET Industry</span>
                            <span class="about-tag">Course Pages</span>
                            <span class="about-tag">Enrolment SEO</span>
                        </div>
                    </article>

                    <!-- CTA -->
                    <article class="bento-card card-cta" data-animate>
                        <div class="servicebeinto">
                            <h3>Built by someone who understands RTOs</h3>
                            <p class="available-desc">
                                No generic agency templates. No junior developers guessing at compliance.
                                Every page is planned around ASQA requirements, student information standards,
                                and the way prospective students actually search and enrol.
                            </p>

                        </div>
                    </article>
                </div>
            </section>
        </div>
        <?php $ctaPage = 'rto'; require_once('../includes/sections/cta.php'); ?>
        <div class="container-fluid">


            <?php $deliverablesPage = 'rto-deliver';
            require_once('../includes/sections/deliverables.php');  ?>

            <!-- Testimonial -->
            <!-- <section class="sk-container text-center">
                <span class="sk-statement-eyebrow">/what RTO clients say</span>
                <h2 class="testimonial-quote">
                    Finally a developer who understands ASQA requirements and student enrolment journeys.
                    The new site is clear, compliant and already bringing better quality enquiries.
                </h2>
                <div class="testimonial-author justify-content-center">
                    <div class="author-avatar">RTO</div>
                    <div>
                        
                        <div class="author-name">RTO Director</div>
                        <div class="author-role">Melbourne Registered Training Organisation</div>
                    </div>
                </div>
            </section> -->
        </div>

        <?php require_once('../includes/sections/process.php'); ?>

        <div class="container-fluid">
            <?php $faqPage = 'rto-vet-service';
            require_once('../includes/sections/faq.php'); ?>

            <?php require_once('../includes/island.php'); ?>


        </div>
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