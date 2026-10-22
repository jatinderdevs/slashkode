<?php if (!defined('HTMLY')) die('HTMLy'); ?>

<nav class="sk-breadcrumb" aria-label="Breadcrumb">
    <ol>
        <li><a href="/">Home</a></li>
        <li class="separator" aria-hidden="true">/</li>
        <li><a href="<?php echo site_url(); ?>">Blog</a></li>
        <li class="separator" aria-hidden="true">/</li>
        <li aria-current="page">Page not found</li>
    </ol>
</nav>

<section class="error-page">
    <div class="error-page-inner">
        <span class="error-code">404</span>
        <h1 class="error-title">This page doesn’t exist</h1>
        <p class="error-desc">
            The page you’re looking for may have been moved, renamed, or is no longer available.
            Try searching below, or go back to the blog homepage.
        </p>

        <div class="error-search">
            <?php echo search('Search articles'); ?>
        </div>

        <div class="error-actions">
            <a href="<?php echo site_url(); ?>" class="sk-btn sk-btn-secondary">Back to Blog</a>
            <a href="/slashkode/" class="sk-btn-secondary">Go to Homepage</a>
        </div>
    </div>
</section>