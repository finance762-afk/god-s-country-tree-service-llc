# GC SEO Pass — Report (God's Country Tree Service, 24 Sep 2026)

**Status: complete.** All four items (2–5) from GC-SEO-PASS-BRIEF.md are done, merged `staging` → `main` (fast-forward to `967299f`), deployed to Hostinger and checked live on https://godscountrytree.com.

Deploy output: `{"ok":true,"domain":"godscountrytree.com","branch":"main","before":"967299f","after":"967299f","http":200}`. The docroot was already at `967299f` because the GitHub push webhook deployed first. The script confirmed that commit is on disk.

Commits on staging/main:
- `e6263a8` Titles + descriptions with GBP proof on 23 core pages (+ config vars, About/FAQ H1s)
- `46097e1` Service pages trimmed; emergency page rebuilt around emergency and storm tree removal; descriptive cross-links
- `d2418cd` Home: emergency CTA in the hero, emergency card first, descriptive service anchors, GBP rating in reviews; footer FAQ link
- `bd4ba79` Blog CTR pass (11 posts)
- `aa35c5b`, `ce7f6e5` llms.txt / llms-full.txt
- `967299f` qa-report.json refreshed

---

## Decisions made without sign-off (read these first)

1. **The word counts in the brief were measuring source code, not copy.** The brief says service pages have 4,900–6,400 words and the home page ~4,100. Those numbers match `wc -w` on the PHP files, which includes 700–900 lines of inline CSS per page (e.g. `index.php` = 4,943, `tree-removal/index.php` = 4,973). The visible copy inside `<main>` (no script, style or form) was already **1,747–2,450 words per service page and 1,301 on the home page**. I measured and worked against visible copy. That meant targeted trims, not a rewrite:
   - the 6 service pages over 2,000 words came down to 1,500–2,000;
   - every service page went to 5–6 FAQs (they had 6–9);
   - filler and sibling-page overlap was cut;
   - the inline CSS was left alone, as the brief requires.
   The home page was already under 2,500 words, so the home work was about structure, not length.
2. **Title pattern.** Every title follows `<keyword + city> | {$gbpRating}★ … | <offer>` and is ≤ 60 characters.
   - Where the full `4.8★ (86 Google Reviews)` segment plus an offer went over 60, I kept the keyword and city and shortened the rating to `4.8★ Rated` / `4.8★ 86 Reviews`, or dropped the offer.
   - The home title uses "Free Quote" rather than "Free Estimates" to fit 60 characters.
   - City pages use their own city (e.g. "Tree Service Deltona FL"), not DeLand, since that is what they target.
3. **H1s.** The service, city, home, contact and services-index H1s already named the service plus DeLand, so they were unchanged. Three H1s changed:
   - About: "Meet the Owner Behind God's Country, DeLand's Tree Service"
   - FAQ: "DeLand Tree Service Questions, Answered Straight"
   - Emergency: matches its new title (below).
4. **Mobile sticky bar left alone.** It already has three links (Call Now, Text Us, Free Estimate), so there is no room for a fourth, per the brief.
5. **Home hero buttons.** The hero is now: Get a Free Estimate → **"Storm damage? 24/7 emergency tree removal"** (second CTA) → Call Now. I removed the hero's separate "Text Us" button to keep the hero at three CTAs. Texting is still in the mobile sticky bar and the header phone link.
6. **Storm posts.** The emergency page is linked from tree-fell-on-house and insurance-fallen-tree-removal (the two storm-damage posts), and also from hurricane-prep-tree-trimming-deland.
7. **Two small fixes outside strict scope**, both cheap and low-risk:
   - Added a `/faq/` link in the footer. This clears the pre-existing "FAQ page orphaned" QA blocker.
   - Fixed `blogPostSchema()`. The BlogPosting `image` pointed at a non-existent relative `.webp` (404); it now uses the absolute URL of the largest variant that exists on disk.
8. **Wrong phone number removed.** The blog agent found `(386) 490-0703` in the hurricane-prep post's closing paragraph. It is now the site NAP number, (407) 280-3484. This is a NAP consistency fix.
9. **llms-full.txt claims.** It claimed a "2–6 hour" emergency response, which appears nowhere on the site. I replaced it with the site's own "same-day response for genuine hazards" (no invented claims). Both llms files also pointed at the old `pageone.cloud` URL; they now use the production domain.

