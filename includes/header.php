<?php
/**
 * ============================================================
 * header.php — Site header + navigation
 * God's Country Tree Service LLC — DeLand, FL
 * Expects: $currentPage (set by page), $services, $phone (config)
 * ============================================================
 */
?>
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container">

      <a href="/" class="navbar-logo" aria-label="<?php echo e($siteName); ?> — Home">
        <img src="/assets/images/logo-v2.webp" class="navbar-logo-img" width="700" height="370" alt="<?php echo e($siteName); ?> — tree service in Central-East Florida" fetchpriority="high">
      </a>

      <ul class="navbar-links">
        <li><a href="/"<?php echo isActivePage('home', $currentPage); ?>>Home</a></li>
        <li class="has-dropdown">
          <a href="/services/"<?php echo isActivePage('services', $currentPage); ?>>Services <span class="caret" aria-hidden="true"></span></a>
          <ul class="dropdown" role="menu" style="display:none" data-p1-dynamic>
            <?php foreach ($services as $svc): ?>
            <li role="none"><a role="menuitem" href="/services/<?php echo e($svc['slug']); ?>/"><?php echo e($svc['name']); ?></a></li>
            <?php endforeach; ?>
            <li role="none" class="dropdown-all"><a role="menuitem" href="/services/">View All Services &rarr;</a></li>
          </ul>
        </li>
        <li><a href="/service-area/"<?php echo isActivePage('service-area', $currentPage); ?>>Service Area</a></li>
        <li><a href="/about/"<?php echo isActivePage('about', $currentPage); ?>>About</a></li>
        <li><a href="/contact/"<?php echo isActivePage('contact', $currentPage); ?>>Contact</a></li>
      </ul>

      <div class="navbar-cta">
        <?php if (!empty($phone)): ?>
        <a href="<?php echo e(phoneHref($phone)); ?>" class="navbar-phone">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <?php echo e(formatPhone($phone)); ?>
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn btn-accent">Free Estimate</a>
      </div>

      <button class="hamburger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

    </div>
  </nav>
</header>

<nav class="mobile-menu" id="mobile-menu" aria-label="Mobile navigation">
  <ul class="mobile-menu-primary">
    <li><a href="/"<?php echo isActivePage('home', $currentPage); ?>>Home</a></li>
    <li>
      <a href="/services/"<?php echo isActivePage('services', $currentPage); ?>>Services</a>
      <ul class="mobile-menu-services" data-p1-dynamic>
        <?php foreach ($services as $svc): ?>
        <li><a href="/services/<?php echo e($svc['slug']); ?>/"><?php echo e($svc['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li><a href="/service-area/"<?php echo isActivePage('service-area', $currentPage); ?>>Service Area</a></li>
    <li><a href="/about/"<?php echo isActivePage('about', $currentPage); ?>>About</a></li>
    <li><a href="/contact/"<?php echo isActivePage('contact', $currentPage); ?>>Contact</a></li>
  </ul>
  <div class="mobile-menu-cta">
    <?php if (!empty($phone)): ?>
    <a href="<?php echo e(phoneHref($phone)); ?>" class="btn btn-outline-white">Call <?php echo e(formatPhone($phone)); ?></a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
  </div>
</nav>

<main id="main-content">
