<?php $path_prefix = '../'; $page_title = 'Individual Development Program'; include '../includes/header.php'; ?>
<style>
.sf-card{background:white;border-radius:var(--r-lg);padding:2rem;border:1px solid var(--border-color);box-shadow:var(--shadow-xs);transition:all var(--t-base);}
.sf-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-orange-md);border-color:var(--primary);}
.sf-icon{width:60px;height:60px;border-radius:var(--r-md);background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin-bottom:1.25rem;transition:all var(--t-spring);}
.sf-card:hover .sf-icon{background:var(--primary);color:white;transform:rotate(8deg) scale(1.1);}
.sf-card h3{font-size:1rem;font-weight:800;margin-bottom:.6rem;}
.sf-card p{font-size:.875rem;color:var(--text-gray);line-height:1.75;}
.idp-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3.5rem;}
.outcome-row{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;}
.outcome-item{text-align:center;padding:2rem 1rem;}
.outcome-num{font-size:2.4rem;font-weight:900;color:var(--primary);line-height:1;}
.outcome-label{font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--text-gray);margin-top:.5rem;}
@media(max-width:1024px){.idp-grid{grid-template-columns:1fr 1fr;}.outcome-row{grid-template-columns:1fr 1fr;}}
@media(max-width:640px){.idp-grid,.outcome-row{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1920" alt="Individual Development Program">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.35);color:var(--primary);margin-bottom:1rem;display:inline-block;"><i class="fas fa-user-graduate"></i>&nbsp;IDP Program</span>
            <h1 class="page-title">Individual <span style="color:var(--primary)">Development</span><br>Program</h1>
            <p class="page-hero-sub">Unlock your professional potential with our personalised development coaching for jewellery industry leaders.</p>
            <nav class="breadcrumb-light" style="margin-top:1.25rem;">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Services</span><i class="fas fa-chevron-right"></i><span>IDP</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="split-row reverse">
            <div class="split-content reveal-left">
                <span class="section-label">The IDP Difference</span>
                <h2 class="section-title">Investing in Your <span class="orange">Greatest Asset — You</span></h2>
                <p>The Individual Development Program (IDP) is Mahavir's premium, fully personalised coaching experience. Unlike generic training, the IDP is built around your specific strengths, weaknesses, ambitions, and challenges as a business professional.</p>
                <p style="margin-top:1rem;">Through structured assessments, one-on-one sessions, and practical challenges, we unlock performance levels that directly translate to measurable business growth.</p>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:2rem;">Apply for IDP <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="split-image reveal-right">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800" alt="Personal Development Coaching">
                <div class="split-image-accent"><i class="fas fa-user-graduate"></i></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Program Modules</span>
            <h2 class="section-title">Comprehensive <span class="orange">Development Areas</span></h2>
        </div>
        <div class="idp-grid">
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-calendar-alt"></i></div><h3>Eight Monthly Visits</h3><p>Every visit 4 hrs at your venue (In Ahmedabad) to ensure consistent progress and hands-on guidance.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-map-marked-alt"></i></div><h3>Four Full-Day Visits</h3><p>Present for full day at your venue (Out of Ahmedabad) for deep-dive training and system implementation.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-search-plus"></i></div><h3>Bi-Monthly Reviews</h3><p>Two comprehensive reviews in a month at the client's floor to monitor progress and adjust strategies.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fas fa-users"></i></div><h3>Expert Meetings</h3><p>One monthly meeting by our professional expert at your floor for high-level strategic alignment.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-glass-cheers"></i></div><h3>Client Entertain Events</h3><p>Specialized guidance on organizing and managing effective client entertainment events.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-cut"></i></div><h3>Store Grooming</h3><p>Complete store grooming services to ensure your business environment reflects your brand's excellence.</p></div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Program Outcomes</span>
            <h2 class="section-title">Results That <span class="orange">Speak for Themselves</span></h2>
        </div>
        <div class="outcome-row">
            <div class="outcome-item reveal delay-1"><div class="outcome-num">92%</div><div class="outcome-label">Report Improved Leadership Confidence</div></div>
            <div class="outcome-item reveal delay-2"><div class="outcome-num">3x</div><div class="outcome-label">Avg. Revenue Growth Post-IDP</div></div>
            <div class="outcome-item reveal delay-3"><div class="outcome-num">200+</div><div class="outcome-label">Jewellery Leaders Transformed</div></div>
            <div class="outcome-item reveal delay-4"><div class="outcome-num">100%</div><div class="outcome-label">Personalised to Your Journey</div></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Begin Your Personal Transformation</h2>
        <p class="section-subtitle">Limited spots available for each IDP cohort. Apply today to secure your place.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Apply for IDP Now <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
