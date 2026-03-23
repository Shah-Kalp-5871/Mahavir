<?php $path_prefix = '../'; $page_title = 'Our Initiatives'; include '../includes/header.php'; ?>
<style>
.initiatives-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:3.5rem;}
.initiative-card{background:white;border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-md);border:1px solid var(--border-color);transition:all var(--t-base);}
.initiative-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-xl);}
.initiative-card-img{height:200px;overflow:hidden;}
.initiative-card-img img{width:100%;height:100%;object-fit:cover;transition:transform var(--t-slow);}
.initiative-card:hover .initiative-card-img img{transform:scale(1.08);}
.initiative-card-body{padding:1.75rem;}
.initiative-tag{display:inline-block;font-size:.7rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:var(--primary);background:var(--primary-light);padding:.25rem .75rem;border-radius:50px;margin-bottom:.75rem;}
.initiative-card-body h3{font-size:1.05rem;font-weight:800;margin-bottom:.5rem;}
.initiative-card-body p{font-size:.875rem;color:var(--text-gray);line-height:1.7;}
.impact-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;}
.impact-item{text-align:center;padding:2rem 1rem;background:white;border-radius:var(--r-lg);box-shadow:var(--shadow-sm);}
.impact-num{font-size:2.4rem;font-weight:900;color:var(--primary);line-height:1;}
.impact-label{font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:var(--text-gray);margin-top:.4rem;}
@media(max-width:1024px){.initiatives-grid{grid-template-columns:1fr 1fr;}.impact-grid{grid-template-columns:1fr 1fr;}}
@media(max-width:640px){.initiatives-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&q=80&w=1920" alt="Our Initiatives">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Our <span style="color:var(--primary)">Initiatives</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">Community programs, industry advocacy, and knowledge-sharing efforts that go beyond business consulting.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Initiatives</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Going Beyond Business</span>
            <h2 class="section-title">Initiatives That Make a <span class="orange">Difference</span></h2>
            <p class="section-subtitle">At Headway, we believe in giving back to the industry that has given us so much. Explore our flagship programs below.</p>
        </div>
        <div class="initiatives-grid">
            <div class="initiative-card reveal delay-1">
                <div class="initiative-card-img"><img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=800" alt="Jewellery Knowledge Summit"></div>
                <div class="initiative-card-body"><span class="initiative-tag">Annual Event</span><h3>Jewellery Knowledge Summit</h3><p>India's premier annual gathering of jewellery business owners, thought leaders, and industry experts for 2 days of learning and networking.</p></div>
            </div>
            <div class="initiative-card reveal delay-2">
                <div class="initiative-card-img"><img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&q=80&w=800" alt="Young Jewellers Program"></div>
                <div class="initiative-card-body"><span class="initiative-tag">Youth Development</span><h3>Young Jewellers Program</h3><p>A structured 6-month incubator for next-generation jewellers from family businesses, equipping them with modern business skills.</p></div>
            </div>
            <div class="initiative-card reveal delay-3">
                <div class="initiative-card-img"><img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&q=80&w=800" alt="Women in Jewellery"></div>
                <div class="initiative-card-body"><span class="initiative-tag">Empowerment</span><h3>Women in Jewellery</h3><p>Dedicated mentoring and funding guidance for women entrepreneurs looking to build or expand their jewellery ventures.</p></div>
            </div>
            <div class="initiative-card reveal delay-4">
                <div class="initiative-card-img"><img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Artisan Support Network"></div>
                <div class="initiative-card-body"><span class="initiative-tag">Grassroots</span><h3>Artisan Support Network</h3><p>Connecting skilled jewellery artisans with retailers and designers — ensuring traditional craftsmanship finds its market.</p></div>
            </div>
            <div class="initiative-card reveal delay-5">
                <div class="initiative-card-img"><img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=800" alt="Headway Scholarship"></div>
                <div class="initiative-card-body"><span class="initiative-tag">Scholarship</span><h3>Headway Merit Scholarship</h3><p>Annual scholarships for deserving students pursuing gemology, jewellery design, and related fields at accredited institutions.</p></div>
            </div>
            <div class="initiative-card reveal delay-6">
                <div class="initiative-card-img"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=800" alt="Jewellers Roundtable"></div>
                <div class="initiative-card-body"><span class="initiative-tag">Community</span><h3>Jewellers Roundtable</h3><p>Monthly peer-to-peer discussion forums where jewellers share challenges, best practices, and regional market intelligence.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Impact</span>
            <h2 class="section-title">Making a Measurable <span class="orange">Difference</span></h2>
        </div>
        <div class="impact-grid">
            <div class="impact-item reveal delay-1"><div class="impact-num">10,000+</div><div class="impact-label">Professionals Impacted</div></div>
            <div class="impact-item reveal delay-2"><div class="impact-num">50+</div><div class="impact-label">Cities Reached</div></div>
            <div class="impact-item reveal delay-3"><div class="impact-num">25+</div><div class="impact-label">Annual Programs</div></div>
            <div class="impact-item reveal delay-4"><div class="impact-num">100+</div><div class="impact-label">Scholarships Awarded</div></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Want to Collaborate or Participate?</h2>
        <p class="section-subtitle">Whether you're looking to attend, sponsor, or partner on one of our initiatives, we'd love to hear from you.</p>
        <div class="btn-group"><a href="../contact.php" class="btn btn-white">Get Involved <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
