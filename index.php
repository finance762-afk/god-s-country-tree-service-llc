<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * index.php — Homepage
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 3 — targets ONE cluster: "tree service deland fl"
 * ============================================================
 */

$currentPage = 'home';

// V2.1 trade-noun title (59 chars) + V2.2 CTR meta (trade noun + city,
// differentiators, CTA — 152 chars)
$pageTitle       = "Tree Service in DeLand, FL | God's Country Tree Service LLC";
$pageDescription = "DeLand, FL tree service with 12+ years local experience — licensed & insured, 24/7 storm cleanup, free estimates within 24 hours. Request yours today.";
$canonicalUrl    = $siteUrl . '/';

// ---- Image allocation (curated from client photo library) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062762583-gyhtdt-489069018_1475682530496918_5987390642167918859_n.webp'; // fallen tree + grapple loader, landscape
$statsImage       = $imgBase . '1784062729745-ekffah-31162327_2042462179307717_7701525571804594176_n.webp'; // land clearing, excavator
$aboutImage       = 'https://i.imgur.com/7RtOm11.jpeg'; // crew member portrait
$ogImage          = $heroImage;
$heroImagePreload = $heroImage;

// ---- Homepage service cards: first 8 services + curated photos ----
// Icons are Lucide names; every adjacent card differs. Exactly 3 bullets each.
$homeServiceCards = [
    [
        'slug'    => 'tree-planting-shrub-installation',
        'name'    => 'Tree Planting & Shrub Installation',
        'icon'    => 'sprout',
        'img'     => $imgBase . '1784062733583-jhvosk-35788256_2078205079066760_5169623066409435136_n.webp',
        'alt'     => 'Freshly planted and mulched landscape beds with palms and shrubs installed in DeLand, FL',
        'desc'    => 'Tree and shrub planting for DeLand homes and commercial properties.',
        'bullets' => ['Florida native species guidance', 'Homes, businesses & HOAs', 'Planted for healthy growth'],
    ],
    [
        'slug'    => 'tree-trimming-services',
        'name'    => 'Tree Trimming Services',
        'icon'    => 'scissors',
        'img'     => $imgBase . '1784062768583-3pwb0r-650559399_1767273341337834_4780224751141932631_n.webp',
        'alt'     => 'Climber trimming limbs inside a live oak canopy during tree trimming in DeLand, FL',
        'desc'    => 'Seasonal and routine trimming for trees of every size.',
        'bullets' => ['Seasonal & routine schedules', 'All tree sizes handled', 'Health, looks & safety'],
    ],
    [
        'slug'    => 'tree-pruning-services',
        'name'    => 'Tree Pruning Services',
        'icon'    => 'leaf',
        'img'     => $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp',
        'alt'     => 'Roped arborist pruning branches inside an oak canopy in DeLand, FL',
        'desc'    => 'Precision pruning that improves structure, health, and appearance.',
        'bullets' => ['Certified arborist techniques', 'Stronger branch structure', 'Healthier long-term growth'],
    ],
    [
        'slug'    => 'crown-reduction-shaping',
        'name'    => 'Crown Reduction & Shaping',
        'icon'    => 'tree-deciduous',
        'img'     => $imgBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp',
        'alt'     => 'Cleanly reduced and shaped mature oak crown against blue sky after crown reduction in DeLand, FL',
        'desc'    => 'Reduce weight and reshape overgrown or storm-stressed canopies.',
        'bullets' => ['Reduces storm-load weight', 'Better light penetration', 'Reshapes overgrown canopies'],
    ],
    [
        'slug'    => 'tree-removal',
        'name'    => 'Tree Removal',
        'icon'    => 'axe',
        'img'     => $imgBase . '1784062730346-5nqz2k-31180126_2042462089307726_2780749710774763520_n.webp',
        'alt'     => 'Roped climber sectioning a large live oak during tree removal in DeLand, FL',
        'desc'    => 'Safe, controlled removal for trees of all sizes.',
        'bullets' => ['Trees of all sizes', 'Controlled section takedowns', 'Debris hauled away'],
    ],
    [
        'slug'    => 'dead-hazardous-tree-removal',
        'name'    => 'Dead & Hazardous Tree Removal',
        'icon'    => 'shield-alert',
        'img'     => $imgBase . '1784062737583-f7n0kp-37107879_2101564903397444_7138537925750292480_n.webp',
        'alt'     => 'Chip truck and boom lift set up at a dead double-trunk tree leaning over a DeLand home',
        'desc'    => 'Specialized removal of dead and diseased trees threatening your property.',
        'bullets' => ['Dead & diseased specialists', 'Safe extraction & disposal', 'Protects roofs & fences'],
    ],
    [
        'slug'    => 'emergency-tree-service-storm-cleanup',
        'name'    => 'Emergency Tree Service & Storm Cleanup',
        'icon'    => 'zap',
        'img'     => $imgBase . '1784062761586-95i7hi-487384453_1464923548239483_3259835514318021231_n.webp',
        'alt'     => 'Climber topping a storm-damaged tree spar against the sky during emergency tree service near DeLand, FL',
        'desc'    => '24-hour response for storm damage and urgent hazards.',
        'bullets' => ['24-hour storm response', 'Same-day hazard assessment', 'Homes & businesses covered'],
    ],
    [
        'slug'    => 'fallen-tree-removal-cleanup',
        'name'    => 'Fallen Tree Removal & Cleanup',
        'icon'    => 'truck',
        'img'     => $imgBase . '1784062753583-2wp304-76756943_2456228011264463_6144757071268020224_n.webp',
        'alt'     => 'Grapple loader carrying a massive fresh-cut log section during fallen tree cleanup in DeLand, FL',
        'desc'    => 'Rapid removal of downed trees plus full site cleanup.',
        'bullets' => ['Rapid response cleanup', 'Full debris removal', 'Site restoration included'],
    ],
];

