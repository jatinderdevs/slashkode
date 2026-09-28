<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Slashkode | Questions &amp; Enquiries, Melbourne</title>
    <meta name="description"
        content="Have a question about web design, SEO, RTO/VET websites or custom applications? Contact Slashkode in Melbourne. We reply within one business day." />
    <meta name="keywords"
        content="contact Slashkode, contact web developer Melbourne, web design enquiries Melbourne" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="slashkode" />
    <link rel="canonical" href="https://slashkode.com.au/contact" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Slashkode | Questions &amp; Enquiries, Melbourne" />
    <meta property="og:description"
        content="Questions about your website, SEO, RTO/VET platform or custom web application? Get in touch. We reply within one business day." />
    <meta property="og:url" content="https://slashkode.com.au/contact" />
    <meta property="og:site_name" content="slashkode" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Slashkode | Melbourne" />
    <meta name="twitter:description"
        content="Questions about web design, SEO or custom applications? Get in touch with Slashkode in Melbourne." />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contact Slashkode",
        "url": "https://slashkode.com.au/contact",
        "mainEntity": {
            "@type": "LocalBusiness",
            "name": "Slashkode",
            "url": "https://slashkode.com.au",
            "email": "info@slashkode.com.au",
            "telephone": "+61499167608",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Melbourne",
                "addressRegion": "VIC",
                "addressCountry": "AU"
            }
        }
    }
    </script>

    <?php require_once('includes/stylesheets.php'); ?>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/contactus.css" />

</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php'); ?>
            <div class="sk-container">
                <section class="contacthero">
                    <a href="<?php echo BASE_PATH; ?>/index" class="breadcrumb-btn"> /Home</a>
                    <h1 class="heroheading">Got a question? Just ask.</h1>
                    <p>Questions, concerns, or just not sure where to start? Send us a message and we'll reply within
                        one business day.</p>
                </section>

                <section class="contactform">
                    <div class="contact-bento-grid">
                        <div class="bento-card item  large-left">
                            <div class="inner-contact-page" id="lead-form">
                                <h2>Write it out and we'll get back to you within a day.</h2>
                                <p>Free consultation · No pressure · Call or Zoom </p>
                                <form class="wd-lead-form" action="<?php echo BASE_PATH; ?>/contact" method="get">
                                    <div>
                                        <label for="wd-name">Name</label>
                                        <input type="text" id="wd-name" name="name" placeholder="Your name" required />
                                    </div>
                                    <div>
                                        <label for="wd-email">Email</label>
                                        <input type="email" id="wd-email" name="email" placeholder="you@company.com"
                                            required />
                                    </div>

                                    <div>
                                        <label for="wd-goal">Give us a little brief</label>
                                        <textarea id="message" name="message" rows="4"
                                            placeholder="Anything you'd like me to know before we talk?"></textarea>
                                    </div>
                                    <button type="submit" class="p-3 sk-btn sk-btn-primary">
                                        Send Message
                                        <span></span>
                                    </button>
                                </form>
                                <p class="wd-form-note">No spam. Just a clear next step.</p>
                            </div>
                        </div>
                        <!-- 1. WhatsApp Card -->
                        <div class="bento-card item">
                            <div class="action-card whatsapp-card">
                                <img src="<?php echo BASE_PATH; ?>/public/icons/whatsap.webp" width="52" alt="WhatsApp">
                                <h3>Start a WhatsApp Chat</h3>
                                <p>Instant replies • No forms</p>
                                <a href="https://wa.me/61499167608" class="sk-btn sk-btn-primary">
                                    Say Hi <span></span>
                                </a>
                            </div>
                        </div>

                        <!-- 2. Consultation Card -->
                        <div class="bento-card item">
                            <div class="action-card consultation-card">
                                <img src="<?php echo BASE_PATH; ?>/public/icons/meeting.webp" width="52" alt="Calendar">
                                <h3>Book a Free Consultation</h3>
                                <p>15-min discovery call • No obligation</p>
                                <a href="#booking" class="sk-btn sk-btn-primary">
                                    Schedule Now <span></span>
                                </a>
                            </div>
                        </div>

                        <!-- 3. Dark Profile Card -->
                        <div class="bento-card item profile-card">
                            <div class="self-contact-card">
                                <div class="profile-header">
                                    <img src="<?php echo BASE_PATH; ?>/public/img/js.jpg"
                                        alt="Jatinder Singh, Founder of Slashkode" class="profile-img">
                                    <div class="profile-info">
                                        <h3>Jatinder Singh</h3>
                                        <p>Lead Developer</p>
                                    </div>
                                </div>
                                <div class="profile-contact">
                                    <a href="mailto:info@slashkode.com.au">info@slashkode.com.au</a>
                                    <a href="tel:+61499167608">0499 167 608</a>
                                </div>
                            </div>
                        </div>
                        <div class="bento-card item bottom-full">
                            <div class="bottom-info-card">
                                <div class="bottom-content">
                                    <h6>Melbourne, Australia </h6>

                                    <h6>ABN 20 568 892 923</h6>

                                    <h6>Replies within one business day</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <?php $faqPage = 'contact';
            require_once('includes/sections/faq.php'); ?>

        </div>
        <?php require_once('includes/footer.php'); ?>

    </main>
    <?php require_once('includes/customjs.php'); ?>
</body>

</html>