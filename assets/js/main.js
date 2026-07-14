/* ============================================
   Page One Insights — Main JavaScript
   God's Country Tree Service LLC
   ============================================ */

/* Fail-open animation gate: reveal styles only apply when JS runs.
   Must be the first statement — if this file never loads, no element
   is ever hidden by the reveal system. */
document.documentElement.classList.add('js-anim');

document.addEventListener('DOMContentLoaded', function() {

  /* === Sticky Header / Scroll Class Toggle === */
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 60) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }, { passive: true });
  }

  /* === Mobile Hamburger + Full-Screen Menu === */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.getElementById('mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      const isOpen = mobileMenu.classList.toggle('active');
      hamburger.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', isOpen.toString());
      hamburger.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    // Close menu when a link is clicked
    mobileMenu.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.setAttribute('aria-label', 'Open menu');
        document.body.style.overflow = '';
      });
    });
    // Close on Escape
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        mobileMenu.classList.remove('active');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        hamburger.focus();
      }
    });
  }

  /* === Smooth Scroll for Anchor Links === */
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var targetId = this.getAttribute('href').substring(1);
      var target = document.getElementById(targetId);
      if (target) {
        e.preventDefault();
        var headerHeight = header ? header.offsetHeight : 0;
        var top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  /* === IntersectionObserver for data-animate fade-in === */
  var animateElements = document.querySelectorAll('[data-animate]');
  if (animateElements.length > 0 && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    animateElements.forEach(function(el) { observer.observe(el); });
  }
  /* Safety net: 2s after DOM ready, force-reveal anything still hidden */
  setTimeout(function() {
    document.querySelectorAll('[data-animate]:not(.animated)').forEach(function(el) {
      el.classList.add('animated');
    });
  }, 2000);

  /* === Counter Animation for data-counter elements === */
  var counters = document.querySelectorAll('[data-counter]');
  if (counters.length > 0 && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.getAttribute('data-counter'), 10);
          var suffix = el.getAttribute('data-suffix') || '';
          var prefix = el.getAttribute('data-prefix') || '';
          var duration = 2000;
          var startTime = null;

          function animate(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
            var current = Math.floor(eased * target);
            el.textContent = prefix + current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(animate);
            else el.textContent = prefix + target.toLocaleString() + suffix;
          }
          requestAnimationFrame(animate);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach(function(el) { counterObserver.observe(el); });
  }

  /* === Back to Top Button === */
  var backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 600) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    }, { passive: true });
    backToTop.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* === Cookie Banner === */
  var cookieBanner = document.getElementById('cookie-banner');
  var cookieDismiss = document.getElementById('cookie-dismiss');
  if (cookieBanner && cookieDismiss) {
    try {
      if (!localStorage.getItem('p1CookieConsent')) {
        cookieBanner.classList.add('visible');
      }
    } catch (err) {
      cookieBanner.classList.add('visible');
    }
    cookieDismiss.addEventListener('click', function() {
      cookieBanner.classList.remove('visible');
      try { localStorage.setItem('p1CookieConsent', 'dismissed'); } catch (err) { /* private mode */ }
    });
  }

  /* === Swiper Carousel Init for .reviews-swiper === */
  if (typeof Swiper !== 'undefined') {
    var reviewsSwiper = document.querySelector('.reviews-swiper');
    if (reviewsSwiper) {
      new Swiper('.reviews-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 }
        }
      });
    }
  }

});
