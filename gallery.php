<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Gallery';
$activePage = 'gallery';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main class="py-5">
  <div class="container">
    <h1 class="mb-4" data-aos="fade-up">Gallery</h1>
    <div class="row g-3">
      <?php for ($i = 1; $i <= 9; $i++): ?>
        <div class="col-6 col-md-4" data-aos="zoom-in" data-aos-delay="<?= $i*40; ?>">
          <div class="ratio ratio-4x3 bg-light rounded shadow-sm d-flex align-items-center justify-content-center">
            <span class="text-muted">Image <?= $i; ?></span>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
