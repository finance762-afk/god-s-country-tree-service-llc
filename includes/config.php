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
// Phone and email were empty in build-plan.json intake — left blank
// intentionally. Later phases must not fabricate contact details.
$phone          = '';
$phoneSecondary = '';
$email          = '';

$address = [
    'street' => '',
    'city'   => 'DeLand',
    'state'  => 'FL',
    'zip'    => '32720',
];

// ---- Domain / URLs -----------------------------------------
// build-plan.json has no production_domain — default to the preview
// domain "{$slug}.pageone.cloud". NEVER blank.
$domain  = $slug . '.pageone.cloud';
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
$serviceAreas = [
    [
        'city'    => 'DeLand',
        'state'   => 'FL',
        'zip'     => '32720',
        'primary' => true,
    ],
];

// ---- Social ------------------------------------------------
// None provided in intake — populate only with real client profiles.
$socialLinks = [];

// ---- Analytics ---------------------------------------------
$googleAnalyticsId = 'G-XXXXXXXXXX'; // placeholder — replace post-launch

// ---- Brand Colors ------------------------------------------
// From build-plan.json design block (extracted_from_logo: false —
// pending Phase 0/2 logo analysis refinement).
$colors = [
    'primary'   => '#1a2b3c',
    'secondary' => '#4d5e6f',
    'accent'    => '#06b6d4',
];

// ---- Business Facts ----------------------------------------
$yearsInBusiness = 12;
$yearEstablished = 2014;
$businessHours   = 'Monday 7 AM–10 PM, Tuesday 7 AM–10 PM, Wednesday 7 AM–10 PM, Thursday 7 AM–10 PM, Friday 7 AM–10 PM, Saturday 8 AM–9 PM, Sunday Closed';

// ---- Forms -------------------------------------------------
$formAction = 'https://formsubmit.co/CustomerService@pageoneinsights.com';

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
