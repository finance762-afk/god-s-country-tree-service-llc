<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/**
 * ============================================================
 * /contact/index.php — Contact God's Country Tree Service
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — Formsubmit.co form + TCPA triple consent + map
 * ============================================================
 */

$currentPage = 'contact';

// V2.2 CTR meta (trade noun + city + differentiator + CTA)
$pageTitle       = "Contact God's Country Tree Service | DeLand, FL Tree Service";
$pageDescription = "Contact God's Country Tree Service in DeLand, FL — licensed & insured tree service with 24/7 storm response. Request your free estimate within 24 hours today.";
$canonicalUrl    = $siteUrl . '/contact/';

// ---- Images ----
$imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
$heroImage        = $imgBase . '1784062761586-95i7hi-487384453_1464923548239483_3259835514318021231_n.webp'; // climber against sky
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

// ---- Hours rows (from config $businessHours) ----
$hoursRows = [
    ['days' => 'Monday – Friday', 'time' => '7:00 AM – 10:00 PM'],
    ['days' => 'Saturday',        'time' => '8:00 AM – 9:00 PM'],
    ['days' => 'Sunday',          'time' => 'Closed'],
];

// ---- Schema: ContactPage + BreadcrumbList ----
$contactPageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'ContactPage',
    '@id'      => $canonicalUrl . '#webpage',
    'url'      => $canonicalUrl,
    'name'     => $pageTitle,
    'about'    => ['@id' => $siteUrl . '/#organization'],
];
$pageSchema = '<script type="application/ld+json">' . json_encode($contactPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>'
    . generateBreadcrumbSchema([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Contact'],
    ]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* ============================================================
   Contact — page-specific styles
   Techniques: C1.4 layered hero, asymmetric form/info split,
   floating-label form, TCPA consent fieldset, info cards,
   responsive map embed, C3 diagonal divider, C9.2 glow CTA.
   Tokens only — no hardcoded colors/shadows/spacing.
   ============================================================ */

/* ---- C1.4 Layered hero ---- */
.contact-hero {
  position: relative;
  min-height: 46vh;
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center 30%;
  overflow: hidden;
}
.contact-hero::before {
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
.contact-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.05;
  pointer-events: none;
}
.contact-hero .container {
  position: relative;
  z-index: 2;
  padding-top: calc(var(--nav-height) + var(--space-12));
  padding-bottom: var(--space-12);
}
.contact-hero .hero-eyebrow {
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
.contact-hero h1 {
  color: var(--color-white);
  font-size: clamp(2.2rem, 4.4vw, 3.4rem);
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  max-width: 22ch;
  margin-bottom: var(--space-5);
}
.contact-hero h1 .text-accent { color: var(--color-accent); }
.contact-hero .hero-answer {
  color: color-mix(in srgb, var(--color-white) 92%, transparent);
  font-size: var(--font-size-lg);
  max-width: 60ch;
  margin: 0;
}

/* ---- Contact layout: form + info sidebar ---- */
.contact-main { background: var(--color-white); }
.contact-layout {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: var(--space-12);
  align-items: start;
}

/* ---- Form card ---- */
.contact-form-card {
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-xl);
  box-shadow: var(--shadow-lg);
  padding: clamp(1.75rem, 4vw, 2.75rem);
}
.contact-form-card h2 { font-size: var(--font-size-2xl); margin-bottom: var(--space-2); color: var(--color-dark); }
.contact-form-card .form-lede { color: var(--color-gray); margin-bottom: var(--space-8); }
.form-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-4); }
@media (max-width: 540px) { .form-grid-2 { grid-template-columns: 1fr; } }
.contact-form label > span {
  display: block;
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
}
.contact-form .req { color: var(--color-danger); }
.contact-form input,
.contact-form select,
.contact-form textarea {
  width: 100%;
  padding: var(--space-4);
  border: 1px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-text);
  background: var(--color-white);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.contact-form textarea { resize: vertical; min-height: 130px; }
