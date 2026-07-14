<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /service-area/lake-helen/index.php — Lake Helen, FL (Premium area page)
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 3B — service-area page for "The Gem of Florida"
 * Signature: Victorian heritage-tree bento + Cassadaga note block
 * expressing a "preserve, don't just cut" ethos. All CSS from tokens.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'service-area';

// ---- SEO ---------------------------------------------------
$pageTitle       = "Tree Service in Lake Helen, FL | God's Country Tree Service";
$pageDescription = 'Tree service in Lake Helen, FL from certified arborists who preserve heritage oaks, not just cut them. Licensed & insured. Free estimates in 24 hours.';
$canonicalUrl    = $siteUrl . '/service-area/lake-helen/';

// ---- Images (config $serviceAreas + intake allocation) -----
$imgBase          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
$heroImage        = $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp'; // roped arborist pruning inside a live oak canopy
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$photoCanopy = [
    'src' => $imgBase . '1784062761586-95i7hi-487384453_1464923548239483_3259835514318021231_n.webp',
    'alt' => 'Climber topping a storm-stressed tree spar high against the sky near Lake Helen, FL',
];
$photoOak = [
    'src' => $imgBase . '1784062730346-5nqz2k-31180126_2042462089307726_2780749710774763520_n.webp',
    'alt' => 'Roped climber sectioning limbs deep in a mature live oak canopy near Lake Helen, FL',
];

// ---- FAQs (Lake Helen specific) ----------------------------
$faqs = [
    [
        'q' => 'Do you prune heritage oaks in Lake Helen without harming them?',
        'a' => "Yes. God's Country Tree Service prunes Lake Helen's heritage live oaks the arborist way — small, targeted cuts that respect the branch collar, never lion-tailing or topping. In the Victorian historic district we lean toward light structural pruning and crown reduction so the canopy that shades those streets stays intact for the next generation.",
    ],
    [
        'q' => 'Do I need a permit to remove a tree in Lake Helen, FL?',
        'a' => "Possibly. Lake Helen and Volusia County protect certain large hardwoods, and the historic district around Cassadaga watches its canopy closely, so a big live oak can require review before removal. We flag permit questions during your free estimate so you know what applies to your Lake Helen lot before any saw starts.",
    ],
    [
        'q' => 'How fast can you get to Lake Helen after a storm?',
        'a' => "Lake Helen sits only about six miles from our DeLand yard, just off Interstate 4, so we are usually one of the first crews rolling in after a hurricane. God's Country Tree Service clears fallen limbs, opens driveways, and stabilizes hazard trees quickly, then schedules the careful heritage-tree work once the emergency is handled.",
    ],
];

