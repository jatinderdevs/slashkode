<?php

/**
 * FAQ section — reads data/faq.json and renders only the questions
 * tagged for the current page.
 *
 * Usage on any page, BEFORE the require:
 *
 *     <?php $faqPage = 'web-design'; require_once('includes/sections/faq.php'); ?>
 *
 * If $faqPage isn't set, it falls back to 'home'.
 */

function sk_get_faqs(string $page, string $jsonPath): array
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
        return isset($item['page']) && $item['page'] === $page;
    }));
}

// Adjust this path if your project structure differs — it's relative
// to THIS file's location (includes/sections/faq.php), going up two
// levels to the project root, then into /data/faq.json.
$faqJsonPath = __DIR__ . '/../../data/faq.json';

$faqPage = $faqPage ?? 'home';
$faqs = sk_get_faqs($faqPage, $faqJsonPath);
?>

<section class="faq-section">
    <div class="faq-container">
        <header class="faq-header">
            <span class="sk-statement-eyebrow">/FAQ</span>
            <h2 class="faq-title headingeffect">Common questions</h2>
            <p class="faq-subtitle">
                Straight answers about working together, timelines, and what to
                expect.
            </p>
        </header>

        <?php if (empty($faqs)) : ?>
            <!-- No FAQs found for page "<?php echo htmlspecialchars($faqPage); ?>" —
                 check data/faq.json has matching "page" entries. -->
        <?php else : ?>
            <div class="faq-list">
                <?php foreach ($faqs as $faq) : ?>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span><?php echo htmlspecialchars($faq['question'] ?? ''); ?></span>
                            <span class="faq-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M12 5v14M5 12h14" />
                                </svg>
                            </span>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <?php foreach (($faq['answer'] ?? []) as $paragraph) : ?>
                                    <p><?php echo $paragraph; ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <p class="faq-footer">
            Still have a question? <a href="<?php echo BASE_PATH; ?>/contactus.php">Say hi</a> — happy to
            answer.
        </p>
    </div>
</section>