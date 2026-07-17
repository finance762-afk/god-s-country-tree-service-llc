<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/tree-trimming-services/index.php — Tree Trimming
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Layout: C7.4 staggered rows, seasonal-calendar signature,
 * C3.2 wave + C3.5 parallelogram dividers, C11.1 framed images
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'tree-trimming-services';

// V2.1 trade-noun title (56 chars) + V2.2 CTR meta (156 chars)
$pageTitle       = "Tree Trimming in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Tree trimming in DeLand, FL from a licensed & insured tree service crew — seasonal schedules, all tree sizes, 12+ years local. Request a free estimate today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062742583-otgffb-45452609_2184264671794133_32420904231239680_n.webp'; // bucket up in a moss-draped live oak (square — cropped via CSS)
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'buckettruck' => [
        'src' => $imgBase . '1784062736583-06l0z2-36766518_2093778660842735_1092164506395607040_n.1.webp',
        'alt' => "God's Country bucket truck extended into an oak canopy in DeLand, FL",
    ],
    'climber' => [
        'src' => 'https://i.imgur.com/NSUVrpT.jpeg',
        'alt' => "God's Country climber trimming limbs inside a live oak canopy in DeLand, FL",
    ],
    'loader' => [
        'src' => $imgBase . '1784062765583-t90qfe-504464588_4046117555608826_3413761751549071197_n.webp',
        'alt' => "God's Country grapple loader beside a green oak at a DeLand, FL home",
    ],
];

// ---- Overdue-for-a-trim signs (problem statement) ----
$trimSigns = [
    ['icon' => 'home',       'title' => 'Limbs on the roof or screen',   'text' => 'Branches resting on shingles, gutters, or a pool screen enclosure scrub in every breeze — and hand squirrels a highway onto the house.'],
    ['icon' => 'cloud-rain', 'title' => 'Deadwood and heavy moss',       'text' => 'Interior dead limbs and thick Spanish moss are the pieces a summer thunderstorm shakes loose first, usually onto whatever is parked below.'],
    ['icon' => 'sun',        'title' => 'Browning palm crowns',          'text' => 'Dead fronds and seed pods hang on until wind takes them down. A palm dropping debris on the drive is asking for its yearly cleanup.'],
    ['icon' => 'eye-off',    'title' => 'Bare lawn and blocked views',   'text' => 'When a canopy shades the grass down to bare Central Florida sand and swallows the view of the street, it has outgrown its haircut schedule.'],
];

// ---- C7.4 staggered trimming types ----
$trimTypes = [
    [
        'num'     => '01',
        'title'   => 'Clearance trimming',
        'text'    => "Roofs, gutters, driveways, and pool screen enclosures are where an untrimmed oak does its damage first. Clearance trimming lifts and shortens the limbs over your structures — roped, cut in sections, and lowered, never dropped. Our bucket truck reaches canopies a ladder shouldn't, and we clear enough growth to keep shingles and screens out of reach for years, not one season.",
        'bullets' => ['Roof & gutter clearance', 'Pool enclosure protection', 'Driveway & walkway lift'],
        'photo'   => 'buckettruck',
        'w'       => 800, 'h' => 800,
    ],
    [
        'num'     => '02',
        'title'   => 'Canopy health trimming',
        'text'    => "Live oaks around DeLand carry heavy interior deadwood, crossing limbs, and enough Spanish moss to hide both. Health trimming opens the canopy so wind moves through it instead of pushing on it, removes the dead limbs that drop in summer storms, and leaves the strong structure standing. It's the single best pre-hurricane-season job a mature oak can get.",
        'bullets' => ['Interior deadwood removed', 'Less wind sail in storms', 'Stronger remaining structure'],
        'photo'   => 'climber',
        'w'       => 800, 'h' => 1000,
    ],
    [
        'num'     => '03',
        'title'   => 'Palm & appearance trimming',
        'text'    => "Palms, crape myrtles, and street-facing trees carry the curb appeal on DeLand lots, from the historic downtown blocks out to the Stetson University area. Appearance trimming removes browning fronds and seed pods, shapes a canopy without butchering it, and keeps sightlines open at the end of the drive. The yard reads cared-for from the street — because it is.",
        'bullets' => ['Fronds & seed pods removed', 'Natural shape preserved', 'Clear drive sightlines'],
        'photo'   => 'loader',
        'w'       => 800, 'h' => 1000,
    ],
];

