<?php require_once __DIR__ . '/config.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Melbourne web designer and developer building fast, SEO-ready websites. $99 to start, then $39 fortnightly. Hosting included, no lock-in.">
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <meta name="theme-color" content="#0f172a" />
    <link rel="canonical" href="https://slashkode.com.au/" />
    <title>Web Design Melbourne | Websites from $99 | Slashkode</title>
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Web Design Melbourne | Websites from $99 | Slashkode" />
    <meta property="og:description"
        content="Melbourne web designer and developer building fast, SEO-ready websites. $99 to start, then $39 fortnightly. Hosting included, no lock-in." />
    <meta property="og:url" content="https://slashkode.com.au/" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />


    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Web Design Melbourne | Websites from $99 | Slashkode" />
    <meta name="twitter:description"
        content="Melbourne web designer and developer building fast, SEO-ready websites. $99 to start, then $39 fortnightly. Hosting included, no lock-in." />


    <!-- Schema.org: LocalBusiness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Slashkode",
        "image": "https://slashkode.com.au/public/img/slashkode.png",
        "url": "https://slashkode.com.au/",
        "description": "Slashkode is a Melbourne web design and development studio. Jatinder Singh designs, builds and looks after every website personally.",
        "sameAs": [
            "https://www.instagram.com/jatinderdeveloper",
            "https://www.tiktok.com/@slashkode",
            "https://www.facebook.com/profile.php?id=61576803775165"
        ],
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
                    "name": "RTO Colleges Websites"
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

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/servicesSection.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/bientoGrid.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/cta.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/marquee.css" />
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

            <section class="hero ">
                <div class="sk-container">
                    <h1 class="heroheading">
                        Web design in Melbourne that turns visitors into enquiries
                    </h1>
                    <p>
                        We design and build fast, professional websites for Melbourne businesses,
                        migration agencies, RTO colleges. Every site is made to turn visitors
                        into enquiries, and we look after it once it's live, so it stays quick,
                        up to date and easy to find on Google.
                    </p>

                    <div class="mag-zone">
                        <a href="<?php echo BASE_PATH; ?>/work" class="btn herobtnPrimary">See the work &nbsp;
                            <dotlottie-wc
                                src="https://lottie.host/3c7a293d-42c4-4658-a8db-6f2e4bfef31c/UY9L97Lncp.lottie"
                                style="width: 30px; height: 30px" autoplay loop></dotlottie-wc>
                        </a>
                    </div>

                    <div class="mag-zone">
                        <a href="<?php echo BASE_PATH; ?>/about" class="btn herobtnSec">About
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

        <section class="skills-section" aria-label="Website design and development services in Melbourne">
            <div class="skills-container">
                <!-- Left: expandable list -->
                <div class="skills-list" role="list">
                    <div class="skill-item" role="listitem">
                        <a href="<?php echo BASE_PATH; ?>/services/web-design-development"
                            class="skill-trigger hover-link" data-img="public/img/mockups/aiitmockupsample.webp">
                            <span class="skill-label">Website Design & Development

                            </span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span>

                        </a>





                        <a href="<?php echo BASE_PATH; ?>/services/rto-vet-colleges-website"
                            class="skill-trigger hover-link" data-img="public/img/mockups/bit.webp">
                            <span class="skill-label">RTO College Websites</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>

                        <a href="<?php echo BASE_PATH; ?>/services/custom-web-applications"
                            class="skill-trigger hover-link" data-img="public/img/mockups/rtocommissions.webp">
                            <span class="skill-label">Custom Web Applications</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>
                        <div class="cursor-img"></div>
                        <a href="<?php echo BASE_PATH; ?>/services/seo-services" class="skill-trigger hover-link"
                            data-img="public/img/seo.png">
                            <span class="skill-label">Search Engine Optimisation (SEO)</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>
                    </div>
                </div>

                <!-- Right: big title -->
                <div class="skills-heading-wrap">
                    <span class="sk-statement-eyebrow">/Services</span>
                    <h2 class="skills-heading headingeffect mb-3">
                        What we do
                    </h2>
                    <p>Website design in Melbourne shouldn’t come with jargon or surprise invoices. We design, build and
                        launch your site, then look after the hosting, speed, forms and updates, so you can get on with
                        running your business.</p>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <section class="sk-container">
                <div class="about-grid-header">
                    <span class="sk-statement-eyebrow">/About</span>
                    <h2 class="about-grid-title headingeffect">Your Melbourne web designer, start to finish</h2>
                </div>

                <div class="bento-grid">
                    <!-- About Me -->
                    <article class="bento-card card-about" data-animate>
                        <div>
                            <div class="row align-items-center no-gutters">
                                <div class="col-sm-3">
                                    <div class="about-avatar">
                                        <img src="<?php echo BASE_PATH; ?>/public/img/js.jpg" class="img-fluid"
                                            alt="Jatinder Singh, founder and web developer at Slashkode" />
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div>
                                        <h3 class="about-name">JATINDER SINGH</h3>
                                        <p class="about-role">Melbourne Web Designer &amp; Developer</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                I'm Jatinder, a Melbourne web designer and website developer.
                                I'm the person you talk to, the person who builds your site, and the person
                                who looks after it once it's live. No outsourcing, no hand-offs.
                                <a href="<?php echo BASE_PATH; ?>/about">More about Slashkode →</a>
                            </p>
                        </div>
                        <div class="about-tags">
                            <span class="about-tag">Design</span>
                            <span class="about-tag">Development</span>
                            <span class="about-tag">web applications</span>

                        </div>
                    </article>


                    <!-- CTA -->
                    <article class="bento-card card-cta" data-animate>
                        <div>
                            <h3 class="cta-title">
                                Not sure where to start?
                            </h3>
                            <p>Tell us what you're trying to fix or build — we'll point you in the right direction.</p>
                        </div>
                        <a href="<?php echo BASE_PATH; ?>/contact" class="sk-btn sk-btn-secondary"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">contact
                            now <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                            <span> </span>
                        </a>
                    </article>
                    <!-- Testimonial -->
                    <article class="bento-card card-testimonial" data-animate>
                        <p class="testimonial-quote beinto-testi-font">
                            A good website isn't decoration. It's a decision your customers make in seconds.
                        </p>
                        <!-- <div class="testimonial-author">
                            <div class="author-avatar">EF</div>
                            <div>
                                <div class="author-name">Emily Foster</div>
                                <div class="author-role">Founder, Sarter</div>
                            </div>
                        </div> -->
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
                    <span class="sk-statement-eyebrow">/what is the catch</span>
                    <h2 class="about-grid-title headingeffect">Fair pricing, No catch.</h2>
                </div>
                <p class="m-auto">
                    Here's the honest answer: the price is low because the overhead is low. No office, no account
                    managers, no big team sitting between you and the work - so that cost never gets added to your price
                    in the first place.
                    <br>
                    <br>

                    It also means support doesn't stop at launch. This runs as an ongoing plan, so once your site is
                    live, I'm still available for updates, content changes, or help managing things - for a clear, fixed
                    price, not a surprise bill.
                    <br>
                    <br>

                    If you run a small business and need a website designed properly, with someone to help once it's
                    live, that's who this is built for. You can see how it works on our
                    <a href="<?php echo BASE_PATH; ?>/services/web-design-development">web
                        design for small business in
                        Melbourne</a> page.
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