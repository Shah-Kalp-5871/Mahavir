<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── ABOUT PAGE INTERNAL CSS ── */
.about-hero { padding-top: 70px; background: var(--secondary); position: relative; overflow: hidden; min-height: 55vh; display: flex; align-items: center; }
.about-hero::before { content: ''; position: absolute; top: -60px; right: -60px; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(249,115,22,0.12), transparent 70%); animation: pulseGlow 4s ease-in-out infinite; }
@keyframes pulseGlow { 0%,100%{transform:scale(1);opacity:.6} 50%{transform:scale(1.15);opacity:1} }
.about-hero-grid { display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center; width:100%; }
.about-hero-text { animation: slideInLeft 0.8s 0.2s both ease; }
@keyframes slideInLeft { from{opacity:0;transform:translateX(-40px)} to{opacity:1;transform:translateX(0)} }
.about-title { font-size: clamp(3rem,5vw,5rem); font-weight:900; line-height:1; color:var(--text-dark); }
.breadcrumb { display:flex; align-items:center; gap:.5rem; margin-top:1rem; color:var(--text-gray); font-size:.9rem; }
.breadcrumb a { color:var(--primary); }
.about-hero-image { animation: slideInRight 0.8s 0.3s both ease; }
@keyframes slideInRight { from{opacity:0;transform:translateX(40px)} to{opacity:1;transform:translateX(0)} }
.about-team-img { border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); width:100%; }
.about-bg-text { position:absolute; bottom:-2rem; right:0; font-size:9rem; font-weight:900; color:rgba(249,115,22,.06); letter-spacing:-4px; pointer-events:none; white-space:nowrap; }

/* Intro */
.intro-section { background:#fff; }
.intro-grid { display:grid; grid-template-columns:1fr 1.2fr; gap:5rem; align-items:center; }
.intro-image { position:relative; }
.intro-img { border-radius:var(--radius-xl); box-shadow:var(--shadow-lg); }
.intro-content h2 { margin-bottom:1.5rem; }
.intro-content p { color:var(--text-medium); margin-bottom:1rem; line-height:1.8; }

/* Mission/Vision */
.secondary-bg-light { background:var(--secondary); }
.mission-vision-section { }
.mission-vision-grid { display:grid; grid-template-columns:1fr 1fr; gap:3rem; }
.mv-card { background:white; border-radius:var(--radius-lg); padding:2.5rem; box-shadow:var(--shadow-sm); transition:all var(--transition); border-top:4px solid var(--primary); }
.mv-card:hover { transform:translateY(-6px); box-shadow:var(--shadow-md); }
.mv-title { font-size:1.8rem; font-weight:800; margin-bottom:1.5rem; }
.mv-list { display:flex; flex-direction:column; gap:1rem; }
.mv-list li { display:flex; align-items:flex-start; gap:.75rem; color:var(--text-medium); line-height:1.7; }
.mv-list li i { color:var(--primary); margin-top:.2rem; flex-shrink:0; }

/* Why Choose */
.why-grid-four { display:grid; grid-template-columns:repeat(4,1fr); gap:2rem; margin-top:3rem; }
.why-card { background:white; border-radius:var(--radius-md); padding:2rem; box-shadow:var(--shadow-sm); text-align:center; transition:all var(--transition); border:1px solid rgba(249,115,22,.1); }
.why-card:hover { transform:translateY(-8px); box-shadow:0 20px 40px var(--shadow-orange); border-color:var(--primary); }
.why-icon-box { width:60px; height:60px; background:var(--primary-light); border-radius:50%; display:flex; align-items:center; justify-content:center; color:var(--primary); font-size:1.3rem; margin:0 auto 1rem; transition:all var(--transition); }
.why-card:hover .why-icon-box { background:var(--primary); color:white; transform:rotate(10deg) scale(1.1); }
.why-card h3 { font-size:1rem; font-weight:700; margin-bottom:.75rem; }
.why-card p { font-size:.88rem; color:var(--text-gray); line-height:1.7; }

/* Values */
.values-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:2rem; margin-top:3rem; }
.value-item { padding:2rem; border-radius:var(--radius-md); background:white; box-shadow:var(--shadow-sm); }
.value-icon { width:50px; height:50px; background:var(--primary-light); border-radius:var(--radius-sm); display:flex; align-items:center; justify-content:center; color:var(--primary); font-size:1.2rem; margin:0 auto 1rem; }
.value-item h3 { font-size:1.05rem; font-weight:700; margin-bottom:.75rem; }
.value-item p { font-size:.88rem; color:var(--text-gray); line-height:1.7; }

