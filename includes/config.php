<?php
/**
 * ============================================================
 * config.php — Site configuration
 * God's Country Tree Service LLC — DeLand, FL
 * Generated from build-plan.json (Phase 1 scaffold)
 * ============================================================
 */

// ---- Identity ----------------------------------------------
$slug     = 'god-s-country-tree-service-llc';
$siteName = "God's Country Tree Service LLC";
$tagline  = "Keeping God's Country Beautiful";
$industry = 'tree_service';
$tier     = 'premium';

// ---- Contact -----------------------------------------------
$phone          = '(407) 280-3484';
$phoneSecondary = '';
$email          = 'godscountrytreeservice@gmail.com';

$address = [
    'street' => '',
    'city'   => 'DeLand',
    'state'  => 'FL',
    'zip'    => '32720',
];

// ---- Domain / URLs -----------------------------------------
$domain  = 'godscountrytree.com';
$siteUrl = 'https://' . $domain;
// NOTE: $canonicalUrl is NOT set here — each page sets its own
// $canonicalUrl from $siteUrl + path before including head.php.

// ---- SEO ---------------------------------------------------
$primaryKeyword    = 'tree service deland fl';
$secondaryKeywords = [
    'tree trimming deland fl',
    'tree removal deland fl',
    'tree pruning deland fl',
    'emergency tree service deland fl',
    'certified arborist deland fl',
    'tree planting deland fl',
    'storm cleanup deland fl',
    'commercial tree service deland fl',
    'crown reduction deland fl',
    'dead tree removal deland fl',
    'tree service near me deland',
    'tree removal deltona fl',
];

// ---- Services ----------------------------------------------
$services = [
    [
        'name'        => 'Tree Planting & Shrub Installation',
        'slug'        => 'tree-planting-shrub-installation',
        'description' => 'Professional tree and shrub planting services for residential and commercial properties in DeLand. Expert selection and installation ensure healthy growth and landscape enhancement.',
        'keywords'    => ['tree planting DeLand FL', 'shrub installation', 'residential tree planting', 'landscape planting services'],
    ],
    [
        'name'        => 'Tree Trimming Services',
        'slug'        => 'tree-trimming-services',
        'description' => 'Expert tree trimming to maintain health, appearance, and safety. Seasonal and routine trimming available for trees of all sizes throughout DeLand.',
        'keywords'    => ['tree trimming DeLand FL', 'tree trimming near me', 'seasonal tree trimming', 'professional tree trimming'],
    ],
    [
        'name'        => 'Tree Pruning Services',
        'slug'        => 'tree-pruning-services',
        'description' => 'Precision pruning to improve tree structure, health, and aesthetics. Our certified arborists use proven techniques for optimal results.',
        'keywords'    => ['tree pruning DeLand FL', 'tree pruning services', 'professional pruning', 'certified arborist pruning'],
    ],
    [
        'name'        => 'Crown Reduction & Shaping',
        'slug'        => 'crown-reduction-shaping',
        'description' => 'Crown reduction and thinning services to reduce weight, improve light penetration, and enhance tree shape. Ideal for overgrown or storm-damaged trees.',
        'keywords'    => ['crown reduction DeLand', 'crown thinning', 'tree shaping', 'tree crown work'],
    ],
    [
        'name'        => 'Tree Removal',
        'slug'        => 'tree-removal',
        'description' => 'Safe and efficient tree removal for trees of all sizes. Our team handles hazardous, dead, and storm-damaged tree removal with professional expertise.',
        'keywords'    => ['tree removal DeLand FL', 'large tree removal', 'tree removal near me', 'professional tree removal'],
    ],
    [
        'name'        => 'Dead & Hazardous Tree Removal',
        'slug'        => 'dead-hazardous-tree-removal',
        'description' => 'Specialized removal of dead, diseased, and hazardous trees that pose safety risks to your property. Safe extraction and disposal included.',
        'keywords'    => ['dead tree removal DeLand', 'hazardous tree removal', 'dangerous tree removal', 'tree removal services'],
    ],
    [
        'name'        => 'Emergency Tree Service & Storm Cleanup',
        'slug'        => 'emergency-tree-service-storm-cleanup',
        'description' => '24-hour emergency tree service for storm damage, fallen trees, and urgent situations. Available around-the-clock for DeLand residents and businesses.',
        'keywords'    => ['emergency tree service DeLand FL', '24-hour tree service', 'storm cleanup', 'storm damage removal'],
    ],
    [
        'name'        => 'Fallen Tree Removal & Cleanup',
        'slug'        => 'fallen-tree-removal-cleanup',
        'description' => 'Rapid removal and cleanup of fallen trees from your property. We handle debris removal and site restoration for residential and commercial properties.',
        'keywords'    => ['fallen tree removal DeLand', 'fallen tree cleanup', 'tree debris removal', 'storm cleanup'],
    ],
    [
        'name'        => 'Residential Tree Services',
        'slug'        => 'residential-tree-services',
        'description' => 'Comprehensive tree care for homeowners including trimming, pruning, removal, and maintenance. Keep your residential landscape healthy and safe.',
        'keywords'    => ['residential tree service DeLand FL', 'home tree care', 'residential tree removal', 'property maintenance'],
    ],
    [
        'name'        => 'Commercial & HOA Tree Services',
        'slug'        => 'commercial-hoa-tree-services',
        'description' => 'Professional tree management for commercial properties, office parks, and HOA communities. Scheduled maintenance and property enhancement.',
        'keywords'    => ['commercial tree service DeLand FL', 'HOA tree services', 'business tree care', 'property tree maintenance'],
    ],
    [
        'name'        => 'Tree Maintenance & Care',
        'slug'        => 'tree-maintenance-care',
        'description' => 'Ongoing tree health and maintenance services including inspections, fertilization, and preventative care. Keep your trees thriving year-round.',
        'keywords'    => ['tree maintenance DeLand FL', 'tree care services', 'tree health care', 'arborist services'],
    ],
    [
        'name'        => 'Certified Arborist Services',
        'slug'        => 'certified-arborist-services',
        'description' => 'Expert arborist consultation and tree care from certified professionals. Diagnosis, treatment recommendations, and specialized tree services.',
        'keywords'    => ['certified arborist DeLand FL', 'arborist services', 'professional tree service', 'tree expert'],
    ],
];

