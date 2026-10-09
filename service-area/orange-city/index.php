<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /service-area/orange-city/index.php — Orange City, FL
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 3B — Premium service-area page
 * Signature techniques: heritage-oak preservation timeline +
 * springs-country native-canopy motif. All values from tokens.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'service-area';

// ---- SEO ---------------------------------------------------
$pageTitle       = "Tree Service Orange City FL | {$gbpRating}★ ({$gbpReviewCount} Google Reviews)";
$pageDescription = "Tree service in Orange City, FL from a DeLand crew rated {$gbpRating}★ from {$gbpReviewCount} Google reviews. Live oak pruning, crown reduction, free written estimates: (407) 280-3484.";
$canonicalUrl    = $siteUrl . '/service-area/orange-city/';

// ---- Images (content/image-manifest.md allocation) --------
$heroImage        = '/assets/images/1784062763583-cvnei3-503812193_4046117498942165_6962620168915463637_n.webp';
$heroImagePreload = $heroImage;
$ogImage          = $siteUrl . p1_best_src($heroImage);

$imgClimber = '/assets/images/nsuvrpt-960.webp';
$imgLakeOak = '/assets/images/1784062731501-oi9ekh-35294961_2071235779763690_210454243612557312_n.webp';

// ---- Heritage-oak preservation timeline (SIGNATURE) -------
$ocOakSteps = [
    ['title' => 'Walk the tree with an arborist',      'text' => 'We start at the base of the live oak, reading the root flare in Orange City&rsquo;s sandy soil, the moss load, and the branch unions before a single cut is planned. Old trees earn a slow look, not a fast quote.'],
    ['title' => 'Map the deadwood and weak unions',     'text' => 'An old canopy hides brittle deadwood and included bark where two leaders meet. We flag what needs to go and what can safely stay, so pruning strengthens the oak instead of stripping it.'],
    ['title' => 'Prune to structure, not to the truck', 'text' => 'Cuts follow the branch collar and the tree&rsquo;s natural form. We never lion-tail or top a heritage oak &mdash; heavy-handed cutting invites decay and storm failure a few seasons later in Volusia County&rsquo;s wind.'],
    ['title' => 'Lighten the storm load thoughtfully',   'text' => 'Selective crown reduction and thinning let hurricane gusts pass through instead of catching the sail of an overgrown canopy &mdash; the difference between a scarred limb and a lost tree after a summer storm.'],
    ['title' => 'Leave a care plan behind',              'text' => 'Before we roll out of Orange City we tell you when to look again, what to watch for, and which limbs to revisit next season. Preservation is a schedule, not a single visit.'],
];

// ---- Why-choose cards -------------------------------------
$ocWhy = [
    ['icon' => 'shield-check', 'title' => 'Paperwork before the first cut',   'text' => 'Ask for proof of liability and workers&rsquo; compensation coverage and God&rsquo;s Country Tree Service will show it before any saw starts. The written estimate lists the trees, the cuts and the cleanup for your Orange City address.'],
    ['icon' => 'tree-deciduous', 'title' => 'Save-or-remove calls, explained',  'text' => 'We read Orange City&rsquo;s old oaks and sandy soils before recommending anything: careful pruning where the tree is sound, removal only where decay or a failing union makes it a hazard, and the reason given either way.'],
    ['icon' => 'truck', 'title' => 'Whole job, one crew',                    'text' => 'Climbing, rigging, grapple loading, chipping, hauling and stump grinding come from the same DeLand crew, and debris hauling is part of most Orange City quotes.'],
];

// ---- FAQs (local, 40-80 words) ----------------------------
$faqs = [
    [
        'q' => 'Do I need a permit to remove a tree in Orange City, FL?',
        'a' => 'A tree removal in Orange City can need a permit, depending on the species, the trunk size and where the tree stands on the lot. Larger hardwoods such as the live oaks in the older neighborhoods are the usual cases. We raise the question during the estimate visit, and you should confirm the current rule with the City of Orange City or Volusia County before any cutting starts.',
    ],
    [
        'q' => 'Can you care for the big old oaks in Orange City&rsquo;s historic district?',
        'a' => 'God&rsquo;s Country Tree Service prunes the big old live oaks around Orange City&rsquo;s historic district and the streets first platted for citrus. The work is structural pruning, deadwood removal and storm-load reduction, never topping or lion-tailing. Old moss-draped oaks respond to small, well-placed cuts, so a visit is planned limb by limb before anyone climbs.',
    ],
    [
        'q' => 'How far does God&rsquo;s Country travel to reach Orange City?',
        'a' => 'God&rsquo;s Country Tree Service travels about 8 miles south from its DeLand home base to reach Orange City, well inside its roughly 50-mile service radius across Volusia County. The crew and equipment that work DeLand are the ones that come to Orange City, so you deal with one local team from the estimate visit to the cleanup.',
    ],
];

