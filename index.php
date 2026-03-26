<?php $path_prefix = '';
include 'includes/header.php'; ?>

<style>
/* ── INDEX PAGE ── */
/* ── INDEX PAGE ── */
.hero-section {
    padding-top: 72px; /* Navbar height */
    background: #fff;
    position: relative;
    overflow: hidden;
}
.hero-image-container {
    width: 100%;
    height: auto;
    position: relative;
}
.hero-image-container img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: contain; /* Ensure full visibility */
}

/* ── OUR SERVICES SECTION ── */
.our-services-wrapper {
    background: #fff;
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}
.services-main-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: center;
}

/* Right Content Area */
.services-full-graphic {
    width: 100%;
    height: auto;
    border-radius: 40px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.05);
    display: block;
}
.services-info-content {
    text-align: left;
}
.services-info-content h2 {
    font-size: 3.5rem;
    font-weight: 800;
    color: #333;
    margin-bottom: 1rem;
}
.info-subtitle {
    font-size: 1.3rem;
    font-weight: 700;
    color: #444;
    margin-bottom: 3rem;
}
.service-desc-item {
    margin-bottom: 2.5rem;
}
.service-desc-item h3 {
    font-size: 1.15rem;
    font-weight: 800;
    color: #F97316;
    margin-bottom: 0.5rem;
}
.service-desc-item p {
    font-size: 1rem;
    line-height: 1.7;
    color: #444;
    font-weight: 500;
}

@media(max-width:1100px) {
    .services-main-grid { grid-template-columns: 1fr; gap: 4rem; }
    .services-info-content { text-align: center; }
}

/* Services Section */
.services-section { background: var(--bg-warm); padding: var(--section-pad) 0; overflow: hidden;}
.services-intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center; }
.services-intro-image { position: relative; border-radius: var(--r-xl); overflow: hidden; box-shadow: var(--shadow-xl); }
.services-intro-image img { width: 100%; height: auto; max-height: 520px; object-fit: contain; background: #fff; transition: transform var(--t-slow); display: block; }
.services-intro-image:hover img { transform: scale(1.04); }
.services-intro-image-badge {
    position: absolute; bottom: 1.5rem; left: 1.5rem;
    background: var(--primary-light);
    color: var(--primary); border-radius: var(--r-md); padding: 1rem 1.5rem;
    box-shadow: var(--shadow-sm); font-weight: 700; font-size: 0.85rem;
    display: flex; align-items: center; gap: 0.5rem;
    border: 1px solid rgba(249,115,22,0.2);
}
.services-items-list { display: flex; flex-direction: column; gap: 1.25rem; margin-top: 2rem; }
.service-list-item {
    display: flex; gap: 1rem; align-items: flex-start;
    padding: 1.25rem 1.5rem; background: white; border-radius: var(--r-md);
    border: 1px solid var(--border-color); transition: all var(--t-base);
    cursor: default;
}
.service-list-item:hover { border-color: var(--primary); box-shadow: var(--shadow-orange-sm); transform: translateX(6px); }
.service-list-icon {
    width: 44px; height: 44px; border-radius: var(--r-sm);
    background: var(--primary-light); color: var(--primary);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem; flex-shrink: 0; transition: all var(--t-spring);
}
.service-list-item:hover .service-list-icon { background: var(--primary); color: white; transform: rotate(8deg) scale(1.1); }
.service-list-body h4 { font-size: 0.97rem; font-weight: 700; margin-bottom: 0.25rem; color: var(--text-dark); }
.service-list-body p  { font-size: 0.85rem; color: var(--text-gray); line-height: 1.6; }

/* Founder Section */
.founder-section { padding: var(--section-pad) 0; background: #fff; overflow: hidden; }
.founder-card-inner {
    position: relative; border-radius: var(--r-xl); overflow: hidden;
    box-shadow: var(--shadow-xl); min-height: 420px;
}
.founder-card-inner > img { width: 100%; height: 480px; object-fit: cover; object-position: center top; display: block; }
.founder-card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to right, rgba(255,247,237,0.95) 0%, rgba(255,247,237,0.7) 45%, transparent 100%);
    display: flex; align-items: center;
    padding: 4rem;
}
.founder-card-text { max-width: 500px; color: var(--text-dark); }
.founder-card-text .section-label { background: var(--primary-light); border: 1px solid rgba(249,115,22,0.25); color: var(--primary); }
.founder-card-text h2 { font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 900; color: var(--text-dark); margin-bottom: 0.5rem; }
.founder-card-text .founder-role { color: var(--primary-dark); font-size: 0.9rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 1.5rem; }
.founder-card-divider { width: 50px; height: 4px; background: linear-gradient(90deg, var(--primary), transparent); border-radius: 2px; margin-bottom: 1.5rem; }
.founder-card-text blockquote { font-size: 1.05rem; color: var(--text-medium); line-height: 1.8; font-style: italic; }