## 2. Titles and descriptions (CTR)

- `includes/config.php`: `$gbpRating = '4.8'` and `$gbpReviewCount = 86` (comment: "from GBP, update monthly"). The page titles and descriptions interpolate these, and the rating/count are never hard-coded in page copy.
- The home reviews section now says "rated 4.8★ from 86 Google reviews", also from the config vars.
- All 23 core-page descriptions are 150–160 characters and include:
  - the keyword and city
  - the rating
  - licensed & insured
  - the free estimate within 24 hours
  - (407) 280-3484
- No `aggregateRating` / `ratingValue` JSON-LD anywhere (checked live across all 39 sitemap URLs).

### Before / after titles

| Page | Before title | After title (chars) |
|---|---|---|
| `/` | Tree Service in DeLand, FL &#124; God's Country Tree Service LLC | Tree Service DeLand FL &#124; 4.8★ 86 Google Reviews &#124; Free Quote (60) |
| `/services/` | Tree Services in DeLand, FL &#124; God's Country Tree Service | Tree Services DeLand FL &#124; 4.8★ (86 Google Reviews) (50) |
| `/services/tree-planting-shrub-installation/` | Tree Planting in DeLand, FL &#124; God's Country Tree Service | Tree Planting DeLand FL &#124; 4.8★ (86 Google Reviews) (50) |
| `/services/tree-trimming-services/` | Tree Trimming in DeLand, FL &#124; God's Country Tree Service | Tree Trimming DeLand FL &#124; 4.8★ Rated &#124; Free 24-Hr Estimates (59) |
| `/services/tree-pruning-services/` | Tree Pruning in DeLand, FL &#124; God's Country Tree Service | Tree Pruning DeLand FL &#124; 4.8★ (86 Google Reviews) (49) |
| `/services/crown-reduction-shaping/` | Crown Reduction in DeLand, FL &#124; God's Country Tree Service | Crown Reduction DeLand FL &#124; 4.8★ (86 Google Reviews) (52) |
| `/services/tree-removal/` | Tree Removal in DeLand, FL &#124; God's Country Tree Service | Tree Removal DeLand FL &#124; 4.8★ Rated &#124; Free 24-Hr Estimates (58) |
| `/services/dead-hazardous-tree-removal/` | Dead Tree Removal DeLand, FL &#124; God's Country Tree Service | Dead Tree Removal DeLand FL &#124; 4.8★ (86 Google Reviews) (54) |
| `/services/emergency-tree-service-storm-cleanup/` | 24/7 Emergency Tree Service in DeLand, FL &#124; God's Country | Emergency Tree Removal DeLand FL &#124; 24/7 Storm Cleanup &#124; 4.8★ (60) |
| `/services/fallen-tree-removal-cleanup/` | Fallen Tree Removal DeLand, FL &#124; God's Country Tree Service | Fallen Tree Removal DeLand FL &#124; 4.8★ (86 Google Reviews) (56) |
| `/services/residential-tree-services/` | Residential Tree Service in DeLand, FL &#124; God's Country | Residential Tree Service DeLand FL &#124; 4.8★ 86 Reviews (52) |
| `/services/commercial-hoa-tree-services/` | Commercial & HOA Tree Service in DeLand, FL &#124; God's Country | Commercial & HOA Tree Service DeLand FL &#124; 4.8★ Rated (52) |
| `/services/tree-maintenance-care/` | Tree Maintenance in DeLand, FL &#124; God's Country Tree Service | Tree Maintenance DeLand FL &#124; 4.8★ (86 Google Reviews) (53) |
| `/services/certified-arborist-services/` | Certified Arborist DeLand, FL &#124; God's Country Tree Service | Certified Arborist DeLand FL &#124; 4.8★ (86 Google Reviews) (55) |
| `/service-area/` | Tree Service Areas Near DeLand, FL &#124; God's Country Tree Service | Tree Service Areas Near DeLand FL &#124; 4.8★ 86 Reviews (51) |
| `/service-area/deltona/` | Tree Service in Deltona, FL &#124; God's Country Tree Service | Tree Service Deltona FL &#124; 4.8★ (86 Google Reviews) (50) |
| `/service-area/orange-city/` | Tree Service in Orange City, FL &#124; God's Country Tree Service | Tree Service Orange City FL &#124; 4.8★ (86 Google Reviews) (54) |
| `/service-area/debary/` | Tree Service in DeBary, FL &#124; God's Country Tree Service | Tree Service DeBary FL &#124; 4.8★ (86 Google Reviews) (49) |
| `/service-area/lake-helen/` | Tree Service in Lake Helen, FL &#124; God's Country Tree Service | Tree Service Lake Helen FL &#124; 4.8★ (86 Google Reviews) (53) |
| `/service-area/deleon-springs/` | Tree Service in DeLeon Springs, FL &#124; God's Country Tree | Tree Service DeLeon Springs FL &#124; 4.8★ 86 Google Reviews (55) |
| `/about/` | About God's Country Tree Service &#124; Owner-Operated, DeLand FL | About God's Country Tree Service DeLand FL &#124; 4.8★ Rated (55) |
| `/contact/` | Contact God's Country Tree Service &#124; DeLand, FL Tree Service | Contact Tree Service DeLand FL &#124; 4.8★ &#124; (407) 280-3484 (54) |
| `/faq/` | Tree Service FAQ &#124; God's Country Tree Service, DeLand FL | Tree Service FAQ DeLand FL &#124; 4.8★ (86 Google Reviews) (53) |
| `/blog/tree-fell-on-house-deland-fl/` | Tree Fell on Your House in DeLand? 5 Steps to Take &#124; God's Country Tree Service LLC | Tree Fell on Your House in DeLand? 5 Steps to Take Now (54) |
| `/blog/is-spanish-moss-bad-for-trees/` | Is Spanish Moss Bad for Trees? An Arborist Answers | Is Spanish Moss Bad for Trees? No — But Watch for This (54) |
| `/blog/best-trees-to-plant-central-florida/` | Best Trees to Plant in Central Florida Yards &#124; God's Country Tree Service LLC | Best Trees to Plant in Central Florida Yards (2026) (51) |
| `/blog/what-does-certified-arborist-do/` | What Does a Certified Arborist Do? When to Hire One &#124; God's Country Tree Service LLC | What Does a Certified Arborist Do? When You Need One (52) |
| `/blog/tree-topping-vs-crown-reduction/` | Why Tree Topping Is a Mistake — Do This Instead &#124; God's Country Tree Service LLC | Tree Topping vs Crown Reduction: Why Topping Fails (50) |
| `/blog/tree-removal-cost-deland-fl/` | Tree Removal Cost in DeLand, FL: 2026 Price Guide | Tree Removal Cost in DeLand, FL: $300–$2,500+ (2026) (52) |
| `/blog/tree-removal-permit-deland-fl/` | Tree Removal Permits in DeLand, FL: 2026 Rules | Do You Need a Tree Removal Permit in DeLand? (2026) (51) |
| `/blog/signs-dangerous-tree-deland/` | Is My Tree Dangerous? 9 Warning Signs DeLand Homeowners Should Not Ignore &#124; God's Country Tree Service LLC | Is My Tree Dangerous? 9 Warning Signs in DeLand, FL (51) |
| `/blog/best-time-trim-trees-florida/` | When to Trim Trees in Florida: Month-by-Month Guide | Best Time to Trim Trees in Florida: Month by Month (2026) (57) |
| `/blog/insurance-fallen-tree-removal-florida/` | Does Insurance Cover Fallen Tree Removal in Florida? | Does Insurance Cover Fallen Tree Removal in Florida? (2026) (59) |
| `/blog/hurricane-prep-tree-trimming-deland/` | When to Trim Trees Before Hurricane Season in DeLand, FL &#124; God's Country Tree Service LLC | When to Trim Trees Before Hurricanes in DeLand: March–May (57) |

