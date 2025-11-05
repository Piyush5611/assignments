<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Home';
$activePage = 'home';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
  <!-- Hero Section -->
  <section class="hero-section position-relative">
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-right">Welcome to <?= htmlspecialchars(APP_NAME); ?></h1>
          <p class="lead mb-4" data-aos="fade-right" data-aos-delay="100">Discover a world of opportunities with our cutting-edge programs, experienced faculty, and vibrant campus life. Transform your future with quality education that inspires excellence.</p>
          <div class="btn-group" data-aos="fade-right" data-aos-delay="200">
            <a href="<?= asset('/admission.php'); ?>" class="btn btn-light btn-lg me-3">Apply Now</a>
            <a href="<?= asset('/courses.php'); ?>" class="btn btn-outline-light btn-lg">Explore Courses</a>
          </div>
        </div>
        <div class="col-lg-6 text-center" data-aos="fade-left">
          <div class="hero-image-container">
            <img src="<?= asset('/assets/images/hero-illustration.svg'); ?>" alt="Education Illustration" class="img-fluid" style="max-height: 500px;">
          </div>
        </div>
      </div>
    </div>
    
    <!-- Wave Separator -->
    <div class="wave-separator">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Why Choose <span class="text-gradient">Our College</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">We provide exceptional learning experiences that prepare students for success</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="50">
          <div class="feature-card card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
              <h5 class="card-title">Quality Education</h5>
              <p class="card-text">Expert faculty and comprehensive curriculum designed to foster critical thinking and innovation.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="150">
          <div class="feature-card card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-laptop-fill"></i>
              </div>
              <h5 class="card-title">Modern Facilities</h5>
              <p class="card-text">State-of-the-art labs, digital libraries, and smart classrooms for enhanced learning.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="250">
          <div class="feature-card card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <h5 class="card-title">Diverse Community</h5>
              <p class="card-text">Join a vibrant community of learners from around the world with diverse perspectives.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="350">
          <div class="feature-card card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-briefcase-fill"></i>
              </div>
              <h5 class="card-title">Career Support</h5>
              <p class="card-text">Dedicated career services and internship opportunities to launch your professional journey.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="450">
          <div class="feature-card card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-globe"></i>
              </div>
              <h5 class="card-title">Global Network</h5>
              <p class="card-text">Connect with alumni and partners worldwide for endless opportunities.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="550">
          <div class="feature-card card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="bi bi-trophy-fill"></i>
              </div>
              <h5 class="card-title">Excellence</h5>
              <p class="card-text">Award-winning programs recognized for academic excellence and innovation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Counter Section -->
  <section class="stats-section">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-3 mb-4">
          <div class="stat-item" data-aos="fade-up">
            <div class="stat-number" data-target="50000">0</div>
            <div class="stat-label">Students</div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-number" data-target="500">0</div>
            <div class="stat-label">Faculty Members</div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-number" data-target="100">0</div>
            <div class="stat-label">Programs</div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
          <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-number" data-target="95">0</div>
            <div class="stat-label">% Placement Rate</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax Showcase Section -->
  <section class="parallax-section" style="background-image: url('https://picsum.photos/seed/campus/1920/800.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">Build Your Future With Us</h2>
          <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Join thousands of successful graduates who are making a difference in the world</p>
          <a href="<?= asset('/admission.php'); ?>" class="btn btn-light btn-lg" data-aos="fade-up" data-aos-delay="200">Start Your Journey</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Student <span class="text-gradient">Success Stories</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Hear from our alumni about their transformative experiences</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial-card">
            <div class="testimonial-avatar">JD</div>
            <p class="testimonial-text">"The education I received here transformed my life. The faculty's guidance and the practical learning approach prepared me for my dream career."</p>
            <div class="testimonial-author">John Doe</div>
            <small class="text-muted">Class of 2020, Software Engineer</small>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-card">
            <div class="testimonial-avatar">SM</div>
            <p class="testimonial-text">"The diverse community and global exposure I gained here helped me develop not just academically but personally too."</p>
            <div class="testimonial-author">Sarah Miller</div>
            <small class="text-muted">Class of 2019, Business Analyst</small>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="testimonial-card">
            <div class="testimonial-avatar">RJ</div>
            <p class="testimonial-text">"The research opportunities and industry connections opened doors I never imagined possible. Truly life-changing!"</p>
            <div class="testimonial-author">Robert Johnson</div>
            <small class="text-muted">Class of 2021, Research Scientist</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 py-lg-6 bg-gradient-primary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="text-white mb-3" data-aos="fade-right">Ready to Begin Your Academic Journey?</h2>
          <p class="text-white-50 mb-0" data-aos="fade-right" data-aos-delay="100">Take the first step towards a brighter future. Apply now and join our community of learners.</p>
        </div>
        <div class="col-lg-4 text-lg-end" data-aos="fade-left">
          <a href="<?= asset('/admission.php'); ?>" class="btn btn-light btn-lg">Apply Today</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
