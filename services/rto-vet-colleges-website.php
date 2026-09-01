<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RTO & VET College Website Design Melbourne | ASQA Compliant | Slashkode</title>
    <meta name="description"
        content="ASQA-compliant RTO and VET college websites built in Melbourne. Course catalogues, enrolment forms, student information and SEO that actually bring enquiries — not just a pretty site." />
    <meta name="keywords" content="RTO website design Melbourne, VET college website, ASQA compliant website, CRICOS website design, Registered Training Organisation website, VET SEO Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode | Jatinder Singh" />
    <link rel="canonical" href="https://slashkode.com.au/services/rto-vet-colleges-website" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RTO & VET College Website Design Melbourne | ASQA Compliant | Slashkode" />
    <meta property="og:description" content="ASQA-compliant websites for RTOs and VET colleges in Melbourne. Built for compliance, student enrolment journeys and real Google rankings." />
    <meta property="og:url" content="https://slashkode.com.au/services/rto-vet-colleges-website" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="RTO & VET College Website Design Melbourne | Slashkode" />
    <meta name="twitter:description" content="ASQA-compliant RTO websites built in Melbourne. Compliance, course pages, enrolment forms and VET-focused SEO." />

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
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/marquee.css" />

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
                            <a href="<?php echo BASE_PATH; ?>/services.php" class="breadcrumb-btn"> / Services</a>

                            <h1 class="heroheading">
                                RTO &amp; VET College Websites Built for ASQA Compliance &amp; Enrolments
                            </h1>
                            <p>
                                Websites for Registered Training Organisations and VET colleges in Melbourne that meet
                                ASQA requirements, guide students clearly, and turn search traffic into real enrolment
                                enquiries — not just another brochure site.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

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
                                        <img src="public/img/js.jpg" class="img-fluid" alt="Jatinder Singh, Founder of Slashkode" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h3 class="about-name">JATINDER SINGH</h3>
                                        <p class="about-role">Founder &amp; Lead Developer, SLASHKODE</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                I have spent years working inside the VET industry in Melbourne. That means every
                                RTO website I build already understands ASQA obligations, student decision journeys,
                                and what actually needs to be on the site — not just what looks modern.
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
                            <div class="marquee-wrap">
                                <div class="marquee-track service_beinto_imgs">
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/nodejs.png" alt="Node.js" loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/mysql.png" alt="MySQL" loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/php.png" alt="PHP" loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/mongodb.png" alt="MongoDB" loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/html.png" alt="HTML" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Deliverables / What you get -->
            <section class="sk-expand-cards sk-container" aria-label="What you get with an RTO website">
                <div class="wd-section-header">
                    <span class="wd-section-label wd-reveal">Deliverables</span>
                    <h2 class="wd-reveal">What you get</h2>
                    <p class="wd-reveal">
                        Compliance-ready structure. Clear student journeys. Pages that convert enquiries.
                    </p>
                </div>

                <!-- ========== DESKTOP (hover expand) ========== -->
                <div class="sk-ec-desktop" id="skEcDesktop">

                    <!-- Card 1 – starts expanded -->
                    <div class="sk-ec-card is-active" data-index="0">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 11l3 3L22 4" />
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">ASQA-Compliant Site Structure</h3>
                            <p class="sk-ec-desc">
                                RTO code, scope of registration, fees and charges, refund policy, complaints &amp;
                                appeals, USI information and student rights are built into the site from day one —
                                not added later as an afterthought.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="<?php echo BASE_PATH; ?>/public/img/mockups/aiitmockupsample.png"
                                alt="ASQA compliant RTO website structure" />
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="sk-ec-card" data-index="1">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">Course Catalogue &amp; Landing Pages</h3>
                            <p class="sk-ec-desc">
                                Individual pages for each qualification with clear entry requirements, outcomes,
                                fees and enrolment CTAs. Structured so students and Google both understand exactly
                                what you offer.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                                alt="RTO course catalogue and landing pages" />
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="sk-ec-card" data-index="2">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.35-4.35" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">VET-Focused SEO Foundations</h3>
                            <p class="sk-ec-desc">
                                On-page SEO built around how students actually search: “Certificate III aged care
                                Melbourne”, “RTO business courses Victoria”, funded training terms and local
                                intent keywords that bring the right enquiries.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                alt="VET SEO and student search visibility" />
                        </div>
                    </div>

                </div>

                <!-- ========== MOBILE (swipe carousel) ========== -->
                <div class="sk-ec-mobile" id="skEcMobile">
                    <div class="sk-ec-track" id="skEcTrack">

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="<?php echo BASE_PATH; ?>/public/img/mockups/aiitmockupsample.png"
                                        alt="ASQA compliant RTO website structure" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 11l3 3L22 4" />
                                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">ASQA-Compliant Site Structure</h3>
                                    <p class="sk-ec-desc">
                                        RTO code, scope, fees, refunds, complaints process and USI information
                                        built into the site from the start — ready for audit and student trust.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                                        alt="RTO course catalogue and landing pages" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">Course Catalogue &amp; Landing Pages</h3>
                                    <p class="sk-ec-desc">
                                        Clear course pages with entry requirements, outcomes, fees and strong
                                        enrolment calls to action — written for both students and search engines.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                        alt="VET SEO and student search visibility" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8" />
                                            <path d="m21 21-4.35-4.35" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">VET-Focused SEO Foundations</h3>
                                    <p class="sk-ec-desc">
                                        Keyword research and on-page structure aimed at how students search for
                                        courses in Melbourne and Victoria — so the right people find you.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="sk-ec-dots" id="skEcDots">
                    <button class="is-active" data-index="0" aria-label="Slide 1"></button>
                    <button data-index="1" aria-label="Slide 2"></button>
                    <button data-index="2" aria-label="Slide 3"></button>
                </div>
            </section>

            <!-- Testimonial -->
            <section class="sk-container text-center">
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
            </section>

            <!-- Process -->
            <section class="sk-section">
                <div class="sk-container">
                    <div class="sk-header">
                        <h2 class="sk-header__title">How we build<br>your RTO website</h2>
                        <div class="sk-header__right">
                            <p class="sk-header__sub">
                                Four clear steps. Compliance and conversion planned from the start.
                            </p>
                            <a href="/contact" class="sk-btn sk-btn-primary">
                                Get Started <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" class="img-fluid"
                                    alt="" width="15px" height="15px" />
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="sk-cards">

                        <!-- Card 01 -->
                        <article class="sk-card">
                            <div class="sk-card__fill" aria-hidden="true"></div>
                            <div class="sk-card__inner">
                                <span class="sk-card__num">01</span>
                                <div class="sk-card__icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="3" />
                                        <path
                                            d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                                    </svg>
                                </div>
                                <h3 class="sk-card__title">Discovery &amp; Compliance Review</h3>
                                <p class="sk-card__desc">
                                    We map your courses, scope of registration, student journeys and current
                                    compliance gaps so the new site starts from a solid foundation.
                                </p>
                            </div>
                        </article>

                        <!-- Card 02 -->
                        <article class="sk-card">
                            <div class="sk-card__fill" aria-hidden="true"></div>
                            <div class="sk-card__inner">
                                <span class="sk-card__num">02</span>
                                <div class="sk-card__icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M4 17l6-6 4 4 6-6" />
                                        <path d="M14 7h6v6" />
                                    </svg>
                                </div>
                                <h3 class="sk-card__title">Structure &amp; Content Plan</h3>
                                <p class="sk-card__desc">
                                    Site map, required pages, course page templates and SEO keyword plan built
                                    around how students search and how ASQA expects information to be shown.
                                </p>
                            </div>
                        </article>

                        <!-- Card 03 -->
                        <article class="sk-card">
                            <div class="sk-card__fill" aria-hidden="true"></div>
                            <div class="sk-card__inner">
                                <span class="sk-card__num">03</span>
                                <div class="sk-card__icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M9 11l3 3L22 4" />
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                                    </svg>
                                </div>
                                <h3 class="sk-card__title">Design, Build &amp; Testing</h3>
                                <p class="sk-card__desc">
                                    Custom design, clean code, mobile-first layouts and full checks for
                                    responsiveness, speed, accessibility and ASQA information presence.
                                </p>
                            </div>
                        </article>

                        <!-- Card 04 -->
                        <article class="sk-card">
                            <div class="sk-card__fill" aria-hidden="true"></div>
                            <div class="sk-card__inner">
                                <span class="sk-card__num">04</span>
                                <div class="sk-card__icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </div>
                                <h3 class="sk-card__title">Launch &amp; Handover</h3>
                                <p class="sk-card__desc">
                                    Go-live support, CMS training for course updates, and optional ongoing help
                                    for scope changes, new qualifications and re-registration cycles.
                                </p>
                            </div>
                        </article>

                    </div>
                </div>
            </section>

            <?php $faqPage = 'rto-vet-service';
            require_once('../includes/sections/faq.php'); ?>

            <?php require_once('../includes/island.php'); ?>

            <?php require_once('../includes/footer.php'); ?>
        </div>
    </main>

    <!-- GSAP + ScrollTrigger -->
    <?php require_once('../includes/customjs.php'); ?>

    <script src="https://assets.codepen.io/16327/ScrollSmoother.min.js"></script>

    <script src="<?php echo BASE_PATH; ?>/public/js/services/web-design.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/whyusSection.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/process.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/marquee.js"></script>

</body>

</html>
