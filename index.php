<?php
// Define absolute root path for clean includes everywhere
define('SITE_ROOT', __DIR__);

// Get the clean request path
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$request = strtok($request, '?');

if (!empty($request)) {
    // Sanitize multi-level paths properly
    $segments = explode('/', $request);
    $safeSegments = array_map(function($seg) {
        return preg_replace('/[^a-zA-Z0-9\-_]/', '', $seg);
    }, $segments);
    
    $path = implode('/', $safeSegments);
    
    $targetPhp = SITE_ROOT . '/' . $path . '.php';

    // Exclude operational files
    if ($path === 'send-mail.php') {
        if (file_exists(SITE_ROOT . '/send-mail.php')) {
            include SITE_ROOT . '/send-mail.php';
            exit;
        }
    }

    // If the corresponding .php file exists (e.g. resource/videos.php)
    if (file_exists($targetPhp)) {
        // Enforce trailing slash canonical redirection if missing
        if (substr($_SERVER['REQUEST_URI'], -1) !== '/' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            header("Location: /" . $path . "/", true, 301);
            exit;
        }
        include $targetPhp;
        exit;
    }
}

// Fallback: If no custom route matched, load your normal home page content
// (Or put your home page code directly below this file if index.php is your homepage)
?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="index, follow">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="luxury furniture outlet, luxury home furniture, modern furniture dubai, interior design companies, custom furniture, italian furniture, luxury closet dubai, walk in closets, wardrobe cabinet, tv unit design, modern tv wall, wall cladding, 3d wall panels, bedroom sets, kids bedroom furniture, partition wall, home decor, luxury furniture abu dhabi, living room furniture, furniture shop sharjah, furniture sale dubai, custom closet, كاف للخزائن" />
<meta name="author" content="Theyyampattil Furniture Trading LLC">
<meta name="theme-color" content="#121212">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Async font load (preload + swap on load) removes render-blocking CSS request for GTmetrix/PageSpeed -->
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" media="print" onload="this.media='all';this.onload=null;">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"></noscript>
<link rel="apple-touch-icon" sizes="180x180" href="https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="https://theyyampattilgcc.com/assets/images/favicons/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="https://theyyampattilgcc.com/assets/images/favicons/favicon-16x16.png" />
<!-- tell browser to start downloading the first image before it reads css -->
<link rel="preload" as="image" href="https://theyyampattilgcc.com/assets/images/home-page/hero-banner/hero-slider-1.avif">

<!-- SEO Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://theyyampattilgcc.com/#organization",
  "name": "Theyyampattil Furniture",
  "url": "https://theyyampattilgcc.com/",
  "logo": "https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png",
  "image": "https://theyyampattilgcc.com/assets/images/home-page/hero-banner/hero-slider-1.avif",
  "foundingDate": "1983",
  "telephone": "+971559132200",
  "areaServed": {
    "@type": "Country",
    "name": "United Arab Emirates"
  },
  "sameAs": [
    "https://www.facebook.com/theyyampattilgcc",
    "https://www.instagram.com/theyyampattilgcc"
  ]
}
</script>

<!-- Breadcrumb Schema (AEO/GEO fix: site hierarchy signal for search + AI answer engines) -->
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
    }
  ]
}
</script>

<!-- HowTo Schema (AEO fix: structured answer support for "how we build your furniture" process) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How Theyyampattil Furniture Builds Custom Furniture",
  "description": "The step-by-step, in-house process used to design, manufacture, and deliver custom luxury furniture in Dubai, Sharjah and Abu Dhabi.",
  "totalTime": "P8W",
  "step": [
    {
      "@type": "HowToStep",
      "position": 1,
      "name": "Consultation & measurement",
      "text": "Our design team visits or meets you in-showroom to record exact room dimensions and material preferences."
    },
    {
      "@type": "HowToStep",
      "position": 2,
      "name": "Design & material sign-off",
      "text": "You approve a 3D layout and physical material/fabric swatches before production starts."
    },
    {
      "@type": "HowToStep",
      "position": 3,
      "name": "In-house manufacturing",
      "text": "Pieces are hand-built and quality-checked at our own production facilities, not outsourced."
    },
    {
      "@type": "HowToStep",
      "position": 4,
      "name": "Delivery & installation",
      "text": "Our team delivers and installs on-site across Dubai, Sharjah and Abu Dhabi, typically within 4-8 weeks of order confirmation."
    }
  ]
}
</script>

<!-- Service/OfferCatalog Schema (GEO fix: entity disambiguation - product/service schema) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Custom Luxury Furniture Design & Manufacturing",
  "provider": {
    "@type": "FurnitureStore",
    "name": "Theyyampattil Furniture Trading LLC",
    "url": "https://theyyampattilgcc.com/"
  },
  "areaServed": [
    { "@type": "City", "name": "Dubai" },
    { "@type": "City", "name": "Sharjah" },
    { "@type": "City", "name": "Abu Dhabi" }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Custom Furniture Categories",
    "itemListElement": [
      {
        "@type": "Offer",
        "name": "Custom Sofas & Living Room Furniture"
      },
      {
        "@type": "Offer",
        "name": "Bedroom Sets & Wardrobes"
      },
      {
        "@type": "Offer",
        "name": "TV Units & Wall Cladding"
      },
      {
        "@type": "Offer",
        "name": "Walk-in Closets"
      }
    ]
  }
}
</script>
<!-- Common <head> include materials like schema markup,social tags,...etc -->
<?php include SITE_ROOT . '/includes/head-tag-include.php'; ?>

<meta name="google-site-verification" content="XTjY3Qv4nQ_GyvHDCV4jIVC4kk-4ErQbpYiw8E_dm2A" />

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NHMN58QX');</script>

<style>
  /* GTM noscript fallback container (visually hidden, keeps layout unaffected) */
  .gtm-noscript-frame { position: absolute; width: 0; height: 0; overflow: hidden; }
  /* ===== GLOBAL RESET & BASE ===== */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html {
    scroll-behavior: smooth;
    font-size: 16px;
    overflow-x: hidden;
    overscroll-behavior-y: auto;
    -webkit-text-size-adjust: 100%;
    text-size-adjust: 100%;
  }
  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: #151515;
    color: #e8e0d4;
    overflow-x: hidden;
    overscroll-behavior-y: auto;
    -webkit-overflow-scrolling: touch;
    touch-action: pan-y pinch-zoom;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  /* Respect reduced-motion users AND stop scroll-behavior:smooth from
     fighting with anchor/JS-triggered scrolls (a common cause of a
     screen feeling "stuck" mid-scroll on mobile Safari/Chrome) */
  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important; }
  }
  a { text-decoration: none; color: inherit; }
  img { max-width: 100%; display: block; }
  ul { list-style: none; }
  :root {
    --gold: #c9a76a;
    --gold-light: #e8c88a;
    --gold-dark: #9a7840;
    --dark: #121212;
    --dark-2: #121212;
    --dark-3: #121212;
    --dark-4: #222222;
    --cream: #e8e0d4;
    --cream-muted: #b5a99a;
    --white: #ffffff;
    --border: rgba(201,167,106,0.15);
    --border-hover: rgba(201,167,106,0.4);
  }
  
</style>

</head>
<body>
<!-- GTM (noscript) fallback for users/crawlers with JavaScript disabled -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHMN58QX" height="0" width="0" class="gtm-noscript-frame" title="Google Tag Manager"></iframe></noscript>

<!-- Header -->
<?php include SITE_ROOT . '/includes/home-page-header.php'; ?>

<!-- ============================================================
     COMPONENT: HERO SLIDER
     ============================================================ -->