// ---- Schema: Service + Speakable + FAQ + Breadcrumb -------
$areaServiceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'name'        => 'Tree Service in Orange City, FL',
    'serviceType' => 'Tree Service',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'url'         => $canonicalUrl,
    'areaServed'  => [
        '@type'            => 'City',
        'name'             => 'Orange City',
        'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Volusia County, Florida'],
    ],
];

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

$pageSchema = generateBreadcrumbSchema([
        ['name' => 'Home',         'url' => '/'],
        ['name' => 'Service Area', 'url' => '/service-area/'],
        ['name' => 'Orange City'],
    ])
    . generateFAQSchema($faqs)
    . '<script type="application/ld+json">' . json_encode($areaServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Orange City service area — page-specific styles
   Techniques: C1.4 layered hero, 2 SVG dividers, C5.1 numbered
   watermark, C5.4 drop cap, tinted cards, C9.2 radial-glow CTA,
   image hover-zoom, heritage-oak timeline (signature), springs-
   country native-canopy motif (signature).
   Prefix: oc-  •  Tokens only — no hardcoded colors/shadows/space.
   ============================================================ */

/* ---- C1.4 Layered hero: photo + gradient + noise ---- */
.oc-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.oc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 70%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.oc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.oc-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.oc-crumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.oc-crumb a { color: color-mix(in srgb, var(--color-white) 88%, transparent); transition: color var(--transition-fast); }
.oc-crumb a:hover { color: var(--color-accent); }
.oc-crumb .oc-sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.oc-eyebrow {
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
.oc-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 22ch;
  margin-bottom: var(--space-5);
}
.oc-hero h1 .oc-accent { color: var(--color-accent); }
.oc-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.oc-hero .hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.oc-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.oc-hero .hero-trust-item svg,
.oc-hero .hero-trust-item i { width: 16px; height: 16px; color: var(--color-accent); }

/* ---- Section shells + numbered watermark (C5.1) ---- */
.oc-section { padding: clamp(3.5rem, 8vh, 6rem) 0; }
.oc-numbered { position: relative; }
.oc-numbered::before {
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
.oc-numbered > .container { position: relative; z-index: 1; }

.oc-heading { text-align: center; max-width: 760px; margin: 0 auto var(--space-10); }
.oc-heading .eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}
.oc-heading h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.oc-heading .answer-block {
  max-width: 66ch;
  margin: 0 auto;
  font-size: var(--font-size-lg);
  color: var(--color-text);
}

/* ---- AEO answer block section ---- */
.oc-answer { background: var(--color-white); }
.oc-answer .answer-block {
  max-width: 72ch;
  margin: 0 auto;
  font-size: var(--font-size-xl);
  line-height: 1.6;
  color: var(--color-text);
  text-align: center;
}
.oc-answer .answer-block strong { color: var(--color-primary); }

/* ---- Local prose: asymmetric split + drop cap + hover-zoom ---- */
.oc-story { background: var(--color-cream); }
.oc-story-grid {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.oc-story-copy p { color: var(--color-text); max-width: 62ch; }
.oc-story-copy p + p { margin-top: var(--space-4); }
.oc-dropcap::first-letter {
  float: left;
  font-family: var(--font-accent);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.82;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.oc-figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.oc-figure img {
  width: 100%;
  height: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.oc-figure:hover img { transform: scale(1.05); }
.oc-figure figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-6) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 84%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
}

/* ---- SIGNATURE 1: Heritage-oak preservation timeline ---- */
.oc-heritage { background: var(--color-white); position: relative; }
.oc-timeline {
  list-style: none;
  counter-reset: ocheritage;
  max-width: 780px;
  margin: 0 auto;
  position: relative;
  padding-left: var(--space-10);
}
.oc-timeline::before {
  content: '';
  position: absolute;
  left: 18px;
  top: var(--space-4);
  bottom: var(--space-4);
  width: 2px;
  background: linear-gradient(
    to bottom,
    color-mix(in srgb, var(--color-primary) 55%, transparent),
    color-mix(in srgb, var(--color-accent) 55%, transparent)
  );
}
.oc-step {
  counter-increment: ocheritage;
  position: relative;
  padding: 0 0 var(--space-8) var(--space-8);
}
.oc-step:last-child { padding-bottom: 0; }
.oc-step::before {
  content: counter(ocheritage);
  position: absolute;
  left: calc(-1 * var(--space-10));
  top: 0;
  width: 38px;
  height: 38px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-accent);
  font-weight: 800;
  font-size: var(--font-size-base);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 0 6px var(--color-white), var(--shadow-md);
  z-index: 1;
}
.oc-step:nth-child(even)::before { background: var(--color-accent); color: var(--color-dark); }
.oc-step h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.oc-step p { margin: 0; color: var(--color-gray); font-size: var(--font-size-base); }

/* ---- Services grid intro ---- */
.oc-services { background: var(--color-light); }

/* ---- SIGNATURE 2: Springs-country native-canopy motif ---- */
.oc-springs {
  position: relative;
  background: var(--color-dark);
  overflow: hidden;
  color: var(--color-white);
}
.oc-springs::before {
  content: '';
  position: absolute;
  top: -25%;
  left: -12%;
  width: 65%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 40%, transparent) 0%, transparent 62%);
  pointer-events: none;
}
.oc-springs::after {
  content: '';
  position: absolute;
  bottom: -30%;
  right: -10%;
  width: 55%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-accent) 22%, transparent) 0%, transparent 60%);
  pointer-events: none;
}
.oc-springs .container { position: relative; z-index: 1; }
.oc-springs-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
}
.oc-springs-figure {
  margin: 0;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
}
.oc-springs-figure img {
  width: 100%;
  height: 100%;
  aspect-ratio: 5 / 4;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.oc-springs-figure:hover img { transform: scale(1.05); }
.oc-springs h2 { color: var(--color-white); text-wrap: balance; margin-bottom: var(--space-4); }
.oc-springs .eyebrow-label { color: var(--color-accent); }
.oc-springs p { color: color-mix(in srgb, var(--color-white) 84%, transparent); max-width: 56ch; }
.oc-springs p + p { margin-top: var(--space-4); }
.oc-canopy-list {
  list-style: none;
  margin-top: var(--space-6);
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.oc-canopy-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  font-size: var(--font-size-base);
}
.oc-canopy-list li i,
.oc-canopy-list li svg { width: 20px; height: 20px; color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }
.oc-canopy-list li strong { color: var(--color-white); }

/* ---- Why-choose tinted cards ---- */
.oc-why { background: var(--color-cream); }
.oc-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.oc-why-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.oc-why-card.oc-tint-1 { background: var(--color-card-tint-1); }
.oc-why-card.oc-tint-2 { background: var(--color-card-tint-2); }
.oc-why-card.oc-tint-3 { background: var(--color-card-tint-3); }
.oc-why-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.oc-why-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.oc-why-icon i, .oc-why-icon svg { width: 26px; height: 26px; }
.oc-why-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.oc-why-card p { margin: 0; color: var(--color-gray); font-size: var(--font-size-sm); }

/* ---- FAQ ---- */
.oc-faq { background: var(--color-white); }

/* ---- C9.2 Closing CTA with radial glow ---- */
.oc-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.oc-cta::before {
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
.oc-cta .container { position: relative; z-index: 1; }
.oc-cta .eyebrow-label { color: var(--color-accent); display: inline-block; font-family: var(--font-heading); font-size: var(--font-size-xs); font-weight: 700; text-transform: uppercase; letter-spacing: 2.5px; margin-bottom: var(--space-3); }
.oc-cta h2 { color: var(--color-white); max-width: 24ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.oc-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.oc-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- Last updated stamp ---- */
.oc-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 distinct styles) ---- */
.oc-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 64px);
  position: relative;
  z-index: 2;
}
.oc-divider svg { display: block; width: 100%; height: 100%; }
.oc-divider--flush { margin-bottom: -1px; }

