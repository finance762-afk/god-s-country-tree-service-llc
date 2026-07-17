<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/certified-arborist-services/index.php
 * Certified Arborist Services — God's Country Tree Service LLC
 * DeLand, FL — Phase 4 editorial service page (spec entry #12)
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'certified-arborist-services';

// V2.1 trade-noun title (58 chars) + V2.2 CTR meta
$pageTitle       = "Certified Arborist DeLand, FL | God's Country Tree Service";
$pageDescription = 'Certified arborist services in DeLand, FL — tree health diagnosis & expert care from a licensed & insured local tree service. Book a free consultation today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062752583-t43g8b-75442896_2456228011264463_6144757071268020224_n.webp'; // harnessed climber rigging on an oak limb (portrait — center crop)
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'rigged' => [
        'src' => $imgBase . '1784062760583-r3tkj0-487167442_1464220628309775_3432880231540439500_n.webp',
        'alt' => 'Climbing arborist rigged with rope and carabiners in an oak over a DeLand, FL lake',
    ],
    'canopy' => [
        'src' => $imgBase . '1784062743583-mfq8fe-46027175_2188053541415246_7752010700460916736_n.webp',
        'alt' => 'Helmeted arborist working in an oak canopy above a DeLand, FL lake',
    ],
    'portrait' => [
        'src' => $imgBase . '1784062746583-ngan68-51461668_2236294529924480_5804998056910782464_n.webp',
        'alt' => "God's Country Tree Service crew member in front of a magnolia in DeLand, FL",
    ],
];

// ---- Symptom cards (what an arborist reads) ----
$treeSymptoms = [
    ['icon' => 'trees',        'title' => 'A thinning oak crown',           'text' => 'Live oaks and laurel oaks that leaf out patchy, drop green leaves out of season, or die back from the tips are signaling stress — drought, root damage, or disease. Which one changes everything about the fix.'],
    ['icon' => 'circle-alert', 'title' => 'Conks at the base of a palm',    'text' => 'Shelf-like growths near the soil line often mean ganoderma butt rot. Once conks appear the decay inside is already advanced — that palm is a removal call, not a treatment plan.'],
    ['icon' => 'leaf',         'title' => 'Yellowing, frizzled fronds',     'text' => 'Palms in sandy Central Florida soil run short on potassium, magnesium, and manganese. Discolored or deformed fronds are usually a nutrition problem you can correct — if it\'s diagnosed before the bud is damaged.'],
    ['icon' => 'shovel',       'title' => 'Decline after construction',     'text' => 'A new pool, addition, or driveway that cut roots two summers ago can kill an oak today. Root damage in DeLand\'s sandy soil shows up slowly — an assessment catches it while there\'s still a tree to save.'],
];

// ---- Arborist services list ----
$arbServices = [
    ['icon' => 'stethoscope',     'title' => 'Tree health assessments',      'text' => 'A ground-up read of root flare, trunk, and canopy for any tree you\'re worried about — with a straight verbal verdict on the spot and a written plan to follow.'],
    ['icon' => 'search',          'title' => 'Disease & pest diagnosis',     'text' => 'Identifying what\'s actually attacking the tree — fungal decay, borers, root rot, or plain old drought stress — before anyone recommends a cut.'],
    ['icon' => 'clipboard-list',  'title' => 'Treatment & care plans',       'text' => 'Species-specific plans: corrective pruning, crown reduction, watering and nutrition changes, and a follow-up schedule the same crew can carry out.'],
    ['icon' => 'wind',            'title' => 'Hurricane-season risk checks', 'text' => 'Pre-season evaluations of the oaks and pines standing over your roof, pool screen enclosure, or driveway — ranked by what actually needs work first.'],
    ['icon' => 'scale',           'title' => 'Save-or-remove verdicts',      'text' => 'The honest call: which trees pruning can fix, and which ones are structural losses. Both answers come in writing with a free estimate within 24 hours.'],
    ['icon' => 'sprout',          'title' => 'Species & planting guidance',  'text' => 'What to plant where in DeLand — matching species to sandy soil, sun, and distance from structures so today\'s sapling isn\'t a removal in twenty years.'],
];

