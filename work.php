<?php

/**
 * Work page: every project in data/portfolio.json, one pinned slide each,
 * using the same card design as the homepage portfolio.
 *
 * - Entries without an "id" (e.g. the "Your next project" template) are skipped.
 * - The Custom CMS project is added at the end from the array below.
 */

$portfolioJsonPath = __DIR__ . '/data/portfolio.json';
$workProjects = [];

if (file_exists($portfolioJsonPath)) {
  $all = json_decode(file_get_contents($portfolioJsonPath), true);
  if (is_array($all)) {
    foreach ($all as $p) {
      if (!empty($p['id'])) {
        $workProjects[] = $p;
      }
    }
  }
}

// Hardcoded project, always last. Move it into portfolio.json if you want it managed there.
$workProjects[] = [
  'id'          => 'custom-cms',
  'title'       => 'Custom CMS & Admin Dashboards',
  'topTag'      => 'Custom CMS',
  'image'       => 'public/img/mockups/cms.jpg',
  'alt'         => 'Custom CMS admin dashboard Melbourne',
  'link'        => '#',
  'cta'         => 'Case study',
  'chips'       => ['Custom CMS', 'Dashboard', 'PHP', 'Tools'],
  'description' => 'Tailored content management systems and admin dashboards for Melbourne businesses that need more control than a standard website builder. Built for easy updates, secure access, and day-to-day use by non-technical teams.',
];

// Works whether image paths in the JSON start with "/" or not.
function sk_work_asset(string $path): string
{
  return rtrim(BASE_PATH, '/') . '/' . ltrim($path, '/');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

    <!-- portfolio.css (the card styles) is already loaded by stylesheets.php -->
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

            <section class="works p-0">
                <?php foreach ($workProjects as $i => $item) : ?>
                <?php
                  $link     = $item['link'] ?? '#';
                  $external = strpos($link, 'http') === 0;
                ?>
                <div class="work">
                    <article class="drag-card">
                        <div class="drag-card-body">
                            <div class="drag-card-hero">
                                <div class="drag-card-media">
                                    <img src="<?php echo htmlspecialchars(sk_work_asset($item['image'] ?? '')); ?>"
                                        alt="<?php echo htmlspecialchars($item['alt'] ?? $item['title'] ?? ''); ?>"
                                        <?php echo $i === 0 ? '' : 'loading="lazy"'; ?> draggable="false" />
                                </div>

                                <div class="drag-card-side">
                                    <?php if (!empty($item['topTag'])) : ?>
                                    <span class="drag-card-tag"><?php echo htmlspecialchars($item['topTag']); ?></span>
                                    <?php endif; ?>

                                    <h2 class="drag-card-title"><?php echo htmlspecialchars($item['title'] ?? ''); ?>
                                    </h2>

                                    <?php if (!empty($item['chips'])) : ?>
                                    <div class="drag-card-tags">
                                        <?php foreach ($item['chips'] as $chip) : ?>
                                        <span class="drag-tag"><?php echo htmlspecialchars($chip); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if (!empty($item['cta'])) : ?>
                                    <a href="<?php echo htmlspecialchars($link); ?>"
                                        <?php echo $external ? 'target="_blank" rel="noopener"' : ''; ?>
                                        class="sk-btn sk-btn-primary btnlive">
                                        <?php echo htmlspecialchars($item['cta']); ?>
                                        <span></span>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php if (!empty($item['description'])) : ?>
                            <p class="drag-card-desc"><?php echo htmlspecialchars($item['description']); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($item['result'])) : ?>
                            <div class="drag-card-result">
                                <p><?php echo htmlspecialchars($item['result']); ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
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