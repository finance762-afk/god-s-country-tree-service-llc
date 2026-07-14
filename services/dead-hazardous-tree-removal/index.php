<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/dead-hazardous-tree-removal/index.php
 * Dead & Hazardous Tree Removal — God's Country Tree Service LLC
 * Phase 4 — editorial service page (interactive-patterns §2.8)
 * Techniques: C1.4 page hero, C5.1 watermark digits on bento,
 * big-stat expert positioning, C6.4 glass cards on dark (C4.1
 * radial glow), C3.4 torn + C3.1 diagonal dividers, C9.2 glow CTA
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'dead-hazardous-tree-removal';

// V2.1 trade-noun title (58 chars) + V2.2 CTR meta (149 chars)
$pageTitle       = "Dead Tree Removal DeLand, FL | God's Country Tree Service";
$pageDescription = 'Dead tree removal in DeLand, FL — licensed & insured hazardous tree specialists, safe extraction near homes & lines. Free estimates within 24 hours.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062731238-fsqor4-33943943_2062224527331482_6590160731939799040_n.webp'; // pines looming over home, storm sky
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'doubletrunk' => [
        'src' => $imgBase . '1784062737583-f7n0kp-37107879_2101564903397444_7138537925750292480_n.webp',
        'alt' => 'Chip truck and boom lift removing a dead double-trunk tree over a DeLand, FL home',
    ],
    'dawnoak' => [
        'src' => $imgBase . '1784062738583-td3dws-37173033_2101564890064112_9062224687815196672_n.webp',
        'alt' => 'Bucket crew working a declining oak at sunrise in DeLand, FL',
    ],
    'poolscreen' => [
        'src' => $imgBase . '1784062763583-cvnei3-503812193_4046117498942165_6962620168915463637_n.webp',
        'alt' => 'Arborist assessing a tall oak over a pool enclosure in DeLand, FL',
    ],
];

// ---- Six warning signs (numbered bento, C5.1 watermark digits) ----
$warningSigns = [
    ['icon' => 'triangle-alert',  'title' => 'Fungus at the base',           'text' => 'Mushrooms, shelf conks, or soft bark ringing the trunk mean the roots or lower trunk are decaying. By the time fungus fruits on the outside, the rot inside is well ahead of it.'],
    ['icon' => 'trending-down',   'title' => 'Crown dieback up top',         'text' => 'Bare, leafless limbs at the very top while the lower canopy still leafs out is the classic decline signal in DeLand\'s live oaks — the tree is dying from the top down.'],
    ['icon' => 'circle-dot',      'title' => 'Hollowing & cavities',         'text' => 'Woodpecker holes, carpenter ants, and cavities that swallow a fist mean the trunk is losing the solid wood that holds it up. Hollow trees fail without drama and without warning.'],
    ['icon' => 'move-diagonal',   'title' => 'A lean that\'s new — or growing', 'text' => 'In sandy Central Florida soil, a root plate can lose its grip fast. A lean that appeared after a storm, or creeps a little further each season, is the tree letting go.'],
    ['icon' => 'bug',             'title' => 'Bark loss & sawdust',          'text' => 'Slabs of bark sliding off and fine sawdust piling at the base point to borers and beetles — and in slash pines, beetle-kill can turn a green tree brittle within months.'],
    ['icon' => 'cloud-lightning', 'title' => 'Storm cracks & hangers',       'text' => 'Cracked unions, split leaders, and limbs hanging by fiber after a named storm rarely heal. Every next blow works the crack wider until whatever hangs over your roof lets go.'],
];

