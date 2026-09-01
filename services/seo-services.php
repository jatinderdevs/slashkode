<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEO Services Melbourne | On-Page SEO & Website Audits | Slashkode</title>
    <meta name="description"
        content="On-page SEO and website audits in Melbourne. We build SEO into new sites from day one, and upgrade existing sites for speed, keywords, content and conversions — no monthly retainers required." />
    <meta name="keywords" content="SEO Melbourne, on-page SEO Melbourne, website SEO audit, technical SEO Melbourne, SEO website upgrade, conversion focused SEO, local SEO Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode | Jatinder Singh" />
    <link rel="canonical" href="https://slashkode.com.au/services/seo" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SEO Services Melbourne | On-Page SEO & Website Audits | Slashkode" />
    <meta property="og:description" content="SEO built into your website — or a deep audit and upgrade of what you already have. Speed, keywords, content and conversion focus. Melbourne based." />
    <meta property="og:url" content="https://slashkode.com.au/services/seo" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SEO Services Melbourne | Slashkode" />
    <meta name="twitter:description" content="On-page SEO and full website upgrades. No monthly plans — we fix the site so it can actually rank and convert." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "On-Page SEO & Website Audit Services",
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
        "description": "On-page SEO and website optimisation in Melbourne. SEO built into new websites from the start, plus deep audits and upgrades for existing sites — covering technical SEO, page speed, keyword targeting, content and conversion improvements.",
        "serviceType": "Search Engine Optimisation"
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
                                SEO Built Into Your Website — Not Bolted On Later
                            </h1>
                            <p>
                                We make websites that are ready to rank: clean structure, fast load times,
                                clear keywords and content that helps Google understand (and trust) your
                                business. Already have a site? We audit it deeply and upgrade what matters —
                                no monthly retainer required.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <?php $portfolioPage = 'seo';
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
                                SEO here is not a separate product sold as a monthly package. It is part of
                                how every site is built — and when we work on an existing site, the goal is
                                a lasting upgrade: faster pages, stronger structure, better content and
                                clearer conversion paths.
                            </p>
                        </div>
                        <div class="about-tags">
                            <span class="about-tag">On-Page SEO</span>
                            <span class="about-tag">Technical Audit</span>
                            <span class="about-tag">Page Speed</span>
                            <span class="about-tag">Content</span>
                        </div>
                    </article>

                    <!-- CTA -->
                    <article class="bento-card card-cta" data-animate>
                        <div class="servicebeinto">
                            <h3>Fix the site so it can rank and convert</h3>
                            <p class="available-desc">
                                No ongoing monthly SEO plans. We focus on the website itself — structure,
                                speed, keywords, content and conversion — so the foundation is strong enough
                                for rankings and for the brand image you want in Melbourne.
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
            <section class="sk-expand-cards sk-container" aria-label="What you get with SEO services">
                <div class="wd-section-header">
                    <span class="wd-section-label wd-reveal">Deliverables</span>
                    <h2 class="wd-reveal">What you get</h2>
                    <p class="wd-reveal">
                        Strong foundations. Clear keywords. Content and speed that help you rank.
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
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.35-4.35" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">SEO Built Into New Websites</h3>
                            <p class="sk-ec-desc">
                                When we design and develop a site, SEO is part of the build — not an extra.
                                Clean structure, proper headings, metadata, internal linking, fast load times
                                and content planned around the searches your customers actually make.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                                alt="SEO built into website from the start" />
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="sk-ec-card" data-index="1">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">Deep Audit &amp; Site Upgrade</h3>
                            <p class="sk-ec-desc">
                                Already have a website? We run a full technical and content audit, then upgrade
                                what holds you back: page speed, structure, missing keywords, thin content and
                                weak conversion paths — so the site can rank and convert better.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="<?php echo BASE_PATH; ?>/public/img/mockups/aiitmockupsample.png"
                                alt="Website SEO audit and upgrade" />
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="sk-ec-card" data-index="2">
                        <div class="sk-ec-content">
                            <div class="sk-ec-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                            </div>
                            <h3 class="sk-ec-title">Keywords, Content &amp; Brand Clarity</h3>
                            <p class="sk-ec-desc">
                                We identify the search terms that matter for your Melbourne audience, then
                                shape pages and content so they rank for those terms and present your brand
                                clearly — helpful, credible and easy for both people and search engines to trust.
                            </p>
                        </div>
                        <div class="sk-ec-image">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                alt="Keyword research and content for ranking" />
                        </div>
                    </div>

                </div>

                <!-- ========== MOBILE (swipe carousel) ========== -->
                <div class="sk-ec-mobile" id="skEcMobile">
                    <div class="sk-ec-track" id="skEcTrack">

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                                        alt="SEO built into website from the start" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8" />
                                            <path d="m21 21-4.35-4.35" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">SEO Built Into New Websites</h3>
                                    <p class="sk-ec-desc">
                                        Structure, metadata, speed and content planned from the start so your
                                        new site is ready to rank — not left for “later”.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="<?php echo BASE_PATH; ?>/public/img/mockups/aiitmockupsample.png"
                                        alt="Website SEO audit and upgrade" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                            <polyline points="14 2 14 8 20 8" />
                                            <line x1="16" y1="13" x2="8" y2="13" />
                                            <line x1="16" y1="17" x2="8" y2="17" />
                                            <polyline points="10 9 9 9 8 9" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">Deep Audit &amp; Site Upgrade</h3>
                                    <p class="sk-ec-desc">
                                        Full review of an existing site, then practical upgrades for speed,
                                        structure, keywords, content and conversion — lasting improvements,
                                        not a monthly package.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sk-ec-slide">
                            <div class="sk-ec-m-card">
                                <div class="sk-ec-m-image">
                                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                        alt="Keyword research and content for ranking" />
                                </div>
                                <div class="sk-ec-m-body">
                                    <div class="sk-ec-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20h9" />
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                        </svg>
                                    </div>
                                    <h3 class="sk-ec-title">Keywords, Content &amp; Brand Clarity</h3>
                                    <p class="sk-ec-desc">
                                        The right search terms for your audience, plus content that ranks and
                                        presents your brand clearly and professionally.
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
                    They didn’t sell us a monthly package. They fixed the site — speed, structure and
                    content — and we started seeing better rankings and clearer enquiries.
                </h2>
                <div class="testimonial-author justify-content-center">
                    <div class="author-avatar">MC</div>
                    <div>
                        <div class="author-name">Melbourne Client</div>
                        <div class="author-role">Local Business Owner</div>
                    </div>
                </div>
            </section>

            <!-- Process -->
            <section class="sk-section">
                <div class="sk-container">
                    <div class="sk-header">
                        <h2 class="sk-header__title">How we improve<br>your visibility</h2>
                        <div class="sk-header__right">
                            <p class="sk-header__sub">
                                Clear steps. Focus on the website itself. Results you can see and measure.
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
                                <h3 class="sk-card__title">Audit &amp; Keyword Review</h3>
                                <p class="sk-card__desc">
                                    Full technical and content check of your current site (or a clear plan for a
                                    new one), plus the search terms your Melbourne audience actually uses.
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
                                <h3 class="sk-card__title">Structure &amp; Speed Fixes</h3>
                                <p class="sk-card__desc">
                                    We fix the foundations: page speed, headings, metadata, internal links and
                                    technical issues that stop Google (and users) from trusting the site.
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
                                <h3 class="sk-card__title">Content &amp; Conversion Focus</h3>
                                <p class="sk-card__desc">
                                    Pages and copy shaped around real search intent, with clear paths to enquiry
                                    or contact — so rankings turn into actual business, not just traffic.
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
                                <h3 class="sk-card__title">Handover &amp; Clear Next Steps</h3>
                                <p class="sk-card__desc">
                                    You get a site that is ready to rank and convert, plus a simple summary of
                                    what was done and what (if anything) is worth watching going forward.
                                </p>
                            </div>
                        </article>

                    </div>
                </div>
            </section>

            <?php $faqPage = 'seo-service';
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
