<?php
/**
 * ============================================================
 * head.php — Document head
 * God's Country Tree Service LLC — DeLand, FL
 *
 * Page variables (set BEFORE including this file):
 *   $currentPage      string  page key ('home', 'services', 'about', ...)
 *   $pageTitle        string  <title> override
 *   $pageDescription  string  meta description override
 *   $canonicalUrl     string  canonical override (else computed from URI)
 *   $ogImage          string  og:image override
 *   $noindex          bool    true = noindex,nofollow (thank-you page)
 *   $heroImagePreload string  hero image URL to preload
 *   $pageSchema       string  extra JSON-LD <script> blocks from page
 *   $bodyClass        string  extra body classes
 * ============================================================
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage = $currentPage ?? 'home';
$logoUrl     = $siteUrl . '/assets/images/logo-v2.webp';

// V2.1 trade-noun default title + V2.2 CTR-engineered default description
$pageTitle = $pageTitle
    ?? 'Tree Service in DeLand, FL | ' . $siteName;
$pageDescription = $pageDescription
    ?? "Tree service in DeLand, FL from God's Country Tree Service — " . $yearsInBusiness . '+ years of tree removal, trimming & 24-hour storm cleanup. Free estimates. Call today.';

// Self-referencing canonical computed from the request URI (query stripped)
if (empty($canonicalUrl)) {
    $requestPath  = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
    $canonicalUrl = $siteUrl . $requestPath;
}

$ogImage = $ogImage ?? $logoUrl;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Primary SEO -->
<title><?php echo e($pageTitle); ?></title>
<meta name="description" content="<?php echo e($pageDescription); ?>">
<?php if (!empty($noindex)): ?>
<meta name="robots" content="noindex,nofollow">
<?php endif; ?>
<link rel="canonical" href="<?php echo e($canonicalUrl); ?>">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo e($pageTitle); ?>">
<meta property="og:description" content="<?php echo e($pageDescription); ?>">
<meta property="og:url" content="<?php echo e($canonicalUrl); ?>">
<meta property="og:image" content="<?php echo e($ogImage); ?>">
<meta property="og:site_name" content="<?php echo e($siteName); ?>">
<meta property="og:locale" content="en_US">

<!-- Fonts: 3-font system — Bricolage Grotesque (headings) + Figtree (body) + Caveat (accent) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://db.pageone.cloud">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600;700;800&family=Figtree:wght@300;400;500;600;700&family=Caveat:wght@500;600;700&display=swap" as="style">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600;700;800&family=Figtree:wght@300;400;500;600;700&family=Caveat:wght@500;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo e($cssVersion ?? '1'); ?>">

<!-- Favicons -->
<link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
<link rel="icon" type="image/png" href="/assets/images/favicon.png">
<link rel="apple-touch-icon" href="/assets/images/favicon.png">

<?php if (!empty($heroImagePreload)): ?>
<link rel="preload" as="image" href="<?php echo e($heroImagePreload); ?>" fetchpriority="high">
<?php endif; ?>

<!-- Google Analytics — to be activated post-launch with client's GA4 property ID
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($googleAnalyticsId); ?>"></script>
<parameter name="new_string"><!-- Google Analytics — to be activated post-launch with client's GA4 property ID
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($googleAnalyticsId); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo e($googleAnalyticsId); ?>');
</script>
-->

<?php if ($currentPage === 'home'):
    // LocalBusiness (Landscaper subtype) — homepage only. Inner pages
    // reference this @id via provider; they never duplicate it.
    // NO aggregateRating: no verified review data in intake, and
    // self-serving AggregateRating is forbidden by build standards.
    $offerCatalog = [];
    foreach ($services as $svc) {
        $offerCatalog[] = [
            '@type'       => 'Offer',
            'itemOffered' => [
                '@type'       => 'Service',
                'name'        => $svc['name'],
                'description' => $svc['description'],
                'url'         => $siteUrl . '/services/' . $svc['slug'] . '/',
            ],
        ];
    }
    $localBusinessSchema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Landscaper',
        '@id'         => $siteUrl . '/#organization',
        'name'        => $siteName,
        'url'         => $siteUrl . '/',
        'image'       => $logoUrl,
        'logo'        => $logoUrl,
        'slogan'      => $tagline,
        'description' => "God's Country Tree Service LLC is a tree service company based in DeLand, Florida, providing tree removal, tree trimming, pruning, crown reduction, emergency storm cleanup, and certified arborist services to residential and commercial properties across Volusia County since " . $yearEstablished . '.',
        'foundingDate' => (string) $yearEstablished,
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => $address['city'],
            'addressRegion'   => $address['state'],
            'postalCode'      => $address['zip'],
            'addressCountry'  => 'US',
        ],
        'geo' => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => $integrations['geo']['lat'],
            'longitude' => $integrations['geo']['lng'],
        ],
        'hasMap'    => $integrations['gbp_url'],
        'areaServed' => [
            '@type'       => 'GeoCircle',
            'geoMidpoint' => [
                '@type'     => 'GeoCoordinates',
                'latitude'  => $integrations['geo']['lat'],
                'longitude' => $integrations['geo']['lng'],
            ],
            'geoRadius' => '80000',
        ],
        'openingHoursSpecification' => [
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens'     => '07:00',
                'closes'    => '22:00',
            ],
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => 'Saturday',
                'opens'     => '08:00',
                'closes'    => '21:00',
            ],
        ],
        'sameAs' => [
            $integrations['bbb_url'],
            $integrations['gbp_url'],
        ],
        'hasOfferCatalog' => [
            '@type'           => 'OfferCatalog',
            'name'            => 'Tree Services in DeLand, FL',
            'itemListElement' => $offerCatalog,
        ],
    ];
    if (!empty($phone)) {
        $localBusinessSchema['telephone'] = '+1' . preg_replace('/\D+/', '', $phone);
    }
    if (!empty($email)) {
        $localBusinessSchema['email'] = $email;
    }
?>
<script type="application/ld+json"><?php echo json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<?php endif; ?>
<?php if (!empty($pageSchema)) { echo $pageSchema . "\n"; } ?>
</head>
<body class="<?php echo e(trim('page-' . $currentPage . ' ' . ($bodyClass ?? ''))); ?>">
