
</main>

<footer class="site-footer">
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Col 1: Brand -->
        <div class="footer-col">
          <a href="/" class="footer-logo navbar-logo">
            <span class="logo-mark" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m17 14 3 3.3a1 1 0 0 1-.7 1.7H4.7a1 1 0 0 1-.7-1.7L7 14h-.3a1 1 0 0 1-.7-1.7L9 9h-.2A1 1 0 0 1 8 7.3L12 3l4 4.3a1 1 0 0 1-.8 1.7H15l3 3.3a1 1 0 0 1-.7 1.7H17Z"/><path d="M12 22v-3"/></svg>
            </span>
            <span class="logo-text">
              <strong>God's Country</strong>
              <small>Tree Service LLC</small>
            </span>
          </a>
          <p class="footer-tagline"><?php echo e($tagline); ?></p>
          <p>Tree removal, trimming, pruning, and 24-hour storm cleanup for homes, businesses, and HOA communities in DeLand and across Volusia County, Florida — since <?php echo e($yearEstablished); ?>.</p>
          <div class="footer-trust">
            <span class="trust-badge">Licensed &amp; Insured</span>
            <span class="trust-badge"><?php echo e($yearsInBusiness); ?>+ Years in Business</span>
            <span class="trust-badge">Free Estimates</span>
          </div>
        </div>

        <!-- Col 2: Services -->
        <div class="footer-col">
          <h4>Tree Services</h4>
          <ul data-p1-dynamic>
            <?php foreach (array_slice($services, 0, 6) as $svc): ?>
            <li><a href="/services/<?php echo e($svc['slug']); ?>/"><?php echo e($svc['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Col 3: More Services + Areas -->
        <div class="footer-col">
          <h4>More Services</h4>
          <ul data-p1-dynamic>
            <?php foreach (array_slice($services, 6) as $svc): ?>
            <li><a href="/services/<?php echo e($svc['slug']); ?>/"><?php echo e($svc['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
          <ul>
            <li><a href="/services/">View All Services &rarr;</a></li>
            <li><a href="/service-area/">View All Areas &rarr;</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact -->
        <div class="footer-col">
          <h4>Contact Us</h4>
          <?php if (!empty($phone)): ?>
          <div class="contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <a href="<?php echo e(phoneHref($phone)); ?>"><?php echo e(formatPhone($phone)); ?></a>
          </div>
          <?php endif; ?>
          <?php if (!empty($email)): ?>
          <div class="contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
          </div>
          <?php endif; ?>
          <div class="contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
            <span><?php echo e($address['city']); ?>, <?php echo e($address['state']); ?> <?php echo e($address['zip']); ?><br>
            <a href="<?php echo e($integrations['directions_url']); ?>" target="_blank" rel="noopener">Get Directions</a></span>
          </div>
          <div class="contact-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Mon&ndash;Fri: 7 AM&ndash;10 PM<br>Sat: 8 AM&ndash;9 PM<br>Sun: Closed</span>
          </div>
          <a href="/contact/" class="btn btn-accent btn-sm">Get a Free Estimate</a>
        </div>

      </div>

      <!-- AEO Entity Block -->
      <div class="footer-entity" itemscope itemtype="https://schema.org/LocalBusiness">
        <meta itemprop="name" content="<?php echo e($siteName); ?>">
        <meta itemprop="url" content="<?php echo e($siteUrl); ?>/">
        <?php if (!empty($phone)): ?><meta itemprop="telephone" content="<?php echo e($phone); ?>"><?php endif; ?>
        <p>
          <strong><?php echo e($siteName); ?></strong> is a tree service company based in
          <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span itemprop="addressLocality">DeLand</span>, <span itemprop="addressRegion">Florida</span> <span itemprop="postalCode"><?php echo e($address['zip']); ?></span></span>,
          serving homeowners, businesses, and HOA communities across Volusia County. With <?php echo e($yearsInBusiness); ?>+ years in business since <?php echo e($yearEstablished); ?>, the company provides tree removal, tree trimming, tree pruning, crown reduction, dead and hazardous tree removal, 24-hour emergency storm cleanup, tree planting, and certified arborist services &mdash; plus land clearing and debris work.
        </p>
      </div>

      <!-- Footer Legal Row -->
      <div class="footer-legal-row">
        <a href="/privacy-policy/">Privacy Policy</a>
        <span class="divider">|</span>
        <a href="/terms/">Terms of Service</a>
        <span class="divider">|</span>
        <a href="/cookie-policy/">Cookie Policy</a>
        <span class="divider">|</span>
        <a href="/accessibility/">Accessibility</a>
        <span class="divider">|</span>
        <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
        <span class="divider">|</span>
        <a href="/sitemap.xml">Sitemap</a>
      </div>

      <div class="footer-bottom-bar">
        <p>&copy; <?php echo date('Y'); ?> <?php echo e($siteName); ?>. All rights reserved.</p>
        <p class="footer-credit"><a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a></p>
      </div>

    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" type="button" aria-label="Back to top">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m18 15-6-6-6 6"/></svg>
</button>

<!-- Cookie Banner -->
<div class="cookie-banner" id="cookie-banner" role="region" aria-label="Cookie notice">
  <p>We use cookies for basic site analytics and to improve your experience. See our <a href="/cookie-policy/">Cookie Policy</a> for details.</p>
  <button class="cookie-banner__dismiss" type="button" id="cookie-dismiss">Got it</button>
</div>

<!-- Mobile Floating CTA -->
<div class="mobile-cta-bar">
  <?php if (!empty($phone)): ?>
  <a href="<?php echo e(phoneHref($phone)); ?>" class="btn btn-outline-white btn-sm">Call Now</a>
  <?php if (!empty($integrations['accepts_sms'])): ?>
  <a href="sms:<?php echo e(preg_replace('/^tel:/', '', phoneHref($phone))); ?>" class="btn btn-outline-white btn-sm">Text Us</a>
  <?php endif; ?>
  <?php endif; ?>
  <a href="/contact/" class="btn btn-accent btn-sm">Free Estimate</a>
</div>

<!-- Scripts: Lucide loads first (synchronous), then site scripts (defer) -->
<script>
</script>
<?php if (!empty($useSwiper)): ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>
<?php if (!empty($useTilt)): ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js" defer></script>
<?php endif; ?>
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

</body>
</html>
