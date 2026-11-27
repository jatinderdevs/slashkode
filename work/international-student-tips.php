<?php require_once __DIR__ . '/../config.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Website and CMS Case Study: International Student Tips | Slashkode</title>
    <meta name="description"
        content="How Slashkode built International Student Tips, a fast, SEO-ready guide website and easy publishing CMS that helps international students in Australia with visas, work, tax and housing." />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/work/international-student-tips" />

    <!-- Open Graph -->
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="International Student Tips Case Study: A Guide Website Built to Rank | Slashkode" />
    <meta property="og:description"
        content="A plain-English guide website for international students in Australia, with an easy CMS, topic structure, newsletter, a free rent checker tool and SEO built in." />
    <meta property="og:url" content="https://slashkode.com.au/work/international-student-tips" />
    <meta property="og:site_name" content="Slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="International Student Tips Case Study: Blog Website and CMS | Slashkode" />
    <meta name="twitter:description"
        content="How we built a fast, easy-to-publish guide website for international students in Australia." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [{
                "@type": "Article",
                "@id": "https://slashkode.com.au/work/international-student-tips#article",
                "headline": "International Student Tips: A Guide Website and CMS Built to Publish and Rank",
                "description": "A case study of the website and content management system Slashkode built for International Student Tips: topic-based guides, an easy publishing dashboard, author and review dates, newsletter signup, a free rent checker tool and SEO foundations.",
                "mainEntityOfPage": "https://slashkode.com.au/work/international-student-tips",
                "datePublished": "2026-11-27",
                "dateModified": "2026-11-27",
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
                    "@type": "WebSite",
                    "name": "International Student Tips",
                    "url": "https://www.internationalstudenttips.com.au/"
                },
                "image": "https://slashkode.com.au/public/img/mockups/ist.webp"
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
                        "item": "https://slashkode.com.au/work/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "International Student Tips",
                        "item": "https://slashkode.com.au/work/international-student-tips"
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
                        <a href="<?php echo BASE_PATH; ?>/work/" class="breadcrumb-btn"> / Work</a>
                        <a href="<?php echo BASE_PATH; ?>/work/international-student-tips" class="breadcrumb-btn"> /
                            Case study</a>
                    </div>

                    <h1 class="heroheading">International Student Tips: A Guide Website Built to Publish and Rank</h1>
                    <p class="m-auto">
                        International Student Tips helps international students in Australia make sense of visas, work
                        rights, tax, housing and money, in plain English. We designed and built the website and the
                        publishing system behind it, so the team can write, update and organise guides without a
                        developer, and every guide is set up to be found in search.
                    </p>

                    <dl class="cs-facts">
                        <div class="cs-fact">
                            <dt>Client</dt>
                            <dd>International Student Tips</dd>
                        </div>
                        <div class="cs-fact">
                            <dt>Industry</dt>
                            <dd>Education and student guides, Australia</dd>
                        </div>
                        <div class="cs-fact">
                            <dt>What we built</dt>
                            <dd>Guide website, CMS and rent checker tool</dd>
                        </div>
                        <div class="cs-fact">
                            <dt>Live site</dt>
                            <dd><a href="https://internationalstudenttips.com.au" target="_blank"
                                    rel="noopener">internationalstudenttips.com.au</a>
                            </dd>
                        </div>
                    </dl>

                    <figure class="cs-hero-media">
                        <!-- SWAP: replace with your best homepage screenshot (keep width/height matching the new file) -->
                        <img src="<?php echo BASE_PATH; ?>/public/img/mockups/istthumb.webp" width="1864" height="983"
                            alt="International Student Tips homepage with featured guides, topics and the rent checker tool"
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
                            <span class="cs-label">/ 01 The challenge</span>
                            <h2>Lots of useful advice. Hard to publish, harder to find.</h2>
                        </div>
                        <div class="cs-body cs-reveal">
                            <!-- EDIT: adjust this to match the client's real starting point -->
                            <p>
                                International students search for answers to stressful questions: how many hours they
                                can work, what tax they pay, how much rent is fair. The answers are spread across
                                government pages that are hard to read and quick to go out of date.
                            </p>
                            <p>
                                The goal was a site students could trust, written in plain English with official
                                sources linked, and a publishing setup that made it easy to add new guides, keep old
                                ones up to date and get them ranking on Google.
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
                            <h2>A content site and the system that runs it</h2>
                            <p>
                                A fast front end for readers, and a simple dashboard for the people who write the
                                guides.
                            </p>
                        </div>
                        <ol class="cs-rows">
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">01</span>
                                <div>
                                    <h3>Easy publishing dashboard</h3>
                                    <p>Writers create and edit guides, images, categories and FAQs from one dashboard.
                                        No code, and no waiting on a developer to post an article.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">02</span>
                                <div>
                                    <h3>Guides organised by topic</h3>
                                    <p>Eight topics, from Visa and Immigration to Housing and Tax and Money, each with
                                        its own page, so students can go straight to what they need.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">03</span>
                                <div>
                                    <h3>Guides people can trust</h3>
                                    <p>Every article shows its author, published and reviewed dates, a quick answer,
                                        key takeaways and a list of official sources, so readers know the advice is
                                        current.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">04</span>
                                <div>
                                    <h3>Free rent checker tool</h3>
                                    <p>Students enter their weekly income and rent and see how it compares with the 30%
                                        guideline and typical rents in their city.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">05</span>
                                <div>
                                    <h3>Newsletter signup</h3>
                                    <p>Signup forms on the homepage and inside articles turn one-off readers into an
                                        audience the site can reach again.</p>
                                </div>
                            </li>
                            <li class="cs-row cs-reveal">
                                <span class="cs-num">06</span>
                                <div>
                                    <h3>SEO built into every page</h3>
                                    <p>Clean URLs, descriptive titles, breadcrumbs, FAQ sections, related guides and
                                        internal links are part of the template, so each new guide starts with good
                                        foundations.</p>
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
                            <h2>What changed for writers and readers</h2>
                        </div>
                        <div class="cs-reveal">
                            <!-- EDIT: adjust the "Before" column to match the real starting point -->
                            <table class="cs-compare">
                                <caption class="cs-sr">How International Student Tips published and organised content
                                    before and after the new website</caption>
                                <thead>
                                    <tr>
                                        <th scope="col"><span class="cs-sr">Area</span></th>
                                        <th scope="col">Before</th>
                                        <th scope="col">After</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Publishing a guide</th>
                                        <td data-label="Before">Needed technical help to format and post</td>
                                        <td data-label="After">Written and published from a simple dashboard</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Keeping guides current</th>
                                        <td data-label="Before">No clear way to show when advice was checked</td>
                                        <td data-label="After">Reviewed dates and official sources on every guide</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Finding the right guide</th>
                                        <td data-label="Before">Articles in one long list</td>
                                        <td data-label="After">Eight topic pages, featured guides and related links</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Search visibility</th>
                                        <td data-label="Before">SEO handled page by page, if at all</td>
                                        <td data-label="After">Titles, URLs, FAQs and internal links built in</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Staying in touch</th>
                                        <td data-label="Before">Readers left and did not come back</td>
                                        <td data-label="After">Newsletter signup on the homepage and in articles</td>
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
                            <span class="cs-label">/ 04 Inside the site</span>
                            <h2>A closer look</h2>
                            <p>The pages students read and the dashboard the team writes in.</p>
                        </div>
                        <div class="cs-shots">



                            <figure class="cs-shot cs-shot--wide cs-reveal">
                                <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/ist/istblog.webp"
                                    width="1680" height="983" loading="lazy"
                                    alt="International Student Tips guide page with category, author, published and reviewed dates and read time">
                                <figcaption>A guide page: quick answer, author, reviewed date and official sources.
                                </figcaption>
                            </figure>
                            <figure class="cs-shot cs-reveal">
                                <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/ist/isthighlighttwo.webp"
                                    width="1669" height="916" loading="lazy"
                                    alt="Publishing dashboard editor showing a guide being written with formatting, image, table and callout tools">
                                <figcaption>The publishing dashboard, where the team writes and updates guides.
                                </figcaption>
                            </figure>
                            <figure class="cs-shot cs-reveal">
                                <img src="<?php echo BASE_PATH; ?>/public/img/case-studies/ist/isthighlightone.webp"
                                    width="1680" height="983" loading="lazy"
                                    alt="Rent checker tool showing rent as a share of income against the 30% guideline and typical city rents">
                                <figcaption>The free rent checker, comparing rent with income and city averages.
                                </figcaption>
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
                            <h2>Easier to publish, easier to find</h2>
                        </div>
                        <div class="cs-outcomes">
                            <!-- EDIT: add real numbers here if you have them (traffic, rankings, signups) -->
                            <p class="cs-reveal">The team publishes and updates guides on their own, without a
                                developer.</p>
                            <p class="cs-reveal">More than 45 guides now sit in clear topics, each with dates and
                                sources students can check.</p>
                            <p class="cs-reveal">Every new guide is ready for search from day one, with the SEO basics
                                already in the template.</p>
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
                                <a href="<?php echo BASE_PATH; ?>/services/web-design-development">
                                    <span>
                                        <strong>Website design and development</strong>
                                        <small>Content sites and business websites built to be found.</small>
                                    </span>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_PATH; ?>/services/seo-services">
                                    <span>
                                        <strong>SEO services</strong>
                                        <small>The search foundations behind a site like this one.</small>
                                    </span>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_PATH; ?>/work/arr-logistics">
                                    <span>
                                        <strong>ARR Logistics case study</strong>
                                        <small>An online freight order portal with automatic manifests.</small>
                                    </span>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_PATH; ?>/work/">
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

        <?php $ctaPage = 'case-study-ist';
        require_once __DIR__ . '/../includes/sections/cta.php'; ?>

        <?php $faqPage = 'international-student-tips-case-study';
        require_once __DIR__ . '/../includes/sections/faq.php'; ?>

        <?php require_once __DIR__ . '/../includes/island.php'; ?>

        <?php require_once __DIR__ . '/../includes/footer.php'; ?>
    </main>

    <?php require_once __DIR__ . '/../includes/customjs.php'; ?>

    <script src="<?php echo BASE_PATH; ?>/public/js/cta.js" defer></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/pages/case-study.js" defer></script>
</body>

</html>