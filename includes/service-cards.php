<?php
/**
 * ============================================================
 * service-cards.php — Canonical service card data (Phase 4)
 * God's Country Tree Service LLC — DeLand, FL
 *
 * One card definition per service, keyed by slug. Used by:
 *   - /services/index.php (full 12-card grid)
 *   - each service page's "Related Services" grid (3 cards)
 * Card images are each service's canonical thumbnail from
 * content/image-manifest.md (homepage card images reused where
 * they exist so every card for a service shows the same photo).
 * Icons: Lucide names; adjacent cards must differ — the render
 * loop enforces tint rotation 1→2→3, callers pass any 3 slugs.
 * ============================================================
 */

$imgBase = $imgBase ?? 'https://db.pageone.cloud/storage/v1/object/public/client-assets/god-s-country-tree-service-llc/processed/';

$serviceCardData = [
    'tree-planting-shrub-installation' => [
        'name'    => 'Tree Planting & Shrub Installation',
        'icon'    => 'sprout',
        'img'     => $imgBase . '1784062733583-jhvosk-35788256_2078205079066760_5169623066409435136_n.webp',
        'alt'     => 'Freshly mulched beds with shaped shrubs and palms at a DeLand, FL home',
        'desc'    => 'Tree and shrub planting for DeLand homes and commercial properties.',
        'bullets' => ['Florida native species guidance', 'Homes, businesses & HOAs', 'Planted for healthy growth'],
    ],
    'tree-trimming-services' => [
        'name'    => 'Tree Trimming Services',
        'icon'    => 'scissors',
        'img'     => $imgBase . '1784062768583-3pwb0r-650559399_1767273341337834_4780224751141932631_n.webp',
        'alt'     => 'God\'s Country climber trimming limbs inside a live oak canopy in DeLand, FL',
        'desc'    => 'Seasonal and routine trimming for trees of every size.',
        'bullets' => ['Seasonal & routine schedules', 'All tree sizes handled', 'Health, looks & safety'],
    ],
    'tree-pruning-services' => [
        'name'    => 'Tree Pruning Services',
        'icon'    => 'leaf',
        'img'     => $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp',
        'alt'     => 'Roped arborist pruning branches inside a live oak canopy in DeLand, FL',
        'desc'    => 'Precision pruning that improves structure, health, and appearance.',
        'bullets' => ['Certified arborist techniques', 'Stronger branch structure', 'Healthier long-term growth'],
    ],
    'crown-reduction-shaping' => [
        'name'    => 'Crown Reduction & Shaping',
        'icon'    => 'tree-deciduous',
        'img'     => $imgBase . '1784062745583-ri3d15-51248376_2242050436015556_1895589103194341376_n.webp',
        'alt'     => 'Cleanly shaped mature oak against blue sky at a DeLand, FL home',
        'desc'    => 'Reduce weight and reshape overgrown or storm-stressed canopies.',
        'bullets' => ['Reduces storm-load weight', 'Better light penetration', 'Reshapes overgrown canopies'],
    ],
    'tree-removal' => [
        'name'    => 'Tree Removal',
        'icon'    => 'axe',
        'img'     => $imgBase . '1784062730346-5nqz2k-31180126_2042462089307726_2780749710774763520_n.webp',
        'alt'     => 'Roped climber sectioning limbs high in a live oak canopy in DeLand, FL',
        'desc'    => 'Safe, controlled removal for trees of all sizes.',
        'bullets' => ['Trees of all sizes', 'Controlled section takedowns', 'Debris hauled away'],
    ],
    'dead-hazardous-tree-removal' => [
        'name'    => 'Dead & Hazardous Tree Removal',
        'icon'    => 'shield-alert',
        'img'     => $imgBase . '1784062737583-f7n0kp-37107879_2101564903397444_7138537925750292480_n.webp',
        'alt'     => 'Chip truck and boom lift removing a dead double-trunk tree over a DeLand, FL home',
        'desc'    => 'Specialized removal of dead and diseased trees threatening your property.',
        'bullets' => ['Dead & diseased specialists', 'Safe extraction & disposal', 'Protects roofs & fences'],
    ],
    'emergency-tree-service-storm-cleanup' => [
        'name'    => 'Emergency Tree Service & Storm Cleanup',
        'icon'    => 'zap',
        'img'     => $imgBase . '1784062761586-95i7hi-487384453_1464923548239483_3259835514318021231_n.webp',
        'alt'     => 'Climber topping a storm-damaged tree spar against the sky in DeLand, FL',
        'desc'    => '24-hour response for storm damage and urgent hazards.',
        'bullets' => ['24-hour storm response', 'Same-day hazard assessment', 'Homes & businesses covered'],
    ],
    'fallen-tree-removal-cleanup' => [
        'name'    => 'Fallen Tree Removal & Cleanup',
        'icon'    => 'truck',
        'img'     => $imgBase . '1784062753583-2wp304-76756943_2456228011264463_6144757071268020224_n.webp',
        'alt'     => 'Grapple loader carrying a massive fresh-cut oak log section in DeLand, FL',
        'desc'    => 'Rapid removal of downed trees plus full site cleanup.',
        'bullets' => ['Rapid response cleanup', 'Full debris removal', 'Site restoration included'],
    ],
    'residential-tree-services' => [
        'name'    => 'Residential Tree Services',
        'icon'    => 'home',
        'img'     => $imgBase . '1784062731501-oi9ekh-35294961_2071235779763690_210454243612557312_n.webp',
        'alt'     => 'God\'s Country skid steer below a green oak at a DeLand, FL home',
        'desc'    => 'Complete tree care for DeLand homeowners, from trimming to full removal.',
        'bullets' => ['One crew, whole yard', 'Trimming, removal & cleanup', 'Free estimates in 24 hours'],
    ],
    'commercial-hoa-tree-services' => [
        'name'    => 'Commercial & HOA Tree Services',
        'icon'    => 'building-2',
        'img'     => $imgBase . '1784062740583-2dtirn-42754196_2163954730491794_5374692911386460160_n.webp',
        'alt'     => 'Freshly mowed acreage with skid steer near DeLand, FL',
        'desc'    => 'Scheduled tree management for commercial properties, office parks, and HOA communities.',
        'bullets' => ['Scheduled contract maintenance', 'HOA & property managers', 'Documented insurance on file'],
    ],
    'tree-maintenance-care' => [
        'name'    => 'Tree Maintenance & Care',
        'icon'    => 'calendar-check',
        'img'     => $imgBase . '1784062763583-cvnei3-503812193_4046117498942165_6962620168915463637_n.webp',
        'alt'     => 'Arborist assessing a tall oak over a pool enclosure in DeLand, FL',
        'desc'    => 'Ongoing inspections and preventative care that keep trees thriving year-round.',
        'bullets' => ['Seasonal inspection visits', 'Storm-readiness pruning', 'Fewer emergency removals'],
    ],
    'certified-arborist-services' => [
        'name'    => 'Certified Arborist Services',
        'icon'    => 'clipboard-check',
        'img'     => $imgBase . '1784062743583-mfq8fe-46027175_2188053541415246_7752010700460916736_n.webp',
        'alt'     => 'Helmeted arborist working in an oak canopy above a DeLand, FL lake',
        'desc'    => 'Expert diagnosis and treatment plans from certified tree professionals.',
        'bullets' => ['Tree health diagnosis', 'Honest save-or-remove calls', 'Species-specific care plans'],
    ],
];

/**
 * Renders the required tinted-image service card grid for a list of slugs.
 * Tints and reveal delays rotate 1→2→3; icons come from the card data.
 */
function renderServiceCards(array $slugs, array $serviceCardData) {
    echo '<div class="services-grid" data-p1-dynamic>' . "\n";
    foreach ($slugs as $i => $cardSlug) {
        if (empty($serviceCardData[$cardSlug])) {
            continue;
        }
        $card = $serviceCardData[$cardSlug];
        $tint = ($i % 3) + 1;
        ?>
      <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $tint; ?>" data-animate>
        <div class="service-card__image">
          <img src="<?php echo e($card['img']); ?>" alt="<?php echo e($card['alt']); ?>" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo e($card['icon']); ?>"></i></div>
          <h3><?php echo e($card['name']); ?></h3>
          <p class="service-card__desc"><?php echo e($card['desc']); ?></p>
          <ul>
            <?php foreach ($card['bullets'] as $bullet): ?>
            <li><?php echo e($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo e($cardSlug); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
        <?php
    }
    echo '</div>' . "\n";
}
