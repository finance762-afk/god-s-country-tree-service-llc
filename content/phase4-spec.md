# Phase 4 Spec — Service Pages
# God's Country Tree Service LLC — DeLand, FL (premium tier)
# This file is the binding contract for every /services/ page. Page builders follow it exactly.

## Shared structure (EVERY service page)

File location: `/services/{slug}/index.php` (directory + index.php — NEVER flat .php).

```php
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// page setup: $currentPage = 'services';
// $pageTitle, $pageDescription (from this spec, verbatim)
// $canonicalUrl = $siteUrl . '/services/{slug}/';   // trailing slash — matches nav links
// $imgBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
// $heroImage / $heroImagePreload / $ogImage from image-manifest.md allocation
// $faqs = [...];  6-8 entries per spec below
// $pageSchema = generateServiceSchema($svc) . generateFAQSchema($faqs)
//             . generateBreadcrumbSchema([Home, Services, {Name}])
//             . speakable WebPage block (see exemplar /services/tree-removal/index.php)
// then include head.php, header.php, content, footer.php
?>
```

Content skeleton — editorial 8-section structure (interactive-patterns.md §2.8), adapted per page:

1. **PAGE HERO (C1.4)** — reduced height (~52-60vh), real photo bg + gradient + noise overlays,
   breadcrumb (Home / Services / {Name}), eyebrow, H1 from spec, `<p class="hero-answer">`
   (40-60 words: what/where/for whom + identity sentence "licensed and insured tree service
   based in DeLand, Florida, serving Volusia County"), 2 CTAs (`/#estimate-form` accent +
   `/contact/` outline), trust row. NO data-animate in hero (above fold).
2. **PROBLEM STATEMENT** — pull-quote large text + 3-4 telltale signs in bento cards.
3. **EXPERT POSITIONING** — asymmetric layout, large stat + 2-3 differentiators w/ evidence
   (12+ years, licensed & insured, certified arborist expertise, one-crew tree+bobcat).
4. **SERVICE BREAKDOWN** — what's included + process steps (per-page treatment varies).
5. **PROOF** — 2-3 real body photos from manifest + link badges to Google reviews
   ($integrations['gbp_url']) and BBB ($integrations['bbb_url']). NO fabricated testimonials,
   NO fabricated review counts/ratings.
6. **COMPARISON** — "Storm-chasers vs God's Country" (or page-appropriate framing), two-column,
   4-6 points, accent highlights our column.
7. **FAQ** — 6-8 conversational Q&As, `faq-grid`/`faq-item` pattern, answers 40-80 words.
8. **FINAL CTA + RELATED SERVICES** — closing CTA (urgency-appropriate) and the required
   Related Services grid: exactly 3 OTHER services, `services-grid` + `service-card-with-image`
   pattern (image, icon, h3, desc, EXACTLY 3 bullets, `service-card__cta`), tint rotation
   1→2→3, different Lucide icon per adjacent card. Section H2 (question):
   "What other tree services do DeLand property owners pair with {short name}?"
   followed by a `<p class="answer-block">`.

Non-negotiables (auto-fail if missed):
- EVERY H2 is a question. Each H2 followed immediately by `<p class="answer-block">` 40-60 words.
- Hero has `<p class="hero-answer">`. FAQ answers carry class `faq-answer` on the `<p>`.
- ≥400 lines page-specific inline `<style>` (premium tier), ≥6 techniques from design-system.md
  Part C, all values `var()` tokens or `color-mix()` on tokens — zero hardcoded hex/px shadows.
- At least 2 DIFFERENT SVG divider styles (C3) per page; no two consecutive sections with the
  same background treatment; one signature section (C7) not reused verbatim from another page.
