<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /service-area/deleon-springs/index.php — Service Area page
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 3B — DeLeon Springs, Volusia County (Premium)
 *
 * Signature technique: rural-acreage alternating "zigzag" walking
 * through big-tree removal, land/lot clearing, and skid-steer/grapple
 * work on large rural lots — plus an agricultural land-management
 * angle unique to DeLeon Springs. All values from tokens.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'service-area';

// ---- SEO (V2.1 trade noun + V2.2 CTR meta) ----
$pageTitle       = "Tree Service in DeLeon Springs, FL | God's Country Tree";
$pageDescription = 'Tree service in DeLeon Springs, FL for big-acreage lots, land clearing & skid-steer/grapple work. Licensed & insured, 12+ years. Get your free estimate in 24 hours.';
$canonicalUrl    = $siteUrl . '/service-area/deleon-springs/';

// ---- Images (image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062731501-oi9ekh-35294961_2071235779763690_210454243612557312_n.webp';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$zigPhotos = [
    'slab' => [
        'src' => $imgBase . '1784062755583-5oqzq0-161812504_2868738946680032_6599345448414427184_n.webp',
        'alt' => 'God\'s Country crew member holding a huge cross-cut trunk slab after a large-tree removal near DeLeon Springs, FL',
    ],
    'boomlift' => [
        'src' => $imgBase . '1784062737583-f7n0kp-37107879_2101564903397444_7138537925750292480_n.webp',
        'alt' => 'Chip truck and boom lift removing a tall double-trunk tree on a rural DeLeon Springs, FL homestead',
    ],
];

// ---- Zigzag rows (signature section) ----
$zigRows = [
    [
        'photo'   => 'slab',
        'eyebrow' => 'Big-Tree Removal',
        'title'   => 'Old-growth pines and live oaks on the homestead',
        'body'    => 'The large-acreage lots around DeLeon Springs grow trees to match — 80-foot slash pines, spreading live oaks, and hardwood-hammock giants that a homeowner cannot safely tackle alone. We section them down on ropes, buck the trunks, and load the wood with a grapple so nothing free-falls near the barn, the well house, or the pasture fence.',
    ],
    [
        'photo'   => 'boomlift',
        'eyebrow' => 'Land & Lot Clearing',
        'title'   => 'Clearing rural lots and building pads north of DeLand',
        'body'    => 'Buying raw acreage off US-17 or expanding a homestead usually means clearing a tangle of scrub oak, pine, and palmetto before anything else happens. We drop the trees, chip the brush, and open up building pads, pasture, and access lanes — turning an overgrown DeLeon Springs lot into ground you can actually use.',
    ],
    [
        'photo'   => 'slab',
        'eyebrow' => 'Skid-Steer & Grapple Work',
        'title'   => 'Machine muscle for large rural DeLeon Springs jobs',
        'body'    => 'Big lots need big equipment. Our skid steer and grapple loader move fallen trunks, haul stacked debris out to the road, grind stumps below grade, and grade the churned-up ground behind them. It is the difference between a tree merely being down and a rural DeLeon Springs property left clean, level, and ready for the next thing.',
    ],
];

// ---- Why-choose cards ----
$whyCards = [
    ['icon' => 'ruler',        'title' => 'Built for acreage',       'text' => 'Skid steer, grapple loader, boom lift, and chipper on one truck — the equipment that big DeLeon Springs lots and land-clearing jobs actually require, not a pickup and a chainsaw.'],
    ['icon' => 'shield-check', 'title' => 'Licensed & insured',      'text' => 'Proof of insurance available before a saw starts — the paperwork the storm-chasing crews that roll through Volusia County after every hurricane can never show a DeLeon Springs landowner.'],
    ['icon' => 'sprout',       'title' => 'Land-management minded',  'text' => 'Fern farms, pastures, and hardwood hammock make DeLeon Springs different. We clear what needs clearing and leave the healthy canopy that shades the homestead standing.'],
];

// ---- FAQs (local, 40-80 words) ----
$faqs = [
    [
        'q' => 'Do you handle large-acreage tree removal and land clearing in DeLeon Springs?',
        'a' => "Yes — big-acreage work is one of the main reasons DeLeon Springs landowners call God's Country Tree Service. From single old-growth pines to full lot and pasture clearing off US-17, we bring the skid steer, grapple loader, and chipper the job needs, drop and buck the trees, and haul every bit of debris out. You get a free written estimate within 24 hours.",
    ],
    [
        'q' => 'How far is DeLeon Springs from your DeLand base, and do you charge extra to come out?',
        'a' => "DeLeon Springs sits about seven miles north of our DeLand home base along US-17 — well inside the roughly 50-mile radius we cover across Volusia County. It is a short run for our crew, so a DeLeon Springs address is treated the same as a DeLand one. Your free estimate spells out the all-in price with no surprise travel add-on.",
    ],
    [
        'q' => 'Do I need a permit to clear or remove trees on rural DeLeon Springs property?',
        'a' => "It depends. Because DeLeon Springs is unincorporated, tree work falls under Volusia County rules, and certain protected species or larger clearings can require a permit — especially near the Lake Woodruff refuge or wetland edges. We flag permit questions during your free estimate so you know what applies to your acreage before any cutting starts.",
    ],
];

