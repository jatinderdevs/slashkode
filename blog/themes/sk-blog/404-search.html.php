<?php if (!defined('HTMLY')) die('HTMLy'); ?>

<nav class="sk-breadcrumb" aria-label="Breadcrumb">
    <ol>
        <li><a href="/">Home</a></li>
        <li class="separator" aria-hidden="true">/</li>
        <li><a href="<?php echo site_url(); ?>">Blog</a></li>
        <li class="separator" aria-hidden="true">/</li>
        <li aria-current="page">No results</li>
    </ol>
</nav>

<section class="error-page">
    <div class="error-page-inner">
        <span class="error-code">No results</span>
        <h1 class="error-title">Nothing matched your search</h1>
        <p class="error-desc">
            Try a different keyword, or browse the latest articles from the blog homepage.
        </p>

        <div class="error-search">
            <?php echo search('Search again'); ?>
        </div>

        <div class="error-actions">
            <a href="<?php echo site_url(); ?>" class="sk-btn sk-btn-secondary">Back to Blog</a>
        </div>
    </div>
</section>