.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
  outline: none;
  border-color: var(--color-primary);
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--color-primary) 12%, transparent);
}
.contact-form .form-field { margin-bottom: var(--space-5); }
.btn-block { width: 100%; }
.form-reassure {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin-top: var(--space-4);
}
.form-reassure svg, .form-reassure i { width: 14px; height: 14px; color: var(--color-success); }

/* ---- Info sidebar ---- */
.contact-info { display: flex; flex-direction: column; gap: var(--space-5); }
.info-card {
  background: var(--color-light);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid var(--color-primary);
}
.info-card:nth-child(even) { border-left-color: var(--color-accent); }
.info-card h3 {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-3);
  color: var(--color-dark);
}
.info-card h3 .ico {
  width: 38px; height: 38px; flex-shrink: 0;
  border-radius: var(--radius-full);
  background: var(--color-card-tint-1);
  color: var(--color-primary);
  display: flex; align-items: center; justify-content: center;
}
.info-card:nth-child(even) h3 .ico { background: var(--color-card-tint-3); color: var(--color-accent); }
.info-card h3 .ico svg, .info-card h3 .ico i { width: 18px; height: 18px; }
.info-card p, .info-card a.info-link { color: var(--color-text); font-size: var(--font-size-sm); line-height: 1.7; }
.info-card a.info-link { color: var(--color-primary); font-weight: 600; }
.info-card a.info-link:hover { color: var(--color-primary-dark); text-decoration: underline; }
.hours-table { width: 100%; border-collapse: collapse; }
.hours-table td { padding: var(--space-2) 0; font-size: var(--font-size-sm); border-bottom: 1px solid var(--color-gray-light); }
.hours-table tr:last-child td { border-bottom: 0; }
.hours-table td:last-child { text-align: right; font-weight: 600; color: var(--color-dark); }
.hours-badge {
  display: inline-flex; align-items: center; gap: var(--space-2);
  margin-top: var(--space-3);
  background: color-mix(in srgb, var(--color-accent) 15%, transparent);
  color: var(--color-primary-dark);
  border-radius: var(--radius-full);
  padding: var(--space-1) var(--space-4);
  font-size: var(--font-size-xs);
  font-weight: 700;
}
.hours-badge svg, .hours-badge i { width: 14px; height: 14px; color: var(--color-accent); }

/* ---- Map section ---- */
.map-section { background: var(--color-cream); }
.map-wrap {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-6);
}
.map-embed { aspect-ratio: 21 / 9; box-shadow: var(--shadow-lg); }
.map-actions { display: flex; justify-content: center; gap: var(--space-4); flex-wrap: wrap; }
.map-actions .btn { text-transform: none; }

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
.closing-cta p { color: color-mix(in srgb, var(--color-white) 82%, transparent); max-width: 56ch; margin: 0 auto var(--space-8); }
.closing-cta .hero-actions { display: flex; gap: var(--space-4); justify-content: center; flex-wrap: wrap; }

/* ---- SVG divider ---- */
.svg-divider { display: block; overflow: hidden; line-height: 0; height: clamp(32px, 5vw, 64px); position: relative; z-index: 2; }
.svg-divider svg { display: block; width: 100%; height: 100%; }
.svg-divider--flush { margin-bottom: -1px; }

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .contact-layout { grid-template-columns: 1fr; gap: var(--space-10); }
}
@media (max-width: 768px) {
  .contact-hero { min-height: auto; }
  .contact-hero h1 { font-size: clamp(1.9rem, 7vw, 2.5rem); }
  .map-embed { aspect-ratio: 4 / 3; }
}
</style>

