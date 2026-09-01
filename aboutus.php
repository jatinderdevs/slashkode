<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slashkode | About Us</title>
    <?php require_once('includes/stylesheets.php'); ?>

    <link rel="stylesheet" href="public/css/statement.css" />
    <link rel="stylesheet" href="public/css/servicesSection.css" />

    <link rel="stylesheet" href="public/css/portfolio.css" />
    <link rel="stylesheet" href="public/css/faq.css" />
    <link rel="stylesheet" href="public/css/cta.css" />
    <link rel="stylesheet" href="public/css/marquee.css" />

    <link rel="stylesheet" href="public/css/pages/about.css" />
    <link rel="stylesheet" href="public/css/services/whyusSection.css" />


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
                                    <h1 class="heroheading">About slashKode</h1>
                                    <p>

                                        I’m Jatinder Singh, founder of slashKode. What began as freelance web work under jatinderdev.com.au is now a Melbourne-based sole-trader agency focused on helping local businesses grow online properly. We design and build websites, improve search visibility, create specialist platforms for RTOs and VET colleges, and develop custom web applications that save time and reduce manual work.
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="about-thumbnail">
                                    <video width="640" height="360" muted autoplay loop class="img-fluid">
                                        <source src="./public/img/mockups/about.webm" type="video/webm">

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
        <section class="sk-container   ">
            <div class="mission ">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./public/img/myself.webp" class="img-fluid myself" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="headingeffect">
                            Our mission? Help your business reach its online potential
                        </h2>
                        <p>
                            After years working with Melbourne businesses as a freelancer, I saw the gap clearly: too many local companies were paying for websites that looked fine but didn’t bring enquiries, or systems that were hard to manage. slashKode was built to close that gap.
                        </p>
                        <p>
                            We work with business owners who want practical digital support — clear communication, honest advice, and solutions that match how Melbourne businesses actually run day to day. Whether you need a new website that converts, better visibility on Google, a compliant RTO or VET college site, or a custom application that removes repetitive tasks, we keep the process straightforward and the results measurable.
                        </p>
                        <a href="#contact" class="mb-3 sk-btn sk-btn-primary">
                            Contact Now <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px"
                                height="15px">
                            <span style="left: 184.375px; top: 253.109px;"></span>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section class="sk-container">
            <div class="about-services shadow">
                <h2 class="headingeffect">Our Services</h2>
                <p>We focus on the digital work that delivers the highest return for Melbourne businesses. Every project starts with understanding your goals, your customers, and the local market — then we build only what is needed.</p>
                <div class="servicesbtn">
                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Website
                        Design & Development <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>

                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Search
                        Engine Optimise (SEO)
                        <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>
                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">RTO and VET
                        Colleges Website <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>
                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Custom web
                        Applications <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>
                </div>
            </div>


        </section>
        <?php require_once('includes/sections/cta.php'); ?>


        <?php require_once('includes/sections/faq.php'); ?>

        </div>
        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script>
    <script src="public/js/pages/about.js"></script>
    <script src="public/js/pages/scrolltxt.js"></script>
    <script src="public/js/cta.js"></script>

    <script src="public/js/services/whyusSection.js"></script>
    <script src="public/js/init.js"></script>

</body>

</html>