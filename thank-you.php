<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * thank-you.php — Form confirmation (root-level, noindex)
 * God's Country Tree Service LLC — DeLand, FL
 * Formsubmit _next target: {siteUrl}/thank-you
 * ============================================================
 */

$currentPage = 'thank-you';
$noindex     = true;

$pageTitle       = "Thank You | God's Country Tree Service, DeLand FL";
$pageDescription = "Thanks for reaching out! God's Country Tree Service in DeLand, FL — licensed & insured, 12+ years experience. We'll respond within 24 hours with your free estimate.";
$canonicalUrl    = $siteUrl . '/thank-you';

// ---- What happens next ----
$nextSteps = [
    ['icon' => 'inbox',        'title' => 'We\'ve got your request', 'text' => 'Your details just landed with the DeLand crew. Nothing else is needed from you right now.'],
    ['icon' => 'phone-call',   'title' => 'We reach out within 24 hours', 'text' => 'Expect a call or message to confirm details and set up a time to walk your property.'],
    ['icon' => 'file-text',    'title' => 'You get a straight, written estimate', 'text' => 'A free, no-obligation quote &mdash; with debris hauling and stump grinding spelled out where they apply.'],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Thank You — page-specific styles
   Techniques: glow confirmation hero, numbered next-steps rail,
   review-request card, C9.2 accent. Tokens only.
   ============================================================ */
.ty-hero {
  position: relative;
  background: var(--color-dark);
  overflow: hidden;
  padding-top: calc(var(--nav-height) + var(--space-16));
  padding-bottom: var(--space-16);
  text-align: center;
}
.ty-hero::before {
  content: '';
  position: absolute;
  top: -30%;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  height: 150%;
  background: radial-gradient(ellipse at center, color-mix(in srgb, var(--color-primary) 44%, transparent) 0%, transparent 62%);
  pointer-events: none;
}
.ty-hero .container { position: relative; z-index: 1; }
.ty-check {
  width: 88px; height: 88px;
  margin: 0 auto var(--space-6);
  border-radius: var(--radius-full);
  background: var(--color-accent);
  color: var(--color-dark);
  display: flex; align-items: center; justify-content: center;
  box-shadow: 0 0 0 10px color-mix(in srgb, var(--color-accent) 18%, transparent);
}
.ty-check svg, .ty-check i { width: 44px; height: 44px; }
.ty-hero h1 {
  color: var(--color-white);
  font-size: clamp(2rem, 4.5vw, 3rem);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.ty-hero h1 .accent { color: var(--color-accent); }
.ty-hero p {
  color: color-mix(in srgb, var(--color-white) 84%, transparent);
  max-width: 56ch;
  margin: 0 auto var(--space-8);
  font-size: var(--font-size-lg);
}
.ty-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* Next steps */
.ty-steps-section { background: var(--color-white); }
.ty-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  counter-reset: tystep;
  max-width: 1000px;
  margin: 0 auto;
}
.ty-step {
  position: relative;
  padding: var(--space-8) var(--space-6) var(--space-6);
  background: var(--color-light);
  border-radius: var(--radius-lg);
  border-top: 3px solid var(--color-primary);
}
.ty-step:nth-child(even) { border-top-color: var(--color-accent); }
.ty-step::before {
  counter-increment: tystep;
  content: counter(tystep, decimal-leading-zero);
  position: absolute;
  top: var(--space-4);
  right: var(--space-5);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: var(--font-size-xl);
  color: color-mix(in srgb, var(--color-primary) 18%, transparent);
}
.ty-step .ts-ico {
  width: 48px; height: 48px;
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  color: var(--color-primary);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-4);
}
.ty-step:nth-child(even) .ts-ico { background: var(--color-card-tint-3); color: var(--color-accent); }
.ty-step .ts-ico svg, .ty-step .ts-ico i { width: 24px; height: 24px; }
.ty-step h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); text-wrap: balance; }
.ty-step p { color: var(--color-gray); font-size: var(--font-size-sm); margin: 0; line-height: 1.65; }

/* Review request */
.ty-review-section { background: var(--color-cream); }
.ty-review-card {
  max-width: 760px;
  margin: 0 auto;
  text-align: center;
  background: var(--color-white);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-md);
  padding: clamp(2rem, 5vw, 3rem);
  border-top: 4px solid var(--color-accent);
}
.ty-review-stars { display: flex; justify-content: center; gap: var(--space-1); margin-bottom: var(--space-4); color: var(--color-star); }
.ty-review-stars svg, .ty-review-stars i { width: 24px; height: 24px; fill: var(--color-star); }
.ty-review-card h2 { margin-bottom: var(--space-3); text-wrap: balance; }
.ty-review-card p { color: var(--color-gray); max-width: 52ch; margin: 0 auto var(--space-6); }

@media (max-width: 768px) {
  .ty-steps { grid-template-columns: 1fr; }
  .ty-actions { flex-direction: column; align-items: stretch; }
}
</style>

<!-- ============ CONFIRMATION HERO ============ -->
<section class="ty-hero" aria-label="Request received">
  <div class="container">
    <div class="ty-check"><?php echo icon('check'); ?></div>
    <h1>Thanks &mdash; <span class="accent">We've Got It</span></h1>
    <p>Your request is in front of the <?php echo e($siteName); ?> crew here in DeLand. Sit tight &mdash; we'll be in touch within 24 hours with next steps.</p>
    <div class="ty-actions">
      <a href="/services/" class="btn btn-accent btn-lg">Explore Our Services</a>
      <a href="/" class="btn btn-outline-white btn-lg">Back to Home</a>
    </div>
  </div>
</section>

<!-- ============ WHAT HAPPENS NEXT ============ -->
<section class="ty-steps-section" aria-label="What happens next">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow-label">What Happens Next</span>
      <h2>Here's What to Expect</h2>
      <p>No phone tag, no runaround &mdash; just a clear path from your request to a straight estimate.</p>
    </div>
    <div class="ty-steps">
      <?php foreach ($nextSteps as $step): ?>
      <article class="ty-step">
        <div class="ts-ico"><?php echo icon($step['icon']); ?></div>
        <h3><?php echo e($step['title']); ?></h3>
        <p><?php echo $step['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ REVIEW REQUEST ============ -->
<section class="ty-review-section" aria-label="Leave a review">
  <div class="container">
    <div class="ty-review-card">
      <div class="ty-review-stars" aria-hidden="true">
        <?php echo icon('star'); ?><?php echo icon('star'); ?><?php echo icon('star'); ?><?php echo icon('star'); ?><?php echo icon('star'); ?>
      </div>
      <h2>Worked With Us Before?</h2>
      <p>If God's Country Tree Service has taken care of your trees, a quick Google review helps other DeLand neighbors find a crew they can trust.</p>
      <a href="<?php echo e($integrations['review_request_url']); ?>" class="btn btn-primary btn-lg" target="_blank" rel="noopener"><?php echo icon('star'); ?> Leave Us a Google Review</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
