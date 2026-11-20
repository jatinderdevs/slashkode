<?php if (!defined('HTMLY')) die('HTMLy'); ?>

<article class="single-post">
    <?php
            $catName = trim(strip_tags($p->category));
            $catUrl  = '';

            // If HTMLy already gives a linked category, extract its URL
            if (!empty($p->category) && preg_match('/href=["\']([^"\']+)["\']/', $p->category, $m)) {
                $catUrl = $m[1];
            }
     ?>

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

            <?php
      $catName = trim(strip_tags($p->category));
      $catUrl = '';
      if (!empty($p->category) && preg_match('/href=["\']([^"\']+)["\']/', $p->category, $m)) {
          $catUrl = $m[1];
      }
    ?>

            <?php if (!empty($catName) && strtolower($catName) !== 'uncategorized' && !empty($catUrl)): ?>
            <li class="separator" aria-hidden="true">/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $catUrl; ?>">
                    <span itemprop="name"><?php echo $catName; ?></span>
                </a>
                <meta itemprop="position" content="3">
            </li>

            <li class="separator" aria-hidden="true">/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $p->url; ?>">
                    <span itemprop="name"><?php echo $p->title; ?></span>
                </a>
                <meta itemprop="position" content="4">
            </li>
            <?php else: ?>
            <li class="separator" aria-hidden="true">/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="<?php echo $p->url; ?>">
                    <span itemprop="name"><?php echo $p->title; ?></span>
                </a>
                <meta itemprop="position" content="3">
            </li>
            <?php endif; ?>

        </ol>
    </nav>
    <header class="post-header">
        <div class="post-meta">
            <time datetime="<?php echo date('c', strtotime($p->date)); ?>">
                <?php echo format_date($p->date); ?>
            </time>
            <?php if (!empty($p->category)): ?>
            <span class="dot">·</span>
            <span class="post-category"><?php echo $p->category; ?></span>
            <?php endif; ?>
        </div>

        <h1 class="post-title"><?php echo $p->title; ?></h1>
    </header>

    <?php if (!empty($p->image)): ?>
    <div class="post-featured-image">
        <img src="<?php echo $p->image; ?>" alt="<?php echo $p->title; ?>">
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
            <img src="<?php echo $author->avatar; ?>" alt="<?php echo $author->name; ?>">
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
    <nav class="post-navigation">
        <?php if (!empty($prev)): ?>
        <a href="<?php echo $prev['url']; ?>" class="nav-prev">
            <span class="nav-label">Previous</span>
            <span class="nav-title"><?php echo $prev['title']; ?></span>
        </a>
        <?php endif; ?>

        <?php if (!empty($next)): ?>
        <nav class="post-navigation">
            <?php if (!empty($prev)): ?>
            <a href="<?php echo $prev['url']; ?>" class="nav-card nav-prev">
                <?php if (!empty($prev['image'])): ?>
                <div class="nav-card-image">
                    <img src="<?php echo $prev['image']; ?>" alt="<?php echo $prev['title']; ?>">
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
                    <img src="<?php echo $next['image']; ?>" alt="<?php echo $next['title']; ?>">
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
    </nav>
    <?php endif; ?>
</article>