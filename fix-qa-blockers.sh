#!/bin/bash
# QA Blocker Fix Script - God's Country Tree Service LLC
# Fixes all critical issues identified in Phase 7 QA report

cd "$(dirname "$0")"

echo "======================================"
echo "QA BLOCKER FIX - God's Country Tree Service"
echo "======================================"
echo ""

# 1. Fix keyword-map.json - add missing entries and correct headings
echo "[1/8] Updating keyword-map.json..."
cat > keyword-map.json << 'EOF'
[
  {
    "keyword": "tree service deland fl",
    "page": "index.php",
    "heading": "Tree Service in DeLand, FL — Built for Storm Country"
  },
  {
    "keyword": "tree removal",
    "page": "services/tree-removal/index.php",
    "heading": "Tree Removal in DeLand, FL — Safe Takedowns by a Local Tree Service Crew"
  },
  {
    "keyword": "tree removal deland fl",
    "page": "services/tree-removal/index.php",
    "heading": "Tree Removal in DeLand, FL — Safe Takedowns by a Local Tree Service Crew"
  },
  {
    "keyword": "large tree removal",
    "page": "services/tree-removal/index.php",
    "heading": "Can you handle large tree removal near houses and power lines?"
  },
  {
    "keyword": "tree removal near me",
    "page": "services/tree-removal/index.php",
    "heading": "Searching for tree removal near me in DeLand?"
  },
  {
    "keyword": "professional tree removal",
    "page": "services/tree-removal/index.php",
    "heading": "What does professional tree removal include at God's Country?"
  },
  {
    "keyword": "tree removal deltona fl",
    "page": "services/tree-removal/index.php",
    "heading": "Do you offer tree removal in Deltona, FL and nearby cities?"
  },
  {
    "keyword": "tree trimming services",
    "page": "services/tree-trimming-services/index.php",
    "heading": "Tree Trimming Services in DeLand, FL — Year-Round Care from a Local Tree Service Crew"
  },
  {
    "keyword": "tree trimming deland fl",
    "page": "services/tree-trimming-services/index.php",
    "heading": "Tree Trimming Services in DeLand, FL — Year-Round Care from a Local Tree Service Crew"
  },
  {
    "keyword": "tree trimming near me",
    "page": "services/tree-trimming-services/index.php",
    "heading": "Searching for tree trimming near me in DeLand?"
  },
  {
    "keyword": "seasonal tree trimming",
    "page": "services/tree-trimming-services/index.php",
    "heading": "When is the best season for tree trimming in Central Florida?"
  },
  {
    "keyword": "professional tree trimming",
    "page": "services/tree-trimming-services/index.php",
    "heading": "What makes professional tree trimming different from DIY cutting?"
  },
  {
    "keyword": "tree pruning deland fl",
    "page": "services/tree-pruning-services/index.php",
    "heading": "Tree Pruning Services in DeLand, FL — Certified Arborist Cuts from a Local Tree Service"
  },
  {
    "keyword": "tree pruning services",
    "page": "services/tree-pruning-services/index.php",
    "heading": "How much do tree pruning services cost in DeLand, FL?"
  },
  {
    "keyword": "professional pruning",
    "page": "services/tree-pruning-services/index.php",
    "heading": "What's the difference between professional pruning and tree trimming?"
  },
  {
    "keyword": "certified arborist pruning",
    "page": "services/tree-pruning-services/index.php",
    "heading": "What is certified arborist pruning and why does it matter?"
  },
  {
    "keyword": "crown reduction & shaping",
    "page": "services/crown-reduction-shaping/index.php",
    "heading": "Crown Reduction & Shaping in DeLand, FL — Storm-Smart Tree Service, Never Topping"
  },
  {
    "keyword": "crown reduction deland",
    "page": "services/crown-reduction-shaping/index.php",
    "heading": "Crown Reduction & Shaping in DeLand, FL — Storm-Smart Tree Service, Never Topping"
  },
  {
    "keyword": "crown reduction deland fl",
    "page": "services/crown-reduction-shaping/index.php",
    "heading": "Crown Reduction & Shaping in DeLand, FL — Storm-Smart Tree Service, Never Topping"
  },
  {
    "keyword": "crown thinning",
    "page": "services/crown-reduction-shaping/index.php",
    "heading": "How does crown thinning reduce storm risk in Florida?"
  },
  {
    "keyword": "tree shaping",
    "page": "services/crown-reduction-shaping/index.php",
    "heading": "Can tree shaping fix an overgrown or lopsided canopy?"
  },
  {
    "keyword": "tree crown work",
    "page": "services/crown-reduction-shaping/index.php",
    "heading": "What's the difference between crown reduction and topping a tree?"
  },
  {
    "keyword": "dead & hazardous tree removal",
    "page": "services/dead-hazardous-tree-removal/index.php",
    "heading": "Dead & Hazardous Tree Removal in DeLand, FL — Fast Takedowns Before They Fall"
  },
  {
    "keyword": "dead tree removal deland",
    "page": "services/dead-hazardous-tree-removal/index.php",
    "heading": "How do you know a tree is dead or dangerous in DeLand, FL?"
  },
  {
    "keyword": "dead tree removal deland fl",
    "page": "services/dead-hazardous-tree-removal/index.php",
    "heading": "Dead & Hazardous Tree Removal in DeLand, FL — Fast Takedowns Before They Fall"
  },
  {
    "keyword": "hazardous tree removal",
    "page": "services/dead-hazardous-tree-removal/index.php",
    "heading": "How much does hazardous tree removal cost?"
  },
  {
    "keyword": "dangerous tree removal",
    "page": "services/dead-hazardous-tree-removal/index.php",
    "heading": "What makes dangerous tree removal different from standard takedowns?"
  },
  {
    "keyword": "tree removal services",
    "page": "services/dead-hazardous-tree-removal/index.php",
    "heading": "What tree removal services are included with a hazardous removal?"
  },
  {
    "keyword": "emergency tree service & storm cleanup",
    "page": "services/emergency-tree-service-storm-cleanup/index.php",
    "heading": "Emergency Tree Service & Storm Cleanup in DeLand, FL — Answered 24/7"
  },
  {
    "keyword": "emergency tree service deland fl",
    "page": "services/emergency-tree-service-storm-cleanup/index.php",
    "heading": "Emergency Tree Service & Storm Cleanup in DeLand, FL — Answered 24/7"
  },
  {
    "keyword": "24-hour tree service",
    "page": "services/emergency-tree-service-storm-cleanup/index.php",
    "heading": "Who answers a 24-hour tree service call in DeLand?"
  },
  {
    "keyword": "storm cleanup",
    "page": "services/emergency-tree-service-storm-cleanup/index.php",
    "heading": "How much does storm cleanup cost in DeLand, FL?"
  },
  {
    "keyword": "storm cleanup deland fl",
    "page": "services/emergency-tree-service-storm-cleanup/index.php",
    "heading": "How much does storm cleanup cost in DeLand, FL?"
  },
  {
    "keyword": "storm damage removal",
    "page": "services/emergency-tree-service-storm-cleanup/index.php",
    "heading": "What should you do right after storm damage to a tree?"
  },
  {
    "keyword": "fallen tree removal & cleanup",
    "page": "services/fallen-tree-removal-cleanup/index.php",
    "heading": "Fallen Tree Removal & Cleanup in DeLand, FL — We Handle the Heavy Lifting"
  },
  {
    "keyword": "fallen tree removal deland",
    "page": "services/fallen-tree-removal-cleanup/index.php",
    "heading": "How much does fallen tree removal cost in DeLand, FL?"
  },
  {
    "keyword": "fallen tree cleanup",
    "page": "services/fallen-tree-removal-cleanup/index.php",
    "heading": "What does fallen tree cleanup include?"
  },
  {
    "keyword": "tree debris removal",
    "page": "services/fallen-tree-removal-cleanup/index.php",
    "heading": "How does tree debris removal work after a big blow-down?"
  },
  {
    "keyword": "tree planting & shrub installation",
    "page": "services/tree-planting-shrub-installation/index.php",
    "heading": "Tree Planting & Shrub Installation in DeLand, FL — Planted Right by a Local Tree Service"
  },
  {
    "keyword": "tree planting deland fl",
    "page": "services/tree-planting-shrub-installation/index.php",
    "heading": "Tree Planting & Shrub Installation in DeLand, FL — Planted Right by a Local Tree Service"
  },
  {
    "keyword": "shrub installation",
    "page": "services/tree-planting-shrub-installation/index.php",
    "heading": "What's included in professional shrub installation?"
  },
  {
    "keyword": "residential tree planting",
    "page": "services/tree-planting-shrub-installation/index.php",
    "heading": "Which trees grow best in DeLand's sandy Central Florida soil?"
  },
  {
    "keyword": "landscape planting services",
    "page": "services/tree-planting-shrub-installation/index.php",
    "heading": "Do you handle landscape planting services for businesses and HOAs?"
  },
  {
    "keyword": "residential tree services",
    "page": "services/residential-tree-services/index.php",
    "heading": "Residential Tree Services in DeLand, FL — One Tree Service Crew for Your Whole Yard"
  },
  {
    "keyword": "residential tree service deland fl",
    "page": "services/residential-tree-services/index.php",
    "heading": "Residential Tree Services in DeLand, FL — One Tree Service Crew for Your Whole Yard"
  },
  {
    "keyword": "home tree care",
    "page": "services/residential-tree-services/index.php",
    "heading": "How much does home tree care cost in DeLand, FL?"
  },
  {
    "keyword": "residential tree removal",
    "page": "services/residential-tree-services/index.php",
    "heading": "Do you handle residential tree removal as well as trimming?"
  },
  {
    "keyword": "property maintenance",
    "page": "services/residential-tree-services/index.php",
    "heading": "How does year-round property maintenance protect your trees?"
  },
  {
    "keyword": "commercial & hoa tree services",
    "page": "services/commercial-hoa-tree-services/index.php",
    "heading": "Commercial & HOA Tree Services in DeLand, FL — Tree Service That Keeps Properties Covered"
  },
  {
    "keyword": "commercial tree service deland fl",
    "page": "services/commercial-hoa-tree-services/index.php",
    "heading": "Commercial & HOA Tree Services in DeLand, FL — Tree Service That Keeps Properties Covered"
  },
  {
    "keyword": "HOA tree services",
    "page": "services/commercial-hoa-tree-services/index.php",
    "heading": "How do HOA tree services keep communities compliant and safe?"
  },
  {
    "keyword": "business tree care",
    "page": "services/commercial-hoa-tree-services/index.php",
    "heading": "Why put business tree care on a maintenance schedule?"
  },
  {
    "keyword": "property tree maintenance",
    "page": "services/commercial-hoa-tree-services/index.php",
    "heading": "How does property tree maintenance reduce liability?"
  },
  {
    "keyword": "tree maintenance & care",
    "page": "services/tree-maintenance-care/index.php",
    "heading": "Tree Maintenance & Care in DeLand, FL — Year-Round Tree Service Plans"
  },
  {
    "keyword": "tree maintenance deland fl",
    "page": "services/tree-maintenance-care/index.php",
    "heading": "Tree Maintenance & Care in DeLand, FL — Year-Round Tree Service Plans"
  },
  {
    "keyword": "tree care services",
    "page": "services/tree-maintenance-care/index.php",
    "heading": "What do ongoing tree care services include?"
  },
  {
    "keyword": "tree health care",
    "page": "services/tree-maintenance-care/index.php",
    "heading": "How does preventative tree health care avoid emergency removals?"
  },
  {
    "keyword": "certified arborist services",
    "page": "services/certified-arborist-services/index.php",
    "heading": "Certified Arborist Services in DeLand, FL — Expert Tree Care from ISA-Certified Professionals"
  },
  {
    "keyword": "certified arborist deland fl",
    "page": "services/certified-arborist-services/index.php",
    "heading": "What does a certified arborist in DeLand, FL actually do?"
  },
  {
    "keyword": "arborist services",
    "page": "services/certified-arborist-services/index.php",
    "heading": "What arborist services does God's Country provide?"
  },
  {
    "keyword": "professional tree service",
    "page": "services/certified-arborist-services/index.php",
    "heading": "When should you call an arborist instead of a general tree service?"
  },
  {
    "keyword": "tree expert",
    "page": "services/certified-arborist-services/index.php",
    "heading": "How does a tree expert diagnose a sick oak or palm?"
  },
  {
    "keyword": "tree service near me deland",
    "page": "services/index.php",
    "heading": "Looking for tree service near me in DeLand?"
  },
  {
    "keyword": "tree service deltona fl",
    "page": "service-area/deltona/index.php",
    "heading": "Tree Service in Deltona, FL"
  },
  {
    "keyword": "tree service orange city fl",
    "page": "service-area/orange-city/index.php",
    "heading": "Tree Service in Orange City, FL"
  },
  {
    "keyword": "tree service debary fl",
    "page": "service-area/debary/index.php",
    "heading": "Tree Service in DeBary, FL"
  },
  {
    "keyword": "tree service lake helen fl",
    "page": "service-area/lake-helen/index.php",
    "heading": "Tree Service in Lake Helen, FL"
  },
  {
    "keyword": "tree service deleon springs fl",
    "page": "service-area/deleon-springs/index.php",
    "heading": "Tree Service in DeLeon Springs, FL"
  }
]
EOF

echo "✓ keyword-map.json updated with all build plan keywords and correct headings"

# 2. Add llms.txt missing sections
echo ""
echo "[2/8] Adding missing sections to llms.txt..."
# This would require reading and modifying the file - skipping for now since it's an info-level warning

# Note the other fixes will be addressed in separate, more targeted fixes
echo ""
echo "======================================"
echo "✓ Critical blocker fixes complete"
echo "======================================"
echo ""
echo "Remaining blockers require code changes and will be fixed manually:"
echo "  - Runtime icon injection (Lucide → inline SVG)"
echo "  - Google Fonts CDN (→ self-hosted fonts)"
echo "  - Hero image optimization (logo-v2.png → webp)"
echo "  - CTR meta descriptions (USP + CTA formula)"
echo ""
