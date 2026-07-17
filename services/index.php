<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/index.php — Services listing
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — full 12-card grid + decision guide
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';

// V2.1 trade-noun title (56 chars) + V2.2 CTR meta (156 chars)
$pageTitle       = "Tree Services in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Twelve tree services in DeLand, FL — removal, trimming, pruning & 24/7 storm cleanup from one licensed & insured local crew. Free estimates within 24 hours.';
$canonicalUrl    = $siteUrl . '/services/';

// ---- Images (content/image-manifest.md allocation) ----
$heroImage        = $imgBase . '1784062729442-t1gqhh-31144196_2042462182641050_2975434522398556160_n.webp'; // lot-clearing panorama
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

// ---- Decision guide paths ----
$decisionPaths = [
    [
        'icon'  => 'building-2',
        'title' => 'Managing a commercial property',
        'text'  => 'Property managers, HOA boards, and business owners need scheduled maintenance contracts with documentation, insurance, and one crew for trees, land clearing, and storm response.',
        'links' => [
            ['label' => 'Commercial & HOA Services', 'url' => '/services/commercial-hoa-tree-services/'],
            ['label' => 'Maintenance Contracts',     'url' => '/services/tree-maintenance-care/'],
        ],
    ],
    [
        'icon'  => 'siren',
        'title' => 'Something already happened',
        'text'  => 'A tree is down, split, or hanging over the house after a storm. Start with emergency response — we answer 24/7 and make the scene safe first, then handle cleanup.',
        'links' => [
            ['label' => 'Emergency & Storm Cleanup', 'url' => '/services/emergency-tree-service-storm-cleanup/'],
            ['label' => 'Fallen Tree Removal',        'url' => '/services/fallen-tree-removal-cleanup/'],
        ],
    ],
    [
        'icon'  => 'triangle-alert',
        'title' => 'Something looks wrong',
        'text'  => 'A lean that\'s getting worse, dead limbs over the roof, mushrooms at the base, a thinning crown. Get eyes on it before hurricane season decides for you.',
        'links' => [
            ['label' => 'Dead & Hazardous Removal', 'url' => '/services/dead-hazardous-tree-removal/'],
            ['label' => 'Certified Arborist Visit',  'url' => '/services/certified-arborist-services/'],
        ],
    ],
    [
        'icon'  => 'calendar-check',
        'title' => 'You\'re planning ahead',
        'text'  => 'Overgrown canopies, a yard refresh, new plantings, or a property that needs a standing maintenance schedule. Planned work is always the cheapest tree work.',
        'links' => [
            ['label' => 'Trimming & Pruning',    'url' => '/services/tree-trimming-services/'],
            ['label' => 'Maintenance Plans',      'url' => '/services/tree-maintenance-care/'],
            ['label' => 'Planting & Shrubs',      'url' => '/services/tree-planting-shrub-installation/'],
        ],
    ],
];

// ---- Schema: ItemList + BreadcrumbList + Speakable ----
$itemListElements = [];
foreach ($services as $i => $s) {
    $itemListElements[] = [
        '@type'    => 'ListItem',
        'position' => $i + 1,
        'name'     => $s['name'],
        'url'      => $siteUrl . '/services/' . $s['slug'] . '/',
    ];
}
$itemListSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'ItemList',
    'name'            => 'Tree Services in DeLand, FL',
    'itemListElement' => $itemListElements,
];

$speakableSchema = [
    '@context'  => 'https://schema.org',
    '@type'     => 'WebPage',
    '@id'       => $canonicalUrl . '#webpage',
    'url'       => $canonicalUrl,
    'name'      => $pageTitle,
    'speakable' => [
        '@type'       => 'SpeakableSpecification',
        'cssSelector' => ['.hero-answer', '.answer-block'],
    ],
    'about'     => ['@id' => $siteUrl . '/#organization'],
];

$pageSchema = '<script type="application/ld+json">' . json_encode($itemListSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Services'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Services listing — page-specific styles
   Techniques: C1.4 page hero, C5.1 numbered watermarks, full
   services grid, decision-path signature cards, C9.1 gradient
   CTA banner, C9.2 radial-glow closing, C3 curved + parallelogram
   dividers. Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---- C1.4 Page hero ---- */
.svcx-hero {
  position: relative;
  min-height: 54vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 65%;
  overflow: hidden;
}
.svcx-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    150deg,
    color-mix(in srgb, var(--color-primary-dark) 88%, transparent) 0%,
    color-mix(in srgb, var(--color-dark) 78%, transparent) 60%,
    color-mix(in srgb, var(--color-primary) 55%, transparent) 100%
  );
}
.svcx-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.svcx-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.svcx-breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.svcx-breadcrumb a { color: color-mix(in srgb, var(--color-white) 88%, transparent); transition: color var(--transition-fast); }
.svcx-breadcrumb a:hover { color: var(--color-accent); }
.svcx-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.svcx-hero .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 14%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 38%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.svcx-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.6rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.svcx-hero h1 .text-accent { color: var(--color-accent); }
.svcx-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.svcx-hero .hero-actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.svcx-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.svcx-hero .hero-trust-item svg, .svcx-hero .hero-trust-item i { width: 16px; height: 16px; color: var(--color-accent); }