/* ---- Reveal stagger delays ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .oc-story-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .oc-springs-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .oc-springs-figure { order: -1; }
  .oc-why-grid { grid-template-columns: 1fr; max-width: 520px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .oc-hero { min-height: auto; }
  .oc-hero h1 { font-size: clamp(1.8rem, 7vw, 2.5rem); }
  .oc-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .oc-answer .answer-block { font-size: var(--font-size-lg); }
  .oc-timeline { padding-left: var(--space-8); }
  .oc-step { padding-left: var(--space-6); }
  .oc-step::before { left: calc(-1 * var(--space-8)); width: 32px; height: 32px; }
}
@media (max-width: 600px) {
  .oc-hero .hero-actions { flex-direction: column; align-items: stretch; }
  .oc-cta .hero-actions { flex-direction: column; align-items: stretch; }
  .oc-story-copy p { max-width: none; }
}
/* ---- Inline body links (v8 content pass) ---- */
.area-article p a { text-decoration: underline; }
</style>

<article class="area-article">

<!-- ============ HERO (C1.4) ============ -->
<section class="oc-hero has-hero-bg" aria-label="Tree service in Orange City, Florida">
  <?php echo p1_hero_picture($heroImage); ?>
  <div class="container hero-with-form">
    <div class="hero-copy">
    <nav class="oc-crumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="oc-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="oc-sep" aria-hidden="true">/</span>
      <span aria-current="page">Orange City</span>
    </nav>

    <span class="oc-eyebrow">Service Area &middot; Orange City, FL</span>

    <h1>Tree Service in Orange City, FL &mdash; <span class="oc-accent">Care for Historic Oaks &amp; Springs Country</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, caring for Orange City&rsquo;s moss-draped live oaks and springs-country canopy since <?php echo e($yearEstablished); ?>. Orange City is about 8 miles south of our base, inside the roughly 50-mile area we cover across Volusia County. We visit the property at no charge and send a written estimate within 24 hours.</p>

    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span class="hero-trust-item"><?php echo icon('tree-deciduous'); ?> Certified Arborist on Staff</span>
      <span class="hero-trust-item"><?php echo icon('clock'); ?> About 8 Miles from DeLand</span>
    </div>
    </div>

    <?php
    $heroFormLocation = 'hero-area-orange-city';
    $heroFormService  = '';
    $heroFormHeading  = 'Get a Free Estimate in Orange City';
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php';
    ?>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="oc-section oc-numbered oc-answer" data-num="01" aria-label="Who handles tree care in Orange City">
  <div class="container">
    <div class="oc-heading" data-animate>
      <span class="eyebrow-label">The Short Answer</span>
      <h2>Who handles tree trimming and oak care in Orange City, FL?</h2>
    </div>
    <p class="answer-block" data-animate><strong><?php echo e($siteName); ?></strong> handles tree trimming, pruning, removal and oak care in Orange City, FL, with a certified arborist on staff. The crew is based in DeLand, about 8 miles north, and has worked Orange City&rsquo;s live oaks since <?php echo e($yearEstablished); ?>. Orange City is one stop on <a href="/service-area/">the six-community area we serve around DeLand</a>.</p>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="oc-divider oc-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,10 1200,60"/></svg>
