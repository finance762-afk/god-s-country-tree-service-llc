<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/stump-grinding/index.php — Stump Grinding
 * God's Country Tree Service LLC — DeLand, FL
 * SEO fixes 2026-10-13: new service page (GBP lists Stump Grinding;
 * intake FAQ: "most estimates include debris removal and stump grinding").
 * Layout: C1.4 hero, problem cards, grind-vs-pull-vs-leave option
 * signature, numbered process timeline, dark standalone band,
 * C3 arc + diagonal dividers, C11.1 framed images, C5.1 watermarks,
 * C9.2 radial-glow CTA
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'stump-grinding';

// V2.1 trade-noun title (55 chars) + V2.2 CTR meta (158 chars)
$pageTitle       = "Stump Grinding DeLand FL | {$gbpRating}★ Rated | Free Estimates";
$pageDescription = "Stump grinding in DeLand, FL rated {$gbpRating}★ from {$gbpReviewCount} Google reviews. Below grade, chips raked or hauled, quoted with every removal. Free estimate: (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (client photos, localized) ----
$imgBase = '/assets/images/';

$heroImage        = $imgBase . '1784062756583-g1q71x-162462401_2868738963346697_5761624918012580393_n.webp'; // flush-cut stump with sawdust, helmet on top (portrait, crop)
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$bodyPhotos = [
    'stump' => [
        'src' => $heroImage,
        'alt' => 'Flush-cut oak stump with sawdust and a crew helmet on top, ready for grinding at a DeLand, FL home',
        'cap' => 'A fresh flush cut at a DeLand home: the tree is gone, the stump is what grinding takes care of',
    ],
    'pulled' => [
        'src' => $imgBase . '1784062729745-ekffah-31162327_2042462179307717_7701525571804594176_n.webp',
        'alt' => 'Grapple track loader moving uprooted stumps and root balls on a cleared lot near DeLand, FL',
        'cap' => 'The other option on an open lot: stumps and root balls pulled whole with the grapple track loader',
    ],
    'log' => [
        'src' => $imgBase . '1784062753583-2wp304-76756943_2456228011264463_6144757071268020224_n.webp',
        'alt' => 'Grapple loader carrying a large fresh-cut oak log section after a DeLand, FL tree removal',
        'cap' => 'The trunk leaves on the loader; the stump is the last piece of the removal',
    ],
    'slab' => [
        'src' => $imgBase . '1784062755583-5oqzq0-161812504_2868738946680032_6599345448414427184_n.webp',
        'alt' => 'God\'s Country crew member holding a wide cross-cut trunk slab after a DeLand, FL tree removal',
        'cap' => 'A cross-cut slab from a DeLand removal, about the width the grinder will be chewing through',
    ],
];

// ---- Why a stump should go (problem cards) ----
$stumpProblems = [
    ['icon' => 'triangle-alert', 'title' => 'A hazard in the lawn',           'text' => 'A flush-cut stump disappears into St. Augustine grass by the second summer. The mower finds it, a guest\'s ankle finds it, and the sprinkler head next to it gets clipped every week.'],
    ['icon' => 'sprout',         'title' => 'Sprouts that will not quit',      'text' => 'A live stump keeps pushing suckers. Laurel oaks, sweetgums and crape myrtles will shoot new growth from the stump and the surface roots for years unless the stump is taken below grade.'],
    ['icon' => 'bug',            'title' => 'Food for termites and fungi',      'text' => 'A rotting stump in a damp Central Florida yard is a standing buffet for subterranean termites and decay fungi, and a few feet from the house is not where you want that colony to get comfortable.'],
    ['icon' => 'home',           'title' => 'A spot you cannot use',           'text' => 'Sod will not take, a bed will not grade, and a fence post, a pool deck or a new planting cannot go where the stump sits. Grinding turns the spot back into yard.'],
];

