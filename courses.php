<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Courses';
$activePage = 'courses';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';

// Sample course data
$courses = [
    [
        'id' => 1,
        'title' => 'Computer Science',
        'description' => 'Learn programming, algorithms, and software development with cutting-edge technologies and industry-relevant skills.',
        'category' => 'technology',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-laptop'
    ],
    [
        'id' => 2,
        'title' => 'Business Administration',
        'description' => 'Develop leadership and management skills with focus on modern business practices and entrepreneurship.',
        'category' => 'business',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-briefcase'
    ],
    [
        'id' => 3,
        'title' => 'Mechanical Engineering',
        'description' => 'Master the principles of mechanics, design, and manufacturing with hands-on laboratory experience.',
        'category' => 'engineering',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-gear'
    ],
    [
        'id' => 4,
        'title' => 'Data Science',
        'description' => 'Analyze big data, machine learning, and statistical methods to solve complex problems.',
        'category' => 'technology',
        'duration' => '2 Years',
        'level' => 'Master',
        'icon' => 'bi-graph-up'
    ],
    [
        'id' => 5,
        'title' => 'Digital Marketing',
        'description' => 'Learn SEO, social media marketing, and digital advertising strategies for modern businesses.',
        'category' => 'business',
        'duration' => '1 Year',
        'level' => 'Certificate',
        'icon' => 'bi-phone'
    ],
    [
        'id' => 6,
        'title' => 'Biotechnology',
        'description' => 'Explore the intersection of biology and technology with cutting-edge research opportunities.',
        'category' => 'science',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-dna'
    ],
    [
        'id' => 7,
        'title' => 'Psychology',
        'description' => 'Understand human behavior, mental processes, and psychological research methods.',
        'category' => 'science',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-person-heart'
    ],
    [
        'id' => 8,
        'title' => 'Civil Engineering',
        'description' => 'Design and build infrastructure projects with focus on sustainability and innovation.',
        'category' => 'engineering',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-building'
    ],
    [
        'id' => 9,
        'title' => 'Graphic Design',
        'description' => 'Master visual communication, digital design tools, and creative problem-solving.',
        'category' => 'arts',
        'duration' => '3 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-palette'
    ],
    [
        'id' => 10,
        'title' => 'Artificial Intelligence',
        'description' => 'Deep dive into neural networks, deep learning, and AI applications across industries.',
        'category' => 'technology',
        'duration' => '2 Years',
        'level' => 'Master',
        'icon' => 'bi-robot'
    ],
    [
        'id' => 11,
        'title' => 'Environmental Science',
        'description' => 'Study ecosystems, conservation, and sustainable environmental practices.',
        'category' => 'science',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-tree'
    ],
    [
        'id' => 12,
        'title' => 'Finance',
        'description' => 'Learn financial analysis, investment strategies, and corporate finance management.',
        'category' => 'business',
        'duration' => '4 Years',
        'level' => 'Bachelor',
        'icon' => 'bi-currency-dollar'
    ]
];

$categories = ['all' => 'All Courses', 'technology' => 'Technology', 'business' => 'Business', 'engineering' => 'Engineering', 'science' => 'Science', 'arts' => 'Arts'];
?>
<main>
  <!-- Hero Section -->
  <section class="hero-section py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Explore Our <span class="text-gradient">Programs</span></h1>
          <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">Discover over 100 programs designed to launch your career and fulfill your potential</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Filter Section -->
  <section class="py-4">
    <div class="container">
      <div class="filter-controls">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="filter-buttons">
              <?php foreach ($categories as $key => $label): ?>
                <button class="filter-btn <?= $key === 'all' ? 'active' : '' ?>" 
                        data-category="<?= $key ?>" 
                        data-aos="fade-up" 
                        data-aos-delay="<?= array_search($key, array_keys($categories)) * 50 ?>">
                  <?= htmlspecialchars($label) ?>
                </button>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="search-box" data-aos="fade-up" data-aos-delay="300">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control course-search" placeholder="Search courses...">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Courses Grid -->
  <section class="py-5 pb-lg-6">
    <div class="container">
      <div class="row g-4" id="coursesContainer">
        <?php foreach ($courses as $index => $course): ?>
          <div class="col-md-6 col-lg-4 course-item" 
               data-aos="fade-up" 
               data-aos-delay="<?= $index * 50 ?>"
               data-category="<?= htmlspecialchars($course['category']) ?>">
            <div class="course-card card h-100">
              <div class="course-image">
                <i class="<?= htmlspecialchars($course['icon']) ?>"></i>
              </div>
              <div class="course-badge"><?= htmlspecialchars($course['duration']) ?></div>
              <div class="card-body">
                <div class="mb-2">
                  <span class="badge bg-primary me-2"><?= htmlspecialchars(ucfirst($course['level'])) ?></span>
                  <span class="badge bg-secondary"><?= htmlspecialchars(ucfirst($course['category'])) ?></span>
                </div>
                <h5 class="card-title"><?= htmlspecialchars($course['title']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($course['description']) ?></p>
                <div class="d-flex justify-content-between align-items-center mt-auto">
                  <a href="#" class="btn btn-primary btn-sm">Learn More</a>
                  <a href="<?= asset('/admission.php'); ?>" class="btn btn-outline-primary btn-sm">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      
      <!-- No Results Message -->
      <div class="text-center py-5" id="noResults" style="display: none;">
        <div class="py-5">
          <i class="bi bi-search display-1 text-muted"></i>
          <h3 class="mt-3">No courses found</h3>
          <p class="text-muted">Try adjusting your search terms or browse all courses</p>
          <button class="btn btn-primary mt-3" onclick="resetFilters()">Show All Courses</button>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 py-lg-6 bg-gradient-primary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="text-white mb-3" data-aos="fade-right">Can't Find What You're Looking For?</h2>
          <p class="text-white-50 mb-0" data-aos="fade-right" data-aos-delay="100">Contact our admissions team for personalized guidance and program information</p>
        </div>
        <div class="col-lg-4 text-lg-end" data-aos="fade-left">
          <a href="<?= asset('/contact.php'); ?>" class="btn btn-light btn-lg">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

  <script>
    function resetFilters() {
      document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
      document.querySelector('.filter-btn[data-category="all"]').classList.add('active');
      document.querySelector('.course-search').value = '';
      filterCourses('all', '');
    }
  </script>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
