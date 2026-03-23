<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── MAHAVIR IT PAGE ── */
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
.bg-gray-50{background:#f8fafc}

/* IT Service Cards with glowing border on hover */
.it-service-card{background:white;border-radius:1.5rem;overflow:hidden;box-shadow:var(--shadow-sm);transition:all var(--transition);position:relative;group:true}
.it-service-card:hover{transform:translateY(-8px);box-shadow:0 24px 50px var(--shadow-orange)}
.it-service-card .card-thumb{height:12rem;overflow:hidden}
.it-service-card .card-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .7s ease}
.it-service-card:hover .card-thumb img{transform:scale(1.1)}
.it-service-card .card-body{padding:1.5rem}
.it-service-card .card-label{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--primary);background:var(--primary-light);padding:.2rem .75rem;border-radius:9999px;display:inline-block;margin-bottom:.75rem}
.it-service-card h3{font-weight:800;color:var(--text-dark);margin-bottom:.5rem;font-size:1rem}
.it-service-card p{color:var(--text-gray);font-size:.875rem;line-height:1.7}

/* Stagger */
@keyframes itCardIn{from{opacity:0;transform:scale(.96)}to{opacity:1;transform:scale(1)}}
.it-service-card:nth-child(1){animation:itCardIn .5s .1s both}
.it-service-card:nth-child(2){animation:itCardIn .5s .2s both}
.it-service-card:nth-child(3){animation:itCardIn .5s .3s both}
.it-service-card:nth-child(4){animation:itCardIn .5s .4s both}
.it-service-card:nth-child(5){animation:itCardIn .5s .5s both}
.it-service-card:nth-child(6){animation:itCardIn .5s .6s both}

