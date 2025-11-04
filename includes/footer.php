<?php
require_once __DIR__ . '/../config/config.php';
$year = (int)date('Y');
?>
<footer class="bg-dark text-light py-4 mt-auto">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
    <p class="mb-2 mb-md-0">&copy; <?= $year; ?> <?= htmlspecialchars(APP_NAME); ?>. All rights reserved.</p>
    <div class="small text-secondary">Built with Bootstrap 5 & AOS.</div>
  </div>
</footer>

<!-- Scripts: Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<!-- GSAP (optional) -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<!-- Site JS -->
<script src="<?= asset('/assets/js/main.js'); ?>"></script>
</body>
</html>
