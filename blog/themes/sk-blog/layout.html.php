<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php
// Load main site config so BASE_PATH and other constants are available
require_once __DIR__ . '/../../../config.php';
?>
<!DOCTYPE html>
<html lang="<?php echo blog_language(); ?>">

<head>
    <?php echo head_contents(); ?>
    <?php echo $metatags; ?>

    <!-- Main site stylesheets (same as the rest of the website) -->
    <?php require_once __DIR__ . '/../../../includes/stylesheets.php'; ?>

    <!-- Blog-specific styles -->
    <link rel="stylesheet" href="<?php echo theme_path(); ?>css/style.css?v=5">

    <!-- GSAP (needed for island menu + footer wave) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>


<body class="<?php echo $bodyclass; ?>">

    <?php if (login()) { toolbar(); } ?>

    <!-- ========== SAME HEADER AS MAIN SITE ========== -->
    <?php require_once __DIR__ . '/../../../includes/navbar.php'; ?>

    <!-- ========== BLOG CONTENT ========== -->
    <main class="sk-blog-main">
        <div class="sk-blog-container">
            <?php echo content(); ?>
        </div>
    </main>

    <!-- ========== SAME FOOTER AS MAIN SITE ========== -->
    <?php require_once __DIR__ . '/../../../includes/footer.php'; ?>

    <!-- Main site JS -->
    <script src="<?php echo BASE_PATH; ?>/public/js/navbar.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/footer.js"></script>

</body>

</html>