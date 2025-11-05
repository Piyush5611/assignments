<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Thank You';
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
          <div class="success-icon mb-4" data-aos="zoom-in">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Thank You for <span class="text-gradient">Contacting Us</span></h1>
          <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">Your message has been successfully sent. We'll get back to you soon!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Success Content -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="glass-card text-center" data-aos="fade-up">
            <div class="success-animation mb-4">
              <i class="bi bi-envelope-check display-1 text-gradient"></i>
            </div>
            
            <h3 class="mb-4">Message Received Successfully!</h3>
            
            <p class="text-muted mb-4">
              Thank you for reaching out to <?= htmlspecialchars(APP_NAME); ?>. We have received your message and our team will review it shortly. 
              You can expect a response within 24-48 business hours.
            </p>
            
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-telephone-fill text-primary mb-2"></i>
                  <h6>Call Us</h6>
                  <p class="small text-muted">+1 (555) 123-4567</p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-envelope-fill text-primary mb-2"></i>
                  <h6>Email Us</h6>
                  <p class="small text-muted">info@<?= strtolower(str_replace(' ', '', APP_NAME)); ?>.edu</p>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-geo-alt-fill text-primary mb-2"></i>
                  <h6>Visit Us</h6>
                  <p class="small text-muted">123 Education Street</p>
                </div>
              </div>
            </div>
            
            <div class="d-flex justify-content-center gap-3">
              <a href="<?= asset('/index.php'); ?>" class="btn btn-outline-primary">
                <i class="bi bi-house me-2"></i>
                Back to Home
              </a>
              <a href="<?= asset('/courses.php'); ?>" class="btn btn-primary">
                <i class="bi bi-book me-2"></i>
                Explore Programs
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Next Steps Section -->
  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">What's <span class="text-gradient">Next?</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">While you wait for our response, explore more about our college</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="50">
          <div class="text-center">
            <div class="next-step-icon mb-3">
              <i class="bi bi-mortarboard-fill"></i>
            </div>
            <h5 class="mb-2">Browse Programs</h5>
            <p class="text-muted small">Discover our wide range of academic programs</p>
            <a href="<?= asset('/courses.php'); ?>" class="btn btn-sm btn-outline-primary mt-2">Explore</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
          <div class="text-center">
            <div class="next-step-icon mb-3">
              <i class="bi bi-calendar-check"></i>
            </div>
            <h5 class="mb-2">Schedule Tour</h5>
            <p class="text-muted small">Visit our beautiful campus and meet our team</p>
            <a href="<?= asset('/contact.php'); ?>" class="btn btn-sm btn-outline-primary mt-2">Schedule</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
          <div class="text-center">
            <div class="next-step-icon mb-3">
              <i class="bi bi-images"></i>
            </div>
            <h5 class="mb-2">View Gallery</h5>
            <p class="text-muted small">See our campus life and facilities</p>
            <a href="<?= asset('/gallery.php'); ?>" class="btn btn-sm btn-outline-primary mt-2">View</a>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
          <div class="text-center">
            <div class="next-step-icon mb-3">
              <i class="bi bi-info-circle"></i>
            </div>
            <h5 class="mb-2">Learn More</h5>
            <p class="text-muted small">Read about our history and mission</p>
            <a href="<?= asset('/about.php'); ?>" class="btn btn-sm btn-outline-primary mt-2">About</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
  .success-icon {
    width: 120px;
    height: 120px;
    background: var(--gradient-accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color: white;
    font-size: 3rem;
    box-shadow: var(--shadow-xl);
  }
  
  .success-animation {
    animation: pulse 2s infinite;
  }
  
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
  
  .info-box {
    padding: 1.5rem;
    background: white;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
    height: 100%;
    transition: all 0.3s ease;
  }
  
  .info-box:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
  }
  
  .next-step-icon {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color: white;
    font-size: 1.5rem;
  }
</style>

<?php include __DIR__ . '/includes/footer.php'; ?>