<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/tree-planting-shrub-installation/index.php
 * Tree Planting & Shrub Installation
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Techniques: C1.4 page hero, C7.4 staggered planting steps,
 * §2.7.5 polaroid photo framing, species card grid (signature),
 * C5.1 numbered watermarks, C5.4 drop cap, C6.4 glass compare,
 * C4.2/C9.1 gradient+noise closing CTA, C10.4 icon hover,
 * C3 curved wave + organic torn + double wave dividers.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'tree-planting-shrub-installation';

// V2.1 trade-noun title (57 chars) + V2.2 CTR meta (152 chars)
$pageTitle       = "Tree Planting in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Tree planting in DeLand, FL — Florida native trees & shrubs installed by a licensed local tree service, 12+ years. Plan your planting with a free estimate.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062735583-73serd-36040189_2078205155733419_6294256146878300160_n.webp'; // fan palm + shrub beds, fresh red mulch, paver walk
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'entrywalk' => [
        'src' => $imgBase . '1784062732583-cjgzse-35686882_2078205145733420_3238708918062415872_n.webp',
        'alt' => 'Trimmed hibiscus and palmetto beds along a paver entry walk in DeLand, FL',
    ],
    'sagobed' => [
        'src' => $imgBase . '1784062734583-fuv06z-35838321_2078205099066758_7922509159671529472_n.webp',
        'alt' => 'Sago palm and shrub bed finished with red mulch at a DeLand, FL home',
    ],
    'mulchbeds' => [
        'src' => $imgBase . '1784062733583-jhvosk-35788256_2078205079066760_5169623066409435136_n.webp',
        'alt' => 'Freshly mulched beds with shaped shrubs and palms at a DeLand, FL home',
    ],
];

// ---- Planting mistakes (problem statement bento) ----
$plantingMistakes = [
    ['icon' => 'map-pin',       'title' => 'Wrong tree, wrong place',    'text' => 'A live oak needs a wide lawn, not a strip between the driveway and the pool screen enclosure. Planting the right species in the wrong spot just schedules a removal for twenty years from now.'],
    ['icon' => 'shovel',        'title' => 'Planted too deep',           'text' => 'The single most common killer we see. Bury the root flare in a shovel hole and the trunk slowly rots at grade — the tree declines for years and nobody knows why.'],
    ['icon' => 'droplets',      'title' => 'No establishment watering',  'text' => "DeLand's sandy soil drains almost as fast as you can pour. A new tree that gets \"watered when I remember\" through its first Florida summer usually doesn't see its second."],
    ['icon' => 'shopping-cart', 'title' => 'The impulse rack pick',      'text' => 'The prettiest tree on the big-box rack is often root-bound, mislabeled, or simply wrong for full Central Florida sun. Cheap on Saturday, expensive by August.'],
];

// ---- Species cards (signature section) ----
$speciesCards = [
    ['icon' => 'tree-deciduous', 'name' => 'Live Oak',          'tag' => 'Signature shade',   'text' => 'The tree DeLand is known for — long-lived, wind-firm through hurricane season, and generous with shade. It needs room: we place live oaks where their canopy and roots have decades of space.'],
    ['icon' => 'flower-2',       'name' => 'Southern Magnolia', 'tag' => 'Evergreen classic', 'text' => 'Glossy evergreen leaves and big white blooms on a tree that handles sandy Central Florida soil well. A strong front-yard anchor that keeps its looks all year.'],
    ['icon' => 'flower',         'name' => 'Crape Myrtle',      'tag' => 'Summer color',      'text' => 'Months of summer bloom at a scale that fits smaller yards, drives, and bed corners. The right pick when you want color without committing to a giant.'],
    ['icon' => 'trees',          'name' => 'Sabal Palm',        'tag' => 'Florida native',    'text' => "Florida's state tree, and a natural in DeLand's sandy soil. Sabal palms shrug off wind and drought once established — a low-drama vertical accent near pools and patios."],
    ['icon' => 'leaf',           'name' => 'East Palatka Holly','tag' => 'Tidy evergreen',    'text' => 'A neat, pyramidal evergreen that takes our heat, feeds the birds with winter berries, and stays in scale beside entries and property lines.'],
    ['icon' => 'shrub',          'name' => 'Hedges & Shrub Beds','tag' => 'Privacy & beds',   'text' => 'Viburnum privacy screens, hibiscus, palmettos, sago palms, and foundation beds finished with fresh mulch — the shrub layer that ties the whole yard together.'],
];

