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
$pageTitle       = "Tree Service Lake Helen FL | {$gbpRating}★ ({$gbpReviewCount} Google Reviews)";
$pageDescription = "Tree service in Lake Helen, FL by a DeLand crew rated {$gbpRating}★ from {$gbpReviewCount} Google reviews. Heritage oak pruning, crown reduction, free written estimate: (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/service-area/lake-helen/';

// ---- Images (config $serviceAreas + intake allocation) -----
$imgBase          = '/assets/images/';
$heroImage        = $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp'; // roped arborist pruning inside a live oak canopy
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$photoCanopy = [
    'src' => $imgBase . '1784062761586-95i7hi-487384453_1464923548239483_3259835514318021231_n.webp',
    'alt' => 'Climber topping a storm-stressed tree spar high against the sky',
];
$photoOak = [
    'src' => $imgBase . '1784062730346-5nqz2k-31180126_2042462089307726_2780749710774763520_n.webp',
    'alt' => 'Roped climber sectioning limbs deep in a mature live oak canopy',
];

// ---- FAQs (Lake Helen specific) ----------------------------
$faqs = [
    [
        'q' => 'Do you prune heritage oaks in Lake Helen without harming them?',
        'a' => "God's Country Tree Service prunes Lake Helen's heritage live oaks with small, targeted cuts that respect the branch collar, and never lion-tails or tops them. In the Victorian historic district we lean toward light structural pruning and crown reduction so the canopy that shades those streets stays intact.",
    ],
    [
        'q' => 'Do I need a permit to remove a tree in Lake Helen, FL?',
        'a' => "A tree removal in Lake Helen may need a permit or review, particularly for a large live oak. The rule depends on the tree and the lot, so confirm it with the City of Lake Helen or Volusia County before work is scheduled. We point out likely permit questions during the estimate visit, before any saw starts.",
    ],
    [
        'q' => 'How fast can you get to Lake Helen after a storm?',
        'a' => "God's Country Tree Service responds the same day to genuine storm hazards in Lake Helen, such as a tree on a roof or across a driveway. Lake Helen is about six miles from our DeLand yard, just off Interstate 4. The crew clears fallen limbs and stabilizes hazard trees first, then schedules the careful heritage-tree work once the emergency is handled.",
    ],
];

// ---- Schema ------------------------------------------------
$areaServiceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'name'        => 'Tree Service in Lake Helen, FL',
    'description' => "Tree service in Lake Helen, Florida from God's Country Tree Service, based in DeLand: heritage-oak pruning, crown reduction, hazardous tree removal and storm cleanup.",
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
  font-family: var(--font-accent);
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
  font-family: var(--font-accent);
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
  font-family: var(--font-accent);
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
  font-family: var(--font-accent);
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
  font-family: var(--font-accent);
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
/* ---- Inline body links (v8 content pass) ---- */
.area-article p a { text-decoration: underline; }
</style>

<article class="area-article">

