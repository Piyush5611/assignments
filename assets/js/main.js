// Enhanced College Site JavaScript
window.addEventListener('DOMContentLoaded', () => {
  // Initialize AOS
  if (window.AOS) {
    AOS.init({
      once: true,
      duration: 800,
      offset: 100,
      easing: 'ease-out-cubic'
    });
  }

  // Navbar scroll effect
  const navbar = document.querySelector('.navbar');
  const backToTopBtn = document.querySelector('.back-to-top');
  
  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  // Back to top button
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });

    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // GSAP Hero Animations
  if (window.gsap) {
    const heroTitle = document.querySelector('.hero-section h1');
    const heroText = document.querySelector('.hero-section .lead');
    const heroButtons = document.querySelector('.hero-section .btn-group');
    const heroImage = document.querySelector('.hero-section img');

    if (heroTitle) {
      gsap.from(heroTitle, {
        y: 50,
        opacity: 0,
        duration: 1,
        ease: 'power3.out',
        delay: 0.2
      });
    }

    if (heroText) {
      gsap.from(heroText, {
        y: 30,
        opacity: 0,
        duration: 1,
        ease: 'power3.out',
        delay: 0.4
      });
    }

    if (heroButtons) {
      gsap.from(heroButtons.children, {
        y: 30,
        opacity: 0,
        duration: 0.8,
        ease: 'power3.out',
        delay: 0.6,
        stagger: 0.1
      });
    }

    if (heroImage) {
      gsap.from(heroImage, {
        y: 30,
        opacity: 0,
        duration: 1.2,
        ease: 'power3.out',
        delay: 0.8
      });
    }
  }

  // Animated Stats Counter
  const statNumbers = document.querySelectorAll('.stat-number');
  const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
  };

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
        entry.target.classList.add('counted');
        const target = parseInt(entry.target.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
          current += step;
          if (current < target) {
            entry.target.textContent = Math.ceil(current);
            requestAnimationFrame(updateCounter);
          } else {
            entry.target.textContent = target;
          }
        };

        updateCounter();
      }
    });
  }, observerOptions);

  statNumbers.forEach(stat => {
    counterObserver.observe(stat);
  });

  // Course Filter and Search
  const filterButtons = document.querySelectorAll('.filter-btn');
  const searchInput = document.querySelector('.course-search');
  const courseCards = document.querySelectorAll('.course-card');

  if (filterButtons.length > 0 && courseCards.length > 0) {
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        button.classList.add('active');
        
        const category = button.getAttribute('data-category');
        filterCourses(category);
      });
    });

    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const activeCategory = document.querySelector('.filter-btn.active')?.getAttribute('data-category') || 'all';
        filterCourses(activeCategory, searchTerm);
      });
    }

    function filterCourses(category = 'all', searchTerm = '') {
      courseCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        const cardTitle = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
        const cardText = card.querySelector('.card-text')?.textContent.toLowerCase() || '';
        
        const matchesCategory = category === 'all' || cardCategory === category;
        const matchesSearch = searchTerm === '' || 
          cardTitle.includes(searchTerm) || 
          cardText.includes(searchTerm);
        
        if (matchesCategory && matchesSearch) {
          card.style.display = 'block';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 50);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(20px)';
          setTimeout(() => {
            card.style.display = 'none';
          }, 300);
        }
      });
    }
  }

  // Gallery Lightbox functionality
  const galleryItems = document.querySelectorAll('.gallery-item');
  
  if (galleryItems.length > 0) {
    galleryItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        createLightbox(index);
      });
    });

    function createLightbox(index) {
      const lightbox = document.createElement('div');
      lightbox.className = 'custom-lightbox';
      lightbox.innerHTML = `
        <div class="lightbox-content">
          <button class="lightbox-close">&times;</button>
          <button class="lightbox-prev">&lsaquo;</button>
          <button class="lightbox-next">&rsaquo;</button>
          <img src="${galleryItems[index].querySelector('img').src}" alt="Gallery Image">
          <div class="lightbox-caption">${galleryItems[index].querySelector('img').alt || 'Image ' + (index + 1)}</div>
        </div>
      `;

      document.body.appendChild(lightbox);
      document.body.style.overflow = 'hidden';

      // Close lightbox
      lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox || e.target.classList.contains('lightbox-close')) {
          closeLightbox();
        }
      });

      // Navigation
      let currentIndex = index;
      const totalItems = galleryItems.length;

      lightbox.querySelector('.lightbox-next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalItems;
        updateLightboxImage();
      });

      lightbox.querySelector('.lightbox-prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateLightboxImage();
      });

      // Keyboard navigation
      document.addEventListener('keydown', handleKeydown);

      function updateLightboxImage() {
        const img = lightbox.querySelector('img');
        const caption = lightbox.querySelector('.lightbox-caption');
        img.src = galleryItems[currentIndex].querySelector('img').src;
        caption.textContent = galleryItems[currentIndex].querySelector('img').alt || 'Image ' + (currentIndex + 1);
      }

      function handleKeydown(e) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') {
          currentIndex = (currentIndex + 1) % totalItems;
          updateLightboxImage();
        }
        if (e.key === 'ArrowLeft') {
          currentIndex = (currentIndex - 1 + totalItems) % totalItems;
          updateLightboxImage();
        }
      }

      function closeLightbox() {
        document.body.removeChild(lightbox);
        document.body.style.overflow = '';
        document.removeEventListener('keydown', handleKeydown);
      }
    }
  }

  // Testimonial Carousel (if using Bootstrap carousel)
  const testimonialCarousel = document.querySelector('#testimonialCarousel');
  if (testimonialCarousel && window.bootstrap) {
    const carousel = new bootstrap.Carousel(testimonialCarousel, {
      interval: 5000,
      wrap: true
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Form validation enhancement
  const forms = document.querySelectorAll('.needs-validation');
  forms.forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });

  // Add floating label effect for contact form
  const formFloats = document.querySelectorAll('.form-floating');
  formFloats.forEach(floating => {
    const input = floating.querySelector('input, textarea');
    const label = floating.querySelector('label');
    
    if (input && label) {
      input.addEventListener('focus', () => {
        floating.classList.add('focused');
      });
      
      input.addEventListener('blur', () => {
        if (!input.value) {
          floating.classList.remove('focused');
        }
      });
      
      // Check initial state
      if (input.value) {
        floating.classList.add('focused');
      }
    }
  });

  // Parallax effect for parallax sections
  const parallaxSections = document.querySelectorAll('.parallax-section');
  
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    
    parallaxSections.forEach(section => {
      const rect = section.getBoundingClientRect();
      const speed = 0.5;
      
      if (rect.bottom >= 0 && rect.top <= window.innerHeight) {
        const yPos = -(scrolled * speed);
        section.style.backgroundPosition = `center ${yPos}px`;
      }
    });
  });

  // Lazy loading for images
  const lazyImages = document.querySelectorAll('img[data-src]');
  
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.classList.remove('lazy');
        imageObserver.unobserve(img);
      }
    });
  });

  lazyImages.forEach(img => {
    imageObserver.observe(img);
  });

  // Add loading animation to cards
  const cards = document.querySelectorAll('.feature-card, .course-card, .testimonial-card');
  cards.forEach((card, index) => {
    card.style.transition = 'all 0.3s ease';
    card.style.animationDelay = `${index * 0.1}s`;
  });

  // Enhanced mobile menu
  const navbarToggler = document.querySelector('.navbar-toggler');
  const navbarCollapse = document.querySelector('.navbar-collapse');
  
  if (navbarToggler && navbarCollapse) {
    navbarToggler.addEventListener('click', () => {
      setTimeout(() => {
        if (navbarCollapse.classList.contains('show')) {
          navbarToggler.classList.add('active');
        } else {
          navbarToggler.classList.remove('active');
        }
      }, 10);
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navbarToggler.contains(e.target) && !navbarCollapse.contains(e.target)) {
        if (navbarCollapse.classList.contains('show')) {
          bootstrap.Collapse.getInstance(navbarCollapse)?.hide();
        }
      }
    });
  }

  // Add hover tilt effect to feature cards
  const featureCards = document.querySelectorAll('.feature-card');
  featureCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      
      const rotateX = (y - centerY) / 10;
      const rotateY = (centerX - x) / 10;
      
      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
    });
    
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
    });
  });
});

