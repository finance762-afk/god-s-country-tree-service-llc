<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /service-area/index.php — Service Area overview
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 6 — coverage hub linking every individual area page.
 * Techniques: C1.4 layered hero, 2 SVG dividers, numbered
 * watermark, asymmetric area-card grid w/ image zoom, framed
 * map split, glass coverage chips, stat band, C9.2 CTA glow.
 * All values from tokens — no hardcoded colors/shadows/spacing.
 * ============================================================
 */

$currentPage = 'service-area';

// V2.1 trade-noun title + V2.2 CTR meta (155 chars)
$pageTitle       = "Tree Service Areas Near DeLand, FL | God's Country Tree Service";
$pageDescription = "Tree service across DeLand, Deltona, Orange City, DeBary, Lake Helen & DeLeon Springs, FL — licensed, insured, 12+ years. Free 24-hour estimates. Call today.";
$canonicalUrl    = $siteUrl . '/service-area/';

$imgBase          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
$heroImage        = $imgBase . '1784062750583-pr9hsn-57170747_2285599344993998_4063638806954246144_n.webp';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

// Map embed — add a title for accessibility (CLAUDE.md GBP embed rule)
$mapEmbed = str_replace('<iframe ', '<iframe title="Map of God\'s Country Tree Service in DeLand, FL and its Volusia County service area" ', $integrations['gbp_map_embed']);

// ---- Schema: BreadcrumbList + ItemList of areas + Speakable ----
$areaListItems = [];
$pos = 1;
foreach ($serviceAreas as $area) {
    $areaListItems[] = [
        '@type'    => 'ListItem',
        'position' => $pos++,
        'name'     => $area['city'] . ', ' . $area['state'],
        'item'     => $area['hasPage'] ? $siteUrl . '/service-area/' . $area['slug'] . '/' : $siteUrl . '/',
    ];
}
$itemListSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'ItemList',
    'name'            => 'Tree Service Areas — Volusia County, FL',
    'itemListElement' => $areaListItems,
];
$speakableSchema = [
    '@context'  => 'https://schema.org',
    '@type'     => 'WebPage',
    '@id'       => $canonicalUrl . '#webpage',
    'url'       => $canonicalUrl,
    'name'      => $pageTitle,
    'speakable' => ['@type' => 'SpeakableSpecification', 'cssSelector' => ['.hero-answer', '.answer-block']],
    'about'     => ['@id' => $siteUrl . '/#organization'],
];

