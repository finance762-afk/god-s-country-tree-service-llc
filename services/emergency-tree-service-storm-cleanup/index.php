<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /services/emergency-tree-service-storm-cleanup/index.php
 * Emergency Tree Service & Storm Cleanup — God's Country Tree
 * Service LLC — DeLand, FL — Phase 4 (spec entry #6)
 * Layout: dark urgent hero (C1.4), 24/7 stat band (C6.3),
 * storm-response <details> module (§2.9.6), radial-glow CTA
 * (C9.2), glass comparison (C6.4), numbered watermarks (C5.1),
 * double-wave + parallelogram dividers (C3.3 / C3.5).
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'services';
$serviceSlug = 'emergency-tree-service-storm-cleanup';

// Title/meta: GC SEO pass 2026-09-24 (rating from config $gbpRating)
$pageTitle       = "Emergency Tree Removal DeLand FL | 24/7 Storm Cleanup | {$gbpRating}★";
$pageDescription = "Emergency tree removal in DeLand, FL 24/7. Storm damage, trees on roofs, blocked drives. Rated {$gbpRating}★ from {$gbpReviewCount} Google reviews, licensed & insured: (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/services/' . $serviceSlug . '/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = '/assets/images/'; // v6.3 2026-09-04: photos localized (were hotlinked Supabase-storage originals)

$heroImage        = $imgBase . '1784062729745-ekffah-31162327_2042462179307717_7701525571804594176_n.webp'; // grapple loader among uprooted stumps
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$bodyPhotos = [
    'spar' => [
        'src' => $imgBase . '1784062761586-95i7hi-487384453_1464923548239483_3259835514318021231_n.webp',
        'alt' => 'Climber topping a storm-damaged tree spar against the sky in DeLand, FL',
    ],
    'chipper' => [
        'src' => $imgBase . '1784062757583-5u2i8m-242857131_3010226559197936_3280584255290869722_n.1.webp',
        'alt' => "God's Country crew feeding storm brush into a wood chipper in DeLand, FL",
    ],
    'kubota' => [
        'src' => $imgBase . '1784062764583-5ppnr0-504117245_4046117545608827_1977518947574848401_n.webp',
        'alt' => "God's Country Kubota loader on site while a climber tops a tree in DeLand, FL",
    ],
];

// ---- Storm-response steps (§2.9.6 <details> module) ----
$stormSteps = [
    [
        'title' => 'Get people clear and stay clear',
        'text'  => "Move everyone — kids, pets, neighbors — away from the tree, and treat every downed wire as live until the utility says otherwise. If a trunk is resting on the house, stay out of the rooms beneath it.",
    ],
    [
        'title' => 'Photograph everything before it moves',
        'text'  => 'From a safe distance, shoot wide photos of the tree, the structure it hit, and the yard around it, plus close-ups of the impact. Adjusters want the scene as the storm left it.',
    ],
    [
        'title' => 'Send us the address and the photos',
        'text'  => 'Call, or use the estimate form, and tell us three things: where you are, what the tree is on, and whether anyone can\'t safely get in or out. Photos let us size the crew before the truck leaves DeLand.',
    ],
    [
        'title' => 'We triage and give you an honest window',
        'text'  => 'Trees on roofs, trees blocking the only way out, and trunks pinning pool screen enclosures jump the line. Yard debris waits its turn. Either way you get a straight answer about when the crew arrives.',
    ],
    [
        'title' => 'Stabilize, cut, clear, and haul',
        'text'  => 'A climber relieves the tension in storm-loaded wood before anything is cut free, the grapple loader carries the trunk out, and the chipper clears the canopy. Debris leaves on our trucks.',
    ],
];

// ---- After-the-storm safety don'ts ----
$stormDonts = [
    ['icon' => 'zap-off',        'title' => "Don't go near downed lines",   'text' => 'Any wire in or under the tree is live until the power company proves it isn\'t. Distance is the only safe tool you have.'],
    ['icon' => 'octagon-alert',  'title' => "Don't cut storm-loaded wood",  'text' => 'A bent trunk is a loaded spring. Chainsaw injuries spike after every Florida storm because tension releases without warning.'],
    ['icon' => 'house',          'title' => "Don't climb onto the roof",    'text' => 'A tree on shingles has already stressed the framing underneath. Let the crew take the weight off before anyone inspects up close.'],
    ['icon' => 'file-warning',   'title' => "Don't sign at the curb",       'text' => 'Out-of-town trucks want a signature before you\'ve compared anything. A legitimate local crew puts the price in writing first.'],
];

// ---- Storm-chaser red flags vs local crew ----
$comparison = [
    ['them' => 'Out-of-state plates that appear the day after landfall',      'us' => 'Based in DeLand year-round — the same crew since 2014'],
    ['them' => 'Cash-only price shouted from the truck window',               'us' => 'Written price for the emergency scope before a saw starts'],
    ['them' => '"Sign now or we move to the next street" pressure',           'us' => 'Honest triage — hazards first, and a real arrival window'],
    ['them' => 'Insurance claims they can\'t back up with paperwork',         'us' => 'Licensed and insured, proof shown before work begins'],
    ['them' => 'Tree cut free, dropped, and left across your yard',           'us' => 'Grapple loader, chipper, and haul-off finish the job'],
];

// ---- FAQs (conversational, 40-80 word answers) ----
$faqs = [
    [
        'q' => 'Do you do emergency tree removal in DeLand, FL — not just cleanup?',
        'a' => "Yes. Emergency tree removal is most of what the storm line rings for: a tree on the roof, split down the trunk, or hung up over the driveway that has to come out now. The same crew that answers the call runs the rigging and hauls the wood.",
    ],
    [
        'q' => 'Do you really answer emergency tree calls at night and on weekends?',
        'a' => "Yes — emergency tree service is answered 24/7, which matters most between June and November when Central Florida storms don't check the clock. Send your address and photos through the estimate form or contact page any hour; genuine hazards like a tree on a roof get same-day response, and everything else gets an honest window instead of a guess.",
    ],
    [
        'q' => "A tree came through my roof — is it safe to stay in the house?",
        'a' => "Stay out of every room under the tree and listen to the house: cracking, sagging ceilings, or doors that suddenly stick mean the framing is moving, so get out entirely. A mature live oak limb can weigh more than a car. We remove the weight in controlled sections so a roofer can safely take over from there.",
    ],
    [
        'q' => 'Can you remove a tree that\'s tangled in power lines?',
        'a' => "Not until the utility de-energizes or drops the line — no private tree service should touch wood that's in contact with a wire, and you should treat the whole area as live. Report the line first. Once the power company clears it, our crew handles everything from the service drop to the stump.",
    ],
    [
        'q' => 'Will homeowner\'s insurance cover storm cleanup?',
        'a' => "When a tree lands on a covered structure — house, garage, fence, pool enclosure — policies usually help with removal from the structure. We can't speak for your carrier, but we supply what adjusters ask for: photos, a written scope, and an itemized invoice.",
    ],
    [
        'q' => 'How is emergency work priced compared to a scheduled removal?',
        'a' => "Emergency pricing reflects the hazard, the access, and the equipment the job demands — a trunk balanced on a ridgeline takes more rigging than the same tree in the open. What doesn't change: the number is in writing before we cut, even at 2 AM.",
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
        ['name' => 'Emergency Tree Removal & Storm Cleanup'],
    ])
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Emergency Tree Service & Storm Cleanup — page styles (.emg-)
   Techniques: C1.4 dark urgent page hero, C6.3 stat band with
   internal dividers, C4.1 radial glow, §2.9.6 <details> storm
   module, C6.4 glass comparison, C5.1 numbered watermarks,
   C9.2 radial-glow closing CTA, C3.3 double-wave + C3.5
   stacked-parallelogram dividers. Tokens only — no hex/rgba.
   ============================================================ */

/* ---- C1.4 Dark urgent page hero ---- */
.emg-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.emg-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-black) 92%, transparent) 0%,
    color-mix(in srgb, var(--color-dark) 82%, transparent) 45%,
    color-mix(in srgb, var(--color-secondary) 78%, transparent) 78%,
    color-mix(in srgb, var(--color-black) 94%, transparent) 100%
  );
}
.emg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.emg-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.emg-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 72%, transparent);
  margin-bottom: var(--space-6);
}
.emg-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.emg-breadcrumb a:hover { color: var(--color-accent); }
.emg-breadcrumb .sep { color: color-mix(in srgb, var(--color-white) 42%, transparent); }

