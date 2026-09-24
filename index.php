<?php require_once __DIR__ . '/config.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Melbourne web design & development studio building fast, conversion-focused sites for businesses and RTOs. SEO built in from day one">
    <meta name="keywords"
        content="web design Melbourne, website development Melbourne, SEO Melbourne, RTO website design, custom web applications Melbourne, VET college website, Melbourne web developer" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <meta name="theme-color" content="#0f172a" />
    <link rel="canonical" href="https://slashkode.com.au/" />
    <title>slashkode | Web Design & Development, Melbourne</title>
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="slashkode | Web Design & Development, Melbourne" />
    <meta property="og:description"
        content="Melbourne web design & development studio building fast, conversion-focused sites for businesses and RTOs. SEO built in from day one." />
    <meta property="og:url" content="https://slashkode.com.au/" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />
    <meta property="og:image" content="<?php echo BASE_URL; ?>/public/img/mockups/aiitmockupsample.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="slashkode | Web Design & Development, Melbourne" />
    <meta name="twitter:description"
        content="Melbourne web design & development studio building fast, conversion-focused sites for businesses and RTOs." />
    <meta name="twitter:image" content="<?php echo BASE_URL; ?>/public/img/mockups/aiitmockupsample.png" />

    <!-- Schema.org: LocalBusiness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "slashkode",
        "image": "<?php echo BASE_URL; ?>/public/img/logo.png",
        "url": "https://slashkode.com.au/",
        "telephone": "+61499167608",
        "email": "info@slashkode.com.au",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Melbourne",
            "addressRegion": "VIC",
            "addressCountry": "AU"
        },
        "areaServed": {
            "@type": "City",
            "name": "Melbourne"
        },
        "founder": {
            "@type": "Person",
            "name": "Jatinder Singh"
        },
        "makesOffer": [{
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Website Design & Development"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Search Engine Optimisation (SEO)"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "RTO and VET Colleges Website"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Custom Web Applications"
                }
            }
        ]
    }
    </script>
    <?php require_once('includes/stylesheets.php'); ?>

    <link rel="stylesheet" href="public/css/servicesSection.css" />
    <link rel="stylesheet" href="public/css/bientoGrid.css" />
    <link rel="stylesheet" href="public/css/cta.css" />
    <link rel="stylesheet" href="public/css/marquee.css" />
    <!-- Preconnect: speeds up the external script/font hosts used on this page -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />
    <link rel="preconnect" href="https://unpkg.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.4/dist/dotlottie-wc.js" type="module"></script>