<!-- ============ HERO (C1.4 layered) ============ -->
<section class="lh-hero has-hero-bg" aria-label="Tree service in Lake Helen, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="lh-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="lh-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="lh-sep" aria-hidden="true">/</span>
      <span aria-current="page">Lake Helen</span>
    </nav>

    <span class="lh-eyebrow"><?php echo icon('gem'); ?> Lake Helen &middot; The Gem of Florida</span>

    <h1>Tree Service in Lake Helen, FL &mdash; <span class="lh-accent">Gentle on the Gem&rsquo;s Heritage Oaks</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, caring for Lake Helen&rsquo;s canopy since <?php echo e($yearEstablished); ?>. Lake Helen is about 6 miles southeast of our base, well within the roughly 50 miles we cover across Volusia County. A certified arborist on staff guides the pruning, crown reduction and hazardous removals, and written estimates are free and sent within 24 hours.</p>

    <div class="lh-hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>

    <div class="lh-hero-trust">
      <span><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span><?php echo icon('award'); ?> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span><?php echo icon('tree-deciduous'); ?> Heritage Oak Pruning</span>
      <span><?php echo icon('map-pin'); ?> ~6 Miles from Our DeLand Yard</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-area-lake-helen';
    $heroFormService  = '';
    $heroFormHeading  = 'Get a Free Estimate in Lake Helen';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="lh-numbered lh-aeo section" data-num="01" aria-label="Heritage oak pruning in Lake Helen">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">The Short Answer</span>
      <h2>Who prunes heritage oaks in Lake Helen, FL without harming them?</h2>
    </div>
    <p class="answer-block" data-animate><?php echo e($siteName); ?> prunes Lake Helen&rsquo;s heritage live oaks with small cuts at the branch collar, never topping and never lion-tailing. In the Victorian historic district the canopy is the character of the town, so we favor light structural pruning and crown reduction. Lake Helen is the closest stop on <a href="/service-area/">our Volusia County service area</a>.</p>
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
      <h2>What makes tree work in Lake Helen different?</h2>
    </div>

    <div class="lh-prose">
      <p class="lh-drop-cap" data-animate>Tree work in Lake Helen is different because the town&rsquo;s Victorian historic district is defined by its live oaks and longleaf pines. Most visits here are <a href="/services/tree-pruning-services/">preservation pruning on mature oaks</a> or <a href="/services/crown-reduction-shaping/">crown reduction to lighten long limbs</a>, with removal kept for trees that cannot be made safe.</p>
      
      <p data-animate>Nicknamed the &ldquo;Gem of Florida,&rdquo; Lake Helen is one of the quietest, most tree-shaded corners of western Volusia County. Many of the oaks in its compact historic district are older than the houses under them, and residents watch what happens to them.</p>

      <p data-animate>Lake Helen also adjoins the <strong>Southern Cassadaga Spiritualist Camp</strong>. The moss-draped oaks arching over Cassadaga&rsquo;s narrow lanes are part of why the place feels unchanged, and a wrong topping cut on one of them alters the streetscape for everyone who lives there.</p>

      <p data-animate><strong>Lake Helen and Lake Macy</strong> anchor the residential streets, and the surrounding blueberry farms keep the edges rural. That mix of yard trees, lakefront hardwoods and open farmland brings every kind of call, from one old oak that needs crown reduction to a storm-snapped pine over a farm outbuilding.</p>

      <p data-animate>Lake Helen sits between DeLand and Deltona, just off <strong>Interstate 4</strong> and about six miles from our yard. If you have been searching for tree service near me in Lake Helen, ask whoever you call how they prune an old live oak. The answer should not include topping.</p>
    </div>
  </div>
</section>

