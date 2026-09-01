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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Slashkode | About Us</title>
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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, delectus! Inventore fuga laborum fugiat optio perspiciatis expedita odit ipsam dolores impedit, similique, ipsum accusamus ad nemo mollitia distinctio, repudiandae rem?</p>
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
                <img
                  src="<?php echo htmlspecialchars($item['image'] ?? ''); ?>"
                  alt="<?php echo htmlspecialchars($item['alt'] ?? $item['title'] ?? ''); ?>">
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
            <img src="public/img/mockups/cms.jpg" alt="Custom CMS admin dashboard Melbourne">
          </div>
          <div class="work-desc">
            <p>Tailored content management systems and admin dashboards for Melbourne businesses that need more control than a standard website builder. Built for easy updates, secure access, and day-to-day use by non-technical teams.</p>
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



  <script src="public/js/cta.js"></script>
  <script src="public/js/pages/work.js"></script>



</body>

</html>