</div>

<!-- ============ LOCAL STORY — 02 ============ -->
<section class="oc-section oc-numbered oc-story" data-num="02" aria-label="About Orange City, Florida">
  <div class="container">
    <div class="oc-story-grid">
      <div class="oc-story-copy">
        <span class="eyebrow-label" style="color: var(--color-primary); font-family: var(--font-heading); font-size: var(--font-size-xs); font-weight: 700; text-transform: uppercase; letter-spacing: 2.5px; display:inline-block; margin-bottom: var(--space-3);">Rooted in Orange City</span>
        <h2 style="text-wrap: balance; margin-bottom: var(--space-5);">Why do Orange City&rsquo;s old live oaks need careful pruning?</h2>
        <p class="oc-dropcap" data-animate>Orange City&rsquo;s old live oaks need careful pruning because their roots spread wide and shallow in fast-draining sand and their canopies carry heavy moss. Hard cuts open those trees to decay, so we rely on <a href="/services/tree-pruning-services/">structural pruning that follows the branch collar</a> and on <a href="/services/tree-trimming-services/">lighter routine trimming</a> between visits.</p>
        <p data-animate>The streets around the historic district were first platted for citrus in the 1880s, and the town still carries the name. Those streets are now shaded by mature live oaks draped in Spanish moss, a canopy that takes generations to grow and only one bad topping job to ruin.</p>
        <p data-animate>The town is best known for Blue Spring State Park, a spring on the St. Johns River and a winter refuge for manatees. Around it, housing runs from older homes under big oaks near US Highway 17-92 to newer subdivisions still filling in their canopy. Each calls for a different hand: preservation pruning for the old trees, structural training for the young ones.</p>
        <p data-animate>Valentine Park and Mill Lake sit inside the same canopy. If you are searching for &ldquo;tree service near me in Orange City,&rdquo; the useful question to put to any crew is how they reduce storm load without topping. Our answer is selective reduction cuts, laid out step by step in the next section.</p>
        <p data-animate>Orange City sits in the DeBary&ndash;Deltona&ndash;Orange City corridor, a short run from our DeLand shop. The work ranges from a single oak over a historic-district porch to a lot of overgrown laurel oaks in a newer subdivision, and we also look after trees for plazas along Saxon Boulevard.</p>
      </div>
      <figure class="oc-figure" data-animate="right">
        <?php echo p1_picture($imgClimber, 'God&rsquo;s Country bucket truck with its boom raised into an oak canopy', 600, 750, '(max-width: 768px) 100vw, 600px'); ?>
        <figcaption>Roped canopy pruning &mdash; the careful work Orange City&rsquo;s old oaks reward.</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: torn edge (cream → white) -->
