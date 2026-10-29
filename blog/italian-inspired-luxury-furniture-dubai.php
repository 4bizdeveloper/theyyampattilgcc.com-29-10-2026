<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <meta name="robots" content="index, follow">
    <base href="../../">
    <?php
$page_title = "Italian Luxury Furniture Dubai | Italian-Inspired Design Guide";
$page_description = "Explore Italian-inspired luxury furniture in Dubai: key design features, materials and styles, plus how to bring them home. By Theyyampattil.";
?>
<?php include SITE_ROOT . '/includes/head-tag-include.php'; ?>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        a {
            color: #c9a76a;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #dbb87a;
        }

        /* ===== TYPOGRAPHY ===== */
        h1, h2, h3, h4 {
            font-weight: 600;
            line-height: 1.25;
            color: #ffffff;
        }

        h1 {
            font-size: clamp(1.8rem, 5vw, 3.2rem);
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        h2 {
            font-size: clamp(1.4rem, 3.5vw, 2.2rem);
            margin-bottom: 1rem;
            color: #c9a76a;
            font-weight: 600;
        }

        h3 {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            margin-bottom: 0.6rem;
            color: #e8d5b0;
            font-weight: 600;
        }

        p {
            font-size: clamp(0.95rem, 1.8vw, 1.1rem);
            color: #cfcfcf;
            margin-bottom: 1rem;
        }

        /* ===== COLORS ===== */
        .brand-color {
            color: #c9a76a;
        }

        .bg-dark {
            background-color: #121212;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            position: relative;
            width: 100%;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px 60px;
            background-image: url('assets/images/home-page/hero-banner/hero-slider-1.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(18,18,18,0.65) 50%, rgba(0,0,0,0.8) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            width: 100%;
            padding: 20px;
        }

        .hero h1 {
            color: #ffffff;
            text-shadow: 0 2px 20px rgba(0,0,0,0.5);
            margin-bottom: 1.2rem;
            line-height: 1.2;
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 16px 28px;
            margin-top: 1.5rem;
            font-size: clamp(0.85rem, 1.6vw, 0.95rem);
            color: #b0b0b0;
            font-weight: 400;
        }

        .hero-meta a {
            color: #c9a76a;
            font-weight: 500;
            border-bottom: 1px solid transparent;
            transition: border-color 0.3s ease;
        }

        .hero-meta a:hover {
            border-bottom-color: #c9a76a;
        }

        .hero-meta .separator {
            color: #555;
            font-weight: 300;
        }

        /* Breadcrumb hidden visually — only schema */
        .breadcrumb-hidden {
            display: none;
        }

        /* ===== MAIN LAYOUT ===== */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 10px;
        }

        .blog-content {
            padding: 40px 10px 60px;
        }

        /* ===== CONTENT ROWS ===== */
        .content-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
            margin-bottom: 40px;
        }

        .content-row .text-col {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .content-row .image-col {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .content-row .image-col img {
            width: 100%;
            height: 100%;
            max-height: 420px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content-row .image-col img:hover {
            transform: scale(1.01);
            box-shadow: 0 12px 40px rgba(201, 167, 106, 0.15);
        }

        /* Alternate layout for odd rows */
        .content-row.reverse {
            direction: rtl;
        }

        .content-row.reverse > * {
            direction: ltr;
        }

        /* ===== SECTION SPACING ===== */
        .section-block {
            margin-bottom: 36px;
        }

        .section-block h2 {
            margin-bottom: 0.8rem;
        }

        .section-block h3 {
            margin-top: 1.2rem;
            margin-bottom: 0.4rem;
        }

        .section-block p {
            margin-bottom: 0.8rem;
        }

        /* ===== TABLE ===== */
        .table-wrap {
            overflow-x: auto;
            margin: 20px 0 10px;
            border-radius: 10px;
            border: 1px solid #2a2a2a;
            background-color: #1a1a1a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.92rem;
            min-width: 600px;
        }

        table th {
            background-color: #1f1f1f;
            color: #c9a76a;
            font-weight: 600;
            text-align: left;
            padding: 14px 16px;
            border-bottom: 1px solid #2e2e2e;
            font-size: 0.85rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        table td {
            padding: 13px 16px;
            border-bottom: 1px solid #222;
            color: #cfcfcf;
            vertical-align: top;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table tr:hover td {
            background-color: #1e1e1e;
        }

        /* ===== FAQ ===== */
        .faq-section {
            margin-top: 40px;
        }

        .faq-item {
            border-bottom: 1px solid #2a2a2a;
            padding: 0;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 16px 0;
            background: none;
            border: none;
            color: #e8d5b0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(0.95rem, 1.8vw, 1.1rem);
            font-weight: 600;
            text-align: left;
            cursor: pointer;
            transition: color 0.3s ease;
            gap: 16px;
        }

        .faq-question:hover {
            color: #c9a76a;
        }

        .faq-question .icon {
            font-size: 1.4rem;
            font-weight: 300;
            color: #c9a76a;
            transition: transform 0.35s ease;
            flex-shrink: 0;
            line-height: 1;
            width: 24px;
            text-align: center;
        }

        .faq-item.active .faq-question .icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
            padding: 0 0;
        }

        .faq-item.active .faq-answer {
            max-height: 400px;
            padding: 0 0 18px;
        }

        .faq-answer p {
            margin-bottom: 0;
            color: #b8b8b8;
            font-size: clamp(0.9rem, 1.6vw, 1rem);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .content-row {
                gap: 24px;
            }
            .content-row .image-col img {
                max-height: 360px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 55vh;
                padding: 70px 16px 50px;
            }
            .hero-content {
                padding: 10px;
            }
            .content-row {
                grid-template-columns: 1fr;
                gap: 20px;
                margin-bottom: 32px;
            }
            .content-row.reverse {
                direction: ltr;
            }
            .content-row .image-col {
                order: -1;
            }
            .content-row .image-col img {
                max-height: 320px;
                width: 100%;
            }
            .content-row .text-col {
                order: 1;
            }
            .blog-content {
                padding: 30px 10px 50px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                min-height: 50vh;
                padding: 60px 12px 40px;
            }
            .hero-meta {
                flex-direction: column;
                gap: 6px;
                font-size: 0.82rem;
            }
            .hero-meta .separator {
                display: none;
            }
            .content-row .image-col img {
                max-height: 260px;
                border-radius: 8px;
            }
            table {
                font-size: 0.82rem;
                min-width: 480px;
            }
            table th, table td {
                padding: 10px 12px;
            }
        }

        /* ===== ACCESSIBILITY / FOCUS ===== */
        .faq-question:focus-visible {
            outline: 2px solid #c9a76a;
            outline-offset: 2px;
        }

        a:focus-visible {
            outline: 2px solid #c9a76a;
            outline-offset: 2px;
        }

        /* ===== PERFORMANCE / SMOOTHNESS ===== */
        .content-row,
        .section-block,
        .faq-item {
            will-change: transform;
        }

        /* Reduce motion */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        /* ===== UTILITY ===== */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }
    </style>
</head>
<body>
    <?php include SITE_ROOT . '/includes/header.php'; ?>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero" aria-label="Italian Luxury Furniture Dubai hero">
        <div class="hero-content">
            <h1>Italian-Inspired Luxury Furniture in Dubai: Design Features, Materials &amp; Styles</h1>
            <div class="hero-meta">
                <span>By <a href="https://theyyampattilgcc.com/">Theyyampattil GCC</a></span>
                <span class="separator">|</span>
                <span>October 8, 2026</span>
            </div>
        </div>
    </section>

    <!-- ===== BLOG CONTENT ===== -->
    <main class="container blog-content">

        <!-- INTRO SECTION -->
        <div class="section-block">
            <p>Italian-inspired luxury furniture is defined by clean, balanced proportions, refined natural materials, soft curves, and meticulous finishing. It values craftsmanship and restraint over heavy ornamentation. In Dubai, the style suits both modern villas and contemporary apartments because it feels elegant without being overly formal, and it pairs well with the neutral, textured interiors that are popular across the UAE.</p>
            <p>"Italian luxury" is one of the most searched phrases in the furniture category, but it is often used loosely. As a Dubai-based maker with in-house production across Dubai, Sharjah, and Abu Dhabi, Theyyampattil Furniture designs Italian-inspired pieces for UAE homes. Here is what the style actually means and how to use it well.</p>
        </div>

        <!-- ROW 1: Text left, Image right -->
        <div class="content-row">
            <div class="text-col">
                <h2>What Defines Italian-Inspired Luxury Furniture?</h2>
                <h3>Design Over Decoration</h3>
                <p>Italian-inspired design lets proportion, line, and material do the work. Rather than relying on heavy carving or busy detailing, pieces gain their elegance from careful shapes and flawless finishing.</p>
                <h3>"Italian-Inspired" vs "Italian-Made"</h3>
                <p>These are not the same thing. Italian-made furniture is produced in Italy. Italian-inspired furniture borrows the design language, such as proportions, finishes, and detailing, and is manufactured elsewhere, often so it can be tailored to local homes and tastes. Always ask a seller which one they are offering.</p>
            </div>
            <div class="image-col">
                <img src="assets/images/home-page/wall-panel.avif" alt="Italian-inspired luxury living room furniture with clean lines" loading="lazy" width="1607" height="1828">
            </div>
        </div>

        <!-- ROW 2: Image left, Text right (reverse) -->
        <div class="content-row reverse">
            <div class="text-col">
                <h2>The Key Features of the Italian Luxury Look</h2>
                <h3>1. Clean Lines and Balanced Proportions</h3>
                <p>Italian-inspired pieces tend to have tailored, uncluttered silhouettes. Sofas, beds, and cabinets are proportioned carefully so they feel substantial but never bulky.</p>
                <h3>2. Soft Curves Alongside Straight Lines</h3>
                <p>Rounded edges, curved armrests, and softly sculpted headboards balance the geometric structure, giving the furniture a refined, approachable feel.</p>
                <h3>3. Quality Natural Materials</h3>
                <p>Rich wood veneers and solid wood, natural stone-look finishes, fine leather, and textured fabrics such as boucle and velvet are common. Material quality and how well the materials are paired matter more than quantity.</p>
                <h3>4. Muted, Sophisticated Colour Palettes</h3>
                <p>Warm neutrals such as taupe, sand, greige, and soft bronze are typical, often with a single deeper accent in a cushion, lamp, or artwork.</p>
                <h3>5. Hidden Detail and Precise Finishing</h3>
                <p>Concealed hinges, flush joints, seamless panel gaps, and integrated lighting are signs of Italian-style execution. The detail is in how well the piece is made, not how loudly it announces itself.</p>
            </div>
            <div class="image-col">
                <img src="assets/images/home-page/kitchen.avif" alt="Modern Italian luxury furniture details and materials" loading="lazy" width="1607" height="1828">
            </div>
        </div>

        <!-- SECTION: Where Italian-Inspired Design Works Best -->
        <div class="section-block">
            <h2>Where Italian-Inspired Design Works Best in a UAE Home</h2>
            <h3>Living Room and TV Wall</h3>
            <p>A custom TV wall with wood panelling, stone-look detailing, and integrated lighting is a signature application. It anchors the room while staying visually calm.</p>
            <h3>Walk-In Closets and Wardrobes</h3>
            <p>Italian-inspired closet design focuses on clean fronts, soft-close mechanisms, glass or fluted details, and well-planned interior lighting and storage.</p>
            <h3>Bedroom</h3>
            <p>Upholstered headboards, matching bedside units, and wall panelling create a cohesive, hotel-like bedroom with a calm palette.</p>
            <h3>Kitchen</h3>
            <p>Handleless or minimal-handle cabinetry, natural-look worktops, and warm wood tones give kitchens a refined, understated finish.</p>
            <h3>Wall Panels and Doors</h3>
            <p>Fluted wood panels, slim-profile doors, and textured feature walls carry the design language throughout the home.</p>
        </div>

        <!-- ROW 3: Text left, Image right -->
        <div class="content-row">
            <div class="text-col">
                <h2>Italian Luxury vs Other Popular Styles</h2>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Style</th>
                                <th>Core Character</th>
                                <th>Typical Materials</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Italian-inspired</td>
                                <td>Clean, balanced, refined, understated</td>
                                <td>Wood, stone-look finishes, fine leather, textured fabrics</td>
                            </tr>
                            <tr>
                                <td>Classic / Neoclassical</td>
                                <td>Ornate, symmetrical, decorative</td>
                                <td>Carved wood, gilded detailing, rich fabrics</td>
                            </tr>
                            <tr>
                                <td>Minimalist</td>
                                <td>Very simple, sparse, functional</td>
                                <td>Light woods, plain finishes, neutral fabrics</td>
                            </tr>
                            <tr>
                                <td>Arabic / Majlis-inspired</td>
                                <td>Warm, layered, hospitality-focused</td>
                                <td>Patterned fabrics, carved wood, rich textures</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="image-col">
                <img src="assets/images/home-page/dressing-unit.avif" alt="Comparison of Italian luxury furniture with other styles" loading="lazy" width="1607" height="1828">
            </div>
        </div>

        <!-- SECTION: How to Choose -->
        <div class="section-block">
            <h2>How to Choose Italian-Inspired Furniture Wisely</h2>
            <h3>Check the Materials</h3>
            <p>Ask what the furniture is actually made from, including the frame, surface, and upholstery, not only what it looks like.</p>
            <h3>Inspect the Finishing</h3>
            <p>Look at joints, edges, and panel gaps up close. Precise, consistent finishing is the hallmark of the style.</p>
            <h3>Think in Terms of the Whole Room</h3>
            <p>The look works best when furniture, wall treatments, lighting, and colour are planned together rather than bought piece by piece.</p>
            <h3>Ask About Made-to-Measure Options</h3>
            <p>Tailoring pieces to your exact space is what lifts furniture from good to genuinely refined, especially for built-ins.</p>
        </div>

        <!-- SECTION: Theyyampattil Furniture -->
        <div class="section-block">
            <h2>Italian-Inspired Design at Theyyampattil Furniture</h2>
            <p>Theyyampattil Furniture brings Italian-inspired design to UAE homes through made-to-measure furniture, wall panels, TV units, closets, and kitchens, all manufactured in-house across our Dubai, Sharjah, and Abu Dhabi facilities. Our design team works with you to select materials and finishes, and you can see and touch samples in our showrooms before approving your project.</p>
        </div>

        <!-- FAQ SECTION -->
        <div class="faq-section">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What is Italian luxury furniture known for?</span>
                    <span class="icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <p>It is known for clean lines, balanced proportions, high-quality natural materials, and precise finishing. The style favours understated elegance over heavy ornamentation.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>What does "Italian-inspired" furniture mean?</span>
                    <span class="icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <p>It means the furniture follows Italian design principles, such as proportions, finishes, and detailing, but is not necessarily manufactured in Italy. It lets you get the style tailored to your space and local requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Is Italian-style furniture suitable for Dubai homes?</span>
                    <span class="icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <p>Yes. Its clean, neutral aesthetic suits modern villas and apartments, and it blends easily with the warm, textured interiors that are popular in the UAE.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Which rooms suit Italian-inspired design best?</span>
                    <span class="icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <p>Living rooms with TV walls, bedrooms, walk-in closets, and kitchens are all excellent fits, along with wall panelling and doors that carry the style through the home.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Can Italian-inspired furniture be made to measure?</span>
                    <span class="icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <p>Yes. Made-to-measure production lets the design fit your exact room dimensions and finishes, which is especially valuable for built-in furniture.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Can I see Italian-inspired pieces before ordering?</span>
                    <span class="icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <p>Yes. You can visit a Theyyampattil Furniture showroom in Dubai, Sharjah, or Abu Dhabi to view finished pieces and material samples in person.</p>
                </div>
            </div>
        </div>

    </main>

    <!-- ===== SCHEMA MARKUP ===== -->
    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://theyyampattilgcc.com/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Blog",
                "item": "https://theyyampattilgcc.com/blogs/"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Italian-Inspired Luxury Furniture in Dubai: Design Features, Materials & Styles",
                "item": "https://theyyampattilgcc.com/blog/italian-inspired-luxury-furniture-dubai/"
            }
        ]
    }
    </script>

    <!-- BlogPosting Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "Italian-Inspired Luxury Furniture in Dubai: Design Features, Materials & Styles",
        "description": "Explore Italian-inspired luxury furniture in Dubai: key design features, materials and styles, plus how to bring them home. By Theyyampattil.",
        "image": "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=6336&auto=format&fit=crop",
        "author": {
            "@type": "Organization",
            "name": "Theyyampattil GCC",
            "url": "https://theyyampattilgcc.com/"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Theyyampattil GCC",
            "logo": {
                "@type": "ImageObject",
                "url": "https://theyyampattilgcc.com/assets/images/favicons/favicon-32x32.png"
            }
        },
        "datePublished": "2026-10-08",
        "dateModified": "2026-10-08",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://theyyampattilgcc.com/blog/italian-inspired-luxury-furniture-dubai/"
        }
    }
    </script>

    <!-- FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Italian luxury furniture known for?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It is known for clean lines, balanced proportions, high-quality natural materials, and precise finishing. The style favours understated elegance over heavy ornamentation."
                }
            },
            {
                "@type": "Question",
                "name": "What does \"Italian-inspired\" furniture mean?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "It means the furniture follows Italian design principles, such as proportions, finishes, and detailing, but is not necessarily manufactured in Italy. It lets you get the style tailored to your space and local requirements."
                }
            },
            {
                "@type": "Question",
                "name": "Is Italian-style furniture suitable for Dubai homes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Its clean, neutral aesthetic suits modern villas and apartments, and it blends easily with the warm, textured interiors that are popular in the UAE."
                }
            },
            {
                "@type": "Question",
                "name": "Which rooms suit Italian-inspired design best?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Living rooms with TV walls, bedrooms, walk-in closets, and kitchens are all excellent fits, along with wall panelling and doors that carry the style through the home."
                }
            },
            {
                "@type": "Question",
                "name": "Can Italian-inspired furniture be made to measure?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Made-to-measure production lets the design fit your exact room dimensions and finishes, which is especially valuable for built-in furniture."
                }
            },
            {
                "@type": "Question",
                "name": "Can I see Italian-inspired pieces before ordering?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. You can visit a Theyyampattil Furniture showroom in Dubai, Sharjah, or Abu Dhabi to view finished pieces and material samples in person."
                }
            }
        ]
    }
    </script>

    <!-- ===== FAQ ACCORDION SCRIPT ===== -->
    <script>
        (function() {
            'use strict';
            document.addEventListener('DOMContentLoaded', function() {
                var faqItems = document.querySelectorAll('.faq-item');
                faqItems.forEach(function(item) {
                    var question = item.querySelector('.faq-question');
                    if (!question) return;
                    question.addEventListener('click', function() {
                        var isActive = item.classList.contains('active');
                        // Close all others (optional — uncomment for single-open behavior)
                        // faqItems.forEach(function(other) {
                        //     other.classList.remove('active');
                        //     var otherBtn = other.querySelector('.faq-question');
                        //     if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                        // });
                        // Toggle current
                        item.classList.toggle('active');
                        question.setAttribute('aria-expanded', !isActive);
                    });
                });
            });
        })();
    </script>

    <?php include SITE_ROOT . '/includes/footer.php'; ?>
    <?php include SITE_ROOT . '/includes/fixed-floating-buttons.php'; ?>
</body>
</html>