<!-- hero section starts -->
<section id="hero-section" aria-label="Hero">
  <style>
    :root {
      --gold: #c5a059;
      --gold-light: #e2c285;
      --transition-main: cubic-bezier(0.23, 1, 0.32, 1);
      --text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8), 0 1px 3px rgba(0, 0, 0, 0.9);
      -webkit-text-size-adjust: 100%;
      text-size-adjust: 100%;
    }

    /* --- Performance & CLS Optimization --- */
    #hero-section {
      position: relative;
      height: 100vh;
      min-height: 600px;
      overflow: hidden;
      background: #0a0a0a;
      contain: layout style;
    }

    .hero-slide {
      position: absolute;
      inset: 0;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.8s var(--transition-main), visibility 0.8s;
      z-index: 1;
      backface-visibility: hidden;
      transform: translateZ(0);
    }

    /* Prevent LCP delay & layout shift */
    .hero-slide:first-child {
      opacity: 1;
      visibility: visible;
      z-index: 2;
    }

    .hero-slide.active {
      opacity: 1;
      visibility: visible;
      z-index: 2;
    }

    .hero-slide-bg {
      position: absolute;
      inset: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transform: scale(1.02);
      transition: transform 6s linear;
      will-change: transform;
    }

    .hero-slide.active .hero-slide-bg {
      transform: scale(1);
    }

    /* --- Layout & Typography --- */
    .hero-content {
      position: absolute;
      inset: 0;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 0 10% 12vh;
      z-index: 3;
      background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 50%, transparent 100%);
    }

    .hero-eyebrow, .hero-title, .hero-desc, .hero-btns {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s var(--transition-main), transform 0.6s var(--transition-main);
      text-shadow: var(--text-shadow);
    }

    /* Immediate activation for the first slide to satisfy GTmetrix LCP */
    .hero-slide:first-child .hero-eyebrow,
    .hero-slide:first-child .hero-title,
    .hero-slide:first-child .hero-desc,
    .hero-slide:first-child .hero-btns,
    .hero-slide.active .hero-eyebrow, 
    .hero-slide.active .hero-title, 
    .hero-slide.active .hero-desc, 
    .hero-slide.active .hero-btns { 
      opacity: 1; 
      transform: translateY(0); 
    }

    .hero-slide.active .hero-eyebrow { transition-delay: 0.1s; }
    .hero-slide.active .hero-title { transition-delay: 0.2s; }
    .hero-slide.active .hero-desc { transition-delay: 0.3s; }
    .hero-slide.active .hero-btns { transition-delay: 0.4s; }

    .hero-eyebrow { 
      display: flex; 
      align-items: center; 
      gap: 15px; 
      margin-bottom: 1rem; 
    }
    
    .hero-eyebrow-line { 
      width: 40px; 
      height: 2px; 
      background: var(--gold); 
    }
    
    .hero-eyebrow span {
      letter-spacing: 0.1em;
      white-space: nowrap;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: inline-block;
      color: var(--gold);
      text-transform: uppercase;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .hero-title { 
      font-size: clamp(2.2rem, 5vw, 4.8rem); 
      font-weight: 700; 
      line-height: 1.1; 
      color: #fff; 
      max-width: 850px; 
      margin-bottom: 1rem; 
    }
    
    .hero-title em { 
      color: var(--gold-light); 
      font-style: normal; 
      font-weight: 300; 
    }

    .hero-desc { 
      font-size: clamp(1.05rem, 1.4vw, 1.3rem); 
      color: #ffffff; 
      max-width: 550px; 
      line-height: 1.5; 
      margin-bottom: 1.8rem; 
      font-weight: 500; 
    }

    .btn-hero {
      display: inline-flex; 
      align-items: center; 
      padding: 14px 36px; 
      font-size: 0.75rem; 
      font-weight: 700;
      letter-spacing: 0.2em; 
      text-transform: none; 
      background: var(--gold); 
      color: #ffffff; 
      border: 1px solid var(--gold); 
      text-decoration: none; 
      transition: all 0.3s ease; 
      position: relative;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    
    .btn-hero:hover { 
      background: #ffffff; 
      color: #0a0a0a; 
      border-color: #ffffff; 
    }

    .hero-nav { 
      position: absolute; 
      bottom: 40px; 
      left: 10%; 
      display: flex; 
      gap: 12px; 
      z-index: 10; 
    }
    
    .hero-dot { 
      width: 30px; 
      height: 3px; 
      background: rgba(255,255,255,0.4); 
      cursor: pointer; 
      transition: all 0.4s ease; 
      border: none; 
      padding: 0; 
    }
    
    .hero-dot.active { 
      background: var(--gold); 
      width: 60px; 
    }

    .hero-scroll-hint { 
      position: absolute; 
      bottom: 40px; 
      right: 10%; 
      display: flex; 
      flex-direction: column; 
      align-items: center; 
      z-index: 10; 
      text-decoration: none; 
      filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.85)) drop-shadow(0 4px 20px rgba(0, 0, 0, 0.4));
    }
    
    .hero-scroll-hint span { 
      font-size: 0.6rem; 
      font-weight: 700; 
      letter-spacing: 0.4em; 
      text-transform: uppercase; 
      color: var(--gold); 
      writing-mode: vertical-rl; 
      margin-bottom: 12px; 
      text-shadow: 0 2px 4px rgba(0,0,0,0.9), 0 0 10px rgba(0,0,0,0.5);
    }

    .modern-arrow-wrap {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
    }

    .arrow-line { 
      width: 2px; 
      height: 40px; 
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, var(--gold) 20%, transparent 100%) !important;
      box-shadow: -1px 0 0 rgba(0,0,0,0.7), 1px 0 0 rgba(0,0,0,0.7);
    }
    
    .arrow-head { 
      width: 8px; 
      height: 8px; 
      border-right: 2px solid var(--gold); 
      border-bottom: 2px solid var(--gold); 
      transform: rotate(45deg); 
      margin-top: -4px; 
      filter: drop-shadow(1px 1px 0px rgba(0, 0, 0, 0.9)) drop-shadow(-1px -1px 0px rgba(0, 0, 0, 0.5));
    }

    /* --- Tablet Responsive Breakpoint (1024px & down) --- */
    @media (max-width: 1024px) {
      .hero-content { 
        padding: 0 8% 8vh;
      }
      .hero-nav {
        left: 8%;
        bottom: 30px;
      }
      .hero-scroll-hint {
        right: 8%;
        bottom: 30px;
      }
    }

    /* --- Mobile Responsive Breakpoint (768px & down) --- */
    @media (max-width: 768px) {
      #hero-section {
        height: 100svh; 
      }
      
      .hero-content {
        align-items: center; 
        text-align: center; 
        padding: 40px 20px 60px !important; 
        justify-content: center !important; 
        background: linear-gradient(
          to top, 
          rgba(0, 0, 0, 0.50) 0%, 
          rgba(0, 0, 0, 0.25) 60%, 
          rgba(0, 0, 0, 0.40) 100%
        ) !important;
      }
      
      .hero-eyebrow { 
        justify-content: center !important; 
        margin-bottom: 0.8rem; 
      }
      
      .hero-eyebrow-line { 
        display: none !important; 
      }
      
      .hero-title { 
        margin-bottom: 0.8rem;
        max-width: 100%;
      }
      
      .hero-desc { 
        margin-bottom: 1.5rem;
        max-width: 100%;
      }
      
      .hero-nav { 
        left: 50%; 
        transform: translateX(-50%); 
        bottom: 25px; 
      } 
      
      .hero-scroll-hint { 
        display: none; 
      }
    }

    /* --- Small Mobile Form Factors (380px & down) --- */
    @media (max-width: 380px) {
      .hero-title {
        font-size: 1.85rem;
      }
      .hero-desc {
        font-size: 1rem;
      }
      .btn-hero {
        padding: 10px 24px;
        font-size: 0.7rem;
      }
    }
  </style>

  <!-- Slide 1: Optimized for LCP -->
  <div class="hero-slide active">
    <div class="hero-slide-bg" 
         style="background-image:url('assets/images/home-page/hero-banner/hero-slider-1.avif');" 
         role="img" 
         aria-label="Bespoke luxury furniture in Dubai UAE"
         fetchpriority="high"></div>
    <div class="hero-content">
      <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Welcome to Theyyampattil</span></div>
      <h2 class="hero-title">Discover the <em>Art</em> of Comfort and Design</h2>
      <p class="hero-desc">Elevating UAE homes with bespoke luxury furniture crafted for those who appreciate the finest details.</p>
      <div class="hero-btns">
        <a href="about/" class="btn-hero">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <!-- Subsequent slides -->
  <div class="hero-slide">
    <div class="hero-slide-bg" style="background-image:url('assets/images/home-page/hero-banner/hero-slider-2.avif');"></div>
    <div class="hero-content">
      <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Modern Elegance</span></div>
      <h2 class="hero-title">Design Your <em>Perfect</em> Space</h2>
      <p class="hero-desc">From modern minimalism to Italian-inspired opulence — every piece tells a story of superior craftsmanship.</p>
      <div class="hero-btns">
        <a href="about/" class="btn-hero">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <div class="hero-slide">
    <div class="hero-slide-bg" style="background-image:url('assets/images/home-page/hero-banner/hero-slider-1.avif');"></div>
    <div class="hero-content">
      <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Legacy of Quality</span></div>
      <h2 class="hero-title">Embrace <em>Comfort.</em> Embrace Life.</h2>
      <p class="hero-desc">26 years of excellence. 3 showrooms. 300+ artisans. One unwavering commitment to quality.</p>
      <div class="hero-btns">
        <a href="about/" class="btn-hero">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <div class="hero-nav">
    <button class="hero-dot active" onclick="goToSlide(0)" aria-label="Slide 1"></button>
    <button class="hero-dot" onclick="goToSlide(1)" aria-label="Slide 2"></button>
    <button class="hero-dot" onclick="goToSlide(2)" aria-label="Slide 3"></button>
  </div>

  <a href="#about-section" class="hero-scroll-hint">
    <span>Scroll</span>
    <div class="modern-arrow-wrap">
      <div class="arrow-line"></div>
      <div class="arrow-head"></div>
    </div>
  </a>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const slides = document.querySelectorAll('.hero-slide');
      const dots = document.querySelectorAll('.hero-dot');
      let current = 0;
      let timer;

      function goToSlide(n){
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (n + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
        resetTimer();
      }

      function resetTimer() {
        clearInterval(timer);
        timer = setInterval(() => {
          requestAnimationFrame(() => goToSlide(current + 1));
        }, 6000);
      }

      window.addEventListener('load', () => {
        const otherImages = [
          'assets/images/home-page/hero-banner/hero-slider-2.avif'
        ];
        otherImages.forEach(src => {
          const img = new Image();
          img.src = src;
        });
      }, {passive: true});

      window.goToSlide = goToSlide;
      resetTimer();
    });
  </script>
</section>
<!-- hero section ends -->
<!-- END: HERO SLIDER -->

<!-- ============================================================
     COMPONENT: ABOUT / LUXURY HOME FURNITURE INTRO
     ============================================================ -->
<!-- about section starts -->
<section id="about-section" style="background:#121212; padding: clamp(24px, 4vw, 46px) 0; overflow:hidden; contain: content;" aria-label="About Theyyampattil">
  <style>

