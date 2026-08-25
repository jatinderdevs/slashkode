<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once('includes/stylesheets.php');?>
    <link rel="stylesheet" href="<?php echo BASE_PATH; ?>/public/css/pages/contactus.css" />

</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php');?>
            <div class="sk-container">
                <section class="contacthero">

                    <h1 class="heroheading">Request a Consultation</h1>
                    <p>Let’s discuss your project goals. Send us a quick message or request a callback for a friendly,
                        practical conversation.</p>
                </section>

                <section class="contactform">
                    <div class="contact-bento-grid">
                        <div class="bento-card item  large-left">
                            <div class="inner-contact-page" id="lead-form">
                                <h2>Write it out and we'll get back to you within a day.</h2>
                                <p>Free consultation · No pressure · Call, Zoom or in-person</p>
                                <form class="wd-lead-form" action="/contact/" method="get">
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
                                        <label for="wd-url">Website URL (optional)</label>
                                        <input type="url" id="wd-url" name="website" placeholder="https://" />
                                    </div>
                                    <div>
                                        <label for="wd-goal">Give us a little breif</label>
                                        <textarea id="message" name="message" rows="3"
                                            placeholder="Anything you’d like me to know before we talk?"></textarea>
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
                                <a href="https://wa.me/61406258628" class="sk-btn sk-btn-primary">
                                    Say Hi <span></span>
                                </a>
                            </div>
                        </div>

                        <!-- 2. Consultation Card -->
                        <div class="bento-card item">
                            <div class="action-card consultation-card">
                                <img src="<?php echo BASE_PATH; ?>/public/icons/meeting.webp" width="52" alt="Calendar">
                                <!-- better icon -->
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
                                    <img src="<?php echo BASE_PATH; ?>/public/img/js.jpg" alt="Jatinder Singh"
                                        class="profile-img">
                                    <div class="profile-info">
                                        <h3>Jatinder Singh</h3>
                                        <p>Lead Developer</p>
                                    </div>
                                </div>
                                <div class="profile-contact">
                                    <a href="mailto:info@slashkode.com.au">info@slashkode.com.au</a>
                                    <a href="tel:+61406258628">+61 406 258 628</a>
                                </div>
                            </div>
                        </div>
                        <div class="bento-card item bottom-full">
                            <div class="bottom-info-card">
                                <div class="bottom-content">
                                    <h6>Melbourne, Australia </h6>

                                    <h6>ABN 00 000 000 000 </h6>

                                    <h6>Replies within one business day</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="process-section">
                    <div class="">
                        <h2 class="prcoess-title">What happens after you submit?</h2>

                        <div class="process-grid">
                            <!-- Step 1 -->
                            <div class="process-card">
                                <span class="step-number">STEP 01</span>
                                <h3>We Review Within 24H</h3>
                                <p>We review your requirements and check our calendar to prepare initial thoughts.</p>
                            </div>

                            <!-- Step 2 -->
                            <div class="process-card">
                                <span class="step-number">STEP 02</span>
                                <h3>Discovery Chat</h3>
                                <p>We meet face-to-face or on video to map out goals, technical scope, and options.</p>
                            </div>

                            <!-- Step 3 -->
                            <div class="process-card">
                                <span class="step-number">STEP 03</span>
                                <h3>Actionable Estimate</h3>
                                <p>You get a clear proposal with fixed pricing and timelines—no sales pressure.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php $faqPage = 'contact page'; require_once('includes/sections/faq.php'); ?>

        </div>
        <?php require_once('includes/footer.php');?>

    </main>
    <?php require_once('includes/customjs.php');?>
</body>

</html>