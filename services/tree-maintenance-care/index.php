<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/tree-maintenance-care/index.php — Tree Maintenance & Care
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Angle: prevention economics + seasonal rhythm around hurricane season
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'tree-maintenance-care';

// V2.1 trade-noun title (60 chars) + V2.2 CTR meta (152 chars)
$pageTitle       = "Tree Maintenance in DeLand, FL | God's Country Tree Service";
$pageDescription = 'Tree maintenance in DeLand, FL — inspections, preventative care & storm-readiness from a licensed & insured tree service. Schedule a free assessment today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062763583-cvnei3-503812193_4046117498942165_6962620168915463637_n.webp'; // oak over pool enclosure, portrait — center crop
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'canopy' => [
        'src' => $imgBase . '1784062751583-ixwxr0-57210655_2285599351660664_7235797249714814976_n.webp',
        'alt' => 'Cleanly lifted, vase-shaped tree canopy over a DeLand, FL street',
    ],
    'backyard' => [
        'src' => $imgBase . '1784062748583-jkbp6v-56461057_2279726332247966_3162728189227171840_n.webp',
        'alt' => 'Clean oak-framed backyard after tree work at a DeLand, FL home',
    ],
    'stump' => [
        'src' => $imgBase . '1784062756583-g1q71x-162462401_2868738963346697_5761624918012580393_n.webp',
        'alt' => 'Flush-cut stump and sawdust after removing a large tree in DeLand, FL',
    ],
];

// ---- Prevention economics: planned care vs the emergency call ----
$planPoints = [
    'You pick the date — a calm weekday, not the night a storm makes landfall',
    'Small preventative cuts on a healthy tree, priced in writing up front',
    'Problems caught at the "watch it" stage, while fixing them is still cheap',
    'The tree stays — shading the yard instead of leaving a stump in it',
];
$emergencyPoints = [
    'The weather sets the schedule, usually at 2 a.m. in the rain',
    'Emergency rates, plus whatever the roof, fence, or pool screen costs',
    'Insurance paperwork instead of a maintenance invoice',
    'The tree is gone entirely — decades of shade, removed in an afternoon',
];

// ---- What a maintenance visit includes (C7.1 alternating timeline) ----
$careSteps = [
    ['icon' => 'search',        'title' => 'Walk-through inspection',        'text' => 'Every tree gets looked at from root flare to crown: lean, deadwood, fungus, cavities, weak unions, and limbs creeping toward the roof or pool screen. You walk with us if you want the tour.'],
    ['icon' => 'scissors',      'title' => 'Preventative pruning & deadwood', 'text' => 'We take out the dead and structurally weak wood — the pieces that come down on their own during the first tropical system — while they are still small, cheap cuts.'],
    ['icon' => 'wind',          'title' => 'Canopy thinning & clearance',     'text' => 'Selective thinning lets wind pass through a live oak instead of pushing on it like a sail, and keeps limbs clear of rooflines, screen enclosures, and driveways.'],
    ['icon' => 'sprout',        'title' => 'Root zone & soil care',           'text' => 'DeLand\'s sandy Central Florida soil drains fast and holds few nutrients. We check mulch depth, root-zone health, and flag trees that would benefit from fertilization — only when they actually need it.'],
    ['icon' => 'clipboard-list','title' => 'Written report & watch list',     'text' => 'You get a plain-language summary: what we did, what we are watching, and when the crew should come back. No mystery, no upsell — just a calendar you approve.'],
];

