<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/fallen-tree-removal-cleanup/index.php
 * Fallen Tree Removal & Cleanup — God's Country Tree Service LLC
 * Phase 4 — editorial service page (spec entry #7)
 * Layout: C1.4 hero, response timeline (C7.1 variant), paired
 * before/after-style photo composition (static), C9.1 gradient
 * CTA banner, wave + torn dividers.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'fallen-tree-removal-cleanup';

// V2.1 trade-noun title (59 chars) + V2.2 CTR meta (spec verbatim)
$pageTitle       = "Fallen Tree Removal DeLand, FL | God's Country Tree Service";
$pageDescription = 'Fallen tree removal in DeLand, FL — rapid cleanup, debris hauling & site restoration by a licensed & insured tree service. Free estimates within 24 hours.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062762583-gyhtdt-489069018_1475682530496918_5987390642167918859_n.webp'; // fallen live oak + Kubota grapple loader
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'chiptruck' => [
        'src' => $imgBase . '1784062747583-iviaa3-55887789_2274833462737253_4676755378552176640_n.webp',
        'alt' => "God's Country chip truck parked curbside at sunset in DeLand, FL",
    ],
    'firewood' => [
        'src' => $imgBase . '1784062759583-bbdyjf-486718154_1462961151769056_639065173220341343_n.webp',
        'alt' => 'Split firewood pile from local tree removals in DeLand, FL',
    ],
];

// ---- Triage cards: emergency vs schedule ----
$triageCards = [
    ['icon' => 'siren',          'label' => 'Call it in now',      'title' => 'On the house, wires, or a car',   'text' => 'Anything resting on a structure or within reach of a power line is an emergency. Keep everyone out from under it and get a crew — and the utility, if lines are involved — moving immediately.'],
    ['icon' => 'car',            'label' => 'Same-day priority',   'title' => 'Blocking the driveway or road',   'text' => 'A trunk across your only way out gets bumped to the front of the schedule. We cut an access lane first, then come back through for the full cleanup and haul-off.'],
    ['icon' => 'clock',          'label' => 'Days, not minutes',   'title' => 'Flat on open lawn',               'text' => 'A tree lying in the open is stable — the dangerous part already happened. Keep kids off the trunk and root plate, and a scheduled cleanup within a day or two costs less than a panic call.'],
    ['icon' => 'triangle-alert', 'label' => 'Do not walk under',   'title' => 'Hung up in another tree',         'text' => 'A blow-down caught in a neighboring canopy is the one that hurts people. It can drop without warning, so stay out from under it and let a roped crew bring it down on their terms.'],
];

// ---- Response timeline (C7.1 variant) ----
$responseSteps = [
    ['icon' => 'camera',      'label' => 'Step 01 · Photos & triage',     'title' => 'Send photos, get a straight read',  'text' => 'A few phone photos through the estimate form tell us most of what we need: what fell, what it hit, and whether this is an emergency or a scheduled cleanup. You get a free written estimate within 24 hours.'],
    ['icon' => 'search',      'label' => 'Step 02 · Hazard check',        'title' => 'Walk the site before any cutting',  'text' => 'Fallen trees store energy. We check for limbs under tension, a root plate that could stand back up, and anything the trunk is pinning — fence, shed, pool screen enclosure — before a saw starts.'],
    ['icon' => 'axe',         'label' => 'Step 03 · Cutting it free',     'title' => 'Relieve the tension, then section', 'text' => 'Tension cuts come first so nothing springs loose, then the trunk is bucked into grapple-sized sections. Whatever the tree landed on gets cut free carefully instead of dragged out from underneath.'],
    ['icon' => 'truck',       'label' => 'Step 04 · Grapple, chip & haul','title' => 'The loader does the heavy lifting', 'text' => 'Our compact grapple track loader carries whole log sections to the truck while the chipper turns brush into chips. No armload-by-armload dragging across your lawn — the debris leaves on our trucks.'],
    ['icon' => 'sprout',      'label' => 'Step 05 · Site restoration',    'title' => 'Leave the yard usable again',       'text' => 'We rake the debris field, level the hole where the root plate tipped out of the sandy soil, and walk the yard with you. Stump grinding and firewood bucking are quoted as options, never surprises.'],
];

