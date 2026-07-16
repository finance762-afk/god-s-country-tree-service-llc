<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/tree-pruning-services/index.php — Tree Pruning
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Layout: C7.1 alternating timeline (cut types), C5.4 drop cap,
 * C4.3 duotone photo, C3.3 double-wave + C3.1 diagonal dividers
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'tree-pruning-services';

// V2.1 trade-noun title (56 chars) + V2.2 CTR meta (~155 chars)
$pageTitle       = "Tree Pruning in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Tree pruning in DeLand, FL with certified arborist expertise — structural, deadwood & thinning cuts, licensed & insured. Get a free pruning estimate today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp'; // roped arborist pruning inside live oak canopy (portrait — crop)
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'rigging' => [
        'src' => $imgBase . '1784062752583-t43g8b-75442896_2456228011264463_6144757071268020224_n.webp',
        'alt' => 'Harnessed climber rigging ropes on an oak limb in DeLand, FL',
    ],
    'sectioning' => [
        'src' => $imgBase . '1784062730346-5nqz2k-31180126_2042462089307726_2780749710774763520_n.webp',
        'alt' => 'Roped climber sectioning limbs high in a live oak canopy in DeLand, FL',
    ],
];

// ---- Warning signs a tree is overdue for pruning (bento) ----
$pruningSigns = [
    ['icon' => 'git-branch',     'title' => 'Two trunks fighting for the lead',      'text' => 'Codominant stems with bark pinched in the union are the classic live oak failure point. Structural pruning picks a winner while the cut is still small.'],
    ['icon' => 'move-horizontal','title' => 'Limbs longer than the yard',            'text' => 'Horizontal limbs stretched over the roof or pool screen enclosure gain leverage every season. The longer they get, the more the eventual fix costs.'],
    ['icon' => 'circle-off',     'title' => 'Gray wood in a green canopy',           'text' => 'Dead, bark-shedding limbs parked in the canopy interior are what hurricane wind removes first — usually onto whatever sits underneath them.'],
    ['icon' => 'wind',           'title' => 'A canopy the wind can\'t pass through', 'text' => 'A dense, never-thinned crown catches storm gusts like a sail, working the roots loose in DeLand\'s sandy soil instead of letting the wind slide through.'],
];

// ---- Signature: the four pruning cut types (C7.1 timeline) ----
$pruningCuts = [
    [
        'icon'  => 'git-branch',
        'name'  => 'Structural pruning',
        'text'  => 'The long game. On young and maturing trees we select one dominant leader, remove competing stems, and space the scaffold limbs that will carry the canopy for decades. A live oak structurally pruned early almost never needs emergency work later — it\'s the cheapest tree care there is.',
    ],
    [
        'icon'  => 'circle-off',
        'name'  => 'Deadwood removal',
        'text'  => 'Gray, brittle limbs are the first thing hurricane wind takes. We work the canopy interior and strip deadwood back to live tissue, cutting at the branch collar so the wound can close. Anything hanging over a roof, driveway, or pool screen enclosure comes out first.',
    ],
    [
        'icon'  => 'wind',
        'name'  => 'Crown thinning',
        'text'  => 'Selective interior cuts that let wind pass through the canopy instead of shoving against it. Thinning is judgment work — take the crossing, rubbing, and redundant limbs, keep the structure. Over-thinned trees sprout back worse than before, so we stay deliberate about every cut.',
    ],
    [
        'icon'  => 'ruler',
        'name'  => 'Clearance pruning',
        'text'  => 'The practical cuts: limbs backed off the roofline, the screen enclosure, the driveway, and service drops — with enough margin that next season\'s growth doesn\'t erase the work. Made at the right laterals, clearance cuts hold their distance for years instead of months.',
    ],
];

// ---- Cost factors ----
$costFactors = [
    ['title' => 'Size & species',          'text' => 'Structural work on a young maple is a short visit; thinning a mature live oak canopy is a day of climbing. Height, spread, and species drive the time on the rope.'],
    ['title' => 'Scope of the work',       'text' => 'Deadwood-only visits cost less than a full structural-plus-thinning prune. Your written estimate names each cut type included, so you can phase the work if you\'d rather.'],
    ['title' => 'What\'s under the canopy','text' => 'Open lawn lets limbs come straight down. Over a roof, fence, or pool enclosure, every piece gets roped and lowered — slower, safer, and priced honestly up front.'],
];