// ---- Schema ------------------------------------------------
$areaServiceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'name'        => 'Tree Service in Lake Helen, FL',
    'description' => "Certified-arborist tree service in Lake Helen, Florida — heritage-oak pruning, crown reduction, hazardous tree removal, and storm cleanup from God's Country Tree Service, licensed and insured, based in DeLand.",
    'serviceType' => 'Tree Service',
    'url'         => $canonicalUrl,
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'areaServed'  => [
        '@type'            => 'City',
        'name'             => 'Lake Helen',
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
        ['name' => 'Lake Helen'],
    ])
    . generateFAQSchema($faqs)
    . '<script type="application/ld+json">' . json_encode($areaServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Lake Helen service area — page-specific styles (lh- prefix)
   Techniques: C1.4 layered hero, C5.1 numbered watermark,
   C5.4 drop cap, tinted cards, Victorian heritage-tree bento
   (signature), Cassadaga note block, 2 SVG dividers,
   image hover-zoom, radial-glow CTA. Tokens only.
   ============================================================ */

/* ---- C1.4 Layered hero: photo + gradient + noise ---- */
.lh-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.lh-hero::before {
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
.lh-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.lh-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.lh-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.lh-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.lh-breadcrumb a:hover { color: var(--color-accent); }
.lh-breadcrumb .lh-sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.lh-eyebrow {
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
.lh-eyebrow i, .lh-eyebrow svg { width: 15px; height: 15px; }
.lh-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 24ch;
  margin-bottom: var(--space-5);
}
.lh-hero h1 .lh-accent { color: var(--color-accent); }
.lh-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.lh-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.lh-hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-5);
  padding-bottom: var(--space-2);
}
.lh-hero-trust span {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: color-mix(in srgb, var(--color-white) 90%, transparent);
}
.lh-hero-trust i, .lh-hero-trust svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- Numbered section watermark (C5.1) ---- */
.lh-numbered { position: relative; }
.lh-numbered::before {
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
.lh-numbered > .container { position: relative; z-index: 1; }

/* ---- Shared section title block ---- */
.lh-title { text-align: center; margin-bottom: var(--space-12); }
.lh-title h2 {
  margin-bottom: var(--space-4);
  max-width: 30ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.lh-title .answer-block {
  max-width: 68ch;
  margin: 0 auto;
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.lh-eyebrow-label {
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
.lh-aeo { background: var(--color-white); }
.lh-aeo .answer-block {
  max-width: 70ch;
  margin: 0 auto;
  padding: var(--space-8);
  background: var(--color-card-tint-1);
  border-left: 4px solid var(--color-accent);
  border-radius: var(--radius-md);
  font-size: var(--font-size-lg);
  color: var(--color-text);
}

/* ---- Local prose (drop cap + lede) ---- */
.lh-prose-section { background: var(--color-cream); }
.lh-prose {
  max-width: 66ch;
  margin: 0 auto;
}
.lh-prose p {
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.75;
  margin-bottom: var(--space-5);
}
.lh-prose p.lh-drop-cap::first-letter {
  float: left;
  font-family: var(--font-heading);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.82;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.lh-prose strong { color: var(--color-primary-dark); }

/* ---- SIGNATURE: Victorian heritage-tree bento gallery ---- */
.lh-heritage { background: var(--color-white); }
.lh-heritage-bento {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-auto-rows: minmax(140px, auto);
  gap: var(--space-5);
  margin-top: var(--space-10);
}
.lh-bento-cell {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.lh-bento-cell img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.lh-bento-cell:hover img { transform: scale(1.06); }
.lh-bento-cell figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 84%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.lh-bento-photo-a { grid-column: span 4; grid-row: span 2; }
.lh-bento-photo-b { grid-column: span 2; grid-row: span 2; }
.lh-bento-ethos {
  grid-column: span 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  background: var(--color-card-tint-2);
  border: 1px solid color-mix(in srgb, var(--color-primary) 12%, transparent);
}
.lh-bento-ethos .lh-ethos-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.lh-bento-ethos .lh-ethos-icon i, .lh-bento-ethos .lh-ethos-icon svg { width: 24px; height: 24px; }
.lh-bento-ethos h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.lh-bento-ethos p {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  margin: 0;
  line-height: 1.6;
}
.lh-bento-stat {
  grid-column: span 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  background: var(--color-dark);
  color: var(--color-white);
  position: relative;
  overflow: hidden;
}
.lh-bento-stat::before {
  content: '';
  position: absolute;
  inset: -30% -10% auto auto;
  width: 70%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 42%, transparent) 0%, transparent 66%);
  pointer-events: none;
}
.lh-bento-stat .lh-stat-num {
  position: relative;
  font-family: var(--font-heading);
  font-size: clamp(2.6rem, 5vw, 3.6rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-accent);
}
.lh-bento-stat .lh-stat-label {
  position: relative;
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  margin-top: var(--space-2);
}

/* ---- Cassadaga historic-district note block ---- */
.lh-cassadaga {
  max-width: 860px;
  margin: var(--space-12) auto 0;
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-6);
  align-items: flex-start;
  padding: var(--space-8);
  background: var(--color-card-tint-3);
  border: 1px dashed color-mix(in srgb, var(--color-primary) 30%, transparent);
  border-radius: var(--radius-lg);
}
.lh-cassadaga .lh-cass-badge {
  width: 60px;
  height: 60px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-md);
  flex-shrink: 0;
}
.lh-cassadaga .lh-cass-badge i, .lh-cassadaga .lh-cass-badge svg { width: 28px; height: 28px; }
.lh-cassadaga h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.lh-cassadaga p {
  margin: 0;
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.7;
}

/* ---- Services section ---- */
.lh-services { background: var(--color-cream); }
.lh-services .answer-block {
  max-width: 68ch;
  margin: 0 auto var(--space-10);
  text-align: center;
  font-size: var(--font-size-lg);
  color: var(--color-text);
}

/* ---- Why choose: 3 tinted cards ---- */
.lh-why { background: var(--color-white); }
.lh-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.lh-why-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.lh-why-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
.lh-why-card.card-tint-1 { background: var(--color-card-tint-1); }
.lh-why-card.card-tint-2 { background: var(--color-card-tint-2); }
.lh-why-card.card-tint-3 { background: var(--color-card-tint-3); }
.lh-why-card .lh-why-icon {
  width: 54px;
  height: 54px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-5);
}
.lh-why-card .lh-why-icon i, .lh-why-card .lh-why-icon svg { width: 26px; height: 26px; }
.lh-why-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.lh-why-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  margin: 0;
  line-height: 1.65;
}

