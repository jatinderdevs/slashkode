<?php
/**
 * Shared start/quote form.
 *
 * Used by start.php (standard $99 package — straight intake, no fork)
 * and quote.php (bespoke work — project-details field open by default).
 * Set $formMode before requiring this file:
 *
 *   'standard' — no extra-details field; straight to the $99 flow (default)
 *   'quote'    — shows the project-details field, open & required
 */

$formMode = $formMode ?? 'standard';

$formPresets = [
    'standard' => [
        'title'        => 'Tell us a bit about you',
        'show_extra'   => false,
        'submit_label' => 'Send my details',
        'next_info'    => "We'll send you a link to get started — $99 to begin, then $39 fortnightly.",
    ],
    'quote' => [
        'title'             => 'Tell us about your project',
        'show_extra'        => true,
        'extra_label'       => 'What are you looking to build?',
        'extra_placeholder' => 'Tell us about scope, features, timeline — as much or as little as you know so far.',
        'submit_label'      => 'Request my quote',
        'next_info'         => "We'll take a look and send a tailored quote by email — no pressure, no lock-in.",
    ],
];

$fc = $formPresets[$formMode] ?? $formPresets['standard'];
?>

<h2 class="wd-hero-card-title"><?php echo htmlspecialchars($fc['title']); ?></h2>
<?php if (!empty($formError)) : ?>
<p class="wd-form-note"><?php echo htmlspecialchars($formError); ?></p>
<?php endif; ?>
<form class="wd-lead-form start-form" id="startForm" method="post" action="">
    <input type="hidden" name="mode" value="<?php echo htmlspecialchars($formMode); ?>" />
    <div style="position:absolute;left:-9999px;" aria-hidden="true">
        <input type="text" name="company_url" tabindex="-1" autocomplete="off" />
    </div>
    <div>
        <label for="start-name">Your name</label>
        <input type="text" id="start-name" name="name" placeholder="Your full name" required />
    </div>

    <div class="form-row">
        <div>
            <label for="start-email">Email</label>
            <input type="email" id="start-email" name="email" placeholder="you@company.com" required />
        </div>
        <div>
            <label for="start-phone">Phone (optional)</label>
            <input type="tel" id="start-phone" name="phone" placeholder="04XX XXX XXX" />
        </div>
    </div>

    <div class="form-row">
        <div>
            <label for="start-business">Business name</label>
            <input type="text" id="start-business" name="business_name" placeholder="Your business name" required />
        </div>
        <div>
            <label for="start-website">Current website (if any)</label>
            <input type="url" id="start-website" name="website" placeholder="https://" />
        </div>
    </div>

    <?php if ($fc['show_extra']) : ?>
    <div class="start-extra is-visible" id="startExtra">
        <label for="start-extra-details"><?php echo htmlspecialchars($fc['extra_label']); ?></label>
        <textarea id="start-extra-details" name="extra_details" rows="3"
            placeholder="<?php echo htmlspecialchars($fc['extra_placeholder']); ?>" required></textarea>
    </div>
    <?php endif; ?>

    <button type="submit" class="p-3 sk-btn sk-btn-primary">
        <?php echo htmlspecialchars($fc['submit_label']); ?>
        <span></span>
    </button>
    <p class="start-status" id="startStatus" role="status" aria-live="polite"></p>
    <p class="start-next-info" id="startNextInfo">
        <?php echo htmlspecialchars($fc['next_info']); ?>
    </p>
</form>