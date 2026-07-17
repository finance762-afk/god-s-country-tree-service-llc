<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /accessibility/index.php — Accessibility Statement
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — WCAG 2.1 AA conformance statement
 * ============================================================
 */

$currentPage = 'accessibility';

$pageTitle       = "Accessibility Statement | God's Country Tree Service, DeLand FL";
$pageDescription = "God's Country Tree Service's commitment to WCAG 2.1 AA accessibility on our DeLand, FL website, and how to report any barriers you encounter.";
$canonicalUrl    = $siteUrl . '/accessibility/';

$companyName     = $siteName;
$companyState    = 'Florida';
$companyLocation = $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];
$lastUpdated     = date('F j, Y');

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
        ['name' => 'Accessibility'],
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
<section class="hero hero--legal" aria-label="Accessibility Statement">
  <div class="container">
    <span class="hero-eyebrow-badge"><?php echo icon('accessibility'); ?> Legal</span>
    <h1>Accessibility Statement</h1>
    <span class="section-subtitle">a site for everyone</span>
    <p class="legal-updated">Last Updated: <?php echo e($lastUpdated); ?></p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">Accessibility</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <p><?php echo e($companyName); ?> is committed to making <?php echo e($domain); ?> accessible to everyone, including people with disabilities. This statement describes our conformance efforts and how to reach us if you encounter a barrier.</p>

  <h2>1. Our Commitment</h2>
  <p><?php echo e($companyName); ?> is committed to ensuring digital accessibility for people with disabilities. We continually work to improve the experience for everyone and to apply the relevant accessibility standards to our website.</p>

  <h2>2. Conformance Status</h2>
  <p>This site is designed to conform with the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA. WCAG defines requirements for designers and developers to improve accessibility for people with disabilities. Our site partially conforms with WCAG 2.1 Level AA, meaning some content may not yet fully meet the standard. We are actively working to address any known issues.</p>

  <h2>3. Accessibility Features</h2>
  <ul>
    <li>Semantic HTML5 markup with proper landmark regions (header, navigation, main, footer)</li>
    <li>A skip-to-content link at the top of every page</li>
    <li>Visible keyboard focus indicators on all interactive elements</li>
    <li>Descriptive alt text on all meaningful images</li>
    <li>Sufficient color contrast for body text and interactive elements</li>
    <li>Responsive design that works across screen sizes and zoom levels</li>
    <li><code>prefers-reduced-motion</code> support — animations are disabled for users who request reduced motion</li>
    <li>ARIA labels on navigation and form elements</li>
    <li>Form field labels associated with their inputs</li>
  </ul>

  <h2>4. Known Issues</h2>
  <p>We are aware of areas that may need improvement:</p>
  <ul>
    <li>Some third-party embeds (such as maps and review widgets) may not fully meet WCAG standards. We provide alternative ways to access this information — contact us by any method below.</li>
    <li>Some third-party documents may not be fully accessible. Contact us for alternative formats.</li>
  </ul>

  <h2>5. Feedback and Reporting Issues</h2>
  <p>If you encounter an accessibility barrier on this site, please tell us. We aim to respond to accessibility feedback within 5 business days.</p>

  <h2>6. Alternative Contact Methods</h2>
  <p>If our website is not accessible to you, you can reach us through our <a href="/contact/">contact form</a><?php if (!empty($phone)): ?> or by phone<?php endif; ?>. We will gladly provide service information in alternative formats on request.</p>

  <h2>7. Changes to This Statement</h2>
  <p>We may update this Accessibility Statement as our site evolves. The "Last Updated" date at the top reflects the most recent change.</p>

  <h2>8. Contact Us</h2>
  <p>To report an accessibility issue or request assistance, reach out to:</p>
  <div class="legal-contact-card">
    <strong><?php echo e($companyName); ?></strong><br>
    <?php echo e($companyLocation); ?><br>
    Website: <a href="/contact/">Contact form</a><br>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br><?php endif; ?>
    <?php if (!empty($phone)): ?>Phone: <a href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a><?php endif; ?>
  </div>

  <div class="legal-disclaimer">
    This Accessibility Statement is provided as a general template. We recommend reviewing it with a licensed <?php echo e($companyState); ?> attorney before publication.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