// ---- Comparison: a cosmetic trim vs arborist pruning ----
$comparison = [
    ['them' => 'Cuts wherever the canopy looks long',          'us' => 'Cuts placed at the branch collar so wounds close'],
    ['them' => 'Same treatment for every species',             'us' => 'Live oaks, laurel oaks, pines, and palms each pruned to species'],
    ['them' => 'Interior deadwood usually stays put',          'us' => 'Brittle gray limbs come out before a storm drops them'],
    ['them' => 'Looks tidier the day the crew leaves',         'us' => 'Grows stronger and safer every season after'],
    ['them' => 'No thought to June through November',          'us' => 'Canopy thinned so hurricane-season wind passes through'],
];

// ---- Pruning cadence (how often) ----
$cadence = [
    ['icon' => 'sprout',         'title' => 'Young shade trees',       'window' => 'Every 2–3 years', 'text' => 'Structural pruning while limbs are still small means small wounds, fast closure, and a tree that never grows its worst habits in the first place.'],
    ['icon' => 'tree-deciduous', 'title' => 'Mature oaks',             'window' => 'Every 3–5 years', 'text' => 'Established live oaks and laurel oaks mostly need maintenance: deadwood out, light thinning, clearance held. A steady cycle keeps each visit small.'],
    ['icon' => 'cloud-rain',     'title' => 'Ahead of hurricane season','window' => 'Walk-through yearly', 'text' => 'A spring look at what winter left behind. Deadwood over a roof or driveway doesn\'t wait for its turn on the calendar — it comes out now.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Can pruning save a tree I was told needs to come down?',
        'a' => "Sometimes. Storm damage, deadwood, and an overloaded canopy often look worse than they are, and targeted pruning or crown reduction can keep a structurally sound tree standing. Decay at the base or a failing root plate is a different story. We assess the tree honestly at the free estimate — if pruning will genuinely fix it, pruning is what we quote.",
    ],
    [
        'q' => 'Will you top my tree to make it shorter?',
        'a' => "No — topping is the one cut we won't make. Slicing through the middle of limbs leaves wounds that never close and forces weak, fast regrowth that fails in the next storm. If a tree has outgrown its spot, we quote crown reduction instead: cutting back to healthy lateral limbs so the canopy comes down in size without wrecking the tree.",
    ],
    [
        'q' => 'When is the best time of year to prune in Central Florida?',
        'a' => "Most DeLand hardwoods can be pruned year-round, but the sweet spot is the drier months before hurricane season arrives in June — the tree heads into the storms with less sail and no fresh heavy regrowth. Light deadwood removal is fine in any month. We factor species and season into the plan at your estimate.",
    ],
    [
        'q' => 'How much of the canopy can you safely remove?',
        'a' => "The working rule for mature trees is no more than about a quarter of the live canopy in one visit — and less for older oaks. Taking more stresses the tree and triggers exactly the weak sprout growth pruning is meant to prevent. When a canopy needs major reshaping, we stage the work across seasons instead of forcing it into one.",
    ],
    [
        'q' => 'Do you prune palms as well as oaks?',
        'a' => "Yes. Palms across DeLand collect brown fronds and seed pods that come down in every summer thunderstorm, and over-stripped palms weaken over time. We remove the dead fronds and pods and stop there, leaving the healthy green crown intact so the palm keeps feeding itself.",
    ],
    [
        'q' => 'What happens to the branches and debris?',
        'a' => "Everything we cut gets chipped or loaded the same day. Brush goes through the chipper, larger wood rides out on the truck, and we rake the lawn and beds before we leave. If you'd like the chips kept for mulch, say the word and we'll leave the pile wherever you want it.",
    ],
    [
        'q' => 'Do I need to be home during the pruning visit?',
        'a' => "Not usually. As long as the crew can reach the trees and gates are open, most DeLand pruning jobs run fine without the homeowner there. We do like to walk the plan with you first — at the estimate or the morning of the job — so you know exactly which limbs are coming off before a saw starts.",
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
        ['name' => 'Home',                  'url' => '/'],
        ['name' => 'Services',              'url' => '/services/'],
        ['name' => 'Tree Pruning Services'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Pruning — page-specific styles (.prn- prefix)
   Techniques: C1.4 page hero (photo + gradient + noise),
   C7.1 alternating timeline (signature — pruning cut types),
   C5.4 editorial drop cap, C4.3 duotone image treatment,
   C4.1 radial glow on dark sections, C5.1 numbered watermarks,
   C3.3 double-wave + C3.1 diagonal SVG dividers, C10 hovers.
   All values via tokens / color-mix — no hardcoded colors.
   ============================================================ */

/* ---- C1.4 Page hero: portrait photo (center-crop) + gradient + noise ---- */
.prn-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 28%; /* portrait source — keep climber in frame */
  overflow: hidden;
}
.prn-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    168deg,
    color-mix(in srgb, var(--color-dark) 86%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 70%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.prn-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.prn-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.prn-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.prn-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.prn-breadcrumb a:hover { color: var(--color-accent); }
.prn-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.prn-hero .prn-eyebrow {
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
.prn-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.prn-hero h1 .text-accent { color: var(--color-accent); }
.prn-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.prn-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.prn-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.prn-hero .hero-trust-item svg,
.prn-hero .hero-trust-item i {
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
  font-family: var(--font-accent);
  font-size: clamp(5rem, 12vw, 9rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 6%, transparent);
  pointer-events: none;
  z-index: 0;
}
.numbered-section > .container { position: relative; z-index: 1; }

/* ---- Section title block (shared idiom) ---- */
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

/* ---- Problem statement: overdue-signs bento ---- */
.prn-signs-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.prn-sign-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border-bottom: 3px solid transparent;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.prn-sign-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.prn-sign-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.prn-sign-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.prn-sign-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
  border-bottom-color: var(--color-accent);
}
.prn-sign-card .prn-sign-icon {
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
.prn-sign-card .prn-sign-icon svg,
.prn-sign-card .prn-sign-icon i { width: 24px; height: 24px; }
.prn-sign-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.prn-sign-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Expert positioning: asymmetric split, drop cap, big stat ---- */
.prn-expert-section { background: var(--color-cream); }
.prn-expert-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
/* C5.4 editorial drop cap on the lede */
.prn-lede { font-size: var(--font-size-lg); }
.prn-lede::first-letter {
  float: left;
  font-family: var(--font-accent);
  font-size: 4.4rem;
  font-weight: 800;
  line-height: 0.85;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.prn-expert-points {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.prn-expert-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.prn-expert-points li svg,
.prn-expert-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.prn-expert-points li strong { color: var(--color-primary); }
.prn-expert-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.prn-stat {
  text-align: center;
  padding: var(--space-10) var(--space-8);
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.prn-stat::before {
  content: '';
  position: absolute;
  inset: calc(-1 * var(--space-3)) var(--space-3) var(--space-3) calc(-1 * var(--space-3));
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.prn-stat .prn-big-number {
  font-family: var(--font-accent);
  font-size: clamp(4rem, 8vw, 6.5rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.prn-stat .prn-big-number span { color: var(--color-accent); }
.prn-stat .prn-big-label {
  font-family: var(--font-accent);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-2);
}

/* ---- SIGNATURE (C7.1): alternating timeline of pruning cut types ---- */
.prn-timeline-section { background: var(--color-white); }
.prn-timeline {
  position: relative;
  max-width: 920px;
  margin: 0 auto;
}
.prn-timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-primary-dark));
}
.prn-timeline-item {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  gap: var(--space-8);
  margin-bottom: var(--space-12);
}
.prn-timeline-item:last-child { margin-bottom: 0; }
.prn-timeline-item:nth-child(odd) .prn-timeline-card {
  grid-column: 1;
  grid-row: 1;
  text-align: right;
  border-right: 4px solid var(--color-accent);
}
.prn-timeline-item:nth-child(even) .prn-timeline-card {
  grid-column: 3;
  grid-row: 1;
  text-align: left;
  border-left: 4px solid var(--color-accent);
}
.prn-timeline-item:nth-child(odd)  .prn-timeline-spacer { grid-column: 3; grid-row: 1; }
.prn-timeline-item:nth-child(even) .prn-timeline-spacer { grid-column: 1; grid-row: 1; }
.prn-timeline-node {
  width: 52px;
  height: 52px;
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
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.prn-timeline-item:hover .prn-timeline-node {
  transform: scale(1.08);
  box-shadow: 0 0 0 8px color-mix(in srgb, var(--color-accent) 22%, transparent);
}
.prn-timeline-node svg,
.prn-timeline-node i { width: 24px; height: 24px; }
.prn-timeline-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.prn-timeline-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-lg); }
.prn-timeline-step {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.prn-timeline-card h3 {
  font-family: var(--font-accent);
  font-size: var(--font-size-xl);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.prn-timeline-card p {
  margin: 0;
  color: var(--color-gray);
  font-size: var(--font-size-base);
}

/* ---- Cost section ---- */
.prn-cost-section { background: var(--color-light); }
.prn-cost-factors {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.prn-cost-factor {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.prn-cost-factor:nth-child(even) { border-top-color: var(--color-accent); }
.prn-cost-factor:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.prn-cost-factor h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); text-wrap: balance; }
.prn-cost-factor p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof: photo pair, one duotone (C4.3), review badges ---- */
.prn-proof-section { background: var(--color-white); }
.prn-proof-gallery {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 880px;
  margin: 0 auto var(--space-10);
}
.prn-proof-gallery figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.prn-proof-gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  aspect-ratio: 4 / 5;
  transition: transform var(--transition-slow);
}
.prn-proof-gallery figure:hover img { transform: scale(1.04); }
.prn-proof-gallery figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 82%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  z-index: 2;
}
/* C4.3 duotone treatment — branded editorial feel on one photo */
.prn-duotone img { filter: saturate(0.8) sepia(0.12); }
.prn-duotone::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, color-mix(in srgb, var(--color-primary) 45%, transparent) 0%, transparent 60%);
  pointer-events: none;
  z-index: 1;
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
  font-family: var(--font-accent);
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.review-badge:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); color: var(--color-primary); }
.review-badge svg, .review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- Comparison: trim vs pruning (dark, C4.1 radial glow) ---- */
.prn-compare-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.prn-compare-section::before {
  content: '';
  position: absolute;
  top: -30%;
  left: -10%;
  width: 60%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 35%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.prn-compare-section .container { position: relative; z-index: 1; }
.prn-compare-section .section-title h2 { color: var(--color-white); }
.prn-compare-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.prn-compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.prn-compare-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
}
.prn-compare-col--trim {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.prn-compare-col--prune {
  background: color-mix(in srgb, var(--color-primary) 32%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  box-shadow: var(--shadow-xl);
}
.prn-compare-col h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.prn-compare-col--prune h3 { color: var(--color-accent); }
.prn-compare-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); }
.prn-compare-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-sm);
}
.prn-compare-col li svg, .prn-compare-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.prn-compare-col--trim li svg, .prn-compare-col--trim li i { color: color-mix(in srgb, var(--color-white) 40%, transparent); }
.prn-compare-col--prune li svg, .prn-compare-col--prune li i { color: var(--color-accent); }

