<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Website Design & Development Melbourne | Slashkode</title>
    <meta name="description"
        content="Custom UI/UX design, fluid GSAP animations, and rock-solid SEO. Responsive websites built for Melbourne small businesses to scale — without the technical stress." />
    <meta name="keywords"
        content="custom website design Melbourne, responsive website design Melbourne, small business website design Melbourne, conversion focused web design" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <link rel="canonical" href="https://Slashkode.com.au/services/web-design-development" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Custom Website Design & Development Melbourne | Slashkode" />
    <meta property="og:description"
        content="Custom UI/UX design, fluid animations, and rock-solid SEO. Responsive websites built for Melbourne small businesses." />
    <meta property="og:url" content="https://Slashkode.com.au/services/web-design-development" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Custom Website Design & Development Melbourne | Slashkode" />
    <meta name="twitter:description"
        content="Custom UI/UX design and responsive builds for Melbourne small businesses." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Website Design & Development",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Slashkode",
            "url": "https://Slashkode.com.au",
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
        "description": "Custom website design and development for Melbourne businesses — responsive UI/UX, GSAP animation, and built-in technical SEO.",
        "serviceType": "Website Design & Development"
    }
    </script>

    <?php require_once('../includes/stylesheets.php'); ?>

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>public/css/services/web-design.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/whyusSection.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/process.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/bientoGrid.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/siteValue.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/marquee.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/inclusions.css" />

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
                            <a href="<?php echo BASE_PATH; ?>/services" class="breadcrumb-btn"> / Services</a>

                            <h1 class="heroheading">
                                Web Design & Development Built to Grow Your Melbourne Business
                            </h1>
                            <p>
                                We combine clean design, smooth animation, and solid SEO foundations
                                to turn your website into more enquiries — not just a prettier
                                version of what you had.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php require_once('../includes/sections/pricing-strip.php'); ?>

            <?php $portfolioPage = 'web-design';
            require_once('../includes/sections/portfolio.php'); ?>

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
                                        <p class="about-role">Founder &amp; Lead Developer, Slashkode</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                Every Slashkode project is designed, coded, and shipped personally by
                                Jatinder — no outsourcing, no junior hand-offs. Based in Melbourne,
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

            <section class="sk-container text-center">
                <span class="sk-statement-eyebrow">/what customer says</span>
                <h2 class="testimonial-quote">Working with them completely changed how we present our brand. Clear
                    thinking,
                    beautiful execution, and genuine care for results.</h2>
                <div class="testimonial-author justify-content-center">
                    <div class="author-avatar">EF</div>
                    <div>
                        <!-- TODO: this exact testimonial also appears on index.php — replace with a distinct real quote -->
                        <div class="author-name">Emily Foster</div>
                        <div class="author-role">Founder, Sarter</div>
                    </div>
                </div>
            </section>
        </div>
        <section class="site-value" aria-labelledby="site-value-title">
            <div class="site-value__inner">

                <!-- Left: The story -->
                <div class="site-value__story">
                    <span class="site-value__eyebrow">Why it matter</span>
                    <h2 id="site-value-title" class="site-value__title">
                        Customers decide long before they call
                    </h2>
                    <p class="site-value__lead">
                        In Melbourne, most people search first. They open a few sites, scan quickly, and move on from
                        anything that feels unfinished or unclear.
                    </p>
                    <p class="site-value__lead">
                        A clear website does more than look good. It answers the quiet questions they already have — so
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
                        <p class="outcome__text">Most people check on mobile — your site should feel natural there.</p>
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
        <section class="sk-section">
            <div class="sk-container">
                <div class="sk-header">
                    <h2 class="sk-header__title">How we build<br>your site</h2>
                    <div class="sk-header__right">
                        <p class="sk-header__sub">
                            Four clear steps. No surprises. You always know what's next.
                        </p>
                        <a href="<?php echo BASE_PATH; ?>/contact" class="sk-btn sk-btn-primary">
                            Get Started <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" class="img-fluid"
                                alt="" width="15" height="15" />
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
                            <h3 class="sk-card__title">Pay &amp; Share Your Details</h3>
                            <p class="sk-card__desc">
                                Pay the $99 to start, then tell us about your business: what your services are, and
                                any wording or media you already have.
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
                            <h3 class="sk-card__title">We Build Your Website</h3>
                            <p class="sk-card__desc">
                                We design and code your site from scratch, not from a template, with on-page SEO and
                                mobile-friendly layouts built in.
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
                            <h3 class="sk-card__title">You Review &amp; Approve</h3>
                            <p class="sk-card__desc">
                                Look through your new site and send us your feedback. We make the changes and check
                                everything works properly.
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
                            <h3 class="sk-card__title">Launch &amp; Ongoing Care</h3>
                            <p class="sk-card__desc">
                                We connect your domain (you own it) and take your site live. After that, hosting,
                                maintenance and your monthly update are taken care of.
                            </p>
                        </div>
                    </article>

                </div>
            </div>

        </section>

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
    <script src="<?php echo BASE_PATH; ?>/public/js/Inclusions.js" defer></script>

</body>

</html>