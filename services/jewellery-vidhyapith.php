<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── JEWELLERY VIDHYAPITH PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3,1fr)}.lg\:grid-cols-2{grid-template-columns:1fr 1fr}}
.gap-8{gap:2rem}.gap-12{gap:3rem}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.gap-2{gap:.5rem}
.mb-16{margin-bottom:4rem}.mb-8{margin-bottom:2rem}.mb-6{margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}
.mt-4{margin-top:1rem}.mt-8{margin-top:2rem}.mt-10{margin-top:2.5rem}.mt-16{margin-top:4rem}
.text-center{text-align:center}.mx-auto{margin:0 auto}.max-w-4xl{max-width:56rem}.max-w-3xl{max-width:48rem}
.font-bold{font-weight:700}.font-black{font-weight:900}
.text-xl{font-size:1.2rem}.text-lg{font-size:1.1rem}.text-3xl{font-size:1.875rem}
.text-gray-600{color:var(--text-gray)}.text-gray-800{color:#1e293b}.text-orange-500{color:var(--primary)}
.bg-gray-50{background:#f8fafc}.bg-white{background:white}
.italic{font-style:italic}.leading-relaxed{line-height:1.8}
.relative{position:relative}.overflow-hidden{overflow:hidden}

/* Intro image with shimmer */
.vidhyapith-hero-img{border-radius:1.5rem;box-shadow:var(--shadow-lg);position:relative}
.vidhyapith-hero-img::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg, rgba(249,115,22,.15) 0%, transparent 60%);border-radius:1.5rem;pointer-events:none}

/* Objective cards */
.obj-card{background:white;border-radius:1.25rem;padding:1.75rem;box-shadow:var(--shadow-sm);border-left:4px solid var(--primary);transition:all var(--transition)}
.obj-card:hover{transform:translateX(6px);box-shadow:var(--shadow-md)}
.obj-card h3{font-size:1rem;font-weight:800;color:var(--text-dark);margin-bottom:.5rem}
.obj-card p{color:var(--text-gray);font-size:.9rem;line-height:1.7}
@keyframes objCardIn{from{opacity:0;transform:translateX(-20px)}to{opacity:1;transform:translateX(0)}}
.obj-card:nth-child(1){animation:objCardIn .5s .1s both}
.obj-card:nth-child(2){animation:objCardIn .5s .2s both}
.obj-card:nth-child(3){animation:objCardIn .5s .3s both}
.obj-card:nth-child(4){animation:objCardIn .5s .4s both}

/* Stats row */
.stat-row{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;background:var(--primary);border-radius:1.5rem;padding:2.5rem;color:white}
@media(max-width:640px){.stat-row{grid-template-columns:1fr}}
.stat-number{font-size:2.5rem;font-weight:900;line-height:1;margin-bottom:.25rem}
.stat-label{font-size:.9rem;opacity:.85}
@keyframes countUp{from{transform:scale(.8);opacity:0}to{transform:scale(1);opacity:1}}
.stat-row>*{animation:countUp .6s ease both}
.stat-row>*:nth-child(1){animation-delay:.1s}
.stat-row>*:nth-child(2){animation-delay:.25s}
.stat-row>*:nth-child(3){animation-delay:.4s}

/* Curriculum */
.curriculum-card{background:white;border-radius:1.25rem;padding:1.5rem;box-shadow:var(--shadow-sm);transition:all var(--transition)}
.curriculum-card:hover{transform:translateY(-6px);box-shadow:0 20px 40px var(--shadow-orange)}
.curriculum-card .tag{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:var(--primary);background:var(--primary-light);padding:.25rem .75rem;border-radius:9999px;display:inline-block;margin-bottom:.75rem}
.curriculum-card h3{font-size:1rem;font-weight:800;color:var(--text-dark)}

