<?php
$current_page     = 'company';
$page_title       = 'Leadership';
$meta_description = 'Meet the leadership team behind Bakunova — an exceptional scientific leader with 20+ years of experience in Synthetic Organic, Medicinal and Bio-analytical chemistry driving innovation in cosmetic science.';
$meta_keywords    = 'Bakunova leadership, cosmetic scientist, Drug Discovery Labs leader, synthetic organic chemistry, medicinal chemistry, bio-analytical chemistry, skincare R&D leadership, scientific director';
include 'components/header.php';
?>

    <main>

        <!-- =============================================
             PAGE BANNER
             ============================================= -->
        <section class="page-banner">

            <svg class="page-banner__deco" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 380" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                <defs>
                    <linearGradient id="pb-ld1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#7c3aed" stop-opacity="0.18"/>
                        <stop offset="100%" stop-color="#7c3aed" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <ellipse cx="1300" cy="80" rx="420" ry="300" fill="url(#pb-ld1)" transform="rotate(-20 1300 80)"/>
                <ellipse cx="200" cy="320" rx="300" ry="200" fill="rgba(255,255,255,0.03)"/>
                <circle cx="1100" cy="60" r="180" fill="rgba(124,58,237,0.07)"/>
                <circle cx="900"  cy="40"  r="3"  fill="rgba(255,255,255,0.3)"/>
                <circle cx="1050" cy="55"  r="2.5" fill="rgba(255,255,255,0.25)"/>
                <circle cx="1150" cy="30"  r="2"  fill="rgba(167,139,250,0.6)"/>
                <circle cx="1250" cy="150" r="3"  fill="rgba(255,255,255,0.15)"/>
            </svg>

            <div class="container-90 page-banner__inner">
                <div class="row">
                    <div class="col-lg-7">

                        <p class="page-banner__eyebrow"
                           data-aos="fade-up" data-aos-duration="700" data-aos-delay="50">
                            Company — Leadership
                        </p>

                        <h1 class="page-banner__title"
                            data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                            Guided by Science,<br>
                            <span>Driven by Vision</span>
                        </h1>

                        <p class="page-banner__desc"
                           data-aos="fade-up" data-aos-duration="750" data-aos-delay="280">
                            Our leadership brings decades of expertise in drug discovery, medicinal chemistry, and cosmetic science — steering Bakunova toward global innovation leadership.
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
                            <a href="about.php">Company</a>
                            <span class="page-banner__breadcrumb-sep">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </span>
                            <span>Leadership</span>
                        </nav>

                    </div>
                </div>
            </div>
        </section>
        <!--/ page banner -->

        <!-- =============================================
             LEADERSHIP MAIN SECTION
             ============================================= -->
        <section class="ld-section">

            <!-- Background: molecule nodes (top-left) -->
            <svg class="ld-section__bg" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <!-- Molecule top-left -->
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
                <!-- DNA helix top-right -->
                <g opacity="0.14" stroke="#a855f7" stroke-width="1.4" fill="none" transform="translate(calc(100% - 100px), 20)">
                </g>
            </svg>

            <!-- Background DNA top-right using absolute positioning via inline SVG -->
            <svg style="position:absolute;top:0;right:0;width:220px;height:320px;pointer-events:none;opacity:.12" viewBox="0 0 220 320" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <!-- DNA double helix strands -->
                <path d="M60 10 Q110 50 60 90 Q10 130 60 170 Q110 210 60 250 Q10 290 60 310" stroke="#7c3aed" stroke-width="2" fill="none"/>
                <path d="M160 10 Q110 50 160 90 Q210 130 160 170 Q110 210 160 250 Q210 290 160 310" stroke="#a855f7" stroke-width="2" fill="none"/>
                <!-- Rungs -->
                <line x1="60" y1="50"  x2="160" y2="50"  stroke="#7c3aed" stroke-width="1.2" opacity="0.6"/>
                <line x1="60" y1="90"  x2="160" y2="90"  stroke="#7c3aed" stroke-width="1.2" opacity="0.5"/>
                <line x1="60" y1="130" x2="160" y2="130" stroke="#a855f7" stroke-width="1.2" opacity="0.6"/>
                <line x1="60" y1="170" x2="160" y2="170" stroke="#a855f7" stroke-width="1.2" opacity="0.5"/>
                <line x1="60" y1="210" x2="160" y2="210" stroke="#7c3aed" stroke-width="1.2" opacity="0.6"/>
                <line x1="60" y1="250" x2="160" y2="250" stroke="#7c3aed" stroke-width="1.2" opacity="0.5"/>
            </svg>

            <!-- Wave bottom -->
            <div class="ld-section__wave">
                <svg viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="height:80px;width:100%" aria-hidden="true">
                    <path d="M0 60 Q360 0 720 60 Q1080 120 1440 60 L1440 100 L0 100 Z" fill="rgba(124,58,237,0.06)"/>
                    <path d="M0 75 Q360 30 720 75 Q1080 120 1440 75 L1440 100 L0 100 Z" fill="rgba(124,58,237,0.04)"/>
                </svg>
            </div>

            <div class="container-90">
                <div class="row g-5 align-items-center">

                    <!-- ── Left: Icons + Text ── -->
                    <div class="col-lg-7">
                        <div class="ld-content">

                            <div class="row align-items-start g-0">

                                <!-- Icon steps column -->
                                <div class="col-auto me-4"
                                     data-aos="fade-right" data-aos-duration="700" data-aos-delay="100">
                                    <div class="ld-steps-col">

                                        <div class="ld-step">
                                            <div class="ld-step-icon">
                                                <!-- Person + star -->
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
                                                <!-- Lab / science -->
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
                                                <!-- Team -->
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

                                </div><!-- /text col -->
                            </div><!-- /inner row -->

                        </div><!-- /ld-content -->
                    </div>

                    <!-- ── Right: Photo ── -->
                    <div class="col-lg-5"
                         data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                        <div class="ld-photo-col">
                            <div class="ld-photo-frame">

                                <img src="img/leader.jpg" alt="Bakunova Leadership">

                                <!-- Decorative rings -->
                                <div class="ld-photo-frame__ring"></div>
                                <div class="ld-photo-frame__ring2"></div>

                                <!-- Experience badge (top-right) -->
                                <div class="ld-exp-badge"
                                     data-aos="zoom-in" data-aos-duration="600" data-aos-delay="500">
                                    <span class="ld-exp-badge__num">20+</span>
                                    <p class="ld-exp-badge__text">Years<br>Experience</p>
                                </div>

                                <!-- Name card (bottom-left) -->
                                <div class="ld-name-card"
                                     data-aos="zoom-in" data-aos-duration="600" data-aos-delay="600">
                                    <p class="ld-name-card__name">Scientific Director</p>
                                    <p class="ld-name-card__role">Bakunova / Drug Discovery Labs</p>
                                </div>

                            </div><!-- /photo-frame -->
                        </div><!-- /photo-col -->
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
        </section>
        <!--/ leadership main -->

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
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                        Synthetic Organic Chemistry
                    </span>

                    <span class="ld-tag ld-tag--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Medicinal Chemistry
                    </span>

                    <span class="ld-tag ld-tag--green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <circle cx="12" cy="12" r="6"/>
                            <circle cx="12" cy="12" r="2"/>
                        </svg>
                        Bio-analytical Chemistry
                    </span>

                    <span class="ld-tag ld-tag--purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>
                        </svg>
                        Small Molecule Drug Discovery
                    </span>

                    <span class="ld-tag ld-tag--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        Drug Development &amp; Clinical Studies
                    </span>

                    <span class="ld-tag ld-tag--pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Scientific Team Leadership
                    </span>

                    <span class="ld-tag ld-tag--green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Competitive Intelligence Research
                    </span>

                    <span class="ld-tag ld-tag--purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                        </svg>
                        Cosmetic Delivery Technologies
                    </span>

                    <span class="ld-tag ld-tag--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Human &amp; Animal Health Therapeutics
                    </span>

                </div><!-- /tag row -->

            </div><!-- /container -->
        </section>
        <!--/ expertise -->

        <!-- =============================================
             PARTNER CTA
             ============================================= -->
        <section class="abt-cta">
            <div class="container-90">

                <p class="abt-cta__eyebrow"
                   data-aos="fade-up" data-aos-duration="600" data-aos-delay="50">
                    Work With Our Team
                </p>

                <h2 class="abt-cta__title"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                    Science-Led Innovation<br><span>Starts Here</span>
                </h2>

                <p class="abt-cta__desc"
                   data-aos="fade-up" data-aos-duration="700" data-aos-delay="260">
                    Our leadership team brings world-class scientific expertise to every collaboration. Get in touch to explore how Bakunova can accelerate your next skincare innovation.
                </p>

                <div class="abt-cta__btns"
                     data-aos="fade-up" data-aos-duration="700" data-aos-delay="360">
                    <a href="contact.php" class="btn-cta-white">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                             stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                    <a href="about.php" class="btn-cta-outline-white">
                        About Bakunova
                    </a>
                </div>

            </div><!-- /container -->
        </section>
        <!--/ CTA -->

    </main>

<?php include 'components/footer.php'; ?>
