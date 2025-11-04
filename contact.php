<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/csrf.php';
$pageTitle = 'Contact';
$activePage = 'contact';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h1 class="mb-4" data-aos="fade-up">Contact Us</h1>
        <?php if (!empty($_SESSION['flash'])): ?>
          <div class="alert alert-<?= htmlspecialchars($_SESSION['flash']['type']); ?>">
            <?= htmlspecialchars($_SESSION['flash']['message']); unset($_SESSION['flash']); ?>
          </div>
        <?php endif; ?>
        <form action="<?= asset('/actions/contact_submit.php'); ?>" method="post" class="card shadow-sm" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body">
            <?php csrf_input(); ?>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="col-12">
                <label class="form-label" for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" required>
              </div>
              <div class="col-12">
                <label class="form-label" for="message">Message</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