// ---- What's included (glass cards on dark, C6.4) ----
$includedItems = [
    ['icon' => 'search-check',   'title' => 'Honest hazard assessment',   'text' => 'We look at the whole failure picture — decay, lean, targets, escape routes — and tell you plainly whether yours is a remove-now, a watch-it, or a tree worth saving.'],
    ['icon' => 'file-text',      'title' => 'Written 24-hour estimate',   'text' => 'One all-in number in writing: takedown, chipping, hauling, and the stump option itemized before anyone starts a saw. No driveway guesswork, no add-ons after.'],
    ['icon' => 'cable',          'title' => 'Rigging & lift plan',        'text' => 'Dead wood never gets climbed on faith. Boom lift positions, ropes, and lowering points are planned around what the trunk can actually still hold.'],
    ['icon' => 'construction',   'title' => 'Controlled dismantle',       'text' => 'Sections come down roped and lowered over roofs, fences, and pool screen enclosures — never free-dropped over a target, no matter how far gone the tree is.'],
    ['icon' => 'truck',          'title' => 'Chip, haul & stump option',  'text' => 'Brush is chipped and debris hauled the same day on most jobs. Stump grinding is quoted up front with the removal if you want every trace of the hazard gone.'],
    ['icon' => 'camera',         'title' => 'Photo documentation',        'text' => 'Condition photos and the written scope go in your file — the documentation DeLand homeowners and HOAs keep on hand for insurance and property records.'],
];

// ---- Cost factors ----
$costFactors = [
    ['title' => 'How far gone it is',  'text' => 'Brittle, decayed wood forces slower rigging and more lift work. A tree that died two years ago costs more to remove than the same tree taken down the season it declined.'],
    ['title' => 'What\'s underneath',  'text' => 'Open lawn — or a roofline, pool screen enclosure, and fence? Every section rigged over a target adds crew time, and that\'s where most of the price lives.'],
    ['title' => 'Size & species',      'text' => 'An 80-foot slash pine spar and a hollow multi-trunk live oak fail differently and get dismantled differently. Height, spread, and wood weight drive the hours.'],
    ['title' => 'Access to the tree',  'text' => 'Gate width decides which machines fit. Our compact grapple loader works most DeLand backyards; true hand-carry jobs take longer and the quote says so honestly.'],
];