<div class="oc-divider oc-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L70,42 L140,33 L220,44 L300,30 L390,46 L470,36 L570,44 L670,28 L770,41 L870,33 L960,44 L1060,31 L1150,41 L1200,36 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ SIGNATURE 1: HERITAGE-OAK TIMELINE — 03 ============ -->
<section class="oc-section oc-numbered oc-heritage" data-num="03" aria-label="How we preserve heritage oaks in Orange City">
  <div class="container">
    <div class="oc-heading" data-animate>
      <span class="eyebrow-label">Heritage Oak Preservation</span>
      <h2>How does God&rsquo;s Country care for Orange City&rsquo;s old moss-draped oaks?</h2>
      <p class="answer-block">God&rsquo;s Country Tree Service cares for Orange City&rsquo;s old live oaks in five steps, from reading the tree to leaving a care plan. Nothing is cut until the root flare, moss load and branch unions have been checked, and no oak is topped. Here is how a visit goes.</p>
    </div>
    <ol class="oc-timeline">
      <?php foreach ($ocOakSteps as $i => $step): ?>
      <li class="oc-step reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <h3><?php echo $step['title']; ?></h3>
        <p><?php echo $step['text']; ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- ============ SERVICES — 04 ============ -->
<section class="oc-section oc-numbered oc-services" data-num="04" aria-label="Tree services available in Orange City">
  <div class="container">
    <div class="oc-heading" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>Which tree services are available in <span style="color: var(--color-accent);">Orange City</span>, FL?</h2>
      <p class="answer-block">The tree services available in Orange City are trimming, pruning, arborist consultation, crown reduction, maintenance and dead or hazardous tree removal. One DeLand crew does all six with its own chipper, boom lift and grapple loader. Storm-prone canopies usually start with <a href="/services/crown-reduction-shaping/">a crown reduction plan for the heaviest limbs</a>.</p>
    </div>
    <?php renderServiceCards(['tree-trimming-services','tree-pruning-services','certified-arborist-services','crown-reduction-shaping','tree-maintenance-care','dead-hazardous-tree-removal'], $serviceCardData); ?>
  </div>
</section>

<!-- Divider: diagonal into dark springs section -->
<div class="oc-divider oc-divider--flush" aria-hidden="true" style="background: var(--color-light);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-dark)" points="0,60 1200,18 1200,60"/></svg>
</div>

