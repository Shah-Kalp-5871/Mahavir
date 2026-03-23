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
            <h1 class="page-title">Jewellery <span style="color:var(--primary)">Vidhyapith</span></h1>
            <p class="page-hero-sub">Specialised training programs that equip individuals with skills to excel in every aspect of the jewellery business.</p>
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
                <span class="section-label">About Vidhyapith</span>
                <h2 class="section-title">Knowledge is the Most <span class="orange">Precious Jewel</span></h2>
                <p>Jewellery Vidhyapith is Headway's dedicated training wing, born from the recognition that continuous learning is the cornerstone of any thriving jewellery business. Our programs are meticulously designed to bridge the gap between industry knowledge and practical application.</p>
                <p style="margin-top:1rem;">From sales techniques to product knowledge, from customer management to digital marketing — our curriculum covers every dimension that a modern jeweller needs to master.</p>
                <a href="../contact.php" class="btn btn-primary" style="margin-top:2rem;">Enroll Today <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Training Programs</span>
            <h2 class="section-title">What You'll <span class="orange">Learn</span></h2>
        </div>
        <div class="service-feature-grid">
            <div class="sf-card reveal delay-1"><div class="sf-icon"><i class="fas fa-gem"></i></div><h3>Product Knowledge</h3><p>Deep understanding of jewellery types, metals, gemstones, hallmarking, and quality assessment.</p></div>
            <div class="sf-card reveal delay-2"><div class="sf-icon"><i class="fas fa-handshake"></i></div><h3>Sales Mastery</h3><p>Proven sales techniques, customer psychology, and relationship-building strategies for jewellery retail.</p></div>
            <div class="sf-card reveal delay-3"><div class="sf-icon"><i class="fas fa-mobile-alt"></i></div><h3>Digital Marketing</h3><p>Social media, online presence, e-commerce, and digital advertising tailored for jewellery brands.</p></div>
            <div class="sf-card reveal delay-4"><div class="sf-icon"><i class="fas fa-users"></i></div><h3>Team Management</h3><p>Build, train, and motivate a high-performing jewellery retail team that delivers exceptional experiences.</p></div>
            <div class="sf-card reveal delay-5"><div class="sf-icon"><i class="fas fa-chart-pie"></i></div><h3>Business Operations</h3><p>Inventory control, cash flow management, and daily operations excellence for jewellery businesses.</p></div>
            <div class="sf-card reveal delay-6"><div class="sf-icon"><i class="fas fa-paint-brush"></i></div><h3>Visual Merchandising</h3><p>Store layout, display design, and branding principles that attract customers and drive conversions.</p></div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Training Formats</span>
            <h2 class="section-title">Programs Designed for <span class="orange">Every Stage</span></h2>
        </div>
        <div class="courses-grid">
            <div class="course-card reveal delay-1">
                <div class="course-card-img"><img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&q=80&w=800" alt="Workshop Training"></div>
                <div class="course-card-body"><span class="course-tag">In-Person</span><h3>Intensive Workshop Programs</h3><p>Hands-on, immersive 1-3 day workshops conducted by industry veterans at premium venues across Gujarat.</p></div>
            </div>
            <div class="course-card reveal delay-2">
                <div class="course-card-img"><img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=800" alt="Online Training"></div>
                <div class="course-card-body"><span class="course-tag">Online</span><h3>Digital Learning Modules</h3><p>Flexible, self-paced online courses accessible from anywhere — perfect for busy jewellery professionals.</p></div>
            </div>
            <div class="course-card reveal delay-3">
                <div class="course-card-img"><img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=800" alt="Corporate Training"></div>
                <div class="course-card-body"><span class="course-tag">Corporate</span><h3>In-Store Team Training</h3><p>Customised training delivered at your jewellery store, addressing your team's unique performance gaps.</p></div>
            </div>
            <div class="course-card reveal delay-4">
                <div class="course-card-img"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=800" alt="One on One Mentoring"></div>
                <div class="course-card-body"><span class="course-tag">1:1 Mentoring</span><h3>Executive Coaching Sessions</h3><p>Personalised one-on-one mentoring with senior consultants for jewellery business owners and leaders.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Ready to Elevate Your Jewellery Expertise?</h2>
        <p class="section-subtitle">Join hundreds of jewellers who've transformed their skills and business outcomes through Jewellery Vidhyapith.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Enroll Now <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
