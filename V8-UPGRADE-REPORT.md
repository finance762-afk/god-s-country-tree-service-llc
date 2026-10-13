# V8 upgrade report: God's Country Tree Service LLC (godscountrytree.com)

Date: 9 Oct 2026 · Branch: `staging` (pushed, 6 commits `a19bddf`..`f90dce5`) · `main` untouched, nothing merged or deployed.
Preview: https://preview-god-s-country-tree-service-llc.pageone.cloud

## Result

- QA gate: **0 blockers** (was 15), grade B 94% (was F 88%). CLAIMS ACCURACY clean. CONTENT QUALITY clean except one warning that the brief itself causes (see "QA output").
- All 45 URLs that existed on `main` return 200 on the preview. `sitemap.php` lists 42 URLs; every indexable page is in it.
- Weak answers under question headings: 130 → 10 (the 10 are in the three 9 Oct posts the brief said to leave alone).
- Credential-phrase hits across the site: 517 → 212. No page repeats one claim 5 or more times (36 page/phrase pairs did).
- Three live bugs found and fixed along the way: 5 of 6 city photos on the service-area hub were 404, 9 image references on four service pages were 404, and a job photo was displayed on the About page as an "ISA Certified Arborist" certificate.

## Decisions for you

1. **Cost post title.** "Tree Removal Cost in DeLand, FL: $300–$2,500+ (2026)" became "…: What Drives the Price". The range is not in config, llms.txt or build-plan, and the September pass added it for CTR. If the client confirms a range, put it in intake and restore the title.
2. **Land / brush clearing.** Kept and made explicit (DeLeon Springs, commercial, tree-removal, fallen-tree pages) because GSC shows demand, the truck lettering reads "Tree Service · Bobcat Service", the BBB listing is "God's Country Tree & Bobcat" and the GBP lists lot clearing. It is not in the `$services` list. Confirm, or add it as a service.
3. **Certified arborist.** Every page now says "certified arborist on staff" and nothing names the certifying body. No credential number or verification link is on file. One would be the strongest addition for "deland certified arborist" (position 79).
4. **Three 9 Oct posts.** Left as instructed apart from refrain trims and alt text. They carry the 10 remaining weak answers and two unsourced statements in the mitigation post ("on top of the fine", "both jurisdictions have used a tree fund").
5. **Oak wilt.** `best-time-trim-trees-florida` is built around a February–June oak wilt season, and `signs-dangerous-tree-deland` lists oak wilt as a cause. The editor doubted oak wilt is established in Florida and could not verify it. Needs a source check (UF/IFAS).
6. **Commit trailer.** Commits end with `Co-Authored-By: Claude Fable 5.1` as the brief specifies. The session actually ran on Claude Opus 5.5.

## What changed, by page type

**Shared (`includes/`, config, registry)**
- Copied `recent-work.php`, `zip-check.php`, `p1-form-helpers.php`. Not installed: `estimate-tool.php`, `booking-window.php` (no authorization), `text-us.php` (no owner mobile), `financing-block.php` (no partner), `before-after.php` (the image manifest records no before/after pairs).
- `zip-check.php` reads this site's `$serviceAreas` (`city` key); `$serviceZips` is derived from the six ZIPs already in config. Both components alias their tokens to the site's tokens (this was a QA blocker: undefined CSS tokens).
- Blog registry: images point at variants that exist on disk (14 QA blockers), alts match the photos, `modifiedISO` added for the 11 revised posts and used for `dateModified`.
- `keyword-map.json`: 14 headings synced to the current H1/H2 text (several were already stale before this pass).

**Homepage**
- Recent-work feed added before the FAQ (renders the 8 GBP posts the feed returns; they are text posts, no photos).
- Hero chips, ticker, service cards, process steps, FAQ and closing CTA no longer repeat licensed / insured / 24-7 / free estimate. Chips now show the GBP rating (from `$gbpRating` / `$gbpReviewCount`), residential-commercial-HOA, written estimates, debris hauled.
- Four statement H2s became questions with 40-60 word answers. The 12-link services paragraph was split so its first sentence is a short answer; all 12 links kept.
- Business hours added to the closing CTA (same as config).

