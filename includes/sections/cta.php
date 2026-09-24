<?php

/**
 * CTA section, driven by a per-page preset (same pattern as faq.php / portfolio.php).
 *
 * Usage, BEFORE the require on any page:
 *
 *     <?php $ctaPage = 'rto'; require_once('includes/sections/cta.php'); ?>
*
* Presets: 'default' (standard $99 plan), 'rto', 'seo', 'custom-apps'.
* No $ctaPage set, or an unknown one, falls back to 'default'.
*
* To change wording, edit the presets below. Nothing else needs touching.
*/

// Where the buttons go. When the onboarding / pay-and-start page exists,
// point $ctaStartUrl at it and every "Start my website" button updates at once.
$ctaBase = rtrim(defined('BASE_PATH') ? BASE_PATH : '', '/');
$ctaStartUrl = $ctaBase . '/contactus.php?type=start';
$ctaQuoteUrl = $ctaBase . '/contactus.php?type=quote';

$ctaPresets = [

// Standard: the $99 website plan (home, about, work, web design)
'default' => [
'label' => 'Start your website',
'heading' => 'Stand out from your competitors online.',
'desc' => 'A professional website builds trust and brings in enquiries for your Melbourne business.',
'sub' => 'Only $99 to start. Then $39 fortnightly, once your site is live.',
'button' => 'Start my website',
'url' => $ctaStartUrl,
'note' => 'No lock-in. No cancellation fees. No outsourcing.',
],

// Quoted services: no price shown, button goes to the quote request
'rto' => [
'label' => 'Request a quote',
'heading' => 'A website your students can trust.',
'desc' => 'Clear course pages, the required information in the right places, and enrolment enquiries that come straight
to you. Tell us about your RTO and we\'ll quote it.',
'sub' => '',
'button' => 'Request a quote',
'url' => $ctaQuoteUrl,
'note' => 'Free chat. Clear quote. No pressure.',
],

'seo' => [
'label' => 'Request a quote',
'heading' => 'Get found by people already searching for you.',
'desc' => 'Tell us about your website and we\'ll show you what\'s holding it back on Google. No monthly retainer, just a
clear quote.',
'sub' => '',
'button' => 'Request a quote',
'url' => $ctaQuoteUrl,
'note' => 'Free chat. Clear quote. No pressure.',
],

'custom-apps' => [
'label' => 'Request a quote',
'heading' => 'Stop working around your software.',
'desc' => 'Tell us how your team works and we\'ll quote a web application built around it.',
'sub' => '',
'button' => 'Request a quote',
'url' => $ctaQuoteUrl,
'note' => 'Free chat. Clear quote. No pressure.',
],
];

$ctaPage = $ctaPage ?? 'default';
$cta = $ctaPresets[$ctaPage] ?? $ctaPresets['default'];
?>

<section class="cta-section" aria-label="<?php echo htmlspecialchars($cta['label']); ?>">
    <div class="sk-container">

        <h2 class="cta-heading">
            <span class="cta-line">
                <span class="cta-line-inner"><?php echo htmlspecialchars($cta['heading']); ?></span>
            </span>
        </h2>

        <p class="cta-desc" data-desc>
            <?php echo htmlspecialchars($cta['desc']); ?>
        </p>

        <?php if (!empty($cta['sub'])) : ?>
        <h3 class="cta-subheading my-4"><?php echo htmlspecialchars($cta['sub']); ?></h3>
        <?php endif; ?>

        <div class="cta-actions<?php echo empty($cta['sub']) ? ' mt-4' : ''; ?>" data-actions>
            <a href="<?php echo htmlspecialchars($cta['url']); ?>" class="sk-btn sk-btn-primary">
                <?php echo htmlspecialchars($cta['button']); ?> →
                <span></span>
            </a>
        </div>

        <p class="cta-note" data-note>
            <?php echo htmlspecialchars($cta['note']); ?>
        </p>
    </div>
</section>