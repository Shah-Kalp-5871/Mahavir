<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── MAKE MY DREAMS PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3,1fr)}.lg\:grid-cols-2{grid-template-columns:1fr 1fr}.lg\:grid-cols-4{grid-template-columns:repeat(4,1fr)}}
.gap-8{gap:2rem}.gap-12{gap:3rem}.gap-6{gap:1.5rem}.gap-4{gap:1rem}
.mb-16{margin-bottom:4rem}.mb-8{margin-bottom:2rem}.mb-6{margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}
.mt-2{margin-top:.5rem}.mt-4{margin-top:1rem}.mt-8{margin-top:2rem}.mt-10{margin-top:2.5rem}
.text-center{text-align:center}.mx-auto{margin:0 auto}.max-w-3xl{max-width:48rem}
.font-bold{font-weight:700}.font-black{font-weight:900}
.text-xl{font-size:1.2rem}.text-lg{font-size:1.1rem}.text-gray-600{color:var(--text-gray)}.text-gray-900{color:var(--text-dark)}
.text-orange-500{color:var(--primary)}
.bg-gray-50{background:#f8fafc}.bg-white{background:white}
.italic{font-style:italic}.leading-relaxed{line-height:1.8}

/* Dream Cards — premium hover */
.dream-card{background:white;border-radius:1.5rem;overflow:hidden;box-shadow:var(--shadow-sm);transition:all var(--transition);border:1px solid transparent;position:relative}
.dream-card:hover{transform:translateY(-10px);box-shadow:0 30px 60px var(--shadow-orange);border-color:var(--primary)}
.dream-card .card-image{height:14rem;overflow:hidden}
.dream-card .card-image img{width:100%;height:100%;object-fit:cover;transition:transform .7s ease}
.dream-card:hover .card-image img{transform:scale(1.1)}
.dream-card .card-body{padding:1.5rem}
.dream-card .card-body h3{font-size:1.1rem;font-weight:800;color:var(--text-dark);margin-bottom:.5rem}
.dream-card .card-body p{color:var(--text-gray);font-size:.9rem;line-height:1.7}

/* Icon box */
.icon-box{width:3rem;height:3rem;border-radius:50%;background:var(--primary-light);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;transition:all var(--transition)}
.dream-card:hover .icon-box{background:var(--primary);color:white;transform:rotate(15deg)}

/* Stagger animations */
@keyframes dreamCardIn{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.dream-card:nth-child(1){animation:dreamCardIn .6s .05s both}
.dream-card:nth-child(2){animation:dreamCardIn .6s .15s both}
.dream-card:nth-child(3){animation:dreamCardIn .6s .25s both}
.dream-card:nth-child(4){animation:dreamCardIn .6s .35s both}
.dream-card:nth-child(5){animation:dreamCardIn .6s .45s both}
.dream-card:nth-child(6){animation:dreamCardIn .6s .55s both}

/* Phase section */
.bg-white.rounded-3xl{background:white;border-radius:1.5rem}
.shadow-xl{box-shadow:0 20px 50px rgba(0,0,0,.12)}
.border{border:1px solid var(--border-color)}.border-gray-100{border-color:#f3f4f6}
.p-8{padding:2rem}.p-6{padding:1.5rem}
.flex{display:flex}.items-center{align-items:center}.items-start{align-items:flex-start}
.gap-6{gap:1.5rem}
.w-12{width:3rem}.h-12{height:3rem}.w-10{width:2.5rem}.h-10{height:2.5rem}
.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}.rounded-xl{border-radius:.75rem}
.overflow-hidden{overflow:hidden}.shrink-0{flex-shrink:0}
.object-cover{object-fit:cover}.w-full{width:100%}.h-full{height:100%}
.shadow-lg{box-shadow:var(--shadow-lg)}.shadow-sm{box-shadow:var(--shadow-sm)}

/* CTA */
.bg-gray-900{background:#111827;color:white}.relative{position:relative}
.px-10{padding-left:2.5rem;padding-right:2.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?auto=format&fit=crop&q=80&w=1600" alt="Make My Dreams Program">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Make My Dreams</h1>
            <nav class="breadcrumb-light justify-center mt-3">
                <a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Services</span> <i class="fas fa-chevron-right mx-2"></i> <span>Make My Dreams</span>
            </nav>
        </div>
    </div>
</section>

<!-- PROGRAM OVERVIEW -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1 rounded-2xl overflow-hidden shadow-soft">
                <img src="https://images.unsplash.com/photo-1542626991-cbc4e32524cc?auto=format&fit=crop&q=80&w=800" alt="Mentorship Session" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500">
            </div>
            <div class="order-1 md:order-2">
                <h2 class="section-title mb-6">Transform Your <span class="orange">Aspirations</span> into Achievements</h2>
                <p class="text-medium mb-4">"Make My Dreams" is Headway's premier coaching and mentorship program designed specifically for visionary jewellery business owners. Whether you are aiming to expand your retail footprint, enter the export market, or build a pan-India brand, this program connects you with the roadmap needed to achieve your loftiest goals.</p>
                <p class="text-medium mb-6">Our personalized, one-on-one approach ensures that we dive deep into your unique business challenges, identify growth bottlenecks, and implement powerful strategies that guarantee measurable results and legacy building.</p>
                <div class="flex items-center gap-4 mt-8">
                    <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-xl">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="font-bold text-lg">Goal-Oriented Action Plans</p>
                </div>
                <div class="flex items-center gap-4 mt-4">
                    <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-xl">
                        <i class="fas fa-check"></i>
                    </div>
                    <p class="font-bold text-lg">Continuous Performance Tracking</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROGRAM BENEFITS -->
<section class="section-padding secondary-bg-light">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">What You'll <span class="orange">Achieve</span></h2>
            <p class="text-medium mt-4">The "Make My Dreams" program covers all vital pillars of business mastery to ensure holistic growth.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 text-center group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Revenue Expansion</h3>
                <p class="text-gray-600">Strategies to exponentially increase your top-line revenue through advanced sales techniques and market penetration.</p>
            </div>

            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 text-center group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-crown"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Brand Authority</h3>
                <p class="text-gray-600">Elevate your local jewellery store into a premium, highly-recognized brand that commands customer loyalty.</p>
            </div>

            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 text-center group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">System Automation</h3>
                <p class="text-gray-600">Build robust operational systems so your business can thrive and function flawlessly even in your absence.</p>
            </div>

            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 text-center group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mx-auto mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Personal Growth</h3>
                <p class="text-gray-600">Develop the mindset of an industry titan, overcoming limiting beliefs and maximizing your leadership potential.</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIAL SNAPSHOT -->
<section class="section-padding">
    <div class="container text-center">
        <h2 class="section-title mb-12">Success <span class="orange">Stories</span></h2>
        <div class="max-w-4xl mx-auto bg-white p-10 rounded-2xl shadow-lg border border-gray-100 relative">
            <i class="fas fa-quote-left text-5xl text-orange-100 absolute top-6 left-6 z-0"></i>
            <div class="relative z-10">
                <p class="text-xl italic mb-6">"Before joining 'Make My Dreams', we were a single-store operation struggling with stagnation. Headway's coaching completely rewired our approach to business. Within 18 months, we optimized our operations, multiplied our profits, and are now successfully running three branches across Gujarat."</p>
                <h4 class="font-bold text-lg">Amit Shah</h4>
                <p class="text-orange-500">Managing Director, Shah Jewellers</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 bg-primary text-white text-center relative overflow-hidden">
    <!-- Abstract Shapes -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-black opacity-10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 pointer-events-none"></div>
    
    <div class="container relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Your Dream Business is One Decision Away</h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">Stop wishing and start executing. Book a discovery call to see if the "Make My Dreams" program is the right fit for your ambitions.</p>
        <a href="contact.php" class="inline-block bg-white text-orange-500 font-bold px-8 py-4 rounded-full shadow-lg hover:bg-gray-50 hover:scale-105 transition-all duration-300">
            Apply for Mentorship <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
