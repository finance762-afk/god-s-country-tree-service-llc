<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/land-clearing/index.php — Lot & Land Clearing
 * God's Country Tree Service LLC — DeLand, FL
 * SEO pass 2026-10-13 — new service page (interactive-patterns §2.8)
 * Layout: C1.4 hero, tinted lot-type cards, keep/mark/clear vertical
 * timeline signature (C7.1 variant) with C11.1 framed photos, dark
 * equipment band w/ radial glow, C3 diagonal slant + torn-edge dividers,
 * C5.1 numbered watermarks, C9.2 radial-glow closing CTA
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'land-clearing';

// V2.1 trade-noun title (53 chars) + V2.2 CTR meta (159 chars)
$pageTitle       = "Land Clearing DeLand FL | {$gbpRating}★ Rated | Free Estimates";
$pageDescription = "Lot & land clearing in DeLand & Volusia County, {$gbpRating}★ from {$gbpReviewCount} Google reviews. Licensed & insured, own equipment, free estimate in 24 hours. Call (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (client clearing-job photos, localized) ----
$imgBase = '/assets/images/';

$heroImage        = $imgBase . '1784062729442-t1gqhh-31144196_2042462182641050_2975434522398556160_n.webp'; // graded lot, kept oaks fenced, crew + loader (landscape panorama)
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$bodyPhotos = [
    'stumps' => [
        'src' => $imgBase . '1784062729745-ekffah-31162327_2042462179307717_7701525571804594176_n.webp',
        'alt' => 'Grapple track loader moving uprooted stumps and root balls during land clearing near DeLand, FL',
        'cap' => 'The grapple track loader pulling stumps and root balls out of the sandy ground',
    ],
    'marked' => [
        'src' => $imgBase . '1784062730640-gzvyp4-31206267_2042462085974393_6334697554642468864_n.webp',
        'alt' => 'Pines marked with a red X for removal, chipper and crew working behind them, DeLand, FL',
        'cap' => 'Two pines wearing the red X, chipper running in the oaks behind them',
    ],
    'staged' => [
        'src' => $imgBase . '1784062730039-tm1j7f-31172143_2042462125974389_3563289646844608512_n.webp',
        'alt' => 'Skid steer and service truck staged behind tree-protection fencing on a wooded DeLand, FL lot',
        'cap' => 'Skid steer and service truck staged behind the protection fencing on a wooded lot',
    ],
    'kubota' => [
        'src' => $imgBase . '1784062764583-5ppnr0-504117245_4046117545608827_1977518947574848401_n.webp',
        'alt' => "God's Country Kubota SVL75-2 track loader on site in DeLand, FL",
        'cap' => 'The God\'s Country Kubota SVL75-2 on site while a climber works the tree behind it',
    ],
    'access' => [
        'src' => $imgBase . '1784062730938-x2rpuy-31230534_2042462095974392_2998037578067738624_n.webp',
        'alt' => 'Access drive with safety fencing, truck and skid steer on a clearing job near DeLand, FL',
        'cap' => 'Gravel access drive kept open between the safety fencing, pickup and skid steer under the oaks',
    ],
    'mowed' => [
        'src' => $imgBase . '1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
        'alt' => 'Freshly mowed acreage with a skid steer and pine tree line near DeLand, FL',
        'cap' => 'Freshly bush-hogged acreage, mow rows still showing, skid steer at the edge, near DeLand, FL',
    ],
];

// ---- Lot types (tinted cards) ----
$lotTypes = [
    ['icon' => 'house',  'title' => 'A wooded homesite before a build', 'text' => 'A treed parcel that needs a building pad, a path for the drive and a clear perimeter, with the live oaks you plan to build around fenced off and left standing.'],
    ['icon' => 'shrub',  'title' => 'An overgrown back acre',           'text' => 'Ground that has gone to palmettos, vines and volunteer sand pines. Bush-hogged back to usable land, or fully cleared with the stumps out, whichever line of the estimate you choose.'],
    ['icon' => 'fence',  'title' => 'Fence lines and access drives',    'text' => 'Brush and leaning trees taken off a fence line, a farm lane, or the drive to a barn or pond site, with the access kept fenced and open while the crew works.'],
    ['icon' => 'trees',  'title' => 'Selective clearing that keeps the oaks', 'text' => 'The Spanish moss-draped oaks stay; the laurel oaks, sand pines and undergrowth go. Keepers are fenced, removals are marked, and the lot ends up shaded and buildable.'],
];

