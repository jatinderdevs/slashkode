<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Small Business Website Design Melbourne | $99 to Start</title>
    <meta name="description"
        content="Affordable website design for Melbourne small businesses. $99 to start, then $39 a fortnight with hosting included. No lock-in, no outsourcing." />
    <meta name="keywords"
        content="small business website design Melbourne, web design Melbourne small business, affordable website design Melbourne, affordable web design Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/services/web-design-development" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Small Business Website Design Melbourne | $99 to Start" />
    <meta property="og:description"
        content="Affordable website design for Melbourne small businesses. $99 to start, then $39 a fortnight. No lock-in." />
    <meta property="og:url" content="https://slashkode.com.au/services/web-design-development" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Small Business Website Design Melbourne | $99 to Start" />
    <meta name="twitter:description"
        content="Affordable website design for Melbourne small businesses. $99 to start, then $39 a fortnight." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Small Business Website Design",
        "provider": {
            "@type": "LocalBusiness",
            "name": "slashkode",
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
        "description": "Affordable, custom-built website design for Melbourne small businesses. Mobile responsive, SEO foundations built in, hosting and ongoing care included. $99 to start, then $39 a fortnight, no lock-in.",
        "serviceType": "Small business website design"
    }
    </script>

    <?php require_once('../includes/stylesheets.php'); ?>

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/web-design.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/whyusSection.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/process.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/bientoGrid.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/siteValue.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/marquee.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/inclusions.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/guides.css" />
</head>