## 3. Home vs service pages

### Word counts (visible copy inside `<main>`, excluding script, style and the hero form; local render before vs after)

| Page | Words before | Words after | Δ | Desc chars after |
|---|---:|---:|---:|---:|
| `/` | 1,301 | 1,326 | +25 | 151 |
| `/services/` | 1,008 | 1,008 | +0 | 159 |
| `/services/tree-planting-shrub-installation/` | 2,228 | 1,929 | -299 | 156 |
| `/services/tree-trimming-services/` | 1,974 | 1,811 | -163 | 151 |
| `/services/tree-pruning-services/` | 2,450 | 1,952 | -498 | 154 |
| `/services/crown-reduction-shaping/` | 1,974 | 1,813 | -161 | 159 |
| `/services/tree-removal/` | 1,898 | 1,837 | -61 | 154 |
| `/services/dead-hazardous-tree-removal/` | 2,082 | 1,870 | -212 | 153 |
| `/services/emergency-tree-service-storm-cleanup/` | 2,181 | 1,983 | -198 | 159 |
| `/services/fallen-tree-removal-cleanup/` | 2,214 | 1,969 | -245 | 160 |
| `/services/residential-tree-services/` | 1,969 | 1,735 | -234 | 158 |
| `/services/commercial-hoa-tree-services/` | 1,757 | 1,598 | -159 | 154 |
| `/services/tree-maintenance-care/` | 1,747 | 1,607 | -140 | 160 |
| `/services/certified-arborist-services/` | 2,007 | 1,843 | -164 | 156 |
| `/service-area/` | 797 | 797 | +0 | 151 |
| `/service-area/deltona/` | 1,440 | 1,440 | +0 | 157 |
| `/service-area/orange-city/` | 1,597 | 1,597 | +0 | 157 |
| `/service-area/debary/` | 1,364 | 1,364 | +0 | 156 |
| `/service-area/lake-helen/` | 1,287 | 1,287 | +0 | 160 |
| `/service-area/deleon-springs/` | 1,452 | 1,452 | +0 | 157 |
| `/about/` | 1,156 | 1,159 | +3 | 156 |
| `/contact/` | 253 | 253 | +0 | 151 |
| `/faq/` | 1,097 | 1,098 | +1 | 157 |
| `/blog/` | 506 | 499 | -7 | 148 |
| `/blog/tree-fell-on-house-deland-fl/` | 1,637 | 1,634 | -3 | 156 |
| `/blog/is-spanish-moss-bad-for-trees/` | 1,727 | 1,727 | +0 | 158 |
| `/blog/best-trees-to-plant-central-florida/` | 1,811 | 1,810 | -1 | 159 |
| `/blog/what-does-certified-arborist-do/` | 1,599 | 1,592 | -7 | 160 |
| `/blog/tree-topping-vs-crown-reduction/` | 1,548 | 1,544 | -4 | 155 |
| `/blog/tree-removal-cost-deland-fl/` | 2,018 | 2,253 | +235 | 159 |
| `/blog/tree-removal-permit-deland-fl/` | 1,680 | 1,928 | +248 | 156 |
| `/blog/signs-dangerous-tree-deland/` | 2,063 | 2,288 | +225 | 157 |
| `/blog/best-time-trim-trees-florida/` | 1,890 | 2,140 | +250 | 160 |
| `/blog/insurance-fallen-tree-removal-florida/` | 2,311 | 2,553 | +242 | 160 |
| `/blog/hurricane-prep-tree-trimming-deland/` | 906 | 1,085 | +179 | 158 |


