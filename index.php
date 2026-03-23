<?php $path_prefix = ''; include 'includes/header.php'; ?>

<style>
/* ── INDEX PAGE ── */
/* Services Section */
.services-section { background: var(--bg-warm); padding: var(--section-pad) 0; }
.services-intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center; }
.services-intro-image { position: relative; border-radius: var(--r-xl); overflow: hidden; box-shadow: var(--shadow-xl); }
.services-intro-image img { width: 100%; height: 480px; object-fit: cover; transition: transform var(--t-slow); display: block; }
.services-intro-image:hover img { transform: scale(1.04); }
.services-intro-image-badge {
    position: absolute; bottom: 1.5rem; left: 1.5rem;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white; border-radius: var(--r-md); padding: 1rem 1.5rem;
    box-shadow: var(--shadow-orange-md); font-weight: 700; font-size: 0.85rem;
    display: flex; align-items: center; gap: 0.5rem;
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
.founder-section { padding: var(--section-pad) 0; background: #fff; }
.founder-card-inner {
    position: relative; border-radius: var(--r-xl); overflow: hidden;
    box-shadow: var(--shadow-xl); min-height: 420px;
}
.founder-card-inner > img { width: 100%; height: 480px; object-fit: cover; object-position: center top; display: block; }
.founder-card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to right, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0.6) 55%, transparent 100%);
    display: flex; align-items: center;
    padding: 4rem;
}
.founder-card-text { max-width: 500px; color: white; }
.founder-card-text .section-label { background: rgba(249,115,22,0.2); border: 1px solid rgba(249,115,22,0.35); color: var(--primary); }
.founder-card-text h2 { font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 900; color: white; margin-bottom: 0.5rem; }
.founder-card-text .founder-role { color: var(--primary); font-size: 0.9rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 1.5rem; }
.founder-card-divider { width: 50px; height: 4px; background: linear-gradient(90deg, var(--primary), transparent); border-radius: 2px; margin-bottom: 1.5rem; }
.founder-card-text blockquote { font-size: 1.05rem; color: rgba(255,255,255,0.82); line-height: 1.8; font-style: italic; }

/* Who We Are */
.who-section { background: var(--bg-light); padding: var(--section-pad) 0; }

/* Clients Section */
.clients-section { padding: var(--section-pad) 0; background: white; }
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
.contact-cta-section { padding: var(--section-pad) 0; background: var(--bg-warm); }
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

<!-- ════════ HERO SLIDER ════════ -->
<section class="hero-section">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=1920');"></div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=1920');"></div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="slide-bg" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1920');"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!-- Scroll indicator -->
    <!-- <div class="hero-scroll-indicator" onclick="window.scrollBy({top:window.innerHeight,behavior:'smooth'})">
        <div class="scroll-wheel"></div>
        <span>Scroll</span>
    </div> -->
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
                <div class="stat-number">15+</div>
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
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Headway consulting services">
                <div class="services-intro-image-badge">
                    <i class="fas fa-gem"></i> Jewellery Business Experts
                </div>
            </div>
            <div class="reveal-right">
                <span class="section-label">What We Offer</span>
                <h2 class="section-title">Helping Jewellers <span class="orange">Seed to Succeed</span></h2>
                <p class="section-subtitle">From launching your first store to scaling an established brand, we provide tailored coaching and consulting across every stage of growth.</p>
                <div class="services-items-list">
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-rocket"></i></div>
                        <div class="service-list-body">
                            <h4>Startup Consultancy</h4>
                            <p>Comprehensive guidance for new entrants — business planning, operations, and strategic launch.</p>
                        </div>
                    </div>
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-chart-bar"></i></div>
                        <div class="service-list-body">
                            <h4>Growth for Established Businesses</h4>
                            <p>Identify strengths, explore expansion opportunities, and optimize operational efficiency.</p>
                        </div>
                    </div>
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="service-list-body">
                            <h4>Jewellery Vidhyapith</h4>
                            <p>Specialised training programs equipping individuals with essential jewellery business skills.</p>
                        </div>
                    </div>
                    <div class="service-list-item">
                        <div class="service-list-icon"><i class="fas fa-laptop-code"></i></div>
                        <div class="service-list-body">
                            <h4>Intelligent IT Solutions</h4>
                            <p>Complete IT services — web development, analytics, social media — tailored for jewellers.</p>
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
            <h2 class="section-title">Founder &amp; CMD of <span class="orange">Headway Business Solutions LLP</span></h2>
        </div>
        <div class="founder-card-inner reveal">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=1400" alt="Mr. Paresh Rajpara – Founder & CMD">
            <div class="founder-card-overlay">
                <div class="founder-card-text">
                    <span class="section-label">Founder & CMD</span>
                    <h2>Mr. Paresh Rajpara</h2>
                    <p class="founder-role"><i class="fas fa-map-marker-alt"></i>&nbsp; Ahmedabad, Gujarat, India</p>
                    <div class="founder-card-divider"></div>
                    <blockquote>
                        "Our focus is not just business growth, but the sustainable evolution of the jewellery sector. 
                        We believe every jeweller deserves a 100% solution — a partner who walks alongside them at every step."
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
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Headway team working together">
                <div class="split-image-accent"><i class="fas fa-gem"></i></div>
            </div>
            <div class="split-content reveal-right">
                <span class="section-label">Who We Are</span>
                <h2 class="section-title">Your Trusted Partner in<br><span class="orange">Jewellery Business Growth</span></h2>
                <p style="color:var(--text-medium);line-height:1.85;margin-bottom:1rem;">
                    Headway Business Solutions LLP with its motto <strong>Solution@100%</strong> goes beyond mere coaching and consulting. We foster long-term relationships with our clients, acting as trusted advisors who sail alongside them in their journey toward remarkable jewellery business success.
                </p>
                <p style="color:var(--text-medium);line-height:1.85;">
                    Our seasoned experts bring vast experience, offering tailor-made strategies informed by deep industry knowledge — so you get solutions that are ahead of the curve, not just adequate.
                </p>
                <div style="display:flex;gap:2rem;margin-top:2rem;flex-wrap:wrap;">
                    <div>
                        <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">500+</div>
                        <div style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-gray);">Clients Served</div>
                    </div>
                    <div>
                        <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">15+</div>
                        <div style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-gray);">Years of Expertise</div>
                    </div>
                    <div>
                        <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">100%</div>
                        <div style="font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--text-gray);">Solution Guarantee</div>
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
                            <p class="contact-value">+91 70469 00096</p>
                        </div>
                    </div>
                    <div class="contact-item reveal delay-2">
                        <div class="contact-icon-circle"><i class="fas fa-envelope"></i></div>
                        <div>
                            <p class="contact-label">Email Us</p>
                            <p class="contact-value">info@headway.org.in</p>
                        </div>
                    </div>
                    <div class="contact-item reveal delay-3">
                        <div class="contact-icon-circle"><i class="fas fa-globe"></i></div>
                        <div>
                            <p class="contact-label">Website</p>
                            <p class="contact-value"><a href="https://headway.org.in" target="_blank" style="color:var(--primary);">headway.org.in</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-card reveal-right">
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