- `text-wrap: balance` on headings. `data-animate` reveals only below the fold.
- 800+ words body copy, unique to this page — copy reuse between service pages fails QA.
- Trade noun "tree service" in first 100 words. "[service] near me in DeLand" phrase ≥1×.
  8-12 natural mentions of DeLand. 3+ real local signals (hurricane season, sandy Central FL
  soil, live oaks/laurel oaks/pines/palms, Volusia County, Deltona/Orange City/DeBary/Lake Helen,
  historic downtown DeLand, Stetson University area — use what fits, never invent specifics).
- Banned: "quality service/workmanship", "trusted professionals", "your satisfaction is our
  priority", "we go above and beyond", "one-stop shop", "second to none", "contact us today"
  as a heading. No "Why Choose Us"/"Our Services" headings.
- Phone/email are EMPTY in config — never print a phone number or email. Use the existing
  conditional pattern `<?php if (!empty($phone)): ?>` if referencing phone at all.
  CTAs: `/#estimate-form`, `/contact/`, `/services/...`.
- Images: remote `$imgBase` URLs from content/image-manifest.md ONLY, with the manifest's
  suggested alt, `width`/`height`, `loading="lazy"` (hero bg is CSS + preloaded via
  `$heroImagePreload`). Never a gradient placeholder or empty image slot.
- "Last Updated: <?php echo date('F Y'); ?>" near the end of the page (styled small).
- Escape all output through `e()`.

## Page specs

Titles ≤60 chars. Metas 140-160 chars (verify: `echo -n "..." | wc -c`). H1s and REQUIRED H2s
verbatim — they are keyword-map contract headings. Add 2-3 more question H2s of your own per page.

### 1. /services/tree-removal/ — EXEMPLAR (built first; read it before building any other page)
- Title: `Tree Removal in DeLand, FL | God's Country Tree Service`
- Meta: `Tree removal in DeLand, FL by a licensed & insured local tree service — 12+ years, controlled takedowns, debris hauled. Get your free estimate in 24 hours.`
- H1: `Tree Removal in DeLand, FL — Safe Takedowns by a Local Tree Service Crew`
- Required H2s:
  - `How much does tree removal cost in DeLand, FL?`
  - `What does professional tree removal include at God's Country?`
  - `Can you handle large tree removal near houses and power lines?`
  - `Searching for tree removal near me in DeLand?`
  - `Do you offer tree removal in Deltona, FL and nearby cities?`
- Angle: controlled rigging/section takedowns, live oaks over roofs, all-in quotes (debris + stump).
- Layout: pull-quote problem statement (C7.3), bento warning-sign cards, sticky process timeline
  (§2.6 pattern 1), comparison table, drop cap (C5.4), diagonal + torn dividers.

### 2. /services/tree-trimming-services/
- Title: `Tree Trimming in DeLand, FL | God's Country Tree Service`
- Meta: `Tree trimming in DeLand, FL from a licensed & insured tree service crew — seasonal schedules, all tree sizes, 12+ years local. Request a free estimate today.`
- H1: `Tree Trimming Services in DeLand, FL — Year-Round Care from a Local Tree Service Crew`
- Required H2s:
  - `How much does tree trimming cost in DeLand, FL?`
  - `When is the best season for tree trimming in Central Florida?` (targets: seasonal tree trimming)
  - `Searching for tree trimming near me in DeLand?`
  - `What makes professional tree trimming different from DIY cutting?`
- Angle: hurricane-season readiness, oak canopy health, clearance from roofs/lines, curb appeal.
- Layout: staggered alternating image/content cards (C7.4) for trimming types, seasonal calendar
  strip as signature, curved wave + parallelogram dividers, framed images (C11.1).

### 3. /services/tree-pruning-services/
- Title: `Tree Pruning in DeLand, FL | God's Country Tree Service`
- Meta: `Tree pruning in DeLand, FL with certified arborist expertise — structural, deadwood & thinning cuts, licensed & insured. Get a free pruning estimate today.`
- H1: `Tree Pruning Services in DeLand, FL — Certified Arborist Cuts from a Local Tree Service`
- Required H2s:
  - `How much do tree pruning services cost in DeLand, FL?`
  - `What is certified arborist pruning and why does it matter?`
  - `What's the difference between professional pruning and tree trimming?`
  - `How often should DeLand trees be pruned?`
