<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'About';
$activePage = 'about';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="mb-4" data-aos="fade-up">About Us</h1>
        <p data-aos="fade-up" data-aos-delay="100">This is a starter scaffold for a college website. Customize this page with your institution's history, mission, and values.</p>
        <p data-aos="fade-up" data-aos-delay="200">Edit includes, assets, and configurations to tailor the site to your needs. SCSS tooling is included for styling.</p>
      </div>
    </div>
  </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