// ---- Diagnosis process steps ----
$diagSteps = [
    ['title' => 'Walk the site, not just the tree',  'text' => 'Soil, drainage, irrigation, recent construction, and what the neighboring trees are doing all shape a diagnosis. In DeLand\'s sandy soil, the story is usually underground before it\'s visible overhead.'],
    ['title' => 'Read the root flare and trunk',     'text' => 'We check for buried root flares, girdling roots, cavities, cracks, and fungal conks — the structural evidence. A mushroom at the base of an oak means something very different than one in the mulch.'],
    ['title' => 'Read the canopy',                   'text' => 'Dieback pattern, leaf color and size, deadwood distribution, and how the tree responded to past pruning. Where a canopy is failing tells us why it\'s failing.'],
    ['title' => 'Give the verdict in plain English', 'text' => 'Save, treat, monitor, or remove — and why. If it\'s treatable you get a plan with real steps. If it isn\'t, we say so instead of selling you fertilizer for a dead tree.'],
    ['title' => 'Put it in writing within 24 hours', 'text' => 'The written estimate covers whatever the verdict calls for — pruning, crown reduction, or removal — priced by the same local crew that will do the work, not a subcontractor.'],
];

// ---- Save vs remove (honest verdict columns) ----
$verdictSave = [
    'Thinning canopy with a healthy trunk and root flare',
    'Palm nutrient deficiencies caught before bud damage',
    'Storm-torn limbs on an otherwise sound oak',
    'Overextended limbs that crown reduction can rebalance',
    'Early root-zone stress after nearby construction',
];
$verdictRemove = [
    'Ganoderma conks at the base of a palm or oak',
    'Major trunk decay, cavities, or a split leader',
    'A worsening lean with lifting soil at the roots',
    'Dead or dying crown over a house or pool enclosure',
    'Severed structural roots that can\'t regrow anchorage',
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'What certifications and insurance does God\'s Country carry?',
        'a' => "Our team holds Florida arborist certifications and maintains full liability and workers' compensation insurance — and we'll show proof of coverage before any work starts. That combination matters in DeLand, where storm season brings out plenty of crews whose paperwork doesn't survive a second look. Ask for documentation at the estimate; we expect you to.",
    ],
    [
        'q' => 'Can a palm with ganoderma butt rot be saved?',
        'a' => "Honestly, no. Once ganoderma conks appear at the base, the decay inside the trunk is already extensive and there is no effective treatment. The responsible move is removal before the palm fails on its own — and we'll advise against replanting another palm in the same spot, since the fungus persists in the soil.",
    ],
    [
        'q' => 'My oak is thinning — does it have to come down?',
        'a' => "Not necessarily. A thinning crown is a symptom, not a verdict. Drought stress, root damage from construction, soil compaction, and disease all produce similar-looking canopies but call for completely different responses. We assess the root flare, trunk, and dieback pattern first — many DeLand oaks recover with corrective pruning and root-zone care instead of removal.",
    ],
    [
        'q' => 'How much does an arborist assessment cost in DeLand?',
        'a' => "The estimate itself is free — we walk the property, give you a verbal read on the spot, and follow with a written quote within 24 hours for whatever the tree actually needs. There's no fee just to find out whether that oak over your roof is a hazard or merely ugly this season.",
    ],
    [
        'q' => 'Do you treat trees, or just recommend removals?',
        'a' => "We do the work, not just the diagnosis. Corrective pruning, crown reduction, deadwood removal, and ongoing maintenance plans all come from the same crew that assessed the tree — and when removal is the honest answer, we handle that too. One local company, one written quote, no hand-off to a subcontractor you've never met.",
    ],
    [
        'q' => 'When should I have my trees assessed before hurricane season?',
        'a' => "Spring — ideally before June 1, when the season officially starts. That leaves time to prune, reduce, or remove flagged trees while schedules are open and prices are calm. Waiting until a storm is named means competing with every other property in Volusia County for the same crews at the same time.",
    ],
    [
        'q' => 'Can you check my trees after a pool or addition was built?',
        'a' => "Yes, and you should. Construction that trenches through a root zone can take one to three years to show up as canopy dieback, especially in sandy soil that drains fast. An assessment after the build — and again a year later — catches root damage while corrective care can still make a difference.",
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
        ['name' => 'Home',                       'url' => '/'],
        ['name' => 'Services',                   'url' => '/services/'],
        ['name' => 'Certified Arborist Services'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Certified Arborist Services — page-specific styles (.arb-)
   Techniques: C1.4 page hero (photo + gradient + noise),
   C7.3 editorial pull quote (signature), C5.4 drop cap,
   C4.3 duotone portrait, credential big-stat positioning,
   C3.2 curved wave + C3.4 torn dividers (+ C3.3 double wave),
   C5.1 numbered watermarks, C4.1 radial glow on dark sections.
   All values from tokens / color-mix — no hardcoded colors.
   ============================================================ */

/* ---- C1.4 Page hero: portrait photo (center-crop) + gradient + noise ---- */
.arb-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 30%; /* portrait source — keep climber in frame */
  overflow: hidden;
}
.arb-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-secondary) 68%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.arb-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.arb-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.arb-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.arb-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.arb-breadcrumb a:hover { color: var(--color-accent); }
.arb-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.arb-hero .hero-eyebrow {
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
.arb-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.arb-hero h1 .text-accent { color: var(--color-accent); }
.arb-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.arb-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.arb-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.arb-hero .hero-trust-item svg,
.arb-hero .hero-trust-item i {
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

/* ---- Shared section-title idiom ---- */
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

/* ---- C7.3 signature: editorial pull quote w/ oversized glyph ---- */
.arb-pullquote {
  position: relative;
  max-width: 860px;
  margin: 0 auto var(--space-12);
  padding: var(--space-8) var(--space-8) var(--space-8) clamp(3.5rem, 8vw, 6rem);
  border-left: 4px solid var(--color-accent);
  font-family: var(--font-accent);
  font-size: clamp(1.35rem, 2.6vw, 2rem);
  font-weight: 500;
  font-style: italic;
  line-height: 1.4;
  letter-spacing: -0.01em;
  color: var(--color-text);
  text-wrap: balance;
}
.arb-pullquote::before {
  content: '\201C';
  position: absolute;
  left: clamp(0.5rem, 2vw, 1.5rem);
  top: calc(-1 * var(--space-2));
  font-family: var(--font-accent);
  font-size: clamp(4.5rem, 9vw, 7rem);
  font-weight: 800;
  font-style: normal;
  line-height: 1;
  color: color-mix(in srgb, var(--color-accent) 55%, transparent);
  pointer-events: none;
}
.arb-pullquote strong { color: var(--color-primary); font-weight: 700; }
.arb-pullquote cite {
  display: block;
  margin-top: var(--space-4);
  font-family: var(--font-body);
  font-style: normal;
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: var(--color-gray);
}

/* ---- C5.4 editorial drop cap lede ---- */
.arb-lede { max-width: 760px; margin: 0 auto var(--space-10); }
.arb-lede .drop-cap::first-letter {
  float: left;
  font-family: var(--font-accent);
  font-size: 4.4rem;
  font-weight: 800;
  line-height: 0.85;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.arb-lede p { color: var(--color-text); font-size: var(--font-size-lg); }

/* ---- Symptom bento (asymmetric 2-col rhythm) ---- */
.arb-symptoms {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: var(--space-5);
}
.arb-symptom {
  position: relative;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.arb-symptom:nth-child(4n+1) { background: var(--color-card-tint-1); }
.arb-symptom:nth-child(4n+2) { background: var(--color-card-tint-3); }
.arb-symptom:nth-child(4n+3) { background: var(--color-card-tint-2); }
.arb-symptom:nth-child(4n)   { background: var(--color-card-tint-neutral); }
.arb-symptom:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.arb-symptom::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 44%;
  height: 3px;
  background: linear-gradient(to right, var(--color-accent), transparent);
}
.arb-symptom .arb-symptom-icon {
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
.arb-symptom .arb-symptom-icon svg,
.arb-symptom .arb-symptom-icon i { width: 24px; height: 24px; }
.arb-symptom h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.arb-symptom p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Expert positioning: duotone portrait + credential stat ---- */
.arb-expert { background: var(--color-cream); }
.arb-expert-grid {
  display: grid;
  grid-template-columns: 1fr 1.35fr;
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: center;
}
/* C4.3 duotone treatment with offset accent frame */
.arb-portrait {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: visible;
  margin: 0;
  max-width: 420px;
}
.arb-portrait::before {
  content: '';
  position: absolute;
  inset: var(--space-4) calc(-1 * var(--space-4)) calc(-1 * var(--space-4)) var(--space-4);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: 0;
}
.arb-portrait-inner {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  z-index: 1;
}
.arb-portrait-inner img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  filter: saturate(0.85) sepia(0.1);
  transition: filter var(--transition-slow), transform var(--transition-slow);
}
.arb-portrait-inner::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, color-mix(in srgb, var(--color-primary) 45%, transparent) 0%, transparent 60%);
  pointer-events: none;
}
.arb-portrait:hover .arb-portrait-inner img { filter: saturate(1) sepia(0); transform: scale(1.03); }
.arb-portrait figcaption {
  position: absolute;
  left: var(--space-5);
  right: var(--space-5);
  bottom: var(--space-4);
  z-index: 2;
  color: var(--color-white);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
/* Credential big-stat positioning: number breaks out of the portrait */
.arb-cred-stat {
  position: absolute;
  top: calc(-1 * var(--space-8));
  right: calc(-1 * var(--space-10));
  z-index: 3;
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  padding: var(--space-5) var(--space-8);
  text-align: center;
}
.arb-cred-stat .big-number {
  font-family: var(--font-accent);
  font-size: clamp(2.6rem, 5vw, 4rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.arb-cred-stat .big-number span { color: var(--color-accent); }
.arb-cred-stat .big-label {
  font-family: var(--font-accent);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-1);
  max-width: 18ch;
}
.arb-expert-copy h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.arb-expert-copy .answer-block {
  color: var(--color-text);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-6);
}
.arb-cred-rows {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  margin: 0;
  padding: 0;
}
.arb-cred-rows li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-4) var(--space-5);
  box-shadow: var(--shadow-sm);
  border-left: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.arb-cred-rows li:nth-child(even) { border-left-color: var(--color-accent); }
.arb-cred-rows li:hover { transform: translateX(4px); box-shadow: var(--shadow-md); }
.arb-cred-rows li svg,
.arb-cred-rows li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.arb-cred-rows li p { margin: 0; font-size: var(--font-size-base); color: var(--color-text); }
.arb-cred-rows li strong { color: var(--color-primary); }

/* ---- Arborist services breakdown ---- */
.arb-services { background: var(--color-white); }
.arb-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  counter-reset: arbsvc;
}
.arb-svc-item {
  position: relative;
  counter-increment: arbsvc;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-light);
  border-top: 3px solid var(--color-primary);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.arb-svc-item:nth-child(even) { border-top-color: var(--color-accent); }
