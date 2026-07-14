<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

/**
 * ============================================================
 * sitemap.php — Dynamic XML sitemap (served at /sitemap.xml)
 * God's Country Tree Service LLC — DeLand, FL
 * Phase 5 — all indexable pages incl. compliance pages.
 * thank-you and 404 are intentionally excluded (noindex).
 * ============================================================
 */

header('Content-Type: application/xml; charset=utf-8');

$today = date('Y-m-d');

// [path, changefreq, priority]
$urls = [
    ['/',         'weekly',  '1.0'],
    ['/services/', 'monthly', '0.9'],
];

// Individual service pages
foreach ($services as $svc) {
    $urls[] = ['/services/' . $svc['slug'] . '/', 'monthly', '0.8'];
}

// Core content pages
$urls[] = ['/about/',   'monthly', '0.6'];
$urls[] = ['/contact/', 'monthly', '0.7'];
$urls[] = ['/faq/',     'monthly', '0.6'];

// Compliance pages (yearly, low priority)
$urls[] = ['/privacy-policy/', 'yearly', '0.3'];
$urls[] = ['/terms/',          'yearly', '0.3'];
$urls[] = ['/cookie-policy/',  'yearly', '0.3'];
$urls[] = ['/accessibility/',  'yearly', '0.3'];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as [$path, $freq, $priority]): ?>
  <url>
    <loc><?php echo e($siteUrl . $path); ?></loc>
    <lastmod><?php echo e($today); ?></lastmod>
    <changefreq><?php echo e($freq); ?></changefreq>
    <priority><?php echo e($priority); ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