:root {
      --gold: #c9a76a;
      --gold-dark: #b08d55;
      --white: #ffffff;
      --cream-muted: #bcbcbc;
      --glass: rgba(255, 255, 255, 0.03);
      --border: rgba(255, 255, 255, 0.08);
      --font-main: 'Plus Jakarta Sans', sans-serif;
    }

    #about-section {
      font-family: var(--font-main);
      content-visibility: auto;
      contain-intrinsic-size: auto 500px;
    }

    .about-container {
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: clamp(30px, 4vw, 60px);
      align-items: center;
    }

    .about-label {
      display: inline-flex;
      padding: 4px 10px;
      background: var(--glass);
      border-left: 3px solid var(--gold);
      margin-bottom: 14px;
    }

    .about-label span {
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .about-title {
      font-size: clamp(2rem, 4.5vw, 3.2rem);
      font-weight: 800;
      color: var(--white);
      line-height: 1.15;
      margin-bottom: 20px;
      letter-spacing: -0.02em;
    }

    .about-title em {
      color: var(--gold);
      font-style: normal;
    }

    .about-badges {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .about-badge {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
      background: var(--glass);
      border: 1px solid var(--border);
      border-radius: 50px;
      font-size: 0.8rem;
      font-weight: 500;
      color: var(--white);
      transition: border-color 0.3s ease, background 0.3s ease;
    }

    .about-badge:hover {
      border-color: var(--gold);
      background: rgba(201, 167, 106, 0.1);
    }

    .about-badge svg { fill: var(--gold); }

    .about-text {
      font-size: clamp(0.95rem, 1.5vw, 1rem);
      line-height: 1.6;
      color: var(--cream-muted);
      margin-bottom: 14px;
      max-width: 600px;
    }

    .about-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
      margin: 20px 0;
      padding: 15px 0;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
    }

    .about-stat-num {
      font-size: 1.8rem;
      font-weight: 800;
      color: var(--gold);
      margin-bottom: 2px;
    }

    .about-stat-label {
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: var(--cream-muted);
    }

    .about-cta {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: var(--gold);
      color: #000;
      text-decoration: none;
      font-weight: 700;
      font-size: 0.9rem;
      padding: 14px 30px;
      border-radius: 4px;
      transition: transform 0.3s ease, background 0.3s ease;
      will-change: transform;
    }

    .btn-primary:hover {
      background: var(--gold-dark);
      transform: translateY(-3px);
    }

    .about-phone {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      transition: opacity 0.3s;
    }
    
    .about-phone:hover { opacity: 0.8; }

    .about-phone-icon {
      width: 42px;
      height: 42px;
      background: var(--gold);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .about-phone-num {
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--white);
      display: block;
    }

    .about-images {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-img-container {
      position: relative;
      width: 100%;
      max-width: 460px;
      aspect-ratio: 4/5; 
    }

    .about-img-main {
      width: 90%;
      margin-left: auto;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 4/5;
      box-shadow: 0 20px 40px rgba(0,0,0,0.5);
      background: #1a1a1a;
    }

    .about-img-main img, .about-img-small img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
      will-change: transform;
    }

    .about-img-main:hover img, .about-img-small:hover img {
      transform: scale(1.03);
    }

    .about-img-small {
      position: absolute;
      bottom: -15px;
      left: 0;
      width: 50%;
      aspect-ratio: 1/1;
      border-radius: 12px;
      overflow: hidden;
      border: 5px solid #121212;
      box-shadow: 0 15px 30px rgba(0,0,0,0.6);
      z-index: 2;
      background: #1a1a1a;
    }

    .quick-answer-box {
      background: var(--glass);
      border: 1px solid var(--border);
      border-left: 3px solid var(--gold);
      border-radius: 8px;
      padding: 18px 22px;
      margin: 18px 0 24px 0;
    }
    .qa-lead {
      font-size: 1rem;
      line-height: 1.6;
      color: #f2ede4;
      margin-bottom: 10px;
    }
    .qa-lead strong { color: var(--gold); }
    .qa-list { margin: 0; padding: 0; list-style: none; }
    .qa-list li {
      font-size: 0.92rem;
      line-height: 1.55;
      color: var(--cream-muted, #cfcfcf);
      padding-left: 18px;
      position: relative;
      margin-bottom: 6px;
    }
    .qa-list li::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0.55em;
      width: 6px;
      height: 6px;
      background: var(--gold);
      border-radius: 50%;
    }
    .qa-list li strong { color: #ffffff; }

    @media (max-width: 991px) {
      .about-container {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 30px;
      }
      .about-label, .about-badges, .about-stats, .about-cta {
        justify-content: center;
      }
      .about-text { margin: 0 auto 14px auto; }
      .about-images { order: -1; } 
      .quick-answer-box { text-align: left; }
    }

    @media (max-width: 480px) {
      .about-stats { grid-template-columns: 1fr; gap: 10px; }
      .about-cta { flex-direction: column; width: 100%; }
      .btn-primary { width: 100%; text-align: center; }
    }
  </style>

  <div class="about-container">
    <div class="about-content">
      <div class="about-label">
        <span>About Company</span>
      </div>
      
      <h1 class="about-title">Best Luxury Furniture in <em>Dubai</em> for Modern UAE Homes</h1>

      <div class="quick-answer-box" aria-label="Quick answer summary">
        <p class="qa-lead"><strong>In short:</strong> Theyyampattil Furniture is a Dubai-based luxury furniture maker that designs and builds custom sofas, bedroom sets, wardrobes and TV units for homeowners, interior designers and hospitality projects across Dubai, Sharjah and Abu Dhabi.</p>
        <ul class="qa-list">
          <li><strong>Best for:</strong> Villa &amp; apartment owners, renovation projects and interior designers who want bespoke, made-to-measure furniture instead of off-the-shelf pieces.</li>
          <li><strong>Track record:</strong> 26+ years in business, 300+ in-house artisans, 3 UAE showrooms.</li>
          <li><strong>Typical timeline:</strong> Most custom furniture orders are completed in 4–8 weeks depending on scope.</li>
        </ul>
      </div>

      <div class="about-badges">
        <div class="about-badge">
          <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
          Smart &amp; Unique Designs
        </div>
        <div class="about-badge">
          <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138z"/></svg>
          Best Quality Standards
        </div>
      </div>

      <p class="about-text">With over two decades of excellence, Theyyampattil Furniture has become a trusted name in premium custom-made furniture across the UAE. Established in 2000 and built on a foundation of craftsmanship, quality and customer trust, our showrooms and two production facilities bring every design from concept to finished piece under one roof.</p>

      <div class="about-stats">
        <div class="about-stat">
          <div class="about-stat-num">26+</div>
          <div class="about-stat-label">Years Experience</div>
        </div>
        <div class="about-stat">
          <div class="about-stat-num">3</div>
          <div class="about-stat-label">UAE Showrooms</div>
        </div>
        <div class="about-stat">
          <div class="about-stat-num">300+</div>
          <div class="about-stat-label">Professionals</div>
        </div>
      </div>

      <div class="about-cta">
        <a href="about/" class="btn-primary">Read Our Story</a>
        <a href="tel:+971559132200" class="about-phone">
          <div class="about-phone-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#000" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
          </div>
          <div>
            <span style="font-size:0.65rem; color:var(--gold); text-transform:uppercase; letter-spacing:1px; font-weight:bold;">Available 24/7</span>
            <span class="about-phone-num">+971 55 913 2200</span>
          </div>
        </a>
      </div>
    </div>

    <div class="about-images">
      <div class="about-img-container">
          <div class="about-img-main">
            <img src="assets/images/home-page/about-big.avif" 
                 alt="Luxury furniture showroom interior displaying bespoke sofa sets in Dubai" 
                 loading="eager" 
                 width="600" 
                 height="750">
          </div>
          <div class="about-img-small">
            <img src="assets/images/home-page/about-small.avif" 
                 alt="Italian custom furniture craftsmanship detail" 
                 loading="lazy" 
                 width="300" 
                 height="300">
          </div>
      </div>
    </div>
  </div>
</section>
<!-- about section ends -->
<!-- END: ABOUT SECTION -->

<!-- ============================================================
     COMPONENT: ENHANCE YOUR LIVING SPACE (STATIC FADE IMAGES + CONTENT)
     ============================================================ -->

<!-- enhance section starts -->
<section id="enhance-section" style="background:#121212; padding: 30px 0 38px 0; overflow:hidden; contain: content;" aria-label="Enhance Your Living Space">
  <style>
    .enhance-wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      gap: 50px;
      align-items: center;
    }

    .enhance-image-container {
      position: relative;
      border-radius: 0 40px 0 40px; 
      overflow: hidden;
      aspect-ratio: 4/5;
      background: #1a1a1a;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      transform: translateZ(0);
    }

    .enhance-img-animation-trigger {
      width: 100%;
      height: 100%;
      opacity: 0;
      animation: ultraFadeIn 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
      will-change: transform, opacity;
    }

    .enhance-img-main {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .enhance-image-container:hover .enhance-img-main {
      transform: scale(1.05);
    }

    @keyframes ultraFadeIn {
      0% {
        opacity: 0;
        transform: translate3d(0, 20px, 0);
        filter: blur(5px);
      }
      100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        filter: blur(0);
      }
    }

    .enhance-image-container::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(18, 18, 18, 0.3), transparent);
      pointer-events: none;
    }

    .enhance-label {
      display: inline-flex;
      padding: 4px 10px;
      background: rgba(255,255,255,0.03);
      border-left: 3px solid var(--gold);
      margin-bottom: 14px;
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .enhance-title {
      font-size: clamp(1.9rem, 4vw, 2.9rem);
      font-weight: 800;
      color: var(--white);
      line-height: 1.2;
      margin-bottom: 22px;
      letter-spacing: -0.02em;
    }

    .enhance-title em {
      color: var(--gold);
      font-style: normal;
    }

    .enhance-lead {
      font-size: 0.98rem;
      line-height: 1.7;
      color: var(--cream-muted);
      margin-bottom: 24px;
      border-left: 2px solid var(--gold);
      padding-left: 16px;
    }

    .enhance-subsection {
      margin-bottom: 18px;
      transition: transform 0.3s ease;
      will-change: transform;
    }

    .enhance-subsection:hover {
      transform: translate3d(5px, 0, 0);
    }

    .enhance-subsection h3 {
      font-size: 1rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .enhance-subsection h3::before {
      content: '';
      display: inline-block;
      width: 14px;
      height: 2px;
      background: var(--gold);
      transition: width 0.3s ease;
    }

    .enhance-subsection:hover h3::before {
      width: 22px;
    }

    .enhance-subsection p {
      font-size: 0.88rem;
      line-height: 1.6;
      color: var(--cream-muted);
      padding-left: 24px;
      margin: 0;
    }

    .enhance-subsection p strong { color: var(--gold); }

    .enhance-mini-list {
      list-style: none;
      margin: 10px 0 0 0;
      padding-left: 24px;
    }
    .enhance-mini-list li {
      font-size: 0.85rem;
      line-height: 1.55;
      color: var(--cream-muted);
      position: relative;
      padding-left: 16px;
      margin-bottom: 5px;
    }
    .enhance-mini-list li::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0.55em;
      width: 5px;
      height: 5px;
      background: var(--gold);
      border-radius: 50%;
    }

    .enhance-compare-wrap { margin-top: 22px; }
    .enhance-compare-caption {
      font-size: 0.85rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 10px;
    }
    .enhance-compare-table {
      display: flex;
      flex-direction: column;
      border: 1px solid var(--border);
      border-radius: 8px;
      overflow: hidden;
    }
    .ect-row {
      display: grid;
      grid-template-columns: 1.2fr 1fr 1fr;
      gap: 8px;
    }
    .ect-row > span {
      padding: 10px 12px;
      font-size: 0.78rem;
      line-height: 1.4;
      color: var(--cream-muted);
      border-bottom: 1px solid var(--border);
    }
    .ect-row:last-child > span { border-bottom: none; }
    .ect-head { background: var(--glass); }
    .ect-head > span { color: var(--gold); font-weight: 700; text-transform: uppercase; font-size: 0.68rem; letter-spacing: 0.05em; }
    .ect-yes { color: #d8c48f; }
    .ect-no { color: var(--cream-muted); }

    @media (max-width: 480px) {
      .ect-row { grid-template-columns: 1fr 1fr; }
      .ect-row > span:first-child { grid-column: 1 / -1; font-weight: 600; color: #fff; padding-bottom: 2px; border-bottom: none; }
      .ect-row:not(.ect-head) > span:nth-child(2) { border-bottom: none; }
    }

    @media (max-width: 991px) {
      #enhance-section { padding: 30px 0 40px 0 !important; }
      .enhance-wrap { grid-template-columns: 1fr; gap: 30px; }
      .enhance-image-container { aspect-ratio: 16/9; order: -1; border-radius: 0 24px 0 24px; }
    }

    @media (max-width: 600px) {
      #enhance-section { padding: 20px 0 35px 0 !important; }
      .enhance-wrap { padding: 0 16px; gap: 20px; }
      .enhance-image-container { aspect-ratio: 4/3; border-radius: 0 16px 0 16px; }
    }
  </style>

  <div class="enhance-wrap">
    <div class="enhance-image-container">
      <div class="enhance-img-animation-trigger">
        <img src="assets/images/home-page/3rd-section-desktop.avif" 
             alt="Luxury home furniture living space curation in Dubai UAE" 
             class="enhance-img-main"
             decoding="async"
             loading="lazy"
             width="600" 
             height="750">
      </div>
    </div>

    <div class="enhance-content">
      <div class="enhance-label">
        <span>Our Collection</span>
      </div>
      
      <h2 class="enhance-title">Enhance Your Living Space with <em>Style</em> &amp; Customization</h2>
      
      <p class="enhance-lead">At Theyyampattil Furniture, we redefine your home with our curated selection of home furniture in Dubai. From modern and custom pieces to Italian-inspired designs, our collection seamlessly blends with your interior style.</p>

      <div class="enhance-subsection">
        <h3>What Is Custom-Made Furniture and Why Choose It in Dubai?</h3>
        <p><strong>Short answer:</strong> Custom-made furniture is built to your exact measurements, material and style preferences instead of being mass-produced, so it fits your space and taste precisely. Revel in the luxury of customization with our range of custom furniture in Dubai — tailored to your preferences, it adds a personal touch to every corner of your home.</p>
        <ul class="enhance-mini-list">
          <li>Made-to-measure sizing for awkward or unique room layouts.</li>
          <li>Choice of fabric, finish, wood and hardware.</li>
          <li>Ideal for villas, apartments, offices and hospitality fit-outs.</li>
        </ul>
      </div>

      <div class="enhance-subsection">
        <h3>Where Can I Find the Finest Luxury Furniture in Dubai?</h3>
        <p><strong>Short answer:</strong> Theyyampattil Furniture stands among the elite luxury furniture outlets in the UAE, with showrooms in Dubai, Sharjah and Abu Dhabi offering a wide selection of high-quality, Italian-inspired home furniture you can view and order in person.</p>
      </div>

      <div class="enhance-subsection">
        <h3>How Does Theyyampattil Approach Interior Design in Dubai?</h3>
        <p><strong>Short answer:</strong> As a leading luxury furniture store in Dubai, we combine creativity and functionality — our in-house designers plan layout, furniture and finishes together so the result is both beautiful and practical for everyday living.</p>
      </div>
    </div>
  </div>
</section>
<!-- enhance section ends -->
<!-- END: ENHANCE SECTION -->

<!-- ============================================================
     COMPONENT: CTA BANNER (Wall Beauty / Contact)
     ============================================================ -->
<!-- contact cta starts -->
<section id="cta-banner" style="background-color: #121212; padding: 34px 20px;" aria-label="Contact for Wall Beauty Solutions">
  <style>
    :root {
      --gold: #c9a76a;
      --gold-light: #e2c28a;
      --white: #ffffff;
      --glass-bg: rgba(255, 255, 255, 0.03);
      --glass-border: rgba(255, 255, 255, 0.08);
      --accent-glow: rgba(201, 167, 106, 0.15);
    }

    #cta-banner {
      position: relative;
      overflow: hidden;
      contain: content; 
    }

    /* #cta-banner::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 250px;
      height: 250px;
      background: var(--gold);
      filter: blur(100px);
      opacity: 0.12;
      z-index: 0;
      pointer-events: none;
      will-change: filter;
    } */

    .cta-container {
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .cta-glass-card {
      background: var(--glass-bg);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid var(--glass-border);
      border-radius: 20px;
      padding: 35px 50px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
      transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
    }

    .cta-glass-card:hover {
      transform: translateY(-4px);
      border-color: var(--gold);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 15px var(--accent-glow);
    }

    .cta-content { flex: 1; }

    .cta-eyebrow {
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 10px;
      display: inline-block;
      padding-bottom: 4px;
      border-bottom: 1px solid var(--gold);
    }

    .cta-headline {
      font-size: clamp(1.8rem, 4vw, 2.5rem);
      font-weight: 700;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 12px;
      letter-spacing: -0.02em;
    }

    .cta-sub {
      font-size: 0.98rem;
      color: rgba(255, 255, 255, 0.7);
      max-width: 480px;
      line-height: 1.5;
    }

    .cta-actions {
      display: flex;
      flex-direction: column;
      gap: 12px;
      min-width: 250px;
    }

    .cta-phone-btn, .cta-appt-btn {
      min-height: 58px; 
      box-sizing: border-box;
    }

    .cta-phone-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      background: var(--gold);
      color: #111;
      padding: 10px 24px;
      border-radius: 12px;
      text-decoration: none;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    .cta-phone-btn:hover {
      background: var(--gold-light);
      transform: translateY(-2px);
    }

    .cta-phone-btn svg { transition: transform 0.3s ease; flex-shrink: 0; }
    .cta-phone-btn:hover svg { transform: rotate(-15deg) scale(1.1); }

    .cta-phone-btn span { display: flex; flex-direction: column; line-height: 1.2; text-align: left;}
    .cta-phone-btn small { font-size: 0.65rem; font-weight: 800; text-transform: uppercase; opacity: 0.8; }
    .cta-phone-btn strong { font-size: 1.1rem; font-weight: 800; }

    .cta-appt-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--glass-border);
      color: var(--white);
      font-size: 0.85rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      transition: all 0.3s ease;
    }

    .cta-appt-btn:hover {
      background: var(--white);
      color: #111;
    }

    @media (max-width: 1024px) {
      .cta-glass-card { padding: 30px; }
      .cta-actions { min-width: 220px; }
    }

    @media (max-width: 850px) {
      .cta-glass-card {
        flex-direction: column;
        text-align: center;
        padding: 35px 20px;
        gap: 20px;
      }
      .cta-sub { margin: 0 auto; }
      .cta-actions { width: 100%; }
      .cta-phone-btn span { text-align: center; }
    }

    @media (max-width: 480px) {
      #cta-banner { padding: 30px 12px; }
      .cta-glass-card { padding: 25px 15px; border-radius: 16px; }
      .cta-headline { font-size: 1.6rem; }
    }
  </style>

  <div class="cta-container">
    <div class="cta-glass-card">
      <div class="cta-content">
        <span class="cta-eyebrow">Wall Design Solutions</span>
        <h2 class="cta-headline">Elevate Your Space with Wall Beauty</h2>
        <p class="cta-sub">Get a professional cost estimation in minutes. Call us directly or secure your slot online.</p>
      </div>

      <div class="cta-actions">
        <a href="tel:+971559132200" class="cta-phone-btn" aria-label="Call us at +971 55 913 2200">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span>
            <small>Direct Line</small>
            <strong>+971 55 913 2200</strong>
          </span>
        </a>
        <a href="contact/" class="cta-appt-btn">Book Appointment</a>
      </div>
    </div>
  </div>
</section>
<!-- contact cta ends -->
<!-- END: CTA BANNER -->

<!-- ============================================================
     COMPONENT: SERVICES GRID
     ============================================================ -->
<!-- services section starts -->
<section id="services-section" style="background: #121212; padding: clamp(30px, 4.5vw, 60px) 0; overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;" aria-label="Our Services">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;700&display=swap&text=Premium%20Solutions%20Services%20We%27re%20Offering%20Explore%20View%20All');

    :root {
      --gold: #c9a76a;
      --white: #ffffff;
      --card-gap: 20px;
      --font-main: 'Plus Jakarta Sans', sans-serif;
    }

    .services-wrap { 
      max-width: 1440px; 
      margin: 0 auto; 
      padding: 0 20px;
      contain: content;
    }

    .services-header { 
      margin-bottom: clamp(25px, 4vw, 45px); 
      display: flex; 
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .services-label {
      display: inline-flex;
      align-items: center;
      color: var(--gold);
      text-transform: uppercase;
      letter-spacing: 0.25em;
      font-size: 0.75rem;
      font-weight: 500;
      margin-bottom: 14px;
    }

    .services-title {
      color: var(--white);
      font-size: clamp(2rem, 5vw, 3.2rem);
      margin: 0;
      line-height: 1.15;
      font-weight: 700;
      letter-spacing: -0.02em;
    }

    .btn-outline {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      border: 1px solid rgba(201, 167, 106, 0.5);
      color: var(--gold);
      text-decoration: none;
      font-family: var(--font-main);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      border-radius: 100px;
      transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
      position: relative;
      overflow: hidden;
      z-index: 1;
      cursor: pointer;
    }

    .btn-outline.btn-lg {
      padding: 16px 36px;
      font-size: 0.8rem;
    }

    .btn-outline .btn-icon {
      transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .btn-outline:hover {
      color: #000;
      border-color: var(--gold);
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(201, 167, 106, 0.2);
    }

    .btn-outline:hover .btn-icon {
      transform: translateX(4px);
    }

    .btn-outline::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background: var(--gold);
      transition: width 0.4s cubic-bezier(0.23, 1, 0.32, 1);
      z-index: -1;
    }

    .btn-outline:hover::before {
      width: 100%;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: var(--card-gap);
      margin-bottom: 26px;
    }

    .service-card {
      position: relative; 
      overflow: hidden; 
      border-radius: 16px;
      background: #1a1a1a; 
      text-decoration: none; 
      display: block;
      aspect-ratio: 1607 / 1828;
      isolation: isolate;
      transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1);
      will-change: transform; 
    }

    .service-card img {
      width: 100%; 
      height: 100%; 
      object-fit: cover;
      transition: transform 1s ease;
      content-visibility: auto; 
    }

    .service-card:hover img { 
      transform: scale(1.06); 
    }

    .service-card-overlay {
      position: absolute; 
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.3) 25%, transparent 50%);
      z-index: 1;
      pointer-events: none;
    }

    .service-card-content {
      position: absolute; 
      bottom: 0; 
      left: 0; 
      right: 0; 
      padding: 25px 20px;
      z-index: 2;
      display: flex;
      flex-direction: column-reverse;
      gap: 8px;
    }

    .service-card-name {
      font-size: 1.3rem; 
      font-weight: 700; 
      color: var(--white);
      letter-spacing: -0.01em;
      line-height: 1.2;
      margin: 0;
    }

    .service-card-link {
      display: flex; 
      align-items: center; 
      gap: 8px;
      font-size: 0.65rem; 
      font-weight: 800; 
      letter-spacing: 0.2em;
      text-transform: uppercase; 
      color: var(--gold);
      transition: all 0.3s ease;
    }

    .services-footer {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    @media (min-width: 1024px) {
      .service-card-link { transform: translateY(-10px); opacity: 0; }
      .service-card:hover .service-card-link { opacity: 1; transform: translateY(0); }
      .service-card:hover { transform: translateY(-6px); }
    }

    @media (max-width: 1200px) {
      .services-grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 850px) {
      .services-grid { grid-template-columns: repeat(2, 1fr); gap: 15px; }
      .service-card-link { opacity: 1; transform: none; }
    }

    @media (max-width: 480px) {
      .services-grid { grid-template-columns: 1fr; gap: 15px; }
      .services-title { font-size: 2rem; }
      .btn-outline { width: 100%; }
    }
  </style>

  <div class="services-wrap">
    <div class="services-header">
      <div class="services-label">Premium Solutions</div>
      <h2 class="services-title">Services We're <span style="color:var(--gold);">Offering</span></h2>
    </div>

    <div class="services-grid">
      <a href="product/modern-tv-wall-unit-uae/" class="service-card" aria-label="Modern custom TV wall unit solutions in Dubai UAE">
        <img src="assets/images/home-page/tv-wall.avif" alt="Modern bespoke TV wall unit installation in Dubai luxury home" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">TV Wall</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/luxury-bed-panels-uae/" class="service-card" aria-label="Luxury custom bedroom furniture and bed wall panels">
        <img src="assets/images/home-page/bed-room.avif" alt="Luxury master bedroom furniture set with custom padded headboard panel" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Bedroom</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/modern-luxury-kitchen-furniture-uae/" class="service-card" aria-label="Bespoke Italian kitchen furniture design in Dubai">
        <img src="assets/images/home-page/kitchen.avif" alt="Modern Italian style luxury kitchen cabinets design in UAE" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Kitchen</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/walk-in-closets-wardrobes-uae/" class="service-card" aria-label="Custom luxury walk in closets and wardrobe cabinets">
        <img src="assets/images/home-page/closet.avif" alt="Custom luxury walk in closet wardrobe with LED lighting in Dubai" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Closets</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/luxury-wall-panels-uae/" class="service-card" aria-label="3D wall cladding and premium decorative wall panels">
        <img src="assets/images/home-page/wall-panel.avif" alt="Modern 3D acoustic decorative wall cladding panels for luxury interior design" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Wall Panel</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/luxury-living-room-furniture-uae/" class="service-card" aria-label="Luxury living room furniture and entrance welcome units">
        <img src="assets/images/home-page/welcome-unit.avif" alt="Custom welcome foyer console unit and luxury living room furniture" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Welcome Unit</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
      
      <a href="product/luxury-dressing-rooms-uae/" class="service-card" aria-label="Modern luxury dressing rooms and vanity units">
        <img src="assets/images/home-page/dressing-unit.avif" alt="Luxury dressing room vanity table with illuminated custom mirror" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Dressing Unit</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/modern-doors-uae/" class="service-card" aria-label="Custom modern interior doors in UAE">
        <img src="assets/images/home-page/modern-door.avif" alt="Modern custom flush wooden interior door design for luxury home" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Modern Door</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
    </div>

    <div class="services-footer">
      <a href="products/" class="btn-outline btn-lg">
        <span>View All Solutions</span>
        <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13 5L20 12L13 19M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
</section>
<!-- services section ends -->
<!-- END: SERVICES SECTION -->

<!-- ============================================================
     COMPONENT: VALUE PROPOSITIONS (Features / USPs)
     ============================================================ -->
<section id="features-section" style="background:#121212; padding:36px 0; overflow:hidden; contain:content;" aria-label="Our Values">
  <style>
    :root {
      --accent-gold: #c9a76a;
      --glass-bg: rgba(255, 255, 255, 0.03);
      --glass-border: rgba(255, 255, 255, 0.08);
      --text-muted: #a0a0a0;
    }

    .features-wrap {
      max-width: 1300px; margin: 0 auto; padding: 0 20px;
      content-visibility: auto;
      contain-intrinsic-size: auto 400px;
    }

    .features-header { text-align: center; margin-bottom: 26px; }
    
    .features-label {
      text-transform: uppercase; letter-spacing: 0.3em; font-size: 0.7rem;
      color: var(--accent-gold); margin-bottom: 12px; display: block;
    }

    .features-title { 
      font-size: clamp(1.8rem, 4vw, 2.5rem);
      font-weight: 300; color: #fff; letter-spacing: -0.02em; margin: 0;
    }
    .features-title em { font-style: normal; font-weight: 600; color: var(--accent-gold); }

    .features-grid {
      display: grid; 
      grid-template-columns: repeat(5, 1fr); 
      gap: 15px;
      will-change: transform;
    }

    .feature-card {
      position: relative; background: var(--glass-bg);
      border: 1px solid var(--glass-border); border-radius: 16px;
      padding: 30px 15px; text-align: center;
      transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1), background 0.3s ease;
      backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
      cursor: default;
    }

    .feature-card:hover {
      transform: translateY(-6px);
      border-color: rgba(201,167,106,0.4);
      background: rgba(255, 255, 255, 0.05);
    }

    .feature-icon-wrapper {
      width: 44px; height: 44px; margin: 0 auto 15px;
      display: flex; align-items: center; justify-content: center;
    }

    .feature-icon-wrapper svg {
      stroke: var(--accent-gold); stroke-width: 1.5px; fill: none;
      width: 100%; height: 100%;
      transition: transform 0.4s ease;
    }

    .feature-card:hover svg { transform: scale(1.08) rotate(3deg); }

    .feature-name {
      font-size: 0.95rem; font-weight: 600; color: #fff;
      margin-bottom: 8px; letter-spacing: 0.02em;
    }

    .feature-desc {
      font-size: 0.82rem; color: var(--text-muted);
      line-height: 1.5; font-weight: 300;
      text-wrap: balance;
    }

    @media (max-width: 1100px) { .features-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 768px) { .features-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 480px) { 
      .features-grid { grid-template-columns: 1fr; gap: 12px; }
      #features-section { padding: 35px 0; }
    }
  </style>

  <svg style="display: none;">
    <symbol id="icon-star" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></symbol>
    <symbol id="icon-design" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></symbol>
    <symbol id="icon-prod" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></symbol>
    <symbol id="icon-shield" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></symbol>
    <symbol id="icon-tool" viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></symbol>
  </svg>

  <div class="features-wrap">
    <div class="features-header">
      <span class="features-label">Why Choose Us</span>
      <h2 class="features-title">Our Core <em>Values</em></h2>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-star"/></svg></div>
        <div class="feature-name">Customized Elegance</div>
        <div class="feature-desc">We celebrate diversity, equity and inclusion</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-design"/></svg></div>
        <div class="feature-name">Design</div>
        <div class="feature-desc">Made with trust built to last</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-prod"/></svg></div>
        <div class="feature-name">Production</div>
        <div class="feature-desc">Where quality meets innovation</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-shield"/></svg></div>
        <div class="feature-name">Sustainable</div>
        <div class="feature-desc">Luxury with responsibility</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-tool"/></svg></div>
        <div class="feature-name">Installation</div>
        <div class="feature-desc">Your vision our expertise</div>
      </div>
    </div>
  </div>
