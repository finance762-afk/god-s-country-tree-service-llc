<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /privacy-policy/index.php — Privacy Policy
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — CCPA/CPRA + multi-state rights, SMS/TCPA, processors
 * ============================================================
 */

$currentPage = 'privacy-policy';

$pageTitle       = "Privacy Policy | God's Country Tree Service, DeLand FL";
$pageDescription = "How God's Country Tree Service collects, uses, and protects your information — privacy practices for our DeLand, FL website and contact forms.";
$canonicalUrl    = $siteUrl . '/privacy-policy/';

// ---- Company facts ----
$companyName       = $siteName;
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Florida';
$companyCounty     = 'Volusia County';
$companyLocation   = $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'];
$lastUpdated       = date('F j, Y');

// ---- WebPage + BreadcrumbList schema ----
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
        ['name' => 'Privacy Policy'],
    ]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Legal page — page-specific accents (shared legal classes live in framework.css) */
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
.legal-prose h3[id] { scroll-margin-top: calc(var(--nav-height) + 20px); }
</style>

<!-- ============ HERO ============ -->
<section class="hero hero--legal" aria-label="Privacy Policy">
  <div class="container">
    <span class="hero-eyebrow-badge"><i data-lucide="shield"></i> Legal</span>
    <h1>Privacy Policy</h1>
    <span class="section-subtitle">your data, our commitments</span>
    <p class="legal-updated">Last Updated: <?php echo e($lastUpdated); ?></p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">Privacy Policy</li>
    </ol>
  </div>
</nav>

