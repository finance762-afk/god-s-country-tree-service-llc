<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/palm-tree-trimming/index.php — Palm Tree Trimming
 * God's Country Tree Service LLC — DeLand, FL
 * SEO fixes 2026-10-13 — new dedicated palm page
 * Layout: frond-by-frond cut guide signature, species rows with
 * framed photos, hurricane-cut comparison, dark timing band,
 * C3 diagonal + torn-edge dividers, C11.1 framed images
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'palm-tree-trimming';

// V2.1 trade-noun title (58 chars) + V2.2 CTR meta (156 chars)
$pageTitle       = "Palm Tree Trimming DeLand FL | {$gbpRating}★ Rated | Free Estimates";
$pageDescription = "Palm tree trimming in DeLand, FL rated {$gbpRating}★ from {$gbpReviewCount} Google reviews. Licensed & insured, fronds chipped and hauled, free estimate in 24 hours. Call (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = '/assets/images/';

$heroImage        = $imgBase . '1784062732583-cjgzse-35686882_2078205145733420_3238708918062415872_n.webp'; // fan palm trimmed clear of a paver entry walk
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$bodyPhotos = [
    'queen' => [
        'src' => $imgBase . '1784062750583-pr9hsn-57170747_2285599344993998_4063638806954246144_n.webp',
        'alt' => 'Queen palm with a clean, trimmed crown beside a shade tree at a DeLand, FL home',
        'cap' => 'A queen palm with a clean crown at the edge of a front yard, beside a broad shade tree',
    ],
    'fanmulch' => [
        'src' => $imgBase . '1784062735583-73serd-36040189_2078205155733419_6294256146878300160_n.webp',
        'alt' => 'Fan palm and shrub beds in fresh red mulch along a paver walk, DeLand, FL',
        'cap' => 'Fan palm and shrub beds finished in fresh red mulch along a paver walk',
    ],
    'sago' => [
        'src' => $imgBase . '1784062734583-fuv06z-35838321_2078205099066758_7922509159671529472_n.webp',
        'alt' => 'Sago palm and shrub bed finished with red mulch at a DeLand, FL home',
        'cap' => 'A sago palm and shrub bed finished with red mulch against a tan stucco wall',
    ],
    'bucket' => [
        'src' => '/assets/images/nsuvrpt-960.webp',
        'alt' => "God's Country bucket truck with its boom raised at a DeLand, FL job",
        'cap' => 'The forestry bucket truck with its boom raised into a canopy, which is how taller palms get reached',
    ],
];

// ---- Signature: frond-by-frond cut guide ----
$frondGuide = [
    [
        'num'    => '01',
        'title'  => 'Dead and brown fronds',
        'status' => 'Comes off',
        'kind'   => 'off',
        'text'   => 'A fully brown frond has finished feeding the palm. It hangs, catches wind, and drops onto whatever is parked below. Removing dead fronds is the core of every palm trim.',
    ],
    [
        'num'    => '02',
        'title'  => 'Yellowing fronds',
        'status' => 'Stays, for now',
        'kind'   => 'keep',
        'text'   => "A yellow frond is usually still feeding the palm, and in DeLand's sandy soil a yellowing crown is often the first visible sign of a nutrient shortfall. Cutting it off hides the symptom without fixing the cause. UF/IFAS guidance is to leave it until it is fully brown and look at feeding instead.",
    ],
    [
        'num'    => '03',
        'title'  => 'Seed pods and flower stalks',
        'status' => 'Comes off',
        'kind'   => 'off',
        'text'   => 'Queen palm seed clusters drop a sticky mess on driveways and pavers and seed volunteer palms in the beds. Taking the stalks off is purely about cleanliness, and it does the palm no harm.',
    ],
    [
        'num'    => '04',
        'title'  => 'Loose boots',
        'status' => 'Your call',
        'kind'   => 'opt',
        'text'   => 'The old leaf bases on a sabal or fan palm trunk can stay for a rustic look or be pulled where they are already loose for a cleaner line. Boots that are still firmly attached are left alone.',
    ],
    [
        'num'    => '05',
        'title'  => 'Green fronds',
        'status' => 'Stays',
        'kind'   => 'keep',
        'text'   => 'Every green frond is feeding the palm. Removing green fronds slows growth and weakens the crown heading into storm season. Nothing above the horizontal stays on the cut list.',
    ],
];

// ---- Which palms (species rows) ----
$palmRows = [
    [
        'photo'   => 'queen',
        'w'       => 800, 'h' => 1000,
        'species' => [
            [
                'icon'  => 'sun',
                'title' => 'Queen palms',
                'text'  => 'Fast growers with long, arching fronds and heavy seed clusters. A queen palm typically wants yearly attention: brown fronds off, seed stalks off, and a look at any yellowing before it spreads through the crown.',
            ],
            [
                'icon'  => 'trees',
                'title' => 'Sabal (cabbage) palms',
                'text'  => 'Florida\'s state tree largely cleans itself. Most sabals need little beyond removing hanging dead fronds and the occasional seed stalk. Over-trimming a sabal is the most common palm mistake in Volusia County yards.',
            ],
        ],
    ],
    [
        'photo'   => 'fanmulch',
        'w'       => 800, 'h' => 1000,
        'species' => [
            [
                'icon'  => 'leaf',
                'title' => 'Fan palms and palmettos',
                'text'  => 'Wide, spreading fronds that end up across entry walks and driveways. Dead fronds come off and the live crown is kept clear of the path. Clumping palmettos get their dead fronds cut from the base.',
            ],
            [
                'icon'  => 'shrub',
                'title' => 'Sago palms',
                'text'  => 'Technically a cycad rather than a true palm, but it gets the same discipline. Only the fully brown lower fronds come off, so the sago keeps a full, flat crown instead of a stripped stem.',
            ],
        ],
    ],
];