// ---- Seasonal care calendar (signature 4-quarter grid) ----
$quarters = [
    [
        'label'  => 'Q1', 'months' => 'January – March', 'title' => 'Dormant-season structure',
        'icon'   => 'git-branch',
        'tasks'  => ['Structural pruning while growth is slow', 'Big corrective cuts heal cleanly', 'Plan the year tree by tree'],
        'accent' => false,
    ],
    [
        'label'  => 'Q2', 'months' => 'April – June', 'title' => 'Storm-readiness push',
        'icon'   => 'shield',
        'tasks'  => ['Canopy thinning & weight reduction', 'Clearance over roofs & pool screens', 'Done before hurricane season opens June 1'],
        'accent' => true,
    ],
    [
        'label'  => 'Q3', 'months' => 'July – September', 'title' => 'Peak-season watch',
        'icon'   => 'cloud-lightning',
        'tasks'  => ['Post-storm inspections after named systems', 'Hangers & cracked limbs removed fast', 'Priority response for plan customers'],
        'accent' => false,
    ],
    [
        'label'  => 'Q4', 'months' => 'October – December', 'title' => 'Recovery & renewal',
        'icon'   => 'leaf',
        'tasks'  => ['Repair pruning once the season closes', 'Mulch refresh for the dry months', 'Best planting window of the year'],
        'accent' => false,
    ],
];

// ---- Cost factors ----
$costFactors = [
    ['title' => 'How many trees, how big',   'text' => 'A yard with three young palms and a yard with eight mature live oaks are different plans. Tree count, size, and condition set the crew time each visit needs.'],
    ['title' => 'Scope of each visit',        'text' => 'Inspection-only check-ins cost less than visits that include pruning, thinning, and haul-off. Your written plan spells out exactly what each stop covers.'],
    ['title' => 'How often we come',          'text' => 'Once a year keeps most DeLand yards honest; twice a year suits older oaks and storm-battered lots. You set the rhythm, and you can change it any time.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'How often should trees in DeLand be inspected?',
        'a' => 'At least once a year for most yards, ideally in spring so anything we find can be corrected before hurricane season opens June 1. Older live oaks, trees that took storm damage last season, and anything leaning over a house or pool enclosure deserve a second look in the fall. Plan customers get those check-ins on a set calendar automatically.',
    ],
    [
        'q' => 'When is the best time of year for maintenance pruning?',
        'a' => 'Winter dormancy is best for structural work — big corrective cuts heal cleanly while growth is slow. Spring is for storm prep: thinning and weight reduction finished before June 1. We avoid heavy pruning at the height of storm season, because a freshly opened canopy needs time to adjust before it faces real wind.',
    ],
    [
        'q' => 'Do palms need the same maintenance as oaks?',
        'a' => 'No — and over-trimming is the most common palm mistake we fix. Palms need dead and dying fronds removed, not the aggressive "hurricane cut" that strips them to a feather duster and actually weakens them. Nutrient problems in sandy soil show up in palm fronds first, so our inspections catch deficiencies early.',
    ],
    [
        'q' => 'Can maintenance really prevent storm damage?',
        'a' => 'It dramatically reduces it — no honest tree service will promise more than that. A thinned canopy lets wind pass through instead of catching it like a sail, and deadwood that would have become airborne is already gone. Most of the storm damage we clean up across Volusia County traces back to trees nobody had touched in years.',
    ],
    [
        'q' => 'What happens if you find a serious problem during a visit?',
        'a' => 'We show it to you, explain the options, and put a price on each one in writing. Sometimes cabling or reduction pruning saves the tree; sometimes removal is the honest answer. Either way you decide on your schedule — that is the entire point of finding problems during an inspection instead of after a storm.',
    ],
    [
        'q' => 'Do you offer maintenance plans in Deltona and Orange City?',
        'a' => 'Yes. From our DeLand home base the crew runs maintenance routes through Deltona, Orange City, DeBary, Lake Helen, and communities within roughly 50 miles across Volusia County. Same crew, same equipment, same written plan — the calendar just gets built around your address.',
    ],
    [
        'q' => 'Is fertilization included in tree maintenance?',
        'a' => 'When a tree needs it, yes — and only then. Sandy Central Florida soil drains nutrients quickly, so deficiencies are common, but blanket fertilizing every tree is a way to spend money, not a way to grow healthy trees. We recommend feeding when the inspection shows a genuine deficiency and skip it when it does not.',
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
        ['name' => 'Tree Maintenance & Care'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Maintenance & Care — page-specific styles (.mnt-)
   Techniques: C1.4 page hero, C7.1 alternating timeline,
   C5.1 numbered section watermarks, C3.1 diagonal divider,
   C3.4 organic torn divider, C7 signature 4-quarter calendar,
   C4.1 radial glow on dark sections.
   All values from tokens — no hardcoded colors/shadows.
   ============================================================ */

/* ---- C1.4 Page hero: portrait photo (center 30% crop) + gradient + noise ---- */
.mnt-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 30%;
  overflow: hidden;
}
.mnt-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 70%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 88%, transparent) 100%
  );
}
.mnt-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.mnt-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.mnt-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.mnt-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.mnt-breadcrumb a:hover { color: var(--color-accent); }
.mnt-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.mnt-hero .hero-eyebrow {
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
.mnt-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.mnt-hero h1 .text-accent { color: var(--color-accent); }
.mnt-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.mnt-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.mnt-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.mnt-hero .hero-trust-item svg,
.mnt-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- C5.1 Numbered section watermarks ---- */
.mnt-numbered { position: relative; }
.mnt-numbered::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-4);
  left: clamp(1rem, 4vw, 3rem);
  font-family: var(--font-heading);
  font-size: clamp(5rem, 12vw, 9rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 6%, transparent);
  pointer-events: none;
  z-index: 0;
}
.mnt-numbered--dark::before { color: color-mix(in srgb, var(--color-white) 5%, transparent); }
.mnt-numbered > .container { position: relative; z-index: 1; }