</section>
<!-- END: FEATURES SECTION -->

<!-- ============================================================
     COMPONENT: MISSION & VISION
     ============================================================ -->
<section id="mission-vision-modern" style="background:#121212; padding: 30px 0 44px 0; overflow: hidden; contain: content;" aria-label="Mission and Vision">
  <style>
    :root {
      --glass-bg: rgba(255, 255, 255, 0.03);
      --glass-border: rgba(201, 167, 106, 0.2);
      --card-radius: 20px;
      --gold-gradient: linear-gradient(135deg, #c9a76a, #f1e0ac);
    }

    .mv-container { 
      max-width: 1200px; 
      margin: 0 auto; 
      padding: 0 20px; 
      position: relative;
    }

    .mv-modern-card {
      display: grid;
      grid-template-columns: 1fr 1px 1fr; 
      background: var(--glass-bg);
      border: 1px solid var(--glass-border);
      border-radius: var(--card-radius);
      position: relative;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      width: 100%;
      transform: translateZ(0);
    }

    .mv-side {
      padding: 40px 35px;
      position: relative;
      transition: background 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .mv-divider {
      background: linear-gradient(to bottom, transparent, var(--glass-border), transparent);
      height: 70%;
      align-self: center;
    }

    .mv-icon-float {
      width: 42px;
      height: 42px;
      margin-bottom: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--gold-gradient);
      border-radius: 10px;
      flex-shrink: 0;
    }

    .mv-icon-float svg {
      fill: #121212;
      width: 20px;
      height: 20px;
    }

    .mv-title-main {
      font-size: clamp(1.4rem, 3.5vw, 2rem);
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 14px;
      letter-spacing: -0.02em;
      line-height: 1.2;
    }

    .mv-description {
      font-size: clamp(0.9rem, 1.8vw, 0.98rem);
      line-height: 1.6;
      color: var(--cream-muted, #e5e5e5);
      font-weight: 300;
      margin: 0;
    }

    @media (min-width: 1025px) {
      .mv-side:hover {
        background: rgba(201, 167, 106, 0.04);
      }
    }

    @media (max-width: 1024px) {
      .mv-side { padding: 30px 25px; }
      .mv-container { padding: 0 20px; }
    }

    @media (max-width: 768px) {
      .mv-modern-card {
        grid-template-columns: 1fr;
        background: transparent;
        border: none;
        box-shadow: none;
        gap: 15px;
      }
      .mv-divider { display: none; }
      .mv-side {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--card-radius);
        padding: 30px 20px;
      }
      #mission-vision-modern { padding: 30px 0 40px 0; }
    }

    @media (max-width: 480px) {
      .mv-container { padding: 0 15px; }
      .mv-side { padding: 25px 16px; }
    }
  </style>

  <div class="mv-container">
    <div class="mv-modern-card">
      <div class="mv-side">
        <div class="mv-icon-float">
          <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
            <path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71L12 2z"/>
          </svg>
        </div>
        <h2 class="mv-title-main">Our Mission</h2>
        <p class="mv-description">
          At Theyyampattil Furniture, our mission is to craft timeless interior solutions that blend elegance, functionality, and precision. We are committed to delivering premium quality, innovative designs, and exceptional craftsmanship that elevate everyday living into a refined experience.
        </p>
      </div>

      <div class="mv-divider"></div>

      <div class="mv-side">
        <div class="mv-icon-float">
          <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
            <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
          </svg>
        </div>
        <h2 class="mv-title-main">Our Vision</h2>
        <p class="mv-description">
          To be recognized as a leading name in luxury interiors across the UAE, setting new standards in design excellence, quality, and customer satisfaction. We envision creating spaces that inspire, impress, and stand the test of time.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- END: MISSION & VISION -->

<!-- ============================================================
     COMPONENT: WHY THEYYAMPATTIL (EXPERIENCE & TRUST)
     ============================================================ -->
<!-- Why Theyyampattil Furniture Section -->
<section class="tp-modern-features">
  <div class="tp-container">
    <h2 class="tp-title">Why <span class="brand-color">Theyyampattil Furniture?</span></h2>
    
    <div class="tp-circle-wrapper">
      <!-- Item 1 -->
      <div class="tp-circle-item">
        <div class="tp-circle-inner">
          <span class="tp-number">25+</span>
          <div class="tp-content">
            <h3>Years Experience</h3>
            <p>in Custom Furniture</p>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="tp-circle-item accent-glow">
        <div class="tp-circle-inner">
          <span class="tp-number">1000+</span>
          <div class="tp-content">
            <h3>Completed Projects</h3>
            <p>Across UAE</p>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="tp-circle-item">
        <div class="tp-circle-inner">
          <div class="tp-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
          </div>
          <div class="tp-content">
            <h3>In-house Design</h3>
            <p>+ Manufacturing</p>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="tp-circle-item accent-glow">
        <div class="tp-circle-inner">
          <div class="tp-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <div class="tp-content">
            <h3>Premium Materials</h3>
            <p>&amp; Finishes</p>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="tp-circle-item">
        <div class="tp-circle-inner">
          <div class="tp-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <div class="tp-content">
            <h3>On-Time Delivery</h3>
            <p>Guarantee</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
:root {
  --tp-primary: #c9a76a; 
  --tp-bg: #121212;
  --tp-card-bg: rgba(255, 255, 255, 0.03);
  --tp-text: #ffffff;
  --tp-text-dim: #999999;
  --tp-border: rgba(212, 175, 55, 0.2);
  --ease-out-expo: cubic-bezier(0.19, 1, 0.22, 1);
}

.tp-modern-features {
  background-color: var(--tp-bg);
  padding: 60px 20px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  overflow: hidden;
  content-visibility: auto;
  contain-intrinsic-size: auto 400px;
}

.tp-container {
  max-width: 1300px;
  margin: 0 auto;
}

.tp-title {
  color: var(--tp-text);
  font-size: clamp(1.8rem, 4.5vw, 3rem);
  font-weight: 300;
  margin-bottom: 32px;
  text-align: center;
  line-height: 1.2;
}

.tp-title .brand-color {
  color: var(--tp-primary);
  font-weight: 600;
}

.tp-circle-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  will-change: transform;
}