/* Urgent 24/7 badge with pulsing beacon */
.emg-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: color-mix(in srgb, var(--color-accent) 16%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
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
.emg-badge .emg-beacon {
  width: 9px;
  height: 9px;
  border-radius: var(--radius-full);
  background: var(--color-accent);
  animation: emg-pulse 1.6s ease-in-out infinite;
}
@keyframes emg-pulse {
  0%   { box-shadow: 0 0 0 0 color-mix(in srgb, var(--color-accent) 55%, transparent); }
  70%  { box-shadow: 0 0 0 10px color-mix(in srgb, var(--color-accent) 0%, transparent); }
  100% { box-shadow: 0 0 0 0 color-mix(in srgb, var(--color-accent) 0%, transparent); }
}
@media (prefers-reduced-motion: reduce) {
  .emg-badge .emg-beacon { animation: none; }
}
.emg-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4vw, 3.4rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 26ch;
  margin-bottom: var(--space-5);
}
.emg-hero h1 .text-accent { color: var(--color-accent); }
.emg-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0 0 var(--space-8);
}
.emg-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.emg-hero .hero-trust {
  justify-content: flex-start;
  padding-bottom: var(--space-2);
}
.emg-hero .hero-trust-item svg,
.emg-hero .hero-trust-item i {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}

