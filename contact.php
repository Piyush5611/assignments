<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/csrf.php';
$pageTitle = 'Contact';
$activePage = 'contact';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
  <!-- Hero Section -->
  <section class="hero-section py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Get in <span class="text-gradient">Touch</span></h1>
          <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">We're here to help you start your educational journey</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-5">
        <!-- Contact Information -->
        <div class="col-lg-4" data-aos="fade-right">
          <div class="glass-card h-100">
            <h3 class="mb-4">Contact Information</h3>
            
            <div class="contact-info-item mb-4">
              <div class="d-flex align-items-center">
                <div class="contact-icon me-3">
                  <i class="bi bi-geo-alt-fill text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-1">Campus Address</h6>
                  <p class="text-muted mb-0">123 Education Street<br>Learning City, LC 12345</p>
                </div>
              </div>
            </div>
            
            <div class="contact-info-item mb-4">
              <div class="d-flex align-items-center">
                <div class="contact-icon me-3">
                  <i class="bi bi-telephone-fill text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-1">Phone</h6>
                  <p class="text-muted mb-0">+1 (555) 123-4567</p>
                </div>
              </div>
            </div>
            
            <div class="contact-info-item mb-4">
              <div class="d-flex align-items-center">
                <div class="contact-icon me-3">
                  <i class="bi bi-envelope-fill text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-1">Email</h6>
                  <p class="text-muted mb-0">info@<?= strtolower(str_replace(' ', '', APP_NAME)); ?>.edu</p>
                </div>
              </div>
            </div>
            
            <div class="contact-info-item mb-4">
              <div class="d-flex align-items-center">
                <div class="contact-icon me-3">
                  <i class="bi bi-clock-fill text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-1">Office Hours</h6>
                  <p class="text-muted mb-0">Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                </div>
              </div>
            </div>
            
            <div class="social-links mt-4">
              <h6 class="mb-3">Follow Us</h6>
              <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Contact Form -->
        <div class="col-lg-8" data-aos="fade-left">
          <div class="glass-card">
            <h3 class="mb-4">Send Us a Message</h3>
            
            <?php if (!empty($_SESSION['flash'])): ?>
              <div class="alert alert-<?= htmlspecialchars($_SESSION['flash']['type']); ?> alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['flash']['message']); unset($_SESSION['flash']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            
            <form action="<?= asset('/actions/contact_submit.php'); ?>" method="post" class="contact-form needs-validation" novalidate>
              <?php csrf_input(); ?>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    <label for="name">Your Name *</label>
                    <div class="invalid-feedback">
                      Please enter your name.
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    <label for="email">Your Email *</label>
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                    <label for="phone">Phone Number</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <select class="form-select" id="subject" name="subject" required>
                      <option value="">Select a topic...</option>
                      <option value="admission">Admission Inquiry</option>
                      <option value="programs">Program Information</option>
                      <option value="financial">Financial Aid</option>
                      <option value="campus">Campus Tour</option>
                      <option value="general">General Question</option>
                      <option value="other">Other</option>
                    </select>
                    <label for="subject">Topic *</label>
                    <div class="invalid-feedback">
                      Please select a topic.
                    </div>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 150px" required></textarea>
                    <label for="message">Your Message *</label>
                    <div class="invalid-feedback">
                      Please enter your message.
                    </div>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="yes" id="newsletter" name="newsletter">
                    <label class="form-check-label" for="newsletter">
                      Send me updates about programs and events
                    </label>
                  </div>
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-lg px-5">
                    <i class="bi bi-send me-2"></i>
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Find <span class="text-gradient">Our Campus</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Conveniently located with easy access from major highways</p>
      </div>
      
      <div class="map-container" data-aos="zoom-in">
        <div class="ratio ratio-21x9 bg-light rounded shadow-lg d-flex align-items-center justify-content-center">
          <div class="text-center">
            <i class="bi bi-map display-1 text-muted"></i>
            <p class="mt-3 text-muted">Interactive campus map</p>
            <p class="small text-muted">Click to get directions</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Quick <span class="text-gradient">Answers</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Find answers to common questions</p>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion accordion-custom" id="contactFaq">
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="50">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq1">
                  How do I schedule a campus tour?
                </button>
              </h2>
              <div id="contactFaq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaq">
                <div class="accordion-body">
                  You can schedule a campus tour by filling out our contact form and selecting "Campus Tour" as the topic, or by calling our admissions office directly at +1 (555) 123-4567 during business hours.
                </div>
              </div>
            </div>
            
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq2">
                  What documents do I need for admission?
                </button>
              </h2>
              <div id="contactFaq2" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                <div class="accordion-body">
                  Required documents typically include: completed application form, high school transcripts, standardized test scores (SAT/ACT), letters of recommendation, and a personal statement. International students may need additional documentation.
                </div>
              </div>
            </div>
            
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq3">
                  When are application deadlines?
                </button>
              </h2>
              <div id="contactFaq3" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                <div class="accordion-body">
                  Fall semester applications are due by March 1st, spring semester applications by November 1st. Early decision deadlines are December 1st for fall admission. Some programs may have different deadlines.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
  .contact-icon {
    width: 40px;
    height: 40px;
    background: var(--off-white);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
  }
  
  .contact-info-item h6 {
    color: var(--primary-dark);
    font-weight: 600;
  }
  
  .map-container {
    cursor: pointer;
    transition: transform 0.3s ease;
  }
  
  .map-container:hover {
    transform: scale(1.02);
  }
</style>

<script>
  // Form validation enhancement
  document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