/* Training */
.training-info-section { }
.training-text-content { display:grid; grid-template-columns:1fr 1fr; gap:2rem; margin-top:2rem; }
.training-text-content p { color:var(--text-medium); line-height:1.8; }

/* Scroll animations */
.reveal { opacity:0; transform:translateY(30px); transition:opacity .7s ease, transform .7s ease; }
.reveal.visible { opacity:1; transform:translateY(0); }

/* Responsive */
@media(max-width:1024px) { .about-hero-grid,.intro-grid,.mission-vision-grid,.training-text-content { grid-template-columns:1fr; } .why-grid-four { grid-template-columns:1fr 1fr; } }
@media(max-width:640px) { .about-title{font-size:3rem} .why-grid-four,.values-grid{grid-template-columns:1fr} }
</style>

<!-- ABOUT HERO SECTION -->
<section class="about-hero">
    <div class="container">
        <div class="about-hero-grid">
            <div class="about-hero-text">
                <h1 class="about-title">About Us</h1>
                <nav class="breadcrumb">
                    <a href="../index.php">Home</a> <i class="fas fa-chevron-right"></i> <span>About Us</span>
                </nav>
            </div>
            <div class="about-hero-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Headway Team" class="about-team-img">
            </div>
        </div>
        <div class="about-bg-text">About Us</div>
    </div>
</section>

<!-- INTRODUCTION SECTION -->
<section class="intro-section section-padding">
    <div class="container">
        <div class="intro-grid">
            <div class="intro-image">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Jewellery Business Growth Stages" class="intro-img">
            </div>
            <div class="intro-content">
                <h2 class="section-title">Introduction</h2>
                <p>With warm welcome we introduce ourselves as ‘Headway Business Solutions LLP’, where innovation meets brilliance for jewellery business coaching and consulting. As a leading consulting firm we take pleasure in dedicating our solution providing guidance to jewellery entrepreneurs towards outstanding success.</p>
                <p>At Headway, we apprehend that the jewellery business is not merely about ornaments; but it's a delicate balance of productive operations, revenue generation by strategic marketing, and effective selling of artistic products. Our seasoned experts bring vast experience on board, offering tailor made solutions that will thrust your business forward.</p>
            </div>
        </div>
    </div>
</section>

<!-- MISSION & VISION SECTION -->
<section class="mission-vision-section section-padding secondary-bg-light">
    <div class="container">
        <div class="mission-vision-grid">
            <!-- Mission Card -->
            <div class="mv-card">
                <h2 class="mv-title">Our <span class="orange">Mission</span></h2>
                <ul class="mv-list">
                    <li><i class="fas fa-check-circle orange"></i> At Headway Business Solutions LLP, our mission is to help every jewellery business thrive, setting new benchmarks for success.</li>
                    <li><i class="fas fa-check-circle orange"></i> We're committed to equipping jewellery businesses with the tools they need to succeed in the ever-evolving customer needs.</li>
                    <li><i class="fas fa-check-circle orange"></i> Besides, We are dedicated to nurturing startups and accelerating growth for established jewellers.</li>
                    <li><i class="fas fa-check-circle orange"></i> Through custom-made strategies, innovative insights, and unwavering support, we are devoted to turning your aspirations into achievements.</li>
                </ul>
            </div>
            <!-- Vision Card -->
            <div class="mv-card">
                <h2 class="mv-title">Our <span class="orange">Vision</span></h2>
                <ul class="mv-list">
                    <li><i class="fas fa-check-circle orange"></i> Headway Business Solutions LLP aims to be the best in the world at coaching and advising jewellery businesses.</li>
                    <li><i class="fas fa-check-circle orange"></i> We want all our partner jewellers to succeed.</li>
                    <li><i class="fas fa-check-circle orange"></i> We'll help them with top-notch advice, creative strategies, and powerful solutions, hoping to take their jewellery businesses to unprecedented levels of success.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- WHY DESIGNATE SECTION -->
