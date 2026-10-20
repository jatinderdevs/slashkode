<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<nav class="sk-breadcrumb" aria-label="Breadcrumb">
    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="/slashkode/"><span itemprop="name">Home</span></a>
            <meta itemprop="position" content="1">
        </li>

        <li class="separator" aria-hidden="true">/</li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo site_url(); ?>"><span itemprop="name">Blog</span></a>
            <meta itemprop="position" content="2">
        </li>

        <li class="separator" aria-hidden="true">/</li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <span itemprop="name" aria-current="page"><?php echo $author->name; ?></span>
            <meta itemprop="position" content="3">
        </li>
    </ol>
</nav>
<div class="author-page-header">
    <?php if (!empty($author->avatar)): ?>
    <div class="author-page-avatar">
        <img src="<?php echo $author->avatar; ?>" alt="<?php echo $author->name; ?>">
    </div>
    <?php endif; ?>

    <div class="author-page-info">
        <span class="author-label">Author</span>
        <h1 class="author-page-name"><?php echo $author->name; ?></h1>

        <?php if (!empty($author->about)): ?>
        <p class="author-page-bio"><?php echo $author->about; ?></p>
        <?php elseif (!empty($author->body)): ?>
        <p class="author-page-bio"><?php echo $author->body; ?></p>
        <?php endif; ?>
    </div>
</div>

<?php if (!empty($posts)): ?>
<h2 class="author-posts-title">Posts by <?php echo $author->name; ?></h2>

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
                <span class="post-category"><?php echo $p->category; ?></span>
                <?php endif; ?>
            </div>

            <h2 class="post-card-title">
                <a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a>
            </h2>

            <div class="post-excerpt">
                <?php 
                // Prefer meta description if available, otherwise use teaser
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

<?php else: ?>
<p class="no-posts">No posts published yet.</p>
<?php endif; ?>