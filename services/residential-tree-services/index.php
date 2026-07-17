<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/residential-tree-services/index.php
 * Residential Tree Services — hub page (one crew, whole yard)
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Techniques: C1.4 hero, C6.1 asymmetric featured grid,
 * C7.2 full-bleed photo + stat overlay (signature), C3.1 diagonal
 * + C3.3 double-wave dividers, C5.1 numbered watermarks, C4.1 glow
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'residential-tree-services';

// V2.1 trade-noun title (54 chars) + V2.2 CTR meta (156 chars)
$pageTitle       = "Residential Tree Service in DeLand, FL | God's Country";
$pageDescription = 'Residential tree service in DeLand, FL — trimming, removal & year-round care for homeowners from one licensed & insured local crew. Get a free estimate today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062748583-jkbp6v-56461057_2279726332247966_3162728189227171840_n.webp'; // clean oak-framed backyard after tree work
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'cornerlot' => [
        'src' => $imgBase . '1784062744583-c9q0jo-49949171_2228682217352378_6923483969732214784_n.webp',
        'alt' => 'Mature oak shading a corner-lot home before trimming in DeLand, FL',
    ],
    'frontyard' => [
        'src' => $imgBase . '1784062750583-pr9hsn-57170747_2285599344993998_4063638806954246144_n.webp',
        'alt' => 'Full-crowned shade tree in a DeLand, FL front yard after shaping',
    ],
    'skidsteer' => [
        'src' => $imgBase . '1784062731501-oi9ekh-35294961_2071235779763690_210454243612557312_n.webp',
        'alt' => 'God\'s Country skid steer below a green oak at a DeLand, FL home',
    ],
];

// ---- Homeowner scenarios (C6.1 supporting cards) ----
$scenarios = [
    ['icon' => 'home',           'title' => 'Oak limbs parked over the roof',    'text' => 'Live oak limbs creeping over shingles and gutters are the classic DeLand call. Crown clearance keeps leaves out of the valleys and heavy wood off the house before wind ever tests it.'],
    ['icon' => 'waves',          'title' => 'The pine leaning at the pool',      'text' => 'A slash pine tilting toward a screen enclosure is a math problem, not a mystery. We assess the lean, the root plate in sandy Central Florida soil, and tell you honestly if it stays or goes.'],
    ['icon' => 'cloud-lightning', 'title' => 'Hurricane-season prep',            'text' => 'June through November is when overloaded canopies fail. A pre-season pass takes off deadwood and thins wind-catching growth while it\'s still a routine visit, not an emergency.'],
    ['icon' => 'sprout',         'title' => 'The overgrown corner of the yard',  'text' => 'Years of untouched growth, a stump nobody dealt with, palms full of dead fronds. One visit with the chipper and skid steer reclaims the corner — brush chipped, debris hauled, grade raked.'],
];

// ---- Visit steps (service breakdown) ----
$visitSteps = [
    ['title' => 'Walk the whole yard, not one tree',   'text' => 'We look at every tree on the lot — the oak you called about and the queen palm you didn\'t. You get a free written estimate within 24 hours covering exactly what each tree needs, and what it doesn\'t.'],
    ['title' => 'Schedule and site prep',              'text' => 'We confirm gate access for the compact equipment, flag sprinkler heads, and stage mats where the loader will travel. Fences, screen rooms, and flower beds get planned around before a saw starts.'],
    ['title' => 'One planned work sequence',           'text' => 'Trimming, pruning cuts, any removals, and stump work happen in a deliberate order so debris moves through the yard once. No second crew, no second mobilization, no waiting on a subcontractor.'],
    ['title' => 'Chip, haul, and rake out',            'text' => 'Brush goes through the chipper, logs ride the grapple loader, and the driveway gets blown off. Most quotes include hauling, so the yard is mow-ready when the trucks pull away.'],
    ['title' => 'Final walkthrough with you',          'text' => 'Before we leave, we walk the property together and note anything to watch — a canopy to re-check next year, a tree worth flagging before hurricane season. You end the day with a plan, not just a receipt.'],
];

