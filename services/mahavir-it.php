<?php $path_prefix = '../'; $page_title = 'Mahavir IT Solutions'; include '../includes/header.php'; ?>
<style>
.sf-card{background:white;border-radius:var(--r-lg);padding:2rem;border:1px solid var(--border-color);box-shadow:var(--shadow-xs);transition:all var(--t-base);}
.sf-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-orange-md);border-color:var(--primary);}
.sf-icon{width:60px;height:60px;border-radius:var(--r-md);background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin-bottom:1.25rem;transition:all var(--t-spring);}
.sf-card:hover .sf-icon{background:var(--primary);color:white;transform:rotate(8deg) scale(1.1);}
.sf-card h3{font-size:1rem;font-weight:800;margin-bottom:.6rem;}
.sf-card p{font-size:.875rem;color:var(--text-gray);line-height:1.75;}
.it-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3.5rem;}
.tech-stack{display:flex;flex-wrap:wrap;gap:.75rem;margin-top:1.5rem;}
.tech-badge{padding:.4rem 1rem;background:var(--primary-light);color:var(--primary);border-radius:50px;font-size:.82rem;font-weight:700;border:1px solid rgba(249,115,22,.2);}
@media(max-width:768px){.it-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=1920" alt="Mahavir IT Solutions">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content">
            <span class="section-label" style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.35);color:var(--primary);margin-bottom:1rem;display:inline-block;"><i class="fas fa-laptop-code"></i>&nbsp;Mahavir IT</span>
            <h1 class="page-title">Digital Solutions Built<br>for <span style="color:var(--primary)">Jewellers</span></h1>
            <p class="page-hero-sub">End-to-end IT services — web, analytics, social media — designed to help your jewellery business thrive in the digital age.</p>
            <nav class="breadcrumb-light" style="margin-top:1.25rem;">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Services</span><i class="fas fa-chevron-right"></i><span>Mahavir IT</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="split-row reverse">
            <div class="split-content reveal-left">
                <span class="section-label">About Mahavir IT</span>
                <h2 class="section-title">Your Jewellery Business,<br><span class="orange">Digitally Empowered</span></h2>
                <p>Mahavir IT is Headway's dedicated technology division. We combine deep jewellery business expertise with cutting-edge digital solutions to create technology that doesn't just work — it drives measurable growth.</p>
                <p style="margin-top:1rem;">From custom websites and e-commerce platforms to comprehensive data analytics and social media management, we deliver end-to-end digital solutions tailored specifically for the jewellery industry.</p>
                <div class="tech-stack">
                    <span class="tech-badge">Web Development</span>
                    <span class="tech-badge">E-Commerce</span>
                    <span class="tech-badge">Data Analytics</span>
                    <span class="tech-badge">Social Media</span>
                    <span class="tech-badge">CRM Systems</span>
                    <span class="tech-badge">Digital Marketing</span>
                </div>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:2rem;">Get a Digital Audit <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="split-image reveal-right">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=800" alt="IT Solutions for Jewellers">
                <div class="split-image-accent"><i class="fas fa-laptop-code"></i></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our IT Services</span>
            <h2 class="section-title">Complete <span class="orange">Digital Solutions</span></h2>
        </div>
        <div class="it-grid">
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-globe"></i></div><h3>Jewellery Website Design</h3><p>Premium, high-converting websites that showcase your jewellery collection beautifully and drive customer enquiries.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-shopping-cart"></i></div><h3>E-Commerce Platforms</h3><p>Fully functional online jewellery stores with secure payment, inventory sync, and a seamless customer experience.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-chart-bar"></i></div><h3>Data Analytics</h3><p>Transform your sales data into actionable intelligence — understand customers, stock performance, and growth opportunities.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fab fa-instagram"></i></div><h3>Social Media Management</h3><p>Strategic, consistent presence on Instagram, Facebook, and YouTube that builds your jewellery brand and drives footfall.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-ad"></i></div><h3>Digital Advertising</h3><p>Targeted Google and Meta ad campaigns that bring the right customers to your jewellery store — online and offline.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-headset"></i></div><h3>Technical Support</h3><p>Responsive IT support and system maintenance to ensure your digital infrastructure is always performing at its best.</p></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Ready to Go Digital?</h2>
        <p class="section-subtitle">Let Mahavir IT build the digital foundation that takes your jewellery business to the next level.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Start Your Digital Journey <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
