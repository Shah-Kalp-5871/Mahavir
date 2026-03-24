<?php $path_prefix = '../'; $page_title = 'Event Registration'; include '../includes/header.php'; ?>
<style>
.register-layout{display:grid;grid-template-columns:1.2fr 1fr;gap:4rem;align-items:start;}
.register-form-card{background:white;border-radius:var(--r-xl);padding:3rem;box-shadow:var(--shadow-xl);border:1px solid var(--border-color);position:relative;overflow:hidden;}
.register-form-card::before{content:'';position:absolute;top:-50px;right:-50px;width:160px;height:160px;border-radius:50%;background:var(--primary-light);opacity:.6;pointer-events:none;}
.reg-form{display:flex;flex-direction:column;gap:1.1rem;}
.reg-form-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.1rem;}
.reg-submit{width:100%;padding:1.1rem 2rem;background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:white;font-weight:700;font-size:1rem;border:none;border-radius:var(--r-md);cursor:pointer;transition:all var(--t-spring);display:flex;align-items:center;justify-content:center;gap:.5rem;box-shadow:var(--shadow-orange-sm);}
.reg-submit:hover{transform:translateY(-3px);box-shadow:var(--shadow-orange-md);}
.event-info-card{position:sticky;top:90px;}
.event-info-inner{background:linear-gradient(155deg,#0f172a,#1e293b);border-radius:var(--r-xl);padding:2.5rem;color:white;margin-bottom:1.5rem;}
.event-detail{display:flex;gap:.9rem;align-items:flex-start;margin-bottom:1.5rem;}
.event-detail-icon{width:40px;height:40px;border-radius:var(--r-sm);background:rgba(249,115,22,.15);border:1px solid rgba(249,115,22,.25);display:flex;align-items:center;justify-content:center;color:var(--primary);flex-shrink:0;font-size:.9rem;}
.event-detail-label{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.1em;color:rgba(255,255,255,.45);}
.event-detail-val{font-size:.95rem;color:rgba(255,255,255,.88);font-weight:500;margin-top:.2rem;}
.event-benefits{background:white;border-radius:var(--r-xl);padding:2rem;box-shadow:var(--shadow-md);border:1px solid var(--border-color);}
.benefit-item{display:flex;gap:.75rem;align-items:center;padding:.65rem 0;border-bottom:1px solid var(--border-color);}
.benefit-item:last-child{border-bottom:none;}
.benefit-item i{color:var(--primary);font-size:.9rem;flex-shrink:0;width:20px;text-align:center;}
.benefit-item span{font-size:.88rem;color:var(--text-medium);font-weight:500;}
@media(max-width:1024px){.register-layout{grid-template-columns:1fr;}.event-info-card{position:static;}}
@media(max-width:640px){.reg-form-grid{grid-template-columns:1fr;}.register-form-card{padding:2rem;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=1920" alt="Event Registration">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Event <span style="color:var(--primary)">Registration</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">Secure your spot at Mahavir's upcoming events — workshops, lucky draws, and more.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Events</span><i class="fas fa-chevron-right"></i><span>Register</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:var(--bg-light);">
    <div class="container">
        <div class="register-layout">
            <!-- Registration Form -->
            <div class="register-form-card reveal-left">
                <h2 style="font-size:1.5rem;font-weight:800;margin-bottom:.4rem;">Register for <span class="orange">This Event</span></h2>
                <p style="color:var(--text-gray);font-size:.88rem;margin-bottom:1.75rem;position:relative;z-index:1;">Fill in your details below to secure your event participation.</p>
                <form class="reg-form" action="#" method="POST">
                    <div class="reg-form-grid">
                        <div><label class="form-label">First Name *</label><input type="text" placeholder="First name" required></div>
                        <div><label class="form-label">Last Name *</label><input type="text" placeholder="Last name" required></div>
                    </div>
                    <div><label class="form-label">Email Address *</label><input type="email" placeholder="Your email address" required></div>
                    <div class="reg-form-grid">
                        <div><label class="form-label">Phone Number *</label><input type="tel" placeholder="+91 00000 00000" required></div>
                        <div><label class="form-label">City</label><input type="text" placeholder="Your city"></div>
                    </div>
                    <div><label class="form-label">Business Name</label><input type="text" placeholder="Name of your business"></div>
                    <div>
                        <label class="form-label">Event You're Registering For *</label>
                        <select required style="width:100%;">
                            <option value="">Select an event...</option>
                            <option>Annual Lucky Draw 2025</option>
                            <option>Business Knowledge Summit</option>
                            <option>Business Induction Workshop</option>
                            <option>Young Entrepreneurs Program</option>
                        </select>
                    </div>
                    <div><label class="form-label">How did you hear about us?</label>
                        <select style="width:100%;">
                            <option value="">Select...</option>
                            <option>Social Media</option>
                            <option>Existing Client</option>
                            <option>Google Search</option>
                            <option>Word of Mouth</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div><label class="form-label">Any Special Requirements</label><textarea rows="3" placeholder="Dietary restrictions, accessibility needs, questions..."></textarea></div>
                    <button type="submit" class="reg-submit">
                        <i class="fas fa-check-circle"></i> Confirm My Registration
                    </button>
                    <p style="text-align:center;font-size:.78rem;color:var(--text-gray);margin-top:.5rem;">By registering, you agree to our <a href="#" style="color:var(--primary);">Terms & Conditions</a>.</p>
                </form>
            </div>

            <!-- Event Info Sidebar -->
            <div class="event-info-card reveal-right">
                <div class="event-info-inner">
                    <h3 style="color:white;font-size:1.2rem;font-weight:800;margin-bottom:1.75rem;">Event Information</h3>
                    <div class="event-detail">
                        <div class="event-detail-icon"><i class="fas fa-calendar-alt"></i></div>
                        <div><div class="event-detail-label">Date</div><div class="event-detail-val">Announced via Email</div></div>
                    </div>
                    <div class="event-detail">
                        <div class="event-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div><div class="event-detail-label">Location</div><div class="event-detail-val">Ahmedabad, Gujarat<br><span style="color:rgba(255,255,255,.5);font-size:.82rem;">Full address sent on confirmation</span></div></div>
                    </div>
                    <div class="event-detail">
                        <div class="event-detail-icon"><i class="fas fa-clock"></i></div>
                        <div><div class="event-detail-label">Duration</div><div class="event-detail-val">Typically 1–2 Days</div></div>
                    </div>
                    <div class="event-detail" style="margin-bottom:0;">
                        <div class="event-detail-icon"><i class="fas fa-users"></i></div>
                        <div><div class="event-detail-label">Format</div><div class="event-detail-val">In-Person + Online Options</div></div>
                    </div>
                </div>
                <div class="event-benefits">
                    <h4 style="font-size:1rem;font-weight:800;margin-bottom:1rem;">What's Included</h4>
                    <div class="benefit-item"><i class="fas fa-check-circle"></i><span>Expert-led sessions and workshops</span></div>
                    <div class="benefit-item"><i class="fas fa-check-circle"></i><span>Networking with fellow entrepreneurs</span></div>
                    <div class="benefit-item"><i class="fas fa-check-circle"></i><span>Practical tools and resource kit</span></div>
                    <div class="benefit-item"><i class="fas fa-check-circle"></i><span>Lunch and refreshments</span></div>
                    <div class="benefit-item"><i class="fas fa-check-circle"></i><span>Participation certificate</span></div>
                    <div class="benefit-item"><i class="fas fa-check-circle"></i><span>Post-event support materials</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
