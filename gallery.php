<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Gallery';
$activePage = 'gallery';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';

// Sample gallery data
$galleryImages = [
    [
        'id' => 1,
        'src' => 'https://picsum.photos/seed/campus1/400/300.jpg',
        'title' => 'Main Campus Building',
        'category' => 'campus',
        'description' => 'Our stunning main campus building with modern architecture'
    ],
    [
        'id' => 2,
        'src' => 'https://picsum.photos/seed/library1/400/500.jpg',
        'title' => 'Central Library',
        'category' => 'facilities',
        'description' => 'State-of-the-art library with extensive digital resources'
    ],
    [
        'id' => 3,
        'src' => 'https://picsum.photos/seed/lab1/400/400.jpg',
        'title' => 'Science Laboratory',
        'category' => 'facilities',
        'description' => 'Advanced research laboratories for scientific innovation'
    ],
    [
        'id' => 4,
        'src' => 'https://picsum.photos/seed/classroom1/400/350.jpg',
        'title' => 'Modern Classroom',
        'category' => 'academic',
        'description' => 'Interactive smart classrooms for enhanced learning'
    ],
    [
        'id' => 5,
        'src' => 'https://picsum.photos/seed/sports1/400/300.jpg',
        'title' => 'Sports Complex',
        'category' => 'life',
        'description' => 'Comprehensive sports facilities for student athletes'
    ],
    [
        'id' => 6,
        'src' => 'https://picsum.photos/seed/event1/400/450.jpg',
        'title' => 'Graduation Ceremony',
        'category' => 'events',
        'description' => 'Annual graduation celebration with proud graduates'
    ],
    [
        'id' => 7,
        'src' => 'https://picsum.photos/seed/dorm1/400/400.jpg',
        'title' => 'Student Housing',
        'category' => 'life',
        'description' => 'Comfortable and modern student residence halls'
    ],
    [
        'id' => 8,
        'src' => 'https://picsum.photos/seed/garden1/400/350.jpg',
        'title' => 'Botanical Garden',
        'category' => 'campus',
        'description' => 'Beautiful botanical garden for relaxation and study'
    ],
    [
        'id' => 9,
        'src' => 'https://picsum.photos/seed/cafeteria1/400/300.jpg',
        'title' => 'Student Cafeteria',
        'category' => 'life',
        'description' => 'Diverse dining options for all dietary preferences'
    ],
    [
        'id' => 10,
        'src' => 'https://picsum.photos/seed/conference1/400/400.jpg',
        'title' => 'Conference Hall',
        'category' => 'facilities',
        'description' => 'Modern conference facilities for academic events'
    ],
    [
        'id' => 11,
        'src' => 'https://picsum.photos/seed/study1/400/350.jpg',
        'title' => 'Study Group',
        'category' => 'academic',
        'description' => 'Collaborative learning environment'
    ],
    [
        'id' => 12,
        'src' => 'https://picsum.photos/seed/festival1/400/500.jpg',
        'title' => 'Cultural Festival',
        'category' => 'events',
        'description' => 'Annual cultural festival celebrating diversity'
    ],
    [
        'id' => 13,
        'src' => 'https://picsum.photos/seed/gym1/400/400.jpg',
        'title' => 'Fitness Center',
        'category' => 'facilities',
        'description' => 'Fully equipped fitness center for student wellness'
    ],
    [
        'id' => 14,
        'src' => 'https://picsum.photos/seed/garden2/400/350.jpg',
        'title' => 'Campus Gardens',
        'category' => 'campus',
        'description' => 'Serene gardens throughout the campus'
    ],
    [
        'id' => 15,
        'src' => 'https://picsum.photos/seed/research1/400/450.jpg',
        'title' => 'Research Presentation',
        'category' => 'academic',
        'description' => 'Students presenting their research findings'
    ]
];

