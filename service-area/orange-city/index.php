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
$pageTitle       = "Tree Service in Orange City, FL | God's Country Tree Service";
$pageDescription = 'Tree service in Orange City, FL by licensed & insured certified arborists — 12+ years caring for historic moss-draped oaks. Free estimates in 24 hours.';
$canonicalUrl    = $siteUrl . '/service-area/orange-city/';

// ---- Images (content/image-manifest.md allocation) --------
$heroImage        = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062763583-cvnei3-503812193_4046117498942165_6962620168915463637_n.webp';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$imgClimber = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062768583-3pwb0r-650559399_1767273341337834_4780224751141932631_n.webp';
$imgLakeOak = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062743583-mfq8fe-46027175_2188053541415246_7752010700460916736_n.webp';

// ---- Heritage-oak preservation timeline (SIGNATURE) -------
$ocOakSteps = [
    ['title' => 'Walk the tree with an arborist',      'text' => 'We start at the base of the live oak, reading the root flare in Orange City&rsquo;s sandy soil, the moss load, and the branch unions before a single cut is planned. Old trees earn a slow look, not a fast quote.'],
    ['title' => 'Map the deadwood and weak unions',     'text' => 'A century-old canopy hides brittle deadwood and included bark where two leaders meet. We flag what needs to go and what can safely stay, so pruning strengthens the oak instead of stripping it.'],
    ['title' => 'Prune to structure, not to the truck', 'text' => 'Cuts follow the branch collar and the tree&rsquo;s natural form. We never lion-tail or top a heritage oak &mdash; heavy-handed cutting invites decay and storm failure a few seasons later in Volusia County&rsquo;s wind.'],
    ['title' => 'Lighten the storm load thoughtfully',   'text' => 'Selective crown reduction and thinning let hurricane gusts pass through instead of catching the sail of an overgrown canopy &mdash; the difference between a scarred limb and a lost tree after a summer storm.'],
    ['title' => 'Leave a care plan behind',              'text' => 'Before we roll out of Orange City we tell you when to look again, what to watch for, and which limbs to revisit next season. Preservation is a schedule, not a single visit.'],
];

// ---- Why-choose cards -------------------------------------
$ocWhy = [
    ['icon' => 'shield-check', 'title' => 'Licensed, insured, and local',   'text' => 'God&rsquo;s Country Tree Service is licensed and insured with proof available before any saw starts &mdash; not a storm-chasing crew that vanishes once the Orange City work is done.'],
    ['icon' => 'tree-deciduous', 'title' => 'Certified arborist judgment',  'text' => 'We read Orange City&rsquo;s old oaks and sandy soils the way a certified arborist should: careful pruning and honest save-or-remove calls over heavy-handed cutting that shortens a tree&rsquo;s life.'],
    ['icon' => 'truck', 'title' => 'Whole job, one crew',                    'text' => 'Climbing, rigging, grapple loading, chipping, hauling, and stump grinding come from the same DeLand crew &mdash; no subcontractors, and debris hauling folded into most Orange City quotes.'],
];