/* Who We Are */
.who-section { background: var(--bg-light); padding: var(--section-pad) 0; overflow: hidden; }

/* Clients Section */
.clients-section { padding: var(--section-pad) 0; background: white; overflow: hidden; }
.clients-grid {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-top: 3rem;
}
.client-card {
    display: flex; align-items: center; gap: 1rem;
    padding: 1.25rem 1.5rem; background: white;
    border: 1.5px solid var(--border-color); border-radius: var(--r-lg);
    box-shadow: var(--shadow-xs); transition: all var(--t-base);
}
.client-card:hover { border-color: var(--primary); box-shadow: var(--shadow-orange-sm); transform: translateY(-4px); }
.client-logo {
    width: 52px; height: 52px; border-radius: var(--r-sm);
    object-fit: cover; border: 2px solid var(--bg-light); flex-shrink: 0;
}
.client-info h4 { font-size: 0.92rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.15rem; }
.client-info p { font-size: 0.8rem; color: var(--text-gray); display: flex; align-items: center; gap: 0.3rem; }

/* Contact CTA Section */
.contact-cta-section { padding: var(--section-pad) 0; background: var(--bg-warm); overflow: hidden; }
.contact-cta-grid { display: grid; grid-template-columns: 1fr 1.1fr; gap: 5rem; align-items: start; }
.contact-details { display: flex; flex-direction: column; gap: 1.25rem; margin-top: 2rem; }
.contact-item { display: flex; align-items: center; gap: 1rem; }
.contact-icon-circle {
    width: 50px; height: 50px; border-radius: 50%;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 1rem; flex-shrink: 0;
    box-shadow: var(--shadow-orange-sm);
}
.contact-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-gray); }
.contact-value { font-size: 1rem; font-weight: 600; color: var(--text-dark); margin-top: 0.1rem; }
.contact-form-card {
    background: white; border-radius: var(--r-xl); padding: 2.5rem;
    box-shadow: var(--shadow-lg); border: 1px solid var(--border-color);
    position: relative; overflow: hidden;
}
.contact-form-card::before {
    content: '';
    position: absolute; top: -60px; right: -60px;
    width: 180px; height: 180px;
    border-radius: 50%; background: var(--primary-light); opacity: 0.6;
    pointer-events: none;
}
.contact-form-card h3 { font-size: 1.4rem; font-weight: 800; margin-bottom: 0.5rem; position: relative; z-index: 1; }
.contact-form-card .card-sub { font-size: 0.88rem; color: var(--text-gray); margin-bottom: 1.5rem; position: relative; z-index: 1; }
.contact-form-card form { display: flex; flex-direction: column; gap: 1rem; position: relative; z-index: 1; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.form-group { display: flex; flex-direction: column; }
.phone-input-group { display: flex; align-items: center; gap: 0; }
.phone-input-group .phone-code {
    padding: 0.9rem 1rem; background: var(--bg-light);
    border: 1.5px solid var(--border-color); border-right: none;
    border-radius: var(--r-md) 0 0 var(--r-md);
    font-size: 0.95rem; font-weight: 600; color: var(--text-medium);
}
.phone-input-group input { border-radius: 0 var(--r-md) var(--r-md) 0; }
.btn-submit {
    display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem;
    padding: 1rem 2.5rem;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white; font-weight: 700; font-size: 0.95rem;
    border-radius: 50px; border: none;
    box-shadow: var(--shadow-orange-sm);
    transition: all var(--t-spring);
    letter-spacing: 0.02em;
}
.btn-submit:hover { transform: translateY(-3px); box-shadow: var(--shadow-orange-md); }

/* Responsive */
@media(max-width:1024px) {
    .services-intro-grid, .contact-cta-grid { grid-template-columns: 1fr; gap: 3rem; }
    .clients-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:768px) {
    .clients-grid { grid-template-columns: 1fr; }
    .form-row { grid-template-columns: 1fr; }
    .founder-card-overlay { padding: 2rem; }
}
</style>

<!-- ════════ HERO SECTION ════════ -->
<section class="hero-section">
    <div class="hero-image-container">
        <img src="slide1.png" alt="Mahavir Business Solution - A Journey of Growth">
    </div>
</section>

<!-- ════════ OUR SERVICES SECTION ════════ -->
<section class="our-services-wrapper">
    <div class="container">
        <div class="services-main-grid">
            <!-- Left: Graphic Frame -->
            <div class="services-graphic-area">
                <img src="mahavir.png" alt="Our Services" class="services-full-graphic">
            </div>

            <!-- Right: Content Area -->
            <div class="services-info-content">
                <h2>Our <span class="orange-text">Services</span></h2>
                <p class="info-subtitle">Let Your Jewellery Business Blossom from Seed to Succeed:</p>

                <div class="service-desc-item">
                    <h3>Start-up:</h3>
                    <p>We provide comprehensive guidance and counselling to new entrants of the lucrative jewellery business. From crafting a winning business plan to navigate through the complexities of daily administrations & operations. We shall provide solutions to all your issues & concerns in accordance with your business activities.</p>
                </div>

                <div class="service-desc-item">
                    <h3>Growth of Established Businesses:</h3>
                    <p>We partner with veteran established jewellers to identify their strengths and explore the opportunities for ideal expansion, refine marketing strategies, and optimize operational efficiency, propelling their businesses to accomplish remarkable success.</p>
                </div>

                <div class="service-desc-item">
                    <h3>Jewellery Vidhyapith:</h3>
                    <p>While we recognise the importance of constant learning, we propose specialised training programs under the "Jewellery Vidhyapith" banner. These preparations equip individuals with the necessary skills and knowledge to excel in various aspects of the jewellery business.</p>
                </div>

                <div class="service-desc-item">
                    <h3>Intelligent IT:</h3>
                    <p>Mahavir Business Solution specializes in offering a complete suite of IT services customised for jewellers, including web development, data analytics, and social media expertise. Our dedicated team ensures that your jewellery business flourishes in the digital landscape through cutting-edge technological solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════ STATS ════════ -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item reveal delay-1">
                <div class="stat-icon-circle"><i class="fas fa-users"></i></div>
                <div class="stat-number">500+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item reveal delay-2">
                <div class="stat-icon-circle"><i class="fas fa-calendar-check"></i></div>
                <div class="stat-number">27+</div>
                <div class="stat-label">Years of Experience</div>
            </div>
            <div class="stat-item reveal delay-3">
                <div class="stat-icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                <div class="stat-number">20+</div>
                <div class="stat-label">Cities Served</div>
            </div>
            <div class="stat-item reveal delay-4">
                <div class="stat-icon-circle"><i class="fas fa-trophy"></i></div>
                <div class="stat-number">50+</div>
                <div class="stat-label">Industry Awards</div>
            </div>
        </div>
    </div>
</section>

<!-- ════════ SERVICES ════════ -->
<section class="services-section">
    <div class="container">
        <div class="services-intro-grid">
            <div class="services-intro-image reveal-left">
                <img src="Jewellery_img.png" alt="Mahavir consulting services">
                <div class="services-intro-image-badge">
                    <i class="fas fa-gem"></i> Business Development Experts
                </div>
            </div>
            <div class="reveal-right">
                <span class="section-label">What We Offer</span>
                <h2 class="section-title">Complete <span class="orange">Business Development</span> Training</h2>
                <p class="section-subtitle">Empowering businesses through structured training and strategic consultancy to reach new heights of success.</p>
                <div class="services-items-list">
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <div class="service-list-body">
                            <h4>Business Induction</h4>
                            <p>Foundations of business growth, vision, mission, and organization structure for total clarity.</p>
                        </div>
                    </div>
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-user-tie"></i></div>
                        <div class="service-list-body">
                            <h4>Individual Development</h4>
                            <p>Personalized training programs including IDP, HRM, and Sales training for professional excellence.</p>
                        </div>
                    </div>
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-bullhorn"></i></div>
                        <div class="service-list-body">
                            <h4>Branding & Marketing</h4>
                            <p>Strategic branding, digital marketing, and customer relationship management to build trust.</p>
                        </div>
                    </div>
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-chart-pie"></i></div>
                        <div class="service-list-body">
                            <h4>Finance & Strategy</h4>
                            <p>Comprehensive finance management and strategy development to ensure sustainable growth.</p>
                        </div>
                    </div>
                </div>
                <a href="services/about.php" class="btn btn-primary" style="margin-top:2rem;">View All Services <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ════════ FOUNDER ════════ -->
<section class="founder-section">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Leadership</span>
            <h2 class="section-title">Founder &amp; CMD of <span class="orange">Mahavir Business Solution</span></h2>
        </div>
        <div class="founder-card-inner reveal">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1400" alt="Mr. Tushar Shah – Founder & CMD">
            <div class="founder-card-overlay">
                <div class="founder-card-text">
                    <span class="section-label">Business Coach and Consultant</span>
                    <h2>Tushar Shah</h2>
                    <p class="founder-role"><i class="fas fa-map-marker-alt"></i>&nbsp; Ahmedabad, Gujarat, India</p>
                    <div class="founder-card-divider"></div>
                    <blockquote>
                        "We are committed to achieving new standards of excellence by providing superior services and maximizing the potential of all clients, candidates, and employees – through the delivery of the most reliable and responsive solutions."
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════ WHO WE ARE ════════ -->
<section class="who-section">
    <div class="container">
        <div class="split-row">
            <div class="split-image reveal-left">
                <img src="Jewellery_img1.png" alt="Mahavir team working together" style="object-fit: contain; background: #fff;">
                <div class="split-image-accent"><i class="fas fa-gem"></i></div>
            </div>
            <div class="split-content reveal-right">
                <span class="section-label">Who We Are</span>
                <h2 class="section-title">Your Trusted Partner in<br><span class="orange">Jewellery Business Growth</span></h2>
                <p style="color:var(--text-medium);line-height:1.85;margin-bottom:1rem;">
                    <strong>Mahavir Business Solution</strong>, with its motto <strong>A Journey of Growth</strong>, goes beyond mere coaching and training. We take great pride in creating a system that not only showcases our services but also leverages over 27 years of experience in the industry to take your business to new heights.
                </p>
                <p style="color:var(--text-medium);line-height:1.85;">
                    Our company is registered by the Government in PMYK and has vast experience working in senior positions in branded corporate companies. We are dedicated to conducting business with equity and openness, ensuring that our customers can have complete trust in our operations.
                </p>
                <div style="display:flex;gap:2rem;margin-top:2rem;flex-wrap:wrap;">
                    <div>
                        <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">500+</div>
                        <div style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-gray);">Clients Served</div>
                    </div>
                    <div>
                        <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">27+</div>
                        <div style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-gray);">Years of Expertise</div>
                    </div>
                    <div>
                        <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">Growth</div>
                        <div style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-gray);">Oriented Approach</div>
                    </div>
                </div>
                <a href="Our Company/team.php" class="btn btn-primary" style="margin-top:2rem;">Meet Our Team <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ════════ CLIENTS ════════ -->
