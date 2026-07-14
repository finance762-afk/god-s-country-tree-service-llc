<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /faq/index.php — Frequently Asked Questions
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — categorized FAQ + FAQPage schema + CTA
 * ============================================================
 */

$currentPage = 'faq';

// V2.2 CTR meta
$pageTitle       = "Tree Service FAQ | God's Country Tree Service, DeLand FL";
$pageDescription = "Answers on tree removal cost, permits, storm response & more from God's Country Tree Service — licensed & insured DeLand, FL tree service. Free estimates in 24 hours.";
$canonicalUrl    = $siteUrl . '/faq/';

// ---- Images ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
$heroImage        = $imgBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp'; // shaped oak against sky
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

// ---- FAQ categories ----
$faqCategories = [
    'general' => [
        'label' => 'General',
        'icon'  => 'info',
        'faqs'  => [
            ['q' => 'Where is God\'s Country Tree Service located and what areas do you serve?', 'a' => "God's Country Tree Service is based in DeLand, Florida (32720) and works within roughly 50 miles across Volusia County — including Deltona, Orange City, DeBary, Lake Helen, and the surrounding communities. We serve homeowners, businesses, and HOA communities throughout the area."],
            ['q' => 'Are you licensed and insured?', 'a' => "Yes. God's Country Tree Service is licensed and carries full liability and workers' compensation insurance, and we'll provide proof on request before any work begins. That documentation is exactly what fly-by-night storm-chasers can't show you."],
            ['q' => 'How long have you been in business?', 'a' => "We've been serving DeLand and Volusia County since " . $yearEstablished . " — that's " . $yearsInBusiness . "+ years of climbing, cutting, and cleaning up Central Florida's oaks, pines, and palms, through every hurricane season in between."],
            ['q' => 'Do you offer 24/7 emergency tree service?', 'a' => "Yes. God's Country Tree Service provides around-the-clock emergency response for storm damage, fallen trees, and urgent hazards throughout the DeLand area. Call us immediately after severe weather and we'll assess hazards and schedule removal as soon as it's safe to work."],
            ['q' => 'What makes you different from the crews that show up after a hurricane?', 'a' => "We live and work here year-round. Our branded trucks and skid steers are on DeLand streets every season, not just the week after a storm — so we're accountable for our work, reachable when you need us, and licensed and insured with paperwork you can verify."],
        ],
    ],
    'services' => [
        'label' => 'Services',
        'icon'  => 'trees',
        'faqs'  => [
            ['q' => 'What tree services do you provide?', 'a' => "God's Country Tree Service offers twelve specialized services: tree removal, tree trimming, tree pruning, crown reduction and shaping, dead and hazardous tree removal, emergency and storm cleanup, fallen tree removal, tree planting and shrub installation, residential tree services, commercial and HOA tree services, tree maintenance and care, and certified arborist services — plus bobcat and land work."],
            ['q' => 'What types of trees do you work on?', 'a' => "We specialize in Florida native species — live oaks, slash pines, and palms — as well as common ornamental and shade trees. Our certified arborist expertise helps us assess each tree's health and recommend the right care, whether that's pruning, crown reduction, removal, or a maintenance plan."],
            ['q' => 'Can you remove a tree that\'s right next to my house or pool enclosure?', 'a' => "Yes — tight-quarters removals are most of what we do in DeLand. Big trees rarely have room to fall whole, so climbers and a boom lift take the canopy apart in roped, controlled sections that are lowered rather than dropped. A compact grapple loader then clears the yard where a crane won't fit."],
            ['q' => 'Do you handle both residential and commercial properties?', 'a' => "We do. God's Country Tree Service works with homeowners, businesses, office parks, and HOA communities across Volusia County — from a single backyard oak to scheduled maintenance for an entire community's tree canopy."],
            ['q' => 'Do you offer stump grinding and debris removal?', 'a' => "Yes, and most of our quotes include both. Our grapple loader and chipper turn a canopy into a clean pile fast, logs and brush leave on our trucks, and stump grinding is folded into the estimate so the price you approve is the price you pay."],
        ],
    ],
    'pricing' => [
        'label' => 'Pricing & Estimates',
        'icon'  => 'badge-dollar-sign',
        'faqs'  => [
            ['q' => 'How much does tree removal cost in DeLand, FL?', 'a' => "Tree removal cost depends on the tree's size, condition, and what's underneath it — small trees run a few hundred dollars while large oaks over structures cost considerably more. We don't price by phone guesswork: you get a free written estimate within 24 hours, with debris hauling and stump grinding spelled out line by line."],
            ['q' => 'Are your estimates really free?', 'a' => "Yes — every estimate is free and carries no obligation. We walk your property, look at every tree in question, and put an honest, all-in price in writing, usually within 24 hours. If pruning can save a tree instead of removing it, we'll tell you that too."],
            ['q' => 'Will my homeowner\'s insurance pay for tree work?', 'a' => "If a tree fell on a covered structure, your policy usually helps; a standing tree removed as prevention typically isn't covered. We can't promise what your carrier will do, but we provide the written estimates, photos, and documentation adjusters ask for — DeLand homeowners have used our paperwork in claims for years."],
            ['q' => 'What forms of payment do you accept?', 'a' => "Payment terms are spelled out in your written estimate before any work starts, so there are no surprises. Reach out through our contact form or during your free estimate and we'll go over the options that fit your project."],
        ],
    ],
    'process' => [
        'label' => 'Process & Safety',
        'icon'  => 'clipboard-check',
        'faqs'  => [
            ['q' => 'What does your process look like from start to finish?', 'a' => "It's four steps: we walk your property and give an honest read, deliver a free written estimate within 24 hours, do the work with a licensed and insured crew that protects your roof, fences, and landscaping, then haul the debris, grind the stump when quoted, and walk the yard with you before we call it done."],
            ['q' => 'Do I need a permit to remove a tree in DeLand?', 'a' => "Possibly. DeLand and Volusia County protect certain trees, and larger hardwoods can require a permit before removal depending on the tree's species, size, and location on the lot. We flag permit questions during your free estimate so you know what applies before any cutting starts."],
            ['q' => 'How long does a typical tree job take?', 'a' => "Most single-tree removals in DeLand are done in half a day including cleanup. A large live oak over a house, or multiple trees, can run a full day or two. Your written estimate includes a time window, and the crew stays until the debris is gone — not just until the tree is on the ground."],
            ['q' => 'How do you protect my property during the work?', 'a' => "Big DeLand trees rarely have room to fall whole, so we plan drop zones, set rigging lines, and stage plywood or mats where the loader travels to protect your lawn and irrigation. Every heavy section is roped and lowered, which is how removals over roofs and screen enclosures stay uneventful."],
        ],
    ],
];