// ---- Service Areas -----------------------------------------
// DeLand is the home base (owned by the homepage — V2.6 focus rule),
// represented on the overview but without its own thin page. The five
// surrounding communities are real western-Volusia cities within the
// 50-mile service radius; each gets a dedicated /service-area/{slug}/
// page with genuine, non-swappable local specifics.
$imgAreaBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';
$serviceAreas = [
    [
        'slug'      => 'deland',
        'city'      => 'DeLand',
        'state'     => 'FL',
        'zip'       => '32720',
        'primary'   => true,
        'hasPage'   => false,
        'direction' => 'home base',
        'distance'  => '',
        'icon'      => 'house',
        'img'       => 'https://i.imgur.com/Awf2Hm0.jpeg',
        'blurb'     => 'Our DeLand home base — the Athens of Florida, Stetson University, and a downtown canopy of live oaks we have cared for since 2014.',
        'landmarks' => ['Stetson University', 'Downtown Woodland Boulevard', 'Blue Spring State Park'],
    ],
    [
        'slug'      => 'deltona',
        'city'      => 'Deltona',
        'state'     => 'FL',
        'zip'       => '32725',
        'primary'   => false,
        'hasPage'   => true,
        'direction' => 'southeast of DeLand',
        'distance'  => 'about 10 miles',
        'icon'      => 'waves',
        'img'       => $imgAreaBase . '1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
        'blurb'     => "Volusia County's largest city and a 'City of Lakes' — quarter-acre lots of sand pine and laurel oak that take a beating every hurricane season.",
        'landmarks' => ['City of Lakes', 'Lake Monroe & the St. Johns River', 'Deltona Lakes'],
    ],
    [
        'slug'      => 'orange-city',
        'city'      => 'Orange City',
        'state'     => 'FL',
        'zip'       => '32763',
        'primary'   => false,
        'hasPage'   => true,
        'direction' => 'south of DeLand',
        'distance'  => 'about 8 miles',
        'icon'      => 'droplets',
        'img'       => $imgAreaBase . '1784062763583-cvnei3-503812193_4046117498942165_6962620168915463637_n.webp',
        'blurb'     => 'Home of Blue Spring State Park and its winter manatees, with historic moss-draped oaks shading streets first platted for citrus in the 1880s.',
        'landmarks' => ['Blue Spring State Park', 'Valentine Park', 'Historic citrus-era district'],
    ],
    [
        'slug'      => 'debary',
        'city'      => 'DeBary',
        'state'     => 'FL',
        'zip'       => '32713',
        'primary'   => false,
        'hasPage'   => true,
        'direction' => 'south of DeLand',
        'distance'  => 'about 12 miles',
        'icon'      => 'train-front',
        'img'       => $imgAreaBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp',
        'blurb'     => 'From historic DeBary Hall to the fast-growing subdivisions around the SunRail station, a young city planted thick with live oaks and sabal palms.',
        'landmarks' => ['DeBary Hall Historic Site', 'DeBary SunRail station', 'Gemini Springs Park'],
    ],
    [
        'slug'      => 'lake-helen',
        'city'      => 'Lake Helen',
        'state'     => 'FL',
        'zip'       => '32744',
        'primary'   => false,
        'hasPage'   => true,
        'direction' => 'southeast of DeLand',
        'distance'  => 'about 6 miles',
        'icon'      => 'gem',
        'img'       => $imgAreaBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp',
        'blurb'     => "The 'Gem of Florida' and neighboring Cassadaga — a Victorian historic district shaded by heritage oaks that residents guard closely.",
        'landmarks' => ['Cassadaga Spiritualist Camp', 'Victorian historic district', 'Local blueberry farms'],
    ],
    [
        'slug'      => 'deleon-springs',
        'city'      => 'DeLeon Springs',
        'state'     => 'FL',
        'zip'       => '32130',
        'primary'   => false,
        'hasPage'   => true,
        'direction' => 'north of DeLand',
        'distance'  => 'about 7 miles',
        'icon'      => 'trees',
        'img'       => $imgAreaBase . '1784062731501-oi9ekh-35294961_2071235779763690_210454243612557312_n.webp',
        'blurb'     => 'Rural, agricultural, and wooded — De Leon Springs State Park, fern farms, and large-acreage homesteads with big pines and hardwood hammock.',
        'landmarks' => ['De Leon Springs State Park', 'Spring Garden Ranch', 'Lake Woodruff National Wildlife Refuge'],
    ],
];

