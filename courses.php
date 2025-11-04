<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Courses';
$activePage = 'courses';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main class="py-5">
  <div class="container">
    <h1 class="mb-4" data-aos="fade-up">Courses</h1>
    <div class="row g-4">
      <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i*50; ?>">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Course <?= $i; ?></h5>
              <p class="card-text">Short course description goes here. Replace with real data later.</p>
              <a href="#" class="btn btn-outline-primary btn-sm">Learn more</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
