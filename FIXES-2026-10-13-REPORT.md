# God's Country Tree Service: SEO fixes 2026-10-13 (report)

Branch `seo-fixes-2026-10-13`, cut from `staging` after backup commit `8796aef`. Nothing was pushed or deployed. Source brief: `SEO-BRIEF-2026-10-13.md`.

## Commits on this branch

| Commit | What |
|---|---|
| `8796aef` | backup before 2026-10-13 SEO fixes (the untracked v8/SEO-pass reports and `qa-report.json` as they were) |
| `9507cca` | Fix #1: Google place ID typo in `includes/config.php` and `build-plan.json` |
| `ae4953e` | Fix #2: pruning, crown reduction and maintenance merged into `/services/tree-trimming-services/`; 301s; nav, cards, links, keyword map, llms files |
| `3a7d5fa` | Fix #3: new `/services/palm-tree-trimming/`, `/services/stump-grinding/`, `/services/land-clearing/` pages plus 960px photo variants |
| (this) | this report |

## 1. Place ID

- `ChIJVwQSzB4X54gRchJi5-d5nYo` replaced with `ChIJVwQSzB4X54gRchRiJOd5nYo` in `includes/config.php` (`gbp_place_id`, `gbp_url`, `directions_url`, `review_request_url`) and `build-plan.json` (4 fields). `head.php` builds `hasMap` and `sameAs` from `$integrations['gbp_url']`, so the LocalBusiness schema, the "Read Our Google Reviews" badges and the thank-you review link all pick it up.
- Verification limit: the brief states the correct ID came from the GBP API read. I could not confirm it against Google Maps from this VPS (the Maps place URL returns a consent page, no business name). The CID in the brief (`9988273582232441970`) does match the hex CID already embedded in the site's map iframe (`0x8a9d79e724621472`), so the brief's GBP data and the site's embed describe the same listing. Please click `https://www.google.com/maps/place/?q=place_id:ChIJVwQSzB4X54gRchRiJOd5nYo` once from a browser to confirm it opens the God's Country listing.

## 2. Merge of the four trimming/pruning pages

Kept URL: `/services/tree-trimming-services/` (it owns the primary keyword "tree trimming deland fl" and the existing GSC history). Nav label is now "Tree Trimming & Pruning".

Note: the brief recommended differentiating the four pages first and merging only if GSC later showed cannibalisation. The instruction for this pass was to merge now, so the merge was done; the per-page differentiation route is no longer needed.

Redirected (301, in `.htaccess`, placed before the clean-URL rules):

- `/services/tree-pruning-services/` → `/services/tree-trimming-services/`
- `/services/crown-reduction-shaping/` → `/services/tree-trimming-services/`
- `/services/tree-maintenance-care/` → `/services/tree-trimming-services/`

The three directories were deleted. `.htaccess` is honoured on Hostinger (Apache). The nginx preview host ignores `.htaccess`, so on `preview-god-s-country-tree-service-llc.pageone.cloud` the three old URLs will 404 until production; the merged page itself previews normally. (PHP redirect stubs were tried and removed because `qa_audit.py` audits any `services/*/index.php` as a content page and failed them.)

What the merged page now carries (all copy from the four previous pages, rewritten into one flow, no new claims):

1. Signs a tree is overdue (adds the codominant-stem sign from the pruning page)
2. "What's the difference between tree trimming, pruning and crown reduction?" definition cards plus the DIY-vs-professional points (keeps the existing "12+ years" stat block as it was)
3. Trimming types (clearance, canopy health, appearance), with palms deferred to the new palm page
4. Pruning cuts timeline (structural, deadwood, thinning, clearance) with links to the tree-mitigation and prescription-pruning posts
5. Crown reduction vs topping comparison, refusal note, link to the topping post, two reduction photos
6. Maintenance plans for homes and HOAs (`id="maintenance-plans"`): plan-vs-emergency cards, visit steps, cadence cards, link to the commercial/HOA page
7. Seasonal calendar, cost factors, near-me proof, 8 FAQs (6 trimming, 2 pruning), related services (palm trimming, arborist, dead/hazardous), closing CTA

Title: "Tree Trimming & Pruning DeLand FL | 4.8★ | Free Estimates" (57 chars). Meta 160 chars. Inline CSS 979 lines, tokens only.

