<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design, SEO & Custom Applications Melbourne | Slashkode</title>
    <meta name="description"
        content="Clear web services for Melbourne businesses. Website design & development, on-page SEO, RTO & VET college websites, and custom web applications — built to look professional, get found, and grow." />
    <meta name="keywords" content="web design Melbourne, website development Melbourne, SEO Melbourne, RTO website design, custom web applications Melbourne, VET college website" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode | Jatinder Singh" />
    <link rel="canonical" href="https://slashkode.com.au/services" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Web Design, SEO & Custom Applications Melbourne | Slashkode" />
    <meta property="og:description" content="Website design, SEO, RTO websites and custom web applications for Melbourne businesses. Clear services, local focus, results that matter." />
    <meta property="og:url" content="https://slashkode.com.au/services" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Services | Slashkode Melbourne" />
    <meta name="twitter:description" content="Website design, SEO, RTO & VET college sites, and custom web applications for Melbourne businesses." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "Slashkode Services",
            "description": "Web design, SEO, RTO websites and custom web applications for Melbourne businesses.",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Website Design & Development",
                    "url": "https://slashkode.com.au/services/web-design-development"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Search Engine Optimisation (SEO)",
                    "url": "https://slashkode.com.au/services/seo"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "RTO and VET Colleges Website",
                    "url": "https://slashkode.com.au/services/rto-vet-colleges-website"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Custom Web Applications",
                    "url": "https://slashkode.com.au/services/custom-web-applications"
                }
            ]
        }
    </script>

    <?php require_once('includes/stylesheets.php'); ?>
    <link rel="stylesheet" href="public/css/pages/services.css" />

</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php'); ?>

            <section class="sk-container">
                <div class="heroService">
                    <h1 class="heroheading">Clear web services for Melbourne businesses.</h1>
                    <p>Website design, development, SEO and custom applications — built to help local businesses look professional, get found, and grow.</p>
                    <a href="<?php echo BASE_PATH; ?>/contact" class="sk-btn sk-btn-primary"> Book a free chat
                        <span></span>
                    </a>
                </div>
            </section>

            <div class="services-container">

                <!-- 01 Website Design & Development -->
                <section class="service-item">
                    <div class="service-wrapper">
                        <div class="s-number">
                            <span>01</span>
                        </div>

                        <div class="service-media">
                            <video muted autoplay loop playsinline>
                                <source src="./public/img/mockups/about.webm" type="video/webm">
                            </video>
                        </div>

                        <div class="service-heading">
                            <h2>Website Design <br>&amp; Development</h2>
                            <a href="<?php echo BASE_PATH; ?>/services/web-design-development.php" class="sk-btn sk-btn-primary"> Explore <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px" height="15px">
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>Custom-designed, fast websites with clean code and SEO foundations — built so Melbourne businesses look professional and turn visitors into enquiries.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Custom UI/UX &amp; Responsive Design</li>
                                <li>Clean Code (HTML/CSS/JS + GSAP)</li>
                                <li>Built-in Technical SEO</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Performance &amp; Page Speed</li>
                                <li>CMS Setup &amp; Handover</li>
                                <li>Conversion-Focused Layouts</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 02 Search Engine Optimisation (SEO) -->
                <section class="service-item">
                    <div class="service-wrapper">
                        <div class="s-number">
                            <span>02</span>
                        </div>

                        <div class="service-media">
                            <video muted autoplay loop playsinline>
                                <source src="./public/img/mockups/about.webm" type="video/webm">
                            </video>
                        </div>

                        <div class="service-heading">
                            <h2>Search Engine <br>Optimisation (SEO)</h2>
                            <a href="<?php echo BASE_PATH; ?>/services/seo-services.php" class="sk-btn sk-btn-primary"> Explore <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px" height="15px">
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>SEO built into new sites from day one, or a deep audit and upgrade of your existing website — speed, keywords, content and conversion. No monthly retainers.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>On-Page SEO Foundations</li>
                                <li>Technical SEO Audit</li>
                                <li>Page Speed Optimisation</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Keyword Research &amp; Mapping</li>
                                <li>Content for Ranking &amp; Brand</li>
                                <li>Conversion Path Improvements</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 03 RTO and VET Colleges Website -->
                <section class="service-item">
                    <div class="service-wrapper">
                        <div class="s-number">
                            <span>03</span>
                        </div>

                        <div class="service-media">
                            <img src="public/img/mockups/aiitmockupsample.png" class="img-fluid" alt="RTO and VET college website example">
                        </div>

                        <div class="service-heading">
                            <h2>RTO and VET <br>Colleges Website</h2>
                            <a href="<?php echo BASE_PATH; ?>/services/rto-vet-colleges-website.php" class="sk-btn sk-btn-primary"> Explore <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px" height="15px">
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>ASQA-compliant websites for RTOs and VET colleges in Melbourne — course catalogues, student information, enrolment paths and SEO that attract the right enquiries.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>ASQA-Compliant Structure</li>
                                <li>Course Catalogue &amp; Landing Pages</li>
                                <li>Student Information &amp; Policies</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Enrolment Forms &amp; CTAs</li>
                                <li>VET-Focused SEO</li>
                                <li>CRICOS-Ready Where Needed</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- 04 Custom Web Applications -->
                <section class="service-item">
                    <div class="service-wrapper">
                        <div class="s-number">
                            <span>04</span>
                        </div>

                        <div class="service-media">
                            <video muted autoplay loop playsinline>
                                <source src="./public/img/mockups/about.webm" type="video/webm">
                            </video>
                        </div>

                        <div class="service-heading">
                            <h2>Custom Web <br>Applications</h2>
                            <a href="<?php echo BASE_PATH; ?>/services/custom-web-applications.php" class="sk-btn sk-btn-primary"> Explore <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px" height="15px">
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>Tailored web applications, admin dashboards and internal portals built around how your Melbourne business actually works — not forced into a generic template.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Custom CMS &amp; Admin Dashboards</li>
                                <li>Internal Portals &amp; Workflows</li>
                                <li>Role-Based User Systems</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Third-Party Integrations</li>
                                <li>Secure Authentication</li>
                                <li>Scalable Architecture</li>
                            </ul>
                        </div>
                    </div>
                </section>

            </div>

            <?php $faqPage = 'services';
            require_once('includes/sections/faq.php'); ?>
            <?php require_once('includes/island.php'); ?>

        </div>
        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>

    <script src="public/js/pages/services.js"></script>

</body>

</html>