<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

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
      <span class="eyebrow-label">Tree Care Insights</span>
      <h1>Tree Care Blog</h1>
      <p class="lead">Expert advice from certified arborists serving DeLand and Volusia County since 2014</p>
    </div>
  </section>

  <section class="section" style="background: linear-gradient(180deg, var(--color-light) 0%, var(--color-white) 100%);">
    <div class="container">
      <div class="blog-grid">

        <?php foreach ($blogPosts as $post): ?>
        <article class="blog-card">
          <a href="/blog/<?php echo e($post['slug']); ?>/" class="blog-card__image">
            <img src="<?php echo e($post['image']); ?>" alt="<?php echo e($post['alt']); ?>" width="600" height="400" loading="lazy">
          </a>
          <div class="blog-card__content">
            <span class="blog-category"><?php echo e($post['category']); ?></span>
            <time datetime="<?php echo e($post['dateISO']); ?>"><?php echo e($post['date']); ?></time>
            <h2><a href="/blog/<?php echo e($post['slug']); ?>/"><?php echo e($post['title']); ?></a></h2>
            <p><?php echo e($post['excerpt']); ?></p>
            <a href="/blog/<?php echo e($post['slug']); ?>/" class="blog-read-more">Read More →</a>
          </div>
        </article>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>