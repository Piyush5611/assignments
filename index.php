<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Home';
$activePage = 'home';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
  <!-- Hero Section -->
  <section class="py-5 py-lg-6 bg-light position-relative overflow-hidden">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h1 class="display-5 fw-bold mb-3">Welcome to <?= htmlspecialchars(APP_NAME); ?></h1>
          <p class="lead text-muted mb-4">A modern scaffold for building a college website with PHP, Bootstrap 5, AOS, and a simple configuration system.</p>
          <a href="<?= asset('/admission.php'); ?>" class="btn btn-primary btn-lg me-2">Apply Now</a>
          <a href="<?= asset('/courses.php'); ?>" class="btn btn-outline-primary btn-lg">Explore Courses</a>
        </div>
        <div class="col-lg-6 text-center" data-aos="fade-left">
          <img src="<?= asset('/assets/images/hero.svg'); ?>" alt="Hero" class="img-fluid" style="max-height: 360px;">
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="50">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Bootstrap 5</h5>
              <p class="card-text">Responsive components and grid out of the box for quick layouts.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="150">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">AOS Animations</h5>
              <p class="card-text">Smooth on-scroll animations to bring sections to life.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="250">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Ready for Email</h5>
              <p class="card-text">PHPMailer integration via Composer for contact forms and notifications.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
