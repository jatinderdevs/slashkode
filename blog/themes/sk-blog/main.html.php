<?php if (!defined('HTMLY')) die('HTMLy'); ?>

<nav class="sk-breadcrumb" aria-label="Breadcrumb">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList">

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="https://slashkode.com.au/">
                <span itemprop="name">Home</span>
            </a>
            <meta itemprop="position" content="1">
        </li>

        <li class="separator" aria-hidden="true">/</li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="https://slashkode.com.au/blog/">
                <span itemprop="name">Blog</span>
            </a>
            <meta itemprop="position" content="2">
        </li>

        <?php if (!empty($category)): ?>
        <li class="separator" aria-hidden="true">/</li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item"
                href="<?php echo site_url(); ?>category/<?php echo isset($category->slug) ? $category->slug : ''; ?>">
                <span itemprop="name"><?php echo $category->title; ?></span>
            </a>
            <meta itemprop="position" content="3">
        </li>

        <?php elseif (!empty($tag)): ?>
        <li class="separator" aria-hidden="true">/</li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo site_url(); ?>tag/<?php echo isset($tag->slug) ? $tag->slug : ''; ?>">
                <span itemprop="name">#<?php echo $tag->title; ?></span>
            </a>
            <meta itemprop="position" content="3">
        </li>
        <?php endif; ?>

    </ol>
</nav>

<?php if (!empty($category)): ?>
<div class="taxonomy-header">
    <span class="taxonomy-label">Category</span>
    <h1 class="taxonomy-title"><?php echo $category->title; ?></h1>
    <?php if (!empty($category->body)): ?>
    <div class="taxonomy-desc"><?php echo $category->body; ?></div>
    <?php endif; ?>
</div>

<?php elseif (!empty($tag)): ?>
<div class="taxonomy-header">
    <span class="taxonomy-label">Tag</span>
    <h1 class="taxonomy-title">#<?php echo $tag->title; ?></h1>
</div>

<?php else: ?>
<section class="blog-hero">
    <div class="blog-hero-inner">
        <span class="blog-hero-eyebrow">Journal</span>
        <h1 class="blog-hero-title">Website and SEO advice for Melbourne businesses and RTOs.</h1>
        <p class="blog-hero-desc">
            Practical articles on web design, development and SEO for Melbourne businesses
            that want clarity, speed and better results from their website.
        </p>
    </div>
</section>
<?php endif; ?>

<div class="post-list">
    <?php foreach ($posts as $p): ?>
    <article class="post-card">
        <?php if (!empty($p->image)): ?>
        <a href="<?php echo $p->url; ?>" class="post-card-image">
            <img src="<?php echo $p->image; ?>" alt="<?php echo $p->title; ?>">
        </a>
        <?php endif; ?>

        <div class="post-card-body">
            <div class="post-meta">
                <time datetime="<?php echo date('c', strtotime($p->date)); ?>">
                    <?php echo format_date($p->date); ?>
                </time>
                <?php if (!empty($p->category)): ?>
                <span class="dot">·</span>
                <span class="post-category"><?php echo strip_tags($p->category); ?></span>
                <?php endif; ?>
            </div>

            <h2 class="post-card-title">
                <a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a>
            </h2>

            <div class="post-excerpt">
                <?php
          if (!empty($p->description)) {
              echo $p->description;
          } else {
              echo get_teaser($p->body, $p->url);
          }
          ?>
            </div>

            <a href="<?php echo $p->url; ?>" class="read-more">
                Read article
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </article>
    <?php endforeach; ?>
</div>

<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<nav class="blog-pagination">
    <?php if (!empty($pagination['prev'])): ?>
    <a href="?page=<?php echo $page - 1; ?>" class="pagination-btn">← Newer</a>
    <?php endif; ?>
    <span class="page-info"><?php echo $pagination['pagenum']; ?></span>
    <?php if (!empty($pagination['next'])): ?>
    <a href="?page=<?php echo $page + 1; ?>" class="pagination-btn">Older →</a>
    <?php endif; ?>
</nav>
<?php endif; ?>