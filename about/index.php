<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /about/index.php — About God's Country Tree Service
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — story, values, milestones, credentials, CTA
 * ============================================================
 */

$currentPage = 'about';

// V2.2 CTR meta (trade noun + city + differentiator + CTA)
$pageTitle       = "About God's Country Tree Service | Owner-Operated, DeLand FL";
$pageDescription = "Meet Caleb, owner of God's Country Tree Service — a trained arborist with 21+ years of hands-on tree care, now serving Central & North Central Florida. Free estimates.";
$canonicalUrl    = $siteUrl . '/about/';

// ---- Images (content/image-manifest.md allocation) ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062729745-ekffah-31162327_2042462179307717_7701525571804594176_n.webp'; // land clearing panorama
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$storyImage = [
    'src' => 'https://i.imgur.com/bqd1CaU.jpeg',
    'alt' => 'Caleb, owner of God\'s Country Tree Service, positioned high in a pine tree during arborist work in DeLand, FL',
];
$storyImage2 = [
    'src' => 'https://i.imgur.com/Awf2Hm0.jpeg',
    'alt' => 'Caleb, owner of God\'s Country Tree Service, positioned high in a pine tree during arborist work in DeLand, FL',
];
$valuesImage = [
    'src' => 'https://i.imgur.com/NSUVrpT.jpeg',
    'alt' => "God's Country climber roped high in a live oak canopy over a DeLand, FL yard",
];

// ---- Core values (grounded in owner's story: honesty, arborist training, tree + land clearing, clean job sites) ----
$values = [
    ['icon' => 'handshake',    'title' => 'Honest Recommendations', 'text' => "We don't believe in cutting corners — only trees that truly need it. You get straight recommendations, fair pricing, and clear communication before any work begins."],
    ['icon' => 'trees',        'title' => 'Trained Arborist Judgment', 'text' => 'Decades of hands-on experience and modern arborist practices guide every pruning, trimming, and removal decision — so we preserve healthy trees whenever we can.'],
    ['icon' => 'truck',        'title' => 'One Crew, Whole Job', 'text' => 'Tree service and land clearing under one roof — climbing, rigging, removals, skid-steer work, and cleanup handled by the same experienced crew, no second contractor.'],
    ['icon' => 'sparkles',     'title' => 'Cleaner Than We Found It', 'text' => 'Every project is done safely and professionally, and we leave every job site cleaner than we found it — because that is how we would want our own property treated.'],
];

// ---- Owner's journey (grounded in Caleb's story) ----
$milestones = [
    ['year' => 'The Beginning', 'title' => 'Raised in the timber industry', 'text' => 'Caleb grew up around trees, learning how they grow and what it takes to work safely around them — falling timber, operating equipment, climbing, and running saws.'],
    ['year' => 'The Craft',     'title' => 'Trained as an arborist', 'text' => 'Those early years led into professional arboriculture, where Caleb learned proper tree pruning, trimming, removal, rigging, climbing, and long-term tree health.'],
    ['year' => '21+ Years',     'title' => 'Owned a tree service in the Pacific Northwest', 'text' => 'For more than 21 years, Caleb owned and operated a successful Pacific Northwest tree service, helping thousands of homeowners and businesses maintain and protect their trees.'],
    ['year' => 'A New Chapter', 'title' => 'Faith and family brought us to Florida', 'text' => "Through what Caleb believes was God's timing, the family moved to Florida and he was given the opportunity to purchase God's Country Tree Service."],
    ['year' => 'Today',         'title' => 'Serving Central & North Central Florida', 'text' => "God's Country already had a strong reputation for honesty and dependable service. Today the goal is simple — continue that reputation for even more Florida families and businesses."],
];