// ---- Cost factors ----
$costFactors = [
    ['icon' => 'trees',        'title' => 'How many trees, and how big',   'text' => 'Shaping one front-yard shade tree is a different day than trimming six oaks and dropping a dead pine. Count and canopy size set the crew hours.'],
    ['icon' => 'git-branch',   'title' => 'Trim, prune, or remove',        'text' => 'Maintenance trimming costs the least, structural pruning sits in the middle, and full removals — especially over structures — carry the rigging time.'],
    ['icon' => 'fence',        'title' => 'What the work hangs over',      'text' => 'Pool screen enclosures, fences, play sets, and rooflines all mean roped lowering instead of free drops. Targets under the tree show up honestly in the quote.'],
    ['icon' => 'layers',       'title' => 'Bundling beats piecemeal',      'text' => 'One mobilization for the whole yard is almost always cheaper than three separate service calls. Tell us everything that bugs you and we\'ll quote it as one job.'],
];

// ---- Comparison: juggling contractors vs one crew ----
$comparison = [
    ['them' => 'One company trims, another hauls, a third grinds the stump — three schedules, three invoices', 'us' => 'Tree work and land clearing from one DeLand crew: one schedule, one written quote'],
    ['them' => 'Each vendor blames the last one for the ruts in the lawn',                                      'us' => 'The crew that cuts is the crew that mats the turf and flags the irrigation'],
    ['them' => 'Nobody owns a plan for the yard as a whole',                                                    'us' => 'One walk-through covers every tree — this visit and what to watch next season'],
    ['them' => 'A mobilization fee baked into every separate trip',                                             'us' => 'Trimming, removal, and stump work bundled into a single visit when it saves you money'],
    ['them' => 'Storm week, the out-of-town number goes to voicemail',                                          'us' => 'Local and licensed in DeLand since 2014 — here before, during, and after the season'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Can one visit cover trimming, a removal, and stump work together?',
        'a' => "Yes — that's the point of hiring a crew that runs its own climbing gear, chipper, grapple loader, and skid steer. We quote the whole yard as one job, sequence the work so debris moves once, and finish in a single mobilization. Most DeLand homeowners save money bundling compared to booking each task separately.",
    ],
    [
        'q' => 'Do I need to be home while the crew works?',
        'a' => "Not for most jobs. We confirm the scope at the estimate, so on work day the crew needs gate access and a clear driveway, not a supervisor. Plenty of DeLand homeowners leave for work and come home to a finished yard. If decisions might come up mid-job — like whether to keep firewood — we'll call.",
    ],
    [
        'q' => 'How do you protect my lawn, sprinklers, and driveway?',
        'a' => 'We flag sprinkler heads during prep, run compact tracked equipment instead of heavy trucks across turf, and lay mats where the loader travels. Sections over the house come down on ropes, not gravity. Sandy Central Florida lawns rut easily when wet, so we also plan machine routes around soft ground.',
    ],
    [
        'q' => 'How often should a DeLand yard get professional tree work?',
        'a' => "For most properties, once a year is the rhythm — ideally in spring, before hurricane season starts in June. Fast growers like laurel oaks and camphors may need attention more often, while a well-shaped live oak can go longer. An annual walk-through catches deadwood and decline while the fix is still cheap.",
    ],
    [
        'q' => 'What happens to the branches, logs, and debris?',
        'a' => "Brush is chipped on site and logs leave on the grapple truck — hauling is included in most quotes, so the price you approve covers the cleanup. Want firewood rounds or chips for garden beds? Say so at the estimate and we'll buck, stack, or dump them where you want, no charge for asking.",
    ],
    [
        'q' => 'Can you get equipment into a small, fenced backyard?',
        'a' => "Usually, yes. The compact track loader fits through most standard gates, and when it can't, our climbers work the tree on ropes and we move the wood out by hand and wheelbarrow paths. Tight-access backyards behind DeLand's older homes are routine work — access just gets planned into the quote up front.",
    ],
    [
        'q' => 'Do you take on yards outside DeLand?',
        'a' => 'Yes. From our DeLand home base the crew covers Deltona, Orange City, DeBary, Lake Helen, and homes within roughly 50 miles across Volusia County. Same equipment, same free written estimate within 24 hours — distance inside that radius doesn\'t change how the job is quoted or done.',
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
        ['name' => 'Home',                      'url' => '/'],
        ['name' => 'Services',                  'url' => '/services/'],
        ['name' => 'Residential Tree Services'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Residential Tree Services — page-specific styles (.res-)
   C1.4 page hero · C6.1 asymmetric featured grid · C7.2 full-
   bleed photo + stat overlay signature · C3.1 diagonal + C3.3
   double-wave dividers · C5.1 numbered watermarks · C4.1 glow
   All values from tokens — no hardcoded colors/shadows.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.res-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.res-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 68%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 86%, transparent) 100%
  );
}
.res-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.res-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.res-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.res-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.res-breadcrumb a:hover { color: var(--color-accent); }
.res-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.res-hero .res-eyebrow-pill {
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
.res-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.res-hero h1 .text-accent { color: var(--color-accent); }
.res-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.res-hero .res-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.res-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.res-hero .hero-trust-item svg,
.res-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- C5.1 Numbered section watermarks ---- */
.res-numbered { position: relative; }
.res-numbered::before {
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
.res-numbered > .container { position: relative; z-index: 1; }

/* ---- Section title idiom (adapted shared block) ---- */
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
.res-lede {
  max-width: 72ch;
  margin: 0 auto var(--space-10);
  text-align: center;
  color: var(--color-gray);
  font-size: var(--font-size-base);
}
.res-lede a {
  color: var(--color-primary);
  font-weight: 600;
  border-bottom: 2px solid color-mix(in srgb, var(--color-accent) 55%, transparent);
  transition: color var(--transition-fast), border-color var(--transition-fast);
}
.res-lede a:hover { color: var(--color-accent); border-bottom-color: var(--color-accent); }

/* ---- C6.1 Asymmetric featured grid: homeowner scenarios ---- */
.res-scenarios-grid {
  display: grid;
  grid-template-columns: 1.6fr 1fr 1fr;
  grid-auto-rows: minmax(0, auto);
  gap: var(--space-5);
}
.res-scenario-featured {
  grid-row: span 2;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  min-height: 420px;
  padding: var(--space-10) var(--space-8);
  border-radius: var(--radius-xl);
  background: linear-gradient(155deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  color: var(--color-white);
  box-shadow: var(--shadow-xl);
  transition: transform var(--transition-base);
}
.res-scenario-featured:hover { transform: translateY(-5px); }
.res-scenario-featured::before {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 240px;
  height: 240px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.09;
  pointer-events: none;
}
.res-scenario-featured::after {
  content: '';
  position: absolute;
  bottom: -60px;
  left: -60px;
  width: 180px;
  height: 180px;
  border-radius: 50%;
  border: 2px solid color-mix(in srgb, var(--color-white) 14%, transparent);
  pointer-events: none;
}
.res-scenario-featured .res-featured-icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-white) 12%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 20%, transparent);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-5);
}
.res-scenario-featured .res-featured-icon svg,
.res-scenario-featured .res-featured-icon i { width: 28px; height: 28px; }
.res-scenario-featured h3 {
  color: var(--color-white);
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.res-scenario-featured p {
  color: color-mix(in srgb, var(--color-white) 86%, transparent);
  font-size: var(--font-size-base);
  margin: 0 0 var(--space-4);
}
.res-scenario-featured p:last-of-type { margin-bottom: 0; }
.res-scenario-featured a {
  color: var(--color-accent);
  font-weight: 700;
  border-bottom: 1px solid color-mix(in srgb, var(--color-accent) 50%, transparent);
  transition: border-color var(--transition-fast);
}
.res-scenario-featured a:hover { border-bottom-color: var(--color-accent); }
.res-scenario-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-card);
  border-top: 3px solid transparent;
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-top-color var(--transition-base);
}
.res-scenario-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-xl);
  border-top-color: var(--color-accent);
}
.res-scenario-card .res-scenario-icon {
  width: 46px;
  height: 46px;
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-primary) 8%, var(--color-white));
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.res-scenario-card .res-scenario-icon svg,
.res-scenario-card .res-scenario-icon i { width: 22px; height: 22px; }
.res-scenario-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.res-scenario-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Visit walkthrough: split + numbered steps ---- */
.res-visit-section { background: var(--color-cream); }
.res-visit-layout {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: var(--space-12);
  align-items: start;
}
.res-visit-intro h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.res-visit-intro .answer-block { color: var(--color-text); margin-bottom: var(--space-6); }
.res-visit-figure { margin: 0; position: relative; }
.res-visit-figure img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.res-visit-figure::after {
  content: '';
  position: absolute;
  inset: var(--space-3) calc(-1 * var(--space-3)) calc(-1 * var(--space-3)) var(--space-3);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-lg);
  z-index: -1;
}
.res-visit-figure figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-4);
}
.res-visit-steps {
  list-style: none;
  counter-reset: resvisit;
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.res-visit-step {
  position: relative;
  counter-increment: resvisit;
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-5);
  align-items: start;
  padding: var(--space-6);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.res-visit-step:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
.res-visit-step::before {
  content: counter(resvisit, decimal-leading-zero);
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 800;
  line-height: 1.1;
  color: var(--color-accent);
  padding-top: var(--space-1);
}
.res-visit-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.res-visit-step p {
  margin: 0;
  color: var(--color-gray);
  font-size: var(--font-size-base);
}

/* ---- Cost: horizontal factor rows ---- */
.res-cost-section { background: var(--color-white); }
.res-cost-rows {
  max-width: 860px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.res-cost-row {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: var(--space-5);
  align-items: center;
  padding: var(--space-6) var(--space-8);
  border-radius: var(--radius-lg);
  border-left: 4px solid var(--color-primary);
  background: var(--color-light);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.res-cost-row:nth-child(even) { border-left-color: var(--color-accent); }
.res-cost-row:hover { transform: translateX(4px); box-shadow: var(--shadow-md); }
.res-cost-row .res-cost-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.res-cost-row:nth-child(even) .res-cost-icon { color: var(--color-accent); }
.res-cost-row .res-cost-icon svg,
.res-cost-row .res-cost-icon i { width: 22px; height: 22px; }
.res-cost-row h3 { font-size: var(--font-size-base); margin-bottom: var(--space-1); }
.res-cost-row p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- C7.2 Signature: full-bleed photo + stat overlay ---- */
.res-photo-stats {
  position: relative;
  min-height: 520px;
  background-size: cover;
  background-position: center 30%;
  display: flex;
  align-items: center;
  overflow: hidden;
}
.res-photo-stats::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to bottom,
    color-mix(in srgb, var(--color-primary-dark) 72%, transparent),
    color-mix(in srgb, var(--color-dark) 86%, transparent)
  );
}
.res-photo-stats .container {
  position: relative;
  z-index: 2;
  padding-top: clamp(4rem, 9vh, 6rem);
  padding-bottom: clamp(4rem, 9vh, 6rem);
}
.res-photo-stats .section-title { margin-bottom: var(--space-10); }
.res-photo-stats .section-title h2 { color: var(--color-white); }
.res-photo-stats .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 86%, transparent); }
.res-photo-stats .eyebrow-label { color: var(--color-accent); }
.res-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  text-align: center;
}
.res-stat {
  padding: var(--space-6) var(--space-4);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 12%, transparent);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
}
.res-stat .res-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5vw, 3.6rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-white);
}
.res-stat .res-stat-number span { color: var(--color-accent); }
.res-stat .res-stat-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-xs);
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  margin-top: var(--space-2);
}