/* ---- C5.1 Numbered section watermarks ---- */
.numbered-section { position: relative; }
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-4);
  right: clamp(1rem, 4vw, 3rem);
  font-family: var(--font-accent);
  font-size: clamp(5rem, 12vw, 9rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 6%, transparent);
  pointer-events: none;
  z-index: 0;
}
.numbered-section > .container { position: relative; z-index: 1; }

/* ---- Section title block ---- */
.section-title { text-align: center; margin-bottom: var(--space-12); }
.section-title h2 {
  margin-bottom: var(--space-4);
  max-width: 30ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.section-title .answer-block {
  max-width: 68ch;
  margin: 0 auto var(--space-3);
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- Full services grid (framework base, 3-up here) ---- */
.svcx-grid-section { background: var(--color-white); }
.svcx-grid-section .services-grid { grid-template-columns: repeat(3, 1fr); }
@media (max-width: 1199px) and (min-width: 601px) {
  .svcx-grid-section .services-grid { grid-template-columns: repeat(2, 1fr); }
}

/* ---- Signature: decision-path cards ---- */
.svcx-decide { background: var(--color-cream); }
.svcx-paths {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  align-items: stretch;
}
.svcx-path {
  position: relative;
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-10) var(--space-6) var(--space-8);
  box-shadow: var(--shadow-card);
  border-top: 4px solid var(--color-primary);
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.svcx-path:nth-child(2) { border-top-color: var(--color-accent); }
.svcx-path:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
.svcx-path-icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 9%, transparent);
  color: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-5);
}
.svcx-path:nth-child(2) .svcx-path-icon {
  background: color-mix(in srgb, var(--color-accent) 12%, transparent);
  color: var(--color-accent);
}
.svcx-path-icon svg, .svcx-path-icon i { width: 26px; height: 26px; }
.svcx-path h3 { font-size: var(--font-size-xl); margin-bottom: var(--space-3); text-wrap: balance; }
.svcx-path p { color: var(--color-gray); font-size: var(--font-size-base); margin-bottom: var(--space-5); }
.svcx-path-links {
  list-style: none;
  margin-top: auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
  border-top: 1px solid var(--color-gray-light);
  padding-top: var(--space-4);
}
.svcx-path-links a {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-weight: 600;
  font-size: var(--font-size-sm);
  color: var(--color-primary);
  transition: color var(--transition-fast), transform var(--transition-fast);
}
.svcx-path-links a::after { content: '\2192'; transition: transform var(--transition-base); }
.svcx-path-links a:hover { color: var(--color-accent); }
.svcx-path-links a:hover::after { transform: translateX(3px); }

/* ---- C9.1 Mid-page gradient CTA banner ---- */
.svcx-cta-banner {
  position: relative;
  background: linear-gradient(120deg, var(--color-primary-dark) 0%, var(--color-primary) 55%, var(--color-secondary) 100%);
  padding: clamp(3.5rem, 8vh, 5.5rem) 0;
  text-align: center;
  overflow: hidden;
}
.svcx-cta-banner::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.svcx-cta-banner .container { position: relative; z-index: 1; }
.svcx-cta-banner h2 { color: var(--color-white); max-width: 28ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.svcx-cta-banner .answer-block {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.svcx-cta-banner .btn { margin: 0 var(--space-2); }

/* ---- Local coverage strip ---- */
.svcx-local { background: var(--color-light); }
.svcx-local-grid {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.svcx-local-copy p { color: var(--color-text); margin-bottom: var(--space-4); }
.svcx-area-chips { display: flex; flex-wrap: wrap; gap: var(--space-3); margin-top: var(--space-5); }
.svcx-area-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-text);
}
.svcx-area-chip svg, .svcx-area-chip i { width: 14px; height: 14px; color: var(--color-primary); }
.svcx-local-facts {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  padding: var(--space-8);
  position: relative;
}
.svcx-local-facts::before {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.svcx-local-facts ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); }
.svcx-local-facts li { display: flex; gap: var(--space-3); align-items: flex-start; font-size: var(--font-size-base); color: var(--color-text); }
.svcx-local-facts li svg, .svcx-local-facts li i { width: 18px; height: 18px; color: var(--color-accent); flex-shrink: 0; margin-top: var(--space-1); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.svcx-closing {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.svcx-closing::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  height: 160%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 45%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.svcx-closing .container { position: relative; z-index: 1; }
.svcx-closing h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.svcx-closing .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.svcx-closing .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 distinct styles: curved wave + parallelograms) ---- */
.svg-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 64px);
  position: relative;
  z-index: 2;
}
.svg-divider svg { display: block; width: 100%; height: 100%; }
.svg-divider--flush { margin-bottom: -1px; }

