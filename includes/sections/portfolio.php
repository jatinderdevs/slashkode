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
 *     $portfolioPage = 'home'; // or 'web-design', 'rto-vet', etc.
 *
 * If $portfolioPage isn't set, it falls back to 'home'.
 *
 * Expected JSON fields per project:
 *   pages      (array)  – which pages this card appears on
 *   topTag     (string) – small badge on the media (e.g. "Education")
 *   image      (string) – path to the multi-device mockup image
 *   alt        (string) – image alt text
 *   title      (string) – large project name
 *   link       (string) – live website URL
 *   cta        (string) – button label (default: "See live website")
 *   description(string) – what we delivered (web design, SEO, forms…)
 *   result     (string) – customer review or measurable result
 *   chips      (array)  – optional tags (kept for flexibility)
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
            <h2 class="drag-portfolio-title mb-0 headingeffect">Work we've shipped</h2>
            <p>A few of the projects we've built from the ground up — real sites,
                real results for Melbourne businesses.</p>
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
                        <div class="drag-card-body">

                            <!-- Top: devices mockup + title + live link -->
                            <div class="drag-card-hero">
                                <div class="drag-card-media">

                                    <img src="<?php echo BASE_URL . htmlspecialchars($item['image'] ?? ''); ?>"
                                        alt="<?php echo htmlspecialchars($item['alt'] ?? $item['title'] ?? ''); ?>"
                                        loading="lazy" draggable="false" />
                                </div>

                                <div class="drag-card-side">
                                    <?php if (!empty($item['topTag'])) : ?>
                                        <span class="drag-card-tag"><?php echo htmlspecialchars($item['topTag']); ?></span>
                                    <?php endif; ?>
                                    <h3 class="drag-card-title my-3"><?php echo htmlspecialchars($item['title'] ?? ''); ?></h3>
                                    <div class="drag-card-tags">
                                        <?php if (!empty($item['chips'])) : ?>
                                            <?php foreach ($item['chips'] as $chip) : ?>
                                                <span class="drag-tag"><?php echo htmlspecialchars($chip); ?></span>
                                            <?php endforeach; ?>
                                        <?php endif; ?>


                                    </div>
                                    <?php if (!empty($item['link'])) : ?>
                                        <a href="<?php echo htmlspecialchars($item['link']); ?>"
                                            class="sk-btn sk-btn-primary mt-3"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            aria-label="See live website for <?php echo htmlspecialchars($item['title'] ?? ''); ?>">
                                            <?php echo htmlspecialchars($item['cta'] ?? 'See live website'); ?>
                                            <span></span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- What we delivered -->
                            <?php if (!empty($item['description'])) : ?>
                                <p class="drag-card-desc"><?php echo htmlspecialchars($item['description']); ?></p>
                            <?php endif; ?>

                            <!-- Results / review bar -->
                            <?php if (!empty($item['result'])) : ?>
                                <div class="drag-card-result">
                                    <p><?php echo htmlspecialchars($item['result']); ?></p>
                                </div>
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