// ---- Keep / mark / clear timeline (signature section) ----
$clearSteps = [
    ['icon' => 'fence',   'num' => '01', 'title' => 'Fence the keepers',                 'text' => 'Orange tree-protection fencing goes up around every tree that stays, out where the roots live, so no machine tracks over them and no felled trunk swings into their canopy.'],
    ['icon' => 'x',       'num' => '02', 'title' => 'Mark the removals',                 'text' => 'Each tree that comes out gets a red X on the trunk. You see exactly what is leaving before it leaves, and nobody on the crew has to guess at a pine that looks like its neighbor.'],
    ['icon' => 'axe',     'num' => '03', 'title' => 'Fell and chip',                     'text' => 'Marked trees are felled away from the keepers, limbed, and fed to the chipper on site. Anything too close to a structure to fell is climbed and brought down in sections instead.'],
    ['icon' => 'tractor', 'num' => '04', 'title' => 'Grapple the stumps and root balls', 'text' => 'The track loader\'s grapple pulls stumps and root balls out of the sandy soil whole and stacks them for the chip truck, so a builder is not surprised by a buried stump later.'],
    ['icon' => 'truck',   'num' => '05', 'title' => 'Grade and haul',                    'text' => 'The skid steer rough-grades the cleared ground smooth, the debris leaves on our trucks, and the lot is walked with you before we go. Cleaner than we found it, in Caleb\'s words.'],
];

// ---- Equipment (dark band) ----
$gear = [
    ['icon' => 'tractor',      'title' => 'Kubota SVL75-2 track loader with grapple', 'text' => 'Pulls stumps and root balls, carries whole log sections and stacks debris for loading. The grapple does the work that used to take a chain and a pickup.'],
    ['icon' => 'construction', 'title' => 'Grapple skid steer',                        'text' => 'Pushes brush and palmetto into piles for the chipper, bush-hogs overgrown acreage, and rough-grades the cleared ground once the stumps are out.'],
    ['icon' => 'layers',       'title' => 'Wood chipper',                              'text' => 'Limbs and brush go in on the lot and come out as chips, which is how a clearing job leaves without a burn pile sitting on the parcel.'],
    ['icon' => 'truck',        'title' => 'Chip truck',                                'text' => 'Lettered "Tree Service – Bobcat Service," it hauls the chips, logs and root balls off the property. The debris leaves on our trucks, not into a pile at the lot line.'],
    ['icon' => 'trees',        'title' => 'Forestry bucket truck and climbers',        'text' => 'For trees too close to a house, barn or service drop to fell, the bucket truck and our climbers take them down in rigged sections. Same crew, same visit.'],
];

// ---- Cost factors ----
$costFactors = [
    ['title' => 'Tree count and size',      'text' => 'A lot of sand pines and palmettos comes out faster than a stand of mature laurel oaks. How many trees wear the red X, and how big they are, sets most of the price.'],
    ['title' => 'Stumps and root balls',    'text' => 'Leaving stumps, pulling them whole with the grapple loader, or grinding them below grade are different amounts of work. The estimate quotes the option you choose, and you can mix them across the lot.'],
    ['title' => 'Access and haul distance', 'text' => 'A parcel the chip truck can back into costs less to clear than one where every load crosses a fenced drive or a soft sandy lane. The estimate reflects how far the debris has to travel.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Do I need a permit to clear a lot in DeLand?',
        'a' => 'Possibly, depending on which trees are on it. The City of DeLand has a tree protection ordinance and Volusia County regulates protected trees, and the rules turn on species, size and where the tree stands. At the estimate visit we point out the trees on your lot that are likely to need a permit, and you confirm with the city or the county before clearing begins.',
    ],
    [
        'q' => 'Can you clear the lot but leave the big oaks?',
        'a' => 'Yes, and that is the request we hear most around DeLand. The Spanish moss-draped live oaks are fenced off before any machine moves, the removals are marked with a red X, and the marked trees come down away from the keepers. You end up with shade over a buildable lot instead of a bare one.',
    ],
    [
        'q' => 'What happens to the stumps when you clear land?',
        'a' => 'Whatever the written estimate says. The grapple track loader can pull stumps and root balls out whole and haul them off, the stumps can be ground below grade, or they can stay put on a parcel that is only being opened up for pasture. Each option is its own line on the estimate, so you choose tree by tree.',
    ],
    [
        'q' => 'What happens to the wood and brush?',
        'a' => 'Brush and limbs go through the chipper on site, and the chips, logs and root balls leave on our trucks. If you want firewood, ask at the estimate; the trunks can usually be bucked and left in a pile on the property instead of hauled. Either way the lot is raked and walked with you before the crew leaves, cleaner than we found it.',
    ],
    [
        'q' => 'Can you just mow an overgrown acre instead of clearing it?',
        'a' => 'Yes. If a parcel has gone to palmettos, vines and small volunteer pines but you do not need the stumps out, bush-hogging with the skid steer knocks it back to usable ground with far less work than a full clear. We will tell you at the estimate which approach fits what you plan to do with the land.',
    ],
    [
        'q' => 'Do you clear land for farms and businesses, or only homeowners?',
        'a' => 'All of them. God\'s Country Tree Service clears for homeowners, businesses, farms and property owners around DeLand and Volusia County: a fence line on a farm, a pond or barn site, an HOA common area that has gone to brush, or a commercial parcel ahead of construction. Licensed and insured for every one of them, with the same crew and the same written estimate.',
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
        ['name' => 'Home',                'url' => '/'],
        ['name' => 'Services',            'url' => '/services/'],
        ['name' => 'Lot & Land Clearing'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Lot & Land Clearing — page-specific styles (.lnd- prefix)
   Techniques: C1.4 page hero (photo + gradient + noise),
   tinted card rotation, keep/mark/clear vertical timeline with
   nodes (C7.1 variant signature), C11.1 framed images w/ offset
   accent shadow, dark equipment band w/ radial glow, C3 diagonal
   slant + torn organic-edge dividers, C5.1 numbered watermarks,
   C9.2 radial-glow closing CTA.
   All values from tokens / color-mix — no hardcoded colors.
   ============================================================ */

/* ---- C1.4 Page hero: photo + gradient + noise ---- */
.lnd-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 45%;
  overflow: hidden;
}
.lnd-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    170deg,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 66%, transparent) 48%,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 100%
  );
}
.lnd-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.lnd-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.lnd-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.lnd-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.lnd-breadcrumb a:hover { color: var(--color-accent); }
.lnd-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.lnd-hero .hero-eyebrow {
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
.lnd-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 24ch;
  margin-bottom: var(--space-5);
}
.lnd-hero h1 .text-accent { color: var(--color-accent); }
.lnd-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.lnd-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.lnd-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.lnd-hero .hero-trust-item svg,
.lnd-hero .hero-trust-item i {
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
.lnd-gear-section.numbered-section::before {
  color: color-mix(in srgb, var(--color-white) 5%, transparent);
}

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
.answer-block a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  transition: color var(--transition-fast);
}
.answer-block a:hover { color: var(--color-accent); }
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
.lnd-body {
  max-width: 68ch;
  margin: 0 auto;
  color: var(--color-text);
}
.lnd-body a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
}
.lnd-body a:hover { color: var(--color-accent); }

