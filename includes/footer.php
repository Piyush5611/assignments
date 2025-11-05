<?php
require_once __DIR__ . '/../config/config.php';
$year = (int)date('Y');
?>
<footer>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="footer-brand mb-3"><?= htmlspecialchars(APP_NAME); ?></div>
        <p class="text-white-50">Empowering students with quality education and innovative learning experiences since <?= $year - 50; ?>.</p>
        <div class="social-links mt-3">
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
        <h6 class="text-white mb-3">Quick Links</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?= asset('/index.php'); ?>" class="text-white-50 text-decoration-none">Home</a></li>
          <li class="mb-2"><a href="<?= asset('/about.php'); ?>" class="text-white-50 text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="<?= asset('/courses.php'); ?>" class="text-white-50 text-decoration-none">Courses</a></li>
          <li class="mb-2"><a href="<?= asset('/admission.php'); ?>" class="text-white-50 text-decoration-none">Admission</a></li>
        </ul>
      </div>
      
      <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
        <h6 class="text-white mb-3">Resources</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="<?= asset('/gallery.php'); ?>" class="text-white-50 text-decoration-none">Gallery</a></li>
          <li class="mb-2"><a href="<?= asset('/contact.php'); ?>" class="text-white-50 text-decoration-none">Contact</a></li>
          <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Library</a></li>
          <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Events</a></li>
        </ul>
      </div>
      
      <div class="col-lg-4">
        <h6 class="text-white mb-3">Contact Info</h6>
        <div class="text-white-50">
          <p class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> 123 Education Street, Learning City, LC 12345</p>
          <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i> +1 (555) 123-4567</p>
          <p class="mb-2"><i class="bi bi-envelope-fill me-2"></i> info@<?= strtolower(str_replace(' ', '', APP_NAME)); ?>.edu</p>
        </div>
      </div>
    </div>
    
    <hr class="border-white-50 my-4">
    
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="text-white-50 mb-0 mb-md-2">&copy; <?= $year; ?> <?= htmlspecialchars(APP_NAME); ?>. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <small class="text-white-50">Built with <i class="bi bi-heart-fill text-danger"></i> using Bootstrap 5 & AOS</small>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" aria-label="Back to top">
  <i class="bi bi-arrow-up"></i>
</button>

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