- Angle: pruning as tree health science — structure, deadwood, thinning; trimming vs pruning distinction.
- Layout: alternating timeline (C7.1) for cut types, drop cap (C5.4), duotone image treatment
  (C4.3), double-wave + diagonal dividers.

### 4. /services/crown-reduction-shaping/
- Title: `Crown Reduction in DeLand, FL | God's Country Tree Service`
- Meta: `Crown reduction in DeLand, FL by a licensed tree service — safe weight reduction and shaping, never topping. 12+ years local. Book your free estimate today.`
- H1: `Crown Reduction & Shaping in DeLand, FL — Storm-Smart Tree Service, Never Topping`
- Required H2s:
  - `How much does crown reduction cost in DeLand, FL?`
  - `What's the difference between crown reduction and topping a tree?` (targets: tree crown work)
  - `How does crown thinning reduce storm risk in Florida?`
  - `Can tree shaping fix an overgrown or lopsided canopy?`
- Angle: weight off storm-loaded canopies, light penetration, anti-topping stance (topping kills oaks).
- Layout: centerpiece comparison "Crown reduction vs topping", overlay content card on image
  edge (C11.3), layered reveal cards for canopy zones, stacked-parallelogram + wave dividers.

### 5. /services/dead-hazardous-tree-removal/
- Title: `Dead Tree Removal DeLand, FL | God's Country Tree Service`
- Meta: `Dead tree removal in DeLand, FL — licensed & insured hazardous tree specialists, safe extraction near homes & lines. Free estimates within 24 hours.`
- H1: `Dead & Hazardous Tree Removal in DeLand, FL — the Tree Service Call Not to Put Off`
- Required H2s:
  - `How do you know a tree is dead or dangerous in DeLand, FL?` (targets: dead tree removal deland)
  - `How much does hazardous tree removal cost?`
  - `What makes dangerous tree removal different from standard takedowns?`
  - `What tree removal services are included with a hazardous removal?`
- Angle: risk signs (fungus, dieback, lean, hollowing), liability before storms, insurance documentation.
- Layout: numbered warning-sign bento (C5.1 watermark digits), big-stat expert positioning,
  glassmorphism cards on dark section (C6.4), torn-edge + diagonal dividers.

### 6. /services/emergency-tree-service-storm-cleanup/
- Title: `24/7 Emergency Tree Service in DeLand, FL | God's Country`
- Meta: `24/7 emergency tree service in DeLand, FL — storm cleanup, fallen tree hazards & same-day response from a licensed & insured local crew. Request help now.`
- H1: `Emergency Tree Service & Storm Cleanup in DeLand, FL — Answered 24/7`
- Required H2s:
  - `Who answers a 24-hour tree service call in DeLand?`
  - `How much does storm cleanup cost in DeLand, FL?`
  - `What should you do right after storm damage to a tree?` (targets: storm damage removal)
  - `How fast can your emergency tree service get to me?`
- Angle: hurricane season urgency, tree-on-roof triage, local crew vs storm-chasers, safe standby.
- Layout: dark urgent hero variant, 24/7 stat band with dividers (C6.3), storm-response
  `<details>` step module (§2.9.6), radial-glow CTA (C9.2), speed-to-CTA emphasis (shorter page OK
  but still ≥800 words and all required sections).

### 7. /services/fallen-tree-removal-cleanup/
- Title: `Fallen Tree Removal DeLand, FL | God's Country Tree Service`
- Meta: `Fallen tree removal in DeLand, FL — rapid cleanup, debris hauling & site restoration by a licensed & insured tree service. Free estimates within 24 hours.`
- H1: `Fallen Tree Removal & Cleanup in DeLand, FL — Rapid Tree Service Response`
- Required H2s:
  - `How much does fallen tree removal cost in DeLand, FL?`
  - `What does fallen tree cleanup include?`
  - `How does tree debris removal work after a big blow-down?`
  - `Is a fallen tree an emergency or can it wait?`
