<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /terms/index.php — Terms of Service
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — governing law: Florida / Volusia County
 * ============================================================
 */

$currentPage = 'terms';

$pageTitle       = "Terms of Service | God's Country Tree Service, DeLand FL";
$pageDescription = "The terms governing use of the God's Country Tree Service website and our tree services in DeLand, FL and across Volusia County.";
$canonicalUrl    = $siteUrl . '/terms/';

$companyName       = $siteName;
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Florida';
$companyCounty     = 'Volusia County';
$companyLocation   = $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];
$lastUpdated       = date('F j, Y');

$webPageSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'WebPage',
    '@id'         => $canonicalUrl . '#webpage',
    'url'         => $canonicalUrl,
    'name'        => $pageTitle,
    'description' => $pageDescription,
    'isPartOf'    => ['@id' => $siteUrl . '/#organization'],
];
$pageSchema = '<script type="application/ld+json">' . json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Terms of Service'],
    ]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Legal page — page-specific accents (shared legal classes in framework.css) */
.hero--legal .hero-eyebrow-badge {
  display: inline-flex; align-items: center; gap: var(--space-2);
  background: color-mix(in srgb, var(--color-primary) 10%, transparent);
  border: 1px solid color-mix(in srgb, var(--color-primary) 22%, transparent);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-family: var(--font-heading); font-size: var(--font-size-xs); font-weight: 700;
  text-transform: uppercase; letter-spacing: 2px; color: var(--color-primary);
  margin-bottom: var(--space-4);
}
.hero--legal .hero-eyebrow-badge svg, .hero--legal .hero-eyebrow-badge i { width: 14px; height: 14px; }
</style>

<!-- ============ HERO ============ -->
<section class="hero hero--legal" aria-label="Terms of Service">
  <div class="container">
    <span class="hero-eyebrow-badge"><i data-lucide="scroll-text"></i> Legal</span>
    <h1>Terms of Service</h1>
    <span class="section-subtitle">the ground rules</span>
    <p class="legal-updated">Last Updated: <?php echo e($lastUpdated); ?></p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">Terms of Service</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <p>These Terms of Service govern your use of <?php echo e($domain); ?> and your engagement of <?php echo e($companyName); ?> for tree services in <?php echo e($address['city']); ?> and across <?php echo e($companyCounty); ?>, <?php echo e($companyState); ?>. Please read them carefully.</p>

  <h2>1. Agreement to Terms</h2>
  <p>By accessing or using <?php echo e($domain); ?>, or by engaging <?php echo e($companyName); ?> for services, you agree to these Terms of Service. If you do not agree, please do not use this website or our services.</p>

  <h2>2. Use of This Website</h2>
  <ul>
    <li>You may use this site for personal, non-commercial purposes to learn about our services and contact us.</li>
    <li>You may not use the site for unlawful purposes, attempt to access non-public systems, scrape or copy content without written permission, submit false information through our contact form, or use automated systems to extract data.</li>
  </ul>

  <h2>3. Service Estimates and Quotes</h2>
  <p>All estimates are based on the information provided and the conditions visible at the time of inspection. Final pricing may differ if the project scope changes, hidden hazards or decay are discovered, access conditions differ from initial assumptions, or permit requirements apply. Verbal quotes are non-binding. Only a written, signed agreement constitutes a final contract.</p>

  <h2>4. Project Work</h2>
  <ul>
    <li>Work is governed by a written agreement specific to each job.</li>
    <li>We comply with applicable <?php echo e($companyState); ?> state and local codes and any tree-removal permit requirements in <?php echo e($address['city']); ?> and <?php echo e($companyCounty); ?>.</li>
    <li>Work is performed by <?php echo e($companyName); ?> personnel and qualified subcontractors.</li>
    <li>Our crews carry workers' compensation insurance as required by <?php echo e($companyState); ?> law.</li>
    <li>We are licensed and insured to operate in the State of <?php echo e($companyState); ?>.</li>
  </ul>

  <h2>5. Warranties</h2>
  <p>Any workmanship expectations are detailed in your project agreement. Tree work involves living organisms and natural conditions: we do not warrant that a pruned or treated tree will survive, that a tree will not fail in a future storm, or against acts of God beyond our control. Pre-existing conditions disclosed prior to work, and damage from neglect or alteration by others, are excluded.</p>

  <h2>6. Payment Terms</h2>
  <p>Payment terms are specified in your project agreement. Standard terms may include a deposit at signing, progress payments at milestones where applicable, and the final balance due upon project completion. Past-due balances may accrue interest as permitted by <?php echo e($companyState); ?> law.</p>

  <h2>7. Cancellation</h2>
  <p>Cancellation terms are specified in your agreement. Generally:</p>
  <ul>
    <li>Cancellation before crew scheduling or materials are ordered: deposit refunded minus administrative costs.</li>
    <li>Cancellation after scheduling or materials are committed: deposit may be forfeited to cover costs incurred.</li>
    <li>Cancellation after work begins: payment is due for work completed plus any committed materials or equipment.</li>
  </ul>

  <h2>8. Insurance Claim Work</h2>
  <p>For storm or damage projects involving an insurance claim, payment is typically structured around your carrier's schedule. We do <strong>NOT</strong> serve as a public adjuster or legal representative. We provide repair and removal estimates and complete approved work only. Negotiation of claim values and policy interpretation is the property owner's responsibility.</p>

  <h2>9. Limitation of Liability</h2>
  <p>To the maximum extent permitted by <?php echo e($companyState); ?> law, <?php echo e($companyName); ?>'s total liability for any claim related to the site or our services shall not exceed the amount you paid for the specific service giving rise to the claim. We are not liable for indirect, incidental, special, or consequential damages.</p>

  <h2>10. Intellectual Property</h2>
  <p>All content on this site — text, graphics, photographs, and logos — is owned by <?php echo e($companyName); ?> or used with permission, and is protected by copyright. You may not reproduce, distribute, or create derivative works without written permission.</p>

  <h2>11. Governing Law and Disputes</h2>
  <p>These Terms are governed by the laws of the State of <?php echo e($companyState); ?>, without regard to conflict-of-laws principles. Any disputes shall be resolved in the state or federal courts located in <?php echo e($companyCounty); ?>, <?php echo e($companyState); ?>.</p>

  <h2>12. Changes to These Terms</h2>
  <p>We may update these Terms at any time. The "Last Updated" date reflects the most recent version. Continued use of the site after updates constitutes acceptance of the revised Terms.</p>

  <h2>13. Contact Us</h2>
  <p>Questions about these Terms? Reach out to:</p>
  <div class="legal-contact-card">
    <strong><?php echo e($companyName); ?></strong><br>
    <?php echo e($companyLocation); ?><br>
    Website: <a href="/contact/">Contact form</a><br>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br><?php endif; ?>
    <?php if (!empty($phone)): ?>Phone: <a href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a><?php endif; ?>
  </div>

  <div class="legal-disclaimer">
    This document is provided as a general template. We recommend reviewing it with a licensed <?php echo e($companyState); ?> attorney before publication.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