/* ---- Section title block (shared idiom, adapted) ---- */
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

/* ---- Prevention economics: contrast panels + big stat ---- */
.mnt-econ-section { background: var(--color-white); }
.mnt-econ-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 1000px;
  margin: 0 auto var(--space-12);
  align-items: stretch;
}
.mnt-plan-card {
  position: relative;
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  background: var(--color-light);
  border: 1px solid var(--color-gray-light);
}
.mnt-plan-card--us {
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
  border: 1px solid color-mix(in srgb, var(--color-primary) 25%, transparent);
  box-shadow: var(--shadow-lg);
}
.mnt-plan-card h3 {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.mnt-plan-card--us h3 { color: var(--color-primary); }
.mnt-plan-card h3 svg, .mnt-plan-card h3 i { width: 22px; height: 22px; flex-shrink: 0; }
.mnt-plan-card--us h3 svg, .mnt-plan-card--us h3 i { color: var(--color-accent); }
.mnt-plan-card--them h3 svg, .mnt-plan-card--them h3 i { color: var(--color-gray); }
.mnt-plan-tag {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-gray);
  margin-bottom: var(--space-5);
}
.mnt-plan-card--us .mnt-plan-tag { color: var(--color-accent); }
.mnt-plan-card ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  margin: 0;
  padding: 0;
}
.mnt-plan-card li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.mnt-plan-card li svg, .mnt-plan-card li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.mnt-plan-card--them li svg, .mnt-plan-card--them li i { color: var(--color-gray); }
.mnt-plan-card--us li svg, .mnt-plan-card--us li i { color: var(--color-accent); }
.mnt-econ-footer {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-12);
  align-items: center;
  max-width: 1000px;
  margin: 0 auto;
}
.mnt-econ-footer > p {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  margin: 0;
  max-width: 58ch;
}
.mnt-econ-footer > p strong { color: var(--color-primary); }
.mnt-stat-card {
  text-align: center;
  padding: var(--space-8) var(--space-10);
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.mnt-stat-card::before {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.mnt-stat-card .mnt-big-number {
  font-family: var(--font-heading);
  font-size: clamp(3.4rem, 7vw, 5.5rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.mnt-stat-card .mnt-big-number span { color: var(--color-accent); }
.mnt-stat-card .mnt-big-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-2);
}

/* ---- C7.1 Alternating timeline: what a visit includes ---- */
.mnt-included-section { background: var(--color-cream); }
.mnt-timeline {
  position: relative;
  max-width: 920px;
  margin: 0 auto;
}
.mnt-timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-primary-dark));
}
.mnt-tl-item {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  gap: var(--space-8);
  margin-bottom: var(--space-10);
}
.mnt-tl-item:last-child { margin-bottom: 0; }
.mnt-tl-item:nth-child(odd)  .mnt-tl-card { grid-column: 1; text-align: right; border-right: 4px solid var(--color-accent); }
.mnt-tl-item:nth-child(even) .mnt-tl-card { grid-column: 3; text-align: left;  border-left:  4px solid var(--color-accent); }
.mnt-tl-item:nth-child(odd)  .mnt-tl-empty { grid-column: 3; }
.mnt-tl-item:nth-child(even) .mnt-tl-empty { grid-column: 1; }
.mnt-tl-node {
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
}
.mnt-tl-node svg, .mnt-tl-node i { width: 22px; height: 22px; }
.mnt-tl-card {
  grid-row: 1;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6) var(--space-8);
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.mnt-tl-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-lg); }
.mnt-tl-step {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-1);
}
.mnt-tl-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.mnt-tl-card p {
  margin: 0;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}