// ---- Cost factor cards ----
$costFactors = [
    ['title' => 'Size & what it landed on',  'text' => 'A pine flat on grass is a simpler job than a live oak across a fence and pool screen enclosure. Cutting a tree free of a structure takes slower, more careful saw work.'],
    ['title' => 'Access for the loader',     'text' => 'When the grapple loader can reach the trunk, cleanup is fast and the price shows it. Tight gates or backyard blow-downs mean more hand work, and the written quote says so up front.'],
    ['title' => 'How much has to leave',     'text' => 'Full haul-off, chips left for mulch, or the trunk bucked into firewood you keep — each option changes the number. Your estimate spells out exactly what leaves and what stays.'],
];

// ---- Safe vs not-safe comparison ----
$safeList = [
    'Drag small, loose branches that are already free on the ground',
    'Photograph the tree and everything it hit — your insurance adjuster will want it',
    'Rope off the trunk and root plate so kids and pets keep clear',
    'Send us photos through the estimate form for a same-week plan',
];
$unsafeList = [
    'Anything within reach of a power line — call the utility before anyone else',
    'Limbs bent under tension — they release like spring-poles when cut',
    'The trunk section holding the root plate down — cut wrong, it stands back up',
    'Walking or working under a tree hung in another canopy',
    'Chainsaw cuts above shoulder height or from a ladder',
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Will homeowner\'s insurance pay for fallen tree removal?',
        'a' => "Usually, if the tree hit a covered structure — house, fence, shed, pool enclosure. A tree that fell harmlessly on the lawn is often on you. We can't speak for your carrier, but we provide the written estimate, photos, and documentation adjusters ask for, the same paperwork DeLand homeowners have used in claims for years.",
    ],
    [
        'q' => 'The tree fell on my fence and pool screen — can you get it off without more damage?',
        'a' => "Yes — that's the careful part of this work. We relieve the tension in the trunk and limbs first, then lift sections clear with the grapple loader instead of dragging them across what's left of the fence. The goal is that the only damage on site is what the tree did on the way down.",
    ],
    [
        'q' => 'How fast can you get to a fallen tree in DeLand?',
        'a' => 'Trees on structures or blocking access get emergency priority — our sister emergency tree service answers around the clock during storm season. For a stable blow-down on open ground, you get a free written estimate within 24 hours and a scheduled cleanup shortly after, usually within days.',
    ],
    [
        'q' => 'Do you haul everything away, or can I keep the firewood?',
        'a' => "Your choice, priced both ways. Most quotes include chipping the brush and hauling the logs so the yard is clear the same visit. If you'd rather keep the wood, we buck the trunk to fireplace length and stack it where you want it — oak from a DeLand blow-down makes excellent firewood.",
    ],
    [
        'q' => 'Will the grapple loader tear up my lawn?',
        'a' => "It's a compact track loader, not a wrecking ball — tracks spread the weight, and we lay mats on the travel path when the ground is soft. Between that and raking the debris field afterward, most yards look better when we leave than they did with a tree across them.",
    ],
    [
        'q' => 'My tree fell into the neighbor\'s yard. Whose problem is it?',
        'a' => "Generally in Florida, the damage lands with the property where the tree fell — their insurance handles their side — but every policy reads differently, so confirm with your carriers. What we can do is work both sides of the fence line in one visit and give each owner separate written documentation.",
    ],
    [
        'q' => 'Do you handle fallen tree cleanup in Deltona, Orange City, and DeBary?',
        'a' => 'Yes. From our DeLand home base the crew covers Deltona, Orange City, DeBary, Lake Helen, and communities within roughly 50 miles across Volusia County. Same grapple loader, same chipper, same free 24-hour written estimate wherever the tree came down.',
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
        ['name' => 'Home',     'url' => '/'],
        ['name' => 'Services', 'url' => '/services/'],
        ['name' => 'Fallen Tree Removal & Cleanup'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Fallen Tree Removal & Cleanup — page-specific styles (.fln-)
   Techniques: C1.4 page hero (photo + gradient + noise),
   C3.2 wave / C3.3 double-wave / C3.4 torn dividers,
   C7.1 response timeline (signature), C9.1 gradient+noise CTA,
   C5.1 numbered watermarks, C11.1 framed paired photos,
   C6.4 glass cards on dark, C9.2 radial-glow closing CTA.
   All values from tokens / color-mix — no hardcoded colors.
   ============================================================ */

/* ---- C1.4 Page hero: fallen-oak photo + gradient + noise ---- */
.fln-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.fln-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-secondary) 68%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.fln-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.fln-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.fln-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.fln-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.fln-breadcrumb a:hover { color: var(--color-accent); }
.fln-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.fln-hero .hero-eyebrow {
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
.fln-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 24ch;
  margin-bottom: var(--space-5);
}
.fln-hero h1 .text-accent { color: var(--color-accent); }
.fln-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.fln-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.fln-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.fln-hero .hero-trust-item svg,
.fln-hero .hero-trust-item i {
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

/* ---- Triage bento cards (emergency vs wait) ---- */
.fln-triage-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.fln-triage-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fln-triage-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.fln-triage-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.fln-triage-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.fln-triage-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.fln-triage-icon {
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
.fln-triage-icon svg, .fln-triage-icon i { width: 24px; height: 24px; }
.fln-triage-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.fln-triage-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.fln-triage-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Grapple positioning: asymmetric split + big stat + photo ---- */
.fln-grapple-section { background: var(--color-cream); }
.fln-grapple-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.fln-grapple-points {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.fln-grapple-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.fln-grapple-points li svg, .fln-grapple-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.fln-grapple-points li strong { color: var(--color-primary); }
.fln-grapple-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.fln-grapple-media { position: relative; }
.fln-grapple-media figure { margin: 0; }
.fln-grapple-media img {
  width: 100%;
  aspect-ratio: 3 / 4;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.fln-grapple-media figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}
.fln-grapple-stat {
  position: absolute;
  left: calc(-1 * var(--space-8));
  bottom: var(--space-8);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-5) var(--space-6);
  text-align: left;
}
.fln-grapple-stat .big-number {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 4vw, 3.4rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.fln-grapple-stat .big-number span { color: var(--color-accent); }
.fln-grapple-stat .big-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-1);
}

/* ---- C7.1 Response timeline (signature section) ---- */
.fln-timeline-section { background: var(--color-white); }
.fln-timeline { position: relative; max-width: 920px; margin: 0 auto; }
.fln-timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-primary-dark));
}
.fln-timeline-item {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  gap: var(--space-8);
  margin-bottom: var(--space-10);
}
.fln-timeline-item:last-child { margin-bottom: 0; }
.fln-timeline-item:nth-child(odd)  .fln-timeline-card  { grid-column: 1; grid-row: 1; text-align: right; border-right: 4px solid var(--color-accent); }
.fln-timeline-item:nth-child(even) .fln-timeline-card  { grid-column: 3; grid-row: 1; text-align: left;  border-left: 4px solid var(--color-accent); }
.fln-timeline-item:nth-child(odd)  .fln-timeline-empty { grid-column: 3; grid-row: 1; }
.fln-timeline-item:nth-child(even) .fln-timeline-empty { grid-column: 1; grid-row: 1; }
.fln-timeline-node {
  width: 48px;
  height: 48px;
  background: var(--color-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-white);
  box-shadow: 0 0 0 6px color-mix(in srgb, var(--color-primary) 15%, transparent);
  grid-column: 2;
  grid-row: 1;
  position: relative;
  z-index: 2;
}
.fln-timeline-node svg, .fln-timeline-node i { width: 22px; height: 22px; }
.fln-timeline-card {
  background: var(--color-white);
  border-radius: var(--radius-md);
  padding: var(--space-6);
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fln-timeline-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-lg); }
.fln-timeline-step {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.fln-timeline-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.fln-timeline-card p {
  margin: 0;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}

/* ---- Cost factor cards ---- */
.fln-cost-section { background: var(--color-light); }
.fln-cost-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.fln-cost-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fln-cost-card:nth-child(even) { border-top-color: var(--color-accent); }
.fln-cost-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.fln-cost-card h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.fln-cost-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- C9.1 Mid-page CTA banner: diagonal gradient + noise ---- */
.fln-cta-mid {
  position: relative;
  overflow: hidden;
  padding: clamp(3.5rem, 8vh, 6rem) 0;
  background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 55%, var(--color-secondary) 100%);
  text-align: center;
}
.fln-cta-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.06;
  pointer-events: none;
}
.fln-cta-mid .container { position: relative; z-index: 1; }
.fln-cta-mid .eyebrow-label { color: var(--color-accent); }
.fln-cta-mid h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.fln-cta-mid .answer-block {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.fln-cta-mid .hero-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ---- Paired before/after-style composition (C11.1 framed) ---- */
.fln-pair-section { background: var(--color-white); }
.fln-pair-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  max-width: 980px;
  margin: 0 auto var(--space-10);
}
.fln-pair-panel { position: relative; margin: 0; }
.fln-pair-panel::before {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-lg);
  z-index: 0;
}
.fln-pair-panel:nth-child(even)::before {
  inset: var(--space-3) var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3));
  border-color: var(--color-primary);
}
.fln-pair-panel img {
  position: relative;
  z-index: 1;
  width: 100%;
  aspect-ratio: 4 / 3;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.fln-pair-tag {
  position: absolute;
  z-index: 2;
  top: var(--space-5);
  left: var(--space-5);
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-dark) 80%, transparent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
}
.fln-pair-tag svg, .fln-pair-tag i { width: 14px; height: 14px; color: var(--color-accent); }
.fln-pair-panel figcaption {
  position: relative;
  z-index: 1;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-4);
}
.fln-pair-note {
  max-width: 68ch;
  margin: 0 auto var(--space-10);
  text-align: center;
  color: var(--color-text);
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

/* ---- Safe vs not-safe: dark section + glass columns (C6.4) ---- */
.fln-safe-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.fln-safe-section::before {
  content: '';
  position: absolute;
  top: -30%;
  left: -10%;
  width: 60%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 35%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.fln-safe-section .container { position: relative; z-index: 1; }
.fln-safe-section .section-title h2 { color: var(--color-white); }
.fln-safe-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.fln-safe-section .section-title .eyebrow-label { color: var(--color-accent); }
.fln-safe-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.fln-safe-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.fln-safe-col--ok {
  background: color-mix(in srgb, var(--color-primary) 32%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  box-shadow: var(--shadow-xl);
}
.fln-safe-col--no {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
}
.fln-safe-col h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.fln-safe-col--ok h3 { color: var(--color-accent); }
.fln-safe-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); padding: 0; margin: 0; }
.fln-safe-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-sm);
}
.fln-safe-col li svg, .fln-safe-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.fln-safe-col--ok li svg, .fln-safe-col--ok li i { color: var(--color-accent); }
.fln-safe-col--no li svg, .fln-safe-col--no li i { color: var(--color-danger); }