// ---- Ticker strip items (all grounded in intake data) ----
$tickerItems = [
    'Licensed &amp; Insured',
    '12+ Years in Business',
    '24/7 Storm Response',
    'Free Estimates in 24 Hours',
    'Certified Arborists',
    'Residential &amp; Commercial',
    'Tree &amp; Land Clearing',
    'Serving Volusia County',
    'DeLand, Florida — Since 2014',
    'Debris Removal Included',
];

// ---- Stats (grounded: years, service count, radius, 24/7) ----
$homeStats = [
    ['counter' => 12, 'suffix' => '+',      'label' => 'Years in Business'],
    ['counter' => 12, 'suffix' => '',       'label' => 'Specialized Tree Services'],
    ['counter' => 50, 'suffix' => '-Mile',  'label' => 'Service Radius'],
    ['counter' => 24, 'suffix' => '/7',     'label' => 'Emergency Storm Response'],
];

// ---- Named numbered process ----
$processSteps = [
    ['title' => 'Walk & Assess',  'text' => 'We walk your property with you, look at every tree in question, and give you an honest read on what needs work — and what doesn\'t.'],
    ['title' => 'Straight Quote', 'text' => 'You get a free, no-obligation estimate within 24 hours. Most quotes include debris removal and stump grinding, so there are no surprise add-ons.'],
    ['title' => 'Safe Work',      'text' => 'A licensed, insured crew with certified arborist expertise handles the rigging, cutting, and lowering — protecting your roof, fences, and landscaping.'],
    ['title' => 'Clean Sweep',    'text' => 'We haul the debris, grind the stump when quoted, and do a final walkthrough with you before we call the job done.'],
];