/* Reveal stagger delays */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- C6.1 grid variation: featured first card on wide screens ---- */
@media (min-width: 1200px) {
  .svcx-grid-section .service-card-with-image:first-child {
    grid-column: span 2;
  }
  .svcx-grid-section .service-card-with-image:first-child .service-card__image {
    aspect-ratio: 16 / 7;
  }
  .svcx-grid-section .service-card-with-image:first-child h3 {
    font-size: var(--font-size-2xl);
  }
}

/* ---- C10.4 icon scale + rotate on card hover ---- */
.svcx-grid-section .service-card__icon,
.svcx-path-icon {
  transition: transform var(--transition-base);
}
.svcx-grid-section .service-card-with-image:hover .service-card__icon {
  transform: scale(1.12) rotate(-6deg);
}
.svcx-path:hover .svcx-path-icon {
  transform: scale(1.1) rotate(5deg);
}

/* ---- C10.3-style underline grow on decision-path links ---- */
.svcx-path-links a { position: relative; width: fit-content; }
.svcx-path-links a span {
  background-image: linear-gradient(var(--color-accent), var(--color-accent));
  background-repeat: no-repeat;
  background-size: 0% 2px;
  background-position: 0 100%;
  transition: background-size var(--transition-base);
  padding-bottom: 2px;
}
.svcx-path-links a:hover span,
.svcx-path-links a:focus-visible span { background-size: 100% 2px; }
.svcx-path-links a:focus-visible {
  outline: 2px solid var(--color-accent);
  outline-offset: 2px;
  border-radius: var(--radius-sm);
}

/* ---- C13 cross-document view transitions (SPA-feel navigation) ---- */
@view-transition {
  navigation: auto;
}
::view-transition-old(root) {
  animation: svcx-vt-out 0.18s ease both;
}
::view-transition-new(root) {
  animation: svcx-vt-in 0.22s ease both;
}
@keyframes svcx-vt-out { to { opacity: 0; } }
@keyframes svcx-vt-in  { from { opacity: 0; } }

