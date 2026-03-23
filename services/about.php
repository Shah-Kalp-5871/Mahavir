<?php $path_prefix = '../'; $page_title = 'About Us'; include '../includes/header.php'; ?>
<style>
/* ── ABOUT PAGE PREMIUM ── */

/* Hero */
.about-hero {
    padding-top: 72px;
    background: linear-gradient(155deg, #0f172a 0%, #1c1917 40%, #0f172a 100%);
    min-height: 60vh;
    display: flex; align-items: center;
    position: relative; overflow: hidden;
}
.about-hero::before {
    content: '';
    position: absolute; inset: 0;
    background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1920') center/cover;
    opacity: 0.12;
}
.about-hero::after {
    content: '';
    position: absolute; inset: 0;
    background: radial-gradient(ellipse at 70% 50%, rgba(249,115,22,0.15), transparent 60%);
}
.about-hero-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;
    position: relative; z-index: 2; width: 100%;
}
.about-hero-tag {
    display: inline-flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 800; letter-spacing: 0.14em;
    text-transform: uppercase; color: var(--primary);
    background: rgba(249,115,22,0.12);
    border: 1px solid rgba(249,115,22,0.3);
    padding: 0.4rem 1.1rem; border-radius: 50px; margin-bottom: 1.5rem;
}
.about-title {
    font-size: clamp(3rem, 5.5vw, 5rem);
    font-weight: 900; color: white; line-height: 1.05;
    letter-spacing: -0.02em; margin-bottom: 1.25rem;
}
.about-hero-desc { color: rgba(255,255,255,0.7); font-size: 1.05rem; line-height: 1.8; max-width: 480px; }
.about-hero-image { 
    border-radius: var(--r-xl); overflow: hidden; box-shadow: 0 30px 80px rgba(0,0,0,0.5);
    animation: slideInRight 0.9s 0.3s both ease;
}
@keyframes slideInRight { from{opacity:0;transform:translateX(50px)} to{opacity:1;transform:translateX(0)} }
.about-hero-image img { width: 100%; height: 420px; object-fit: cover; display: block; }
.about-hero-text { animation: slideInLeft 0.9s 0.1s both ease; }
@keyframes slideInLeft { from{opacity:0;transform:translateX(-50px)} to{opacity:1;transform:translateX(0)} }

/* Intro */
.intro-section { background: #fff; padding: var(--section-pad) 0; }
.intro-grid { display: grid; grid-template-columns: 1fr 1.1fr; gap: 5rem; align-items: center; }
.intro-img-wrap {
    border-radius: var(--r-xl); overflow: hidden; box-shadow: var(--shadow-xl);
    position: relative;
}
.intro-img-wrap img { width: 100%; height: 480px; object-fit: cover; display: block; transition: transform var(--t-slow); }
.intro-img-wrap:hover img { transform: scale(1.04); }
.intro-img-badge {
    position: absolute; bottom: 1.5rem; right: 1.5rem;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white; padding: 1rem 1.5rem; border-radius: var(--r-md);
    font-weight: 700; font-size: 0.85rem; display: flex; align-items: center; gap: 0.5rem;
    box-shadow: var(--shadow-orange-md);
}
.intro-content p { color: var(--text-medium); line-height: 1.85; margin-bottom: 1.1rem; font-size: 1rem; }

/* Mission/Vision */
.mv-section { background: var(--bg-warm); padding: var(--section-pad) 0; }
.mv-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.mv-card {
    background: white; border-radius: var(--r-xl); padding: 2.75rem;
    box-shadow: var(--shadow-md); border-top: 4px solid var(--primary);
    transition: all var(--t-base); position: relative; overflow: hidden;
}
.mv-card::after {
    content: '';
    position: absolute; top: -40px; right: -40px;
    width: 120px; height: 120px; border-radius: 50%;
    background: var(--primary-light); opacity: 0.6; pointer-events: none;
}
.mv-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-xl); }
.mv-card-icon {
    width: 56px; height: 56px; border-radius: var(--r-md);
    background: var(--primary-light); color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem; margin-bottom: 1.5rem; transition: all var(--t-spring);
}
.mv-card:hover .mv-card-icon { background: var(--primary); color: white; transform: rotate(8deg) scale(1.1); }
.mv-title { font-size: 1.6rem; font-weight: 800; margin-bottom: 1.5rem; }
.mv-list { display: flex; flex-direction: column; gap: 1rem; }
.mv-list li {
    display: flex; align-items: flex-start; gap: 0.75rem;
    color: var(--text-medium); line-height: 1.75; font-size: 0.93rem;
}
.mv-list li i { color: var(--primary); margin-top: 0.22rem; flex-shrink: 0; font-size: 0.9rem; }

