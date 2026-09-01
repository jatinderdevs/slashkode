<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Web Applications Melbourne | Tailored Business Software | Slashkode</title>
    <meta name="description"
        content="Custom web applications and tailored CMS for Melbourne businesses. Admin dashboards, internal portals, workflow tools and secure systems built to fit how you actually work — not forced into a template." />
    <meta name="keywords" content="custom web application Melbourne, custom CMS Melbourne, business portal development, admin dashboard development, tailored web software Melbourne, custom CRM Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode | Jatinder Singh" />
    <link rel="canonical" href="https://slashkode.com.au/services/custom-web-applications" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Custom Web Applications Melbourne | Tailored Business Software | Slashkode" />
    <meta property="og:description" content="Custom web applications, admin dashboards and internal portals built in Melbourne for the way your business actually works." />
    <meta property="og:url" content="https://slashkode.com.au/services/custom-web-applications" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Custom Web Applications Melbourne | Slashkode" />
    <meta name="twitter:description" content="Tailored web applications, CMS and dashboards built around your processes — not the other way around." />

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
                                Custom Web Applications Built Around How Your Business Actually Works
                            </h1>
                            <p>
                                Off-the-shelf tools force you to change your process. We build the opposite —
                                tailored web applications, admin dashboards and internal portals that fit the way
                                your Melbourne business already runs, then make it faster and clearer.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <?php $portfolioPage = 'custom-apps';
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
                                Every custom application is designed, coded and delivered by me — no hand-offs,
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
                            <h3>Built for your process, not the other way around</h3>
                            <p class="available-desc">
                                No forced templates. No “close enough” SaaS tools. We map how your team actually
                                works, then build a clean, secure web application that supports those steps —
                                with an admin experience your staff can actually use.
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
            <section class="sk-expand-cards sk-container" aria-label="What you get with a custom web application">
                <div class="wd-section-header">
                    <span class="wd-section-label wd-reveal">Deliverables</span>
                    <h2 class="wd-reveal">What you get</h2>
                    <p class="wd-reveal">
                        Software that matches your workflow. Clean code. Room to grow.
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
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <path d="M3 9h18" />
                                    <path d="M9 21V9" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">Tailored Web Applications</h3>
                            <p class="sk-ec-desc">
                                Applications designed around your real processes — client portals, internal tools,
                                booking systems, approval workflows or industry-specific platforms. Built so your
                                team works faster, not harder.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="<?php echo BASE_PATH; ?>/public/img/mockups/aiitmockupsample.png"
                                alt="Custom web application interface example" />
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="sk-ec-card" data-index="1">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">Custom CMS &amp; Admin Dashboards</h3>
                            <p class="sk-ec-desc">
                                Intuitive admin areas that give you full control over content, users, data and
                                workflows — without the limitations of generic platforms. Clear permissions,
                                clean interfaces, and room to extend later.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                                alt="Custom CMS and admin dashboard" />
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="sk-ec-card" data-index="2">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">Secure User Systems &amp; Integrations</h3>
                            <p class="sk-ec-desc">
                                Role-based access, secure authentication, and connections to the tools you already
                                use — payment gateways, email services, existing databases or third-party APIs —
                                so everything works together cleanly.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                alt="Secure user management and integrations" />
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
                                        alt="Custom web application interface example" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                            <path d="M3 9h18" />
                                            <path d="M9 21V9" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">Tailored Web Applications</h3>
                                    <p class="sk-ec-desc">
                                        Applications built around your real processes — portals, internal tools,
                                        workflows and industry-specific platforms that make daily work clearer and faster.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                                        alt="Custom CMS and admin dashboard" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20h9" />
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">Custom CMS &amp; Admin Dashboards</h3>
                                    <p class="sk-ec-desc">
                                        Admin areas that give you real control over content, users and data —
                                        without the limits of generic platforms or confusing interfaces.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                        alt="Secure user management and integrations" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">Secure User Systems &amp; Integrations</h3>
                                    <p class="sk-ec-desc">
                                        Role-based access, secure logins, and clean connections to the tools and
                                        data sources you already rely on.
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
                <span class="sk-statement-eyebrow">/what clients say</span>
                <h2 class="testimonial-quote">
                    We finally have a system that matches how we actually work. Clear, fast, and built
                    exactly for our team — no more workarounds or forced processes.
                </h2>
                <div class="testimonial-author justify-content-center">
                    <div class="author-avatar">CL</div>
                    <div>
                        <div class="author-name">Client Lead</div>
                        <div class="author-role">Melbourne Business</div>
                    </div>
                </div>
            </section>

            <!-- Process -->
            <section class="sk-section">
                <div class="sk-container">
                    <div class="sk-header">
                        <h2 class="sk-header__title">How we build<br>your application</h2>
                        <div class="sk-header__right">
                            <p class="sk-header__sub">
                                Four clear steps. Requirements first. No surprises later.
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
                                <h3 class="sk-card__title">Discovery &amp; Requirements</h3>
                                <p class="sk-card__desc">
                                    We map your current process, pain points, user roles and must-have features
                                    so the application is shaped around real work — not assumptions.
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
                                <h3 class="sk-card__title">Architecture &amp; Design</h3>
                                <p class="sk-card__desc">
                                    Clear information architecture, user flows and interface design. You review
                                    the structure and key screens before any heavy development begins.
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
                                <h3 class="sk-card__title">Build, Test &amp; Iterate</h3>
                                <p class="sk-card__desc">
                                    Clean, maintainable code with regular check-ins. You see working versions early
                                    so feedback can shape the final product without expensive rework.
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
                                <h3 class="sk-card__title">Launch &amp; Support</h3>
                                <p class="sk-card__desc">
                                    Secure deployment, handover training for your team, and optional ongoing
                                    support for updates, new features or integrations as your needs grow.
                                </p>
                            </div>
                        </article>

                    </div>
                </div>
            </section>

            <?php $faqPage = 'custom-apps-service';
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
