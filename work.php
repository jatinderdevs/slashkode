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

        <!-- 1. AIIT -->
        <div class="work">
          <h2>Australian International Institute of Technology</h2>
          <div class="tags">
            <ul class="nav">
              <li>Website</li>
              <li>SEO</li>
              <li>UI/UX</li>
              <li>RTO College</li>
            </ul>
          </div>
          <div class="work-media">
            <img src="public/img/mockups/aiit.jpg" alt="Australian International Institute of Technology website Melbourne">
          </div>
          <div class="work-desc">
            <p>Full website design and development for a Melbourne RTO. Built with clear course information, student enquiry paths, and SEO foundations so prospective students can find and enrol more easily.</p>
            <a href="#" class="sk-btn sk-btn-primary">case study
              <span></span>
            </a>
          </div>
        </div>

        <!-- 2. Yarramovers -->
        <div class="work">
          <h2>Yarramovers</h2>
          <div class="tags">
            <ul class="nav">
              <li>Website</li>
              <li>Local SEO</li>
              <li>UI/UX</li>
              <li>Moving Company</li>
            </ul>
          </div>
          <div class="work-media">
            <img src="public/img/mockups/yara.png" alt="Yarramovers Melbourne moving company website">
          </div>
          <div class="work-desc">
            <p>Website for a Melbourne moving company designed to generate more local leads. Clear service pages, quote-focused layout, and a structure that helps families and businesses find the right moving option quickly.</p>
            <a href="https://www.yarramovers.com.au/" class="sk-btn sk-btn-primary" target="_blank" rel="noopener">case study
              <span></span>
            </a>
          </div>
        </div>

        <!-- 3. Brighton Institute -->
        <div class="work">
          <h2>Brighton Institute of Technology</h2>
          <div class="tags">
            <ul class="nav">
              <li>Website</li>
              <li>SEO</li>
              <li>RTO</li>
              <li>Education</li>
            </ul>
          </div>
          <div class="work-media">
            <img src="public/img/mockups/bit.png" alt="Brighton Institute of Technology VET college website">
          </div>
          <div class="work-desc">
            <p>ASQA-aware website for a Melbourne VET college. Structured course catalogue, clear enrolment information, and a student-friendly design that meets regulatory needs without looking generic.</p>
            <a href="#" class="sk-btn sk-btn-primary">case study
              <span></span>
            </a>
          </div>
        </div>

        <!-- 4. International Student Tips -->
        <div class="work">
          <h2>International Student Tips</h2>
          <div class="tags">
            <ul class="nav">
              <li>Website</li>
              <li>CMS</li>
              <li>SEO</li>
              <li>Content</li>
            </ul>
          </div>
          <div class="work-media">
            <img src="public/img/mockups/ist.png" alt="International Student Tips Melbourne blog website">
          </div>
          <div class="work-desc">
            <p>Content-focused website and admin dashboard for a Melbourne blog helping international students. Easy publishing tools, clean reading experience, and SEO setup so useful articles can rank and reach the right audience.</p>
            <a href="https://internationalstudenttips.com.au/" class="sk-btn sk-btn-primary" target="_blank" rel="noopener">case study
              <span></span>
            </a>
          </div>
        </div>

        <!-- 5. Dalavoro -->
        <div class="work">
          <h2>Dalavoro</h2>
          <div class="tags">
            <ul class="nav">
              <li>Website</li>
              <li>UI/UX</li>
              <li>Brand</li>
              <li>Products</li>
            </ul>
          </div>
          <div class="work-media">
            <img src="public/img/mockups/dalavoro.png" alt="Dalavoro workwear and tools brand website">
          </div>
          <div class="work-desc">
            <p>Modern product website for a workwear and tools brand. Clean layout that puts the products first, with a professional look that supports both retail and trade customers.</p>
            <a href="https://dalavoro.com.au/" class="sk-btn sk-btn-primary" target="_blank" rel="noopener">case study
              <span></span>
            </a>
          </div>
        </div>

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


      <?php require_once('includes/sections/faq.php'); ?>

    </div>
    <?php require_once('includes/footer.php'); ?>

  </main>
  <?php require_once('includes/customjs.php'); ?>



  <script src="public/js/cta.js"></script>
  <script src="public/js/pages/work.js"></script>



</body>

</html>