(Blog posts went up because each now carries a visible FAQ; see item 4.)

### What was cut, by page
- **tree-pruning-services** (2,450 → 1,952; FAQs 9 → 5):
  - Removed the palms, debris, prescription-pruning and "do I need to be home" FAQs.
  - Cut the "anyone with a saw" opener, which duplicated the trimming page.
  - Pruning-vs-trimming table cut from 5 to 3 rows.
  - Prescription section halved; cut-type and cadence copy condensed.
- **tree-planting-shrub-installation** (2,228 → 1,929; FAQs 7 → 6):
  - Business/HOA section cut from 218 to 146 words.
  - DIY comparison cut from 180 to 120 words (2 rows dropped).
  - Removed the "shrub-only jobs" FAQ; trimmed the species and cost cards.
- **fallen-tree-removal-cleanup** (2,214 → 1,969; FAQs 7 → 6):
  - Removed the emergency-response FAQ, since that topic belongs on the emergency page.
  - Condensed the triage cards, grapple section, cleanup steps and mid-page banner.
  - Now focused on non-emergency "fallen tree removal".
- **emergency-tree-service-storm-cleanup** (2,181 → 1,983; FAQs 8 → 6): see item 5.
- **dead-hazardous-tree-removal** (2,082 → 1,870; FAQs 7 → 6):
  - Removed the "is a dead tree an emergency" FAQ.
  - Condensed the warning-sign, included-work and specialist cards.
  - Dropped the weakest wait-vs-remove row.