$pageSchema = generateBreadcrumbSchema([
        ['name' => 'Home',         'url' => '/'],
        ['name' => 'Service Area'],
    ])
    . '<script type="application/ld+json">' . json_encode($itemListSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Service Area overview — page-specific styles
   ============================================================ */

/* ---- C1.4 Layered hero: photo + gradient + noise ---- */
.sa-hero {
  position: relative;
  min-height: 54vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.sa-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 86%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 70%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.sa-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.sa-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.sa-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.sa-breadcrumb a { color: color-mix(in srgb, var(--color-white) 88%, transparent); transition: color var(--transition-fast); }
.sa-breadcrumb a:hover { color: var(--color-accent); }
.sa-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.sa-hero .hero-eyebrow {
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
.sa-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.4vw, 3.7rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 20ch;
  margin-bottom: var(--space-5);
}
.sa-hero h1 .text-accent { color: var(--color-accent); }
.sa-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.sa-hero .hero-actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.sa-hero .hero-trust { display: flex; gap: var(--space-6); flex-wrap: wrap; padding-bottom: var(--space-2); }
.sa-hero .hero-trust-item {
  display: inline-flex; align-items: center; gap: var(--space-2);
  color: color-mix(in srgb, var(--color-white) 90%, transparent);
  font-size: var(--font-size-sm); font-weight: 600;
}
.sa-hero .hero-trust-item svg, .sa-hero .hero-trust-item i { width: 16px; height: 16px; color: var(--color-accent); }

/* ---- Numbered section watermark ---- */
.sa-numbered { position: relative; }
.sa-numbered::before {
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
.sa-numbered > .container { position: relative; z-index: 1; }

/* ---- Section title ---- */
.sa-section-title { text-align: center; margin-bottom: var(--space-12); }
.sa-section-title h2 { margin: 0 auto var(--space-4); max-width: 30ch; text-wrap: balance; }
.sa-section-title .answer-block { max-width: 70ch; margin: 0 auto var(--space-3); font-size: var(--font-size-lg); color: var(--color-text); }
.sa-eyebrow {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- Coverage intro: framed map split ---- */
.sa-coverage { background: var(--color-white); }
.sa-coverage-split {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: var(--space-12);
  align-items: center;
}
.sa-coverage-copy .drop-cap::first-letter {
  float: left;
  font-family: var(--font-heading);
  font-size: 4rem;
  font-weight: 800;
  line-height: 0.85;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.sa-coverage-copy p { color: var(--color-text); margin-bottom: var(--space-4); max-width: 60ch; }
.sa-coverage-points { list-style: none; margin-top: var(--space-6); display: flex; flex-direction: column; gap: var(--space-4); }
.sa-coverage-points li { display: flex; gap: var(--space-3); align-items: flex-start; }
.sa-coverage-points li svg, .sa-coverage-points li i { width: 20px; height: 20px; color: var(--color-accent); flex-shrink: 0; margin-top: var(--space-1); }
.sa-coverage-points li strong { color: var(--color-primary); }
.sa-map-frame {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  border: 6px solid var(--color-white);
  outline: 2px solid var(--color-gray-light);
}
.sa-map-frame::after {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.sa-map-frame iframe { display: block; width: 100%; height: 420px; border: 0; }
.sa-map-actions { margin-top: var(--space-5); display: flex; gap: var(--space-4); flex-wrap: wrap; }

/* ---- Asymmetric area-card grid ---- */
.sa-areas { background: var(--color-cream); }
.sa-area-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.sa-area-card {
  position: relative;
  display: flex;
  flex-direction: column;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.sa-area-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); }
.sa-area-card--primary { grid-column: span 3; flex-direction: row; }
.sa-area-media { position: relative; overflow: hidden; aspect-ratio: 16 / 10; }
.sa-area-card--primary .sa-area-media { flex: 1 1 46%; aspect-ratio: auto; min-height: 280px; }
.sa-area-media img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--transition-slow); }
.sa-area-card:hover .sa-area-media img { transform: scale(1.06); }
.sa-area-badge {
  position: absolute;
  top: var(--space-4);
  left: var(--space-4);
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-dark) 72%, transparent);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  color: var(--color-white);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.5px;
}
.sa-area-badge svg, .sa-area-badge i { width: 13px; height: 13px; color: var(--color-accent); }
.sa-area-badge--home { background: color-mix(in srgb, var(--color-accent) 88%, transparent); color: var(--color-dark); }
.sa-area-badge--home svg, .sa-area-badge--home i { color: var(--color-dark); }
.sa-area-body {
  padding: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  flex: 1;
}
.sa-area-card--primary .sa-area-body { justify-content: center; padding: var(--space-10); flex: 1 1 54%; }
.sa-area-icon {
  width: 44px; height: 44px;
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-primary);
}
.sa-area-icon svg, .sa-area-icon i { width: 22px; height: 22px; }
.sa-area-body h3 { font-size: var(--font-size-xl); margin: 0; text-wrap: balance; }
.sa-area-card--primary .sa-area-body h3 { font-size: var(--font-size-3xl); }
.sa-area-dist { font-size: var(--font-size-xs); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--color-accent); }
.sa-area-body p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }
.sa-area-card--primary .sa-area-body p { font-size: var(--font-size-base); max-width: 54ch; }
.sa-area-marks { list-style: none; display: flex; flex-wrap: wrap; gap: var(--space-2); margin-top: var(--space-1); }
.sa-area-marks li {
  font-size: var(--font-size-xs);
  color: var(--color-text);
  background: var(--color-light);
  border-radius: var(--radius-full);
  padding: 2px var(--space-3);
}
.sa-area-cta {
  margin-top: auto;
  padding-top: var(--space-3);
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  transition: gap var(--transition-base), color var(--transition-base);
}
.sa-area-card:hover .sa-area-cta { gap: var(--space-3); color: var(--color-accent); }
.sa-area-cta svg, .sa-area-cta i { width: 16px; height: 16px; }
.sa-area-card > a.sa-area-stretch { position: absolute; inset: 0; z-index: 3; }