// ---- Signature: grind vs pull vs leave ----
$options = [
    [
        'icon'   => 'circle-dot',
        'title'  => 'Grind it below grade',
        'tag'    => 'The yard answer',
        'text'   => 'The grinder chews the stump and the root flare into chips several inches below the surface, the chips are raked back into the hole or hauled, and the spot is ready for sod, mulch or a bed. The lawn around it stays intact.',
        'fits'   => ['Established lawns and beds', 'Stumps near fences, decks and walks', 'When you want the spot usable now'],
        'best'   => true,
    ],
    [
        'icon'   => 'tractor',
        'title'  => 'Pull it with the grapple loader',
        'tag'    => 'The open-lot answer',
        'text'   => 'On a lot being cleared, the track loader\'s grapple pulls the stump and root ball out whole and stacks it for the chip truck. Nothing is left in the ground, but the loader needs room to work and the ground is churned.',
        'fits'   => ['Lots and acreage being cleared', 'Homesites before a build', 'When the ground is being graded anyway'],
        'best'   => false,
    ],
    [
        'icon'   => 'minus',
        'title'  => 'Cut it flush and leave it',
        'tag'    => 'The wait-and-see answer',
        'text'   => 'A stump cut flush at the removal costs nothing extra and some owners leave it, usually on the back edge of a big lot. It will rot slowly, sprout if the species is a sprouter, and still be there when you want the spot back.',
        'fits'   => ['Pasture and woodland edges', 'Spots nobody mows or walks', 'Owners who may grind later'],
        'best'   => false,
    ],
];

// ---- Process (numbered timeline) ----
$steps = [
    ['icon' => 'search',       'title' => 'Walk the spot and mark what is buried',   'text' => 'Before the grinder starts, you show us where the irrigation lines, the septic tank and drain field, and any buried cable or lighting wire run. If the stump sits near the street or a service line, Florida\'s free Sunshine 811 locate marks the utilities first.'],
    ['icon' => 'scissors',     'title' => 'Cut it flush',                          'text' => 'A stump left tall by a storm or a previous contractor gets cut down close to the ground so the grinder is working on the stump and the flare, not a trunk.'],
    ['icon' => 'circle-dot',   'title' => 'Grind below grade',                     'text' => 'The grinder works across the stump in passes until it is below the surface. How far below depends on what is going over it: sod needs less than a new planting or a fence post, and that gets settled at the estimate.'],
    ['icon' => 'git-branch',   'title' => 'Chase the surface roots',               'text' => 'The big lateral roots that lift sod or run toward a walk can be ground where they surface. Smaller roots stay in the ground and break down on their own over the next few years.'],
    ['icon' => 'sparkles',     'title' => 'Backfill and rake',                     'text' => 'The grindings go back into the hole and get raked level, or they leave on the truck if you would rather bring in topsoil and sod right away. Either way the yard is raked and walked with you before the crew leaves.'],
];