- **certified-arborist-services** (2,007 → 1,843; FAQs 7 → 5):
  - Removed the ganoderma and pre-season-assessment FAQs (duplicated elsewhere).
  - Opening section drop-cap paragraph cut from about 70 to about 30 words.
- **tree-trimming-services** (1,974 → 1,811; FAQs 7 → 6):
  - Removed the roof/pool-limb FAQ, which duplicated the clearance section and the crown page.
  - DIY opener de-duplicated from the pruning page; filler lines cut.
- **crown-reduction-shaping** (1,974 → 1,813; FAQs 7 → 5):
  - Removed the canopy-percentage and debris FAQs (answered on the pruning and trimming pages).
  - Condensed the zone cards.
- **residential-tree-services** (1,969 → 1,735; FAQs 7 → 6):
  - Removed the "one visit covers everything" FAQ.
  - Merged the featured-card paragraphs; condensed the visit steps.
  - Comparison table cut from 5 to 3 rows. The page is now an umbrella that links out.
- **tree-removal** (1,898 → 1,837; 6 FAQs): filler pass only.
- **commercial-hoa-tree-services** (1,757 → 1,598; FAQs 7 → 6): removed the HOA-boards FAQ (already covered by the HOA section).
- **tree-maintenance-care** (1,747 → 1,607; FAQs 7 → 5): removed the storm-prevention and service-area FAQs.
- **Across all service pages:**
  - Hero answer-first intro, H1, hero form, breadcrumbs, schema, canonical, Last Updated, inline `<style>` and signature visual sections are all kept.
  - FAQs are array-driven, so FAQPage schema still mirrors the visible FAQ.
  - Descriptive contextual links to sibling service pages were added in the related-services intros. Most pages had none in body copy before.
  - Local-link examples: "tree removal in DeLand", "emergency tree removal", "tree trimming in DeLand", "dead and hazardous tree removal".

### Home page (1,301 → 1,326 words; ≤ 2,500 target already met)
- **Services intro:** the 12-service summary sentence is now 12 descriptive links, e.g.:
  - "tree removal in DeLand"
  - "tree trimming in DeLand"
  - "emergency tree removal"
  - "fallen tree removal"
- **Service cards:**
  - The CTA is now a descriptive anchor per card instead of "Learn more" (e.g. "Tree removal in DeLand", "24/7 emergency tree removal").
  - Cards are reordered: emergency first (2×2 featured tile), then removal, trimming, pruning, dead/hazardous, fallen, crown, commercial, planting.
- **Commercial single-service depth cut:**
  - The hero subtitle no longer leads with commercial contracts; it is now a hub summary.
  - The commercial CTA banner's paragraph went from 2 sentences to 1, with a link to the commercial page.

### Emergency vs fallen differentiation
- **Emergency page** targets "emergency tree removal DeLand" + "storm damage tree removal DeLand". Its related-services intro links to the fallen page with the anchor **"fallen tree removal"**.
- **Fallen page** targets "fallen tree removal". It has exactly one body link to the emergency page, with the anchor **"emergency tree removal in DeLand"**.

## 4. Blog CTR pass (all 11 posts)

- Titles are direct answers, ≤ 60 characters, with **no brand suffix**; "2026" is used where natural.
- The same string is used for the registry `title`, `$pageTitle`, H1, og:title and the BlogPosting `headline` (verified on every post).
- Slugs are unchanged. Descriptions are 155–160 characters: the answer plus a reason to click.
- **FAQ:** every post now has a visible FAQ and a FAQPage built from one `$postFaqs` array, so they cannot drift apart.
  - 6 posts had no FAQPage before; new FAQs there only restate facts already in the post.
  - 5 posts had hand-written FAQ JSON-LD, which is now generated from the array instead.