Links and data updated for the merge:

- `includes/config.php` `$services` (registry drives nav, mobile menu, footer, hero-form select, sitemap.php, services hub grid, offer catalog schema)
- `includes/service-cards.php` card data
- `index.php` homepage: service cards (pruning → stump grinding, crown → land clearing), the two service paragraphs, ticker
- `services/index.php`: decision-path links ("Maintenance Contracts" → land clearing; "Maintenance Plans" → merged page anchor) and the grouping sentence
- `faq/index.php`: the "What tree services do you provide?" answer
- Related-services paragraphs and card arrays on `commercial-hoa`, `certified-arborist`, `residential`, `tree-planting`, `tree-removal`
- Area pages (`debary`, `deleon-springs`, `deltona`, `lake-helen`, `orange-city`): card arrays and the two paragraphs that linked the old pages
- Blog posts: Related Services lists repointed and deduped, inline links repointed (8 posts)
- `keyword-map.json`: pruning/crown/maintenance keywords repointed to the merged page's headings; `tree mitigation in deland` → the mitigation post, `prescription pruning in deland` → the Rx pruning post; new-page keywords added
- `llms.txt`, `llms-full.txt`: service catalog rewritten (no new claims; the merged entry and three new entries only state what the pages state)

Not touched: `build-plan.json` page list (intake artifact), `qa-report.json` (generated), `includes/functions.php` comment that mentions the old slug as a slugify example.

## 3. New service pages

| Page | H1 | Hero / body photos | CSS lines |
|---|---|---|---|
| `/services/palm-tree-trimming/` | Palm Tree Trimming in DeLand, FL: Clean Crowns Without the Hurricane Cut | cjgzse / pr9hsn, 73serd, fuv06z, nsuvrpt | 850 |
| `/services/stump-grinding/` | Stump Grinding in DeLand, FL: Below Grade, Raked Clean, Ready for Sod | g1q71x / ekffah, 2wp304, 5oqzq0 | 640 |
| `/services/land-clearing/` | Lot & Land Clearing in DeLand, FL: Keep the Oaks, Clear the Rest | t1gqhh / ekffah, gzvyp4, tm1j7f, 5ppnr0, x2rpuy, 2dtirn | 755 |

Each page: question H2s with answer-first blocks naming the company, 6 FAQs, Service + FAQPage + BreadcrumbList + Speakable schema, hero lead form preselecting the service, near-me section with area chips and the GBP/BBB badges, related-services cards, closing CTA, `data-p1-dynamic` on loop containers, no reveal classes in the hero.

Fact sources used, and nothing beyond them: intake FAQ ("most estimates include debris removal and stump grinding", "licensed and insured", free estimates within 24 hours), the GBP services list (Palm Tree pruning, Lot And Land Clearing, Stump Grinding; excavating-contractor category), the owner's about-page letter (timber background, "clearing a lot for a new project", farms and businesses, "cleaner than we found it"), equipment visible in the client photos (Kubota SVL75-2 grapple track loader, grapple skid steer, bucket truck, chip truck lettered "Tree Service – Bobcat Service", chipper), and UF/IFAS palm guidance phrased as general guidance. No years, prices, counts, certifications, reviews, response-time or "24/7" claims were added. Permit statements say "likely" and "confirm with the City of DeLand or Volusia County".

