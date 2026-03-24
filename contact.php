<?php $path_prefix = ''; $page_title = 'Contact Us'; include 'includes/header.php'; ?>
<style>
/* ── CONTACT PAGE PREMIUM ── */
.contact-form-section { padding: var(--section-pad) 0; background: var(--bg-light); }
.contact-layout { display: grid; grid-template-columns: 1fr 1.5fr; gap: 4rem; align-items: start; }
.contact-info-card {
    background: linear-gradient(155deg, #fff7ed, #ffedd5);
    border-radius: var(--r-xl); padding: 3rem;
    position: relative; overflow: hidden;
    box-shadow: var(--shadow-xl);
}
.contact-info-card::before {
    content: '';
    position: absolute; top: -80px; right: -80px;
    width: 250px; height: 250px; border-radius: 50%;
    background: radial-gradient(circle, rgba(249,115,22,0.15), transparent 70%);
}
.contact-info-card::after {
    content: '';
    position: absolute; bottom: -60px; left: -60px;
    width: 180px; height: 180px; border-radius: 50%;
    background: rgba(249,115,22,0.08);
}
.contact-info-card h2 { color: var(--text-dark); font-size: 1.6rem; font-weight: 800; margin-bottom: 0.75rem; position: relative; z-index: 1; }
.contact-info-card .sub { color: var(--text-medium); font-size: 0.9rem; line-height: 1.7; margin-bottom: 2.5rem; position: relative; z-index: 1; }
.contact-info-items { display: flex; flex-direction: column; gap: 1.5rem; position: relative; z-index: 1; }
.contact-info-item { display: flex; gap: 1rem; align-items: flex-start; }
.ci-icon {
    width: 46px; height: 46px; border-radius: var(--r-md);
    background: rgba(249,115,22,0.15); border: 1px solid rgba(249,115,22,0.3);
    display: flex; align-items: center; justify-content: center;
    color: var(--primary); font-size: 1rem; flex-shrink: 0;
}
.ci-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-gray); }
.ci-value { font-size: 0.95rem; color: var(--text-dark); font-weight: 500; margin-top: 0.2rem; line-height: 1.5; }
.contact-social { display: flex; gap: 0.6rem; margin-top: 2.5rem; padding-top: 2rem; border-top: 1px solid rgba(249,115,22,0.2); position: relative; z-index: 1; }
.contact-social a {
    width: 38px; height: 38px; border-radius: 50%;
    background: rgba(249,115,22,0.12);
    border: 1px solid rgba(249,115,22,0.25);
    display: flex; align-items: center; justify-content: center;
    color: var(--primary); font-size: 0.8rem;
    transition: all var(--t-spring);
}
.contact-social a:hover { background: var(--primary); border-color: var(--primary); color: white; transform: translateY(-4px); }

/* Form card */
.contact-form-box {
    background: white; border-radius: var(--r-xl); padding: 3rem;
    box-shadow: var(--shadow-lg); border: 1px solid var(--border-color); position: relative;
}
.contact-form-box::before {
    content: '';
    position: absolute; top: 0; right: 0;
    width: 100px; height: 100px; border-radius: 0 var(--r-xl) 0 100%;
    background: var(--primary-light); opacity: 0.7;
}
.contact-form-box h3 { font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem; }
.contact-form-box .form-sub { font-size: 0.88rem; color: var(--text-gray); margin-bottom: 2rem; }
.form-grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; }
.form-group { display: flex; flex-direction: column; gap: 0.4rem; margin-bottom: 0.25rem; }
.contact-submit {
    width: 100%;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white; font-weight: 700; font-size: 1rem;
    border: none; border-radius: var(--r-md);
    display: flex; align-items: center; justify-content: center; gap: 0.5rem;
    transition: all var(--t-spring); cursor: pointer;
    box-shadow: var(--shadow-orange-sm); letter-spacing: 0.02em;
    margin-top: 0.5rem;
}
.contact-submit:hover { transform: translateY(-3px); box-shadow: var(--shadow-orange-md); }