// ---- Comparison: waiting it out vs removing on your schedule ----
$comparison = [
    ['wait' => 'Every storm sheds more limbs onto whatever sits below',            'now' => 'Removal booked in dry weather, at standard rates, on your calendar'],
    ['wait' => 'Wood grows more brittle — and pricier to rig — every season',      'now' => 'Roped dismantle while the trunk is still sound enough to work safely'],
    ['wait' => 'A known, documented hazard can complicate an insurance claim',     'now' => 'Condition photographed and documented before hurricane season'],
    ['wait' => 'Failure picks the timing: emergency rates, tarps, and adjusters',  'now' => 'Debris chipped and hauled the same day on most jobs'],
    ['wait' => 'Neighbors and HOAs start sending letters instead of waves',        'now' => 'One written price you approved — no adjuster involved'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Is a dead tree in my yard an emergency?',
        'a' => "It depends on what it can hit. A dead tree standing over the house, driveway, pool enclosure, or a service drop deserves fast scheduling — treat it as urgent. One standing in an open corner of the lot can usually wait for a normal appointment. Either way the assessment is free, and we'll tell you honestly which category yours falls into.",
    ],
    [
        'q' => 'Do I need a permit to remove a dead tree in DeLand?',
        'a' => 'Possibly. DeLand and Volusia County protect certain trees, though dead and hazardous trees are handled differently from healthy ones. Requirements turn on species, size, and where the tree stands on the lot, so we flag permit questions during your free estimate — before any cutting is scheduled — so you know exactly what applies to your property.',
    ],
    [
        'q' => "Will homeowner's insurance pay to remove a standing dead tree?",
        'a' => "Usually not — carriers treat standing-tree removal as maintenance and generally cover damage only after a fall onto a covered structure. Some claims also get complicated when the tree was a known, documented hazard left standing. We can't speak for your carrier, but we provide the condition photos and written estimate adjusters typically ask about.",
    ],
    [
        'q' => "My neighbor's dead tree leans over my property — what can I do?",
        'a' => 'Start with a conversation, and get the condition on record. We can assess the tree, photograph it, and put what we see in writing so you have something concrete to share with your neighbor or HOA. If the removal is approved, we can often stage the work from whichever side gives the crew the safest access.',
    ],
    [
        'q' => 'Can a tree that looks dead come back?',
        'a' => "Sometimes. Drought-stressed oaks drop leaves and recover, and several Florida species simply leaf out late. That's exactly why the estimate includes certified arborist judgment — a scratch test, a look at buds and cambium, and an honest answer. When pruning or care can save the tree instead of removing it, we say so.",
    ],
    [
        'q' => 'Why do dead pines need to come down faster than dead oaks?',
        'a' => 'Slash pines lose structural strength quickly after they die — beetle-killed pines can become too brittle to climb within months, which forces more equipment and cost. Dead oaks decay more slowly but hollow out unpredictably. Either way, sooner is cheaper: the longer a dead tree stands in Central Florida weather, the harder it is to remove safely.',
    ],
    [
        'q' => 'How fast can you remove a hazardous tree?',
        'a' => 'Estimates go out within 24 hours, and genuinely dangerous trees jump the schedule. Most single-tree hazardous removals around DeLand are finished in a day, cleanup included. If the tree has already failed or is touching a structure, use our 24/7 emergency tree service instead — that work gets a same-day response.',
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
        ['name' => 'Home',                          'url' => '/'],
        ['name' => 'Services',                      'url' => '/services/'],
        ['name' => 'Dead & Hazardous Tree Removal'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Dead & Hazardous Tree Removal — page styles (.dhz- prefix)
   C1.4 page hero · C5.1 watermark-digit bento · big-stat expert
   positioning · C6.4 glass cards on dark + C4.1 radial glow ·
   C3.4 torn + C3.1 diagonal dividers · C9.2 radial-glow CTA
   All values via var() tokens / color-mix() — no literals.
   ============================================================ */

/* ---- C1.4 Page hero: storm-sky photo + gradient + noise ---- */
.dhz-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.dhz-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-black) 86%, transparent) 0%,
    color-mix(in srgb, var(--color-secondary) 74%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.dhz-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.dhz-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.dhz-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.dhz-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.dhz-breadcrumb a:hover { color: var(--color-accent); }
.dhz-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.dhz-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-danger) 16%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
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
.dhz-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.dhz-hero h1 .text-accent { color: var(--color-accent); }
.dhz-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.dhz-hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.dhz-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.dhz-hero .hero-trust-item svg,
.dhz-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- Shared section-title idiom (adapted) ---- */
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

/* ---- SIGNATURE: numbered warning-sign bento (C5.1 digits) ---- */
.dhz-signs-section { background: var(--color-white); padding-bottom: var(--space-16); }
.dhz-bento {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.dhz-sign {
  position: relative;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  isolation: isolate;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dhz-sign:nth-child(6n+1),
.dhz-sign:nth-child(6n+4) { background: var(--color-card-tint-1); }
.dhz-sign:nth-child(6n+2),
.dhz-sign:nth-child(6n+5) { background: var(--color-card-tint-3); }
.dhz-sign:nth-child(6n+3),
.dhz-sign:nth-child(6n)   { background: var(--color-card-tint-2); }
.dhz-sign:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
/* bento spans: 2-1-1 / 1-1-2 rhythm */
.dhz-sign:nth-child(1) { grid-column: span 2; }
.dhz-sign:nth-child(6) { grid-column: span 2; }
/* C5.1 watermark digit per card */
.dhz-sign::before {
  content: attr(data-num);
  position: absolute;
  top: calc(-1 * var(--space-4));
  right: var(--space-2);
  font-family: var(--font-heading);
  font-size: clamp(4.5rem, 8vw, 7rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 9%, transparent);
  pointer-events: none;
  z-index: -1;
}
.dhz-sign-icon {
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
.dhz-sign-icon svg, .dhz-sign-icon i { width: 24px; height: 24px; }
.dhz-sign h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.dhz-sign p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
  max-width: 52ch;
}

/* ---- Expert positioning: asymmetric split + overlapping big stat ---- */
.dhz-expert-section { background: var(--color-cream); }
.dhz-expert-grid {
  display: grid;
  grid-template-columns: 1.35fr 1fr;
  gap: clamp(var(--space-10), 6vw, var(--space-16));
  align-items: center;
}
.dhz-expert-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
  max-width: 24ch;
}
.dhz-expert-copy .answer-block {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  margin-bottom: var(--space-6);
}
.dhz-expert-copy > p {
  color: var(--color-text);
  margin-bottom: var(--space-5);
}
.dhz-expert-points {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  margin-top: var(--space-6);
}
.dhz-expert-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.dhz-expert-points li svg, .dhz-expert-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.dhz-expert-points li strong { color: var(--color-primary); }
.dhz-expert-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.dhz-expert-media { position: relative; padding-bottom: var(--space-10); }
.dhz-expert-media figure { margin: 0; }
.dhz-expert-media img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
}
.dhz-expert-media figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}
/* big-stat card overlapping the photo edge */
.dhz-big-stat {
  position: absolute;
  left: calc(-1 * var(--space-8));
  bottom: var(--space-6);
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-xl);
  border-top: 4px solid var(--color-accent);
  padding: var(--space-6) var(--space-8);
  text-align: center;
  max-width: 240px;
}
.dhz-big-stat .dhz-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 4.6rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.dhz-big-stat .dhz-stat-number span { color: var(--color-accent); }
.dhz-big-stat .dhz-stat-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}

