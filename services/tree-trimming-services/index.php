<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/tree-trimming-services/index.php — Tree Trimming & Pruning
 * God's Country Tree Service LLC — DeLand, FL
 * 2026-10-13 SEO fixes: this page absorbed /services/tree-trimming-services/,
 * /services/tree-trimming-services/ and /services/tree-trimming-services/
 * (all three 301 here). One page now owns trimming, structural pruning,
 * crown reduction and recurring maintenance plans.
 * Layout: C7.4 staggered rows, pruning-cut timeline, reduction-vs-topping
 * comparison, plan-vs-emergency cards, seasonal-calendar signature,
 * C3.2 wave + C3.5 parallelogram dividers, C11.1 framed images
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'tree-trimming-services';

// V2.1 trade-noun title (57 chars) + V2.2 CTR meta (159 chars)
$pageTitle       = "Tree Trimming & Pruning DeLand FL | {$gbpRating}★ | Free Estimates";
$pageDescription = "Tree trimming, pruning, crown reduction & maintenance plans in DeLand, FL. Rated {$gbpRating}★ from {$gbpReviewCount} Google reviews. Free written estimate in 24 hours: (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = '/assets/images/'; // v6.3 2026-09-04: photos localized (were hotlinked Supabase-storage originals)

$heroImage        = $imgBase . '1784062742583-otgffb-45452609_2184264671794133_32420904231239680_n.webp'; // bucket up in a moss-draped live oak (square — cropped via CSS)
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$bodyPhotos = [
    'buckettruck' => [
        'src' => '/assets/images/nsuvrpt-960.webp', // v8: the file this slot named was never on disk
        'alt' => "God's Country bucket truck parked curbside with its boom raised into an oak canopy in DeLand, FL",
    ],
    'climber' => [
        'src' => $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp',
        'alt' => "Arborist roped into an oak canopy making trimming cuts",
    ],
    'loader' => [
        'src' => $imgBase . '1784062765583-t90qfe-504464588_4046117555608826_3413761751549071197_n.webp',
        'alt' => "God's Country grapple loader beside a green oak at a DeLand, FL home",
    ],
    'sectioning' => [
        'src' => $imgBase . '1784062730346-5nqz2k-31180126_2042462089307726_2780749710774763520_n.webp',
        'alt' => 'Roped climber sectioning limbs high in a live oak canopy in DeLand, FL',
    ],
    'shaped-oak' => [
        'src' => $imgBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp',
        'alt' => 'Cleanly shaped mature oak against blue sky at a DeLand, FL home after crown reduction',
    ],
    'vase-canopy' => [
        'src' => $imgBase . '1784062751583-ixwxr0-57210655_2285599351660664_7235797249714814976_n.webp',
        'alt' => 'Cleanly lifted, vase-shaped tree canopy over a DeLand, FL street',
    ],
    'backyard' => [
        'src' => $imgBase . '1784062748583-jkbp6v-56461057_2279726332247966_3162728189227171840_n.webp',
        'alt' => 'Clean oak-framed backyard after a maintenance visit at a DeLand, FL home',
    ],
];

// ---- Overdue-for-a-trim signs (problem statement) ----
$trimSigns = [
    ['icon' => 'home',       'title' => 'Limbs on the roof or screen',       'text' => 'Branches resting on shingles, gutters, or a pool screen enclosure scrub in every breeze, and hand squirrels a highway onto the house.'],
    ['icon' => 'cloud-rain', 'title' => 'Deadwood and heavy moss',           'text' => 'Interior dead limbs and thick Spanish moss are the pieces a summer thunderstorm shakes loose first, usually onto whatever is parked below.'],
    ['icon' => 'git-branch', 'title' => 'Two trunks fighting for the lead',  'text' => 'Codominant stems with bark pinched in the union are the classic live oak failure point. Structural pruning picks a winner while the cut is still small.'],
    ['icon' => 'eye-off',    'title' => 'Bare lawn and blocked views',       'text' => 'When a canopy shades the grass down to bare Central Florida sand and swallows the view of the street, it has outgrown its haircut schedule.'],
];

// ---- Three jobs, one page: definitions ----
$definitions = [
    ['icon' => 'scissors',       'title' => 'Trimming',        'tag' => 'Clearance and routine work', 'text' => 'Scheduled cuts that keep limbs off the roof, the pool screen and the driveway, take out deadwood and keep the yard looking kept. The work most DeLand homes book every two to three years.'],
    ['icon' => 'git-branch',     'title' => 'Pruning',         'tag' => 'Structure and health',       'text' => 'Corrective cuts aimed at the long-term form of the tree: which leader stays, which crossing limb goes, where each cut lands so the wound closes. Young shade trees and codominant oaks need it most.'],
    ['icon' => 'tree-deciduous', 'title' => 'Crown reduction', 'tag' => 'Size and storm weight',      'text' => 'Shortening a canopy that has outgrown its spot by cutting each limb back to a healthy lateral, never topping. The storm-season answer for a heavy oak over two rooflines.'],
];

