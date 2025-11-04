<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Admission';
$activePage = 'admission';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main class="py-5">
  <div class="container">
    <h1 class="mb-4" data-aos="fade-up">Admission</h1>
    <p data-aos="fade-up" data-aos-delay="100">Provide admission requirements, deadlines, and application process here.</p>
    <ul data-aos="fade-up" data-aos-delay="200">
      <li>Step 1: Complete the online application.</li>
      <li>Step 2: Submit required documents.</li>
      <li>Step 3: Pay application fee.</li>
      <li>Step 4: Await decision.</li>
    </ul>
  </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
