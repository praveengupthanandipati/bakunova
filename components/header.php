<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' — Bakunova' : 'Bakunova | Premium Cosmetic Actives & Delivery Technologies' ?></title>
    <meta name="description" content="<?= isset($meta_description) ? htmlspecialchars($meta_description) : 'Bakunova develops premium cosmetic actives and advanced delivery technologies for next-generation skincare brands.' ?>">
    <meta name="keywords" content="<?= isset($meta_keywords) ? htmlspecialchars($meta_keywords) : 'Bakunova, cosmetic actives, delivery technologies, skincare ingredients, Drug Discovery Labs' ?>">
    <link rel="icon" href="img/fav.png" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- =============================================
         PAGE PRELOADER
         ============================================= -->
    <div class="preloader" id="pagePreloader" aria-hidden="true">
        <div class="preloader__inner">

            <!-- Icon + spinning ring wrapper -->
            <div class="preloader__icon-wrap">
                <div class="preloader__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none"
                         viewBox="0 0 24 24" stroke="var(--bs-primary)" stroke-width="1.4"
                         stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="5"  r="2" fill="rgba(8,138,199,0.25)"/>
                        <circle cx="19" cy="9"  r="2" fill="rgba(8,138,199,0.25)"/>
                        <circle cx="19" cy="15" r="2" fill="rgba(8,138,199,0.25)"/>
                        <circle cx="12" cy="19" r="2" fill="rgba(8,138,199,0.25)"/>
                        <circle cx="5"  cy="15" r="2" fill="rgba(8,138,199,0.25)"/>
                        <circle cx="5"  cy="9"  r="2" fill="rgba(8,138,199,0.25)"/>
                        <circle cx="12" cy="12" r="2.5" fill="rgba(8,138,199,0.40)"/>
                        <line x1="12" y1="7"  x2="12" y2="9.5"/>
                        <line x1="17.3" y1="10.3" x2="14.2" y2="10.8"/>
                        <line x1="17.3" y1="13.7" x2="14.2" y2="13.2"/>
                        <line x1="12"   y1="17" x2="12"   y2="14.5"/>
                        <line x1="6.7"  y1="13.7" x2="9.8" y2="13.2"/>
                        <line x1="6.7"  y1="10.3" x2="9.8" y2="10.8"/>
                    </svg>
                </div>
                <!-- Spinning ring -->
                <div class="preloader__ring"></div>
            </div>

            <!-- Progress bar -->
            <div class="preloader__bar-wrap">
                <div class="preloader__bar"></div>
            </div>

            <!-- Brand text -->
            <p class="preloader__text">Bakunova</p>

        </div>
    </div>

    <header class="site-header">
        <!-- =============================================
             MAIN NAVBAR
             ============================================= -->
        <nav class="navbar navbar-expand-xl main-navbar py-0" id="mainNav">
            <div class="container-90 d-flex align-items-center">

                <!-- Logo — Left -->
                <a class="navbar-brand flex-shrink-0 py-3 me-auto me-xl-4" href="index.php">
                    <img src="img/bakunova-logo.png" alt="Bakunova" height="65">
                </a>

                <!-- Mobile Hamburger -->
                <button class="navbar-toggler border-0 p-1 d-xl-none ms-3" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas"
                        aria-controls="mobileMenuOffcanvas" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2" stroke-linecap="round">
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>

                <!-- Desktop Nav — Hidden below xl -->
                <div class="d-none d-xl-flex flex-grow-1 align-items-center">

                    <!-- Centre: Nav Links -->
                    <ul class="navbar-nav mx-auto header-nav align-items-center gap-1 mb-0">

                        <li class="nav-item">
                            <a href="index.php" class="nav-link nav-link-custom <?= (isset($current_page) && $current_page === 'home') ? 'active' : '' ?>">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link nav-link-custom <?= (isset($current_page) && in_array($current_page, ['company','about'])) ? 'active' : '' ?>">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="xnova.php" class="nav-link nav-link-custom <?= (isset($current_page) && $current_page === 'xnova') ? 'active' : '' ?>">Xnova</a>
                        </li>

                        <!-- PRODUCTS MEGA MENU -->
                        <li class="nav-item dropdown mn-trigger">
                            <a class="nav-link nav-link-custom d-flex align-items-center gap-1 <?= (isset($current_page) && $current_page === 'products') ? 'active' : '' ?>" href="#" role="button">
                                Products
                                <svg class="nav-chevron" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu mn-panel">
                                <div class="mn-inner">

                                    <div class="mn-group">
                                        <p class="mn-group__label">Premium Native Ingredients</p>
                                        <div class="mn-grid mn-grid--2col">

                                            <a class="mn-item" href="bakuchiol.php">
                                                <span class="mn-item__icon mn-icon--green">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Bakuchiol</strong>
                                                    <span class="mn-item__desc">The premier natural retinol alternative from Psoralea corylifolia — clinically proven anti-ageing efficacy without irritation.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="rosmarinic-acid.php">
                                                <span class="mn-item__icon mn-icon--green">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Rosmarinic Acid</strong>
                                                    <span class="mn-item__desc">Potent natural antioxidant and anti-inflammatory from rosemary, ideal for brightening and sensitive skin formulations.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="hpr.php">
                                                <span class="mn-item__icon mn-icon--green">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Hydroxypinacolone Retinoate (HPR)</strong>
                                                    <span class="mn-item__desc">Next-generation retinoid ester delivering retinol-like efficacy with significantly improved skin tolerability and stability.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="natural-solicylic-acid.php">
                                                <span class="mn-item__icon mn-icon--green">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 007-7c0-2-1-3.9-3-5.5S7.5 5 7.5 5L5 7.5C3.4 9.1 2 10.9 2 13a7 7 0 007 7h3z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Natural Salicylic Acid</strong>
                                                    <span class="mn-item__desc">Botanical-derived beta-hydroxy acid for gentle exfoliation, pore refinement, and acne-prone skin care formulations.</span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="mn-divider"></div>

                                    <div class="mn-group">
                                        <p class="mn-group__label">Value-Added Pre-Formulations</p>
                                        <div class="mn-grid mn-grid--1col">

                                            <div class="mn-item mn-item--static">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Formulation-Ready Ingredients</strong>
                                                    <span class="mn-item__desc">Pre-processed actives optimised for direct incorporation — no additional reformulation effort required on your end.</span>
                                                </span>
                                            </div>

                                            <div class="mn-item mn-item--static">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Encapsulated, Stabilized &amp; Solubilized Actives</strong>
                                                    <span class="mn-item__desc">Protected ingredients in advanced carriers ensuring stability and potency throughout the full product shelf life.</span>
                                                </span>
                                            </div>

                                            <div class="mn-item mn-item--static">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Delivery-Enhanced Systems for Improved Performance</strong>
                                                    <span class="mn-item__desc">Actives combined with delivery technologies to maximise skin uptake, bioavailability, and consumer-perceived results.</span>
                                                </span>
                                            </div>

                                            <div class="mn-item mn-item--static">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Superior Skin Delivery &amp; Formulation Convenience</strong>
                                                    <span class="mn-item__desc">Plug-and-play systems engineered for maximum formulation convenience, enhanced bioavailability, and skin compatibility.</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <!-- SERVICES -->
                        <li class="nav-item">
                            <a href="services.php" class="nav-link nav-link-custom <?= (isset($current_page) && $current_page === 'services') ? 'active' : '' ?>">Services</a>
                        </li>

                         <li class="nav-item">
                            <a href="pipeline.php" class="nav-link nav-link-custom">Pipeline</a>
                        </li>


                        <li class="nav-item">
                            <a href="faq.php" class="nav-link nav-link-custom">FAQ's</a>
                        </li>

                    </ul>

                    <!-- Right: Contact Us CTA -->
                    <div class="flex-shrink-0">
                        <a href="contact.php" class="btn btn-primary btn-nav-cta rounded-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                 class="me-2" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661
                                1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608
                                4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0
                                0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0
                                1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0
                                0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1
                                2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0
                                .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1
                                1.494.315l2.306 1.794c.829.645.905 1.87.163
                                2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0
                                1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            Contact Us
                        </a>
                    </div>

                </div><!-- /desktop nav -->

            </div><!-- /container -->
        </nav>

        <!-- =============================================
             MOBILE OFFCANVAS MENU
             ============================================= -->
        <div class="offcanvas offcanvas-end mob-offcanvas" tabindex="-1" id="mobileMenuOffcanvas"
             aria-labelledby="mobileMenuLabel">

            <!-- Header -->
            <div class="mob-offcanvas__header">
                <a href="index.php" class="mob-offcanvas__logo">
                    <img src="img/bakunova-logo.png" alt="Bakunova" height="40">
                </a>
                <button type="button" class="mob-offcanvas__close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                </button>
            </div>

            <!-- Body -->
            <div class="mob-offcanvas__body">

                <!-- Plain links block 1 -->
                <div class="mob-nav-block">
                    <a href="index.php" class="mob-nav-row">Home</a>
                    <a href="about.php" class="mob-nav-row">About Us</a>
                    <a href="xnova.php" class="mob-nav-row">Xnova</a>
                    <a href="services.php" class="mob-nav-row">Services</a>
                </div>

                <!-- Products accordion block -->
                <div class="mob-nav-block mob-nav-block--accordion" id="mobAccordion">
                    <div class="accordion-item" style="border:none;background:transparent;">
                        <h2 class="accordion-header m-0">
                            <button class="mob-accordion-btn accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mobProducts"
                                    aria-expanded="false" aria-controls="mobProducts">
                                Products
                                <svg class="mob-chevron" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="mobProducts" class="accordion-collapse collapse">
                            <div class="mob-accordion-body">
                                <p class="mob-sub-label">Premium Native Ingredients</p>
                                <a class="mob-sub-link" href="bakuchiol.php">Bakuchiol</a>
                                <a class="mob-sub-link" href="rosmarinic-acid.php">Rosmarinic Acid</a>
                                <a class="mob-sub-link" href="hpr.php">Hydroxypinacolone Retinoate (HPR)</a>
                                <a class="mob-sub-link" href="natural-solicylic-acid.php">Natural Salicylic Acid</a>
                                <p class="mob-sub-label mt-3">Value-Added Pre-Formulations</p>
                                <span class="mob-sub-link mob-sub-link--static">Formulation-ready ingredients</span>
                                <span class="mob-sub-link mob-sub-link--static">Encapsulated, stabilized &amp; solubilized actives</span>
                                <span class="mob-sub-link mob-sub-link--static">Delivery-enhanced systems for improved performance</span>
                                <span class="mob-sub-link mob-sub-link--static">Superior skin delivery &amp; formulation convenience</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plain links block 2 -->
                <div class="mob-nav-block">
                    <a href="pipeline.php" class="mob-nav-row">Pipeline</a>
                    <a href="faq.php" class="mob-nav-row">FAQ's</a>
                    <a href="contact.php" class="mob-nav-row mob-nav-row--last">Contact</a>
                </div>

                <!-- CTA -->
                <div class="mob-offcanvas__cta">
                    <a href="contact.php" class="btn btn-primary w-100 rounded-pill fw-semibold py-3">Contact Us</a>
                </div>

            </div><!-- /body -->
        </div><!-- /offcanvas -->

    </header>
