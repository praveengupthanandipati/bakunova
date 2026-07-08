<?php
$current_page     = 'company';
$page_title       = 'About Us';
$meta_description = 'Learn about Bakunova — a cosmetic division of Drug Discovery Labs, USA. We develop premium cosmetic actives and advanced delivery technologies for next-generation skincare brands.';
$meta_keywords    = 'about Bakunova, cosmetic ingredient company, Drug Discovery Labs, skincare innovation, delivery technologies, cosmetic actives, formulation science, company mission, skincare R&D';
include 'components/header.php';
?>

    <main>

        <!-- =============================================
             PAGE BANNER
             ============================================= -->
        <section class="page-banner">

            <svg class="page-banner__deco" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 380" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                <defs>
                    <linearGradient id="pb-g1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#088ac7" stop-opacity="0.15"/>
                        <stop offset="100%" stop-color="#088ac7" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <ellipse cx="1300" cy="80" rx="420" ry="300" fill="url(#pb-g1)" transform="rotate(-20 1300 80)"/>
                <ellipse cx="200" cy="320" rx="300" ry="200" fill="rgba(255,255,255,0.03)" transform="rotate(10 200 320)"/>
                <path d="M0 280 Q360 200 720 260 Q1080 320 1440 240 L1440 380 L0 380 Z" fill="rgba(255,255,255,0.03)"/>
                <circle cx="1100" cy="60" r="180" fill="rgba(8,138,199,0.07)"/>
                <circle cx="1200" cy="100" r="80" fill="rgba(91,200,240,0.08)"/>
                <circle cx="900"  cy="40"  r="3"  fill="rgba(255,255,255,0.3)"/>
                <circle cx="960"  cy="100" r="2"  fill="rgba(255,255,255,0.2)"/>
                <circle cx="1050" cy="55"  r="2.5" fill="rgba(255,255,255,0.25)"/>
                <circle cx="1150" cy="30"  r="2"  fill="rgba(91,200,240,0.5)"/>
                <circle cx="1250" cy="150" r="3"  fill="rgba(255,255,255,0.15)"/>
                <circle cx="300"  cy="100" r="2.5" fill="rgba(255,255,255,0.2)"/>
                <circle cx="180"  cy="200" r="2"  fill="rgba(255,255,255,0.15)"/>
            </svg>

            <div class="container-90 page-banner__inner">
                <div class="row">
                    <div class="col-lg-8">

                        <p class="page-banner__eyebrow"
                           data-aos="fade-up" data-aos-duration="700" data-aos-delay="50">
                            A cosmetic division of Drug Discovery Labs, USA
                        </p>

                        <h1 class="page-banner__title"
                            data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                            Pioneering the Future of<br>
                            <span>Cosmetic Science</span>
                        </h1>

                        <p class="page-banner__desc"
                           data-aos="fade-up" data-aos-duration="750" data-aos-delay="280">
                            We develop premium cosmetic actives and advanced delivery technologies — empowering skincare brands with formulation-ready solutions that are more stable, more effective, and truly differentiated.
                        </p>

                        <nav class="page-banner__breadcrumb"
                             data-aos="fade-up" data-aos-duration="600" data-aos-delay="380"
                             aria-label="breadcrumb">
                            <a href="index.php">Home</a>
                            <span class="page-banner__breadcrumb-sep">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                            <span>About Us</span>
                        </nav>

                    </div>
                </div>
            </div>
        </section>
        <!--/ page banner -->

        <!-- =============================================
             COMPANY OVERVIEW
             ============================================= -->
        <section class="abt-overview">
            <div class="container-90">
                <div class="row g-5 align-items-center">
                    <!-- Left: Text -->
                    <div class="col-lg-6">
                        <div data-aos="fade-up" data-aos-duration="700">
                            <span class="section-eyebrow">Who We Are</span>
                            <h2 class="section-heading">About Bakunova</h2>
                        </div>
                        <div class="abt-overview__text mt-4"
                             data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <p>Bakunova is a specialty cosmetic ingredient company and a proud division of Drug Discovery Labs, USA. We are focused on developing premium active ingredients and advanced delivery technologies for next-generation skincare products.</p>
                            <p>By combining ingredient expertise, formulation science, and delivery system innovation, we create formulation-ready solutions designed to enhance stability, performance, and product differentiation.</p>
                            <p>We partner with cosmetic brands, manufacturers, and formulators worldwide to accelerate innovation and transform promising concepts into market-ready, high-performance products.</p>
                        </div>

                        <div class="abt-stats"
                             data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="abt-stat">
                                <span class="abt-stat-num">10+</span>
                                <span class="abt-stat-label">Years of R&amp;D</span>
                            </div>
                            <div class="abt-stat">
                                <span class="abt-stat-num">50+</span>
                                <span class="abt-stat-label">Active Ingredients</span>
                            </div>
                            <div class="abt-stat">
                                <span class="abt-stat-num">6</span>
                                <span class="abt-stat-label">Delivery Technologies</span>
                            </div>
                            <div class="abt-stat">
                                <span class="abt-stat-num">30+</span>
                                <span class="abt-stat-label">Global Partners</span>
                            </div>
                        </div>

                    </div>

                    <!-- Right: Visual -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
                        <div class="abt-overview__visual">
                            <img src="img/hero01.jpg" alt="Bakunova Research" class="abt-overview__img-main">
                            <div class="abt-overview__badge">
                                <span class="abt-overview__badge-num">DDL</span>
                                <p class="abt-overview__badge-text">Drug Discovery Labs, USA</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!--/ company overview -->

        <!-- =============================================
             MISSION & VISION
             ============================================= -->
        <section class="abt-mv">
            <div class="container-90">

                <div class="text-center mb-5"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">Our Direction</span>
                    <h2 class="section-heading">Mission &amp; Vision</h2>
                </div>

                <div class="row g-4">

                    <div class="col-md-6"
                         data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                        <div class="abt-mv-card abt-mv-card--mission">
                            <div class="abt-mv-card__deco"></div>
                            <div class="abt-mv-card__deco2"></div>
                            <div class="abt-mv-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <circle cx="12" cy="12" r="6"/>
                                    <circle cx="12" cy="12" r="2"/>
                                </svg>
                            </div>
                            <span class="abt-mv-card__tag">Our Mission</span>
                            <h3 class="abt-mv-card__title">Empowering Innovation in Skincare</h3>
                            <p class="abt-mv-card__text">To develop and deliver premium cosmetic actives and cutting-edge delivery technologies that empower skincare brands to create products that are scientifically superior, market-differentiating, and truly effective — bridging the gap between ingredient science and consumer results.</p>
                        </div>
                    </div>

                    <div class="col-md-6"
                         data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="abt-mv-card abt-mv-card--vision">
                            <div class="abt-mv-card__deco"></div>
                            <div class="abt-mv-card__deco2"></div>
                            <div class="abt-mv-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </div>
                            <span class="abt-mv-card__tag">Our Vision</span>
                            <h3 class="abt-mv-card__title">The Global Standard in Cosmetic Delivery</h3>
                            <p class="abt-mv-card__text">To be the world's leading specialty cosmetic ingredient and delivery technology company — recognized for scientific excellence, trusted by formulators globally, and committed to sustainable innovation that elevates the entire skincare industry.</p>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!--/ mission & vision -->

        <!-- =============================================
             OUR VALUE CHAIN / PIPELINE
             ============================================= -->
        <section class="abt-pipeline-section">

            <svg class="about-bak__deco" viewBox="0 0 700 640" preserveAspectRatio="xMaxYMin slice"
                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <defs>
                    <linearGradient id="wg1b" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#088ac7" stop-opacity="0.10"/>
                        <stop offset="100%" stop-color="#088ac7" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="wg2b" x1="100%" y1="0%" x2="10%" y2="100%">
                        <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.08"/>
                        <stop offset="100%" stop-color="#7c3aed" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <ellipse cx="580" cy="180" rx="280" ry="220" fill="url(#wg1b)" transform="rotate(-15 580 180)"/>
                <ellipse cx="640" cy="400" rx="200" ry="160" fill="url(#wg2b)" transform="rotate(8 640 400)"/>
                <path d="M400 0 Q500 100 460 220 Q420 340 600 400" stroke="#088ac7" stroke-width="1.5" fill="none" opacity="0.12"/>
                <circle cx="480" cy="90"  r="3"   fill="#088ac7" opacity="0.22"/>
                <circle cx="600" cy="180" r="2.5" fill="#7c3aed" opacity="0.20"/>
                <circle cx="550" cy="310" r="2"   fill="#088ac7" opacity="0.18"/>
            </svg>

            <div class="container-90">

                <div class="text-center mb-5"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">How We Work</span>
                    <h2 class="section-heading">Our Value Chain</h2>
                    <p class="mx-auto mt-3" style="max-width:560px;color:#64748b;font-size:.97rem;line-height:1.75;">
                        From sourcing premium raw materials to delivering formulation-ready solutions, our integrated pipeline ensures every product we offer is science-backed and performance-proven.
                    </p>
                </div>

                <div class="abk-pipeline mb-5 pb-lg-3">

                    <div class="abk-step abk-step--1"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="0">
                        <span class="abk-step-num">01</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/about-step-01.png" alt="Premium Cosmetic Active Ingredients">
                        </div>
                        <h4 class="abk-step-title">Premium Cosmetic</h4>
                        <p class="abk-step-sub">Active Ingredients</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="100">&rsaquo;</div>

                    <div class="abk-step abk-step--2"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="150">
                        <span class="abk-step-num">02</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/about-step-02.png" alt="Encapsulated Ingredients">
                        </div>
                        <h4 class="abk-step-title">Encapsulated Ingredients</h4>
                        <p class="abk-step-sub">Advanced Protection</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="250">&rsaquo;</div>

                    <div class="abk-step abk-step--3"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                        <span class="abk-step-num">03</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/about-step-03.png" alt="Intelligent Delivery">
                        </div>
                        <h4 class="abk-step-title">Intelligent Delivery</h4>
                        <p class="abk-step-sub">Targeted &amp; Controlled Release</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="400">&rsaquo;</div>

                    <div class="abk-step abk-step--4"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="450">
                        <span class="abk-step-num">04</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/about-step-04.png" alt="Formulation-Ready Solutions">
                        </div>
                        <h4 class="abk-step-title">Formulation-Ready Solutions</h4>
                        <p class="abk-step-sub">Stable, Efficacious &amp; Scalable</p>
                    </div>

                    <div class="abk-arrow"
                         data-aos="fade" data-aos-duration="400" data-aos-delay="550">&rsaquo;</div>

                    <div class="abk-step abk-step--5"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="600">
                        <span class="abk-step-num">05</span>
                        <div class="abk-step-img-wrap">
                            <img src="img/about-step-05.png" alt="Formulation Excellence">
                        </div>
                        <h4 class="abk-step-title">Formulation Excellence</h4>
                        <p class="abk-step-sub">Innovative. Effective. Sustainable.</p>
                    </div>

                </div><!-- /pipeline -->

            </div><!-- /container -->
        </section>
        <!--/ pipeline -->

        <!-- =============================================
             CORE VALUES
             ============================================= -->
        <section class="abt-values">
            <div class="container-90">

                <div class="text-center mb-5"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">What We Stand For</span>
                    <h2 class="section-heading">Our Core Values</h2>
                </div>

                <div class="row g-4">

                    <div class="col-sm-6 col-lg-3"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="0">
                        <div class="abt-value-card abt-value-card--1">
                            <div class="abt-value-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <h4 class="abt-value-card__title">Scientific Innovation</h4>
                            <p class="abt-value-card__desc">We continuously push the boundaries of cosmetic science, investing in R&amp;D to develop next-generation ingredients and delivery platforms that set new performance benchmarks.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                        <div class="abt-value-card abt-value-card--2">
                            <div class="abt-value-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h4 class="abt-value-card__title">Integrity &amp; Quality</h4>
                            <p class="abt-value-card__desc">Every ingredient and technology we offer undergoes rigorous testing and quality assurance. We stand behind the safety, purity, and efficacy of everything we produce.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                        <div class="abt-value-card abt-value-card--3">
                            <div class="abt-value-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <h4 class="abt-value-card__title">Collaborative Partnerships</h4>
                            <p class="abt-value-card__desc">We build lasting relationships with brands, manufacturers, and formulators — working as true partners to understand their challenges and co-create solutions that succeed in the market.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                        <div class="abt-value-card abt-value-card--4">
                            <div class="abt-value-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                                    <path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                                </svg>
                            </div>
                            <h4 class="abt-value-card__title">Sustainable Responsibility</h4>
                            <p class="abt-value-card__desc">We are committed to responsible sourcing, eco-friendly formulations, and sustainable practices — ensuring that our innovation contributes positively to both people and the planet.</p>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!--/ core values -->

        <!-- =============================================
             OUR COMMITMENT
             ============================================= -->
        <section class="abt-commitment">
            <div class="container-90">

                <div class="text-center mb-5"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">Our Promise</span>
                    <h2 class="section-heading">Our Commitment to Excellence</h2>
                </div>

                <div class="row g-4">

                    <div class="col-12 col-md-4"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="0">
                        <div class="abt-commit-card abt-commit-card--1">
                            <div class="abt-commit-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h5 class="abt-commit-card__title">Uncompromising Quality</h5>
                                <p class="abt-commit-card__desc">Every ingredient and solution is produced under strict quality control frameworks — ensuring consistency, purity, and regulatory compliance across all markets. Our standards are not negotiable; they are our foundation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="150">
                        <div class="abt-commit-card abt-commit-card--2">
                            <div class="abt-commit-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <div>
                                <h5 class="abt-commit-card__title">Continuous R&amp;D</h5>
                                <p class="abt-commit-card__desc">Innovation is embedded in our DNA. We continuously explore novel delivery mechanisms, novel active molecules, and next-generation encapsulation techniques — keeping our partners at the forefront of skincare technology.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4"
                         data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                        <div class="abt-commit-card abt-commit-card--3">
                            <div class="abt-commit-card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 17a5.07 5.07 0 01.8-2.7A5.07 5.07 0 0112 12a5.07 5.07 0 014.2 2.3A5.07 5.07 0 0117 17H7z"/>
                                    <path d="M12 12V2M7 7l5-5 5 5"/>
                                </svg>
                            </div>
                            <div>
                                <h5 class="abt-commit-card__title">Sustainable Practices</h5>
                                <p class="abt-commit-card__desc">We are actively transitioning toward greener chemistry, responsible sourcing, and biodegradable formulation platforms — because the skincare industry's future depends on protecting both skin health and the environment.</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!--/ commitment -->

        <!-- =============================================
             LEADERSHIP
             ============================================= -->
        <section class="ld-section" id="leadership">

            <!-- Background: molecule nodes -->
            <svg class="ld-section__bg" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <g opacity="0.18" stroke="#7c3aed" stroke-width="1.2" fill="none">
                    <circle cx="60"  cy="120" r="7" fill="rgba(124,58,237,0.15)"/>
                    <circle cx="120" cy="80"  r="5" fill="rgba(124,58,237,0.12)"/>
                    <circle cx="160" cy="140" r="6" fill="rgba(124,58,237,0.12)"/>
                    <circle cx="90"  cy="180" r="5" fill="rgba(124,58,237,0.10)"/>
                    <circle cx="40"  cy="60"  r="4" fill="rgba(124,58,237,0.10)"/>
                    <line x1="60"  y1="120" x2="120" y2="80"/>
                    <line x1="120" y1="80"  x2="160" y2="140"/>
                    <line x1="60"  y1="120" x2="90"  y2="180"/>
                    <line x1="40"  y1="60"  x2="120" y2="80"/>
                    <line x1="40"  y1="60"  x2="60"  y2="120"/>
                </g>
            </svg>

            <svg style="position:absolute;top:0;right:0;width:220px;height:320px;pointer-events:none;opacity:.12" viewBox="0 0 220 320" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M60 10 Q110 50 60 90 Q10 130 60 170 Q110 210 60 250 Q10 290 60 310" stroke="#7c3aed" stroke-width="2" fill="none"/>
                <path d="M160 10 Q110 50 160 90 Q210 130 160 170 Q110 210 160 250 Q210 290 160 310" stroke="#a855f7" stroke-width="2" fill="none"/>
                <line x1="60" y1="50"  x2="160" y2="50"  stroke="#7c3aed" stroke-width="1.2" opacity="0.6"/>
                <line x1="60" y1="90"  x2="160" y2="90"  stroke="#7c3aed" stroke-width="1.2" opacity="0.5"/>
                <line x1="60" y1="130" x2="160" y2="130" stroke="#a855f7" stroke-width="1.2" opacity="0.6"/>
                <line x1="60" y1="170" x2="160" y2="170" stroke="#a855f7" stroke-width="1.2" opacity="0.5"/>
                <line x1="60" y1="210" x2="160" y2="210" stroke="#7c3aed" stroke-width="1.2" opacity="0.6"/>
                <line x1="60" y1="250" x2="160" y2="250" stroke="#7c3aed" stroke-width="1.2" opacity="0.5"/>
            </svg>

            <div class="ld-section__wave">
                <svg viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height:80px;width:100%" aria-hidden="true">
                    <path d="M0 60 Q360 0 720 60 Q1080 120 1440 60 L1440 100 L0 100 Z" fill="rgba(124,58,237,0.06)"/>
                    <path d="M0 75 Q360 30 720 75 Q1080 120 1440 75 L1440 100 L0 100 Z" fill="rgba(124,58,237,0.04)"/>
                </svg>
            </div>

            <div class="container-90">

                <div class="text-center mb-5"
                     data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">Meet the Team</span>
                    <h2 class="section-heading">Our Leadership</h2>
                    <p class="mx-auto mt-3" style="max-width:560px;color:#64748b;font-size:.97rem;line-height:1.75;">
                        Guided by decades of expertise in drug discovery, medicinal chemistry, and cosmetic science — steering Bakunova toward global innovation leadership.
                    </p>
                </div>

                <div class="row g-5 align-items-center">

                    <!-- Left: Icons + Text -->
                    <div class="col-lg-7">
                        <div class="ld-content">
                            <div class="row align-items-start g-0">

                                <!-- Icon steps column -->
                                <div class="col-auto me-4"
                                     data-aos="fade-right" data-aos-duration="700" data-aos-delay="100">
                                    <div class="ld-steps-col">
                                        <div class="ld-step">
                                            <div class="ld-step-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                                                    <circle cx="12" cy="7" r="4"/>
                                                    <path d="M16 3.13a4 4 0 010 7.75"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ld-step-dot-line"></div>
                                        <div class="ld-step">
                                            <div class="ld-step-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ld-step-dot-line"></div>
                                        <div class="ld-step">
                                            <div class="ld-step-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                                                    <circle cx="9" cy="7" r="4"/>
                                                    <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Text column -->
                                <div class="col">
                                    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="80">
                                        <h2 class="ld-title">Leadership</h2>
                                        <span class="ld-title-bar"></span>
                                    </div>
                                    <div class="ld-bio"
                                         data-aos="fade-up" data-aos-duration="800" data-aos-delay="180">
                                        <p>An exceptional scientific leader with more than 20 years of experience in Synthetic Organic, Medicinal and Bio-analytical chemistry (Small Molecule Drug Discovery and Development) and advancing molecules into clinical studies across a variety of therapeutic areas in human and animal health.</p>
                                        <p>Has ability to conduct competitive information research and ability to interface with other departments of company to achieve project goals. Have provided guidance and managed group of scientists with competent problem-solving abilities. Self-motivated, innovative and excellent team player.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Right: Photo -->
                    <div class="col-lg-5"
                         data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                        <div class="ld-photo-col">
                            <div class="ld-photo-frame">
                                <img src="img/leader.jpg" alt="Bakunova Leadership">
                                <div class="ld-photo-frame__ring"></div>
                                <div class="ld-photo-frame__ring2"></div>
                                <div class="ld-exp-badge"
                                     data-aos="zoom-in" data-aos-duration="600" data-aos-delay="500">
                                    <span class="ld-exp-badge__num">20+</span>
                                    <p class="ld-exp-badge__text">Years<br>Experience</p>
                                </div>
                                <div class="ld-name-card"
                                     data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                                    <p class="ld-name-card__name">Scientific Director</p>
                                    <p class="ld-name-card__role">Bakunova / Drug Discovery Labs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!--/ leadership -->

        <!-- =============================================
             EXPERTISE HIGHLIGHTS
             ============================================= -->
        <section class="ld-expertise">
            <div class="container-90">

                <div data-aos="fade-up" data-aos-duration="700">
                    <span class="section-eyebrow">Areas of Expertise</span>
                    <h2 class="section-heading" style="font-size:1.8rem">Core Competencies</h2>
                </div>

                <div class="ld-tag-row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">

                    <span class="ld-tag ld-tag--purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        Synthetic Organic Chemistry
                    </span>

                    <span class="ld-tag ld-tag--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Medicinal Chemistry
                    </span>

                    <span class="ld-tag ld-tag--green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>
                        </svg>
                        Bio-analytical Chemistry
                    </span>

                    <span class="ld-tag ld-tag--purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>
                        </svg>
                        Small Molecule Drug Discovery
                    </span>

                    <span class="ld-tag ld-tag--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        Drug Development &amp; Clinical Studies
                    </span>

                    <span class="ld-tag ld-tag--pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Scientific Team Leadership
                    </span>

                    <span class="ld-tag ld-tag--green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Competitive Intelligence Research
                    </span>

                    <span class="ld-tag ld-tag--purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
                        </svg>
                        Cosmetic Delivery Technologies
                    </span>

                    <span class="ld-tag ld-tag--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Human &amp; Animal Health Therapeutics
                    </span>

                </div>

            </div>
        </section>
        <!--/ expertise -->

        <!-- =============================================
             PARTNER CTA
             ============================================= -->
        <section class="abt-cta">
            <div class="container-90">

                <p class="abt-cta__eyebrow"
                   data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                    Let's Work Together
                </p>

                <h2 class="abt-cta__title"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                    Ready to Partner with<br><span>Bakunova?</span>
                </h2>

                <p class="abt-cta__desc"
                   data-aos="fade-up" data-aos-duration="700" data-aos-delay="260">
                    Whether you're looking to elevate your formulations, source premium actives, or develop a custom delivery solution — our team is here to collaborate with you.
                </p>

                <div class="abt-cta__btns"
                     data-aos="fade-up" data-aos-duration="700" data-aos-delay="360">
                    <a href="contact.php" class="btn-cta-white">
                        Get in Touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                             stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                    <a href="index.php" class="btn-cta-outline-white">
                        Explore Our Technologies
                    </a>
                </div>

            </div><!-- /container -->
        </section>
        <!--/ CTA -->

    </main>

<?php include 'components/footer.php'; ?>
