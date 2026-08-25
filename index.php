<?php require_once __DIR__ . '/config.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slashkode | Web Agency</title>
    <?php require_once('includes/stylesheets.php');?>
    <link rel="stylesheet" href="public/css/statement.css" />
    <link rel="stylesheet" href="public/css/servicesSection.css" />
    <link rel="stylesheet" href="public/css/bientoGrid.css" />
    <link rel="stylesheet" href="public/css/cta.css" />
    <link rel="stylesheet" href="public/css/marquee.css" />

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.4/dist/dotlottie-wc.js" type="module"></script>
</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php');?>

            <section class="hero">
                <div class="sk-container">
                    <h1 class="heroheading">
                        Minimum cost, maximum results.
                        We make it happen.
                    </h1>
                    <p>
                        We design and build sites that turn visitors into enquiries — for
                        Melbourne businesses who are tired of paying for pretty and getting
                        nothing back.
                    </p>

                    <div class="mag-zone">
                        <a href="#" class="btn herobtnPrimary">See the work &nbsp;
                            <dotlottie-wc
                                src="https://lottie.host/3c7a293d-42c4-4658-a8db-6f2e4bfef31c/UY9L97Lncp.lottie"
                                style="width: 30px; height: 30px" autoplay loop></dotlottie-wc>
                        </a>
                    </div>

                    <div class="mag-zone">
                        <a href="#" class="btn herobtnSec">Say hi
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

            <?php $portfolioPage = 'home'; require_once('includes/sections/portfolio.php'); ?>
        </div>

        <section class="skills-section" aria-label="What I am good at">
            <div class="skills-container">
                <!-- Left: expandable list -->
                <div class="skills-list" role="list">
                    <div class="skill-item" role="listitem">
                        <a href="" class="skill-trigger hover-link" data-img="public/img/mockups/aiitmockupsample.png">
                            <span class="skill-label">Website Design & Development</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>



                        <a href="" class="skill-trigger">
                            <span class="skill-label">Search Engine Optimise (SEO)</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>
                        <a href="" class="skill-trigger">
                            <span class="skill-label">RTO and VET Colleges Website</span>
                            <span class="skill-icon" aria-hidden="true">
                                <img src="public/icons/top-right.png" class="img-fluid" alt="" /> </span></a>

                        <a href="" class="skill-trigger">
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
                                        <img src="public/img/js.jpg" class="img-fluid alt="" />
                    
                  </div></div>
                    <div class=" col-sm-8">
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
                        <a href="#" class="sk-btn sk-btn-secondary"
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
            <section class="sk-container" id="statement">
                <div class="sk-statement-inner">
                    <span class="sk-statement-eyebrow">/ what we believe</span>

                    <h2 class="sk-statement-heading split" id="headline">
                        A good website
                        <span class="avatars">
                            <img src="public/img/website.svg" class="img-fluid" alt="" />
                        </span>
                        isn't decoration. It's a decision your customers
                        <span class="avatars">
                            <img src="public/img/customer.svg" class="img-fluid" alt="" />
                        </span>
                        make in seconds.
                    </h2>


                </div>
            </section>
        </div>
        <?php require_once('includes/sections/cta.php');?>


        <?php $faqPage = 'home'; require_once('includes/sections/faq.php'); ?>

        <?php  require_once( 'includes/island.php'); ?>

        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php');?>


    <script src="public/js/serviceSection.js"></script>

    <script src="public/js/bientoGrid.js"></script>
    <script src="public/js/cta.js"></script>
    <script src="public/js/marquee.js"></script>
    <script src="public/js/init.js"></script>
</body>

</html>