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
        'slug'     => 'tree-removal-cost-deland-fl',
        'title'    => 'How Much Does Tree Removal Cost in DeLand, FL? 2026 Price Guide',
        'excerpt'  => 'DeLand tree removal costs $300-$2,500+ depending on size, species, and access. Oak, pine, and palm pricing, emergency removal rates, and what affects your final bill.',
        'image'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
        'alt'      => 'Tree removal equipment and crew working in DeLand Florida',
        'date'     => 'July 12, 2026',
        'dateISO'  => '2026-07-12',
        'category' => 'Tree Removal',
        'readtime' => '8 min read',
    ],
    [
        'slug'     => 'tree-removal-permit-deland-fl',
        'title'    => 'Do You Need a Permit to Remove a Tree in DeLand, Florida?',
        'excerpt'  => 'DeLand and Volusia County tree removal permit rules differ. Learn when permits are required, protected tree species, and how to avoid fines before cutting.',
        'image'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062730640-gzvyp4-31206267_2042462085974393_6334697554642468864_n.webp',
        'alt'      => 'Pines marked with red X for removal, chipper and crew working behind, DeLand, FL',
        'date'     => 'July 10, 2026',
        'dateISO'  => '2026-07-10',
        'category' => 'Tree Law',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'signs-dangerous-tree-deland',
        'title'    => 'Is My Tree Dangerous? 9 Warning Signs DeLand Homeowners Should Not Ignore',
        'excerpt'  => 'Dead branches, trunk cracks, fungal growth, and sudden lean signal tree failure risk. Recognize hazard signs before a storm drops a tree on your DeLand home.',
        'image'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062731238-fsqor4-33943943_2062224527331482_6590160731939799040_n.webp',
        'alt'      => 'Tall pines looming over a DeLand, FL home under a dark storm sky',
        'date'     => 'July 8, 2026',
        'dateISO'  => '2026-07-08',
        'category' => 'Tree Health',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'best-time-trim-trees-florida',
        'title'    => 'Florida Tree-Trimming Calendar: When to Prune Oaks, Palms, Pines, and Magnolias in DeLand',
        'excerpt'  => 'Best months to trim live oaks, palms, pines, and magnolias in DeLand. Avoid oak wilt season, palm over-pruning, and storm-season trimming mistakes.',
        'image'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp',
        'alt'      => 'Roped arborist pruning branches inside a live oak canopy in DeLand, FL',
        'date'     => 'July 5, 2026',
        'dateISO'  => '2026-07-05',
        'category' => 'Tree Care',
        'readtime' => '9 min read',
    ],
    [
        'slug'     => 'insurance-fallen-tree-removal-florida',
        'title'    => 'Does Homeowners Insurance Cover Fallen Tree Removal in Florida?',
        'excerpt'  => 'Florida homeowners insurance typically covers tree removal when a tree damages insured property. What\'s covered, what\'s not, and how to file a claim in DeLand.',
        'image'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062762583-gyhtdt-489069018_1475682530496918_5987390642167918859_n.webp',
        'alt'      => 'Kubota grapple loader clearing a huge fallen live oak in DeLand, FL',
        'date'     => 'July 3, 2026',
        'dateISO'  => '2026-07-03',
        'category' => 'Insurance & Storm Damage',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'hurricane-prep-tree-trimming-deland',
        'title'    => 'When to Trim Trees Before Hurricane Season in DeLand, FL',
        'excerpt'  => 'Hurricane season starts June 1st in Florida. Here\'s when and how to trim trees to reduce storm damage risk in Central Florida.',
        'image'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
        'alt'      => 'Hurricane tree preparation in DeLand Florida',
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
                'image'            => $post['image'],
                'datePublished'    => $post['dateISO'],
                'dateModified'     => $post['dateISO'],
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