/* ---- C6.3 Stat band with internal dividers + C4.1 glow ---- */
.emg-stats {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
  padding: var(--space-12) 0;
}
.emg-stats::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 30% 50%, color-mix(in srgb, var(--color-accent) 14%, transparent) 0%, transparent 68%);
  pointer-events: none;
}
.emg-stats .container { position: relative; z-index: 1; }
.emg-stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  text-align: center;
}
.emg-stat {
  padding: var(--space-4);
  border-right: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
}
.emg-stat:last-child { border-right: none; }
.emg-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.2rem);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1;
}
.emg-stat-number .accent { color: var(--color-accent); }
.emg-stat-label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: color-mix(in srgb, var(--color-white) 55%, transparent);
  margin-top: var(--space-2);
}
@media (max-width: 1023px) {
  .emg-stats-row { grid-template-columns: repeat(2, 1fr); }
  .emg-stat {
    border-right: none;
    border-bottom: 1px solid color-mix(in srgb, var(--color-white) 8%, transparent);
    padding-bottom: var(--space-6);
  }
  .emg-stat:nth-child(odd) { border-right: 1px solid color-mix(in srgb, var(--color-white) 8%, transparent); }
  .emg-stat:nth-last-child(-n+2) { border-bottom: none; padding-bottom: var(--space-2); }
}

/* ---- C5.1 Numbered section watermarks ---- */
.numbered-section { position: relative; }
.numbered-section::before {
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
.numbered-section > .container { position: relative; z-index: 1; }

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

/* ---- Triage section: §2.9.6 details module + photo rail ---- */
.emg-triage { background: var(--color-white); }
.emg-triage-layout {
  display: grid;
  grid-template-columns: 1.55fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.emg-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  counter-reset: emgstep;
}
.emg-step {
  counter-increment: emgstep;
  background: var(--color-light);
  border: 1px solid var(--color-gray-light);
  border-left: 4px solid var(--color-primary);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
.emg-step[open] {
  border-left-color: var(--color-accent);
  box-shadow: var(--shadow-md);
  background: var(--color-white);
}
.emg-step summary {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  cursor: pointer;
  list-style: none;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-lg);
  color: var(--color-dark);
  text-wrap: balance;
}
.emg-step summary::-webkit-details-marker { display: none; }
.emg-step summary::before {
  content: counter(emgstep, decimal-leading-zero);
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-primary) 10%, transparent);
  color: var(--color-primary);
  font-size: var(--font-size-base);
  font-weight: 800;
}
.emg-step[open] summary::before {
  background: var(--color-accent);
  color: var(--color-dark);
}
.emg-step summary::after {
  content: '+';
  margin-left: auto;
  font-size: var(--font-size-2xl);
  font-weight: 400;
  color: var(--color-gray);
  transition: transform var(--transition-fast);
  line-height: 1;
}
.emg-step[open] summary::after {
  transform: rotate(45deg);
  color: var(--color-accent);
}
.emg-step p {
  margin: 0;
  padding: 0 var(--space-6) var(--space-6) calc(var(--space-6) + 42px + var(--space-4));
  color: var(--color-gray);
  font-size: var(--font-size-base);
}
.emg-triage-photo { position: sticky; top: calc(var(--nav-height) + var(--space-8)); }
.emg-triage-photo figure { margin: 0; position: relative; }
.emg-triage-photo img {
  width: 100%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 3 / 4;
  object-fit: cover;
  object-position: center 30%;
}
.emg-triage-photo figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}