// ---- Hurricane cut vs proper trim ----
$comparison = [
    ['them' => 'Strips the crown to a handful of upright fronds, the "feather duster" cut',     'us' => 'Removes only brown fronds, seed pods and loose boots, and leaves every green frond'],
    ['them' => 'Cuts green fronds "to reduce wind", which starves the palm before storm season', 'us' => 'Keeps the crown full so the palm has the energy to stand up to wind'],
    ['them' => 'Takes fronds from above the horizontal because it looks tidy from the street',   'us' => 'Follows the UF/IFAS 9 o\'clock to 3 o\'clock rule: nothing above the horizontal comes off'],
    ['them' => 'Spikes up the trunk, leaving wounds in a palm that cannot heal them',             'us' => 'Reaches the crown from the forestry bucket truck or a roped climb, never spikes'],
    ['them' => 'Leaves fronds and seed pods piled at the curb',                                    'us' => 'Chips the fronds and hauls everything away on the same visit'],
];

// ---- Timing (dark band) ----
$timing = [
    ['icon' => 'cloud-lightning', 'title' => 'Before June 1',       'badge' => 'Storm prep', 'text' => 'Hurricane season opens June 1. Dead fronds and seed pods are the pieces a tropical storm throws first, so storm-prep palm work belongs on the calendar before the season starts, not after the first named storm.'],
    ['icon' => 'flower-2',        'title' => 'After flowering',     'badge' => '',           'text' => 'Queen palms push out flower stalks and then heavy seed clusters. Booking the trim after the stalks appear takes the pods off before they drop across the drive and seed the beds.'],
    ['icon' => 'calendar-check',  'title' => 'Once a year',         'badge' => '',           'text' => 'Most palms want yearly attention. A yearly visit keeps the amount that comes off small, which is exactly what a palm prefers. Sabals often go longer between visits.'],
    ['icon' => 'triangle-alert',  'title' => 'Any month for hazards', 'badge' => '',         'text' => 'A dead frond hanging over a walkway, a pool screen or a parked car does not wait for a season. Removing it is light work the crew can fit in year-round.'],
];