| Post | Old title | New title | FAQPage Qs |
|---|---|---|---|
| insurance-fallen-tree-removal-florida | Does Insurance Cover Fallen Tree Removal in Florida? | Does Insurance Cover Fallen Tree Removal in Florida? (2026) | 0 → 5 |
| is-spanish-moss-bad-for-trees | Is Spanish Moss Bad for Trees? An Arborist Answers | Is Spanish Moss Bad for Trees? No — But Watch for This | 4 → 4 |
| best-time-trim-trees-florida | When to Trim Trees in Florida: Month-by-Month Guide | Best Time to Trim Trees in Florida: Month by Month (2026) | 0 → 5 |
| best-trees-to-plant-central-florida | Best Trees to Plant in Central Florida Yards &#124; God's Country… | Best Trees to Plant in Central Florida Yards (2026) | 4 → 4 |
| tree-removal-permit-deland-fl | Tree Removal Permits in DeLand, FL: 2026 Rules | Do You Need a Tree Removal Permit in DeLand? (2026) | 0 → 5 |
| tree-fell-on-house-deland-fl | Tree Fell on Your House in DeLand? 5 Steps to Take &#124; God's Country… | Tree Fell on Your House in DeLand? 5 Steps to Take Now | 4 → 4 |
| what-does-certified-arborist-do | What Does a Certified Arborist Do? When to Hire One &#124; God's Country… | What Does a Certified Arborist Do? When You Need One | 4 → 4 |
| tree-topping-vs-crown-reduction | Why Tree Topping Is a Mistake — Do This Instead &#124; God's Country… | Tree Topping vs Crown Reduction: Why Topping Fails | 4 → 4 |
| tree-removal-cost-deland-fl | Tree Removal Cost in DeLand, FL: 2026 Price Guide | Tree Removal Cost in DeLand, FL: $300–$2,500+ (2026) | 0 → 5 |
| signs-dangerous-tree-deland | Is My Tree Dangerous? 9 Warning Signs DeLand Homeowners Should Not Ignore &#124; God's Country… | Is My Tree Dangerous? 9 Warning Signs in DeLand, FL | 0 → 4 |
| hurricane-prep-tree-trimming-deland | When to Trim Trees Before Hurricane Season in DeLand, FL &#124; God's Country… | When to Trim Trees Before Hurricanes in DeLand: March–May | 0 → 4 |

## 5. Emergency page for hurricane season

`/services/emergency-tree-service-storm-cleanup/`:
- **Title:** `Emergency Tree Removal DeLand FL | 24/7 Storm Cleanup | 4.8★` (60 characters; the rating comes from config).
- **H1:** "Emergency Tree Removal in DeLand, FL — 24/7 Storm Cleanup".
- **Breadcrumb:** visible breadcrumb and BreadcrumbList renamed "Emergency Tree Removal & Storm Cleanup".
- **Answer-first hero intro:** "Call God's Country Tree Service LLC at (407) 280-3484 — emergency tree removal and storm damage calls in DeLand are answered 24/7. Send your address and photos, genuine hazards like a tree on your roof get same-day response, and you get the price in writing before a saw starts." It only uses claims already on the site: 24/7, same-day for genuine hazards, written price first.
- **CTAs:** the hero and closing CTAs lead with a tel: "Call 24/7" button.
- **Hurricane-season block** (`#hurricane-season`, eyebrow "Peak September–November"):
  - first-hour steps (existing expandable module, tightened);
  - insurance photos (wide shots plus close-ups);
  - a new highlighted box, "When should you NOT touch a tree after a storm?" (power lines: never touch, report to the utility or 911, crew cuts only after the line is de-energized);
  - a link to the insurance blog post.
- **FAQs:** trimmed from 8 to 6. The area FAQ and the "while you wait" FAQ were dropped because they duplicated the area chips and the first-hour block.
- **Linked from:**
  - the home hero (second CTA) and the home service cards (first card);
  - the fallen-tree page;
  - tree-removal and dead-hazardous (related-services intros);
  - the two storm blog posts and the hurricane-prep post.
- Mobile sticky bar unchanged (already full; see decision 4).

## QA, deploy, verification

### php -l
Every edited file passed `php -l` (the orchestrator and all 5 sub-agents ran it after each edit).