// ---- Credentials (grounded: licensed/insured, arborist training, BBB, storm response) ----
$credentials = [
    ['icon' => 'badge-check', 'title' => 'Licensed & Insured', 'text' => 'Full liability and workers\' compensation coverage — proof available on request.'],
    ['icon' => 'trees',       'title' => 'Trained Arborist Expertise', 'text' => 'Tree health, risk, and pruning decisions guided by decades of hands-on arborist experience.'],
    ['icon' => 'award',       'title' => 'BBB Business Profile', 'text' => 'An established, reviewable business profile you can verify before you hire.'],
    ['icon' => 'clock',       'title' => '24/7 Storm Response', 'text' => 'Around-the-clock emergency availability through Central Florida\'s hurricane season.'],
];

// ---- Certification Badges (actual credential images) ----
$certificationBadges = [
    [
        'src' => 'https://i.imgur.com/EpmXxaJ.jpeg',
        'alt' => 'Certified Arborist certification from International Society of Arboriculture',
        'title' => 'ISA Certified Arborist',
    ],
];

// ---- Stats band ----
$aboutStats = [
    ['counter' => 21, 'suffix' => '+',     'label' => 'Years of Tree Experience'],
    ['counter' => 12, 'suffix' => '',      'label' => 'Specialized Tree Services'],
    ['counter' => 50, 'suffix' => '-Mile', 'label' => 'Service Radius'],
    ['counter' => 24, 'suffix' => '/7',    'label' => 'Storm Response'],
];

// ---- Schema: AboutPage + BreadcrumbList (references homepage org) ----
$aboutPageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'AboutPage',
    '@id'      => $canonicalUrl . '#webpage',
    'url'      => $canonicalUrl,
    'name'     => $pageTitle,
    'about'    => ['@id' => $siteUrl . '/#organization'],
    'primaryImageOfPage' => $heroImage,
];

$pageSchema = '<script type="application/ld+json">' . json_encode($aboutPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About'],
    ]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   About — page-specific styles
   Techniques: C1.4 layered hero, C5.4 drop cap, C6 asymmetric
   split, bento value grid, C6.3 stats band, vertical timeline,
   credentials grid, C3 diagonal + torn dividers, C9.2 glow CTA,
   C5.1 numbered watermarks. Tokens only — no hardcoded values.
   ============================================================ */

/* ---- C1.4 Layered hero ---- */
.about-hero {
  position: relative;
  min-height: 56vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.about-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 74%, transparent) 55%,
    color-mix(in srgb, var(--color-primary) 52%, transparent) 100%
  );
}
.about-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.about-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.about-hero .hero-eyebrow {
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
.about-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.4vw, 3.6rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 20ch;
  margin-bottom: var(--space-5);
}
.about-hero h1 .text-accent { color: var(--color-accent); }
.about-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 62ch;
  margin: 0;
}

/* ---- Numbered section watermarks (C5.1) ---- */
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
.numbered-section--dark::before { color: color-mix(in srgb, var(--color-white) 7%, transparent); }
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
.section-subtitle {
  display: block;
  font-family: var(--font-accent);
  font-weight: 600;
  color: var(--color-accent);
  font-size: var(--font-size-xl);
  margin-top: var(--space-2);
  margin-bottom: var(--space-4);
  line-height: 1.3;
}

