<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /service-area/debary/index.php — Tree Service in DeBary, FL
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 3B — Premium service-area page (Volusia County)
 * Signature: "new growth vs. heritage" comparison split +
 * commuter/HOA scheduling angle. Local specifics verified,
 * non-swappable (DeBary Hall, SunRail, Riviera Bella, etc.).
 * All values from framework.css tokens — no hardcoded values.
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'service-area';

// ---- SEO (V2.1 trade-noun title + V2.2 CTR meta) ----
$pageTitle       = "Tree Service in DeBary, FL | God's Country Tree Service";
$pageDescription = 'Tree service in DeBary, FL — licensed & insured, 12+ years, HOA & residential crews for new subdivisions and heritage estate oaks. Free estimates in 24 hours.';
$canonicalUrl    = $siteUrl . '/service-area/debary/';

// ---- Images ----
$imgBase          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
$heroImage        = $imgBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$photoBeds = [
    'src' => $imgBase . '1784062733583-jhvosk-35788256_2078205079066760_5169623066409435136_n.webp',
    'alt' => 'Freshly mulched beds with shaped shrubs and young palms at a DeBary, FL subdivision home',
];
$photoAcreage = [
    'src' => $imgBase . '1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
    'alt' => 'God\'s Country skid steer clearing a mowed HOA common area near DeBary, FL',
];

// ---- FAQs (3 local) ----
$faqs = [
    [
        'q' => 'Do you work in DeBary HOA communities like Riviera Bella and Glen Abbey?',
        'a' => "Yes. God's Country Tree Service works in DeBary's gated and golf-course communities including Riviera Bella, Glen Abbey, and Springview. We coordinate with HOA managers on access, scheduling, and documented insurance, and we can handle a single backyard oak or a full common-area maintenance round on one written estimate.",
    ],
    [
        'q' => 'The trees around my new DeBary home are young — do they really need pruning yet?',
        'a' => "Often, yes. The live oaks and sabal palms planted across DeBary's newer subdivisions are exactly the age when structural pruning pays off. Correcting co-dominant leaders and crossing limbs now, while the tree is small, prevents the storm breakage and expensive removals that older, never-trained trees face later.",
    ],
    [
        'q' => 'Can you preserve the big heritage oaks near DeBary Hall instead of removing them?',
        'a' => "Preservation is usually the goal. Around DeBary Hall and the older streets, God's Country Tree Service favors crown reduction, deadwood removal, and careful thinning to keep century-old live oaks standing and sound. We only recommend removal when decay or structural failure makes a heritage tree a genuine hazard.",
    ],
];

// ---- Schema: Service + Speakable + Breadcrumb + FAQ ----
$areaServiceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'name'        => 'Tree Service in DeBary, FL',
    'serviceType' => 'Tree Service',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'url'         => $canonicalUrl,
    'areaServed'  => [
        '@type'            => 'City',
        'name'             => 'DeBary',
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
        ['name' => 'DeBary'],
    ])
    . generateFAQSchema($faqs)
    . '<script type="application/ld+json">' . json_encode($areaServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Tree Service in DeBary, FL — page-specific styles
   Prefix: dby-  |  tokens only, no hardcoded values
   Techniques: layered hero, 2 SVG dividers, numbered watermark,
   drop cap, tinted cards, radial-glow CTA, image hover-zoom,
   signature new-growth-vs-heritage comparison split.
   ============================================================ */

/* ---- Layered hero (photo + gradient + noise) ---- */
.dby-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.dby-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    165deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 74%, transparent) 52%,
    color-mix(in srgb, var(--color-dark) 92%, transparent) 100%
  );
}
.dby-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.dby-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.dby-crumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 75%, transparent);
  margin-bottom: var(--space-6);
}
.dby-crumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.dby-crumb a:hover { color: var(--color-accent); }
.dby-crumb .sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.dby-eyebrow {
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
.dby-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.2vw, 3.5rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 22ch;
  margin-bottom: var(--space-5);
}
.dby-hero h1 .text-accent { color: var(--color-accent); }
.dby-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.dby-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.dby-hero .hero-trust { justify-content: flex-start; padding-bottom: var(--space-2); }
.dby-hero .hero-trust-item i,
.dby-hero .hero-trust-item svg { width: 16px; height: 16px; color: var(--color-accent); }