/* ---- Proof: photo pair + review badges ---- */
.res-proof-section { background: var(--color-white); }
.res-proof-duo {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 920px;
  margin: 0 auto var(--space-10);
}
.res-proof-duo figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.res-proof-duo img {
  width: 100%;
  height: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.res-proof-duo figure:hover img { transform: scale(1.04); }
.res-proof-duo figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 82%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.res-badge-strip {
  display: flex;
  justify-content: center;
  gap: var(--space-4);
  flex-wrap: wrap;
}
.res-review-badge {
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
  transition: transform var(--transition-base), box-shadow var(--transition-base), color var(--transition-base);
}
.res-review-badge:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); color: var(--color-primary); }
.res-review-badge svg, .res-review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- Comparison: one crew vs contractor juggling ---- */
.res-compare-section { background: var(--color-light); }
.res-compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.res-compare-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
}
.res-compare-col--us {
  border: 2px solid var(--color-accent);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.res-compare-col--us::before {
  content: 'One Crew';
  position: absolute;
  top: calc(-1 * var(--space-3));
  right: var(--space-6);
  background: var(--color-accent);
  color: var(--color-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  padding: var(--space-1) var(--space-4);
  border-radius: var(--radius-full);
}
.res-compare-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.res-compare-col--us h3 { color: var(--color-primary); }
.res-compare-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); }
.res-compare-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: var(--color-text);
  font-size: var(--font-size-sm);
}
.res-compare-col li svg, .res-compare-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.res-compare-col--them li svg, .res-compare-col--them li i { color: var(--color-gray); }
.res-compare-col--us li svg, .res-compare-col--us li i { color: var(--color-accent); }