/* ---- Lot types: oversized lead + tinted card rotation ---- */
.lnd-lots-section { background: var(--color-white); }
.lnd-lead {
  max-width: 900px;
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
.lnd-lead strong { color: var(--color-primary); }
.lnd-lots {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.lnd-lot {
  position: relative;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.lnd-lot:nth-child(3n+1) { background: var(--color-card-tint-1); }
.lnd-lot:nth-child(3n+2) { background: var(--color-card-tint-2); }
.lnd-lot:nth-child(3n)   { background: var(--color-card-tint-3); }
.lnd-lot::after {
  content: '';
  position: absolute;
  right: calc(-1 * var(--space-8));
  bottom: calc(-1 * var(--space-8));
  width: 110px;
  height: 110px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 6%, transparent);
  transition: transform var(--transition-slow);
}
.lnd-lot:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
.lnd-lot:hover::after { transform: scale(1.4); }
.lnd-lot-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-5);
}
.lnd-lot-icon svg, .lnd-lot-icon i { width: 26px; height: 26px; }
.lnd-lot h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.lnd-lot p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
  position: relative;
  z-index: 1;
}

/* ---- Signature: keep / mark / clear vertical timeline ---- */
.lnd-process-section { background: var(--color-cream); }
.lnd-process-layout {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: clamp(2.5rem, 6vw, 5rem);
  align-items: start;
}
.lnd-timeline {
  position: relative;
  list-style: none;
  padding: 0;
  margin: 0;
}
.lnd-timeline::before {
  content: '';
  position: absolute;
  left: 27px;
  top: var(--space-4);
  bottom: var(--space-4);
  width: 2px;
  background: linear-gradient(
    to bottom,
    var(--color-accent) 0%,
    color-mix(in srgb, var(--color-primary) 55%, transparent) 60%,
    color-mix(in srgb, var(--color-primary) 10%, transparent) 100%
  );
}
.lnd-step {
  position: relative;
  display: grid;
  grid-template-columns: 56px 1fr;
  gap: var(--space-5);
  align-items: start;
  padding-bottom: var(--space-8);
}
.lnd-step:last-child { padding-bottom: 0; }
.lnd-step-node {
  position: relative;
  z-index: 1;
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 0 6px var(--color-cream), var(--shadow-md);
  transition: transform var(--transition-base), background var(--transition-base);
}
.lnd-step-node svg, .lnd-step-node i { width: 24px; height: 24px; }
.lnd-step:hover .lnd-step-node { transform: scale(1.08); background: var(--color-accent); color: var(--color-dark); }
.lnd-step-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-left: 4px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.lnd-step:nth-child(even) .lnd-step-card { border-left-color: var(--color-primary); }
.lnd-step:hover .lnd-step-card { transform: translateX(4px); box-shadow: var(--shadow-md); }
.lnd-step-num {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2);
}
.lnd-step:nth-child(even) .lnd-step-num { color: var(--color-primary); }
.lnd-step-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.lnd-step-card p {
  margin: 0;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
}
.lnd-photo-stack {
  display: flex;
  flex-direction: column;
  gap: var(--space-10);
  position: sticky;
  top: calc(var(--nav-height) + var(--space-6));
}
.lnd-photo-stack .lnd-framed:nth-child(2) { margin-left: var(--space-10); }
.lnd-process-note {
  margin-top: var(--space-12);
}

