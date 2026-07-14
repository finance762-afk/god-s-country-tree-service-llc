<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /cookie-policy/index.php — Cookie Policy
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — GA4, Fonts, Maps, CDN cookies disclosed
 * ============================================================
 */

$currentPage = 'cookie-policy';

$pageTitle       = "Cookie Policy | God's Country Tree Service, DeLand FL";
$pageDescription = "How God's Country Tree Service uses cookies and tracking technologies on our DeLand, FL website, and how you can control them.";
$canonicalUrl    = $siteUrl . '/cookie-policy/';

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
        ['name' => 'Cookie Policy'],
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
<section class="hero hero--legal" aria-label="Cookie Policy">
  <div class="container">
    <span class="hero-eyebrow-badge"><i data-lucide="cookie"></i> Legal</span>
    <h1>Cookie Policy</h1>
    <span class="section-subtitle">what we store, and why</span>
    <p class="legal-updated">Last Updated: <?php echo e($lastUpdated); ?></p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">Cookie Policy</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <p>This Cookie Policy explains how <?php echo e($companyName); ?> uses cookies and similar technologies on <?php echo e($domain); ?>. It should be read alongside our <a href="/privacy-policy/">Privacy Policy</a>.</p>

  <h2>1. What Are Cookies?</h2>
  <p>Cookies are small text files stored on your device when you visit a website. They help websites work efficiently and provide information to site owners about how visitors use the site.</p>

  <h2>2. Cookies We Use</h2>

  <h3>Strictly Necessary</h3>
  <p>These are essential for site functionality, such as secure form submission. They cannot be disabled. Example: temporary session cookies used during a contact form submission.</p>

  <h3>Analytics (Google Analytics 4)</h3>
  <p>We use Google Analytics 4 to understand how visitors use our site so we can improve it. GA4 sets cookies (typically prefixed with <code>_ga</code>) and collects usage data with IP information truncated for anonymization.</p>

  <h3>Fonts &amp; Content Delivery</h3>
  <p>Our site loads web fonts (Google Fonts) and script libraries from third-party content delivery networks. These services may set their own cookies or log requests subject to their own privacy policies in order to deliver those assets.</p>

  <h3>Maps &amp; Third-Party Embeds</h3>
  <p>We embed a Google Maps location and may embed a customer-review widget. When these load, the third-party providers may set their own cookies subject to their respective privacy policies.</p>

  <h2>3. How to Control Cookies</h2>
  <p>Most browsers let you view, delete, or block cookies. You can block third-party cookies or block all cookies, though some site functionality may break as a result. Browser-specific instructions are available from Google, Mozilla, Apple, and Microsoft.</p>

  <h2>4. Opt Out of Google Analytics</h2>
  <p>You can opt out of GA4 tracking site-wide by installing the Google Analytics Opt-out Browser Add-on at <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">tools.google.com/dlpage/gaoptout</a>.</p>

  <h2>5. Our Cookie Notice</h2>
  <p>We display a brief banner notifying you of our cookie use. Once dismissed, the banner is suppressed on future visits using your browser's localStorage. You can re-enable the banner by clearing your browser's site data.</p>

  <h2>6. Changes to This Policy</h2>
  <p>We may update this Cookie Policy from time to time. The "Last Updated" date at the top reflects the most recent change.</p>

  <h2>7. Contact Us</h2>
  <p>Questions about our use of cookies? Reach out to:</p>
  <div class="legal-contact-card">
    <strong><?php echo e($companyName); ?></strong><br>
    <?php echo e($companyLocation); ?><br>
    Website: <a href="/contact/">Contact form</a><br>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br><?php endif; ?>
    <?php if (!empty($phone)): ?>Phone: <a href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a><?php endif; ?>
  </div>

  <div class="legal-disclaimer">
    This Cookie Policy is provided as a general template. We recommend reviewing it with a licensed <?php echo e($companyState); ?> attorney before publication.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