/* ---- FAQ ---- */
.lh-faq { background: var(--color-cream); }
.lh-faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.lh-faq-item {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-5);
  padding: var(--space-6) var(--space-8);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  border-left: 4px solid var(--color-primary);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.lh-faq-item:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
.lh-faq-item .lh-faq-icon {
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  flex-shrink: 0;
}
.lh-faq-item .lh-faq-icon i, .lh-faq-item .lh-faq-icon svg { width: 20px; height: 20px; }
.lh-faq-item h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.lh-faq-item .faq-answer {
  margin: 0;
  color: var(--color-gray-dark);
  font-size: var(--font-size-base);
  line-height: 1.7;
}

/* ---- Closing CTA (radial glow) ---- */
.lh-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.lh-cta::before {
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
.lh-cta .container { position: relative; z-index: 1; }
.lh-cta .lh-eyebrow-label { color: var(--color-accent); }
.lh-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.lh-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.lh-cta-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.lh-last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 distinct styles: diagonal + torn) ---- */
.lh-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 64px);
  position: relative;
  z-index: 2;
  margin-bottom: -1px;
}
.lh-divider svg { display: block; width: 100%; height: 100%; }

/* ---- Reveal stagger delays (timing only; global system draws them) ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .lh-heritage-bento { grid-template-columns: repeat(4, 1fr); }
  .lh-bento-photo-a { grid-column: span 4; }
  .lh-bento-photo-b { grid-column: span 2; }
  .lh-bento-ethos { grid-column: span 2; }
  .lh-bento-stat { grid-column: span 2; }
  .lh-why-grid { grid-template-columns: 1fr; max-width: 520px; margin-left: auto; margin-right: auto; }
}
@media (max-width: 768px) {
  .lh-hero { min-height: auto; }
  .lh-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .lh-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .lh-heritage-bento { grid-template-columns: 1fr; }
  .lh-bento-photo-a, .lh-bento-photo-b, .lh-bento-ethos, .lh-bento-stat { grid-column: 1 / -1; grid-row: auto; }
  .lh-bento-photo-a { min-height: 260px; }
  .lh-bento-photo-b { min-height: 220px; }
  .lh-cassadaga { grid-template-columns: 1fr; }
  .lh-faq-item { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .lh-hero-actions { flex-direction: column; align-items: stretch; }
  .lh-cta-actions { flex-direction: column; align-items: stretch; }
  .lh-prose p.lh-drop-cap::first-letter { font-size: 3.4rem; }
}
</style>

<!-- ============ HERO (C1.4 layered) ============ -->
<section class="lh-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service in Lake Helen, Florida">
  <div class="container">
    <nav class="lh-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="lh-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="lh-sep" aria-hidden="true">/</span>
      <span aria-current="page">Lake Helen</span>
    </nav>

    <span class="lh-eyebrow"><i data-lucide="gem"></i> Lake Helen &middot; The Gem of Florida</span>

    <h1>Tree Service in Lake Helen, FL &mdash; <span class="lh-accent">Gentle on the Gem&rsquo;s Heritage Oaks</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, caring for Lake Helen&rsquo;s canopy since <?php echo e($yearEstablished); ?>. We serve Lake Helen and the surrounding communities within about 50 miles across Volusia County &mdash; certified-arborist pruning, crown reduction, hazardous removals, and storm cleanup, with free written estimates within 24 hours.</p>

    <div class="lh-hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>

    <div class="lh-hero-trust">
      <span><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span><i data-lucide="tree-deciduous"></i> Certified Arborist Care</span>
      <span><i data-lucide="map-pin"></i> ~6 Miles from Our DeLand Yard</span>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="lh-numbered lh-aeo section" data-num="01" aria-label="Heritage oak pruning in Lake Helen">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">The Short Answer</span>
      <h2>Who prunes heritage oaks in Lake Helen, FL without harming them?</h2>
    </div>
    <p class="answer-block" data-animate><?php echo e($siteName); ?> prunes Lake Helen&rsquo;s heritage live oaks the way certified arborists are trained to &mdash; small, purposeful cuts at the branch collar, no topping and no lion-tailing. In a Victorian historic district where the canopy is the character of the town, we favor light structural pruning and crown reduction that keeps those old oaks strong and standing for decades.</p>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="lh-divider" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,8 1200,60"/></svg>
</div>

<!-- ============ LOCAL PROSE — 02 ============ -->
<section class="lh-numbered lh-prose-section section" data-num="02" aria-label="About tree care in Lake Helen">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">Why Lake Helen Is Different</span>
      <h2>A canopied Victorian town that guards its oaks</h2>
    </div>

    <div class="lh-prose">
      <p class="lh-drop-cap" data-animate>Incorporated in 1888 and nicknamed the &ldquo;Gem of Florida,&rdquo; Lake Helen is one of the quietest, most tree-shaded corners of western Volusia County. Its compact Victorian historic district is stitched together by big live oaks and longleaf pines that residents genuinely protect &mdash; the kind of trees that predate half the houses under them. Working here is less about clearing lots and more about keeping a canopy healthy, which is exactly the difference between a chainsaw crew and a certified-arborist crew.</p>

      <p data-animate>Lake Helen also adjoins the <strong>Southern Cassadaga Spiritualist Camp</strong>, founded in 1894 and listed as a National Historic District. The moss-draped oaks arching over Cassadaga&rsquo;s narrow lanes are part of what makes the place feel frozen in time, and they demand a careful, preservation-minded hand. A wrong topping cut on one of those trees isn&rsquo;t just bad arboriculture &mdash; in a district like this, it changes the streetscape.</p>

      <p data-animate>The town&rsquo;s low-density character comes from its lakes and farms. <strong>Lake Helen and Lake Macy</strong> anchor the residential streets, and the surrounding blueberry farms keep the edges rural and green. That mix of mature yard trees, lakefront hardwoods, and open agricultural land means we see everything here &mdash; from a single heritage oak that needs thoughtful crown reduction to a storm-snapped pine over a farm outbuilding.</p>

      <p data-animate>Because Lake Helen sits right between DeLand and Deltona, just off <strong>Interstate 4</strong> and only about six miles from our yard, we can be on-site quickly &mdash; whether it&rsquo;s a scheduled pruning visit or a hazard tree after a summer storm. If you&rsquo;ve been searching for tree service near me in Lake Helen, you want a crew that already knows this canopy, not one passing through after a hurricane.</p>
    </div>
  </div>
</section>

<!-- ============ SIGNATURE: HERITAGE-TREE BENTO — 03 ============ -->
<section class="lh-numbered lh-heritage section" data-num="03" aria-label="Preserving Lake Helen's heritage trees">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">Preserve, Don&rsquo;t Just Cut</span>
      <h2>Heritage-tree care for Lake Helen&rsquo;s historic district</h2>
      <p class="answer-block"><?php echo e($siteName); ?> treats Lake Helen&rsquo;s big oaks as assets to protect, not obstacles to clear. The goal is a stronger, safer canopy that stays &mdash; removal only when a tree is genuinely a hazard.</p>
    </div>

    <div class="lh-heritage-bento">
      <figure class="lh-bento-cell lh-bento-photo-a" data-animate>
        <img src="<?php echo e($photoOak['src']); ?>" alt="<?php echo e($photoOak['alt']); ?>" width="800" height="640" loading="lazy">
        <figcaption>Careful in-canopy pruning of a mature live oak near Lake Helen, FL</figcaption>
      </figure>

      <div class="lh-bento-ethos reveal-delay-1" data-animate>
        <div class="lh-ethos-icon"><i data-lucide="scissors"></i></div>
        <h3>Arborist cuts, not butcher cuts</h3>
        <p>Branch-collar pruning and measured crown reduction keep heritage oaks structurally sound &mdash; never topping, never lion-tailing.</p>
      </div>

      <figure class="lh-bento-cell lh-bento-photo-b reveal-delay-2" data-animate>
        <img src="<?php echo e($photoCanopy['src']); ?>" alt="<?php echo e($photoCanopy['alt']); ?>" width="500" height="640" loading="lazy">
        <figcaption>Reducing a storm-stressed spar safely, section by section</figcaption>
      </figure>

      <div class="lh-bento-stat reveal-delay-1" data-animate>
        <span class="lh-stat-num"><?php echo e($yearsInBusiness); ?>+</span>
        <span class="lh-stat-label">Years reading Volusia County&rsquo;s live oaks and pines</span>
      </div>

      <div class="lh-bento-ethos reveal-delay-2" data-animate>
        <div class="lh-ethos-icon"><i data-lucide="shield-check"></i></div>
        <h3>Remove only when it&rsquo;s truly a hazard</h3>
        <p>Decay, a failing root plate, or a limb over the roof earns removal. A tree that can be saved with pruning gets saved &mdash; we tell you straight at the estimate.</p>
      </div>
    </div>

    <!-- Cassadaga historic-district note block -->
    <aside class="lh-cassadaga" data-animate aria-label="Cassadaga historic district note">
      <div class="lh-cass-badge"><i data-lucide="landmark"></i></div>
      <div>
        <h3>A note on the Cassadaga historic district</h3>
        <p>The oaks lining the Southern Cassadaga Spiritualist Camp &mdash; a National Historic District since its 1894 founding &mdash; are part of Lake Helen&rsquo;s identity. Work near them calls for extra restraint: light pruning, documented decisions, and a clear read on any permit questions before a saw touches a protected tree. That is the preservation-minded standard we bring to every heritage tree in Lake Helen.</p>
      </div>
    </aside>
  </div>
</section>

<!-- Divider: torn edge (white → cream) -->
<div class="lh-divider" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L70,44 L140,34 L220,45 L300,31 L390,47 L470,37 L570,45 L670,29 L770,42 L870,34 L960,45 L1060,32 L1150,42 L1200,37 L1200,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ SERVICES — 04 ============ -->
<section class="lh-numbered lh-services section" data-num="04" aria-label="Tree services available in Lake Helen">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">What We Do Here</span>
      <h2>Tree services available in Lake Helen, FL</h2>
    </div>
    <p class="answer-block" data-animate><?php echo e($siteName); ?> brings the full range of arborist-led tree care to Lake Helen &mdash; from delicate heritage-oak pruning and crown reduction to hazardous tree removal and post-storm cleanup. Every job starts with an honest assessment and a free written estimate within 24 hours.</p>

    <?php renderServiceCards(['certified-arborist-services', 'tree-pruning-services', 'crown-reduction-shaping', 'tree-maintenance-care', 'dead-hazardous-tree-removal', 'tree-trimming-services'], $serviceCardData); ?>
  </div>
</section>

<!-- Divider: diagonal (cream → white) -->
<div class="lh-divider" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,60 0,20 1200,60"/></svg>
</div>

<!-- ============ WHY CHOOSE — 05 ============ -->
<section class="lh-numbered lh-why section" data-num="05" aria-label="Why choose God's Country in Lake Helen">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">Why Lake Helen Calls Us</span>
      <h2>Why homeowners choose God&rsquo;s Country in Lake Helen</h2>
    </div>

    <div class="lh-why-grid">
      <article class="lh-why-card card-tint-1 reveal-delay-1" data-animate>
        <div class="lh-why-icon"><i data-lucide="clipboard-check"></i></div>
        <h3>Certified-arborist judgment</h3>
        <p>In a town built around its canopy, the save-or-remove call matters. Our certified-arborist approach favors preserving Lake Helen&rsquo;s heritage oaks whenever the tree can be made safe &mdash; and says so plainly.</p>
      </article>

      <article class="lh-why-card card-tint-2 reveal-delay-2" data-animate>
        <div class="lh-why-icon"><i data-lucide="map-pin"></i></div>
        <h3>Local, not passing through</h3>
        <p>Our DeLand yard is about six miles from Lake Helen, just off I-4. We are the crew that&rsquo;s here in February for scheduled pruning &mdash; not only the week after a hurricane, then gone.</p>
      </article>

      <article class="lh-why-card card-tint-3 reveal-delay-3" data-animate>
        <div class="lh-why-icon"><i data-lucide="file-check"></i></div>
        <h3>Licensed, insured, in writing</h3>
        <p>Every Lake Helen job comes with proof of insurance on request and a free written estimate within 24 hours &mdash; permit questions on protected trees flagged before any work begins.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============ FAQ — 06 ============ -->
<section class="lh-numbered lh-faq section" data-num="06" aria-label="Lake Helen tree service questions">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">Good Questions</span>
      <h2>Lake Helen tree service questions, answered</h2>
    </div>

    <div class="lh-faq-list">
      <?php foreach ($faqs as $faq): ?>
      <div class="lh-faq-item" data-animate>
        <div class="lh-faq-icon"><i data-lucide="help-circle"></i></div>
        <div>
          <h3><?php echo e($faq['q']); ?></h3>
          <p class="faq-answer"><?php echo e($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="lh-cta" aria-label="Get a free tree service estimate in Lake Helen">
  <div class="container">
    <span class="lh-eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Get a Free Estimate in Lake Helen</h2>
    <p>Whether it&rsquo;s a heritage oak that needs a careful hand, a hazard pine over the roof, or storm cleanup along the lake, <?php echo e($siteName); ?> will walk the property, give you an honest read, and put a straight price in writing &mdash; usually within 24 hours.</p>
    <div class="lh-cta-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>
  </div>
</section>

<p class="lh-last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
