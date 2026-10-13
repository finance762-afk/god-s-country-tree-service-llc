<?php
/**
 * ============================================================
 * service-cards.php — Canonical service card data (Phase 4)
 * God's Country Tree Service LLC — DeLand, FL
 *
 * One card definition per service, keyed by slug. Used by:
 *   - /services/index.php (full 12-card grid; 2026-10-13: pruning, crown reduction and
 *     maintenance merged into tree-trimming-services; palm, stump grinding, land clearing added)
 *   - each service page's "Related Services" grid (3 cards)
 * Card images are each service's canonical thumbnail from
 * content/image-manifest.md (homepage card images reused where
 * they exist so every card for a service shows the same photo).
 * Icons: Lucide names; adjacent cards must differ — the render
 * loop enforces tint rotation 1→2→3, callers pass any 3 slugs.
 * ============================================================
 */

$imgBase = $imgBase ?? '/assets/images/';

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
        'name'    => 'Tree Trimming & Pruning',
        'icon'    => 'scissors',
        'img'     => '/assets/images/nsuvrpt-960.webp',
        'alt'     => 'God\'s Country bucket truck with its boom raised into an oak canopy in DeLand, FL',
        'desc'    => 'Clearance trimming, structural pruning, crown reduction and maintenance plans.',
        'bullets' => ['Roof & pool-screen clearance', 'Crown reduction, never topping', 'Recurring plans for homes & HOAs'],
    ],
    'palm-tree-trimming' => [
        'name'    => 'Palm Tree Trimming',
        'icon'    => 'sun',
        'img'     => $imgBase . '1784062750583-pr9hsn-57170747_2285599344993998_4063638806954246144_n.webp',
        'alt'     => 'Queen palm with a clean, trimmed crown beside a shade tree at a DeLand, FL home',
        'desc'    => 'Dead fronds, seed pods and loose boots off queen, sabal and fan palms.',
        'bullets' => ['Fronds & seed pods removed', 'No hurricane cuts', 'Chipped & hauled same visit'],
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
    'stump-grinding' => [
        'name'    => 'Stump Grinding',
        'icon'    => 'circle-dot',
        'img'     => $imgBase . '1784062756583-g1q71x-162462401_2868738963346697_5761624918012580393_n.webp',
        'alt'     => 'Flush-cut oak stump with sawdust around it, ready for grinding at a DeLand, FL home',
        'desc'    => 'Stumps ground below grade after a removal or from a tree cut years ago.',
        'bullets' => ['Ground below grade', 'Chips raked or hauled', 'Spot ready for sod or planting'],
    ],
    'land-clearing' => [
        'name'    => 'Lot & Land Clearing',
        'icon'    => 'tractor',
        'img'     => $imgBase . '1784062729442-t1gqhh-31144196_2042462182641050_2975434522398556160_n.webp',
        'alt'     => 'Graded lot ringed by orange tree-protection fencing with crew and loader among kept oaks near DeLand, FL',
        'desc'    => 'Lots, acreage and overgrown parcels cleared with our own skid steer and grapple loader.',
        'bullets' => ['Kept trees fenced & protected', 'Stumps & root balls out', 'Brush chipped, debris hauled'],
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
    'certified-arborist-services' => [
        'name'    => 'Certified Arborist Services',
        'icon'    => 'clipboard-check',
        'img'     => $imgBase . '1784062767583-96o2mm-650224392_1767273321337836_3694986581662424202_n.webp',
        'alt'     => 'Helmeted arborist working inside an oak canopy in DeLand, FL',
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
          <?php echo p1_picture($card['img'], $card['alt'], 600, 360, '(max-width: 768px) 100vw, 600px'); ?>
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon(($card['icon'])); ?></div>
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
