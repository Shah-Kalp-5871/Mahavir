<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── STARTUP PAGE ── */
.text-xl { font-size: 1.2rem; }
.text-medium { color: var(--text-medium); line-height: 1.8; }
.text-gray-600 { color: var(--text-gray); }
.bg-gray-50 { background: #f8fafc; }
.bg-gray-900 { background: #111827; }
.text-orange-500 { color: var(--primary); }

/* Service cards with stagger animation */
.service-card { background: white; border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); border: 1px solid #f0f0f0; transition: all var(--transition); }
.service-card:hover { transform: translateY(-8px); box-shadow: 0 24px 50px var(--shadow-orange); border-color: var(--primary); }

/* Grid utilities */
.grid { display: grid; }
.grid-cols-1 { grid-template-columns: 1fr; }
@media(min-width:640px) { .md\:grid-cols-2 { grid-template-columns:1fr 1fr; } }
@media(min-width:1024px) { .lg\:grid-cols-3 { grid-template-columns:repeat(3,1fr); } .lg\:grid-cols-2 { grid-template-columns:1fr 1fr; } .lg\:grid-cols-4 { grid-template-columns:repeat(4,1fr); } }
.gap-8 { gap: 2rem; } .gap-6 { gap: 1.5rem; } .gap-12 { gap: 3rem; }
.items-center { align-items: center; }
.mb-4 { margin-bottom: 1rem; } .mb-6 { margin-bottom: 1.5rem; } .mb-8 { margin-bottom: 2rem; } .mb-16 { margin-bottom: 4rem; }
.mt-2 { margin-top: .5rem; } .mt-4 { margin-top: 1rem; } .mt-6 { margin-top: 1.5rem; } .mt-8 { margin-top: 2rem; } .mt-10 { margin-top: 2.5rem; }
.text-center { text-align: center; }
.max-w-3xl { max-width: 48rem; } .max-w-4xl { max-width: 56rem; }
.mx-auto { margin: 0 auto; }
.p-8 { padding: 2rem; } .p-6 { padding: 1.5rem; }
.rounded-2xl { border-radius: 1rem; } .rounded-3xl { border-radius: 1.5rem; } .rounded-full { border-radius: 9999px; }
.shadow-lg { box-shadow: var(--shadow-lg); } .shadow-sm { box-shadow: var(--shadow-sm); }
.w-full { width: 100%; } .h-full { height: 100%; }
.w-14 { width: 3.5rem; } .h-14 { height: 3.5rem; }
.text-xl-font { font-size: 1.25rem; }
.font-bold { font-weight: 700; } .font-black { font-weight: 900; }
.overflow-hidden { overflow: hidden; }
.object-cover { object-fit: cover; }
.border { border: 1px solid var(--border-color); } .border-gray-100 { border-color: #f3f4f6; }
.flex { display: flex; } .flex-col { flex-direction: column; } .items-center { align-items: center; } .justify-center { justify-content: center; }
.text-white\/90 { color: rgba(255,255,255,.9); }
.text-white\/80 { color: rgba(255,255,255,.8); }

/* Fade-in animation for cards */
@keyframes fadeInUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
.service-card { animation: fadeInUp 0.6s both ease; }
.service-card:nth-child(1){animation-delay:.1s}
.service-card:nth-child(2){animation-delay:.2s}
.service-card:nth-child(3){animation-delay:.3s}
.service-card:nth-child(4){animation-delay:.4s}

/* Icon hover spin */
.group:hover .group-hover\:bg-orange-500 { background: var(--primary); }
.group:hover .group-hover\:text-white { color: white; }
.transition-all { transition: all var(--transition); }

/* CTA Dark */
.bg-gray-900 { background: #111827; color: white; }
@media(max-width:768px){ .section-padding{padding:3rem 0} }
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32d7?auto=format&fit=crop&q=80&w=1600" alt="Startup Consultancy">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Startup Consultancy</h1>
            <nav class="breadcrumb-light justify-center mt-3">
                <a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Services</span> <i class="fas fa-chevron-right mx-2"></i> <span>Startup</span>
            </nav>
        </div>
    </div>
</section>

<!-- SERVICE OVERVIEW -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title mb-6">Launch Your <span class="orange">Jewellery Brand</span> with Confidence</h2>
                <p class="text-medium mb-4">Starting a new jewellery business in today's competitive landscape requires more than just capital; it demands a bulletproof strategy, market intelligence, and expert guidance. At Headway Business Solutions LLP, we provide end-to-end consulting for ambitious entrepreneurs looking to make their mark in the gems and jewellery sector.</p>
                <p class="text-medium mb-6">From initial market research and business modeling to brand positioning, inventory planning, and retail setup, our seasoned experts are your partners in building a strong foundation for long-term success.</p>
                <a href="contact.php" class="btn btn-primary">Book a Free Consultation</a>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-soft">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800" alt="Startup Strategy Meeting" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US GRID -->
<section class="section-padding secondary-bg-light">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Why Partner With Us for Your <span class="orange">Startup</span>?</h2>
            <p class="text-medium mt-4">We mitigate the risks associated with new ventures through proven methodologies and profound industry insights.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature Card 1 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Strategic Roadmap</h3>
                <p class="text-medium">We co-create a comprehensive business plan detailing your operational, financial, and marketing strategies to ensure a successful launch phase.</p>
            </div>

            <!-- Feature Card 2 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Inventory & Sourcing</h3>
                <p class="text-medium">Gain access to our vast network of trusted vendors and manufacturers. We'll guide you in curating the right product mix for your target demographic.</p>
            </div>

            <!-- Feature Card 3 -->
            <div class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center text-2xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-store"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Retail Execution</h3>
                <p class="text-medium">From selecting the ideal location to store layout, visual merchandising, and staff recruitment, we manage the critical elements of opening your physical or digital store.</p>
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
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Turn Your Vision into Reality?</h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">Let's discuss how our tailored startup consultancy can accelerate your journey from a concept to a thriving jewellery business.</p>
        <a href="contact.php" class="inline-block bg-white text-orange-500 font-bold px-8 py-4 rounded-full shadow-lg hover:bg-gray-50 hover:scale-105 transition-all duration-300">
            Schedule a Strategy Session <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