/* Why Choose */
.why-section { padding: var(--section-pad) 0; background: #fff; }
.why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-top: 3.5rem; }
.why-card {
    background: white; border-radius: var(--r-lg); padding: 2rem;
    box-shadow: var(--shadow-sm); text-align: center;
    border: 1px solid var(--border-color);
    transition: all var(--t-base); cursor: default;
}
.why-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 24px 50px var(--primary-glow);
    border-color: var(--primary);
}
.why-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: var(--primary-light); color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem; margin: 0 auto 1.25rem;
    transition: all var(--t-spring);
}
.why-card:hover .why-icon { background: var(--primary); color: white; transform: rotate(10deg) scale(1.12); box-shadow: var(--shadow-orange-sm); }
.why-card h3 { font-size: 0.97rem; font-weight: 800; margin-bottom: 0.75rem; }
.why-card p  { font-size: 0.85rem; color: var(--text-gray); line-height: 1.75; }

/* Values */
.values-section { background: var(--bg-warm); padding: var(--section-pad) 0; }
.values-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3.5rem; }
.value-card {
    background: white; border-radius: var(--r-lg); padding: 2.25rem;
    box-shadow: var(--shadow-sm); border: 1px solid var(--border-color);
    transition: all var(--t-base);
}
.value-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-lg); border-color: rgba(249,115,22,0.2); }
.value-icon {
    width: 54px; height: 54px; border-radius: var(--r-md);
    background: var(--primary-light); color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.2rem; margin-bottom: 1.25rem;
    transition: all var(--t-spring);
}
.value-card:hover .value-icon { background: var(--primary); color: white; transform: rotate(6deg); }
.value-card h3 { font-size: 1rem; font-weight: 800; margin-bottom: 0.75rem; }
.value-card p  { font-size: 0.88rem; color: var(--text-gray); line-height: 1.75; }