// ---- FAQs (local, 40-80 words) ----------------------------
$faqs = [
    [
        'q' => 'Do I need a permit to remove a tree in Orange City, FL?',
        'a' => 'Possibly. Orange City and Volusia County protect certain trees, and larger hardwoods &mdash; especially the historic live oaks that shade the older neighborhoods &mdash; can require a permit before removal. It depends on the species, size, and location on your lot. We flag permit questions during your free estimate so you know what applies before any cutting starts.',
    ],
    [
        'q' => 'Can you care for the big old oaks in Orange City&rsquo;s historic district?',
        'a' => 'Yes &mdash; heritage live oaks are our specialty. Around Orange City&rsquo;s historic district and the streets first platted for citrus, God&rsquo;s Country Tree Service prunes to structure, removes deadwood, and reduces storm load without topping or lion-tailing. Old moss-draped oaks reward patient, certified arborist care over heavy cutting, and that is exactly how we work.',
    ],
    [
        'q' => 'How far does God&rsquo;s Country travel to reach Orange City?',
        'a' => 'Orange City sits about 8 miles south of our DeLand home base, well inside our roughly 50-mile service radius across Volusia County. The same crew and equipment that work DeLand handle Orange City daily, so you get a free written estimate within 24 hours and a familiar local team &mdash; not a truck routed in from out of town.',
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
  font-family: var(--font-heading);
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
  font-family: var(--font-heading);
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
  font-family: var(--font-heading);
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
  font-family: var(--font-heading);
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
  font-family: var(--font-heading);
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
</style>

<!-- ============ HERO (C1.4) ============ -->
<section class="oc-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service in Orange City, Florida">
  <div class="container">
    <nav class="oc-crumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="oc-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="oc-sep" aria-hidden="true">/</span>
      <span aria-current="page">Orange City</span>
    </nav>

    <span class="oc-eyebrow">Service Area &middot; Orange City, FL</span>

    <h1>Tree Service in Orange City, FL &mdash; <span class="oc-accent">Care for Historic Oaks &amp; Springs Country</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, caring for Orange City&rsquo;s historic moss-draped oaks and springs-country canopy since <?php echo e($yearEstablished); ?>. We serve Orange City &mdash; about 8 miles south of our home base &mdash; and communities within roughly 50 miles across Volusia County, with free written estimates in 24 hours.</p>

    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="award"></i> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span class="hero-trust-item"><i data-lucide="tree-deciduous"></i> Certified Arborist Care</span>
      <span class="hero-trust-item"><i data-lucide="clock"></i> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="oc-section oc-numbered oc-answer" data-num="01" aria-label="Who handles tree care in Orange City">
  <div class="container">
    <div class="oc-heading" data-animate>
      <span class="eyebrow-label">The Short Answer</span>
      <h2>Who handles tree trimming and oak care in Orange City, FL?</h2>
    </div>
    <p class="answer-block" data-animate><strong><?php echo e($siteName); ?></strong> handles tree trimming, pruning, removal, and certified arborist oak care in Orange City, FL. Based in DeLand about 8 miles north, our licensed and insured crew has cared for Orange City&rsquo;s historic live oaks and springs-country canopy since <?php echo e($yearEstablished); ?> &mdash; with free written estimates delivered within 24 hours.</p>
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
        <h2 style="text-wrap: balance; margin-bottom: var(--space-5);">A citrus town shaded by live oaks worth protecting</h2>
        <p class="oc-dropcap" data-animate>Orange City was incorporated in 1882 and took its name from the orange and citrus groves that first drew settlers to this stretch of southwest Volusia County. More than a century later, the streets first platted for those groves are shaded by mature live oaks draped in Spanish moss &mdash; the kind of old-growth canopy that rewards careful pruning and certified arborist care over heavy-handed cutting. That is the tree stock God&rsquo;s Country Tree Service was built to look after.</p>
        <p data-animate>The town is best known for Blue Spring State Park, a first-magnitude spring on the St. Johns River and the region&rsquo;s winter refuge for manatees. Around it, Orange City&rsquo;s housing runs the full range &mdash; historic &ldquo;Florida cracker&rdquo; homes tucked under heritage oaks near the historic district along US Highway 17-92, plus newer subdivisions still filling in their canopy. Each calls for a different hand: preservation pruning for the old giants, structural training for the young trees.</p>
        <p data-animate>Landmarks like Valentine Park and Mill Lake sit within a canopy shaped by Orange City&rsquo;s sandy soils, which drain fast and let old oak roots range wide but shallow. That soil, plus Volusia County&rsquo;s hurricane-season winds, is exactly why we prune to reduce storm load rather than top a tree &mdash; and why searching &ldquo;tree service near me in Orange City&rdquo; should turn up a crew that knows the ground it stands on, not one passing through.</p>
        <p data-animate>As part of the DeBary&ndash;Deltona&ndash;Orange City corridor, Orange City is a short run from our DeLand shop, so the same crew and equipment reach it daily. Whether it&rsquo;s a single heritage oak over a historic-district porch or a full lot of overgrown laurel oaks in a newer subdivision, Orange City homeowners get the same certified arborist judgment and the same free 24-hour estimate.</p>
      </div>
      <figure class="oc-figure" data-animate="right">
        <img src="<?php echo e($imgClimber); ?>" alt="God&rsquo;s Country climber roped high inside a live oak canopy, trimming limbs near Orange City, FL" width="600" height="750" loading="lazy">
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
      <h2>How God&rsquo;s Country cares for Orange City&rsquo;s old moss-draped oaks</h2>
      <p class="answer-block">God&rsquo;s Country Tree Service preserves Orange City&rsquo;s century-old live oaks with a deliberate, five-step arborist process &mdash; reading the tree before cutting, pruning to structure, and lightening storm load without ever topping. Here is how a heritage-oak visit actually goes.</p>
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
      <p class="answer-block">God&rsquo;s Country Tree Service brings its full range of tree care to Orange City &mdash; trimming, pruning, certified arborist consultation, crown reduction, ongoing maintenance, and dead or hazardous tree removal &mdash; all from one licensed, insured DeLand crew, with debris hauling folded into most quotes.</p>
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
        <img src="<?php echo e($imgLakeOak); ?>" alt="Helmeted God&rsquo;s Country arborist working in an oak canopy above a lake near Orange City, FL" width="640" height="512" loading="lazy">
      </figure>
      <div>
        <span class="eyebrow-label">Blue Spring &amp; the Native Canopy</span>
        <h2>Working in springs country, from the St. Johns to Blue Spring</h2>
        <p data-animate>Orange City lives at the water&rsquo;s edge. Blue Spring State Park pushes crystal water toward the St. Johns River, and every winter its run fills with manatees seeking the warm flow. The live oaks, sabal palms, and laurel oaks that hold this landscape together are more than scenery &mdash; they are the native canopy that shades the springs, steadies the sandy banks, and cools the historic streets.</p>
        <p data-animate>God&rsquo;s Country Tree Service treats that canopy as worth keeping. We favor selective pruning and honest save-or-remove calls over clear-cutting, so the trees that make Orange City feel like springs country stay standing and healthy for the next generation.</p>
        <ul class="oc-canopy-list">
          <li data-animate><i data-lucide="leaf"></i><span><strong>Native-first judgment.</strong> Live oaks, sabal palms, and laurel oaks pruned to keep the canopy that defines Orange City.</span></li>
          <li data-animate><i data-lucide="wind"></i><span><strong>Storm-load reduction.</strong> Thinning and crown reduction that let hurricane gusts pass through instead of toppling old trees.</span></li>
          <li data-animate><i data-lucide="droplets"></i><span><strong>Careful near water.</strong> Clean rigging and full debris haul-off protect Orange City&rsquo;s lakes, springs, and sandy banks.</span></li>
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
      <p class="answer-block">Because Orange City&rsquo;s heritage oaks deserve a licensed, local crew that prunes to preserve &mdash; not a storm-chaser that tops trees and disappears. Here is what sets God&rsquo;s Country apart.</p>
    </div>
    <div class="oc-why-grid">
      <?php foreach ($ocWhy as $i => $card): ?>
      <article class="oc-why-card oc-tint-<?php echo ($i % 3) + 1; ?> reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="oc-why-icon"><i data-lucide="<?php echo e($card['icon']); ?>"></i></div>
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
      <p class="answer-block">Permits, heritage oaks, and how far we travel &mdash; the three things Orange City homeowners ask most, answered straight. If yours isn&rsquo;t here, ask in the estimate form and we&rsquo;ll reply within 24 hours.</p>
    </div>
    <div class="faq-grid" data-p1-dynamic>
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-icon"><i data-lucide="help-circle"></i></div>
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
    <span class="eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Get a Free Estimate in Orange City</h2>
    <p>Tell us about the heritage oak over the porch, the overgrown lot, or the leaning laurel oak near Blue Spring. <?php echo e($siteName); ?> will walk the property, give you an honest read, and put a straight, all-in price in writing &mdash; usually within 24 hours.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>
  </div>
</section>

<p class="oc-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
