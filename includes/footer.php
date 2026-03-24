<!-- ════════ FOOTER ════════ -->
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <!-- Brand -->
            <div class="footer-brand">
                <div class="logo-wrapper">
                    <div class="logo-icon footer-logo-icon">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="80" height="80" rx="8" fill="url(#footerLogoGrad)"/>
                            <path d="M18 62 V18 L40 42 L62 18 V62" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                                <linearGradient id="footerLogoGrad" x1="0" y1="0" x2="80" y2="80">
                                    <stop offset="0%" stop-color="#f97316"/>
                                    <stop offset="100%" stop-color="#ea580c"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="logo-text">
                        <span class="logo-name">MAHAVIR</span>
                        <span class="logo-sub">BUSINESS SOLUTION</span>
                        <span class="logo-tag">A JOURNEY OF GROWTH</span>
                    </div>
                </div>
                <p>Mahavir Business Solution is registered in PMYK scheme. We provide complete business development training and services all over India, helping businesses reach new heights.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <p class="footer-heading">Quick Links</p>
                <div class="footer-links-group">
                    <a href="<?php echo $path_prefix; ?>index.php">Home</a>
                    <a href="<?php echo $path_prefix; ?>services/about.php">About Us</a>
                    <a href="<?php echo $path_prefix; ?>Our Company/team.php">Meet Our Team</a>
                    <a href="<?php echo $path_prefix; ?>Initiatives/Initiatives.php">Initiatives</a>
                    <a href="<?php echo $path_prefix; ?>contact.php">Contact Us</a>
                </div>
            </div>

            <!-- Legal -->
            <div>
                <p class="footer-heading">Legal</p>
                <div class="footer-links-group">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Payment Policy</a>
                    <a href="#">Refund & Cancellation</a>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <p class="footer-heading">Get In Touch</p>
                <div class="footer-contact-info">
                    <div class="footer-contact-item">
                        <div class="footer-icon-circle"><i class="fas fa-phone"></i></div>
                        <span>+91 98988 92497<br><small style="color:rgba(255,255,255,0.4)">Mon–Sat 10AM–7PM</small></span>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-icon-circle"><i class="fas fa-envelope"></i></div>
                        <span>info@mahavirbusiness.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                        <span>Ahmedabad, Gujarat, India</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p class="footer-copy">Copyright &copy; 2026 Mahavir Business Solution. All rights reserved.</p>
            <div class="footer-social">
                <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" aria-label="X/Twitter"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- ════════ GLOBAL SCRIPTS ════════ -->
<script>
// ── Mobile menu toggle ──
const mobileBtn  = document.getElementById('mobileMenuBtn');
const navLinks   = document.getElementById('navLinks');

mobileBtn.addEventListener('click', function() {
    mobileBtn.classList.toggle('active');
    const isOpen = navLinks.classList.toggle('open');
    mobileBtn.setAttribute('aria-expanded', isOpen);
});

// ── Mobile dropdown toggle ──
const dropdowns = document.querySelectorAll('.has-dropdown');
dropdowns.forEach(dropdown => {
    const link = dropdown.querySelector('a');
    if (link) {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                e.stopPropagation();

                const isCurrentOpen = dropdown.classList.contains('dropdown-open');

                // Close all other dropdowns
                dropdowns.forEach(d => {
                    if (d !== dropdown) {
                        d.classList.remove('dropdown-open');
                    }
                });

                // Toggle current one
                dropdown.classList.toggle('dropdown-open');
            }
        });
    }
});
// Prevent sub-link clicks from bubbling up to the dropdown toggle
document.querySelectorAll('.dropdown a').forEach(subLink => {
    subLink.addEventListener('click', function(e) {
        if (window.innerWidth <= 1024) {
            e.stopPropagation();
        }
    });
});

// Close mobile menu on outside click
document.addEventListener('click', function(e) {
    if (!mobileBtn.contains(e.target) && !navLinks.contains(e.target)) {
        navLinks.classList.remove('open');
        mobileBtn.classList.remove('active');
        mobileBtn.setAttribute('aria-expanded', 'false');
        // Close all dropdowns when menu is closed
        dropdowns.forEach(d => d.classList.remove('dropdown-open'));
    }
});

// ── Sticky navbar scroll effect ──
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', function() {
    navbar.classList.toggle('scrolled', window.scrollY > 20);
}, { passive: true });

// ── Universal scroll reveal ──
const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
if (revealElements.length) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealElements.forEach(el => revealObserver.observe(el));
}

// ── Stats counter animation ──
function animateCounter(el) {
    const rawText = el.textContent.trim();
    const numMatch = rawText.match(/[\d,]+/);
    if (!numMatch) return;
    const target = parseInt(numMatch[0].replace(/,/g, ''));
    const suffix = rawText.replace(/[\d,]/g, '');
    let count = 0;
    const duration = 1800;
    const steps = 60;
    const increment = target / steps;
    const interval = duration / steps;
    const timer = setInterval(() => {
        count += increment;
        if (count >= target) { count = target; clearInterval(timer); }
        el.textContent = Math.round(count).toLocaleString() + suffix;
    }, interval);
}

const statsSection = document.querySelector('.stats-section, .stats-grid');
if (statsSection) {
    const statsObserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            document.querySelectorAll('.stat-number').forEach(animateCounter);
            statsObserver.disconnect();
        }
    }, { threshold: 0.3 });
    statsObserver.observe(statsSection);
}
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
// Hero Swiper (only init if exists)
if (document.querySelector('.hero-swiper')) {
    new Swiper('.hero-swiper', {
        loop: true,
        autoplay: { delay: 5500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        effect: 'fade',
        fadeEffect: { crossFade: true },
        speed: 900,
    });
}
</script>

</body>
</html>
