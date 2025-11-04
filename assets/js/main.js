// Initialize AOS
window.addEventListener('DOMContentLoaded', () => {
  if (window.AOS) {
    AOS.init({
      once: true,
      duration: 700,
      offset: 80
    });
  }

  // Optional: simple GSAP demo animation on hero image if available
  if (window.gsap) {
    const img = document.querySelector('img[src*="hero.svg"]');
    if (img) {
      gsap.from(img, { y: 12, opacity: 0, duration: 1, ease: 'power2.out', delay: 0.1 });
    }
  }
});