### qa_audit.py --legacy (local, before vs after)
- Before: 300 checks, 238 passed, 12 blockers, score 88%.
- After: 300 checks, 240 passed, 11 blockers, score 89%.
- **No new failures** (diffed by check + detail).
- Fixed: "Premium: FAQ page orphaned".

The 11 remaining blockers are all "Premium: blog registry image missing". The registry points at base `.webp` files that were never generated; only `-480`/`-960`/`-1600` variants exist. This is pre-existing and not mine. The brief expected 2 known blockers; this audit version reports these 11 instead. The brief's "partner-badge hotlink" and "city pages without a form" items appear only as *warnings* here, and are unchanged.

### qa_audit.py --legacy --url https://godscountrytree.com (live)
- 303 checks, 243 passed, the same 11 registry-image blockers, 89%.
- The live-only Lighthouse checks warn:
  - Mobile Performance 70 (LCP 3.2s, TBT 1,101ms, LCP element `.hero-subtitle`).
  - Best Practices 79 (third-party cookies).
- There is **no pre-change live baseline** for these; the brief's before run was local. The TBT and third-party-cookie findings point at the Google Ads/GA4/Elfsight tags, which this pass did not touch. Worth a separate performance look.

### Live verification (browser UA, cache-busted)
```
== Titles / words (live)
200 / | Tree Service DeLand FL | 4.8★ 86 Google Reviews | Free Quote (60) | words 1326
200 /services/tree-removal/ | Tree Removal DeLand FL | 4.8★ Rated | Free 24-Hr Estimates (58) | words 1837
200 /services/tree-trimming-services/ | Tree Trimming DeLand FL | 4.8★ Rated | Free 24-Hr Estimates (59) | words 1811
200 /services/emergency-tree-service-storm-cleanup/ | Emergency Tree Removal DeLand FL | 24/7 Storm Cleanup | 4.8★ (60) | words 1983
200 /blog/insurance-fallen-tree-removal-florida/ | Does Insurance Cover Fallen Tree Removal in Florida? (2026) (59) | words 2553
200 /blog/is-spanish-moss-bad-for-trees/ | Is Spanish Moss Bad for Trees? No — But Watch for This (54) | words 1727
== Emergency CTA in home hero
[]
first home card: Emergency Tree Removal &amp; Storm Cleanup
== FAQPage JSON-LD parses
/ FAQPage questions = 6
/services/emergency-tree-service-storm-cleanup/ FAQPage questions = 6
/blog/insurance-fallen-tree-removal-florida/ FAQPage questions = 5
/blog/tree-removal-permit-deland-fl/ FAQPage questions = 5
== sitemap.xml
200 39 URLs
non-200: []
== aggregateRating anywhere (all sitemap URLs)
pages with aggregateRating/ratingValue: []
```
- The home hero's second CTA is live: `<a href="/services/emergency-tree-service-storm-cleanup/" class="btn btn-outline-white btn-lg hero-storm-cta">Storm damage? 24/7 emergency tree removal</a>`. My first check script sliced the hero HTML at the first `estimate-form` reference, so it missed the button; confirmed with a direct grep.
- The footer `/faq/` link is live.

## Skipped / follow-ups
- **Registry-image QA blockers (pre-existing):** fixing them needs `-960.webp` (or base) variants generated from the original photos. 8 of the 11 blog images only have a `-480` file, so blog OG and schema images are small.
- **Blog facts to review with the owner** (flagged by the blog agent; not changed because they are existing copy):
  - The permit post does not mention Fla. Stat. 163.045 (dangerous-tree exemption), and its county phone numbers and "6–12 inch" size limits could not be verified.
  - The insurance post mentions a Florida "no-fault" tree rule and uses Milton/Nadine examples.
  - The cost post quotes $1,800–$3,500 for a mature oak, above the $2,500+ headline range; the "+" covers it.
- **Pre-existing `data-num` gaps** on several service pages: the visible section numbers skip where a section never had a number. Left as-is.
- **Minor:** the maintenance page's FAQ intro hard-codes "twelve years" instead of `$yearsInBusiness`.
- **Monthly:** update `$gbpRating` / `$gbpReviewCount` in `includes/config.php` from the GBP.
- **GSC:** request indexing for /, /services/tree-removal/, /services/emergency-tree-service-storm-cleanup/ and the 5 priority posts, then compare CTR in 28 days.
