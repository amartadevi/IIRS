/**
 * Highlights Component JavaScript
 */
document.addEventListener('DOMContentLoaded', function () {
    const highlightsSection = document.getElementById('highlights');
    if (!highlightsSection) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                highlightsSection.classList.add('active');
            } else {
                highlightsSection.classList.remove('active');
            }
        });
    }, {
        threshold: 0.15 // Trigger when 15% of the section is visible
    });

    observer.observe(highlightsSection);
    console.log('Highlights IntersectionObserver initialized');
});