// ---- Seasonal calendar (signature section) ----
$trimSeasons = [
    ['months' => 'Dec – Feb', 'icon' => 'snowflake',   'title' => 'Prime trimming window', 'badge' => 'Best window', 'text' => 'Dry season and semi-dormant oaks make this the best stretch for heavy structural trimming. Wounds close fast, disease pressure is low, and the crew can read the branch structure clearly.'],
    ['months' => 'Mar – May', 'icon' => 'wind',        'title' => 'Storm-prep clearance',  'badge' => '',            'text' => 'The countdown to June 1. Clearance trims over roofs and pool enclosures, thinning to cut wind sail, and palm cleanups all belong on the calendar before hurricane season opens.'],
    ['months' => 'Jun – Sep', 'icon' => 'cloud-lightning', 'title' => 'Hurricane season watch', 'badge' => '',       'text' => "Lighter maintenance when the weather allows — fronds, small deadwood, and post-storm damage checks. Heavy canopy work waits for the cool season unless a hazard can't."],
    ['months' => 'Oct – Nov', 'icon' => 'leaf',        'title' => 'Recovery & reset',      'badge' => '',            'text' => 'Storm-season stragglers come off: cracked limbs, hangers, and wind-torn tops. Then the yard gets assessed and booked for the winter trimming window ahead.'],
];