<!-- ============ SIGNATURE 2: SPRINGS-COUNTRY MOTIF ============ -->
<section class="oc-section oc-springs" aria-label="Springs-country native canopy in Orange City">
  <div class="container">
    <div class="oc-springs-grid">
      <figure class="oc-springs-figure" data-animate>
        <?php echo p1_picture($imgLakeOak, 'God&rsquo;s Country skid steer parked below a full green oak beside a brick home', 640, 512, '(max-width: 768px) 100vw, 600px'); ?>
      </figure>
      <div>
        <span class="eyebrow-label">Blue Spring &amp; the Native Canopy</span>
        <h2>How does tree work protect the native canopy near Blue Spring?</h2>
        <p data-animate>Tree work protects the native canopy near Blue Spring when it removes only what is dead, weak or overextended. Live oaks, sabal palms and laurel oaks shade the historic streets and hold the sandy ground between Orange City and the St. Johns River, so we prune selectively and haul every limb off site.</p>
        <p data-animate>God&rsquo;s Country Tree Service treats that canopy as worth keeping. We choose selective pruning over clear-cutting, so the trees that make Orange City feel like springs country stay standing.</p>
        <ul class="oc-canopy-list">
          <li data-animate><?php echo icon('leaf'); ?><span><strong>Native-first judgment.</strong> Live oaks, sabal palms, and laurel oaks pruned to keep the canopy that defines Orange City.</span></li>
          <li data-animate><?php echo icon('wind'); ?><span><strong>Storm-load reduction.</strong> Thinning and crown reduction that let hurricane gusts pass through instead of toppling old trees.</span></li>
          <li data-animate><?php echo icon('droplets'); ?><span><strong>Careful near water.</strong> Clean rigging and full debris haul-off protect Orange City&rsquo;s lakes, springs, and sandy banks.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHY CHOOSE — 05 ============ -->
<section class="oc-section oc-numbered oc-why" data-num="05" aria-label="Why choose God's Country in Orange City">
  <div class="container">
    <div class="oc-heading" data-animate>
      <span class="eyebrow-label">Why Orange City Calls Us</span>
      <h2>Why choose God&rsquo;s Country Tree Service in Orange City?</h2>
      <p class="answer-block">Orange City homeowners choose God&rsquo;s Country Tree Service for old oaks because the crew prunes to keep a tree, and puts the plan in writing. The three points below cover insurance paperwork, how save-or-remove decisions are made, and which machines arrive on the job.</p>
    </div>
    <div class="oc-why-grid">
      <?php foreach ($ocWhy as $i => $card): ?>
      <article class="oc-why-card oc-tint-<?php echo ($i % 3) + 1; ?> reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="oc-why-icon"><?php echo icon(($card['icon'])); ?></div>
        <h3><?php echo $card['title']; ?></h3>
        <p><?php echo $card['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FAQ — 06 ============ -->
<section class="oc-section oc-numbered oc-faq" data-num="06" aria-label="Orange City tree service questions">
  <div class="container">
    <div class="oc-heading" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>Orange City tree service questions, answered</h2>
      <p class="answer-block">Permits, old oaks and travel distance are the three things Orange City homeowners ask about most. If yours is not here, put it in the estimate form and we will answer it with your quote.</p>
    </div>
    <div class="faq-grid" data-p1-dynamic>
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-icon"><?php echo icon('help-circle'); ?></div>
        <div>
          <h3><?php echo $faq['q']; ?></h3>
          <p class="faq-answer"><?php echo $faq['a']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="oc-cta" aria-label="Get a free tree service estimate in Orange City">
  <div class="container">
    <span class="eyebrow-label">Free Site Visit &middot; Quote in Writing</span>
    <h2>Get a Free Estimate in Orange City</h2>
    <p>Tell us about the oak over the porch, the overgrown lot, or the leaning laurel oak near Blue Spring. <?php echo e($siteName); ?> will walk the property, explain which limbs we would take and why, and follow up with a written quote.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Request a Written Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>
  </div>
</section>

<p class="oc-updated">Last Updated: <?php echo date('F Y'); ?></p>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