// ---- Cost factors ----
$costFactors = [
    ['icon' => 'arrow-up-from-line', 'title' => 'Height and access',          'text' => 'A tall queen palm reached from the bucket truck is a different job from a sago at knee height. Whether the truck can park next to the palm or a climber has to rope in from the far side of the house changes the time, and the price.'],
    ['icon' => 'trees',              'title' => 'How many palms',              'text' => 'One palm at the driveway is a quick stop. A row of sabals along a fence or a yard full of queens is a longer visit, though a list of palms is quoted as one visit rather than several separate stops.'],
    ['icon' => 'truck',              'title' => 'What is underneath and cleanup', 'text' => 'Fronds dropped over a paver walk, a pool screen or a planted bed have to be lowered, not let fall. Chipping and hauling are written into the estimate so the price you approve includes a clean yard.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Do you trim sabal palms, or do they take care of themselves?',
        'a' => "Both are true. Sabal palms largely self-clean, shedding old fronds on their own, so most of them need very little trimming. God's Country Tree Service trims a sabal when dead fronds are hanging over a walk or roof, or when a seed stalk is making a mess. We do not strip a healthy sabal crown just because the neighbor's palm was cut that way.",
    ],
    [
        'q' => 'Why is my palm turning yellow, and will trimming fix it?',
        'a' => "Yellowing fronds on a palm here usually point to a nutrient deficiency in our sandy soil rather than a trimming problem. Cutting the yellow fronds off does not fix the deficiency; it removes a frond that was still feeding the palm. We leave yellowing fronds until they are fully brown and point you toward feeding the palm instead, following UF/IFAS guidance.",
    ],
    [
        'q' => 'Can you remove the boots from my palm trunk?',
        'a' => "Yes, where they are ready to come off. Boots are the old leaf bases left on a sabal or fan palm trunk. Loose ones can be pulled for a cleaner trunk line, and the written estimate will say whether booting is included. Boots that are still firmly attached are left in place, because forcing them tears the trunk.",
    ],
    [
        'q' => 'Will you use climbing spikes on my palm?',
        'a' => "No. A palm cannot close a wound the way an oak can, so spike holes in the trunk stay open and invite rot and insects for the life of the tree. God's Country Tree Service reaches a palm crown from the forestry bucket truck, or ropes a climber in without spikes when the truck cannot get close. Spikes are only ever used on a palm that is being removed.",
    ],
    [
        'q' => 'Do you haul away the fronds and seed pods?',
        'a' => "Yes. Fronds go through the chipper and seed pods go on the truck, and both leave with the crew on the same visit. Nothing is left stacked at the curb for the county to collect. Cleanup and hauling are written into the estimate up front, so the price you approve covers the yard being left clean.",
    ],
    [
        'q' => 'How often should palms be trimmed in DeLand?',
        'a' => "Most palms here do well with yearly attention: dead fronds, seed pods and loose boots off once a year, ideally before hurricane season opens June 1. Queen palms tend to need the full yearly visit because of their seed clusters. Sabals can often go longer. A palm that still looks clean does not need to be cut on a schedule.",
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
        ['name' => 'Home',               'url' => '/'],
        ['name' => 'Services',           'url' => '/services/'],
        ['name' => 'Palm Tree Trimming'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Palm Tree Trimming — page-specific styles (.plm- prefix)
   Techniques: C1.4 page hero (photo + gradient + noise),
   frond-by-frond cut guide signature (tinted ledger rows +
   clock-rule legend), species rows with C11.1 framed images,
   comparison columns, dark timing band with radial glow,
   C3 diagonal + torn-edge dividers, C5.1 numbered watermarks,
   C9.2 radial-glow closing CTA.
   All values from tokens / color-mix — no hardcoded colors.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.plm-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.plm-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    150deg,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 66%, transparent) 50%,
    color-mix(in srgb, var(--color-dark) 86%, transparent) 100%
  );
}
.plm-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.plm-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.plm-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.plm-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.plm-breadcrumb a:hover { color: var(--color-accent); }
.plm-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.plm-hero .hero-eyebrow {
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
.plm-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 24ch;
  margin-bottom: var(--space-5);
}
.plm-hero h1 .text-accent { color: var(--color-accent); }
.plm-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.plm-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.plm-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.plm-hero .hero-trust-item svg,
.plm-hero .hero-trust-item i {
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
.section-title .answer-block a,
.plm-proof-copy .answer-block a,
.plm-compare-note a,
.plm-timing-note a {
  color: var(--color-primary-dark);
  text-decoration: underline;
  text-underline-offset: 3px;
  transition: color var(--transition-fast);
}
.section-title .answer-block a:hover,
.plm-proof-copy .answer-block a:hover,
.plm-compare-note a:hover { color: var(--color-accent); }
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

/* ---- Signature: frond-by-frond cut guide ---- */
.plm-guide-section { background: var(--color-white); }
.plm-guide {
  display: grid;
  grid-template-columns: minmax(0, 0.85fr) minmax(0, 1.15fr);
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: start;
}
.plm-guide-intro {
  position: sticky;
  top: calc(var(--nav-height) + var(--space-6));
}
.plm-guide-intro h3 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.plm-guide-intro p {
  color: var(--color-text);
  margin-bottom: var(--space-5);
}
.plm-guide-intro p strong { color: var(--color-primary); }

/* Clock-rule legend: the 9-to-3 horizontal */
.plm-clock {
  position: relative;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-xl);
  background: var(--color-card-tint-2);
  border: 1px solid color-mix(in srgb, var(--color-primary) 14%, transparent);
  overflow: hidden;
}
.plm-clock::before {
  content: '';
  position: absolute;
  left: var(--space-6);
  right: var(--space-6);
  top: 50%;
  height: 3px;
  background: linear-gradient(to right, var(--color-accent), color-mix(in srgb, var(--color-accent) 35%, transparent));
  border-radius: var(--radius-full);
}
.plm-clock::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: var(--space-6);
  width: 12px;
  height: 46%;
  transform: translateX(-50%);
  background: linear-gradient(to top, var(--color-primary-dark), var(--color-primary));
  border-radius: var(--radius-sm) var(--radius-sm) 0 0;
  opacity: 0.35;
}
.plm-clock-row {
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-3);
}
.plm-clock-row + .plm-clock-row { margin-top: var(--space-10); }
.plm-clock-num {
  font-family: var(--font-accent);
  font-size: var(--font-size-3xl);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.plm-clock-label {
  flex: 1;
  text-align: center;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-gray-dark);
}
.plm-clock-label--keep { color: var(--color-primary-dark); }
.plm-clock-label--off {
  color: var(--color-accent);
  filter: brightness(0.75);
}
.plm-clock-caption {
  position: relative;
  z-index: 1;
  margin: var(--space-6) 0 0;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}