// ---- Cost factors ----
$costFactors = [
    ['title' => 'Size & how many',      'text' => 'One queen palm is a quick visit; six mature live oaks are a day with the bucket truck. Height, spread, and the length of the list drive most of the price.'],
    ['title' => 'How much comes out',   'text' => 'A light clearance lift costs less than a full deadwood-and-thinning pass through a moss-loaded canopy. The estimate states exactly what comes off each tree.'],
    ['title' => 'Access & targets',     'text' => 'Trimming over a roof, fence, or pool screen means roping and lowering every piece. Open-lawn trees go faster — and the written quote reflects the difference honestly.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'How often should trees be trimmed in DeLand?',
        'a' => "Most DeLand hardwoods do well on a two-to-three-year trimming cycle, while palms and fast growers usually want yearly attention. Anything hanging over a roof, driveway, or pool enclosure deserves an annual look regardless of species. If you're not sure, we'll tell you honestly at the free estimate — some trees we look at simply don't need work yet.",
    ],
    [
        'q' => 'Can you trim limbs hanging over my roof or pool enclosure?',
        'a' => "Yes — roofline and pool-screen clearance is some of the most common trimming we do in DeLand. Limbs are roped and lowered in sections so nothing free-falls onto shingles or screen. We typically clear branches well off the structure so you get years of relief from the scraping and debris, not one season's worth.",
    ],
    [
        'q' => 'Do you trim palms too, or just oaks and pines?',
        'a' => "Both. Palms get browning fronds, seed pods, and boots removed without over-skinning the crown — hurricane-cutting a palm actually weakens it. Oaks and slash pines get clearance and deadwood trims sized to the tree. One crew and one written estimate covers every species in the yard, which is how most customers book us.",
    ],
    [
        'q' => 'Will trimming hurt or stress my tree?',
        'a' => "Not when it's done right. We cut at the branch collar so wounds close naturally, and we avoid stripping interior growth or over-thinning — the mistakes that leave a tree weak and storm-prone. Taking out deadwood and crossing limbs actually reduces stress on the tree, especially heading into a Central Florida summer.",
    ],
    [
        'q' => 'Do you haul away all the branches and debris?',
        'a' => "Yes. Brush goes through our chipper and leaves on our trucks the same day, and we rake the lawn before we go. Cleanup and hauling are written into the estimate up front, so the price you approve includes the yard being left clean — not a brush pile sitting at the curb.",
    ],
    [
        'q' => 'Can you trim branches near power lines?',
        'a' => "We trim around the service drop that runs from the pole to your house, with proper rigging and clearance. Trees in the primary utility lines along the street are the power company's responsibility — if that's your situation, we'll say so at the estimate and handle everything on your side of the pole.",
    ],
    [
        'q' => 'Is it too late to trim once hurricane season starts?',
        'a' => "No — a June or July trim still takes weight and wind sail out of a canopy before the busiest storm months of August and September. The ideal time is earlier in the year, but the second-best time is before the next named storm. We keep estimate turnaround at 24 hours through the season for exactly that reason.",
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
        ['name' => 'Home',                   'url' => '/'],
        ['name' => 'Services',               'url' => '/services/'],
        ['name' => 'Tree Trimming Services'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Trimming — page-specific styles (.trm- prefix)
   Techniques: C1.4 page hero (photo + gradient + noise),
   C7.4 staggered alternating rows, seasonal-calendar signature
   (C7 variant), C3.2 curved wave + C3.5 stacked-parallelogram
   dividers, C11.1 framed images w/ offset shadow, C5.1 numbered
   watermarks, C9.2 radial-glow closing CTA.
   All values from tokens / color-mix — no hardcoded colors.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.trm-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 30%;
  overflow: hidden;
}
.trm-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 68%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 88%, transparent) 100%
  );
}
.trm-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.trm-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.trm-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.trm-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.trm-breadcrumb a:hover { color: var(--color-accent); }
.trm-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.trm-hero .hero-eyebrow {
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
.trm-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.trm-hero h1 .text-accent { color: var(--color-accent); }
.trm-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.trm-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.trm-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.trm-hero .hero-trust-item svg,
.trm-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- C5.1 numbered section watermarks (shared idiom) ---- */
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
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- Problem statement: oversized lead + signs grid ---- */
.trm-lead {
  max-width: 880px;
  margin: 0 auto var(--space-12);
  padding-left: var(--space-8);
  border-left: 4px solid var(--color-accent);
  font-family: var(--font-accent);
  font-size: clamp(1.35rem, 2.6vw, 2rem);
  font-weight: 600;
  line-height: 1.35;
  letter-spacing: -0.01em;
  color: var(--color-text);
  text-wrap: balance;
}
.trm-lead strong { color: var(--color-primary); }
.trm-signs {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.trm-sign {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.trm-sign:nth-child(4n+1) { background: var(--color-card-tint-1); }
.trm-sign:nth-child(4n+2) { background: var(--color-card-tint-3); }
.trm-sign:nth-child(4n+3) { background: var(--color-card-tint-2); }
.trm-sign:nth-child(4n)   { background: var(--color-card-tint-1); }
.trm-sign:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.trm-sign-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.trm-sign-icon svg, .trm-sign-icon i { width: 24px; height: 24px; }
.trm-sign h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.trm-sign p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- DIY vs professional: asymmetric split + big stat ---- */
.trm-diy-section { background: var(--color-cream); }
.trm-diy-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.trm-diy-lede {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  margin-bottom: var(--space-6);
}
.trm-diy-lede strong { color: var(--color-primary); }
.trm-points {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.trm-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.trm-points li svg, .trm-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.trm-points li strong { color: var(--color-primary); }
.trm-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.trm-stat {
  text-align: center;
  padding: var(--space-10) var(--space-8);
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.trm-stat::before {
  content: '';
  position: absolute;
  inset: calc(-1 * var(--space-3)) var(--space-3) var(--space-3) calc(-1 * var(--space-3));
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.trm-stat .big-number {
  font-family: var(--font-accent);
  font-size: clamp(4rem, 8vw, 6.5rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.trm-stat .big-number span { color: var(--color-accent); }
.trm-stat .big-label {
  font-family: var(--font-accent);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-2);
}

/* ---- C7.4 staggered alternating rows (trimming types) ---- */
.trm-stagger-section { background: var(--color-white); }
.trm-stagger { display: flex; flex-direction: column; gap: clamp(3rem, 7vw, 5.5rem); }
.trm-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: center;
}
.trm-row:nth-child(even) .trm-row-image { order: 2; }
.trm-row:nth-child(even) .trm-row-text  { order: 1; }
.trm-row-num {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-sm);
  font-weight: 800;
  letter-spacing: 2px;
  color: var(--color-accent);
  border-bottom: 2px solid var(--color-accent);
  padding-bottom: var(--space-1);
  margin-bottom: var(--space-3);
}
.trm-row h3 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.trm-row p { color: var(--color-text); margin-bottom: var(--space-4); }
.trm-row-bullets {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}
.trm-row-bullets li {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary-dark);
}
.trm-row-bullets li svg, .trm-row-bullets li i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ---- C11.1 framed image with offset accent shadow ---- */
.trm-framed {
  position: relative;
  margin: 0;
  padding: 0 var(--space-4) var(--space-4) 0;
}
.trm-framed::before {
  content: '';
  position: absolute;
  inset: var(--space-4) 0 0 var(--space-4);
  background: color-mix(in srgb, var(--color-accent) 80%, var(--color-white));
  border-radius: var(--radius-lg);
  z-index: 0;
}
.trm-row:nth-child(even) .trm-framed { padding: 0 0 var(--space-4) var(--space-4); }
.trm-row:nth-child(even) .trm-framed::before { inset: var(--space-4) var(--space-4) 0 0; }
.trm-framed img {
  position: relative;
  z-index: 1;
  width: 100%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3.4;
  object-fit: cover;
}
.trm-framed figcaption {
  position: relative;
  z-index: 1;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-3);
}

/* ---- Signature: seasonal trimming calendar (dark strip) ---- */
.trm-calendar-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.trm-calendar-section::before {
  content: '';
  position: absolute;
  top: -35%;
  left: -10%;
  width: 65%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 38%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.trm-calendar-section .container { position: relative; z-index: 1; }
.trm-calendar-section .section-title h2 { color: var(--color-white); }
.trm-calendar-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.trm-calendar-section .eyebrow-label { color: var(--color-accent); }
.trm-calendar {
  position: relative;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.trm-calendar::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-5));
  left: var(--space-4);
  right: var(--space-4);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), color-mix(in srgb, var(--color-accent) 15%, transparent));
}
.trm-quarter {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 11%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.trm-quarter:hover {
  transform: translateY(-5px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.trm-quarter--best {
  background: color-mix(in srgb, var(--color-primary) 34%, transparent);
  border-color: color-mix(in srgb, var(--color-accent) 50%, transparent);
  box-shadow: var(--shadow-xl);
}
.trm-quarter-months {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.trm-quarter-months svg, .trm-quarter-months i { width: 16px; height: 16px; }
.trm-quarter h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.trm-quarter p {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  font-size: var(--font-size-sm);
  margin: 0;
}
.trm-quarter-badge {
  position: absolute;
  top: calc(-1 * var(--space-3));
  right: var(--space-4);
  background: var(--color-accent);
  color: var(--color-dark);
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  box-shadow: var(--shadow-md);
}

/* ---- Cost factors ---- */
.trm-cost-section { background: var(--color-cream); }
.trm-cost-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.trm-cost-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.trm-cost-card:nth-child(even) { border-top-color: var(--color-accent); }
.trm-cost-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.trm-cost-card h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.trm-cost-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof: framed hero photo + area chips + badges ---- */
.trm-proof-section { background: var(--color-white); }
.trm-proof-layout {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: center;
  margin-bottom: var(--space-10);
}
.trm-proof-layout .trm-framed img { aspect-ratio: 1 / 1; }
.trm-area-chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-5);
}
.trm-area-chip {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-light);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-5);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-text);
}
.trm-area-chip svg, .trm-area-chip i { width: 14px; height: 14px; color: var(--color-primary); }
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