/* Map */
.map-section { padding: 0 0 var(--section-pad); background: var(--bg-light); }
.map-frame {
    border-radius: var(--r-xl); overflow: hidden;
    box-shadow: var(--shadow-xl); border: 8px solid white;
    height: 460px; position: relative;
}
.map-frame img { width: 100%; height: 100%; object-fit: cover; display: block; }
.map-pin {
    position: absolute; top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    display: flex; flex-direction: column; align-items: center; gap: 0.5rem;
}
.map-pin-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 1.6rem;
    box-shadow: 0 12px 30px rgba(249,115,22,0.45);
    animation: pinBounce 2.5s ease-in-out infinite;
    border: 4px solid white;
}
@keyframes pinBounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
}
.map-pin-label {
    background: white; padding: 0.5rem 1.25rem; border-radius: 50px;
    font-weight: 700; font-size: 0.88rem; color: var(--text-dark);
    box-shadow: var(--shadow-md);
}

/* Responsive */
@media(max-width:1024px) { .contact-layout { grid-template-columns: 1fr; } }
@media(max-width:640px) { .form-grid-2 { grid-template-columns: 1fr; } .contact-form-box, .contact-info-card { padding: 2rem; } }
</style>

<!-- ════════ HERO ════════ -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?auto=format&fit=crop&q=80&w=1600" alt="Connect with Mahavir">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Contact <span style="color:var(--primary)">Us</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">We're here to help your business grow to its fullest potential.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Contact Us</span>
            </nav>
        </div>
    </div>
</section>

<!-- ════════ CONTACT FORM ════════ -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-layout">
            <!-- Info Card (dark) -->
            <div class="contact-info-card reveal-left">
                <h2>Let's Start a Conversation</h2>
                <p class="sub">Have questions? Our experts are ready to provide the 100% solution you've been looking for.</p>
                <div class="contact-info-items">
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <div class="ci-label">Our Location</div>
                            <div class="ci-value">Ahmedabad, Gujarat, India</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <div class="ci-label">Call Us</div>
                            <div class="ci-value">+91 98988 92497</div>
                            <div class="ci-value" style="color:rgba(255,255,255,0.45);font-size:0.8rem;">Mon–Sat: 10AM–7PM IST</div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="ci-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <div>
                            <div class="ci-label">Email Support</div>
                            <div class="ci-value">info@mahavirbusiness.com</div>
                        </div>
                    </div>
                </div>
                <div class="contact-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-box reveal-right">
                <h3>Send Us a <span class="orange">Message</span></h3>
                <p class="form-sub">Fill out the form and we'll get back to you within 24 hours.</p>
                <form action="#" style="display:flex;flex-direction:column;gap:1.1rem;">
                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label">Your Name *</label>
                            <input type="text" placeholder="Full name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" placeholder="Email address" required>
                        </div>
                    </div>
                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" placeholder="+91 00000 00000">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <input type="text" placeholder="How can we help?">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Your Message *</label>
                        <textarea rows="5" placeholder="Tell us about your business and what you need help with..." required></textarea>
                    </div>
                    <button type="submit" class="contact-submit">
                        <i class="fas fa-paper-plane"></i> Submit Your Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ════════ MAP ════════ -->
<section class="map-section">
    <div class="container">
        <div class="section-header centered reveal" style="margin-bottom:2.5rem;">
            <span class="section-label">Find Us</span>
            <h2 class="section-title">Our <span class="orange">Office Location</span></h2>
        </div>
        <div class="map-frame reveal">
            <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&q=80&w=1600" alt="Ahmedabad Office Location">
            <div class="map-pin">
                <div class="map-pin-icon"><i class="fas fa-map-pin"></i></div>
                <div class="map-pin-label">Mahavir HQ – Ahmedabad</div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