.arb-svc-item:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.arb-svc-item::after {
  content: counter(arbsvc, decimal-leading-zero);
  position: absolute;
  right: var(--space-4);
  top: var(--space-3);
  font-family: var(--font-accent);
  font-size: var(--font-size-3xl);
  font-weight: 800;
  color: color-mix(in srgb, var(--color-primary) 10%, transparent);
  pointer-events: none;
}
.arb-svc-item .arb-svc-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.arb-svc-item .arb-svc-icon svg,
.arb-svc-item .arb-svc-icon i { width: 22px; height: 22px; }
.arb-svc-item h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.arb-svc-item p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Diagnosis walkthrough: vertical connector steps ---- */
.arb-diagnosis { background: var(--color-light); }
.arb-diag-layout {
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: start;
}
.arb-diag-intro h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.arb-diag-intro .answer-block {
  color: var(--color-text);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-6);
}
.arb-diag-intro figure { margin: 0; position: relative; }
.arb-diag-intro img {
  width: 100%;
  aspect-ratio: 4 / 3;
  object-fit: cover;
  object-position: center 35%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.arb-diag-intro figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}
.arb-diag-steps {
  list-style: none;
  position: relative;
  margin: 0;
  padding: 0 0 0 var(--space-10);
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.arb-diag-steps::before {
  content: '';
  position: absolute;
  left: calc(var(--space-4) + 1px);
  top: var(--space-4);
  bottom: var(--space-4);
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-primary));
}
.arb-diag-step {
  position: relative;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-5) var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.arb-diag-step:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