- Angle: grapple-loader capability, full site restoration, what's safe to touch vs not.
- Layout: response timeline (C7.1 variant), paired before/after-style photo composition
  (static side-by-side, no JS), gradient CTA banner (C9.1), wave + torn dividers.

### 8. /services/tree-planting-shrub-installation/
- Title: `Tree Planting in DeLand, FL | God's Country Tree Service`
- Meta: `Tree planting in DeLand, FL — Florida native trees & shrubs installed by a licensed local tree service, 12+ years. Plan your planting with a free estimate.`
- H1: `Tree Planting & Shrub Installation in DeLand, FL — Planted Right by a Local Tree Service`
- Required H2s:
  - `How much does tree planting cost in DeLand, FL?`
  - `What's included in professional shrub installation?`
  - `Which trees grow best in DeLand's sandy Central Florida soil?` (targets: residential tree planting)
  - `Do you handle landscape planting services for businesses and HOAs?`
- Angle: right tree/right place, Florida natives (live oak, magnolia, crape myrtle, palms),
  sandy soil prep, establishment watering.
- Layout: warm cream section palette, staggered planting-steps layout (C7.4), species cards,
  soft polaroid-style photo framing (§2.7.5, token values), curved + organic dividers.

### 9. /services/residential-tree-services/
- Title: `Residential Tree Service in DeLand, FL | God's Country`
- Meta: `Residential tree service in DeLand, FL — trimming, removal & year-round care for homeowners from one licensed & insured local crew. Get a free estimate today.`
- H1: `Residential Tree Services in DeLand, FL — One Tree Service Crew for Your Whole Yard`
- Required H2s:
  - `What does a residential tree service visit look like?`
  - `How much does home tree care cost in DeLand, FL?`
  - `Do you handle residential tree removal as well as trimming?`
  - `How does year-round property maintenance protect your trees?`
- Angle: hub page — one crew for every yard job; links naturally to trimming, removal, pruning pages.
- Layout: asymmetric featured grid variant (C6.1) of homeowner scenarios, full-bleed photo +
  stat overlay signature (C7.2), diagonal + double-wave dividers.

### 10. /services/commercial-hoa-tree-services/
- Title: `Commercial & HOA Tree Service in DeLand, FL | God's Country`
- Meta: `Commercial & HOA tree service in DeLand, FL — scheduled maintenance, liability-conscious crews, licensed & insured. Request a property assessment today.`
- H1: `Commercial & HOA Tree Services in DeLand, FL — Tree Service That Keeps Properties Covered`
- Required H2s:
  - `What does commercial tree service include for DeLand properties?`
  - `How do HOA tree services keep communities compliant and safe?`
  - `Why put business tree care on a maintenance schedule?`
  - `How does property tree maintenance reduce liability?`
- Angle: property managers/HOA boards, documented insurance, scheduled contracts, minimal disruption.
- Layout: stats band (C6.3), comparison "reactive vs scheduled maintenance", glass cards (C6.4),
  parallelogram + wave dividers, radial-glow closing (C9.2).

### 11. /services/tree-maintenance-care/
- Title: `Tree Maintenance in DeLand, FL | God's Country Tree Service`
- Meta: `Tree maintenance in DeLand, FL — inspections, preventative care & storm-readiness from a licensed & insured tree service. Schedule a free assessment today.`
- H1: `Tree Maintenance & Care in DeLand, FL — Year-Round Tree Service Plans`
- Required H2s:
  - `What do ongoing tree care services include?`
  - `How much does tree maintenance cost in DeLand, FL?`
  - `How does preventative tree health care avoid emergency removals?`
  - `What does a seasonal maintenance year look like for DeLand trees?`
