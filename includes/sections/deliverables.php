<?php

/**
 * Deliverables / "What you get" section — reads data/deliverables.json and
 * renders only the cards tagged for the current page, once, into both the
 * desktop hover-expand layout and the mobile swipe carousel.
 *
 * Usage on any page, BEFORE the require:
 *
 *     <?php
 *     $deliverablesPage = 'custom-apps';
 *     $deliverablesDesc = 'Software that matches your workflow. Built to last. Room to grow.';
 *     require_once('../includes/sections/deliverables.php');
 *     ?>
 *
 * $deliverablesPage is required (matches a "pages" entry in the JSON).
 * $deliverablesDesc is optional — falls back to a default line below.
 * The eyebrow/heading text stays fixed across every page on purpose.
 */

function sk_get_deliverables(string $page, string $jsonPath): array
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

// Relative to THIS file's location (includes/sections/deliverables.php),
// up two levels to the project root, then into /data/deliverables.json.
$deliverablesJsonPath = __DIR__ . '/../../data/deliverables.json';

$deliverablesPage = $deliverablesPage ?? '';
$deliverablesDesc = $deliverablesDesc ?? 'Software that matches your workflow. Built to last. Room to grow.';
$deliverableCards = sk_get_deliverables($deliverablesPage, $deliverablesJsonPath);
?>

<?php if (!empty($deliverableCards)) : ?>
<section class="sk-expand-cards sk-container" aria-label="What you get">
    <div class="wd-section-header">
        <span class="wd-section-label wd-reveal">Deliverables</span>
        <h2 class="wd-reveal">What you get</h2>
        <p class="wd-reveal"><?php echo htmlspecialchars($deliverablesDesc); ?></p>
    </div>

    <!-- ========== DESKTOP (hover expand) ========== -->
    <div class="sk-ec-desktop" id="skEcDesktop">
        <?php foreach ($deliverableCards as $index => $card) : ?>
        <div class="sk-ec-card<?php echo $index === 0 ? ' is-active' : ''; ?>" data-index="<?php echo (int) $index; ?>">
            <div class="sk-ec-content">
                <div class="sk-ec-icon">
                    <img src="<?php echo BASE_PATH . htmlspecialchars($card['icon'] ?? ''); ?>"
                        alt="" width="28" height="28" loading="lazy" />
                </div>
                <h3 class="sk-ec-title"><?php echo htmlspecialchars($card['title'] ?? ''); ?></h3>
                <p class="sk-ec-desc"><?php echo htmlspecialchars($card['desc'] ?? ''); ?></p>
            </div>
            <div class="sk-ec-image">
                <img src="<?php echo BASE_PATH . htmlspecialchars($card['image'] ?? ''); ?>"
                    alt="<?php echo htmlspecialchars($card['alt'] ?? ($card['title'] ?? '')); ?>" loading="lazy" />
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- ========== MOBILE (swipe carousel) ========== -->
    <div class="sk-ec-mobile" id="skEcMobile">
        <div class="sk-ec-track" id="skEcTrack">
            <?php foreach ($deliverableCards as $card) : ?>
            <div class="sk-ec-slide">
                <div class="sk-ec-m-card">
                    <div class="sk-ec-m-image">
                        <img src="<?php echo BASE_PATH . htmlspecialchars($card['image'] ?? ''); ?>"
                            alt="<?php echo htmlspecialchars($card['alt'] ?? ($card['title'] ?? '')); ?>" loading="lazy" />
                    </div>
                    <div class="sk-ec-m-body">
                        <div class="sk-ec-icon">
                            <img src="<?php echo BASE_PATH . htmlspecialchars($card['icon'] ?? ''); ?>"
                                alt="" width="28" height="28" loading="lazy" />
                        </div>
                        <h3 class="sk-ec-title"><?php echo htmlspecialchars($card['title'] ?? ''); ?></h3>
                        <p class="sk-ec-desc"><?php echo htmlspecialchars($card['desc'] ?? ''); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="sk-ec-dots" id="skEcDots">
        <?php foreach ($deliverableCards as $index => $card) : ?>
        <button class="<?php echo $index === 0 ? 'is-active' : ''; ?>" data-index="<?php echo (int) $index; ?>"
            aria-label="Slide <?php echo (int) $index + 1; ?>"></button>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