/* text-white */
.text-white{color:white}
.flex{display:flex}.items-center{align-items:center}.gap-3{gap:.75rem}
.w-10{width:2.5rem}.h-10{height:2.5rem}.rounded-xl{border-radius:.75rem}
.object-cover{object-fit:cover}.w-full{width:100%}
.shadow-lg{box-shadow:var(--shadow-lg)}.shadow-sm{box-shadow:var(--shadow-sm)}
.bg-orange-100{background:var(--primary-light)}.text-orange-500{color:var(--primary)}
.p-8{padding:2rem}.p-6{padding:1.5rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}
.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}
.px-10{padding-left:2.5rem;padding-right:2.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}.stat-number{font-size:2rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1599643478524-fb5244098775?auto=format&fit=crop&q=80&w=1600" alt="Jewellery Vidhyapith Education">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Jewellery Vidhyapith</h1>
            <nav class="breadcrumb-light justify-center mt-3">
                <a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Services</span> <i class="fas fa-chevron-right mx-2"></i> <span>Jewellery Vidhyapith</span>
            </nav>
        </div>
    </div>
</section>

<!-- INTRODUCTION & MISSION -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title mb-6">Introduction to <span class="orange">Excellence</span></h2>
                <p class="text-medium mb-4">Welcome to Mahavir Business Solutions, where innovation meets brilliance in the world of jewellery business coaching and consulting. As a leading enterprise in the industry, we are dedicated to guiding jewellery entrepreneurs towards outstanding success.</p>
                <p class="text-medium mb-6">At Mahavir Business Solutions, we understand that the jewellery business is not just about beautiful ornaments; it's a delicate balance of productive operations, strategic marketing, and artistic jewellery products. Our seasoned team of experts brings a wealth of experience to the table, offering tailored solutions that propel your business forward. Join hands with us; we are committed to achieving lasting success for your business.</p>
                
                <h3 class="text-2xl font-bold mb-4 mt-10">Objectives and Mission</h3>
                <p class="text-medium mb-4">Jewellery Vidhyapith is founded on the visionary objective of training over 1 lakh youth in Gujarat, particularly targeting those who are less educated or have dropped out of school. Recognizing the gem and jewellery industry's demand for skilled personnel—projected to require an additional 4 million people in the next decade according to surveys by NSDC and ICRA—we aim to build a talent pool capable of fulfilling both national and global needs.</p>
                <p class="text-medium mb-6">Launched on August 1st, 2022, this initiative is a cornerstone of our Corporate Social Responsibility (CSR) efforts, designed to equip the youth with comprehensive industry knowledge and skills, thus paving their way to becoming self-reliant and contributing members of society.</p>
                
                <a href="contact.php" class="btn btn-primary mt-2">Join Our Mission</a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?auto=format&fit=crop&q=80&w=600" alt="Students in Class" class="w-full h-64 object-cover rounded-2xl shadow-md">
                <img src="https://images.unsplash.com/photo-1531545514251-b159ce8bf590?auto=format&fit=crop&q=80&w=600" alt="Mentorship" class="w-full h-64 object-cover rounded-2xl shadow-md mt-8">
            </div>
        </div>
    </div>
</section>

<!-- TAGLINE BANNER -->
<section class="py-16 bg-primary text-white text-center">
    <div class="container">
        <h2 class="text-3xl md:text-5xl font-bold italic mb-4">"Learn. Create. Shine. Repeat. — Crafting Futures, Shaping Careers"</h2>
        <p class="text-xl max-w-4xl mx-auto opacity-90">Jewellery Vidhyapith by Mahavir Business Solution is not just an educational initiative; it's a movement towards creating a self-reliant India equipped with skilled professionals ready to make their mark in the gem and jewellery industry. As we embark on this journey, we invite the youth of Gujarat to join us in shaping a brighter, more prosperous future.</p>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section-padding secondary-bg-light">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Why Choose <span class="orange">Jewellery Vidhyapith</span>?</h2>
            <p class="text-medium mt-4">We empower individuals and businesses with world-class education and unparalleled industry expertise.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group text-center">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Distinctive Industry Expertise</h3>
                <p class="text-gray-600 text-sm">At Mahavir Business Solution, we bring to the table a depth of knowledge and experience that is unmatched in the industry, providing insights that are ahead of the curve.</p>
            </div>

            <!-- Feature 2 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group text-center">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Tailored Strategies for Success</h3>
                <p class="text-gray-600 text-sm">We emphasize personalized strategies specifically designed to meet your unique needs and objectives, rather than a one-size-fits-all approach.</p>
            </div>

            <!-- Feature 3 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group text-center">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Comprehensive Service Offerings</h3>
                <p class="text-gray-600 text-sm">From startups to established enterprises, whether it's operational optimization or brand development, we are your one-stop shop.</p>
            </div>

            <!-- Feature 4 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group text-center">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Proven Track Record of Success</h3>
                <p class="text-gray-600 text-sm">Our history speaks volumes, consistently breaking operational records and helping businesses in the gold, silver, and diamond sectors thrive.</p>
            </div>
        </div>
    </div>
</section>

<!-- EXTRA CONTENT: COURSE OFFERINGS -->
<section class="section-padding">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Explore Our <span class="orange">Curriculum</span></h2>
            <p class="text-medium mt-4">Industry-aligned courses designed to transform basic potential into professional mastery.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-2xl overflow-hidden shadow-soft group relative">
                <img src="https://images.unsplash.com/photo-1599643477874-bf18414af2ad?auto=format&fit=crop&q=80&w=600" alt="Diamond Grading" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-2">Diamond & Gem Grading</h3>
                    <p class="text-white/80 text-sm">Master the art of identifying, assessing, and grading precious stones according to international standards.</p>
                </div>
            </div>
            
            <div class="rounded-2xl overflow-hidden shadow-soft group relative">
                <img src="https://images.unsplash.com/photo-1541888086925-0c7f3ac33496?auto=format&fit=crop&q=80&w=600" alt="Retail Management" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-2">Jewellery Retail Management</h3>
                    <p class="text-white/80 text-sm">Learn modern point-of-sale techniques, inventory management, and customer relationship building.</p>
                </div>
            </div>
            
            <div class="rounded-2xl overflow-hidden shadow-soft group relative">
                <img src="https://images.unsplash.com/photo-1589674781759-c21c37956a44?auto=format&fit=crop&q=80&w=600" alt="Design & CAD" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                    <h3 class="text-white text-2xl font-bold mb-2">CAD & Jewellery Design</h3>
                    <p class="text-white/80 text-sm">Bring your artistic visions to life using industry-standard 3D modeling and computer-aided design software.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 bg-gray-900 text-white text-center relative overflow-hidden">
    <div class="container relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Empower Your Future in Jewellery</h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">Take the first step towards a highly rewarding career. Enroll at Jewellery Vidhyapith and become a part of the next generation of industry leaders.</p>
        <a href="contact.php" class="inline-block bg-primary text-white font-bold px-8 py-4 rounded-full shadow-lg hover:bg-orange-600 hover:scale-105 transition-all duration-300">
            Apply Now & Secure Your Spot <i class="fas fa-graduation-cap ml-2"></i>
        </a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