</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php'); ?>

            <section class="hero">
                <div class="sk-container">
                    <h1 class="heroheading">
                        Minimum cost, maximum results. We make it happen.
                    </h1>
                    <p>
                        We design and build professional websites for Melbourne small businesses, Migration agencies,
                        RTO and VET colleges and service based business.


                    </p>

                    <div class="mag-zone">
                        <a href="work.php" class="btn herobtnPrimary">See the work &nbsp;
                            <dotlottie-wc
                                src="https://lottie.host/3c7a293d-42c4-4658-a8db-6f2e4bfef31c/UY9L97Lncp.lottie"
                                style="width: 30px; height: 30px" autoplay loop></dotlottie-wc>
                        </a>
                    </div>

                    <div class="mag-zone">
                        <a href="contact" class="btn herobtnSec">About
                            <dotlottie-wc
                                src="https://lottie.host/71c80212-4aaf-402d-8583-480cda67cd87/noiOV1yXZQ.lottie"
                                style="width: 30px; height: 30px" autoplay loop></dotlottie-wc>
                        </a>
                    </div>
                </div>

            </section>
            <section class="sk-marquee-section" aria-label="Trusted by Melbourne businesses">
                <div class="sk-container">
                    <p class="sk-statement-eyebrow">/ trusted by</p>
                </div>

                <div class="marquee-wrap">
                    <div class="marquee-track">
                        <div class="marquee-logo">
                            <img src="public/img/logos/aiit.png" alt="AIIT" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/bit.png" alt="BIT" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/cornell.png" alt="Cornell" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/dalavoro.png" alt="Dalavoro" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/yara.png" alt="Yara" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/aiit.png" alt="AIIT" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/bit.png" alt="BIT" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/cornell.png" alt="Cornell" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/ist.svg" alt="IST" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/sit.png" alt="SIT" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/cornell.png" alt="Cornell" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/dalavoro.png" alt="Dalavoro" loading="lazy" />
                        </div>

                        <div class="marquee-logo">
                            <img src="public/img/logos/yara.png" alt="Yara" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/ist.svg" alt="IST" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/sit.png" alt="SIT" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/yara.png" alt="Yara" loading="lazy" />
                        </div>
                        <div class="marquee-logo">
                            <img src="public/img/logos/dalavoro.png" alt="Dalavoro" loading="lazy" />
                        </div>
                    </div>
                </div>
            </section>

            <?php require_once('includes/sections/pricing-strip.php'); ?>

            <?php $portfolioPage = 'home';
            require_once('includes/sections/portfolio.php'); ?>
        </div>

        <section class="skills-section" aria-label="What I am good at">
            <div class="skills-container">
                <!-- Left: expandable list -->
                <div class="skills-list" role="list">
                    <div class="skill-item" role="listitem">
                        <a href="<?php echo BASE_PATH; ?>/services/web-design-development.php"
                            class="skill-trigger hover-link" data-img="public/img/mockups/aiitmockupsample.png">
                            <span class="skill-label">Website Design & Development

                            </span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span>

                        </a>



                        <a href="<?php echo BASE_PATH; ?>/services/seo-services.php" class="skill-trigger hover-link"
                            data-img="public/img/seo.png">
                            <span class="skill-label">Search Engine Optimise (SEO)</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>

                        <a href="<?php echo BASE_PATH; ?>/services/rto-vet-colleges-website.php"
                            class="skill-trigger hover-link" data-img="public/img/mockups/bit.png">
                            <span class="skill-label">RTO and VET Colleges Website</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>

                        <a href="<?php echo BASE_PATH; ?>/services/custom-web-applications.php"
                            class="skill-trigger hover-link" data-img="public/img/mockups/rtocommissions.png">
                            <span class="skill-label">Custom web Applications</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>
                        <div class="cursor-img"></div>
                    </div>
                </div>

                <!-- Right: big title -->
                <div class="skills-heading-wrap">
                    <span class="sk-statement-eyebrow">/Services</span>
                    <h2 class="skills-heading headingeffect">
                        What we are
                        good at
                    </h2>
                    <p>Four things, done properly — not ten things done half-heartedly.</p>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <section class="sk-container">
                <div class="about-grid-header">
                    <span class="sk-statement-eyebrow">/About</span>
                    <h2 class="about-grid-title headingeffect">A bit about me &amp; the work</h2>
                </div>

                <div class="bento-grid">
                    <!-- About Me -->
                    <article class="bento-card card-about" data-animate>
                        <div>
                            <div class="row align-items-center no-gutters">
                                <div class="col-sm-3">
                                    <div class="about-avatar">
                                        <img src="<?php echo BASE_PATH; ?>/public/img/js.jpg" class="img-fluid"
                                            alt="Jatinder Singh, founder and web developer at slashkode" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h3 class="about-name">JATINDER SINGH</h3>
                                        <p class="about-role">Web Designer &amp; Developer</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                I’m Jatinder, a Melbourne-based web designer and developer.
                                I work with small businesses across the city who want clean,
                                fast websites that actually help them get enquiries — not
                                just look good.
                                <a href="<?php echo BASE_PATH; ?>/aboutus.php">More about slashkode →</a>
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
                        <div>
                            <h3 class="cta-title">
                                What kind of problems are you experiencing? <br />
                                Asking and getting a clear answer.
                            </h3>
                        </div>
                        <a href="contact" class="sk-btn sk-btn-secondary"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">contact
                            now <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                            <span> </span>
                        </a>
                    </article>
                    <!-- Testimonial -->
                    <article class="bento-card card-testimonial" data-animate>
                        <p class="testimonial-quote beinto-testi-font">
                            Working with them completely changed how we present our brand.
                            Clear thinking, beautiful execution, and genuine care for
                            results.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">EF</div>
                            <div>
                                <div class="author-name">Emily Foster</div>
                                <div class="author-role">Founder, Sarter</div>
                            </div>
                        </div>
                    </article>

                    <!-- Available -->
                    <article class="bento-card card-available" data-animate>
                        <div>
                            <div class="available-status">
                                <span class="available-dot"></span>
                                Available for work
                            </div>
                            <h3 class="available-title">Melbourne-based</h3>
                            <p class="available-desc">
                                Helping local businesses build clear, conversion-focused
                                websites.
                            </p>
                        </div>
                    </article>


                </div>
            </section>

            <section class="sk-container text-center">
                <div class="about-grid-header">
                    <span class="sk-statement-eyebrow">/what is catch</span>
                    <h2 class="about-grid-title headingeffect">Fair pricing, No catch.</h2>
                </div>
                <p class="m-auto">
                    I keep slashkode small on purpose — a handful of projects at a time, not a pipeline.
                    That's what lets me actually pay attention to each one, instead of leaning on templates and
                    automated systems to cover more clients than I can properly look after.
                    <br>
                    <br>
                    The lower price comes from the same decision. No office, no account managers, no big team to fund —
                    so the saving goes into your price instead of overhead.
                    <br>
                    <br>
                    The honest reason I built it this way: most small businesses need a website that actually works, not
                    an agency price tag. This is me trying to make that fair.
                </p>
            </section>
        </div>
        <?php require_once('includes/sections/cta.php'); ?>


        <?php $faqPage = 'home';
        require_once('includes/sections/faq.php'); ?>

        <?php require_once('includes/island.php'); ?>

        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>


    <script src="<?php echo BASE_PATH; ?>/public/js/serviceSection.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/bientoGrid.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/cta.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/marquee.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/init.js" defer></script>
</body>

</html>