.arb-diag-step::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-10) + var(--space-3));
  top: var(--space-5);
  width: 14px;
  height: 14px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  border: 3px solid var(--color-white);
  box-shadow: var(--shadow-sm);
}
.arb-diag-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.arb-diag-step p { margin: 0; color: var(--color-gray); font-size: var(--font-size-base); }

/* ---- Proof gallery + review badges ---- */
.arb-proof { background: var(--color-white); }
.arb-proof-gallery {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 900px;
  margin: 0 auto var(--space-10);
}
.arb-proof-gallery figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.arb-proof-gallery img {
  width: 100%;
  height: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.arb-proof-gallery figure:hover img { transform: scale(1.04); }
.arb-proof-gallery figcaption {
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
  font-family: var(--font-accent);
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.review-badge:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); color: var(--color-primary); }
.review-badge svg, .review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- Verdict section: save vs remove (dark, C4.1 radial glow) ---- */
.arb-verdict {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.arb-verdict::before {
  content: '';
  position: absolute;
  top: -30%;
  left: -10%;
  width: 60%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 38%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.arb-verdict .container { position: relative; z-index: 1; }
.arb-verdict .section-title h2 { color: var(--color-white); }
.arb-verdict .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.arb-verdict-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.arb-verdict-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.arb-verdict-col--save {
  background: color-mix(in srgb, var(--color-primary) 30%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  box-shadow: var(--shadow-xl);
}
.arb-verdict-col--remove {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
}
.arb-verdict-col h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.arb-verdict-col--save h3 { color: var(--color-accent); }
.arb-verdict-col ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  margin: 0;
  padding: 0;
}
.arb-verdict-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-sm);
}
.arb-verdict-col li svg, .arb-verdict-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.arb-verdict-col--save li svg, .arb-verdict-col--save li i { color: var(--color-accent); }
.arb-verdict-col--remove li svg, .arb-verdict-col--remove li i { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.arb-verdict-note {
  max-width: 820px;
  margin: var(--space-8) auto 0;
  text-align: center;
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  font-size: var(--font-size-sm);
}

/* ---- FAQ + related sections ---- */
.arb-faq { background: var(--color-cream); }
.arb-related { background: var(--color-light); }

/* ---- Closing CTA (dark, top-arc glow) ---- */
.arb-closing {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.arb-closing::before {
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
.arb-closing .container { position: relative; z-index: 1; }
.arb-closing h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.arb-closing .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.arb-closing .hero-actions {
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

/* ---- SVG dividers (curved wave C3.2 + torn C3.4 + double wave C3.3) ---- */
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
  .arb-symptoms { grid-template-columns: 1fr 1fr; }
  .arb-expert-grid { grid-template-columns: 1fr; }
  .arb-portrait { margin: 0 auto var(--space-6); }
  .arb-cred-stat { right: calc(-1 * var(--space-4)); }
  .arb-services-grid { grid-template-columns: repeat(2, 1fr); }
  .arb-diag-layout { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .arb-hero { min-height: auto; }
  .arb-hero h1 { font-size: clamp(1.9rem, 7vw, 2.5rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .arb-symptoms { grid-template-columns: 1fr; }
  .arb-proof-gallery { grid-template-columns: 1fr; }
  .arb-verdict-grid { grid-template-columns: 1fr; }
  .arb-pullquote { padding-left: clamp(2.5rem, 10vw, 4rem); }
  .arb-cred-stat {
    position: static;
    display: inline-block;
    margin-top: var(--space-4);
  }
}
@media (max-width: 600px) {
  .arb-services-grid { grid-template-columns: 1fr; }
  .arb-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .arb-diag-steps { padding-left: var(--space-8); }
  .arb-diag-step::before { left: calc(-1 * var(--space-8) + var(--space-2)); }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="arb-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Certified arborist services in DeLand, Florida">
  <div class="container">
    <nav class="arb-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Certified Arborist Services</span>
    </nav>

    <span class="hero-eyebrow">Certified Arborist Services &middot; DeLand, FL</span>

    <h1>Certified Arborist Services in DeLand, FL &mdash; <span class="text-accent">Expert Diagnosis from a Local Tree Service</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Volusia County since <?php echo e($yearEstablished); ?> &mdash; with certified arborist expertise behind every estimate. We diagnose sick oaks and palms, write real treatment plans, and tell you honestly which trees can be saved and which can&rsquo;t.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Book a Free Consultation</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Ask About a Tree</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="clipboard-check"></i> Honest Save-or-Remove Calls</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ WHAT AN ARBORIST DOES — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="What a certified arborist does">
  <div class="container">
    <blockquote class="arb-pullquote" data-animate>
      A chainsaw can take down any tree in Volusia County. It takes an arborist to know <strong>which trees should still be standing</strong> ten hurricane seasons from now.
      <cite>The difference between cutting and tree care</cite>
    </blockquote>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Diagnosis Before Saws</span>
      <h2>What does a certified arborist in DeLand, FL actually do?</h2>
      <p class="answer-block">A certified arborist reads a tree the way an inspector reads a house: root flare, trunk, canopy, and site. In DeLand that means diagnosing declining live oaks, spotting ganoderma conks at a palm&rsquo;s base, catching nutrient deficiencies in the fronds, and writing a treatment &mdash; or removal &mdash; plan you can act on.</p>
    </div>

    <div class="arb-lede" data-animate>
      <p class="drop-cap">Most tree problems in DeLand don&rsquo;t announce themselves until they&rsquo;re expensive. The live oak shading your driveway thins a little more each spring. The queen palm by the pool screen enclosure pushes out yellow, ragged fronds. Sandy Central Florida soil drains fast, hides root damage, and lets decay work quietly for years. Arborist work is catching those stories early &mdash; and knowing which chapter the tree is actually in.</p>
    </div>

    <div class="arb-symptoms">
      <?php foreach ($treeSymptoms as $i => $symptom): ?>
      <article class="arb-symptom reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="arb-symptom-icon"><i data-lucide="<?php echo e($symptom['icon']); ?>"></i></div>
        <h3><?php echo e($symptom['title']); ?></h3>
        <p><?php echo e($symptom['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (C3.2, white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ EXPERT POSITIONING — 02 ============ -->
<section class="numbered-section arb-expert" data-num="02" aria-label="When to call an arborist">
  <div class="container">
    <div class="arb-expert-grid">
      <figure class="arb-portrait" data-animate>
        <div class="arb-portrait-inner">
          <img src="<?php echo e($bodyPhotos['portrait']['src']); ?>" alt="<?php echo e($bodyPhotos['portrait']['alt']); ?>" width="800" height="1000" loading="lazy">
        </div>
        <figcaption>The crew that assesses your trees is the crew that works on them.</figcaption>
        <div class="arb-cred-stat">
          <div class="big-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
          <div class="big-label">Years Reading DeLand Trees</div>
        </div>
      </figure>

      <div class="arb-expert-copy">
        <span class="eyebrow-label">Judgment First, Equipment Second</span>
        <h2>When should you call an arborist instead of a general tree service?</h2>
        <figure style="margin: 0 0 var(--space-6); border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md);" data-animate>
          <img src="https://i.imgur.com/EpmXxaJ.jpeg" alt="Certified arborist examining tree health in DeLand, Florida" width="800" height="600" loading="lazy" style="width: 100%; height: auto; display: block;">
        </figure>
        <p class="answer-block">Call an arborist when the question is &ldquo;what&rsquo;s wrong with this tree?&rdquo; rather than &ldquo;how fast can it come down?&rdquo; A professional tree service with certified arborist expertise diagnoses before it cuts &mdash; so a treatable oak gets a care plan, and only genuine hazards get the saw.</p>

        <ul class="arb-cred-rows" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="badge-check"></i>
            <p><strong>Certified arborist expertise on every job.</strong> Diagnosis, treatment plans, and species-specific care &mdash; not a one-size-fits-all &ldquo;it&rsquo;s gotta come down.&rdquo;</p>
          </li>
          <li data-animate>
            <i data-lucide="shield-check"></i>
            <p><strong>Licensed and insured, with proof on request.</strong> Liability and workers&rsquo; compensation coverage you can verify before anyone climbs your oak.</p>
          </li>
          <li data-animate>
            <i data-lucide="wrench"></i>
            <p><strong>One local crew carries out the plan.</strong> The same DeLand tree service that diagnoses your tree does the pruning, crown reduction, or removal &mdash; tree work and land clearing included.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: torn edge (C3.4, cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L60,42 L120,35 L200,45 L280,32 L360,48 L440,38 L540,45 L640,30 L740,42 L840,35 L940,45 L1040,32 L1140,42 L1200,38 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ SERVICE BREAKDOWN — 03 ============ -->
<section class="numbered-section arb-services" data-num="03" aria-label="Arborist services offered">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Arborist&rsquo;s Job List</span>
      <h2>What arborist services does God's Country provide?</h2>
      <p class="answer-block">God&rsquo;s Country Tree Service provides tree health assessments, disease and pest diagnosis, treatment and care plans, hurricane-season risk evaluations, honest save-or-remove verdicts, and planting guidance across DeLand and Volusia County &mdash; all from one licensed and insured local crew, with free written estimates within 24 hours.</p>
    </div>

    <div class="arb-services-grid">
      <?php foreach ($arbServices as $i => $item): ?>
      <article class="arb-svc-item reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="arb-svc-icon"><i data-lucide="<?php echo e($item['icon']); ?>"></i></div>
        <h3><?php echo e($item['title']); ?></h3>
        <p><?php echo e($item['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: double wave (C3.3, white → light) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-light)" opacity="0.4"/><path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-light)"/></svg>
</div>

<!-- ============ DIAGNOSIS PROCESS — 04 ============ -->
<section class="numbered-section arb-diagnosis" data-num="04" aria-label="How tree diagnosis works">
  <div class="container">
    <div class="arb-diag-layout">
      <div class="arb-diag-intro">
        <span class="eyebrow-label">From Symptom to Verdict</span>
        <h2>How does a tree expert diagnose a sick oak or palm?</h2>
        <p class="answer-block">A tree expert diagnoses from the ground up: site and soil first, then root flare and trunk, then the canopy&rsquo;s dieback pattern. For DeLand oaks that means checking for decay, cavities, and construction root damage; for palms, reading the fronds for nutrient deficiencies and the base for ganoderma.</p>
        <figure data-animate>
          <img src="<?php echo e($bodyPhotos['rigged']['src']); ?>" alt="<?php echo e($bodyPhotos['rigged']['alt']); ?>" width="800" height="1067" loading="lazy">
          <figcaption>Rigged for close canopy inspection &mdash; some diagnoses can&rsquo;t be made from the ground.</figcaption>
        </figure>
      </div>

      <ol class="arb-diag-steps" data-p1-dynamic>
        <?php foreach ($diagSteps as $step): ?>
        <li class="arb-diag-step" data-animate>
          <h3><?php echo e($step['title']); ?></h3>
          <p><?php echo e($step['text']); ?></p>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<!-- Divider: curved wave (C3.2, light → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-light);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,0 900,80 1200,40 L1200,80 L0,80 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ PROOF — 05 ============ -->
<section class="numbered-section arb-proof" data-num="05" aria-label="Arborist work in DeLand">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Up in the Canopy</span>
      <h2>Searching for a certified arborist near me in DeLand?</h2>
      <p class="answer-block">If you&rsquo;re searching for a certified arborist near me in DeLand, this is what the work looks like: roped climbers inside live oak canopies, reading limbs up close instead of guessing from the lawn. We work within about 50 miles of DeLand &mdash; Deltona, Orange City, DeBary, and Lake Helen included.</p>
    </div>

    <div class="arb-proof-gallery">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['canopy']['src']); ?>" alt="<?php echo e($bodyPhotos['canopy']['alt']); ?>" width="800" height="800" loading="lazy">
        <figcaption>Inside an oak canopy above a DeLand lake</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($heroImage); ?>" alt="Harnessed climber rigging ropes on an oak limb in DeLand, FL" width="800" height="1067" loading="lazy">
        <figcaption>Harnessed and rigged for careful limb work</figcaption>
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

<!-- ============ HONEST VERDICT — 06 ============ -->
<section class="arb-verdict" aria-label="When a tree can be saved and when it cannot">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label" style="color: var(--color-accent);">The Honest Call</span>
      <h2>Which trees can be saved &mdash; and which ones can&rsquo;t?</h2>
      <p class="answer-block">More DeLand trees can be saved than most homeowners expect &mdash; and fewer than a storm-chaser&rsquo;s quote implies. Stress, nutrition, and minor storm damage are usually treatable; advanced decay, ganoderma, and failing roots are not. The patterns below are how we call it, in writing, either way.</p>
    </div>

    <div class="arb-verdict-grid">
      <div class="arb-verdict-col arb-verdict-col--save" data-animate>
        <h3>Usually worth saving</h3>
        <ul>
          <?php foreach ($verdictSave as $point): ?>
          <li><i data-lucide="heart-pulse"></i> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="arb-verdict-col arb-verdict-col--remove" data-animate="right">
        <h3>Time to plan a removal</h3>
        <ul>
          <?php foreach ($verdictRemove as $point): ?>
          <li><i data-lucide="triangle-alert"></i> <?php echo e($point); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <p class="arb-verdict-note" data-animate>Either verdict comes with a free written estimate within 24 hours &mdash; a care plan if the tree is treatable, a controlled-removal quote if it isn&rsquo;t. Nobody at God&rsquo;s Country gets paid more for recommending the saw.</p>
  </div>
</section>

<!-- ============ FAQ — 07 ============ -->
<section class="numbered-section arb-faq" data-num="07" aria-label="Arborist questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand property owners ask a certified arborist?</h2>
      <p class="answer-block">The questions cluster around the same worries: credentials, sick palms, thinning oaks, cost, and timing before hurricane season. Straight answers below &mdash; and if your tree&rsquo;s situation isn&rsquo;t covered, describe it in the estimate form and you&rsquo;ll have an answer within 24 hours.</p>
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
<section class="arb-related" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">After the Diagnosis</span>
      <h2>What other tree services do DeLand property owners pair with arborist services?</h2>
      <p class="answer-block">An assessment usually leads somewhere: corrective pruning for the trees worth saving, ongoing maintenance to keep them that way, and removal when a hazard can&rsquo;t be treated. All three come from the same God&rsquo;s Country crew in DeLand, usually quoted in the same free estimate.</p>
    </div>

    <?php renderServiceCards(['tree-pruning-services', 'tree-maintenance-care', 'dead-hazardous-tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="arb-closing" aria-label="Book an arborist consultation">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Worried About an Oak or Palm That Doesn&rsquo;t Look Right?</h2>
    <p class="answer-block">Describe the tree &mdash; the thinning crown, the yellowing fronds, the mushrooms at the base &mdash; and <?php echo e($siteName); ?> will walk the property, diagnose what&rsquo;s actually happening, and put an honest verdict in writing, usually within 24 hours. No fee to find out the truth.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Book a Free Consultation</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
