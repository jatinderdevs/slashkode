<?php require_once __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Slashkode | Melbourne Web Design Studio Founded by Jatinder Singh</title>
    <meta name="description"
        content="About Slashkode — a Melbourne web design studio founded by Jatinder Singh, helping local businesses, RTOs and VET colleges get online properly." />
    <meta name="keywords"
        content="about Slashkode, Jatinder Singh web developer Melbourne, Melbourne web design studio founder" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <link rel="canonical" href="https://Slashkode.com.au/about" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About Slashkode | Melbourne Web Design Studio Founded by Jatinder Singh" />
    <meta property="og:description"
        content="About Slashkode — a Melbourne web design studio founded by Jatinder Singh, helping local businesses, RTOs and VET colleges get online properly." />
    <meta property="og:url" content="https://Slashkode.com.au/about" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Slashkode | Melbourne Web Design Studio" />
    <meta name="twitter:description"
        content="Meet Slashkode — a Melbourne web design studio founded by Jatinder Singh." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AboutPage",
        "name": "About Slashkode",
        "description": "Meet Slashkode — a Melbourne-based web design and development studio helping local businesses, RTOs and VET colleges get online properly.",
        "mainEntity": {
            "@type": "ProfessionalService",
            "name": "Slashkode",
            "founder": {
                "@type": "Person",
                "name": "Jatinder Singh"
            },
            "url": "https://Slashkode.com.au",
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
                                    <h1 class="heroheading">About Slashkode</h1>
                                    <p>
                                        I'm Jatinder Singh, founder of Slashkode. What began as freelance web work under
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

        <!-- Why Slashkode exists -->
        <section class="sk-container">
            <div class="mission">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo BASE_PATH; ?>/public/img/myself.webp" class="img-fluid myself"
                            alt="Jatinder Singh, founder of Slashkode">
                    </div>
                    <div class="col-md-8">
                        <span class="sk-statement-eyebrow">/ Why Slashkode exists</span>
                        <h2 class="headingeffect">
                            Too many small businesses were paying agency prices for websites that didn't work
                        </h2>
                        <p>
                            After years working with Melbourne businesses as a freelancer, I kept seeing the same
                            problem: local businesses paying for websites that looked fine but never brought in
                            enquiries, or stuck with systems that were confusing to manage themselves. Meanwhile,
                            getting it done properly usually meant a big agency price tag most small businesses
                            couldn't justify.
                        </p>
                        <p>
                            Slashkode exists to close that gap — a website that's actually built to bring in
                            business, at a price that makes sense for a business your size, from someone you can
                            still reach after it's live.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why the pricing works the way it does -->
        <section class="sk-container">
            <div class="why-price">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <span class="sk-statement-eyebrow">/ Why the price is fair</span>
                        <h2 class="headingeffect">Fair pricing, no catch.</h2>
                        <p>
                            No office, no account managers, no big team to fund — so the saving goes into your
                            price instead of overhead. That's the honest reason it costs less than a typical
                            agency.
                        </p>
                        <p>
                            It's also why support doesn't stop at launch. Slashkode runs on a simple ongoing plan,
                            so once your site is live, I'm still around for updates, content changes, or a hand
                            when you need one — at a clear, fixed price. No surprise invoices for a five-minute
                            fix.
                        </p>
                        <a href="<?php echo BASE_PATH; ?>/price" class="why-price-link">
                            See full pricing details
                            <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" class="img-fluid" alt=""
                                width="13" height="13">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <ul class="why-price-list">
                            <li class="why-price-item">
                                <span class="why-price-num">01</span>
                                <div>
                                    <h3>Low overhead, lower price</h3>
                                    <p>No office or account managers sitting between you and the work — so that
                                        cost never gets added to your price.</p>
                                </div>
                            </li>
                            <li class="why-price-item">
                                <span class="why-price-num">02</span>
                                <div>
                                    <h3>Ongoing, not one-and-done</h3>
                                    <p>After launch, I'm still available for updates and content changes at a
                                        clear, fixed price — not a one-off handoff.</p>
                                </div>
                            </li>
                            <li class="why-price-item">
                                <span class="why-price-num">03</span>
                                <div>
                                    <h3>Built for businesses like yours</h3>
                                    <p>For small businesses that need a website done properly and real support,
                                        without the budget — or the need — for a big agency.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Background relevant to who Slashkode works with -->
        <section class="sk-container">
            <div class="about-background">
                <div class="row">
                    <div class="col-md-8">
                        <span class="sk-statement-eyebrow">/ Background</span>
                        <h2 class="headingeffect">Not just a developer — someone who's worked inside your industry</h2>
                        <p>
                            My background is in Computer Science, but a lot of my early career was spent working
                            in international student services at CRICOS and ESOS-registered institutions —
                            handling the administration and compliance that RTOs and VET colleges deal with every
                            day. So when I build a site for a training organisation, I already understand the
                            students, the paperwork, and what actually needs to be on the page — not just what
                            looks modern.
                        </p>
                        <p>
                            For other small businesses, it means the same thing in a different form: I take the
                            time to understand how your business actually runs before I design anything, instead
                            of dropping in a generic template and calling it done.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="about-credential-tags">
                            <span class="about-credential-tag">Computer Science</span>
                            <span class="about-credential-tag">CRICOS &amp; ESOS Experience</span>
                            <span class="about-credential-tag">RTO &amp; VET Compliance</span>
                            <span class="about-credential-tag">Small Business Focus</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services — short pointer, full detail lives on /services -->
        <section class="sk-container">
            <div class="about-services shadow">
                <h2 class="headingeffect">What I build</h2>
                <p>Websites, SEO, RTO &amp; VET college platforms, and custom web applications — see the full
                    breakdown on the services page.</p>
                <a href="<?php echo BASE_PATH; ?>/services" class="sk-btn sk-btn-secondary">
                    See all services
                    <img src="<?php echo BASE_PATH; ?>/public/icons/top-right.png" width="15" height="15" alt="">
                    <span></span>
                </a>
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