/* ---- Story: asymmetric split + drop cap + framed photo ---- */
.story-section { background: var(--color-white); }
.story-split {
  display: grid;
  grid-template-columns: 1.35fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.story-copy .eyebrow-label { margin-bottom: var(--space-3); }
.story-copy h2 { text-wrap: balance; margin-bottom: var(--space-5); }
.story-copy .drop-cap::first-letter {
  float: left;
  font-family: var(--font-accent);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.85;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.story-copy p { color: var(--color-text); margin-bottom: var(--space-4); line-height: 1.75; }
.story-copy p:last-child { margin-bottom: 0; }
.story-image {
  position: relative;
}
.story-image img {
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 5;
  object-fit: cover;
  width: 100%;
  position: relative;
  z-index: 1;
}
.story-image::before {
  content: '';
  position: absolute;
  inset: var(--space-5) calc(-1 * var(--space-5)) calc(-1 * var(--space-5)) var(--space-5);
  border: 2px solid var(--color-accent);
  border-radius: var(--radius-lg);
  z-index: 0;
  pointer-events: none;
}
.story-badge {
  position: absolute;
  left: calc(-1 * var(--space-5));
  bottom: var(--space-8);
  z-index: 2;
  background: var(--color-accent);
  color: var(--color-dark);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  text-align: center;
}
.story-badge .big { font-family: var(--font-heading); font-size: var(--font-size-4xl); font-weight: 800; line-height: 1; }
.story-badge .small { font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 1px; margin-top: var(--space-1); }

/* ---- Owner's letter continuation (constrained reading column) ---- */
.story-letter {
  max-width: 72ch;
  margin: var(--space-12) auto 0;
}
.story-letter p { color: var(--color-text); margin-bottom: var(--space-4); line-height: 1.8; }
.story-pullquote {
  position: relative;
  margin: var(--space-8) 0;
  padding: var(--space-6) var(--space-8);
  border-left: 4px solid var(--color-accent);
  border-radius: var(--radius-md);
  background: var(--color-card-tint-3);
  font-family: var(--font-accent);
  font-style: italic;
  font-weight: 700;
  font-size: var(--font-size-xl);
  line-height: 1.5;
  color: var(--color-primary);
  text-wrap: balance;
}
.story-signoff {
  font-family: var(--font-accent);
  font-weight: 700;
  color: var(--color-primary-dark);
  margin: 0;
}

/* ---- Values bento grid ---- */
.values-section { background: var(--color-cream); }
.values-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
}
.value-card {
  position: relative;
  display: flex;
  gap: var(--space-5);
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  border-left: 4px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.value-card:nth-child(even) { border-left-color: var(--color-accent); }
.value-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.value-icon {
  flex-shrink: 0;
  width: 56px;
  height: 56px;
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.value-card:nth-child(even) .value-icon { background: var(--color-card-tint-3); color: var(--color-accent); }
.value-icon svg, .value-icon i { width: 26px; height: 26px; }
.value-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.value-card p { color: var(--color-gray); font-size: var(--font-size-sm); margin: 0; line-height: 1.65; }

/* ---- Stats band (C6.3 with internal dividers, over photo) ---- */
.about-stats {
  position: relative;
  background-size: cover;
  background-position: center;
  padding: clamp(4rem, 10vh, 7rem) 0;
}
.about-stats::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(150deg, color-mix(in srgb, var(--color-dark) 92%, transparent), color-mix(in srgb, var(--color-primary-dark) 80%, transparent));
}
.about-stats .container { position: relative; z-index: 1; }
.about-stats .stat-item {
  border-left: 1px solid color-mix(in srgb, var(--color-white) 18%, transparent);
  padding-left: var(--space-6);
  text-align: left;
}
.about-stats .stat-item:first-child { border-left: 0; padding-left: 0; }
.about-stats .stat-number {
  font-family: var(--font-accent);
  font-size: var(--font-size-6xl);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1;
}
.about-stats .stat-number .stat-accent { color: var(--color-accent); }
.about-stats .stat-label {
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 78%, transparent);
  margin-top: var(--space-2);
  text-transform: uppercase;
  letter-spacing: 1px;
}
@media (max-width: 768px) {
  .about-stats .stat-item, .about-stats .stat-item:first-child {
    border-left: 0; padding-left: 0; text-align: center;
  }
}

/* ---- Timeline (vertical milestones) ---- */
.timeline-section { background: var(--color-white); }
.timeline {
  max-width: 820px;
  margin: 0 auto;
  position: relative;
  padding-left: var(--space-8);
}
.timeline::before {
  content: '';
  position: absolute;
  left: 7px;
  top: var(--space-2);
  bottom: var(--space-2);
  width: 2px;
  background: linear-gradient(to bottom, var(--color-primary), color-mix(in srgb, var(--color-accent) 70%, var(--color-primary)));
}
.timeline-item {
  position: relative;
  padding-bottom: var(--space-10);
}
.timeline-item:last-child { padding-bottom: 0; }
.timeline-item::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-8) + 1px);
  top: 4px;
  width: 16px;
  height: 16px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 3px solid var(--color-primary);
  box-shadow: 0 0 0 5px color-mix(in srgb, var(--color-primary) 10%, transparent);
}
.timeline-item:nth-child(even)::before { border-color: var(--color-accent); box-shadow: 0 0 0 5px color-mix(in srgb, var(--color-accent) 12%, transparent); }
.timeline-year {
  display: inline-block;
  font-family: var(--font-accent);
  font-weight: 800;
  font-size: var(--font-size-sm);
  letter-spacing: 1px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-1);
}
.timeline-item h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.timeline-item p { color: var(--color-gray); font-size: var(--font-size-sm); margin: 0; max-width: 60ch; line-height: 1.7; }