// ---- Social ------------------------------------------------
// None provided in intake — populate only with real client profiles.
$socialLinks = [];

// ---- Analytics ---------------------------------------------
$googleAnalyticsId = 'G-PENDING'; // to be configured post-launch with client's GA4 property

// ---- Brand Colors ------------------------------------------
// Phase 2 logo analysis (Logo_Updated.png, 1723x913, ~1.9:1
// combination mark): monochrome royal blue #0f30b0 on white.
// Primary = exact logo fill; accent = warm amber for CTA contrast.
$colors = [
    'primary'      => '#0f30b0',
    'primary-dark' => '#0a2178',
    'secondary'    => '#16265e',
    'accent'       => '#f59e0b',
];

// ---- Logo Analysis (Phase 2) -------------------------------
$logoAnalysis = [
    'aspect_ratio' => 1.89,          // combination mark (1.5:1–3:1)
    'nav_height'   => '56px',        // 50–60px band for combination marks
    'fill_color'   => '#0f30b0',     // sampled flat fill at full res
    'background'   => 'transparent PNG (/assets/images/logo-v2.png) — light bg knocked out; use full image logo on white/light surfaces',
];

// ---- Cache Busting -----------------------------------------
$cssVersion = '7'; // increment on every framework.css change

// ---- Business Facts ----------------------------------------
$yearsInBusiness = 12;
$yearEstablished = 2014;
$businessHours   = 'Monday 7 AM–10 PM, Tuesday 7 AM–10 PM, Wednesday 7 AM–10 PM, Thursday 7 AM–10 PM, Friday 7 AM–10 PM, Saturday 8 AM–9 PM, Sunday Closed';

// ---- Forms -------------------------------------------------
$formAction = 'https://formsubmit.co/godscountrytreeservice@gmail.com';

// ---- Integrations (from build-plan.json) -------------------
$integrations = [
    'accepts_sms'        => true,
    'gbp_place_id'       => 'ChIJVwQSzB4X54gRchJi5-d5nYo',
    'gbp_url'            => 'https://www.google.com/maps/place/?q=place_id:ChIJVwQSzB4X54gRchJi5-d5nYo',
    'directions_url'     => 'https://www.google.com/maps/dir/?api=1&destination=place_id:ChIJVwQSzB4X54gRchJi5-d5nYo',
    'review_request_url' => 'https://search.google.com/local/writereview?placeid=ChIJVwQSzB4X54gRchJi5-d5nYo',
    'bbb_url'            => 'https://www.bbb.org/us/fl/deland/profile/tree-service/gods-country-tree-bobcat-0733-90646461',
    'geo'                => ['lat' => 29.003812949999997, 'lng' => -81.16336855],
    'gbp_map_embed'      => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d539119.2522176659!2d-81.16336855!3d29.003812949999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7171ecc120457%3A0x8a9d79e724621472!2sGod&#39;s%20Country%20Tree%20Service%20LLC!5e1!3m2!1sen!2sus!4v1784063712642!5m2!1sen!2sus" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'elfsight_embed'     => '<script src="https://static.elfsight.com/platform/platform.js" defer></script>' . "\n" . '<div class="elfsight-app-ce7307de-a7b0-43fc-abb6-a90dc521b26f" data-elfsight-app-lazy></div>',
];
