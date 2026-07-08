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

                        <!-- SERVICES MEGA MENU -->
                        <li class="nav-item dropdown mn-trigger">
                            <a class="nav-link nav-link-custom d-flex align-items-center gap-1 <?= (isset($current_page) && $current_page === 'services') ? 'active' : '' ?>" href="#" role="button">
                                Services
                                <svg class="nav-chevron" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </a>
                            <div class="dropdown-menu mn-panel">
                                <div class="mn-inner">

                                    <div class="mn-group">
                                        <p class="mn-group__label">Advanced Delivery Services</p>
                                        <div class="mn-grid">

                                            <a class="mn-item" href="services.php#formulation-strategy">
                                                <span class="mn-item__icon mn-icon--blue">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Technology Selection &amp; Formulation Strategy</strong>
                                                    <span class="mn-item__desc">Expert guidance on optimal delivery systems tailored to your active ingredient and target formulation type.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#preformulation">
                                                <span class="mn-item__icon mn-icon--blue">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Ingredient-to-Pre-Formulation Development</strong>
                                                    <span class="mn-item__desc">Transform raw actives into stable, performance-ready pre-formulations for seamless incorporation into finished products.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#delivery-design">
                                                <span class="mn-item__icon mn-icon--blue">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Customized Delivery System Design</strong>
                                                    <span class="mn-item__desc">Bespoke delivery architectures engineered around your ingredient's chemistry and targeted skin-penetration objectives.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#value-addition">
                                                <span class="mn-item__icon mn-icon--blue">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Value Addition in Finished Formulations</strong>
                                                    <span class="mn-item__desc">End-to-end technical support to elevate your product's stability, efficacy, and market differentiation at scale.</span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="mn-divider"></div>

                                    <div class="mn-group">
                                        <p class="mn-group__label">Technology Platforms</p>
                                        <div class="mn-grid mn-grid--2col">

                                            <a class="mn-item" href="services.php#liposomes">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Liposomes</strong>
                                                    <span class="mn-item__desc">Phospholipid bilayer vesicles for controlled release and superior dermal penetration of sensitive actives.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#microsponge">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8M8 12h8"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Microsponge Systems</strong>
                                                    <span class="mn-item__desc">Porous polymer microspheres enabling sustained, triggered release and reduced skin irritation potential.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#ionic-liquid">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Ionic Liquid / CAGE Technology</strong>
                                                    <span class="mn-item__desc">Choline-geranic acid complexes enabling transdermal active delivery without conventional organic solvents.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#sln">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><circle cx="4" cy="6" r="2"/><circle cx="20" cy="6" r="2"/><circle cx="4" cy="18" r="2"/><circle cx="20" cy="18" r="2"/><line x1="6" y1="6" x2="9.5" y2="10.5"/><line x1="18" y1="6" x2="14.5" y2="10.5"/><line x1="6" y1="18" x2="9.5" y2="13.5"/><line x1="18" y1="18" x2="14.5" y2="13.5"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Solid Lipid Nanoparticles (SLNs)</strong>
                                                    <span class="mn-item__desc">Lipid matrix nanoparticles offering oxidative protection, prolonged shelf life, and sustained active release.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#microemulsions">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 007-7c0-2-1-3.9-3-5.5S7.5 5 7.5 5L5 7.5C3.4 9.1 2 10.9 2 13a7 7 0 007 7h3z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Microemulsions</strong>
                                                    <span class="mn-item__desc">Thermodynamically stable nano-droplet systems providing transparency, solubilization, and rapid skin uptake.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="services.php#cyclodextrin">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">&#946;-Cyclodextrin Complexation</strong>
                                                    <span class="mn-item__desc">Molecular inclusion complexes dramatically improving aqueous solubility and photo-stability of lipophilic actives.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item mn-item--span2" href="services.php#encapsulation">
                                                <span class="mn-item__icon mn-icon--purple">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Additional Encapsulation &amp; Controlled-Release Systems</strong>
                                                    <span class="mn-item__desc">Nanocapsules, polymeric matrices, and targeted release formats for specialised active delivery requirements.</span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
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

                                            <a class="mn-item" href="products.php#hpr">
                                                <span class="mn-item__icon mn-icon--green">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Hydroxypinacolone Retinoate (HPR)</strong>
                                                    <span class="mn-item__desc">Next-generation retinoid ester delivering retinol-like efficacy with significantly improved skin tolerability and stability.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="products.php#salicylic-acid">
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

                                            <a class="mn-item" href="products.php#formulation-ready">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Formulation-Ready Ingredients</strong>
                                                    <span class="mn-item__desc">Pre-processed actives optimised for direct incorporation — no additional reformulation effort required on your end.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="products.php#encapsulated">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Encapsulated, Stabilized &amp; Solubilized Actives</strong>
                                                    <span class="mn-item__desc">Protected ingredients in advanced carriers ensuring stability and potency throughout the full product shelf life.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="products.php#delivery-enhanced">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Delivery-Enhanced Systems for Improved Performance</strong>
                                                    <span class="mn-item__desc">Actives combined with delivery technologies to maximise skin uptake, bioavailability, and consumer-perceived results.</span>
                                                </span>
                                            </a>

                                            <a class="mn-item" href="products.php#skin-delivery">
                                                <span class="mn-item__icon mn-icon--orange">
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                                </span>
                                                <span class="mn-item__body">
                                                    <strong class="mn-item__title">Superior Skin Delivery &amp; Formulation Convenience</strong>
                                                    <span class="mn-item__desc">Plug-and-play systems engineered for maximum formulation convenience, enhanced bioavailability, and skin compatibility.</span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link nav-link-custom">Quality</a>
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

                    <!-- About Us -->
                    <div class="mobile-nav-link-item">
                        <a href="about.php" class="nav-link fw-semibold py-3 px-2">About Us</a>
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
                                <p class="mobile-mega-label">Advanced Delivery Services</p>
                                <nav class="nav flex-column gap-1 mb-2">
                                    <a class="nav-link" href="services.php#formulation-strategy">Technology selection and formulation strategy</a>
                                    <a class="nav-link" href="services.php#preformulation">Ingredient-to-pre-formulation development</a>
                                    <a class="nav-link" href="services.php#delivery-design">Customized delivery system design</a>
                                    <a class="nav-link" href="services.php#value-addition">Support for value addition in finished formulations</a>
                                </nav>
                                <p class="mobile-mega-label">Technology Platforms</p>
                                <nav class="nav flex-column gap-1">
                                    <a class="nav-link" href="services.php#liposomes">Liposomes</a>
                                    <a class="nav-link" href="services.php#microsponge">Microsponge systems</a>
                                    <a class="nav-link" href="services.php#ionic-liquid">Ionic liquid / CAGE technology</a>
                                    <a class="nav-link" href="services.php#sln">Solid lipid nanoparticles (SLNs)</a>
                                    <a class="nav-link" href="services.php#microemulsions">Microemulsions</a>
                                    <a class="nav-link" href="services.php#cyclodextrin">β-Cyclodextrin complexation</a>
                                    <a class="nav-link" href="services.php#encapsulation">Additional encapsulation and controlled-release systems</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Products -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#mobileProducts"
                                    aria-expanded="false">
                                Products
                            </button>
                        </h2>
                        <div id="mobileProducts" class="accordion-collapse collapse"
                             data-bs-parent="#mobileNavAccordion">
                            <div class="accordion-body pt-0 pb-2">
                                <p class="mobile-mega-label">Premium Native Ingredients</p>
                                <nav class="nav flex-column gap-1 mb-2">
                                    <a class="nav-link" href="products.php#bakuchiol">Bakuchiol</a>
                                    <a class="nav-link" href="rosmarinic-acid.php">Rosmarinic Acid</a>
                                    <a class="nav-link" href="products.php#hpr">Hydroxypinacolone Retinoate (HPR)</a>
                                    <a class="nav-link" href="products.php#salicylic-acid">Natural Salicylic Acid</a>
                                </nav>
                                <p class="mobile-mega-label">Value-Added Pre-Formulations</p>
                                <nav class="nav flex-column gap-1">
                                    <a class="nav-link" href="products.php#formulation-ready">Formulation-ready ingredients</a>
                                    <a class="nav-link" href="products.php#encapsulated">Encapsulated, stabilized, and solubilized actives</a>
                                    <a class="nav-link" href="products.php#delivery-enhanced">Delivery-enhanced systems for improved performance</a>
                                    <a class="nav-link" href="products.php#skin-delivery">Designed for superior skin delivery and formulation convenience</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Quality -->
                    <div class="mobile-nav-link-item">
                        <a href="#" class="nav-link fw-semibold py-3 px-2">Quality</a>
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