$categories = ['all' => 'All Photos', 'campus' => 'Campus', 'facilities' => 'Facilities', 'academic' => 'Academic', 'life' => 'Student Life', 'events' => 'Events'];
?>
<main>
  <!-- Hero Section -->
  <section class="hero-section py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Campus <span class="text-gradient">Gallery</span></h1>
          <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">Explore our vibrant campus life, modern facilities, and memorable moments</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Filter -->
  <section class="py-4">
    <div class="container">
      <div class="filter-controls">
        <div class="filter-buttons text-center">
          <?php foreach ($categories as $key => $label): ?>
            <button class="filter-btn <?= $key === 'all' ? 'active' : '' ?>" 
                    data-category="<?= $key ?>" 
                    data-aos="fade-up" 
                    data-aos-delay="<?= array_search($key, array_keys($categories)) * 50 ?>"
                    onclick="filterGallery('<?= $key ?>')">
              <?= htmlspecialchars($label) ?>
            </button>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Grid -->
  <section class="py-5 pb-lg-6">
    <div class="container">
      <div class="gallery-grid" id="galleryContainer">
        <?php foreach ($galleryImages as $index => $image): ?>
          <div class="gallery-item" 
               data-aos="zoom-in" 
               data-aos-delay="<?= $index * 30 ?>"
               data-category="<?= htmlspecialchars($image['category']) ?>"
               data-index="<?= $index ?>">
            <img src="<?= htmlspecialchars($image['src']) ?>" 
                 alt="<?= htmlspecialchars($image['title']) ?>"
                 loading="lazy">
            <div class="gallery-overlay">
              <div class="gallery-info">
                <h6><?= htmlspecialchars($image['title']) ?></h6>
                <p class="small mb-0"><?= htmlspecialchars($image['description']) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      
      <!-- No Results Message -->
      <div class="text-center py-5" id="noGalleryResults" style="display: none;">
        <div class="py-5">
          <i class="bi bi-images display-1 text-muted"></i>
          <h3 class="mt-3">No images found</h3>
          <p class="text-muted">Try selecting a different category</p>
          <button class="btn btn-primary mt-3" onclick="showAllGallery()">Show All Photos</button>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 py-lg-6 bg-gradient-primary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="text-white mb-3" data-aos="fade-right">Experience Our Campus in Person</h2>
          <p class="text-white-50 mb-0" data-aos="fade-right" data-aos-delay="100">Schedule a campus tour and see firsthand what makes our college special</p>
        </div>
        <div class="col-lg-4 text-lg-end" data-aos="fade-left">
          <a href="<?= asset('/contact.php'); ?>" class="btn btn-light btn-lg">Schedule Tour</a>
        </div>
      </div>
    </div>
  </section>

  <style>
    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(13, 27, 42, 0.8);
      display: flex;
      align-items: flex-end;
      opacity: 0;
      transition: opacity 0.3s ease;
      padding: 1rem;
    }
    
    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }
    
    .gallery-info {
      color: white;
    }
    
    .gallery-info h6 {
      margin-bottom: 0.25rem;
      font-weight: 600;
    }
    
    .gallery-overlay p {
      font-size: 0.875rem;
      opacity: 0.9;
    }
  </style>

  <script>
    function filterGallery(category) {
      // Update active button
      document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
      document.querySelector(`.filter-btn[data-category="${category}"]`).classList.add('active');
      
      // Filter images
      const items = document.querySelectorAll('.gallery-item');
      let visibleCount = 0;
      
      items.forEach(item => {
        const itemCategory = item.dataset.category;
        if (category === 'all' || itemCategory === category) {
          item.style.display = 'block';
          item.style.opacity = '0';
          setTimeout(() => {
            item.style.opacity = '1';
          }, 50);
          visibleCount++;
        } else {
          item.style.opacity = '0';
          setTimeout(() => {
            item.style.display = 'none';
          }, 300);
        }
      });
      
      // Show/hide no results message
      const noResults = document.getElementById('noGalleryResults');
      if (visibleCount === 0) {
        noResults.style.display = 'block';
      } else {
        noResults.style.display = 'none';
      }
    }
    
    function showAllGallery() {
      filterGallery('all');
    }
  </script>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