// ---- Schema ----
$areaServiceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'name'        => 'Tree Service in DeLeon Springs, FL',
    'serviceType' => 'Tree Service',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'url'         => $canonicalUrl,
    'areaServed'  => [
        '@type'            => 'City',
        'name'             => 'DeLeon Springs',
        'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Volusia County, Florida'],
    ],
];

$speakableSchema = [
    '@context'  => 'https://schema.org',
    '@type'     => 'WebPage',
    '@id'       => $canonicalUrl . '#webpage',
    'url'       => $canonicalUrl,
    'name'      => $pageTitle,
    'speakable' => [
        '@type'       => 'SpeakableSpecification',
        'cssSelector' => ['.hero-answer', '.answer-block', '.faq-answer'],
    ],
    'about'     => ['@id' => $siteUrl . '/#organization'],
];

$pageSchema = generateBreadcrumbSchema([
        ['name' => 'Home',         'url' => '/'],
        ['name' => 'Service Area', 'url' => '/service-area/'],
        ['name' => 'DeLeon Springs'],
    ])
    . generateFAQSchema($faqs)
    . '<script type="application/ld+json">' . json_encode($areaServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   DeLeon Springs service area — page-specific styles (dls-)
   Techniques: layered hero (C1.4), numbered watermarks (C5.1),
   rural-acreage zigzag signature, editorial drop cap (C5.4),
   tinted why-cards, 2 SVG dividers (diagonal + torn), image
   hover-zoom, radial-glow closing CTA (C9.2).
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---- C1.4 Layered hero: photo + gradient + noise ---- */
.dls-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.dls-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 70%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.dls-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.055;
  pointer-events: none;
}
.dls-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.dls-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.dls-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.dls-breadcrumb a:hover { color: var(--color-accent); }
.dls-breadcrumb .dls-sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.dls-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 14%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 38%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.dls-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.2vw, 3.6rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 22ch;
  margin-bottom: var(--space-5);
}
.dls-hero h1 .text-accent { color: var(--color-accent); }
.dls-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.dls-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.dls-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.dls-hero .hero-trust-item svg,
.dls-hero .hero-trust-item i { width: 16px; height: 16px; color: var(--color-accent); }

/* ---- Numbered section watermark (C5.1) ---- */
.dls-numbered { position: relative; }
.dls-numbered::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-4);
  right: clamp(1rem, 4vw, 3rem);
  font-family: var(--font-heading);
  font-size: clamp(5rem, 12vw, 9rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 6%, transparent);
  pointer-events: none;
  z-index: 0;
}
.dls-numbered > .container { position: relative; z-index: 1; }

