<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/tree-removal/index.php — Tree Removal (EXEMPLAR)
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'tree-removal';

// V2.1 trade-noun title (55 chars) + V2.2 CTR meta (155 chars)
$pageTitle       = "Tree Removal in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Tree removal in DeLand, FL by a licensed & insured local tree service — 12+ years, controlled takedowns, debris hauled. Get your free estimate in 24 hours.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062730640-gzvyp4-31206267_2042462085974393_6334697554642468864_n.webp'; // pines marked red X, chipper crew behind
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'grapple' => [
        'src' => $imgBase . '1784062753583-2wp304-76756943_2456228011264463_6144757071268020224_n.webp',
        'alt' => 'Grapple loader carrying a massive fresh-cut oak log section in DeLand, FL',
    ],
    'boomlift' => [
        'src' => $imgBase . '1784062731804-lsu1hl-35521317_2074717906082144_948088325212733440_n.webp',
        'alt' => 'Boom lift crew topping a tall pine over a home in DeLand, FL',
    ],
    'slab' => [
        'src' => $imgBase . '1784062755583-5oqzq0-161812504_2868738946680032_6599345448414427184_n.webp',
        'alt' => 'Crew member holding a huge cross-cut trunk slab after a DeLand, FL tree removal',
    ],
];

// ---- Telltale signs (problem statement bento) ----
$removalSigns = [
    ['icon' => 'triangle-alert', 'title' => 'A new or worsening lean',       'text' => 'A tree that started leaning after a storm — or leans a little more each season — is telling you its root plate is losing grip in DeLand\'s sandy soil.'],
    ['icon' => 'home',           'title' => 'Deadwood over the roof',        'text' => 'Large dead limbs parked over a roof, driveway, or pool enclosure are the most common damage we get called to clean up after — and the cheapest to prevent.'],
    ['icon' => 'bug',            'title' => 'Fungus, cavities, or dieback',  'text' => 'Mushrooms at the base, hollow-sounding trunk sections, and a thinning crown all point to internal decay you can\'t judge from the ground.'],
    ['icon' => 'zap',            'title' => 'Too close to lines or walls',   'text' => 'Trunks pushing against foundations, fences, or service drops rarely improve. Controlled removal beats waiting for the tree to decide the timing.'],
];

// ---- Sticky process timeline steps ----
$removalSteps = [
    ['title' => 'Walk-through & straight answer', 'text' => 'We look at the tree, the targets around it — house, pool screen, fence, lines — and tell you honestly whether it needs to come down or can be saved with pruning or crown reduction. You get a free written estimate within 24 hours.'],
    ['title' => 'Rigging plan & site protection', 'text' => 'Big DeLand oaks rarely have room to fall whole. We plan drop zones, set rigging lines, and stage plywood or mats where the loader will travel so your lawn and irrigation survive the job.'],
    ['title' => 'Controlled section takedown',    'text' => 'A climber or boom lift takes the canopy apart piece by piece. Every heavy section is roped and lowered — not dropped — which is how removals over roofs and screen enclosures stay boring.'],
    ['title' => 'Grapple, chip & haul',           'text' => 'Our grapple loader and chipper turn the canopy into a clean pile fast. Logs, brush, and debris leave on our trucks the same day — most quotes include hauling so there\'s no surprise add-on.'],
    ['title' => 'Stump & final walkthrough',      'text' => 'If stump grinding is in the quote, we grind below grade and rake the site. Then we walk the yard with you before we call it done.'],
];

