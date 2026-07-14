<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/crown-reduction-shaping/index.php
 * Crown Reduction & Shaping — God's Country Tree Service LLC
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Centerpiece: crown reduction vs topping comparison.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'crown-reduction-shaping';

// V2.1 trade-noun title (57 chars) + V2.2 CTR meta (155 chars)
$pageTitle       = "Crown Reduction in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Crown reduction in DeLand, FL by a licensed tree service — safe weight reduction and shaping, never topping. 12+ years local. Book your free estimate today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062751583-ixwxr0-57210655_2285599351660664_7235797249714814976_n.webp'; // vase-shaped lifted canopy over a street (portrait — crop)
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'corner-oak' => [
        'src' => $imgBase . '1784062744583-c9q0jo-49949171_2228682217352378_6923483969732214784_n.webp',
        'alt' => 'Mature oak shading a corner-lot home before trimming in DeLand, FL',
    ],
    'full-crown' => [
        'src' => $imgBase . '1784062750583-pr9hsn-57170747_2285599344993998_4063638806954246144_n.webp',
        'alt' => 'Full-crowned shade tree in a DeLand, FL front yard after shaping',
    ],
    'shaped-oak' => [
        'src' => $imgBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp',
        'alt' => 'Cleanly shaped mature oak against blue sky at a DeLand, FL home',
    ],
];

// ---- Telltale signs a canopy needs reduction or shaping ----
$shapeSigns = [
    ['icon' => 'home',        'title' => 'Limbs parked over the roof',    'text' => 'Overextended laterals hanging above shingles, gutters, or a pool screen enclosure aren\'t shade anymore — they\'re stored weight waiting on the next windstorm.'],
    ['icon' => 'scale',       'title' => 'Lopsided after a storm',        'text' => 'One-sided growth or a limb lost to weather leaves the canopy loading the trunk unevenly. A lopsided tree levers itself harder with every gust.'],
    ['icon' => 'sun-dim',     'title' => 'Deep shade, struggling lawn',   'text' => 'When a canopy gets so dense that grass dies beneath it and wind can\'t pass through, the tree is catching every storm like a full sail.'],
    ['icon' => 'move-diagonal', 'title' => 'Outgrown the yard',           'text' => 'The oak planted decades ago now reaches over two rooflines and a driveway. It doesn\'t need to go — it needs its size managed on purpose.'],
];

// ---- Centerpiece comparison: crown reduction vs topping ----
$vsTopping = [
    'Cuts straight through the middle of limbs at whatever height the saw reaches',
    'Leaves stubs that cannot seal, so decay travels down into the trunk',
    'Triggers watersprouts — fast, weakly attached regrowth that is more dangerous in wind within a few years',
    'Strips away the leaves a stressed oak needs to feed itself',
    'Ruins the natural shape for good; the canopy never recovers its form',
];
$vsReduction = [
    'Shortens each limb back to a healthy lateral branch that takes over the growing',
    'Places every cut where the tree can seal and compartmentalize the wound',
    'Keeps the natural silhouette — smaller and balanced, still recognizably your oak',
    'Reduces sail area and limb leverage before hurricane season arrives',
    'Leaves enough live canopy for the tree to keep feeding itself and stay healthy',
];