// ---- FAQs (research brief + service-area question) ----
$faqs = [
    [
        'q' => 'Do you offer emergency tree removal after storms?',
        'a' => "Yes. God's Country Tree Service provides 24/7 emergency response for storm damage throughout the DeLand area. Call us immediately after severe weather — we'll assess hazards and schedule removal same-day when it's safe to do so.",
    ],
    [
        'q' => 'Are you licensed and insured?',
        'a' => "Absolutely. Our team holds Florida arborist certifications and maintains full liability and workers' compensation insurance. We can provide proof on request.",
    ],
    [
        'q' => 'How much does tree removal cost in DeLand?',
        'a' => 'Pricing depends on tree size, location, health, and removal complexity. We offer free estimates within 24 hours — no obligation. Most estimates include debris removal and stump grinding.',
    ],
    [
        'q' => 'What types of trees do you service?',
        'a' => "We specialize in Florida native species including oaks, pines, and palms, as well as common ornamental trees. We'll assess health and recommend the best care — whether pruning, removal, or stump grinding.",
    ],
    [
        'q' => 'Do you handle preventative tree care?',
        'a' => 'Yes. We offer pruning, health assessments, and crown thinning to reduce storm risk and improve tree appearance. Regular maintenance can extend tree life and prevent costly emergency removals.',
    ],
    [
        'q' => 'What areas do you serve around DeLand?',
        'a' => "We're based in DeLand (32720) and work within roughly 50 miles across Volusia County — including Deltona, Orange City, DeBary, and Lake Helen — for homeowners, businesses, and HOA communities.",
    ],
];

// FAQPage schema (AI comprehension aid — helper verified in functions.php)
$pageSchema = generateFAQSchema($faqs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Homepage — page-specific styles
   God's Country Tree Service LLC — DeLand, FL
   All values from :root tokens (no hardcoded colors/shadows/spacing)
   ============================================================ */

/* ---- C1.2 Layered Split Hero: photo bg + gradient + noise ---- */
.home-hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 0;
  overflow: hidden;
}
.home-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    118deg,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 82%, transparent) 45%,
    color-mix(in srgb, var(--color-primary) 55%, transparent) 100%
  );
}
.home-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  opacity: 0.4;
  pointer-events: none;
}
.home-hero .hero-inner {
  position: relative;
  z-index: 2;
  width: 100%;
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-12);
  align-items: center;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-16);
}

/* ---- C2 Hero content composition + cascade entrance ---- */
.hero-text { max-width: 60ch; }
.home-hero .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 12%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-6);
  animation: heroFadeDown 0.65s ease both;
}
.home-hero .hero-eyebrow svg { width: 14px; height: 14px; }
.hero-title {
  font-size: clamp(2.4rem, 5vw, 4.2rem);
  font-weight: 800;
  line-height: 1.08;
  letter-spacing: -0.025em;
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-5);
  animation: heroFadeUp 0.65s ease 0.12s both;
}
.hero-title .gradient-text {
  background: linear-gradient(135deg, var(--color-white) 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  color: var(--color-accent);
}
.home-hero .hero-subtitle {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-family: var(--font-accent);
  font-size: var(--font-size-lg);
  font-weight: 500;
  max-width: 56ch;
  margin: 0 0 var(--space-8);
  animation: heroFadeUp 0.65s ease 0.25s both;
}
.hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
  animation: heroFadeUp 0.65s ease 0.38s both;
}
.home-hero .hero-trust {
  display: flex;
  gap: var(--space-4) var(--space-6);
  justify-content: flex-start;
  flex-wrap: wrap;
  animation: heroFadeUp 0.65s ease 0.5s both;
}
.home-hero .hero-trust-item svg,
.home-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
  flex-shrink: 0;
}
@keyframes heroFadeDown {
  from { opacity: 0; transform: translateY(-14px); }
  to   { opacity: 1; transform: translateY(0); }
}
@keyframes heroFadeUp {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ---- Hero lead-capture form card (glassmorphism) ---- */
.hero-form-card {
  background: color-mix(in srgb, var(--color-white) 92%, transparent);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border: 1px solid color-mix(in srgb, var(--color-white) 55%, transparent);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: var(--space-8) var(--space-6);
  animation: heroFadeUp 0.65s ease 0.3s both;
}
.hero-form-card h2 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.hero-form-tagline {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-bottom: var(--space-5);
}
.hero-form .form-row { margin-bottom: var(--space-3); }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: var(--space-4);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-text);
  background: var(--color-white);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.hero-form select { appearance: auto; }
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: var(--color-primary);
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--color-primary) 12%, transparent);
}
.hero-form input::placeholder { color: var(--color-gray); }
.btn-block { width: 100%; }
.form-footnote {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin: var(--space-3) 0 0;
  text-align: center;
}
.form-footnote a { text-decoration: underline; }