**Service-area hub**
- ZIP / town checker under the coverage answer. City card photos fixed (were 404). Body links with descriptive anchors to all five city pages.

**Services hub, About, FAQ, Contact**
- Services hub: "Looking for tree service near me?" became "Who offers tree service near me in DeLand?" with links to every city page; repeats removed.
- About: answer block above the owner's letter (letter untouched); question H2s; the fake certificate block emptied; two wrong alts fixed (one photo is the family portrait).
- FAQ: removed "a few hundred dollars", "half a day", "used our paperwork in claims for years"; permit answer defers to the City of DeLand / Volusia County.

**12 service pages**
- Body wrapped in `<article>`; process sections are `<ol>`; each page links up to `/services/` in a body sentence.
- Every question H2 has a 40-60 word answer whose first sentence is under 30 words. "Searching for … near me?" headings became real questions.
- Trust chips replaced with process and equipment facts; credentials stated once.
- Photo slots that showed the wrong subject repointed (arborist page hero was a shrub bed; trimming and emergency pages named files that were never on disk).

**5 city pages**
- Hero estimate form on each (QA blocker). 17 statement H2s became questions with answers. Body links to the hub and to the services each page leads with.
- Invented history and statistics removed. Shared 8-word phrases between any two city pages: 1.7% at most.

**14 blog posts**
- 11 older posts: answer-first paragraph under each question H2, company claims matched to intake, at least 2 post links and 2 service links each, steps as `<ol>`, two comparison tables added (cost by size; topping vs crown reduction).
- 3 posts from 9 Oct: refrain trims and accurate alt text only.

**llms.txt / llms-full.txt**
- llms-full.txt lost 41 untraceable lines or sentences (list below). llms.txt: "BBB accredited" → "BBB business profile".

## Claims removed (not traceable to config.php / llms.txt / build-plan.json)

| Where | Claim | Action |
|---|---|---|
| About | Job photo captioned "ISA Certified Arborist" certification | Block emptied |
| Cost post title, meta, registry | "$300–$2,500+" | Removed from metadata; body ranges relabelled as market figures |
| Cost post | "has removed thousands of trees", crew sizes, hours per job, crane "+$800–$1,500", "2-3× rates", "volume discounts", permit fee "$50–$150", transfer-station fees | Removed |
| Permit post | DBH thresholds, fees, fines "$500–$5,000+", "1-3 weeks" review, city/county phone numbers and street addresses | Replaced with "confirm with the City of DeLand / Volusia County" |
| Insurance post | "$500–$1,000 per tree", deductible percentages, 'Florida "no-fault" tree rule', "work directly with adjusters" | Generalised or removed |
| Other posts | "trims hundreds of trees every year", "3+ years" failure statistic, "nearly every week", plural "certified arborists", "ISA-certified" about the company, crane capability | Removed or reworded |
| Service pages, FAQ | "a few hundred dollars", "half a day … a day or two", "emergency rates / standard rates", "price you approve is the price you pay", "no subcontractors", priority response for contract/plan customers, "written report after every visit", "written watering schedule", "certificates of insurance before a crew arrives" | Removed or reduced to the whitelisted fact |
| Emergency, fallen, dead-tree pages | "Send photos through the estimate form" (the forms have no upload) | Now "describe the tree or call" |
| City pages | Deltona "90k+ residents", "2 direct hurricane hits", cleanup after Charley 2004 / Irma 2017 (company founded 2014), Mackle Brothers 1962; Orange City "incorporated 1882"; DeBary "1993", Frederick deBary; Lake Helen "1888", Cassadaga "1894"; DeLeon Springs "no travel add-on" | Removed |
| Alt text | Photos described as a climber, a roof rescue, Spanish moss, or located in a named city when they show something else | Rewritten from the photos |
| llms-full.txt | Price ranges, "$1,000,000 / $2,000,000" liability, "bonded over $50,000", "financing over $2,500", 1-year workmanship guarantee, youth-sports sponsorship, association memberships, population figures, permit thresholds, "BBB accredited since 2016" | Removed |

