<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$pageTitle = 'Tree Care Blog | ' . $siteName;
$pageDescription = 'Expert tree care advice from DeLand, FL certified arborists. Learn about tree trimming, pruning, storm preparation, and Central Florida tree health.';
$canonicalUrl = $siteUrl . '/blog/';
$currentPage = 'blog';
?>
<!DOCTYPE html>
<html lang="en">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">
  <section class="page-hero">
    <div class="container">
      <h1>Tree Care Blog</h1>
      <p class="lead">Expert advice from certified arborists serving DeLand and Volusia County since 2014</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="blog-grid">

        <article class="blog-card">
          <a href="/blog/hurricane-prep-tree-trimming-deland/" class="blog-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp" alt="Hurricane tree preparation in DeLand Florida" width="600" height="400" loading="lazy">
          </a>
          <div class="blog-card__content">
            <span class="blog-category">Storm Preparation</span>
            <time datetime="2026-06-01">June 1, 2026</time>
            <h2><a href="/blog/hurricane-prep-tree-trimming-deland/">When to Trim Trees Before Hurricane Season in DeLand, FL</a></h2>
            <p>Hurricane season starts June 1st in Florida. Here's when and how to trim trees to reduce storm damage risk in Central Florida.</p>
            <a href="/blog/hurricane-prep-tree-trimming-deland/" class="blog-read-more">Read More →</a>
          </div>
        </article>

      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>