/* ---- C11.1 framed image with offset accent shadow ---- */
.lnd-framed {
  position: relative;
  margin: 0;
  padding: 0 var(--space-4) var(--space-4) 0;
}
.lnd-framed::before {
  content: '';
  position: absolute;
  inset: var(--space-4) 0 0 var(--space-4);
  background: color-mix(in srgb, var(--color-accent) 80%, var(--color-white));
  border-radius: var(--radius-lg);
  z-index: 0;
}
.lnd-framed--primary::before {
  background: color-mix(in srgb, var(--color-primary) 70%, var(--color-white));
}
.lnd-framed--flip { padding: 0 0 var(--space-4) var(--space-4); }
.lnd-framed--flip::before { inset: var(--space-4) var(--space-4) 0 0; }
.lnd-framed img {
  position: relative;
  z-index: 1;
  width: 100%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
  object-fit: cover;
}
.lnd-framed--square img { aspect-ratio: 1 / 1; }
.lnd-framed--tall img { aspect-ratio: 3 / 4; }
.lnd-framed figcaption {
  position: relative;
  z-index: 1;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-3);
}

/* ---- Equipment: dark band with radial glow ---- */
.lnd-gear-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.lnd-gear-section::after {
  content: '';
  position: absolute;
  top: -30%;
  right: -15%;
  width: 70%;
  height: 140%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 40%, transparent) 0%, transparent 62%);
  pointer-events: none;
  z-index: 0;
}
.lnd-gear-glow {
  position: absolute;
  bottom: -40%;
  left: -10%;
  width: 55%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-accent) 16%, transparent) 0%, transparent 60%);
  pointer-events: none;
  z-index: 0;
}
.lnd-gear-section .container { position: relative; z-index: 1; }
.lnd-gear-section .section-title h2 { color: var(--color-white); }
.lnd-gear-section .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.lnd-gear-section .eyebrow-label { color: var(--color-accent); }
.lnd-gear-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2.5rem, 6vw, 5rem);
  align-items: center;
}
.lnd-gear-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.lnd-gear-item {
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: var(--space-4);
  align-items: start;
  padding: var(--space-5);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 11%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  transition: transform var(--transition-base), border-color var(--transition-base), background var(--transition-base);
}
.lnd-gear-item:hover {
  transform: translateX(6px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
  background: color-mix(in srgb, var(--color-primary) 28%, transparent);
}
.lnd-gear-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-accent) 18%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 40%, transparent);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
}
.lnd-gear-icon svg, .lnd-gear-icon i { width: 22px; height: 22px; }
.lnd-gear-item h3 {
  color: var(--color-white);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
  text-wrap: balance;
}
.lnd-gear-item p {
  color: color-mix(in srgb, var(--color-white) 76%, transparent);
  font-size: var(--font-size-sm);
  margin: 0;
}
.lnd-gear-photos {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: var(--space-5);
  align-items: end;
}
.lnd-gear-photos .lnd-framed::before {
  background: color-mix(in srgb, var(--color-accent) 55%, var(--color-dark));
}
.lnd-gear-photos .lnd-framed figcaption { color: color-mix(in srgb, var(--color-white) 65%, transparent); }
.lnd-story {
  margin-top: var(--space-12);
  max-width: 72ch;
  margin-left: auto;
  margin-right: auto;
  padding: var(--space-6) var(--space-8);
  border-left: 3px solid var(--color-accent);
  color: color-mix(in srgb, var(--color-white) 84%, transparent);
  font-size: var(--font-size-base);
}
.lnd-story a {
  color: var(--color-accent);
  text-decoration: underline;
  text-underline-offset: 3px;
}
.lnd-story a:hover { color: var(--color-white); }
.lnd-story strong { color: var(--color-white); }

/* ---- Permits & protected trees ---- */
.lnd-permit-section { background: var(--color-white); }
.lnd-permit-layout {
  display: grid;
  grid-template-columns: 1fr 1.05fr;
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: center;
}
.lnd-permit-copy h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
  max-width: 24ch;
}
.lnd-permit-copy .answer-block {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  margin-bottom: var(--space-5);
}
.lnd-permit-copy p { color: var(--color-text); }
.lnd-permit-copy p a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
}
.lnd-permit-copy p a:hover { color: var(--color-accent); }
.lnd-permit-note {
  display: grid;
  grid-template-columns: 40px 1fr;
  gap: var(--space-4);
  align-items: start;
  margin-top: var(--space-6);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-card-tint-3);
  border: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);
}
.lnd-permit-note svg, .lnd-permit-note i {
  width: 40px;
  height: 40px;
  color: var(--color-accent);
}
.lnd-permit-note p {
  margin: 0;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.lnd-permit-note strong { color: var(--color-primary-dark); }

/* ---- Cost factors ---- */
.lnd-cost-section { background: var(--color-light); }
.lnd-cost-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.lnd-cost-card {
  position: relative;
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-8) var(--space-6) var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.lnd-cost-card:nth-child(even) { border-top-color: var(--color-accent); }
.lnd-cost-card::before {
  content: attr(data-factor);
  position: absolute;
  top: var(--space-2);
  right: var(--space-4);
  font-family: var(--font-accent);
  font-size: clamp(2.5rem, 5vw, 3.5rem);
  font-weight: 800;
  line-height: 1;
  color: color-mix(in srgb, var(--color-primary) 7%, transparent);
  pointer-events: none;
}
.lnd-cost-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.lnd-cost-card h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-2);
  text-wrap: balance;
  position: relative;
}
.lnd-cost-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; position: relative; }
.lnd-cost-phasing {
  margin: var(--space-10) auto 0;
  max-width: 68ch;
  text-align: center;
  color: var(--color-text);
  font-size: var(--font-size-base);
}
.lnd-cost-phasing strong { color: var(--color-primary); }

