<?php

/**
 * Portfolio carousel — reads data/portfolio.json and renders only the
 * projects tagged for the current page. A project can appear on
 * multiple pages (e.g. the same AIIT build shown on Home, the
 * Web Design service page, AND the RTO/VET service page) because
 * "pages" is an array, not a single value.
 *
 * Usage on any page, BEFORE the require:
 *
 *     
 *
 * If $portfolioPage isn't set, it falls back to 'home'.
 */

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
$portfolioJsonPath = __DIR__ . '/../../data/portfolio.json';
$portfolioPage = $portfolioPage ?? 'home';
$portfolioItems = sk_get_portfolio($portfolioPage, $portfolioJsonPath);
?>

<section class="sk-drag-portfolio" id="work">
    <div class="sk-container">
        <div class="drag-portfolio-header">
            <span class="sk-statement-eyebrow">/ Portfolio</span>
            <h2 class="drag-portfolio-title headingeffect">Work we've shipped</h2>
        </div>
    </div>

    <?php if (empty($portfolioItems)) : ?>
        <!-- No portfolio items found for page "<?php echo htmlspecialchars($portfolioPage); ?>" —
             check data/portfolio.json has matching "pages" entries. -->
    <?php else : ?>
        <div class="drag-carousel" id="dragCarousel">
            <div class="drag-track" id="dragTrack">
                <?php foreach ($portfolioItems as $index => $item) : ?>
                    <article class="drag-card" data-index="<?php echo (int) $index; ?>">
                        <span class="drag-card-tag"><?php echo htmlspecialchars($item['topTag'] ?? ''); ?></span>
                        <div class="drag-card-media">
                            <img src="<?php echo BASE_URL . htmlspecialchars($item['image'] ?? ''); ?>"
                                alt="<?php echo htmlspecialchars($item['alt'] ?? ''); ?>" loading="lazy" draggable="false" />
                            <a href="<?php echo htmlspecialchars($item['link'] ?? '#'); ?>" class="drag-card-link"
                                aria-label="View <?php echo htmlspecialchars($item['title'] ?? ''); ?> project">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />
                                </svg>
                            </a>
                        </div>
                        <div class="drag-card-footer">
                            <h3 class="drag-card-title"><?php echo htmlspecialchars($item['title'] ?? ''); ?></h3>
                            <div class="drag-card-tags">
                                <?php if (!empty($item['chips'])) : ?>
                                    <?php foreach ($item['chips'] as $chip) : ?>
                                        <span class="drag-tag"><?php echo htmlspecialchars($chip); ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>


                            </div>
                            <?php if (!empty($item['cta'])) : ?>
                                <a href="<?php echo htmlspecialchars($item['link'] ?? '#'); ?>" class="sk-btn sk-btn-primary">
                                    <?php echo htmlspecialchars($item['cta']); ?>
                                    <span></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
                <!-- Add more projects by adding entries to data/portfolio.json -->
            </div>

            <!-- Custom drag cursor — follows the pointer on desktop hover -->
            <div class="drag-cursor" id="dragCursor" aria-hidden="true">
                <span class="drag-cursor-arrow">←</span>
                <span>Drag</span>
                <span class="drag-cursor-arrow">→</span>
            </div>
        </div>

        <div class="drag-dots" id="dragDots" role="tablist" aria-label="Portfolio navigation"></div>
    <?php endif; ?>
</section>