/* CTA */
.about-cta-wrap { padding: var(--section-pad) 0; background: #fff; }

/* Responsive */
@media(max-width:1024px) {
    .about-hero-grid, .intro-grid, .mv-grid { grid-template-columns: 1fr; gap: 3rem; }
    .why-grid { grid-template-columns: 1fr 1fr; }
    .values-grid { grid-template-columns: 1fr 1fr; }
    .about-hero-image { display: none; }
    .about-hero { min-height: 50vh; }
}
@media(max-width:640px) {
    .why-grid, .values-grid { grid-template-columns: 1fr; }
    .about-title { font-size: 2.8rem; }
}
</style>

<!-- ════════ HERO ════════ -->
<section class="about-hero">
    <div class="container">
        <div class="about-hero-grid">
            <div class="about-hero-text">
                <div class="about-hero-tag"><i class="fas fa-gem"></i> India's #1 Jewellery Consultants</div>
                <h1 class="about-title">About<br><span style="color:var(--primary)">Headway</span></h1>
                <p class="about-hero-desc">Where innovation meets brilliance. We're dedicated to helping jewellery entrepreneurs achieve outstanding and sustainable success.</p>
                <nav class="breadcrumb-light" style="margin-top:2rem;">
                    <a href="../index.php">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>About Us</span>
                </nav>
            </div>
            <div class="about-hero-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Headway Business Solutions Team">
            </div>
        </div>
    </div>
</section>

<!-- ════════ INTRODUCTION ════════ -->
<section class="intro-section">
    <div class="container">
        <div class="intro-grid">
            <div class="intro-img-wrap reveal-left">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Headway Business Growth">
                <div class="intro-img-badge"><i class="fas fa-award"></i> 15+ Years of Excellence</div>
            </div>
            <div class="intro-content reveal-right">
                <span class="section-label">Our Introduction</span>
                <h2 class="section-title">Where Innovation Meets <span class="orange">Brilliance</span></h2>
                <p>With a warm welcome, we introduce ourselves as <strong>Headway Business Solutions LLP</strong>, where innovation meets brilliance for jewellery business coaching and consulting. As a leading consulting firm, we take pride in dedicating our solution-providing guidance to jewellery entrepreneurs toward outstanding success.</p>
                <p>At Headway, we understand that the jewellery business is not merely about ornaments — it's a delicate balance of productive operations, revenue generation through strategic marketing, and effective selling of artistic products.</p>
                <p>Our seasoned experts bring vast experience, offering tailor-made solutions that will thrust your business forward. We are not just advisors; we are your long-term partners, sailing alongside you every step of the way.</p>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:1.5rem;">Book a Free Consultation <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ════════ MISSION & VISION ════════ -->
<section class="mv-section">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Purpose</span>
            <h2 class="section-title">Mission &amp; <span class="orange">Vision</span></h2>
            <p class="section-subtitle">Guided by purpose, driven by results — read what fuels the Headway promise.</p>
        </div>
        <div class="mv-grid">
            <div class="mv-card reveal delay-1">
                <div class="mv-card-icon"><i class="fas fa-bullseye"></i></div>
                <h2 class="mv-title">Our <span class="orange">Mission</span></h2>
                <ul class="mv-list">
                    <li><i class="fas fa-check-circle"></i> Help every jewellery business thrive, setting new benchmarks for success.</li>
                    <li><i class="fas fa-check-circle"></i> Equip jewellery businesses with tools to succeed in evolving market conditions.</li>
                    <li><i class="fas fa-check-circle"></i> Nurture startups and accelerate growth for established jewellers.</li>
                    <li><i class="fas fa-check-circle"></i> Turn aspirations into tangible achievements through custom-made strategies and unwavering support.</li>
                </ul>
            </div>
            <div class="mv-card reveal delay-2">
                <div class="mv-card-icon"><i class="fas fa-eye"></i></div>
                <h2 class="mv-title">Our <span class="orange">Vision</span></h2>
                <ul class="mv-list">
                    <li><i class="fas fa-check-circle"></i> Be the world's foremost coaching and advisory firm for jewellery businesses.</li>
                    <li><i class="fas fa-check-circle"></i> Ensure all partner jewellers succeed in their unique aspirations.</li>
                    <li><i class="fas fa-check-circle"></i> Deliver top-notch advice, creative strategies, and powerful solutions.</li>
                    <li><i class="fas fa-check-circle"></i> Take the jewellery industry to unprecedented levels of collective success.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ════════ WHY CHOOSE ════════ -->
<section class="why-section">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Why Headway?</span>
            <h2 class="section-title">Why Designate <span class="orange">Headway Business Solutions?</span></h2>
            <p class="section-subtitle">Four pillars that make us the preferred partner for jewellers across India.</p>
        </div>
        <div class="why-grid">
            <div class="why-card reveal delay-1">
                <div class="why-icon"><i class="fas fa-gem"></i></div>
                <h3>Distinctive Industry Expertise</h3>
                <p>Unmatched depth of knowledge in the jewellery sector, enabling insights and strategies that are always ahead of the curve.</p>
            </div>
            <div class="why-card reveal delay-2">
                <div class="why-icon"><i class="fas fa-lightbulb"></i></div>
                <h3>Customised Strategies</h3>
                <p>Every jewellery business is unique. We craft personalised, adaptive strategies designed exclusively for your challenges and goals.</p>
            </div>
            <div class="why-card reveal delay-3">
                <div class="why-icon"><i class="fas fa-layer-group"></i></div>
                <h3>Comprehensive Services</h3>
                <p>From operational optimization to brand development and financial advisory — Headway is your one-stop consulting hub.</p>
            </div>
            <div class="why-card reveal delay-4">
                <div class="why-icon"><i class="fas fa-trophy"></i></div>
                <h3>Proven Track Record</h3>
                <p>A consistent history of breaking success records, helping businesses across gold, silver, diamond, and gem jewellery sectors to thrive.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════ VALUES ════════ -->
<section class="values-section">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Values</span>
            <h2 class="section-title">Sparkling Futures, <span class="orange">Crafted Today</span></h2>
        </div>
        <div class="values-grid">
            <div class="value-card reveal delay-1">
                <div class="value-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>Building Skills &amp; Confidence</h3>
                <p>We empower jewellery stores with invaluable skills, strategic insights, and industry-specific knowledge through comprehensive training programs.</p>
            </div>
            <div class="value-card reveal delay-2">
                <div class="value-icon"><i class="fas fa-comments"></i></div>
                <h3>Expert Coaching &amp; Consultation</h3>
                <p>Whether navigating a new venture or enhancing an established business, our training equips you to thrive in the competitive jewellery market.</p>
            </div>
            <div class="value-card reveal delay-3">
                <div class="value-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Committed to Your Growth</h3>
                <p>Beyond theory — our programs provide practical, actionable guidance that transforms aspirations into tangible, lasting achievements.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="about-cta-wrap">
    <div class="container">
        <div class="cta-banner reveal">
            <h2 class="section-title" style="color:white;">Ready to Transform Your <br>Jewellery Business?</h2>
            <p class="section-subtitle" style="color:rgba(255,255,255,0.85);">Join 500+ jewellers who've transformed their businesses with Headway's expert guidance.</p>
            <div class="btn-group">
                <a href="../contact.php" class="btn btn-white">Start Your Journey <i class="fas fa-arrow-right"></i></a>
                <a href="../Our Company/team.php" class="btn btn-outline" style="border-color:rgba(255,255,255,0.5);color:white;">Meet Our Team</a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