// ---- C7.4 staggered trimming types ----
$trimTypes = [
    [
        'num'     => '01',
        'title'   => 'Clearance trimming',
        'text'    => "Roofs, gutters, driveways, and pool screen enclosures are where an untrimmed oak does its damage first. Clearance trimming lifts and shortens the limbs over your structures, roped, cut in sections, and lowered, never dropped, with enough growth cleared to keep shingles and screens out of reach for years, not one season.",
        'bullets' => ['Roof & gutter clearance', 'Pool enclosure protection', 'Driveway & walkway lift'],
        'photo'   => 'buckettruck',
        'w'       => 800, 'h' => 800,
    ],
    [
        'num'     => '02',
        'title'   => 'Canopy health trimming',
        'text'    => "Live oaks around DeLand carry heavy interior deadwood, crossing limbs, and enough Spanish moss to hide both. Health trimming opens the canopy so wind moves through it, removes the dead limbs that drop in summer storms, and leaves the strong structure standing.",
        'bullets' => ['Interior deadwood removed', 'Less wind sail in storms', 'Stronger remaining structure'],
        'photo'   => 'climber',
        'w'       => 800, 'h' => 1000,
    ],
    [
        'num'     => '03',
        'title'   => 'Appearance and street-facing trimming',
        'text'    => "Crape myrtles, magnolias, and the street-facing trees carry the curb appeal on DeLand lots, from the historic downtown blocks out to the Stetson University area. Appearance trimming shapes a canopy without butchering it and keeps sightlines open at the end of the drive. Palms are their own job with their own rules, so they have their own page.",
        'bullets' => ['Natural shape preserved', 'Clear drive sightlines', 'Palms quoted on the same visit'],
        'photo'   => 'loader',
        'w'       => 800, 'h' => 1000,
    ],
];

// ---- The four pruning cut types (timeline) ----
$pruningCuts = [
    ['icon' => 'git-branch', 'name' => 'Structural pruning',  'text' => 'On young and maturing trees we select one dominant leader, remove competing stems, and space the scaffold limbs that carry the canopy for decades. A live oak structurally pruned early almost never needs emergency work later.'],
    ['icon' => 'circle-off', 'name' => 'Deadwood removal',    'text' => 'Gray, brittle limbs are the first thing hurricane wind takes. We strip deadwood back to live tissue at the branch collar, starting with anything over a roof, driveway, or pool screen enclosure.'],
    ['icon' => 'wind',       'name' => 'Crown thinning',      'text' => 'Selective interior cuts that let wind pass through the canopy instead of shoving against it: crossing, rubbing, and redundant limbs go, the structure stays. Over-thinned trees sprout back worse, so every cut is deliberate.'],
    ['icon' => 'ruler',      'name' => 'Clearance pruning',   'text' => 'Limbs backed off the roofline, screen enclosure, driveway, and service drops. Made at the right laterals, clearance cuts hold their distance for years instead of months.'],
];

// ---- Centerpiece comparison: crown reduction vs topping ----
$vsTopping = [
    'Cuts straight through the middle of limbs at whatever height the saw reaches',
    'Leaves stubs that cannot seal, so decay travels down into the trunk',
    'Triggers watersprouts: fast, weakly attached regrowth that is more dangerous in wind within a few years',
    'Strips away the leaves a stressed oak needs to feed itself',
    'Ruins the natural shape for good; the canopy never recovers its form',
];
$vsReduction = [
    'Shortens each limb back to a healthy lateral branch that takes over the growing',
    'Places every cut where the tree can seal and compartmentalize the wound',
    'Keeps the natural silhouette: smaller and balanced, still recognizably your oak',
    'Reduces sail area and limb leverage before hurricane season arrives',
    'Leaves enough live canopy for the tree to keep feeding itself and stay healthy',
];

// ---- Maintenance plans: planned care vs the emergency call ----
$planPoints = [
    'You pick the date: a calm weekday, not the night a storm makes landfall',
    'Small preventative cuts on a healthy tree, priced in writing up front',
    'Problems caught at the "watch it" stage, while fixing them is still cheap',
    'The tree stays, shading the yard instead of leaving a stump in it',
];
$emergencyPoints = [
    'The weather sets the schedule, usually at 2 a.m. in the rain',
    'Emergency work, plus whatever the roof, fence, or pool screen repair costs',
    'Insurance paperwork instead of a maintenance invoice',
    'The tree is gone entirely, and decades of shade go with it',
];

// ---- What a plan visit covers ----
$planVisit = [
    ['icon' => 'search',         'title' => 'Walk-through inspection',       'text' => 'Every tree gets looked at from root flare to crown: lean, deadwood, fungus, cavities, weak unions, and limbs creeping toward the roof or pool screen.'],
    ['icon' => 'scissors',       'title' => 'Preventative cuts',             'text' => 'Dead and structurally weak wood comes out while the cuts are still small and cheap, and clearance is held over roofs, screens and drives.'],
    ['icon' => 'clipboard-list', 'title' => 'Watch list & written estimate', 'text' => 'Before the crew leaves you hear what was done, what we are watching, and when that tree should be looked at again. Follow-up work goes on a written estimate you approve first.'],
];

// ---- Cadence (how often) ----
$cadence = [
    ['icon' => 'sprout',         'title' => 'Young shade trees',        'window' => 'Every 2–3 years',  'text' => 'Structural pruning while limbs are still small means small wounds, fast closure, and a tree that never grows its worst habits in the first place.'],
    ['icon' => 'tree-deciduous', 'title' => 'Mature oaks',              'window' => 'Every 3–5 years',  'text' => 'Established live oaks and laurel oaks mostly need maintenance: deadwood out, light thinning, clearance held. A steady cycle keeps each visit small.'],
    ['icon' => 'cloud-rain',     'title' => 'Ahead of hurricane season', 'window' => 'Walk-through yearly', 'text' => 'A spring look at what winter left behind. Deadwood over a roof or driveway comes out now, not on the calendar.'],
];

