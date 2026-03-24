<?php $path_prefix = '../'; $page_title = 'Industry Workshops'; include '../includes/header.php'; ?>
<style>
.what-to-expect-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3.5rem;}
.wte-card{background:white;border-radius:var(--r-lg);padding:2rem;border:1px solid var(--border-color);box-shadow:var(--shadow-xs);transition:all var(--t-base);text-align:center;}
.wte-card:hover{transform:translateY(-8px);box-shadow:var(--shadow-orange-md);border-color:var(--primary);}
.wte-icon{width:60px;height:60px;border-radius:50%;background:var(--primary-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin:0 auto 1.25rem;transition:all var(--t-spring);}
.wte-card:hover .wte-icon{background:var(--primary);color:white;transform:rotate(8deg) scale(1.1);}
.wte-card h3{font-size:.97rem;font-weight:800;margin-bottom:.6rem;}
.wte-card p{font-size:.875rem;color:var(--text-gray);line-height:1.75;}
.coming-soon-box{background:white;border-radius:var(--r-xl);padding:4rem 2rem;text-align:center;max-width:680px;margin:0 auto;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);}
.cs-icon{width:96px;height:96px;background:var(--primary-light);color:var(--primary);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:2.2rem;margin:0 auto 2rem;animation:float 3s ease-in-out infinite;}
@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
.cs-dots{display:flex;justify-content:center;gap:.5rem;margin:1.5rem 0;}
.cs-dot{width:10px;height:10px;border-radius:50%;background:var(--primary);animation:dotBounce 1.2s ease-in-out infinite;}
.cs-dot:nth-child(2){animation-delay:.2s;}
.cs-dot:nth-child(3){animation-delay:.4s;}
@keyframes dotBounce{0%,100%{transform:translateY(0);opacity:.5}50%{transform:translateY(-8px);opacity:1}}
.notify-form{display:flex;gap:.75rem;max-width:420px;margin:2rem auto 0;flex-wrap:wrap;justify-content:center;}
.notify-form input{flex:1;min-width:200px;padding:.9rem 1.25rem;border:1.5px solid var(--border-color);border-radius:50px;outline:none;font-size:.9rem;transition:border-color var(--t-fast);}
.notify-form input:focus{border-color:var(--primary);}
@media(max-width:768px){.what-to-expect-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1920" alt="Industry Workshops">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Business <span style="color:var(--primary)">Workshops</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">"Knowledge is the most precious asset." — Immersive workshops designed to elevate your business expertise.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Events</span><i class="fas fa-chevron-right"></i><span>Workshop</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Workshop Highlights</span>
            <h2 class="section-title">What to Expect at a <span class="orange">Mahavir Workshop</span></h2>
        </div>
        <div class="what-to-expect-grid">
            <div class="wte-card reveal delay-1"><div class="wte-icon"><i class="fas fa-chalkboard-teacher"></i></div><h3>Expert-Led Sessions</h3><p>Learn directly from seasoned business consultants with decades of on-ground experience.</p></div>
            <div class="wte-card reveal delay-2"><div class="wte-icon"><i class="fas fa-users"></i></div><h3>Peer Networking</h3><p>Connect with fellow entrepreneurs, share experiences, and build lasting professional relationships.</p></div>
            <div class="wte-card reveal delay-3"><div class="wte-icon"><i class="fas fa-tools"></i></div><h3>Practical Tools</h3><p>Walk away with templates, frameworks, and action plans you can immediately apply in your business.</p></div>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="section-header centered reveal" style="margin-bottom:3rem;">
            <span class="section-label">Coming Soon</span>
            <h2 class="section-title">Exciting Workshops Are <span class="orange">On the Way</span></h2>
        </div>
        <div class="coming-soon-box reveal">
            <div class="cs-icon"><i class="fas fa-tools"></i></div>
            <h3 style="font-size:1.6rem;font-weight:900;margin-bottom:.75rem;">Something Brilliant is Coming</h3>
            <p style="color:var(--text-medium);line-height:1.8;">We are currently polishing our upcoming workshop modules to ensure you receive the absolute best business expertise. Stay tuned for exciting announcements!</p>
            <div class="cs-dots">
                <span class="cs-dot"></span>
                <span class="cs-dot"></span>
                <span class="cs-dot"></span>
            </div>
            <p style="font-size:.82rem;font-weight:800;text-transform:uppercase;letter-spacing:.1em;color:var(--text-gray);">Get notified when we launch</p>
            <form class="notify-form" onsubmit="return false;">
                <input type="email" placeholder="Your email address">
                <button type="submit" class="btn btn-primary">Notify Me <i class="fas fa-bell"></i></button>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
