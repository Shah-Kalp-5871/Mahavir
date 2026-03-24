<?php $path_prefix = '../'; $page_title = 'Jewellery Vidhyapith'; include '../includes/header.php'; ?>
<style>
.service-feature-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3.5rem;}
.sf-card{background:white;border-radius:var(--r-lg);padding:2rem;border:1px solid var(--border-color);box-shadow:var(--shadow-xs);transition:all var(--t-base);text-align:center;}
.sf-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-orange-md);border-color:var(--primary);}
.sf-icon{width:64px;height:64px;border-radius:50%;background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin:0 auto 1.25rem;transition:all var(--t-spring);}
.sf-card:hover .sf-icon{background:var(--primary);color:white;transform:rotate(8deg) scale(1.1);}
.sf-card h3{font-size:1rem;font-weight:800;margin-bottom:.6rem;}
.sf-card p{font-size:.875rem;color:var(--text-gray);line-height:1.75;}
.courses-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:2rem;margin-top:3rem;}
.course-card{background:white;border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-md);border:1px solid var(--border-color);transition:all var(--t-base);}
.course-card:hover{transform:translateY(-8px);box-shadow:var(--shadow-orange-md);}
.course-card-img{height:200px;overflow:hidden;}
.course-card-img img{width:100%;height:100%;object-fit:cover;transition:transform var(--t-slow);}
.course-card:hover .course-card-img img{transform:scale(1.08);}
.course-card-body{padding:1.75rem;}
.course-tag{display:inline-block;font-size:.7rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:var(--primary);background:var(--primary-light);padding:.25rem .75rem;border-radius:50px;margin-bottom:.75rem;}
.course-card-body h3{font-size:1.1rem;font-weight:800;margin-bottom:.5rem;}
.course-card-body p{font-size:.88rem;color:var(--text-gray);line-height:1.7;}
@media(max-width:1024px){.service-feature-grid{grid-template-columns:1fr 1fr;}.courses-grid{grid-template-columns:1fr;}}
@media(max-width:640px){.service-feature-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1920" alt="Jewellery Vidhyapith Training">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.35);color:var(--primary);margin-bottom:1rem;display:inline-block;"><i class="fas fa-graduation-cap"></i>&nbsp;Training & Education</span>
            <h1 class="page-title">Business <span style="color:var(--primary)">Induction</span></h1>
            <p class="page-hero-sub">[ A COMPLETE BUSINESS DEVELOPMENT TRAINING ]</p>
            <nav class="breadcrumb-light" style="margin-top:1.25rem;">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i>
                <span>Services</span><i class="fas fa-chevron-right"></i>
                <span>Jewellery Vidhyapith</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="split-row">
            <div class="split-image reveal-left">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Jewellery Training Programs">
                <div class="split-image-accent"><i class="fas fa-graduation-cap"></i></div>
            </div>
            <div class="split-content reveal-right">
                <span class="section-label">About Business Induction</span>
                <h2 class="section-title">Complete <span class="orange">Business Development</span> Training</h2>
                <p>Business Induction is Mahavir's dedicated training wing, born from the recognition that continuous learning is the cornerstone of any thriving business. Our programs are meticulously designed to bridge the gap between industry knowledge and practical application.</p>
                <p style="margin-top:1rem;">From sales training to strategy development, from CRM to finance management — our curriculum covers every dimension that a modern business needs to master, leveraging over 27 years of experience.</p>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:2rem;">Enroll Today <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Modules</span>
            <h2 class="section-title">12 Pillars of <span class="orange">Business Success</span></h2>
        </div>
        <div class="service-feature-grid">
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-chart-line"></i></div><h3>Business Reality</h3><p>Understanding the current market landscape and ground realities of modern business.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-users-cog"></i></div><h3>HRM</h3><p>Human Resource Management to build and sustain a productive work culture.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-user-friends"></i></div><h3>CRM</h3><p>Customer Relationship Management to foster loyalty and lifelong trust.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fas fa-smile"></i></div><h3>Positive Attitude</h3><p>Inculcating the right mindset and attitude required for professional growth.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-box-open"></i></div><h3>Product Management</h3><p>Strategic management of product lifecycle, inventory, and value proposition.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-bullhorn"></i></div><h3>Branding & Marketing</h3><p>Building a powerful brand identity and reaching the right audience effectively.</p></div>
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-clock"></i></div><h3>Time Management</h3><p>Optimizing productivity through effective time allocation and discipline.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-users"></i></div><h3>Team Management</h3><p>The 5 C's: Cooperating, Coordinating, Comforting, Communicating, Conflict Resolving.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-coins"></i></div><h3>Finance Management</h3><p>Sustainable financial planning, cash flow management, and profitability.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fas fa-chess-knight"></i></div><h3>Strategy Development</h3><p>Crafting long-term roadmaps to navigate challenges and seize opportunities.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-handshake"></i></div><h3>Sales Training</h3><p>Mastering the skill and management of sales to drive revenue growth.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-walking"></i></div><h3>Body Language</h3><p>Developing professional presence and non-verbal communication skills.</p></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Ready to Elevate Your Business Expertise?</h2>
        <p class="section-subtitle">Join hundreds of businesses who've transformed their results through our Business Induction program.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Enroll Now <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
