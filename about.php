<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'About';
$activePage = 'about';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
  <!-- Hero Section -->
  <section class="hero-section py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">About <span class="text-gradient">Our College</span></h1>
          <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">A legacy of excellence in education, preparing students for success since <?= date('Y') - 50; ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="glass-card h-100">
            <div class="card-icon mb-4">
              <i class="bi bi-bullseye"></i>
            </div>
            <h3 class="mb-3">Our Mission</h3>
            <p>To provide transformative education that empowers students with knowledge, skills, and values to become leaders in their fields and responsible global citizens. We foster innovation, critical thinking, and lifelong learning in an inclusive environment.</p>
          </div>
        </div>
        
        <div class="col-lg-6" data-aos="fade-left">
          <div class="glass-card h-100">
            <div class="card-icon mb-4">
              <i class="bi bi-eye"></i>
            </div>
            <h3 class="mb-3">Our Vision</h3>
            <p>To be a globally recognized institution of excellence, renowned for our innovative teaching methods, cutting-edge research, and commitment to creating positive change in society through education and community engagement.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline Section -->
  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Our <span class="text-gradient">Journey</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Milestones that shaped our institution</p>
      </div>
      
      <div class="timeline">
        <div class="timeline-item" data-aos="fade-up">
          <div class="timeline-content">
            <h5>Founded</h5>
            <p class="text-muted"><?= date('Y') - 50; ?></p>
            <p>Established with a vision to provide quality education to the community.</p>
          </div>
          <div class="timeline-dot"></div>
        </div>
        
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
          <div class="timeline-content">
            <h5>First Graduation</h5>
            <p class="text-muted"><?= date('Y') - 45; ?></p>
            <p>Celebrated our first graduating class of 50 students.</p>
          </div>
          <div class="timeline-dot"></div>
        </div>
        
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
          <div class="timeline-content">
            <h5>Expansion</h5>
            <p class="text-muted"><?= date('Y') - 30; ?></p>
            <p>Opened new science and technology facilities.</p>
          </div>
          <div class="timeline-dot"></div>
        </div>
        
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
          <div class="timeline-content">
            <h5>Research Excellence</h5>
            <p class="text-muted"><?= date('Y') - 20; ?></p>
            <p>Established research centers in emerging technologies.</p>
          </div>
          <div class="timeline-dot"></div>
        </div>
        
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
          <div class="timeline-content">
            <h5>Global Recognition</h5>
            <p class="text-muted"><?= date('Y') - 10; ?></p>
            <p>Awarded international accreditation for academic excellence.</p>
          </div>
          <div class="timeline-dot"></div>
        </div>
        
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="500">
          <div class="timeline-content">
            <h5>Digital Transformation</h5>
            <p class="text-muted"><?= date('Y') - 5; ?></p>
            <p>Launched online learning platforms and smart classrooms.</p>
          </div>
          <div class="timeline-dot"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Values Section -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Our Core <span class="text-gradient">Values</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Principles that guide everything we do</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="50">
          <div class="text-center">
            <div class="card-icon mx-auto mb-3">
              <i class="bi bi-award"></i>
            </div>
            <h5>Excellence</h5>
            <p class="text-muted small">Pursuing the highest standards in teaching, research, and service</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
          <div class="text-center">
            <div class="card-icon mx-auto mb-3">
              <i class="bi bi-lightbulb"></i>
            </div>
            <h5>Innovation</h5>
            <p class="text-muted small">Fostering creativity and embracing new ideas and technologies</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
          <div class="text-center">
            <div class="card-icon mx-auto mb-3">
              <i class="bi bi-heart"></i>
            </div>
            <h5>Integrity</h5>
            <p class="text-muted small">Upholding ethical principles and transparency in all actions</p>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
          <div class="text-center">
            <div class="card-icon mx-auto mb-3">
              <i class="bi bi-shield-check"></i>
            </div>
            <h5>Inclusivity</h5>
            <p class="text-muted small">Creating a welcoming environment for diverse perspectives</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Frequently Asked <span class="text-gradient">Questions</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Find answers to common questions about our college</p>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion accordion-custom" id="faqAccordion">
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="50">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What programs do you offer?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer over 100 undergraduate and graduate programs across various disciplines including Engineering, Business, Arts, Sciences, Medicine, and Technology. Our programs are designed to meet current industry demands and future trends.
                </div>
              </div>
            </div>
            
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  How do I apply for admission?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can apply online through our admission portal. The process includes submitting your academic records, standardized test scores, personal statement, and letters of recommendation. Application deadlines vary by program.
                </div>
              </div>
            </div>
            
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  What financial aid options are available?
                </button>
              </h2>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer various financial aid options including scholarships, grants, work-study programs, and student loans. Over 80% of our students receive some form of financial assistance. Visit our financial aid office for personalized guidance.
                </div>
              </div>
            </div>
            
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                  What is the student-to-faculty ratio?
                </button>
              </h2>
              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our student-to-faculty ratio is 15:1, ensuring personalized attention and mentoring. Our faculty are not just teachers but also research mentors and industry connections for our students.
                </div>
              </div>
            </div>
            
            <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                  What career support services do you provide?
                </button>
              </h2>
              <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our Career Services Center offers resume workshops, interview preparation, career counseling, job fairs, internship placements, and alumni networking events. We have a 95% placement rate within 6 months of graduation.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