// ---- Staggered planting steps (C7.4) ----
$plantingSteps = [
    [
        'photo'    => 'entrywalk',
        'caption'  => 'Beds laid out along a DeLand entry walk',
        'title'    => 'Site walk, soil check & plant plan',
        'text'     => "We walk the property with you, look at sun, drainage, irrigation, and what the sandy soil is actually doing, and map where each tree and shrub belongs — the right-tree-right-place call that decides whether a planting thrives or becomes a future removal.",
        'includes' => ['Sun, spacing & drainage assessment', 'Species matched to your soil and site', 'Written plan and free estimate in 24 hours'],
    ],
    [
        'photo'    => 'sagobed',
        'caption'  => 'Sago and shrub bed finished in fresh mulch',
        'title'    => 'Sourcing, bed prep & the dig',
        'text'     => "We source healthy nursery stock and inspect every root ball before it goes in the ground. Beds get edged and prepped, holes get dug wide and shallow — in sandy Central Florida soil the root flare sits at grade, never buried.",
        'includes' => ['Healthy nursery stock, inspected first', 'Wide, shallow planting at the root flare', 'Bobcat work for big beds and field-grown trees'],
    ],
    [
        'photo'    => 'mulchbeds',
        'caption'  => 'Shaped shrubs and palms, mulched and watered in',
        'title'    => 'Mulch, water-in & establishment plan',
        'text'     => "Every planting is watered in, ringed with mulch to slow the sand from drinking your irrigation, and staked only if it truly needs it. You get a written establishment watering schedule for the first months — the part DIY plantings almost always skip.",
        'includes' => ['Fresh mulch ring on every planting', 'Written establishment watering schedule', 'Straight answers on fertilizer and staking'],
    ],
];

