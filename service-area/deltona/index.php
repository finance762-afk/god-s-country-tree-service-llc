<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /service-area/deltona/index.php — Deltona, FL service area
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 3B — Premium service-area page (one-then-batch)
 * Signature: storm scorecard band + sandy-soil / sand-pine
 * failure bento. All CSS from tokens; every class dlt- prefixed
 * except shared semantic hooks (hero-answer/.answer-block/.faq-*).
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/service-cards.php';

$currentPage = 'service-area';

// ---- SEO (V2.1 trade noun + V2.2 CTR meta) -----------------
$pageTitle       = "Tree Service in Deltona, FL | God's Country Tree Service";
$pageDescription = "Tree service in Deltona, FL from a licensed & insured local crew — 24-hour storm response, controlled removals, debris hauled. Free estimates in 24 hours.";
$canonicalUrl    = $siteUrl . '/service-area/deltona/';

// ---- Images (content/image-manifest.md allocation) ----------
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$heroImage        = $imgBase . '1784062730640-gzvyp4-31206267_2042462085974393_6334697554642468864_n.webp'; // pines marked red X, chipper crew behind
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$storyPhoto = [
    'src' => $imgBase . '1784062731804-lsu1hl-35521317_2074717906082144_948088325212733440_n.webp',
    'alt' => 'Boom lift crew topping a tall pine over a home near Deltona, FL',
];
$proofPhoto = [
    'src' => $imgBase . '1784062753583-2wp304-76756943_2456228011264463_6144757071268020224_n.webp',
    'alt' => 'Grapple loader carrying a fresh-cut oak log section on a Deltona, FL removal',
];

// ---- Storm scorecard band (signature stats) -----------------
$dltScorecard = [
    ['num' => '90k+',  'label' => "Deltona residents — Volusia County's largest city", 'icon' => 'users'],
    ['num' => '2',     'label' => 'Direct hurricane hits since 2004 (Charley &amp; Irma)', 'icon' => 'wind'],
    ['num' => '24hr',  'label' => 'Storm-response window for downed and hanging trees', 'icon' => 'clock'],
    ['num' => '50mi',  'label' => 'Service radius from our DeLand home base', 'icon' => 'map-pin'],
];

// ---- Sandy-soil / sand-pine failure explainer bento ---------
$dltBento = [
    [
        'icon'  => 'trees',
        'title' => 'Tall sand &amp; slash pines',
        'text'  => "Deltona's lots were planted thick with fast-growing sand and slash pines. They shoot up 60–80 feet with a narrow, top-heavy crown — a shape that catches hurricane gusts like a sail while the trunk stays comparatively thin.",
    ],
    [
        'icon'  => 'layers',
        'title' => 'Sandy, well-drained soil',
        'text'  => "The well-drained sand that makes Deltona a dry, buildable ridge also gives roots little to grip. Saturate that sand with a tropical downpour and the whole root plate loosens — which is why so many Deltona pines uproot whole instead of snapping.",
    ],
    [
        'icon'  => 'home',
        'title' => 'Quarter-acre lots, close targets',
        'text'  => "The Mackle Brothers laid Deltona out as compact quarter-acre homesites, so a leaning 70-foot pine is usually taller than the distance to your roof, the neighbor's fence, or the pool screen. There is rarely room to let one fall whole.",
    ],
    [
        'icon'  => 'droplets',
        'title' => 'Laurel oaks past their prime',
        'text'  => "Many older Deltona Lakes yards lean on laurel oaks — a fast oak that hollows and drops heavy limbs by middle age. Over a City of Lakes waterfront lot, a failing laurel oak is the limb most likely to land somewhere expensive.",
    ],
];

