<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * 404.php — Not Found (root-level, referenced by ErrorDocument)
 * God's Country Tree Service LLC — DeLand, FL
 * ============================================================
 */

$currentPage = '404';
$noindex     = true;

$pageTitle       = "Page Not Found (404) | God's Country Tree Service";
$pageDescription = "That page couldn't be found. God's Country Tree Service in DeLand, FL — licensed & insured, 12+ years local experience, 24/7 storm cleanup. Call for a free estimate.";
$canonicalUrl    = $siteUrl . '/404';

// ---- Popular destinations ----
$popularLinks = [
    ['icon' => 'home',        'label' => 'Home',                'url' => '/',                                          'desc' => 'Back to the start'],
    ['icon' => 'trees',       'label' => 'All Tree Services',   'url' => '/services/',                                 'desc' => 'Browse our 12 services'],
    ['icon' => 'axe',         'label' => 'Tree Removal',        'url' => '/services/tree-removal/',                    'desc' => 'Safe, controlled takedowns'],
    ['icon' => 'zap',         'label' => 'Emergency & Storm',   'url' => '/services/emergency-tree-service-storm-cleanup/', 'desc' => '24/7 storm cleanup'],
    ['icon' => 'info',        'label' => 'About Us',            'url' => '/about/',                                    'desc' => 'The DeLand crew behind the work'],
    ['icon' => 'phone-call',  'label' => 'Contact',             'url' => '/contact/',                                  'desc' => 'Get a free estimate'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   404 — page-specific styles
   Techniques: layered glow hero, oversized watermark digits,
   popular-links bento grid, C9.2 glow accent. Tokens only.
   ============================================================ */
.error-hero {
  position: relative;
  background: var(--color-dark);
  overflow: hidden;
  padding-top: calc(var(--nav-height) + var(--space-16));
  padding-bottom: var(--space-16);
  text-align: center;
}
.error-hero::before {
  content: '';
  position: absolute;
  top: -30%;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  height: 150%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 42%, transparent) 0%, transparent 62%);
  pointer-events: none;
}
.error-hero .container { position: relative; z-index: 1; }
.error-code {
  font-family: var(--font-heading);
  font-size: clamp(6rem, 20vw, 13rem);
  font-weight: 800;
  line-height: 0.9;
  letter-spacing: -0.04em;
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.error-code .accent { color: var(--color-accent); }
.error-hero h1 {
  color: var(--color-white);
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.error-hero p {
  color: color-mix(in srgb, var(--color-white) 82%, transparent);
  max-width: 56ch;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}
.error-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

.popular-section { background: var(--color-white); }
.popular-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-5);
  max-width: 960px;
  margin: 0 auto;
}
.popular-card {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: var(--color-light);
  border: 1px solid var(--color-gray-light);
  transition: transform var(--transition-base), box-shadow var(--transition-base), border-color var(--transition-base);
}
.popular-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); border-color: color-mix(in srgb, var(--color-primary) 35%, transparent); }
.popular-card .pc-ico {
  width: 46px; height: 46px; flex-shrink: 0;
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  color: var(--color-primary);
  display: flex; align-items: center; justify-content: center;
}
.popular-card:nth-child(even) .pc-ico { background: var(--color-card-tint-3); color: var(--color-accent); }
.popular-card .pc-ico svg, .popular-card .pc-ico i { width: 22px; height: 22px; }
.popular-card strong { display: block; color: var(--color-dark); font-family: var(--font-heading); font-size: var(--font-size-base); }
.popular-card span { color: var(--color-gray); font-size: var(--font-size-sm); }

@media (max-width: 768px) {
  .popular-grid { grid-template-columns: 1fr 1fr; }
  .error-actions { flex-direction: column; align-items: stretch; }
}
@media (max-width: 520px) {
  .popular-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ============ ERROR HERO ============ -->
<section class="error-hero" aria-label="Page not found">
  <div class="container">
    <div class="error-code">4<span class="accent">0</span>4</div>
    <h1>This Branch Led Nowhere</h1>
    <p>The page you're looking for has been moved, removed, or never existed. But your trees still need looking after &mdash; here's where to head next.</p>
    <div class="error-actions">
      <a href="/" class="btn btn-accent btn-lg">Back to Home</a>
      <a href="/contact/" class="btn btn-outline-white btn-lg">Get a Free Estimate</a>
    </div>
  </div>
</section>

<!-- ============ POPULAR LINKS ============ -->
<section class="popular-section" aria-label="Popular pages">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow-label">Popular Pages</span>
      <h2>Where DeLand Homeowners Usually Head</h2>
      <p>Jump straight to the pages people visit most on the God's Country Tree Service site.</p>
    </div>
    <div class="popular-grid">
      <?php foreach ($popularLinks as $link): ?>
      <a class="popular-card" href="<?php echo e($link['url']); ?>">
        <span class="pc-ico"><?php echo icon($link['icon']); ?></span>
        <span>
          <strong><?php echo e($link['label']); ?></strong>
          <span><?php echo e($link['desc']); ?></span>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