// ---- Flatten for FAQPage schema ----
$allFaqs = [];
foreach ($faqCategories as $cat) {
    foreach ($cat['faqs'] as $faq) {
        $allFaqs[] = $faq;
    }
}

$pageSchema = generateFAQSchema($allFaqs)
    . generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'FAQ'],
    ]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   FAQ — page-specific styles
   Techniques: C1.4 layered hero, sticky category pill nav,
   native <details> accordion w/ animated marker, category
   headers, C3 diagonal divider, C9.2 glow CTA, C5.1 watermarks.
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---- C1.4 Layered hero ---- */
.faq-hero {
  position: relative;
  min-height: 44vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.faq-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: linear-gradient(
    160deg,
    color-mix(in srgb, var(--color-dark) 90%, transparent) 0%,
    color-mix(in srgb, var(--color-primary-dark) 74%, transparent) 60%,
    color-mix(in srgb, var(--color-primary) 52%, transparent) 100%
  );
}
.faq-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.faq-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.faq-hero .hero-eyebrow {
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
.faq-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.4vw, 3.4rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 20ch;
  margin-bottom: var(--space-5);
}
.faq-hero h1 .text-accent { color: var(--color-accent); }
.faq-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 60ch;
  margin: 0;
}

/* ---- Category pill nav ---- */
.faq-nav {
  position: sticky;
  top: var(--nav-height);
  z-index: 40;
  background: color-mix(in srgb, var(--color-white) 88%, transparent);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-bottom: 1px solid var(--color-gray-light);
  padding: var(--space-4) 0;
}
.faq-nav ul {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin: 0;
  padding: 0;
}
.faq-nav a {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-5);
  border-radius: var(--radius-full);
  border: 1px solid var(--color-gray-light);
  background: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-text);
  transition: all var(--transition-base);
}
.faq-nav a:hover { border-color: var(--color-primary); color: var(--color-primary); transform: translateY(-2px); box-shadow: var(--shadow-sm); }
.faq-nav a svg, .faq-nav a i { width: 15px; height: 15px; color: var(--color-accent); }

/* ---- FAQ body ---- */
.faq-body { background: var(--color-white); }
.faq-category { margin-bottom: var(--space-16); scroll-margin-top: calc(var(--nav-height) + 80px); }
.faq-category:last-child { margin-bottom: 0; }
.faq-cat-head {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
  padding-bottom: var(--space-4);
  border-bottom: 2px solid var(--color-gray-light);
}
.faq-cat-head .cat-ico {
  width: 52px; height: 52px; flex-shrink: 0;
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  color: var(--color-primary);
  display: flex; align-items: center; justify-content: center;
}
.faq-cat-head .cat-ico svg, .faq-cat-head .cat-ico i { width: 26px; height: 26px; }
.faq-cat-head h2 { margin: 0; font-size: var(--font-size-2xl); }
.faq-cat-head .cat-count { font-size: var(--font-size-sm); color: var(--color-gray); font-weight: 600; }

