<?php
/**
 * Guides section: a short list of blog guides pulled from the htmly feed.
 *
 * Use on a page (same pattern as portfolio.php and faq.php):
 *
 *   <?php $guidesPage = 'web-design';
 *   require_once('../includes/sections/guides.php'); ?>
*
* To use it on another page, add an entry to $guidesConfig below and set
* $guidesPage to that key.
*/

require_once __DIR__ . '/../guides-feed.php';

$guidesFeedUrl = 'https://slashkode.com.au/blog/feed/rss';

$guidesConfig = [
'web-design' => [
'eyebrow' => '/ Guides',
'title' => 'Guides to help you decide',
'category' => 'Web Design', // must match the htmly category name
'pin' => ['how-to-set-up-a-business-website-in-australia'], // always shown first
'limit' => 3,
// Shown only if the feed AND the cache are both unavailable.
'fallback' => [
['title' => 'How to Set Up a Business Website in Australia',
'url' => 'https://slashkode.com.au/blog/post/how-to-set-up-a-business-website-in-australia',
'slug' => 'how-to-set-up-a-business-website-in-australia', 'category' => 'Web Design', 'ts' => null, 'image' => ''],
['title' => "Why Your Website Isn't Getting Leads (and How to Fix It)",
'url' => 'https://slashkode.com.au/blog/post/why-your-website-isnt-getting-leads',
'slug' => 'why-your-website-isnt-getting-leads', 'category' => 'Web Design', 'ts' => null, 'image' => ''],
['title' => 'Website Design for Small Business in Melbourne: What to Look For (and What to Skip)',
'url' =>
'https://slashkode.com.au/blog/post/how-to-choose-a-web-designer',
'slug' => 'how-to-choose-a-web-designer', 'category' => 'Web
Design', 'ts' => null, 'image' => ''],
],
],
'rto' => [
'eyebrow' => '/ Guides',
'title' => 'Guides for RTO and VET websites',
'category' => 'RTO & VET Websites',
'pin' => [
'rto-website-checklist-what-students-need-to-find',
'how-to-set-up-a-business-website-in-australia',
],
'limit' => 3,
'fallback' => [
['title' => 'RTO Website Checklist: What Students Need to Find',
'url' => 'https://slashkode.com.au/blog/post/rto-website-checklist-what-students-need-to-find',
'slug' => 'rto-website-checklist-what-students-need-to-find', 'category' => 'RTO & VET Websites', 'ts' => null, 'image'
=> ''],
['title' => 'How to Set Up a Business Website in Australia',
'url' => 'https://slashkode.com.au/blog/post/how-to-set-up-a-business-website-in-australia',
'slug' => 'how-to-set-up-a-business-website-in-australia', 'category' => 'Web Design', 'ts' => null, 'image' => ''],
],
],
];

if (empty($guidesPage) || !isset($guidesConfig[$guidesPage])) {
return;
}

$guidesCfg = $guidesConfig[$guidesPage];
$guidesPosts = sk_guides_load($guidesFeedUrl, $guidesCfg['fallback']);
$guidesShow = sk_guides_pick($guidesPosts, $guidesCfg['category'], $guidesCfg['pin'], $guidesCfg['limit']);
if (!$guidesShow) {
$guidesShow = array_slice($guidesCfg['fallback'], 0, (int) $guidesCfg['limit']);
}

$guidesH = function ($s) { return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); };
$guidesBase = defined('BASE_PATH') ? BASE_PATH : '';
$guidesTz = new DateTimeZone('Australia/Melbourne');
?>
<section class="sk-guides" aria-labelledby="sk-guides-title">
    <div class="sk-container">
        <div class="sk-guides__inner">

            <header class="sk-guides__head wd-reveal">
                <span class="sk-guides__eyebrow"><?php echo $guidesH($guidesCfg['eyebrow']); ?></span>
                <h2 id="sk-guides-title" class="sk-guides__title"><?php echo $guidesH($guidesCfg['title']); ?></h2>
                <a class="sk-guides__all" href="<?php echo $guidesH($guidesBase); ?>/blog/">
                    All articles
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                        <path d="M4 12h15M13 6l6 6-6 6" />
                    </svg>
                </a>
            </header>

            <ul class="sk-guides__list wd-reveal">
                <?php foreach ($guidesShow as $g):
                    $hasImg = !empty($g['image']);
                    $date = null;
                    if (!empty($g['ts'])) {
                        $date = new DateTime('@' . (int) $g['ts']);
                        $date->setTimezone($guidesTz);
                    }
                ?>
                <li class="sk-guides__item<?php echo $hasImg ? '' : ' sk-guides__item--noimg'; ?>">
                    <?php if ($hasImg): ?>
                    <div class="sk-guides__thumb" aria-hidden="true">
                        <img src="<?php echo $guidesH($g['image']); ?>" width="112" height="59" alt="" loading="lazy"
                            decoding="async" />
                    </div>
                    <?php endif; ?>
                    <div class="sk-guides__body">
                        <p class="sk-guides__meta">
                            <?php if (!empty($g['category'])): ?><span
                                class="sk-guides__cat"><?php echo $guidesH($g['category']); ?></span><?php endif; ?>
                            <?php if ($date): ?><time class="sk-guides__date"
                                datetime="<?php echo $date->format('Y-m-d'); ?>"><?php echo $date->format('j M Y'); ?></time><?php endif; ?>
                        </p>
                        <h3 class="sk-guides__name"><a class="sk-guides__link"
                                href="<?php echo $guidesH($g['url']); ?>"><?php echo $guidesH($g['title']); ?></a></h3>
                    </div>
                    <svg class="sk-guides__arrow" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                        aria-hidden="true" focusable="false">
                        <path d="M4 12h15M13 6l6 6-6 6" />
                    </svg>
                </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</section>
<?php
unset($guidesFeedUrl, $guidesConfig, $guidesCfg, $guidesPosts, $guidesShow, $guidesH, $guidesBase, $guidesTz, $g, $hasImg, $date);