/* ---- Coverage chips (glass) + stat band ---- */
.sa-stat-band {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.sa-stat-band::before {
  content: '';
  position: absolute;
  top: -40%; left: -10%;
  width: 60%; height: 160%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 38%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.sa-stat-band .container { position: relative; z-index: 1; }
.sa-stat-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  text-align: center;
}
.sa-stat .num {
  font-family: var(--font-heading);
  font-size: clamp(2.6rem, 6vw, 4rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-white);
}
.sa-stat .num span { color: var(--color-accent); }
.sa-stat .lbl {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-xs);
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  margin-top: var(--space-2);
}
.sa-chip-row { display: flex; flex-wrap: wrap; justify-content: center; gap: var(--space-3); margin-top: var(--space-10); }
.sa-chip {
  display: inline-flex; align-items: center; gap: var(--space-2);
  background: color-mix(in srgb, var(--color-white) 8%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 14%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.sa-chip svg, .sa-chip i { width: 14px; height: 14px; color: var(--color-accent); }

/* ---- Why local ---- */
.sa-why { background: var(--color-white); }
.sa-why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-6); }
.sa-why-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.sa-why-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.sa-why-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.sa-why-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.sa-why-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.sa-why-icon {
  width: 48px; height: 48px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.sa-why-icon svg, .sa-why-icon i { width: 24px; height: 24px; }
.sa-why-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.sa-why-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- C9.2 Closing CTA with radial glow ---- */
.sa-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.sa-cta::before {
  content: '';
  position: absolute;
  top: -40%; left: 50%;
  transform: translateX(-50%);
  width: 90%; height: 160%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 45%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.sa-cta .container { position: relative; z-index: 1; }
.sa-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.sa-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.sa-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- SVG dividers ---- */
.sa-divider { display: block; overflow: hidden; line-height: 0; height: clamp(32px, 5vw, 64px); position: relative; z-index: 2; }
.sa-divider svg { display: block; width: 100%; height: 100%; }
.sa-divider--flush { margin-bottom: -1px; }

/* ---- Reveal stagger delays ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Keyboard focus affordance on stretch-link cards ---- */
.sa-area-card:focus-within {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
}
.sa-area-card:focus-within .sa-area-media img { transform: scale(1.06); }
.sa-area-stretch:focus-visible {
  outline: 3px solid var(--color-accent);
  outline-offset: 4px;
  border-radius: var(--radius-lg);
}
.sa-map-actions .btn:focus-visible,
.sa-cta .btn:focus-visible {
  outline: 3px solid var(--color-white);
  outline-offset: 3px;
}

/* ---- Animated underline on the primary card CTA ---- */
.sa-area-card--primary .sa-area-cta { position: relative; align-self: flex-start; }
.sa-area-card--primary .sa-area-cta::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: calc(-1 * var(--space-1));
  width: 0;
  height: 2px;
  background: var(--color-accent);
  transition: width var(--transition-base);
}
.sa-area-card--primary:hover .sa-area-cta::after { width: 100%; }

/* ---- Respect reduced-motion for the card zoom ---- */
@media (prefers-reduced-motion: reduce) {
  .sa-area-card:hover .sa-area-media img,
  .sa-area-card:focus-within .sa-area-media img { transform: none; }
}

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .sa-coverage-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .sa-area-grid { grid-template-columns: repeat(2, 1fr); }
  .sa-area-card--primary { grid-column: span 2; }
  .sa-stat-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-8); }
  .sa-why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .sa-hero { min-height: auto; }
  .sa-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .sa-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .sa-area-card--primary { flex-direction: column; grid-column: span 2; }
  .sa-area-card--primary .sa-area-media { min-height: 220px; }
  .sa-map-frame iframe { height: 320px; }
}
@media (max-width: 600px) {
  .sa-area-grid { grid-template-columns: 1fr; }
  .sa-area-card--primary { grid-column: auto; }
  .sa-stat-grid { grid-template-columns: 1fr 1fr; }
  .sa-hero .hero-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ HERO ============ -->
<section class="sa-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service across DeLand and Volusia County, Florida">
  <div class="container">
    <nav class="sa-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Service Area</span>
    </nav>

    <span class="hero-eyebrow">Serving West Volusia County</span>

    <h1>Tree Service in DeLand &amp; <span class="text-accent">Surrounding Communities</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, working roughly 50 miles across Volusia County since <?php echo e($yearEstablished); ?> &mdash; from Deltona and Orange City to DeBary, Lake Helen, and DeLeon Springs. Same local crew, same trucks, free written estimates within 24 hours.</p>

    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">See Our Services</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="map-pin"></i> ~50-Mile Radius</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
    </div>
  </div>
</section>

<!-- Divider: diagonal (dark → white) -->
<div class="sa-divider sa-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,60 1200,18 1200,60"/></svg>
</div>

<!-- ============ COVERAGE + MAP — 01 ============ -->
<section class="sa-numbered sa-coverage" data-num="01" aria-label="Where we work">
  <div class="container">
    <div class="sa-coverage-split">
      <div class="sa-coverage-copy">
        <span class="sa-eyebrow">One Local Crew, One Region</span>
        <h2 style="text-wrap:balance; margin-bottom: var(--space-4);">What areas does God's Country Tree Service cover around DeLand?</h2>
        <p class="answer-block drop-cap">God's Country Tree Service covers DeLand and the surrounding west-Volusia communities within about a 50-mile radius, including Deltona, Orange City, DeBary, Lake Helen, and DeLeon Springs. From our DeLand base we bring the same climbers, grapple loader, and skid steer to every job &mdash; residential, commercial, or HOA &mdash; with free written estimates in 24 hours.</p>
        <ul class="sa-coverage-points" data-p1-dynamic>
          <li data-animate><i data-lucide="map-pin"></i><p><strong>Based in DeLand since <?php echo e($yearEstablished); ?>.</strong> We are your neighbors, not storm-chasers who leave when the hurricane season ends.</p></li>
          <li data-animate><i data-lucide="truck"></i><p><strong>Full equipment travels with us.</strong> Climbing gear, boom lift, grapple loader, chipper, and skid steer reach every town on this page.</p></li>
          <li data-animate><i data-lucide="clock"></i><p><strong>24-hour emergency response.</strong> When a storm drops a tree anywhere in west Volusia, we answer around the clock.</p></li>
        </ul>
      </div>
      <div>
        <div class="sa-map-frame" data-animate="right">
          <?php echo $mapEmbed; ?>
        </div>
        <div class="sa-map-actions">
          <a href="<?php echo e($integrations['directions_url']); ?>" class="btn btn-secondary" target="_blank" rel="noopener">Get Directions</a>
          <a href="/contact/" class="btn btn-primary">Request Service</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: torn edge (white → cream) -->
<div class="sa-divider sa-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L140,33 L220,44 L300,30 L390,46 L470,36 L570,44 L670,28 L770,41 L870,33 L960,44 L1060,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ AREA CARDS — 02 ============ -->
<section class="sa-numbered sa-areas" data-num="02" aria-label="Communities we serve">
  <div class="container">
    <div class="sa-section-title" data-animate>
      <span class="sa-eyebrow">Pick Your Town</span>
      <h2>Tree service for every west-Volusia community we call home</h2>
      <p class="answer-block">Each town below has its own trees, soils, and storm history &mdash; and its own page explaining how <?php echo e($siteName); ?> handles them. Tap through to the community closest to you for local details, or call for a free estimate anywhere in the area.</p>
    </div>

    <div class="sa-area-grid" data-p1-dynamic>
      <?php foreach ($serviceAreas as $i => $area):
        $isPrimary = !empty($area['primary']);
        $href      = $area['hasPage'] ? '/service-area/' . $area['slug'] . '/' : '/';
        $cardClass = 'sa-area-card' . ($isPrimary ? ' sa-area-card--primary' : '');
        $delay     = ($i % 3) + 1;
      ?>
      <article class="<?php echo $cardClass; ?> reveal-up reveal-delay-<?php echo $delay; ?>" data-animate>
        <div class="sa-area-media">
          <img src="<?php echo e($area['img']); ?>" alt="Tree work by God's Country Tree Service in <?php echo e($area['city']); ?>, <?php echo e($area['state']); ?>" width="600" height="375" loading="lazy">
          <span class="sa-area-badge<?php echo $isPrimary ? ' sa-area-badge--home' : ''; ?>"><i data-lucide="<?php echo $isPrimary ? 'house' : 'map-pin'; ?>"></i> <?php echo $isPrimary ? 'Home Base' : e($area['distance']); ?></span>
        </div>
        <div class="sa-area-body">
          <div class="sa-area-icon"><i data-lucide="<?php echo e($area['icon']); ?>"></i></div>
          <?php if (!$isPrimary): ?><span class="sa-area-dist"><?php echo e(ucfirst($area['direction'])); ?></span><?php endif; ?>
          <h3><?php echo e($area['city']); ?>, <?php echo e($area['state']); ?></h3>
          <p><?php echo e($area['blurb']); ?></p>
          <ul class="sa-area-marks">
            <?php foreach ($area['landmarks'] as $mark): ?><li><?php echo e($mark); ?></li><?php endforeach; ?>
          </ul>
          <span class="sa-area-cta"><?php echo $isPrimary ? 'Visit our DeLand homepage' : 'Explore ' . e($area['city']) . ' tree service'; ?> <i data-lucide="arrow-right"></i></span>
        </div>
        <a class="sa-area-stretch" href="<?php echo e($href); ?>" aria-label="<?php echo $isPrimary ? 'God\'s Country Tree Service in DeLand' : 'Tree service in ' . e($area['city']) . ', ' . e($area['state']); ?>"></a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ STAT BAND ============ -->
<section class="sa-stat-band" aria-label="Service area at a glance">
  <div class="container">
    <div class="sa-stat-grid">
      <div class="sa-stat" data-animate><div class="num" data-count="<?php echo e($yearsInBusiness); ?>"><?php echo e($yearsInBusiness); ?><span>+</span></div><div class="lbl">Years in Volusia County</div></div>
      <div class="sa-stat" data-animate><div class="num" data-count="50">50<span>mi</span></div><div class="lbl">Service Radius from DeLand</div></div>
      <div class="sa-stat" data-animate><div class="num" data-count="6">6</div><div class="lbl">Communities Covered</div></div>
      <div class="sa-stat" data-animate><div class="num">24<span>/7</span></div><div class="lbl">Storm Response</div></div>
    </div>
    <div class="sa-chip-row" data-p1-dynamic>
      <?php foreach ($serviceAreas as $area): ?>
      <span class="sa-chip"><i data-lucide="map-pin"></i> <?php echo e($area['city']); ?></span>
      <?php endforeach; ?>
      <span class="sa-chip"><i data-lucide="map-pin"></i> All of Volusia County</span>
    </div>
  </div>
</section>

<!-- Divider: diagonal (dark → white) -->
<div class="sa-divider sa-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,60 0,22 1200,60"/></svg>
</div>

<!-- ============ WHY LOCAL — 03 ============ -->
<section class="sa-numbered sa-why" data-num="03" aria-label="Why choose a local Volusia crew">
  <div class="container">
    <div class="sa-section-title" data-animate>
      <span class="sa-eyebrow">Why a Local Crew Matters</span>
      <h2>Why hire a DeLand-based tree service instead of an out-of-town outfit?</h2>
      <p class="answer-block">Because west Volusia's sandy soils, hurricane exposure, and protected heritage oaks reward crews who know them. <?php echo e($siteName); ?> lives and works here year-round &mdash; licensed, insured, and accountable long after the chipper leaves your street.</p>
    </div>

    <div class="sa-why-grid" data-p1-dynamic>
      <div class="sa-why-card reveal-up reveal-delay-1" data-animate>
        <div class="sa-why-icon"><i data-lucide="map-pinned"></i></div>
        <h3>We know these soils and species</h3>
        <p>From Deltona's sand-pine lots to Lake Helen's heritage oaks and DeLand's downtown canopy, we tailor pruning and removal to how each local tree actually fails.</p>
      </div>
      <div class="sa-why-card reveal-up reveal-delay-2" data-animate>
        <div class="sa-why-icon"><i data-lucide="cloud-lightning"></i></div>
        <h3>Built for Florida storm season</h3>
        <p>Hurricanes hit all of Volusia County. Our 24-hour crew clears fallen and hazardous trees across every town on this page, then helps you prune the survivors before the next system.</p>
      </div>
      <div class="sa-why-card reveal-up reveal-delay-3" data-animate>
        <div class="sa-why-icon"><i data-lucide="badge-check"></i></div>
        <h3>Accountable, not passing through</h3>
        <p>Storm-chasers vanish by month's end. We have been based in DeLand since <?php echo e($yearEstablished); ?>, with insurance proof on request and the same phone number every season.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="sa-cta" aria-label="Get a free estimate in your area">
  <div class="container">
    <span class="sa-eyebrow" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Tell Us Which Volusia County Town Your Tree Is In</h2>
    <p>Whether it's a leaning oak in DeLand, a storm-split pine in Deltona, or a heritage tree in Lake Helen, <?php echo e($siteName); ?> will walk the property, give you an honest read, and put a straight all-in price in writing.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Browse All Services</a>
    </div>
  </div>
</section>

<p class="last-updated" style="text-align:center; font-size: var(--font-size-xs); color: var(--color-gray); padding: var(--space-6) 0; background: var(--color-light); margin:0;">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