/* Accordion via native <details> */
.faq-accordion { display: flex; flex-direction: column; gap: var(--space-4); max-width: 900px; }
.faq-q {
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-lg);
  background: var(--color-light);
  overflow: hidden;
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
.faq-q[open] { border-color: color-mix(in srgb, var(--color-primary) 40%, transparent); box-shadow: var(--shadow-sm); background: var(--color-white); }
.faq-q summary {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  padding: var(--space-5) var(--space-6);
  cursor: pointer;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-lg);
  color: var(--color-dark);
  list-style: none;
  text-wrap: balance;
}
.faq-q summary::-webkit-details-marker { display: none; }
.faq-q summary:focus-visible { outline: 3px solid var(--color-secondary); outline-offset: 2px; }
.faq-q summary .marker {
  flex-shrink: 0;
  width: 28px; height: 28px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  display: flex; align-items: center; justify-content: center;
  transition: transform var(--transition-base), background var(--transition-base);
}
.faq-q summary .marker svg, .faq-q summary .marker i { width: 16px; height: 16px; }
.faq-q[open] summary .marker { transform: rotate(45deg); background: var(--color-accent); color: var(--color-dark); }
.faq-a { padding: 0 var(--space-6) var(--space-6); }
.faq-a p { color: var(--color-text); line-height: 1.75; margin: 0; max-width: 68ch; }

/* ---- C9.2 Closing CTA ---- */
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
.closing-cta h2 { color: var(--color-white); max-width: 24ch; margin: 0 auto var(--space-4); text-wrap: balance; }
.closing-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 58ch; margin: 0 auto var(--space-8); }
.closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- SVG divider ---- */
.svg-divider { display: block; overflow: hidden; line-height: 0; height: clamp(32px, 5vw, 64px); position: relative; z-index: 2; }
.svg-divider svg { display: block; width: 100%; height: 100%; }
.svg-divider--flush { margin-bottom: -1px; }

/* ---- Responsive ---- */
@media (max-width: 768px) {
  .faq-hero { min-height: auto; }
  .faq-hero h1 { font-size: clamp(1.9rem, 7vw, 2.5rem); }
  .faq-nav { position: static; }
  .faq-nav ul { justify-content: flex-start; overflow-x: auto; flex-wrap: nowrap; padding-bottom: var(--space-1); }
  .faq-nav a { white-space: nowrap; }
  .faq-q summary { font-size: var(--font-size-base); padding: var(--space-4) var(--space-5); }
}
</style>

<!-- ============ HERO ============ -->
<section class="faq-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Frequently asked questions">
  <div class="container">
    <span class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
      FAQ &middot; DeLand, FL
    </span>
    <h1>Tree Service Questions, <span class="text-accent">Answered Straight</span></h1>
    <p class="hero-answer">The questions DeLand homeowners actually ask <?php echo e($siteName); ?> about cost, permits, storm response, and how the work gets done &mdash; with honest answers from a licensed, local crew.</p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">FAQ</li>
    </ol>
  </div>
</nav>

<!-- Category pill nav -->
<nav class="faq-nav" aria-label="FAQ categories">
  <div class="container">
    <ul>
      <?php foreach ($faqCategories as $key => $cat): ?>
      <li><a href="#faq-<?php echo e($key); ?>"><i data-lucide="<?php echo e($cat['icon']); ?>"></i> <?php echo e($cat['label']); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>

<!-- ============ FAQ BODY ============ -->
<section class="faq-body" aria-label="Frequently asked questions by category">
  <div class="container">
    <?php foreach ($faqCategories as $key => $cat): ?>
    <div class="faq-category" id="faq-<?php echo e($key); ?>">
      <div class="faq-cat-head" data-animate>
        <span class="cat-ico"><i data-lucide="<?php echo e($cat['icon']); ?>"></i></span>
        <div>
          <h2><?php echo e($cat['label']); ?></h2>
          <span class="cat-count"><?php echo count($cat['faqs']); ?> common questions</span>
        </div>
      </div>

      <div class="faq-accordion">
        <?php foreach ($cat['faqs'] as $i => $faq): ?>
        <details class="faq-q"<?php echo ($key === 'general' && $i === 0) ? ' open' : ''; ?> data-animate>
          <summary>
            <span><?php echo e($faq['q']); ?></span>
            <span class="marker" aria-hidden="true"><i data-lucide="plus"></i></span>
          </summary>
          <div class="faq-a">
            <p class="faq-answer"><?php echo e($faq['a']); ?></p>
          </div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Divider -->
<div class="svg-divider svg-divider--flush" aria-hidden="true" style="background: var(--color-white);">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-dark)" points="0,60 1200,10 1200,60"/></svg>
</div>

<!-- ============ CLOSING CTA ============ -->
<section class="closing-cta" aria-label="Ask your own question">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Didn't See Yours?</span>
    <h2>Ask Us Anything About Your Trees</h2>
    <p>Put your question in the estimate form and <?php echo e($siteName); ?> will answer it within 24 hours &mdash; no obligation, no pressure, just a straight answer from the DeLand crew.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Ask &amp; Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
