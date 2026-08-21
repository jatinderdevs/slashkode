<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slashkode | About Us</title>
    <?php require_once('includes/stylesheets.php');?>

    <link rel="stylesheet" href="public/css/statement.css" />
    <link rel="stylesheet" href="public/css/servicesSection.css" />

    <link rel="stylesheet" href="public/css/portfolio.css" />
    <link rel="stylesheet" href="public/css/faq.css" />
    <link rel="stylesheet" href="public/css/cta.css" />
    <link rel="stylesheet" href="public/css/marquee.css" />

    <link rel="stylesheet" href="public/css/pages/about.css" />
    <link rel="stylesheet" href="public/css/services/whyusSection.css" />


</head>

<body>
    <main>
        <div class="container-fluid">
            <?php require_once('includes/navbar.php');?>

            <section class="about-hero">
                <div class="sk-container">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="about-text">
                                    <h1 class="heroheading">About slashKode</h1>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Odio reiciendis eius optio sapiente aut officiis explicabo
                                        quod. Odio nulla minus beatae et provident cumque pariatur
                                        at expedita molestiae, deleniti nobis magnam quaerat dicta
                                        laudantium temporibus nisi neque facere fugit cum modi
                                        officiis sapiente animi atque quibusdam! Dolore eaque vero
                                        dicta?
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="about-thumbnail">
                                    <video width="640" height="360" muted autoplay loop class="img-fluid">
                                        <source src="./public/img/mockups/about.webm" type="video/webm">

                                        Your browser does not support the HTML5 video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="sk-scrolling-text">
            <div class="rail">
                <h4>Proudly based in <span> MELBOURNE</span>.</h4>
                <h4>Experienced.</h4>
                <h4>understand local market</h4>
            </div>
        </section>
        <section class="sk-container shadow   bg-white">
            <div class="mission">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./public/img/myself.webp" class="img-fluid myself" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="headingeffect">
                            Our mission? Help your business reach its online potential
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                            sunt corrupti adipisci in maiores, enim impedit sapiente
                            accusamus molestias quos blanditiis corporis iste cum
                            consequuntur officiis aut nemo repellendus consectetur quasi
                            hic. Laboriosam magnam id voluptate aliquid quos cupiditate
                            voluptates inventore iste nemo, corrupti nesciunt ullam!
                            Possimus delectus quibusdam, dicta consequatur facere modi ea
                            quaerat quidem inventore odio aperiam. Natus deleniti, saepe
                            consequatur quo neque odit animi vel veritatis cumque ab ad quod
                            eum tenetur voluptatibus libero praesentium iusto? Odit mollitia
                            ipsa animi neque, eum quibusdam iste, dolores natus est eligendi
                            dolore debitis consectetur voluptatem fugit! Corrupti facere
                            earum facilis.
                        </p>
                        <a href="#contact" class="mb-3 sk-btn sk-btn-primary">
                            Contact Now <img src="public/icons/top-right.png" class="img-fluid" alt="" width="15px"
                                height="15px">
                            <span style="left: 184.375px; top: 253.109px;"></span>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section class="sk-container">
            <div class="about-services shadow">
                <h2 class="headingeffect">our services</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident repellat obcaecati sed assumenda
                    numquam, dicta magni quo, voluptatibus, minima nostrum aliquid id! Eaque possimus magni ab expedita,
                    mollitia porro illo!</p>
                <div class="servicesbtn">
                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Website
                        Design & Development <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>

                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Search
                        Engine Optimise (SEO)
                        <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>
                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">RTO and VET
                        Colleges Website <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>
                    <a href="#" class="sk-btn sk-btn-secondary"
                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">Custom web
                        Applications <img src="public/icons/top-right.png" width="15px" height="15px" alt="">
                        <span style="left: 152.337px; top: 243.137px;"> </span>
                    </a>
                </div>
            </div>


        </section>
        <?php require_once('includes/sections/cta.php');?>


        <?php require_once('includes/sections/faq.php');?>

        </div>
        <?php require_once('includes/footer.php');?>

    </main>
    <?php require_once('includes/customjs.php');?>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script>
    <script src="public/js/pages/about.js"></script>
    <script src="public/js/pages/scrolltxt.js"></script>
    <script src="public/js/cta.js"></script>

    <script src="public/js/services/whyusSection.js"></script>
    <script src="public/js/init.js"></script>

</body>

</html>