/* Ledger rows */
.plm-ledger {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  position: relative;
}
.plm-ledger::before {
  content: '';
  position: absolute;
  left: var(--space-7);
  top: var(--space-6);
  bottom: var(--space-6);
  width: 2px;
  background: linear-gradient(to bottom, color-mix(in srgb, var(--color-primary) 30%, transparent), transparent);
  pointer-events: none;
}
.plm-frond {
  position: relative;
  display: grid;
  grid-template-columns: auto 1fr auto;
  gap: var(--space-5);
  align-items: start;
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  border-left: 4px solid transparent;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plm-frond:nth-child(3n+1) { background: var(--color-card-tint-1); }
.plm-frond:nth-child(3n+2) { background: var(--color-card-tint-3); }
.plm-frond:nth-child(3n)   { background: var(--color-card-tint-2); }
.plm-frond:hover { transform: translateX(6px); box-shadow: var(--shadow-md); }
.plm-frond--off  { border-left-color: var(--color-accent); }
.plm-frond--keep { border-left-color: var(--color-primary); }
.plm-frond--opt  { border-left-color: var(--color-gray); }
.plm-frond-num {
  font-family: var(--font-accent);
  font-size: var(--font-size-xl);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 55%, transparent);
  padding-top: var(--space-1);
}
.plm-frond h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.plm-frond p {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  margin: 0;
}
.plm-status {
  display: inline-flex;
  align-items: center;
  gap: var(--space-1);
  white-space: nowrap;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
}
.plm-status svg, .plm-status i { width: 14px; height: 14px; }
.plm-frond--off  .plm-status { color: var(--color-accent); filter: brightness(0.8); }
.plm-frond--keep .plm-status { color: var(--color-primary); }
.plm-frond--opt  .plm-status { color: var(--color-gray-dark); }

/* ---- Species rows with framed photos ---- */
.plm-species-section { background: var(--color-cream); }
.plm-species-rows { display: flex; flex-direction: column; gap: clamp(3rem, 7vw, 5.5rem); }
.plm-species-row {
  display: grid;
  grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: center;
}
.plm-species-row:nth-child(even) .plm-species-photo { order: 2; }
.plm-species-row:nth-child(even) .plm-species-cards { order: 1; }
.plm-species-cards {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.plm-species-card {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plm-species-card:nth-child(even) { border-top-color: var(--color-accent); }
.plm-species-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.plm-species-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.plm-species-icon svg, .plm-species-icon i { width: 24px; height: 24px; }
.plm-species-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.plm-species-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  margin: 0;
}

/* ---- C11.1 framed image with offset accent shadow ---- */
.plm-framed {
  position: relative;
  margin: 0;
  padding: 0 var(--space-4) var(--space-4) 0;
}
.plm-framed::before {
  content: '';
  position: absolute;
  inset: var(--space-4) 0 0 var(--space-4);
  background: color-mix(in srgb, var(--color-accent) 80%, var(--color-white));
  border-radius: var(--radius-lg);
  z-index: 0;
}
.plm-framed--flip { padding: 0 0 var(--space-4) var(--space-4); }
.plm-framed--flip::before { inset: var(--space-4) var(--space-4) 0 0; }
.plm-framed img {
  position: relative;
  z-index: 1;
  width: 100%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 4.6;
  object-fit: cover;
}
.plm-framed--square img { aspect-ratio: 1 / 1; }
.plm-framed--wide img { aspect-ratio: 4 / 3; }
.plm-framed figcaption {
  position: relative;
  z-index: 1;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-3);
}

