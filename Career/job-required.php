<?php $path_prefix = '../'; $page_title = 'Job Required'; include '../includes/header.php'; ?>
<style>
.jobs-filter{display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:2.5rem;}
.job-tag{padding:.4rem 1.1rem;border-radius:50px;font-size:.8rem;font-weight:700;border:1.5px solid var(--border-color);color:var(--text-medium);cursor:pointer;transition:all var(--t-fast);}
.job-tag.active,.job-tag:hover{background:var(--primary);color:white;border-color:var(--primary);}
.job-card{background:white;border-radius:var(--r-xl);padding:2rem;box-shadow:var(--shadow-sm);border:1px solid var(--border-color);transition:all var(--t-base);display:flex;justify-content:space-between;align-items:flex-start;gap:1.5rem;margin-bottom:1.25rem;}
.job-card:hover{border-color:var(--primary);box-shadow:var(--shadow-orange-sm);transform:translateX(6px);}
.job-card-left{flex:1;}
.job-dept{display:inline-block;font-size:.7rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:var(--primary);background:var(--primary-light);padding:.25rem .75rem;border-radius:50px;margin-bottom:.75rem;}
.job-card-left h3{font-size:1.1rem;font-weight:800;margin-bottom:.5rem;}
.job-meta{display:flex;gap:1.5rem;flex-wrap:wrap;margin-top:.75rem;}
.job-meta-item{display:flex;align-items:center;gap:.4rem;font-size:.82rem;color:var(--text-gray);}
.job-meta-item i{color:var(--primary);font-size:.8rem;}
.apply-btn{padding:.65rem 1.5rem;background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:white;border-radius:50px;font-weight:700;font-size:.85rem;white-space:nowrap;transition:all var(--t-spring);display:flex;align-items:center;gap:.4rem;flex-shrink:0;}
.apply-btn:hover{transform:translateY(-3px);box-shadow:var(--shadow-orange-sm);}
.no-jobs-state{text-align:center;padding:4rem 2rem;}
.no-jobs-state i{font-size:3rem;color:var(--border-color);margin-bottom:1rem;}
.apply-form-card{background:white;border-radius:var(--r-xl);padding:2.5rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);}
.apply-form-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;}
@media(max-width:768px){.job-card{flex-direction:column;}.apply-form-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&q=80&w=1920" alt="Careers at Headway">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Careers at <span style="color:var(--primary)">Headway</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">Join a team that's shaping the future of India's jewellery industry — one business at a time.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Career</span><i class="fas fa-chevron-right"></i><span>Open Positions</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Open Positions</span>
            <h2 class="section-title">We're <span class="orange">Hiring!</span></h2>
            <p class="section-subtitle">Explore current openings across departments and find your perfect role at Headway.</p>
        </div>
        <div class="jobs-filter reveal">
            <span class="job-tag active">All Departments</span>
            <span class="job-tag">Consulting</span>
            <span class="job-tag">Sales</span>
            <span class="job-tag">Training</span>
            <span class="job-tag">IT</span>
            <span class="job-tag">Operations</span>
        </div>

        <div class="job-card reveal delay-1">
            <div class="job-card-left">
                <span class="job-dept">Consulting</span>
                <h3>Senior Jewellery Business Consultant</h3>
                <p style="font-size:.9rem;color:var(--text-medium);">A senior role managing client portfolios, delivering strategic consulting, and mentoring junior consultants across Gujarat.</p>
                <div class="job-meta">
                    <span class="job-meta-item"><i class="fas fa-map-marker-alt"></i> Ahmedabad, Gujarat</span>
                    <span class="job-meta-item"><i class="fas fa-clock"></i> Full-Time</span>
                    <span class="job-meta-item"><i class="fas fa-briefcase"></i> 5+ Years Experience</span>
                </div>
            </div>
            <a href="#apply" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="job-card reveal delay-2">
            <div class="job-card-left">
                <span class="job-dept">Sales</span>
                <h3>Business Development Manager</h3>
                <p style="font-size:.9rem;color:var(--text-medium);">Identify, engage, and onboard new jewellery business clients across Tier 2 and Tier 3 cities in Gujarat and Rajasthan.</p>
                <div class="job-meta">
                    <span class="job-meta-item"><i class="fas fa-map-marker-alt"></i> Multiple Locations</span>
                    <span class="job-meta-item"><i class="fas fa-clock"></i> Full-Time</span>
                    <span class="job-meta-item"><i class="fas fa-briefcase"></i> 3+ Years Experience</span>
                </div>
            </div>
            <a href="#apply" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="job-card reveal delay-3">
            <div class="job-card-left">
                <span class="job-dept">Training</span>
                <h3>Jewellery Vidhyapith Trainer</h3>
                <p style="font-size:.9rem;color:var(--text-medium);">Facilitate training workshops and one-on-one coaching sessions for jewellery business owners and their staff teams.</p>
                <div class="job-meta">
                    <span class="job-meta-item"><i class="fas fa-map-marker-alt"></i> Ahmedabad (Travel Required)</span>
                    <span class="job-meta-item"><i class="fas fa-clock"></i> Full-Time</span>
                    <span class="job-meta-item"><i class="fas fa-briefcase"></i> 2+ Years Experience</span>
                </div>
            </div>
            <a href="#apply" class="apply-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="section-padding bg-warm" id="apply">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Apply Now</span>
            <h2 class="section-title">Submit Your <span class="orange">Application</span></h2>
            <p class="section-subtitle">Don't see your role listed? We're always open to exceptional talent. Send us your application!</p>
        </div>
        <div style="max-width:700px;margin:0 auto;" class="reveal">
            <div class="apply-form-card">
                <form style="display:flex;flex-direction:column;gap:1.1rem;">
                    <div class="apply-form-grid">
                        <div><label class="form-label">Full Name *</label><input type="text" placeholder="Your full name"></div>
                        <div><label class="form-label">Email Address *</label><input type="email" placeholder="Your email"></div>
                    </div>
                    <div class="apply-form-grid">
                        <div><label class="form-label">Phone Number</label><input type="tel" placeholder="Your phone number"></div>
                        <div><label class="form-label">Position Applied For</label><input type="text" placeholder="e.g. Senior Consultant"></div>
                    </div>
                    <div><label class="form-label">Years of Experience</label><input type="text" placeholder="e.g. 5 years in jewellery consulting"></div>
                    <div><label class="form-label">Cover Message *</label><textarea rows="4" placeholder="Tell us why you'd be a great fit at Headway..."></textarea></div>
                    <button type="submit" style="padding:1rem 2rem;background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:white;font-weight:700;border-radius:50px;border:none;cursor:pointer;transition:all var(--t-spring);font-size:.95rem;display:flex;align-items:center;justify-content:center;gap:.5rem;">
                        Submit Application <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