.mnt-tl-empty { grid-row: 1; }

/* ---- Signature: seasonal 4-quarter care calendar (dark, C4.1 glow) ---- */
.mnt-calendar-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.mnt-calendar-section::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 30% 0%, color-mix(in srgb, var(--color-primary) 38%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.mnt-calendar-section .container { position: relative; z-index: 1; }
.mnt-calendar-section .section-title h2 { color: var(--color-white); }
.mnt-calendar-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.mnt-calendar-section .eyebrow-label { color: var(--color-accent); }
.mnt-quarters {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.mnt-quarter {
  position: relative;
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-6);
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  overflow: hidden;
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.mnt-quarter:hover { transform: translateY(-4px); border-color: color-mix(in srgb, var(--color-accent) 45%, transparent); }
.mnt-quarter--accent {
  background: color-mix(in srgb, var(--color-primary) 30%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 50%, transparent);
  box-shadow: var(--shadow-xl);
}
.mnt-quarter::before {
  content: attr(data-q);
  position: absolute;
  top: calc(-1 * var(--space-4));
  right: var(--space-2);
  font-family: var(--font-heading);
  font-size: clamp(4rem, 7vw, 6rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-white) 7%, transparent);
  pointer-events: none;
}
.mnt-quarter--accent::before { color: color-mix(in srgb, var(--color-accent) 18%, transparent); }
.mnt-quarter-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-white) 10%, transparent);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.mnt-quarter-icon svg, .mnt-quarter-icon i { width: 24px; height: 24px; }
.mnt-quarter-months {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-accent);
  margin-bottom: var(--space-1);
}
.mnt-quarter h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.mnt-quarter ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  margin: 0;
  padding: 0;
}
.mnt-quarter li {
  display: flex;
  gap: var(--space-2);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
}
.mnt-quarter li svg, .mnt-quarter li i {
  width: 15px;
  height: 15px;
  flex-shrink: 0;
  margin-top: 3px;
  color: var(--color-accent);
}
.mnt-season-note {
  margin: var(--space-10) auto 0;
  max-width: 760px;
  text-align: center;
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 70%, transparent);
}
.mnt-season-note strong { color: var(--color-accent); }

