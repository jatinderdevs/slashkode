<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freight Order Portal Case Study: ARR Logistics | Slashkode</title>
    <meta name="description"
        content="How Slashkode replaced email orders and hand-made manifests with an online freight order portal, automatic PDF manifests and tracking for ARR Logistics." />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/work/arr-logistics" />

    <!-- Open Graph -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ARR Logistics Case Study: An Online Freight Order Portal | Slashkode" />
    <meta property="og:description"
        content="From email orders and manual manifests to an online order portal with automatic PDF manifests, order tracking and one admin view of every job." />
    <meta property="og:url" content="https://slashkode.com.au/work/arr-logistics" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="ARR Logistics Case Study: Online Freight Order Portal | Slashkode" />
    <meta name="twitter:description"
        content="How a Melbourne freight company moved from email orders to an online order portal with automatic manifests and tracking." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "Article",
                "@id": "https://slashkode.com.au/work/arr-logistics#article",
                "headline": "ARR Logistics: From Email Orders to an Online Freight Order Portal",
                "description": "A case study of the website and online order portal Slashkode built for ARR Logistics, a Melbourne freight and transport company: online orders, automatic PDF manifests, order tracking, secure client logins and an admin dashboard.",
                "mainEntityOfPage": "https://slashkode.com.au/work/arr-logistics",
                "datePublished": "2026-11-03",
                "dateModified": "2026-11-03",
                "inLanguage": "en-AU",
                "author": {
                    "@type": "Organization",
                    "name": "Slashkode",
                    "url": "https://slashkode.com.au"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "Slashkode",
                    "url": "https://slashkode.com.au",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "https://slashkode.com.au/public/img/slashkode.png"
                    }
                },
                "about": {
                    "@type": "Organization",
                    "name": "ARR Logistics",
                    "url": "https://arrlogistics.com.au/"
                },
                "image": "https://slashkode.com.au/public/img/mockups/arrcrm.webp"
            },
            {
                "@type": "BreadcrumbList",
                "itemListElement": [{
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://slashkode.com.au/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Work",
                        "item": "https://slashkode.com.au/work"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "ARR Logistics",
                        "item": "https://slashkode.com.au/work/arr-logistics"
                    }
                ]
            }
        ]
    }
    </script>

    <?php require_once __DIR__ . '/../includes/stylesheets.php'; ?>

    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/case-study.css" />
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/cta.css" />
</head>

