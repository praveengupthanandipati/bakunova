<?php
$current_page   = 'home';
$page_title     = 'Home';
$meta_description = 'Bakunova develops premium cosmetic actives and advanced delivery technologies — giving skincare brands formulation-ready solutions that are more stable, more effective, and truly differentiated.';
$meta_keywords  = 'Bakunova, cosmetic actives, delivery technologies, skincare ingredients, liposomes, microsponge, microemulsions, ionic liquid, solid lipid nanoparticles, bakuchiol, skin care, formulation';
$og_image       = 'img/bakunova-logo.png';
include 'components/header.php';
?>

    <main>
        <!-- =============================================
             HERO SECTION
             ============================================= -->
        <section class="hero-section">
            <div class="hero-overlay"></div>
            <div class="container-90 hero-inner">
                <div class="row align-items-center g-5">

                    <!-- Left: Hero text -->
                    <div class="col-lg-6">

                        <!-- Eyebrow -->
                        <p class="hero-eyebrow"
                           data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            SRDK Biochem, India
                        </p>

                        <!-- Heading -->
                        <h1 class="hero-title"
                            data-aos="fade-up" data-aos-duration="900" data-aos-delay="250">
                            Where active ingredients meet<br>
                            <span class="hero-title-accent">delivery science.</span>
                        </h1>

                        <!-- CTA Button -->
                        <div class="hero-btns"
                             data-aos="fade-up" data-aos-duration="800" data-aos-delay="550">
                            <a href="products.php" class="btn-hero-primary">
                                Explore
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>

                    </div><!-- /left col -->

                    <!-- Right: Expertise areas -->
                    <div class="col-lg-6 d-none"
                         data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                        <div class="hero-expertise">

                            <p class="hero-expertise__intro"
                               data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                                Our expertise is focused on three key areas:
                            </p>

                            <div class="hero-expertise__card"
                                 data-aos="fade-up" data-aos-duration="700" data-aos-delay="400">
                                <div class="hero-expertise__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <div class="hero-expertise__body">
                                    <h4 class="hero-expertise__title">Premium Cosmetic Active Ingredients</h4>
                                    <p class="hero-expertise__desc">We manufacture and supply premium cosmetic active ingredients with a strong focus on quality, consistency, regulatory compliance and global supply reliability.</p>
                                </div>
                            </div>

                            <div class="hero-expertise__card"
                                 data-aos="fade-up" data-aos-duration="700" data-aos-delay="520">
                                <div class="hero-expertise__icon hero-expertise__icon--purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                    </svg>
                                </div>
                                <div class="hero-expertise__body">
                                    <h4 class="hero-expertise__title">Value-Added Active Cosmetic Ingredients</h4>
                                    <p class="hero-expertise__desc">We transform premium cosmetic active ingredients into formulation-ready, high-performance solutions using advanced polymer engineering and proprietary delivery technologies to enhance stability, bioavailability, functionality, and skin performance.</p>
                                </div>
                            </div>

                            <div class="hero-expertise__card"
                                 data-aos="fade-up" data-aos-duration="700" data-aos-delay="640">
                                <div class="hero-expertise__icon hero-expertise__icon--teal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                                    </svg>
                                </div>
                                <div class="hero-expertise__body">
                                    <h4 class="hero-expertise__title">Technology &amp; Innovation Partnerships</h4>
                                    <p class="hero-expertise__desc">We collaborate with skincare brands from concept to commercialization by providing ingredient innovation, delivery technologies, formulation development, and technical support for differentiated cosmetic products.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /right col -->

                </div>
            </div>
        </section>
        <!--/ hero section -->

        <!-- =============================================
             ABOUT SECTION
             ============================================= -->
        <section class="about-bak">
            <!-- SVG wave decoration — top right -->
            <svg class="about-bak__deco" viewBox="0 0 700 640" preserveAspectRatio="xMaxYMin slice"
                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <defs>
                    <linearGradient id="wg1" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#e91e8c" stop-opacity="0.13"/>
                        <stop offset="100%" stop-color="#e91e8c" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="wg2" x1="100%" y1="0%" x2="10%" y2="100%">
                        <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.11"/>
                        <stop offset="100%" stop-color="#7c3aed" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="wg3" x1="80%" y1="0%" x2="20%" y2="100%">
                        <stop offset="0%" stop-color="#0891b2" stop-opacity="0.09"/>
                        <stop offset="100%" stop-color="#0891b2" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <ellipse cx="580" cy="140" rx="260" ry="200" fill="url(#wg1)" transform="rotate(-20 580 140)"/>
                <ellipse cx="640" cy="350" rx="220" ry="180" fill="url(#wg2)" transform="rotate(10 640 350)"/>
                <ellipse cx="500" cy="520" rx="200" ry="160" fill="url(#wg3)" transform="rotate(-5 500 520)"/>
                <path d="M350 0 Q450 80 400 180 Q350 280 500 360 Q600 420 560 520 Q520 600 600 640"
                      stroke="#e91e8c" stroke-width="1.8" fill="none" opacity="0.18"/>
                <path d="M420 0 Q520 90 470 200 Q420 310 570 380 Q660 430 620 540 Q590 610 660 640"
                      stroke="#e91e8c" stroke-width="1.2" fill="none" opacity="0.13"/>
                <path d="M500 0 Q590 100 550 220 Q510 340 650 400 Q700 430 680 550"
                      stroke="#7c3aed" stroke-width="1.8" fill="none" opacity="0.14"/>
                <path d="M570 0 Q650 120 620 240 Q590 360 700 430"
                      stroke="#7c3aed" stroke-width="1.2" fill="none" opacity="0.10"/>
                <path d="M620 40 Q680 160 660 290 Q640 400 700 490"
                      stroke="#0891b2" stroke-width="1.5" fill="none" opacity="0.12"/>
                <circle cx="440" cy="80"  r="3.5" fill="#e91e8c" opacity="0.30"/>
                <circle cx="390" cy="170" r="2.5" fill="#e91e8c" opacity="0.22"/>
                <circle cx="530" cy="130" r="2"   fill="#7c3aed" opacity="0.28"/>
                <circle cx="610" cy="200" r="3"   fill="#7c3aed" opacity="0.22"/>
                <circle cx="560" cy="300" r="2.5" fill="#0891b2" opacity="0.22"/>
                <circle cx="670" cy="360" r="2"   fill="#0891b2" opacity="0.20"/>
                <circle cx="490" cy="420" r="3"   fill="#e91e8c" opacity="0.18"/>
            </svg>

            <div class="container-90">

                <!-- ── Section Title ── -->
                <div class="abk-section-header"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">Our Technology Platform</span>
                    <h2 class="section-heading">Bakunova's Integrated Cosmetic Innovation Platform</h2>
                </div>

                <!-- ── Intro Block ── -->
                <div class="row mb-5 pb-lg-3">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <div class="abk-body-text"
                             data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <p>Combining ingredient science, advanced encapsulation technologies, and intelligent delivery platforms to create formulation-ready skincare solutions.</p>
                        </div>
                        <div class="mt-4"
                             data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                            <a href="about.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold abk-readmore-btn">
                                Explore
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ── 5-Step Pipeline ── -->
                <div class="abk-pipeline mb-5 pb-lg-3">

                    <div class="abk-step abk-step--1"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="0">
                        <span class="abk-step-num">01</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/whovr/whovr01.jpg" alt="Premium Cosmetic Active Ingredients">
                        </div>
                        <div class="abk-step-icon abk-step-icon--1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h4 class="abk-step-title abk-step-title--1">PREMIUM<br>COSMETIC ACTIVES</h4>
                        <p class="abk-step-desc">High-purity, scientifically validated actives sourced for consistent quality and maximum efficacy.</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="100">&rsaquo;</div>

                    <div class="abk-step abk-step--2"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="150">
                        <span class="abk-step-num">02</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/whovr/whovr02.jpg" alt="Encapsulated Ingredients">
                        </div>
                        <div class="abk-step-icon abk-step-icon--2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h4 class="abk-step-title abk-step-title--2">ENCAPSULATED<br>INGREDIENTS</h4>
                        <p class="abk-step-desc">Advanced encapsulation technologies protect actives from degradation and enhance stability, solubility and bioavailability.</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="250">&rsaquo;</div>

                    <div class="abk-step abk-step--3"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                        <span class="abk-step-num">03</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/whovr/whovr03.jpg" alt="Intelligent Delivery">
                        </div>
                        <div class="abk-step-icon abk-step-icon--3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </div>
                        <h4 class="abk-step-title abk-step-title--3">INTELLIGENT<br>DELIVERY</h4>
                        <p class="abk-step-desc">Precision delivery systems ensure targeted penetration and controlled release for superior skin performance.</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="400">&rsaquo;</div>

                    <div class="abk-step abk-step--4"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="450">
                        <span class="abk-step-num">04</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/whovr/whovr04.jpg" alt="Formulation-Ready Solutions">
                        </div>
                        <div class="abk-step-icon abk-step-icon--4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h4 class="abk-step-title abk-step-title--4">FORMULATION-READY<br>SOLUTIONS</h4>
                        <p class="abk-step-desc">Pre-formulated, stable and compatible solutions for faster development and seamless integration.</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="550">&rsaquo;</div>

                    <div class="abk-step abk-step--5"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="600">
                        <span class="abk-step-num">05</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/whovr/whovr05.jpg" alt="Formulation Excellence">
                        </div>
                        <div class="abk-step-icon abk-step-icon--5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h4 class="abk-step-title abk-step-title--5">FORMULATION<br>EXCELLENCE</h4>
                        <p class="abk-step-desc">Science-led innovation that delivers differentiated, effective and sustainable skincare solutions.</p>
                    </div>

                </div><!-- /pipeline -->

                <!-- ── Bottom 3 Feature Cards ── -->
                <div class="abk-feats"
                     data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">

                    <div class="abk-feat abk-feat--1">
                        <div class="abk-feat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </div>
                        <div>
                            <p class="abk-feat-title">SCIENCE-BACKED INNOVATION</p>
                            <p class="abk-feat-desc">Driven by research. Proven by results.</p>
                        </div>
                    </div>

                    <div class="abk-feat-divider"></div>

                    <div class="abk-feat abk-feat--2">
                        <div class="abk-feat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0
                                01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622
                                5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="abk-feat-title">ACTIVE STABILITY &amp; SKIN PERFORMANCE</p>
                            <p class="abk-feat-desc">Engineered for superior efficacy, stability, and visible skincare benefits.</p>
                        </div>
                    </div>

                    <div class="abk-feat-divider"></div>

                    <div class="abk-feat abk-feat--3">
                        <div class="abk-feat-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6
                                6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586
                                1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2
                                2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="abk-feat-title">FORMULATION TECHNOLOGY PARTNERSHIPS</p>
                            <p class="abk-feat-desc">Transforming cosmetic innovations into market-ready skincare solutions.</p>
                        </div>
                    </div>

                </div><!-- /feats -->

            </div><!-- /container -->
        </section>
        <!--/ about section-->
        <!-- =============================================
             PRODUCTS & SERVICES SECTION
             ============================================= -->
        <section class="ps-section" id="services">
            <div class="container-90">

                <!-- Section title -->
                <div class="text-center mb-5"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">What We Offer</span>
                    <h2 class="section-heading">Products &amp; Services</h2>
                    <p class="mx-auto mt-2" style="max-width:520px;color:#64748b;font-size:.97rem;line-height:1.7;">
                        Combining premium natural actives with cutting-edge delivery innovation to help cosmetic brands create more effective, differentiated products.
                    </p>
                </div>

                <div class="row g-4 align-items-stretch">

                    <!-- ══ PRODUCTS card ══ -->
                    <div class="col-lg-4"
                         data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="ps-card ps-card--products">

                            <div class="ps-card__header">
                                <div class="ps-card__header-icon">
                                    <!-- Molecule icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="5"  r="1.8"/>
                                        <circle cx="19" cy="9"  r="1.8"/>
                                        <circle cx="19" cy="15" r="1.8"/>
                                        <circle cx="12" cy="19" r="1.8"/>
                                        <circle cx="5"  cy="15" r="1.8"/>
                                        <circle cx="5"  cy="9"  r="1.8"/>
                                        <circle cx="12" cy="12" r="2.2" fill="rgba(255,255,255,0.3)"/>
                                        <line x1="12" y1="6.8"  x2="12" y2="9.8"/>
                                        <line x1="17.5" y1="10.2" x2="14.2" y2="11"/>
                                        <line x1="17.5" y1="13.8" x2="14.2" y2="13"/>
                                        <line x1="12"   y1="17.2" x2="12"   y2="14.2"/>
                                        <line x1="6.5"  y1="13.8" x2="9.8"  y2="13"/>
                                        <line x1="6.5"  y1="10.2" x2="9.8"  y2="11"/>
                                    </svg>
                                </div>
                                <div class="ps-card__header-text">
                                    <span class="ps-card__label">Products we sell</span>
                                    <h3 class="ps-card__title"><a href="products.php">Products</a></h3>
                                </div>
                            </div>

                            <div class="ps-card__body">

                                <!-- 1: Premium native ingredients -->
                                <div class="ps-item">
                                    <div class="ps-item__head">
                                        <span class="ps-item__num">1</span>
                                        <div class="ps-item__img-wrap" style="width:48px;height:48px;border-radius:50%;background:rgba(8,138,199,.1);border:2px solid rgba(8,138,199,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                 viewBox="0 0 24 24" stroke="#088ac7" stroke-width="1.6"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                            </svg>
                                        </div>
                                        <a href="products.php#native-ingredients" class="ps-item__title">Premium native ingredients</a>
                                    </div>
                                    <ul class="ps-item__list">
                                        <li><a href="bakuchiol.php">Bakuchiol</a></li>
                                        <li><a href="rosmarinic-acid.php">Rosmarinic Acid</a></li>
                                        <li><a href="hpr.php">Hydroxypinacolone Retinoate (HPR)</a></li>
                                        <li><a href="natural-solicylic-acid.php">Natural Salicylic Acid</a></li>
                                    </ul>
                                </div>

                                <!-- 2: Value-added pre-formulations -->
                                <div class="ps-item">
                                    <div class="ps-item__head">
                                        <span class="ps-item__num">2</span>
                                        <div class="ps-item__img-wrap" style="width:48px;height:48px;border-radius:50%;background:rgba(8,138,199,.08);border:2px solid rgba(8,138,199,.18);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                 viewBox="0 0 24 24" stroke="#088ac7" stroke-width="1.6"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                            </svg>
                                        </div>
                                        <a href="products.php#pre-formulations" class="ps-item__title">Value-added pre-formulations</a>
                                    </div>
                                    <ul class="ps-item__list">
                                        <li><a href="products.php#formulation-ready">Formulation-ready ingredients</a></li>
                                        <li><a href="products.php#encapsulated">Encapsulated and stabilized actives</a></li>
                                        <li><a href="products.php#delivery-enhanced">Improved performance</a></li>
                                        <li><a href="products.php#skin-delivery">Superior skin delivery</a></li>
                                        <li><a href="products.php#formulation-convenience">Formulation convenience</a></li>
                                    </ul>
                                </div>

                            </div><!-- /card body -->
                        </div><!-- /products card -->
                    </div>

                    <!-- ══ CENTER: visual + pipeline ══ -->
                    <div class="col-lg-4"
                         data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                        <div class="ps-center">

                            <div class="ps-center__tagline">
                                WHERE <span>ACTIVE INGREDIENTS</span> MEET DELIVERY SCIENCE
                            </div>

                            <!-- SVG visual — molecular serum -->
                            <div class="ps-center__visual d-none">
                                <svg viewBox="0 0 260 240" xmlns="http://www.w3.org/2000/svg"
                                     style="width:100%;max-width:260px" aria-hidden="true">
                                    <defs>
                                        <radialGradient id="cg1" cx="50%" cy="40%" r="50%">
                                            <stop offset="0%" stop-color="#088ac7" stop-opacity="0.12"/>
                                            <stop offset="100%" stop-color="#088ac7" stop-opacity="0"/>
                                        </radialGradient>
                                        <radialGradient id="cg2" cx="50%" cy="60%" r="50%">
                                            <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.10"/>
                                            <stop offset="100%" stop-color="#7c3aed" stop-opacity="0"/>
                                        </radialGradient>
                                    </defs>
                                    <!-- Background blobs -->
                                    <ellipse cx="130" cy="120" rx="120" ry="100" fill="url(#cg1)"/>
                                    <ellipse cx="130" cy="140" rx="100" ry="90" fill="url(#cg2)"/>
                                    <!-- Serum bottle body -->
                                    <rect x="102" y="80" width="56" height="110" rx="14" fill="rgba(8,138,199,0.08)" stroke="rgba(8,138,199,0.25)" stroke-width="1.5"/>
                                    <!-- Bottle cap -->
                                    <rect x="112" y="58" width="36" height="26" rx="6" fill="rgba(6,28,99,0.18)" stroke="rgba(6,28,99,0.3)" stroke-width="1.2"/>
                                    <!-- Dropper tip -->
                                    <line x1="130" y1="45" x2="130" y2="58" stroke="rgba(6,28,99,0.4)" stroke-width="3" stroke-linecap="round"/>
                                    <!-- Liquid inside -->
                                    <rect x="108" y="120" width="44" height="64" rx="8" fill="rgba(8,138,199,0.15)"/>
                                    <!-- Bubbles inside bottle -->
                                    <circle cx="118" cy="130" r="4" fill="rgba(8,138,199,0.2)"/>
                                    <circle cx="130" cy="140" r="5" fill="rgba(8,138,199,0.18)"/>
                                    <circle cx="142" cy="128" r="3.5" fill="rgba(8,138,199,0.16)"/>
                                    <circle cx="122" cy="155" r="3" fill="rgba(8,138,199,0.12)"/>
                                    <!-- Molecule nodes — left -->
                                    <g stroke="rgba(8,138,199,0.5)" stroke-width="1.2" fill="none">
                                        <circle cx="35"  cy="90"  r="8" fill="rgba(8,138,199,0.12)"/>
                                        <circle cx="62"  cy="70"  r="6" fill="rgba(8,138,199,0.10)"/>
                                        <circle cx="72"  cy="108" r="7" fill="rgba(8,138,199,0.10)"/>
                                        <circle cx="44"  cy="125" r="5" fill="rgba(8,138,199,0.08)"/>
                                        <line x1="35" y1="90"  x2="62"  y2="70"/>
                                        <line x1="62" y1="70"  x2="72"  y2="108"/>
                                        <line x1="35" y1="90"  x2="72"  y2="108"/>
                                        <line x1="35" y1="90"  x2="44"  y2="125"/>
                                        <line x1="72" y1="108" x2="44"  y2="125"/>
                                    </g>
                                    <!-- Molecule nodes — right -->
                                    <g stroke="rgba(124,58,237,0.45)" stroke-width="1.2" fill="none">
                                        <circle cx="225" cy="85"  r="8" fill="rgba(124,58,237,0.12)"/>
                                        <circle cx="198" cy="65"  r="6" fill="rgba(124,58,237,0.10)"/>
                                        <circle cx="188" cy="105" r="7" fill="rgba(124,58,237,0.10)"/>
                                        <circle cx="215" cy="120" r="5" fill="rgba(124,58,237,0.08)"/>
                                        <line x1="225" y1="85"  x2="198" y2="65"/>
                                        <line x1="198" y1="65"  x2="188" y2="105"/>
                                        <line x1="225" y1="85"  x2="188" y2="105"/>
                                        <line x1="225" y1="85"  x2="215" y2="120"/>
                                        <line x1="188" y1="105" x2="215" y2="120"/>
                                    </g>
                                    <!-- Floating dots -->
                                    <circle cx="80"  cy="160" r="3" fill="rgba(8,138,199,0.25)"/>
                                    <circle cx="55"  cy="145" r="2" fill="rgba(8,138,199,0.20)"/>
                                    <circle cx="175" cy="155" r="3" fill="rgba(124,58,237,0.25)"/>
                                    <circle cx="200" cy="140" r="2" fill="rgba(124,58,237,0.20)"/>
                                    <circle cx="130" cy="220" r="4" fill="rgba(8,138,199,0.12)"/>
                                    <circle cx="110" cy="212" r="2.5" fill="rgba(8,138,199,0.10)"/>
                                    <circle cx="150" cy="215" r="2.5" fill="rgba(124,58,237,0.10)"/>
                                </svg>
                            </div>

                            <!-- 4-step value chain flow -->
                            <div class="ps-flow w-100">

                                <div class="ps-flow-step ps-flow-step--1"
                                     data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                                    <div class="ps-flow-step__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                        </svg>
                                    </div>
                                    <span class="ps-flow-step__label">Native Ingredients</span>
                                </div>

                                <div class="ps-flow-arrow">&#8595;</div>

                                <div class="ps-flow-step ps-flow-step--2"
                                     data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                                    <div class="ps-flow-step__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"/>
                                            <circle cx="12" cy="12" r="6"/>
                                            <circle cx="12" cy="12" r="2"/>
                                        </svg>
                                    </div>
                                    <span class="ps-flow-step__label">Advanced Delivery Platforms</span>
                                </div>

                                <div class="ps-flow-arrow">&#8595;</div>

                                <div class="ps-flow-step ps-flow-step--3"
                                     data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                                    <div class="ps-flow-step__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    <span class="ps-flow-step__label">Value-added Pre-formulations</span>
                                </div>

                                <div class="ps-flow-arrow">&#8595;</div>

                                <div class="ps-flow-step ps-flow-step--4"
                                     data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
                                    <div class="ps-flow-step__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <span class="ps-flow-step__label">Better Finished Product Performance</span>
                                </div>

                            </div><!-- /flow -->
                        </div><!-- /ps-center -->
                    </div>

                    <!-- ══ SERVICES card ══ -->
                    <div class="col-lg-4"
                         data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="ps-card ps-card--services">

                            <div class="ps-card__header">
                                <div class="ps-card__header-icon">
                                    <!-- Gear/atom icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="3"/>
                                        <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/>
                                    </svg>
                                </div>
                                <div class="ps-card__header-text">
                                    <span class="ps-card__label">Services we offer</span>
                                    <h3 class="ps-card__title"><a href="services.php">Services</a></h3>
                                </div>
                            </div>

                            <div class="ps-card__body">

                                <!-- 1: Advanced delivery technology services -->
                                <div class="ps-item">
                                    <div class="ps-item__head">
                                        <span class="ps-item__num">1</span>
                                        <div class="ps-item__img-wrap" style="width:48px;height:48px;border-radius:50%;background:rgba(124,58,237,.1);border:2px solid rgba(124,58,237,.2);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                 viewBox="0 0 24 24" stroke="#7c3aed" stroke-width="1.6"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"/>
                                                <circle cx="12" cy="12" r="6"/>
                                                <circle cx="12" cy="12" r="2"/>
                                            </svg>
                                        </div>
                                        <a href="services.php#delivery-services" class="ps-item__title">Advanced delivery technology services</a>
                                    </div>
                                    <ul class="ps-item__list">
                                        <li><a href="services.php#tech-selection">Technology selection and formulation strategy</a></li>
                                        <li><a href="services.php#preformulation">Ingredient-to-pre-formulation development</a></li>
                                        <li><a href="services.php#custom-design">Customized delivery system design</a></li>
                                        <li><a href="services.php#value-addition">Support for value addition in finished formulations</a></li>
                                    </ul>
                                </div>

                                <!-- 2: Technology platforms -->
                                <div class="ps-item">
                                    <div class="ps-item__head">
                                        <span class="ps-item__num">2</span>
                                        <div class="ps-item__img-wrap" style="width:48px;height:48px;border-radius:50%;background:rgba(124,58,237,.08);border:2px solid rgba(124,58,237,.18);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                 viewBox="0 0 24 24" stroke="#7c3aed" stroke-width="1.6"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="3" width="7" height="7" rx="1"/>
                                                <rect x="14" y="3" width="7" height="7" rx="1"/>
                                                <rect x="3" y="14" width="7" height="7" rx="1"/>
                                                <rect x="14" y="14" width="7" height="7" rx="1"/>
                                            </svg>
                                        </div>
                                        <a href="services.php#technology-platforms" class="ps-item__title">Technology platforms</a>
                                    </div>
                                    <ul class="ps-item__list" style="display:grid;grid-template-columns:1fr 1fr;gap:.4rem .75rem">
                                        <li><a href="services.php#liposomes">Liposomes</a></li>
                                        <li><a href="services.php#microsponge">Microsponge systems</a></li>
                                        <li><a href="services.php#ionic-liquid">Ionic liquid / CAGE</a></li>
                                        <li><a href="services.php#sln">Solid lipid nanoparticles</a></li>
                                        <li><a href="services.php#microemulsions">Microemulsions</a></li>
                                        <li><a href="services.php#cyclodextrin">β-Cyclodextrin complexation</a></li>
                                        <li style="grid-column:1/-1">For additional information, <a href="mailto:info@bakunova.com">contact us</a></li>
                                    </ul>
                                </div>

                            </div><!-- /card body -->
                        </div><!-- /services card -->
                    </div>

                </div><!-- /main row -->

                <!-- Bottom tagline bar -->
                <div class="ps-tagline-bar"
                     data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                    <div class="ps-tagline-bar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                             stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="5"  r="2"/>
                            <circle cx="19" cy="9"  r="2"/>
                            <circle cx="19" cy="15" r="2"/>
                            <circle cx="12" cy="19" r="2"/>
                            <circle cx="5"  cy="15" r="2"/>
                            <circle cx="5"  cy="9"  r="2"/>
                            <circle cx="12" cy="12" r="2.5"/>
                            <line x1="12" y1="7"   x2="12" y2="10"/>
                            <line x1="17.5" y1="10" x2="14" y2="11"/>
                            <line x1="17.5" y1="14" x2="14" y2="13"/>
                            <line x1="12"   y1="17" x2="12" y2="14"/>
                            <line x1="6.5"  y1="14" x2="10" y2="13"/>
                            <line x1="6.5"  y1="10" x2="10" y2="11"/>
                        </svg>
                    </div>
                    <div class="ps-tagline-bar__text">
                        <strong>Bakunova combines premium natural actives with delivery innovation</strong>
                        <p>to help cosmetic brands create more effective, differentiated, and formulation-ready products.</p>
                    </div>
                </div>

            </div><!-- /container -->
        </section>
        <!--/ products & services -->

    </main>

<?php include 'components/footer.php'; ?>