/* ---- Credentials strip ---- */
.creds-section { background: var(--color-cream); }
.creds-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.cred-card {
  text-align: center;
  padding: var(--space-8) var(--space-5);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.cred-card:nth-child(even) { border-top-color: var(--color-accent); }
.cred-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.cred-icon {
  width: 52px;
  height: 52px;
  margin: 0 auto var(--space-4);
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  color: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
}
.cred-card:nth-child(even) .cred-icon { background: var(--color-card-tint-3); color: var(--color-accent); }
.cred-icon svg, .cred-icon i { width: 24px; height: 24px; }
.cred-card h3 { font-size: var(--font-size-base); margin-bottom: var(--space-2); }
.cred-card p { color: var(--color-gray); font-size: var(--font-size-sm); margin: 0; line-height: 1.6; }
.creds-verify {
  display: flex;
  justify-content: center;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-top: var(--space-10);
}
.creds-verify .btn { text-transform: none; }

/* ---- Certification Badges (actual credential images) ---- */
.certification-badges {
  margin-top: var(--space-12);
  text-align: center;
}
.badges-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  color: var(--color-primary);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.badges-grid {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-8);
  flex-wrap: wrap;
}
.cert-badge {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-4);
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  max-width: 280px;
}
.cert-badge:hover {
  transform: translateY(-6px) scale(1.02);
  box-shadow: var(--shadow-lg);
}
.cert-badge img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: var(--radius-sm);
}

/* ---- C9.2 Closing CTA with radial glow ---- */
.closing-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.closing-cta::before {
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
.closing-cta .container { position: relative; z-index: 1; }
.closing-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.closing-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- SVG dividers ---- */
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
  .story-split { grid-template-columns: 1fr; gap: var(--space-12); }
  .story-image { max-width: 460px; margin: 0 auto; }
  .creds-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .about-hero { min-height: auto; }
  .about-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .numbered-section::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .values-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .creds-grid { grid-template-columns: 1fr; }
  .story-badge { left: 50%; transform: translateX(-50%); bottom: calc(-1 * var(--space-6)); }
  .story-image::before { display: none; }
  .about-hero .hero-answer { font-size: var(--font-size-base); }
  .cert-badge { max-width: 240px; }
  .badges-title { font-size: var(--font-size-xl); }
}
</style>

<!-- ============ HERO ============ -->
<section class="about-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="About God's Country Tree Service in DeLand, Florida">
  <div class="container">
    <span class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
      About Us &middot; DeLand, FL
    </span>
    <h1>Meet the Owner Behind <span class="text-accent">God's Country</span></h1>
    <p class="hero-answer"><?php echo e($siteName); ?> is owner-operated by Caleb, a trained arborist with more than 21 years of hands-on tree care. Raised in the timber industry and now rooted in Florida, he keeps Central and North Central Florida's oaks, pines, and palms healthy, safe, and cared for the right way.</p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">About</li>
    </ol>
  </div>
</nav>