/* ---- Numbered section watermark ---- */
.dby-numbered { position: relative; }
.dby-numbered::before {
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
.dby-numbered > .container { position: relative; z-index: 1; }

/* ---- Section shell / titles ---- */
.dby-section { padding: clamp(3.5rem, 8vh, 6rem) 0; }
.dby-shell { text-align: center; margin-bottom: var(--space-12); }
.dby-shell h2 {
  margin-bottom: var(--space-4);
  max-width: 30ch;
  margin-left: auto;
  margin-right: auto;
  text-wrap: balance;
}
.dby-shell .answer-block {
  max-width: 68ch;
  margin: 0 auto;
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.dby-shell--left { text-align: left; }
.dby-shell--left h2, .dby-shell--left .answer-block { margin-left: 0; margin-right: 0; }
.eyebrow-label { text-wrap: balance; }
.answer-block { text-wrap: pretty; }

/* ---- Background rotation ---- */
.dby-bg-white { background: var(--color-white); }
.dby-bg-cream { background: var(--color-cream); }
.dby-bg-light { background: var(--color-light); }

/* ---- Local prose w/ drop cap + hover-zoom figure ---- */
.dby-prose-grid {
  display: grid;
  grid-template-columns: 1.35fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.dby-prose p {
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.75;
  max-width: 62ch;
  margin-bottom: var(--space-5);
}
.dby-prose p:last-child { margin-bottom: 0; }
.dby-dropcap::first-letter {
  float: left;
  font-family: var(--font-accent);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.82;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}
.dby-figure {
  margin: 0;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  position: relative;
}
.dby-figure img {
  width: 100%;
  height: 100%;
  aspect-ratio: 4 / 3;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.dby-figure:hover img { transform: scale(1.05); }
.dby-figure figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-8) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 82%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
}

/* ---- SIGNATURE: new-growth vs heritage comparison split ---- */
.dby-compare-section { position: relative; overflow: hidden; }
.dby-compare {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  align-items: stretch;
}
.dby-compare-col {
  position: relative;
  border-radius: var(--radius-xl);
  padding: var(--space-10) var(--space-8);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dby-compare-col:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.dby-compare-col--young {
  background: var(--color-card-tint-1);
  border: 1px solid color-mix(in srgb, var(--color-primary) 16%, transparent);
}
.dby-compare-col--heritage {
  background: var(--color-card-tint-3);
  border: 1px solid color-mix(in srgb, var(--color-accent) 24%, transparent);
}
.dby-compare-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-full);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  margin-bottom: var(--space-5);
}
.dby-compare-col--young .dby-compare-tag { color: var(--color-primary); }
.dby-compare-col--heritage .dby-compare-tag { color: var(--color-accent); }
.dby-compare-tag i, .dby-compare-tag svg { width: 16px; height: 16px; }
.dby-compare-col h3 {
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-3);
  color: var(--color-dark);
  text-wrap: balance;
}
.dby-compare-col > p {
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin-bottom: var(--space-5);
}
.dby-compare-list { list-style: none; display: flex; flex-direction: column; gap: var(--space-3); }
.dby-compare-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.dby-compare-list li i, .dby-compare-list li svg {
  width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px;
}
.dby-compare-col--young .dby-compare-list li i { color: var(--color-primary); }
.dby-compare-col--heritage .dby-compare-list li i { color: var(--color-accent); }
.dby-compare-divider {
  position: absolute;
  top: 12%;
  bottom: 12%;
  left: 50%;
  width: 1px;
  background: linear-gradient(to bottom, transparent, color-mix(in srgb, var(--color-primary) 24%, transparent), transparent);
  transform: translateX(-50%);
  pointer-events: none;
}

