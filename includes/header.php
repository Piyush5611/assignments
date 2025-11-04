<?php
require_once __DIR__ . '/../config/config.php';
$active = $activePage ?? '';
?>
<header class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?= asset('/index.php'); ?>">
      <img src="<?= asset('/assets/images/logo.svg'); ?>" alt="<?= htmlspecialchars(APP_NAME); ?> Logo" width="36" height="36" class="me-2">
      <span class="fw-bold"><?= htmlspecialchars(APP_NAME); ?></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <nav id="mainNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link <?= $active==='home'?'active':''; ?>" href="<?= asset('/index.php'); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link <?= $active==='about'?'active':''; ?>" href="<?= asset('/about.php'); ?>">About</a></li>
        <li class="nav-item"><a class="nav-link <?= $active==='courses'?'active':''; ?>" href="<?= asset('/courses.php'); ?>">Courses</a></li>
        <li class="nav-item"><a class="nav-link <?= $active==='admission'?'active':''; ?>" href="<?= asset('/admission.php'); ?>">Admission</a></li>
        <li class="nav-item"><a class="nav-link <?= $active==='gallery'?'active':''; ?>" href="<?= asset('/gallery.php'); ?>">Gallery</a></li>
        <li class="nav-item"><a class="nav-link <?= $active==='contact'?'active':''; ?>" href="<?= asset('/contact.php'); ?>">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