<!-- ============ SIGNATURE: HERITAGE-TREE BENTO — 03 ============ -->
<section class="lh-numbered lh-heritage section" data-num="03" aria-label="Preserving Lake Helen's heritage trees">
  <div class="container">
    <div class="lh-title" data-animate>
      <span class="lh-eyebrow-label">Preserve, Don&rsquo;t Just Cut</span>
      <h2>How do you care for heritage trees in Lake Helen&rsquo;s historic district?</h2>
      <p class="answer-block"><?php echo e($siteName); ?> cares for heritage trees in Lake Helen&rsquo;s historic district by pruning first and removing only when a tree is a hazard. The photos and notes below show what that means on a real oak: collar cuts, measured crown reduction and a plain explanation at the estimate.</p>
    </div>

    <div class="lh-heritage-bento">
      <figure class="lh-bento-cell lh-bento-photo-a" data-animate>
        <?php echo p1_picture($photoOak['src'], $photoOak['alt'], 800, 640, '(max-width: 768px) 100vw, 800px'); ?>
        <figcaption>Careful in-canopy pruning of a mature live oak near Lake Helen, FL</figcaption>
      </figure>

      <div class="lh-bento-ethos reveal-delay-1" data-animate>
        <div class="lh-ethos-icon"><?php echo icon('scissors'); ?></div>
        <h3>Arborist cuts, not butcher cuts</h3>
        <p>Branch-collar pruning and measured crown reduction keep heritage oaks structurally sound &mdash; never topping, never lion-tailing.</p>
      </div>

      <figure class="lh-bento-cell lh-bento-photo-b reveal-delay-2" data-animate>
        <?php echo p1_picture($photoCanopy['src'], $photoCanopy['alt'], 500, 640, '(max-width: 768px) 100vw, 600px'); ?>
        <figcaption>Reducing a storm-stressed spar safely, section by section</figcaption>
      </figure>

      <div class="lh-bento-stat reveal-delay-1" data-animate>
        <span class="lh-stat-num"><?php echo e($yearsInBusiness); ?>+</span>
        <span class="lh-stat-label">Years reading Volusia County&rsquo;s live oaks and pines</span>
      </div>

      <div class="lh-bento-ethos reveal-delay-2" data-animate>
        <div class="lh-ethos-icon"><?php echo icon('shield-check'); ?></div>
        <h3>Remove only when it&rsquo;s truly a hazard</h3>
        <p>Decay, a failing root plate, or a limb over the roof earns removal. A tree that can be saved with pruning gets saved &mdash; we tell you straight at the estimate.</p>
      </div>
    </div>

    <!-- Cassadaga historic-district note block -->
    <aside class="lh-cassadaga" data-animate aria-label="Cassadaga historic district note">
      <div class="lh-cass-badge"><?php echo icon('landmark'); ?></div>
      <div>
        <h3>A note on the Cassadaga historic district</h3>
        <p>The oaks lining the Southern Cassadaga Spiritualist Camp are part of Lake Helen&rsquo;s identity. Work near them calls for extra restraint: light pruning, a record of what was cut and why, and a check with the City of Lake Helen or Volusia County on any permit question before a saw touches a protected tree.</p>
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
      <h2>Which tree services are available in Lake Helen, FL?</h2>
    </div>
    <p class="answer-block" data-animate>The tree services available in Lake Helen are arborist consultation, pruning, crown reduction, maintenance, hazardous tree removal and trimming. <?php echo e($siteName); ?> starts each job with an on-site assessment and a written estimate. For a tree you are unsure about, begin with <a href="/services/certified-arborist-services/">an arborist assessment of the tree&rsquo;s health and structure</a>.</p>

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
      <h2>Why do Lake Helen homeowners choose God&rsquo;s Country?</h2>
      <p class="answer-block">Lake Helen homeowners choose God&rsquo;s Country because the crew treats an old oak as something to keep. The three points below cover how the save-or-remove call is made, how close the DeLand yard is, and what paperwork comes with the job.</p>
    </div>

    <div class="lh-why-grid">
      <article class="lh-why-card card-tint-1 reveal-delay-1" data-animate>
        <div class="lh-why-icon"><?php echo icon('clipboard-check'); ?></div>
        <h3>A save-or-remove call you can follow</h3>
        <p>In a town built around its canopy, the save-or-remove call matters. We preserve Lake Helen&rsquo;s heritage oaks whenever the tree can be made safe, and we explain the reasoning in plain terms when it cannot.</p>
      </article>

      <article class="lh-why-card card-tint-2 reveal-delay-2" data-animate>
        <div class="lh-why-icon"><?php echo icon('map-pin'); ?></div>
        <h3>Local, not passing through</h3>
        <p>Our DeLand yard is about six miles from Lake Helen, just off I-4. We are here in February for scheduled pruning as well as in September when a storm has come through.</p>
      </article>

      <article class="lh-why-card card-tint-3 reveal-delay-3" data-animate>
        <div class="lh-why-icon"><?php echo icon('file-check'); ?></div>
        <h3>Insurance proof and a written scope</h3>
        <p>Every Lake Helen job comes with proof of insurance on request and a written estimate after the site visit, with permit questions on protected trees raised before any work begins.</p>
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
        <div class="lh-faq-icon"><?php echo icon('help-circle'); ?></div>
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
    <span class="lh-eyebrow-label">No-Cost Visit &middot; Estimate in Writing</span>
    <h2>Get a Free Estimate in Lake Helen</h2>
    <p>Tell us about the heritage oak that needs a careful hand, the hazard pine over the roof, or the storm debris along the lake. <?php echo e($siteName); ?> will walk the property, tell you what can be saved, and send a written price.</p>
    <div class="lh-cta-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Request a Written Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>
  </div>
</section>

<p class="lh-last-updated">Last Updated: <?php echo date('F Y'); ?></p>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
