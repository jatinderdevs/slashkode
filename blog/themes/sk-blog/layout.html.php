<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php
// Load main site config so BASE_PATH and other constants are available
require_once __DIR__ . '/../../../config.php';

/**
 * Add Bootstrap classes to every <table> in the blog content and wrap it in
 * .table-responsive. Done server-side so it works without JS and without a
 * flash of unstyled tables. Safe to run twice (skips tables already done).
 */
if (!function_exists('sk_bootstrap_tables')) {
    function sk_bootstrap_tables($html)
    {
        if (stripos($html, '<table') === false) {
            return $html;
        }

        // Add .table .table-striped to the opening tag (merging any existing class attr)
        $html = preg_replace_callback('/<table\b([^>]*)>/i', function ($m) {
            $attrs = $m[1];
            $add = ['table', 'table-striped'];
            if (preg_match('/\bclass\s*=\s*(["\'])(.*?)\1/i', $attrs, $c)) {
                $classes = preg_split('/\s+/', trim($c[2]), -1, PREG_SPLIT_NO_EMPTY);
                $classes = array_unique(array_merge($classes, $add));
                $attrs = str_replace($c[0], 'class="' . implode(' ', $classes) . '"', $attrs);
            } else {
                $attrs .= ' class="' . implode(' ', $add) . '"';
            }
            return '<table' . $attrs . '>';
        }, $html);

        // Wrap each table in .table-responsive unless it is already wrapped
        $html = preg_replace(
            '#(?<!<div class="table-responsive">)(<table\b[^>]*>.*?</table>)#is',
            '<div class="table-responsive">$1</div>',
            $html
        );

        return $html;
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo blog_language(); ?>">

<head>
    <?php echo head_contents(); ?>
    <?php echo $metatags; ?>

    <!-- Main site stylesheets (same as the rest of the website) -->
    <?php require_once __DIR__ . '/../../../includes/stylesheets.php'; ?>

    <!-- Blog-specific styles -->
    <link rel="stylesheet" href="<?php echo theme_path(); ?>css/style.css?v=6">

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
            <?php echo sk_bootstrap_tables(content()); ?>
        </div>
    </main>

    <!-- ========== SAME FOOTER AS MAIN SITE ========== -->
    <?php require_once __DIR__ . '/../../../includes/footer.php'; ?>

    <!-- Main site JS -->
    <script src="<?php echo BASE_PATH; ?>/public/js/navbar.js"></script>
    <script src="<?php echo BASE_PATH; ?>/public/js/footer.js"></script>
</body>

</html>