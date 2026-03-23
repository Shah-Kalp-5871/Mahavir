<?php $path_prefix = '../'; $page_title = 'Intelligent HR'; include '../includes/header.php'; ?>
<style>
.sf-card{background:white;border-radius:var(--r-lg);padding:2rem;border:1px solid var(--border-color);box-shadow:var(--shadow-xs);transition:all var(--t-base);}
.sf-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-orange-md);border-color:var(--primary);}
.sf-icon{width:60px;height:60px;border-radius:var(--r-md);background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin-bottom:1.25rem;transition:all var(--t-spring);}
.sf-card:hover .sf-icon{background:var(--primary);color:white;transform:rotate(8deg) scale(1.1);}
.sf-card h3{font-size:1rem;font-weight:800;margin-bottom:.6rem;}
.sf-card p{font-size:.875rem;color:var(--text-gray);line-height:1.75;}
.hr-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.75rem;margin-top:3.5rem;}
.hr-full-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3.5rem;}
@media(max-width:768px){.hr-grid,.hr-full-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=1920" alt="Intelligent HR">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.35);color:var(--primary);margin-bottom:1rem;display:inline-block;"><i class="fas fa-users-cog"></i>&nbsp;Intelligent HR</span>
            <h1 class="page-title">Build the Team That<br>Builds Your <span style="color:var(--primary)">Business</span></h1>
            <p class="page-hero-sub">Specialised HR solutions designed exclusively for the unique needs of jewellery businesses across India.</p>
            <nav class="breadcrumb-light" style="margin-top:1.25rem;">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Services</span><i class="fas fa-chevron-right"></i><span>Intelligent HR</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="split-row">
            <div class="split-image reveal-left">
                <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&q=80&w=800" alt="HR Team Management">
                <div class="split-image-accent"><i class="fas fa-users-cog"></i></div>
            </div>
            <div class="split-content reveal-right">
                <span class="section-label">Why Intelligent HR?</span>
                <h2 class="section-title">People-First <span class="orange">HR Strategy</span> for Jewellers</h2>
                <p>In the jewellery industry, your team is your greatest competitive advantage. Intelligent HR goes beyond payroll and policies — it's about building a people ecosystem that drives performance, loyalty, and growth.</p>
                <p style="margin-top:1rem;">Our HR specialists understand the specific challenges jewellery businesses face: seasonal demand, trust-sensitive roles, multi-location management, and a need for specialised product expertise. We solve all of this systematically.</p>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:2rem;">Get HR Assessment <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">HR Services</span>
            <h2 class="section-title">Complete <span class="orange">HR Solutions</span> for Jewellery Businesses</h2>
        </div>
        <div class="hr-full-grid">
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-search"></i></div><h3>Talent Acquisition</h3><p>Source, screen, and onboard the right people for sales, operations, and management roles in your jewellery business.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-graduation-cap"></i></div><h3>Staff Training</h3><p>Structured onboarding and ongoing training programs that bring new hires to full productivity rapidly.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-file-contract"></i></div><h3>Policy Development</h3><p>Create clear, legally sound HR policies — attendance, conduct, incentives, and dispute resolution — tailored for jewellers.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fas fa-chart-bar"></i></div><h3>Performance Systems</h3><p>Design KPI frameworks, appraisal cycles, and incentive structures that motivate and retain top talent.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-heart"></i></div><h3>Employee Engagement</h3><p>Build a positive workplace culture where your jewellery team is motivated, loyal, and brand-proud.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-balance-scale"></i></div><h3>Compliance &amp; Legal</h3><p>Ensure full compliance with Indian labour laws, PF, ESI, and other statutory requirements for your business.</p></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Ready to Build Your Dream Team?</h2>
        <p class="section-subtitle">Let our HR specialists help you attract, develop, and retain the talent that powers your jewellery business.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Talk to an HR Expert <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>