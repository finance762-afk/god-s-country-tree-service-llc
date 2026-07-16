<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/commercial-hoa-tree-services/index.php
 * Commercial & HOA Tree Services — God's Country Tree Service LLC
 * DeLand, FL — Phase 4 editorial service page (spec entry #10)
 * Techniques: C1.4 hero, C6.3 stats band, C6.4 glass cards,
 * C3.2/C3.3/C3.5 wave + double-wave + parallelogram dividers,
 * signature reactive-vs-scheduled ledger, C9.2 radial-glow CTA,
 * C5.1 numbered watermarks, C5.5 balance.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'commercial-hoa-tree-services';

// V2.1 trade-noun title (59 chars) + V2.2 CTR meta (154 chars)
$pageTitle       = "Commercial & HOA Tree Service in DeLand, FL | God's Country";
$pageDescription = 'Commercial & HOA tree service in DeLand, FL — scheduled maintenance, liability-conscious crews, licensed & insured. Request a property assessment today.';
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062730039-tm1j7f-31172143_2042462125974389_3563289646844608512_n.webp'; // skid steer + truck behind tree-protection fencing
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$bodyPhotos = [
    'accessdrive' => [
        'src' => $imgBase . '1784062730938-x2rpuy-31230534_2042462095974392_2998037578067738624_n.webp',
        'alt' => 'Access drive with safety fencing, truck and skid steer on a tree job near DeLand, FL',
    ],
    'acreage' => [
        'src' => $imgBase . '1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
        'alt' => 'Freshly mowed acreage with skid steer near DeLand, FL',
    ],
];

// ---- Liability exposure cards (problem statement bento) ----
$riskCards = [
    ['icon' => 'car',          'title' => 'Limbs over parking rows',      'text' => 'Live oak limbs parked over cars, carports, and dumpster pads are the classic commercial claim in DeLand — heavy wood, sandy soil, and one August thunderstorm.'],
    ['icon' => 'eye',          'title' => 'Blocked signage & lighting',   'text' => 'Canopy that swallows monument signs, security lighting, and sightlines at entrances is a slow-growing problem nobody owns — until an incident report names it.'],
    ['icon' => 'wind',         'title' => 'Storm-season deadwood',        'text' => 'Hurricane season runs June through November. Deadwood that hangs quietly all spring becomes debris across walkways and roofs the first time a named storm brushes Volusia County.'],
    ['icon' => 'file-warning', 'title' => 'The undocumented tree',        'text' => 'A tree nobody has assessed in writing is a liability question with no answer. After a failure, the first document requested is the inspection record you do or do not have.'],
];

// ---- What's included (glass cards on dark section) ----
$includedCards = [
    ['icon' => 'scissors',     'title' => 'Scheduled trimming & lifting', 'text' => 'Canopy raised over drives, parking, and walkways on a planned cycle — clearance stays legal and predictable instead of overgrown and urgent.'],
    ['icon' => 'shield-alert', 'title' => 'Hazard & dead tree removal',   'text' => 'Declining pines and hollowing oaks flagged at walk-throughs come down in controlled sections before they choose their own timing.'],
    ['icon' => 'zap',          'title' => 'Storm response & cleanup',     'text' => 'When weather hits Volusia County, contract properties get the first calls — downed trees and hangers cleared, drives reopened.'],
    ['icon' => 'shovel',       'title' => 'Lot clearing & skid-steer work',   'text' => 'Tree service and land clearing from one company: clearing, brush work, and overgrown acreage mowed as part of the same contract.'],
    ['icon' => 'truck',        'title' => 'Chipping & debris hauling',    'text' => 'Our own chipper, grapple loader, and trucks — brush and logs leave the property the same day, never stacked at the curb for weeks.'],
    ['icon' => 'file-check',   'title' => 'Assessment & documentation',   'text' => 'Every visit ends in writing: what was inspected, what was done, what to watch. Paper your board, manager, or carrier can actually use.'],
];

// ---- Signature comparison: reactive vs scheduled maintenance ----
$comparison = [
    ['reactive' => 'Trees get attention after a limb is already on a car or roof',   'scheduled' => 'Hazards flagged and handled at planned walk-throughs'],
    ['reactive' => 'Emergency rates every time an August storm forces the call',     'scheduled' => 'Contract pricing agreed in writing before storm season'],
    ['reactive' => 'Scrambling for quotes and insurance paperwork per incident',     'scheduled' => 'One insured contractor with documentation already on file'],
    ['reactive' => 'Residents and tenants surprised by chainsaws at 8 AM',           'scheduled' => 'Work windows scheduled and communicated in advance'],
    ['reactive' => 'Liability question marks hanging into hurricane season',         'scheduled' => 'Dated pre-season inspections that show reasonable care'],
];

// ---- HOA working points ----
$hoaPoints = [
    ['strong' => 'Board-ready paperwork.',   'text' => 'Written assessments and line-item quotes your board can circulate, question, and vote on — not a price shouted from a truck window.'],
    ['strong' => 'Insurance before the saw.', 'text' => 'Licensed and insured, with documentation available before the crew arrives. Associations should never have to take coverage on faith.'],
    ['strong' => 'One point of contact.',     'text' => 'A single crew and a single number for the whole property — trimming, removals, storm calls, and skid-steer work, without chasing three vendors.'],
    ['strong' => 'Scheduled around residents.', 'text' => 'Notice goes out before we do. Equipment stages where it will not pin in parking, and bigger communities are phased to keep common areas usable.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Do you work directly with HOA boards and property management companies?',
        'a' => "Yes — that's the point of this service. Boards and managers get a written assessment they can circulate and vote on, one contact for scheduling, and consistent paperwork for every visit. Whether you manage a single office building in DeLand or common areas across an entire community, the crew and the process stay the same.",
    ],
    [
        'q' => 'Can you provide proof of insurance before work starts?',
        'a' => "Yes. God's Country is licensed and insured, and documentation is available before anyone starts a saw. Most property managers ask for it during the bid — we'd rather you ask than assume. That paper trail protects the association or the business just as much as it protects us.",
    ],
    [
        'q' => 'How does a scheduled maintenance contract actually work?',
        'a' => "We walk the property, flag what needs attention now versus what can wait, and put a schedule and price in writing. Visits are planned — typically before hurricane season and again after it — and each one ends with the site clean and the work documented. The scope adjusts as the property's trees change.",
    ],
    [
        'q' => 'Can you work around tenants, residents, and business hours?',
        'a' => 'Yes. Work windows are agreed in advance so residents get notice and businesses are not blocked at their busiest hours. We stage equipment where it will not trap cars, keep access drives open, and split larger properties into phases when that is less disruptive than one long mobilization.',
    ],
    [
        'q' => 'Do you handle storm cleanup for commercial properties?',
        'a' => 'We do — and contract clients get the first calls after a storm moves through Volusia County. Fallen trees on drives, hangers over walkways, and debris across common areas are cleared with our own grapple loader and chipper, then hauled off. It is the same crew you see at scheduled visits, not subcontractors.',
    ],
    [
        'q' => 'Do you also handle lot clearing and skid-steer work?',
        'a' => "Tree service and land clearing come from the same company — the same crew that trims your trees clears your lots. Lot clearing, brush work, mowing overgrown acreage, and debris hauling can fold into the same contract, which is why property owners and developers around DeLand often hire us for the whole site rather than just the trees.",
    ],
    [
        'q' => 'Do you cover commercial properties outside DeLand?',
        'a' => 'Yes — from our DeLand base we serve Deltona, Orange City, DeBary, Lake Helen, and properties within roughly 50 miles across Volusia County. Same crew, same equipment, same written assessment within 24 hours wherever the property sits, and multi-site portfolios in the area can run on a single schedule.',
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
        ['name' => 'Commercial & HOA Tree Services'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Commercial & HOA Tree Services — page-specific styles (.com-)
   Techniques: C1.4 page hero (photo + gradient + noise),
   C6.3 stats band w/ internal dividers, C6.4 glassmorphism cards,
   C3.2 wave / C3.3 double wave / C3.5 stacked parallelograms,
   signature reactive-vs-scheduled ledger, C9.2 radial-glow CTA,
   C5.1 numbered watermarks, C5.5 text-wrap balance.
   All values from tokens — no hardcoded colors/shadows.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.com-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.com-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-secondary) 74%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.com-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.com-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.com-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.com-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.com-breadcrumb a:hover { color: var(--color-accent); }
.com-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.com-hero .hero-eyebrow {
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
.com-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.com-hero h1 .text-accent { color: var(--color-accent); }
.com-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.com-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.com-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.com-hero .hero-trust-item svg,
.com-hero .hero-trust-item i {
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
  font-family: var(--font-accent);
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
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}

/* ---- Problem lede (large statement, accent rule) ---- */
.com-lede {
  max-width: 860px;
  margin: 0 auto var(--space-12);
  padding-left: var(--space-8);
  border-left: 4px solid var(--color-accent);
  font-family: var(--font-accent);
  font-size: clamp(1.35rem, 2.6vw, 1.9rem);
  font-weight: 600;
  line-height: 1.4;
  letter-spacing: -0.01em;
  color: var(--color-text);
  text-wrap: balance;
}
.com-lede strong { color: var(--color-primary); font-weight: 800; }

/* ---- Liability risk bento cards ---- */
.com-risk-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.com-risk-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.com-risk-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.com-risk-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.com-risk-card:nth-child(3n)   { background: var(--color-card-tint-3); }
.com-risk-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.com-risk-card .com-risk-icon {
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
.com-risk-card .com-risk-icon svg,
.com-risk-card .com-risk-icon i { width: 24px; height: 24px; }
.com-risk-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.com-risk-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
}

/* ---- Dark section: stats band (C6.3) + glass cards (C6.4) ---- */
.com-dark-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.com-dark-section::before {
  content: '';
  position: absolute;
  top: -25%;
  left: -12%;
  width: 55%;
  height: 110%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 30%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.com-dark-section .container { position: relative; z-index: 1; }
.com-dark-section .section-title h2 { color: var(--color-white); }
.com-dark-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.com-dark-section .eyebrow-label { color: var(--color-accent); }

/* C6.3 stats band with internal dividers */
.com-stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  text-align: center;
  margin-bottom: var(--space-16);
}
.com-stat-block {
  padding: var(--space-6) var(--space-4);
  border-right: 1px solid color-mix(in srgb, var(--color-white) 12%, transparent);
}
.com-stat-block:last-child { border-right: none; }
.com-stat-number {
  font-family: var(--font-accent);
  font-size: clamp(2.4rem, 5vw, 3.4rem);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1;
}
.com-stat-number .accent { color: var(--color-accent); }
.com-stat-label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
  margin-top: var(--space-2);
}

/* C6.4 glassmorphism cards */
.com-glass-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
}
.com-glass-card {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base), background var(--transition-base);
}
.com-glass-card:hover {
  transform: translateY(-4px);
  border-color: color-mix(in srgb, var(--color-accent) 45%, transparent);
  background: color-mix(in srgb, var(--color-white) 8%, transparent);
}
.com-glass-icon {
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
.com-glass-icon svg, .com-glass-icon i { width: 22px; height: 22px; }
.com-glass-card h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.com-glass-card p {
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  font-size: var(--font-size-sm);
  margin: 0;
}

/* ---- HOA section: asymmetric split with photo ---- */
.com-hoa-section { background: var(--color-cream); }
.com-hoa-split {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.com-hoa-points {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  padding: 0;
}
.com-hoa-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.com-hoa-points li svg, .com-hoa-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.com-hoa-points li strong { color: var(--color-primary); }
.com-hoa-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.com-hoa-figure { margin: 0; position: relative; }
.com-hoa-figure img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
}
.com-hoa-figure::after {
  content: '';
  position: absolute;
  inset: var(--space-4) calc(-1 * var(--space-4)) calc(-1 * var(--space-4)) var(--space-4);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.com-hoa-figure figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-4);
}

/* ---- Signature: reactive vs scheduled ledger ---- */
.com-ledger-section { background: var(--color-white); }
.com-ledger {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 1020px;
  margin: 0 auto;
}
.com-ledger-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
}
.com-ledger-col--reactive {
  background: var(--color-light);
  border: 1px dashed var(--color-gray-light);
}
.com-ledger-col--scheduled {
  background: color-mix(in srgb, var(--color-primary) 6%, var(--color-white));
  border: 2px solid color-mix(in srgb, var(--color-primary) 35%, transparent);
  box-shadow: var(--shadow-lg);
}
.com-ledger-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.com-ledger-col--reactive h3 { color: var(--color-gray); }
.com-ledger-col--scheduled h3 { color: var(--color-primary); }
.com-ledger-col ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  padding: 0;
  margin: 0;
}
.com-ledger-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.com-ledger-col li svg, .com-ledger-col li i {
  width: 18px;
  height: 18px;
  flex-shrink: 0;
  margin-top: 2px;
}
.com-ledger-col--reactive li { color: var(--color-gray); }
.com-ledger-col--reactive li svg, .com-ledger-col--reactive li i { color: color-mix(in srgb, var(--color-gray) 60%, transparent); }
.com-ledger-col--scheduled li svg, .com-ledger-col--scheduled li i { color: var(--color-accent); }
.com-ledger-vs {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  background: var(--color-dark);
  color: var(--color-accent);
  font-family: var(--font-accent);
  font-weight: 800;
  font-size: var(--font-size-sm);
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-lg);
  z-index: 2;
}
.com-ledger-tag {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-3);
  margin-bottom: var(--space-3);
}
.com-ledger-col--reactive .com-ledger-tag {
  background: color-mix(in srgb, var(--color-gray) 12%, transparent);
  color: var(--color-gray);
}
.com-ledger-col--scheduled .com-ledger-tag {
  background: color-mix(in srgb, var(--color-accent) 18%, transparent);
  color: color-mix(in srgb, var(--color-accent) 60%, var(--color-dark));
}

