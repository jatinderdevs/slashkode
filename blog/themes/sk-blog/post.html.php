<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php
    // ---------- Category (name + URL from HTMLy's linked category) ----------
    $catName = trim(strip_tags($p->category));
    $catUrl  = '';
    if (!empty($p->category) && preg_match('/href=["\']([^"\']+)["\']/', $p->category, $m)) {
        $catUrl = $m[1];
    }

    // ---------- Dates ----------
    // HTMLy gives $p->date as a Unix timestamp (number), so don't run strtotime() on it.
    $publishedTs = is_numeric($p->date) ? (int) $p->date : strtotime($p->date);

    // "Last updated" date, in this order:
    // 1. Manual: put  <!-- updated: 2026-11-20 -->  anywhere in the post's Markdown (invisible on the page).
    // 2. Automatic: HTMLy's file modified time, only if it's more than 1 day after publishing.
    $updatedTs = null;
    if (preg_match('/<!--\s*updated:\s*(\d{4}-\d{2}-\d{2})\s*-->/i', $p->body, $um)) {
        $updatedTs = strtotime($um[1]);
    } elseif (!empty($p->lastMod)) {
        $lastMod = is_numeric($p->lastMod) ? (int) $p->lastMod : strtotime($p->lastMod);
        if ($lastMod && $lastMod - $publishedTs > 86400) {
            $updatedTs = $lastMod;
        }
    }
    $showUpdated = $updatedTs && date('Y-m-d', $updatedTs) !== date('Y-m-d', $publishedTs);

    // ---------- Article schema (JSON-LD) ----------
    $schema = array(
        '@context'         => 'https://schema.org',
        '@type'            => 'BlogPosting',
        'headline'         => strip_tags($p->title),
        'url'              => $p->url,
        'mainEntityOfPage' => array('@type' => 'WebPage', '@id' => $p->url),
        'datePublished'    => date('c', $publishedTs),
        'dateModified'     => date('c', $showUpdated ? $updatedTs : $publishedTs),
        'publisher'        => array('@type' => 'Organization', 'name' => 'Slashkode', 'url' => 'https://slashkode.com.au/'),
    );
    if (!empty($p->description)) { $schema['description'] = strip_tags($p->description); }
    if (!empty($p->image))       { $schema['image'] = $p->image; }
    if (!empty($catName))        { $schema['articleSection'] = $catName; }
    if (!empty($author->name)) {
        $schema['author'] = array('@type' => 'Person', 'name' => $author->name, 'url' => $p->authorUrl);
    }
?>
<script type="application/ld+json">
<?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>

<article class="single-post">

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

            <?php $pos = 3; ?>
            <?php if (!empty($catName) && strtolower($catName) !== 'uncategorized' && !empty($catUrl)): ?>
            <li class="separator" aria-hidden="true">/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $catUrl; ?>">
                    <span itemprop="name"><?php echo $catName; ?></span>
                </a>
                <meta itemprop="position" content="<?php echo $pos++; ?>">
            </li>
            <?php endif; ?>

            <li class="separator" aria-hidden="true">/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $p->url; ?>">
                    <span itemprop="name"><?php echo $p->title; ?></span>
                </a>
                <meta itemprop="position" content="<?php echo $pos; ?>">
            </li>

        </ol>
    </nav>

    <header class="post-header">
        <div class="post-meta">
            <time datetime="<?php echo date('c', $publishedTs); ?>">
                <?php echo format_date($publishedTs); ?>
            </time>
            <?php if ($showUpdated): ?>
            <span class="dot">·</span>
            <span class="post-updated">Updated <time
                    datetime="<?php echo date('c', $updatedTs); ?>"><?php echo format_date($updatedTs); ?></time></span>
            <?php endif; ?>
            <?php if (!empty($p->category)): ?>
            <span class="dot">·</span>
            <span class="post-category"><?php echo $p->category; ?></span>
            <?php endif; ?>
        </div>

        <h1 class="post-title"><?php echo $p->title; ?></h1>
    </header>

    <?php if (!empty($p->image)): ?>
    <div class="post-featured-image">
        <img src="<?php echo $p->image; ?>" alt="<?php echo strip_tags($p->title); ?>" fetchpriority="high"
            decoding="async">
    </div>
    <?php endif; ?>

    <div class="post-content">
        <?php echo $p->body; ?>
    </div>

    <?php if (!empty($p->tag)): ?>
    <div class="post-tags">
        <span class="tags-label">Tags</span>
        <?php echo $p->tag; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($author->name)): ?>
    <div class="author-box">
        <div class="author-avatar">
            <?php if (!empty($author->avatar)): ?>
            <img src="<?php echo $author->avatar; ?>" alt="<?php echo $author->name; ?>" loading="lazy">
            <?php endif; ?>
        </div>

        <div class="author-info">
            <span class="author-label">Written by</span>
            <h4 class="author-name">
                <a href="<?php echo $p->authorUrl; ?>"><?php echo $author->name; ?></a>
            </h4>
            <?php if (!empty($author->about)): ?>
            <p class="author-bio"><?php echo $author->about; ?></p>
            <?php elseif (!empty($author->body)): ?>
            <p class="author-bio"><?php echo $author->body; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($next) || !empty($prev)): ?>
    <nav class="post-navigation" aria-label="More posts">
        <?php if (!empty($prev)): ?>
        <a href="<?php echo $prev['url']; ?>" class="nav-card nav-prev">
            <?php if (!empty($prev['image'])): ?>
            <div class="nav-card-image">
                <img src="<?php echo $prev['image']; ?>" alt="" loading="lazy">
            </div>
            <?php endif; ?>
            <div class="nav-card-content">
                <span class="nav-label">Previous</span>
                <span class="nav-title"><?php echo $prev['title']; ?></span>
            </div>
        </a>
        <?php else: ?>
        <div></div>
        <?php endif; ?>

        <?php if (!empty($next)): ?>
        <a href="<?php echo $next['url']; ?>" class="nav-card nav-next">
            <?php if (!empty($next['image'])): ?>
            <div class="nav-card-image">
                <img src="<?php echo $next['image']; ?>" alt="" loading="lazy">
            </div>
            <?php endif; ?>
            <div class="nav-card-content">
                <span class="nav-label">Next</span>
                <span class="nav-title"><?php echo $next['title']; ?></span>
            </div>
        </a>
        <?php endif; ?>
    </nav>
    <?php endif; ?>
</article>