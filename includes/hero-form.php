<?php
/**
 * Hero lead-capture form card for service landing pages (v6.3: a form in every hero).
 * Same fields, consent block and spam shield as the homepage hero form, so the leads
 * endpoint and the /thank-you conversion treat it identically.
 *
 * Set before including:
 *   $heroFormLocation  form_location value, e.g. 'hero-tree-removal'
 *   $heroFormService   service name to preselect (must match a $services name), optional
 *   $heroFormHeading   card heading, optional
 */
$heroFormLocation = $heroFormLocation ?? 'hero-service';
$heroFormService  = $heroFormService  ?? '';
$heroFormHeading  = $heroFormHeading  ?? 'Get Your Free Estimate';
?>
<style>
.hero-with-form { display: grid; grid-template-columns: minmax(0, 1.25fr) minmax(320px, 0.75fr); gap: var(--space-10); align-items: center; }
.hero-with-form .hero-copy { min-width: 0; }
section .container.hero-with-form { padding-top: calc(var(--nav-height) + var(--space-8)); padding-bottom: var(--space-8); }
.hero-form-card { background: color-mix(in srgb, var(--color-white) 94%, transparent); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border: 1px solid color-mix(in srgb, var(--color-white) 55%, transparent); border-radius: var(--radius-xl); box-shadow: var(--shadow-xl); padding: var(--space-6) var(--space-5); color: var(--color-text); scroll-margin-top: calc(var(--nav-height) + var(--space-4)); }
.hero-form-card h2 { font-size: var(--font-size-xl); margin-bottom: var(--space-1); color: var(--color-dark); }
.hero-form-card a { color: var(--color-primary-dark); }
.hero-form-tagline { font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4); }
.hero-form .form-row { margin-bottom: var(--space-3); }
.hero-form input[type="text"], .hero-form input[type="tel"], .hero-form select { width: 100%; padding: var(--space-3) var(--space-4); border: 1px solid var(--color-gray-light); border-radius: var(--radius-md); font-family: var(--font-body); font-size: 16px; color: var(--color-text); background: var(--color-white); transition: border-color var(--transition-fast), box-shadow var(--transition-fast); }
.hero-form select { appearance: auto; }
.hero-form input:focus, .hero-form select:focus { outline: none; border-color: var(--color-primary); box-shadow: 0 0 0 3px color-mix(in srgb, var(--color-primary) 12%, transparent); }
.hero-form input::placeholder { color: var(--color-gray); }
.hero-form-card .btn-block { width: 100%; }
.hero-form-card .form-footnote { font-size: var(--font-size-xs); color: var(--color-gray); margin: var(--space-3) 0 0; text-align: center; }
.hero-form-card .form-footnote a { text-decoration: underline; }
@media (max-width: 960px) {
  .hero-with-form { grid-template-columns: 1fr; gap: var(--space-8); }
  .hero-form-card { max-width: 560px; }
}
</style>
<aside class="hero-form-card" id="estimate-form">
  <h2><?php echo e($heroFormHeading); ?></h2>
  <p class="hero-form-tagline">No obligation. Response within 24 hours.</p>
    <form action="<?php echo e($formAction); ?>" method="POST" class="hero-form">
      <!-- Formsubmit.co directives -->
      <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_template" value="table">
      <input type="hidden" name="_subject" value="New estimate request from <?php echo e($_SERVER['HTTP_HOST'] ?? 'website'); ?>">
      <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
      <!-- Honeypot -->
      <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
      <!-- Tracking -->
      <input type="hidden" name="form_location" value="<?php echo e($heroFormLocation); ?>">
            <?php echo p1_attribution_fields($heroFormLocation); ?>
      <input type="hidden" name="consent_version" value="v2.1">
      <input type="hidden" name="consent_page" value="<?php echo e($_SERVER['REQUEST_URI'] ?? '/'); ?>">

      <div class="form-row">
        <label for="hero-name" class="sr-only" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">Full name</label>
        <input type="text" id="hero-name" name="name" placeholder="Full name" required>
      </div>
      <div class="form-row">
        <label for="hero-phone" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">Phone number</label>
        <input type="tel" id="hero-phone" name="phone" placeholder="Phone number" required>
      </div>
      <div class="form-row">
        <label for="hero-zip" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">ZIP code</label>
        <input type="text" id="hero-zip" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" inputmode="numeric" required>
      </div>
      <div class="form-row">
        <label for="hero-service" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);">Service needed</label>
        <select id="hero-service" name="service_requested" data-p1-dynamic>
          <option value="">What do you need?</option>
          <?php foreach ($services as $svc): ?>
          <option value="<?php echo e($svc['name']); ?>"<?php echo ($svc['name'] === $heroFormService) ? ' selected' : ''; ?>><?php echo e($svc['name']); ?></option>
          <?php endforeach; ?>
          <option value="Something else">Something else</option>
        </select>
      </div>
      <!-- spam shield: signed render timestamp + JS interaction signal -->
      <?php $__ft_ts = (string) time(); ?>
      <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
      <input type="hidden" name="_js" value="" class="js-shield-field">
      <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
      <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
      <?php } ?>
      <?php if (empty($GLOBALS['__p1_consent_css'])) { $GLOBALS['__p1_consent_css'] = 1; ?>
      <style>
      .p1-consent{margin:14px 0;text-align:left}
      .p1-consent-set{border:0;margin:0;padding:0}
      .p1-consent-legend{font-size:13px;font-weight:600;padding:0;margin-bottom:6px}
      .p1-consent-item{display:flex;gap:8px;align-items:flex-start;margin-bottom:8px;font-size:12px;line-height:1.5;cursor:pointer}
      .p1-consent-item input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
      .p1-consent-line{display:flex;gap:8px;align-items:flex-start;font-size:12px;line-height:1.45;cursor:pointer}
      .p1-consent-line input{margin:2px 0 0;flex:0 0 auto;width:16px;height:16px;cursor:pointer}
      .p1-consent a{text-decoration:underline}
      </style>
      <?php } ?>
      <!-- TCPA consent — terms_accepted is REQUIRED by the leads endpoint -->
      <div class="p1-consent">
        <label class="p1-consent-line">
          <input type="checkbox" name="terms_accepted" value="yes" required>
          <span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted about my request. *</span>
        </label>
      </div>
      <input type="hidden" name="_consent_version" value="v2.1">
      <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? ''); ?>">
      <button type="submit" class="btn btn-accent btn-block btn-lg">Get My Free Estimate</button>
      <p class="form-footnote">By submitting, you agree to our <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>.</p>
    </form>
</aside>
