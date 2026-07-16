<?php
$current_page     = 'faq';
$page_title       = 'FAQs';
$meta_description = 'Frequently asked questions about Bakunova — Bakuchiol, Rosmarinic Acid, HPR, delivery technologies, development pipeline, samples, and partnerships.';
$meta_keywords    = 'Bakunova FAQ, Bakuchiol questions, Rosmarinic Acid, HPR, liposomal, microemulsion, SLN, CAGE, cosmetic actives, skincare ingredients';
$og_image         = 'img/bakunova-logo.png';
include 'components/header.php';
?>

<main class="fq-page">

    <!-- =============================================
         HERO
         ============================================= -->
    <section class="fq-hero">
        <div class="fq-hero__bg" aria-hidden="true"></div>
        <div class="container-90">

            <h1 class="fq-hero__title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="80">
                Frequently Asked <span>Questions</span>
            </h1>
            <p class="fq-hero__subtitle" data-aos="fade-up" data-aos-duration="700" data-aos-delay="160">
                Everything you need to know about our ingredients, delivery technologies, pipeline, and partnerships.
            </p>

            <!-- Category count badges -->
            <div class="fq-hero__stats" data-aos="fade-up" data-aos-duration="700" data-aos-delay="240">
                <span class="fq-stat"><strong>58</strong> Questions</span>
                <span class="fq-stat-dot">·</span>
                <span class="fq-stat"><strong>7</strong> Categories</span>
                <span class="fq-stat-dot">·</span>
                <span class="fq-stat">Updated 2025</span>
            </div>
        </div>
    </section>

    <!-- =============================================
         CATEGORY FILTER TABS
         ============================================= -->
    <div class="fq-tabs-wrap" id="fqTabs">
        <div class="container-90">
            <div class="fq-tabs" role="tablist">
                <button class="fq-tab active" data-target="cat-company"   role="tab">About Bakunova</button>
                <button class="fq-tab"         data-target="cat-bakuchiol" role="tab">Bakuchiol</button>
                <button class="fq-tab"         data-target="cat-ra"        role="tab">Rosmarinic Acid</button>
                <button class="fq-tab"         data-target="cat-hpr"       role="tab">HPR</button>
                <button class="fq-tab"         data-target="cat-delivery"  role="tab">Delivery Technologies</button>
                <button class="fq-tab"         data-target="cat-pipeline"  role="tab">Pipeline</button>
                <button class="fq-tab"         data-target="cat-orders"    role="tab">Samples &amp; Orders</button>
            </div>
        </div>
    </div>

    <!-- =============================================
         FAQ CONTENT
         ============================================= -->
    <section class="fq-content">
        <div class="container-90">

            <!-- ─────────────────────────────────────────
                 CATEGORY 1: ABOUT BAKUNOVA
                 ───────────────────────────────────────── -->
            <div class="fq-category" id="cat-company">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">About Bakunova</h2>
                        <p class="fq-category__sub">Company background, mission, and capabilities</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionCompany">

                    <?php
                    $company_faqs = [
                        ["What is Bakunova?", "Bakunova is a premium cosmetic active ingredient brand and a division of SRDK Biochem, India. We specialise in manufacturing high-performance plant-derived and synthetic cosmetic actives, as well as advanced encapsulation and delivery technology solutions for global skincare brands."],
                        ["What is the relationship between Bakunova and SRDK Biochem?", "Bakunova operates as the cosmetics division of SRDK Biochem, India. SRDK Biochem provides the manufacturing infrastructure, R&D capabilities, and GMP-compliant production environment that underpin all Bakunova products."],
                        ["Where is Bakunova located?", "Our manufacturing and R&D headquarters is located at F26, FLO-TSIIC Industrial Park, Medical Devices Park, Ameenpur, Hyderabad, Telangana – 502319, India. This state-of-the-art facility is situated within a dedicated medical and pharmaceutical industrial zone."],
                        ["Who is Drug Discovery Labs and what role do they play?", "Drug Discovery Labs (DDL) is Bakunova's exclusive marketing partner based in Cary, NC, USA. They represent and distribute Bakunova's portfolio of cosmetic actives and delivery technology solutions across North American markets. You can reach DDL at bpandi@drugdiscoverylabs.com or +1 (919) 389-9258."],
                        ["What quality standards does Bakunova follow?", "All Bakunova products are manufactured under GMP (Good Manufacturing Practice) quality standards. We maintain strict in-process quality controls, batch-to-batch consistency protocols, and provide full documentation including Certificates of Analysis (CoA), Technical Data Sheets (TDS), and Safety Data Sheets (SDS/MSDS)."],
                        ["What types of companies does Bakunova serve?", "Bakunova serves a broad range of clients including skincare brands, cosmetic product manufacturers, contract formulators, private label companies, and pharmaceutical companies looking for cosmetic-grade actives. We work with companies of all sizes — from emerging indie brands to global multinational corporations."],
                        ["What makes Bakunova different from other cosmetic ingredient suppliers?", "Bakunova's differentiation lies in three pillars: (1) Premium-grade active ingredients manufactured under GMP standards, (2) Advanced encapsulation and delivery technology platforms (Liposomal, Microemulsion, Beta-CD Complex, SLN, and Ionic Liquid) that enhance active performance, and (3) A vertically integrated approach combining ingredient science with formulation-ready solutions — all backed by our R&D pipeline."],
                        ["Is Bakunova a manufacturer or a distributor?", "Bakunova is primarily a manufacturer of cosmetic actives and formulation solutions. We own our production capabilities, develop our encapsulation technologies in-house, and manufacture all products at our Hyderabad facility. Drug Discovery Labs serves as our marketing and distribution partner for the North American market."],
                        ["Does Bakunova offer custom formulation development?", "Yes. Bakunova collaborates with brand partners to develop customised delivery technology solutions tailored to specific formulation requirements, active concentrations, stability targets, and skin performance goals. Contact our technical team to discuss your project requirements."],
                        ["What is Bakunova's integrated cosmetic innovation platform?", "Our integrated platform combines three capabilities: (1) Premium cosmetic ingredient science, (2) Advanced encapsulation and stabilisation technologies, and (3) Intelligent delivery platforms that create formulation-ready skincare solutions. This allows customers to access both raw actives and performance-enhanced pre-formulated systems from a single source."],
                    ];
                    foreach ($company_faqs as $i => $faq): $id = "cc" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn <?= $i > 0 ? 'collapsed' : '' ?>"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>"
                                    aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#accordionCompany">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ─────────────────────────────────────────
                 CATEGORY 2: BAKUCHIOL
                 ───────────────────────────────────────── -->
            <div class="fq-category fq-category--hidden" id="cat-bakuchiol">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">Bakuchiol</h2>
                        <p class="fq-category__sub">The premier natural retinol alternative — CAS 10309-37-2</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionBakuchiol">

                    <?php
                    $bakuchiol_faqs = [
                        ["What is Bakuchiol?", "Bakuchiol is a naturally occurring meroterpene phenol extracted from the seeds of <em>Psoralea corylifolia</em> (Babchi plant). It is widely recognised as the premier natural retinol alternative in cosmetics — delivering clinically comparable anti-ageing efficacy without the typical irritation associated with retinoids."],
                        ["What is the INCI name and CAS number for Bakuchiol?", "The INCI name is <strong>Bakuchiol</strong>. The CAS registry number is <strong>10309-37-2</strong>. It is a C18 terpenoid phenol, chemically known as (1R,2E,6E,10E)-1-ethenyl-1,4,4-trimethyl-2,6,10-dodecatrien-12-ol."],
                        ["How does Bakuchiol work as a retinol alternative?", "Bakuchiol activates the same retinoid receptors (RAR and RXR) as retinol and retinoic acid, stimulating collagen synthesis, accelerating cell turnover, and regulating gene expression associated with skin ageing — all through a distinct molecular structure that bypasses the irritation pathways triggered by classical retinoids."],
                        ["What are the primary skin benefits of Bakuchiol?", "Bakuchiol provides multiple scientifically supported skin benefits: (1) Collagen and elastin stimulation for reduced fine lines and wrinkles, (2) Accelerated skin cell renewal, (3) Anti-inflammatory activity that calms acne-prone skin, (4) Antioxidant protection against oxidative stress, (5) Improved skin tone and radiance, and (6) Barrier strengthening and improved skin texture."],
                        ["Is Bakuchiol suitable for sensitive skin?", "Yes. This is one of Bakuchiol's major advantages over retinol. Bakuchiol does not cause the redness, peeling, dryness, or photosensitivity commonly associated with retinol use. Multiple clinical studies have demonstrated its tolerability in sensitive skin types, including during pregnancy (unlike retinol, which is contraindicated in pregnancy — however, always consult a physician)."],
                        ["How does Bakuchiol compare to retinol in clinical efficacy?", "Published clinical studies have demonstrated that Bakuchiol at 0.5% performs comparably to 0.5% retinol for reducing fine lines, wrinkles, and hyperpigmentation — with significantly lower rates of facial skin irritation, stinging, and scaling. Bakuchiol also offers the advantage of photostability, making it suitable for daytime use."],
                        ["Can Bakuchiol be used in daytime formulations?", "Yes. Unlike retinol, Bakuchiol is photostable and does not degrade under UV exposure or sensitise the skin to sunlight. This makes it suitable for both morning and evening skincare formulations, significantly broadening its application scope versus retinol."],
                        ["Is Bakuchiol vegan and naturally derived?", "Yes. Bakuchiol is plant-derived from Psoralea corylifolia seeds and is considered vegan. It is biodegradable and is increasingly favoured by brands seeking clean-label, plant-based retinol alternatives for their skincare ranges."],
                        ["What concentration of Bakuchiol is typically used in skincare formulations?", "Bakuchiol is typically used at concentrations of 0.5% to 2.0% in finished formulations. The efficacy-proven benchmark in clinical literature is 0.5%, though higher concentrations (up to 2%) may be used in targeted treatments such as serums, eye creams, and night creams."],
                        ["What are the 5 formulation-ready Bakuchiol solutions offered by Bakunova?", "Bakunova offers Bakuchiol in five advanced delivery formats: (1) <strong>Liposomal Bakuchiol</strong> — for controlled release and deep dermal penetration; (2) <strong>Bakuchiol Microemulsion</strong> — for transparent, elegant cosmetic aesthetics; (3) <strong>Bakuchiol Beta-CD Complex</strong> — for improved aqueous solubility; (4) <strong>Bakuchiol Solid Lipid Nanoparticles (SLN)</strong> — for sustained release and oxidative stability; (5) <strong>Bakuchiol Ionic Liquid (CAGE)</strong> — for maximum transdermal penetration."],
                        ["How does Bakuchiol address inflammatory skin conditions such as acne?", "Bakuchiol modulates inflammatory pathways including downregulation of pro-inflammatory cytokines and inhibition of sebaceous gland hyperactivity. Clinical studies have demonstrated a reduction in acne lesions comparable to retinol, making Bakuchiol a well-tolerated active for acne-prone and combination skin types."],
                    ];
                    foreach ($bakuchiol_faqs as $i => $faq): $id = "cb" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>" aria-expanded="false">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionBakuchiol">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ─────────────────────────────────────────
                 CATEGORY 3: ROSMARINIC ACID
                 ───────────────────────────────────────── -->
            <div class="fq-category fq-category--hidden" id="cat-ra">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--teal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">Rosmarinic Acid</h2>
                        <p class="fq-category__sub">Potent polyphenol antioxidant — CAS 20283-92-5</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionRA">

                    <?php
                    $ra_faqs = [
                        ["What is Rosmarinic Acid?", "Rosmarinic Acid is a naturally occurring polyphenol ester of caffeic acid and 3,4-dihydroxyphenyllactic acid. It is found at high concentrations in rosemary (<em>Rosmarinus officinalis</em>), sage, basil, and other Lamiaceae family plants. In cosmetics, it is prized for its exceptional antioxidant, anti-inflammatory, and skin-brightening properties."],
                        ["What is the INCI name and CAS number for Rosmarinic Acid?", "The INCI name is <strong>Rosmarinic Acid</strong>. The CAS registry number is <strong>20283-92-5</strong>. Its molecular formula is C₁₈H₁₆O₈ with a molecular weight of 360.31 g/mol. It is a phenolic acid with a characteristic deep yellow-brown colour."],
                        ["What are the primary skin benefits of Rosmarinic Acid?", "Rosmarinic Acid offers four key biological activities in skin care: (1) <strong>Antioxidant &amp; Oxidative Stress Protection</strong> — neutralising reactive oxygen species and free radicals; (2) <strong>Inflammatory Balance &amp; Skin Comfort</strong> — calming stressed and reactive skin; (3) <strong>Skin Barrier &amp; Protective Support</strong> — strengthening the skin's natural defence; (4) <strong>Tone Uniformity &amp; Radiance Support</strong> — addressing oxidative-stress-linked pigmentation and dullness."],
                        ["What is the natural source of Rosmarinic Acid?", "Rosmarinic Acid is primarily extracted from rosemary (<em>Rosmarinus officinalis</em>) and sage (<em>Salvia officinalis</em>), both members of the Lamiaceae family. These herbs have been used for centuries in traditional medicine for their antioxidant and antimicrobial properties, and modern cosmetic science has validated the efficacy of their key phenolic constituent."],
                        ["How does Rosmarinic Acid help combat oxidative stress in skin?", "Rosmarinic Acid scavenges free radicals and reactive oxygen species (ROS) through its multiple hydroxyl groups on the catechol and caffeic acid moieties. It also inhibits lipid peroxidation, chelates transition metal ions, and modulates enzymatic antioxidant systems (e.g., superoxide dismutase, catalase), providing multi-layered oxidative stress protection."],
                        ["Is Rosmarinic Acid suitable for sensitive and reactive skin?", "Yes. Rosmarinic Acid's anti-inflammatory activity — including inhibition of COX enzymes and modulation of NF-κB inflammatory signalling — makes it particularly beneficial for sensitive, rosacea-prone, or reactive skin types. It calms redness, reduces skin discomfort, and supports the skin's natural comfort responses without irritation."],
                        ["What formulation types is Rosmarinic Acid best suited for?", "Rosmarinic Acid is highly versatile and suited for: serums, essences, toners (aqueous formulations), antioxidant moisturisers, eye creams targeting dark circles, brightening treatments, sensitive skin soothing products, and post-procedure care formulations. Its water-soluble nature makes it ideal for water-phase formulations."],
                        ["Can Rosmarinic Acid be combined with other actives?", "Yes. Rosmarinic Acid works synergistically with many other actives. It pairs well with Vitamin C (enhancing antioxidant capacity), niacinamide (for combined brightening), hyaluronic acid (in hydrating serums), ceramides (for barrier support), and peptides (anti-ageing serums). It is compatible with most cosmetic ingredients at recommended usage levels."],
                        ["What are the 5 delivery formats of Rosmarinic Acid from Bakunova?", "Bakunova offers Rosmarinic Acid in five advanced delivery systems: (1) <strong>Liposomal Rosmarinic Acid</strong> — enhanced dermal penetration and controlled release; (2) <strong>Rosmarinic Acid Microemulsion</strong> — transparent, water-compatible system; (3) <strong>Rosmarinic Acid Beta-CD Complex</strong> — improved aqueous solubility and photo-stability; (4) <strong>Rosmarinic Acid Solid Lipid Nanoparticles</strong> — prolonged release and oxidative stability; (5) <strong>Rosmarinic Acid Ionic Liquid (CAGE)</strong> — maximum transdermal delivery."],
                    ];
                    foreach ($ra_faqs as $i => $faq): $id = "cra" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>" aria-expanded="false">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionRA">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ─────────────────────────────────────────
                 CATEGORY 4: HPR
                 ───────────────────────────────────────── -->
            <div class="fq-category fq-category--hidden" id="cat-hpr">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--teal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">Hydroxypinacolone Retinoate (HPR)</h2>
                        <p class="fq-category__sub">Next-generation retinoid ester — CAS 893412-73-2</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionHPR">

                    <?php
                    $hpr_faqs = [
                        ["What is Hydroxypinacolone Retinoate (HPR)?", "Hydroxypinacolone Retinoate (HPR) is a next-generation retinoid ester — a direct ester of retinoic acid conjugated to pinacolone. Unlike retinol which requires enzymatic conversion in the skin, HPR binds directly to retinoid receptors (RAR), delivering retinol-like efficacy without the irritation associated with conventional retinoids. Its INCI name is Hydroxypinacolone Retinoate."],
                        ["What is the CAS number and molecular formula of HPR?", "HPR has CAS number <strong>893412-73-2</strong>, molecular formula <strong>C₂₆H₃₈O₄</strong>, and molecular weight of <strong>418.58 g/mol</strong>. It is classified as a retinoid ester and is considered a cosmetic-grade retinoid (not a pharmaceutical drug), making it available for use in over-the-counter skincare formulations in most markets."],
                        ["How is HPR different from retinol?", "Key differences: (1) <strong>Conversion pathway</strong> — Retinol must be converted to retinaldehyde then to retinoic acid in the skin; HPR is a direct retinoic acid ester that bypasses this multi-step conversion; (2) <strong>Tolerability</strong> — HPR causes significantly less irritation, redness, and peeling than retinol; (3) <strong>Stability</strong> — HPR is more stable in formulations; (4) <strong>Daytime use</strong> — HPR is photostable and can be used in daytime formulas; (5) <strong>Regulatory status</strong> — HPR is cosmetic-grade, avoiding pharmaceutical restrictions that apply to retinoic acid."],
                        ["What skin benefits does HPR deliver?", "HPR delivers four key skin benefits: (1) <strong>Anti-Aging &amp; Skin Renewal</strong> — directly activates retinoid receptors to stimulate collagen/elastin synthesis and accelerate cell turnover; (2) <strong>Retinol-Like Efficacy with Superior Tolerability</strong> — comparable pathway activation with significantly reduced irritation; (3) <strong>Pigmentation &amp; Tone Uniformity</strong> — modulates melanin synthesis for brighter, more even skin tone; (4) <strong>Sebum Regulation &amp; Acne Control</strong> — regulates sebaceous gland activity and supports pore refinement."],
                        ["Is HPR suitable for sensitive skin or retinoid-naive users?", "Yes. HPR is widely used as an entry point into retinoid skincare for sensitive skin types or retinoid-naive consumers who have not previously used retinol. Its reduced irritation profile means it can typically be tolerated by skin types that cannot tolerate retinol. It is also a preferred option for formulators developing retinoid-active products for markets where retinoic acid is restricted."],
                        ["Can HPR be used in daytime skincare products?", "HPR is considered more photostable than retinol, and many formulators incorporate it in daytime serums and moisturisers. However, as a general best practice, SPF protection should always be recommended when using any retinoid-active product during the day, and formulation stability should be verified with appropriate photo-stability testing."],
                        ["What delivery formats of HPR does Bakunova offer?", "Bakunova provides HPR in five advanced delivery systems: (1) <strong>Liposomal HPR</strong> — controlled release, deep dermal penetration; (2) <strong>HPR Microemulsion</strong> — transparent, elegant formulation aesthetics; (3) <strong>HPR Beta-CD Complex</strong> — improved aqueous solubility and photo-stability; (4) <strong>HPR Solid Lipid Nanoparticles</strong> — sustained release, oxidative stability, extended shelf life; (5) <strong>HPR Ionic Liquid (CAGE)</strong> — maximum transdermal penetration without conventional solvents."],
                        ["Can HPR be combined with other cosmetic actives?", "HPR combines well with many cosmetic actives. It is commonly formulated with peptides (synergistic anti-ageing), niacinamide (tone uniformity), hyaluronic acid (hydration), antioxidants such as Vitamin C and Rosmarinic Acid (complementary oxidative protection), and ceramides (barrier support). As with all retinoids, formulators should assess compatibility and stability with specific co-actives. Avoid high-concentration AHA/BHA combinations without appropriate pH management."],
                        ["What is the recommended usage concentration for HPR in formulations?", "HPR is typically used at concentrations of 0.05% to 0.5% in finished formulations. Lower concentrations (0.05–0.1%) are suitable for daily-use products with broad consumer targeting. Higher concentrations (0.2–0.5%) are appropriate for targeted anti-ageing treatments and professional-grade serums where higher retinoid activity is desired."],
                    ];
                    foreach ($hpr_faqs as $i => $faq): $id = "ch" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>" aria-expanded="false">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionHPR">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ─────────────────────────────────────────
                 CATEGORY 5: DELIVERY TECHNOLOGIES
                 ───────────────────────────────────────── -->
            <div class="fq-category fq-category--hidden" id="cat-delivery">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--navy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M6.343 6.343a8 8 0 000 11.314M17.657 6.343a8 8 0 010 11.314M2 12h2m16 0h2M12 2v2m0 16v2"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">Delivery Technologies</h2>
                        <p class="fq-category__sub">Advanced encapsulation systems that enhance active performance</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionDelivery">

                    <?php
                    $delivery_faqs = [
                        ["Why are advanced delivery technologies important for cosmetic actives?", "Cosmetic actives often face significant challenges in their native form: poor skin penetration, chemical instability, unfavourable solubility, rapid degradation, and short shelf life. Advanced delivery technologies address all these limitations — improving bioavailability, extending stability, enabling controlled release, and ensuring actives reach their target site in the skin at effective concentrations."],
                        ["What is liposomal encapsulation and how does it work?", "Liposomal encapsulation involves surrounding an active ingredient within phospholipid bilayers — structures that closely mimic the skin's own cell membranes. The resulting vesicles (liposomes) are typically 50–200 nm in size. Because the bilayer is biomimetic, liposomes fuse with skin cells and release their payload intracellularly, enabling deep dermal penetration, controlled release, and enhanced bioavailability. Liposomes can carry both hydrophilic and lipophilic actives."],
                        ["What is a microemulsion and what are its formulation advantages?", "A microemulsion is a thermodynamically stable, optically transparent (or translucent) system of water, oil, and surfactant where the active is solubilised in nano-scale droplets (typically 10–100 nm). Unlike conventional emulsions, microemulsions are self-assembling and extremely stable. Key advantages include: transparent/clear aesthetic suitable for serums and essences, excellent solubilisation of lipophilic actives, superior skin penetration due to nano-droplet size, and long-term physical stability."],
                        ["What is a Beta-Cyclodextrin (Beta-CD) inclusion complex?", "β-Cyclodextrin (Beta-CD) is a cyclic oligosaccharide with a hydrophilic exterior and a hydrophobic interior cavity. When an active molecule is enclosed within this cavity, it forms an inclusion complex. This dramatically improves the aqueous solubility and dissolution rate of poorly water-soluble actives, enhances photo-stability (protecting light-sensitive molecules), masks odour, and improves formulation compatibility. Beta-CD complexes are particularly valuable for retinoids and polyphenols in water-based formulations."],
                        ["What are Solid Lipid Nanoparticles (SLN) and when are they preferred?", "Solid Lipid Nanoparticles (SLN) are colloidal particles (typically 50–500 nm) made from solid lipids — lipids that remain solid at room and body temperature. The active ingredient is incorporated within the solid lipid matrix. SLNs provide prolonged sustained release (the solid matrix slows diffusion), exceptional oxidative stability (the lipid matrix protects sensitive actives), and improved shelf life. They are preferred for delivering unstable actives like retinoids and polyphenols that need protection from oxidation."],
                        ["What is the CAGE Ionic Liquid technology?", "CAGE stands for Choline And Geranic acid — an ionic liquid formed from the combination of choline (a naturally occurring quaternary ammonium compound) and geranic acid (a naturally occurring terpene acid). The CAGE ionic liquid disrupts the skin's tight junction barrier transiently, enabling unprecedented transdermal delivery of active ingredients without using conventional organic solvents. This technology is particularly effective for delivering larger molecules or hydrophilic actives that typically have limited skin penetration."],
                        ["Which delivery technology provides the deepest skin penetration?", "The CAGE Ionic Liquid technology provides the maximum transdermal penetration — enabling delivery beyond the stratum corneum into the viable epidermis and dermis. For targeted dermal delivery, liposomal systems are excellent due to their biomimetic bilayer structures. Microemulsions also offer enhanced penetration versus bulk formulations. The optimal choice depends on the target skin layer, the active's physicochemical properties, and the desired release profile."],
                        ["How do encapsulated actives differ from raw actives in formulation performance?", "Encapsulated actives significantly outperform their raw counterparts in several ways: (1) Enhanced skin penetration — delivery systems physically transport the active into deeper skin layers; (2) Controlled release — sustained activity over longer periods vs. burst release; (3) Improved stability — protection from oxidation, light, and pH extremes; (4) Better bioavailability — more active reaches its target site; (5) Improved tolerance — encapsulation can reduce local irritation of actives such as retinoids; (6) Extended shelf life — protection from environmental degradation."],
                        ["Are Bakunova's delivery technology solutions easy to incorporate into existing formulations?", "Yes. Bakunova's encapsulated active systems are designed as formulation-ready ingredients that can be added directly to formulations at the appropriate phase (typically the cool-down phase below 40°C or the water phase, depending on the system). Each product comes with full technical guidance including recommended use levels, incorporation instructions, compatibility notes, and suggested formulation types. Our technical team is available to assist with any formulation questions."],
                        ["Are the encapsulated actives compatible with natural and organic formulations?", "Many of Bakunova's delivery systems use naturally derived or nature-identical ingredients in their carrier systems. Liposomal systems typically use phospholipids derived from soy or sunflower lecithin. The CAGE Ionic Liquid system uses naturally occurring choline and geranic acid. However, specific compatibility with certified organic or Ecocert standards should be verified on a case-by-case basis — contact our technical team for detailed information."],
                        ["What documentation is provided with Bakunova's delivery technology solutions?", "For each product, Bakunova provides: Certificate of Analysis (CoA), Technical Data Sheet (TDS) with physicochemical properties and usage guidelines, Safety Data Sheet (SDS/MSDS), Stability data, Suggested formulation examples, and Compatibility notes. Additional regulatory support documentation can be provided upon request for specific markets."],
                    ];
                    foreach ($delivery_faqs as $i => $faq): $id = "cd" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>" aria-expanded="false">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionDelivery">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ─────────────────────────────────────────
                 CATEGORY 6: PIPELINE
                 ───────────────────────────────────────── -->
            <div class="fq-category fq-category--hidden" id="cat-pipeline">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">Development Pipeline</h2>
                        <p class="fq-category__sub">5 dermatology programs available for licensing and co-development</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionPipeline">

                    <?php
                    $pipeline_faqs = [
                        ["What is Bakunova's development pipeline?", "Bakunova has an in-house development pipeline of 5 innovative dermatology programs (BN-001 to BN-005), developed using our proprietary combination of premium active ingredients and advanced delivery technologies. These programs target unmet needs in Vitiligo, Acne, Psoriasis, Skin Whitening, and Anti-Aging. All programs have successfully completed preclinical development and are now available for out-licensing and co-development partnerships."],
                        ["What therapeutic areas does the Bakunova pipeline cover?", "The five pipeline programs address the following dermatological conditions: <strong>BN-001</strong> — Vitiligo; <strong>BN-002</strong> — Acne; <strong>BN-003</strong> — Psoriasis; <strong>BN-004</strong> — Skin Whitening; <strong>BN-005</strong> — Anti-Aging. These represent significant market opportunities in both the prescription dermatology and OTC cosmeceutical segments."],
                        ["What is the current development status of the pipeline programs?", "All five Bakunova pipeline programs (BN-001 through BN-005) have successfully <strong>completed preclinical development</strong>. This includes in-vitro efficacy studies, mechanism of action characterisation, formulation development, and preclinical safety assessment. The programs are now available for licensing to partners who will advance them through clinical development."],
                        ["What does 'Preclinical Completed' mean for Bakunova's programs?", "Preclinical Completed means that a program has successfully passed all pre-human development stages, including: in-vitro efficacy validation, mechanism of action studies using cell-based or biochemical assays, formulation feasibility and optimisation, and initial safety/toxicology profiling. The program is ready for IND (Investigational New Drug) enabling studies and first-in-human clinical trials with a development partner."],
                        ["What licensing opportunities are available for Bakunova's pipeline?", "Bakunova offers four types of licensing and partnership structures: (1) <strong>Out-Licensing</strong> — full rights transfer to a development partner; (2) <strong>Co-Development</strong> — joint development with shared costs, risks, and upside; (3) <strong>Regional Rights</strong> — geography-specific licensing for specific markets; (4) <strong>Global Commercialization</strong> — worldwide development and commercialisation partnerships. Each program can be structured differently depending on partner needs."],
                        ["How does Bakunova's development platform create differentiated pipeline products?", "Bakunova's in-house development platform combines <strong>premium active ingredients</strong> with <strong>advanced delivery technologies</strong> to create differentiated, efficacious, and safe dermatology products. This means pipeline programs benefit from both best-in-class active compounds and optimised delivery systems that enhance penetration, stability, and target site concentration — creating a meaningful competitive moat versus conventional formulations."],
                        ["How can pharmaceutical or biotechnology companies initiate a partnership discussion with Bakunova?", "Interested companies can initiate a partnership discussion by contacting Bakunova directly at info@srdkbiochem.com or reaching out to Drug Discovery Labs (our North American partner) at bpandi@drugdiscoverylabs.com. Please provide a brief introduction of your company, the program(s) of interest, and the type of partnership structure you are considering. We will arrange an introductory call with our business development team."],
                    ];
                    foreach ($pipeline_faqs as $i => $faq): $id = "cp" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>" aria-expanded="false">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionPipeline">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ─────────────────────────────────────────
                 CATEGORY 7: SAMPLES & ORDERS
                 ───────────────────────────────────────── -->
            <div class="fq-category fq-category--hidden" id="cat-orders">
                <div class="fq-category__header">
                    <div class="fq-category__icon fq-icon--blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                    </div>
                    <div>
                        <h2 class="fq-category__title">Samples, Orders &amp; Partnerships</h2>
                        <p class="fq-category__sub">How to get started with Bakunova</p>
                    </div>
                </div>

                <div class="accordion fq-accordion" id="accordionOrders">

                    <?php
                    $orders_faqs = [
                        ["How do I request a sample of a Bakunova product?", "Sample requests can be made by: (1) Using the Contact Us form on our website and selecting 'Sample Request' as the subject; (2) Emailing info@srdkbiochem.com (India) or bpandi@drugdiscoverylabs.com (USA/North America); (3) Calling +91 7661898368 (India) or +1 (919) 389-9258 (USA). Please specify the product name, format (e.g., Liposomal Bakuchiol), and your intended application. Our team will respond within 24–48 hours."],
                        ["What information should I provide when requesting a sample?", "To process your sample request efficiently, please provide: (1) Company name and your role; (2) Specific product(s) of interest and the delivery format; (3) Your application/formulation type (e.g., serum, moisturiser, eye cream); (4) Target use concentration; (5) Shipping address and any import requirements. This allows our technical team to provide the most relevant sample and accompanying technical support."],
                        ["Does Bakunova ship samples and products internationally?", "Yes. Bakunova ships products internationally from our Hyderabad, India facility. For customers in North America, Drug Discovery Labs (our marketing partner) can facilitate domestic supply and logistics within the USA. For specific import/export requirements, documentation needs, or customs considerations, please discuss these with our team during the inquiry process."],
                        ["What is the typical lead time for samples?", "Standard sample lead times are 5–10 business days from confirmation of request and receipt of relevant documentation (e.g., company details for compliance purposes). For customers in North America, Drug Discovery Labs may be able to facilitate faster local delivery. Commercial order lead times vary by product and volume — contact our team for specific timelines."],
                        ["Does Bakunova offer technical support for formulation?", "Yes. Bakunova provides formulation technical support as part of our customer partnership approach. Our technical team can advise on: recommended use levels, incorporation guidelines, compatibility with other ingredients, suggested formulation types, pH and temperature stability, and troubleshooting formulation challenges. We aim to be a true technical partner, not just a supplier."],
                        ["What documentation does Bakunova provide with its products?", "Standard documentation provided with all Bakunova products includes: Certificate of Analysis (CoA) with batch-specific results, Technical Data Sheet (TDS) with full physicochemical characterisation, Safety Data Sheet (SDS / MSDS), INCI declaration, Country of Origin documentation, and shelf-life / stability information. Additional documentation for specific regulatory markets (EU Cosmetics Regulation, FDA, etc.) can be provided upon request."],
                        ["Can Bakunova develop a custom delivery technology solution for my specific active?", "Yes. Bakunova has the R&D capability to develop custom encapsulation and delivery technology solutions for customer-specified active ingredients. This can include liposomal, microemulsion, cyclodextrin complexation, SLN, or ionic liquid formulations for actives beyond our current standard portfolio. Custom development projects are discussed on a case-by-case basis with clearly defined timelines, deliverables, and IP arrangements."],
                        ["Does Bakunova work with private label or white-label arrangements?", "Bakunova's primary model is B2B supply of cosmetic active ingredients and delivery technology solutions to brands and formulators who incorporate them into their own finished products. For specific private label or white-label enquiries, please contact our team to discuss your requirements and explore how we can collaborate."],
                        ["How can I stay updated on new Bakunova products and developments?", "To stay informed about new product launches, pipeline updates, and technical insights from Bakunova, you can: (1) Contact us to join our B2B mailing list; (2) Connect with us on LinkedIn; (3) Reach out to Drug Discovery Labs for North American updates. We periodically publish technical content, product bulletins, and industry updates for our registered partners."],
                        ["Does Bakunova have minimum order quantities (MOQ)?", "Minimum order quantities vary by product type and delivery format. For standard actives (e.g., bulk Bakuchiol, Rosmarinic Acid, HPR), MOQs apply based on production lot sizes. For encapsulated delivery systems (Liposomal, Microemulsion, SLN, etc.), MOQs may differ due to the manufacturing process. Please contact our sales team directly at info@srdkbiochem.com for current MOQ information and pricing specific to your requirements."],
                        ["What are the payment and pricing terms for Bakunova products?", "Pricing and payment terms are established through direct discussion with our sales team and depend on factors including product type, order volume, delivery format, destination, and partnership structure. To receive a quotation, please contact us at info@srdkbiochem.com with your product interests and approximate quantities. For North American inquiries, contact Drug Discovery Labs at bpandi@drugdiscoverylabs.com."],
                    ];
                    foreach ($orders_faqs as $i => $faq): $id = "co" . $i; ?>
                    <div class="accordion-item fq-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button fq-btn collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?= $id ?>" aria-expanded="false">
                                <span class="fq-btn__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                                <?= htmlspecialchars($faq[0]) ?>
                            </button>
                        </h3>
                        <div id="<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionOrders">
                            <div class="accordion-body fq-body"><?= $faq[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </section>

    <!-- =============================================
         BOTTOM CTA
         ============================================= -->
    <section class="fq-cta">
        <div class="container-90">
            <div class="fq-cta__inner">
                <div>
                    <h2 class="fq-cta__title">Still have questions?</h2>
                    <p class="fq-cta__desc">Our technical and commercial team is ready to help you find the right solution.</p>
                </div>
                <div class="fq-cta__btns">
                    <a href="contact.php" class="fq-cta-btn fq-cta-btn--primary">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <!-- <a href="products.php" class="fq-cta-btn fq-cta-btn--outline">View Products</a> -->
                </div>
            </div>
        </div>
    </section>

</main>

<script>
(function () {
    'use strict';

    /* ── Category tab switching ── */
    const tabs = document.querySelectorAll('.fq-tab');
    const cats = document.querySelectorAll('.fq-category');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
            cats.forEach(function (c) { c.classList.add('fq-category--hidden'); });

            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');

            var target = document.getElementById(tab.dataset.target);
            if (target) {
                target.classList.remove('fq-category--hidden');
                /* Smooth scroll to category header on mobile */
                if (window.innerWidth < 992) {
                    setTimeout(function () {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 80);
                }
            }
        });
    });

    /* ── Sticky tab bar ── */
    var tabBar   = document.getElementById('fqTabs');
    var sentinel = document.querySelector('.fq-hero');
    if (tabBar && sentinel) {
        var observer = new IntersectionObserver(function (entries) {
            tabBar.classList.toggle('fq-tabs-wrap--stuck', !entries[0].isIntersecting);
        }, { threshold: 0, rootMargin: '-1px 0px 0px 0px' });
        observer.observe(sentinel);
    }
})();
</script>

<?php include 'components/footer.php'; ?>
