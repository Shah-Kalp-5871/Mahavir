<?php $path_prefix = '../'; $page_title = 'Startup Consultancy'; include '../includes/header.php'; ?>
<style>
/* ── SERVICE PAGE – SHARED PREMIUM BASE ── */
.service-hero-content-wrap { position: relative; z-index: 2; max-width: 620px; }
.service-overview { padding: var(--section-pad) 0; background: #fff; }
.service-feature-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.75rem; margin-top: 3.5rem; }
.sf-card {
    background: white; border-radius: var(--r-lg); padding: 2rem;
    border: 1px solid var(--border-color); box-shadow: var(--shadow-xs);
    transition: all var(--t-base); text-align: center;
}
.sf-card:hover { transform: translateY(-10px); box-shadow: var(--shadow-orange-md); border-color: var(--primary); }
.sf-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: var(--primary-light); color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem; margin: 0 auto 1.25rem;
    transition: all var(--t-spring);
}
.sf-card:hover .sf-icon { background: var(--primary); color: white; transform: rotate(8deg) scale(1.1); }
.sf-card h3 { font-size: 1rem; font-weight: 800; margin-bottom: 0.6rem; }
.sf-card p  { font-size: 0.875rem; color: var(--text-gray); line-height: 1.75; }
.process-section { background: var(--bg-warm); padding: var(--section-pad) 0; }
.process-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; margin-top: 3.5rem; position: relative; }
.process-steps::before {
    content: '';
    position: absolute; top: 28px; left: 60px; right: 60px;
    height: 2px; background: linear-gradient(90deg, var(--primary), var(--primary-light));
    z-index: 0;
}
.process-step { text-align: center; position: relative; z-index: 1; }
.process-num {
    width: 56px; height: 56px; border-radius: 50%;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white; font-weight: 900; font-size: 1.2rem;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 1.25rem; box-shadow: var(--shadow-orange-sm);
    border: 4px solid white;
}
.process-step h4 { font-size: 0.92rem; font-weight: 800; margin-bottom: 0.5rem; }
.process-step p  { font-size: 0.82rem; color: var(--text-gray); line-height: 1.65; }

@media(max-width:1024px) { .service-feature-grid { grid-template-columns: 1fr 1fr; } .process-steps { grid-template-columns: 1fr 1fr; } .process-steps::before { display: none; } }
@media(max-width:640px)  { .service-feature-grid, .process-steps { grid-template-columns: 1fr; } }
</style>

<!-- HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1920" alt="Startup Consultancy">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.35);color:var(--primary);margin-bottom:1rem;display:inline-block;"><i class="fas fa-rocket"></i> &nbsp;Startup Consultancy</span>
            <h1 class="page-title">Launch Your Business<br>Brand with <span style="color:var(--primary)">Confidence</span></h1>
            <p class="page-hero-sub">End-to-end consulting for ambitious entrepreneurs ready to make their mark in the business world.</p>
            <nav class="breadcrumb-light" style="margin-top:1.25rem;">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right"></i>
                <span>Services</span> <i class="fas fa-chevron-right"></i>
                <span>Startup</span>
            </nav>
        </div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="service-overview">
    <div class="container">
        <div class="split-row">
            <div class="split-image reveal-left">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800" alt="Business Strategy Planning">
                <div class="split-image-accent"><i class="fas fa-rocket"></i></div>
            </div>
            <div class="split-content reveal-right">
                <span class="section-label">What We Offer</span>
                <h2 class="section-title">From Concept to<br><span class="orange">Thriving Business Brand</span></h2>
                <p>Starting a new business requires more than capital — it demands a bulletproof strategy, market intelligence, and expert guidance. Our seasoned consultants are your partners in building a strong foundation for long-term success.</p>
                <p style="margin-top:1rem;">From initial market research and business modeling to brand positioning, inventory planning, and retail setup — we cover every critical step of your launch journey, backed by over 27 years of industry experience.</p>
                <div style="display:flex;gap:1rem;flex-wrap:wrap;margin-top:2rem;">
                    <a href="../contact.php" class="btn btn-primary">Book a Free Consultation <i class="fas fa-arrow-right"></i></a>
                    <a href="../services/about.php" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Why Choose Us</span>
            <h2 class="section-title">Why Partner With Us for Your <span class="orange">Startup?</span></h2>
            <p class="section-subtitle">We mitigate risks through proven methodologies and profound jewellery industry insights.</p>
        </div>
        <div class="service-feature-grid">
            <div class="sf-card reveal delay-1">
                <div class="sf-icon"><i class="fas fa-map-marked-alt"></i></div>
                <h3>Strategic Roadmap</h3>
                <p>A comprehensive business plan covering operational, financial, and marketing strategies tailored for your jewellery startup.</p>
            </div>
            <div class="sf-card reveal delay-2">
                <div class="sf-icon"><i class="fas fa-boxes"></i></div>
                <h3>Inventory & Sourcing</h3>
                <p>Access our vast network of trusted vendors. We'll help you curate the right product mix for your target market.</p>
            </div>
            <div class="sf-card reveal delay-3">
                <div class="sf-icon"><i class="fas fa-store"></i></div>
                <h3>Retail Execution</h3>
                <p>From location selection to store layout, visual merchandising, and staff recruitment — we handle the critical elements.</p>
            </div>
            <div class="sf-card reveal delay-4">
                <div class="sf-icon"><i class="fas fa-bullhorn"></i></div>
                <h3>Brand Positioning</h3>
                <p>Build a compelling brand identity that resonates with customers and stands out in a competitive marketplace.</p>
            </div>
            <div class="sf-card reveal delay-5">
                <div class="sf-icon"><i class="fas fa-calculator"></i></div>
                <h3>Financial Planning</h3>
                <p>Comprehensive financial modeling, funding guidance, and ROI projections to ensure a profitable business from day one.</p>
            </div>
            <div class="sf-card reveal delay-6">
                <div class="sf-icon"><i class="fas fa-handshake"></i></div>
                <h3>Ongoing Support</h3>
                <p>Post-launch mentoring and advisory support to keep you on track as your business grows and evolves.</p>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="process-section">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Process</span>
            <h2 class="section-title">Your Journey from <span class="orange">Concept to Launch</span></h2>
        </div>
        <div class="process-steps">
            <div class="process-step reveal delay-1">
                <div class="process-num">1</div>
                <h4>Discovery &amp; Analysis</h4>
                <p>We understand your vision, market opportunity, and competitive landscape.</p>
            </div>
            <div class="process-step reveal delay-2">
                <div class="process-num">2</div>
                <h4>Strategy Design</h4>
                <p>Craft a tailored business plan, financial model, and go-to-market strategy.</p>
            </div>
            <div class="process-step reveal delay-3">
                <div class="process-num">3</div>
                <h4>Execution Support</h4>
                <p>Hands-on guidance through setup, sourcing, marketing, and launch.</p>
            </div>
            <div class="process-step reveal delay-4">
                <div class="process-num">4</div>
                <h4>Growth &amp; Scale</h4>
                <p>Post-launch monitoring, performance reviews, and growth acceleration.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="cta-banner reveal">
            <h2 class="section-title">Ready to Turn Your Vision into Reality?</h2>
            <p class="section-subtitle">Let's discuss how our tailored startup consultancy can accelerate your journey to a thriving business.</p>
            <div class="btn-group">
                <a href="../contact.php" class="btn btn-white">Schedule a Strategy Session <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
