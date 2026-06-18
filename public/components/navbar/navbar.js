document.addEventListener('DOMContentLoaded', function () {
    const mainHeader = document.querySelector('.main-header');
    
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            if (mainHeader) mainHeader.classList.add('scrolled');
        } else {
            if (mainHeader) mainHeader.classList.remove('scrolled');
        }
    });
});