/* ---- Dark "what's included" section: C6.4 glass + C4.1 glow ---- */
.dhz-included-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.dhz-included-section::before {
  content: '';
  position: absolute;
  top: -35%;
  left: -12%;
  width: 65%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 38%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.dhz-included-section::after {
  content: '';
  position: absolute;
  bottom: -40%;
  right: -15%;
  width: 55%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-accent) 12%, transparent) 0%, transparent 60%);
  pointer-events: none;
}
.dhz-included-section .container { position: relative; z-index: 1; }
.dhz-included-section .section-title h2 { color: var(--color-white); }
.dhz-included-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.dhz-included-section .eyebrow-label { color: var(--color-accent); }
.dhz-glass-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.dhz-glass-card {
  position: relative;
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base), background var(--transition-base);
}
.dhz-glass-card:hover {
  transform: translateY(-4px);
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
  background: color-mix(in srgb, var(--color-white) 9%, transparent);
}
.dhz-glass-num {
  position: absolute;
  top: var(--space-4);
  right: var(--space-5);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 800;
  letter-spacing: 2px;
  color: color-mix(in srgb, var(--color-accent) 70%, transparent);
}
.dhz-glass-icon {
  width: 46px;
  height: 46px;
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-accent) 16%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.dhz-glass-icon svg, .dhz-glass-icon i { width: 22px; height: 22px; }
.dhz-glass-card h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.dhz-glass-card p {
  color: color-mix(in srgb, var(--color-white) 74%, transparent);
  font-size: var(--font-size-sm);
  margin: 0;
}

/* ---- Cost factors ---- */
.dhz-cost-section { background: var(--color-white); }
.dhz-cost-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.dhz-cost-card {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dhz-cost-card:nth-child(even) { border-left-color: var(--color-accent); }
.dhz-cost-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.dhz-cost-card h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.dhz-cost-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof: portrait pair + review badges ---- */
.dhz-proof-section { background: var(--color-light); }
.dhz-proof-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 880px;
  margin: 0 auto var(--space-10);
}
.dhz-proof-grid figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.dhz-proof-grid img {
  width: 100%;
  height: 100%;
  aspect-ratio: 3 / 4;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.dhz-proof-grid figure:hover img { transform: scale(1.04); }
.dhz-proof-grid figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 84%, transparent), transparent);
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
  transition: transform var(--transition-base), box-shadow var(--transition-base), color var(--transition-base);
}
.review-badge:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); color: var(--color-primary); }
.review-badge svg, .review-badge i { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- Comparison: waiting vs removing ---- */
.dhz-compare-section { background: var(--color-cream); }
.dhz-compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.dhz-compare-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
}
.dhz-compare-col--wait {
  background: color-mix(in srgb, var(--color-dark) 4%, var(--color-white));
  border: 1px dashed color-mix(in srgb, var(--color-gray) 40%, transparent);
}
.dhz-compare-col--now {
  background: var(--color-white);
  border: 2px solid color-mix(in srgb, var(--color-accent) 55%, transparent);
  box-shadow: var(--shadow-lg);
}
.dhz-compare-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.dhz-compare-col--wait h3 { color: var(--color-gray); }
.dhz-compare-col--now h3 { color: var(--color-primary); }
.dhz-compare-col ul { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); margin: 0; padding: 0; }
.dhz-compare-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.dhz-compare-col li svg, .dhz-compare-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.dhz-compare-col--wait li svg, .dhz-compare-col--wait li i { color: color-mix(in srgb, var(--color-danger) 70%, var(--color-gray)); }
.dhz-compare-col--now li svg, .dhz-compare-col--now li i { color: var(--color-accent); }