/* ---- FAQ + related backgrounds ---- */
.trm-faq-section { background: var(--color-light); }
.trm-related-section { background: var(--color-white); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.trm-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.trm-closing-cta::before {
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
.trm-closing-cta .container { position: relative; z-index: 1; }
.trm-closing-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.trm-closing-cta .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.trm-closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 shapes: C3.2 curved wave + C3.5 parallelograms) ---- */
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
.svg-divider--on-cream { background: var(--color-cream); }
.svg-divider--on-dark { background: var(--color-dark); }

/* ---- Reveal stagger delays (shared idiom) ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .trm-diy-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .trm-stat { max-width: 420px; margin: 0 auto; }
  .trm-calendar { grid-template-columns: repeat(2, 1fr); }
  .trm-calendar::before { display: none; }
  .trm-proof-layout { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .trm-hero { min-height: auto; }
  .trm-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .trm-signs { grid-template-columns: 1fr; }
  .trm-row { grid-template-columns: 1fr; gap: var(--space-8); }
  .trm-row:nth-child(even) .trm-row-image { order: 0; }
  .trm-row:nth-child(even) .trm-row-text  { order: 1; }
  .trm-cost-grid { grid-template-columns: 1fr; }
  .trm-lead { padding-left: var(--space-5); }
}
@media (max-width: 600px) {
  .trm-calendar { grid-template-columns: 1fr; }
  .trm-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .trm-sign { flex-direction: column; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="trm-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree trimming in DeLand, Florida">
  <div class="container">
    <nav class="trm-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Tree Trimming Services</span>
    </nav>

    <span class="hero-eyebrow">Tree Trimming &middot; DeLand, FL</span>

    <h1>Tree Trimming Services in DeLand, FL &mdash; <span class="text-accent">Year-Round Care from a Local Tree Service Crew</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving homeowners and businesses across Volusia County since <?php echo e($yearEstablished); ?>. We trim live oaks, slash pines, and palms of every size on seasonal or one-time schedules &mdash; free written estimates within 24 hours, cleanup and hauling included.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Trimming Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><?php echo icon('scissors'); ?> All Tree Sizes</span>
      <span class="hero-trust-item"><?php echo icon('clock'); ?> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PROBLEM STATEMENT — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Signs your trees need trimming">
  <div class="container">
    <p class="trm-lead" data-animate>A DeLand canopy never stops growing &mdash; oaks put on reach, palms drop fronds, and every unmanaged season adds <strong>weight the next storm gets to play with</strong>.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Read Your Canopy</span>
      <h2>How do you know your DeLand trees are overdue for a trim?</h2>
      <p class="answer-block">An overdue tree tells on itself: limbs resting on the roof or pool screen enclosure, deadwood and Spanish moss thickening inside the canopy, palm fronds browning at the crown, or a lawn shaded down to bare Central Florida sand. One sign means a trim will help &mdash; several mean book it before hurricane season.</p>
    </div>

    <div class="trm-signs" data-p1-dynamic>
      <?php foreach ($trimSigns as $i => $sign): ?>
      <article class="trm-sign reveal-delay-<?php echo ($i % 4) + 1; ?>" data-animate>
        <div class="trm-sign-icon"><?php echo icon(($sign['icon'])); ?></div>
        <div>
          <h3><?php echo e($sign['title']); ?></h3>
          <p><?php echo e($sign['text']); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (white → cream) — C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ DIY vs PROFESSIONAL — 02 ============ -->
<section class="numbered-section trm-diy-section" data-num="02" aria-label="Professional versus DIY tree trimming">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label">More Than a Chainsaw</span>
      <h2>What makes professional tree trimming different from DIY cutting?</h2>
      <p class="answer-block">Professional tree trimming means cuts at the branch collar that close cleanly, a balanced canopy instead of stripped interior limbs, and roped work from a bucket truck rather than a ladder. DIY cutting saves a fee today and usually costs a weakened, storm-prone tree &mdash; or an ER visit &mdash; later.</p>
    </div>

    <div class="trm-diy-split">
      <div>
        <p class="trm-diy-lede" data-animate>Anyone can shorten a branch. What <?php echo e($yearsInBusiness); ?> years of trimming DeLand trees buys you is knowing <strong>which branch, where to cut it, and what the tree will do about it next season</strong>. Topped oaks, lion-tailed limbs, and hurricane-cut palms all grow back weaker &mdash; and cost more to fix than trimming right the first time.</p>
        <ul class="trm-points" data-p1-dynamic>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Collar cuts that heal.</strong> Every limb comes off at the branch collar so the wound closes naturally &mdash; no stubs, no flush cuts, no rot pockets for Florida humidity to work on.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Balanced thinning, never stripping.</strong> We take the deadwood and problem limbs while keeping the interior growth a canopy needs to stay strong in wind.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Rope, saddle, and bucket truck.</strong> Trimming from proper rigging instead of a leaning ladder is why the crew goes home healthy and your fence stays in one piece.</p>
          </li>
        </ul>
      </div>

      <div class="trm-stat" data-animate="right">
        <div class="big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
        <div class="big-label">Years Trimming DeLand Canopies</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (cream → white) — C3.5 -->
<div class="svg-divider svg-divider--flush svg-divider--on-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-white)" opacity="0.3" points="0,20 1200,40 1200,80 0,80"/><polygon fill="var(--color-white)" points="0,40 1200,20 1200,80 0,80"/></svg>
</div>

<!-- ============ TRIMMING TYPES — 03 (C7.4 staggered rows) ============ -->
<section class="numbered-section trm-stagger-section" data-num="03" aria-label="Types of tree trimming">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Work Itself</span>
      <h2>Which kinds of tree trimming do DeLand yards actually need?</h2>
      <p class="answer-block">Three kinds of trimming cover most DeLand yards: clearance trimming that lifts limbs off roofs, driveways, and pool screen enclosures; canopy health trimming that clears deadwood and thins storm sail; and appearance trimming that keeps palms and street-facing trees sharp. God's Country Tree Service handles all three with one crew and one written estimate.</p>
    </div>

    <div class="trm-stagger" data-p1-dynamic>
      <?php foreach ($trimTypes as $type): ?>
      <div class="trm-row">
        <figure class="trm-framed trm-row-image" data-animate>
          <img src="<?php echo e($bodyPhotos[$type['photo']]['src']); ?>" alt="<?php echo e($bodyPhotos[$type['photo']]['alt']); ?>" width="<?php echo e($type['w']); ?>" height="<?php echo e($type['h']); ?>" loading="lazy">
        </figure>
        <div class="trm-row-text" data-animate>
          <span class="trm-row-num"><?php echo e($type['num']); ?></span>
          <h3><?php echo e($type['title']); ?></h3>
          <p><?php echo e($type['text']); ?></p>
          <ul class="trm-row-bullets">
            <?php foreach ($type['bullets'] as $bullet): ?>
            <li><?php echo icon('check'); ?> <?php echo e($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (white → dark) — C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,0 900,80 1200,40 L1200,80 L0,80 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ SEASONAL CALENDAR — 04 (signature) ============ -->
<section class="trm-calendar-section" aria-label="Seasonal tree trimming calendar for Central Florida">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Trimming Year</span>
      <h2>When is the best season for tree trimming in Central Florida?</h2>
      <p class="answer-block">The best window for heavy trimming in Central Florida is the dry season &mdash; roughly December through February &mdash; when oaks are semi-dormant and disease pressure is low. Storm-prep clearance and palm work should be finished before hurricane season opens June 1. Light maintenance trimming is safe in DeLand any month of the year.</p>
    </div>

    <div class="trm-calendar" data-p1-dynamic>
      <?php foreach ($trimSeasons as $i => $season): ?>
      <article class="trm-quarter<?php echo $i === 0 ? ' trm-quarter--best' : ''; ?> reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <?php if (!empty($season['badge'])): ?>
        <span class="trm-quarter-badge"><?php echo e($season['badge']); ?></span>
        <?php endif; ?>
        <span class="trm-quarter-months"><?php echo icon(($season['icon'])); ?> <?php echo e($season['months']); ?></span>
        <h3><?php echo e($season['title']); ?></h3>
        <p><?php echo e($season['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (dark → cream) — C3.5 -->
<div class="svg-divider svg-divider--flush svg-divider--on-dark" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-cream)" opacity="0.3" points="0,40 1200,20 1200,80 0,80"/><polygon fill="var(--color-cream)" points="0,20 1200,40 1200,80 0,80"/></svg>
</div>

<!-- ============ COST — 05 ============ -->
<section class="numbered-section trm-cost-section" data-num="05" aria-label="Tree trimming cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does tree trimming cost in DeLand, FL?</h2>
      <p class="answer-block">Tree trimming cost in DeLand depends on the tree's size, how much canopy comes out, and how many trees are on the list &mdash; one palm is a far smaller job than a yard of mature live oaks. You get a free written estimate within 24 hours, with chipping, cleanup, and hauling spelled out.</p>
    </div>

    <div class="trm-cost-grid" data-p1-dynamic>
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="trm-cost-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ PROOF / NEAR ME — 06 ============ -->
<section class="numbered-section trm-proof-section" data-num="06" aria-label="Local tree trimming proof">
  <div class="container">
    <div class="trm-proof-layout">
      <figure class="trm-framed" data-animate>
        <img src="<?php echo e($heroImage); ?>" alt="Bucket crew trimming a moss-draped live oak in DeLand, FL" width="800" height="800" loading="lazy">
        <figcaption>Our bucket crew working a moss-draped live oak &mdash; DeLand, FL</figcaption>
      </figure>
      <div data-animate="right">
        <span class="eyebrow-label">Local Proof</span>
        <h2>Searching for tree trimming near me in DeLand?</h2>
        <p class="answer-block">If you're searching for tree trimming near me in DeLand, the crew in this photo is the one that shows up. God's Country Tree Service works from DeLand across roughly 50 miles of Volusia County &mdash; Deltona, Orange City, DeBary, and Lake Helen included &mdash; with the same bucket truck, climbers, and 24-hour estimates.</p>
        <div class="trm-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'Deltona', 'Orange City', 'DeBary', 'Lake Helen', 'Volusia County'] as $area): ?>
          <span class="trm-area-chip"><?php echo icon('map-pin'); ?> <?php echo e($area); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="review-badge-strip" data-animate>
      <a class="review-badge" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('star'); ?> Read Our Google Reviews
      </a>
      <a class="review-badge" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('badge-check'); ?> BBB Business Profile
      </a>
    </div>
  </div>
</section>

<!-- ============ FAQ — 07 ============ -->
<section class="numbered-section trm-faq-section" data-num="07" aria-label="Tree trimming questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask before booking tree trimming?</h2>
      <p class="answer-block">The same handful of questions, almost every visit: how often, how much comes off, palms versus oaks, debris, power lines, and timing around hurricane season. Straight answers are below &mdash; and anything we missed goes in the estimate form and gets answered within 24 hours.</p>
    </div>

    <div class="faq-grid" data-p1-dynamic>
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-icon"><?php echo icon('help-circle'); ?></div>
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
<section class="trm-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Beyond the Trim</span>
      <h2>What other tree services do DeLand property owners pair with tree trimming?</h2>
      <p class="answer-block">Trimming keeps a healthy canopy in shape; three services pick up where it stops. Structural pruning corrects a tree's long-term form, crown reduction takes real weight off storm-loaded oaks, and a maintenance plan puts the whole DeLand yard on a schedule &mdash; all quoted by the same God's Country crew.</p>
    </div>

    <?php renderServiceCards(['tree-pruning-services', 'crown-reduction-shaping', 'tree-maintenance-care'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="trm-closing-cta" aria-label="Get a tree trimming estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Get Your Trees Trimmed Before the Next Storm Season Tests Them?</h2>
    <p class="answer-block">Tell us which trees have gotten ahead of you &mdash; the oak over the roof, the palms at the driveway, the whole shaded-out backyard. <?php echo e($siteName); ?> will walk the property, recommend only the trimming it actually needs, and put the price in writing within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Trimming Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