// ---- Seasonal calendar (signature section) ----
$trimSeasons = [
    ['months' => 'Dec – Feb', 'icon' => 'snowflake',       'title' => 'Prime trimming window', 'badge' => 'Best window', 'text' => 'Dry season and semi-dormant oaks make this the best stretch for heavy structural pruning and crown reduction. Wounds close fast, disease pressure is low, and the crew can read the branch structure clearly.'],
    ['months' => 'Mar – May', 'icon' => 'wind',            'title' => 'Storm-prep clearance',  'badge' => '',            'text' => 'The countdown to June 1. Clearance trims over roofs and pool enclosures, thinning to cut wind sail, and weight reduction on heavy oaks all belong on the calendar before hurricane season opens.'],
    ['months' => 'Jun – Sep', 'icon' => 'cloud-lightning', 'title' => 'Hurricane season watch', 'badge' => '',           'text' => "Lighter maintenance when the weather allows: small deadwood and post-storm damage checks. Heavy canopy work waits for the cool season unless a hazard can't."],
    ['months' => 'Oct – Nov', 'icon' => 'leaf',            'title' => 'Recovery & reset',      'badge' => '',            'text' => 'Storm-season stragglers come off: cracked limbs, hangers, and wind-torn tops. Then the yard gets assessed and booked for the winter pruning window ahead.'],
];

// ---- Cost factors ----
$costFactors = [
    ['title' => 'Size & how many',      'text' => 'One crape myrtle is a small job; six mature live oaks worked from the bucket truck are a much bigger one. Height, spread, and the length of the list drive most of the price.'],
    ['title' => 'How much comes out',   'text' => 'A light clearance lift costs less than a full structural prune or a crown reduction through a moss-loaded canopy. The estimate states exactly what comes off each tree, cut type by cut type, so you can phase the work.'],
    ['title' => 'Access & targets',     'text' => 'Trimming over a roof, fence, or pool screen means roping and lowering every piece. Open-lawn trees go faster, and the written quote reflects the difference honestly.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'How often should trees be trimmed in DeLand?',
        'a' => "Most DeLand hardwoods do well on a two-to-three-year trimming cycle, while fast growers usually want yearly attention. Anything hanging over a roof, driveway, or pool enclosure deserves an annual look regardless of species. If you're not sure, we'll tell you at the estimate visit. Some trees we look at simply don't need work yet.",
    ],
    [
        'q' => 'Will trimming or pruning hurt my tree?',
        'a' => "Not when it's done right. We cut at the branch collar so wounds close naturally, and we avoid stripping interior growth or over-thinning, the mistakes that leave a tree weak and storm-prone. Taking out deadwood and crossing limbs actually reduces stress on the tree, especially heading into a Central Florida summer.",
    ],
    [
        'q' => 'Can pruning save a tree I was told needs to come down?',
        'a' => "Pruning can sometimes save a tree that looks like a removal. Storm damage, deadwood, and an overloaded canopy often look worse than they are, and targeted pruning or crown reduction can keep a structurally sound tree standing. Decay at the base or a failing root plate is a different story. We assess the tree at the estimate visit. If pruning will genuinely fix it, pruning is what we quote.",
    ],
    [
        'q' => 'Will you top my tree to make it shorter?',
        'a' => "No. Topping is the one cut we won't make. Slicing through the middle of limbs leaves wounds that never close and forces weak, fast regrowth that fails in the next storm. If a tree has outgrown its spot, we quote crown reduction instead: cutting back to healthy lateral limbs so the canopy comes down in size without wrecking the tree.",
    ],
    [
        'q' => 'How much of the canopy can you safely remove?',
        'a' => "The working rule for mature trees is no more than about a quarter of the live canopy in one visit, and less for older oaks. Taking more stresses the tree and triggers exactly the weak sprout growth pruning is meant to prevent. When a canopy needs major reshaping, we stage the work across seasons instead of forcing it into one.",
    ],
    [
        'q' => 'Do you haul away all the branches and debris?',
        'a' => "Yes. Brush goes through our chipper and leaves on our trucks the same day, and we rake the lawn before we go. Cleanup and hauling are written into the estimate up front, so the price you approve includes the yard being left clean, not a brush pile sitting at the curb.",
    ],
    [
        'q' => 'Can you trim branches near power lines?',
        'a' => "We trim around the service drop that runs from the pole to your house, with proper rigging and clearance. Trees in the primary utility lines along the street are the power company's responsibility. If that's your situation, we'll say so at the estimate and handle everything on your side of the pole.",
    ],
    [
        'q' => 'Is it too late to trim once hurricane season starts?',
        'a' => "No, a June or July trim still takes weight and wind sail out of a canopy before the busiest storm months of August and September. The ideal time is earlier in the year, but the second-best time is before the next named storm. If the season has already started, ask for clearance over the roof and pool screen first; that is the work that matters most in a storm.",
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
        ['name' => 'Home',                    'url' => '/'],
        ['name' => 'Services',                'url' => '/services/'],
        ['name' => 'Tree Trimming & Pruning'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Trimming & Pruning — page-specific styles (.trm- prefix)
   Techniques: C1.4 page hero (photo + gradient + noise),
   C7.4 staggered alternating rows, pruning-cut vertical timeline,
   reduction-vs-topping comparison with VS badge, plan-vs-emergency
   cards, seasonal-calendar signature (C7 variant), C3.2 curved wave
   + C3.5 stacked-parallelogram dividers, C11.1 framed images w/
   offset shadow, C5.1 numbered watermarks, C9.2 radial-glow CTA.
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
.section-title h3 { text-wrap: balance; }
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

/* ---- Three jobs, one crew: definition cards + DIY split ---- */
.trm-def-section { background: var(--color-cream); }
.trm-def-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-bottom: var(--space-12);
}
.trm-def-card {
  position: relative;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  border-top: 4px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.trm-def-card:nth-child(2) { border-top-color: var(--color-accent); }
.trm-def-card:nth-child(3) { border-top-color: var(--color-primary-dark); }
.trm-def-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.trm-def-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.trm-def-icon svg { width: 26px; height: 26px; }
.trm-def-card h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-1);
  text-wrap: balance;
}
.trm-def-tag {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.trm-def-card p { font-size: var(--font-size-sm); color: var(--color-text); margin: 0; }
.trm-diy-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.trm-diy-split h3 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-4);
  text-wrap: balance;
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
.trm-stagger-note {
  max-width: 68ch;
  margin: var(--space-10) auto 0;
  text-align: center;
  color: var(--color-text);
}
.trm-stagger-note a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }

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