.tp-circle-item {
  width: 210px;
  height: 210px;
  position: relative;
  transition: transform 0.4s var(--ease-out-expo);
}

.tp-circle-inner {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 1px solid var(--tp-border);
  background: var(--tp-card-bg);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 16px;
  box-sizing: border-box;
}

.accent-glow .tp-circle-inner {
  box-shadow: 0 0 25px rgba(212, 175, 55, 0.05);
  border-color: rgba(212, 175, 55, 0.4);
}

@media (hover: hover) {
  .tp-circle-item:hover {
    transform: translateY(-8px) scale(1.02);
    z-index: 10;
  }
}

.tp-number {
  font-size: 2rem;
  font-weight: 200;
  color: var(--tp-primary);
  margin-bottom: 4px;
  display: block;
}

.tp-icon {
  width: 36px;
  height: 36px;
  color: var(--tp-primary);
  margin-bottom: 8px;
}

.tp-icon svg {
  width: 100%;
  height: 100%;
}

.tp-content h3 {
  color: var(--tp-text);
  font-size: 0.92rem;
  font-weight: 500;
  margin: 0;
  line-height: 1.2;
}

.tp-content p {
  color: var(--tp-text-dim);
  font-size: 0.78rem;
  margin-top: 4px;
}

@media (min-width: 1024px) {
  .tp-circle-wrapper { gap: 0; }
  .tp-circle-item { margin: 0 -12px; }
  .tp-circle-item:nth-child(even) {
    transform: translateY(40px);
  }
  .tp-circle-item:nth-child(even):hover {
    transform: translateY(32px) scale(1.02);
  }
}

