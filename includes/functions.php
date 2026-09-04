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

/**
 * Inline SVG icon from the repo-local assets/svg/icons set.
 * Icons are server-rendered per performance-2026.md Part C — no runtime
 * icon-injection scripts.
 * Usage: <?php echo icon('check'); ?> or <?php echo icon($iconVar); ?>
 */
function icon($name, $class = '') {
    static $cache = [];

    if (isset($cache[$name])) {
        $svg = $cache[$name];
    } else {
        // Icons ship with the repo — a VPS-absolute path would 404 on Hostinger
        $iconPath = $_SERVER['DOCUMENT_ROOT'] . '/assets/svg/icons/' . basename($name) . '.svg';
        if (!file_exists($iconPath)) {
            return '<!-- icon not found: ' . e($name) . ' -->';
        }
        $svg = file_get_contents($iconPath);
        // Strip the license comment and normalize whitespace
        $svg = preg_replace('/<!--.*?-->\s*/s', '', $svg);
        $svg = trim($svg);
        $cache[$name] = $svg;
    }

    // Decorative icons: hide from the accessibility tree (v6.2 standard)
    $svg = str_replace('<svg', '<svg aria-hidden="true"', $svg);
    // If a custom class is provided, inject it into the SVG tag
    if ($class) {
        $svg = str_replace('<svg', '<svg class="' . e($class) . '"', $svg);
    }

    return $svg;
}

// ── v6.3 (2026-09-04) responsive <picture> helpers ─────────────────────────
// Variants (-480/-960/-1600 .webp + .avif) are generated by the pipeline; these
// helpers only reference files that actually exist on disk, so a photo without
// variants degrades to a plain <img>.
function p1_variants(string $src, string $ext): array {
    if ($src === '' || $src[0] !== '/') return [];
    $base = preg_replace('/\.(webp|avif|jpe?g|png)$/i', '', $src);
    $out = [];
    foreach ([480, 960, 1600] as $w) {
        if (is_file($_SERVER['DOCUMENT_ROOT'] . "{$base}-{$w}.{$ext}")) $out[$w] = "{$base}-{$w}.{$ext}";
    }
    return $out;
}
function p1_srcset(array $variants): string {
    $parts = [];
    foreach ($variants as $w => $path) $parts[] = "{$path} {$w}w";
    return implode(', ', $parts);
}
/** Best local fallback for a plain src: the largest webp variant, else the original. */
function p1_best_src(string $src): string {
    $v = p1_variants($src, 'webp');
    return $v ? end($v) : $src;
}
function p1_picture(string $src, string $alt, int $w, int $h, string $sizes = '(max-width: 768px) 100vw, 600px', bool $lazy = true, string $class = ''): string {
    $webp = p1_variants($src, 'webp'); $avif = p1_variants($src, 'avif');
    $attrs = ($class !== '' ? ' class="' . e($class) . '"' : '') . ' alt="' . e($alt) . '" width="' . (int)$w . '" height="' . (int)$h . '"'
           . ($lazy ? ' loading="lazy" decoding="async"' : ' loading="eager" fetchpriority="high" decoding="async"');
    if (!$webp) return '<img src="' . e($src) . '"' . $attrs . '>';
    $img = '<img src="' . e(end($webp)) . '" srcset="' . e(p1_srcset($webp)) . '" sizes="' . e($sizes) . '"' . $attrs . '>';
    if ($avif && count($avif) === count($webp)) {
        return '<picture><source type="image/avif" srcset="' . e(p1_srcset($avif)) . '" sizes="' . e($sizes) . '">' . $img . '</picture>';
    }
    return $img;
}
/** Full-bleed hero photo replacing a CSS background-image (same cover/center crop). */
function p1_hero_picture(string $src, int $w = 2048, int $h = 1536): string {
    return '<picture class="hero-bg" aria-hidden="true">' . preg_replace('/^<picture>|<\/picture>$/', '', p1_picture($src, '', $w, $h, '100vw', false)) . '</picture>';
}