/* ---- Pruning cuts: vertical timeline beside a framed photo ---- */
.trm-cuts-section { background: var(--color-light); }
.trm-cuts-layout {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: start;
}
.trm-cuts-lede {
  max-width: 62ch;
  color: var(--color-text);
  margin: 0 0 var(--space-8);
}
.trm-cuts-lede a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }
.trm-timeline {
  list-style: none;
  position: relative;
  padding-left: var(--space-10);
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.trm-timeline::before {
  content: '';
  position: absolute;
  left: 23px;
  top: var(--space-4);
  bottom: var(--space-4);
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), color-mix(in srgb, var(--color-primary) 25%, transparent));
}
.trm-tl-item { position: relative; }
.trm-tl-node {
  position: absolute;
  left: calc(-1 * var(--space-10));
  top: var(--space-3);
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 2px solid var(--color-accent);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.trm-tl-node svg { width: 22px; height: 22px; }
.trm-tl-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-5) var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.trm-tl-card:hover { transform: translateX(4px); box-shadow: var(--shadow-md); }
.trm-tl-step {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-1);
}
.trm-tl-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.trm-tl-card p { font-size: var(--font-size-sm); color: var(--color-text); margin: 0; }
.trm-cuts-figure { position: sticky; top: calc(var(--nav-height) + var(--space-6)); }
.trm-cuts-figure img { aspect-ratio: 4 / 5; }

/* ---- Crown reduction vs topping: comparison with VS badge ---- */
.trm-vs-section { background: var(--color-white); }
.trm-vs-grid {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  align-items: stretch;
}
.trm-vs-col {
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
}
.trm-vs-col--topping {
  background: var(--color-card-tint-neutral);
  border: 1px dashed color-mix(in srgb, var(--color-gray) 45%, transparent);
}
.trm-vs-col--reduction {
  background: var(--color-card-tint-1);
  border: 1px solid color-mix(in srgb, var(--color-primary) 22%, transparent);
  box-shadow: var(--shadow-md);
}
.trm-vs-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-bottom: var(--space-3);
  color: var(--color-gray);
}
.trm-vs-col--reduction .trm-vs-tag { color: var(--color-primary); }
.trm-vs-tag svg { width: 16px; height: 16px; }
.trm-vs-col h3 { font-size: var(--font-size-xl); margin-bottom: var(--space-4); text-wrap: balance; }
.trm-vs-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-3); }
.trm-vs-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.trm-vs-col li svg { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.trm-vs-col--topping li svg { color: var(--color-gray); }
.trm-vs-col--reduction li svg { color: var(--color-accent); }
.trm-vs-badge {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 64px;
  height: 64px;
  border-radius: var(--radius-full);
  background: var(--color-dark);
  color: var(--color-accent);
  font-family: var(--font-accent);
  font-weight: 800;
  font-size: var(--font-size-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-lg);
  border: 3px solid var(--color-white);
  z-index: 2;
}
.trm-refusal {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
  max-width: 880px;
  margin: var(--space-10) auto 0;
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-accent) 10%, var(--color-white));
  border-left: 4px solid var(--color-accent);
}
.trm-refusal svg { width: 28px; height: 28px; color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }
.trm-refusal p { margin: 0; color: var(--color-text); font-size: var(--font-size-sm); }
.trm-refusal a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }
.trm-vs-gallery {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 880px;
  margin: var(--space-10) auto 0;
}
.trm-vs-gallery figure { margin: 0; }
.trm-vs-gallery img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-md);
}
.trm-vs-gallery figcaption { font-size: var(--font-size-xs); color: var(--color-gray); margin-top: var(--space-2); }

