<?php $path_prefix = '../'; $page_title = 'Lucky Draw'; include '../includes/header.php'; ?>
<style>
.lucky-hero-inner{background:linear-gradient(135deg,#fff7ed 0%,#ffedd5 50%,#fef3c7 100%);border-radius:var(--r-2xl);overflow:hidden;padding:4rem;position:relative;text-align:center;border:1px solid rgba(249,115,22,0.15);}
.lucky-hero-inner::before{content:'';position:absolute;inset:0;background:url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=1600') center/cover;opacity:.08;}
.lucky-trophy{font-size:4rem;margin-bottom:1.5rem;display:block;animation:float 3s ease-in-out infinite;}
@keyframes float{0%,100%{transform:translateY(0) rotate(-5deg)}50%{transform:translateY(-16px) rotate(5deg)}}
.lucky-title{font-size:clamp(2rem,4vw,3.2rem);font-weight:900;color:var(--text-dark);margin-bottom:1rem;position:relative;z-index:1;}
.lucky-subtitle{color:var(--text-medium);font-size:1.05rem;line-height:1.8;max-width:560px;margin:0 auto;position:relative;z-index:1;}
.prizes-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:3.5rem;}
.prize-card{background:white;border-radius:var(--r-xl);padding:2.5rem;text-align:center;box-shadow:var(--shadow-md);border:2px solid transparent;transition:all var(--t-base);position:relative;overflow:hidden;}
.prize-card::before{content:'';position:absolute;top:-40px;right:-40px;width:120px;height:120px;border-radius:50%;pointer-events:none;transition:transform var(--t-base);}
.prize-card.gold{border-color:rgba(234,179,8,.3);} .prize-card.gold::before{background:rgba(234,179,8,.12);}
.prize-card.silver{border-color:rgba(148,163,184,.3);} .prize-card.silver::before{background:rgba(148,163,184,.12);}
.prize-card.bronze{border-color:rgba(180,83,9,.3);} .prize-card.bronze::before{background:rgba(180,83,9,.12);}
.prize-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-xl);}
.prize-rank{font-size:3rem;margin-bottom:1rem;}
.prize-label{font-size:.72rem;font-weight:800;text-transform:uppercase;letter-spacing:.12em;margin-bottom:.5rem;}
.prize-card.gold .prize-label{color:#b45309;} .prize-card.silver .prize-label{color:#64748b;} .prize-card.bronze .prize-label{color:#7c3aed;}
.prize-card h3{font-size:1.3rem;font-weight:900;margin-bottom:.5rem;}
.prize-card p{font-size:.875rem;color:var(--text-gray);line-height:1.7;}
.prize-value{font-size:1.8rem;font-weight:900;margin-top:1rem;}
.prize-card.gold .prize-value{color:#d97706;} .prize-card.silver .prize-value{color:#64748b;} .prize-card.bronze .prize-value{color:#7c3aed;}
.steps-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;}
.steps-grid::before{content:'';position:absolute;top:24px;left:60px;right:60px;height:2px;background:linear-gradient(90deg,var(--primary),var(--primary-light));z-index:0;}
.step-item{text-align:center;position:relative;z-index:1;}
.step-num{width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:white;font-weight:900;font-size:1.1rem;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;border:4px solid white;box-shadow:var(--shadow-orange-sm);}
.step-item h4{font-size:.92rem;font-weight:800;margin-bottom:.4rem;}
.step-item p{font-size:.82rem;color:var(--text-gray);line-height:1.6;}
@media(max-width:1024px){.prizes-grid{grid-template-columns:1fr;}.steps-grid{grid-template-columns:1fr 1fr;}.steps-grid::before{display:none;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=1920" alt="Lucky Draw Event">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Lucky <span style="color:var(--primary)">Draw</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">Exciting prizes await! Participate in Mahavir's annual lucky draw and win big for your business.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Events</span><i class="fas fa-chevron-right"></i><span>Lucky Draw</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="lucky-hero-inner reveal">
            <span class="lucky-trophy">🏆</span>
            <h2 class="lucky-title">The Grand <span class="orange">Mahavir Lucky Draw</span></h2>
            <p class="lucky-subtitle" style="position:relative;z-index:1;">Our annual lucky draw rewards our valued clients and partners with exclusive prizes including business tools, training vouchers, and exciting experiences.</p>
            <div style="margin-top:2.5rem;position:relative;z-index:1;display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;">
                <a href="register.php" class="btn btn-primary" style="font-size:1rem;padding:1rem 2.5rem;">Enter the Lucky Draw <i class="fas fa-ticket-alt"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Prizes</span>
            <h2 class="section-title">Amazing <span class="orange">Prizes</span> Up for Grabs</h2>
        </div>
        <div class="prizes-grid">
            <div class="prize-card gold reveal delay-1">
                <div class="prize-rank">🥇</div>
                <div class="prize-label">1st Prize – Grand Winner</div>
                <h3>Premium Business Consulting Package</h3>
                <p>6 months of exclusive one-on-one consulting + complete Business Induction enrollment for your entire team.</p>
                <div class="prize-value">₹2,00,000 Value</div>
            </div>
            <div class="prize-card silver reveal delay-2">
                <div class="prize-rank">🥈</div>
                <div class="prize-label">2nd Prize – Runner Up</div>
                <h3>Business Induction Full Scholarship</h3>
                <p>Complete access to all training modules, workshops, and 3-month mentoring support for your business.</p>
                <div class="prize-value">₹75,000 Value</div>
            </div>
            <div class="prize-card bronze reveal delay-3">
                <div class="prize-rank">🥉</div>
                <div class="prize-label">3rd Prize – Special Award</div>
                <h3>Digital Marketing Package</h3>
                <p>3-month complete digital marketing campaign — website, social media, and targeted digital advertising.</p>
                <div class="prize-value">₹40,000 Value</div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">How to Enter</span>
            <h2 class="section-title">4 Simple <span class="orange">Steps</span> to Participate</h2>
        </div>
        <div class="steps-grid">
            <div class="step-item reveal delay-1"><div class="step-num">1</div><h4>Register Online</h4><p>Fill out the registration form with your business details.</p></div>
            <div class="step-item reveal delay-2"><div class="step-num">2</div><h4>Confirm Entry</h4><p>Receive your unique lucky draw entry number via email.</p></div>
            <div class="step-item reveal delay-3"><div class="step-num">3</div><h4>Attend the Event</h4><p>Join us at the live draw event or watch online.</p></div>
            <div class="step-item reveal delay-4"><div class="step-num">4</div><h4>Win &amp; Celebrate!</h4><p>Winners announced live. Prizes delivered within 30 days.</p></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Don't Miss Your Chance to Win!</h2>
        <p class="section-subtitle">Register now and secure your lucky draw entry. Limited entries available.</p>
        <div class="btn-group"><a href="register.php" class="btn btn-white">Register Now <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
