<?php



function sk_get_portfolio(string $page, string $jsonPath): array
{
  if (!file_exists($jsonPath)) {
    return [];
  }

  $json = file_get_contents($jsonPath);
  $all = json_decode($json, true);

  if (!is_array($all)) {
    return [];
  }

  return array_values(array_filter($all, function ($item) use ($page) {
    return isset($item['pages']) && in_array($page, $item['pages'], true);
  }));
}

// Adjust this path if your project structure differs — relative to
// THIS file's location (includes/sections/portfolio.php), up two
// levels to project root, then into /data/portfolio.json.
$portfolioJsonPath = __DIR__ . '/data/portfolio.json';
$portfolioPage = $portfolioPage ?? 'home';
$portfolioItems = sk_get_portfolio($portfolioPage, $portfolioJsonPath);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Our Work | Melbourne Web Design & Development Portfolio | slashkode</title>
    <meta name="description"
        content="Real websites built for Melbourne businesses and RTOs — from RTO/VET enrolment platforms to custom CMS dashboards. See the work slashkode has shipped." />
    <meta name="keywords"
        content="Melbourne web design portfolio, website design examples Melbourne, web development case studies" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/work.php" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Our Work | Melbourne Web Design & Development Portfolio | slashkode" />
    <meta property="og:description"
        content="Real websites built for Melbourne businesses and RTOs — from enrolment platforms to custom dashboards." />
    <meta property="og:url" content="https://slashkode.com.au/work.php" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Our Work | slashkode Melbourne" />
    <meta name="twitter:description" content="Real Melbourne websites and RTO platforms we've built and shipped." />

    <!-- Schema.org: Portfolio as ItemList -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "slashkode Portfolio",
        "description": "Websites and web applications built by slashkode for Melbourne businesses and RTOs.",
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Australian International Institute of Technology",
                    "url": "https://www.aiit.edu.au/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Brighton Institute of Technology",
                    "url": "https://www.bit.edu.au/"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "International Student Tips",
                    "url": "https://internationalstudenttips.com.au/"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "Yarramovers",
                    "url": "https://www.yarramovers.com.au/"
                },
                {
                    "@type": "ListItem",
                    "position": 5,
                    "name": "JD Shopfront and Shutters",
                    "url": "https://www.jdshopfrontandshutter.co.uk/"
                }
            ]
        }
    }
    </script>

    <?php require_once('includes/stylesheets.php'); ?>



    <link rel="stylesheet" href="public/css/pages/work.css" />


    <link rel="stylesheet" href="public/css/faq.css" />
    <link rel="stylesheet" href="public/css/cta.css" />





</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php'); ?>
            <section class="sk-container">
                <div class="heroWork">
                    <h1 class="heroheading">Our Work</h1>
                    <p>A look at the Melbourne websites, RTO and VET platforms, and custom applications we've built —
                        real projects, real outcomes, no filler.</p>
                </div>
            </section>
            <section class="works">

                <?php if (!empty($portfolioItems)) : ?>
                <?php foreach ($portfolioItems as $item) : ?>
                <div class="work">
                    <h2><?php echo htmlspecialchars($item['title'] ?? ''); ?></h2>

                    <?php if (!empty($item['chips'])) : ?>
                    <div class="tags">
                        <ul class="nav">
                            <?php foreach ($item['chips'] as $chip) : ?>
                            <li><?php echo htmlspecialchars($chip); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <div class="work-media">
                        <img src="<?php echo BASE_PATH; ?>/<?php echo htmlspecialchars($item['image'] ?? ''); ?>"
                            alt="<?php echo htmlspecialchars($item['alt'] ?? $item['title'] ?? ''); ?>" loading="lazy">
                    </div>

                    <div class="work-desc">
                        <?php if (!empty($item['desc'])) : ?>
                        <p><?php echo htmlspecialchars($item['desc']); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($item['cta'])) : ?>
                        <a href="<?php echo htmlspecialchars($item['link'] ?? '#'); ?>" class="sk-btn sk-btn-primary">
                            <?php echo htmlspecialchars($item['cta']); ?>
                            <span></span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <!-- 6. Custom CMS -->
                <div class="work">
                    <h2>Custom CMS &amp; Admin Dashboards</h2>
                    <div class="tags">
                        <ul class="nav">
                            <li>Custom CMS</li>
                            <li>Dashboard</li>
                            <li>PHP</li>
                            <li>Tools</li>
                        </ul>
                    </div>
                    <div class="work-media">
                        <img src="<?php echo BASE_PATH; ?>/public/img/mockups/cms.jpg"
                            alt="Custom CMS admin dashboard Melbourne">
                    </div>
                    <div class="work-desc">
                        <p>Tailored content management systems and admin dashboards for Melbourne businesses that need
                            more control than a standard website builder. Built for easy updates, secure access, and
                            day-to-day use by non-technical teams.</p>
                        <a href="#" class="sk-btn sk-btn-primary">case study
                            <span></span>
                        </a>
                    </div>
                </div>

            </section>
            <?php require_once('includes/sections/cta.php'); ?>


            <?php $faqPage = 'work';
      require_once('includes/sections/faq.php'); ?>
            <?php require_once('includes/island.php'); ?>

        </div>
        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>



    <script src="public/js/cta.js" defer></script>
    <script src="public/js/pages/work.js" defer></script>



</body>

</html>