<!-- ============ STORY — 01 ============ -->
<section class="numbered-section story-section" data-num="01" aria-label="About God's Country Tree Service">
  <div class="container">
    <div class="story-split">
      <div class="story-copy">
        <span class="eyebrow-label">Meet the Owner</span>
        <h2>About God's Country Tree Service</h2>
        <p class="drop-cap" data-animate>My name is Caleb, and trees have been a part of my life for as long as I can remember. Growing up in the timber industry gave me the opportunity to learn how trees grow, how forests stay healthy, and what it takes to safely work around them.</p>
        <p data-animate>I spent my younger years falling timber, operating equipment, climbing trees, running saws, and learning firsthand how to care for one of God's greatest creations. Those experiences eventually led me into professional arboriculture, where I trained as an arborist and learned the proper techniques for tree pruning, trimming, removal, rigging, climbing, and preserving the long-term health of trees.</p>
        <p data-animate>For more than 21 years, I owned and operated a successful tree service in the Pacific Northwest. During that time, I helped thousands of homeowners and businesses safely maintain their trees, remove hazardous trees, improve the health of mature landscapes, and protect their properties. Every job reinforced something I have always believed &mdash; doing the work the right way is more important than doing it the fastest.</p>
      </div>
      <div class="story-image" data-animate="right">
        <img src="<?php echo e($storyImage['src']); ?>" alt="<?php echo e($storyImage['alt']); ?>" width="600" height="750" loading="lazy">
        <div class="story-badge">
          <div class="big">21+</div>
          <div class="small">Years of Tree Work</div>
        </div>
      </div>
    </div>

    <div class="story-letter" data-animate>
      <p>Faith and family eventually brought us to the great state of Florida, and through what I truly believe was God's timing, I was given the opportunity to purchase God's Country Tree Service. The company already had a strong reputation throughout North Central Florida for honesty, dependable service, and treating customers like neighbors. I knew those were values worth continuing.</p>
      <p>Today, my goal is simple: continue building on that reputation while serving even more homeowners, businesses, farms, and property owners throughout Central and North Central Florida. Whether we're removing a dangerous tree after a storm, carefully pruning valuable shade trees, clearing a lot for a new project, or helping improve the health and appearance of your property, I want every customer to feel confident they made the right choice.</p>
      <p>As a husband, father, homeowner, and business owner myself, I know how important it is to hire someone you can trust. When someone works on your property, you deserve honest recommendations, fair pricing, clear communication, and work that's done safely and professionally. That's exactly how we approach every project, no matter the size.</p>
      <p>At God's Country Tree Service, we combine decades of hands-on experience with professional-grade equipment, modern arborist practices, and old-fashioned customer service. We don't believe in cutting corners &mdash; only trees that truly need it. Our mission is to provide safe, reliable tree services that protect your property, preserve healthy trees whenever possible, and leave every job site cleaner than we found it.</p>
      <p>We're grateful for every customer who puts their trust in us, and we look forward to serving families and businesses across Florida for many years to come.</p>
      <blockquote class="story-pullquote">From our family to yours, thank you for considering God's Country Tree Service. We look forward to earning your trust.</blockquote>
      <p class="story-signoff">&mdash; Caleb, Owner &middot; God's Country Tree Service</p>
    </div>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,10 1200,60"/></svg>
</div>

<!-- ============ VALUES — 02 ============ -->
<section class="numbered-section values-section" data-num="02" aria-label="What we stand for">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Stand For</span>
      <h2>How God's Country Approaches Every Florida Tree Job</h2>
      <p class="answer-block"><?php echo e($siteName); ?> runs on four principles that show up on every project &mdash; honest recommendations and fair pricing, trained arborist judgment, one crew for the whole job, and a job site left cleaner than we found it.</p>
      <span class="section-subtitle"><?php echo e($tagline); ?></span>
    </div>

    <div class="values-grid">
      <?php foreach ($values as $i => $value): ?>
      <article class="value-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="value-icon"><?php echo icon(($value['icon'])); ?></div>
        <div>
          <h3><?php echo e($value['title']); ?></h3>
          <p><?php echo e($value['text']); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ STATS BAND ============ -->