/* ---- FAQ + related ---- */
.res-faq-section { background: var(--color-white); }
.res-related-section { background: var(--color-light); }

/* ---- C4.1 Closing CTA with radial glow ---- */
.res-closing {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.res-closing::before {
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
.res-closing .container { position: relative; z-index: 1; }
.res-closing h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.res-closing .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.res-closing .res-hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }
.res-closing .eyebrow-label { color: var(--color-accent); }

/* ---- Last updated stamp ---- */
.res-last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- C3 SVG dividers (diagonal 3.1 + double-wave 3.3) ---- */
.res-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(36px, 6vw, 72px);
  position: relative;
  z-index: 2;
}
.res-divider svg { display: block; width: 100%; height: 100%; }
.res-divider--flush { margin-bottom: -1px; }

/* Reveal stagger delays */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .res-scenarios-grid { grid-template-columns: 1fr 1fr; }
  .res-scenario-featured { grid-row: span 1; grid-column: 1 / -1; min-height: 320px; }
  .res-visit-layout { grid-template-columns: 1fr; gap: var(--space-10); }
  .res-visit-figure { max-width: 460px; }
  .res-stats-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .res-hero { min-height: auto; }
  .res-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .res-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .res-compare-grid { grid-template-columns: 1fr; }
  .res-proof-duo { grid-template-columns: 1fr; max-width: 460px; }
  .res-cost-row { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .res-scenarios-grid { grid-template-columns: 1fr; }
  .res-hero .res-hero-actions { flex-direction: column; align-items: stretch; }
  .res-stats-grid { grid-template-columns: 1fr; }
  .res-visit-step { grid-template-columns: 1fr; gap: var(--space-2); }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="res-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Residential tree services in DeLand, Florida">
  <div class="container">
    <nav class="res-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Residential Tree Services</span>
    </nav>

    <span class="res-eyebrow-pill">Residential Tree Services &middot; DeLand, FL</span>

    <h1>Residential Tree Services in DeLand, FL &mdash; <span class="text-accent">One Tree Service Crew for Your Whole Yard</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, caring for homeowners' yards across Volusia County since <?php echo e($yearEstablished); ?>. Trimming, pruning, removal, and cleanup handled by one residential crew &mdash; with a free written estimate for the whole yard within 24 hours.</p>

    <div class="res-hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Yard Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><?php echo icon('wrench'); ?> Tree + Land Clearing, One Crew</span>
      <span class="hero-trust-item"><?php echo icon('clock'); ?> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ SCENARIOS — C6.1 ASYMMETRIC FEATURED GRID — 01 ============ -->
<section class="res-numbered" data-num="01" aria-label="Homeowner tree problems we handle">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">One Call Covers It</span>
      <h2>Do you handle residential tree removal as well as trimming?</h2>
      <p class="answer-block">Yes &mdash; trimming, pruning, and full residential tree removal all come from the same God's Country crew. Because we run our own skid steer, chipper, and grapple equipment, a job that starts as a trim can fold in a takedown and stump work in the same visit, under one written DeLand quote.</p>
    </div>

    <p class="res-lede" data-animate>This page is the homeowner's front door to everything we do. Most yards need a mix: <a href="/services/tree-trimming-services/">tree trimming</a> to get live oak limbs off the roofline, structural <a href="/services/tree-pruning-services/">tree pruning</a> to keep young canopies growing strong, and sometimes a full <a href="/services/tree-removal/">tree removal</a> when a pine is past saving. Whatever combination your lot needs, it's one crew, one plan, and one price.</p>

    <div class="res-scenarios-grid">
      <article class="res-scenario-featured" data-animate>
        <div class="res-featured-icon"><?php echo icon('house'); ?></div>
        <h3>Every yard job, one crew</h3>
        <p>DeLand lots collect tree work the way garages collect projects: the oak that needs shaping, the palm full of brown fronds, the stump from three summers ago. Instead of booking three companies, you book one walk-through.</p>
        <p>We climb, rig, chip, grind, and haul with our own equipment &mdash; tree service and land clearing under the same name since <?php echo e($yearEstablished); ?> &mdash; so nothing on the list waits for a subcontractor.</p>
      </article>
      <?php foreach ($scenarios as $i => $sc): ?>
      <article class="res-scenario-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="res-scenario-icon"><?php echo icon(($sc['icon'])); ?></div>
        <h3><?php echo e($sc['title']); ?></h3>
        <p><?php echo e($sc['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: diagonal (C3.1, white → cream) -->
<div class="res-divider res-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,8 1200,60"/></svg>
</div>

<!-- ============ VISIT WALKTHROUGH — 02 ============ -->
<section class="res-numbered res-visit-section" data-num="02" aria-label="What a residential visit includes">
  <div class="container">
    <div class="res-visit-layout">
      <div class="res-visit-intro">
        <span class="eyebrow-label">House Calls, Done Right</span>
        <h2>What does a residential tree service visit look like?</h2>
        <p class="answer-block">A residential tree service visit in DeLand starts with a walk-through of every tree on the lot, not just the one you called about. You get a free written estimate within 24 hours; on work day the crew trims, removes, chips, and hauls in one planned sequence, then walks the yard with you.</p>
        <figure class="res-visit-figure" data-animate>
          <img src="<?php echo e($bodyPhotos['cornerlot']['src']); ?>" alt="<?php echo e($bodyPhotos['cornerlot']['alt']); ?>" width="800" height="1000" loading="lazy">
          <figcaption>Sizing up a mature oak over a corner-lot home in DeLand.</figcaption>
        </figure>
      </div>

      <ol class="res-visit-steps" data-p1-dynamic>
        <?php foreach ($visitSteps as $step): ?>
        <li class="res-visit-step" data-animate>
          <div>
            <h3><?php echo e($step['title']); ?></h3>
            <p><?php echo e($step['text']); ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<!-- Divider: double wave (C3.3, cream → white) -->
<div class="res-divider res-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-white)" opacity="0.4"/><path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ COST — 03 ============ -->
<section class="res-numbered res-cost-section" data-num="03" aria-label="Home tree care cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does home tree care cost in DeLand, FL?</h2>
      <p class="answer-block">Home tree care cost in DeLand depends on how many trees need attention, whether the work is trimming or removal, and what sits underneath &mdash; pool screens, fences, play sets. Bundling the whole yard into one visit usually beats piecemeal calls, and every price arrives as a free written estimate within 24 hours.</p>
    </div>

    <div class="res-cost-rows" data-p1-dynamic>
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="res-cost-row reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="res-cost-icon"><?php echo icon(($factor['icon'])); ?></div>
        <div>
          <h3><?php echo e($factor['title']); ?></h3>
          <p><?php echo e($factor['text']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ SIGNATURE: C7.2 FULL-BLEED PHOTO + STAT OVERLAY — 04 ============ -->
<section class="res-photo-stats" style="background-image:url('<?php echo e($bodyPhotos['skidsteer']['src']); ?>');" aria-label="Year-round residential tree maintenance">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Prevention Pays</span>
      <h2>How does year-round property maintenance protect your trees?</h2>
      <p class="answer-block">Year-round property maintenance catches problems while they're still cheap: dead limbs come off before hurricane season loads them, canopies get thinned before August wind, and a declining oak is flagged years before it threatens the roof. A DeLand yard on a maintenance rhythm almost never needs a panicked emergency call.</p>
    </div>

    <div class="res-stats-grid" data-p1-dynamic>
      <div class="res-stat" data-animate>
        <div class="res-stat-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
        <div class="res-stat-label">Years Serving DeLand Yards</div>
      </div>
      <div class="res-stat reveal-delay-1" data-animate>
        <div class="res-stat-number"><?php echo e($yearEstablished); ?></div>
        <div class="res-stat-label">Local &amp; Licensed Since</div>
      </div>
      <div class="res-stat reveal-delay-2" data-animate>
        <div class="res-stat-number">24<span>hr</span></div>
        <div class="res-stat-label">Written Estimate Turnaround</div>
      </div>
      <div class="res-stat reveal-delay-3" data-animate>
        <div class="res-stat-number">50<span>mi</span></div>
        <div class="res-stat-label">Radius Around DeLand</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROOF — 05 ============ -->
<section class="res-numbered res-proof-section" data-num="05" aria-label="Recent residential tree work">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Searching for residential tree service near me in DeLand?</h2>
      <p class="answer-block">If you're searching for residential tree service near me in DeLand, these photos are what our house calls look like &mdash; mature oaks shaped over corner-lot homes and front yards left clean enough to mow. The crew works within about 50 miles of DeLand, so we've likely already worked on a street near yours.</p>
    </div>

    <div class="res-proof-duo">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['frontyard']['src']); ?>" alt="<?php echo e($bodyPhotos['frontyard']['alt']); ?>" width="800" height="1000" loading="lazy">
        <figcaption>A full-crowned shade tree after shaping &mdash; DeLand front yard</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($heroImage); ?>" alt="Clean oak-framed backyard after tree work at a DeLand, FL home" width="800" height="600" loading="lazy">
        <figcaption>Backyard left clean and mow-ready after a whole-yard visit</figcaption>
      </figure>
    </div>

    <div class="res-badge-strip" data-animate>
      <a class="res-review-badge" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('star'); ?> Read Our Google Reviews
      </a>
      <a class="res-review-badge" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('badge-check'); ?> BBB Business Profile
      </a>
    </div>
  </div>
</section>

<!-- Divider: diagonal (C3.1, white → light) -->
<div class="res-divider res-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-light)" points="0,12 1200,60 0,60"/></svg>
</div>

<!-- ============ COMPARISON — 06 ============ -->
<section class="res-compare-section" aria-label="One crew versus juggling contractors">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Do the Yard Math</span>
      <h2>Why hire one DeLand crew instead of juggling separate contractors?</h2>
      <p class="answer-block">Because a yard split between a trimming company, a hauling guy, and a stump grinder costs more and coordinates worse. God's Country Tree Service runs tree work and land clearing as one DeLand crew &mdash; one schedule, one written quote, and one company accountable for how the yard looks after.</p>
    </div>

    <div class="res-compare-grid">
      <div class="res-compare-col res-compare-col--them" data-animate>
        <h3>The contractor juggle</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><?php echo icon('x'); ?> <?php echo e($row['them']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="res-compare-col res-compare-col--us" data-animate="right">
        <h3>God's Country Tree Service</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><?php echo icon('check'); ?> <?php echo e($row['us']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: double wave (C3.3, light → white) -->
<div class="res-divider res-divider--flush" aria-hidden="true" style="background: var(--color-light);">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,40 C350,80 850,5 1200,35 L1200,100 L0,100 Z" fill="var(--color-white)" opacity="0.4"/><path d="M0,60 C350,95 850,25 1200,55 L1200,100 L0,100 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ FAQ — 07 ============ -->
<section class="res-numbered res-faq-section" data-num="07" aria-label="Residential tree care questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask about residential tree care?</h2>
      <p class="answer-block">Mostly practical things: whether one visit can cover several jobs, how we protect lawns and irrigation, and when to schedule around hurricane season. The straight answers are below &mdash; and anything we missed, drop it in the estimate form and we'll answer it within 24 hours.</p>
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
<section class="res-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Round Out the Plan</span>
      <h2>What other tree services do DeLand property owners pair with residential tree care?</h2>
      <p class="answer-block">Three services pair naturally with whole-yard care: tree trimming to keep canopies off the roof, tree removal when an oak is past saving, and scheduled maintenance so small problems stay small. Same crew, same equipment &mdash; and usually one combined estimate covering all of it.</p>
    </div>

    <?php renderServiceCards(['tree-trimming-services', 'tree-removal', 'tree-maintenance-care'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C4.1 radial glow) ============ -->
<section class="res-closing" aria-label="Get a residential tree service estimate">
  <div class="container">
    <span class="eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready for One Crew to Take the Whole Yard Off Your List?</h2>
    <p class="answer-block">Tell us what the yard needs &mdash; a trim, a takedown, or an honest opinion on all of it. <?php echo e($siteName); ?> will walk the property, quote the whole job in writing within 24 hours, and handle it with one crew from first cut to final rake.</p>
    <div class="res-hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Yard Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="res-last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