<section class="clients-section">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Our Clientele</span>
            <h2 class="section-title">Trusted by <span class="orange">Leading Jewellers</span> Across India</h2>
            <p class="section-subtitle">Proud to partner with some of the most respected jewellery brands in the country.</p>
        </div>
        <div class="clients-grid">
            <div class="client-card reveal delay-1">
                <img src="https://picsum.photos/seed/client1/92/92" alt="K. Virchand Jewellers" class="client-logo">
                <div class="client-info">
                    <h4>K. Virchand Jewellers</h4>
                    <p><i class="fas fa-map-marker-alt orange"></i> Patan, Gujarat</p>
                </div>
            </div>
            <div class="client-card reveal delay-2">
                <img src="https://picsum.photos/seed/client2/92/92" alt="CMS Jewellers" class="client-logo">
                <div class="client-info">
                    <h4>CMS Jewellers</h4>
                    <p><i class="fas fa-map-marker-alt orange"></i> Deesa, Gujarat</p>
                </div>
            </div>
            <div class="client-card reveal delay-3">
                <img src="https://picsum.photos/seed/client3/92/92" alt="Shriji Jewellers" class="client-logo">
                <div class="client-info">
                    <h4>Shriji Jewellers</h4>
                    <p><i class="fas fa-map-marker-alt orange"></i> Rajkot, Gujarat</p>
                </div>
            </div>
            <div class="client-card reveal delay-4">
                <img src="https://picsum.photos/seed/client4/92/92" alt="Mahaveer Jewellers" class="client-logo">
                <div class="client-info">
                    <h4>Mahaveer Jewellers</h4>
                    <p><i class="fas fa-map-marker-alt orange"></i> Ahmedabad, Gujarat</p>
                </div>
            </div>
            <div class="client-card reveal delay-5">
                <img src="https://picsum.photos/seed/client5/92/92" alt="N K Jewellers" class="client-logo">
                <div class="client-info">
                    <h4>N K Jewellers</h4>
                    <p><i class="fas fa-map-marker-alt orange"></i> Vadodara, Gujarat</p>
                </div>
            </div>
            <div class="client-card reveal delay-6">
                <img src="https://picsum.photos/seed/client6/92/92" alt="Subhlaxmi Jewellers" class="client-logo">
                <div class="client-info">
                    <h4>Subhlaxmi Jewellers</h4>
                    <p><i class="fas fa-map-marker-alt orange"></i> Ahmedabad, Gujarat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════ GET IN TOUCH ════════ -->