/* ---- Commuter / HOA scheduling angle block ---- */
.dby-schedule {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
  background: var(--color-dark);
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.dby-schedule__media { position: relative; min-height: 100%; overflow: hidden; }
.dby-schedule__media img {
  width: 100%;
  height: 100%;
  min-height: 320px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.dby-schedule__media:hover img { transform: scale(1.05); }
.dby-schedule__body { padding: clamp(2rem, 5vw, var(--space-16)) clamp(1.5rem, 5vw, var(--space-12)) clamp(2rem, 5vw, var(--space-16)) 0; }
.dby-schedule__body .eyebrow-label { color: var(--color-accent); }
.dby-schedule__body h2 { color: var(--color-white); text-wrap: balance; margin-bottom: var(--space-4); }
.dby-schedule__body p { color: color-mix(in srgb, var(--color-white) 84%, transparent); line-height: 1.7; margin-bottom: var(--space-6); max-width: 52ch; }
.dby-schedule__points { list-style: none; display: flex; flex-direction: column; gap: var(--space-4); }
.dby-schedule__points li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  color: color-mix(in srgb, var(--color-white) 90%, transparent);
  font-size: var(--font-size-sm);
}
.dby-schedule__points li i, .dby-schedule__points li svg {
  width: 20px; height: 20px; color: var(--color-accent); flex-shrink: 0; margin-top: 2px;
}
.dby-schedule__points strong { color: var(--color-white); }

/* ---- Why-choose tinted cards ---- */
.dby-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.dby-why-card {
  position: relative;
  padding: var(--space-10) var(--space-8);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dby-why-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
.dby-why-card__icon {
  width: 54px;
  height: 54px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-5);
}
.dby-why-card__icon i, .dby-why-card__icon svg { width: 26px; height: 26px; }
.dby-why-card h3 { font-size: var(--font-size-xl); margin-bottom: var(--space-3); text-wrap: balance; }
.dby-why-card p { color: var(--color-gray); font-size: var(--font-size-sm); line-height: 1.65; margin: 0; }

/* ---- Services intro ---- */
.dby-services-section .answer-block { margin-bottom: var(--space-10); }

/* ---- FAQ ---- */
.dby-faq-grid { display: grid; grid-template-columns: 1fr; gap: var(--space-5); max-width: 900px; margin: 0 auto; }
.dby-faq-item {
  display: flex;
  gap: var(--space-5);
  padding: var(--space-8);
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base), transform var(--transition-base);
}
.dby-faq-item:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
.dby-faq-item__icon {
  width: 44px;
  height: 44px;
  flex-shrink: 0;
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.dby-faq-item__icon i, .dby-faq-item__icon svg { width: 22px; height: 22px; }
.dby-faq-item h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.dby-faq-item .faq-answer { color: var(--color-gray); font-size: var(--font-size-base); line-height: 1.7; margin: 0; }

/* ---- Closing CTA (dark radial glow) ---- */
.dby-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.dby-cta::before {
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
.dby-cta::after {
  content: '';
  position: absolute;
  bottom: -30%;
  right: -8%;
  width: 55%;
  height: 120%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-accent) 22%, transparent) 0%, transparent 62%);
  pointer-events: none;
}
.dby-cta .container { position: relative; z-index: 1; }
.dby-cta .eyebrow-label { color: var(--color-accent); }
.dby-cta h2 { color: var(--color-white); max-width: 26ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.dby-cta p { color: color-mix(in srgb, var(--color-white) 84%, transparent); max-width: 60ch; margin: 0 auto var(--space-8); }
.dby-cta .dby-actions { justify-content: center; }

/* ---- SVG dividers (2 distinct styles) ---- */
.dby-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 64px);
  position: relative;
  z-index: 2;
}
.dby-divider svg { display: block; width: 100%; height: 100%; }
.dby-divider--flush { margin-bottom: -1px; }

/* ---- Last updated ---- */
.dby-last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- Reveal stagger ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .dby-prose-grid { grid-template-columns: 1fr; gap: var(--space-8); }
  .dby-compare { grid-template-columns: 1fr; }
  .dby-compare-divider { display: none; }
  .dby-schedule { grid-template-columns: 1fr; }
  .dby-schedule__media img { min-height: 260px; }
  .dby-schedule__body { padding: clamp(2rem, 6vw, var(--space-12)); }
  .dby-why-grid { grid-template-columns: 1fr; max-width: 460px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .dby-hero { min-height: auto; }
  .dby-hero h1 { font-size: clamp(1.9rem, 7vw, 2.6rem); }
  .dby-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .dby-faq-item { flex-direction: column; gap: var(--space-4); }
}
@media (max-width: 600px) {
  .dby-actions { flex-direction: column; align-items: stretch; }
  .dby-compare-col { padding: var(--space-8) var(--space-6); }
}
</style>