/* ---- Safety don'ts strip ---- */
.emg-donts {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-12);
}
.emg-dont {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.emg-dont:nth-child(3n+1) { background: var(--color-card-tint-1); }
.emg-dont:nth-child(3n+2) { background: var(--color-card-tint-3); }
.emg-dont:nth-child(3n)   { background: var(--color-card-tint-2); }
.emg-dont:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.emg-dont-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-danger);
  margin-bottom: var(--space-4);
}
.emg-dont-icon svg, .emg-dont-icon i { width: 22px; height: 22px; }
.emg-dont h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.emg-dont p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Who answers: asymmetric split + big stat ---- */
.emg-who { background: var(--color-cream); }
.emg-who-split {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.emg-who-copy p {
  color: var(--color-text);
  margin-bottom: var(--space-4);
}
.emg-points {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  padding: 0;
}
.emg-points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.emg-points li svg, .emg-points li i {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: var(--space-1);
}
.emg-points li strong { color: var(--color-primary); }
.emg-points li p { margin: 0; color: var(--color-text); font-size: var(--font-size-base); }
.emg-bigstat {
  text-align: center;
  padding: var(--space-10) var(--space-8);
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  position: relative;
}
.emg-bigstat::before {
  content: '';
  position: absolute;
  inset: calc(-1 * var(--space-3)) var(--space-3) var(--space-3) calc(-1 * var(--space-3));
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-xl);
  z-index: -1;
}
.emg-bigstat .big-number {
  font-family: var(--font-heading);
  font-size: clamp(3.6rem, 7.5vw, 5.8rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-primary);
}
.emg-bigstat .big-number span { color: var(--color-accent); }
.emg-bigstat .big-label {
  font-family: var(--font-heading);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-3);
}

/* ---- Speed section: split with photo ---- */
.emg-speed { background: var(--color-white); }
.emg-speed-split {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-12);
  align-items: center;
}
.emg-speed-split figure { margin: 0; }
.emg-speed-split img {
  width: 100%;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 5;
  object-fit: cover;
  object-position: center 25%;
}
.emg-speed-split figcaption {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-2);
}
.emg-speed-copy h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.emg-speed-copy .answer-block { color: var(--color-text); margin-bottom: var(--space-5); }
.emg-speed-copy p { color: var(--color-text); margin-bottom: var(--space-4); }
.emg-area-chips {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.emg-area-chip {
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
.emg-area-chip svg, .emg-area-chip i { width: 14px; height: 14px; color: var(--color-primary); }

/* ---- Cost section ---- */
.emg-cost { background: var(--color-light); }
.emg-cost-factors {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  margin-top: var(--space-8);
}
.emg-cost-factor {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.emg-cost-factor:nth-child(even) { border-top-color: var(--color-accent); }
.emg-cost-factor:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.emg-cost-factor h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.emg-cost-factor p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }

/* ---- Proof gallery ---- */
.emg-proof { background: var(--color-white); }
.emg-proof-gallery {
  display: grid;
  grid-template-columns: 1fr 1.35fr 1fr;
  gap: var(--space-5);
  align-items: stretch;
  margin-bottom: var(--space-10);
}
.emg-proof-gallery figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
}
.emg-proof-gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.emg-proof-gallery figure:hover img { transform: scale(1.04); }
.emg-proof-gallery figcaption {
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

/* ---- C6.4 Glass comparison on dark ---- */
.emg-compare {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.emg-compare::before {
  content: '';
  position: absolute;
  top: -25%;
  left: -12%;
  width: 55%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 38%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.emg-compare .container { position: relative; z-index: 1; }
.emg-compare .section-title h2 { color: var(--color-white); }
.emg-compare .section-title .answer-block { color: color-mix(in srgb, var(--color-white) 82%, transparent); }
.emg-compare-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 980px;
  margin: 0 auto;
}
.emg-compare-col {
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.emg-compare-col--them {
  background: color-mix(in srgb, var(--color-white) 5%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 9%, transparent);
}
.emg-compare-col--us {
  background: color-mix(in srgb, var(--color-primary) 32%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-accent) 45%, transparent);
  box-shadow: var(--shadow-xl);
}
.emg-compare-col h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-5);
  text-wrap: balance;
}
.emg-compare-col--us h3 { color: var(--color-accent); }
.emg-compare-col ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
  padding: 0;
  margin: 0;
}
.emg-compare-col li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 85%, transparent);
  font-size: var(--font-size-sm);
}
.emg-compare-col li svg, .emg-compare-col li i { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; }
.emg-compare-col--them li svg, .emg-compare-col--them li i { color: color-mix(in srgb, var(--color-white) 40%, transparent); }
.emg-compare-col--us li svg, .emg-compare-col--us li i { color: var(--color-accent); }

