<?php
/**
 * ============================================================
 * blog-data.php — Blog Post Registry (Premium Requirement)
 * God's Country Tree Service LLC — DeLand, FL
 *
 * SINGLE SOURCE OF TRUTH for all blog posts. The blog index,
 * homepage preview, related-articles blocks, and sitemap.php
 * all read from this registry. Hardcoded post lists anywhere
 * = QA fail.
 * ============================================================
 */

$blogPosts = [
    [
        'slug'     => 'emergency-tree-service-deland-what-to-expect',
        'title'    => 'Emergency Tree Service in DeLand: What to Expect',
        'excerpt'  => 'A tree on the roof, a car, or a power line is an emergency. Here is what to do first, what happens when the crew arrives, and how insurance and after-storm triage work in Volusia County.',
        'image'    => '/assets/images/1784062737583-f7n0kp-37107879_2101564903397444_7138537925750292480_n-480.webp',
        'alt'      => 'God\'s Country bucket truck set up at a dead double-trunk tree beside a home',
        'date'     => 'October 9, 2026',
        'dateISO'  => '2026-10-09',
        'category' => 'Storm Damage',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'prescription-pruning-deland',
        'title'    => 'What Is Prescription Pruning? Rx Pruning in DeLand',
        'excerpt'  => 'Prescription pruning means a certified arborist writes a plan for each tree before a cut is made: the objective, the cut types, how much live crown comes off, and when. Here is how it works for DeLand oaks, pines, and magnolias.',
        'image'    => '/assets/images/1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n-960.webp',
        'alt'      => 'Arborist roped into an oak canopy making pruning cuts',
        'date'     => 'October 9, 2026',
        'dateISO'  => '2026-10-09',
        'category' => 'Tree Care',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'tree-mitigation-deland-volusia-county',
        'title'    => 'Tree Mitigation in DeLand: What It Means for Owners',
        'excerpt'  => 'When a protected tree comes down in DeLand or Volusia County, mitigation is the replacement planting or fund payment that goes with the permit. Learn what triggers it, what is exempt, and how to plan a clearing job around it.',
        'image'    => '/assets/images/1784062730640-gzvyp4-31206267_2042462085974393_6334697554642468864_n-480.webp',
        'alt'      => 'Pines marked with a red X for removal on a wooded lot, chipper crew behind',
        'date'     => 'October 9, 2026',
        'dateISO'  => '2026-10-09',
        'category' => 'Tree Law',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'tree-fell-on-house-deland-fl',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Tree Fell on Your House in DeLand? 5 Steps to Take Now',
        'excerpt'  => 'A tree on your roof is a safety emergency first and an insurance claim second. Here are the five steps DeLand homeowners should take, in order, from evacuation to full cleanup.',
        'image'    => '/assets/images/1784062737583-f7n0kp-37107879_2101564903397444_7138537925750292480_n-480.webp',
        'alt'      => 'Bucket truck positioned at a dead double-trunk tree next to a house',
        'date'     => 'August 18, 2026',
        'dateISO'  => '2026-08-18',
        'category' => 'Storm Damage',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'is-spanish-moss-bad-for-trees',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Is Spanish Moss Bad for Trees? No — But Watch for This',
        'excerpt'  => 'Spanish moss is an air plant, not a parasite — it never harms a healthy tree. Learn why heavy moss often signals decline and when removal actually makes sense.',
        'image'    => '/assets/images/certified-arborist-examining-tree-health-in-dela-960.webp',
        'alt'      => 'Climber roped into a live oak draped with Spanish moss',
        'date'     => 'August 18, 2026',
        'dateISO'  => '2026-08-18',
        'category' => 'Tree Health',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'best-trees-to-plant-central-florida',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Best Trees to Plant in Central Florida Yards (2026)',
        'excerpt'  => 'Live oak, sabal palm, and bald cypress top the list for Central Florida yards — hurricane-tested picks for shade, color, and wildlife, plus the trees DeLand homeowners should never plant.',
        'image'    => '/assets/images/1784062733583-jhvosk-35788256_2078205079066760_5169623066409435136_n-480.webp',
        'alt'      => 'Freshly planted and mulched beds with palms and shrubs at a Central Florida home',
        'date'     => 'August 18, 2026',
        'dateISO'  => '2026-08-18',
        'category' => 'Planting',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'what-does-certified-arborist-do',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'What Does a Certified Arborist Do? When You Need One',
        'excerpt'  => 'A certified arborist is an ISA-credentialed pro who assesses tree health, prunes to standard, and diagnoses disease. When you need one — and the red flags of unqualified crews.',
        'image'    => '/assets/images/1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n-960.webp',
        'alt'      => 'Arborist in a helmet and harness working inside an oak canopy',
        'date'     => 'August 18, 2026',
        'dateISO'  => '2026-08-18',
        'category' => 'Tree Health',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'tree-topping-vs-crown-reduction',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Tree Topping vs Crown Reduction: Why Topping Fails',
        'excerpt'  => 'Topping starves trees, invites decay, and creates weak regrowth that fails in storms. Crown reduction is the professional way to make a tree shorter — here is the difference.',
        'image'    => '/assets/images/1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n-480.webp',
        'alt'      => 'Mature oak with a full, balanced crown in a front yard',
        'date'     => 'August 18, 2026',
        'dateISO'  => '2026-08-18',
        'category' => 'Tree Care',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'tree-removal-cost-deland-fl',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Tree Removal Cost in DeLand, FL: What Drives the Price',
        'excerpt'  => 'What a DeLand tree removal costs depends on size, species, access, and what is underneath the tree. How oak, pine, and palm jobs differ, what stump grinding and permits add, and how to compare written quotes.',
        'image'    => '/assets/images/1784062753583-2wp304-76756943_2456228011264463_6144757071268020224_n-480.webp',
        'alt'      => 'Fresh-cut oak log section held in the jaws of a grapple loader',
        'date'     => 'July 12, 2026',
        'dateISO'  => '2026-07-12',
        'category' => 'Tree Removal',
        'readtime' => '8 min read',
    ],
    [
        'slug'     => 'tree-removal-permit-deland-fl',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Do You Need a Tree Removal Permit in DeLand? (2026)',
        'excerpt'  => 'DeLand and Volusia County tree removal permit rules differ. Learn when permits are required, protected tree species, and how to avoid fines before cutting.',
        'image'    => '/assets/images/1784062730640-gzvyp4-31206267_2042462085974393_6334697554642468864_n-480.webp',
        'alt'      => 'Pines marked with a red X for removal, chipper and crew working behind',
        'date'     => 'July 10, 2026',
        'dateISO'  => '2026-07-10',
        'category' => 'Tree Law',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'signs-dangerous-tree-deland',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Is My Tree Dangerous? 9 Warning Signs in DeLand, FL',
        'excerpt'  => 'Dead branches, trunk cracks, fungal growth, and sudden lean signal tree failure risk. Recognize hazard signs before a storm drops a tree on your DeLand home.',
        'image'    => '/assets/images/1784062731238-fsqor4-33943943_2062224527331482_6590160731939799040_n-480.webp',
        'alt'      => 'Tall pines looming over a DeLand, FL home under a dark storm sky',
        'date'     => 'July 8, 2026',
        'dateISO'  => '2026-07-08',
        'category' => 'Tree Health',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'best-time-trim-trees-florida',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Best Time to Trim Trees in Florida: Month by Month (2026)',
        'excerpt'  => 'Best months to trim live oaks, palms, pines, and magnolias in DeLand. Avoid oak wilt season, palm over-pruning, and storm-season trimming mistakes.',
        'image'    => '/assets/images/1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n-960.webp',
        'alt'      => 'Roped arborist pruning branches inside an oak canopy',
        'date'     => 'July 5, 2026',
        'dateISO'  => '2026-07-05',
        'category' => 'Tree Care',
        'readtime' => '9 min read',
    ],
    [
        'slug'     => 'insurance-fallen-tree-removal-florida',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'Does Insurance Cover Fallen Tree Removal in Florida? (2026)',
        'excerpt'  => 'Florida homeowners insurance typically covers tree removal when a tree damages insured property. What\'s covered, what\'s not, and how to file a claim in DeLand.',
        'image'    => '/assets/images/1784062762583-gyhtdt-489069018_1475682530496918_5987390642167918859_n-960.webp',
        'alt'      => 'Kubota grapple loader clearing a huge fallen live oak in DeLand, FL',
        'date'     => 'July 3, 2026',
        'dateISO'  => '2026-07-03',
        'category' => 'Insurance & Storm Damage',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'hurricane-prep-tree-trimming-deland',
        'modifiedISO' => '2026-10-09', // v8 content pass
        'title'    => 'When to Trim Trees Before Hurricanes in DeLand: March–May',
        'excerpt'  => 'Hurricane season starts June 1st in Florida. Here\'s when and how to trim trees to reduce storm damage risk in Central Florida.',
        'image'    => '/assets/images/1784062738583-td3dws-37173033_2101564890064112_9062224687815196672_n-480.webp',
        'alt'      => 'Bucket truck crew working in a tall tree beside a home',
        'date'     => 'June 1, 2026',
        'dateISO'  => '2026-06-01',
        'category' => 'Storm Preparation',
        'readtime' => '7 min read',
    ],
];