// ---- Comparison: big-box DIY vs professional install ----
$comparison = [
    ['them' => "Whatever's on the rack that weekend, root-bound or not",   'us' => 'Species matched to your sun, soil, and space — inspected stock'],
    ['them' => 'Shovel hole, root flare buried, potting soil backfill',    'us' => 'Wide, shallow planting at grade, done the way trees establish'],
    ['them' => '"Water it when you think of it" through a Florida summer', 'us' => 'A written establishment watering schedule for sandy soil'],
    ['them' => 'One tree at a time, one aching weekend at a time',         'us' => 'One crew with tree and bobcat equipment — beds done in a day'],
    ['them' => 'Nobody to call when it browns out by August',              'us' => 'A local DeLand tree service that answers the phone after planting day'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'When is the best time to plant trees in DeLand?',
        'a' => "Fall through early spring is the sweet spot in Central Florida — mild temperatures let roots establish before summer heat arrives, and the June-through-September rains then do some of the watering for you. That said, we plant year-round in DeLand; a summer planting just gets a more careful establishment watering schedule to match.",
    ],
    [
        'q' => 'How often do I need to water a newly planted tree?',
        'a' => "More often than you'd think, because sandy soil drains fast. A new tree typically needs water daily for the first couple of weeks, then a tapering schedule over the following months as roots reach outward. We leave every planting with a written watering schedule sized to the tree and the season, so there's no guessing.",
    ],
    [
        'q' => 'Do you supply the trees and shrubs, or do I buy them?',
        'a' => "Either works. Most DeLand customers have us source everything — we pick healthy nursery stock and inspect root balls before planting. If you've already bought plants, we'll gladly install them, and we'll tell you honestly if one is root-bound or wrong for the spot before it goes in the ground.",
    ],
    [
        'q' => 'Can you replace a tree you removed?',
        'a' => "Yes, and it's one of our most common pairings. After a removal we grind the stump, prep the area, and plant a better-suited species — usually offset from the old root zone so the new tree isn't fighting decaying roots. One crew handles the takedown, the cleanup, and the replacement planting.",
    ],
    [
        'q' => 'What size tree should I start with?',
        'a' => "Smaller than your instinct says. A smaller container-grown tree usually establishes faster and often catches up to a large field-grown specimen within a few years, at a fraction of the cost. If you want instant shade we can absolutely plant big — we have the equipment — but we'll lay out the tradeoff honestly first.",
    ],
    [
        'q' => 'Will you plant near my pool, septic, or utility lines?',
        'a' => "Carefully, and sometimes the honest answer is \"not that species, not there.\" Roots and pool screen enclosures, septic drain fields, and service lines don't mix with aggressive rooters. We call in utility locates before digging and steer you toward palms and small-rooted species where space is tight.",
    ],
    [
        'q' => 'Do you do shrub-only jobs, or just trees?',
        'a' => "Shrub-only jobs are welcome. Hedge rows, foundation beds, privacy screens, and full bed refreshes with new mulch are regular work for us across DeLand and Volusia County — no tree required. If it grows in a bed and belongs in this climate, we plant it.",
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
        ['name' => 'Tree Planting & Shrub Installation'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Planting & Shrub Installation — page-specific styles
   Prefix: .plt-  |  Warm cream palette, staggered steps (C7.4),
   species cards (signature), polaroid framing (§2.7.5),
   C1.4 hero, C5.1 watermarks, C5.4 drop cap, C6.4 glass compare,
   C4.2/C9.1 gradient CTA, C3 curved + organic + double dividers.
   All values from tokens — no hardcoded colors/shadows.
   ============================================================ */

/* ---- C1.4 Page hero: photo + warm gradient + noise ---- */
.plt-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 60%;
  overflow: hidden;
}
.plt-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 86%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 68%, var(--color-dark) 8%) 52%,
    color-mix(in srgb, var(--color-dark) 92%, var(--color-accent) 4%) 100%
  );
}
.plt-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.plt-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.plt-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.plt-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.plt-breadcrumb a:hover { color: var(--color-accent); }
.plt-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.plt-hero .hero-eyebrow {
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
.plt-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.plt-hero h1 .text-accent { color: var(--color-accent); }
.plt-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.plt-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.plt-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.plt-hero .hero-trust-item svg,
.plt-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- C5.1 Numbered section watermarks ---- */
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
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- Problem statement: planting-mistake bento cards ---- */
.plt-mistakes {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.plt-mistake-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border-top: 3px solid color-mix(in srgb, var(--color-accent) 65%, transparent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plt-mistake-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.plt-mistake-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.plt-mistake-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.plt-mistake-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.plt-mistake-card .plt-mistake-icon {
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
  transition: transform var(--transition-base);
}
.plt-mistake-card:hover .plt-mistake-icon { transform: scale(1.08) rotate(-4deg); }
.plt-mistake-card .plt-mistake-icon svg,
.plt-mistake-card .plt-mistake-icon i { width: 24px; height: 24px; }
.plt-mistake-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.plt-mistake-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Species cards (signature section, warm cream) ---- */
.plt-species-section { background: var(--color-cream); }
.plt-species-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.plt-species-card {
  position: relative;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6) var(--space-6);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plt-species-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
  opacity: 0.85;
}
.plt-species-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
.plt-species-head {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  margin-bottom: var(--space-3);
}
.plt-species-icon {
  width: 46px;
  height: 46px;
  flex-shrink: 0;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 9%, var(--color-white));
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  transition: transform var(--transition-base), background var(--transition-base);
}
.plt-species-card:hover .plt-species-icon {
  transform: scale(1.1) rotate(5deg);
  background: color-mix(in srgb, var(--color-accent) 16%, var(--color-white));
  color: color-mix(in srgb, var(--color-accent) 80%, var(--color-dark));
}
.plt-species-icon svg, .plt-species-icon i { width: 22px; height: 22px; }
.plt-species-card h3 {
  font-size: var(--font-size-lg);
  margin: 0;
  text-wrap: balance;
}
.plt-species-tag {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: color-mix(in srgb, var(--color-accent) 78%, var(--color-dark));
  background: color-mix(in srgb, var(--color-accent) 12%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-3);
  margin-bottom: var(--space-3);
}
.plt-species-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- C7.4 Staggered planting steps + §2.7.5 polaroid frames ---- */
.plt-steps-section { background: var(--color-white); }
.plt-stagger-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(var(--space-8), 5vw, var(--space-16));
  align-items: center;
  margin-bottom: var(--space-16);
}
.plt-stagger-row:last-child { margin-bottom: 0; }
.plt-stagger-row:nth-child(even) .plt-stagger-media { order: 2; }
.plt-stagger-row:nth-child(even) .plt-stagger-body  { order: 1; }
.plt-polaroid {
  margin: 0;
  padding: var(--space-3) var(--space-3) var(--space-10);
  background: var(--color-cream);
  border-radius: var(--radius-sm);
  box-shadow: var(--shadow-lg);
  transform: rotate(-1.2deg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plt-stagger-row:nth-child(even) .plt-polaroid { transform: rotate(1.1deg); }
.plt-polaroid:hover { transform: rotate(0deg) translateY(-4px); box-shadow: var(--shadow-xl); }
.plt-polaroid img {
  width: 100%;
  aspect-ratio: 4 / 3;
  object-fit: cover;
  border-radius: var(--radius-sm);
}
.plt-polaroid figcaption {
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-style: italic;
  color: var(--color-gray);
  text-align: center;
  padding-top: var(--space-4);
}
.plt-step-num {
  display: inline-flex;
  align-items: center;
  gap: var(--space-3);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: var(--font-size-sm);
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.plt-step-num::before {
  content: '';
  width: 34px;
  height: 2px;
  background: var(--color-accent);
}
.plt-stagger-body h3 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.plt-stagger-body p {
  color: var(--color-text);
  margin-bottom: var(--space-4);
}
.plt-includes {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}
.plt-includes li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}
.plt-includes li svg, .plt-includes li i {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}

/* ---- Cost section (warm cream) ---- */
.plt-cost-section { background: var(--color-cream); }
.plt-cost-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.plt-cost-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plt-cost-card:nth-child(even) { border-top-color: var(--color-accent); }
.plt-cost-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.plt-cost-card h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.plt-cost-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Commercial / HOA: asymmetric split + big stat + drop cap ---- */
.plt-biz-section { background: var(--color-white); }
.plt-biz-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.plt-drop-cap::first-letter {
  float: left;
  font-family: var(--font-heading);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.85;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.plt-biz-points {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.plt-biz-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.plt-biz-points li svg, .plt-biz-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.plt-biz-points li strong { color: var(--color-primary); }
.plt-biz-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.plt-big-stat {
  text-align: center;
  padding: var(--space-10) var(--space-8);
  background: var(--color-cream);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.plt-big-stat::before {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.plt-big-stat .plt-big-number {
  font-family: var(--font-heading);
  font-size: clamp(4rem, 8vw, 6.5rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.plt-big-stat .plt-big-number span { color: var(--color-accent); }
.plt-big-stat .plt-big-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-2);
}

/* ---- Comparison: dark section, glass columns (C6.4) ---- */
.plt-compare-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.plt-compare-section::before {
  content: '';
  position: absolute;
  top: -25%;
  left: -12%;
  width: 60%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 35%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.plt-compare-section .container { position: relative; z-index: 1; }
.plt-compare-section .section-title h2 { color: var(--color-white); }
.plt-compare-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.plt-compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.plt-compare-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
}
.plt-compare-col--them {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.plt-compare-col--us {
  background: color-mix(in srgb, var(--color-primary) 32%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  box-shadow: var(--shadow-xl);
}
.plt-compare-col h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.plt-compare-col--us h3 { color: var(--color-accent); }
.plt-compare-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); }
.plt-compare-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-sm);
}
.plt-compare-col li svg, .plt-compare-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.plt-compare-col--them li svg, .plt-compare-col--them li i { color: color-mix(in srgb, var(--color-white) 40%, transparent); }
.plt-compare-col--us li svg, .plt-compare-col--us li i { color: var(--color-accent); }

/* ---- Proof: polaroid pair + review badges + area chips ---- */
.plt-proof-section { background: var(--color-light); }
.plt-proof-pair {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(var(--space-6), 4vw, var(--space-12));
  max-width: 900px;
  margin: 0 auto var(--space-10);
}
.plt-proof-pair .plt-polaroid:first-child { transform: rotate(-1.6deg); }
.plt-proof-pair .plt-polaroid:last-child  { transform: rotate(1.4deg); }
.plt-proof-pair .plt-polaroid:hover { transform: rotate(0deg) translateY(-4px); }
.plt-review-strip {
  display: flex;
  justify-content: center;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
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
.plt-area-chips {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
}
.plt-area-chip {
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
.plt-area-chip svg, .plt-area-chip i { width: 14px; height: 14px; color: var(--color-primary); }

/* ---- FAQ + Related ---- */
.plt-faq-section { background: var(--color-white); }
.plt-related-section { background: var(--color-cream); }

/* ---- C4.2 / C9.1 Closing CTA: diagonal gradient + noise ---- */
.plt-closing-cta {
  position: relative;
  overflow: hidden;
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 55%, var(--color-secondary) 100%);
}
.plt-closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.06;
  pointer-events: none;
}
.plt-closing-cta .container { position: relative; z-index: 1; }
.plt-closing-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.plt-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.plt-closing-cta .hero-actions {
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

/* ---- C3 SVG dividers (curved wave, organic torn, double wave) ---- */
.svg-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 72px);
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
  .plt-mistakes { grid-template-columns: repeat(2, 1fr); }
  .plt-species-grid { grid-template-columns: repeat(2, 1fr); }
  .plt-biz-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .plt-big-stat { max-width: 420px; margin: 0 auto; }
  .plt-cost-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .plt-hero { min-height: auto; }
  .plt-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .plt-stagger-row { grid-template-columns: 1fr; gap: var(--space-8); margin-bottom: var(--space-12); }
  .plt-stagger-row:nth-child(even) .plt-stagger-media { order: 0; }
  .plt-stagger-row:nth-child(even) .plt-stagger-body  { order: 0; }
  .plt-compare-grid { grid-template-columns: 1fr; }
  .plt-proof-pair { grid-template-columns: 1fr; max-width: 460px; }
}
@media (max-width: 600px) {
  .plt-mistakes, .plt-species-grid, .plt-cost-grid { grid-template-columns: 1fr; }
  .plt-hero .hero-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="plt-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree planting and shrub installation in DeLand, Florida">
  <div class="container">
    <nav class="plt-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Tree Planting &amp; Shrub Installation</span>
    </nav>

    <span class="hero-eyebrow">Tree Planting &middot; DeLand, FL</span>

    <h1>Tree Planting &amp; Shrub Installation in DeLand, FL &mdash; <span class="text-accent">Planted Right by a Local Tree Service</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Volusia County since <?php echo e($yearEstablished); ?> &mdash; and we plant trees as carefully as we take them down. Florida-native trees and shrubs, matched to your sandy soil and sun, installed at the right depth with a real establishment watering plan.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Plan Your Planting &mdash; Free Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="sprout"></i> Florida-Native Species</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PROBLEM STATEMENT — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Why new plantings fail">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Planted Wrong Is Money Buried</span>
      <h2>Why do so many new trees and shrubs fail in DeLand yards?</h2>
      <p class="answer-block">Most new plantings in DeLand fail for one of four fixable reasons: the wrong species for the spot, a root flare buried too deep, no establishment watering through the first sandy-soil summer, or an impulse buy that was struggling before it left the store. Professional installation exists to remove all four.</p>
    </div>

    <div class="plt-mistakes">
      <?php foreach ($plantingMistakes as $i => $mistake): ?>
      <article class="plt-mistake-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="plt-mistake-icon"><i data-lucide="<?php echo e($mistake['icon']); ?>"></i></div>
        <h3><?php echo e($mistake['title']); ?></h3>
        <p><?php echo e($mistake['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ SPECIES (SIGNATURE) — 02 ============ -->
<section class="numbered-section plt-species-section" data-num="02" aria-label="Best trees for DeLand soil">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Right Tree, Right Place</span>
      <h2>Which trees grow best in DeLand's sandy Central Florida soil?</h2>
      <p class="answer-block">For residential tree planting in DeLand, the proven performers are Florida natives and long-adapted classics: live oak, southern magnolia, crape myrtle, sabal palm, and East Palatka holly, backed by shrub beds of viburnum, palmettos, and hibiscus. They handle fast-draining sandy soil, full Central Florida sun, and hurricane-season wind better than imported impulse picks.</p>
    </div>

    <div class="plt-species-grid">
      <?php foreach ($speciesCards as $i => $species): ?>
      <article class="plt-species-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="plt-species-head">
          <div class="plt-species-icon"><i data-lucide="<?php echo e($species['icon']); ?>"></i></div>
          <h3><?php echo e($species['name']); ?></h3>
        </div>
        <span class="plt-species-tag"><?php echo e($species['tag']); ?></span>
        <p><?php echo e($species['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: organic torn edge (cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ PLANTING STEPS (C7.4 + POLAROIDS) — 03 ============ -->
<section class="numbered-section plt-steps-section" data-num="03" aria-label="What shrub installation includes">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">From Bare Spot to Established</span>
      <h2>What's included in professional shrub installation?</h2>
      <p class="answer-block">Professional shrub installation at God's Country Tree Service covers the whole job: a site and soil assessment, a planting plan, healthy sourced stock, prepped and edged beds, correct-depth planting, fresh mulch, water-in, and a written establishment schedule. The same three-step process applies whether it's one hedge row or a full DeLand landscape.</p>
    </div>

    <?php foreach ($plantingSteps as $i => $step): ?>
    <div class="plt-stagger-row">
      <div class="plt-stagger-media" data-animate>
        <figure class="plt-polaroid">
          <img src="<?php echo e($bodyPhotos[$step['photo']]['src']); ?>" alt="<?php echo e($bodyPhotos[$step['photo']]['alt']); ?>" width="800" height="600" loading="lazy">
          <figcaption><?php echo e($step['caption']); ?></figcaption>
        </figure>
      </div>
      <div class="plt-stagger-body" data-animate>
        <span class="plt-step-num">Step 0<?php echo $i + 1; ?></span>
        <h3><?php echo e($step['title']); ?></h3>
        <p><?php echo e($step['text']); ?></p>
        <ul class="plt-includes">
          <?php foreach ($step['includes'] as $item): ?>
          <li><i data-lucide="check-circle"></i> <?php echo e($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Divider: double wave (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-cream)" opacity="0.4"/><path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ COST — 04 ============ -->
<section class="numbered-section plt-cost-section" data-num="04" aria-label="Tree planting cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does tree planting cost in DeLand, FL?</h2>
      <p class="answer-block">Tree planting cost in DeLand depends on the tree's size, how many you're planting, and how much bed preparation the site needs &mdash; a single container-grown tree costs far less than a field-grown specimen placed by machine. Instead of guessing, we walk the yard and put a free written estimate in your hands within 24 hours.</p>
    </div>

    <div class="plt-cost-grid">
      <div class="plt-cost-card reveal-delay-1" data-animate>
        <h3>Tree size &amp; sourcing</h3>
        <p>A 7-gallon crape myrtle and a field-grown live oak are different purchases and different installs. Bigger stock means more machine time &mdash; and more instant impact. We quote both honestly.</p>
      </div>
      <div class="plt-cost-card reveal-delay-2" data-animate>
        <h3>Bed prep &amp; soil work</h3>
        <p>Edging new beds, removing old roots or sod, and grading with our bobcat all shape the price. Sandy soil rarely needs heavy amendment &mdash; it needs correct depth and mulch, which every quote includes.</p>
      </div>
      <div class="plt-cost-card reveal-delay-3" data-animate>
        <h3>Quantity &amp; access</h3>
        <p>Planting a full hedge row in one visit costs less per plant than piecemeal weekends. Tight gate access or backyard placement changes which equipment fits, and the written estimate says so up front.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider: curved wave (cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,0 900,80 1200,40 L1200,80 L0,80 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ BUSINESSES & HOAs — 05 ============ -->
<section class="numbered-section plt-biz-section" data-num="05" aria-label="Landscape planting for businesses and HOAs">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Beyond the Backyard</span>
      <h2>Do you handle landscape planting services for businesses and HOAs?</h2>
      <p class="answer-block">Yes &mdash; landscape planting services for DeLand businesses, HOA communities, and commercial properties are regular work for our crew. We phase installs so entrances stay open, carry the documented insurance boards and property managers ask for, and bring our own bobcat for bed prep, grading, and large-stock placement.</p>
    </div>

    <div class="plt-biz-split">
      <div>
        <p class="plt-drop-cap" data-animate>Planting at scale is where having one crew with both tree and bobcat equipment pays off. Entrance beds, streetscape trees, buffer hedges, and common-area shade can go in as one coordinated job instead of a parade of subcontractors &mdash; the same combination that has handled tree work across Volusia County since <?php echo e($yearEstablished); ?>. And because we also remove, trim, and prune, we plant with the next twenty years in mind, not just the ribbon-cutting photo.</p>
        <ul class="plt-biz-points" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>One crew, whole install.</strong> Design input, sourcing, bed prep, bobcat grading, planting, and mulch from a single company &mdash; one schedule, one point of contact.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Paperwork boards can approve.</strong> Licensed and insured, with documentation available before the first shovel &mdash; what HOA boards and property managers need on file.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Species that survive the budget cycle.</strong> We spec natives and proven performers that won't need replacing in two years, and we say so in writing.</p>
          </li>
        </ul>
      </div>

      <div class="plt-big-stat" data-animate="right">
        <div class="plt-big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
        <div class="plt-big-label">Years Planting &amp; Caring for DeLand Trees</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ COMPARISON (DARK, GLASS) ============ -->
<section class="plt-compare-section" aria-label="DIY planting versus professional installation">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label" style="color: var(--color-accent);">The Honest Math</span>
      <h2>Why hire a tree service to plant instead of doing it yourself?</h2>
      <p class="answer-block">Because a tree planted wrong costs twice: once at the register and again when it fails &mdash; or worse, when it grows into the pool enclosure and needs a removal crew. A professional tree service gets the species, depth, and watering right the first time, which is the cheapest version of the next thirty years.</p>
    </div>

    <div class="plt-compare-grid">
      <div class="plt-compare-col plt-compare-col--them" data-animate>
        <h3>The weekend big-box run</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="x"></i> <?php echo e($row['them']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="plt-compare-col plt-compare-col--us" data-animate="right">
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

<!-- ============ PROOF / NEAR ME — 07 ============ -->
<section class="numbered-section plt-proof-section" data-num="07" aria-label="Local planting work near you">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Searching for tree planting near me in DeLand?</h2>
      <p class="answer-block">If you're searching for tree planting near me in DeLand, these beds are what nearby jobs look like: palms, shaped shrubs, and fresh mulch installed at real homes in the area. We plant across DeLand, Deltona, Orange City, DeBary, and Lake Helen &mdash; the same local crew, wherever your yard is.</p>
    </div>

    <div class="plt-proof-pair">
      <figure class="plt-polaroid" data-animate>
        <img src="<?php echo e($heroImage); ?>" alt="Fan palm and shrub beds in fresh red mulch along a paver walk, DeLand, FL" width="800" height="600" loading="lazy">
        <figcaption>Fan palm &amp; shrub beds along a DeLand paver walk</figcaption>
      </figure>
      <figure class="plt-polaroid reveal-delay-1" data-animate>
        <img src="<?php echo e($bodyPhotos['mulchbeds']['src']); ?>" alt="<?php echo e($bodyPhotos['mulchbeds']['alt']); ?>" width="800" height="600" loading="lazy">
        <figcaption>Finished beds, shaped shrubs &amp; palms &mdash; DeLand, FL</figcaption>
      </figure>
    </div>

    <div class="plt-review-strip" data-animate>
      <a class="review-badge" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">
        <i data-lucide="star"></i> Read Our Google Reviews
      </a>
      <a class="review-badge" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">
        <i data-lucide="badge-check"></i> BBB Business Profile
      </a>
    </div>

    <div class="plt-area-chips" data-p1-dynamic>
      <?php foreach (['DeLand', 'Deltona', 'Orange City', 'DeBary', 'Lake Helen', 'Volusia County'] as $area): ?>
      <span class="plt-area-chip"><i data-lucide="map-pin"></i> <?php echo e($area); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FAQ — 08 ============ -->
<section class="numbered-section plt-faq-section" data-num="08" aria-label="Tree planting questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask before planting trees and shrubs?</h2>
      <p class="answer-block">Mostly the practical things: when to plant, how much to water, who supplies the plants, what size to start with, and what's safe near pools and septic lines. Straight answers below &mdash; and if yours isn't covered, put it in the estimate form and we'll answer within 24 hours.</p>
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
<section class="plt-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Help It Thrive</span>
      <h2>What other tree services do DeLand property owners pair with tree planting?</h2>
      <p class="answer-block">Planting is the start, not the finish. DeLand property owners usually pair new plantings with ongoing maintenance visits, structural pruning while young trees are cheap to shape, and certified arborist advice when an established tree looks off. All three come from the same God's Country crew.</p>
    </div>

    <?php renderServiceCards(['tree-maintenance-care', 'tree-pruning-services', 'certified-arborist-services'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C4.2 gradient + noise) ============ -->
<section class="plt-closing-cta" aria-label="Get a tree planting estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Put the Right Tree in the Right Place?</h2>
    <p class="answer-block">Tell us about the bare corner, the hedge you want, or the shade tree your yard is missing. <?php echo e($siteName); ?> will walk the property, match species to your soil and sun, and put a straight, written planting price in your hands &mdash; usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Plan Your Planting &mdash; Free Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
