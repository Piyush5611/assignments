/* Main JS for College Site (dark blue)
 - Navbar shadow on scroll
 - Bootstrap form validation helpers
 - GLightbox initialization (if present)
*/
(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', function() {
    // Navbar shadow on scroll
    var nav = document.querySelector('.navbar');
    var onScroll = function() {
      if (!nav) return;
      if (window.scrollY > 8) nav.classList.add('header-shadow');
      else nav.classList.remove('header-shadow');
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    // Current year in footer
    var yearEl = document.getElementById('currentYear');
    if (yearEl) {
      yearEl.textContent = new Date().getFullYear();
    }

    // Form validation + UX
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
      form.addEventListener('submit', function(event) {
        // Honeypot check
        var honey = form.querySelector('input[name="_honey"], input[name="website"], input[name="hp_field"]');
        if (honey && honey.value) {
          event.preventDefault();
          event.stopPropagation();
          var alert = form.querySelector('.form-alert');
          if (alert) {
            alert.classList.remove('d-none');
            alert.classList.add('alert-danger');
            alert.textContent = 'Submission blocked.';
          }
          return false;
        }

        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          // Enhance UX on valid submit
          var submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
          if (submitBtn) {
            submitBtn.disabled = true;
            var original = submitBtn.innerHTML;
            submitBtn.setAttribute('data-original', original);
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Sending...';
          }
        }
        form.classList.add('was-validated');
      }, false);
    });

    // GLightbox init
    if (typeof GLightbox !== 'undefined') {
      GLightbox({ selector: '.glightbox', touchNavigation: true, loop: true });
    }
  });
})();