/* ---- Proof: framed photo + area chips + badges ---- */
.lnd-proof-section { background: var(--color-white); }
.lnd-proof-layout {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: center;
  margin-bottom: var(--space-10);
}
.lnd-proof-copy h2 { text-wrap: balance; margin-bottom: var(--space-4); max-width: 24ch; }
.lnd-proof-copy .answer-block {
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.lnd-area-chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-5);
}
.lnd-area-chip {
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
.lnd-area-chip:hover { border-color: var(--color-primary); background: var(--color-card-tint-1); }
.lnd-area-chip svg, .lnd-area-chip i { width: 14px; height: 14px; color: var(--color-primary); }
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
.lnd-faq-section { background: var(--color-cream); }
.lnd-faq-section .faq-item { background: var(--color-white); }
.lnd-related-section { background: var(--color-white); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.lnd-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.lnd-closing-cta::before {
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
.lnd-closing-cta .container { position: relative; z-index: 1; }
.lnd-closing-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.lnd-closing-cta .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.lnd-closing-cta .answer-block a { color: var(--color-accent); text-decoration: underline; text-underline-offset: 3px; }
.lnd-closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 shapes: diagonal slant + torn organic edge) ---- */
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
.svg-divider--on-white { background: var(--color-white); }
.svg-divider--on-cream { background: var(--color-cream); }
.svg-divider--on-dark  { background: var(--color-dark); }
.svg-divider--torn { height: clamp(28px, 4.5vw, 56px); }

/* ---- Reveal stagger delays (shared idiom) ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }
html.js-anim [data-animate].reveal-delay-5 { transition-delay: 0.40s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .lnd-lots { grid-template-columns: repeat(2, 1fr); }
  .lnd-process-layout { grid-template-columns: 1fr; }
  .lnd-photo-stack {
    position: static;
    flex-direction: row;
    gap: var(--space-6);
  }
  .lnd-photo-stack .lnd-framed { flex: 1; }
  .lnd-photo-stack .lnd-framed:nth-child(2) { margin-left: 0; margin-top: var(--space-8); }
  .lnd-gear-layout { grid-template-columns: 1fr; }
  .lnd-gear-photos { max-width: 720px; }
  .lnd-permit-layout { grid-template-columns: 1fr; }
  .lnd-proof-layout { grid-template-columns: 1fr; }
  .lnd-proof-layout .lnd-framed { max-width: 560px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .lnd-hero { min-height: auto; }
  .lnd-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .lnd-lead { padding-left: var(--space-5); }
  .lnd-photo-stack { flex-direction: column; }
  .lnd-photo-stack .lnd-framed:nth-child(2) { margin-top: 0; margin-left: var(--space-8); }
  .lnd-timeline::before { left: 23px; }
  .lnd-step { grid-template-columns: 48px 1fr; gap: var(--space-4); }
  .lnd-step-node { width: 48px; height: 48px; }
  .lnd-step-node svg, .lnd-step-node i { width: 20px; height: 20px; }
  .lnd-gear-photos { grid-template-columns: 1fr 1fr; }
  .lnd-story { padding: var(--space-5); }
  .lnd-cost-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .lnd-lots { grid-template-columns: 1fr; }
  .lnd-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .lnd-gear-photos { grid-template-columns: 1fr; }
  .lnd-gear-item { grid-template-columns: 40px 1fr; }
  .lnd-gear-icon { width: 40px; height: 40px; }
  .lnd-photo-stack .lnd-framed:nth-child(2) { margin-left: 0; }
  .lnd-permit-note { grid-template-columns: 1fr; }
  .lnd-step-card { padding: var(--space-5); }
}
</style>

<article class="service-article">

<!-- ============ HERO (C1.4) ============ -->
<section class="lnd-hero has-hero-bg" aria-label="Lot and land clearing in DeLand, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="lnd-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Lot &amp; Land Clearing</span>
    </nav>

    <span class="hero-eyebrow">Lot &amp; Land Clearing &middot; DeLand, FL</span>

    <h1>Lot &amp; Land Clearing in DeLand, FL: <span class="text-accent">Keep the Oaks, Clear the Rest</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, clearing lots, acreage and overgrown parcels across Volusia County with our own grapple track loader and skid steer. Selective tree removal, brush and undergrowth, stumps and root balls, bush-hogging and rough grading. One crew, a free written estimate within 24 hours, and the debris hauled off on our trucks.</p>

    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Clearing Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('tractor'); ?> Own Skid Steer &amp; Grapple Loader</span>
      <span class="hero-trust-item"><?php echo icon('fence'); ?> Kept Trees Fenced Off</span>
      <span class="hero-trust-item"><?php echo icon('truck'); ?> Debris Hauled on Our Trucks</span>
      <span class="hero-trust-item"><?php echo icon('file-check'); ?> Free Written Estimate</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-land-clearing';
    $heroFormService  = 'Lot & Land Clearing';
    $heroFormHeading  = 'Get a Free Clearing Estimate';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ LOT TYPES — 01 ============ -->
<section class="numbered-section lnd-lots-section" data-num="01" aria-label="Kinds of lots we clear">
  <div class="container">
    <p class="lnd-lead" data-animate>An untended Central Florida lot does not stay cleared. Palmettos, vines, laurel oaks and sand pines move back in fast on DeLand&rsquo;s sandy, fast-draining soil, and <strong>the longer a parcel sits, the more there is to take out</strong>.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Clear</span>
      <h2>What does lot and land clearing in DeLand actually cover?</h2>
      <p class="answer-block">God's Country Tree Service clears wooded homesites before a build, overgrown back acreage, fence lines and access drives, and parcels where the owner wants the oaks kept and everything else gone. The same crew handles the trees, the stumps, the brush and the haul-off, so nothing waits on a second contractor.</p>
    </div>

    <div class="lnd-lots" data-p1-dynamic>
      <?php foreach ($lotTypes as $i => $lot): ?>
      <article class="lnd-lot reveal-delay-<?php echo ($i % 4) + 1; ?>" data-animate>
        <div class="lnd-lot-icon"><?php echo icon(($lot['icon'])); ?></div>
        <h3><?php echo e($lot['title']); ?></h3>
        <p><?php echo e($lot['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: diagonal slant (white → cream) — C3 -->
<div class="svg-divider svg-divider--flush svg-divider--on-white" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,80 1200,0 1200,80"/></svg>
</div>

<!-- ============ KEEP / MARK / CLEAR — 02 (signature timeline) ============ -->
<section class="numbered-section lnd-process-section" data-num="02" aria-label="Selective land clearing process">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Keep &middot; Mark &middot; Clear</span>
      <h2>How does selective land clearing work when you want to keep the oaks?</h2>
      <p class="answer-block">God's Country Tree Service does selective land clearing in DeLand by fencing the oaks you want to keep before any saw starts, marking each removal with a red X, felling and chipping the marked trees, grappling the stumps and root balls out with the track loader, then rough-grading the ground and hauling the debris.</p>
    </div>

    <div class="lnd-process-layout">
      <ol class="lnd-timeline" data-p1-dynamic>
        <?php foreach ($clearSteps as $i => $step): ?>
        <li class="lnd-step reveal-delay-<?php echo ($i % 5) + 1; ?>" data-animate>
          <div class="lnd-step-node" aria-hidden="true"><?php echo icon(($step['icon'])); ?></div>
          <div class="lnd-step-card">
            <span class="lnd-step-num">Step <?php echo e($step['num']); ?></span>
            <h3><?php echo e($step['title']); ?></h3>
            <p><?php echo e($step['text']); ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ol>

      <div class="lnd-photo-stack">
        <figure class="lnd-framed" data-animate="right">
          <?php echo p1_picture($bodyPhotos['stumps']['src'], $bodyPhotos['stumps']['alt'], 800, 600, '(max-width: 768px) 100vw, 560px'); ?>
          <figcaption><?php echo e($bodyPhotos['stumps']['cap']); ?></figcaption>
        </figure>
        <figure class="lnd-framed lnd-framed--flip lnd-framed--primary" data-animate="right">
          <?php echo p1_picture($bodyPhotos['marked']['src'], $bodyPhotos['marked']['alt'], 800, 600, '(max-width: 768px) 100vw, 560px'); ?>
          <figcaption><?php echo e($bodyPhotos['marked']['cap']); ?></figcaption>
        </figure>
      </div>
    </div>

    <p class="lnd-body lnd-process-note" data-animate>Trees that stand too close to a house, a barn or a service drop to fell are handled the same way as a standard <a href="/services/tree-removal/">tree removal</a>: climbed, roped and lowered in sections by the same crew. Any stump the owner would rather have ground below grade than pulled out whole is quoted as <a href="/services/stump-grinding/">stump grinding</a> on the same written estimate, so the lot never waits on a second contractor.</p>
  </div>
</section>

<!-- Divider: torn organic edge (cream → dark) — C3 -->
<div class="svg-divider svg-divider--flush svg-divider--torn svg-divider--on-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,34 L48,22 L96,38 L150,18 L205,30 L262,14 L318,36 L370,24 L430,40 L488,20 L540,32 L600,16 L655,34 L712,22 L770,38 L826,18 L884,30 L940,14 L996,36 L1052,22 L1108,34 L1160,20 L1200,30 L1200,60 L0,60 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ EQUIPMENT — 03 (dark band) ============ -->
<section class="numbered-section lnd-gear-section" data-num="03" aria-label="Land clearing equipment">
  <div class="lnd-gear-glow" aria-hidden="true"></div>
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Iron on the Lot</span>
      <h2>What equipment does a DeLand land clearing crew actually bring?</h2>
      <p class="answer-block">God's Country Tree Service brings its own Kubota SVL75-2 compact track loader with a grapple, a red grapple skid steer, a wood chipper, a lettered chip truck and a forestry bucket truck to clearing jobs across Volusia County. Owning the machines means the same crew handles the trees, the stumps, the brush and the haul-off, with no second contractor on the lot.</p>
    </div>

    <div class="lnd-gear-layout">
      <ul class="lnd-gear-list" data-p1-dynamic>
        <?php foreach ($gear as $i => $g): ?>
        <li class="lnd-gear-item reveal-delay-<?php echo ($i % 5) + 1; ?>" data-animate="left">
          <div class="lnd-gear-icon"><?php echo icon(($g['icon'])); ?></div>
          <div>
            <h3><?php echo e($g['title']); ?></h3>
            <p><?php echo e($g['text']); ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>

      <div class="lnd-gear-photos">
        <figure class="lnd-framed" data-animate="right">
          <?php echo p1_picture($bodyPhotos['staged']['src'], $bodyPhotos['staged']['alt'], 800, 600, '(max-width: 768px) 100vw, 480px'); ?>
          <figcaption><?php echo e($bodyPhotos['staged']['cap']); ?></figcaption>
        </figure>
        <figure class="lnd-framed lnd-framed--flip lnd-framed--tall" data-animate="right">
          <?php echo p1_picture($bodyPhotos['kubota']['src'], $bodyPhotos['kubota']['alt'], 600, 800, '(max-width: 768px) 100vw, 320px'); ?>
          <figcaption><?php echo e($bodyPhotos['kubota']['cap']); ?></figcaption>
        </figure>
      </div>
    </div>

    <p class="lnd-story" data-animate>The man running the loader learned on bigger iron. <strong>Caleb, the owner,</strong> was raised in the timber industry, spent his early working life falling timber and operating equipment, and ran a tree service in the Pacific Northwest before buying this DeLand company. Tree work and land clearing stay under one roof here: climbing, rigging, removals, skid-steer work and cleanup by the same crew, for homeowners, businesses, farms and property owners. <a href="/about/">Read Caleb's story</a>.</p>
  </div>
</section>

<!-- Divider: diagonal slant (dark → white) — C3 -->
<div class="svg-divider svg-divider--flush svg-divider--on-dark" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,0 1200,80 0,80"/></svg>
</div>

<!-- ============ PERMITS & PROTECTED TREES — 04 ============ -->
<section class="numbered-section lnd-permit-section" data-num="04" aria-label="Land clearing permits in DeLand and Volusia County">
  <div class="container">
    <div class="lnd-permit-layout">
      <div class="lnd-permit-copy" data-animate="left">
        <span class="eyebrow-label">Before the Saw Starts</span>
        <h2>Do you need a permit to clear land in DeLand or Volusia County?</h2>
        <p class="answer-block">God's Country Tree Service will tell you at the estimate visit which trees on your lot are likely to need a permit, because the City of DeLand has a tree protection ordinance and Volusia County regulates protected trees. Whether a given tree needs one depends on its species, size and location, so confirm with the city or the county before any clearing starts.</p>
        <p>The keep-and-mark approach makes that conversation easier. Once the keepers are fenced and the removals wear a red X, the lot itself shows the city or the county exactly what is staying and what is going, and the Spanish moss-draped live oaks that owners usually want kept are rarely the ones in question. The rules that apply to a single tree on a residential lot are laid out in our post on <a href="/blog/tree-removal-permit-deland-fl/">tree removal permits in DeLand</a>; a parcel full of trees follows the same logic, tree by tree.</p>
        <div class="lnd-permit-note">
          <?php echo icon('clipboard-check'); ?>
          <p><strong>What we do and do not do:</strong> we flag the likely permit trees, fence them, and clear everything else once you have confirmed with the city or the county. We do not cut a protected tree on an assumption, and we will say so on the estimate if a tree you want gone looks like one.</p>
        </div>
      </div>
      <figure class="lnd-framed lnd-framed--flip" data-animate="right">
        <?php echo p1_picture($bodyPhotos['access']['src'], $bodyPhotos['access']['alt'], 800, 600, '(max-width: 768px) 100vw, 640px'); ?>
        <figcaption><?php echo e($bodyPhotos['access']['cap']); ?></figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ============ COST — 05 ============ -->
<section class="numbered-section lnd-cost-section" data-num="05" aria-label="Land clearing cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does land clearing cost in DeLand, FL?</h2>
      <p class="answer-block">God's Country Tree Service prices land clearing after walking the parcel, and the written estimate separates tree removal, stump and root-ball work, brush, hauling and grading into their own lines. That lets an owner clear the building pad now and the back acre later. The visit and the estimate are free, with no obligation.</p>
    </div>

    <div class="lnd-cost-grid" data-p1-dynamic>
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="lnd-cost-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-factor="<?php echo str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT); ?>" data-animate>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <p class="lnd-cost-phasing" data-animate>Because every line stands on its own, <strong>the job can be phased</strong>: fell and chip the marked trees this season, pull the stumps when the builder is ready for the pad, and bush-hog the rest of the parcel on a schedule. Each phase is quoted in writing before it starts, and the logs can leave as firewood if you would rather keep them.</p>
  </div>
</section>

<!-- ============ PROOF / NEAR ME — 06 ============ -->
<section class="numbered-section lnd-proof-section" data-num="06" aria-label="Local land clearing proof">
  <div class="container">
    <div class="lnd-proof-layout">
      <figure class="lnd-framed lnd-framed--square lnd-framed--primary" data-animate="left">
        <?php echo p1_picture($bodyPhotos['mowed']['src'], $bodyPhotos['mowed']['alt'], 800, 800, '(max-width: 768px) 100vw, 560px'); ?>
        <figcaption><?php echo e($bodyPhotos['mowed']['cap']); ?></figcaption>
      </figure>
      <div class="lnd-proof-copy" data-animate="right">
        <span class="eyebrow-label">Local Proof</span>
        <h2>Who does land clearing near me in DeLand, FL?</h2>
        <p class="answer-block">God's Country Tree Service does land clearing near you from its base in DeLand, FL 32720. The same crew, track loader, skid steer and chip truck cover roughly 50 miles of Volusia County, including DeLeon Springs, Lake Helen, Orange City, Deltona and DeBary, for homeowners, businesses, farms and property owners. Lot clearing in Volusia County is one of the <a href="/services/">tree services on our list</a>, so the trees, the stumps and the brush are one phone call.</p>
        <div class="lnd-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'DeLeon Springs', 'Lake Helen', 'Orange City', 'Deltona', 'DeBary'] as $area): ?>
          <span class="lnd-area-chip"><?php echo icon('map-pin'); ?> <?php echo e($area); ?></span>
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

<!-- Divider: torn organic edge (white → cream) — C3 -->
<div class="svg-divider svg-divider--flush svg-divider--torn svg-divider--on-white" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,26 L52,38 L104,20 L160,34 L214,16 L270,32 L326,22 L380,40 L438,18 L494,30 L552,14 L608,36 L664,20 L720,34 L776,16 L832,38 L888,24 L944,40 L1000,18 L1056,32 L1112,20 L1164,36 L1200,24 L1200,60 L0,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ FAQ — 07 ============ -->
<section class="numbered-section lnd-faq-section" data-num="07" aria-label="Land clearing questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand property owners ask before clearing a lot?</h2>
      <p class="answer-block">Property owners ask God's Country Tree Service whether they need a permit, whether the big oaks can stay, and what happens to the stumps, the wood and the brush. Farm and business owners ask about mowing instead of clearing and whether the crew works commercial parcels. Each answer below applies to lots across Volusia County.</p>
    </div>

    <div class="faq-grid" data-p1-dynamic>
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-delay-<?php echo ($i % 2) + 1; ?>" data-animate>
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
<section class="lnd-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">After the Lot Is Open</span>
      <h2>What other services go with land clearing in DeLand?</h2>
      <p class="answer-block">Land clearing from God's Country Tree Service usually pairs with a standard <a href="/services/tree-removal/">tree removal</a> for the trees too close to a structure to fell, <a href="/services/stump-grinding/">stump grinding</a> for the stumps an owner would rather have below grade than pulled, and <a href="/services/commercial-hoa-tree-services/">commercial and HOA tree services</a> for the common areas and business parcels that need the trees maintained once the lot is open.</p>
    </div>

    <?php renderServiceCards(['tree-removal', 'stump-grinding', 'commercial-hoa-tree-services'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="lnd-closing-cta" aria-label="Get a land clearing estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free Visit &middot; Written Quote</span>
    <h2>Ready to See Which Trees Stay and Which Ones Go?</h2>
    <p class="answer-block">Tell us what the parcel is for (a homesite, a barn, a pasture, a cleared fence line) and <?php echo e($siteName); ?> will walk it with you, fence the keepers, mark the rest, and put the price in writing line by line so the work can be phased. Call <a href="tel:+14072803484">(407) 280-3484</a> or send the form.</p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Clearing Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