/* ---- Shared section title block ---- */
.dls-title { text-align: center; margin-bottom: var(--space-12); }
.dls-title h2 {
  margin-bottom: var(--space-4);
  max-width: 30ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.dls-title .answer-block {
  max-width: 68ch;
  margin: 0 auto var(--space-3);
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.dls-eyebrow {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- AEO answer section ---- */
.dls-aeo { background: var(--color-white); }
.dls-aeo .answer-block {
  max-width: 70ch;
  margin: 0 auto;
  font-size: var(--font-size-lg);
  color: var(--color-text);
  padding: var(--space-8);
  background: var(--color-light);
  border-left: 4px solid var(--color-accent);
  border-radius: var(--radius-md);
  text-wrap: pretty;
}

/* ---- Local prose (drop cap) ---- */
.dls-prose { background: var(--color-cream); }
.dls-prose .dls-prose-wrap {
  max-width: 68ch;
  margin: 0 auto;
}
.dls-prose h2 { text-wrap: balance; margin-bottom: var(--space-6); }
.dls-prose p {
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.75;
  margin-bottom: var(--space-5);
  text-wrap: pretty;
}
.dls-prose p:last-child { margin-bottom: 0; }
.dls-drop-cap::first-letter {
  float: left;
  font-family: var(--font-heading);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.82;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.dls-prose strong { color: var(--color-primary-dark); font-weight: 700; }

/* ---- Signature: rural-acreage zigzag ---- */
.dls-zig { background: var(--color-white); }
.dls-zig-rows {
  display: flex;
  flex-direction: column;
  gap: clamp(3rem, 7vw, 6rem);
  margin-top: var(--space-12);
}
.dls-zig-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: center;
}
.dls-zig-row:nth-child(even) .dls-zig-media { order: 2; }
.dls-zig-media {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
}
.dls-zig-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.dls-zig-media:hover img { transform: scale(1.05); }
.dls-zig-media::after {
  content: '';
  position: absolute;
  inset: 0;
  border: 1px solid color-mix(in srgb, var(--color-white) 22%, transparent);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.dls-zig-badge {
  position: absolute;
  left: var(--space-4);
  bottom: var(--space-4);
  z-index: 1;
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-dark) 72%, transparent);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  color: var(--color-white);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-4);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}
.dls-zig-badge i, .dls-zig-badge svg { width: 15px; height: 15px; color: var(--color-accent); }
.dls-zig-copy .dls-eyebrow { color: var(--color-accent); }
.dls-zig-copy h3 {
  font-size: clamp(1.4rem, 2.6vw, 1.9rem);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.dls-zig-copy p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin: 0;
  text-wrap: pretty;
}
.dls-zig-copy .dls-zig-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 800;
  color: color-mix(in srgb, var(--color-primary) 45%, transparent);
  letter-spacing: 2px;
  display: block;
  margin-bottom: var(--space-2);
}

/* ---- Services section ---- */
.dls-services { background: var(--color-light); }
.dls-services .answer-block {
  max-width: 68ch;
  margin: 0 auto var(--space-3);
  font-size: var(--font-size-lg);
  color: var(--color-text);
}

/* ---- Why-choose tinted cards ---- */
.dls-why { background: var(--color-cream); }
.dls-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-12);
}
.dls-why-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dls-why-card.card-tint-1 { background: var(--color-card-tint-1); }
.dls-why-card.card-tint-2 { background: var(--color-card-tint-2); }
.dls-why-card.card-tint-3 { background: var(--color-card-tint-3); }
.dls-why-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
.dls-why-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-5);
}
.dls-why-icon i, .dls-why-icon svg { width: 26px; height: 26px; }
.dls-why-card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary-dark);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.dls-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  margin: 0;
  line-height: 1.65;
}

/* ---- FAQ ---- */
.dls-faq { background: var(--color-white); }
.dls-faq-list {
  max-width: 820px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.dls-faq-item {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-7);
  border-left: 4px solid var(--color-primary);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.dls-faq-item:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
.dls-faq-item h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary-dark);
  margin-bottom: var(--space-3);
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  text-wrap: balance;
}
.dls-faq-item h3 i, .dls-faq-item h3 svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 3px;
}
.dls-faq-answer {
  color: var(--color-gray-dark);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin: 0;
}

/* ---- C9.2 Closing CTA with radial glow ---- */
.dls-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.dls-cta::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  height: 160%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 48%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.dls-cta::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n2'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n2)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.04;
  pointer-events: none;
}
.dls-cta .container { position: relative; z-index: 1; }
.dls-cta .dls-eyebrow { color: var(--color-accent); }
.dls-cta h2 { color: var(--color-white); max-width: 24ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.dls-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.dls-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.dls-last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 distinct styles: diagonal + torn) ---- */
.dls-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 64px);
  position: relative;
  z-index: 2;
}
.dls-divider svg { display: block; width: 100%; height: 100%; }
.dls-divider--flush { margin-bottom: -1px; }