<section class="why-choose-section section-padding">
    <div class="container text-center">
        <h2 class="section-title">Why designate <span class="orange">Headway Business Solutions LLP?</span></h2>
        <div class="why-grid-four">
            <div class="why-card">
                <div class="why-icon-box"><i class="fas fa-gem"></i></div>
                <h3>Distinctive Industry Expertise:</h3>
                <p>At Headway Business Solutions LLP, we bring to the table a depth of knowledge and experience that is unmatched in the industry. This wealth of expertise allows us to provide our clients with insights, strategies, and solutions that are not only effective but also ahead of the curve.</p>
            </div>
            <div class="why-card">
                <div class="why-icon-box"><i class="fas fa-lightbulb"></i></div>
                <h3>Customised Strategies for Your Success:</h3>
                <p>We comprehend that each jewellery business has its own set of challenges and opportunities. Consequently we emphasise on personalized strategies that are specifically designed to meet your unique needs and objectives. Our approach is not one-size-fits-all; on the other hand it’s an adaptation of series of resolutions that aims to elevate your business in every aspect.</p>
            </div>
            <div class="why-card">
                <div class="why-icon-box"><i class="fas fa-hands-helping"></i></div>
                <h3>Comprehensive Service Offerings:</h3>
                <p>From start-up to established enterprises, our range of services caters to every characteristic of the jewellery business. Whether it’s operational optimization, market expansion, brand development, or financial advisory, Headway Business Solutions stands as an Ultimate Hub for all your consulting desires.</p>
            </div>
            <div class="why-card">
                <div class="why-icon-box"><i class="fas fa-trophy"></i></div>
                <h3>Proven Track Record of Success:</h3>
                <p>Our history speaks volumes. Since our inception, we have consistently broken our own records of success, helping numerous businesses within the gold, silver, diamond, and gem jewellery sectors to thrive. Our clients' achievements are a testament to our effective methodologies and the positive impact we have envisaged on their businesses.</p>
            </div>
        </div>
    </div>
</section>

<!-- OUR VALUES SECTION -->
<section class="values-section section-padding secondary-bg-light">
    <div class="container text-center">
        <h2 class="section-title">Our <span class="orange">Value: Sparkling Futures, Crafted Today.</span></h2>
        <div class="values-grid">
            <div class="value-item">
                <div class="value-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>Building Skills & Confidence</h3>
                <p>At Headway Business Solutions LLP, we take pride of being a catalyst for success in the territory of jewellery businesses through our comprehensive training programs. Our initiatives are designed to empower jewellery stores by imparting invaluable skills, strategic insights, and industry-specific knowledge.</p>
            </div>
            <div class="value-item">
                <div class="value-icon"><i class="fas fa-comments"></i></div>
                <h3>Expert Coaching & Consultation</h3>
                <p>Whether you’re navigating the complexities of starting a new venture or seeking to enhance the performance of an established business, our training equips you with the gears needed to thrive in the competitive yet lucrative jewellery industry.</p>
            </div>
            <div class="value-item">
                <div class="value-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Committed to Your Growth</h3>
                <p>With a commitment to excellence, our training programs go beyond theory, providing practical, actionable guidance that transforms aspirations into tangible achievements. Headway Business Solutions is not just a training resource; we are your dedicated partner in shaping a path to lasting success for your jewellery business.</p>
            </div>
        </div>
    </div>
</section>

<!-- TRAINING TEXT SECTION -->
<section class="training-info-section section-padding">
    <div class="container">
        <h2 class="section-title text-center">Transform Your Jewellery Business with Headway's Expert Training Programs</h2>
        <div class="training-text-content">
            <p>Headway Business Solutions LLP stands as a torch bearer & beacon of growth and success in the jewellery business world, thanks to our in-depth training programs. We're dedicated to enhance the capabilities of jewellery stores, equipping them with the necessary tools to stand out in the finest modern jewellery market. At Headway, we’re more than just a resource for training; we’re an unwavering partner, organised to guide your jewellery business towards enduring success.</p>
            <p>Our training is designed to support both emerging and established businesses, equipping them with the necessary tools to stand out in the modest jewellery market. At Headway, we’re more than just a resource for training; we’re an unwavering partner, organised to guide your jewellery business towards enduring success.</p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