// ---- Cost factors ----
$costFactors = [
    ['icon' => 'ruler',   'title' => 'Diameter and how many',       'text' => 'A crape myrtle stump is a few passes. A mature live oak with a wide root flare is a long afternoon. The width of the stump at the ground and the number on the list drive most of the price.'],
    ['icon' => 'fence',   'title' => 'What is around it',           'text' => 'A stump in the open lawn is straightforward. One tucked against a fence, a pool deck, pavers or a foundation means working the grinder carefully from one side, and the estimate says so.'],
    ['icon' => 'truck',   'title' => 'What you want afterward',      'text' => 'Grinding deeper for a new tree or a post, and hauling the chips instead of raking them back, each add a line to the estimate. You choose, and the written price lists each one.'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Is stump grinding included when you remove a tree?',
        'a' => "Most of our removal quotes include stump grinding and debris hauling, and the written estimate lists each one so you can see exactly what you are approving. If you would rather leave the stump flush-cut and grind it later, we take that line off and the price drops. Either way you decide at the estimate, not on the day.",
    ],
    [
        'q' => 'How deep do you grind a stump?',
        'a' => "Below grade, and how far below depends on what you want to do with the spot. Sod and mulch need the stump and the flare out of the way; a new tree, a fence post or a pool deck footing needs more depth. Tell us at the estimate what is going there and the grind is sized to it. There is no single number that fits every yard.",
    ],
    [
        'q' => 'Can I plant a new tree where the old stump was?',
        'a' => "You can, but it is better a few feet to one side. Fresh grindings keep breaking down for years, the ground settles as the old roots rot, and the new tree has to fight the leftover root mass for water. If the spot has to be the same one, we grind deeper, haul the chips out and you bring in topsoil before planting.",
    ],
    [
        'q' => 'What happens to the roots after you grind the stump?',
        'a' => "Grinding takes the stump, the root flare and the big surface roots you ask us to chase. The lateral roots farther out stay in the ground and decay on their own over the next several years; they do not keep growing once the stump is gone. A species that sprouts from roots stops once the stump itself is below grade.",
    ],
    [
        'q' => 'Will stump grinding tear up my lawn or irrigation?',
        'a' => "Not if we know what is there. Before the grinder runs you walk the yard with us and point out irrigation lines, sprinkler heads, the septic drain field and any buried wire, and the machine comes in on the path that does the least damage. The grindings are raked level before we leave, and the spot can be sodded over.",
    ],
    [
        'q' => 'Can you grind a stump that someone else cut, or one from years ago?',
        'a' => "Yes. Stump grinding does not have to follow one of our own removals. Stumps left by a storm, a previous contractor or a tree cut years ago get the same visit: a look at what is around it, a written price for the grinding, and the chips raked or hauled. An old, partly rotted stump often grinds faster than a fresh one.",
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
        ['name' => 'Home',           'url' => '/'],
        ['name' => 'Services',       'url' => '/services/'],
        ['name' => 'Stump Grinding'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Stump Grinding — page-specific styles (.stp- prefix)
   Techniques: C1.4 page hero (photo + gradient + noise), tinted
   problem cards, three-option signature with a highlighted "best"
   card, numbered vertical timeline with nodes, dark standalone
   band with radial glow, C3 arc + diagonal dividers, C11.1 framed
   images with offset accent shadow, C5.1 numbered watermarks,
   C9.2 radial-glow closing CTA. Tokens / color-mix only.
   ============================================================ */

/* ---- C1.4 Page hero ---- */
.stp-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.stp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 70%, transparent) 50%,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 100%
  );
}
.stp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.stp-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.stp-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.stp-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.stp-breadcrumb a:hover { color: var(--color-accent); }
.stp-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.stp-hero .hero-eyebrow {
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
.stp-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.stp-hero h1 .text-accent { color: var(--color-accent); }
.stp-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.stp-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.stp-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.stp-hero .hero-trust-item svg {
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
.numbered-section--dark::before { color: color-mix(in srgb, var(--color-white) 5%, transparent); }

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

/* ---- Problem statement: lead + tinted cards ---- */
.stp-lead {
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
.stp-lead strong { color: var(--color-primary); }
.stp-problems {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.stp-problem {
  display: flex;
  gap: var(--space-5);
  align-items: flex-start;
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.stp-problem:nth-child(4n+1) { background: var(--color-card-tint-1); }
.stp-problem:nth-child(4n+2) { background: var(--color-card-tint-3); }
.stp-problem:nth-child(4n+3) { background: var(--color-card-tint-2); }
.stp-problem:nth-child(4n)   { background: var(--color-card-tint-neutral); }
.stp-problem:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.stp-problem-icon {
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
.stp-problem-icon svg { width: 24px; height: 24px; }
.stp-problem h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.stp-problem p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Signature: three options, one highlighted ---- */
.stp-options-section { background: var(--color-cream); }
.stp-options {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  align-items: stretch;
  margin-bottom: var(--space-12);
}
.stp-option {
  position: relative;
  display: flex;
  flex-direction: column;
  padding: var(--space-8) var(--space-6) var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  border: 1px solid color-mix(in srgb, var(--color-gray) 20%, transparent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.stp-option:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.stp-option--best {
  background: var(--color-card-tint-1);
  border-color: color-mix(in srgb, var(--color-primary) 30%, transparent);
  box-shadow: var(--shadow-lg);
  transform: translateY(calc(-1 * var(--space-2)));
}
.stp-option--best:hover { transform: translateY(calc(-1 * var(--space-2) - 4px)); }
.stp-option-badge {
  position: absolute;
  top: calc(-1 * var(--space-3));
  left: var(--space-6);
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
.stp-option-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.stp-option-icon svg { width: 26px; height: 26px; }
.stp-option h3 { font-size: var(--font-size-xl); margin-bottom: var(--space-1); text-wrap: balance; }
.stp-option-tag {
  display: block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.stp-option p { font-size: var(--font-size-sm); color: var(--color-text); margin-bottom: var(--space-4); }
.stp-option-fits {
  list-style: none;
  margin-top: auto;
  padding-top: var(--space-4);
  border-top: 1px solid color-mix(in srgb, var(--color-gray) 25%, transparent);
  display: flex;
  flex-direction: column;
  gap: var(--space-2);
}
.stp-option-fits li {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary-dark);
}
.stp-option-fits li svg { width: 16px; height: 16px; color: var(--color-accent); flex-shrink: 0; }
.stp-options-gallery {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: start;
}

/* ---- C11.1 framed image with offset accent shadow ---- */
.stp-framed {
  position: relative;
  margin: 0;
  padding: 0 var(--space-4) var(--space-4) 0;
}
.stp-framed::before {
  content: '';
  position: absolute;
  inset: var(--space-4) 0 0 var(--space-4);
  background: color-mix(in srgb, var(--color-accent) 80%, var(--color-white));
  border-radius: var(--radius-lg);
  z-index: 0;
}
.stp-framed--flip { padding: 0 0 var(--space-4) var(--space-4); }
.stp-framed--flip::before { inset: var(--space-4) var(--space-4) 0 0; }
.stp-framed img {
  position: relative;
  z-index: 1;
  width: 100%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
  object-fit: cover;
}
.stp-framed--tall img { aspect-ratio: 4 / 5; }
.stp-framed--square img { aspect-ratio: 1 / 1; }
.stp-framed figcaption {
  position: relative;
  z-index: 1;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-3);
}

/* ---- Process: vertical timeline beside a sticky photo ---- */
.stp-process-section { background: var(--color-white); }
.stp-process-layout {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: start;
}
.stp-timeline {
  list-style: none;
  position: relative;
  padding-left: var(--space-10);
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.stp-timeline::before {
  content: '';
  position: absolute;
  left: 23px;
  top: var(--space-4);
  bottom: var(--space-4);
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), color-mix(in srgb, var(--color-primary) 25%, transparent));
}
.stp-step { position: relative; }
.stp-step-node {
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
.stp-step-node svg { width: 22px; height: 22px; }
.stp-step-card {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-5) var(--space-6);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.stp-step:nth-child(even) .stp-step-card { background: var(--color-card-tint-2); }
.stp-step-card:hover { transform: translateX(4px); box-shadow: var(--shadow-md); }
.stp-step-num {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 800;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-1);
}
.stp-step-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.stp-step-card p { font-size: var(--font-size-sm); color: var(--color-text); margin: 0; }
.stp-process-figure { position: sticky; top: calc(var(--nav-height) + var(--space-6)); }
.stp-process-note {
  max-width: 68ch;
  margin: var(--space-10) auto 0;
  text-align: center;
  color: var(--color-text);
}
.stp-process-note a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }

/* ---- Dark band: standalone stump grinding ---- */
.stp-standalone-section {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.stp-standalone-section::after {
  content: '';
  position: absolute;
  top: -30%;
  right: -10%;
  width: 60%;
  height: 140%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 40%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.stp-standalone-section .container { position: relative; z-index: 1; }
.stp-standalone-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: clamp(2rem, 5vw, 4.5rem);
  align-items: center;
}
.stp-standalone-copy .eyebrow-label { color: var(--color-accent); }
.stp-standalone-copy h2 { color: var(--color-white); text-wrap: balance; margin-bottom: var(--space-4); }
.stp-standalone-copy .answer-block {
  color: color-mix(in srgb, var(--color-white) 86%, transparent);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-6);
}
.stp-standalone-copy p { color: color-mix(in srgb, var(--color-white) 78%, transparent); }
.stp-standalone-copy a { color: var(--color-accent); text-decoration: underline; }
.stp-standalone-list {
  list-style: none;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.stp-standalone-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-4);
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 11%, transparent);
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  font-size: var(--font-size-sm);
}
.stp-standalone-list li svg { width: 18px; height: 18px; color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }
.stp-standalone-section .stp-framed::before { background: color-mix(in srgb, var(--color-accent) 55%, var(--color-dark)); }
.stp-standalone-section .stp-framed figcaption { color: color-mix(in srgb, var(--color-white) 70%, transparent); }

/* ---- Cost factors ---- */
.stp-cost-section { background: var(--color-cream); }
.stp-cost-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.stp-cost-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.stp-cost-card:nth-child(even) { border-top-color: var(--color-accent); }
.stp-cost-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.stp-cost-icon {
  display: inline-flex;
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}
.stp-cost-icon svg { width: 20px; height: 20px; }
.stp-cost-card h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); text-wrap: balance; }
.stp-cost-card p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }
.stp-cost-note {
  max-width: 68ch;
  margin: var(--space-8) auto 0;
  text-align: center;
  color: var(--color-text);
}
.stp-cost-note a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }

/* ---- Proof: framed photo + area chips + badges ---- */
.stp-proof-section { background: var(--color-white); }
.stp-proof-layout {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: clamp(2rem, 5vw, 4rem);
  align-items: center;
  margin-bottom: var(--space-10);
}
.stp-proof-copy h2 { text-wrap: balance; }
.stp-proof-copy .answer-block a { color: var(--color-primary); font-weight: 600; text-decoration: underline; }
.stp-area-chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-5);
}
.stp-area-chip {
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
.stp-area-chip svg { width: 14px; height: 14px; color: var(--color-primary); }
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
.review-badge svg { width: 18px; height: 18px; color: var(--color-accent); }

/* ---- FAQ + related backgrounds ---- */
.stp-faq-section { background: var(--color-light); }
.stp-related-section { background: var(--color-white); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.stp-closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.stp-closing-cta::before {
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
.stp-closing-cta .container { position: relative; z-index: 1; }
.stp-closing-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.stp-closing-cta .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.stp-closing-cta .answer-block a { color: var(--color-accent); }
.stp-closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 shapes: C3 arc dome + diagonal slant) ---- */
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

/* ---- Reveal stagger delays ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }
html.js-anim [data-animate].reveal-delay-5 { transition-delay: 0.40s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .stp-options { grid-template-columns: 1fr; }
  .stp-option--best { transform: none; }
  .stp-option--best:hover { transform: translateY(-4px); }
  .stp-options-gallery { grid-template-columns: 1fr; max-width: 640px; margin: 0 auto; }
  .stp-process-layout { grid-template-columns: 1fr; }
  .stp-process-figure { position: static; max-width: 520px; margin: 0 auto; }
  .stp-standalone-layout { grid-template-columns: 1fr; }
  .stp-proof-layout { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .stp-hero { min-height: auto; }
  .stp-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .stp-problems { grid-template-columns: 1fr; }
  .stp-cost-grid { grid-template-columns: 1fr; }
  .stp-standalone-list { grid-template-columns: 1fr; }
  .stp-lead { padding-left: var(--space-5); }
}
@media (max-width: 600px) {
  .stp-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .stp-problem { flex-direction: column; }
  .stp-timeline { padding-left: var(--space-8); }
  .stp-step-node { width: 40px; height: 40px; left: calc(-1 * var(--space-8)); }
  .stp-timeline::before { left: 19px; }
}
</style>

<article class="service-article">

<!-- ============ HERO (C1.4) ============ -->
<section class="stp-hero has-hero-bg" aria-label="Stump grinding in DeLand, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="stp-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Stump Grinding</span>
    </nav>

    <span class="hero-eyebrow">Stump Grinding &middot; DeLand, FL</span>

    <h1>Stump Grinding in DeLand, FL: <span class="text-accent">Below Grade, Raked Clean, Ready for Sod</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving homeowners and businesses across Volusia County. Stump grinding takes a stump and its root flare below the surface so the spot can be sodded, planted or built on. It is quoted on most of our removal estimates as its own line, and as a standalone job for stumps someone else left behind. Free written estimates within 24 hours.</p>

    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Stump Grinding Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact the Crew</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('file-check'); ?> Quoted With Every Removal</span>
      <span class="hero-trust-item"><?php echo icon('circle-dot'); ?> Ground Below Grade</span>
      <span class="hero-trust-item"><?php echo icon('sparkles'); ?> Chips Raked or Hauled</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> Owner-Operated in DeLand</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-stump-grinding';
    $heroFormService  = 'Stump Grinding';
    $heroFormHeading  = 'Get a Free Stump Grinding Estimate';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ WHY GRIND — 01 ============ -->
<section class="numbered-section" data-num="01" aria-label="Why a stump should be ground">
  <div class="container">
    <p class="stp-lead" data-animate>The tree is down, the brush is chipped, the logs are gone. What is left is a stump the mower will find every Saturday until <strong>somebody takes it below grade</strong>.</p>

    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Last Piece of the Job</span>
      <h2>Why grind a stump instead of leaving it in the DeLand lawn?</h2>
      <p class="answer-block">God's Country Tree Service grinds stumps because a stump left in a DeLand yard does not stay harmless. It hides in the grass and catches the mower, it sprouts if the species is a sprouter, it feeds termites and decay fungi in our damp climate, and it blocks the spot from being sodded, planted or built on. Grinding turns it back into yard.</p>
    </div>

    <div class="stp-problems" data-p1-dynamic>
      <?php foreach ($stumpProblems as $i => $item): ?>
      <article class="stp-problem reveal-delay-<?php echo ($i % 4) + 1; ?>" data-animate>
        <div class="stp-problem-icon"><?php echo icon(($item['icon'])); ?></div>
        <div>
          <h3><?php echo e($item['title']); ?></h3>
          <p><?php echo e($item['text']); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: arc dome (white → cream) — C3 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,80 L0,60 Q600,-20 1200,60 L1200,80 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ GRIND, PULL OR LEAVE — 02 (signature) ============ -->
<section class="numbered-section stp-options-section" data-num="02" aria-label="Stump grinding options">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Three Ways a Stump Goes</span>
      <h2>Should a stump be ground, pulled out, or left in the ground?</h2>
      <p class="answer-block">God's Country Tree Service quotes three ways to deal with a stump in DeLand: grind it below grade, pull it whole with the grapple track loader, or cut it flush and leave it. Grinding fits an established yard, pulling fits a lot being cleared, and leaving it fits an edge nobody uses. The written estimate prices the one you pick, stump by stump.</p>
    </div>

    <div class="stp-options" data-p1-dynamic>
      <?php foreach ($options as $i => $opt): ?>
      <article class="stp-option<?php echo $opt['best'] ? ' stp-option--best' : ''; ?> reveal-delay-<?php echo $i + 1; ?>" data-animate>
        <?php if ($opt['best']): ?><span class="stp-option-badge">Most yards</span><?php endif; ?>
        <div class="stp-option-icon"><?php echo icon(($opt['icon'])); ?></div>
        <h3><?php echo e($opt['title']); ?></h3>
        <span class="stp-option-tag"><?php echo e($opt['tag']); ?></span>
        <p><?php echo e($opt['text']); ?></p>
        <ul class="stp-option-fits">
          <?php foreach ($opt['fits'] as $fit): ?>
          <li><?php echo icon('check'); ?> <?php echo e($fit); ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="stp-options-gallery" data-p1-dynamic>
      <figure class="stp-framed" data-animate>
        <?php echo p1_picture($bodyPhotos['log']['src'], $bodyPhotos['log']['alt'], 800, 1000, '(max-width: 768px) 100vw, 560px'); ?>
        <figcaption><?php echo e($bodyPhotos['log']['cap']); ?></figcaption>
      </figure>
      <figure class="stp-framed stp-framed--flip" data-animate="right">
        <?php echo p1_picture($bodyPhotos['pulled']['src'], $bodyPhotos['pulled']['alt'], 800, 600, '(max-width: 768px) 100vw, 560px'); ?>
        <figcaption><?php echo e($bodyPhotos['pulled']['cap']); ?></figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: diagonal slant (cream → white) — C3 -->
<div class="svg-divider svg-divider--flush svg-divider--on-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,80 1200,0 1200,80"/></svg>
</div>

<!-- ============ PROCESS — 03 (timeline) ============ -->
<section class="numbered-section stp-process-section" data-num="03" aria-label="How stump grinding works">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Start to Finish</span>
      <h2>How does stump grinding work at a DeLand home?</h2>
      <p class="answer-block">God's Country Tree Service grinds a stump in five steps: walk the spot and mark what is buried, cut the stump flush, grind it below grade, chase the surface roots you want gone, and backfill and rake. You decide at the estimate how deep the grind needs to be and whether the chips stay or leave, and the written price reflects both.</p>
    </div>

    <div class="stp-process-layout">
      <ol class="stp-timeline" data-p1-dynamic>
        <?php foreach ($steps as $i => $step): ?>
        <li class="stp-step reveal-delay-<?php echo ($i % 5) + 1; ?>" data-animate>
          <div class="stp-step-node" aria-hidden="true"><?php echo icon(($step['icon'])); ?></div>
          <div class="stp-step-card">
            <span class="stp-step-num">Step <?php echo str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT); ?></span>
            <h3><?php echo e($step['title']); ?></h3>
            <p><?php echo e($step['text']); ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ol>

      <figure class="stp-framed stp-framed--tall stp-process-figure" data-animate="right">
        <?php echo p1_picture($bodyPhotos['stump']['src'], $bodyPhotos['stump']['alt'], 800, 1000, '(max-width: 768px) 100vw, 520px'); ?>
        <figcaption><?php echo e($bodyPhotos['stump']['cap']); ?></figcaption>
      </figure>
    </div>

    <p class="stp-process-note" data-animate>Grinding is the final step of most of our <a href="/services/tree-removal/">tree removals in DeLand</a>, and the removal estimate lists it separately so you can see the number. On a parcel being opened up, the stump work is usually part of <a href="/services/land-clearing/">lot and land clearing</a> instead, where the loader pulls stumps whole.</p>
  </div>
</section>

<!-- Divider: arc dome (white → dark) — C3 -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><path d="M0,80 L0,60 Q600,-20 1200,60 L1200,80 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ STANDALONE GRINDING — 04 (dark band) ============ -->
<section class="numbered-section numbered-section--dark stp-standalone-section" data-num="04" aria-label="Standalone stump grinding">
  <div class="container">
    <div class="stp-standalone-layout">
      <div class="stp-standalone-copy" data-animate>
        <span class="eyebrow-label">Not Our Tree? Still Our Stump</span>
        <h2>Do you grind stumps from trees you did not remove?</h2>
        <p class="answer-block">Yes. God's Country Tree Service grinds stumps in DeLand as a standalone job: the stump a storm left, the one a previous contractor cut flush and never came back for, or the tree that came down years before you bought the house. The visit is the same: a look at what is around it, a written price, and the chips raked back or hauled.</p>
        <p>An old stump is often the easier job. The wood has started to soften, the surface roots have begun to let go, and the grinder moves through it faster than through a fresh live oak cut this morning. What matters more is what is around it, which is why the estimate visit happens before the machine does.</p>
        <ul class="stp-standalone-list" data-p1-dynamic>
          <li><?php echo icon('cloud-lightning'); ?> A stump left after storm cleanup</li>
          <li><?php echo icon('scissors'); ?> A flush cut from another contractor</li>
          <li><?php echo icon('house'); ?> Stumps that came with the house</li>
          <li><?php echo icon('layers'); ?> Several stumps on one list, one visit</li>
        </ul>
      </div>
      <figure class="stp-framed stp-framed--flip stp-framed--tall" data-animate="right">
        <?php echo p1_picture($bodyPhotos['slab']['src'], $bodyPhotos['slab']['alt'], 800, 1000, '(max-width: 768px) 100vw, 520px'); ?>
        <figcaption><?php echo e($bodyPhotos['slab']['cap']); ?></figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: diagonal slant (dark → cream) — C3 -->
<div class="svg-divider svg-divider--flush svg-divider--on-dark" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,0 1200,80 0,80"/></svg>
</div>

<!-- ============ COST — 05 ============ -->
<section class="numbered-section stp-cost-section" data-num="05" aria-label="Stump grinding cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Straight Pricing</span>
      <h2>How much does stump grinding cost in DeLand, FL?</h2>
      <p class="answer-block">God's Country Tree Service prices stump grinding in DeLand after seeing the stump, and the cost depends on its diameter at the ground, how many stumps are on the list, what is around it, and how deep you need the grind. On a removal the grinding is its own line on the written estimate; on a standalone job it is the whole estimate. The visit and the quote are free.</p>
    </div>

    <div class="stp-cost-grid" data-p1-dynamic>
      <?php foreach ($costFactors as $i => $factor): ?>
      <div class="stp-cost-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <span class="stp-cost-icon"><?php echo icon(($factor['icon'])); ?></span>
        <h3><?php echo e($factor['title']); ?></h3>
        <p><?php echo e($factor['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <p class="stp-cost-note" data-animate>What drives the price of the removal itself is covered in our post on <a href="/blog/tree-removal-cost-deland-fl/">tree removal cost in DeLand</a>; the stump line sits underneath that number on the same estimate.</p>
  </div>
</section>

<!-- ============ PROOF / NEAR ME — 06 ============ -->
<section class="numbered-section stp-proof-section" data-num="06" aria-label="Local stump grinding proof">
  <div class="container">
    <div class="stp-proof-layout">
      <div class="stp-proof-copy" data-animate>
        <span class="eyebrow-label">Local Proof</span>
        <h2>Who does stump grinding near me in DeLand, FL?</h2>
        <p class="answer-block">God's Country Tree Service does stump grinding near you from its base in DeLand, FL 32720. The same owner-operated crew that climbs, rigs and chips covers roughly 50 miles of Volusia County, including DeLeon Springs, Lake Helen, Orange City, Deltona and DeBary. Stump grinding is one of the <a href="/services/">tree services we run from DeLand</a>, so the removal, the stump and the cleanup are one phone call.</p>
        <div class="stp-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'DeLeon Springs', 'Lake Helen', 'Orange City', 'Deltona', 'DeBary'] as $area): ?>
          <span class="stp-area-chip"><?php echo icon('map-pin'); ?> <?php echo e($area); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <figure class="stp-framed stp-framed--flip stp-framed--square" data-animate="right">
        <?php echo p1_picture($heroImage, 'Flush-cut oak stump and sawdust at a DeLand, FL home before stump grinding', 800, 800, '(max-width: 768px) 100vw, 640px'); ?>
        <figcaption>The stump as the crew leaves a removal, before the grinder comes back for it</figcaption>
      </figure>
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
<section class="numbered-section stp-faq-section" data-num="07" aria-label="Stump grinding questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>What do DeLand homeowners ask before booking stump grinding?</h2>
      <p class="answer-block">DeLand homeowners ask God's Country Tree Service whether grinding is included with a removal, how deep the grind goes, whether a new tree can go in the same spot, what happens to the roots, and whether the lawn and irrigation survive the machine. Each answer below applies to yards across Volusia County.</p>
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
<section class="stp-related-section" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Before and After the Stump</span>
      <h2>What other tree services do DeLand property owners pair with stump grinding?</h2>
      <p class="answer-block">God's Country Tree Service usually grinds a stump as the last step of a <a href="/services/tree-removal/">tree removal</a>, pulls stumps and root balls whole during <a href="/services/land-clearing/">lot and land clearing</a>, and follows the grind with <a href="/services/tree-planting-shrub-installation/">tree and shrub planting</a> when the owner wants shade back in the yard. One crew, one written estimate for all three.</p>
    </div>

    <?php renderServiceCards(['tree-removal', 'land-clearing', 'tree-planting-shrub-installation'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2) ============ -->
<section class="stp-closing-cta" aria-label="Get a stump grinding estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Free Visit &middot; Written Quote</span>
    <h2>Ready to Get That Stump Out of the Yard for Good?</h2>
    <p class="answer-block">Tell us where it is and what you want to do with the spot: sod, a bed, a new tree, a fence. <?php echo e($siteName); ?> will look at the stump, point out anything buried around it, and put the grinding price in writing. Call <a href="tel:+14072803484">(407) 280-3484</a> or send the form.</p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Stump Grinding Estimate</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
