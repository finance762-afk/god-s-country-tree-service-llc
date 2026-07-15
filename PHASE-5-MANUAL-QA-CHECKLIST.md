# PHASE 5 — Manual QA Checklist
# God's Country Tree Service LLC

Use this checklist for browser-based verification before deployment.

---

## 🔍 VISUAL VERIFICATION (Browser Required)

### Homepage (`/`)
- [ ] Hero image loads and displays correctly
- [ ] Title tag appears in browser tab: "Tree Service in DeLand, FL | God's Country Tree Service LLC"
- [ ] All service cards display with images
- [ ] Service card tints rotate (tint-1, tint-2, tint-3)
- [ ] Mobile: sticky CTA bar appears at bottom with 2-3 buttons
- [ ] Mobile: hamburger menu opens/closes smoothly
- [ ] Scroll reveals trigger on sections (fade-up animations)
- [ ] Logo shrinks on navbar scroll
- [ ] Cookie banner appears on first visit, dismisses on "Got it" click

### Sample Service Page (`/services/tree-removal/`)
- [ ] Title tag correct: "Tree Removal in DeLand, FL | God's Country Tree Service"
- [ ] Meta description visible in source (view-source or DevTools)
- [ ] H1 visible and unique: "Tree Removal in DeLand, FL..."
- [ ] All images have alt text (inspect in DevTools)
- [ ] FAQ section expands/collapses
- [ ] Related Services cards at bottom (3 cards, different from current page)
- [ ] Breadcrumb navigation works: Home > Services > Tree Removal

### Sample Area Page (`/service-area/deltona/`)
- [ ] Title tag correct: "Tree Service in Deltona, FL | God's Country Tree Service"
- [ ] H1 includes city name
- [ ] At least 3 local specifics mentioned in body copy (neighborhoods, landmarks, conditions)
- [ ] No city-swap template language (could apply to any city)

### Contact Page (`/contact/`)
- [ ] Form displays correctly
- [ ] THREE consent checkboxes visible:
  1. Email opt-in (optional)
  2. SMS opt-in (optional)
  3. Terms acceptance (required)
- [ ] SMS checkbox includes "Consent is not a condition of purchase"
- [ ] Form submits to Formsubmit.co (check form action in source)
- [ ] Hidden fields present: `consent_version`, `consent_page`, `form_location`
- [ ] Honeypot field hidden from view (`_honey`)

### Legal Pages
- [ ] `/privacy-policy/` loads without errors
- [ ] `/terms/` loads without errors
- [ ] `/cookie-policy/` loads without errors
- [ ] `/accessibility/` loads without errors
- [ ] All legal pages have breadcrumb: Home > [Page Name]
- [ ] "Last Updated" date appears near top
- [ ] No raw placeholders like `$companyName` or `[COMPANY]`

### Footer (All Pages)
- [ ] Footer legal row visible with links to:
  - Privacy Policy
  - Terms of Service
  - Cookie Policy
  - Accessibility
  - Do Not Sell or Share My Personal Information (links to `/privacy-policy/#ccpa-rights`)
  - Sitemap
- [ ] Entity block visible with company name, address, phone
- [ ] Phone number is clickable (`tel:` link)
- [ ] Email is clickable (`mailto:` link)
- [ ] "Get Directions" link works (opens in new tab)
- [ ] Page One Insights dofollow link present: "Web Design & Hosting by Page One Insights, LLC"
- [ ] Copyright year is current (2026)

---

## 🔗 LINK VALIDATION

### Internal Links
- [ ] All navbar links work (Home, Services, Service Area, About, Contact, FAQ)
- [ ] Services dropdown shows all 12 services
- [ ] All service card links go to correct pages
- [ ] Footer service links work
- [ ] Footer area links work
- [ ] Breadcrumb links navigate correctly

### External Links
- [ ] BBB link opens in new tab (if present)
- [ ] Google Business Profile link opens in new tab (if present)
- [ ] "Get Directions" link opens Google Maps in new tab
- [ ] Page One Insights link opens https://pageoneinsights.com in new tab

---

## 📱 MOBILE TESTING

### Responsive Design
- [ ] Site displays correctly on mobile (test at 375px width)
- [ ] Service cards stack single-column on mobile
- [ ] Forms are usable on mobile (inputs not cut off)
- [ ] Navbar collapses to hamburger menu
- [ ] Hamburger menu opens full-screen overlay
- [ ] Sticky CTA bar appears at bottom (above cookie banner if present)
- [ ] Sticky CTA bar has 2-3 buttons (Call Now, Text Us if SMS enabled, Free Estimate)