/* ---- Ticker strip (framework base; duplicate track for loop) ---- */
.ticker-strip { border-top: 4px solid var(--color-primary-dark); }
.ticker-track li {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: var(--color-dark);
  text-transform: uppercase;
  letter-spacing: 1px;
  list-style: none;
}
.ticker-track li::before {
  content: '\2726';
  color: var(--color-primary);
  font-size: var(--font-size-xs);
}

/* ---- C5.1 Numbered section eyebrows (watermark digits) ---- */
.numbered-section { position: relative; }
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-4);
  right: clamp(1rem, 4vw, 3rem);
  font-family: var(--font-heading);
  font-size: clamp(6rem, 14vw, 11rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 6%, transparent);
  pointer-events: none;
  z-index: 0;
}
.numbered-section--dark::before {
  color: color-mix(in srgb, var(--color-white) 7%, transparent);
}
.numbered-section > .container { position: relative; z-index: 1; }

/* ---- Section title block (required component wrapper) ---- */
.section-title { text-align: center; margin-bottom: var(--space-12); }
.section-title h2 {
  margin-bottom: var(--space-4);
  max-width: 26ch;
  margin-left: auto;
  margin-right: auto;
}
.section-title .hero-answer { margin-bottom: var(--space-3); }
.section-subtitle {
  display: block;
  font-family: var(--font-accent);
  font-weight: 600;
  color: var(--color-accent);
  font-size: var(--font-size-xl);
  margin-top: var(--space-2);
  margin-bottom: var(--space-4);
  line-height: 1.3;
}
.section-title .prose {
  margin-left: auto;
  margin-right: auto;
  color: var(--color-gray);
}

/* ---- C6.1 Asymmetric services grid: featured card spans 2x2 ---- */
.services-grid--home { grid-auto-rows: auto; }
@media (min-width: 1200px) {
  .service-card-with-image--featured {
    grid-column: span 2;
    grid-row: span 2;
  }
  .service-card-with-image--featured .service-card__image { aspect-ratio: 16 / 10; }
  .service-card-with-image--featured h3 { font-size: var(--fs-h3); }
  .service-card-with-image--featured .service-card__desc { font-size: var(--font-size-lg); }
}
@media (max-width: 1199px) and (min-width: 601px) {
  .service-card-with-image--featured { grid-column: span 2; }
}
.services-more { text-align: center; margin-top: var(--space-10); }

/* Reveal stagger delays (pairs with framework data-animate system) */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- C7.2 Signature: full-bleed photo + overlay stat counters ---- */
.stats-signature {
  position: relative;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  padding: clamp(5rem, 12vh, 9rem) 0;
}
@media (hover: none) {
  .stats-signature { background-attachment: scroll; }
}
.stats-signature::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 78%, transparent) 100%
  );
}
.stats-signature .container { position: relative; z-index: 1; }
.stats-signature .section-title { margin-bottom: var(--space-10); }
.stats-signature .section-title h2 { color: var(--color-white); }
.stats-signature .section-title p {
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  max-width: 640px;
  margin-left: auto;
  margin-right: auto;
}
/* C6.3 stats band with internal dividers */
.stats-signature .stat-item {
  border-left: 1px solid color-mix(in srgb, var(--color-white) 18%, transparent);
  padding-left: var(--space-6);
  text-align: left;
}
.stats-signature .stat-item:first-child { border-left: 0; padding-left: 0; }
.stats-signature .stat-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-6xl);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1;
}
.stats-signature .stat-number .stat-accent { color: var(--color-accent); }
.stats-signature .stat-label {
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  margin-top: var(--space-2);
  text-transform: uppercase;
  letter-spacing: 1px;
}
@media (max-width: 768px) {
  .stats-signature .stat-item,
  .stats-signature .stat-item:first-child {
    border-left: 0;
    padding-left: 0;
    text-align: center;
  }
}