<!-- ============ HERO ============ -->
<section class="contact-hero" style="background-image:url('<?php echo e($heroImage); ?>');" aria-label="Contact God's Country Tree Service in DeLand, Florida">
  <div class="container">
    <span class="hero-eyebrow">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      Contact Us &middot; DeLand, FL
    </span>
    <h1>Get Your Free Tree Service Estimate in <span class="text-accent">DeLand</span></h1>
    <p class="hero-answer">Tell <?php echo e($siteName); ?> what's going on with your trees &mdash; a leaning oak, storm damage, an overgrown canopy, or a planting project. We serve DeLand and Volusia County, and respond with a straight, no-obligation estimate within 24 hours.</p>
  </div>
</section>

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Breadcrumb">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">&rsaquo;</li>
      <li aria-current="page">Contact</li>
    </ol>
  </div>
</nav>

<!-- ============ CONTACT MAIN ============ -->
<section class="contact-main" aria-label="Contact form and details">
  <div class="container">
    <div class="contact-layout">

      <!-- Form -->
      <div class="contact-form-card">
        <h2>Request a Free Estimate</h2>
        <p class="form-lede">Fill out the form and the DeLand crew will get back to you within 24 hours. No obligation, ever.</p>

        <form action="<?php echo e($formAction); ?>" method="POST" class="contact-form">
          <!-- Formsubmit.co directives -->
          <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you">
          <input type="hidden" name="_captcha" value="false">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_subject" value="New lead from <?php echo e($siteName); ?>">

          <!-- Honeypot (visually hidden; bots fill it) -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

          <!-- Consent tracking (plain names — Formsubmit forwards them in the email) -->
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo e($_SERVER['REQUEST_URI'] ?? '/contact/'); ?>">
          <input type="hidden" name="form_location" value="contact-page">

          <div class="form-grid-2">
            <div class="form-field">
              <label for="c-name"><span>Your Name <span class="req">*</span></span>
                <input type="text" id="c-name" name="name" autocomplete="name" required>
              </label>
            </div>
            <div class="form-field">
              <label for="c-phone"><span>Phone <span class="req">*</span></span>
                <input type="tel" id="c-phone" name="phone" autocomplete="tel" required>
              </label>
            </div>
          </div>

          <div class="form-grid-2">
            <div class="form-field">
              <label for="c-email"><span>Email <span class="req">*</span></span>
                <input type="email" id="c-email" name="email" autocomplete="email" required>
              </label>
            </div>
            <div class="form-field">
              <label for="c-service"><span>Service Needed</span>
                <select id="c-service" name="service_requested" data-p1-dynamic>
                  <option value="">Select a service</option>
                  <?php foreach ($services as $svc): ?>
                  <option value="<?php echo e($svc['name']); ?>"><?php echo e($svc['name']); ?></option>
                  <?php endforeach; ?>
                  <option value="Emergency / Storm Damage">Emergency / Storm Damage</option>
                  <option value="Something else">Something else</option>
                </select>
              </label>
            </div>
          </div>

          <div class="form-field">
            <label for="c-message"><span>Tell Us About Your Trees</span>
              <textarea id="c-message" name="message" rows="5" placeholder="What's going on — a leaning oak, dead limbs over the roof, an overgrown lot, storm cleanup? Include your city if it's outside DeLand."></textarea>
            </label>
          </div>

          <!-- ═══ SEPARATE, UNBUNDLED CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo e($siteName); ?> about my inquiry, services, and seasonal reminders. I can unsubscribe anytime via the link in any email. Message frequency varies.
              </span>
            </label>

            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo e($siteName); ?> at the number I provided (appointment reminders, service updates, and offers). Message frequency varies. Message and data rates may apply.
                Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a> and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>
          </fieldset>

          <button type="submit" class="btn btn-accent btn-lg btn-block">Send My Request</button>
          <p class="form-reassure"><i data-lucide="lock"></i> Your details go straight to the DeLand crew &mdash; never sold or shared.</p>
        </form>
      </div>

      <!-- Info sidebar -->
      <aside class="contact-info" aria-label="Business details">
        <div class="info-card">
          <h3><span class="ico"><i data-lucide="map-pin"></i></span> Where We Work</h3>
          <p><strong><?php echo e($siteName); ?></strong><br>
          Based in <?php echo e($address['city']); ?>, <?php echo e($address['state']); ?> <?php echo e($address['zip']); ?><br>
          Serving DeLand, Deltona, Orange City, DeBary, Lake Helen &amp; Volusia County (about a 50-mile radius).</p>
          <p><a class="info-link" href="<?php echo e($integrations['directions_url']); ?>" target="_blank" rel="noopener">Get Directions &rarr;</a></p>
        </div>

        <?php if (!empty($phone)): ?>
        <div class="info-card">
          <h3><span class="ico"><i data-lucide="phone"></i></span> Call or Text</h3>
          <p><a class="info-link" href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a></p>
          <?php if (!empty($integrations['accepts_sms'])): ?>
          <p>Text us anytime &mdash; we reply fast during business hours.</p>
          <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($email)): ?>
        <div class="info-card">
          <h3><span class="ico"><i data-lucide="mail"></i></span> Email</h3>
          <p><a class="info-link" href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></p>
        </div>
        <?php endif; ?>

        <div class="info-card">
          <h3><span class="ico"><i data-lucide="clock"></i></span> Business Hours</h3>
          <table class="hours-table">
            <?php foreach ($hoursRows as $row): ?>
            <tr><td><?php echo e($row['days']); ?></td><td><?php echo e($row['time']); ?></td></tr>
            <?php endforeach; ?>
          </table>
          <span class="hours-badge"><i data-lucide="zap"></i> 24/7 Emergency Storm Response</span>
        </div>

        <div class="info-card">
          <h3><span class="ico"><i data-lucide="badge-check"></i></span> Verify Us</h3>
          <p>Licensed &amp; insured, with <?php echo e($yearsInBusiness); ?>+ years in DeLand.</p>
          <p><a class="info-link" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener">Google Reviews &rarr;</a><br>
          <a class="info-link" href="<?php echo e($integrations['bbb_url']); ?>" target="_blank" rel="noopener">BBB Business Profile &rarr;</a></p>
        </div>
      </aside>

    </div>
  </div>
