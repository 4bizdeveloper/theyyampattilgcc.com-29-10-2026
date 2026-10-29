<?php
// 1. Build canonical URLs on the preferred HTTPS host and exclude query parameters.
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$canonical_url = 'https://theyyampattilgcc.com' . (strpos($request_path, '/') === 0 ? $request_path : '/' . $request_path);

// 2. Dynamic Meta Info (Page-specific variables take priority; global defaults restricted to homepage)
$meta_title = isset($page_title) ? $page_title : null;
$meta_desc  = isset($page_description) ? $page_description : null;

// 3. Image Paths Configuration (Allows overriding per page, falls back gracefully)
$social_base_url = "https://theyyampattilgcc.com/";
$default_hero_img = $social_base_url . "assets/images/home-page/hero-banner/hero-slider-1.avif";
$social_img = isset($page_image) ? $page_image : $default_hero_img;

// Detect if current page is the root homepage
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$is_homepage = ($request_uri == '/' || $request_uri == '/index.php' || $request_uri == '');

// Apply homepage defaults only when on the homepage and variables are unset
if ($is_homepage) {
    if (!$meta_title) $meta_title = "Best Luxury Furniture in Dubai | Theyyampattil Furniture";
    if (!$meta_desc)  $meta_desc  = "Theyyampattil Furniture offers premium Italian luxury furniture in Dubai. Explore our bespoke collections of sofas, bedroom sets, and modern TV wall units.";
}

// Flag to prevent duplicating <title>, <meta description>, and <link rel="canonical"> if already set on the page
$disable_default_head_tags = isset($disable_head_tags) && $disable_head_tags === true;
?>

<?php if (!$disable_default_head_tags): ?>
<!-- Essential SEO Tags -->
<?php if ($meta_title): ?><title><?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?></title><?php endif; ?>
<?php if ($meta_desc): ?><meta name="description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>"><?php endif; ?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<?php if ($meta_title): ?><meta property="og:title" content="<?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?>"><?php endif; ?>
<?php if ($meta_desc): ?><meta property="og:description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>"><?php endif; ?>
<meta property="og:image" content="<?php echo htmlspecialchars($social_img, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:image:secure_url" content="<?php echo htmlspecialchars($social_img, ENT_QUOTES, 'UTF-8'); ?>">
<meta property="og:site_name" content="Theyyampattil Furniture">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<?php if ($meta_title): ?><meta name="twitter:title" content="<?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?>"><?php endif; ?>
<?php if ($meta_desc): ?><meta name="twitter:description" content="<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>"><?php endif; ?>
<meta name="twitter:image" content="<?php echo htmlspecialchars($social_img, ENT_QUOTES, 'UTF-8'); ?>">

<!-- Structured Data (JSON-LD) - Fixed Schema Graph & Validated References -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "FurnitureStore",
      "@id": "https://theyyampattilgcc.com/#organization",
      "name": "Theyyampattil Furniture",
      "url": "https://theyyampattilgcc.com/",
      "logo": "https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png",
      "image": "<?php echo htmlspecialchars($default_hero_img, ENT_QUOTES, 'UTF-8'); ?>",
      "description": "Premium luxury furniture solutions, custom closets, wardrobes, and interior design wall cladding panels in Dubai, Sharjah and Abu Dhabi.",
      "telephone": "+971559132200",
      "areaServed": {
        "@type": "Country",
        "name": "United Arab Emirates"
      },
      "sameAs": [
        "https://www.facebook.com/theyyampattilgcc",
        "https://www.instagram.com/theyyampattilgcc"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://theyyampattilgcc.com/#website",
      "url": "https://theyyampattilgcc.com/",
      "name": "Theyyampattil Furniture",
      "inLanguage": "en-AE",
      "publisher": {
        "@id": "https://theyyampattilgcc.com/#organization"
      }
    },
    {
      "@type": "WebPage",
      "@id": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>#webpage",
      "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
      <?php if ($meta_title): ?>"name": "<?php echo htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8'); ?>",<?php endif; ?>
      <?php if ($meta_desc): ?>"description": "<?php echo htmlspecialchars($meta_desc, ENT_QUOTES, 'UTF-8'); ?>",<?php endif; ?>
      "isPartOf": {
        "@id": "https://theyyampattilgcc.com/#website"
      }
    }
  ]
}
</script>