// ---- Comparison: storm-chasers vs God's Country ----
$comparison = [
    ['them' => 'Trucks appear the week after a hurricane, gone by month\'s end', 'us' => 'Based in DeLand since 2014 — same crew, same trucks, year-round'],
    ['them' => 'Cash price shouted from the driveway',                            'us' => 'Free written estimate within 24 hours, debris and hauling spelled out'],
    ['them' => 'Insurance status you have to take on faith',                      'us' => 'Licensed and insured, proof on request before work starts'],
    ['them' => 'Drop-and-run: the tree is down, the mess is yours',               'us' => 'Grapple loader, chipper, and haul-off included in most quotes'],
    ['them' => 'Every tree is "gotta come down"',                                 'us' => 'Certified arborist expertise — we\'ll tell you when pruning saves the tree'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Do I need a permit to remove a tree in DeLand?',
        'a' => "Possibly — DeLand and Volusia County protect certain trees, and larger hardwoods can require a permit before removal. It depends on the tree's species, size, and where it stands on the lot. We flag permit questions during your free estimate so you know what applies to your property before any cutting starts.",
    ],
    [
        'q' => 'How long does a typical tree removal take?',
        'a' => 'Most single-tree removals in DeLand are done in half a day, including cleanup. A large live oak over a house, or multiple trees, can run a full day or two. Your written estimate includes a time window, and the crew stays until the debris is gone — not until the tree is merely on the ground.',
    ],
    [
        'q' => 'Is stump grinding included in tree removal?',
        'a' => "Most of our removal quotes include stump grinding and debris hauling so the price you approve is the price you pay. If you'd rather keep the stump — or the firewood — we quote it both ways. Either way the estimate spells it out line by line before we start.",
    ],
    [
        'q' => 'Can you remove a tree that\'s right next to my house or pool enclosure?',
        'a' => "Yes — that's most of what we do. Tight-quarters removals over roofs, pool screens, fences, and driveways are handled with roped, controlled lowering rather than free-falling sections. Between climbers, a boom lift, and a compact grapple loader, we can work yards where a crane won't fit.",
    ],
    [
        'q' => 'What happens to the wood and debris?',
        'a' => 'Brush goes through the chipper, logs go on the grapple truck, and everything leaves the same day when hauling is in your quote. Want to keep firewood rounds or milling slabs? Tell us at the estimate and we\'ll buck the trunk to length and stack it where you want it — no charge for asking.',
    ],
    [
        'q' => 'Will my homeowner\'s insurance pay for tree removal?',
        'a' => "If a tree fell on a covered structure, your policy usually helps; a standing tree removed as prevention usually isn't covered. We can't promise what your carrier will do, but we provide the written estimate, photos, and documentation adjusters ask for — DeLand homeowners have used our paperwork in claims for years.",
    ],
];

// ---- Schema: Service + FAQPage + BreadcrumbList + Speakable ----
$svc = null;
foreach ($services as $s) {
    if ($s['slug'] === $serviceSlug) { $svc = $s; break; }
}

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