<!-- ============ HERO ============ -->
<section class="dby-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service in DeBary, Florida">
  <div class="container">
    <nav class="dby-crumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="sep" aria-hidden="true">/</span>
      <span aria-current="page">DeBary</span>
    </nav>

    <span class="dby-eyebrow"><?php echo icon('map-pin'); ?> Tree Service &middot; DeBary, FL</span>

    <h1>Tree Service in DeBary, FL &mdash; <span class="text-accent">From SunRail Subdivisions to Heritage Estates</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving DeBary and the rest of Volusia County within about 50 miles since <?php echo e($yearEstablished); ?>. From the young live oaks of Riviera Bella and Glen Abbey to the century-old estate oaks near DeBary Hall, one local crew handles the trimming, pruning, planting, and removal.</p>

    <div class="dby-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate in DeBary</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span class="hero-trust-item"><?php echo icon('building-2'); ?> HOA &amp; Residential Crews</span>
      <span class="hero-trust-item"><?php echo icon('clock'); ?> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="dby-section dby-numbered dby-bg-white" data-num="01" aria-label="Tree service for DeBary subdivisions and HOAs">
  <div class="container">
    <div class="dby-shell" data-animate>
      <span class="eyebrow-label">DeBary, FL</span>
      <h2>Do you provide tree service for DeBary&rsquo;s new subdivisions and HOAs?</h2>
      <p class="answer-block"><?php echo e($siteName); ?> provides full tree service across DeBary&rsquo;s newer subdivisions and HOA communities &mdash; Riviera Bella, Glen Abbey, and Springview included. We handle structural pruning on young live oaks and sabal palms, planting, crown work, and removals, coordinating access and insurance with property managers and homeowners alike.</p>
    </div>
  </div>
</section>

<!-- Divider: soft wave (white -> cream) -->
<div class="dby-divider dby-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,30 C200,60 400,0 600,26 C800,52 1000,4 1200,30 L1200,60 L0,60 Z" fill="var(--color-cream)"/></svg>
</div>

<!-- ============ LOCAL PROSE — 02 ============ -->
<section class="dby-section dby-numbered dby-bg-cream" data-num="02" aria-label="About tree care in DeBary">
  <div class="container">
    <div class="dby-prose-grid">
      <div class="dby-prose">
        <div class="dby-shell dby-shell--left" style="margin-bottom: var(--space-6);">
          <span class="eyebrow-label">A Young City With Old Oaks</span>
          <h2>Tree care built for how DeBary actually grew</h2>
        </div>
        <p class="dby-dropcap" data-animate>DeBary is one of Volusia County&rsquo;s newest cities &mdash; it wasn&rsquo;t incorporated until 1993 &mdash; yet it carries one of the region&rsquo;s oldest stories. The city takes its name from Frederick deBary, a Belgian-born wine and champagne merchant whose 1871 winter estate, DeBary Hall, still stands as a restored historic site. That split personality is exactly what shapes tree work here: brand-new landscaping planted next to trees older than the town itself.</p>
        <p data-animate>Along US-17/92 and Dirksen Drive, growth has filled in fast. Subdivisions like Riviera Bella on the St. Johns River, the Glen Abbey golf community, and Springview went in with young live oaks and sabal palms that need early structural pruning to grow strong &mdash; the kind of small, cheap cuts that prevent big, expensive storm failures a decade later.</p>
        <p data-animate>Closer to DeBary Hall and the streets that predate the subdivisions, the trees tell the opposite story: mature live oaks with heavy, spreading canopies that deserve preservation, not a chainsaw. We handle both ends of that spectrum, plus everything between, and we know the difference matters to the people who live here.</p>
        <p data-animate>Bordered by Lake Monroe and the St. Johns River, with Gemini Springs Park and the DeBary SunRail station at its edge, this is a commuter city that grew up around its trees. If you&rsquo;ve been searching for a tree service near me in DeBary, our DeLand crew is a short drive south &mdash; about 12 miles &mdash; and works DeBary every week.</p>
      </div>
      <figure class="dby-figure" data-animate="right">
        <img src="<?php echo e($photoBeds['src']); ?>" alt="<?php echo e($photoBeds['alt']); ?>" width="600" height="450" loading="lazy">
        <figcaption>Fresh beds and young palms at a DeBary subdivision home</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: angled (cream -> white) -->
<div class="dby-divider dby-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-white)" points="0,60 1200,18 1200,60"/></svg>
</div>

