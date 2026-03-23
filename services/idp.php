<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── IDP PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3,1fr)}.lg\:grid-cols-2{grid-template-columns:1fr 1fr}}
.gap-8{gap:2rem}.gap-12{gap:3rem}.gap-6{gap:1.5rem}.gap-4{gap:1rem}
.mb-16{margin-bottom:4rem}.mb-8{margin-bottom:2rem}.mb-6{margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}
.mt-4{margin-top:1rem}.mt-8{margin-top:2rem}.mt-12{margin-top:3rem}
.text-center{text-align:center}.mx-auto{margin:0 auto}.max-w-4xl{max-width:56rem}.max-w-3xl{max-width:48rem}
.font-bold{font-weight:700}.font-black{font-weight:900}.italic{font-style:italic}.leading-relaxed{line-height:1.8}
.text-xl{font-size:1.2rem}.text-lg{font-size:1.1rem}.text-3xl{font-size:1.875rem;font-weight:800}
.text-gray-600{color:var(--text-gray)}.text-gray-900{color:var(--text-dark)}.text-orange-500{color:var(--primary)}
.bg-gray-50{background:#f8fafc}.bg-white{background:white}

/* IDP Feature Cards with rotating border animation */
.idp-card{background:white;border-radius:1.5rem;padding:2rem;box-shadow:var(--shadow-sm);border:1px solid rgba(249,115,22,.1);transition:all var(--transition);position:relative;overflow:hidden}
.idp-card::before{content:'';position:absolute;inset:-2px;border-radius:1.6rem;background:linear-gradient(135deg,var(--primary),transparent 70%);opacity:0;transition:opacity var(--transition);z-index:0}
.idp-card:hover::before{opacity:.1}
.idp-card:hover{transform:translateY(-8px);box-shadow:0 24px 50px var(--shadow-orange)}
.idp-card>*{position:relative;z-index:1}
.idp-card h3{font-size:1.05rem;font-weight:800;color:var(--text-dark);margin-bottom:.75rem}
.idp-card p{color:var(--text-gray);font-size:.9rem;line-height:1.7}
.idp-icon{width:3.5rem;height:3.5rem;border-radius:1rem;background:var(--primary-light);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.3rem;margin-bottom:1rem;transition:all var(--transition)}
.idp-card:hover .idp-icon{background:var(--primary);color:white;transform:rotate(10deg) scale(1.1)}

/* Stagger */
@keyframes idpCardIn{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
.idp-card:nth-child(1){animation:idpCardIn .6s .1s both}
.idp-card:nth-child(2){animation:idpCardIn .6s .2s both}
.idp-card:nth-child(3){animation:idpCardIn .6s .3s both}
.idp-card:nth-child(4){animation:idpCardIn .6s .4s both}
.idp-card:nth-child(5){animation:idpCardIn .6s .5s both}
.idp-card:nth-child(6){animation:idpCardIn .6s .6s both}

/* Quote section */
.idp-quote{background:linear-gradient(135deg,#1e293b 0%,#0f1117 100%);color:white;border-radius:2rem;padding:4rem;text-align:center;position:relative;overflow:hidden}
.idp-quote::before{content:'"';position:absolute;top:-1rem;left:2rem;font-size:15rem;font-weight:900;color:rgba(249,115,22,.1);line-height:1;pointer-events:none}
.idp-quote p{font-size:1.5rem;font-style:italic;line-height:1.6;position:relative;z-index:1}
.idp-quote span{color:var(--primary)}

.flex{display:flex}.items-center{align-items:center}.items-start{align-items:flex-start}
.gap-3{gap:.75rem}.gap-6{gap:1.5rem}
.object-cover{object-fit:cover}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}
.shadow-lg{box-shadow:var(--shadow-lg)}.overflow-hidden{overflow:hidden}
.w-full{width:100%}.relative{position:relative}
.bg-orange-500{background:var(--primary)}.text-white{color:white}
.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}.idp-quote{padding:2.5rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=1600" alt="Individual Development Program">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Individual Development Program</h1>
            <nav class="breadcrumb-light justify-center mt-3">
                <a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Services</span> <i class="fas fa-chevron-right mx-2"></i> <span>IDP</span>
            </nav>
        </div>
    </div>
</section>

<!-- INTRODUCTION -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 rounded-2xl overflow-hidden shadow-soft relative">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Leadership Coaching" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-sm p-6 rounded-xl shadow-lg border-l-4 border-orange-500">
                    <h4 class="font-bold text-lg mb-1">Shine Brighter. Sell Smarter.</h4>
                </div>
            </div>
            
            <div class="order-1 lg:order-2">
                <h2 class="section-title mb-6">Unlock Your Business's True <span class="orange">Potential</span></h2>
                <p class="text-medium mb-4">Mahavir Business Solution welcomes you to the IDP experience! We understand your aspirations. Let's develop your leadership and unlock your business's true potential.</p>
                <p class="text-medium mb-6">The IDP (Individual Development Program) is a customized program designed specifically for jewellery business owners. Our IDP offers a powerful combination of development training and execution activities to equip you with the skills and strategies you need to excel in both leadership and business management. Our goal is to equip jewellers with the knowledge and tools they need to navigate the complexities of their industry successfully.</p>
                
                <h3 class="text-xl font-bold mb-3 mt-8">Your Pathway to Success</h3>
                <p class="text-gray-600 mb-6">In today's competitive jewellery market, standing out requires more than just beautiful products. You need the leadership skills and business acumen to navigate challenges, seize opportunities, and propel your business forward. Headway's IDP program is an investment in your future and the future of your jewellery business. It's the key to unlocking your full potential and achieving the success you deserve.</p>
                
                <a href="contact.php" class="btn btn-primary mt-2">Start Your Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- TAGLINE BANNER -->
<section class="py-16 bg-primary text-white text-center">
    <div class="container">
        <h2 class="text-3xl md:text-5xl font-bold mb-4">Empowering Jewellers, Crafting Success</h2>
        <p class="text-xl max-w-4xl mx-auto opacity-90 italic">"Spark Success, Illuminate Growth: Transforming Jewellers into Industry Leaders with Headway's Expert Guidance"</p>
    </div>
</section>

<!-- KEY FEATURES / MODULES GRID -->
<section class="section-padding bg-gray-50">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Core Pillars of the <span class="orange">IDP</span></h2>
            <p class="text-medium mt-4">We cover every facet of business mastery to transform you from a business operator into an industry visionary.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pillar 1 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Leadership Skill Development</h3>
                <p class="text-gray-600">Through our IDP, we provide jewellers with personalized leadership training tailored to their unique strengths and challenges.</p>
            </div>

            <!-- Pillar 2 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-gem"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Brand Building</h3>
                <p class="text-gray-600">From logo design to brand messaging, we work closely with jewellers to develop a brand that resonates with the target audience.</p>
            </div>

            <!-- Pillar 3 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">360-Degree Management</h3>
                <p class="text-gray-600">Our IDP covers all aspects of business management, providing jewellers with the skills and knowledge they need to effectively manage every aspect of their operations.</p>
            </div>

            <!-- Pillar 4 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Running an Ownerless Business</h3>
                <p class="text-gray-600">We provide jewellers with strategies and systems for creating an ownerless business model that can run smoothly and efficiently without constant oversight.</p>
            </div>

            <!-- Pillar 5 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-level-up-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Business Growth Techniques</h3>
                <p class="text-gray-600">IDP goes beyond traditional business development programs. We focus on developing your business skills to empower you to inspire your team and make strategic decisions.</p>
            </div>
            
            <!-- Pillar 6 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-chess-knight"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Gain a Competitive Edge</h3>
                <p class="text-gray-600">We'll teach you how to gain a competitive edge that resonates with your business strategy and sets you apart from the competition. We equip you with the tools to dominate the market.</p>
            </div>
        </div>
    </div>
</section>

<!-- EXTRA CONTENT: IS THIS PROGRAM FOR YOU? -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title mb-6">Who Should <span class="orange">Enroll?</span></h2>
                <p class="text-medium mb-8">The Individual Development Program is an elite coaching curriculum designed for highly motivated individuals who are ready to break through their operational ceilings.</p>
                
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-8 h-8 rounded-full bg-orange-100 text-orange-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Next-Gen Family Jewellers</h4>
                            <p class="text-gray-600">Inherited a legacy business and looking to modernize its operations and expand its reach without losing its core identity.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-8 h-8 rounded-full bg-orange-100 text-orange-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Ambitious Store Owners</h4>
                            <p class="text-gray-600">Currently operating a single profitable store but seeking the strategic know-how to scale into a multi-chain jewelry brand.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-8 h-8 rounded-full bg-orange-100 text-orange-500 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Overworked Founders</h4>
                            <p class="text-gray-600">Stuck working IN the business instead of ON it. You need systems to step away from daily operations.</p>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="bg-gray-900 text-white rounded-2xl p-10 lg:p-12 shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500 opacity-20 rounded-bl-full pointer-events-none"></div>
                
                <div class="text-center mb-8 relative z-10">
                    <h3 class="text-3xl font-bold mb-4">Ready for Transformation?</h3>
                    <p class="opacity-90">Seats for our exclusive IDP coaching cohorts are strictly limited to ensure maximum personalization and attention.</p>
                </div>
                
                <form action="#" method="POST" class="space-y-4 relative z-10">
                    <div>
                        <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:outline-none focus:border-orange-500 transition-colors">
                    </div>
                    <div>
                        <input type="email" placeholder="Email Address" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:outline-none focus:border-orange-500 transition-colors">
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone Number" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:outline-none focus:border-orange-500 transition-colors">
                    </div>
                    <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 rounded-lg transition-colors duration-300 mt-4">
                        Request IDP Prospectus
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
