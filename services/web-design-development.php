<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Design & Development | Slashkode</title>
    <meta name="description"
        content="Custom UI/UX design, fluid GSAP animations, and rock-solid SEO. Websites built to scale your business — without the technical stress." />
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

                            <a href="<?php echo BASE_PATH; ?>/services.php" class="breadcrumb-btn"> /
                                Services</a>


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
        </div>
        </section>

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
                                    <img src="public/img/js.jpg" class="img-fluid alt="" />
                    
                  </div></div>
                    <div class=" col-sm-8">
                                    <div>
                                        <h3 class="about-name">JATINDER SINGH</h3>
                                        <p class="about-role">Founder & Lead Developer, SLASHKODE</p>
                                    </div>
                                </div>
                            </div>

                            <p class="about-bio">
                                Every SLASHKODE project is designed, coded, and shipped personally by
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
                                <div class="marquee-logo ">
                                    <img src="<?php echo BASE_PATH; ?>/public/icons/nodejs.png" alt="AIIT"
                                        loading="lazy" />
                                </div>
                                <div class="marquee-logo">
                                    <img src="<?php echo BASE_PATH; ?>/public/icons/mysql.png" alt="BIT"
                                        loading="lazy" />
                                </div>
                                <div class="marquee-logo">
                                    <img src="<?php echo BASE_PATH; ?>/public/icons/php.png" alt="Cornell"
                                        loading="lazy" />
                                </div>
                                <div class="marquee-logo">
                                    <img src="<?php echo BASE_PATH; ?>/public/icons/mongodb.png" alt="Dalavoro"
                                        loading="lazy" />
                                </div>


                                <div class="marquee-logo">
                                    <img src="<?php echo BASE_PATH; ?>/public/icons/html.png" alt="Yara"
                                        loading="lazy" />
                                </div>

                            </div>
                        </div>
                    </div>
                </article>





            </div>
        </section>

        <section class="sk-expand-cards sk-container" aria-label="Services">
            <div class="wd-section-header">
                <span class="wd-section-label wd-reveal">Deliverables</span>
                <h2 class="wd-reveal">What you get</h2>
                <p class="wd-reveal">
                    Clear scope. Clean code. Results you can measure.
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
                                <path
                                    d="M12 3v3m0 12v3M5.6 5.6l2.1 2.1m8.6 8.6 2.1 2.1M3 12h3m12 0h3M5.6 18.4l2.1-2.1m8.6-8.6 2.1-2.1" />
                                <circle cx="12" cy="12" r="2.5" fill="currentColor" stroke="none" />
                            </svg>
                        </div>
                        <h3 class="sk-ec-title">Custom UI/UX & Responsive Design</h3>
                        <p class="sk-ec-desc">Every site starts as a real design, not a theme. We design around how your
                            customers actually browse, so it looks right and works right on any screen — from a phone in
                            a car park to a widescreen monitor.</p>
                    </div>
                    <div class="sk-ec-image">
                        <img src="<?php echo BASE_PATH; ?>/public/img/mockups/aiitmockupsample.png"
                            alt="Custom UI/UX & Responsive Design" />
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="sk-ec-card" data-index="1">
                    <div class="sk-ec-content">
                        <div class="sk-ec-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                <path d="M22 12A10 10 0 0 0 12 2v10z" />
                            </svg>
                        </div>
                        <h3 class="sk-ec-title">Built-in Technical SEO</h3>
                        <p class="sk-ec-desc">SEO isn't bolted on after launch, it's part of how we build. Clean code,
                            fast load times, proper structure and metadata from day one, so Google can actually find and
                            rank you.</p>
                    </div>
                    <div class="sk-ec-image">
                        <img src="<?php echo BASE_PATH; ?>/public/img/seo.png"
                            alt="Built-in Technical SEO" />
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="sk-ec-card" data-index="2">
                    <div class="sk-ec-content">
                        <div class="sk-ec-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="20" x2="18" y2="10" />
                                <line x1="12" y1="20" x2="12" y2="4" />
                                <line x1="6" y1="20" x2="6" y2="14" />
                            </svg>
                        </div>
                        <h3 class="sk-ec-title">Performance & Analytics</h3>
                        <p class="sk-ec-desc">We set up the tracking that matters — page speed, load times, and visitor
                            behaviour — so you're not guessing whether the site is actually working for you.</p>
                    </div>
                    <div class="sk-ec-image">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                            alt="Data & insights" />
                    </div>
                </div>

            </div>

            <!-- ========== MOBILE (swipe carousel) ========== -->
            <div class="sk-ec-mobile" id="skEcMobile">
                <div class="sk-ec-track" id="skEcTrack">

                    <div class="sk-ec-slide">
                        <div class="sk-ec-m-card">
                            <div class="sk-ec-m-image">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=800&q=80"
                                    alt="Custom UI/UX & Responsive Design" />
                            </div>
                            <div class="sk-ec-m-body">
                                <div class="sk-ec-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M12 3v3m0 12v3M5.6 5.6l2.1 2.1m8.6 8.6 2.1 2.1M3 12h3m12 0h3M5.6 18.4l2.1-2.1m8.6-8.6 2.1-2.1" />
                                        <circle cx="12" cy="12" r="2.5" fill="currentColor" stroke="none" />
                                    </svg>
                                </div>
                                <h3 class="sk-ec-title">Custom UI/UX & Responsive Design</h3>
                                <p class="sk-ec-desc">We help you identify opportunities for AI adoption and implement
                                    the right solutions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sk-ec-slide">
                        <div class="sk-ec-m-card">
                            <div class="sk-ec-m-image">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&q=80"
                                    alt="Built-in Technical SEO" />
                            </div>
                            <div class="sk-ec-m-body">
                                <div class="sk-ec-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                        <path d="M22 12A10 10 0 0 0 12 2v10z" />
                                    </svg>
                                </div>
                                <h3 class="sk-ec-title">Built-in Technical SEO</h3>
                                <p class="sk-ec-desc">We help you identify opportunities for top growth and implement
                                    the right strategies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sk-ec-slide">
                        <div class="sk-ec-m-card">
                            <div class="sk-ec-m-image">
                                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&q=80"
                                    alt="Data & insights" />
                            </div>
                            <div class="sk-ec-m-body">
                                <div class="sk-ec-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="18" y1="20" x2="18" y2="10" />
                                        <line x1="12" y1="20" x2="12" y2="4" />
                                        <line x1="6" y1="20" x2="6" y2="14" />
                                    </svg>
                                </div>
                                <h3 class="sk-ec-title">Data &amp; insights</h3>
                                <p class="sk-ec-desc">We help you identify opportunities for Big Data use and implement
                                    the right analytics.</p>
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
        <section class="sk-container text-center">
            <span class="sk-statement-eyebrow">/what customer says</span>
            <h2 class="testimonial-quote">Working with them completely changed how we present our brand. Clear thinking,
                beautiful execution, and genuine care for results. </h2>
            <div class="testimonial-author justify-content-center">
                <div class="author-avatar">EF</div>
                <div>
                    <div class="author-name">Emily Foster</div>
                    <div class="author-role">Founder, Sarter</div>
                </div>
            </div>
        </section>
        </div>

        <section class="sk-section">
            <div class="sk-container">
                <div class="sk-header">
                    <h2 class="sk-header__title">How we build<br>your site</h2>
                    <div class="sk-header__right">
                        <p class="sk-header__sub">
                            Four clear steps. No surprises. You always know what’s next.
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
                            <h3 class="sk-card__title">Discovery &amp; Strategy</h3>
                            <p class="sk-card__desc">
                                Mapping your user flow, site map, and key performance indicators so every decision has a
                                purpose.
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
                            <h3 class="sk-card__title">Custom Code Development</h3>
                            <p class="sk-card__desc">
                                Writing clean, high-performance HTML/CSS/JS and GSAP animations that feel premium and
                                stay fast.
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
                            <h3 class="sk-card__title">Optimization &amp; Testing</h3>
                            <p class="sk-card__desc">
                                Cross-browser testing, mobile responsiveness, and SEO checks before anything goes live.
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
                            <h3 class="sk-card__title">Launch &amp; Handover</h3>
                            <p class="sk-card__desc">
                                Seamless domain transition, CMS walk-through, and ongoing support options if you want
                                them.
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

    <script src="https://assets.codepen.io/16327/ScrollSmoother.min.js"></script>



    <script src="<?php echo BASE_PATH; ?>/public/js/services/web-design.js"></script>


    <script src="<?php echo BASE_PATH; ?>/public/js/services/whyusSection.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/services/process.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/marquee.js"></script>

</body>

</html>