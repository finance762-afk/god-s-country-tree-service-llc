# God's Country Tree Service — search visibility pass (24 Sep 2026)

Site: ~/client-sites/god-s-country-tree-service-llc (PHP-include site, v6.1 standard, live at https://godscountrytree.com).
Read CLAUDE.md in this directory first, then ~/crm/references/seo-aeo-2026.md Parts A–C and
~/crm/references/blog-standard.md. Titles/descriptions are per-page `$pageTitle` / `$pageDescription`
variables (head.php renders them). The blog registry is includes/blog-data.php.

Why: Search Console, last 28 days — non-brand queries average position 46.7, 1 click on 1,052
impressions. Money terms: "tree removal deland" 101 impressions at 38.9, "deland tree service" 79 at
38.6, "deland certified arborist" 34 at 78. Queries already on page one get NO clicks: "tree service"
pos 3.3 (0/73), "tree pruning near me" 9.8 (0/78), "tree removal" 1.0 (0/12). Blog posts at pos 4–7
get 0 clicks. The home page (pos 13) outranks /services/tree-removal/ (pos 24) for the removal
terms. Service pages are 4,900–6,400 words each. GBP is strong: 4.8★ from 86 Google reviews.

Owner-approved scope (Calvin, Sep 24): items 2–5 below. Do all of them.

## Ground rules
- No invented claims. The rating and review count come from the Google Business Profile as of
  Sep 24 2026: **4.8 stars, 86 reviews**. Put them in includes/config.php as `$gbpRating = '4.8'` and
  `$gbpReviewCount = 86` (comment: "from GBP, update monthly") and interpolate them; never hard-code
  the numbers in page copy. Everything else stated on the site must already be true in the current
  copy (licensed & insured, 12+ years, 24-hour estimates, 24/7 emergency) — reuse, do not add.
- NAP unchanged. No `aggregateRating`/`ratingValue` JSON-LD (QA blocker); star text in titles is fine.
- Keep the hero estimate form (includes/hero-form.php), the Google Ads/GA4 tags, the partner badge,
  the FAQPage schema (keep it mirroring the VISIBLE FAQ after every trim), breadcrumbs, canonicals.
- URLs do not change. No new pages except none needed — the emergency page already exists.
- Work on a `staging` branch cut from `main`; commit in logical steps; merge to `main` only after QA.

## 2. Titles and descriptions with proof (CTR)
Rewrite `$pageTitle` + `$pageDescription` on: home, /services/ index, all 12 service pages,
/service-area/ and the 5 city pages, /about/, /contact/, /faq/.
- Pattern: `<Primary keyword incl. DeLand FL> | 4.8★ (86 Google Reviews) | <offer>` — keep the
  rating segment via the config vars; aim ≤ 60 characters; if too long drop the offer, never the city.
  Examples (adapt, don't copy blindly):
  - Home: `Tree Service DeLand FL | 4.8★ 86 Google Reviews | Free Estimates`
  - Removal: `Tree Removal DeLand FL | 4.8★ Rated | Free 24-Hour Estimates`
- Descriptions 150–160 chars: keyword + city, the rating, licensed & insured, the 24-hour free
  estimate, and the phone number (407) 280-3484.
- H1s keep their current keyword and city; only change an H1 if it does not name the service + DeLand.

## 3. Stop the home page and service pages competing
- Trim every service page to 1,500–2,000 words of focused copy: answer-first intro (direct answer
  in the first 50 words), what's included, process, local specifics (DeLand/Volusia, live oaks,
  hurricane season), pricing factors if already present, 5–6 FAQs, CTA. Cut repeated sections,
  generic "why trees matter" filler and anything duplicated from another service page. Keep the
  page's ≥2 premium visual techniques and its inline `<style>` (do not strip the page's CSS).
- Home page: trim from ~4,100 to ≤ 2,500 words. It stays the "tree service in DeLand" hub. Every
  service mentioned on the home page links to its service page with a descriptive anchor
  ("tree removal in DeLand", "tree trimming in DeLand", "emergency tree removal"). Remove home
  paragraphs that go deep on a single service; that depth belongs on the service page.
- Differentiate the two overlapping pages: /services/fallen-tree-removal-cleanup/ targets
  "fallen tree removal" and /services/emergency-tree-service-storm-cleanup/ targets "emergency tree
  removal DeLand" + "storm damage tree removal DeLand". Cross-link them once each with those anchors.
- Update llms.txt / llms-full.txt if page summaries changed.

## 4. Blog CTR pass
For every post in includes/blog-data.php (11): rewrite the title as a direct answer, ≤ 60 chars, NO
brand suffix (check head.php / the post template — the live titles currently end in
"| God's Country Tree Service LLC"; blog titles must not carry it), include "2026" where it reads
naturally (e.g. "Does Insurance Cover Fallen Tree Removal in Florida? (2026)"), and rewrite the
meta description as the answer + a reason to click. Keep slugs. Update, in sync: blog-data.php title,
the post's `$pageTitle`, H1, BlogPosting `headline`, OG title. Make sure each post's visible FAQ and
FAQPage schema exist and match (posts at positions 4–7 with 0 clicks: insurance-fallen-tree-removal-
florida, is-spanish-moss-bad-for-trees, best-time-trim-trees-florida, best-trees-to-plant-central-
florida, tree-removal-permit-deland-fl — do these first).

## 5. Emergency page for hurricane season
/services/emergency-tree-service-storm-cleanup/ exists. Make it the page for "emergency tree removal
DeLand FL" and "storm damage tree removal DeLand": title `Emergency Tree Removal DeLand FL | 24/7
Storm Cleanup | 4.8★`, H1 to match, first 50 words answer "who to call / what happens next", a
hurricane-season block (Sep–Nov: what to do the first hour, insurance photos, when NOT to touch a
tree near power lines), FAQ. Only claims already on the site (24/7, same-day). Then link it from the
home hero as the second CTA ("Storm damage? 24/7 emergency tree removal" → the page), put it first
in the home service cards, and add it to the mobile sticky bar if the bar has room for a third link
(otherwise leave the bar). Cross-link from the fallen-tree page and the two storm blog posts.

## QA, deploy, verify
- `php -l` every edited file. Local preview if needed: `php -S 127.0.0.1:8090` (NEVER port 8000).
- `python3 ~/crm/qa/qa_audit.py --legacy` (pass `--url https://godscountrytree.com` after deploy if it
  supports it) before and after: no new blockers; the two pre-existing ones (partner-badge hotlink
  false positive, city pages without a form) are known and not yours.
- Merge staging → main, then deploy:
  `bash ~/crm/scripts/hostinger-deploy.sh god-s-country-tree-service-llc --branch main --domain godscountrytree.com --expect <main sha>`
- Verify live with a browser UA: titles on home + 3 service pages + 2 blog posts; word counts;
  emergency CTA in the hero; FAQPage JSON-LD parses on 3 pages; sitemap.xml still lists every URL;
  no `aggregateRating` anywhere.
- Report in GC-SEO-PASS-REPORT.md: before/after title table, before/after word counts per page,
  what you cut, verification output, anything skipped and why. Then `touch .gc-seo-pass-done`.