### Touch Targets
- [ ] All buttons are easily tappable (min 44px touch target)
- [ ] Phone number in sticky bar is tappable
- [ ] Menu items in mobile nav are tappable
- [ ] Form inputs are tappable and focusable

---

## 🔍 SCHEMA VALIDATION

### Online Validators
1. **Rich Results Test** (Google)
   - URL: https://search.google.com/test/rich-results
   - Test: Homepage (`/`)
   - Expected: LocalBusiness schema detected
   - Test: Sample service page (`/services/tree-removal/`)
   - Expected: Service + FAQPage schemas detected

2. **Schema Markup Validator**
   - URL: https://validator.schema.org/
   - Test: Homepage
   - Expected: 0 errors, LocalBusiness + FAQPage
   - Test: Privacy Policy page
   - Expected: 0 errors, WebPage + BreadcrumbList (no Service/FAQ)

---

## 🔧 TECHNICAL VALIDATION

### Sitemap Access
- [ ] Navigate to `/sitemap.xml`
- [ ] XML displays correctly (not 404)
- [ ] Verify 29 URLs present
- [ ] Legal pages listed: `/privacy-policy/`, `/terms/`, `/cookie-policy/`, `/accessibility/`

### Robots.txt Access
- [ ] Navigate to `/robots.txt`
- [ ] File displays correctly (not 404)
- [ ] AI crawlers allowed (GPTBot, ClaudeBot, PerplexityBot)
- [ ] Sitemap URL listed

### llms.txt Access
- [ ] Navigate to `/llms.txt`
- [ ] File displays correctly (not 404)
- [ ] Business information readable

### Form Submission Test
- [ ] Fill out contact form with test data
- [ ] Check all 3 consent boxes as appropriate
- [ ] Submit form
- [ ] Redirects to `/thank-you` page
- [ ] Check client email for submission (may require Formsubmit activation first)
- [ ] Check CustomerService@pageoneinsights.com for CC copy
- [ ] First submission triggers Formsubmit.co activation email — client must click to activate

---

## 🎨 CSS & ANIMATIONS

### Above-Fold Content
- [ ] Hero section visible immediately (no opacity:0 before JS loads)
- [ ] Trust badges visible immediately
- [ ] NO `data-animate` or `reveal-*` classes on hero content

### Scroll Animations
- [ ] Sections fade up on scroll (IntersectionObserver working)
- [ ] Stat counters animate when scrolled into view (if present)
- [ ] No console errors related to animations

### Accessibility
- [ ] Skip-to-content link appears on Tab key press
- [ ] Skip-to-content link jumps to `#main-content`
- [ ] All interactive elements have visible focus outline (2px solid accent color)
- [ ] Navbar has `aria-current="page"` on active link

---

## 📊 PERFORMANCE CHECK

### Lighthouse Audit (Chrome DevTools)
1. Open Chrome DevTools (F12)
2. Go to "Lighthouse" tab
3. Run audit with:
   - Performance: ✅
   - Accessibility: ✅
   - Best Practices: ✅
   - SEO: ✅
4. Expected Scores:
   - Performance: 90+ (green)
   - Accessibility: 90+ (green)
   - Best Practices: 90+ (green)
   - SEO: 90+ (green)

### Cache-Busting Verification
- [ ] Stylesheet loads with `?v=` query parameter
- [ ] After CSS change, increment version in head.php
- [ ] Hard refresh (`Ctrl+Shift+R`) shows new styles
- [ ] No cached styles on Hostinger after version increment

---

## ✅ PRE-DEPLOY FINAL CHECKS

- [ ] All pages load without PHP errors
- [ ] No console errors in browser DevTools
- [ ] No 404 errors for images or assets
- [ ] Phone number appears consistently: (386) 898-4040
- [ ] Address appears consistently: DeLand, FL 32720
- [ ] Copyright year is 2026 (dynamic via PHP)
- [ ] All forms submit successfully
- [ ] Cookie banner dismisses and doesn't reappear on refresh (localStorage working)

---

## 🚀 POST-DEPLOY CHECKLIST

- [ ] Submit sitemap to Google Search Console
- [ ] Request indexing for homepage + 2-3 key service pages
- [ ] Submit test form and activate Formsubmit.co
- [ ] Verify GA4 tracking (if tracking ID updated)
- [ ] Verify GSC verification token (if updated)
- [ ] Test on real mobile device (iOS and Android)
- [ ] Hard refresh all pages after deploy (`Ctrl+Shift+R`)
- [ ] Run Lighthouse audit on live site
- [ ] Check AI bot access if Cloudflare-fronted (`curl -A "GPTBot" -I https://domain.com`)

---

**Generated:** July 15, 2026  
**Build Tier:** Premium  
**Standards:** CLAUDE.md v6.1.1 + V2