// ---- FAQs (local, 40-80 word answers) -----------------------
$faqs = [
    [
        'q' => 'Do you offer tree service and storm cleanup in Deltona, FL?',
        'a' => "Yes. God's Country Tree Service LLC works throughout Deltona from our DeLand base, about ten miles northwest. We handle tree removal, trimming, crown reduction, dead and hazardous tree work, and 24-hour storm cleanup for homes and businesses across Deltona Lakes, Arbor Ridge, Saxon Woods, and the rest of the City of Lakes.",
    ],
    [
        'q' => 'How fast can you get to a fallen tree in Deltona after a storm?',
        'a' => "We prioritize Deltona calls where a tree is on a house, blocking a driveway, or hanging over a target, usually reaching them within 24 hours of a storm passing. Because Deltona sits inside our roughly 50-mile radius, the same crew and equipment that serve DeLand handle Deltona — no waiting on an out-of-town outfit to arrive.",
    ],
    [
        'q' => 'Why do so many Deltona pines come down in hurricanes?',
        'a' => "Deltona's sandy, well-drained lots grow tall sand and slash pines with top-heavy crowns and shallow root plates. When Charley (2004) and Irma (2017) saturated that sand and then hit with sustained wind, the pines uprooted or snapped high. Proactive crown reduction and removing the weakest trees before the season is the cheapest way to cut that risk.",
    ],
];

// ---- Schema: Breadcrumb + FAQ + Service + Speakable ---------
$areaServiceSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $canonicalUrl . '#service',
    'name'        => 'Tree Service in Deltona, FL',
    'serviceType' => 'Tree Service',
    'provider'    => ['@id' => $siteUrl . '/#organization'],
    'url'         => $canonicalUrl,
    'areaServed'  => [
        '@type'            => 'City',
        'name'             => 'Deltona',
        'containedInPlace' => [
            '@type' => 'AdministrativeArea',
            'name'  => 'Volusia County, Florida',
        ],
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
        ['name' => 'Deltona'],
    ])
    . generateFAQSchema($faqs)
    . '<script type="application/ld+json">' . json_encode($areaServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . '<script type="application/ld+json">' . json_encode($speakableSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Deltona service area — page-specific styles (dlt- namespace)
   Techniques: C1.4 layered hero (photo + gradient + noise),
   2 distinct SVG dividers, numbered section watermark, drop cap,
   storm scorecard stat band, sandy-soil failure bento, tinted
   card grid, image hover-zoom, radial-glow closing CTA.
   All values from design tokens — NO hardcoded colors/shadows.
   ============================================================ */

/* ---- C1.4 Layered hero: photo + gradient + noise ---- */
.dlt-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.dlt-hero::before {
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
.dlt-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.dlt-hero > .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.dlt-breadcrumb {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 74%, transparent);
  margin-bottom: var(--space-6);
}
.dlt-breadcrumb a {
  color: color-mix(in srgb, var(--color-white) 88%, transparent);
  transition: color var(--transition-fast);
}
.dlt-breadcrumb a:hover { color: var(--color-accent); }
.dlt-breadcrumb .dlt-sep { color: color-mix(in srgb, var(--color-white) 45%, transparent); }
.dlt-hero .dlt-eyebrow {
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
.dlt-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.1rem, 4.2vw, 3.55rem);
  line-height: 1.08;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 22ch;
  margin-bottom: var(--space-5);
}
.dlt-hero h1 .text-accent { color: var(--color-accent); }
.dlt-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 64ch;
  margin: 0 0 var(--space-8);
}
.dlt-hero .dlt-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.dlt-hero .hero-trust { justify-content: flex-start; }
.dlt-hero .hero-trust-item svg,
.dlt-hero .hero-trust-item i { width: 16px; height: 16px; color: var(--color-accent); }

/* ---- Shared section scaffolding ---- */
.dlt-section { padding: clamp(3.5rem, 8vw, 6rem) 0; }
.dlt-section--white { background: var(--color-white); }
.dlt-section--cream { background: var(--color-cream); }
.dlt-section--light { background: var(--color-light); }
.dlt-section--dark  { background: var(--color-dark); }

/* Numbered section watermark (C5.1) */
.dlt-numbered { position: relative; overflow: hidden; }
.dlt-numbered::before {
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
.dlt-numbered > .container { position: relative; z-index: 1; }
.dlt-section--dark.dlt-numbered::before {
  color: color-mix(in srgb, var(--color-white) 6%, transparent);
}

/* ---- Section title block ---- */
.dlt-title { text-align: center; margin-bottom: var(--space-12); }
.dlt-title .eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
}
.dlt-title h2 {
  margin: 0 auto var(--space-4);
  max-width: 30ch;
  text-wrap: balance;
}
.dlt-title .answer-block {
  max-width: 68ch;
  margin: 0 auto;
  font-size: var(--font-size-lg);
  color: var(--color-text);
}
.dlt-section--dark .dlt-title h2 { color: var(--color-white); }
.dlt-section--dark .dlt-title .answer-block { color: color-mix(in srgb, var(--color-white) 84%, transparent); }
.dlt-section--dark .dlt-title .eyebrow-label { color: var(--color-accent); }