<body class="wd-page">
    <main>
        <div class="container-fluid">
            <!-- ── Header (simplified island + desktop nav pattern) ── -->
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
                                <a href="<?php echo  BASE_PATH; ?>/" class="breadcrumb-btn"> / home</a>
                                <a href="<?php echo BASE_PATH; ?>/services/" class="breadcrumb-btn"> / Services</a>
                            </div>


                            <h1 class="heroheading">
                                Small Business Website Design in Melbourne
                            </h1>
                            <p>
                                Clean design and solid SEO foundations, built to turn your website into more enquiries,
                                not just a prettier version of what you had. $99 to start, no lock-in, and the person
                                you talk to is the person who builds it.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('../includes/sections/pricing-strip.php'); ?>


            <?php $portfolioPage = 'web-design';
            require_once('../includes/sections/portfolio.php'); ?>
            <!-- ════════════════════════════════════
             SECTION 2 — Intro + who we build for
             Primary: small business website design Melbourne
             Secondary: affordable website design / web design Melbourne
        ════════════════════════════════════ -->
            <section class="wd-intro" aria-labelledby="wd-intro-title">
                <div class="sk-container wd-intro__inner">
                    <div class="wd-intro__story">
                        <span class="wd-intro__eyebrow">/small business websites</span>
                        <h2 id="wd-intro-title" class="wd-intro__title">
                            Affordable website design for Melbourne small businesses
                        </h2>
                        <p>
                            Most small businesses don't need a 40-page website. They need one that looks the part,
                            loads quickly on a phone, and makes it easy for someone to call, book or ask for a quote.
                            That's the kind of small business website design we do here in Melbourne.
                        </p>
                        <p>
                            There's no account manager in the middle. Jatinder designs and builds every site
                            personally, so the person you first talk to is the same person who launches it and looks
                            after it afterwards. <a href="<?php echo BASE_PATH; ?>/about">Read a bit about us</a>.
                        </p>
                        <p>
                            Affordable shouldn't mean cheap-looking. You pay $99 to get started, then $39 a fortnight
                            once you're live, which covers hosting, updates and ongoing care, with no lock-in. SEO
                            basics are built in from day one, so Google understands your site from launch
                            (<a href="<?php echo BASE_PATH; ?>/services/seo-services">here's how SEO fits in</a>).
                        </p>
                    </div>

                    <aside class="wd-intro__who" aria-labelledby="wd-who-title">
                        <h3 id="wd-who-title" class="wd-intro__who-title">Who we build websites for</h3>
                        <ul class="wd-intro__list">
                            <li>
                                <span class="wd-intro__num" aria-hidden="true">01</span>
                                <div>
                                    <strong>Trades and local services</strong>
                                    <p>Removalists, cleaners, electricians and anyone whose next job starts with a
                                        Google search.</p>
                                </div>
                            </li>
                            <li>
                                <span class="wd-intro__num" aria-hidden="true">02</span>
                                <div>
                                    <strong>Clinics, studios and shopfronts</strong>
                                    <p>Small teams that want to look established and make booking or enquiring
                                        simple.</p>
                                </div>
                            </li>
                            <li>
                                <span class="wd-intro__num" aria-hidden="true">03</span>
                                <div>
                                    <strong>Training colleges</strong>
                                    <p>Running an RTO? We have a dedicated page for
                                        <a href="<?php echo BASE_PATH; ?>/services/rto-vet-colleges-website">RTO and
                                            VET college websites</a>.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="wd-intro__num" aria-hidden="true">04</span>
                                <div>
                                    <strong>Migration agents</strong>
                                    <p>Registered agents and immigration practices have their own page for
                                        <a href="<?php echo BASE_PATH; ?>/services/migration-agent-websites">migration
                                            agent website design</a>.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="wd-intro__num" aria-hidden="true">05</span>
                                <div>
                                    <strong>Need more than a website?</strong>
                                    <p>Portals, booking systems and admin dashboards sit under
                                        <a href="<?php echo BASE_PATH; ?>/services/custom-web-applications">custom web
                                            applications</a>.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
            </section>

            <!-- about us -->
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
                                Every project is designed, coded, and shipped personally by
                                Jatinder - no outsourcing, no junior hand-offs. Based in Melbourne,
                                working with local businesses who want a site that actually performs.
                            </p>
                        </div>
                        <div class="about-tags">
                            <span class="about-tag">Design</span>
                            <span class="about-tag">Development</span>
                            <span class="about-tag">SEO</span>
                            <span class="about-tag">CMS</span>
                        </div>
                    </article>

                    <!-- CTA -->
                    <article class="bento-card card-cta" data-animate>
                        <div class="servicebeinto">
                            <h3>We build it, we design it, we stand behind it</h3>
                            <p class="available-desc">
                                No hand-offs between departments, no template dressed up as custom
                                work. We design, build, and launch every project ourselves — using
                                modern, fast code instead of a drag-and-drop builder — so what you
                                get is exactly what was promised.
                            </p>
                            <div class="marquee-wrap">
                                <div class="marquee-track service_beinto_imgs">
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/nodejs.png" alt="Node.js"
                                            loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/mysql.png" alt="MySQL"
                                            loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/php.png" alt="PHP"
                                            loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/mongodb.png" alt="MongoDB"
                                            loading="lazy" />
                                    </div>
                                    <div class="marquee-logo">
                                        <img src="<?php echo BASE_PATH; ?>/public/icons/html.png" alt="HTML"
                                            loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <?php require_once('../includes/sections/inclusions.php'); ?>

            <!-- GOOGLE REVIEWS SECTION: add here once real Google reviews are ready (replaces the old placeholder testimonial) -->
        </div>
        <section class="site-value" aria-labelledby="site-value-title">
            <div class="site-value__inner">

                <!-- Left: The story -->
                <div class="site-value__story">
                    <span class="site-value__eyebrow">Why it matters</span>
                    <h2 id="site-value-title" class="site-value__title">
                        Customers decide long before they call
                    </h2>
                    <p class="site-value__lead">
                        Most people search first, before buying service or product.
                    </p>
                    <p class="site-value__lead">
                        A clear website does more than look good. It answers the quiet questions they already have - so
                        by the time they reach out, they already trust you.
                    </p>
                    <p class="site-value__closer">
                        It turns “I’ll keep looking” into “this feels right.”
                    </p>
                </div>

                <!-- Right: Concrete outcomes -->
                <div class="site-value__outcomes">

                    <article class="outcome">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5" />
                                <path d="M2 12l10 5 10-5" />
                            </svg>
                        </div>
                        <h3 class="outcome__title">Look established</h3>
                        <p class="outcome__text">Present as the reliable choice, even if you’re a small local team.</p>
                    </article>

                    <article class="outcome">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                        </div>
                        <h3 class="outcome__title">Build trust early</h3>
                        <p class="outcome__text">People feel confident before they ever pick up the phone.</p>
                    </article>

                    <article class="outcome">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 9h18" />
                                <path d="M9 21V9" />
                            </svg>
                        </div>
                        <h3 class="outcome__title">Show every service</h3>
                        <p class="outcome__text">Make it obvious what you do so the right customers stay.</p>
                    </article>

                    <article class="outcome">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                                <circle cx="12" cy="13" r="4" />
                            </svg>
                        </div>
                        <h3 class="outcome__title">Display real work</h3>
                        <p class="outcome__text">Photos of completed jobs remove the last bit of doubt.</p>
                    </article>

                    <article class="outcome">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <h3 class="outcome__title">Make enquiries easy</h3>
                        <p class="outcome__text">Clear forms and calls-to-action so interest doesn’t fade.</p>
                    </article>

                    <article class="outcome">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <rect x="5" y="2" width="14" height="20" rx="2" />
                                <line x1="12" y1="18" x2="12.01" y2="18" />
                            </svg>
                        </div>
                        <h3 class="outcome__title">Work on every phone</h3>
                        <p class="outcome__text">Most people check on mobile - your site should feel natural there.</p>
                    </article>

                    <article class="outcome outcome--wide">
                        <div class="outcome__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                                <line x1="9" y1="9" x2="9.01" y2="9" />
                                <line x1="15" y1="9" x2="15.01" y2="9" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="outcome__title">Give them confidence before they reach out</h3>
                            <p class="outcome__text">When everything is clear and professional, the conversation starts
                                warmer and moves faster.</p>
                        </div>
                    </article>

                </div>
            </div>
        </section>
        <?php require_once('../includes/sections/process.php'); ?>



        <?php $guidesPage = 'web-design';
        require_once('../includes/sections/guides.php'); ?>


        <?php $faqPage = 'website-service';
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
    <script src="<?php echo BASE_PATH; ?>/public/js/marquee.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/inclusions.js" defer></script>

</body>

</html>