// Add CSS for custom lightbox
const lightboxStyles = `
<style>
.custom-lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  opacity: 0;
  animation: fadeIn 0.3s ease forwards;
}

.lightbox-content {
  position: relative;
  max-width: 90%;
  max-height: 90%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.lightbox-content img {
  max-width: 100%;
  max-height: 80vh;
  border-radius: 8px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
}

.lightbox-caption {
  color: white;
  margin-top: 1rem;
  text-align: center;
  font-size: 1.1rem;
}

.lightbox-close,
.lightbox-prev,
.lightbox-next {
  position: absolute;
  background: rgba(255, 255, 255, 0.2);
  border: none;
  color: white;
  font-size: 2rem;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.lightbox-close {
  top: -60px;
  right: 0;
}

.lightbox-prev {
  left: -70px;
  top: 50%;
  transform: translateY(-50%);
}

.lightbox-next {
  right: -70px;
  top: 50%;
  transform: translateY(-50%);
}

.lightbox-close:hover,
.lightbox-prev:hover,
.lightbox-next:hover {
  background: rgba(255, 255, 255, 0.3);
  transform: scale(1.1);
}

.lightbox-prev:hover,
.lightbox-next:hover {
  transform: translateY(-50%) scale(1.1);
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

@media (max-width: 768px) {
  .lightbox-prev {
    left: 10px;
  }
  
  .lightbox-next {
    right: 10px;
  }
  
  .lightbox-close {
    top: 10px;
    right: 10px;
  }
}
</style>
`;

// Inject lightbox styles
document.head.insertAdjacentHTML('beforeend', lightboxStyles);
