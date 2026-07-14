<?php
/**
 * ============================================================
 * functions.php — Shared helpers
 * God's Country Tree Service LLC — DeLand, FL
 * ============================================================
 */

/**
 * HTML-escape shorthand.
 */
function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Returns ' aria-current="page"' when $page matches the current page key.
 * Usage: <a href="/about/"<?php echo isActivePage('about', $currentPage); ?>>
 */
function isActivePage($page, $currentPage = null) {
    if ($currentPage === null) {
        $currentPage = $GLOBALS['currentPage'] ?? '';
    }
    return $page === $currentPage ? ' aria-current="page"' : '';
}

/**
 * Formats a 10-digit US phone for display: (386) 555-0123.
 * Returns the input unchanged if it can't be normalized.
 */
function formatPhone($phone) {
    $digits = preg_replace('/\D+/', '', (string) $phone);
    if (strlen($digits) === 11 && $digits[0] === '1') {
        $digits = substr($digits, 1);
    }
    if (strlen($digits) === 10) {
        return sprintf('(%s) %s-%s', substr($digits, 0, 3), substr($digits, 3, 3), substr($digits, 6));
    }
    return $phone;
}

/**
 * Returns a tel: href for a phone number (tel:+1XXXXXXXXXX).
 */
function phoneHref($phone) {
    $digits = preg_replace('/\D+/', '', (string) $phone);
    if (strlen($digits) === 10) {
        $digits = '1' . $digits;
    }
    return 'tel:+' . $digits;
}

/**
 * Slugify a service name: "Crown Reduction & Shaping" → "crown-reduction-shaping".
 */
function getServiceSlug($name) {
    $slug = strtolower(trim((string) $name));
    $slug = str_replace('&', ' ', $slug);
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Slugify a city name: "Orange City" → "orange-city".
 */
function getAreaSlug($city) {
    return getServiceSlug($city);
}

/**
 * JSON-LD Service schema for a service page. Provider references the
 * homepage LocalBusiness @id — never duplicates the full entity block.
 */
function generateServiceSchema($service, $siteUrl = null, $siteName = null) {
    $siteUrl  = $siteUrl ?? $GLOBALS['siteUrl'];
    $siteName = $siteName ?? $GLOBALS['siteName'];
    $slug     = $service['slug'] ?? getServiceSlug($service['name']);

    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        '@id'         => $siteUrl . '/services/' . $slug . '/#service',
        'name'        => $service['name'],
        'description' => $service['description'] ?? '',
        'url'         => $siteUrl . '/services/' . $slug . '/',
        'serviceType' => $service['name'],
        'provider'    => ['@id' => $siteUrl . '/#organization'],
        'areaServed'  => [
            '@type'          => 'City',
            'name'           => 'DeLand',
            'containedInPlace' => ['@type' => 'State', 'name' => 'Florida'],
        ],
    ];

    return '<script type="application/ld+json">'
        . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>';
}

/**
 * JSON-LD FAQPage schema from [['q' => ..., 'a' => ...], ...] pairs.
 * AI comprehension aid only — FAQ rich results were deprecated in 2026.
 */
function generateFAQSchema($faqs) {
    if (empty($faqs)) {
        return '';
    }
    $entities = [];
    foreach ($faqs as $faq) {
        $entities[] = [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
        ];
    }
    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $entities,
    ];
    return '<script type="application/ld+json">'
        . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>';
}

/**
 * BreadcrumbList schema from [['name' => ..., 'url' => ...], ...].
 * Last item may omit 'url' (current page).
 */
function generateBreadcrumbSchema($crumbs, $siteUrl = null) {
    $siteUrl = $siteUrl ?? $GLOBALS['siteUrl'];
    $items = [];
    foreach ($crumbs as $i => $crumb) {
        $item = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['name'],
        ];
        if (!empty($crumb['url'])) {
            $item['item'] = (strpos($crumb['url'], 'http') === 0 ? '' : $siteUrl) . $crumb['url'];
        }
        $items[] = $item;
    }
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
    return '<script type="application/ld+json">'
        . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>';
}

/**
 * Core SEO meta tags (title, description, canonical) as one HTML string.
 * head.php builds these inline; helper provided for standalone templates.
 */
function generateMetaTags($title, $description, $canonical) {
    $html  = '<title>' . e($title) . "</title>\n";
    $html .= '<meta name="description" content="' . e($description) . "\">\n";
    $html .= '<link rel="canonical" href="' . e($canonical) . "\">\n";
    return $html;
}