/* ---- SVG section dividers (3 distinct styles) ---- */
.svg-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(36px, 6vw, 72px);
  position: relative;
  z-index: 2;
}
.svg-divider svg { display: block; width: 100%; height: 100%; }
.svg-divider--diagonal {
  background: var(--color-white);
  margin-bottom: -1px; /* prevent subpixel seam against the next section */
}

/* ---- Mid-page CTA banner (framework base + angled edge) ---- */
.cta-banner--angled {
  clip-path: polygon(0 0, 100% clamp(12px, 2vw, 24px), 100% 100%, 0 calc(100% - clamp(12px, 2vw, 24px)));
}
.cta-banner .btn { margin: 0 var(--space-2); }

/* ---- About / process section ---- */
.about-section { background: var(--color-cream); }
.about-section .about-content .eyebrow-label { margin-bottom: var(--space-2); }
.about-lede {
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.process-steps {
  list-style: none;
  margin-top: var(--space-8);
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
  counter-reset: step;
}
/* C6.5 numbered circles */
.process-step {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.process-step::before {
  counter-increment: step;
  content: counter(step, decimal-leading-zero);
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: var(--font-size-base);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 0 6px color-mix(in srgb, var(--color-primary) 10%, transparent);
}
.process-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-1);
}
.process-step p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  margin: 0;
  max-width: 52ch;
}
.about-section .about-image img {
  aspect-ratio: 4 / 5;
  object-fit: cover;
  box-shadow: var(--shadow-lg);
}
/* 11.1 framed offset shadow treatment on the about photo */
.about-image--framed { position: relative; }
.about-image--framed::before {
  content: '';
  position: absolute;
  inset: var(--space-4) calc(-1 * var(--space-4)) calc(-1 * var(--space-4)) var(--space-4);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-lg);
  z-index: 0;
  pointer-events: none;
}
.about-image--framed img { position: relative; z-index: 1; }
.about-image--framed .stat-overlay { z-index: 2; }

/* ---- Reviews (Elfsight embed + real profile badges) ---- */
.reviews-home { background: var(--color-light); }
.reviews-embed { margin: 0 auto var(--space-10); max-width: var(--max-width); }
.review-badge-strip {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-4);
  flex-wrap: wrap;
}
.review-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.review-badge:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
  color: var(--color-primary);
}
.review-badge svg, .review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- FAQ section ---- */
.faq-home { background: var(--color-white); }
.faq-home .faq-item { align-items: flex-start; }
.faq-home .faq-icon svg, .faq-home .faq-icon i { width: 20px; height: 20px; }

/* ---- C9.2 Closing CTA with radial glow ---- */
.closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(5rem, 12vh, 8rem) 0;
  text-align: center;
  overflow: hidden;
}
.closing-cta::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  height: 160%;
  background: radial-gradient(
    ellipse at center,
    color-mix(in srgb, var(--color-primary) 45%, transparent) 0%,
    transparent 65%
  );
  pointer-events: none;
}
.closing-cta .container { position: relative; z-index: 1; }
.closing-cta h2 {
  color: var(--color-white);
  max-width: 24ch;
  margin: 0 auto var(--space-4);
}
.closing-cta p {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 58ch;
  margin: 0 auto var(--space-8);
}
.closing-cta .hero-actions { justify-content: center; margin-bottom: 0; animation: none; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .home-hero .hero-inner {
    grid-template-columns: 1fr;
    gap: var(--space-10);
    padding-top: calc(var(--nav-height) + var(--space-10));
  }
  .hero-form-card { max-width: 560px; }
}
@media (max-width: 768px) {
  .home-hero { min-height: auto; }
  .hero-title { font-size: clamp(2.1rem, 8vw, 2.8rem); }
  .numbered-section::before { font-size: clamp(4rem, 18vw, 7rem); }
  .about-image--framed::before { display: none; }
  .stats-signature .stats-grid { text-align: center; }
}
@media (max-width: 480px) {
  .hero-actions { flex-direction: column; align-items: stretch; }
  .hero-form-card { padding: var(--space-6) var(--space-4); }
  .cta-banner .btn { margin: var(--space-2) 0; display: flex; }
}
</style>