/* ---- Reveal stagger delays (global reveal system drives the rest) ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .dls-why-grid { grid-template-columns: 1fr; max-width: 560px; margin-left: auto; margin-right: auto; }
  .dls-zig-row { grid-template-columns: 1fr; gap: var(--space-8); }
  .dls-zig-row:nth-child(even) .dls-zig-media { order: 0; }
  .dls-zig-media { max-width: 620px; margin: 0 auto; width: 100%; }
}
@media (max-width: 768px) {
  .dls-hero { min-height: auto; }
  .dls-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .dls-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .dls-aeo .answer-block { padding: var(--space-6); }
  .dls-faq-item { padding: var(--space-5) var(--space-5); }
}
@media (max-width: 600px) {
  .dls-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .dls-cta .hero-actions { flex-direction: column; align-items: stretch; }
  .dls-drop-cap::first-letter { font-size: 3.4rem; }
}
</style>

<!-- ============ HERO (C1.4 layered) ============ -->
<section class="dls-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service in DeLeon Springs, Florida">
  <div class="container">
    <nav class="dls-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="dls-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="dls-sep" aria-hidden="true">/</span>
      <span aria-current="page">DeLeon Springs</span>
    </nav>

    <span class="dls-hero-eyebrow">Service Area &middot; DeLeon Springs, FL</span>

    <h1>Tree Service in DeLeon Springs, FL &mdash; <span class="text-accent">Big-Acreage &amp; Springs-Country Trees</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving DeLeon Springs and the rural communities north along US-17 within about 50 miles across Volusia County since <?php echo e($yearEstablished); ?>. Big-tree removal, land and lot clearing, and skid-steer/grapple work &mdash; with free written estimates in 24 hours.</p>

    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">See All Services</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span class="hero-trust-item"><i data-lucide="tractor"></i> Skid-Steer &amp; Grapple Service</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="dls-numbered dls-aeo section" data-num="01" aria-label="Tree clearing on large acreage in DeLeon Springs">
  <div class="container">
    <div class="dls-title" data-animate>
      <span class="dls-eyebrow">Straight Answer</span>
      <h2>Do you clear trees on large acreage and rural lots in DeLeon Springs, FL?</h2>
    </div>
    <p class="answer-block" data-animate><?php echo e($siteName); ?> clears trees on large acreage and rural lots throughout DeLeon Springs every week. From single old-growth pines beside a homestead to full lot and pasture clearing off US-17, our crew brings the skid steer, grapple loader, and chipper the job needs, drops and bucks the trees, grinds stumps, and hauls the debris away &mdash; all quoted in a free written estimate within 24 hours.</p>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="dls-divider dls-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,10 1200,60"/></svg>
</div>

<!-- ============ LOCAL PROSE — 02 ============ -->
<section class="dls-numbered dls-prose section" data-num="02" aria-label="About DeLeon Springs, Florida">
  <div class="container">
    <div class="dls-prose-wrap">
      <span class="dls-eyebrow">Springs Country</span>
      <h2 data-animate>Tree work built for the DeLeon Springs way of living</h2>
      <p class="dls-drop-cap" data-animate>DeLeon Springs is an unincorporated Volusia County community strung along US-17 just north of DeLand, and it does not look or grow like a subdivision. This is <strong>springs country</strong> &mdash; the natural spring at De Leon Springs State Park feeds the Old Spanish Sugar Mill Restaurant, where guests still griddle their own pancakes at the table. The land around it is rural and agricultural, and the trees follow suit: tall slash pines, spreading live oaks, and dense hardwood hammock on lots measured in acres, not feet.</p>
      <p data-animate>That rural character shapes the tree work. Fern farms, cattle pastures, and large-acreage homesteads sit next to the Lake Woodruff National Wildlife Refuge, and Spring Garden Ranch &mdash; a premier Standardbred harness-racing winter training facility &mdash; keeps the area distinctly agricultural. Trees here are not decorative shade for a quarter-acre yard; they are old, big, and often standing over a barn, a well house, or a training track. Taking one down safely takes ropes, a boom lift, and machine muscle, not a homeowner with a rented saw.</p>
      <p data-animate>It also means the jobs run bigger. A DeLeon Springs call is as likely to be clearing a raw lot for a building pad, opening pasture, or thinning a hammock along a wetland edge as it is removing one hazard tree. That is why our crew shows up with a skid steer and grapple loader as standard equipment &mdash; the same gear that clears acreage is what turns a downed tree into a clean, hauled-away pile the same day.</p>
      <p data-animate>If you have been searching for <strong>tree service near me in DeLeon Springs</strong>, the short version is this: <?php echo e($siteName); ?> is only about seven miles up the road in DeLand, we have worked this stretch of Volusia County since <?php echo e($yearEstablished); ?>, and we bring the right machines the first time. DeLeon Springs land deserves a crew that respects both the big trees worth keeping and the ones that have to go.</p>
    </div>
  </div>
</section>

<!-- Divider: torn edge (cream → white) -->
<div class="dls-divider dls-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L140,33 L220,44 L300,30 L390,46 L470,36 L570,44 L670,28 L770,41 L870,33 L960,44 L1060,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ SIGNATURE ZIGZAG — 03 ============ -->
<section class="dls-numbered dls-zig section" data-num="03" aria-label="Big-tree, land-clearing, and skid-steer work in DeLeon Springs">
  <div class="container">
    <div class="dls-title" data-animate>
      <span class="dls-eyebrow">Rural-Acreage Work</span>
      <h2>What large-property tree work looks like in DeLeon Springs</h2>
      <p class="answer-block"><?php echo e($siteName); ?> handles the three jobs DeLeon Springs acreage asks for most &mdash; taking down big old-growth trees, clearing rural lots and pasture, and running the skid-steer and grapple work that leaves the ground clean behind us.</p>
    </div>

    <div class="dls-zig-rows">
      <?php foreach ($zigRows as $i => $row): $p = $zigPhotos[$row['photo']]; ?>
      <div class="dls-zig-row" data-animate>
        <figure class="dls-zig-media">
          <span class="dls-zig-badge"><i data-lucide="map-pin"></i> DeLeon Springs, FL</span>
          <img src="<?php echo e($p['src']); ?>" alt="<?php echo e($p['alt']); ?>" width="800" height="600" loading="lazy">
        </figure>
        <div class="dls-zig-copy">
          <span class="dls-zig-num">0<?php echo $i + 1; ?> &mdash; of 03</span>
          <span class="dls-eyebrow"><?php echo e($row['eyebrow']); ?></span>
          <h3><?php echo e($row['title']); ?></h3>
          <p><?php echo e($row['body']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → light) -->
<div class="dls-divider dls-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-light)" points="0,50 1200,60 0,60"/><polygon fill="var(--color-light)" points="0,60 1200,14 1200,60" opacity="0.55"/><polygon fill="var(--color-light)" points="0,60 1200,30 1200,60"/></svg>
</div>

<!-- ============ SERVICES — 04 ============ -->
<section class="dls-numbered dls-services section" data-num="04" aria-label="Tree services available in DeLeon Springs">
  <div class="container">
    <div class="dls-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>Which tree services are available in <span class="text-accent">DeLeon Springs</span>?</h2>
      <p class="answer-block"><?php echo e($siteName); ?> brings its full range of tree care to DeLeon Springs, from controlled removal of big pines and oaks to storm cleanup, ongoing maintenance, and commercial and HOA contracts &mdash; the same crew and equipment that works our DeLand home base, just up US-17.</p>
    </div>

    <?php renderServiceCards(['tree-removal', 'fallen-tree-removal-cleanup', 'tree-trimming-services', 'tree-maintenance-care', 'commercial-hoa-tree-services', 'emergency-tree-service-storm-cleanup'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ WHY CHOOSE — 05 ============ -->
<section class="dls-numbered dls-why section" data-num="05" aria-label="Why choose God's Country in DeLeon Springs">
  <div class="container">
    <div class="dls-title" data-animate>
      <span class="dls-eyebrow">Why God's Country</span>
      <h2>Why DeLeon Springs landowners call God's Country</h2>
      <p class="answer-block">Big lots need more than a chainsaw and a promise. <?php echo e($siteName); ?> shows up with the equipment, the insurance, and the land-management judgment that rural DeLeon Springs property actually requires.</p>
    </div>

    <div class="dls-why-grid">
      <?php foreach ($whyCards as $i => $card): ?>
      <article class="dls-why-card card-tint-<?php echo ($i % 3) + 1; ?> reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="dls-why-icon"><i data-lucide="<?php echo e($card['icon']); ?>"></i></div>
        <h3><?php echo e($card['title']); ?></h3>
        <p><?php echo e($card['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: torn edge (cream → white) -->
<div class="dls-divider dls-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L80,44 L160,34 L250,45 L340,31 L430,46 L520,36 L620,45 L720,29 L820,42 L920,34 L1010,45 L1110,32 L1200,42 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ FAQ — 06 ============ -->
<section class="dls-numbered dls-faq section" data-num="06" aria-label="DeLeon Springs tree service questions">
  <div class="container">
    <div class="dls-title" data-animate>
      <span class="dls-eyebrow">Good Questions</span>
      <h2>DeLeon Springs tree service questions, answered</h2>
    </div>

    <div class="dls-faq-list">
      <?php foreach ($faqs as $faq): ?>
      <div class="dls-faq-item" data-animate>
        <h3><i data-lucide="help-circle"></i> <?php echo e($faq['q']); ?></h3>
        <p class="faq-answer dls-faq-answer"><?php echo e($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA (radial glow) ============ -->
<section class="dls-cta" aria-label="Get a free tree service estimate in DeLeon Springs">
  <div class="container">
    <span class="dls-eyebrow">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Get a Free Estimate in DeLeon Springs</h2>
    <p>Tell us about the old-growth pine over the barn, the lot you need cleared, or the pasture that has grown up in scrub. <?php echo e($siteName); ?> will walk the property, bring the right machines, and put a straight, all-in price in writing &mdash; usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Browse All Services</a>
    </div>
  </div>
</section>

<p class="dls-last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