- Angle: prevention economics — maintenance vs emergency removal cost; seasonal rhythm around
  hurricane season.
- Layout: seasonal care-calendar signature (4-quarter grid), timeline variant (C7.1),
  numbered section watermarks (C5.1), organic + diagonal dividers.

### 12. /services/certified-arborist-services/
- Title: `Certified Arborist DeLand, FL | God's Country Tree Service`
- Meta: `Certified arborist services in DeLand, FL — tree health diagnosis & expert care from a licensed & insured local tree service. Book a free consultation today.`
- H1: `Certified Arborist Services in DeLand, FL — Expert Diagnosis from a Local Tree Service`
- Required H2s:
  - `What does a certified arborist in DeLand, FL actually do?`
  - `When should you call an arborist instead of a general tree service?` (targets: professional tree service)
  - `What arborist services does God's Country provide?`
  - `How does a tree expert diagnose a sick oak or palm?`
- Angle: credibility page — diagnosis, treatment plans, species knowledge (oak wilt, palm
  nutrient deficiencies, ganoderma), honest "this tree can be saved / this one can't".
- Layout: editorial pull quote (C7.3), credential big-stat positioning, drop cap (C5.4),
  duotone portrait treatment (C4.3), torn + curved dividers.

### 13. /services/index.php (services listing)
- Title: `Tree Services in DeLand, FL | God's Country Tree Service`
- Meta: `Twelve tree services in DeLand, FL — removal, trimming, pruning & 24/7 storm cleanup from one licensed & insured local crew. Free estimates within 24 hours.`
- H1: `Tree Services in DeLand, FL — One Local Crew, Twelve Specialties`
- Required H2s:
  - `Which tree services does God's Country offer in DeLand?`
  - `Looking for tree service near me in DeLand?`
  - `How do you know which tree service you need?`
- Full 12-card `services-grid` (tint rotation, unique icons, manifest photos), grouped intro,
  ItemList schema + BreadcrumbList, mid-page CTA + closing CTA, FAQ not required (no FAQPage
  schema if no FAQ section).

## Keyword map (contract — keyword → page + heading)

Every heading referenced must exist verbatim in the page file. Built into keyword-map.json at QA.

