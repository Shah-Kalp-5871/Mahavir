<?php $path_prefix = '../'; $page_title = 'Make My Dreams'; include '../includes/header.php'; ?>
<style>
.sf-card{background:white;border-radius:var(--r-lg);padding:2rem;border:1px solid var(--border-color);box-shadow:var(--shadow-xs);transition:all var(--t-base);}
.sf-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-orange-md);border-color:var(--primary);}
.sf-icon{width:60px;height:60px;border-radius:var(--r-md);background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin-bottom:1.25rem;transition:all var(--t-spring);}
.sf-card:hover .sf-icon{background:var(--primary);color:white;transform:rotate(8deg) scale(1.1);}
.sf-card h3{font-size:1rem;font-weight:800;margin-bottom:.6rem;}
.sf-card p{font-size:.875rem;color:var(--text-gray);line-height:1.75;}
.dream-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3.5rem;}
.promise-list{display:flex;flex-direction:column;gap:1rem;margin-top:2rem;}
.promise-item{display:flex;gap:1rem;align-items:flex-start;padding:1.25rem;background:white;border-radius:var(--r-md);border:1px solid var(--border-color);transition:all var(--t-base);}
.promise-item:hover{border-color:var(--primary);box-shadow:var(--shadow-orange-sm);transform:translateX(6px);}
.promise-icon{width:40px;height:40px;border-radius:50%;background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:.9rem;flex-shrink:0;transition:all var(--t-spring);}
.promise-item:hover .promise-icon{background:var(--primary);color:white;}
.promise-item p{font-size:.9rem;color:var(--text-medium);line-height:1.7;}
.promise-item strong{color:var(--text-dark);}
@media(max-width:768px){.dream-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=1920" alt="Make My Dreams">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.35);color:var(--primary);margin-bottom:1rem;display:inline-block;"><i class="fas fa-star"></i>&nbsp;Make My Dreams</span>
            <h1 class="page-title">Turn Your Vision into<br><span style="color:var(--primary)">Reality</span></h1>
            <p class="page-hero-sub">A comprehensive growth program for established business owners ready to take their business to the next level.</p>
            <nav class="breadcrumb-light" style="margin-top:1.25rem;">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Services</span><i class="fas fa-chevron-right"></i><span>Make My Dreams</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="split-row">
            <div class="split-image reveal-left">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=800" alt="Business Dreams Achieved">
                <div class="split-image-accent"><i class="fas fa-star"></i></div>
            </div>
            <div class="split-content reveal-right">
                <span class="section-label">The Program</span>
                <h2 class="section-title">Your Dreams, Our <span class="orange">Strategic Blueprint</span></h2>
                <p>Make My Dreams is a structured, results-oriented program built for business leaders who have a vision but need a strategic roadmap and execution support to achieve it. Whether it's opening a new branch, pivoting to high-value segments, or establishing a legacy brand — we make it happen.</p>
                <div class="promise-list">
                    <div class="promise-item"><div class="promise-icon"><i class="fas fa-bullseye"></i></div><p><strong>Goal Clarity:</strong> Define specific, measurable business milestones and align your entire team around them.</p></div>
                    <div class="promise-item"><div class="promise-icon"><i class="fas fa-map"></i></div><p><strong>Strategic Roadmap:</strong> A complete 12-month action plan with weekly checkpoints and accountability frameworks.</p></div>
                    <div class="promise-item"><div class="promise-icon"><i class="fas fa-rocket"></i></div><p><strong>Execution Support:</strong> Hands-on guidance and expert intervention at every critical milestone.</p></div>
                </div>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:2rem;">Start Your Dream Journey <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Core Focus Areas</span>
            <h2 class="section-title">What We'll Work On <span class="orange">Together</span></h2>
        </div>
        <div class="dream-grid">
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-expand-arrows-alt"></i></div><h3>Business Expansion</h3><p>Strategic planning for opening new outlets, entering new geographies, or diversifying into new market segments.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-crown"></i></div><h3>Brand Elevation</h3><p>Transform your local business into a premium, recognisable brand that attracts loyal, high-value customers.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-chart-line"></i></div><h3>Revenue Growth</h3><p>Data-driven strategies to increase average transaction value, customer frequency, and overall revenue performance.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fas fa-cogs"></i></div><h3>Systems & Processes</h3><p>Build scalable operational systems — from inventory management to HR — that support growth without chaos.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-users"></i></div><h3>Team Development</h3><p>Build and train a leadership team capable of driving your vision forward with minimal constant oversight.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-shield-alt"></i></div><h3>Legacy Planning</h3><p>Ensure the long-term sustainability and succession of your business across generations.</p></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">What's Your Business Dream?</h2>
        <p class="section-subtitle">Share your ambitions with us, and we'll build the plan to make them your reality.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Let's Make It Happen <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
