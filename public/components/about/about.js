/**
 * About Page JavaScript
 * Isra University — Department of Electrical Engineering
 */
document.addEventListener('DOMContentLoaded', () => {

  /* ── Scroll-triggered fade-in animation ─────────────────── */
  const animateTargets = document.querySelectorAll(
    '.vm-card, .about-stat-card, .career-card, .timeline-item, .hod-message-body, .hod-photo-wrapper, .accreditation-batches'
  );

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  animateTargets.forEach(el => {
    el.classList.add('fade-in-up');
    observer.observe(el);
  });

  /* ── Staggered delay for grids ───────────────────────────── */
  document.querySelectorAll('.career-card, .about-stat-card').forEach((el, i) => {
    el.style.transitionDelay = `${i * 60}ms`;
  });

  document.querySelectorAll('.timeline-item').forEach((el, i) => {
    el.style.transitionDelay = `${i * 80}ms`;
  });

});