Photo caveat (brief fix #5 asked for job photos per page): the library has no palm-trimming action shot and no grinder-in-action shot. The palm page uses finished-bed and crown photos captioned as such; the stump page uses the flush-cut stump, the pulled root balls and the log/slab shots. Both gaps are recorded in `content/image-manifest.md`.

Images: the processed originals on Supabase are at most 960px wide, so the whole library has been serving 480px variants only. I generated 960px webp+avif variants for the 11 landscape photos used on these pages and the merged page (`sharp`, sizes 69–223KB; palm hero kept under 150KB). Portrait photos stay 480px only. No 1600px variant is possible from the stored originals.

## 4. Left alone on purpose (per instruction)

- Founding year / "since 2014" / "12+ years" / "21+ years" and the `foundingDate` schema (brief fix #2)
- "Certified arborist" wording, the arborist FAQ, workers' comp claim (brief fix #3); the merged page keeps only the pre-existing phrasing it inherited
- Town pages' copy and the GBP service-area mismatch (brief fix #6)
- Proof blocks / review quotes (fix #7), BBB link check and `sameAs` additions (fix #8)
- The `tree removal services` keyword move from the dead/hazardous page to tree-removal (fix #4a)

## Verification run

- `php -l` clean on every edited file; every changed page renders 200 under `php -S` with zero `icon not found` and zero PHP warnings.
- `sitemap.php` lists the 12 current service URLs and none of the three old ones.
- The three old URLs 301 to the merged page under Apache rules (verified in `.htaccess`; PHP-stub test showed 301 + correct Location before the stubs were removed).
- `qa_audit.py . premium`: passed, grade B, score 93, 0 blockers, 47 warnings. Baseline before this work (committed `qa-report.json`): grade B, score 94, 0 blockers, 45 warnings. The two extra warnings are "Image resolution" notes on two new 960×480 panorama variants, the same note the audit already raises on every 480px file.
- Meta descriptions 157–160 chars, titles 53–58 chars on the four pages.

## Rollback

- Whole pass: `git checkout staging` (the branch was never merged or pushed). To discard it: `git branch -D seo-fixes-2026-10-13`.
- Only the new pages: `git revert 3a7d5fa` (removes the three pages and the 960px variants; the registry entries in `config.php`/`service-cards.php` from `ae4953e` would then link to missing pages, so revert `ae4953e` as well or remove the three entries).
- Only the merge: `git revert ae4953e` restores the three old pages, the old registry, every repointed link and the pre-merge `.htaccess`.
- Only the place ID: `git revert 9507cca`.
- The pre-work state is `8796aef` (`git checkout 8796aef -- .` if you want the files without rewriting history).

## For Calvin / Caleb before this goes to main

1. Confirm palm trimming, stump grinding and land clearing are services Caleb wants sold (they are on the GBP, which is why they were built).
2. Confirm the place ID opens the right listing (see section 1).
3. After deploy: resubmit `sitemap.xml` in Search Console and spot-check the three 301s on the live domain.
4. Ask Caleb for a palm-trimming action photo and a stump-grinder photo; both pages would be stronger with them.
5. Preview URLs: `https://preview-god-s-country-tree-service-llc.pageone.cloud/services/tree-trimming-services/`, `.../services/palm-tree-trimming/`, `.../services/stump-grinding/`, `.../services/land-clearing/` (preview serves `staging`; this branch needs merging to staging first).

## Files changed (staging → this branch)

```
A assets/images/1784062729442-t1gqhh-…
A assets/images/1784062729745-ekffah-…
A assets/images/1784062730039-tm1j7f-…
A assets/images/1784062730640-gzvyp4-…
A assets/images/1784062730938-x2rpuy-…
A assets/images/1784062732583-cjgzse-…
A assets/images/1784062734583-fuv06z-…
A assets/images/1784062735583-73serd-…
A assets/images/1784062740583-2dtirn-…
A assets/images/1784062748583-jkbp6v-…
A services/land-clearing/index.php
A services/palm-tree-trimming/index.php
A services/stump-grinding/index.php
D services/crown-reduction-shaping/index.php
D services/tree-maintenance-care/index.php
D services/tree-pruning-services/index.php
M .htaccess
M blog/best-time-trim-trees-florida/index.php
M blog/best-trees-to-plant-central-florida/index.php
M blog/hurricane-prep-tree-trimming-deland/index.php
M blog/is-spanish-moss-bad-for-trees/index.php
M blog/prescription-pruning-deland/index.php
M blog/signs-dangerous-tree-deland/index.php
M blog/tree-topping-vs-crown-reduction/index.php
M blog/what-does-certified-arborist-do/index.php
M build-plan.json
M content/image-manifest.md
M faq/index.php
M includes/config.php
M includes/service-cards.php
M index.php
M keyword-map.json
M llms-full.txt
M llms.txt
M service-area/debary/index.php
M service-area/deleon-springs/index.php
M service-area/deltona/index.php
M service-area/lake-helen/index.php
M service-area/orange-city/index.php
M services/certified-arborist-services/index.php
M services/commercial-hoa-tree-services/index.php
M services/index.php
M services/residential-tree-services/index.php
M services/tree-planting-shrub-installation/index.php
M services/tree-removal/index.php
M services/tree-trimming-services/index.php
```
