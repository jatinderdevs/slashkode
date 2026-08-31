<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <p class="">Website design, development and SEO - built to help local businesses look professional, get found, and grow.</p>
                    <a href="" class="sk-btn sk-btn-primary"> Book a free chat
                        <span></span>
                    </a>
                </div>

            </section>
            <div class="services-container">
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
                            <h2>Website Design <br>& Development</h2>
                            <a href="<?php echo BASE_PATH; ?>/services/web-design-development.php" class="sk-btn sk-btn-primary"> Explore <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px" height="15px">
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>We design intuitive, high-impact websites so users connect, engage and take action effortlessly.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>UX Research & User Flows</li>
                                <li>UI Design & Design Systems</li>
                                <li>Responsive Web Design</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Conversion-Focused Layouts</li>
                                <li>Prototyping & Interaction</li>
                                <li>Brand-Aligned Visuals</li>
                            </ul>
                        </div>
                    </div>
                </section>
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
                            <h2>Search Engine Optimise (SEO)</h2>
                            <a href="" class="sk-btn sk-btn-primary"> Contact Now
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>We design intuitive, high-impact websites so users connect, engage and take action effortlessly.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>UX Research & User Flows</li>
                                <li>UI Design & Design Systems</li>
                                <li>Responsive Web Design</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Conversion-Focused Layouts</li>
                                <li>Prototyping & Interaction</li>
                                <li>Brand-Aligned Visuals</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="service-item">
                    <div class="service-wrapper">
                        <div class="s-number">
                            <span>03</span>
                        </div>

                        <div class="service-media">
                            <img src="public/img/mockups/aiitmockupsample.png" class="img-fluid" alt="">
                        </div>

                        <div class="service-heading">
                            <h2>RTO and VET Colleges Website</h2>
                            <a href="" class="sk-btn sk-btn-primary"> Contact Now
                                <span></span>
                            </a>
                        </div>
                    </div>

                    <div class="service-wrapper-bottom">
                        <div class="service-desc">
                            <p>We design intuitive, high-impact websites so users connect, engage and take action effortlessly.</p>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>UX Research & User Flows</li>
                                <li>UI Design & Design Systems</li>
                                <li>Responsive Web Design</li>
                            </ul>
                        </div>

                        <div class="subcate">
                            <ul>
                                <li>Conversion-Focused Layouts</li>
                                <li>Prototyping & Interaction</li>
                                <li>Brand-Aligned Visuals</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <?php $faqPage = 'home';
            require_once('includes/sections/faq.php'); ?>
            <?php require_once('includes/island.php'); ?>


        </div>
        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>

    <script src="public/js/pages/services.js"></script>


</body>

</html>