/* ---- FAQ + related ---- */
.dhz-faq-section { background: var(--color-white); }
.dhz-related-section { background: var(--color-light); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.dhz-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.dhz-closing-cta::before {
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
.dhz-closing-cta .container { position: relative; z-index: 1; }
.dhz-closing-cta .eyebrow-label { color: var(--color-accent); }
.dhz-closing-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.dhz-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.dhz-closing-cta .dhz-hero-actions { justify-content: center; margin-bottom: 0; }

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers: C3.4 torn + C3.1 diagonal ---- */
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

/* ---- Reveal stagger delays ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .dhz-bento { grid-template-columns: repeat(2, 1fr); }
  .dhz-sign:nth-child(1), .dhz-sign:nth-child(6) { grid-column: span 2; }
  .dhz-expert-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .dhz-expert-media { max-width: 480px; margin: 0 auto; }
  .dhz-big-stat { left: var(--space-4); }
  .dhz-glass-grid { grid-template-columns: repeat(2, 1fr); }
  .dhz-cost-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .dhz-hero { min-height: auto; }
  .dhz-hero h1 { font-size: clamp(1.85rem, 7vw, 2.5rem); }
  .dhz-sign::before { font-size: clamp(3.5rem, 14vw, 5rem); }
  .dhz-proof-grid { grid-template-columns: 1fr; max-width: 460px; }
  .dhz-compare-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .dhz-bento { grid-template-columns: 1fr; }
  .dhz-sign:nth-child(1), .dhz-sign:nth-child(6) { grid-column: auto; }
  .dhz-glass-grid, .dhz-cost-grid { grid-template-columns: 1fr; }
  .dhz-hero-actions { flex-direction: column; align-items: stretch; }
  .dhz-big-stat { position: static; margin: calc(-1 * var(--space-8)) auto 0; max-width: 280px; display: block; }
  .dhz-expert-media { padding-bottom: 0; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="dhz-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Dead and hazardous tree removal in DeLand, Florida">
  <div class="container">
    <nav class="dhz-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Dead &amp; Hazardous Tree Removal</span>
    </nav>

    <span class="dhz-hero-eyebrow">Hazardous Tree Specialists &middot; DeLand, FL</span>

    <h1>Dead &amp; Hazardous Tree Removal in DeLand, FL &mdash; <span class="text-accent">the Tree Service Call Not to Put Off</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, removing dead, dying, and structurally compromised trees across Volusia County since <?php echo e($yearEstablished); ?>. Careful rigging around roofs and pool enclosures, photo documentation for your records, and free written estimates within 24 hours.</p>

    <div class="dhz-hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Hazard Assessment</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="camera"></i> Photo Documentation Included</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ WARNING SIGNS — numbered bento (C5.1) ============ -->
<section class="dhz-signs-section" aria-label="Warning signs of a dead or dangerous tree">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Six Warning Signs</span>
      <h2>How do you know a tree is dead or dangerous in DeLand, FL?</h2>
      <p class="answer-block">A dead or dangerous tree in DeLand usually announces itself: mushrooms or shelf fungus at the base, bare limbs at the top of the crown, hollow cavities, sliding bark, or a lean that wasn't there last year. One sign deserves a look; two or more mean the tree needs an assessment before hurricane season.</p>
    </div>

    <div class="dhz-bento">
      <?php foreach ($warningSigns as $i => $sign): ?>
      <article class="dhz-sign reveal-delay-<?php echo ($i % 3) + 1; ?>" data-num="0<?php echo $i + 1; ?>" data-animate>
        <div class="dhz-sign-icon"><i data-lucide="<?php echo e($sign['icon']); ?>"></i></div>
        <h3><?php echo e($sign['title']); ?></h3>
        <p><?php echo e($sign['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: torn edge (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,42 L55,37 L130,45 L210,32 L295,44 L385,34 L480,46 L575,31 L665,43 L760,35 L855,46 L950,33 L1045,42 L1135,36 L1200,44 L1200,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ EXPERT POSITIONING — big stat ============ -->
<section class="dhz-expert-section" aria-label="Why dangerous trees demand a specialist crew">
  <div class="container">
    <div class="dhz-expert-grid">
      <div class="dhz-expert-copy">
        <span class="eyebrow-label">Dead Wood Plays by Different Rules</span>
        <h2>What makes dangerous tree removal different from standard takedowns?</h2>
        <p class="answer-block">Dead trees are unpredictable in ways live ones aren't &mdash; brittle limbs snap without warning, hollow trunks won't hold a climber, and decayed wood tears instead of hinging on the cut. Dangerous tree removal means slower rigging, more machine work, and a crew that reads decay before trusting it with weight.</p>
        <p data-animate>On a healthy oak, the wood itself is part of the safety system: it hinges, it holds rigging points, it behaves. On the dead pines and declining live oaks we're called to in DeLand, Deltona, Orange City, and DeBary, none of that can be assumed. So the crew sounds the trunk, tests every tie-in, and moves the load onto the boom lift and grapple loader whenever the tree can't be trusted to carry it.</p>
        <ul class="dhz-expert-points" data-p1-dynamic>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Machines carry the risk.</strong> When a trunk is too far gone to climb, our boom lift and compact grapple loader do the reaching and the lifting &mdash; the same one-crew tree-and-bobcat setup, no subcontractors.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Certified arborist judgment.</strong> Declining isn't always dead. If a scratch test and a look at the crown say the tree can be saved with pruning or care, that's the answer you get at the estimate.</p>
          </li>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong>Insurance you can verify.</strong> Licensed and insured, with proof available before a saw starts &mdash; exactly the paperwork that matters most when the job is the risky kind.</p>
          </li>
        </ul>
      </div>

      <div class="dhz-expert-media" data-animate="right">
        <figure>
          <img src="<?php echo e($bodyPhotos['doubletrunk']['src']); ?>" alt="<?php echo e($bodyPhotos['doubletrunk']['alt']); ?>" width="600" height="800" loading="lazy">
          <figcaption>Boom lift and chip truck on a dead double-trunk removal over a DeLand home.</figcaption>
        </figure>
        <div class="dhz-big-stat">
          <div class="dhz-stat-number"><?php echo e($yearsInBusiness); ?><span>+</span></div>
          <div class="dhz-stat-label">Years Reading DeLand's Hazard Trees</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal (cream → dark) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-dark)" points="0,60 1200,8 1200,60"/></svg>
</div>

<!-- ============ WHAT'S INCLUDED — glass cards on dark (C6.4) ============ -->
<section class="dhz-included-section" aria-label="What a hazardous removal includes">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Scope, In Writing</span>
      <h2>What tree removal services are included with a hazardous removal?</h2>
      <p class="answer-block">Every hazardous removal we quote in DeLand includes the risk assessment, a written 24-hour estimate, roped or lift-assisted dismantling, chipping, and same-day debris hauling on most jobs. Photo documentation of the tree's condition comes standard, and stump grinding is quoted up front &mdash; never sprung on you after.</p>
    </div>

    <div class="dhz-glass-grid">
      <?php foreach ($includedItems as $i => $item): ?>
      <article class="dhz-glass-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <span class="dhz-glass-num">0<?php echo $i + 1; ?></span>
        <div class="dhz-glass-icon"><i data-lucide="<?php echo e($item['icon']); ?>"></i></div>
        <h3><?php echo e($item['title']); ?></h3>
        <p><?php echo e($item['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: torn edge (dark → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L145,33 L225,44 L310,30 L400,46 L490,36 L585,44 L680,29 L775,41 L870,34 L965,45 L1060,31 L1150,41 L1200,37 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ COST ============ -->
<section class="dhz-cost-section" aria-label="Hazardous tree removal cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does hazardous tree removal cost?</h2>
      <p class="answer-block">Hazardous tree removal in DeLand usually costs more than removing a comparable healthy tree, because decay forces slower rigging and heavier equipment. Small dead trees in open yards run a few hundred dollars; large brittle oaks or pines over structures cost considerably more. You get a free written, all-in estimate within 24 hours.</p>
    </div>

    <div class="dhz-cost-grid">
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="dhz-cost-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → light) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-light)" points="0,52 1200,60 0,60"/><polygon fill="var(--color-light)" points="0,60 1200,14 1200,60" opacity="0.5"/><polygon fill="var(--color-light)" points="0,60 1200,30 1200,60"/></svg>
</div>

<!-- ============ PROOF ============ -->
<section class="dhz-proof-section" aria-label="Recent hazardous tree removals near DeLand">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Proof</span>
      <h2>Searching for dead tree removal near me in DeLand?</h2>
      <p class="answer-block">If you're typing dead tree removal near me in DeLand, this is what the work looks like nearby: a declining oak dismantled from a bucket at first light, and a tall leaner assessed over a pool screen enclosure before a rope ever goes up. We work within about 50 miles of DeLand &mdash; this crew answers your call.</p>
    </div>

    <div class="dhz-proof-grid">
      <figure data-animate>
        <img src="<?php echo e($bodyPhotos['dawnoak']['src']); ?>" alt="<?php echo e($bodyPhotos['dawnoak']['alt']); ?>" width="600" height="800" loading="lazy">
        <figcaption>Dawn start on a declining oak &mdash; down before the afternoon heat</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($bodyPhotos['poolscreen']['src']); ?>" alt="<?php echo e($bodyPhotos['poolscreen']['alt']); ?>" width="600" height="800" loading="lazy">
        <figcaption>Sizing up a tall leaner over a pool screen enclosure</figcaption>
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

<!-- ============ COMPARISON: wait vs remove ============ -->
<section class="dhz-compare-section" aria-label="Waiting versus removing a dying tree">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Liability Math</span>
      <h2>Should you remove a dying tree now or wait until it falls?</h2>
      <p class="answer-block">Remove it now. A dead tree never gets safer &mdash; Central Florida sun, rain, and beetles make it more brittle every month, and hurricane season sets the deadline. Removal on your schedule happens at standard rates in good weather; removal after it fails means emergency pricing, and possibly a roof.</p>
    </div>

    <div class="dhz-compare-grid">
      <div class="dhz-compare-col dhz-compare-col--wait" data-animate>
        <h3>Waiting it out</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="x"></i> <?php echo e($row['wait']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="dhz-compare-col dhz-compare-col--now" data-animate="right">
        <h3>Removing it on your schedule</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="check"></i> <?php echo e($row['now']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="dhz-faq-section" aria-label="Dead and hazardous tree questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask about dead and dangerous trees?</h2>
      <p class="answer-block">Mostly urgency, insurance, permits, and whether the tree is really dead. Straight answers below, from a crew that has been making the save-or-remove call across Volusia County since <?php echo e($yearEstablished); ?>. If your question isn't here, send it through the estimate form and you'll hear back within 24 hours.</p>
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
<section class="dhz-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Same Crew, Next Job</span>
      <h2>What other tree services do DeLand property owners pair with dead tree removal?</h2>
      <p class="answer-block">Three services pair naturally with a hazardous removal: standard tree removal for healthy trees coming down in the same visit, emergency response for the dead tree that stopped waiting, and certified arborist assessments for the borderline trees you're not sure about. One DeLand crew, one written estimate, all of it.</p>
    </div>

    <?php renderServiceCards(['tree-removal', 'emergency-tree-service-storm-cleanup', 'certified-arborist-services'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="dhz-closing-cta" aria-label="Get a hazardous tree assessment">
  <div class="container">
    <span class="eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Still Sizing Up That Dead Tree Every Time the Wind Picks Up?</h2>
    <p class="answer-block">Send a photo or a description through the estimate form and <?php echo e($siteName); ?> will look at the tree, tell you honestly whether it's a hazard, and put a written, all-in price on removing it &mdash; usually within 24 hours, and always before storm season beats you to it.</p>
    <div class="dhz-hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Get a Free Hazard Assessment</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
