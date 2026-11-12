<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MF4Q9KZ8NJ"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-MF4Q9KZ8NJ');
// Click tracking: phone, email, WhatsApp, Start, Quote
document.addEventListener('click', function(e) {
    var el = e.target && e.target.closest ? e.target.closest('a[href]') : null;
    if (!el) return;

    var href = el.getAttribute('href') || '';
    var path = (el.hostname === location.hostname) ? el.pathname.replace(/\/+$/, '') : '';
    var eventName = '';

    if (/^tel:/i.test(href)) {
        eventName = 'click_phone';
    } else if (/^mailto:/i.test(href)) {
        eventName = 'click_email';
    } else if (/^(wa\.me|api\.whatsapp\.com|web\.whatsapp\.com)$/i.test(el.hostname)) {
        eventName = 'click_whatsapp';
    } else if (/\/start$/.test(path)) {
        eventName = 'click_start';
    } else if (/\/quote$/.test(path)) {
        eventName = 'click_quote';
    }
    if (!eventName) return;

    gtag('event', eventName, {
        link_url: href,
        link_text: (el.textContent || '').trim().slice(0, 80),
        transport_type: 'beacon'
    });
});
</script>

<?php require_once __DIR__ . '/../config.php'; ?>

<meta property="og:image" content="https://slashkode.com.au/public/img/thumbnail.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="Slashkode: Melbourne web design, $99 to start" />


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/stylesheet.css" />
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/navbar.css" />
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/portfolio.css" />
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pricing-strip.css" />

<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/footer.css" />
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/faq.css" />
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/island.css" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_PATH; ?>/public/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_PATH; ?>/public/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_PATH; ?>/public/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo BASE_PATH; ?>/public/favicon/site.webmanifest">