<body class="cs-page">
    <main>
        <div class="container-fluid">
            <?php require_once __DIR__ . '/../includes/navbar.php'; ?>

            <!-- ════════════════════════════════════
             SECTION 1 — Hero
        ════════════════════════════════════ -->
            <section class="cs-hero">
                <div class="sk-container">
                    <div class="flexBreadcrumb">
                        <a href="<?php echo BASE_PATH; ?>/" class="breadcrumb-btn"> / home</a>
                        <a href="<?php echo BASE_PATH; ?>/work" class="breadcrumb-btn"> / Work</a>
                        <a href="<?php echo BASE_PATH; ?>//work/arr-logistics" class="breadcrumb-btn"> / Case study</a>



                    </div>

                    <h1 class="heroheading">ARR Logistics: From Email Orders to an Online Freight Order Portal</h1>
                    <p class="m-auto">
                        ARR Logistics is a Melbourne freight and transport company. Orders used to arrive by email and
                        every manifest was made by hand. We built them a website and an online order portal, so
                        customers can place and track orders themselves and the paperwork takes care of itself.
                    </p>

                    <dl class="cs-facts">
                        <div class="cs-fact">
                            <dt>Client</dt>
                            <dd>ARR Logistics</dd>
                        </div>
                        <div class="cs-fact">
                            <dt>Industry</dt>
                            <dd>Freight and transport, Melbourne</dd>
                        </div>
                        <div class="cs-fact">
                            <dt>What we built</dt>
                            <dd>Website and online order portal</dd>
                        </div>
                        <div class="cs-fact">
                            <dt>Live site</dt>
                            <dd><a href="https://arrlogistics.com.au/" target="_blank"
                                    rel="noopener">arrlogistics.com.au</a>
                            </dd>
                        </div>
                    </dl>

                    <figure class="cs-hero-media">
                        <!-- SWAP: replace with your best portal screenshot (keep width/height matching the new file) -->
                        <img src="<?php echo BASE_PATH; ?>/public/img/mockups/arrcrm.webp" width="1864" height="983"
                            alt="ARR Logistics online order portal showing client login, order management and branded PDF manifests"
                            fetchpriority="high" />
                    </figure>
                </div>
            </section>

            <!-- ════════════════════════════════════
             SECTION 2 — The problem
        ════════════════════════════════════ -->
            <section class="cs-section">
                <div class="sk-container">
                    <div class="cs-grid">
                        <div class="cs-head cs-reveal">
                            <span class="cs-label">/ 01 The problem</span>
                            <h2>Orders by email. Manifests by hand.</h2>
                        </div>
                        <div class="cs-body cs-reveal">
                            <p>
                                Every job started as an email. Someone then had to take the details from that email and
                                create the manifest, the paperwork that travels with each delivery, by hand.
                            </p>
                            <p>
                                Customers who wanted to know where their order was had to call or text. It worked, but
                                it was slow, it depended on people remembering things, and nobody had a clear view of
                                every job in one place.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
             SECTION 3 — What we built
        ════════════════════════════════════ -->
            <section class="cs-section">
                <div class="sk-container">
                    <div class="cs-grid">
                        <div class="cs-head cs-reveal">
                            <span class="cs-label">/ 02 What we built</span>
                            <h2>One portal for orders, paperwork and tracking</h2>
                            <p>
                                The new website is the front door. Behind it sits a secure order portal that handles
                                the work that used to happen in the inbox.
                            </p>
                        </div>
                        <ol class="cs-rows">
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">01</span>
                                <div>
                                    <h3>Secure client login</h3>
                                    <p>Each customer has their own login. Their details are saved, so repeat orders
                                        start prefilled and take minutes.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">02</span>
                                <div>
                                    <h3>Online order placement</h3>
                                    <p>Customers place an order through a simple form instead of writing an email, so
                                        the team gets everything they need for the job up front.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">03</span>
                                <div>
                                    <h3>Automatic PDF manifest</h3>
                                    <p>The moment an order is placed, a branded PDF manifest is generated. No retyping
                                        and no manual paperwork.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">04</span>
                                <div>
                                    <h3>Instant confirmation and job alert</h3>
                                    <p>The customer receives a confirmation email with the manifest attached, and the
                                        admin team is alerted about the new job at the same time.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">05</span>
                                <div>
                                    <h3>Order tracking</h3>
                                    <p>Customers can follow their order themselves, any time, instead of calling or
                                        texting to ask for an update.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">06</span>
                                <div>
                                    <h3>Admin dashboard and reports</h3>
                                    <p>Every job sits in one dashboard with its current status, and the team can
                                        generate reports whenever they need them.</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
             SECTION 4 — Before and after
        ════════════════════════════════════ -->
            <section class="cs-section">
                <div class="sk-container">
                    <div class="cs-grid">
                        <div class="cs-head cs-reveal">
                            <span class="cs-label">/ 03 Before and after</span>
                            <h2>What changed day to day</h2>
                        </div>
                        <div class="cs-reveal">
                            <table class="cs-compare">
                                <caption class="cs-sr">How ARR Logistics handled orders before and after the portal
                                </caption>
                                <thead>
                                    <tr>
                                        <th scope="col"><span class="cs-sr">Area</span></th>
                                        <th scope="col">Before</th>
                                        <th scope="col">After</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Placing an order</th>
                                        <td data-label="Before">An email for every job, with the details written out
                                            each time</td>
                                        <td data-label="After">An online form, with saved details prefilled</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Manifests</th>
                                        <td data-label="Before">Created by hand for each order</td>
                                        <td data-label="After">Generated automatically as a PDF and emailed out</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Order updates</th>
                                        <td data-label="Before">Customers called or texted to ask</td>
                                        <td data-label="After">Customers track their order themselves</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Seeing all jobs</th>
                                        <td data-label="Before">Jobs scattered across emails</td>
                                        <td data-label="After">Every job and its status in one admin dashboard</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Repeat customers</th>
                                        <td data-label="Before">The same details sent again with each order</td>
                                        <td data-label="After">A secure login with details already saved</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
             SECTION 5 — Screens
        ════════════════════════════════════ -->
            <section class="cs-section">
                <div class="sk-container">
                    <div class="cs-grid">
                        <div class="cs-head cs-reveal">
                            <span class="cs-label">/ 04 Inside the portal</span>
                            <h2>A closer look</h2>
                            <p>The screens customers and the admin team use every day.</p>
                        </div>
                        <div class="cs-shots">
                            <!-- SWAP each .cs-shot__ph div below for an <img>, e.g.
                                 <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/arr-logistics/order-form.webp"
                                      width="1600" height="1000" loading="lazy" alt="..."> -->



                            <figure class="cs-shot cs-shot--wide cs-reveal">
                                <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/arr-logistics/orders.webp"
                                    width="auto" height="auto" loading="lazy" alt="arr admin dashboard">
                                <figcaption>The admin dashboard: every job and its status in one view.</figcaption>
                            </figure>
                            <figure class="cs-shot cs-reveal">
                                <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/arr-logistics/order.webp"
                                    width="auto" height="auto" loading="lazy" alt="arr order form">
                                <figcaption>The order form, with a returning customer's details prefilled.</figcaption>
                            </figure>
                            <figure class="cs-shot cs-reveal">
                                <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/arr-logistics/pdfview.png"
                                    width="auto" height="auto" loading="lazy" alt="arr PDF manifest">
                                <figcaption>The branded PDF manifest, generated automatically.</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
             SECTION 6 — Outcome
        ════════════════════════════════════ -->
            <section class="cs-section">
                <div class="sk-container">
                    <div class="cs-grid">
                        <div class="cs-head cs-reveal">
                            <span class="cs-label">/ 05 The outcome</span>
                            <h2>Clearer for customers, calmer for the team</h2>
                        </div>
                        <div class="cs-outcomes">
                            <p class="cs-reveal">Customers can place an order and follow it without picking up the
                                phone.</p>
                            <p class="cs-reveal">Manifests and confirmations happen on their own, so nobody retypes
                                details.</p>
                            <p class="cs-reveal">The whole business can see every job, its status and the reports
                                behind it in one place.</p>
                            <p class="cs-byline cs-reveal">Designed, built and delivered by Jatinder.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
             SECTION 7 — Related links (internal linking)
        ════════════════════════════════════ -->
            <section class="cs-section cs-section--last">
                <div class="sk-container">
                    <div class="cs-grid">
                        <div class="cs-head cs-reveal">
                            <span class="cs-label">/ 06 Keep exploring</span>
                            <h2>More from Slashkode</h2>
                        </div>
                        <ul class="cs-links cs-reveal">
                            <li>
                                <a href="<?php echo BASE_PATH; ?>/services/custom-web-applications">
                                    <span>
                                        <strong>Custom web applications</strong>
                                        <small>Software built around how your team already works.</small>
                                    </span>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_PATH; ?>/services/web-design-development">
                                    <span>
                                        <strong>Website design and development</strong>
                                        <small>The kind of website that sits in front of a portal like this.</small>
                                    </span>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_PATH; ?>/work">
                                    <span>
                                        <strong>All our work</strong>
                                        <small>Websites, college sites and custom systems we have built.</small>
                                    </span>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <?php $ctaPage = 'case-study';
        require_once __DIR__ . '/../includes/sections/cta.php'; ?>

        <?php $faqPage = 'arr-logistics-case-study';
        require_once __DIR__ . '/../includes/sections/faq.php'; ?>

        <?php require_once __DIR__ . '/../includes/island.php'; ?>

        <?php require_once __DIR__ . '/../includes/footer.php'; ?>
    </main>

    <?php require_once __DIR__ . '/../includes/customjs.php'; ?>

    <script src="<?php echo BASE_PATH; ?>/public/js/cta.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/pages/case-study.js" defer></script>
</body>

</html>