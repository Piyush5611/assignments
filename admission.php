<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Admission';
$activePage = 'admission';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
  <!-- Hero Section -->
  <section class="hero-section py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Start Your <span class="text-gradient">Journey</span></h1>
          <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">Join our community of learners and achievers. Your future begins here.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Admission Process -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Admission <span class="text-gradient">Process</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Follow these simple steps to begin your academic journey</p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="50">
          <div class="text-center">
            <div class="step-number mb-3">1</div>
            <div class="step-icon mb-3">
              <i class="bi bi-search"></i>
            </div>
            <h5 class="mb-3">Explore Programs</h5>
            <p class="text-muted">Browse our comprehensive range of undergraduate and graduate programs to find your perfect match.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
          <div class="text-center">
            <div class="step-number mb-3">2</div>
            <div class="step-icon mb-3">
              <i class="bi bi-pencil-square"></i>
            </div>
            <h5 class="mb-3">Apply Online</h5>
            <p class="text-muted">Complete our straightforward online application with all required documents and information.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
          <div class="text-center">
            <div class="step-number mb-3">3</div>
            <div class="step-icon mb-3">
              <i class="bi bi-file-text"></i>
            </div>
            <h5 class="mb-3">Submit Documents</h5>
            <p class="text-muted">Provide academic transcripts, test scores, letters of recommendation, and personal statement.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
          <div class="text-center">
            <div class="step-number mb-3">4</div>
            <div class="step-icon mb-3">
              <i class="bi bi-check-circle"></i>
            </div>
            <h5 class="mb-3">Receive Decision</h5>
            <p class="text-muted">Get your admission decision and next steps for enrollment and financial aid.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Requirements Section -->
  <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Admission <span class="text-gradient">Requirements</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Everything you need to prepare for your application</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="glass-card h-100">
            <div class="card-icon mb-4">
              <i class="bi bi-mortarboard"></i>
            </div>
            <h4 class="mb-3">Academic Requirements</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>High school diploma or equivalent</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Minimum GPA of 3.0 (4.0 scale)</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>SAT/ACT scores (optional for 2024)</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>TOEFL/IELTS for international students</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left">
          <div class="glass-card h-100">
            <div class="card-icon mb-4">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <h4 class="mb-3">Required Documents</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Completed application form</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Official transcripts</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Personal statement (500 words)</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>2 letters of recommendation</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Application fee ($50)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Important Dates -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Important <span class="text-gradient">Dates</span></h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Mark your calendar for key admission deadlines</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="table-responsive" data-aos="zoom-in">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Semester</th>
                  <th>Application Deadline</th>
                  <th>Decision Date</th>
                  <th>Classes Begin</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Fall <?= date('Y'); ?></strong></td>
                  <td>March 1, <?= date('Y'); ?></td>
                  <td>April 15, <?= date('Y'); ?></td>
                  <td>August 25, <?= date('Y'); ?></td>
                </tr>
                <tr>
                  <td><strong>Spring <?= date('Y') + 1; ?></strong></td>
                  <td>November 1, <?= date('Y'); ?></td>
                  <td>December 15, <?= date('Y'); ?></td>
                  <td>January 20, <?= date('Y') + 1; ?></td>
                </tr>
                <tr>
                  <td><strong>Summer <?= date('Y') + 1; ?></strong></td>
                  <td>April 1, <?= date('Y') + 1; ?></td>
                  <td>May 1, <?= date('Y') + 1; ?></td>
                  <td>May 28, <?= date('Y') + 1; ?></td>
                </tr>
              </tbody>
            </table>
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
          <h2 class="text-white mb-3" data-aos="fade-right">Ready to Apply?</h2>
          <p class="text-white-50 mb-0" data-aos="fade-right" data-aos-delay="100">Take the first step towards your future career and personal growth</p>
        </div>
        <div class="col-lg-4 text-lg-end" data-aos="fade-left">
          <a href="<?= asset('/contact.php'); ?>" class="btn btn-light btn-lg">Start Application</a>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
  .step-number {
    width: 60px;
    height: 60px;
    background: var(--gradient-accent);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0 auto;
  }

  .step-icon {
    width: 50px;
    height: 50px;
    background: var(--gradient-primary);
    color: white;
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    margin: 0 auto;
  }

  .table {
    background: white;
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
  }

  .table th {
    background: var(--gradient-primary);
    color: white;
    border: none;
    font-weight: 600;
  }

  .table td {
    vertical-align: middle;
    border-color: var(--off-white-dark);
  }
</style>

<?php include __DIR__ . '/includes/footer.php'; ?>