/* ---- AEO answer intro with editorial drop cap (C5.4) ---- */
.dlt-lede {
  max-width: 760px;
  margin: 0 auto;
}
.dlt-lede .answer-block {
  font-size: var(--font-size-lg);
  color: var(--color-text);
  text-wrap: pretty;
}
.dlt-drop::first-letter {
  float: left;
  font-family: var(--font-accent);
  font-size: 4.2rem;
  font-weight: 800;
  line-height: 0.82;
  padding: var(--space-1) var(--space-3) 0 0;
  color: var(--color-primary);
}

/* ---- Local story: asymmetric split + hover-zoom image ---- */
.dlt-story-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: var(--space-12);
  align-items: center;
}
.dlt-story-copy p {
  color: var(--color-text);
  margin-bottom: var(--space-4);
  max-width: 60ch;
}
.dlt-story-copy p:last-child { margin-bottom: 0; }
.dlt-story-copy strong { color: var(--color-primary); }
.dlt-figure {
  margin: 0;
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.dlt-figure img {
  width: 100%;
  height: 100%;
  aspect-ratio: 3 / 4;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.dlt-figure:hover img { transform: scale(1.05); }
.dlt-figure figcaption {
  position: absolute;
  inset: auto 0 0 0;
  padding: var(--space-8) var(--space-5) var(--space-4);
  background: linear-gradient(to top, color-mix(in srgb, var(--color-dark) 84%, transparent), transparent);
  color: var(--color-white);
  font-size: var(--font-size-sm);
}

/* ---- Storm scorecard stat band (signature) ---- */
.dlt-scorecard {
  position: relative;
  overflow: hidden;
}
.dlt-scorecard::before {
  content: '';
  position: absolute;
  top: -35%;
  left: -8%;
  width: 55%;
  height: 130%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 34%, transparent) 0%, transparent 66%);
  pointer-events: none;
}
.dlt-scorecard .container { position: relative; z-index: 1; }
.dlt-scorecard-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-5);
}
.dlt-score {
  position: relative;
  text-align: center;
  padding: var(--space-8) var(--space-5);
  border-radius: var(--radius-lg);
  background: color-mix(in srgb, var(--color-white) 6%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-white) 10%, transparent);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.dlt-score:hover {
  transform: translateY(-5px);
  border-color: color-mix(in srgb, var(--color-accent) 55%, transparent);
}
.dlt-score-icon {
  width: 44px;
  height: 44px;
  margin: 0 auto var(--space-4);
  border-radius: var(--radius-full);
  background: color-mix(in srgb, var(--color-accent) 16%, transparent);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.dlt-score-icon svg, .dlt-score-icon i { width: 22px; height: 22px; }
.dlt-score .dlt-score-num {
  font-family: var(--font-accent);
  font-size: clamp(2.4rem, 5vw, 3.4rem);
  font-weight: 800;
  line-height: 1;
  color: var(--color-white);
  margin-bottom: var(--space-2);
}
.dlt-score .dlt-score-label {
  font-size: var(--font-size-sm);
  color: color-mix(in srgb, var(--color-white) 80%, transparent);
  margin: 0;
}

/* ---- Sandy-soil / sand-pine failure bento (signature) ---- */
.dlt-bento {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 1fr;
  gap: var(--space-5);
}
.dlt-bento-card {
  position: relative;
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid color-mix(in srgb, var(--color-primary) 10%, transparent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dlt-bento-card:nth-child(3n+1) { background: var(--color-card-tint-1); }
.dlt-bento-card:nth-child(3n+2) { background: var(--color-card-tint-2); }
.dlt-bento-card:nth-child(3n)   { background: var(--color-card-tint-3); }
/* First card spans two columns for a broken-grid rhythm */
.dlt-bento-card:first-child { grid-column: span 2; }
.dlt-bento-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.dlt-bento-icon {
  width: 50px;
  height: 50px;
  border-radius: var(--radius-md);
  background: var(--color-white);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.dlt-bento-icon svg, .dlt-bento-icon i { width: 24px; height: 24px; }
.dlt-bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.dlt-bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
  max-width: 60ch;
}

/* ---- Services intro answer block ---- */
.dlt-services-intro { margin-bottom: var(--space-10); }

/* ---- Why-choose tinted cards ---- */
.dlt-why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.dlt-why-card {
  position: relative;
  padding: var(--space-8);
  border-radius: var(--radius-lg);
  border-top: 3px solid var(--color-primary);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.dlt-why-card:nth-child(1) { background: var(--color-card-tint-1); }
.dlt-why-card:nth-child(2) { background: var(--color-card-tint-2); border-top-color: var(--color-accent); }
.dlt-why-card:nth-child(3) { background: var(--color-card-tint-3); }
.dlt-why-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.dlt-why-icon {
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
.dlt-why-icon svg, .dlt-why-icon i { width: 24px; height: 24px; }
.dlt-why-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.dlt-why-card p {
  color: var(--color-text);
  font-size: var(--font-size-base);
  margin: 0;
}

/* ---- FAQ (uses shared .faq-* hooks; scoped tweaks) ---- */
.dlt-faq .faq-grid { margin-top: var(--space-4); }
.dlt-faq .faq-item h3 { text-wrap: balance; }

/* ---- Radial-glow closing CTA (C9.2) ---- */
.dlt-cta {
  position: relative;
  background: var(--color-dark);
  padding: clamp(4rem, 10vh, 7rem) 0;
  text-align: center;
  overflow: hidden;
}
.dlt-cta::before {
  content: '';
  position: absolute;
  top: -40%;
  left: 50%;
  transform: translateX(-50%);
  width: 92%;
  height: 160%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 46%, transparent) 0%, transparent 65%);
  pointer-events: none;
}
.dlt-cta .container { position: relative; z-index: 1; }
.dlt-cta .eyebrow-label {
  display: inline-block;
  font-family: var(--font-accent);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.dlt-cta h2 {
  color: var(--color-white);
  max-width: 24ch;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.dlt-cta p {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 60ch;
  margin: 0 auto var(--space-8);
}
.dlt-cta .dlt-actions {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ---- Last updated stamp ---- */
.dlt-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-6) 0;
  background: var(--color-light);
  margin: 0;
}

/* ---- SVG dividers (2 distinct: diagonal slope + torn edge) ---- */
.dlt-divider {
  display: block;
  overflow: hidden;
  line-height: 0;
  height: clamp(32px, 5vw, 60px);
  position: relative;
  z-index: 2;
  margin-bottom: -1px;
}
.dlt-divider svg { display: block; width: 100%; height: 100%; }

/* ---- Reveal stagger delays (global reveal system) ---- */
html.js-anim [data-animate].reveal-delay-1 { transition-delay: 0.08s; }
html.js-anim [data-animate].reveal-delay-2 { transition-delay: 0.16s; }
html.js-anim [data-animate].reveal-delay-3 { transition-delay: 0.24s; }
html.js-anim [data-animate].reveal-delay-4 { transition-delay: 0.32s; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .dlt-scorecard-grid { grid-template-columns: repeat(2, 1fr); }
  .dlt-bento { grid-template-columns: repeat(2, 1fr); }
  .dlt-bento-card:first-child { grid-column: span 2; }
  .dlt-story-grid { grid-template-columns: 1fr; gap: var(--space-10); }
  .dlt-figure { max-width: 480px; margin: 0 auto; }
  .dlt-why-grid { grid-template-columns: 1fr; max-width: 560px; margin: 0 auto; }
}
@media (max-width: 768px) {
  .dlt-hero { min-height: auto; }
  .dlt-hero h1 { font-size: clamp(1.85rem, 7vw, 2.5rem); }
  .dlt-numbered::before { font-size: clamp(3.5rem, 16vw, 6rem); }
  .dlt-bento-card:first-child { grid-column: span 2; }
}
@media (max-width: 600px) {
  .dlt-scorecard-grid { grid-template-columns: 1fr; }
  .dlt-bento { grid-template-columns: 1fr; }
  .dlt-bento-card:first-child { grid-column: auto; }
  .dlt-hero .dlt-actions { flex-direction: column; align-items: stretch; }
  .dlt-cta .dlt-actions { flex-direction: column; align-items: stretch; }
  .dlt-drop::first-letter { font-size: 3.4rem; }
}
</style>

<!-- ============ HERO (C1.4 layered) ============ -->
<section class="dlt-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Tree service in Deltona, Florida">
  <div class="container">
    <nav class="dlt-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="dlt-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="dlt-sep" aria-hidden="true">/</span>
      <span aria-current="page">Deltona</span>
    </nav>

    <span class="dlt-eyebrow"><?php echo icon('map-pin'); ?> Deltona &middot; Volusia County, FL</span>

    <h1>Tree Service in Deltona, FL &mdash; <span class="text-accent">Storm-Ready Crews for the City of Lakes</span></h1>

    <p class="hero-answer"><?php echo e($siteName); ?> is a licensed and insured tree service based in DeLand, Florida, serving Deltona and the rest of Volusia County within about 50 miles since <?php echo e($yearEstablished); ?>. Controlled removals, crown reduction, and 24-hour storm cleanup &mdash; with free written estimates inside 24 hours and debris hauled away.</p>

    <div class="dlt-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">See Services</a>
    </div>

    <div class="hero-trust">
      <span class="hero-trust-item"><?php echo icon('shield-check'); ?> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><?php echo icon('award'); ?> <?php echo e($yearsInBusiness); ?>+ Years in Volusia County</span>
      <span class="hero-trust-item"><?php echo icon('zap'); ?> 24-Hour Storm Response</span>
      <span class="hero-trust-item"><?php echo icon('clock'); ?> Estimates Within 24 Hours</span>
    </div>
  </div>
</section>

<!-- ============ AEO ANSWER — 01 ============ -->
<section class="dlt-section dlt-section--white dlt-numbered dlt-faq" data-num="01" aria-label="Tree service and storm cleanup in Deltona">
  <div class="container">
    <div class="dlt-title" data-animate>
      <span class="eyebrow-label">Serving Deltona</span>
      <h2>Do you offer tree service and storm cleanup in Deltona, FL?</h2>
    </div>
    <div class="dlt-lede">
      <p class="answer-block dlt-drop" data-animate><?php echo e($siteName); ?> provides full tree service in Deltona, FL &mdash; removal, trimming, crown reduction, dead and hazardous tree work, and 24-hour storm cleanup. We run out of DeLand, roughly ten miles northwest, so the crew that cares for Volusia County's oaks is the same one that clears your Deltona lot after a hurricane, usually with a free written estimate inside 24 hours.</p>
    </div>
  </div>
</section>

<!-- Divider: diagonal slope (white → cream) -->
<div class="dlt-divider" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,8 1200,60"/></svg>
</div>

<!-- ============ LOCAL STORY — 02 ============ -->
<section class="dlt-section dlt-section--cream dlt-numbered" data-num="02" aria-label="About tree work in Deltona">
  <div class="container">
    <div class="dlt-title" data-animate>
      <span class="eyebrow-label">The City of Lakes</span>
      <h2>Deltona trees, Deltona conditions &mdash; not a template</h2>
    </div>

    <div class="dlt-story-grid">
      <div class="dlt-story-copy" data-animate="left">
        <p><strong>Deltona is the largest city in Volusia County</strong>, home to more than 90,000 residents on ground the Mackle Brothers' General Development Corporation began carving out of the pine flatwoods in 1962. What sold as a quiet, affordable "City of Lakes" &mdash; dozens of named lakes, a southern edge fronting Lake Monroe and the St. Johns River &mdash; also planted tens of thousands of fast-growing pines on compact quarter-acre lots. Six decades later, those trees are big, and many stand close to houses that were built right up beside them.</p>
        <p>Established neighborhoods like Deltona Lakes, Arbor Ridge, and Saxon Woods share the same story: sandy, well-drained soil, tall sand and slash pines, and aging laurel and live oaks. It is a beautiful canopy and a demanding one. When you go looking for <strong>tree service near me in Deltona</strong>, you want a crew that already knows how these particular trees behave &mdash; not one learning your soil on the clock.</p>
        <p>We have worked this ground since <?php echo e($yearEstablished); ?>. Deltona straddles the Interstate 4 corridor between DeLand and Orlando, so we are on scene fast, and we have cleaned up after the storms that define tree work here &mdash; Hurricane Charley in 2004 and Hurricane Irma in 2017 both left Deltona with pines snapped high and root plates torn out of the sand.</p>
      </div>

      <figure class="dlt-figure" data-animate="right">
        <img src="<?php echo e($storyPhoto['src']); ?>" alt="<?php echo e($storyPhoto['alt']); ?>" width="600" height="800" loading="lazy">
        <figcaption>Roped, sectioned takedown of a tall pine over a home &mdash; the everyday job in Deltona's tight lots.</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- Divider: torn edge (cream → dark) -->
<div class="dlt-divider" aria-hidden="true" style="background: var(--color-cream);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,40 L70,44 L140,34 L220,45 L300,31 L390,47 L470,37 L570,45 L670,29 L770,42 L870,34 L960,45 L1060,32 L1150,42 L1200,37 L1200,60 Z" fill="var(--color-dark)"/></svg>
</div>

<!-- ============ STORM SCORECARD (signature stat band) — 03 ============ -->
<section class="dlt-section dlt-section--dark dlt-numbered dlt-scorecard" data-num="03" aria-label="Deltona storm scorecard">
  <div class="container">
    <div class="dlt-title" data-animate>
      <span class="eyebrow-label">Storm Scorecard</span>
      <h2>What Deltona's storm history means for your trees</h2>
      <p class="answer-block">Deltona sits squarely in Central Florida's hurricane path, and its sandy ridge grows exactly the kind of tall, top-heavy pine that fails in high wind. The numbers below are why proactive removal and crown reduction pay off before the season, not after.</p>
    </div>

    <div class="dlt-scorecard-grid">
      <?php foreach ($dltScorecard as $i => $s): ?>
      <div class="dlt-score reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>" data-animate>
        <div class="dlt-score-icon"><?php echo icon(($s['icon'])); ?></div>
        <div class="dlt-score-num"><?php echo $s['num']; ?></div>
        <p class="dlt-score-label"><?php echo $s['label']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ SANDY-SOIL FAILURE BENTO (signature) — 04 ============ -->
<section class="dlt-section dlt-section--white dlt-numbered" data-num="04" aria-label="Why Deltona trees fail in storms">
  <div class="container">
    <div class="dlt-title" data-animate>
      <span class="eyebrow-label">Sand, Pines &amp; Wind</span>
      <h2>Why do Deltona's trees fail when the hurricanes come?</h2>
      <p class="answer-block">Deltona's trees fail for reasons written into the land itself: tall pines with narrow crowns, sandy soil that lets go under water, quarter-acre lots that put targets close, and oaks that hollow with age. Understanding those four forces is how we decide what to remove, reduce, or leave standing.</p>
    </div>

    <div class="dlt-bento">
      <?php foreach ($dltBento as $i => $b): ?>
      <article class="dlt-bento-card reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <div class="dlt-bento-icon"><?php echo icon(($b['icon'])); ?></div>
        <h3><?php echo $b['title']; ?></h3>
        <p><?php echo $b['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider: diagonal slope (white → light) -->
<div class="dlt-divider" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-light)" points="0,60 0,20 1200,60"/></svg>
</div>

<!-- ============ SERVICES IN DELTONA — 05 ============ -->
<section class="dlt-section dlt-section--light dlt-numbered" data-num="05" aria-label="Tree services available in Deltona">
  <div class="container">
    <div class="dlt-title dlt-services-intro" data-animate>
      <span class="eyebrow-label">What We Do in Deltona</span>
      <h2>Tree services available in Deltona, FL</h2>
      <p class="answer-block"><?php echo e($siteName); ?> brings its full service list to Deltona: controlled tree removal, emergency storm response, fallen-tree cleanup, dead and hazardous tree work, trimming, and crown reduction. One licensed crew handles the climb, the rigging, the grapple loading, and the haul-off &mdash; no second contractor to chase.</p>
    </div>

    <?php renderServiceCards(['tree-removal', 'emergency-tree-service-storm-cleanup', 'fallen-tree-removal-cleanup', 'dead-hazardous-tree-removal', 'tree-trimming-services', 'crown-reduction-shaping'], $serviceCardData); ?>
  </div>
</section>

<!-- Divider: torn edge (light → white) -->
<div class="dlt-divider" aria-hidden="true" style="background: var(--color-light);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><path d="M0,60 L0,38 L80,43 L160,32 L250,44 L340,30 L430,45 L520,35 L620,44 L720,30 L820,42 L920,33 L1020,44 L1120,32 L1200,40 L1200,60 Z" fill="var(--color-white)"/></svg>
</div>

<!-- ============ WHY CHOOSE — 06 ============ -->
<section class="dlt-section dlt-section--white dlt-numbered" data-num="06" aria-label="Why choose God's Country in Deltona">
  <div class="container">
    <div class="dlt-title" data-animate>
      <span class="eyebrow-label">Why God's Country</span>
      <h2>Why Deltona homeowners call God's Country Tree Service</h2>
      <p class="answer-block">Because a local, licensed crew that knows Deltona's sand-pine lots is worth more than a truck that appears only after a hurricane. Here is what sets us apart on the City of Lakes.</p>
    </div>

    <div class="dlt-why-grid">
      <article class="dlt-why-card reveal-up reveal-delay-1" data-animate>
        <div class="dlt-why-icon"><?php echo icon('map-pin'); ?></div>
        <h3>Ten minutes up the road</h3>
        <p>Our DeLand base sits about ten miles from Deltona, right off the Interstate 4 corridor. That means fast estimates, faster storm response, and a crew that is here in February &mdash; not just the week after landfall.</p>
      </article>
      <article class="dlt-why-card reveal-up reveal-delay-2" data-animate>
        <div class="dlt-why-icon"><?php echo icon('trees'); ?></div>
        <h3>We know the sand-pine problem</h3>
        <p>Top-heavy pines and hollowing laurel oaks on sandy Deltona lots behave differently than trees on clay. We read the lean, the root plate, and the target, and we tell you honestly what to remove, reduce, or leave standing.</p>
      </article>
      <article class="dlt-why-card reveal-up reveal-delay-3" data-animate>
        <div class="dlt-why-icon"><?php echo icon('clipboard-check'); ?></div>
        <h3>Licensed, insured, accountable</h3>
        <p>We carry insurance and can show proof before a saw starts &mdash; the paperwork storm-chasers can't produce. Every Deltona quote is written, itemized, and includes the debris hauling in most cases, so the price you approve is the price you pay.</p>
      </article>
    </div>
  </div>
</section>

<!-- Divider: diagonal slope (white → cream) -->
<div class="dlt-divider" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,12 1200,60"/></svg>
</div>

<!-- ============ FAQ — 07 ============ -->
<section class="dlt-section dlt-section--cream dlt-numbered dlt-faq" data-num="07" aria-label="Deltona tree service questions">
  <div class="container">
    <div class="dlt-title" data-animate>
      <span class="eyebrow-label">Deltona Questions</span>
      <h2>Common questions from Deltona homeowners</h2>
      <p class="answer-block">Straight answers about serving Deltona, storm timing, and why the local pines come down. If yours isn't here, ask on the estimate form and we'll answer within 24 hours.</p>
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

<!-- ============ CLOSING CTA (radial glow) ============ -->
<section class="dlt-cta" aria-label="Get a free tree service estimate in Deltona">
  <div class="container">
    <span class="eyebrow-label">Free &middot; Written &middot; Within 24 Hours</span>
    <h2>Get a Free Estimate in Deltona</h2>
    <p>Tell us about the leaning pine off the lake, the dead laurel oak over the driveway, or the whole overgrown Deltona lot. <?php echo e($siteName); ?> will walk the property, give you an honest read, and put a straight, all-in price in writing &mdash; usually within 24 hours.</p>
    <div class="dlt-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">See All Services</a>
    </div>
  </div>
</section>

<p class="dlt-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