/* ---- Maintenance plans: plan vs emergency + visit steps + cadence ---- */
.trm-plan-section { background: var(--color-cream); }
.trm-plan-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  margin-bottom: var(--space-10);
}
.trm-plan-card {
  border-radius: var(--radius-lg);
  padding: var(--space-7) var(--space-6);
  position: relative;
}
.trm-plan-card--us {
  background: var(--color-white);
  box-shadow: var(--shadow-md);
  border-top: 4px solid var(--color-primary);
}
.trm-plan-card--them {
  background: var(--color-card-tint-neutral);
  border-top: 4px solid color-mix(in srgb, var(--color-gray) 60%, transparent);
}
.trm-plan-card h3 {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-1);
  text-wrap: balance;
}
.trm-plan-card h3 svg { width: 22px; height: 22px; color: var(--color-primary); }
.trm-plan-card--them h3 svg { color: var(--color-gray); }
.trm-plan-tag {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.trm-plan-card--them .trm-plan-tag { color: var(--color-gray); }
.trm-plan-card ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-3); }
.trm-plan-card li { display: flex; gap: var(--space-3); align-items: flex-start; font-size: var(--font-size-sm); color: var(--color-text); }
.trm-plan-card li svg { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; color: var(--color-accent); }
.trm-plan-card--them li svg { color: var(--color-gray); }
.trm-visit-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-bottom: var(--space-12);
}
.trm-visit-card {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
  padding: var(--space-5);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
}
.trm-visit-card:nth-child(2) { background: var(--color-card-tint-3); }
.trm-visit-card:nth-child(3) { background: var(--color-card-tint-2); }
.trm-visit-icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.trm-visit-icon svg { width: 22px; height: 22px; }
.trm-visit-card h4 { font-size: var(--font-size-base); margin-bottom: var(--space-1); text-wrap: balance; }
.trm-visit-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }
.trm-cadence-head { text-align: center; margin-bottom: var(--space-8); }
.trm-cadence-head h3 { font-size: var(--font-size-2xl); text-wrap: balance; margin-bottom: var(--space-3); }
.trm-cadence-head p { max-width: 64ch; margin: 0 auto; color: var(--color-text); }
.trm-cadence-head a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }
.trm-cadence-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.trm-cadence-card {
  text-align: center;
  padding: var(--space-7) var(--space-5);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.trm-cadence-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.trm-cadence-icon {
  width: 52px;
  height: 52px;
  margin: 0 auto var(--space-3);
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.trm-cadence-icon svg { width: 26px; height: 26px; }
.trm-cadence-card h4 { font-size: var(--font-size-lg); margin-bottom: var(--space-1); text-wrap: balance; }
.trm-cadence-window {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.trm-cadence-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

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
.svg-divider--on-light { background: var(--color-light); }
.svg-divider--on-dark { background: var(--color-dark); }

/* ---- Reveal stagger delays (shared idiom) ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .trm-def-grid { grid-template-columns: 1fr; }
  .trm-diy-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .trm-stat { max-width: 420px; margin: 0 auto; }
  .trm-cuts-layout { grid-template-columns: 1fr; }
  .trm-cuts-figure { position: static; max-width: 520px; margin: 0 auto; }
  .trm-visit-grid { grid-template-columns: 1fr; }
  .trm-cadence-grid { grid-template-columns: 1fr; }
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
  .trm-vs-grid { grid-template-columns: 1fr; gap: var(--space-12); }
  .trm-vs-badge { top: 50%; }
  .trm-vs-gallery { grid-template-columns: 1fr; }
  .trm-plan-grid { grid-template-columns: 1fr; }
  .trm-cost-grid { grid-template-columns: 1fr; }
  .trm-lead { padding-left: var(--space-5); }
}
@media (max-width: 600px) {
  .trm-calendar { grid-template-columns: 1fr; }
  .trm-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .trm-sign { flex-direction: column; }
  .trm-timeline { padding-left: var(--space-8); }
  .trm-tl-node { width: 40px; height: 40px; left: calc(-1 * var(--space-8)); }
  .trm-timeline::before { left: 19px; }
}
</style>

<article class="service-article">

<!-- ============ HERO (C1.4) ============ -->
<section class="trm-hero has-hero-bg" aria-label="Tree trimming and pruning in DeLand, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="trm-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Tree Trimming &amp; Pruning</span>
    </nav>

    <span class="hero-eyebrow">Trimming &middot; Pruning &middot; Crown Reduction &middot; DeLand, FL</span>

    <h1>Tree Trimming &amp; Pruning in DeLand, FL: <span class="text-accent">From Clearance Cuts to Crown Reduction</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving homeowners and businesses across Volusia County since <?php echo e($yearEstablished); ?>. One crew handles the whole canopy: clearance and health trimming, structural pruning, crown reduction made with proper reduction cuts (never topping), and recurring maintenance plans for homes and HOAs. Free written estimates within 24 hours, cleanup and hauling included.</p>

    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Trimming Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Roped Lowering Over Roofs</span>
      <span class="hero-trust-item"><?php echo icon('ban'); ?> Never Topping</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> Owner-Operated in DeLand</span>
      <span class="hero-trust-item"><?php echo icon('clock'); ?> Chipper &amp; Haul-Off On Site</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-tree-trimming-services';
    $heroFormService  = 'Tree Trimming & Pruning';
    $heroFormHeading  = 'Get a Free Trimming Estimate';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ PROBLEM STATEMENT — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Signs your trees need trimming or pruning">
  <div class="container">
    <p class="trm-lead" data-animate>A DeLand canopy never stops growing. Oaks put on reach, pines shed deadwood, and every unmanaged season adds <strong>weight the next storm gets to play with</strong>.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Read Your Canopy</span>
      <h2>How do you know your DeLand trees are overdue for a trim?</h2>
      <p class="answer-block">God's Country Tree Service sees the same four signs on overdue DeLand trees: limbs resting on the roof or pool screen, deadwood and Spanish moss thickening inside the canopy, two trunks competing for the lead, and a lawn shaded down to bare sand. One sign means a trim will help; several mean book it before hurricane season.</p>
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

<!-- ============ THREE JOBS, ONE CREW — 02 ============ -->
<section class="numbered-section trm-def-section" data-num="02" aria-label="Trimming, pruning and crown reduction explained">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label">Know What You're Buying</span>
      <h2>What's the difference between tree trimming, pruning and crown reduction?</h2>
      <p class="answer-block">God's Country Tree Service in DeLand treats them as three jobs. Trimming is scheduled clearance and appearance work. Pruning is corrective work on a tree's structure and health: which limbs stay and where each cut lands. Crown reduction brings an oversized canopy down in size by cutting back to healthy laterals. The estimate visit tells you which one your tree actually needs.</p>
    </div>

    <div class="trm-def-grid" data-p1-dynamic>
      <?php foreach ($definitions as $i => $def): ?>
      <article class="trm-def-card reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <div class="trm-def-icon"><?php echo icon(($def['icon'])); ?></div>
        <h3><?php echo e($def['title']); ?></h3>
        <span class="trm-def-tag"><?php echo e($def['tag']); ?></span>
        <p><?php echo e($def['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="trm-diy-split">
      <div>
        <h3 data-animate>What makes professional tree trimming different from DIY cutting?</h3>
        <p class="trm-diy-lede" data-animate>Topped oaks, lion-tailed limbs, and stub cuts from a ladder all grow back weaker, <strong>and cost more to fix than trimming right the first time</strong>. The difference is where the cut lands and how the limb comes down.</p>
        <ul class="trm-points" data-p1-dynamic>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Collar cuts that heal.</strong> Every limb comes off at the branch collar: no stubs, no flush cuts, no rot pockets for Florida humidity.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Balanced thinning, never stripping.</strong> We take the deadwood and problem limbs while keeping the interior growth a canopy needs to stay strong in wind.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Rope, saddle, and bucket truck.</strong> Proper rigging instead of a leaning ladder keeps the crew safe and your fence in one piece.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Honest scope.</strong> If your tree needs a light trim instead of corrective pruning, or an <a href="/services/certified-arborist-services/">arborist's read on whether it can be saved</a>, you'll hear it at the estimate visit.</p>
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
      <span class="eyebrow-label">The Trimming Work</span>
      <h2>Which kinds of tree trimming do DeLand yards actually need?</h2>
      <p class="answer-block">God's Country Tree Service quotes three kinds of tree trimming on DeLand yards: clearance, canopy health and appearance trimming. Clearance lifts limbs off roofs, driveways and pool screen enclosures. Health trimming clears deadwood and thins storm sail in live oaks. Appearance trimming keeps street-facing trees tidy. All three go on one written estimate after walking the yard.</p>
    </div>

    <div class="trm-stagger" data-p1-dynamic>
      <?php foreach ($trimTypes as $type): ?>
      <div class="trm-row">
        <figure class="trm-framed trm-row-image" data-animate>
          <?php echo p1_picture($bodyPhotos[$type['photo']]['src'], $bodyPhotos[$type['photo']]['alt'], (int) $type['w'], (int) $type['h'], '(max-width: 768px) 100vw, 800px'); ?>
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

    <p class="trm-stagger-note" data-animate>Queen, sabal and fan palms are trimmed by different rules than oaks and pines (no hurricane cuts, only dead fronds and seed pods), so they get their own page: <a href="/services/palm-tree-trimming/">palm tree trimming in DeLand</a>. The same visit can quote both.</p>
  </div>
</section>

<!-- Divider: curved wave (white → light) — C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,0 900,80 1200,40 L1200,80 L0,80 Z" fill="var(--color-light)"/></svg>
</div>

<!-- ============ PRUNING CUTS — 04 (timeline) ============ -->
<section class="numbered-section trm-cuts-section" data-num="04" aria-label="Types of pruning cuts">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Pruning Work</span>
      <h2>Which pruning cuts does God's Country make on DeLand trees?</h2>
      <p class="answer-block">God's Country Tree Service makes four kinds of pruning cuts on DeLand trees: structural pruning, deadwood removal, crown thinning and clearance pruning. Each cut lands at the branch collar or a healthy lateral so the wound closes, and the written estimate names which cuts each tree gets, so you can phase the work across seasons if you'd rather.</p>
    </div>

    <div class="trm-cuts-layout">
      <div>
        <p class="trm-cuts-lede" data-animate>Pruning is where a tree's next twenty years get decided. A live oak that had its codominant leader sorted out as a young tree almost never becomes the midnight emergency over a pool screen. When an HOA or insurer sends a notice about a flagged tree, these are also the cuts that satisfy it; our guide to <a href="/blog/tree-mitigation-deland-volusia-county/">tree mitigation in DeLand and Volusia County</a> explains what those notices usually ask for, and the <a href="/blog/prescription-pruning-deland/">prescription pruning guide</a> covers how a written pruning plan works.</p>

        <ol class="trm-timeline" data-p1-dynamic>
          <?php foreach ($pruningCuts as $i => $cut): ?>
          <li class="trm-tl-item reveal-delay-<?php echo ($i % 4) + 1; ?>" data-animate>
            <div class="trm-tl-node"><?php echo icon(($cut['icon'])); ?></div>
            <div class="trm-tl-card">
              <span class="trm-tl-step">Cut <?php echo str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT); ?></span>
              <h3><?php echo e($cut['name']); ?></h3>
              <p><?php echo e($cut['text']); ?></p>
            </div>
          </li>
          <?php endforeach; ?>
        </ol>
      </div>

      <figure class="trm-framed trm-cuts-figure" data-animate="right">
        <?php echo p1_picture($bodyPhotos['sectioning']['src'], $bodyPhotos['sectioning']['alt'], 800, 1000, '(max-width: 768px) 100vw, 600px'); ?>
        <figcaption>Roped climber working limb by limb inside a DeLand live oak</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (light → white) — C3.5 -->
<div class="svg-divider svg-divider--flush svg-divider--on-light" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-white)" opacity="0.3" points="0,40 1200,20 1200,80 0,80"/><polygon fill="var(--color-white)" points="0,20 1200,40 1200,80 0,80"/></svg>
</div>

<!-- ============ CROWN REDUCTION VS TOPPING — 05 ============ -->
<section class="numbered-section trm-vs-section" data-num="05" aria-label="Crown reduction versus topping">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Line We Won't Cross</span>
      <h2>What's the difference between crown reduction and topping a tree?</h2>
      <p class="answer-block">God's Country Tree Service reduces crowns by shortening limbs back to healthy lateral branches that take over the growth, which keeps the tree's structure and shape. Topping slices through the middle of limbs at an arbitrary height, leaving stubs that decay and sprout weak regrowth. One is arboriculture; the other slowly kills DeLand's oaks, which is why we refuse to top.</p>
    </div>

    <div class="trm-vs-grid">
      <div class="trm-vs-col trm-vs-col--topping" data-animate>
        <span class="trm-vs-tag"><?php echo icon('thumbs-down'); ?> Topping: the shortcut</span>
        <h3>What the wrong crew does</h3>
        <ul data-p1-dynamic>
          <?php foreach ($vsTopping as $point): ?>
          <li><?php echo icon('x'); ?> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="trm-vs-badge" aria-hidden="true">VS</div>

      <div class="trm-vs-col trm-vs-col--reduction" data-animate="right">
        <span class="trm-vs-tag"><?php echo icon('thumbs-up'); ?> Reduction: the right way</span>
        <h3>How God's Country shapes a crown</h3>
        <ul data-p1-dynamic>
          <?php foreach ($vsReduction as $point): ?>
          <li><?php echo icon('check'); ?> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="trm-refusal" data-animate>
      <?php echo icon('ban'); ?>
      <p><strong>We turn down topping jobs, even when a customer asks for one.</strong> Topping kills DeLand's live oaks slowly and makes them more dangerous in the meantime. On your walkthrough we'll show you what a proper reduction takes off: the highest leaders back to strong laterals, overextended limbs pulled back from rooflines, select interior branches out so wind passes through, and the lowest limbs lifted for clearance. Our article on <a href="/blog/tree-topping-vs-crown-reduction/">tree topping versus crown reduction</a> covers what each does to a Florida oak, and a tree that was topped years ago can often be restored over a couple of seasons by training the strongest sprouts into new leaders.</p>
    </div>

    <div class="trm-vs-gallery" data-p1-dynamic>
      <figure data-animate>
        <?php echo p1_picture($bodyPhotos['shaped-oak']['src'], $bodyPhotos['shaped-oak']['alt'], 800, 1000, '(max-width: 768px) 100vw, 440px'); ?>
        <figcaption>A reduced mature oak: smaller and balanced, still recognizably an oak</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <?php echo p1_picture($bodyPhotos['vase-canopy']['src'], $bodyPhotos['vase-canopy']['alt'], 800, 1000, '(max-width: 768px) 100vw, 440px'); ?>
        <figcaption>A lifted, vase-shaped canopy over a DeLand street after shaping</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: curved wave (white → cream) — C3.2 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ MAINTENANCE PLANS — 06 ============ -->
<section class="numbered-section trm-plan-section" id="maintenance-plans" data-num="06" aria-label="Recurring tree maintenance plans">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Put the Yard on a Schedule</span>
      <h2>What does a tree maintenance plan include for DeLand homes and HOAs?</h2>
      <p class="answer-block">God's Country Tree Service's maintenance plans put a DeLand yard or an HOA's common areas on a calendar: a walk-through inspection of every tree, preventative pruning and deadwood removal while the cuts are still small, clearance held over roofs and screens, and a written watch list before the crew leaves. Each follow-up visit is quoted in writing before it is scheduled.</p>
    </div>

    <div class="trm-plan-grid">
      <div class="trm-plan-card trm-plan-card--us" data-animate>
        <h3><?php echo icon('calendar-check'); ?> The maintenance visit</h3>
        <span class="trm-plan-tag">Planned &middot; Predictable &middot; The tree survives</span>
        <ul data-p1-dynamic>
          <?php foreach ($planPoints as $point): ?>
          <li><?php echo icon('check'); ?> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="trm-plan-card trm-plan-card--them" data-animate="right">
        <h3><?php echo icon('siren'); ?> The emergency call</h3>
        <span class="trm-plan-tag">Unplanned &middot; Expensive &middot; The tree is gone</span>
        <ul data-p1-dynamic>
          <?php foreach ($emergencyPoints as $point): ?>
          <li><?php echo icon('x'); ?> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="trm-visit-grid" data-p1-dynamic>
      <?php foreach ($planVisit as $i => $step): ?>
      <div class="trm-visit-card reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <div class="trm-visit-icon"><?php echo icon(($step['icon'])); ?></div>
        <div>
          <h4><?php echo e($step['title']); ?></h4>
          <p><?php echo e($step['text']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="trm-cadence-head" data-animate>
      <h3>How often should DeLand trees be trimmed or pruned?</h3>
      <p>Most mature DeLand oaks should be pruned every three to five years and young shade trees every two to three, with a yearly walk-through ahead of hurricane season. Deadwood over a roof or driveway should not wait for any schedule. Property managers and HOA boards can fold this into a <a href="/services/commercial-hoa-tree-services/">scheduled commercial and HOA tree service contract</a> with documentation for the board.</p>
    </div>

    <div class="trm-cadence-grid" data-p1-dynamic>
      <?php foreach ($cadence as $i => $item): ?>
      <article class="trm-cadence-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="trm-cadence-icon"><?php echo icon(($item['icon'])); ?></div>
        <h4><?php echo e($item['title']); ?></h4>
        <span class="trm-cadence-window"><?php echo e($item['window']); ?></span>
        <p><?php echo e($item['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (cream → dark) — C3.2 -->
<div class="svg-divider svg-divider--flush svg-divider--on-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,0 900,80 1200,40 L1200,80 L0,80 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ SEASONAL CALENDAR (signature) ============ -->
<section class="trm-calendar-section" aria-label="Seasonal tree trimming calendar for Central Florida">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Trimming Year</span>
      <h2>When is the best season for tree trimming in Central Florida?</h2>
      <p class="answer-block">God's Country Tree Service does its heaviest trimming, pruning and crown reduction in the Central Florida dry season, roughly December through February, when oaks are semi-dormant and disease pressure is low. Storm-prep clearance should be finished before hurricane season opens June 1. Light maintenance trimming is safe in DeLand any month of the year.</p>
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

<!-- ============ COST — 07 ============ -->
<section class="numbered-section trm-cost-section" data-num="07" aria-label="Tree trimming and pruning cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does tree trimming or pruning cost in DeLand, FL?</h2>
      <p class="answer-block">God's Country Tree Service prices trimming, pruning and crown reduction in DeLand after an on-site visit, and the cost depends on tree size, how much canopy comes out, and how many trees are on the list. The written estimate names every tree, what comes off it, and the chipping and hauling. The visit and the quote are free.</p>
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

<!-- ============ PROOF / NEAR ME — 08 ============ -->
<section class="numbered-section trm-proof-section" data-num="08" aria-label="Local tree trimming proof">
  <div class="container">
    <div class="trm-proof-layout">
      <figure class="trm-framed" data-animate>
        <?php echo p1_picture($heroImage, 'Bucket crew trimming a moss-draped live oak in DeLand, FL', 800, 800, '(max-width: 768px) 100vw, 800px'); ?>
        <figcaption>Our bucket crew working a moss-draped live oak in DeLand, FL</figcaption>
      </figure>
      <div data-animate="right">
        <span class="eyebrow-label">Local Proof</span>
        <h2>Who does tree trimming near me in DeLand, FL?</h2>
        <p class="answer-block">God's Country Tree Service does tree trimming near you from its base in DeLand, FL. The same crew, bucket truck and chipper cover roughly 50 miles of Volusia County, including DeLeon Springs, Lake Helen, Orange City, Deltona and DeBary. Trimming and pruning are two of the <a href="/services/">tree services we run from DeLand</a>, so one visit can also quote a removal, a stump or a palm.</p>
        <div class="trm-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'DeLeon Springs', 'Lake Helen', 'Orange City', 'Deltona', 'DeBary'] as $area): ?>
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

<!-- ============ FAQ — 09 ============ -->
<section class="numbered-section trm-faq-section" data-num="09" aria-label="Tree trimming and pruning questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask before booking tree trimming or pruning?</h2>
      <p class="answer-block">God's Country Tree Service hears the same questions before a DeLand trimming or pruning job: how often trees need it, whether pruning can save a tree, whether we will top one (no), how much canopy can come off, and what happens to the brush. Each answer below is specific to Volusia County trees.</p>
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
      <h2>What other tree services do DeLand property owners pair with trimming and pruning?</h2>
      <p class="answer-block">God's Country Tree Service most often pairs a DeLand trimming visit with three other jobs. <a href="/services/palm-tree-trimming/">Palm tree trimming</a> handles the queen and sabal palms by the drive, an <a href="/services/certified-arborist-services/">arborist assessment of a declining tree</a> settles the save-or-remove question, and <a href="/services/dead-hazardous-tree-removal/">dead and hazardous tree removal</a> takes down the tree that pruning can no longer fix. One crew quotes all of it on one visit.</p>
    </div>

    <?php renderServiceCards(['palm-tree-trimming', 'certified-arborist-services', 'dead-hazardous-tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="trm-closing-cta" aria-label="Get a tree trimming estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free Visit &middot; Written Quote</span>
    <h2>Ready to Get Your Trees Trimmed Before the Next Storm Season Tests Them?</h2>
    <p class="answer-block">Tell us which trees have gotten ahead of you: the oak over the roof, the two-trunked laurel oak by the fence, the whole shaded-out backyard. <?php echo e($siteName); ?> will walk the property, recommend only the trimming, pruning or reduction it actually needs, and put the price in writing, tree by tree.</p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Trimming Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