/* ---- Cadence: how often to prune ---- */
.prn-cadence-section { background: var(--color-cream); }
.prn-cadence-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.prn-cadence-card {
  position: relative;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.prn-cadence-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.prn-cadence-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
}
.prn-cadence-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: color-mix(in srgb, var(--color-primary) 8%, transparent);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.prn-cadence-icon svg, .prn-cadence-icon i { width: 24px; height: 24px; }
.prn-cadence-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-1); text-wrap: balance; }
.prn-cadence-window {
  display: inline-block;
  font-family: var(--font-accent);
  font-weight: 800;
  font-size: var(--font-size-sm);
  letter-spacing: 1px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.prn-cadence-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- FAQ + related ---- */
.prn-faq-section { background: var(--color-white); }
.related-section { background: var(--color-light); }

/* ---- Closing CTA (C4.1 top-arc glow) ---- */
.prn-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.prn-closing-cta::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  height: 160%;
  background: radial-gradient(ellipse at 50% 0%, color-mix(in srgb, var(--color-primary) 45%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.prn-closing-cta .container { position: relative; z-index: 1; }
.prn-closing-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.prn-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.prn-closing-cta .hero-actions {
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

/* ---- SVG dividers (2 distinct shapes: C3.3 double wave + C3.1 diagonal) ---- */
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

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .prn-signs-grid { grid-template-columns: repeat(2, 1fr); }
  .prn-expert-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .prn-stat { max-width: 420px; margin: 0 auto; }
  .prn-cost-factors { grid-template-columns: repeat(2, 1fr); }
  .prn-cadence-grid { grid-template-columns: 1fr; max-width: 560px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .prn-hero { min-height: auto; }
  .prn-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .prn-compare-grid { grid-template-columns: 1fr; }
  .prn-proof-gallery { grid-template-columns: 1fr; max-width: 480px; }
  /* C7.1 mobile collapse: single left-aligned column */
  .prn-timeline::before { display: none; }
  .prn-timeline-item {
    grid-template-columns: auto 1fr;
    gap: var(--space-4);
    margin-bottom: var(--space-8);
  }
  .prn-timeline-node { grid-column: 1; grid-row: 1; align-self: start; }
  .prn-timeline-item:nth-child(odd) .prn-timeline-card,
  .prn-timeline-item:nth-child(even) .prn-timeline-card {
    grid-column: 2;
    grid-row: 1;
    text-align: left;
    border-left: 4px solid var(--color-accent);
    border-right: none;
  }
  .prn-timeline-spacer { display: none; }
}
@media (max-width: 600px) {
  .prn-signs-grid, .prn-cost-factors { grid-template-columns: 1fr; }
  .prn-hero .hero-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="prn-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree pruning in DeLand, Florida">
  <div class="container">
    <nav class="prn-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Tree Pruning Services</span>
    </nav>

    <span class="prn-eyebrow">Tree Pruning &middot; DeLand, FL</span>

    <h1>Tree Pruning Services in DeLand, FL &mdash; <span class="text-accent">Certified Arborist Cuts from a Local Tree Service</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Volusia County since <?php echo e($yearEstablished); ?>. Our pruning is certified-arborist guided &mdash; structural cuts, deadwood removal, and crown thinning that keep live oaks healthy and storm-ready &mdash; with free written estimates within 24 hours.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Pruning Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="leaf"></i> Certified Arborist Expertise</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PROBLEM STATEMENT — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Signs a tree is overdue for pruning">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Read the Canopy</span>
      <h2>Why do DeLand live oaks split and shed limbs without pruning?</h2>
      <p class="answer-block">Unpruned live oaks and laurel oaks grow codominant stems, over-long limbs, and dense canopies that catch hurricane wind like a sail. In DeLand's sandy Central Florida soil, that extra load works roots and branch unions until something gives. Pruning removes the weak points years before they fail.</p>
    </div>

    <div class="prn-signs-grid">
      <?php foreach ($pruningSigns as $i => $sign): ?>
      <article class="prn-sign-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="prn-sign-icon"><i data-lucide="<?php echo e($sign['icon']); ?>"></i></div>
        <h3><?php echo e($sign['title']); ?></h3>
        <p><?php echo e($sign['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: C3.3 double wave (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none">
    <path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-cream)" opacity="0.4"/>
    <path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-cream)"/>
  </svg>
</div>

<!-- ============ EXPERT POSITIONING — 02 ============ -->
<section class="numbered-section prn-expert-section" data-num="02" aria-label="Certified arborist pruning expertise">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label">The Science Behind the Saw</span>
      <h2>What is certified arborist pruning and why does it matter?</h2>
      <p class="answer-block">Certified arborist pruning means every cut is chosen for the tree's biology &mdash; where the branch collar sits, how the species closes wounds, and what the canopy needs to stand up to storm season. It matters because a bad cut never heals; DeLand oaks carry them for decades.</p>
    </div>

    <div class="prn-expert-split">
      <div>
        <p class="prn-lede" data-animate>Anyone with a saw can shorten a branch. Knowing which branch, where the cut closes fastest, and how a live oak rooted in sandy Central Florida soil will respond two growing seasons from now is the actual trade. <?php echo e($siteName); ?> has pruned DeLand's oaks, pines, and palms since <?php echo e($yearEstablished); ?> &mdash; from the moss-draped canopies around historic downtown DeLand to newer yards in Deltona and Orange City &mdash; and certified arborist judgment decides every cut before a rope goes up.</p>
        <ul class="prn-expert-points" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Cuts that close.</strong> Every pruning cut lands just outside the branch collar &mdash; the tissue that seals the wound &mdash; so the tree compartmentalizes instead of rotting from the stub inward.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>One crew, canopy to curb.</strong> Climbing, rigging, chipping, and cleanup from the same tree-and-land-clearing company &mdash; no second contractor to schedule, no brush pile left at the street.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Honest scope.</strong> If your tree needs a light trim instead of corrective pruning &mdash; or removal instead of either &mdash; you'll hear it plainly at the free estimate, not after the invoice.</p>
          </li>
        </ul>
      </div>

      <div class="prn-stat" data-animate="right">
        <div class="prn-big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
        <div class="prn-big-label">Years Pruning DeLand Canopies</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: C3.1 diagonal (cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-white)" points="0,60 1200,8 1200,60"/>
  </svg>
</div>

<!-- ============ SIGNATURE: CUT-TYPE TIMELINE (C7.1) — 03 ============ -->
<section class="numbered-section prn-timeline-section" data-num="03" aria-label="Types of pruning cuts">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Four Cuts, One Plan</span>
      <h2>Which pruning cuts does God's Country make on DeLand trees?</h2>
      <p class="answer-block">Four, in a deliberate order: structural cuts that build one strong leader, deadwood removal that clears brittle gray limbs, crown thinning that lets hurricane wind pass through, and clearance cuts that back branches off roofs, pool enclosures, and service lines. Most DeLand pruning visits combine two or three.</p>
    </div>

    <div class="prn-timeline" data-p1-dynamic>
      <?php foreach ($pruningCuts as $i => $cut): ?>
      <div class="prn-timeline-item" data-animate="<?php echo $i % 2 === 0 ? 'left' : 'right'; ?>">
        <div class="prn-timeline-card">
          <span class="prn-timeline-step">Cut Type 0<?php echo $i + 1; ?></span>
          <h3><?php echo e($cut['name']); ?></h3>
          <p><?php echo e($cut['text']); ?></p>
        </div>
        <div class="prn-timeline-node"><i data-lucide="<?php echo e($cut['icon']); ?>"></i></div>
        <div class="prn-timeline-spacer" aria-hidden="true"></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: C3.3 double wave, inverted flow (white → light) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none">
    <path d="M0,40 C300,10 900,70 1200,30 L1200,100 L0,100 Z" fill="var(--color-light)" opacity="0.4"/>
    <path d="M0,60 C300,20 900,90 1200,50 L1200,100 L0,100 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ============ COST — 04 ============ -->
<section class="numbered-section prn-cost-section" data-num="04" aria-label="Tree pruning cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much do tree pruning services cost in DeLand, FL?</h2>
      <p class="answer-block">Pruning cost in DeLand depends on the tree's size, how much of the canopy needs work, and what sits underneath it &mdash; a young tree's structural pruning costs far less than thinning a mature live oak over a pool screen. Every job starts with a free written estimate within 24 hours.</p>
    </div>

    <div class="prn-cost-factors">
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="prn-cost-factor reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: C3.1 diagonal, opposite slope (light → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-light);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
    <polygon fill="var(--color-white)" points="0,8 1200,60 0,60"/>
  </svg>
</div>

<!-- ============ PROOF — 05 ============ -->
<section class="numbered-section prn-proof-section" data-num="05" aria-label="Recent tree pruning work">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Searching for tree pruning near me in DeLand?</h2>
      <p class="answer-block">If you're searching for tree pruning near me in DeLand, these photos show what nearby jobs look like: roped climbers working inside live oak canopies, choosing cuts limb by limb. We prune across Volusia County &mdash; DeLand, Deltona, Orange City, DeBary, and Lake Helen &mdash; with the same crew every time.</p>
    </div>

    <div class="prn-proof-gallery">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['rigging']['src']); ?>" alt="<?php echo e($bodyPhotos['rigging']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>Rigging set before a single limb is cut &mdash; DeLand, FL</figcaption>
      </figure>
      <figure class="prn-duotone reveal-delay-1" data-animate>
        <img src="<?php echo e($bodyPhotos['sectioning']['src']); ?>" alt="<?php echo e($bodyPhotos['sectioning']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>Working the upper canopy of a DeLand live oak</figcaption>
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
<section class="prn-compare-section" aria-label="Pruning versus trimming">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label" style="color: var(--color-accent);">Know What You're Buying</span>
      <h2>What's the difference between professional pruning and tree trimming?</h2>
      <p class="answer-block">Trimming maintains a tree's appearance and clearance on a schedule; pruning is corrective work aimed at structure and health &mdash; which limbs stay, which go, and where each cut lands. God's Country does both, and we'll tell you honestly at the estimate which one your tree actually needs.</p>
    </div>

    <div class="prn-compare-grid">
      <div class="prn-compare-col prn-compare-col--trim" data-animate>
        <h3>A cosmetic trim stops at</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="minus"></i> <?php echo e($row['them']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="prn-compare-col prn-compare-col--prune" data-animate="right">
        <h3>Arborist-guided pruning adds</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="check"></i> <?php echo e($row['us']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============ CADENCE — 07 ============ -->
<section class="numbered-section prn-cadence-section" data-num="07" aria-label="How often to prune">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">A Realistic Schedule</span>
      <h2>How often should DeLand trees be pruned?</h2>
      <p class="answer-block">Most mature DeLand oaks do well on a three-to-five-year pruning cycle, young shade trees benefit from structural pruning every two to three years, and any tree holding deadwood over a roof or driveway shouldn't wait for a schedule. We'll recommend an honest cadence at your free estimate.</p>
    </div>

    <div class="prn-cadence-grid">
      <?php foreach ($cadence as $i => $item): ?>
      <article class="prn-cadence-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="prn-cadence-icon"><i data-lucide="<?php echo e($item['icon']); ?>"></i></div>
        <h3><?php echo e($item['title']); ?></h3>
        <span class="prn-cadence-window"><?php echo e($item['window']); ?></span>
        <p><?php echo e($item['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FAQ — 08 ============ -->
<section class="numbered-section prn-faq-section" data-num="08" aria-label="Tree pruning questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask before a pruning visit?</h2>
      <p class="answer-block">Usually some version of the same seven questions: whether pruning can save a struggling tree, how much canopy can safely come off, timing around hurricane season, palms, topping, cleanup, and scheduling. Straight answers below &mdash; anything else goes in the estimate form and gets answered within 24 hours.</p>
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
      <span class="eyebrow-label">The Rest of the Canopy Work</span>
      <h2>What other tree services do DeLand property owners pair with tree pruning?</h2>
      <p class="answer-block">Pruning usually rides along with related canopy work: trimming to hold the shape between pruning cycles, a certified arborist assessment when a tree's health is in question, and crown reduction when a canopy has simply outgrown its spot. One God's Country crew handles all of it.</p>
    </div>

    <?php renderServiceCards(['tree-trimming-services', 'certified-arborist-services', 'crown-reduction-shaping'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="prn-closing-cta" aria-label="Get a tree pruning estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Put the Right Cuts on Your Trees Before Storm Season?</h2>
    <p class="answer-block">Tell us about the oak with two leaders, the limbs creeping over the pool enclosure, or the canopy nobody has touched in a decade. <?php echo e($siteName); ?> will walk the property, explain every recommended cut, and put an honest price in writing &mdash; usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Pruning Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