/* ---- FAQ + related sections ---- */
.fln-faq-section { background: var(--color-cream); }
.fln-related-section { background: var(--color-light); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.fln-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.fln-closing-cta::before {
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
.fln-closing-cta .container { position: relative; z-index: 1; }
.fln-closing-cta .eyebrow-label { color: var(--color-accent); }
.fln-closing-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.fln-closing-cta .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.fln-closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (wave C3.2, double-wave C3.3, torn C3.4) ---- */
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
  .fln-triage-grid { grid-template-columns: repeat(2, 1fr); }
  .fln-grapple-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .fln-grapple-media { max-width: 480px; margin: 0 auto; }
  .fln-grapple-stat { left: var(--space-4); }
  .fln-cost-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 768px) {
  .fln-hero { min-height: auto; }
  .fln-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .fln-timeline::before { display: none; }
  .fln-timeline-item {
    grid-template-columns: auto 1fr;
    gap: var(--space-4);
    align-items: flex-start;
  }
  .fln-timeline-item:nth-child(odd)  .fln-timeline-card,
  .fln-timeline-item:nth-child(even) .fln-timeline-card {
    grid-column: 2;
    grid-row: 1;
    text-align: left;
    border-left: 4px solid var(--color-accent);
    border-right: none;
  }
  .fln-timeline-item .fln-timeline-empty { display: none; }
  .fln-timeline-node { grid-column: 1; grid-row: 1; width: 40px; height: 40px; }
  .fln-timeline-node svg, .fln-timeline-node i { width: 18px; height: 18px; }
  .fln-pair-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .fln-safe-grid { grid-template-columns: 1fr; }
  .fln-cost-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .fln-triage-grid { grid-template-columns: 1fr; }
  .fln-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .fln-grapple-stat { position: static; margin-top: var(--space-4); display: inline-block; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="fln-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Fallen tree removal in DeLand, Florida">
  <div class="container">
    <nav class="fln-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Fallen Tree Removal &amp; Cleanup</span>
    </nav>

    <span class="hero-eyebrow">Fallen Tree Cleanup &middot; DeLand, FL</span>

    <h1>Fallen Tree Removal &amp; Cleanup in DeLand, FL &mdash; <span class="text-accent">Rapid Tree Service Response</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Volusia County since <?php echo e($yearEstablished); ?>. When a tree comes down, our crew cuts it free, grapple-loads the debris, hauls it off, and restores the site &mdash; with free written estimates within 24 hours.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Cleanup Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="truck"></i> Grapple Loader &amp; Chipper On Every Job</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ TRIAGE — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Is a fallen tree an emergency">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">First, Take a Breath</span>
      <h2>Is a fallen tree an emergency or can it wait?</h2>
      <p class="answer-block">A fallen tree is an emergency when it's touching your house, a power line, or blocking your only way out &mdash; call for emergency service immediately. A tree flat on open lawn is urgent but stable, and a scheduled fallen tree removal within a day or two is usually the smarter, cheaper call.</p>
    </div>

    <div class="fln-triage-grid">
      <?php foreach ($triageCards as $i => $card): ?>
      <article class="fln-triage-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="fln-triage-icon"><i data-lucide="<?php echo e($card['icon']); ?>"></i></div>
        <span class="fln-triage-label"><?php echo e($card['label']); ?></span>
        <h3><?php echo e($card['title']); ?></h3>
        <p><?php echo e($card['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (white → cream) C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ GRAPPLE-LOADER POSITIONING — 02 ============ -->
<section class="numbered-section fln-grapple-section" data-num="02" aria-label="Grapple loader cleanup capability">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label">The Machine Advantage</span>
      <h2>Why does a grapple loader change fallen tree cleanup?</h2>
      <p class="answer-block">Because a grapple loader moves in minutes what a chainsaw-and-wheelbarrow crew drags for hours. <?php echo e($siteName); ?> runs its own compact grapple track loader, so a whole live oak leaves a DeLand yard in big sections &mdash; less cutting on your lawn, less labor on your bill, and a cleaner site at the end.</p>
    </div>

    <div class="fln-grapple-split">
      <div>
        <p data-animate>The photo at the top of this page is a real DeLand blow-down: a mature live oak flat across a yard with our Kubota grapple track loader moving in. That pairing &mdash; tree crew and bobcat-style machine under one roof &mdash; is the whole reason our fallen tree cleanup moves fast. Nobody waits on a subcontractor with a loader, and nobody hand-drags a 40-foot canopy across your grass one armload at a time.</p>
        <ul class="fln-grapple-points" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Whole sections, not wheelbarrows.</strong> The grapple picks up log sections and root-ball chunks that would take a hand crew all afternoon &mdash; and carries them straight to the truck.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Tracks, not tires.</strong> A compact track loader spreads its weight over soft, sandy Central Florida soil, and we lay mats on the travel path so the machine doesn't trade one mess for another.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>One crew, full restoration.</strong> Tree work and bobcat work from the same company means the job ends with a raked, level, usable yard &mdash; not a pile by the curb and a wave goodbye.</p>
          </li>
        </ul>
      </div>

      <div class="fln-grapple-media" data-animate="right">
        <figure>
          <img src="<?php echo e($bodyPhotos['chiptruck']['src']); ?>" alt="<?php echo e($bodyPhotos['chiptruck']['alt']); ?>" width="600" height="800" loading="lazy">
          <figcaption>The chip truck heading out after a DeLand cleanup &mdash; debris rides with us, not to your curb.</figcaption>
        </figure>
        <div class="fln-grapple-stat">
          <div class="big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
          <div class="big-label">Years Clearing Volusia County Blow-Downs</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: torn edge (cream → white) C3.4 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ RESPONSE TIMELINE — 03 (signature, C7.1 variant) ============ -->
<section class="numbered-section fln-timeline-section" data-num="03" aria-label="Fallen tree cleanup process">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Call to Clean Yard</span>
      <h2>What does fallen tree cleanup include?</h2>
      <p class="answer-block">Fallen tree cleanup from <?php echo e($siteName); ?> includes cutting the tree free of anything it hit, bucking the trunk, chipping the brush, grapple-loading every log, hauling debris off the property, and raking the site so the yard is usable again. Stump grinding and firewood cutting are quoted as options.</p>
    </div>

    <div class="fln-timeline" data-p1-dynamic>
      <?php foreach ($responseSteps as $step): ?>
      <div class="fln-timeline-item" data-animate>
        <div class="fln-timeline-card">
          <span class="fln-timeline-step"><?php echo e($step['label']); ?></span>
          <h3><?php echo e($step['title']); ?></h3>
          <p><?php echo e($step['text']); ?></p>
        </div>
        <div class="fln-timeline-node" aria-hidden="true"><i data-lucide="<?php echo e($step['icon']); ?>"></i></div>
        <div class="fln-timeline-empty" aria-hidden="true"></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: double wave (white → light) C3.3 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-light)" opacity="0.4"/><path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-light)"/></svg>
</div>

<!-- ============ COST — 04 ============ -->
<section class="numbered-section fln-cost-section" data-num="04" aria-label="Fallen tree removal cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does fallen tree removal cost in DeLand, FL?</h2>
      <p class="answer-block">Fallen tree removal in DeLand typically costs less than removing the same tree standing &mdash; gravity already did the dangerous part. The price follows the tree's size, what it landed on, and how much debris has to leave. You get a free written estimate within 24 hours with hauling spelled out line by line.</p>
    </div>

    <div class="fln-cost-grid">
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="fln-cost-card reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ MID-PAGE CTA BANNER (C9.1) ============ -->
<section class="fln-cta-mid" aria-label="Request fallen tree cleanup">
  <div class="container">
    <span class="eyebrow-label">Before the Next Front</span>
    <h2>Need that fallen tree gone before the next storm line rolls through?</h2>
    <p class="answer-block">Central Florida rarely sends one storm at a time in hurricane season. Getting the downed tree and its debris off your property before the next front means the wind has nothing loose left to throw. Send photos through the estimate form and <?php echo e($siteName); ?> returns a written price within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Send Photos, Get a Price</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<!-- ============ DEBRIS REMOVAL + PAIRED PHOTOS — 05 ============ -->
<section class="numbered-section fln-pair-section" data-num="05" aria-label="Tree debris removal after a blow-down">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Job &amp; the Aftermath</span>
      <h2>How does tree debris removal work after a big blow-down?</h2>
      <p class="answer-block">Tree debris removal after a big blow-down runs in one loop: chainsaws buck the trunk and free the limbs, the chipper turns brush into chips, and the grapple loader carries log sections straight to our trucks. Everything leaves the same visit &mdash; or gets bucked and stacked as firewood if you want it.</p>
    </div>

    <div class="fln-pair-grid">
      <figure class="fln-pair-panel" data-animate="left">
        <span class="fln-pair-tag"><i data-lucide="cloud-lightning"></i> The Blow-Down</span>
        <img src="<?php echo e($heroImage); ?>" alt="Kubota grapple loader clearing a huge fallen live oak in DeLand, FL" width="800" height="600" loading="lazy">
        <figcaption>A mature live oak down across a DeLand yard, snapped at the trunk &mdash; the grapple loader moves in to start clearing.</figcaption>
      </figure>
      <figure class="fln-pair-panel" data-animate="right">
        <span class="fln-pair-tag"><i data-lucide="check-circle"></i> The Cleanup</span>
        <img src="<?php echo e($bodyPhotos['firewood']['src']); ?>" alt="<?php echo e($bodyPhotos['firewood']['alt']); ?>" width="800" height="600" loading="lazy">
        <figcaption>Where a blow-down can end up: bucked, split, and stacked as seasoned firewood &mdash; or hauled off entirely, your call.</figcaption>
      </figure>
    </div>

    <p class="fln-pair-note" data-animate>If you've been searching for fallen tree removal near me in DeLand, this pair of photos is the honest answer to what you're hiring: the crew that shows up with a grapple loader while the oak is still across the lawn, and the crew that decides with you where every pound of that tree ends up &mdash; chips, firewood, or gone on our trucks.</p>

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

<!-- Divider: torn edge (white → dark) C3.4 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L140,33 L220,44 L300,30 L390,46 L470,36 L570,44 L670,28 L770,41 L870,33 L960,44 L1060,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ SAFE VS NOT — 06 (dark, glass columns) ============ -->
<section class="fln-safe-section" aria-label="What is safe to touch on a fallen tree">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Chainsaw Honesty</span>
      <h2>What's safe to touch on a fallen tree &mdash; and what should you leave alone?</h2>
      <p class="answer-block">Small broken branches already loose on the ground are safe to drag clear. Anything under tension is not &mdash; limbs bent beneath the trunk, a root plate that can slam back upright, and anything near a power line. When in doubt, leave the saw in the garage and send us a photo instead.</p>
    </div>

    <div class="fln-safe-grid">
      <div class="fln-safe-col fln-safe-col--ok" data-animate="left">
        <h3>Safe to handle yourself</h3>
        <ul>
          <?php foreach ($safeList as $item): ?>
          <li><i data-lucide="check"></i> <?php echo e($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="fln-safe-col fln-safe-col--no" data-animate="right">
        <h3>Leave for the crew</h3>
        <ul>
          <?php foreach ($unsafeList as $item): ?>
          <li><i data-lucide="x"></i> <?php echo e($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: curved wave (dark → cream) C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ FAQ — 07 ============ -->
<section class="numbered-section fln-faq-section" data-num="07" aria-label="Fallen tree cleanup questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand property owners ask after a tree comes down?</h2>
      <p class="answer-block">Mostly about insurance, timing, and the mess: who pays when a tree lands on a fence, how fast the crew can come, and where all that wood goes. Straight answers below &mdash; and if yours isn't covered, drop it in the estimate form and we'll answer within 24 hours.</p>
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
<section class="fln-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">After the Cleanup</span>
      <h2>What other tree services do DeLand property owners pair with fallen tree cleanup?</h2>
      <p class="answer-block">Fallen tree cleanup usually uncovers the next job: storm cleanup across the rest of the property, standing trees that now lean, and dead wood the wind exposed. <?php echo e($siteName); ?> quotes all of it in one visit, so one crew and one written estimate cover the whole recovery.</p>
    </div>

    <?php renderServiceCards(['emergency-tree-service-storm-cleanup', 'tree-removal', 'dead-hazardous-tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="fln-closing-cta" aria-label="Get a fallen tree cleanup estimate">
  <div class="container">
    <span class="eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to get the tree off the lawn and your yard back to normal?</h2>
    <p class="answer-block">Send a few photos of the downed tree through the estimate form and <?php echo e($siteName); ?> will walk the site and put a straight, all-in cleanup price in writing &mdash; usually within 24 hours. No pressure, no drive-by guesswork, and no debris left behind when we're done.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Cleanup Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