| keyword | page | heading |
|---|---|---|
| tree service deland fl | index.php | (existing homepage H1) |
| tree removal deland fl | services/tree-removal/index.php | H1 |
| large tree removal | services/tree-removal/index.php | `Can you handle large tree removal near houses and power lines?` |
| tree removal near me | services/tree-removal/index.php | `Searching for tree removal near me in DeLand?` |
| professional tree removal | services/tree-removal/index.php | `What does professional tree removal include at God's Country?` |
| tree removal deltona fl | services/tree-removal/index.php | `Do you offer tree removal in Deltona, FL and nearby cities?` |
| tree trimming deland fl | services/tree-trimming-services/index.php | H1 |
| tree trimming near me | services/tree-trimming-services/index.php | `Searching for tree trimming near me in DeLand?` |
| seasonal tree trimming | services/tree-trimming-services/index.php | `When is the best season for tree trimming in Central Florida?` |
| professional tree trimming | services/tree-trimming-services/index.php | `What makes professional tree trimming different from DIY cutting?` |
| tree pruning deland fl | services/tree-pruning-services/index.php | H1 |
| tree pruning services | services/tree-pruning-services/index.php | `How much do tree pruning services cost in DeLand, FL?` |
| professional pruning | services/tree-pruning-services/index.php | `What's the difference between professional pruning and tree trimming?` |
| certified arborist pruning | services/tree-pruning-services/index.php | `What is certified arborist pruning and why does it matter?` |
| crown reduction deland | services/crown-reduction-shaping/index.php | H1 + `How much does crown reduction cost in DeLand, FL?` |
| crown thinning | services/crown-reduction-shaping/index.php | `How does crown thinning reduce storm risk in Florida?` |
| tree shaping | services/crown-reduction-shaping/index.php | `Can tree shaping fix an overgrown or lopsided canopy?` |
| tree crown work | services/crown-reduction-shaping/index.php | `What's the difference between crown reduction and topping a tree?` |
| dead tree removal deland | services/dead-hazardous-tree-removal/index.php | `How do you know a tree is dead or dangerous in DeLand, FL?` |
| hazardous tree removal | services/dead-hazardous-tree-removal/index.php | `How much does hazardous tree removal cost?` |
| dangerous tree removal | services/dead-hazardous-tree-removal/index.php | `What makes dangerous tree removal different from standard takedowns?` |
| tree removal services | services/dead-hazardous-tree-removal/index.php | `What tree removal services are included with a hazardous removal?` |
| emergency tree service deland fl | services/emergency-tree-service-storm-cleanup/index.php | H1 |
| 24-hour tree service | services/emergency-tree-service-storm-cleanup/index.php | `Who answers a 24-hour tree service call in DeLand?` |
| storm cleanup deland fl | services/emergency-tree-service-storm-cleanup/index.php | `How much does storm cleanup cost in DeLand, FL?` |
| storm damage removal | services/emergency-tree-service-storm-cleanup/index.php | `What should you do right after storm damage to a tree?` |
| fallen tree removal deland | services/fallen-tree-removal-cleanup/index.php | `How much does fallen tree removal cost in DeLand, FL?` |
| fallen tree cleanup | services/fallen-tree-removal-cleanup/index.php | `What does fallen tree cleanup include?` |
| tree debris removal | services/fallen-tree-removal-cleanup/index.php | `How does tree debris removal work after a big blow-down?` |
| tree planting deland fl | services/tree-planting-shrub-installation/index.php | H1 + `How much does tree planting cost in DeLand, FL?` |
| shrub installation | services/tree-planting-shrub-installation/index.php | `What's included in professional shrub installation?` |
| residential tree planting | services/tree-planting-shrub-installation/index.php | `Which trees grow best in DeLand's sandy Central Florida soil?` |
| landscape planting services | services/tree-planting-shrub-installation/index.php | `Do you handle landscape planting services for businesses and HOAs?` |
| residential tree service deland fl | services/residential-tree-services/index.php | H1 |
| home tree care | services/residential-tree-services/index.php | `How much does home tree care cost in DeLand, FL?` |
| residential tree removal | services/residential-tree-services/index.php | `Do you handle residential tree removal as well as trimming?` |
| property maintenance | services/residential-tree-services/index.php | `How does year-round property maintenance protect your trees?` |
| commercial tree service deland fl | services/commercial-hoa-tree-services/index.php | H1 + `What does commercial tree service include for DeLand properties?` |
| HOA tree services | services/commercial-hoa-tree-services/index.php | `How do HOA tree services keep communities compliant and safe?` |
| business tree care | services/commercial-hoa-tree-services/index.php | `Why put business tree care on a maintenance schedule?` |
| property tree maintenance | services/commercial-hoa-tree-services/index.php | `How does property tree maintenance reduce liability?` |
| tree maintenance deland fl | services/tree-maintenance-care/index.php | H1 + `How much does tree maintenance cost in DeLand, FL?` |
| tree care services | services/tree-maintenance-care/index.php | `What do ongoing tree care services include?` |
| tree health care | services/tree-maintenance-care/index.php | `How does preventative tree health care avoid emergency removals?` |
| certified arborist deland fl | services/certified-arborist-services/index.php | `What does a certified arborist in DeLand, FL actually do?` |
| arborist services | services/certified-arborist-services/index.php | `What arborist services does God's Country provide?` |
| professional tree service | services/certified-arborist-services/index.php | `When should you call an arborist instead of a general tree service?` |
| tree expert | services/certified-arborist-services/index.php | `How does a tree expert diagnose a sick oak or palm?` |
| tree service near me deland | services/index.php | `Looking for tree service near me in DeLand?` |