<section class="contact-cta-section">
    <div class="container">
        <div class="contact-cta-grid">
            <!-- Left info -->
            <div>
                <span class="section-label reveal">Contact Us</span>
                <h2 class="section-title reveal">Ready to <span class="orange">Unlock Your</span> Business Potential?</h2>
                <p class="section-subtitle reveal">Get in touch today. Our experts are on standby to provide the 100% solution your jewellery business deserves.</p>
                <div class="contact-details">
                    <div class="contact-item reveal delay-1">
                        <div class="contact-icon-circle"><i class="fas fa-phone"></i></div>
                        <div>
                            <p class="contact-label">Call Us</p>
                            <p class="contact-value">+91 98988 92497</p>
                        </div>
                    </div>
                    <div class="contact-item reveal delay-2">
                        <div class="contact-icon-circle"><i class="fas fa-envelope"></i></div>
                        <div>
                            <p class="contact-label">Email Us</p>
                            <p class="contact-value">info@mahavirbusiness.com</p>
                        </div>
                    </div>
                    <div class="contact-item reveal delay-3">
                        <div class="contact-icon-circle"><i class="fas fa-globe"></i></div>
                        <div>
                            <p class="contact-label">Website</p>
                            <p class="contact-value"><a href="https://mahavirbusiness.com" target="_blank" style="color:var(--primary);">mahavirbusiness.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-card reveal-right" style="overflow: hidden;">
                <h3>Your Inquiry, <span class="orange">Our Expertise</span></h3>
                <p class="card-sub">Your Questions, Our Solutions: Crafting Success Together</p>
                <form>
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" placeholder="Enter your email">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-input-group">
                                <span class="phone-code">+91</span>
                                <input type="number" placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input type="text" placeholder="Your city">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea rows="4" placeholder="Tell us about your business and how we can help..."></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit Inquiry <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>