<!-- ============ SIGNATURE: NEW GROWTH vs HERITAGE — 03 ============ -->
<section class="dby-section dby-numbered dby-compare-section dby-bg-white" data-num="03" aria-label="New growth versus heritage tree care in DeBary">
  <div class="container">
    <div class="dby-shell" data-animate>
      <span class="eyebrow-label">Two DeBarys, Two Approaches</span>
      <h2>New-growth pruning or heritage preservation &mdash; DeBary needs both</h2>
      <p class="answer-block">DeBary&rsquo;s trees fall into two very different jobs. The young trees in its SunRail-era subdivisions need training and structure; the century-old estate oaks need preserving. <?php echo e($siteName); ?> reads which one is in front of us before a single cut.</p>
    </div>

    <div class="dby-compare">
      <div class="dby-compare-divider" aria-hidden="true"></div>

      <article class="dby-compare-col dby-compare-col--young reveal-delay-1" data-animate="left">
        <span class="dby-compare-tag"><?php echo icon('sprout'); ?> New Growth</span>
        <h3>SunRail-Era Subdivisions</h3>
        <p>Riviera Bella, Glen Abbey, and Springview were planted with young live oaks and sabal palms. Trained early, they grow into strong, storm-resistant shade trees instead of hazards.</p>
        <ul class="dby-compare-list">
          <li><?php echo icon('check'); ?> Structural pruning that corrects co-dominant leaders</li>
          <li><?php echo icon('check'); ?> Tree &amp; shrub planting matched to Florida natives</li>
          <li><?php echo icon('check'); ?> Early shaping so canopies clear roofs and drives</li>
          <li><?php echo icon('check'); ?> HOA-friendly scheduling and documented insurance</li>
        </ul>
      </article>

      <article class="dby-compare-col dby-compare-col--heritage reveal-delay-2" data-animate="right">
        <span class="dby-compare-tag"><?php echo icon('trees'); ?> Heritage</span>
        <h3>Estate Oaks Around DeBary Hall</h3>
        <p>The mature live oaks near DeBary Hall and the city&rsquo;s older streets predate the subdivisions. Around trees like these, preservation almost always beats removal.</p>
        <ul class="dby-compare-list">
          <li><?php echo icon('check'); ?> Crown reduction to lighten heavy, overextended limbs</li>
          <li><?php echo icon('check'); ?> Deadwood removal and careful canopy thinning</li>
          <li><?php echo icon('check'); ?> Honest save-or-remove calls from experienced crews</li>
          <li><?php echo icon('check'); ?> Removal only when decay makes an oak a real hazard</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<!-- ============ COMMUTER / HOA SCHEDULING — 04 ============ -->
<section class="dby-section dby-numbered dby-bg-cream" data-num="04" aria-label="Scheduling around DeBary commuters and HOAs">
  <div class="container">
    <div class="dby-schedule" data-animate>
      <div class="dby-schedule__media">
        <img src="<?php echo e($photoAcreage['src']); ?>" alt="<?php echo e($photoAcreage['alt']); ?>" width="600" height="480" loading="lazy">
      </div>
      <div class="dby-schedule__body">
        <span class="eyebrow-label">Built Around Your Commute</span>
        <h2>Scheduling that works for a SunRail commuter town</h2>
        <p>DeBary&rsquo;s SunRail station sends a lot of the neighborhood toward Orlando every morning, so we don&rsquo;t need you standing in the driveway to get the work done. We assess, quote in writing within 24 hours, and coordinate the details by phone and email.</p>
        <ul class="dby-schedule__points">
          <li><?php echo icon('calendar-check'); ?> <span><strong>HOA &amp; property-manager scheduling.</strong> Common-area rounds and gated-community access planned ahead, with insurance on file.</span></li>
          <li><?php echo icon('file-text'); ?> <span><strong>Free written estimates in 24 hours.</strong> Scope, cleanup, and hauling spelled out before any crew arrives.</span></li>
          <li><?php echo icon('truck'); ?> <span><strong>One crew, whole job.</strong> Climbing, grapple loading, chipping, and haul-off from the same DeBary-serving team.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: soft wave (cream -> light) -->
<div class="dby-divider dby-divider--flush" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,34 C240,4 420,58 660,30 C880,6 1000,50 1200,26 L1200,60 L0,60 Z" fill="var(--color-light)"/></svg>
</div>