/* Dark CTA */
.bg-dark-cta{background:linear-gradient(135deg,#0f1117 0%,#1a2035 100%);color:white;border-radius:2rem;padding:4rem 3rem;text-align:center;position:relative;overflow:hidden}
.bg-dark-cta::before{content:'';position:absolute;top:-80px;right:-80px;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(249,115,22,.2),transparent 70%)}

/* Feature list */
.feature-list li{display:flex;align-items:flex-start;gap:.75rem;padding:.75rem 0;border-bottom:1px solid #f0f0f0;color:var(--text-medium)}
.feature-list li:last-child{border-bottom:none}
.feature-list li i{color:var(--primary);margin-top:.2rem;flex-shrink:0}

.flex{display:flex}.items-center{align-items:center}.items-start{align-items:flex-start}
.object-cover{object-fit:cover}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}
.shadow-xl{box-shadow:0 25px 60px rgba(0,0,0,.12)}.shadow-lg{box-shadow:var(--shadow-lg)}
.overflow-hidden{overflow:hidden}.w-full{width:100%}.relative{position:relative}
.gap-3{gap:.75rem}.gap-6{gap:1.5rem}
.p-8{padding:2rem}.p-6{padding:1.5rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}
.bg-white{background:white}.text-white{color:white}

@media(max-width:768px){.section-padding{padding:3rem 0}.bg-dark-cta{padding:2.5rem 1.5rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=1600" alt="Mahavir IT - Digital Solutions">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Mahavir IT</h1>
            <p class="text-xl text-white/90 mt-2">IT for Jewellers by Mahavir Business Solution</p>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Services</span> <i class="fas fa-chevron-right mx-2"></i> <span>Mahavir IT</span>
            </nav>
        </div>
    </div>
</section>

<!-- INTRODUCTION -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title mb-6">Revolutionizing <span class="orange">Jewellery Operations</span> in the Digital Era</h2>
                <p class="text-medium mb-4">Welcome to IT for Jewellers, the latest offering from Mahavir Business Solution designed to revolutionize the way jewellers operate in the digital landscape.</p>
                <p class="text-medium mb-6">With our comprehensive suite of services, we empower jewellers to leverage the power of technology to enhance their online presence, streamline operations, and drive business growth. From bespoke design to powerful online marketing, we bring digital brilliance to your doorstep.</p>
                
                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="p-4 bg-orange-50 rounded-xl">
                        <h4 class="font-bold text-orange-500 text-2xl mb-1">100%</h4>
                        <p class="text-gray-600 text-sm">Custom Solutions</p>
                    </div>
                    <div class="p-4 bg-orange-50 rounded-xl">
                        <h4 class="font-bold text-orange-500 text-2xl mb-1">24/7</h4>
                        <p class="text-gray-600 text-sm">Tech Support</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Digital Technology" class="rounded-2xl shadow-lg w-full h-auto">
                <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-xl shadow-md border-l-4 border-orange-500 hidden md:block">
                    <p class="font-bold text-gray-800">Digital Brillance <i class="fas fa-rocket text-orange-500 ml-2"></i></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DESIGN SERVICES -->
<section class="section-padding bg-gray-50">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Creative <span class="orange">Design</span> Solutions</h2>
            <p class="text-medium mt-4">Bespoke design services tailored to the unique aesthetics of the jewellery industry.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Website Design</h4>
                <p class="text-gray-600 text-sm">Craft visually stunning and user-friendly websites tailored specifically for jewellers, providing an immersive online experience.</p>
            </div>

            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Mobile App Design</h4>
                <p class="text-gray-600 text-sm">Develop intuitive mobile applications that enable jewellers to connect with their customers on the go, offering seamless access.</p>
            </div>

            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-quill-wing"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Branding</h4>
                <p class="text-gray-600 text-sm">Create captivating identities including logo design, brand documents, merchandise, and premium business cards.</p>
            </div>

            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h4 class="text-xl font-bold mb-3">Graphic Design</h4>
                <p class="text-gray-600 text-sm">Eye-catching graphics for social media, email templates, and marketing collateral that reinforce brand messaging.</p>
            </div>
        </div>
    </div>
</section>

<!-- ONLINE MARKETING -->
<section class="section-padding">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Strategic <span class="orange">Online Marketing</span></h2>
            <p class="text-medium mt-4">We act as trusted advisors and partners, fostering long-term relationships to drive your digital growth.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex gap-6 p-8 rounded-2xl border border-gray-100 hover:border-orange-200 hover:shadow-md transition-all duration-300">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl flex-shrink-0">
                    <i class="fas fa-search-dollar"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Search Engine Marketing & SEO</h4>
                    <p class="text-gray-600">Optimize websites for search engines and implement strategic campaigns to improve visibility and drive targeted traffic.</p>
                </div>
            </div>

            <div class="flex gap-6 p-8 rounded-2xl border border-gray-100 hover:border-orange-200 hover:shadow-md transition-all duration-300">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl flex-shrink-0">
                    <i class="fas fa-share-alt-square"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Social Media Marketing</h4>
                    <h4 class="text-xl font-bold mb-2">Social Media Marketing</h4>
                    <p class="text-gray-600">Harness the power of social platforms to build brand awareness, engage with customers, and drive sales through targeted ads.</p>
                </div>
            </div>

            <div class="flex gap-6 p-8 rounded-2xl border border-gray-100 hover:border-orange-200 hover:shadow-md transition-all duration-300">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl flex-shrink-0">
                    <i class="fas fa-ad"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Display Marketing</h4>
                    <p class="text-gray-600">Deploy visually appealing advertising campaigns across relevant platforms to increase brand visibility and attract customers.</p>
                </div>
            </div>

            <div class="flex gap-6 p-8 rounded-2xl border border-gray-100 hover:border-orange-200 hover:shadow-md transition-all duration-300">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl flex-shrink-0">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-2">Email Marketing</h4>
                    <p class="text-gray-600">Execute targeted campaigns to nurture leads, promote products, and drive conversions using automation tools.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRANSFORMATIONAL JOURNEY -->
<section class="section-padding bg-gray-900 text-white overflow-hidden relative">
    <div class="container relative z-10 text-center max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold mb-8">Unlock the Full Potential of Your Jewellery Business</h2>
        <p class="text-xl opacity-80 mb-10">Join us on this transformative journey and stay ahead of the competition in an increasingly competitive market. Our comprehensive range of services is tailored to meet your unique needs.</p>
        <div class="flex flex-wrap justify-center gap-6">
            <a href="../contact.php" class="btn btn-primary px-10 py-4 rounded-full text-lg font-bold">Start Your Journey</a>
            <p class="w-full mt-4 text-orange-500 font-bold uppercase tracking-widest text-sm">Empowering Jewellers with Digital Brilliance</p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
