<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';

$pageTitle = 'Tree Roots Lifting Your Driveway or Sidewalk: Options Before Removal';
$pageDescription = 'Tree roots lifting your driveway or sidewalk? See the options before removal, why cutting big roots can make a tree fall, and when removal is the right call.';
$canonicalUrl = $siteUrl . '/blog/tree-roots-lifting-driveway/';
$currentPage = 'blog';
$pageSchema = blogPostSchema('tree-roots-lifting-driveway', 'tree roots lifting driveway, tree roots lifting sidewalk, root pruning risk, bridging tree roots, root barrier driveway, tree removal DeLand FL', $pageDescription);
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main id="main-content">
  <article class="blog-post">
    <header class="blog-post__header">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span class="breadcrumb-sep" aria-hidden="true">/</span>
          <a href="/blog/">Blog</a>
          <span class="breadcrumb-sep" aria-hidden="true">/</span>
          <span aria-current="page">Roots Lifting Driveway</span>
        </nav>
        <span class="blog-category">Tree Removal</span>
        <h1><?php echo e($pageTitle); ?></h1>
        <div class="blog-meta">
          <time datetime="2026-10-13">October 13, 2026</time>
          <span class="blog-meta-sep">•</span>
          <span>4 min read</span>
          <span class="blog-meta-sep">•</span>
          <span class="blog-byline">Published by Page One Insights LLC</span>
        </div>
      </div>
    </header>

    <div class="blog-post__content">
      <div class="container">
        <p class="lead">A cracked, heaving driveway doesn't always mean the tree has to go. There are several fixes that keep the tree. But the most common quick fix, cutting the roots and re-pouring the concrete, can make a tree unstable enough to blow over. Here's what to know before you decide.</p>

        <figure class="blog-figure">
          <?php echo p1_picture('/assets/images/1784062729745-ekffah-31162327_2042462179307717_7701525571804594176_n-480.webp', 'Grapple track loader moving uprooted stumps and root balls during land clearing near DeLand, FL', 960, 478, '(max-width: 768px) 100vw, 760px'); ?>
          <figcaption>Root balls pulled during a clearing job near DeLand. The large roots nearest the trunk are the ones that hold a tree up.</figcaption>
        </figure>

        <h2>First, make sure it's really the roots</h2>
        <p>UF/IFAS points out that concrete often cracks whether or not trees are nearby, and roots tend to grow into cracks that already exist. Thin slabs that weren't built to carry a car can crack on their own. If you can see a thick root running right under the raised section, the tree is probably the cause.</p>

        <h2>Why cutting the roots is risky</h2>
        <p>The large roots close to the trunk are what hold the tree up. Cutting them can lead to decline, decay or the tree toppling in a storm, which matters a lot in hurricane country.</p>
        <p>UF/IFAS's general guideline is to <strong>leave all roots within about five times the trunk diameter.</strong> For a tree with a 2-foot-wide trunk, that means no cuts within 10 feet of the trunk. Cutting closer than that raises the risk, especially on wet, compacted or shallow soils, and leaning trees are poor candidates for root pruning at all.</p>

        <h2>Options that keep the tree</h2>
        <ul>
          <li><strong>Bridge the roots.</strong> Build a section of walkway or driveway that spans over the roots, using metal, wood decking or a concrete ramp that doesn't sit on the roots. The roots don't have to be cut.</li>
          <li><strong>Re-pour over a cushion.</strong> Lay 3 to 6 inches of rubber chips or a layer of washed gravel over the roots, then pour the new slab on top. This helps keep roots from pushing directly into the concrete.</li>
          <li><strong>Reinforce the new slab.</strong> Rebar in the concrete helps the slab lift as one piece instead of cracking.</li>
          <li><strong>Reroute or reshape.</strong> Curve a sidewalk away from the trunk or widen the open space around the tree.</li>
          <li><strong>Switch materials.</strong> Pavers, gravel or other flexible paving handle root movement better and are easier to reset.</li>
          <li><strong>Install a root barrier</strong> when you rebuild, to guide future roots down and away from the slab. It works best as prevention and still means cutting some roots, so keep it well away from the trunk.</li>
        </ul>

        <h2>When removal is the honest answer</h2>
        <p>Sometimes keeping the tree isn't the best choice:</p>
        <ul>
          <li>Fixing the slab would mean cutting large roots close to the trunk.</li>
          <li>The tree is leaning, declining, or has decay in its trunk or roots.</li>
          <li>Roots are threatening your foundation, pool or plumbing, not just the driveway.</li>
          <li>The tree is a short-lived species near the end of its life, such as an older laurel oak.</li>
        </ul>
        <p>If removal makes sense, replant with a tree suited to the space, farther from the pavement. See what <a href="/blog/tree-removal-cost-deland-fl/">tree removal costs in DeLand</a>.</p>

        <p><strong>Sources:</strong> UF/IFAS EP309 (Urban Design for a Wind-Resistant Urban Forest); UF/IFAS Landscape Plants (Gilman): root pruning guidelines, roots lifting sidewalks, bridging roots.</p>

        <div class="blog-cta">
          <h3>Not sure which way to go?</h3>
          <p>God's Country Tree Service LLC can look at the tree and the roots and tell you honestly whether it can stay. See our <a href="/services/certified-arborist-services/">arborist services</a> and <a href="/services/tree-removal/">tree removal</a>, or call (407) 280-3484.</p>
          <a href="tel:+14072803484" class="btn btn-primary">Call (407) 280-3484</a>
        </div>

        <div class="blog-related-services">
          <h3>Related Tree Services</h3>
          <ul>
            <li><a href="/services/tree-removal/">Tree Removal Services</a></li>
            <li><a href="/services/certified-arborist-services/">Certified Arborist Services</a></li>
            <li><a href="/services/stump-grinding/">Stump Grinding</a></li>
            <li><a href="/services/tree-planting-shrub-installation/">Tree Planting &amp; Shrub Installation</a></li>
          </ul>
        </div>

        <div class="blog-related-articles">
          <h3>Related Articles</h3>
          <div class="blog-grid">
            <?php
            $relatedSlugs = ['tree-removal-cost-deland-fl', 'tree-removal-permit-deland-fl', 'laurel-oak-vs-live-oak'];
            foreach ($blogPosts as $post) {
              if (in_array($post['slug'], $relatedSlugs)) {
                ?>
                <article class="blog-card">
                  <a href="/blog/<?php echo e($post['slug']); ?>/" class="blog-card__image">
                    <?php echo p1_picture($post['image'], $post['alt'], 600, 400, '(max-width: 768px) 100vw, 600px'); ?>
                  </a>
                  <div class="blog-card__content">
                    <span class="blog-category"><?php echo e($post['category']); ?></span>
                    <time datetime="<?php echo e($post['dateISO']); ?>"><?php echo e($post['date']); ?></time>
                    <h2><a href="/blog/<?php echo e($post['slug']); ?>/"><?php echo e($post['title']); ?></a></h2>
                    <p><?php echo e($post['excerpt']); ?></p>
                    <a href="/blog/<?php echo e($post['slug']); ?>/" class="blog-read-more">Read More →</a>
                  </div>
                </article>
                <?php
              }
            }
            ?>
          </div>
        </div>

      </div>
    </div>
  </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
