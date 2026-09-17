<?php require_once __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About slashkode | Melbourne Web Design Studio Founded by Jatinder Singh</title>
    <meta name="description"
        content="About slashkode — a Melbourne web design studio founded by Jatinder Singh, helping local businesses, RTOs and VET colleges get online properly." />
    <meta name="keywords"
        content="about slashkode, Jatinder Singh web developer Melbourne, Melbourne web design studio founder" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/about" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About slashkode | Melbourne Web Design Studio Founded by Jatinder Singh" />
    <meta property="og:description"
        content="About slashkode — a Melbourne web design studio founded by Jatinder Singh, helping local businesses, RTOs and VET colleges get online properly." />
    <meta property="og:url" content="https://slashkode.com.au/about" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About slashkode | Melbourne Web Design Studio" />
    <meta name="twitter:description"
        content="Meet slashkode — a Melbourne web design studio founded by Jatinder Singh." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AboutPage",
        "name": "About slashkode",
        "description": "Meet slashkode — a Melbourne-based web design and development studio helping local businesses, RTOs and VET colleges get online properly.",
        "mainEntity": {
            "@type": "ProfessionalService",
            "name": "slashkode",
            "founder": {
                "@type": "Person",
                "name": "Jatinder Singh"
            },
            "url": "https://slashkode.com.au",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Melbourne",
                "addressRegion": "VIC",
                "addressCountry": "AU"
            }
        }
    }
    </script>

    <?php require_once('includes/stylesheets.php'); ?>

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/statement.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/servicesSection.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/portfolio.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/faq.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/cta.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/marquee.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/about.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/services/whyusSection.css" />

</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php'); ?>

            <section class="about-hero">
                <div class="sk-container">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="about-text">
                                    <h1 class="heroheading">About slashkode</h1>
                                    <p>
                                        I'm Jatinder Singh, founder of slashkode. What began as freelance web work under
                                        jatinderdev.com.au is now a Melbourne-based sole-trader agency focused on
                                        helping local businesses grow online properly. We design and build websites,
                                        improve search visibility, create specialist platforms for RTOs and VET
                                        colleges, and develop custom web applications that save time and reduce manual
                                        work.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="about-thumbnail">
                                    <video width="640" height="360" muted autoplay loop class="img-fluid">
                                        <source src="<?php echo BASE_PATH; ?>/public/img/mockups/about.webm"
                                            type="video/webm">
                                        Your browser does not support the HTML5 video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="sk-scrolling-text">
            <div class="rail">
                <h4>Proudly based in <span> MELBOURNE</span>.</h4>
                <h4>Experienced.</h4>
                <h4>We understand the local market.</h4>
            </div>
        </section>

        <section class="sk-container">
            <div class="mission">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo BASE_PATH; ?>/public/img/myself.webp" class="img-fluid myself"
                            alt="Jatinder Singh, founder of slashkode">
                    </div>
                    <div class="col-md-8">
                        <h2 class="headingeffect">
                            Our mission? Help your business reach its online potential
                        </h2>
                        <p>
                            After years working with Melbourne businesses as a freelancer, I saw the gap clearly: too
                            many local companies were paying for websites that looked fine but didn't bring enquiries,
                            or systems that were hard to manage. slashkode was built to close that gap.
                        </p>
                        <p>
                            We work with business owners who want practical digital support — clear communication,
                            honest advice, and solutions that match how Melbourne businesses actually run day to day.
                            Whether you need a new website that converts, better visibility on Google, a compliant RTO
                            or VET college site, or a custom application that removes repetitive tasks, we keep the
                            process straightforward and the results measurable.
                        </p>
                        <a href="<?php echo BASE_PATH; ?>/contact" class="mb-3 sk-btn sk-btn-primary">
                            Contact Now <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" class="img-fluid"
                                alt="" width="15" height="15">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sk-container">
            <div class="about-services shadow">
                <h2 class="headingeffect">Our Services</h2>
                <p>We focus on the digital work that delivers the highest return for Melbourne businesses. Every project
                    starts with understanding your goals, your customers, and the local market — then we build only what
                    is needed.</p>
                <div class="servicesbtn">
                    <a href="<?php echo BASE_PATH; ?>/services/web-design-development"
                        class="sk-btn sk-btn-secondary">Website
                        Design & Development <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" width="15"
                            height="15" alt="">
                        <span></span>
                    </a>
                    <a href="<?php echo BASE_PATH; ?>/services/seo-services" class="sk-btn sk-btn-secondary">Search
                        Engine Optimise (SEO)
                        <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" width="15" height="15" alt="">
                        <span></span>
                    </a>
                    <a href="<?php echo BASE_PATH; ?>/services/rto-vet-colleges-website"
                        class="sk-btn sk-btn-secondary">RTO and VET
                        Colleges Website <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" width="15"
                            height="15" alt="">
                        <span></span>
                    </a>
                    <a href="<?php echo BASE_PATH; ?>/services/custom-web-applications"
                        class="sk-btn sk-btn-secondary">Custom web
                        Applications <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" width="15"
                            height="15" alt="">
                        <span></span>
                    </a>
                </div>
            </div>
        </section>

        <?php require_once('includes/sections/cta.php'); ?>

        <?php $faqPage = 'about';
        require_once('includes/sections/faq.php'); ?>

        </div>
        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Observer.min.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/pages/about.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/pages/scrolltxt.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/cta.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/whyusSection.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/init.js" defer></script>

</body>

</html>