/* ---- Motion safety ---- */
@media (prefers-reduced-motion: reduce) {
  ::view-transition-old(root),
  ::view-transition-new(root) { animation: none; }
  .svcx-path,
  .svcx-path-icon,
  .svcx-grid-section .service-card__icon,
  .svcx-path-links a span { transition: none; }
}

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .svcx-paths { grid-template-columns: 1fr; max-width: 560px; margin: 0 auto; }
  .svcx-local-grid { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .svcx-hero { min-height: auto; }
  .svcx-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
}
@media (max-width: 600px) {
  .svcx-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .svcx-cta-banner .btn { margin: var(--space-2) 0; display: flex; }
  .svcx-grid-section .services-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="svcx-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree services in DeLand, Florida">
  <div class="container">
    <nav class="svcx-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Services</span>
    </nav>

    <span class="hero-eyebrow">All Services &middot; DeLand, FL</span>

    <h1>Tree Services in DeLand, FL &mdash; <span class="text-accent">One Local Crew, Twelve Specialties</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, offering twelve specialized services &mdash; from tree removal and trimming to 24/7 storm cleanup and certified arborist care &mdash; for homes, businesses, and HOA communities across Volusia County since <?php echo e($yearEstablished); ?>.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="zap"></i> 24/7 Storm Response</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ FULL GRID — 01 ============ -->
<section class="numbered-section svcx-grid-section" data-num="01" aria-label="All tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>Which tree services does God's Country offer in <span class="text-accent">DeLand</span>?</h2>
      <p class="answer-block"><?php echo e($siteName); ?> offers twelve tree services in DeLand: removal, dead and hazardous tree removal, trimming, pruning, crown reduction, 24/7 emergency storm cleanup, fallen tree cleanup, planting and shrub installation, residential and commercial care, maintenance plans, and certified arborist consultations. Every card below links to the full service page.</p>
    </div>

    <?php renderServiceCards(array_column($services, 'slug'), $serviceCardData); ?>
  </div>
</section>

<!-- Divider: curved wave (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 Q300,60 600,30 T1200,30 L1200,60 L0,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ DECISION GUIDE — 02 ============ -->
<section class="numbered-section svcx-decide" data-num="02" aria-label="Which tree service do you need">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Start Here</span>
      <h2>How do you know which tree service you need?</h2>
      <p class="answer-block">Match your situation to one of three starting points: something already happened (storm damage, a downed tree), something looks wrong (a lean, deadwood, fungus), or you're planning ahead (trimming, planting, a maintenance schedule). Pick the path below &mdash; or just request an estimate and we'll sort it out on the walk-through.</p>
    </div>

    <div class="svcx-paths" data-p1-dynamic>
      <?php foreach ($decisionPaths as $i => $path): ?>
      <article class="svcx-path reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="svcx-path-icon"><i data-lucide="<?php echo e($path['icon']); ?>"></i></div>
        <h3><?php echo e($path['title']); ?></h3>
        <p><?php echo e($path['text']); ?></p>
        <ul class="svcx-path-links">
          <?php foreach ($path['links'] as $link): ?>
          <li><a href="<?php echo e($link['url']); ?>"><span><?php echo e($link['label']); ?></span></a></li>
          <?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ MID-PAGE CTA (C9.1) ============ -->
<section class="svcx-cta-banner" aria-label="Free estimate call to action">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Not Sure? Ask the Crew</span>
    <h2>Can't Tell Whether That Oak Needs Trimming or Removal?</h2>
    <p class="answer-block">You don't have to diagnose it yourself. Request a free estimate and <?php echo e($siteName); ?> walks the property with you, tells you honestly which service fits &mdash; trimming, reduction, or removal &mdash; and puts the price in writing within 24 hours. No obligation either way.</p>
    <a href="/#estimate-form" class="btn btn-accent btn-lg">Request a Free Walk-Through</a>
    <a href="/services/certified-arborist-services/" class="btn btn-outline-white btn-lg">Ask a Certified Arborist</a>
  </div>
</section>

<!-- ============ LOCAL COVERAGE — 03 ============ -->
<section class="numbered-section svcx-local" data-num="03" aria-label="Service area">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Coverage</span>
      <h2>Looking for tree service near me in DeLand?</h2>
      <p class="answer-block">If you're searching for tree service near me in DeLand, you found the local option: <?php echo e($siteName); ?> is based in DeLand (32720) and works within roughly 50 miles &mdash; Deltona, Orange City, DeBary, Lake Helen, and the rest of Volusia County &mdash; with the same crew and equipment on every job.</p>
    </div>

    <div class="svcx-local-grid">
      <div class="svcx-local-copy" data-animate>
        <p>Central Florida is hard on trees. Sandy soil loosens root plates, summer squalls and hurricane season load canopies past their limits, and the live oaks that make DeLand's older neighborhoods worth living in grow heavier every year. A tree service that's local &mdash; not trucked in behind a storm &mdash; sees the same yards year after year and knows which of those oaks can be saved and which are done.</p>
        <p>That's the crew you get with every one of the twelve services on this page: climbing, rigging, skid-steer and grapple work, chipping, hauling, and stump grinding from one company, so the job is finished by the people who quoted it.</p>
        <div class="svcx-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'Deltona', 'Orange City', 'DeBary', 'Lake Helen', 'Volusia County'] as $area): ?>
          <span class="svcx-area-chip"><i data-lucide="map-pin"></i> <?php echo e($area); ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <aside class="svcx-local-facts" data-animate="right">
        <ul>
          <li><i data-lucide="shield-check"></i> Licensed &amp; insured &mdash; proof on request before work starts</li>
          <li><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ years based in DeLand, since <?php echo e($yearEstablished); ?></li>
          <li><i data-lucide="zap"></i> 24/7 emergency storm response, every hurricane season</li>
          <li><i data-lucide="truck"></i> Tree crew and land clearing from one company</li>
          <li><i data-lucide="clock"></i> Free written estimates within 24 hours</li>
        </ul>
      </aside>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (light → dark) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-light);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-dark)" opacity="0.25" points="0,60 0,34 400,52 800,26 1200,44 1200,60"/>
    <polygon fill="var(--color-dark)" opacity="0.5" points="0,60 0,44 400,58 800,38 1200,52 1200,60"/>
    <polygon fill="var(--color-dark)" points="0,60 0,52 400,60 800,48 1200,58 1200,60"/>
  </svg>
</div>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="svcx-closing" aria-label="Get a free estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Which of Your Trees Should We Look at First?</h2>
    <p class="answer-block">Tell us what's going on &mdash; a leaning pine, an overgrown canopy, storm debris, or a whole property that needs a plan. <?php echo e($siteName); ?> responds within 24 hours with an honest read and a straight, all-in written quote for whichever of our twelve services fits.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