/* ---- FAQ + related ---- */
.emg-faq { background: var(--color-light); }
.emg-related { background: var(--color-white); }

/* ---- C9.2 Closing CTA with top-arc radial glow ---- */
.emg-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.emg-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, color-mix(in srgb, var(--color-accent) 22%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.emg-cta::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.emg-cta .container { position: relative; z-index: 1; }
.emg-cta h2 {
  color: var(--color-white);
  max-width: 26ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.emg-cta .answer-block {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.emg-cta .hero-actions {
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

/* ---- SVG dividers (C3.3 double wave + C3.5 parallelograms) ---- */
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

/* Reveal stagger delays */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .emg-triage-layout { grid-template-columns: 1fr; }
  .emg-triage-photo { position: static; max-width: 460px; margin: 0 auto; }
  .emg-donts { grid-template-columns: repeat(2, 1fr); }
  .emg-who-split { grid-template-columns: 1fr; gap: var(--space-10); }
  .emg-bigstat { max-width: 420px; margin: 0 auto; }
  .emg-speed-split { grid-template-columns: 1fr; }
  .emg-speed-split figure { max-width: 460px; margin: 0 auto; }
  .emg-cost-factors { grid-template-columns: repeat(2, 1fr); }
  .emg-proof-gallery { grid-template-columns: repeat(2, 1fr); }
  .emg-proof-gallery figure:first-child { grid-column: span 2; }
  .emg-proof-gallery figure:first-child img { aspect-ratio: 16 / 9; }
}
@media (max-width: 768px) {
  .emg-hero { min-height: auto; }
  .emg-hero h1 { font-size: clamp(1.8rem, 7vw, 2.5rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .emg-compare-grid { grid-template-columns: 1fr; }
  .emg-step summary { font-size: var(--font-size-base); padding: var(--space-4) var(--space-5); }
  .emg-step p { padding-left: var(--space-5); padding-right: var(--space-5); }
}
@media (max-width: 600px) {
  .emg-donts, .emg-cost-factors { grid-template-columns: 1fr; }
  .emg-proof-gallery { grid-template-columns: 1fr; }
  .emg-proof-gallery figure:first-child { grid-column: auto; }
  .emg-hero .hero-actions, .emg-cta .hero-actions { flex-direction: column; align-items: stretch; }
}
.emg-hero .hero-answer a { color: var(--color-accent); font-weight: 700; text-decoration: underline; text-underline-offset: 3px; }
.emg-powerline {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
  margin: 0 auto var(--space-xl);
  max-width: 820px;
  padding: var(--space-lg);
  border-left: 5px solid var(--color-accent);
  border-radius: var(--radius-md);
  background: color-mix(in srgb, var(--color-accent) 10%, var(--color-white));
  box-shadow: var(--shadow-md);
}
.emg-powerline-icon { flex: 0 0 auto; color: var(--color-accent); }
.emg-powerline-icon svg { width: 36px; height: 36px; }
.emg-powerline h3 { text-wrap: balance; margin-bottom: var(--space-xs); color: var(--color-dark); }
.emg-powerline p { max-width: 65ch; }
</style>

<!-- ============ HERO (C1.4 dark urgent variant) ============ -->
<section class="emg-hero has-hero-bg" aria-label="Emergency tree removal in DeLand, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="emg-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/services/">Services</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">Emergency Tree Removal &amp; Storm Cleanup</span>
    </nav>

    <span class="emg-badge"><span class="emg-beacon" aria-hidden="true"></span> 24/7 Storm Response &middot; DeLand, FL</span>

    <h1>Emergency Tree Removal in DeLand, FL &mdash; <span class="text-accent">24/7 Storm Cleanup</span></h1>

    <p class="hero-answer">Call <?php echo e($siteName); ?> at <a href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a> &mdash; emergency tree removal and storm damage calls in DeLand are answered 24/7. Send your address and photos, genuine hazards like a tree on your roof get same-day response, and you get the price in writing before a saw starts. We're a licensed and insured tree service based in DeLand, serving all of Volusia County.</p>

    <div class="hero-actions">
      <a href="<?php echo e(phoneHref($phone)); ?>" class="btn btn-accent btn-lg">Call 24/7: <?php echo e(formatPhone($phone)); ?></a>
      <a href="#estimate-form" class="btn btn-outline-white btn-lg">Send Photos of the Damage</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('clock'); ?> Answered 24/7</span>
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('map-pin'); ?> Based in DeLand Since <?php echo e($yearEstablished); ?></span>
      <span class="hero-trust-item"><?php echo icon('truck'); ?> Grapple Loader &amp; Chipper On Call</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-emergency-tree-service-storm-cleanup';
    $heroFormService  = 'Emergency Tree Service & Storm Cleanup';
    $heroFormHeading  = 'Request Emergency Help';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ 24/7 STAT BAND (C6.3) ============ -->
<section class="emg-stats" aria-label="Emergency response facts">
  <div class="container">
    <div class="emg-stats-row">
      <div class="emg-stat">
        <div class="emg-stat-number">24<span class="accent">/7</span></div>
        <div class="emg-stat-label">Storm Calls Answered</div>
      </div>
      <div class="emg-stat">
        <div class="emg-stat-number"><?php echo e($yearsInBusiness); ?><span class="accent">+</span></div>
        <div class="emg-stat-label">Years Based in DeLand</div>
      </div>
      <div class="emg-stat">
        <div class="emg-stat-number">50<span class="accent">mi</span></div>
        <div class="emg-stat-label">Response Radius, Volusia County</div>
      </div>
      <div class="emg-stat">
        <div class="emg-stat-number"><span class="accent">1</span></div>
        <div class="emg-stat-label">Crew for Tree, Skid-Steer &amp; Haul-Off</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: double wave (dark → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-dark);">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="var(--color-white)" opacity="0.4"/><path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ TRIAGE — 01 ============ -->
<section class="numbered-section emg-triage" id="hurricane-season" data-num="01" aria-label="Hurricane season storm damage: the first hour">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Hurricane Season &middot; Peak September&ndash;November</span>
      <h2>What should you do in the first hour after a hurricane damages a tree?</h2>
      <p class="answer-block">Stay away from the tree, assume any downed line is live, and get everyone out from under damaged limbs. Photograph the damage from a safe distance for your insurance claim, then call <?php echo e($siteName); ?> or send your address and photos. Don't start cutting &mdash; storm-loaded wood is under tension and moves without warning.</p>
    </div>

    <div class="emg-powerline" data-animate>
      <div class="emg-powerline-icon"><?php echo icon('zap-off'); ?></div>
      <div>
        <h3>When should you NOT touch a tree after a storm?</h3>
        <p>Never touch a tree, limb, or fence that is touching or tangled in a power line &mdash; and don't let a tree crew touch it either. Treat the line and everything in contact with it as live, keep people and pets well back, and report it to your electric utility (or 911 if it's sparking or on fire). <?php echo e($siteName); ?> starts cutting only after the utility has de-energized or cleared the line.</p>
      </div>
    </div>

    <div class="emg-triage-layout">
      <div class="emg-steps" data-p1-dynamic>
        <?php foreach ($stormSteps as $i => $step): ?>
        <details class="emg-step"<?php echo $i === 0 ? ' open' : ''; ?>>
          <summary><?php echo e($step['title']); ?></summary>
          <p><?php echo e($step['text']); ?></p>
        </details>
        <?php endforeach; ?>
      </div>

      <div class="emg-triage-photo" data-animate="right">
        <figure>
          <?php echo p1_picture($bodyPhotos['spar']['src'], $bodyPhotos['spar']['alt'], 600, 800, '(max-width: 768px) 100vw, 600px'); ?>
          <figcaption>Storm-damaged spar coming down in controlled sections &mdash; DeLand, FL</figcaption>
        </figure>
      </div>
    </div>

    <div class="emg-donts">
      <?php foreach ($stormDonts as $i => $dont): ?>
      <article class="emg-dont reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="emg-dont-icon"><?php echo icon(($dont['icon'])); ?></div>
        <h3><?php echo e($dont['title']); ?></h3>
        <p><?php echo e($dont['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-cream)" opacity="0.3" points="0,20 1200,40 1200,80 0,80"/><polygon fill="var(--color-cream)" points="0,40 1200,20 1200,80 0,80"/></svg>
</div>

<!-- ============ WHO ANSWERS — 02 ============ -->
<section class="numbered-section emg-who" data-num="02" aria-label="Who answers emergency tree calls">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">A Crew, Not a Call Center</span>
      <h2>Who answers a 24-hour tree service call in DeLand?</h2>
      <p class="answer-block">A local crew, not a dispatch desk. <?php echo e($siteName); ?> has answered 24-hour tree service calls from its home base in DeLand since <?php echo e($yearEstablished); ?> &mdash; the same climbers, grapple loader, and chipper working Volusia County yards all year are the ones that roll out when a storm hits.</p>
    </div>

    <div class="emg-who-split">
      <div class="emg-who-copy">
        <p data-animate>The live oaks and slash pines that shade DeLand yards carry enormous canopies, and when hurricane wind finds a weak root plate in sandy Central Florida soil, the failure is sudden &mdash; across a roof, a fence line, or a pool screen enclosure. Taking that apart safely takes a crew that has spent years roping down these same species. For the insurance side, see <a href="/blog/insurance-fallen-tree-removal-florida/">what Florida homeowners insurance covers after a tree falls</a>.</p>
        <ul class="emg-points" data-p1-dynamic>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>One call covers the whole emergency.</strong> Climbing, rigging, skid-steer work, chipping, and haul-off come from the same company.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Certified arborist judgment under pressure.</strong> We tell you which damaged trees are lost, which can be saved, and which can safely wait.</p>
          </li>
          <li data-animate>
            <?php echo icon('check-circle'); ?>
            <p><strong>Insurance-ready documentation.</strong> Licensed and insured, with the photos, written scope, and itemized invoice your adjuster will ask for after the storm.</p>
          </li>
        </ul>
      </div>

      <div class="emg-bigstat" data-animate="right">
        <div class="big-number">24<span>/7</span></div>
        <div class="big-label">Emergency Calls Answered, In Season and Out</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: double wave (cream → white) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 100" preserveAspectRatio="none"><path d="M0,40 C300,0 900,80 1200,30 L1200,100 L0,100 Z" fill="var(--color-white)" opacity="0.4"/><path d="M0,60 C300,20 900,90 1200,50 L1200,100 L0,100 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ SPEED — 03 ============ -->
<section class="numbered-section emg-speed" data-num="03" aria-label="Emergency response time">
  <div class="container">
    <div class="emg-speed-split">
      <figure data-animate>
        <?php echo p1_picture($bodyPhotos['kubota']['src'], $bodyPhotos['kubota']['alt'], 600, 750, '(max-width: 768px) 100vw, 600px'); ?>
        <figcaption>Loader staged while the climber works &mdash; the whole job from one crew.</figcaption>
      </figure>

      <div class="emg-speed-copy">
        <span class="eyebrow-label">Minutes Matter</span>
        <h2>How fast can your emergency tree service get to me?</h2>
        <p class="answer-block">Same-day response for genuine hazards is the standard. We're based in DeLand, so most of Volusia County is a short drive &mdash; not a regional dispatch queue. After a widespread hurricane we triage honestly: trees on homes and blocked driveways first, standing hazards next, yard debris after that.</p>
        <p data-animate>Searching for emergency tree removal near me in DeLand? Our shop, equipment, and climbers are already inside the county line &mdash; no staging area three counties away, no subcontracted strangers. The trucks in our photos are the trucks that pull up.</p>
        <div class="emg-area-chips" data-p1-dynamic>
          <?php foreach (['DeLand', 'Deltona', 'Orange City', 'DeBary', 'Lake Helen', 'Volusia County'] as $area): ?>
          <span class="emg-area-chip"><?php echo icon('map-pin'); ?> <?php echo e($area); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: stacked parallelograms (white → light) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none"><polygon fill="var(--color-light)" opacity="0.3" points="0,40 1200,15 1200,80 0,80"/><polygon fill="var(--color-light)" points="0,25 1200,45 1200,80 0,80"/></svg>
</div>

<!-- ============ COST — 04 ============ -->
<section class="numbered-section emg-cost" data-num="04" aria-label="Storm cleanup cost">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Priced Before We Cut</span>
      <h2>How much does storm cleanup cost in DeLand, FL?</h2>
      <p class="answer-block">Storm cleanup in DeLand runs from a few hundred dollars for downed limbs and debris hauling to considerably more when a tree is on a structure. Emergency work is priced by hazard, access, and the equipment the job demands &mdash; and you get the number in writing before we cut, even at night.</p>
    </div>

    <div class="emg-cost-factors">
      <div class="emg-cost-factor reveal-delay-1" data-animate>
        <h3>What the tree is on</h3>
        <p>A trunk across open lawn is a loader job. The same trunk on a ridgeline or pool screen enclosure needs rigging and roped sections.</p>
      </div>
      <div class="emg-cost-factor reveal-delay-2" data-animate>
        <h3>Access after the storm</h3>
        <p>Flooded yards, blocked streets, and tight gates decide which machines reach the tree. When the grapple loader can work, the bill reflects it.</p>
      </div>
      <div class="emg-cost-factor reveal-delay-3" data-animate>
        <h3>Stabilize now, finish later</h3>
        <p>Sometimes the smart move is two visits: remove the immediate hazard tonight, then finish the takedown and haul-off at standard rates.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROOF — 05 ============ -->
<section class="numbered-section emg-proof" data-num="05" aria-label="Storm cleanup work in DeLand">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Our Crew, Real Storm Work</span>
      <h2>What does storm cleanup look like when the crew is local?</h2>
      <p class="answer-block">It looks like the same equipment DeLand sees all year: a climber topping the broken spar, the grapple loader carrying out the trunk, and the chipper clearing the brush. These photos are our crew on real Volusia County jobs.</p>
    </div>

    <div class="emg-proof-gallery">
      <figure data-animate>
        <?php echo p1_picture($bodyPhotos['spar']['src'], $bodyPhotos['spar']['alt'], 800, 1000, '(max-width: 768px) 100vw, 800px'); ?>
        <figcaption>Topping a storm-damaged spar, one roped cut at a time</figcaption>
      </figure>
      <figure class="reveal-delay-1" data-animate>
        <?php echo p1_picture($heroImage, 'Grapple track loader moving uprooted stumps during land clearing near DeLand, FL', 800, 600, '(max-width: 768px) 100vw, 800px'); ?>
        <figcaption>Grapple loader clearing uprooted stumps near DeLand</figcaption>
      </figure>
      <figure class="reveal-delay-2" data-animate>
        <?php echo p1_picture($bodyPhotos['chipper']['src'], $bodyPhotos['chipper']['alt'], 800, 800, '(max-width: 768px) 100vw, 800px'); ?>
        <figcaption>Storm brush through the chipper &mdash; debris leaves the same day</figcaption>
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

<!-- ============ COMPARISON (C6.4 glass on dark) ============ -->
<section class="emg-compare" aria-label="Spotting storm chasers">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label" style="color: var(--color-accent);">After Every Hurricane</span>
      <h2>How do you spot a storm-chaser before you sign anything?</h2>
      <p class="answer-block">Watch for cash-only prices, out-of-state plates, pressure to sign on the spot, and insurance claims with no paperwork. A legitimate local tree service gives you a written price, verifiable coverage, and a DeLand address that still exists after hurricane season.</p>
    </div>

    <div class="emg-compare-grid">
      <div class="emg-compare-col emg-compare-col--them" data-animate>
        <h3>The trucks that follow the storm</h3>
        <ul>
          <?php foreach ($comparison as $row): ?>
          <li><?php echo icon('x'); ?> <?php echo e($row['them']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="emg-compare-col emg-compare-col--us" data-animate="right">
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

<!-- ============ FAQ — 06 ============ -->
<section class="numbered-section emg-faq" data-num="06" aria-label="Emergency tree service questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Asked at 2 AM</span>
      <h2>What do DeLand homeowners ask during a tree emergency?</h2>
      <p class="answer-block">DeLand homeowners in a tree emergency ask <?php echo e($siteName); ?> the same six things: removal versus cleanup, night and weekend calls, whether the house is safe, power lines, insurance, and emergency pricing. Straight answers below &mdash; and if it's urgent, call now.</p>
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
<section class="emg-related" aria-label="Related tree services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">After the Emergency</span>
      <h2>What other tree services do DeLand property owners pair with storm cleanup?</h2>
      <p class="answer-block">DeLand property owners usually pair storm cleanup with <a href="/services/fallen-tree-removal-cleanup/">fallen tree removal</a> for what's already on the ground, hazardous tree removal for the leaners the wind exposed, and standard tree removal for the trees the storm finished off.</p>
    </div>

    <?php renderServiceCards(['fallen-tree-removal-cleanup', 'dead-hazardous-tree-removal', 'tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ CLOSING CTA (C9.2 radial glow) ============ -->
<section class="emg-cta" aria-label="Request emergency tree help">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Answered 24/7 &middot; DeLand &amp; Volusia County</span>
    <h2>Is a Tree on Your Roof or Leaning Over Your Home Right Now?</h2>
    <p class="answer-block">Don't wait it out. Send your address, photos, and what happened &mdash; <?php echo e($siteName); ?> will triage the hazard, give you a straight answer on timing, and put the price in writing before the saws start. Stay clear of the tree until we get there.</p>
    <div class="hero-actions">
      <a href="<?php echo e(phoneHref($phone)); ?>" class="btn btn-accent btn-lg">Call 24/7: <?php echo e(formatPhone($phone)); ?></a>
      <a href="#estimate-form" class="btn btn-outline-white btn-lg">Send Damage Photos</a>
    </div>
  </div>
</section>

<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