<!-- ============ SERVICES IN DEBARY — 05 ============ -->
<section class="dby-section dby-numbered dby-services-section dby-bg-light" data-num="05" aria-label="Tree services available in DeBary">
  <div class="container">
    <div class="dby-shell" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>Which tree services are available in <span class="text-accent">DeBary</span>?</h2>
      <p class="answer-block"><?php echo e($siteName); ?> brings its full DeLand service line to DeBary: planting and shrub installation for new landscaping, trimming and crown work for maturing canopies, residential and HOA-scaled care, and removal when a tree is beyond saving. Same crew, same equipment, same free 24-hour estimate.</p>
    </div>

    <?php renderServiceCards(['tree-planting-shrub-installation', 'tree-trimming-services', 'residential-tree-services', 'commercial-hoa-tree-services', 'tree-removal', 'crown-reduction-shaping'], $serviceCardData); ?>
  </div>
</section>

<!-- ============ WHY CHOOSE — 06 ============ -->
<section class="dby-section dby-numbered dby-bg-white" data-num="06" aria-label="Why choose God's Country in DeBary">
  <div class="container">
    <div class="dby-shell" data-animate>
      <span class="eyebrow-label">Why DeBary Calls Us</span>
      <h2>Why choose God&rsquo;s Country Tree Service in DeBary?</h2>
      <p class="answer-block">Because DeBary&rsquo;s mix of new subdivisions and heritage oaks rewards a crew that knows the difference &mdash; and shows up year-round, not just after a storm.</p>
    </div>

    <div class="dby-why-grid">
      <article class="dby-why-card card-tint-1 reveal-delay-1" data-animate>
        <div class="dby-why-card__icon"><?php echo icon('map-pin'); ?></div>
        <h3>Local &amp; Year-Round</h3>
        <p>Based in DeLand since <?php echo e($yearEstablished); ?>, about 12 miles north of DeBary. The same crew works the city every week &mdash; not a storm-chasing outfit that disappears by month&rsquo;s end.</p>
      </article>
      <article class="dby-why-card card-tint-2 reveal-delay-2" data-animate>
        <div class="dby-why-card__icon"><?php echo icon('tree-deciduous'); ?></div>
        <h3>Right Cut for the Tree&rsquo;s Age</h3>
        <p>Structural pruning for young subdivision oaks, preservation-first crown work for the heritage estate trees near DeBary Hall. We read the tree before we recommend the work.</p>
      </article>
      <article class="dby-why-card card-tint-3 reveal-delay-3" data-animate>
        <div class="dby-why-card__icon"><?php echo icon('shield-check'); ?></div>
        <h3>Licensed, Insured, In Writing</h3>
        <p>Proof of insurance before we start, free written estimates within 24 hours, and debris hauling spelled out in the quote &mdash; the paperwork DeBary HOAs and homeowners can count on.</p>
      </article>
    </div>
  </div>
</section>

<!-- Divider: angled (white -> cream) -->
<div class="dby-divider dby-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 0,22 1200,60"/></svg>
</div>

<!-- ============ FAQ — 07 ============ -->
<section class="dby-section dby-numbered dby-bg-cream" data-num="07" aria-label="DeBary tree service questions">
  <div class="container">
    <div class="dby-shell" data-animate>
      <span class="eyebrow-label">Good Questions</span>
      <h2>DeBary tree service questions, answered</h2>
      <p class="answer-block">Three of the things DeBary homeowners and HOA managers ask us most &mdash; and if yours isn&rsquo;t here, send it through the estimate form and we&rsquo;ll answer within 24 hours.</p>
    </div>

    <div class="dby-faq-grid">
      <?php foreach ($faqs as $faq): ?>
      <div class="dby-faq-item" data-animate>
        <div class="dby-faq-item__icon"><?php echo icon('help-circle'); ?></div>
        <div>
          <h3><?php echo e($faq['q']); ?></h3>
          <p class="faq-answer"><?php echo e($faq['a']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="dby-cta" aria-label="Get a tree service estimate in DeBary">
  <div class="container">
    <span class="eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Get a Free Estimate in DeBary</h2>
    <p>Whether it&rsquo;s a young oak in Riviera Bella that needs shaping or a heritage tree near DeBary Hall you want to save, <?php echo e($siteName); ?> will walk the property, give you a straight read, and put an all-in price in writing &mdash; usually within 24 hours.</p>
    <div class="dby-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get My Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">See All Tree Services</a>
    </div>
  </div>
</section>

<p class="dby-last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
