/**
 * Contact Page JavaScript
 * Isra University — Department of Electrical Engineering
 */
document.addEventListener('DOMContentLoaded', () => {

  /* ── Scroll-triggered fade-in ────────────────────────────── */
  const targets = document.querySelectorAll(
    '.contact-quick-card, .contact-form-wrapper, .contact-sidebar-image, .contact-info-item'
  );

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

  targets.forEach((el, i) => {
    el.classList.add('fade-in-up');
    el.style.transitionDelay = `${i * 60}ms`;
    observer.observe(el);
  });

  /* ── Form submit (demo: show success alert) ──────────────── */
  const form    = document.getElementById('contactForm');
  const success = document.getElementById('contact-success');

  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
      }
      // Show success message and reset form
      success.style.display = 'block';
      form.reset();
      form.classList.remove('was-validated');
      setTimeout(() => { success.style.display = 'none'; }, 6000);
    });
  }

});