/* ---- Hurricane cut vs proper trim ---- */
.plm-compare-section { background: var(--color-white); }
.plm-compare {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  align-items: stretch;
}
.plm-compare-col {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-xl);
  position: relative;
}
.plm-compare-col--them {
  background: var(--color-light);
  border: 1px solid var(--color-gray-light);
}
.plm-compare-col--us {
  background: var(--color-card-tint-1);
  border: 1px solid color-mix(in srgb, var(--color-primary) 22%, transparent);
  box-shadow: var(--shadow-md);
}
.plm-compare-col--us::before {
  content: '';
  position: absolute;
  inset: calc(-1 * var(--space-2));
  border: 2px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.plm-compare-head {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
}
.plm-compare-head svg, .plm-compare-head i { width: 26px; height: 26px; flex-shrink: 0; }
.plm-compare-col--them .plm-compare-head { color: var(--color-gray-dark); }
.plm-compare-col--us .plm-compare-head { color: var(--color-primary); }
.plm-compare-head h3 {
  font-size: var(--font-size-xl);
  margin: 0;
  text-wrap: balance;
}
.plm-compare-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.plm-compare-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
  padding-bottom: var(--space-4);
  border-bottom: 1px solid color-mix(in srgb, var(--color-dark) 8%, transparent);
}
.plm-compare-list li:last-child { border-bottom: 0; padding-bottom: 0; }
.plm-compare-list li svg, .plm-compare-list li i {
  width: 18px;
  height: 18px;
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.plm-compare-col--them .plm-compare-list li svg { color: var(--color-danger); }
.plm-compare-col--us .plm-compare-list li svg { color: var(--color-primary); }
.plm-compare-foot {
  display: grid;
  grid-template-columns: minmax(0, 1.2fr) minmax(0, 0.8fr);
  gap: clamp(2rem, 5vw, 4rem);
  align-items: center;
  margin-top: var(--space-12);
}
.plm-compare-note {
  padding: var(--space-6) var(--space-8);
  border-left: 4px solid var(--color-accent);
  background: var(--color-card-tint-3);
  border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
  font-family: var(--font-accent);
  font-size: clamp(1.15rem, 2vw, 1.5rem);
  font-weight: 600;
  line-height: 1.4;
  color: var(--color-text);
  text-wrap: balance;
}
.plm-compare-note strong { color: var(--color-primary); }
.plm-compare-note small {
  display: block;
  margin-top: var(--space-3);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 400;
  color: var(--color-gray-dark);
}

/* ---- Timing: dark band with radial glow ---- */
.plm-timing-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.plm-timing-section::before {
  content: '';
  position: absolute;
  top: -30%;
  right: -15%;
  width: 70%;
  height: 140%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 40%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.plm-timing-section::after {
  content: '';
  position: absolute;
  bottom: -40%;
  left: -10%;
  width: 45%;
  height: 90%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-accent) 16%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.plm-timing-section .container { position: relative; z-index: 1; }
.plm-timing-section .section-title h2 { color: var(--color-white); }
.plm-timing-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.plm-timing-section .section-title .answer-block a { color: var(--color-accent); }
.plm-timing-section .eyebrow-label { color: var(--color-accent); }
.plm-timing {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
  position: relative;
}
.plm-timing::before {
  content: '';
  position: absolute;
  top: calc(-1 * var(--space-5));
  left: var(--space-4);
  right: var(--space-4);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), color-mix(in srgb, var(--color-accent) 15%, transparent));
}
.plm-when {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 11%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.plm-when:hover {
  transform: translateY(-5px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.plm-when--best {
  background: color-mix(in srgb, var(--color-primary) 34%, transparent);
  border-color: color-mix(in srgb, var(--color-accent) 50%, transparent);
  box-shadow: var(--shadow-xl);
}
.plm-when-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 16%, transparent);
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.plm-when-icon svg, .plm-when-icon i { width: 22px; height: 22px; }
.plm-when h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.plm-when p {
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  font-size: var(--font-size-sm);
  margin: 0;
}
.plm-when-badge {
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
.plm-timing-note {
  margin: var(--space-10) auto 0;
  max-width: 64ch;
  text-align: center;
  font-size: var(--font-size-base);
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
}
.plm-timing-note a { color: var(--color-accent); }

/* ---- Cost factors ---- */
.plm-cost-section { background: var(--color-cream); }
.plm-cost-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.plm-cost-card {
  position: relative;
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6) var(--space-6);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.plm-cost-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.plm-cost-card:nth-child(3n+2) { background: var(--color-card-tint-neutral); }
.plm-cost-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.plm-cost-card::after {
  content: '';
  position: absolute;
  right: calc(-1 * var(--space-8));
  bottom: calc(-1 * var(--space-8));
  width: 120px;
  height: 120px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 7%, transparent);
  pointer-events: none;
}
.plm-cost-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.plm-cost-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.plm-cost-icon svg, .plm-cost-icon i { width: 22px; height: 22px; }
.plm-cost-card h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.plm-cost-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text);
  margin: 0;
  position: relative;
  z-index: 1;
}

