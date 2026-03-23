<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-logo">
                <div class="logo-wrapper">
                    <div class="logo-icon footer-logo-icon">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="80" height="80" rx="4" fill="#f97316"/>
                            <path d="M20 20 L20 60 M20 40 L60 40 M60 20 L60 60" stroke="white" stroke-width="10" stroke-linecap="round"/>
                            <path d="M30 55 L40 70 L50 55" fill="white"/>
                        </svg>
                    </div>
                    <div class="logo-text">
                        <span class="logo-name">HEADWAY<sup>®</sup></span>
                        <span class="logo-sub">BUSINESS SOLUTIONS LLP</span>
                        <span class="logo-tag">Solution@100%<sup>®</sup></span>
                    </div>
                </div>
            </div>
            <div class="footer-links-group">
                <a href="#">About Us</a>
                <a href="#">Meet our team</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="footer-links-group">
                <a href="#">Privacy Policy</a>
                <a href="#">Payment, R &amp; C Policy</a>
                <a href="#">Terms &amp; Conditions</a>
            </div>
            <div class="footer-contact-info">
                <div class="footer-contact-item">
                    <div class="footer-icon-circle"><i class="fas fa-phone"></i></div>
                    <span>+91 70469 00096</span>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-icon-circle"><i class="fas fa-envelope"></i></div>
                    <span>info@headway.com</span>
                </div>
                <div class="footer-contact-item">
                    <div class="footer-icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                    <span>101-Shree Kashi Parekh Complex, First Floor, Behind Bhagavati Chambers, Near Swastik Cross Rd, C G Road, Navrangpura, Ahmedabad, Gujarat 380009</span>
                </div>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            <p class="footer-copy">Copyright © 2026 Headway Business Solutions LLP. All rights reserved</p>
            <div class="footer-social">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>

<script>
// Mobile menu toggle
document.getElementById('mobileMenuBtn').addEventListener('click', function() {
    const navLinks = document.getElementById('navLinks');
    navLinks.classList.toggle('open');
});

// Dropdown on click for mobile
document.querySelectorAll('.has-dropdown > a').forEach(link => {
    link.addEventListener('click', function(e) {
        if (window.innerWidth < 1024) {
            e.preventDefault();
            const parent = this.parentElement;
            parent.classList.toggle('dropdown-open');
        }
    });
});

// Sticky navbar
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Animate stats counter
function animateCounters() {
    document.querySelectorAll('.stat-number').forEach(counter => {
        const target = parseInt(counter.textContent);
        const suffix = counter.textContent.replace(/[0-9]/g, '');
        let count = 0;
        const increment = Math.ceil(target / 50);
        const timer = setInterval(() => {
            count += increment;
            if (count >= target) {
                count = target;
                clearInterval(timer);
            }
            counter.textContent = count + suffix;
        }, 30);
    });
}

// Trigger counter animation when stats section is in view
const statsSection = document.querySelector('.stats-section');
const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        animateCounters();
        observer.disconnect();
    }
}, { threshold: 0.3 });
if (statsSection) observer.observe(statsSection);
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });
</script>

</body>
</html>