<!-- ============ HERO — split layout, photo bg, lead form ============ -->
<section class="hero home-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service in DeLand, Florida">
  <div class="hero-inner container">

    <div class="hero-text">
      <span class="hero-eyebrow">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
        Serving DeLand Since <?php echo e($yearEstablished); ?>
      </span>

      <h1 class="hero-title">Tree Service in DeLand, FL &mdash; <span class="gradient-text text-accent">Year-Round Care</span></h1>

      <p class="hero-subtitle"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving homes, businesses, and HOA communities across Volusia County since <?php echo e($yearEstablished); ?>. Certified arborist expertise, 24-hour emergency response when you need it, and free estimates within 24 hours &mdash; from the local crew who's here year-round.</p>

      <div class="hero-actions">
        <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="<?php echo e(phoneHref($phone)); ?>" class="btn btn-outline-white btn-lg">Call Now <?php echo e(formatPhone($phone)); ?></a>
        <?php else: ?>
        <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
        <?php endif; ?>
      </div>

      <div class="hero-trust">
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
          Licensed &amp; Insured
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
          <?php echo e($yearsInBusiness); ?>+ Years in DeLand
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          24/7 Storm Response
        </span>
        <span class="hero-trust-item">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
          Free Estimates
        </span>
      </div>
    </div>

    <!-- Hero lead-capture form -->
    <aside class="hero-form-card" id="estimate-form">
      <h2>Get Your Free Estimate</h2>
      <p class="hero-form-tagline">No obligation. Response within 24 hours.</p>
      <form action="<?php echo e($formAction); ?>" method="POST" class="hero-form">
        <!-- Formsubmit.co directives -->
        <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_subject" value="New estimate request from <?php echo e($_SERVER['HTTP_HOST'] ?? 'website'); ?>">
        <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
        <!-- Honeypot -->
        <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
        <!-- Tracking -->
        <input type="hidden" name="form_location" value="hero">
        <input type="hidden" name="consent_version" value="v2.1">
        <input type="hidden" name="consent_page" value="<?php echo e($_SERVER['REQUEST_URI'] ?? '/'); ?>">

        <div class="form-row">
          <label for="hero-name" class="sr-only" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">Full name</label>
          <input type="text" id="hero-name" name="name" placeholder="Full name" required>
        </div>
        <div class="form-row">
          <label for="hero-phone" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">Phone number</label>
          <input type="tel" id="hero-phone" name="phone" placeholder="Phone number" required>
        </div>
        <div class="form-row">
          <label for="hero-zip" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">ZIP code</label>
          <input type="text" id="hero-zip" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" inputmode="numeric" required>
        </div>
        <div class="form-row">
          <label for="hero-service" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">Service needed</label>
          <select id="hero-service" name="service_requested" data-p1-dynamic>
            <option value="">What do you need?</option>
            <?php foreach ($services as $svc): ?>
            <option value="<?php echo e($svc['name']); ?>"><?php echo e($svc['name']); ?></option>
            <?php endforeach; ?>
            <option value="Something else">Something else</option>
          </select>
        </div>
        <button type="submit" class="btn btn-accent btn-block btn-lg">Get My Free Estimate</button>
        <p class="form-footnote">By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</p>
      </form>
    </aside>

  </div>
</section>

<!-- ============ TICKER STRIP ============ -->
<div class="ticker-strip" aria-hidden="true">
  <ul class="ticker-track" data-p1-dynamic>
    <?php for ($i = 0; $i < 2; $i++): foreach ($tickerItems as $item): ?>
    <li><?php echo $item; ?></li>
    <?php endforeach; endfor; ?>
  </ul>
