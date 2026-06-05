<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' — Bakunova' : 'Bakunova | Premium Cosmetic Actives & Delivery Technologies' ?></title>
    <meta name="description" content="<?= isset($meta_description) ? htmlspecialchars($meta_description) : 'Bakunova develops premium cosmetic actives and advanced delivery technologies for next-generation skincare brands.' ?>">
    <meta name="keywords" content="<?= isset($meta_keywords) ? htmlspecialchars($meta_keywords) : 'Bakunova, cosmetic actives, delivery technologies, skincare ingredients, Drug Discovery Labs' ?>">
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

            <!-- Molecule / science icon -->
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
        <nav class="navbar navbar-expand-xl main-navbar nav-transparent py-0" id="mainNav">
            <div class="container-90 d-flex align-items-center">

                <!-- Logo — Left -->
                <a class="navbar-brand flex-shrink-0 py-3 me-auto me-xl-4" href="index.php">
                    <img src="img/bakunova-logo-white.png" alt="Bakunova" height="40" class="logo-white">
                    <img src="img/bakunova-logo.png"       alt="Bakunova" height="40" class="logo-dark">
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

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-custom d-flex align-items-center gap-1 <?= (isset($current_page) && $current_page === 'company') ? 'active' : '' ?>" href="#" role="button">
                                Company
                                <svg class="nav-chevron" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="leadership.php">Leadership</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-custom d-flex align-items-center gap-1" href="#" role="button">
                                Services
                                <svg class="nav-chevron" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Technologies</a></li>
                                <li><a class="dropdown-item" href="#">Skin Care Ingredients</a></li>
                                <li><a class="dropdown-item" href="#">Skin Care Solutions</a></li>
                                <li><a class="dropdown-item" href="#">Development Pipeline</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-custom">Products</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-custom">Quality</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-custom">FAQ's</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-custom">Contact</a>
                        </li>

                    </ul>

                    <!-- Right: Contact Us CTA -->
                    <div class="flex-shrink-0">
                        <a href="#" class="btn btn-primary btn-nav-cta rounded-pill">
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
        <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenuOffcanvas"
             aria-labelledby="mobileMenuLabel">

            <div class="offcanvas-header border-bottom py-3 px-4">
                <a href="index.php">
                    <img src="img/bakunova-logo.png" alt="Bakunova" height="42">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body px-3 pt-2">

                <div class="accordion accordion-flush" id="mobileNavAccordion">

                    <!-- Home -->
                    <div class="mobile-nav-link-item">
                        <a href="index.php" class="nav-link fw-semibold py-3 px-2">Home</a>
                    </div>

                    <!-- Company -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mobileCompany"
                                    aria-expanded="false">
                                Company
                            </button>
                        </h2>
                        <div id="mobileCompany" class="accordion-collapse collapse"
                             data-bs-parent="#mobileNavAccordion">
                            <div class="accordion-body pt-0 pb-2">
                                <nav class="nav flex-column gap-1">
                                    <a class="nav-link" href="#">About Us</a>
                                    <a class="nav-link" href="#">Leadership</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mobileServices"
                                    aria-expanded="false">
                                Services
                            </button>
                        </h2>
                        <div id="mobileServices" class="accordion-collapse collapse"
                             data-bs-parent="#mobileNavAccordion">
                            <div class="accordion-body pt-0 pb-2">
                                <nav class="nav flex-column gap-1">
                                    <a class="nav-link" href="#">Technologies</a>
                                    <a class="nav-link" href="#">Skin Care Ingredients</a>
                                    <a class="nav-link" href="#">Skin Care Solutions</a>
                                    <a class="nav-link" href="#">Development Pipeline</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Products -->
                    <div class="mobile-nav-link-item">
                        <a href="#" class="nav-link fw-semibold py-3 px-2">Products</a>
                    </div>

                    <!-- Quality -->
                    <div class="mobile-nav-link-item">
                        <a href="#" class="nav-link fw-semibold py-3 px-2">Quality</a>
                    </div>

                    <!-- FAQ's -->
                    <div class="mobile-nav-link-item">
                        <a href="#" class="nav-link fw-semibold py-3 px-2">FAQ's</a>
                    </div>

                    <!-- Contact -->
                    <div class="mobile-nav-link-item">
                        <a href="#" class="nav-link fw-semibold py-3 px-2">Contact</a>
                    </div>

                </div><!-- /accordion -->

                <!-- CTA -->
                <div class="pt-4 pb-2">
                    <a href="#" class="btn btn-primary w-100 rounded-pill fw-semibold">Contact Us</a>
                </div>

            </div><!-- /offcanvas-body -->
        </div><!-- /offcanvas -->

    </header>