// ---- Canopy zones (layered reveal cards) ----
$canopyZones = [
    ['zone' => 'Zone 1 — The Top',      'icon' => 'arrow-down-to-line', 'title' => 'Height reduction',    'text' => 'The highest leaders come down to strong laterals, lowering the canopy\'s center of gravity and the leverage wind gets on the trunk. This is where storm risk lives — and where topping does its worst damage when the wrong crew does it.'],
    ['zone' => 'Zone 2 — The Edges',    'icon' => 'move-horizontal',    'title' => 'Lateral shortening',  'text' => 'Overextended limbs get pulled back from rooflines, driveways, and property lines with reduction cuts, not stub cuts. The spread shrinks while every remaining limb keeps a live growing tip.'],
    ['zone' => 'Zone 3 — The Interior', 'icon' => 'wind',               'title' => 'Selective thinning',  'text' => 'We remove select interior branches so wind and light pass through the crown instead of pushing against it. The living structure stays; the sail effect goes.'],
    ['zone' => 'Zone 4 — The Base',     'icon' => 'arrow-up-from-line', 'title' => 'Canopy lift',         'text' => 'The lowest limbs are raised for clearance over pool screen enclosures, walkways, and sightlines — the finished tree looks lifted and intentional, like the vase-shaped canopies in our photos.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Will crown reduction harm my live oak?',
        'a' => "Not when it's done with proper reduction cuts. Every limb is shortened back to a living lateral branch that takes over growth, so the oak seals its wounds and keeps a full working canopy. What harms live oaks is topping — indiscriminate cuts that leave decaying stubs. That's the practice we refuse, and the reason DeLand homeowners call us to fix other crews' work.",
    ],
    [
        'q' => 'How much of the canopy can you remove at one time?',
        'a' => "Less than most people expect — a modest fraction of the live canopy per visit, because a tree feeds itself through its leaves. If a canopy is badly overgrown, we'd rather shape it in stages a season or two apart than stress it with one aggressive cut. Your estimate spells out exactly what comes off and why.",
    ],
    [
        'q' => 'When is the best time of year for crown reduction in DeLand?',
        'a' => "The smartest window is before hurricane season peaks — get the weight and sail area off in spring or early summer, and the tree rides out the storms lighter. Cooler months are gentler for heavy reductions on stressed trees. We shape trees across Volusia County year-round and will tell you honestly if a job is better timed for a different season.",
    ],
    [
        'q' => 'How long does the new shape last?',
        'a' => "A properly reduced crown holds its size and balance for several years, because growth continues from the laterals we cut to instead of exploding from stubs. Florida sun and rain keep trees moving, so most DeLand homeowners put shaping on a cycle of every few years — far cheaper than the emergency call a neglected canopy eventually makes.",
    ],
    [
        'q' => 'My tree was topped years ago — can you fix it?',
        'a' => "Often, yes. Restoration shaping selects the strongest of the sprouts a topping cut produced, trains them into new leaders, and removes the weak, crowded regrowth around them. It usually takes more than one visit spread over a couple of seasons, but many topped trees can be brought back to a safe, natural structure instead of being removed.",
    ],
    [
        'q' => 'Do you haul away all the branches?',
        'a' => "Yes — cleanup is part of the job, not an add-on. Brush goes through the chipper, wood goes on the truck, and the lawn gets raked before we leave. Most of our shaping quotes include chipping and hauling so the price you approve in writing is the price you pay.",
    ],
    [
        'q' => 'Can you shape a tree hanging over my pool enclosure?',
        'a' => "That's one of the most common calls we get in DeLand. Limbs over a screen enclosure are roped and lowered in controlled sections, so nothing free-falls onto the screen. Between climbers and a compact loader, we can rebalance a canopy in a fenced backyard without damaging the enclosure, the deck, or the landscaping around the pool.",
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
        ['name' => 'Home',                     'url' => '/'],
        ['name' => 'Services',                 'url' => '/services/'],
        ['name' => 'Crown Reduction & Shaping'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Crown Reduction & Shaping — page-specific styles (.crn-)
   Techniques: C1.4 page hero, C3.5 stacked parallelograms +
   C3.2 curved wave dividers, C11.3 overlay content card on
   image edge, layered reveal canopy-zone cards (signature C7),
   C4.1 radial glow dark sections, C5.1 numbered watermarks,
   C10.5 staggered reveals. All values via tokens/color-mix —
   no hardcoded colors or shadows.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.crn-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 30%; /* portrait source — crop to canopy */
  overflow: hidden;
}
.crn-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-secondary) 74%, transparent) 50%,
    color-mix(in srgb, var(--color-dark) 86%, transparent) 100%
  );
}
.crn-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.crn-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.crn-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.crn-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.crn-breadcrumb a:hover { color: var(--color-accent); }
.crn-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.crn-hero .hero-eyebrow {
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
.crn-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.crn-hero h1 .text-accent { color: var(--color-accent); }
.crn-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.crn-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.crn-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.crn-hero .hero-trust-item svg,
.crn-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- C5.1 numbered section watermarks ---- */
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

/* ---- Section title idiom ---- */
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

/* ---- Problem statement: oversized lead line ---- */
.crn-lead {
  max-width: 900px;
  margin: 0 auto var(--space-12);
  font-family: var(--font-heading);
  font-size: clamp(1.35rem, 2.6vw, 2rem);
  font-weight: 600;
  line-height: 1.35;
  letter-spacing: -0.01em;
  text-align: center;
  color: var(--color-text);
  text-wrap: balance;
  padding-left: var(--space-6);
  padding-right: var(--space-6);
  position: relative;
}
.crn-lead::before,
.crn-lead::after {
  content: '';
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  width: 72px;
  height: 3px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
}
.crn-lead::before { top: calc(-1 * var(--space-5)); }
.crn-lead::after { bottom: calc(-1 * var(--space-5)); }
.crn-lead strong { color: var(--color-primary); font-weight: 700; }

/* ---- Telltale sign cards (tinted bento) ---- */
.crn-signs-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.crn-sign-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.crn-sign-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.crn-sign-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.crn-sign-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.crn-sign-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.crn-sign-card .crn-sign-icon {
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
.crn-sign-card .crn-sign-icon svg,
.crn-sign-card .crn-sign-icon i { width: 24px; height: 24px; }
.crn-sign-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.crn-sign-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- CENTERPIECE: crown reduction vs topping ---- */
.crn-vs-section { background: var(--color-cream); }
.crn-vs-grid {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: var(--space-6);
  align-items: stretch;
  max-width: 1060px;
  margin: 0 auto;
}
.crn-vs-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  position: relative;
}
.crn-vs-col--topping {
  background: var(--color-white);
  border: 1px dashed color-mix(in srgb, var(--color-danger) 45%, var(--color-gray-light));
  box-shadow: var(--shadow-sm);
}
.crn-vs-col--reduction {
  background: var(--color-white);
  border: 2px solid var(--color-accent);
  box-shadow: var(--shadow-xl);
  transform: translateY(calc(-1 * var(--space-3)));
}
.crn-vs-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-bottom: var(--space-4);
}
.crn-vs-col--topping .crn-vs-tag {
  background: color-mix(in srgb, var(--color-danger) 10%, var(--color-white));
  color: var(--color-danger);
}
.crn-vs-col--reduction .crn-vs-tag {
  background: color-mix(in srgb, var(--color-accent) 15%, var(--color-white));
  color: color-mix(in srgb, var(--color-accent) 70%, var(--color-dark));
}
.crn-vs-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.crn-vs-col--reduction h3 { color: var(--color-primary); }
.crn-vs-col ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.crn-vs-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.crn-vs-col li svg,
.crn-vs-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.crn-vs-col--topping li svg,
.crn-vs-col--topping li i { color: var(--color-danger); }
.crn-vs-col--reduction li svg,
.crn-vs-col--reduction li i { color: var(--color-accent); }
.crn-vs-badge {
  align-self: center;
  width: 64px;
  height: 64px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: var(--font-size-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-lg);
  border: 4px solid var(--color-cream);
}
.crn-refusal {
  max-width: 820px;
  margin: var(--space-12) auto 0;
  padding: var(--space-6) var(--space-8);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-primary) 92%, var(--color-dark));
  color: color-mix(in srgb, var(--color-white) 94%, transparent);
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
  box-shadow: var(--shadow-md);
}
.crn-refusal svg,
.crn-refusal i {
  width: 28px;
  height: 28px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.crn-refusal p { margin: 0; font-size: var(--font-size-base); }
.crn-refusal strong { color: var(--color-accent); }

/* ---- Storm-risk section: split + C11.3 overlay card ---- */
.crn-storm-section { background: var(--color-white); }
.crn-storm-split {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: var(--space-16);
  align-items: center;
}
.crn-storm-copy .answer-block {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  margin-bottom: var(--space-6);
}
.crn-storm-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.crn-storm-copy > p {
  color: var(--color-gray);
  margin-bottom: var(--space-4);
}
.crn-points {
  list-style: none;
  margin: var(--space-6) 0 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.crn-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.crn-points li svg,
.crn-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.crn-points li strong { color: var(--color-primary); }
.crn-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
/* C11.3 — overlay content card on image edge */
.crn-overlay-figure {
  position: relative;
  margin: 0 0 var(--space-10);
}
.crn-overlay-figure img {
  width: 100%;
  border-radius: var(--radius-lg);
  aspect-ratio: 4 / 5;
  object-fit: cover;
  box-shadow: var(--shadow-lg);
}
.crn-overlay-card {
  position: absolute;
  bottom: calc(-1 * var(--space-8));
  right: calc(-1 * var(--space-4));
  max-width: 64%;
  background: var(--color-white);
  border-radius: var(--radius-md);
  padding: var(--space-6);
  box-shadow: var(--shadow-xl);
  border-left: 4px solid var(--color-accent);
}
.crn-overlay-card .crn-overlay-num {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.crn-overlay-card .crn-overlay-num span { color: var(--color-accent); }
.crn-overlay-card p {
  margin: var(--space-2) 0 0;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}

/* ---- Signature: layered canopy-zone reveal cards (dark) ---- */
.crn-zones-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.crn-zones-section::before {
  content: '';
  position: absolute;
  top: -25%;
  left: -12%;
  width: 55%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 40%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.crn-zones-section .container { position: relative; z-index: 1; }
.crn-zones-section .section-title h2 { color: var(--color-white); }
.crn-zones-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.crn-zones-section .eyebrow-label { color: var(--color-accent); }
.crn-zone-stack {
  position: relative;
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
  padding-left: var(--space-8);
}
/* trunk line the zone cards descend along */
.crn-zone-stack::before {
  content: '';
  position: absolute;
  left: var(--space-2);
  top: var(--space-6);
  bottom: var(--space-6);
  width: 3px;
  border-radius: var(--radius-full);
  background: linear-gradient(
    to bottom,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-accent) 35%, transparent) 100%
  );
}
.crn-zone-card {
  position: relative;
  background: color-mix(in srgb, var(--color-white) 7%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 12%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-8);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.crn-zone-card:hover {
  transform: translateX(6px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
}
/* each layer steps outward — layered descent down the canopy */
.crn-zone-card:nth-child(1) { margin-right: var(--space-16); }
.crn-zone-card:nth-child(2) { margin-right: var(--space-10); margin-left: var(--space-4); }
.crn-zone-card:nth-child(3) { margin-right: var(--space-4); margin-left: var(--space-8); }
.crn-zone-card:nth-child(4) { margin-left: var(--space-12); }
.crn-zone-card::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-6) - 3px);
  top: var(--space-8);
  width: 12px;
  height: 12px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  box-shadow: var(--shadow-sm);
}
.crn-zone-tag {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.crn-zone-card h3 {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.crn-zone-card h3 svg,
.crn-zone-card h3 i { width: 22px; height: 22px; color: var(--color-accent); flex-shrink: 0; }
.crn-zone-card p {
  margin: 0;
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  font-size: var(--font-size-sm);
}

/* ---- Cost section ---- */
.crn-cost-section { background: var(--color-cream); }
.crn-cost-factors {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.crn-cost-factor {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.crn-cost-factor:nth-child(even) { border-top-color: var(--color-accent); }
.crn-cost-factor:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.crn-cost-factor h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.crn-cost-factor p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof: shaped-canopy photo pair + review badges ---- */
.crn-proof-section { background: var(--color-white); }
.crn-proof-duo {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 900px;
  margin: 0 auto var(--space-10);
}
.crn-proof-duo figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.crn-proof-duo figure:nth-child(2) { transform: translateY(var(--space-6)); }
.crn-proof-duo img {
  width: 100%;
  height: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.crn-proof-duo figure:hover img { transform: scale(1.04); }
.crn-proof-duo figcaption {
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
  margin-top: var(--space-10);
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
.review-badge svg,
.review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- FAQ + related ---- */
.crn-faq-section { background: var(--color-light); }
.crn-related-section { background: var(--color-white); }

/* ---- C9.2 closing CTA with radial glow ---- */
.crn-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.crn-closing-cta::before {
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
.crn-closing-cta .container { position: relative; z-index: 1; }
.crn-closing-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.crn-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.crn-closing-cta .hero-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers: C3.5 stacked parallelograms + C3.2 curved wave ---- */
.svg-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(36px, 6vw, 80px);
  position: relative;
  z-index: 2;
}
.svg-divider svg { display: block; width: 100%; height: 100%; }
.svg-divider--flush { margin-bottom: -1px; }

/* Reveal stagger delays */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .crn-signs-grid { grid-template-columns: repeat(2, 1fr); }
  .crn-storm-split { grid-template-columns: 1fr; gap: var(--space-12); }
  .crn-overlay-figure { max-width: 560px; margin-left: auto; margin-right: auto; }
  .crn-overlay-card { right: var(--space-4); }
  .crn-vs-grid { grid-template-columns: 1fr; }
  .crn-vs-badge { justify-self: center; margin: calc(-1 * var(--space-2)) 0; }
  .crn-vs-col--reduction { transform: none; }
  .crn-cost-factors { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .crn-hero { min-height: auto; }
  .crn-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .crn-zone-stack { padding-left: var(--space-6); }
  .crn-zone-card:nth-child(1),
  .crn-zone-card:nth-child(2),
  .crn-zone-card:nth-child(3),
  .crn-zone-card:nth-child(4) { margin-left: 0; margin-right: 0; }
  .crn-proof-duo { grid-template-columns: 1fr; max-width: 480px; }
  .crn-proof-duo figure:nth-child(2) { transform: none; }
  .crn-overlay-card {
    position: static;
    max-width: 100%;
    margin-top: calc(-1 * var(--space-6));
    margin-left: var(--space-4);
    margin-right: var(--space-4);
  }
  .crn-refusal { flex-direction: column; padding: var(--space-6); }
}
@media (max-width: 600px) {
  .crn-signs-grid,
  .crn-cost-factors { grid-template-columns: 1fr; }
  .crn-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .crn-zone-card { padding: var(--space-5); }
  .crn-lead { padding-left: 0; padding-right: 0; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="crn-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Crown reduction and shaping in DeLand, Florida">
  <div class="container">
    <nav class="crn-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Crown Reduction &amp; Shaping</span>
    </nav>

    <span class="hero-eyebrow">Crown Reduction &amp; Shaping &middot; DeLand, FL</span>

    <h1>Crown Reduction &amp; Shaping in DeLand, FL &mdash; <span class="text-accent">Storm-Smart Tree Service, Never Topping</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Volusia County since <?php echo e($yearEstablished); ?>. We take height and weight off storm-loaded canopies with proper reduction cuts &mdash; never topping &mdash; so your oaks keep their strength, their balance, and their shade.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Shaping Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="ban"></i> We Never Top Trees</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PROBLEM STATEMENT — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Signs a canopy needs reduction or shaping">
  <div class="container">
    <p class="crn-lead" data-animate>A live oak doesn&rsquo;t stop growing because the yard ran out of room &mdash; every Central Florida summer adds weight to limbs <strong>already parked over your roof</strong>.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Read Your Canopy</span>
      <h2>Can tree shaping fix an overgrown or lopsided canopy?</h2>
      <p class="answer-block">Yes &mdash; in most DeLand yards an overgrown or lopsided canopy can be rebalanced with selective reduction and shaping cuts over one or two visits. We shorten overextended limbs back to strong laterals, even out the silhouette, and restore clearance over roofs and pool screen enclosures without stripping the tree bare.</p>
    </div>

    <div class="crn-signs-grid">
      <?php foreach ($shapeSigns as $i => $sign): ?>
      <article class="crn-sign-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="crn-sign-icon"><i data-lucide="<?php echo e($sign['icon']); ?>"></i></div>
        <h3><?php echo e($sign['title']); ?></h3>
        <p><?php echo e($sign['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (white → cream) — C3.5 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <polygon fill="var(--color-cream)" opacity="0.3" points="0,20 1200,40 1200,80 0,80"/>
    <polygon fill="var(--color-cream)" opacity="0.55" points="0,44 1200,16 1200,80 0,80"/>
    <polygon fill="var(--color-cream)" points="0,56 1200,36 1200,80 0,80"/>
  </svg>
</div>

<!-- ============ CENTERPIECE COMPARISON — 02 ============ -->
<section class="numbered-section crn-vs-section" data-num="02" aria-label="Crown reduction versus topping">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Line We Won&rsquo;t Cross</span>
      <h2>What's the difference between crown reduction and topping a tree?</h2>
      <p class="answer-block">Crown reduction shortens limbs back to healthy lateral branches that take over the growth, preserving the tree's structure. Topping slices through the middle of limbs at an arbitrary height, leaving stubs that decay and sprout weak regrowth. One is arboriculture; the other slowly kills Florida oaks &mdash; which is why we refuse to top.</p>
    </div>

    <div class="crn-vs-grid">
      <div class="crn-vs-col crn-vs-col--topping" data-animate>
        <span class="crn-vs-tag"><i data-lucide="thumbs-down"></i> Topping &mdash; the shortcut</span>
        <h3>What the wrong crew does</h3>
        <ul>
          <?php foreach ($vsTopping as $point): ?>
          <li><i data-lucide="x"></i> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="crn-vs-badge" aria-hidden="true">VS</div>

      <div class="crn-vs-col crn-vs-col--reduction" data-animate="right">
        <span class="crn-vs-tag"><i data-lucide="thumbs-up"></i> Reduction &mdash; the right way</span>
        <h3>How God's Country shapes a crown</h3>
        <ul>
          <?php foreach ($vsReduction as $point): ?>
          <li><i data-lucide="check"></i> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="crn-refusal" data-animate>
      <i data-lucide="ban"></i>
      <p><strong>We turn down topping jobs &mdash; even when a customer asks for one.</strong> Topping kills DeLand&rsquo;s live oaks slowly and makes them more dangerous in the meantime. On your walkthrough we&rsquo;ll show you what a proper reduction takes off, and why the tree is safer and better-looking for it.</p>
    </div>
  </div>
</section>

<!-- Divider: curved wave (cream → white) — C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-white)"/>
  </svg>
</div>

<!-- ============ STORM RISK / EXPERT POSITIONING — 03 ============ -->
<section class="numbered-section crn-storm-section" data-num="03" aria-label="Crown thinning and storm risk">
  <div class="container">
    <div class="crn-storm-split">
      <div class="crn-storm-copy">
        <span class="eyebrow-label">Built for Hurricane Season</span>
        <h2>How does crown thinning reduce storm risk in Florida?</h2>
        <p class="answer-block">Crown thinning removes select interior branches so hurricane-force wind passes through the canopy instead of pushing against it like a sail. Paired with reduction, it takes weight off long limbs and lowers the leverage on the trunk &mdash; often the difference between shedding twigs and losing the whole tree.</p>
        <p>Around DeLand, the trees that fail in storms are rarely the small ones. They&rsquo;re the broad, heavy live oaks and laurel oaks whose root plates sit in sandy Central Florida soil &mdash; soil that gives up its grip when a saturated canopy catches forty-mile-an-hour gusts. Reducing the crown before June does more for that tree than anything you can do to it in October.</p>
        <ul class="crn-points" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Certified arborist judgment.</strong> Which limbs come back, which interior branches come out, and how much the tree can lose in one visit &mdash; decided by training, not by whatever the saw reaches.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Reduction, not amputation.</strong> Every cut lands at a lateral the tree can grow from, so the canopy stays alive, sealed, and structurally sound after we leave.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>One crew, whole job.</strong> Climbing, shaping, chipping, and same-day hauling from the same Volusia County company &mdash; no second contractor for the cleanup.</p>
          </li>
        </ul>
      </div>

      <figure class="crn-overlay-figure" data-animate="right">
        <img src="<?php echo e($bodyPhotos['corner-oak']['src']); ?>" alt="<?php echo e($bodyPhotos['corner-oak']['alt']); ?>" width="800" height="1000" loading="lazy">
        <div class="crn-overlay-card">
          <div class="crn-overlay-num"><?php echo e($yearsInBusiness); ?><span>+</span></div>
          <p>Years shaping Volusia County canopies &mdash; the same local crew since <?php echo e($yearEstablished); ?>.</p>
        </div>
      </figure>
    </div>
  </div>
</section>

<!-- ============ SERVICE BREAKDOWN: CANOPY ZONES — 04 ============ -->
<section class="crn-zones-section" aria-label="What crown reduction and shaping includes">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Zone by Zone</span>
      <h2>What does crown reduction and shaping include at God's Country?</h2>
      <p class="answer-block">Every crown reduction we quote in DeLand starts with an assessment of the whole tree, then works the canopy zone by zone: height off the top, length off overextended laterals, thinning through the interior, and clearance lifted at the base. Chipping, hauling, and cleanup are built into the written estimate.</p>
    </div>

    <div class="crn-zone-stack" data-p1-dynamic>
      <?php foreach ($canopyZones as $i => $zone): ?>
      <article class="crn-zone-card reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <span class="crn-zone-tag"><?php echo e($zone['zone']); ?></span>
        <h3><i data-lucide="<?php echo e($zone['icon']); ?>"></i> <?php echo e($zone['title']); ?></h3>
        <p><?php echo e($zone['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (dark → cream) — C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <path d="M0,44 C300,4 900,76 1200,36 L1200,80 L0,80 Z" fill="var(--color-cream)"/>
  </svg>
</div>

<!-- ============ COST — 05 ============ -->
<section class="numbered-section crn-cost-section" data-num="05" aria-label="Crown reduction cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does crown reduction cost in DeLand, FL?</h2>
      <p class="answer-block">Crown reduction cost in DeLand depends on the tree's size, how much of the canopy needs work, and what sits underneath it &mdash; small ornamentals run a few hundred dollars, while large oaks over homes cost more. You get a free written estimate within 24 hours with the full scope spelled out.</p>
    </div>

    <div class="crn-cost-factors">
      <div class="crn-cost-factor reveal-delay-1" data-animate>
        <h3>Canopy size &amp; scope</h3>
        <p>A light rebalancing of an ornamental and a full four-zone reduction of an 80-foot oak are different jobs. Height, spread, and how far the shape has drifted drive the crew time.</p>
      </div>
      <div class="crn-cost-factor reveal-delay-2" data-animate>
        <h3>What&rsquo;s underneath</h3>
        <p>Open lawn, or roof, pool screen enclosure, and fence? Limbs over targets get roped and lowered piece by piece, which takes longer than letting brush fall into grass.</p>
      </div>
      <div class="crn-cost-factor reveal-delay-3" data-animate>
        <h3>Condition of the tree</h3>
        <p>Storm-stressed, lopsided, or previously topped trees need slower, more deliberate cuts. That care shows up honestly in the written quote &mdash; never as a surprise afterward.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (cream → white) — C3.5 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
    <polygon fill="var(--color-white)" opacity="0.35" points="0,36 1200,14 1200,80 0,80"/>
    <polygon fill="var(--color-white)" points="0,52 1200,32 1200,80 0,80"/>
  </svg>
</div>

<!-- ============ PROOF — 06 ============ -->
<section class="numbered-section crn-proof-section" data-num="06" aria-label="Recent crown reduction work">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Searching for crown reduction near me in DeLand?</h2>
      <p class="answer-block">If you're typing crown reduction near me in DeLand, these photos are the nearby answer: mature oaks brought back to clean, balanced silhouettes with the yard spotless afterward. We work within about 50 miles of DeLand &mdash; Deltona, Orange City, DeBary, and Lake Helen included &mdash; so this crew is your crew.</p>
    </div>

    <div class="crn-proof-duo">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['full-crown']['src']); ?>" alt="<?php echo e($bodyPhotos['full-crown']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>A full crown rebalanced &mdash; shade kept, sail area gone</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($bodyPhotos['shaped-oak']['src']); ?>" alt="<?php echo e($bodyPhotos['shaped-oak']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>Cleanly reduced mature oak, natural shape intact</figcaption>
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

<!-- ============ FAQ — 07 ============ -->
<section class="numbered-section crn-faq-section" data-num="07" aria-label="Crown reduction questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask about crown reduction and shaping?</h2>
      <p class="answer-block">Almost always the same things: whether reduction hurts the tree, how much can come off, the best season, how long the shape lasts, and what happens to the brush. Straight answers below &mdash; and if yours isn't here, put it in the estimate form and we'll answer within 24 hours.</p>
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
<section class="crn-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Round Out the Canopy Work</span>
      <h2>What other tree services do DeLand property owners pair with crown reduction?</h2>
      <p class="answer-block">Shaping one tree usually surfaces work on its neighbors: routine trimming to hold the new silhouette, arborist pruning for structure and health, and removal for the tree a reduction can no longer save. All three come from the same God's Country crew, usually quoted in the same free estimate.</p>
    </div>

    <?php renderServiceCards(['tree-trimming-services', 'tree-pruning-services', 'dead-hazardous-tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="crn-closing-cta" aria-label="Get a crown reduction estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Take the Weight Off That Canopy Before Hurricane Season?</h2>
    <p class="answer-block">Tell us about the overgrown oak, the lopsided camphor, or the limbs creeping over the pool screen. <?php echo e($siteName); ?> will walk the property, show you exactly what a proper reduction takes off, and put a straight price in writing &mdash; usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Shaping Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