</section>

<!-- Divider: diagonal (white → cream) -->
<div class="svg-divider svg-divider--flush" aria-hidden="true">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none"><polygon fill="var(--color-cream)" points="0,60 1200,10 1200,60"/></svg>
</div>

<!-- ============ MAP ============ -->
<section class="map-section" aria-label="Our service area on the map">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow-label">Find Us</span>
      <h2>Serving DeLand &amp; Volusia County</h2>
      <p>God's Country Tree Service is based in DeLand and works within about 50 miles across Volusia County. Get directions or start your free estimate below.</p>
    </div>
    <div class="map-wrap">
      <div class="map-embed">
        <?php echo $integrations['gbp_map_embed']; ?>
      </div>
      <div class="map-actions">
        <a class="btn btn-secondary" href="<?php echo e($integrations['directions_url']); ?>" target="_blank" rel="noopener"><i data-lucide="navigation"></i> Get Directions</a>
        <a class="btn btn-secondary" href="<?php echo e($integrations['gbp_url']); ?>" target="_blank" rel="noopener"><i data-lucide="map-pin"></i> View on Google</a>
      </div>
    </div>
  </div>
</section>

<!-- ============ CLOSING CTA ============ -->
<section class="closing-cta" aria-label="Emergency tree service">
  <div class="container">
    <span class="eyebrow-label" style="color: var(--color-accent);">Storm Damage Can't Wait</span>
    <h2>Tree Down or Hanging Over the House?</h2>
    <p><?php echo e($siteName); ?> answers emergency and storm-damage calls 24/7 across the DeLand area. Use the form above, or reach out through our storm-cleanup service page to get the crew moving.</p>
    <div class="hero-actions">
      <a href="/services/emergency-tree-service-storm-cleanup/" class="btn btn-accent btn-lg">Emergency Storm Cleanup</a>
      <a href="/services/" class="btn btn-outline-white btn-lg">Explore Our Services</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
