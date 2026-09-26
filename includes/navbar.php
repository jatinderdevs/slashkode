<header class="sk_header">
    <div class="island">
        <div class="island-logo--cont">
            <img class="island-logo" src="<?php echo BASE_PATH; ?>/public/img/logoicon.png" alt="Slashkode logo" />
        </div>
        <button class="menu-btn" id="menuToggle" aria-expanded="false" aria-controls="menu-overlay"
            aria-label="Open navigation menu">
            <div class="button-cont">
                <svg id="menuIcon" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <line class="bar bar-top" x1="2" y1="5" x2="14" y2="5" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    <line class="bar bar-mid" x1="2" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    <line class="bar bar-bot" x1="2" y1="11" x2="14" y2="11" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                </svg>
            </div>
        </button>
    </div>

    <div class="menu-overlay" id="menu-overlay" role="dialog" aria-modal="true" aria-label="Navigation menu">
        <div class="menu-backdrop"></div>
        <div class="menu-panel">
            <nav aria-label="Mobile navigation">
                <a class="menu-link" href="<?php echo BASE_PATH; ?>/work"><span>Work</span><span
                        class="link-num">01</span></a>
                <a class="menu-link" href="<?php echo BASE_PATH; ?>/services"><span>Services</span><span
                        class="link-num">02</span></a>
                <a class="menu-link" href="<?php echo BASE_PATH; ?>/price"><span>Pricing</span><span
                        class="link-num">03</span></a>
                <a class="menu-link" href="<?php echo BASE_PATH; ?>/about"><span>About</span><span
                        class="link-num">04</span></a>
                <a class="menu-link" href="<?php echo BASE_PATH; ?>/contact"><span>Request Consultation</span><span
                        class="link-num">05</span></a>
            </nav>
        </div>
    </div>

    <div class="row align-items-center" id="desktopNavbar">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sk_navbar">
                <div class="logo">
                    <a href="<?php echo BASE_PATH; ?>/">
                        <img src="<?php echo BASE_PATH; ?>/public/img/Slashkode.png" width="150" height="40"
                            class="img-fluid" alt="Slashkode logo" />
                    </a>
                </div>
                <ul class="nav" aria-label="Primary navigation">
                    <li><a href="<?php echo BASE_PATH; ?>/work" class="nav-link-anim"><span class="nav-link-inner"><span
                                    class="nav-link-text nav-link-text--top">work</span><span
                                    class="nav-link-text nav-link-text--bottom">Work</span></span></a></li>
                    <li><a href="<?php echo BASE_PATH; ?>/services" class="nav-link-anim"><span
                                class="nav-link-inner"><span
                                    class="nav-link-text nav-link-text--top">services</span><span
                                    class="nav-link-text nav-link-text--bottom">Services</span></span></a></li>
                    <li><a href="<?php echo BASE_PATH; ?>/price" class="nav-link-anim"><span
                                class="nav-link-inner"><span
                                    class="nav-link-text nav-link-text--top">pricing</span><span
                                    class="nav-link-text nav-link-text--bottom">Pricing</span></span></a></li>
                    <li><a href="<?php echo BASE_PATH; ?>/about" class="nav-link-anim"><span
                                class="nav-link-inner"><span class="nav-link-text nav-link-text--top">about</span><span
                                    class="nav-link-text nav-link-text--bottom">About</span></span></a></li>
                    <li><a href="<?php echo BASE_PATH; ?>/contact" class="nav-link-anim"><span
                                class="nav-link-inner"><span class="nav-link-text nav-link-text--top">Request
                                    Consultation</span><span class="nav-link-text nav-link-text--bottom">Request
                                    Consultation</span></span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 text-right"></div>
    </div>
</header>