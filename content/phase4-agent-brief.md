# Phase 4 Page-Builder Brief (read fully before writing code)

You are building ONE premium service page for God's Country Tree Service LLC (DeLand, FL).
Working directory: /home/calvin/client-sites/god-s-country-tree-service-llc

## Read these files IN ORDER before writing anything
1. `content/phase4-spec.md` — the binding contract: shared structure + YOUR page's spec entry
   (title, meta, H1, REQUIRED H2s verbatim, angle, layout assignment).
2. `content/image-manifest.md` — your page's hero + body photo allocation and suggested alts.
   Use ONLY your allocated photos, by exact filename. Full URL = `$imgBase . '<filename>'`.
3. `services/tree-removal/index.php` — the EXEMPLAR. Match its PHP structure exactly
   (require block, page-setup block, schema assembly incl. the speakable WebPage block,
   `require_once` of `includes/service-cards.php`, `renderServiceCards()` for related cards,
   Last Updated stamp, footer include). Do NOT copy its prose or its CSS wholesale.
4. `includes/config.php` + `includes/functions.php` + `includes/service-cards.php` — available
   variables/helpers: `$siteName, $siteUrl, $services, $yearsInBusiness, $yearEstablished,
   $integrations (gbp_url, bbb_url), e(), generateServiceSchema(), generateFAQSchema(),
   generateBreadcrumbSchema(), renderServiceCards()`.
5. `references/design-system.md` — Part C sections for YOUR assigned techniques only.
6. `assets/css/framework.css` `:root` block — the token names you must use.

## Hard rules (any miss = QA fail)
- File: `services/{your-slug}/index.php`. First lines = require config.php + functions.php
  exactly like the exemplar. `$currentPage = 'services'`. Canonical = `$siteUrl . '/services/{slug}/'`
  (trailing slash).
- Title + meta + H1 + required H2s VERBATIM from the spec. Verify title ≤60 and meta 140-160
  with `echo -n "..." | wc -c`.
- EVERY `<h2>` phrased as a question, each immediately followed by `<p class="answer-block">`
  (40-60 words, direct answer first). Closing-CTA heading must also be a question.
- Hero: `<p class="hero-answer">` 40-60 words containing the identity sentence ("licensed and
  insured tree service based in DeLand, Florida, serving ... Volusia County"). Trade noun
  "tree service" within the first 100 words of the page body.
- FAQ: 6-8 conversational Q&As in `$faqs`, answers 40-80 words with `class="faq-answer"` on the
  `<p>`; rendered with the `faq-grid`/`faq-item`/`faq-icon` framework classes.
- Schema: `generateServiceSchema($svc)` + `generateFAQSchema($faqs)` + breadcrumbs
  (Home / Services / {Name}) + the speakable WebPage block — same assembly as exemplar.
- Related services: `renderServiceCards([...3 assigned slugs...], $serviceCardData)` under a
  question H2 + answer-block, inside a section (see exemplar's "RELATED SERVICES" section).
- Inline `<style>`: **≥400 lines**, ≥6 distinct Part C techniques including C1.4 page hero
  (photo bg + gradient `::before` + noise `::after`) and ≥2 DIFFERENT svg divider shapes.
  Prefix your custom classes with a short page prefix (e.g. `.trm-`, `.prn-`) — do NOT copy the
  exemplar's CSS block; your layout must follow YOUR page's assigned techniques from the spec.
  Small shared idiom blocks (`.section-title`, `.eyebrow-label`, `.svg-divider`, reveal-delay
  rules, `.numbered-section` watermark, `.review-badge`) may be adapted from the exemplar.
- ALL colors/shadows/transitions/spacing via `var()` tokens or `color-mix()` on tokens.
  No hex codes, no rgba() literals, no hardcoded box-shadows. (Small px dimensions for icons/
  borders are fine.) `text-wrap: balance` on headings.
- Copy: 800+ words, written fresh for THIS service (do not echo the exemplar's or other pages'
  sentences). 8-12 natural "DeLand" mentions; the literal phrase "{service noun} near me in
  DeLand" once; 3+ real local signals (hurricane season, live oaks/slash pines/palms, sandy
  Central Florida soil, Volusia County, Deltona/Orange City/DeBary/Lake Helen, pool screen
  enclosures). NEVER invent testimonials, review counts, certifications, or facts.
  Banned phrases: "quality service/workmanship", "trusted professionals", "your satisfaction is
  our priority", "we go above and beyond", "one-stop shop", "second to none".
- Phone and email are EMPTY in intake — never print one (the 407 number visible in photos is
  NOT confirmed intake data). CTAs link to `/#estimate-form` and `/contact/`.
- Images: `alt` from manifest, `width`/`height`, `loading="lazy"`. Hero image preloaded via
  `$heroImagePreload`. Portrait hero photos: `background-position: center 30%` or similar crop.
- `data-animate` only BELOW the fold — never inside the hero. Never two `class` attributes on
  one element. Escape all dynamic output with `e()`.
- "Last Updated: <?php echo date('F Y'); ?>" stamp before the footer include (see exemplar).

## Verify before finishing (run these, fix failures)
```bash
php -l services/{slug}/index.php
awk '/<style>/,/<\/style>/' services/{slug}/index.php | wc -l          # ≥400
grep -oE "<h2[^>]*>[^<]*" services/{slug}/index.php | sed 's/<[^>]*>//' # every line ends with ?
grep -c 'answer-block' services/{slug}/index.php                        # ≥ number of H2s
grep -ciE 'quality (service|workmanship)|trusted professionals|satisfaction is our|above and beyond|one-stop|second to none' services/{slug}/index.php  # 0
grep -cE '#[0-9a-fA-F]{3,6}\b|rgba?\(' services/{slug}/index.php        # 0 in your <style> (svg data-URI noise filter is exempt)
curl -s -o /dev/null -w "%{http_code}" "https://preview-god-s-country-tree-service-llc.pageone.cloud/services/{slug}/"  # 200
```

## Final message format (keep it short)
Report: file path; CSS line count; H2 list (verbatim); techniques used; word count; verify
command results (pass/fail each); any deviation from spec and why.