/**
 * Build the BlogPosting + BreadcrumbList @graph JSON-LD for a post.
 * Registry-driven: headline, image, dates, and category all come from
 * $blogPosts. Pages pass their slug + a keywords string and echo the
 * result via head.php's $pageSchema hook.
 *
 * @param string $slug        Post slug (must exist in $blogPosts)
 * @param string $keywords    Comma-separated keyword string for this post
 * @param string $description Meta description (reuse $pageDescription)
 * @return string             Full <script type="application/ld+json"> block
 */
function blogPostSchema($slug, $keywords, $description)
{
    global $blogPosts, $siteUrl, $siteName;

    $post = null;
    foreach ($blogPosts as $p) {
        if ($p['slug'] === $slug) { $post = $p; break; }
    }
    if ($post === null) {
        return '';
    }

    $postUrl = $siteUrl . '/blog/' . $post['slug'] . '/';
    $graph = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'            => 'BlogPosting',
                '@id'              => $postUrl . '#article',
                'headline'         => $post['title'],
                'description'      => $description,
                'image'            => $siteUrl . (function_exists('p1_best_src') ? p1_best_src($post['image']) : $post['image']),
                'datePublished'    => $post['dateISO'],
                'dateModified'     => $post['modifiedISO'] ?? $post['dateISO'],
                'author'           => [
                    '@type' => 'Organization',
                    'name'  => $siteName,
                    '@id'   => $siteUrl . '/#organization',
                ],
                'publisher'        => ['@id' => $siteUrl . '/#organization'],
                'url'              => $postUrl,
                'mainEntityOfPage' => $postUrl,
                'articleSection'   => $post['category'],
                'keywords'         => $keywords,
            ],
            [
                '@type'           => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => $siteUrl . '/blog/'],
                    ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $postUrl],
                ],
            ],
        ],
    ];

    return '<script type="application/ld+json">'
        . json_encode($graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>';
}