<article class="legal-prose">

  <p>This Privacy Policy explains how <?php echo e($companyName); ?> ("we," "us," "our") collects, uses, and protects your personal information when you visit <?php echo e($domain); ?> or interact with our tree services in <?php echo e($address['city']); ?> and across <?php echo e($companyCounty); ?>, <?php echo e($companyState); ?>.</p>

  <h2>1. Introduction</h2>
  <p><?php echo e($companyName); ?> is a <?php echo e($companyState); ?> <?php echo e($companyEntityType); ?> based in <?php echo e($companyLocation); ?>. We respect your privacy and are committed to protecting the personal information you share with us. By using our website or contacting us, you agree to the practices described in this policy.</p>

  <h2>2. Information We Collect</h2>
  <ul>
    <li><strong>Information you provide:</strong> name, email, phone number, service address, and project details submitted through our contact forms, by phone, or during in-person estimates.</li>
    <li><strong>Photo uploads:</strong> if you submit tree, storm-damage, or property reference photos through our forms.</li>
    <li><strong>Automatically collected:</strong> IP address, browser type, device information, pages visited, referring URL, and timestamps (via Google Analytics 4).</li>
    <li><strong>Cookies and similar technologies:</strong> see our <a href="/cookie-policy/">Cookie Policy</a> for details.</li>
  </ul>

  <h2>3. How We Use Your Information</h2>
  <ul>
    <li>Respond to inquiries and provide requested tree services</li>
    <li>Schedule estimates, inspections, and project work</li>
    <li>Communicate with you during active projects and after storms</li>
    <li>Send service-related communications, including phone calls and SMS messages where you have consented</li>
    <li>Improve our website and services</li>
    <li>Comply with legal obligations (licensing, insurance, and tax requirements)</li>
  </ul>

  <h2>4. How We Share Your Information</h2>
  <ul>
    <li>We do <strong>NOT</strong> sell your personal information.</li>
    <li><strong>Service providers:</strong> Google Analytics (website analytics), Formsubmit.co (contact form processor), our hosting provider, and Page One Insights, LLC (our web design partner, which receives copies of contact form submissions via the form's CC field for lead-tracking purposes).</li>
    <li><strong>Insurance carriers:</strong> when working on insurance-related storm or damage claims, with your consent.</li>
    <li><strong>Subcontractors and suppliers:</strong> as necessary to complete your project.</li>
    <li><strong>Legal compliance:</strong> if required by <?php echo e($companyState); ?> or federal law.</li>
    <li><strong>Business transfers:</strong> in the event of a merger, acquisition, or sale of business assets.</li>
  </ul>

  <h2>5. Your Privacy Rights</h2>

  <h3 id="state-rights"><?php echo e($companyState); ?> Residents</h3>
  <p><?php echo e($companyState); ?> does not currently have a comprehensive consumer privacy statute. Regardless, you may request access to, correction of, or deletion of the personal information we hold about you. Contact us using the methods in Section 12, and we will respond within a reasonable time.</p>

  <h3 id="ccpa-rights">California Residents (CCPA / CPRA)</h3>
  <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA):</p>
  <ul>
    <li><strong>Right to know</strong> what personal information we collect, use, and disclose.</li>
    <li><strong>Right to delete</strong> personal information we have collected from you, subject to certain exceptions.</li>
    <li><strong>Right to correct</strong> inaccurate personal information.</li>
    <li><strong>Right to opt out of the sale or sharing</strong> of personal information. (We do not sell personal information, but you may still submit an opt-out request for our records.)</li>
    <li><strong>Right to limit use</strong> of sensitive personal information.</li>
    <li><strong>Right to non-discrimination</strong> — we will not deny you services or charge different prices for exercising your rights.</li>
  </ul>
  <p><strong>How to exercise your rights:</strong> Submit a request through our <a href="/contact/">contact form</a> or the methods in Section 12. We will respond within 45 days of receipt.</p>

  <h3>Other State Residents</h3>
  <p>Residents of Colorado, Virginia, Connecticut, Utah, Texas, and other states with consumer privacy laws have similar rights under their respective statutes. Contact us using the same methods to exercise your rights.</p>

  <h2>6. SMS and Phone Communications (TCPA)</h2>
  <p>When you submit our contact form and check the applicable consent box, you agree to receive phone calls and/or SMS text messages from us about your project request. Standard message and data rates may apply, and message frequency varies. <strong>Consent is not a condition of purchase.</strong> You can opt out of SMS communications at any time by replying STOP to any text message (reply HELP for help). You can opt out of phone communications by telling our representative or contacting us through the methods in Section 12.</p>

  <h2>7. Data Retention</h2>
  <p>We retain contact form submissions and service records for as long as necessary to provide services and comply with legal obligations — typically 5–7 years for business and warranty records. Photos submitted through our forms are deleted after the related project is closed unless retained for warranty or legal purposes.</p>

  <h2>8. Data Security</h2>
  <p>We use reasonable administrative, technical, and physical safeguards, including SSL encryption on all form submissions and secure hosting infrastructure. No system is 100% secure, and we cannot guarantee absolute security, but we work to minimize risk.</p>

  <h2>9. Children's Privacy</h2>
  <p>This website is not directed to children under 13, and we do not knowingly collect information from children. If you believe a child has provided us information, contact us and we will delete it.</p>

  <h2>10. Third-Party Links</h2>
  <p>Our website may link to third-party sites (such as our Google Business Profile, Better Business Bureau profile, or social platforms). We are not responsible for the privacy practices of those sites. Review their privacy policies separately.</p>

  <h2>11. Changes to This Policy</h2>
  <p>We may update this Privacy Policy from time to time. The "Last Updated" date at the top reflects the most recent change, and material changes will be prominently posted on the site.</p>

  <h2>12. Contact Us</h2>
  <p>For privacy questions or to exercise your rights, reach out to:</p>
  <div class="legal-contact-card">
    <strong><?php echo e($companyName); ?></strong><br>
    <?php echo e($companyLocation); ?><br>
    Website: <a href="/contact/">Contact form</a><br>
    <?php if (!empty($email)): ?>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a><br><?php endif; ?>
    <?php if (!empty($phone)): ?>Phone: <a href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a><?php endif; ?>
  </div>

  <div class="legal-disclaimer">
    This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed <?php echo e($companyState); ?> attorney before publication to ensure compliance with current state and federal privacy laws.
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