$pageSchema = generateServiceSchema($svc)
    . generateFAQSchema($faqs)
    . generateBreadcrumbSchema([
        ['name' => 'Home',         'url' => '/'],
        ['name' => 'Services',     'url' => '/services/'],
        ['name' => 'Tree Removal'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Removal — page-specific styles (Phase 4 exemplar)
   Techniques: C1.4 page hero, C7.3 pull quote, bento signs grid,
   §2.6 sticky process timeline, comparison columns, C5.4 drop cap,
   C3 diagonal + torn dividers, C5.1 numbered watermarks, C9.2 glow
   All values from tokens — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.svc-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    170deg,
    color-mix(in srgb, var(--color-dark) 88%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 72%, transparent) 55%,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 100%
  );
}
.svc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.svc-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.svc-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.svc-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.svc-breadcrumb a:hover { color: var(--color-accent); }
.svc-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.svc-hero .hero-eyebrow {
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
.svc-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.6rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 24ch;
  margin-bottom: var(--space-5);
}
.svc-hero h1 .text-accent { color: var(--color-accent); }
.svc-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.svc-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.svc-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.svc-hero .hero-trust-item svg,
.svc-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- Numbered section watermarks (C5.1) ---- */
.numbered-section { position: relative; }
.numbered-section::before {
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
.numbered-section > .container { position: relative; z-index: 1; }

/* ---- Section title block ---- */
.section-title { text-align: center; margin-bottom: var(--space-12); }
.section-title h2 {
  margin-bottom: var(--space-4);
  max-width: 28ch;
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
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- C7.3 Pull quote (problem statement) ---- */
.pull-quote {
  max-width: 820px;
  margin: 0 auto var(--space-12);
  padding: var(--space-8) 0;
  border-top: 3px solid var(--color-accent);
  border-bottom: 3px solid var(--color-accent);
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.8vw, 2.1rem);
  font-weight: 500;
  font-style: italic;
  line-height: 1.35;
  letter-spacing: -0.01em;
  text-align: center;
  color: var(--color-text);
  text-wrap: balance;
}
.pull-quote strong { color: var(--color-primary); font-weight: 700; }

/* ---- Bento warning-sign cards ---- */
.signs-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.sign-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.sign-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.sign-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.sign-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.sign-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.sign-card .sign-icon {
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
.sign-card .sign-icon svg, .sign-card .sign-icon i { width: 24px; height: 24px; }
.sign-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.sign-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Expert positioning: asymmetric 60/40 split + big stat ---- */
.expert-section { background: var(--color-cream); }
.expert-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.expert-stat {
  text-align: center;
  padding: var(--space-10) var(--space-8);
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.expert-stat::before {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.expert-stat .big-number {
  font-family: var(--font-heading);
  font-size: clamp(4rem, 8vw, 6.5rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.expert-stat .big-number span { color: var(--color-accent); }
.expert-stat .big-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-2);
}
/* C5.4 editorial drop cap on the lede */
.drop-cap::first-letter {
  float: left;
  font-family: var(--font-heading);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.85;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.expert-points {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.expert-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.expert-points li svg, .expert-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.expert-points li strong { color: var(--color-primary); }
.expert-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }

/* ---- §2.6 Sticky process timeline ---- */
.process-section { background: var(--color-white); }
.process-layout {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: var(--space-12);
  align-items: start;
}
.process-sticky {
  position: sticky;
  top: calc(var(--nav-height) + var(--space-8));
}
.process-sticky h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.process-sticky .answer-block {
  color: var(--color-text);
  margin-bottom: var(--space-6);
}
.process-sticky figure { margin: 0; }
.process-sticky img {
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
  object-fit: cover;
  width: 100%;
}
.process-sticky figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}
.takedown-steps {
  list-style: none;
  counter-reset: takedown;
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.takedown-step {
  position: relative;
  counter-increment: takedown;
  padding: var(--space-6) var(--space-6) var(--space-6) var(--space-16);
  background: var(--color-light);
  border-radius: var(--radius-lg);
  border-left: 4px solid var(--color-primary);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.takedown-step:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
.takedown-step::before {
  content: counter(takedown, decimal-leading-zero);
  position: absolute;
  left: var(--space-5);
  top: var(--space-6);
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 800;
  color: var(--color-accent);
}
.takedown-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.takedown-step p {
  margin: 0;
  color: var(--color-gray);
  font-size: var(--font-size-base);
}

/* ---- Cost section ---- */
.cost-section { background: var(--color-cream); }
.cost-factors {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.cost-factor {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.cost-factor:nth-child(even) { border-top-color: var(--color-accent); }
.cost-factor:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.cost-factor h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.cost-factor p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof: photo trio + review badges ---- */
.proof-section { background: var(--color-white); }
.proof-gallery {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  grid-template-rows: repeat(2, minmax(0, 1fr));
  gap: var(--space-5);
  margin-bottom: var(--space-10);
}
.proof-gallery figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.proof-gallery figure:first-child { grid-row: span 2; }
.proof-gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.proof-gallery figure:hover img { transform: scale(1.04); }
.proof-gallery figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 82%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.review-badge-strip {
  display: flex;
  justify-content: center;
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
.review-badge:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); color: var(--color-primary); }
.review-badge svg, .review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- Comparison: storm-chasers vs us (dark section) ---- */
.compare-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.compare-section::before {
  content: '';
  position: absolute;
  top: -30%;
  right: -10%;
  width: 60%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 35%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.compare-section .container { position: relative; z-index: 1; }
.compare-section .section-title h2 { color: var(--color-white); }
.compare-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.compare-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
}
.compare-col--them {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.compare-col--us {
  background: color-mix(in srgb, var(--color-primary) 32%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  box-shadow: var(--shadow-xl);
}
.compare-col h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.compare-col--us h3 { color: var(--color-accent); }
.compare-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); }
.compare-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-sm);
}
.compare-col li svg, .compare-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.compare-col--them li svg, .compare-col--them li i { color: color-mix(in srgb, var(--color-white) 40%, transparent); }
.compare-col--us li svg, .compare-col--us li i { color: var(--color-accent); }

/* ---- Service area strip ---- */
.area-section { background: var(--color-light); }
.area-chips {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.area-chip {
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
.area-chip svg, .area-chip i { width: 14px; height: 14px; color: var(--color-primary); }

/* ---- FAQ ---- */
.faq-section { background: var(--color-white); }

/* ---- Related services ---- */
.related-section { background: var(--color-light); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
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
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 45%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.closing-cta .container { position: relative; z-index: 1; }
.closing-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.closing-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 distinct styles: diagonal + torn) ---- */
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

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .signs-grid { grid-template-columns: repeat(2, 1fr); }
  .expert-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .expert-stat { max-width: 420px; margin: 0 auto; }
  .process-layout { grid-template-columns: 1fr; }
  .process-sticky { position: static; }
  .cost-factors { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .svc-hero { min-height: auto; }
  .svc-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .proof-gallery { grid-template-columns: 1fr; grid-template-rows: auto; }
  .proof-gallery figure:first-child { grid-row: auto; }
  .compare-grid { grid-template-columns: 1fr; }
  .takedown-step { padding-left: var(--space-12); }
  .takedown-step::before { left: var(--space-4); }
}
@media (max-width: 600px) {
  .signs-grid, .cost-factors { grid-template-columns: 1fr; }
  .svc-hero .hero-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="svc-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree removal in DeLand, Florida">
  <div class="container">
    <nav class="svc-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Tree Removal</span>
    </nav>

    <span class="hero-eyebrow">Tree Removal &middot; DeLand, FL</span>

    <h1>Tree Removal in DeLand, FL &mdash; <span class="text-accent">Safe Takedowns by a Local Tree Service Crew</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, removing trees of every size across Volusia County since <?php echo e($yearEstablished); ?>. Controlled section takedowns, grapple-loader cleanup, and free written estimates within 24 hours &mdash; with debris hauling included in most quotes.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Removal Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="truck"></i> Debris Hauling Included</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PROBLEM STATEMENT — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="When a tree needs to come down">
  <div class="container">
    <p class="pull-quote" data-animate>The most expensive tree removal in DeLand is the one that happens <strong>during</strong> the hurricane &mdash; on your schedule&rsquo;s worst day, at emergency rates, with your roof involved.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Read the Signs</span>
      <h2>How do you know a tree needs to come down in DeLand?</h2>
      <p class="answer-block">A DeLand tree usually needs removal when it shows structural failure you can see: a worsening lean, large dead limbs over the house, fungus or cavities at the base, or a thinning crown. One warning sign deserves an assessment; two or more usually mean the tree is a hazard worth removing before storm season.</p>
    </div>

    <div class="signs-grid">
      <?php foreach ($removalSigns as $i => $sign): ?>
      <article class="sign-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="sign-icon"><i data-lucide="<?php echo e($sign['icon']); ?>"></i></div>
        <h3><?php echo e($sign['title']); ?></h3>
        <p><?php echo e($sign['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,10 1200,60"/></svg>
</div>

<!-- ============ EXPERT POSITIONING — 02 ============ -->
<section class="numbered-section expert-section" data-num="02" aria-label="Large tree removal expertise">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label">Tight Quarters, Big Trees</span>
      <h2>Can you handle large tree removal near houses and power lines?</h2>
      <p class="answer-block">Yes &mdash; large tree removal in tight quarters is the core of our work in DeLand. Climbers and a boom lift take the canopy apart in roped sections, so nothing free-falls near roofs, pool enclosures, fences, or service lines. A compact grapple loader then clears the yard without tearing it up.</p>
    </div>

    <div class="expert-split">
      <div>
        <p class="drop-cap" data-animate>Most of the removals we quote in DeLand are live oaks and slash pines standing closer to a structure than they are tall. That geometry is exactly why homeowners call a tree service instead of renting a chainsaw: the tree cannot fall whole, so it has to come down in pieces, in the right order, on ropes. Our crew has been making that call &mdash; and that cut &mdash; across Volusia County since <?php echo e($yearEstablished); ?>.</p>
        <ul class="expert-points" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>One crew, whole job.</strong> Tree work and land clearing from the same company &mdash; climbing, rigging, grapple loading, chipping, hauling, and stump grinding without a second contractor.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Certified arborist judgment.</strong> If pruning or crown reduction can save the tree, we say so at the estimate. Removal is the answer when it's the honest answer.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Insurance you can verify.</strong> Licensed and insured, with proof available before anyone starts a saw &mdash; the paperwork storm-chasers can't show you.</p>
          </li>
        </ul>
      </div>

      <div class="expert-stat" data-animate="right">
        <div class="big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
        <div class="big-label">Years Removing DeLand Trees</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: torn edge (cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L140,33 L220,44 L300,30 L390,46 L470,36 L570,44 L670,28 L770,41 L870,33 L960,44 L1060,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ PROCESS + WHAT'S INCLUDED — 03 ============ -->
<section class="numbered-section process-section" data-num="03" aria-label="Tree removal process">
  <div class="container">
    <div class="process-layout">
      <div class="process-sticky">
        <span class="eyebrow-label">The Job, Step by Step</span>
        <h2>What does professional tree removal include at God's Country?</h2>
        <p class="answer-block">Every professional tree removal we quote in DeLand includes the assessment, a written 24-hour estimate, roped section takedown, chipping, and site cleanup &mdash; and most quotes fold in debris hauling and stump grinding. The five steps below are the same whether it's one backyard oak or a whole lot.</p>
        <figure>
          <img src="<?php echo e($bodyPhotos['boomlift']['src']); ?>" alt="<?php echo e($bodyPhotos['boomlift']['alt']); ?>" width="600" height="800" loading="lazy">
          <figcaption>Boom lift takedown of a slash pine over a DeLand home.</figcaption>
        </figure>
      </div>

      <ol class="takedown-steps" data-p1-dynamic>
        <?php foreach ($removalSteps as $step): ?>
        <li class="takedown-step" data-animate>
          <h3><?php echo e($step['title']); ?></h3>
          <p><?php echo e($step['text']); ?></p>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,50 1200,60 0,60"/><polygon fill="var(--color-cream)" points="0,60 1200,12 1200,60" opacity="0.55"/><polygon fill="var(--color-cream)" points="0,60 1200,28 1200,60"/></svg>
</div>

<!-- ============ COST — 04 ============ -->
<section class="numbered-section cost-section" data-num="04" aria-label="Tree removal cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does tree removal cost in DeLand, FL?</h2>
      <p class="answer-block">Tree removal cost in DeLand depends on the tree's size, condition, and what's underneath it &mdash; small trees run a few hundred dollars while large oaks over structures cost considerably more. We don't price by phone guesswork: you get a free written estimate within 24 hours, with debris hauling and stump grinding spelled out.</p>
    </div>

    <div class="cost-factors">
      <div class="cost-factor reveal-delay-1" data-animate>
        <h3>Size &amp; species</h3>
        <p>A 30-foot palm and an 80-foot live oak are different jobs. Height, trunk diameter, and canopy spread drive the crew time and equipment needed.</p>
      </div>
      <div class="cost-factor reveal-delay-2" data-animate>
        <h3>What's underneath</h3>
        <p>Open yard, or roof, pool screen, and fence? Rigging every section over a target takes longer than dropping limbs into grass &mdash; and it's where our rope work earns its keep.</p>
      </div>
      <div class="cost-factor reveal-delay-3" data-animate>
        <h3>Condition &amp; access</h3>
        <p>Dead and decayed trees need slower, more careful climbing. Tight gate access changes which machines fit. Both show up honestly in the written quote, never as a surprise after.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROOF — 05 ============ -->
<section class="numbered-section proof-section" data-num="05" aria-label="Recent tree removal work">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Searching for tree removal near me in DeLand?</h2>
      <p class="answer-block">If you're searching for tree removal near me in DeLand, this is what nearby jobs look like: marked pines coming down section by section, a grapple loader hauling oak logs, and yards left clean. We work within about 50 miles of DeLand, so the crew in these photos is the crew that shows up.</p>
    </div>

    <div class="proof-gallery">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['grapple']['src']); ?>" alt="<?php echo e($bodyPhotos['grapple']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>Grapple loader moving an oak log section &mdash; DeLand, FL</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($heroImage); ?>" alt="Pines marked with red X for removal, chipper and crew working behind, DeLand, FL" width="800" height="500" loading="lazy">
        <figcaption>Marked pines and chipper crew on a DeLand removal</figcaption>
      </figure>
      <figure class="reveal-delay-2" data-animate>
        <img src="<?php echo e($bodyPhotos['slab']['src']); ?>" alt="<?php echo e($bodyPhotos['slab']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>One trunk slab from a big DeLand takedown</figcaption>
      </figure>
    </div>

    <div class="review-badge-strip" data-animate>
      <a class="review-badge" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">
        <i data-lucide="star"></i> Read Our Google Reviews
      </a>
      <a class="review-badge" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">
        <i data-lucide="badge-check"></i> BBB Business Profile
      </a>
    </div>
  </div>
</section>

<!-- ============ COMPARISON — 06 ============ -->
<section class="compare-section" aria-label="Local crew versus storm chasers">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label" style="color: var(--color-accent);">Know Who You're Hiring</span>
      <h2>Why hire a local DeLand crew instead of a storm-chaser?</h2>
      <p class="answer-block">Because the crew that lives here answers the phone after the job, too. Storm-chasing outfits roll into Volusia County behind every hurricane, quote cash prices, and vanish. A local, licensed tree service is accountable for its work &mdash; and it's here in February, not just the week after landfall.</p>
    </div>

    <div class="compare-grid">
      <div class="compare-col compare-col--them" data-animate>
        <h3>The out-of-town outfit</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="x"></i> <?php echo e($row['them']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="compare-col compare-col--us" data-animate="right">
        <h3>God's Country Tree Service</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="check"></i> <?php echo e($row['us']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICE AREA — 07 ============ -->
<section class="area-section" aria-label="Tree removal service area">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Beyond DeLand</span>
      <h2>Do you offer tree removal in Deltona, FL and nearby cities?</h2>
      <p class="answer-block">Yes. From our DeLand home base we handle tree removal in Deltona, Orange City, DeBary, Lake Helen, and communities within roughly 50 miles across Volusia County. Same crew, same equipment, same free 24-hour written estimate &mdash; wherever in the area your tree is standing.</p>
    </div>
    <div class="area-chips" data-p1-dynamic>
      <?php foreach (['DeLand', 'Deltona', 'Orange City', 'DeBary', 'Lake Helen', 'Volusia County'] as $area): ?>
      <span class="area-chip"><i data-lucide="map-pin"></i> <?php echo e($area); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FAQ — 08 ============ -->
<section class="numbered-section faq-section" data-num="08" aria-label="Tree removal questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask before a tree removal?</h2>
      <p class="answer-block">The same six things, almost every time: permits, timing, stumps, tight access, where the wood goes, and insurance. Straight answers below &mdash; and if yours isn't here, put it in the estimate form and we'll answer it within 24 hours, no obligation attached.</p>
    </div>

    <div class="faq-grid" data-p1-dynamic>
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-icon"><i data-lucide="help-circle"></i></div>
        <div>
          <h3><?php echo e($faq['q']); ?></h3>
          <p class="faq-answer"><?php echo e($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ RELATED SERVICES ============ -->
<section class="related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Keep the Rest Standing</span>
      <h2>What other tree services do DeLand property owners pair with tree removal?</h2>
      <p class="answer-block">Most removals come with follow-up work: hazardous trees flagged during the same walk-through, storm cleanup when weather forced the decision, and trimming to keep the survivors healthy. All three come from the same God's Country crew, usually quoted in the same free estimate.</p>
    </div>

    <?php renderServiceCards(['dead-hazardous-tree-removal', 'emergency-tree-service-storm-cleanup', 'tree-trimming-services'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="closing-cta" aria-label="Get a tree removal estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Get That Tree Off Your Worry List Before Storm Season?</h2>
    <p class="answer-block">Tell us about the leaning oak, the dead pine, or the whole overgrown lot. <?php echo e($siteName); ?> will walk the property, give you an honest read, and put a straight, all-in price in writing &mdash; usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Removal Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