## Claims added (all with a source)

| Claim | Where | Source |
|---|---|---|
| GBP rating and review count in hero chips | Home, service-area hub, services hub | `$gbpRating`, `$gbpReviewCount` (config, never typed) |
| Hours Mon-Fri 7 AM-10 PM, Sat 8 AM-9 PM | Home closing CTA | `$businessHours` |
| "The on-site visit and the written quote are both free" | FAQ, city heroes | llms.txt "Free written estimates within 24 hours" |
| DeLeon Springs named as a service area where it was missing | Home FAQ, FAQ page, area chips | `$serviceAreas` |
| Owner Caleb, trained arborist, bought the company | About answer block, home | Existing About letter |
| Six ZIP codes in the checker | Service-area hub | `$serviceAreas[*]['zip']` |

## Unverified items left in place

- **Market price ranges in blogs**, each worded as a typical Central Florida range and not this company's quote: cost post size table ($300–$800 / $800–$1,500 / $1,500–$2,500+) and stump grinding ($100–$400); best-time-trim ($150–$800+); hurricane-prep ($300–$800, $150–$400, $800–$2,000); two worked examples in the insurance post labelled hypothetical.
- **Section 163.045, Florida Statutes** is now cited in the permit post (arborist documentation for a risk tree on residential property), with a note to read the current text. Please verify the wording.
- **Local names carried over from the old pages** and not in config: Arbor Ridge, Saxon Woods, Riviera Bella, Glen Abbey, Springview, Mill Lake, Lake Macy, Dirksen Drive, Howland / Saxon Boulevard plazas, DeLeon Springs being unincorporated.
- **Rule-of-thumb thresholds** in the dangerous-tree post (15-degree lean, 1-inch crack, 25% / 50% canopy loss).
- **Process details kept from the old pages**: skid steer (shown in client photos), "we photograph the finished work", "maintenance plan" wording, the 21+ years figure (owner's own letter).
- **Photo locations.** Alt text still says "DeLand, FL" for many job photos; nothing on file places them. City names other than DeLand were removed from alts.
- **NAP vs GBP.** Business name matches the GBP feed character for character. Phone, ZIP and city are identical across pages, schema and llms.txt ((407) 280-3484, `+14072803484` in schema, DeLand FL 32720). I could not read the phone or address off the live GBP listing from here. Separately, the CRM's GBP review says the profile's website button still points to Facebook, not godscountrytree.com.
- **Lighthouse** was not run (the audit needs `--url`).

## QA output

### 1. PHP lint and render
```
php -l: 43 files, 0 errors
Local render sweep (php -S 127.0.0.1:8195, all 45 URLs): 45 x 200, 0 pages with PHP warnings/notices, 0 warnings in the server log.
Preview spot check (home, tree-removal, deltona, cost post, contact): 0 PHP warnings each.
```
Port 8095 was held by another site's preview server, so I used 8195 and stopped it afterwards.
A headless-browser check of the planting, trimming and crown pages found every image loaded and visible.

### 2. qa_audit.py . premium --slug god-s-country-tree-service-llc
```
── CLAIMS ACCURACY ──────────────────────────────
  ✅ PASS  Metadata claims match the page
         42 titles/metas checked
  ✅ PASS  Metadata claims grounded in intake
         grounded USPs: 24/7, certified, emergency, financing, free estimate, insured, licensed, same-day, years

── CONTENT QUALITY ──────────────────────────────
  ✅ PASS  Word floors by page type
         33 pages checked
  ✅ PASS  Within-site similarity (swapped-city / template pages)
         no pair of same-type pages > 35% overlap
  ✅ PASS  Cross-site similarity (generic template prose)
         checked against 81 other sites
  ✅ PASS  Specificity density
         all pages ≥ 4 concrete items per 100 words
  ⚠️  WARN  Answer under question headings
         blog/prescription-pruning-deland/index.php: "What Are the Common Pruning Prescriptions?" → 0 words, off-topic; blog/prescription-pruning-deland/index.php: "What Does a Bad Prescription Look Like?" → 20 words, off-topic; blog/emergency-tree-service-deland-what-to-expect/index.php: "What Should You Do Before the Crew Arrives?" → 0 words, off-topic; blog/emergency-tree-service-deland-what-to-expect/index.php: "How Is Work Prioritized After a Hurricane?" → 37 words, off-topic; blog/tree-mitigation-deland-volusia-county/index.php: "What Commonly Triggers Mitigation?" → 65 words, off-topic; blog/tree-mitigation-deland-volusia-county/index.php: "How Does a Tree Service Help with Mitigation?" → 24 words
  ✅ PASS  Credential refrain (same claim ≥5× per page)
  ✅ PASS  Filler phrases (report only)
         0 hits across 33 pages
  ✅ PASS  HTML5 landmarks (<main>, <article>)

── FLAGSHIP COMPONENTS ──────────────────────────
  ✅ PASS  Estimate tool: client authorization
         not authorized, not built
  ✅ PASS  Booking window: client authorization
         not authorized, not built

  PASS: 265  |  FAIL: 41  |  WARN: 8  |  Total: 314
  Blockers failed: 0  |  Tier: premium  |  Techniques: 6
  Grade: B  (94%)  ✅ PASSED
```
Baseline before this pass: `PASS: 262 | FAIL: 56 | WARN: 9 | Blockers failed: 15 | Grade: F (88%)`.

Remaining failures and warnings, each explained:
- Image resolution (warning) x35: the -480 variants and the logo are below the 800x500 'section' recommendation; they are srcset members, not primary sources. Pre-existing.
- [warning] Nav scroll transition: No scroll-based nav transition detected
- [warning] Images with loading='lazy': 2 violations in 1 file(s): includes/functions.php
- [warning] Images with width/height: 2 violations in 1 file(s): includes/functions.php
- [warning] Images with descriptive alt: 2 violations in 1 file(s): includes/functions.php
- [warning] No carousel libraries: Carousel JS found in: includes/footer.php, assets/js/main.js
- [warning] CTA band form on blog/about/FAQ pages: 16 page(s) without a mid-page form: about/index.php, faq/index.php, blog/hurricane-prep-tree-trimming-deland/index.php, blog/signs-dangerous-tree-deland/index.php, blog/tree-fell-on-house-deland-fl/index.php
- [warning] Answer under question headings: blog/prescription-pruning-deland/index.php: "What Are the Common Pruning Prescriptions?" → 0 words, off-topic; blog/prescription-pruning-deland/index.php: "What Does a Bad Prescription Look Like?" → 20 words, off-topic; blog/emergency-tree-service-deland-what-to-expect/index.php: "What Should You Do Before the Crew Arrives?" → 0
- [warning] Typography: May use only 1 font family — needs heading + body minimum
- [warning] Form consent checkbox: No consent/TCPA checkbox found in form
- [warning] Pages below 40% question-H2: 1 page(s) under target: blog/signs-dangerous-tree-deland/index.php
- [info] Touch targets 44x44 (render phase): Static HTML can't compute hit boxes — checked in the Puppeteer QA phase
- [info] LCP/INP/CLS (render phase): Budget: LCP ≤2.0s mobile, INP <200ms, CLS <0.1 — measured in the Puppeteer QA phase
- [info] sitemap.xml reachable (needs --url): Pass --url https://preview-<slug>.pageone.cloud (or the live domain) to fetch /sitemap.xml
- [info] Lighthouse mobile (needs --url): Pass --url to run qa/lighthouse-mobile.mjs (Performance ≥90 FAIL, other categories ≥95 WARN)

Explanations:
- **Answer under question headings**: all 10 are in the three 9 Oct posts the brief said to keep as they are.
- **Form consent checkbox**: false positive on `includes/zip-check.php`; the checkbox is emitted by `p1_consent_row()` at render time and is present in the page output.
- **Images lazy / width-height / alt in functions.php**: false positive on the `p1_picture()` helper's string concatenation.
- **Pages below 40% question-H2**: `signs-dangerous-tree-deland` is a numbered listicle; the nine numbered H2s were left as list items.
- **Nav scroll transition, carousel JS, typography, CTA band form on blog/about/FAQ**: present before this pass and outside its scope. The CTA band form is worth doing next.
- **"financing" in grounded USPs**: the build plan has a `financing: null` key; no page mentions financing.
- The first two audit runs of this session rewrote `qa-report.json` (already modified before I started); later runs used `--no-write`. It is not committed.

### 3. URLs, sitemap, images
```
Preview: 45 of 45 pre-existing URLs return 200
/sitemap.php 200, 42 <loc> entries; every indexable URL present (404.php and thank-you excluded by design)
/sitemap.xml 404 on preview (rewrite not available there, as the brief notes)
Images: 82 distinct image URLs referenced across all pages, 0 broken (was 14: 9 on service pages, 5 on the hub)
Hotlinked <img>: only the Page One partner badge (pageonepartner.com), on every page, present before this pass
```

## Before / after by page

Counts use the audit's own text extraction, so PHP variables such as the site name are not counted as words.

| Page | Type | Words before → after | Credential-phrase hits (all 8 patterns) before → after | Worst single phrase before → after | Question H2s before → after | Answers failing 40-60w / <30w-first-sentence before → after |
|---|---|---|---|---|---|---|
| about/ | about | 1059 → 1115 | 10 → 6 | 5 → 3 | 0 → 4 | 0 → 0 |
| blog/best-time-trim-trees-florida/ | blog | 2032 → 2362 | 8 → 4 | 5 → 2 | 2 → 5 | 1 → 0 |
| blog/best-trees-to-plant-central-florida/ | blog | 1733 → 1946 | 3 → 3 | 1 → 1 | 9 → 9 | 9 → 0 |
| blog/emergency-tree-service-deland-what-to-expect/ | blog | 1636 → 1625 | 16 → 11 | 6 → 4 | 6 → 6 | 3 → 3 |
| blog/hurricane-prep-tree-trimming-deland/ | blog | 959 → 1221 | 6 → 3 | 3 → 1 | 9 → 10 | 4 → 0 |
| blog/ | other | 41 → 41 | 2 → 2 | 2 → 2 | 0 → 0 | 0 → 0 |
| blog/insurance-fallen-tree-removal-florida/ | blog | 2402 → 2863 | 12 → 1 | 8 → 1 | 5 → 7 | 2 → 0 |
| blog/is-spanish-moss-bad-for-trees/ | blog | 1632 → 1652 | 7 → 3 | 6 → 2 | 6 → 6 | 5 → 0 |
| blog/prescription-pruning-deland/ | blog | 1442 → 1438 | 11 → 6 | 9 → 4 | 5 → 5 | 3 → 3 |
| blog/signs-dangerous-tree-deland/ | blog | 2211 → 2389 | 2 → 2 | 2 → 2 | 0 → 1 | 0 → 0 |
| blog/tree-fell-on-house-deland-fl/ | blog | 1559 → 1567 | 14 → 4 | 5 → 2 | 5 → 5 | 5 → 0 |
| blog/tree-mitigation-deland-volusia-county/ | blog | 1454 → 1454 | 3 → 3 | 2 → 2 | 5 → 5 | 4 → 4 |
| blog/tree-removal-cost-deland-fl/ | blog | 2164 → 2647 | 3 → 2 | 2 → 1 | 4 → 8 | 2 → 0 |
| blog/tree-removal-permit-deland-fl/ | blog | 1836 → 2062 | 5 → 6 | 2 → 2 | 6 → 7 | 5 → 0 |
| blog/tree-topping-vs-crown-reduction/ | blog | 1447 → 1603 | 6 → 3 | 5 → 2 | 6 → 6 | 5 → 0 |
| blog/what-does-certified-arborist-do/ | blog | 1506 → 1631 | 25 → 5 | 24 → 4 | 7 → 7 | 7 → 0 |
| contact/ | other | 210 → 210 | 8 → 7 | 4 → 3 | 0 → 0 | 0 → 0 |
| faq/ | other | 451 → 458 | 10 → 4 | 4 → 1 | 0 → 0 | 0 → 0 |
| / (home) | home | 989 → 1177 | 24 → 11 | 9 → 3 | 1 → 5 | 1 → 0 |
| service-area/debary/ | city | 1132 → 1198 | 17 → 7 | 8 → 2 | 3 → 6 | 2 → 0 |
| service-area/deleon-springs/ | city | 1066 → 1108 | 13 → 7 | 5 → 2 | 2 → 5 | 2 → 0 |
| service-area/deltona/ | city | 1090 → 1100 | 21 → 9 | 10 → 2 | 2 → 6 | 2 → 0 |
| service-area/ | other | 510 → 570 | 15 → 7 | 6 → 2 | 2 → 3 | 1 → 0 |
| service-area/lake-helen/ | city | 1106 → 1163 | 22 → 9 | 6 → 2 | 1 → 5 | 1 → 0 |
| service-area/orange-city/ | city | 1480 → 1468 | 30 → 9 | 8 → 2 | 3 → 6 | 2 → 0 |
| services/certified-arborist-services/ | service | 1496 → 1546 | 27 → 8 | 10 → 4 | 8 → 8 | 5 → 0 |
| services/commercial-hoa-tree-services/ | service | 1227 → 1368 | 16 → 5 | 6 → 2 | 7 → 6 | 6 → 0 |
| services/crown-reduction-shaping/ | service | 1544 → 1413 | 12 → 5 | 5 → 1 | 8 → 8 | 4 → 0 |
| services/dead-hazardous-tree-removal/ | service | 1536 → 1595 | 19 → 6 | 7 → 2 | 8 → 8 | 4 → 0 |
| services/emergency-tree-service-storm-cleanup/ | service | 1373 → 1435 | 22 → 9 | 11 → 4 | 8 → 8 | 3 → 0 |
| services/fallen-tree-removal-cleanup/ | service | 1624 → 1688 | 13 → 4 | 9 → 2 | 8 → 8 | 5 → 0 |
| services/ | other | 639 → 629 | 22 → 12 | 10 → 3 | 2 → 3 | 2 → 0 |
| services/residential-tree-services/ | service | 1371 → 1375 | 14 → 3 | 8 → 1 | 8 → 7 | 5 → 0 |
| services/tree-maintenance-care/ | service | 1449 → 1462 | 11 → 4 | 4 → 1 | 6 → 6 | 3 → 0 |
| services/tree-planting-shrub-installation/ | service | 1493 → 1625 | 15 → 5 | 5 → 1 | 9 → 8 | 9 → 0 |
| services/tree-pruning-services/ | service | 1560 → 1640 | 18 → 6 | 7 → 3 | 10 → 10 | 7 → 0 |
| services/tree-removal/ | service | 1541 → 1496 | 23 → 8 | 10 → 2 | 9 → 9 | 6 → 0 |
| services/tree-trimming-services/ | service | 1117 → 1168 | 12 → 3 | 7 → 1 | 8 → 8 | 5 → 0 |
| **Total** | | 51117 → 54508 | 517 → 212 | | 188 → 224 | 130 → 10 |

---

## Pass 2 (follow-up, 9 Oct 2026)

Commit `a01665f` on `staging`, pushed. `main` untouched. 24 files, 104 insertions, 93 deletions.

### 1. Oak wilt

| Change | Where | Source |
|---|---|---|
| Oak pruning calendar "July 1 – January 31, avoid February–June oak wilt season" removed. Oaks now get structural pruning December–February and storm-prep thinning by the end of May. | `blog/best-time-trim-trees-florida` lead, quick answer, calendar answer, January–February section, species answer, Live Oaks block | Follow-up brief: UF/IFAS EDIS FOR274 (oak wilt does not occur in Florida) |
| Section "July – January: Oak Trimming Season" replaced by "Spring and Summer: Check for Nests, Then Go Light". | same post | Brief: bird nesting season; UF/IFAS guidance against heavy pruning in late summer; hurricane season June–November |
| New paragraph stating that oak wilt does not occur in Florida, citing UF/IFAS EDIS FOR274, and that calendars written for Texas or the Midwest do not apply here. | same post, body and FAQ 2 | Brief (FOR274) |
| Advice to seal oak cuts with pruning paint removed. | same post, two places | Followed from the oak wilt removal; the paint advice existed only for that disease |
| Live oak growth cycle (keeps leaves through winter, sheds and re-leafs in late winter or early spring) given as the reason for cool-season structural pruning. | same post | Brief: live oak growth cycle |
| Active-nest check before spring and summer cuts; FWC named as the agency to ask. | same post | Brief: bird nesting season. The sentence on legal protection of active nests is general and unsourced on the page; see "To verify" |
| `$pageDescription` rewritten (156 chars), FAQ 1 and FAQ 2 rewritten (FAQPage schema is generated from them), schema keyword "oak wilt season Florida" → "live oak pruning Florida", registry excerpt rewritten. Title and URL unchanged. | same post, `includes/blog-data.php` | n/a |
| "Vascular diseases — oak wilt, laurel wilt, verticillium wilt" replaced by four entries: laurel wilt (redbay, swamp bay, avocado), oak decline, root rot, lightning. "Root damage" entry renamed "Construction root damage". | `blog/signs-dangerous-tree-deland`, sign 8 | Brief's list of causes documented in Central Florida |
| "oak wilt" removed from the monitoring list. | `llms-full.txt` | Same |

The remaining three occurrences of the words "oak wilt" on the site are the statements that it does not occur in Florida.

### 2. Three 9 Oct posts

Ten answers under question H2s rewritten to 40-60 words with a first sentence under 30 words that answers the heading. Existing sentences were kept and moved down where they still applied.

| Post | Heading | Was |
|---|---|---|
| emergency | What Should You Do Before the Crew Arrives? | no paragraph (list only) |
| emergency | How Does Insurance Work for Emergency Tree Removal? | 96 words |
| emergency | How Is Work Prioritized After a Hurricane? | 37 words, did not share a noun with the heading |
| prescription | What Are the Common Pruning Prescriptions? | no paragraph (list only) |
| prescription | When Should Rx Pruning Be Done in Central Florida? | 77 words |
| prescription | What Does a Bad Prescription Look Like? | 20 words |
| mitigation | How Does Mitigation Connect to the Tree Removal Permit? | 88 words |
| mitigation | What Commonly Triggers Mitigation? | no paragraph directly under the H2 |
| mitigation | How Does Mitigation Play Out on a Land Clearing Job? | 32 words |
| mitigation | How Does a Tree Service Help with Mitigation? | 24 words |

Sources: every new sentence restates what the post already said below it (the lists and sub-sections), plus the whitelist facts (DeLand, Volusia County, since 2014).

Mitigation post, unsourced statements:
- "Code enforcement can require the replacement planting after the fact, on top of the fine for unpermitted removal" → "Confirm with the City of DeLand or Volusia County what applies to an unpermitted removal before any cutting starts."
- FAQ "Both jurisdictions have used a tree fund or fee-in-lieu option" → "a tree fund or fee-in-lieu payment may be offered instead. Confirm with the City of DeLand or Volusia County whether that option is available…"
- Lead: "or pay into a tree fund" → "or, where the jurisdiction allows it, pay into a tree fund".

Also removed from the emergency post: "After a storm like the ones that have crossed Volusia County in recent seasons" (no source).

### 3. Em dashes

Every em dash (`—` and `&mdash;`) on a copy line added or rewritten in the v8 pass was replaced with a comma, full stop, colon or parentheses: 62 dashes on 51 lines across 19 files (FAQ, homepage, services hub, eleven service pages, the Spanish moss post, llms.txt, llms-full.txt). A re-scan of `git diff main` finds none left outside code comments in `includes/`.

Two visible side effects:
- The fallen-tree H1 separator changed from "DeLand, FL — Cut Up, Hauled Off…" to "DeLand, FL: Cut Up, Hauled Off…" because that H1 was rewritten in pass 1. The other eleven service H1s were not rewritten and still use the dash. `keyword-map.json` was updated to match.
- The homepage ticker item is now "DeLand, Florida · Since 2014".

Em dashes in copy this pass did not touch (older paragraphs in the blog posts and service pages) are unchanged.

### 4. Gate

```
php -l: 21 files, 0 errors
CLI render of the five edited posts: 0 PHP warnings each; FAQPage questions present (5, 4, 5, 5, 5).
Preview after push: the five posts, home, FAQ and the fallen-tree page return 200 with 0 PHP warnings.

qa_audit.py . premium --slug god-s-country-tree-service-llc --no-write
── CLAIMS ACCURACY ──────────────────────────────
  ✅ PASS  Metadata claims match the page
         42 titles/metas checked
  ✅ PASS  Metadata claims grounded in intake
         grounded USPs: 24/7, certified, emergency, financing, free estimate, insured, licensed, same-day, years

── CONTENT QUALITY ──────────────────────────────
  ✅ PASS  Word floors by page type
         33 pages checked
  ✅ PASS  Within-site similarity (swapped-city / template pages)
         no pair of same-type pages > 35% overlap
  ✅ PASS  Cross-site similarity (generic template prose)
         checked against 81 other sites
  ✅ PASS  Specificity density
         all pages ≥ 4 concrete items per 100 words
  ✅ PASS  Answer under question headings
  ✅ PASS  Credential refrain (same claim ≥5× per page)
  ✅ PASS  Filler phrases (report only)
         0 hits across 33 pages
  ✅ PASS  HTML5 landmarks (<main>, <article>)

── FLAGSHIP COMPONENTS ──────────────────────────
  ✅ PASS  Estimate tool: client authorization
         not authorized, not built
  ✅ PASS  Booking window: client authorization
         not authorized, not built

  PASS: 266  |  FAIL: 41  |  WARN: 7  |  Total: 314
  Blockers failed: 0  |  Tier: premium  |  Techniques: 6
  Grade: B  (94%)  ✅ PASSED
```

"Answer under question headings" now passes, so the CONTENT QUALITY section is fully clean (pass 1 had one warning there). The other warnings are the same ones explained in the pass 1 QA section.

### To verify

- I did not open EDIS FOR274 or the Florida First Detector updates myself; the oak wilt statement and the late-summer pruning guidance rest on the follow-up brief.
- The sentence that most native birds and their active nests are protected by federal and state law is general knowledge with no citation on the page.
- "December through February" as the oak structural window is my reading of "cool season, before the spring leaf change"; the brief gave the principles, not the months.