<section class="about-stats" style="background-image:url('<?php echo e($storyImage2['src']); ?>');" aria-label="God's Country by the numbers">
  <div class="container">
    <div class="section-title" data-animate style="margin-bottom: var(--space-10);">
      <span class="eyebrow-label" style="color: var(--color-accent);">By the Numbers</span>
      <h2 style="color: var(--color-white);">Experience You Can Stand Behind</h2>
    </div>
    <div class="stats-grid" data-p1-dynamic>
      <?php foreach ($aboutStats as $stat): ?>
      <div class="stat-item">
        <div class="stat-number"><span data-counter="<?php echo e($stat['counter']); ?>" data-suffix="<?php echo e($stat['suffix']); ?>">0</span></div>
        <div class="stat-label"><?php echo e($stat['label']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ TIMELINE — 03 ============ -->
<section class="numbered-section timeline-section" data-num="03" aria-label="Company milestones">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">The Road Here</span>
      <h2>From the Timber Woods to God's Country</h2>
      <p class="answer-block">From the timber industry to more than 21 years running his own Pacific Northwest tree service, owner Caleb's path led to purchasing God's Country Tree Service and continuing its trusted reputation across Central and North Central Florida.</p>
    </div>

    <ol class="timeline" data-p1-dynamic>
      <?php foreach ($milestones as $m): ?>
      <li class="timeline-item" data-animate="left">
        <span class="timeline-year"><?php echo e($m['year']); ?></span>
        <h3><?php echo e($m['title']); ?></h3>
        <p><?php echo e($m['text']); ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- Divider: torn (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L140,33 L220,44 L300,30 L390,46 L470,36 L570,44 L670,28 L770,41 L870,33 L960,44 L1060,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ CREDENTIALS — 04 ============ -->
<section class="numbered-section creds-section" data-num="04" aria-label="Credentials and certifications">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Credentials</span>
      <h2>Why Florida Homeowners &amp; Businesses Can Hire With Confidence</h2>
      <p class="answer-block"><?php echo e($siteName); ?> backs its work with credentials you can verify &mdash; full licensing and insurance, decades of trained arborist expertise, an established BBB business profile, and genuine 24/7 storm availability across Central and North Central Florida. Property managers and HOA boards receive documentation before work begins, and commercial contracts include scheduled maintenance and written assessments.</p>
    </div>

    <div class="creds-grid">
      <?php foreach ($credentials as $i => $cred): ?>
      <article class="cred-card reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="cred-icon"><?php echo icon(($cred['icon'])); ?></div>
        <h3><?php echo e($cred['title']); ?></h3>
        <p><?php echo e($cred['text']); ?></p>
      </article>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($certificationBadges)): ?>
    <div class="certification-badges" data-animate>
      <h3 class="badges-title">Our Certifications</h3>
      <div class="badges-grid">
        <?php foreach ($certificationBadges as $badge): ?>
        <div class="cert-badge">
          <img src="<?php echo e($badge['src']); ?>" alt="<?php echo e($badge['alt']); ?>" title="<?php echo e($badge['title']); ?>" loading="lazy">
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>

    <div class="creds-verify" data-animate>
      <a class="btn btn-secondary" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('badge-check'); ?> View Our BBB Profile
      </a>
      <a class="btn btn-secondary" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">
        <?php echo icon('star'); ?> Read Google Reviews
      </a>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="closing-cta" aria-label="Get a free estimate">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Residential &middot; Commercial &middot; HOA</span>
    <h2>Put an Owner-Operated Crew You Can Trust on Your Property</h2>
    <p>Whether you're a homeowner with a leaning oak, a property manager needing scheduled maintenance, or a business owner with a lot that needs clearing &mdash; <?php echo e($siteName); ?> will walk the property, give you an honest read, and put a straight price in writing, usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/commercial-hoa-tree-services/" class="btn btn-outline-white btn-lg">Commercial Contracts</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