/* ---- Proof: photo duo + review badges ---- */
.com-proof-section { background: var(--color-cream); }
.com-proof-gallery {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-5);
  margin-bottom: var(--space-10);
}
.com-proof-gallery figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.com-proof-gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.com-proof-gallery figure:hover img { transform: scale(1.04); }
.com-proof-gallery figcaption {
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

/* ---- FAQ + related ---- */
.com-faq-section { background: var(--color-white); }
.com-related-section { background: var(--color-light); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.com-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.com-closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, color-mix(in srgb, var(--color-accent) 22%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.com-closing-cta .container { position: relative; z-index: 1; }
.com-closing-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.com-closing-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 62ch;
  margin: 0 auto var(--space-8);
}
.com-closing-cta .hero-actions {
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

/* ---- SVG dividers (3 shapes: parallelogram, wave, double wave) ---- */
.svg-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(36px, 5.5vw, 72px);
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
  .com-risk-grid { grid-template-columns: repeat(2, 1fr); }
  .com-glass-grid { grid-template-columns: repeat(2, 1fr); }
  .com-stats-row { grid-template-columns: repeat(2, 1fr); }
  .com-stat-block {
    border-right: none;
    border-bottom: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
    padding-bottom: var(--space-8);
  }
  .com-stat-block:nth-child(odd) { border-right: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent); }
  .com-stat-block:nth-last-child(-n+2) { border-bottom: none; padding-bottom: var(--space-4); }
  .com-hoa-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .com-hoa-figure { max-width: 480px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .com-hero { min-height: auto; }
  .com-hero h1 { font-size: clamp(1.85rem, 7vw, 2.5rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .com-ledger { grid-template-columns: 1fr; }
  .com-ledger-vs {
    position: static;
    transform: none;
    margin: calc(-1 * var(--space-2)) auto;
  }
  .com-proof-gallery { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .com-risk-grid, .com-glass-grid { grid-template-columns: 1fr; }
  .com-stats-row { grid-template-columns: 1fr; }
  .com-stat-block, .com-stat-block:nth-child(odd) {
    border-right: none;
    border-bottom: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
  }
  .com-stat-block:last-child { border-bottom: none; }
  .com-hero .hero-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="com-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Commercial and HOA tree services in DeLand, Florida">
  <div class="container">
    <nav class="com-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Commercial &amp; HOA Tree Services</span>
    </nav>

    <span class="hero-eyebrow">Commercial &amp; HOA &middot; DeLand, FL</span>

    <h1>Commercial &amp; HOA Tree Services in DeLand, FL &mdash; <span class="text-accent">Tree Service That Keeps Properties Covered</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving commercial properties and HOA communities across Volusia County since <?php echo e($yearEstablished); ?>. Scheduled maintenance contracts, insurance documented before the first cut, and one crew for trees, cleanup, and land clearing &mdash; with written assessments within 24 hours.</p>

    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Request a Property Assessment</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in DeLand</span>
      <span class="hero-trust-item"><i data-lucide="calendar-check"></i> Scheduled Contract Work</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Assessments Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ PROBLEM: LIABILITY — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Tree liability on commercial properties">
  <div class="container">
    <p class="com-lede" data-animate>When a limb drops on a parked car, the first question is never about the tree. It&rsquo;s <strong>who knew, and when</strong> &mdash; and a dated maintenance record is the difference between an incident and a lawsuit.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Paper Trail Matters</span>
      <h2>How does property tree maintenance reduce liability?</h2>
      <p class="answer-block">Documented, scheduled tree maintenance shows a property took reasonable care before anything failed. Hazard limbs get flagged and removed at planned visits instead of after an incident, insurance stays verifiable, and every assessment leaves a paper trail &mdash; exactly what boards, managers, and carriers ask about after a Volusia County storm.</p>
    </div>

    <div class="com-risk-grid">
      <?php foreach ($riskCards as $i => $card): ?>
      <article class="com-risk-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="com-risk-icon"><i data-lucide="<?php echo e($card['icon']); ?>"></i></div>
        <h3><?php echo e($card['title']); ?></h3>
        <p><?php echo e($card['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (white → dark) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-dark)" opacity="0.3" points="0,20 1200,40 1200,80 0,80"/><polygon fill="var(--color-dark)" points="0,40 1200,20 1200,80 0,80"/></svg>
</div>

<!-- ============ WHAT'S INCLUDED: STATS BAND + GLASS CARDS — 02 ============ -->
<section class="com-dark-section" aria-label="What commercial tree service includes">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">One Crew, Whole Property</span>
      <h2>What does commercial tree service include for DeLand properties?</h2>
      <p class="answer-block">Commercial tree service from God&rsquo;s Country covers scheduled trimming and canopy lifting, hazard and dead tree removal, storm response, lot clearing, and full debris hauling &mdash; one licensed and insured crew running its own skid steer, chipper, and grapple loader. Every visit ends with the site clean and the work documented in writing.</p>
    </div>

    <div class="com-stats-row" data-p1-dynamic>
      <div class="com-stat-block" data-animate>
        <div class="com-stat-number"><?php echo e($yearsInBusiness); ?><span class="accent">+</span></div>
        <div class="com-stat-label">Years Serving DeLand</div>
      </div>
      <div class="com-stat-block reveal-delay-1" data-animate>
        <div class="com-stat-number"><?php echo e($yearEstablished); ?></div>
        <div class="com-stat-label">Local Since</div>
      </div>
      <div class="com-stat-block reveal-delay-2" data-animate>
        <div class="com-stat-number">12</div>
        <div class="com-stat-label">Tree Services, One Crew</div>
      </div>
      <div class="com-stat-block reveal-delay-3" data-animate>
        <div class="com-stat-number">24<span class="accent">hr</span></div>
        <div class="com-stat-label">Written Assessments</div>
      </div>
    </div>

    <div class="com-glass-grid">
      <?php foreach ($includedCards as $i => $card): ?>
      <article class="com-glass-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="com-glass-icon"><i data-lucide="<?php echo e($card['icon']); ?>"></i></div>
        <h3><?php echo e($card['title']); ?></h3>
        <p><?php echo e($card['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: curved wave (dark → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ HOA COMMUNITIES — 03 ============ -->
<section class="numbered-section com-hoa-section" data-num="03" aria-label="HOA tree services">
  <div class="container">
    <div class="com-hoa-split">
      <div>
        <span class="eyebrow-label">Built for Boards &amp; Managers</span>
        <h2>How do HOA tree services keep communities compliant and safe?</h2>
        <p class="answer-block">For HOA communities around DeLand, tree work is as much paperwork as chainsaw: written assessments a board can vote on, certificates of insurance before a crew arrives, work windows residents hear about in advance, and steady care of the community&rsquo;s live oaks and palms so common areas stay safe and presentable.</p>
        <p data-animate>From the mature oak canopy near historic downtown DeLand out to newer communities toward Deltona, Orange City, and DeBary, the pattern is the same: common-area trees nobody thinks about until a storm makes everyone think about them. A standing schedule gets deadwood out before hurricane season, keeps canopy off streetlights and rooflines, and gives the association a record that the trees were managed &mdash; not merely admired.</p>
        <ul class="com-hoa-points" data-p1-dynamic>
          <?php foreach ($hoaPoints as $point): ?>
          <li data-animate>
            <i data-lucide="check-circle"></i>
            <p><strong><?php echo e($point['strong']); ?></strong> <?php echo e($point['text']); ?></p>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <figure class="com-hoa-figure" data-animate="right">
        <img src="<?php echo e($bodyPhotos['accessdrive']['src']); ?>" alt="<?php echo e($bodyPhotos['accessdrive']['alt']); ?>" width="800" height="520" loading="lazy">
        <figcaption>Access route planned between safety fencing on a clearing job near DeLand &mdash; the same site discipline we bring to contract properties.</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-white)" opacity="0.35" points="0,30 1200,50 1200,80 0,80"/><polygon fill="var(--color-white)" points="0,50 1200,30 1200,80 0,80"/></svg>
</div>

<!-- ============ SIGNATURE: REACTIVE VS SCHEDULED — 04 ============ -->
<section class="numbered-section com-ledger-section" data-num="04" aria-label="Reactive versus scheduled tree maintenance">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Cost of Waiting</span>
      <h2>Why put business tree care on a maintenance schedule?</h2>
      <p class="answer-block">Because reactive tree work is the most expensive kind. A scheduled contract catches hazards at planned visits, locks pricing in writing before hurricane season, and keeps insurance and documentation current &mdash; while reactive care means emergency rates, scrambling after every summer storm, and the trees deciding the timing instead of you.</p>
    </div>

    <div class="com-ledger">
      <div class="com-ledger-col com-ledger-col--reactive" data-animate>
        <span class="com-ledger-tag">The Reactive Property</span>
        <h3>Waiting for the phone call</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="x"></i> <?php echo e($row['reactive']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <span class="com-ledger-vs" aria-hidden="true">VS</span>
      <div class="com-ledger-col com-ledger-col--scheduled" data-animate="right">
        <span class="com-ledger-tag">On a God&rsquo;s Country Schedule</span>
        <h3>Maintenance on the calendar</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><i data-lucide="check"></i> <?php echo e($row['scheduled']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: double wave (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-cream)" opacity="0.4"/><path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ PROOF — 05 ============ -->
<section class="numbered-section com-proof-section" data-num="05" aria-label="Commercial tree work near DeLand">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Our Equipment, Our Crew</span>
      <h2>Searching for commercial tree service near me in DeLand?</h2>
      <p class="answer-block">If you&rsquo;re searching for commercial tree service near me in DeLand, this is what our job sites look like: protection fencing up before the saws start, equipment staged clear of access routes, and acreage left mowed and clean. We handle commercial work within about 50 miles of DeLand across Volusia County.</p>
    </div>

    <div class="com-proof-gallery">
      <figure data-animate>
        <img src="<?php echo e($heroImage); ?>" alt="Skid steer and service truck staged behind tree-protection fencing on a DeLand, FL jobsite" width="800" height="500" loading="lazy">
        <figcaption>Tree-protection fencing and staged equipment on a DeLand clearing job</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <img src="<?php echo e($bodyPhotos['acreage']['src']); ?>" alt="<?php echo e($bodyPhotos['acreage']['alt']); ?>" width="800" height="800" loading="lazy">
        <figcaption>Acreage mowed and cleared near DeLand &mdash; skid-steer work from the same crew</figcaption>
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
<section class="numbered-section com-faq-section" data-num="06" aria-label="Commercial and HOA tree service questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Before You Sign</span>
      <h2>What do DeLand property managers ask before signing a tree contract?</h2>
      <p class="answer-block">The same things a good manager asks every vendor: who carries the insurance, how scheduling works, whether residents get notice, and what happens after a storm. Straight answers below &mdash; and if yours isn&rsquo;t covered, send it through the assessment form and we&rsquo;ll answer within 24 hours.</p>
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
<section class="com-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Round Out the Contract</span>
      <h2>What other tree services do DeLand property owners pair with commercial &amp; HOA tree care?</h2>
      <p class="answer-block">Most contract properties bundle three things: ongoing maintenance visits between big jobs, hazardous tree removals flagged during walk-throughs, and emergency storm response when hurricane season delivers. All of it comes from the same God&rsquo;s Country crew, usually written into one schedule and one assessment.</p>
    </div>

    <?php renderServiceCards(['tree-maintenance-care', 'dead-hazardous-tree-removal', 'emergency-tree-service-storm-cleanup'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="com-closing-cta" aria-label="Request a commercial property assessment">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Ready to Get Your Property on the Maintenance Calendar Before Hurricane Season?</h2>
    <p class="answer-block">Tell us about the property &mdash; office park, retail strip, HOA common areas, or raw acreage. <?php echo e($siteName); ?> will walk it with you, flag what actually needs work, and put a schedule and a straight price in writing, usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/#estimate-form" class="btn btn-accent btn-lg">Request a Property Assessment</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