/* ---- Cost factors ---- */
.mnt-cost-section { background: var(--color-white); }
.mnt-cost-factors {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.mnt-cost-factor {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.mnt-cost-factor:nth-child(even) { border-top-color: var(--color-accent); }
.mnt-cost-factor:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.mnt-cost-factor h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); text-wrap: balance; }
.mnt-cost-factor p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof: staggered gallery + review badges ---- */
.mnt-proof-section { background: var(--color-light); }
.mnt-proof-gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-bottom: var(--space-10);
  align-items: start;
}
.mnt-proof-gallery figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.mnt-proof-gallery figure:nth-child(2) { margin-top: var(--space-10); }
.mnt-proof-gallery figure:nth-child(3) { margin-top: var(--space-5); }
.mnt-proof-gallery img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.mnt-proof-gallery figure:nth-child(2) img { aspect-ratio: 4 / 3; }
.mnt-proof-gallery figure:hover img { transform: scale(1.04); }
.mnt-proof-gallery figcaption {
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

/* ---- FAQ + related ---- */
.mnt-faq-section { background: var(--color-white); }
.mnt-related-section { background: var(--color-light); }

/* ---- Closing CTA (C4.1 radial glow) ---- */
.mnt-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.mnt-closing-cta::before {
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
.mnt-closing-cta .container { position: relative; z-index: 1; }
.mnt-closing-cta h2 {
  color: var(--color-white);
  max-width: 28ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.mnt-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.mnt-closing-cta .hero-actions {
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

/* ---- SVG dividers (2 distinct shapes: diagonal C3.1 + organic torn C3.4) ---- */
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
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .mnt-quarters { grid-template-columns: repeat(2, 1fr); }
  .mnt-econ-footer { grid-template-columns: 1fr; gap: var(--space-8); }
  .mnt-stat-card { max-width: 380px; margin: 0 auto; }
  .mnt-proof-gallery { grid-template-columns: repeat(2, 1fr); }
  .mnt-proof-gallery figure:nth-child(3) { margin-top: 0; }
}
@media (max-width: 767px) {
  .mnt-hero { min-height: auto; }
  .mnt-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .mnt-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .mnt-econ-grid { grid-template-columns: 1fr; }
  .mnt-timeline::before { display: none; }
  .mnt-tl-item { grid-template-columns: auto 1fr; gap: var(--space-4); margin-bottom: var(--space-6); }
  .mnt-tl-node { grid-column: 1; width: 44px; height: 44px; }
  .mnt-tl-item:nth-child(odd) .mnt-tl-card,
  .mnt-tl-item:nth-child(even) .mnt-tl-card {
    grid-column: 2;
    text-align: left;
    border-left: 4px solid var(--color-accent);
    border-right: none;
  }
  .mnt-tl-empty { display: none; }
}
@media (max-width: 600px) {
  .mnt-quarters, .mnt-cost-factors, .mnt-proof-gallery { grid-template-columns: 1fr; }
  .mnt-proof-gallery figure:nth-child(2) { margin-top: 0; }
  .mnt-hero .hero-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="mnt-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree maintenance and care in DeLand, Florida">
  <div class="container">
    <nav class="mnt-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Tree Maintenance &amp; Care</span>
    </nav>

    <span class="hero-eyebrow">Tree Maintenance &middot; DeLand, FL</span>

    <h1>Tree Maintenance &amp; Care in DeLand, FL &mdash; <span class="text-accent">Year-Round Tree Service Plans</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Volusia County since <?php echo e($yearEstablished); ?>. Our maintenance plans put your trees on a calendar &mdash; inspections, preventative pruning, and storm-readiness thinning &mdash; so problems get fixed while they're still small, scheduled cuts instead of midnight emergencies.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Maintenance Assessment</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="calendar-check"></i> Scheduled Care Plans</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PREVENTION ECONOMICS — 01 ============ -->
<section class="mnt-numbered mnt-econ-section" data-num="01" aria-label="Why preventative tree care pays for itself">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Math of Prevention</span>
      <h2>How does preventative tree health care avoid emergency removals?</h2>
      <p class="answer-block">Preventative tree health care catches failure early &mdash; deadwood, cavities, weak unions, root stress &mdash; and corrects it with small scheduled cuts instead of an emergency crew call. A maintained live oak sheds far less in a storm; a neglected one becomes the midnight removal over your pool screen enclosure. Routine visits cost a fraction of that night.</p>
    </div>

    <div class="mnt-econ-grid">
      <div class="mnt-plan-card mnt-plan-card--us" data-animate>
        <h3><i data-lucide="calendar-check"></i> The maintenance visit</h3>
        <span class="mnt-plan-tag">Planned &middot; Predictable &middot; The tree survives</span>
        <ul>
          <?php foreach ($planPoints as $point): ?>
          <li><i data-lucide="check"></i> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="mnt-plan-card mnt-plan-card--them" data-animate="right">
        <h3><i data-lucide="siren"></i> The emergency call</h3>
        <span class="mnt-plan-tag">Unplanned &middot; Expensive &middot; The tree is gone</span>
        <ul>
          <?php foreach ($emergencyPoints as $point): ?>
          <li><i data-lucide="x"></i> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div class="mnt-econ-footer">
      <p data-animate>Most of the emergency work we run across Volusia County traces back to the same story: <strong>a tree nobody had looked at in five years</strong>. The deadwood that lands on a roof in August was visible &mdash; and removable for a modest price &mdash; back in April. Maintenance is simply choosing to pay the small bill instead of the big one, and keeping the tree in the bargain.</p>
      <div class="mnt-stat-card" data-animate="right">
        <div class="mnt-big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
        <div class="mnt-big-label">Years Maintaining DeLand Trees</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,8 1200,60"/></svg>
</div>

<!-- ============ WHAT'S INCLUDED — 02 (C7.1 alternating timeline) ============ -->
<section class="mnt-numbered mnt-included-section" data-num="02" aria-label="What ongoing tree care includes">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Every Visit, Start to Finish</span>
      <h2>What do ongoing tree care services include?</h2>
      <p class="answer-block">Ongoing tree care at God's Country includes a walk-through inspection of every tree, preventative pruning and deadwood removal, canopy thinning before hurricane season, mulch and root-zone checks suited to DeLand's sandy soil, and a written report of anything worth watching. One licensed crew handles all of it, on a schedule you approve.</p>
    </div>

    <div class="mnt-timeline" data-p1-dynamic>
      <?php foreach ($careSteps as $i => $step): ?>
      <div class="mnt-tl-item" data-animate>
        <div class="mnt-tl-card">
          <span class="mnt-tl-step">Step <?php echo str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT); ?></span>
          <h3><?php echo e($step['title']); ?></h3>
          <p><?php echo e($step['text']); ?></p>
        </div>
        <div class="mnt-tl-node"><i data-lucide="<?php echo e($step['icon']); ?>"></i></div>
        <div class="mnt-tl-empty" aria-hidden="true"></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: organic torn edge (cream → dark) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L60,42 L130,34 L210,45 L290,31 L370,47 L450,37 L550,45 L650,29 L750,42 L850,34 L950,45 L1050,31 L1140,42 L1200,37 L1200,60 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ SEASONAL CALENDAR — 03 (signature 4-quarter grid) ============ -->
<section class="mnt-numbered mnt-numbered--dark mnt-calendar-section" data-num="03" aria-label="Seasonal tree care calendar for DeLand">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Built Around the Storms</span>
      <h2>What does a seasonal maintenance year look like for DeLand trees?</h2>
      <p class="answer-block">A DeLand maintenance year follows the weather: structural pruning through the dormant winter, canopy thinning and clearance in spring before hurricane season opens June 1, watch-and-respond checks through the peak months, then recovery, mulching, and planting once the season closes November 30. The four quarters below are how we run that calendar.</p>
    </div>

    <div class="mnt-quarters">
      <?php foreach ($quarters as $i => $q): ?>
      <article class="mnt-quarter<?php echo $q['accent'] ? ' mnt-quarter--accent' : ''; ?> reveal-delay-<?php echo $i + 1; ?>" data-q="<?php echo e($q['label']); ?>" data-animate>
        <div class="mnt-quarter-icon"><i data-lucide="<?php echo e($q['icon']); ?>"></i></div>
        <span class="mnt-quarter-months"><?php echo e($q['months']); ?></span>
        <h3><?php echo e($q['title']); ?></h3>
        <ul>
          <?php foreach ($q['tasks'] as $task): ?>
          <li><i data-lucide="chevron-right"></i> <?php echo e($task); ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>

    <p class="mnt-season-note" data-animate>Hurricane season runs <strong>June 1 through November 30</strong> in Central Florida. The whole point of the second quarter is getting your live oaks, slash pines, and palms ready before the first named system spins up &mdash; not after.</p>
  </div>
</section>

<!-- Divider: diagonal (dark → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,52 1200,10 1200,60 0,60"/></svg>
</div>

<!-- ============ COST — 04 ============ -->
<section class="mnt-numbered mnt-cost-section" data-num="04" aria-label="Tree maintenance cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does tree maintenance cost in DeLand, FL?</h2>
      <p class="answer-block">Tree maintenance cost in DeLand depends on how many trees you have, their size and condition, and how often the crew visits. Most homeowners spend far less per year on scheduled care than one emergency removal costs after a storm. Every plan starts with a free written estimate delivered within 24 hours.</p>
    </div>

    <div class="mnt-cost-factors">
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="mnt-cost-factor reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: organic torn edge (white → light) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,43 L145,33 L225,44 L305,30 L395,46 L475,36 L575,44 L675,28 L775,41 L875,33 L965,44 L1065,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-light)"/></svg>
</div>

<!-- ============ PROOF — 05 ============ -->
<section class="mnt-numbered mnt-proof-section" data-num="05" aria-label="Tree maintenance work near DeLand">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Looking for tree maintenance near me in DeLand?</h2>
      <p class="answer-block">If you've been searching for tree maintenance near me in DeLand, this is what routine care looks like nearby: lifted, balanced canopies, yards left clean after every visit, and hazard trees assessed before they choose their own timing. We run maintenance routes within about 50 miles of DeLand, across Volusia County.</p>
    </div>

    <div class="mnt-proof-gallery">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['canopy']['src']); ?>" alt="<?php echo e($bodyPhotos['canopy']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>A maintained canopy: lifted, thinned, and balanced</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($bodyPhotos['backyard']['src']); ?>" alt="<?php echo e($bodyPhotos['backyard']['alt']); ?>" width="800" height="600" loading="lazy">
        <figcaption>How we leave a yard after a maintenance visit</figcaption>
      </figure>
      <figure class="reveal-delay-2" data-animate>
        <img src="<?php echo e($bodyPhotos['stump']['src']); ?>" alt="<?php echo e($bodyPhotos['stump']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>The alternative: a tree that ran out of chances</figcaption>
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

<!-- ============ FAQ — 06 ============ -->
<section class="mnt-numbered mnt-faq-section" data-num="06" aria-label="Tree maintenance questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand property owners ask about tree maintenance?</h2>
      <p class="answer-block">Usually the practical things: how often to inspect, when to schedule around hurricane season, whether older oaks and palms need different care, and what happens when we find a problem. The answers below come from twelve years of maintaining trees across DeLand, Deltona, Orange City, DeBary, and Lake Helen.</p>
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
<section class="mnt-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">One Crew, One Calendar</span>
      <h2>What other tree services do DeLand property owners pair with tree maintenance?</h2>
      <p class="answer-block">Maintenance plans work alongside the rest of the crew's skills: trimming visits between inspections, arborist-grade pruning where structure needs correcting, and a certified eye on any tree that looks like it's declining. Same God's Country crew, one schedule, and one free estimate that covers all of it.</p>
    </div>

    <?php renderServiceCards(['tree-trimming-services', 'tree-pruning-services', 'certified-arborist-services'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="mnt-closing-cta" aria-label="Start a tree maintenance plan">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Put Your Trees on a Schedule Before the Next Hurricane Season?</h2>
    <p class="answer-block">Tell <?php echo e($siteName); ?> which trees worry you &mdash; the moss-draped live oak, the tall slash pines, the palms by the pool screen enclosure &mdash; and we'll walk the property, build a maintenance calendar around them, and put the price in writing within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Maintenance Assessment</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
