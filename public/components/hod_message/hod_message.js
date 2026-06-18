document.addEventListener('DOMContentLoaded', function () {
    // 1. Rotate Gears on Scroll
    window.addEventListener('scroll', function rotateGear() {
        const gear1 = document.querySelector(".gear1");
        const gear2 = document.querySelector(".gear2");
        if (gear1 && gear2) {
            gear1.style.transform = "rotate(" + (window.scrollY * 2.5) + "deg)";
            gear2.style.transform = "rotate(-" + (window.scrollY * 2.5) + "deg)";
        }
    });

    // 2. Load Particles.js dynamically
    const particlesContainer = document.getElementById('particles-js');
    if (particlesContainer) {
        if (typeof particlesJS === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
            script.onload = function() {
                initParticles();
            };
            document.head.appendChild(script);
        } else {
            initParticles();
        }
    }

    function initParticles() {
        particlesJS('particles-js', {
            "particles": {
                "number": { "value": 60, "density": { "enable": true, "value_area": 800 } },
                "color": { "value": "#ffffff" },
                "shape": { "type": "circle" },
                "opacity": { "value": 0.3, "random": true },
                "size": { "value": 3, "random": true },
                "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.2, "width": 1 },
                "move": { "enable": true, "speed": 1.5, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" } },
                "modes": { "grab": { "distance": 140, "line_linked": { "opacity": 0.5 } } }
            },
            "retina_detect": true
        });
    }
});