@media (max-width: 768px) {
  .tp-circle-item { 
    width: 200px; 
    height: 200px; 
    flex: 0 0 200px; 
  }
  .tp-title { margin-bottom: 24px; }
  .tp-circle-item:nth-child(even) { transform: none; } 
}

@media (max-width: 480px) {
  .tp-circle-item { 
    width: 175px; 
    height: 175px; 
    flex: 0 0 175px; 
  }
  .tp-number { font-size: 1.75rem; }
  .tp-content h3 { font-size: 0.85rem; }
  .tp-circle-wrapper { gap: 12px; }
}
</style>
<!-- why theyyampattil ends -->

<!-- faq section starts -->
<!-- ============================================================
     COMPONENT: CUSTOM VS READY-MADE COMPARISON + OUR PROCESS
     (Adds structured comparison table + first-hand process/data
     -> targets AEO "structured answer support" and GEO "original
     experience" recommendations)
     ============================================================ -->
<section id="compare-process-section" style="background:#121212; padding: 30px 0 44px 0; font-family:'Plus Jakarta Sans', sans-serif; content-visibility:auto; contain-intrinsic-size: auto 600px;" aria-label="Custom vs ready-made furniture comparison and our process">
  <style>
    #compare-process-section, #compare-process-section *, #compare-process-section *::before, #compare-process-section *::after { box-sizing: border-box; }
    .cp-container { max-width: 1100px; margin: 0 auto; padding: 0 clamp(16px, 4vw, 20px); width: 100%; }
    .cp-header { text-align: center; margin-bottom: 24px; }
    .cp-pre-title { display:block; font-size:0.7rem; font-weight:800; text-transform:uppercase; letter-spacing:0.3em; color:#cfa34e; margin-bottom:10px; opacity:0.9; }
    .cp-main-title { font-size: clamp(1.6rem, 5.5vw, 2.5rem); font-weight:300; color:#fff; letter-spacing:-0.02em; margin:0 0 12px 0; line-height:1.2; overflow-wrap:break-word; }
    .cp-main-title em { font-style:normal; color:#cfa34e; }
    .cp-sub { max-width: 700px; margin: 0 auto; color: rgba(255,255,255,0.78); font-size: clamp(0.9rem, 2.2vw, 0.95rem); line-height:1.65; }

    .cp-grid { display:grid; grid-template-columns: 1fr 1fr; gap: clamp(20px, 4vw, 40px); margin-top: clamp(28px, 4vw, 40px); align-items: start; width: 100%; }

    /* Card that groups the title + table together as one visual unit */
    .cp-table-card { width: 100%; max-width: 100%; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; overflow: hidden; }

    /* Table title: a plain block-level element (not a <caption>) so its
       font-size is fully controlled by us on every breakpoint, instead of
       depending on browser default <caption> rendering. */
    .cp-table-title {
      display: block;
      width: 100%;
      margin: 0;
      padding: 14px 16px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 0.95rem !important;
      line-height: 1.4;
      font-weight: 700;
      color: #fff;
      background: rgba(255,255,255,0.04);
      text-align: left;
      overflow-wrap: break-word;
      word-break: break-word;
    }

    /* Base table: fluid width, never overflows its own column */
    .cp-table-wrap { width: 100%; max-width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; }
    table.cp-table { width: 100%; min-width: 480px; border-collapse: collapse; font-size: 0.88rem; }
    table.cp-table th, table.cp-table td { padding: 12px 16px; text-align:left; border-top:1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.82); vertical-align: top; line-height: 1.5; overflow-wrap: break-word; }
    table.cp-table thead th { background: rgba(207,163,78,0.14); color:#e0b563; font-weight:700; text-transform:uppercase; font-size:0.72rem; letter-spacing:0.05em; }
    table.cp-table tbody th[scope="row"] { color:#fff; font-weight:700; }

    .cp-process { border:1px solid rgba(255,255,255,0.08); border-radius:10px; padding: clamp(18px, 3vw, 22px); background: rgba(255,255,255,0.02); width: 100%; }
    .cp-process h3 { color:#fff; font-size: clamp(1rem, 2.6vw, 1.1rem); font-weight:700; margin-bottom:4px; overflow-wrap:break-word; }
    .cp-process p.cp-process-note { color: rgba(255,255,255,0.68); font-size:0.85rem; line-height:1.55; margin-bottom: 16px; }
    ol.cp-steps { list-style:none; margin:0; padding:0; counter-reset: cp-step; }
    ol.cp-steps li { counter-increment: cp-step; position:relative; padding: 0 0 16px 40px; }
    ol.cp-steps li:last-child { padding-bottom: 0; }
    ol.cp-steps li::before {
      content: counter(cp-step);
      position:absolute; left:0; top:0; width:26px; height:26px;
      border:1px solid #cfa34e; color:#cfa34e; border-radius:50%;
      display:flex; align-items:center; justify-content:center;
      font-size:0.78rem; font-weight:700;
      flex-shrink: 0;
    }
    ol.cp-steps li strong { color:#fff; display:block; font-size:0.92rem; margin-bottom:2px; }
    ol.cp-steps li span { color: rgba(255,255,255,0.72); font-size:0.85rem; line-height:1.55; overflow-wrap: break-word; }

    /* ===== Large desktop (safety cap so the grid never gets absurdly wide) ===== */
    @media (min-width: 1400px) {
      .cp-container { max-width: 1200px; }
    }

    /* ===== Tablet: stack the two columns, table stays a real table (still readable at this width) ===== */
    @media (max-width: 991px) {
      .cp-grid { grid-template-columns: 1fr; gap: 28px; }
    }

    /* ===== Small tablet / large phone ===== */
    @media (max-width: 640px) {
      .cp-header { margin-bottom: 20px; }
      .cp-table-title { font-size: 0.9rem !important; padding: 12px 14px; }
    }

    /* ===== Phone: turn the comparison table into accessible stacked cards instead of
       forcing horizontal scroll on a cramped viewport ===== */
    @media (max-width: 560px) {
      .cp-table-wrap { overflow-x: visible; }
      table.cp-table { min-width: 0; width: 100%; }
      table.cp-table thead {
        position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px;
        overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0;
      }
      table.cp-table, table.cp-table tbody, table.cp-table tr, table.cp-table th, table.cp-table td { display: block; width: 100%; }
      table.cp-table tbody tr {
        border-top: 1px solid rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.015);
      }
      table.cp-table tbody th[scope="row"] {
        background: rgba(207,163,78,0.12);
        color: #e0b563;
        font-size: 0.78rem !important;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        padding: 10px 14px;
        border-top: none;
      }
      table.cp-table tbody td { padding: 10px 14px; border-top: 1px solid rgba(255,255,255,0.07); font-size: 0.85rem !important; }
      table.cp-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.68rem !important;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: rgba(255,255,255,0.45);
        margin-bottom: 4px;
      }
    }

    /* ===== Very small phones ===== */
    @media (max-width: 400px) {
      .cp-main-title { font-size: 1.45rem; }
      .cp-table-title { font-size: 0.85rem !important; padding-left: 12px; padding-right: 12px; }
      table.cp-table tbody th[scope="row"], table.cp-table tbody td { padding-left: 12px; padding-right: 12px; }
    }
  </style>

  <div class="cp-container">
    <header class="cp-header">
      <span class="cp-pre-title">Make an informed choice</span>
      <h2 class="cp-main-title">Custom-Made vs <em>Ready-Made</em> Furniture</h2>
      <p class="cp-sub">A side-by-side breakdown to help Dubai homeowners and interior designers decide which route fits their space, budget, and timeline — based on 26+ years of in-house manufacturing at Theyyampattil Furniture.</p>
    </header>

    <div class="cp-grid">
      <div class="cp-table-card">
        <p id="cp-table-title" class="cp-table-title">Custom-Made vs Ready-Made: Quick Comparison</p>
        <div class="cp-table-wrap">
          <table class="cp-table" aria-labelledby="cp-table-title">
            <thead>
              <tr>
                <th scope="col">Factor</th>
                <th scope="col">Custom-Made (Us)</th>
                <th scope="col">Ready-Made</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Fit &amp; sizing</th>
                <td data-label="Custom-Made (Us)">Made to your room's exact measurements</td>
                <td data-label="Ready-Made">Fixed standard sizes only</td>
              </tr>
              <tr>
                <th scope="row">Materials</th>
                <td data-label="Custom-Made (Us)">Choice of Italian-inspired fabrics, woods &amp; finishes</td>
                <td data-label="Ready-Made">Limited to in-stock options</td>
              </tr>
              <tr>
                <th scope="row">Lead time</th>
                <td data-label="Custom-Made (Us)">Typically 4–8 weeks, built to order</td>
                <td data-label="Ready-Made">Often available same week</td>
              </tr>
              <tr>
                <th scope="row">Design uniqueness</th>
                <td data-label="Custom-Made (Us)">One-of-a-kind, no two pieces alike</td>
                <td data-label="Ready-Made">Mass-produced, widely duplicated</td>
              </tr>
              <tr>
                <th scope="row">Best for</th>
                <td data-label="Custom-Made (Us)">Villas, renovations, hospitality &amp; design projects</td>
                <td data-label="Ready-Made">Quick furnishing on a tight deadline</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="cp-process">
        <h3>How We Build Your Furniture</h3>
        <p class="cp-process-note">Our real, first-hand production process — from our Dubai &amp; Sharjah facilities, run by 300+ in-house artisans.</p>
        <ol class="cp-steps">
          <li><strong>Consultation &amp; measurement</strong><span>Our design team visits or meets you in-showroom to record exact room dimensions and material preferences.</span></li>
          <li><strong>Design &amp; material sign-off</strong><span>You approve a 3D layout and physical material/fabric swatches before production starts.</span></li>
          <li><strong>In-house manufacturing</strong><span>Pieces are hand-built and quality-checked at our own production facilities, not outsourced.</span></li>
          <li><strong>Delivery &amp; installation</strong><span>Our team delivers and installs on-site across Dubai, Sharjah and Abu Dhabi, typically within 4–8 weeks of order confirmation.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- COMPONENT: CUSTOM VS READY-MADE COMPARISON + OUR PROCESS ends -->

<section id="faq-section" style="background: #121212; padding: 30px 0 44px 0; font-family: 'Plus Jakarta Sans', sans-serif; content-visibility: auto; contain-intrinsic-size: auto 400px;">
  <style>
    .faq-container { max-width: 900px; margin: 0 auto; padding: 0 20px; }
    
    .faq-header { text-align: center; margin-bottom: 26px; }
    .faq-pre-title {
      display: block; font-size: 0.7rem; font-weight: 800; text-transform: uppercase;
      letter-spacing: 0.3em; color: #cfa34e; margin-bottom: 10px; opacity: 0.9;
    }
    .faq-main-title {
      font-size: clamp(1.8rem, 4.5vw, 2.5rem); font-weight: 300; color: #ffffff;
      letter-spacing: -0.02em; margin: 0;
    }
    .faq-main-title em { font-style: normal; color: #cfa34e; }

    .faq-wrap { border-top: 1px solid rgba(255,255,255,0.08); }
    
    .faq-item {
      border-bottom: 1px solid rgba(255,255,255,0.08);
      transition: background 0.3s ease;
    }
    .faq-item:hover { background: rgba(255,255,255,0.02); }

    .faq-q {
      width: 100%; background: transparent; border: none; cursor: pointer;
      padding: 22px 10px; display: flex; justify-content: space-between; align-items: center;
      gap: 20px; text-align: left; outline: none;
    }
    
    .faq-q-text {
      font-size: 1rem; font-weight: 500; color: rgba(255,255,255,0.85);
      letter-spacing: -0.01em; transition: color 0.3s ease, transform 0.3s ease;
    }
    
    .faq-q:hover .faq-q-text { color: #ffffff; transform: translate3d(4px, 0, 0); }

    .faq-trigger {
      position: relative; width: 28px; height: 28px; 
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .faq-trigger::before, .faq-trigger::after {
      content: ''; position: absolute; background: #cfa34e; 
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
    }
    .faq-trigger::before { width: 14px; height: 1.5px; }
    .faq-trigger::after { width: 1.5px; height: 14px; }

    .faq-q[aria-expanded="true"] .faq-trigger::after { transform: rotate(90deg); opacity: 0; }
    .faq-q[aria-expanded="true"] .faq-trigger::before { transform: rotate(180deg); }
    .faq-q[aria-expanded="true"] .faq-q-text { color: #cfa34e; }

    .faq-a { 
      max-height: 0; 
      overflow: hidden; 
      transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1); 
      will-change: max-height;
    }
    .faq-a-inner { 
      padding: 0 40px 22px 10px; font-size: 0.92rem; line-height: 1.6; 
      color: rgba(255,255,255,0.65); font-weight: 300; 
    }

    @media (max-width: 768px) {
      .faq-container { padding: 0 16px; }
      .faq-q { padding: 18px 0; }
      .faq-q-text { font-size: 0.95rem; }
      .faq-a-inner { padding-right: 10px; }
    }
  </style>

  <div class="faq-container">
    <header class="faq-header">
      <span class="faq-pre-title">Customer Support</span>
      <h2 class="faq-main-title">Frequently Asked <em>Questions</em></h2>
    </header>

    <div class="faq-wrap">
      <!-- Item 1 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-1" onclick="toggleFaq(this)">
          <span class="faq-q-text">Can I customize the color and fabric of bedroom furniture?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-1" class="faq-a" role="region">
          <div class="faq-a-inner">
            Absolutely! Our bedroom furniture is available in various colors and fabrics, allowing you to tailor it to your preferences.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-2" onclick="toggleFaq(this)">
          <span class="faq-q-text">How long does it take to create custom furniture?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-2" class="faq-a" role="region">
          <div class="faq-a-inner">
            The timeline for custom furniture varies based on the complexity of the design. Our team will provide you with a detailed timeframe during the consultation.
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-3" onclick="toggleFaq(this)">
          <span class="faq-q-text">Do you offer installation services for wall accents?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-3" class="faq-a" role="region">
          <div class="faq-a-inner">
            Yes, we provide professional installation services to showcase your premium wall accents perfectly in your home.
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-4" onclick="toggleFaq(this)">
          <span class="faq-q-text">What sets your luxury home furniture apart from others?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-4" class="faq-a" role="region">
          <div class="faq-a-inner">
            Our furniture stands out due to its uncompromising quality, customization options, and diverse range of exquisite designs that cater to various tastes.
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-5" onclick="toggleFaq(this)">
          <span class="faq-q-text">Is there a showroom where I can view the furniture in person?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-5" class="faq-a" role="region">
          <div class="faq-a-inner">
            Visit our showroom in Abu Dhabi, Dubai, and Sharjah, where you can experience the luxury and craftsmanship of our furniture firsthand.
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleFaq(btn) {
      const isExpanded = btn.getAttribute('aria-expanded') === 'true';
      const allBtns = document.querySelectorAll('.faq-q');
      
      allBtns.forEach(otherBtn => {
        if (otherBtn !== btn && otherBtn.getAttribute('aria-expanded') === 'true') {
          otherBtn.setAttribute('aria-expanded', 'false');
          otherBtn.nextElementSibling.style.maxHeight = '0';
        }
      });

      const content = btn.nextElementSibling;
      if (!isExpanded) {
        btn.setAttribute('aria-expanded', 'true');
        content.style.maxHeight = content.scrollHeight + "px";
      } else {
        btn.setAttribute('aria-expanded', 'false');
        content.style.maxHeight = '0';
      }
    }
  </script>
</section>
<!-- faq section ends -->

<!-- ============================================================
     COMPONENT: TESTIMONIALS
     ============================================================ -->
<section id="testimonials-section" style="background:#121212; padding:36px 0 46px 0;" aria-label="Customer Testimonials">
  <style>
    :root {
      --dark: #121212;
      --dark-3: #181818;
      --border: rgba(255,255,255,0.08);
      --border-hover: #c9a76a;
      --gold: #c9a76a;
      --white: #ffffff;
      --cream-muted: #d1d1d1;
    }

    .testimonials-wrap {
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 40px;
      position: relative;
    }

    .testimonials-header { text-align: center; margin-bottom: 26px; }

    .testimonials-title {
      color: var(--white);
      text-align: center;
      font-size: clamp(1.8rem, 4vw, 2.5rem);
      font-weight: 700;
      line-height: 1.2;
      letter-spacing: -0.02em;
      margin: 0;
    }
    .testimonials-title em { font-style: normal; color: var(--gold); }

    .testimonials-overflow {
      overflow: hidden;
      padding: 10px 0;
      min-height: 250px; 
    }

    .testimonials-track {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      transition: transform 0.55s cubic-bezier(0.4, 0, 0.2, 1);
      transform: translate3d(0, 0, 0);
      will-change: transform;
    }

    .testimonial-card {
      flex: 0 0 100%;
      background: var(--dark-3);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 25px 20px;
      position: relative;
      transition: border-color 0.3s, transform 0.3s;
      display: flex;
      flex-direction: column;
      min-height: 220px;
      box-sizing: border-box;
    }

    @media (min-width: 601px) { .testimonial-card { flex: 0 0 calc(50% - 10px); } }
    @media (min-width: 901px) { .testimonial-card { flex: 0 0 calc(33.333% - 14px); } }

    .testimonial-card:hover { border-color: var(--border-hover); transform: translateY(-4px); }

    .testimonial-card::before {
      content: '\201C';
      position: absolute;
      top: 5px; right: 15px;
      font-size: 4rem; line-height: 1;
      color: rgba(201,167,106,0.1);
      font-family: Georgia, serif;
      pointer-events: none;
    }

    .testimonial-stars { display: flex; gap: 4px; margin-bottom: 12px; }
    .testimonial-stars span { color: var(--gold); font-size: 0.85rem; }

    .testimonial-text {
      font-size: 0.85rem; line-height: 1.5;
      color: var(--cream-muted);
      margin-bottom: 8px;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }

    .testimonial-text.expanded { -webkit-line-clamp: unset; display: block; margin-bottom: 15px; }

    .read-more-btn {
      background: none; border: none; color: var(--gold);
      font-size: 0.7rem; font-weight: 700; cursor: pointer;
      padding: 0; margin-bottom: 12px; text-transform: uppercase;
      letter-spacing: 1px; display: none; text-align: left;
    }

    .testimonial-author {
      display: flex; align-items: center; gap: 10px; margin-top: auto;
      padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.05);
    }

    .testimonial-avatar {
      width: 36px; height: 36px; border-radius: 50%; overflow: hidden;
      border: 1px solid var(--gold); flex-shrink: 0;
      background: #222;
    }
    .testimonial-avatar img { width: 100%; height: 100%; object-fit: cover; }
    .testimonial-name { font-size: 0.8rem; font-weight: 700; color: var(--white); }

    .tst-arrow {
      position: absolute; top: 50%; transform: translateY(-50%);
      background: var(--dark-3); border: 1px solid var(--border);
      color: var(--white); width: 36px; height: 36px; border-radius: 50%;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      transition: all 0.3s; z-index: 10;
    }
    .tst-arrow:hover { background: var(--gold); border-color: var(--gold); color: var(--dark); }
    .tst-arrow.prev { left: 4px; }
    .tst-arrow.next { right: 4px; }

    @media (min-width: 1360px) {
      .tst-arrow.prev { left: -45px; }
      .tst-arrow.next { right: -45px; }
    }

    .testimonials-nav { display: flex; justify-content: center; gap: 8px; margin-top: 20px; }
    .tst-dot {
      width: 18px; height: 2px; background: rgba(255,255,255,0.15);
      border: none; cursor: pointer; transition: all 0.3s; padding: 0;
    }
    .tst-dot.active { background: var(--gold); width: 30px; }

    @media (max-width: 900px) { .testimonials-wrap { padding: 0 40px; } }
    @media (max-width: 600px) {
      .testimonials-wrap { padding: 0 35px; }
      .tst-arrow { width: 30px; height: 30px; }
    }
  </style>

  <div class="testimonials-wrap">
    <div class="testimonials-header">
      <h2 class="testimonials-title">What Our <em>Customers</em> Say</h2>
    </div>

    <button class="tst-arrow prev" id="tstPrev" aria-label="Previous Page">&#10094;</button>
    <button class="tst-arrow next" id="tstNext" aria-label="Next Page">&#10095;</button>

    <div class="testimonials-overflow" id="testimonialsOverflow">
      <div class="testimonials-track" id="testimonialsTrack">
        
        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"The designs are great and they are professional in making the best finishing. I really like their work and commitment to every project."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar">
              <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Mana Al Doubi customer review profile" width="36" height="36" loading="lazy">
            </div>
            <div class="testimonial-name">Mana Al Doubi</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"I highly recommend them for Home Decorating. Product quality is outstanding and the staff is highly skilled. Many thanks to Mr. Faisal for his help."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Salwa Darwish customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">Salwa Darwish</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"They converted my home from A to Z with incredible care. A special thank you to Abdul Raouf for ensuring every detail of our vision was perfect."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Rashed Moh customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">Rashed Moh</div>
          </div>
        </div>
        
       <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"Very good experience; they deliver exactly what they promise. The photos they showed me were an exact match to the high-quality execution."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Tariq Selah customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">Tariq Selah</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"One of the strongest companies for high-quality bedroom interiors. Their team is highly professional, genuinely kind, and a pleasure to work with."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Aisha Ahmed customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">Aisha Ahmed</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"Great experience with their store. They made my dressing table and wardrobe with excellent quality and professional handling from start to finish."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="asma alowais customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">asma alowais</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"One of the best companies for design and execution. Special thanks to Engineer Junair for his exceptional skills and excellent customer service."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Ali AL Nuaimi customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">Ali AL Nuaimi</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"Incredible work and creativity. A special thank you to Midhun, whose attention to detail and commitment made the entire experience truly exceptional."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Mahmood Al Nasser customer review profile" width="36" height="36" loading="lazy"></div>
            <div class="testimonial-name">Mahmood Al Nasser</div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="testimonials-nav" id="tstDots"></div>
  </div>

  <script>
    function initTestimonialSlider() {
      const track = document.getElementById('testimonialsTrack');
      const prevBtn = document.getElementById('tstPrev');
      const nextBtn = document.getElementById('tstNext');
      const dotsContainer = document.getElementById('tstDots');
      const cards = document.querySelectorAll('.testimonial-card');
      let currentIndex = 0;

      function getVisibleCards() {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 900) return 2;
        return 3;
      }

      function updateSlider() {
        const visibleCards = getVisibleCards();
        const maxIndex = Math.max(0, cards.length - visibleCards);
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        const cardWidth = cards[0].getBoundingClientRect().width;
        const gap = 20;
        const moveAmount = (cardWidth + gap) * currentIndex;
        
        track.style.transform = `translate3d(-${moveAmount}px, 0, 0)`;

        dotsContainer.innerHTML = '';
        const totalDots = maxIndex + 1;
        for (let i = 0; i < totalDots; i++) {
          const dot = document.createElement('button');
          dot.className = `tst-dot ${i === currentIndex ? 'active' : ''}`;
          dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
          dot.addEventListener('click', () => {
            currentIndex = i;
            updateSlider();
          });
          dotsContainer.appendChild(dot);
        }
      }

      prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
          currentIndex--;
        } else {
          currentIndex = Math.max(0, cards.length - getVisibleCards());
        }
        updateSlider();
      });

      nextBtn.addEventListener('click', () => {
        const maxIndex = Math.max(0, cards.length - getVisibleCards());
        if (currentIndex < maxIndex) {
          currentIndex++;
        } else {
          currentIndex = 0;
        }
        updateSlider();
      });

      window.addEventListener('resize', updateSlider, { passive: true });
      updateSlider();
    }

    // Defer slider init until the testimonials section is actually near the viewport,
    // instead of running it eagerly during initial page load (reduces Total Blocking Time).
    document.addEventListener('DOMContentLoaded', () => {
      const section = document.getElementById('testimonials-section');
      if (!section) return;

      if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              initTestimonialSlider();
              obs.disconnect();
            }
          });
        }, { rootMargin: '300px 0px' });
        observer.observe(section);
      } else {
        initTestimonialSlider();
      }
    });
  </script>
</section>
<!-- testimonials section ends -->

<!-- Fixed Floating WhatsApp / Call Buttons Include -->
<?php include SITE_ROOT . '/includes/fixed-floating-buttons.php'; ?>
<?php include SITE_ROOT . '/includes/home-popup.php'; ?>
<!-- Footer Include -->
<?php include SITE_ROOT . '/includes/footer.php'; ?>

</body>
</html>