</div>

<!-- ============ SERVICES — 01 ============ -->
<section class="numbered-section services-home" data-num="01" aria-label="Tree services">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>What Tree Services Does God's Country Tree Service Offer in <span class="text-accent">DeLand</span>?</h2>
      <p class="hero-answer"><?php echo e($siteName); ?> provides twelve tree services in DeLand, FL &mdash; tree removal, trimming, pruning, crown reduction, dead and hazardous tree removal, 24-hour emergency storm cleanup, fallen tree cleanup, tree planting, and certified arborist care &mdash; for homeowners, businesses, and HOA communities across Volusia County.</p>
      <span class="section-subtitle"><?php echo e($tagline); ?></span>
      <p class="prose">One local crew handles the whole job &mdash; climbing, rigging, skid-steer work, debris hauling, and stump grinding &mdash; so you never juggle multiple contractors.</p>
    </div>

    <div class="services-grid services-grid--home" data-p1-dynamic>
      <?php foreach ($homeServiceCards as $i => $card):
          $tint  = ($i % 3) + 1;
          $delay = ($i % 3) + 1;
          $featured = $i === 0 ? ' service-card-with-image--featured' : '';
      ?>
      <article class="service-card-with-image card-tint-<?php echo $tint; ?><?php echo $featured; ?> reveal-up reveal-delay-<?php echo $delay; ?>" data-animate>
        <div class="service-card__image">
          <img src="<?php echo e($card['img']); ?>" alt="<?php echo e($card['alt']); ?>" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($card['icon']); ?></div>
          <h3><?php echo e($card['name']); ?></h3>
          <p class="service-card__desc"><?php echo e($card['desc']); ?></p>
          <ul>
            <?php foreach ($card['bullets'] as $bullet): ?>
            <li><?php echo e($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo e($card['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="services-more" data-animate>
      <a href="/services/" class="btn btn-secondary btn-lg">View All <?php echo count($services); ?> Services &rarr;</a>
    </div>

  </div>
</section>

<!-- Divider 1: diagonal (white → dark stats) -->
<div class="svg-divider svg-divider--diagonal" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-dark)" points="0,60 1200,8 1200,60"/></svg>
</div>

<!-- ============ STATS — signature full-bleed photo + counters ============ -->
<section class="stats-signature" style="background-image:url('<?php echo e($statsImage); ?>');" aria-label="Company statistics">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label" style="color: var(--color-accent);">The Track Record</span>
      <h2>Twelve Years of Tree Work in God's Country</h2>
      <p><?php echo e($siteName); ?> has been climbing, cutting, and cleaning up DeLand's oaks, pines, and palms since <?php echo e($yearEstablished); ?> &mdash; building relationships with homeowners and businesses who value consistent, professional care.</p>
    </div>
    <div class="stats-grid" data-p1-dynamic>
      <?php foreach ($homeStats as $stat): ?>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="<?php echo e($stat['counter']); ?>" data-suffix="<?php echo e($stat['suffix']); ?>">0</span></div>
        <div class="stat-label"><?php echo e($stat['label']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Divider 2: double wave (dark → cta gradient) -->
  <div class="svg-divider" aria-hidden="true" style="position:absolute; bottom:0; left:0; right:0;">
    <svg viewBox="0 0 1200 100" preserveAspectRatio="none">
      <path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-primary-dark)" opacity="0.4"/>
      <path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-primary-dark)"/>
    </svg>
  </div>
</section>

<!-- ============ MID-PAGE CTA BANNER ============ -->
<section class="cta-banner" aria-label="Preventative care call to action">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Smart Tree Care</span>
    <h2>Regular Maintenance Keeps Your Property Safe Year-Round</h2>
    <p>Addressing tree issues early — dead limbs, poor structure, or unstable growth — is more affordable and safer than waiting for problems to escalate. Get a free assessment from a certified arborist, and know you have 24/7 support if something unexpected happens.</p>
    <a href="#estimate-form" class="btn btn-accent btn-lg">Request a Free Assessment</a>
    <a href="/services/emergency-tree-service-storm-cleanup/" class="btn btn-outline-white btn-lg">24/7 Emergency Response</a>
  </div>
</section>

<!-- ============ ABOUT + PROCESS — 02 ============ -->
<section class="numbered-section about-section" data-num="02" aria-label="About God's Country Tree Service">
  <div class="container">
    <div class="about-split">

      <div class="about-content">
        <span class="eyebrow-label">Local Roots</span>
        <h2>Why DeLand Homeowners Call <span class="text-accent">God's Country</span> First</h2>
        <p class="about-lede" data-animate><?php echo e($siteName); ?> was built in DeLand. Since <?php echo e($yearEstablished); ?>, the same local crew has handled Volusia County's oaks, pines, and palms &mdash; with the licensing, insurance, and certified arborist expertise that comes from year-round service.</p>
        <p data-animate>You'll see our branded trucks and skid steers on DeLand streets all year. Tree work and land clearing from one provider means the job gets finished &mdash; cut, hauled, ground, and graded &mdash; without a second contractor.</p>

        <h3 style="margin-top: var(--space-8);">The God's Country 4-Step Process</h3>
        <ol class="process-steps" data-p1-dynamic>
          <?php foreach ($processSteps as $step): ?>
          <li class="process-step" data-animate="left">
            <div>
              <h3><?php echo e($step['title']); ?></h3>
              <p><?php echo e($step['text']); ?></p>
            </div>
          </li>
          <?php endforeach; ?>
        </ol>
      </div>

      <div class="about-image about-image--framed" data-animate="right">
        <img src="<?php echo e($aboutImage); ?>" alt="God's Country Tree Service crew member in company shirt and cap in DeLand, FL" width="600" height="750" loading="lazy">
        <div class="stat-overlay">
          <div class="big-number"><?php echo e($yearsInBusiness); ?>+</div>
          <div class="label">Years in DeLand</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ REVIEWS — 03 ============ -->
<section class="numbered-section reviews-home" data-num="03" aria-label="Customer reviews">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Reviews</span>
      <h2>What DeLand Neighbors Say About Our <span class="text-accent">Tree Work</span></h2>
      <p class="prose">Real reviews from real jobs around Volusia County &mdash; pulled live from our Google Business Profile.</p>
    </div>

    <!-- Elfsight reviews widget (intake-provided embed, pasted verbatim) -->
    <div class="reviews-embed">
      <?php echo $integrations['elfsight_embed']; ?>
    </div>

    <div class="review-badge-strip" data-animate>
      <a class="review-badge" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('star'); ?> Review Us on Google
      </a>
      <a class="review-badge" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('badge-check'); ?> BBB Business Profile
      </a>
    </div>
  </div>

  <!-- Divider 3: torn/organic edge (light → white FAQ) -->
  <div class="svg-divider" aria-hidden="true" style="position:absolute; bottom:0; left:0; right:0;">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z" fill="var(--color-white)"/></svg>
  </div>
</section>

<!-- ============ FAQ — 04 ============ -->
<section class="numbered-section faq-home" data-num="04" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>Tree Service Questions DeLand Homeowners <span class="text-accent">Actually Ask</span></h2>
      <p class="prose">Straight answers on cost, storm response, licensing, and what we service. Have a different one? Ask it in the estimate form &mdash; we respond within 24 hours.</p>
    </div>

    <div class="faq-grid" data-p1-dynamic>
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-icon"><?php echo icon('help-circle'); ?></div>
        <div>
          <h3><?php echo e($faq['q']); ?></h3>
          <p><?php echo e($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="closing-cta" aria-label="Get a free estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Fast &middot; No Obligation</span>
    <h2>Get Your Free Tree Service Estimate in DeLand</h2>
    <p>Tell us what's going on with your trees &mdash; a leaning oak, storm damage, an overgrown canopy, or a planting project. <?php echo e($siteName); ?> responds within 24 hours with a straight, all-in quote.</p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