/* ---- Proof: framed photo + area chips + badges ---- */
.plm-proof-section { background: var(--color-white); }
.plm-proof-layout {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: center;
  margin-bottom: var(--space-10);
}
.plm-proof-copy h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.plm-proof-copy .answer-block { color: var(--color-text); }
.plm-area-chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-5);
}
.plm-area-chip {
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
  transition: border-color var(--transition-fast), background var(--transition-fast);
}
.plm-area-chip:hover {
  border-color: var(--color-primary);
  background: var(--color-card-tint-1);
}
.plm-area-chip svg, .plm-area-chip i { width: 14px; height: 14px; color: var(--color-primary); }
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
.plm-faq-section { background: var(--color-light); }
.plm-related-section { background: var(--color-white); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.plm-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.plm-closing-cta::before {
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
.plm-closing-cta .container { position: relative; z-index: 1; }
.plm-closing-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.plm-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.plm-closing-cta .hero-actions {
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

/* ---- SVG dividers (2 shapes: diagonal + torn organic edge) ---- */
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
html.js-anim [data-animate].reveal-delay-5 { transition-delay: 0.40s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .plm-guide { grid-template-columns: 1fr; }
  .plm-guide-intro { position: static; }
  .plm-timing { grid-template-columns: repeat(2, 1fr); }
  .plm-timing::before { display: none; }
  .plm-proof-layout { grid-template-columns: 1fr; }
  .plm-compare-foot { grid-template-columns: 1fr; }
  .plm-compare-foot .plm-framed { max-width: 520px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .plm-hero { min-height: auto; }
  .plm-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .plm-species-row { grid-template-columns: 1fr; gap: var(--space-8); }
  .plm-species-row:nth-child(even) .plm-species-photo { order: 0; }
  .plm-species-row:nth-child(even) .plm-species-cards { order: 1; }
  .plm-compare { grid-template-columns: 1fr; }
  .plm-cost-grid { grid-template-columns: 1fr; }
  .plm-ledger::before { display: none; }
  .plm-frond { grid-template-columns: auto 1fr; }
  .plm-frond .plm-status { grid-column: 2; justify-self: start; }
  .plm-compare-note { padding: var(--space-5) var(--space-5); }
}
@media (max-width: 600px) {
  .plm-timing { grid-template-columns: 1fr; }
  .plm-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .plm-species-card { flex-direction: column; }
  .plm-frond { grid-template-columns: 1fr; gap: var(--space-3); }
  .plm-frond .plm-status { grid-column: 1; }
  .plm-clock-row + .plm-clock-row { margin-top: var(--space-8); }
}
</style>

<article class="service-article">

<!-- ============ HERO (C1.4) ============ -->
<section class="plm-hero has-hero-bg" aria-label="Palm tree trimming in DeLand, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="plm-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Palm Tree Trimming</span>
    </nav>

    <span class="hero-eyebrow">Palm Trimming &middot; DeLand, FL</span>

    <h1>Palm Tree Trimming in DeLand, FL: <span class="text-accent">Clean Crowns Without the Hurricane Cut</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving homeowners and businesses across Volusia County. Palm tree trimming removes the dead and browning fronds, seed pods and loose boots from a palm's crown while leaving every green frond in place. Free written estimates within 24 hours, fronds chipped and hauled the same visit.</p>

    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Palm Trimming Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> Owner-Operated Crew</span>
      <span class="hero-trust-item"><?php echo icon('leaf'); ?> Green Fronds Stay On</span>
      <span class="hero-trust-item"><?php echo icon('truck'); ?> Chipped &amp; Hauled Same Visit</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-palm-tree-trimming';
    $heroFormService  = 'Palm Tree Trimming';
    $heroFormHeading  = 'Get a Free Palm Trimming Estimate';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ FROND-BY-FROND GUIDE — 01 (signature) ============ -->
<section class="numbered-section plm-guide-section" data-num="01" aria-label="What comes off a palm during a trim">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Frond by Frond</span>
      <h2>What actually comes off a palm during a proper trim?</h2>
      <p class="answer-block">God's Country Tree Service removes three things in a proper palm trim: fully brown fronds, seed pods or flower stalks, and leaf boots that are already loose. Every green frond stays on the palm, because green fronds are what feed it. The cut guide below walks the crown from the bottom up and says what stays, what goes, and why.</p>
    </div>

    <div class="plm-guide">
      <div class="plm-guide-intro" data-animate>
        <h3>The horizontal is the line</h3>
        <p>Picture the crown as a clock face with the trunk at the center. UF/IFAS guidance is to take nothing from above the horizontal, the <strong>9 o'clock to 3 o'clock</strong> line. Fronds hanging below it are the candidates; everything pointing up or out stays and keeps feeding the palm.</p>
        <p>That one rule is the difference between a palm that stands up to a Volusia County summer and one that has been cut into a feather duster.</p>

        <div class="plm-clock" aria-label="The 9 o'clock to 3 o'clock trimming rule">
          <div class="plm-clock-row">
            <span class="plm-clock-num">12</span>
            <span class="plm-clock-label plm-clock-label--keep">Above the line: green fronds stay</span>
            <span class="plm-clock-num" aria-hidden="true">&nbsp;</span>
          </div>
          <div class="plm-clock-row">
            <span class="plm-clock-num">9</span>
            <span class="plm-clock-label">The horizontal</span>
            <span class="plm-clock-num">3</span>
          </div>
          <div class="plm-clock-row">
            <span class="plm-clock-num" aria-hidden="true">&nbsp;</span>
            <span class="plm-clock-label plm-clock-label--off">Below the line: brown fronds, pods, loose boots come off</span>
            <span class="plm-clock-num">6</span>
          </div>
          <p class="plm-clock-caption">The crown read as a clock face, trunk at the center. The written estimate names each palm and what comes off it, so you can hold the crew to this line.</p>
        </div>
      </div>

      <div class="plm-ledger" data-p1-dynamic>
        <?php foreach ($frondGuide as $i => $row): ?>
        <article class="plm-frond plm-frond--<?php echo e($row['kind']); ?> reveal-delay-<?php echo ($i % 5) + 1; ?>" data-animate="right">
          <span class="plm-frond-num" aria-hidden="true"><?php echo e($row['num']); ?></span>
          <div>
            <h3><?php echo e($row['title']); ?></h3>
            <p><?php echo e($row['text']); ?></p>
          </div>
          <span class="plm-status"><?php echo icon($row['kind'] === 'keep' ? 'check' : ($row['kind'] === 'off' ? 'scissors' : 'circle-dot')); ?> <?php echo e($row['status']); ?></span>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-cream)" opacity="0.35" points="0,80 1200,0 1200,80"/><polygon fill="var(--color-cream)" points="0,80 1200,24 1200,80"/></svg>
</div>

<!-- ============ WHICH PALMS — 02 ============ -->
<section class="numbered-section plm-species-section" data-num="02" aria-label="Palm species the crew trims">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Queens, Sabals, Fans &amp; Sagos</span>
      <h2>Which palms does God's Country trim in DeLand yards?</h2>
      <p class="answer-block">God's Country Tree Service trims queen palms, sabal (cabbage) palms, fan palms and palmettos, and sago palms across Volusia County. Each species wants something different: queens need the most regular attention, sabals the least. Palms are one of the three tree types the crew works on along with oaks and pines, so one visit can cover the whole yard.</p>
    </div>

    <div class="plm-species-rows" data-p1-dynamic>
      <?php foreach ($palmRows as $r => $row): ?>
      <div class="plm-species-row">
        <figure class="plm-framed plm-species-photo<?php echo $r % 2 === 1 ? ' plm-framed--flip' : ''; ?>" data-animate>
          <?php echo p1_picture($bodyPhotos[$row['photo']]['src'], $bodyPhotos[$row['photo']]['alt'], (int) $row['w'], (int) $row['h'], '(max-width: 768px) 100vw, 800px'); ?>
          <figcaption><?php echo $bodyPhotos[$row['photo']]['cap']; ?></figcaption>
        </figure>
        <div class="plm-species-cards">
          <?php foreach ($row['species'] as $i => $sp): ?>
          <article class="plm-species-card reveal-delay-<?php echo $i + 1; ?>" data-animate="right">
            <div class="plm-species-icon"><?php echo icon($sp['icon']); ?></div>
            <div>
              <h3><?php echo e($sp['title']); ?></h3>
              <p><?php echo e($sp['text']); ?></p>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: torn organic edge (cream → white) -->
<div class="svg-divider svg-divider--flush svg-divider--on-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path fill="var(--color-white)" opacity="0.4" d="M0,46 L55,36 L120,52 L190,30 L260,50 L330,38 L400,56 L470,32 L540,48 L610,36 L680,54 L750,34 L820,50 L890,40 L960,58 L1030,32 L1100,48 L1160,38 L1200,52 L1200,80 L0,80 Z"/><path fill="var(--color-white)" d="M0,58 L60,50 L120,62 L190,44 L260,60 L330,50 L400,66 L470,46 L540,58 L610,50 L680,64 L750,48 L820,60 L890,52 L960,68 L1030,46 L1100,58 L1160,52 L1200,62 L1200,80 L0,80 Z"/></svg>
</div>

<!-- ============ HURRICANE CUT VS PROPER TRIM — 03 ============ -->
<section class="numbered-section plm-compare-section" data-num="03" aria-label="Hurricane cut versus a proper palm trim">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Cut We Turn Down</span>
      <h2>What is a hurricane cut, and why does it hurt a palm?</h2>
      <p class="answer-block">A hurricane cut strips a palm to a few upright fronds for storm safety, and God's Country Tree Service turns that cut down because it does the opposite. Hurricane-cut palms across Volusia County end up weaker and slower-growing because the green fronds that fed them are gone. A proper trim takes the dead weight and leaves the crown full.</p>
    </div>

    <div class="plm-compare">
      <div class="plm-compare-col plm-compare-col--them" data-animate>
        <div class="plm-compare-head">
          <?php echo icon('thumbs-down'); ?>
          <h3>What the wrong crew does</h3>
        </div>
        <ul class="plm-compare-list" data-p1-dynamic>
          <?php foreach ($comparison as $pair): ?>
          <li><?php echo icon('x'); ?> <span><?php echo e($pair['them']); ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="plm-compare-col plm-compare-col--us" data-animate="right">
        <div class="plm-compare-head">
          <?php echo icon('thumbs-up'); ?>
          <h3>How God's Country trims a palm</h3>
        </div>
        <ul class="plm-compare-list" data-p1-dynamic>
          <?php foreach ($comparison as $pair): ?>
          <li><?php echo icon('check-circle'); ?> <span><?php echo e($pair['us']); ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="plm-compare-foot">
      <p class="plm-compare-note" data-animate>
        <strong>If the request amounts to skinning a healthy palm down to a feather duster, we turn the work down</strong> and explain why at the estimate visit.
        <small>Real storm prep is taking the dead fronds and pods off before the season opens, not stripping the crown. Our <a href="/blog/hurricane-prep-tree-trimming-deland/">hurricane-prep trimming guide</a> covers what to have done, and when, for palms, oaks and pines.</small>
      </p>
      <figure class="plm-framed plm-framed--flip plm-framed--wide" data-animate="right">
        <?php echo p1_picture($bodyPhotos['bucket']['src'], $bodyPhotos['bucket']['alt'], 800, 600, '(max-width: 768px) 100vw, 520px'); ?>
        <figcaption><?php echo $bodyPhotos['bucket']['cap']; ?></figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → dark) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-dark)" opacity="0.35" points="0,0 1200,80 0,80"/><polygon fill="var(--color-dark)" points="0,24 1200,80 0,80"/></svg>
</div>

<!-- ============ TIMING — 04 (dark band) ============ -->
<section class="plm-timing-section" aria-label="When to trim palms in Central Florida">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Palm Calendar</span>
      <h2>When is the best time to trim palm trees in Central Florida?</h2>
      <p class="answer-block">God's Country Tree Service books most palm trimming before hurricane season opens June 1, the best time in Central Florida, so dead fronds and seed pods are off the crown before the first storm. Queen palms get booked after they flower, when the seed stalks are up but the pods have not dropped. Most palms want one visit a year.</p>
    </div>

    <div class="plm-timing" data-p1-dynamic>
      <?php foreach ($timing as $i => $when): ?>
      <article class="plm-when<?php echo $i === 0 ? ' plm-when--best' : ''; ?> reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <?php if (!empty($when['badge'])): ?>
        <span class="plm-when-badge"><?php echo e($when['badge']); ?></span>
        <?php endif; ?>
        <span class="plm-when-icon"><?php echo icon($when['icon']); ?></span>
        <h3><?php echo e($when['title']); ?></h3>
        <p><?php echo e($when['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>

    <p class="plm-timing-note" data-animate>Palms are the easy part of the calendar; oaks and pines have their own windows. The <a href="/blog/best-time-trim-trees-florida/">best time to trim trees in Florida</a>, species by species, is laid out in our guide.</p>
  </div>
</section>

<!-- Divider: torn organic edge (dark → cream) -->
<div class="svg-divider svg-divider--flush svg-divider--on-dark" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path fill="var(--color-cream)" opacity="0.4" d="M0,40 L60,52 L120,34 L190,54 L260,38 L330,56 L400,36 L470,52 L540,40 L610,58 L680,38 L750,54 L820,42 L890,56 L960,36 L1030,54 L1100,40 L1160,52 L1200,42 L1200,80 L0,80 Z"/><path fill="var(--color-cream)" d="M0,54 L60,62 L120,48 L190,64 L260,52 L330,66 L400,50 L470,62 L540,54 L610,68 L680,52 L750,64 L820,56 L890,66 L960,50 L1030,64 L1100,54 L1160,62 L1200,56 L1200,80 L0,80 Z"/></svg>
</div>

<!-- ============ COST — 05 ============ -->
<section class="numbered-section plm-cost-section" data-num="05" aria-label="Palm tree trimming cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does palm tree trimming cost in DeLand, FL?</h2>
      <p class="answer-block">Palm tree trimming cost from God's Country Tree Service depends on the palm's height, how the crew reaches it, how many palms are on the list, and what is underneath them. Each palm is priced after a site visit, and the written estimate names every palm, what comes off it, and the chipping and hauling. Visit and quote are free.</p>
    </div>

    <div class="plm-cost-grid" data-p1-dynamic>
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="plm-cost-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <span class="plm-cost-icon"><?php echo icon($factor['icon']); ?></span>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ PROOF / NEAR ME — 06 ============ -->
<section class="numbered-section plm-proof-section" data-num="06" aria-label="Local palm trimming proof">
  <div class="container">
    <div class="plm-proof-layout">
      <figure class="plm-framed plm-framed--square" data-animate>
        <?php echo p1_picture($bodyPhotos['sago']['src'], $bodyPhotos['sago']['alt'], 800, 800, '(max-width: 768px) 100vw, 800px'); ?>
        <figcaption><?php echo $bodyPhotos['sago']['cap']; ?></figcaption>
      </figure>
      <div class="plm-proof-copy" data-animate="right">
        <span class="eyebrow-label">Local Proof</span>
        <h2>Who does palm tree trimming near me in DeLand, FL?</h2>
        <p class="answer-block">God's Country Tree Service does palm tree trimming from its base in DeLand, FL. One owner-operated crew, bucket truck and chipper cover roughly 50 miles of Volusia County, including DeLeon Springs, Lake Helen, Orange City, Deltona and DeBary. From the historic downtown blocks to the Stetson University area, palm work is one of the <a href="/services/">tree services the same crew runs</a>.</p>
        <div class="plm-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'DeLeon Springs', 'Lake Helen', 'Orange City', 'Deltona', 'DeBary'] as $area): ?>
          <span class="plm-area-chip"><?php echo icon('map-pin'); ?> <?php echo e($area); ?></span>
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
<section class="numbered-section plm-faq-section" data-num="07" aria-label="Palm trimming questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do Volusia County homeowners ask before booking palm trimming?</h2>
      <p class="answer-block">Volusia County homeowners ask God's Country Tree Service whether sabals need trimming at all, why a palm is turning yellow, and whether the boots can come off the trunk. They also ask about climbing spikes, where the fronds go, and how often a palm should be trimmed. Each answer below is specific to palms in and around DeLand.</p>
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
<section class="plm-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Beyond the Palms</span>
      <h2>What other tree services do DeLand property owners pair with palm trimming?</h2>
      <p class="answer-block">God's Country Tree Service usually books palm trimming alongside the rest of the yard: the crew covers the oaks and pines on the same visit with <a href="/services/tree-trimming-services/">tree trimming</a>, replaces a palm that has died or outgrown its spot with <a href="/services/tree-planting-shrub-installation/">tree and shrub planting</a>, and handles <a href="/services/tree-removal/">tree removal</a> when a palm or a hardwood has to come out entirely.</p>
    </div>

    <?php renderServiceCards(['tree-trimming-services', 'tree-planting-shrub-installation', 'tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="plm-closing-cta" aria-label="Get a palm trimming estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free Visit &middot; Written Quote</span>
    <h2>Ready to Get Your Palms Cleaned Up Before the Next Storm Season Tests Them?</h2>
    <p class="answer-block"><?php echo e($siteName); ?> will walk the property, recommend only the trimming each palm actually needs, and put the price in writing, palm by palm. Tell us which palms have gotten ahead of you: the queen dropping seed pods on the drive, the fan palm across the front walk, the row of sabals along the fence.</p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Palm Trimming Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
