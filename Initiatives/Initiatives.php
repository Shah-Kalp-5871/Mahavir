<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── INITIATIVES PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:1024px){.lg\:grid-cols-2{grid-template-columns:1fr 1fr}}
.gap-12{gap:3rem}.mb-24{margin-bottom:6rem}.mb-16{margin-bottom:4rem}
.text-center{text-align:center}.mx-auto{margin:0 auto}.max-w-4xl{max-width:56rem}.max-w-xl{max-width:36rem}
.text-xl{font-size:1.2rem}.text-4xl{font-size:2.25rem;font-weight:900}.text-lg{font-size:1.1rem}
.font-bold{font-weight:700}.italic{font-style:italic}.leading-relaxed{line-height:1.8}
.text-gray-700{color:var(--text-medium)}.text-orange-500{color:var(--primary)}
.text-orange-600{color:#ea580c}.text-green-500{color:#22c55e}.text-blue-600{color:#2563eb}
.bg-gray-50{background:#f8fafc}

/* Initiative images */
.rounded-2xl{border-radius:1rem}.overflow-hidden{overflow:hidden}.shadow-lg{box-shadow:var(--shadow-lg)}
.h-96{height:24rem}.w-full{width:100%}.object-cover{object-fit:cover}
.group{cursor:pointer}
.group:hover img{transform:scale(1.08)}
img{transition:transform .7s ease}

/* Label badges */
.inline-block{display:inline-block}.px-4{padding-left:1rem;padding-right:1rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}
.rounded-full{border-radius:9999px}.text-sm{font-size:.875rem}.font-bold{font-weight:700}
.uppercase{text-transform:uppercase}.tracking-wider{letter-spacing:.05em}.mb-4{margin-bottom:1rem}
.bg-orange-100{background:#ffedd5}.bg-green-100{background:#dcfce7}.bg-blue-100{background:#dbeafe}
.text-orange-600{color:#ea580c}.text-green-600{color:#16a34a}.text-blue-600{color:#2563eb}

/* Stats */
.flex{display:flex}.items-center{align-items:center}.gap-6{gap:1.5rem}.h-12{height:3rem}.w-px{width:1px}.bg-gray-200{background:#e5e7eb}.text-3xl{font-size:1.875rem;font-weight:700}.text-sm{font-size:.875rem}
.mt-8,.mt-10,.mt-4{margin-top:2rem}

/* "Explore Stories" button */
.btn-outline{display:inline-block;border:2px solid var(--primary);color:var(--primary);padding:.75rem 2rem;border-radius:9999px;font-weight:600;transition:all var(--transition)}
.btn-outline:hover{background:var(--primary);color:white;transform:translateY(-2px)}

/* Alternating layout order */
.order-2{order:2}.order-1{order:1}
@media(min-width:1024px){.lg\:order-2{order:2}.lg\:order-1{order:1}}

/* Space */
.space-y-3>*+*{margin-top:.75rem}
.mb-8{margin-bottom:2rem}.mb-6{margin-bottom:1.5rem}

/* Scroll reveal stagger animation */
@keyframes initiativeReveal{from{opacity:0;transform:translateY(50px)}to{opacity:1;transform:translateY(0)}}
.grid > div:nth-child(1){animation:initiativeReveal .8s .1s both}
.grid > div:nth-child(2){animation:initiativeReveal .8s .3s both}

/* Intro text */
.section-padding .text-xl.text-gray-600{color:var(--text-gray);line-height:1.9}

/* List icons */
.fas.fa-leaf{margin-right:.5rem}

@media(max-width:1024px){.order-2{order:1}.order-1{order:2}}
@media(max-width:768px){.section-padding{padding:3rem 0}.h-96{height:18rem}.text-4xl{font-size:1.75rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&q=80&w=1600" alt="Headway Initiatives">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Our Initiatives</h1>
            <p class="text-xl text-white/90 mt-2">Driven by Purpose, Inspired by Progress</p>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Initiatives</span>
            </nav>
        </div>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="section-padding">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="section-title mb-6">Empowering Beyond <span class="orange">Business</span></h2>
            <p class="text-xl text-gray-600 leading-relaxed">At Headway Business Solutions LLP, our commitment goes beyond consulting. We believe in creating a sustainable ecosystem for the jewellery industry. Our initiatives are designed to foster growth, education, and social responsibility across India.</p>
        </div>
    </div>
</section>

<!-- INITIATIVES LIST -->
<section class="section-padding bg-gray-50">
    <div class="container">
        <!-- Initiative 1: Jewellery Vidhyapith -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div class="rounded-2xl overflow-hidden shadow-lg h-96 group">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&q=80&w=800" alt="Skilling Youth" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div>
                <span class="inline-block bg-orange-100 text-orange-600 px-4 py-1 rounded-full text-sm font-bold mb-4 uppercase tracking-wider">Education</span>
                <h2 class="text-4xl font-bold mb-6 italic">Jewellery Vidhyapith</h2>
                <p class="text-lg text-gray-700 mb-6">Our flagship CSR initiative focused on skilling the youth of Gujarat. Launched in 2022, we aim to provide comprehensive industry knowledge to school dropouts and less educated youth, fulfilling the industry's demand for 4 million skilled professionals over the next decade.</p>
                <div class="flex items-center gap-6">
                    <div class="text-center">
                        <p class="text-orange-500 font-bold text-3xl">1 Lakh+</p>
                        <p class="text-sm text-gray-500 uppercase">Target Youth</p>
                    </div>
                    <div class="h-12 w-px bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-gray-900 font-bold text-3xl">2022</p>
                        <p class="text-sm text-gray-500 uppercase">Founded</p>
                    </div>
                </div>
                <a href="../services/jewellery-vidhyapith.php" class="btn btn-primary mt-10">Learn More About Vidhyapith</a>
            </div>
        </div>

        <!-- Initiative 2: Sustainable Sourcing -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div class="order-2 lg:order-1">
                <span class="inline-block bg-green-100 text-green-600 px-4 py-1 rounded-full text-sm font-bold mb-4 uppercase tracking-wider">Sustainability</span>
                <h2 class="text-4xl font-bold mb-6 italic">Green Jeweller Initiative</h2>
                <p class="text-lg text-gray-700 mb-6">Promoting ethical and eco-friendly practices in the jewellery industry. We help jewellers adopt responsible sourcing of gems and metals, ensuring that beauty doesn't come at the cost of the environment.</p>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-center gap-2"><i class="fas fa-leaf text-green-500"></i> Ethical Sourcing Workshops</li>
                    <li class="flex items-center gap-2"><i class="fas fa-leaf text-green-500"></i> Conflict-Free Certification Guidance</li>
                    <li class="flex items-center gap-2"><i class="fas fa-leaf text-green-500"></i> Eco-friendly Manufacturing Practices</li>
                </ul>
            </div>
            <div class="order-1 lg:order-2 rounded-2xl overflow-hidden shadow-lg h-96 group">
                <img src="https://images.unsplash.com/photo-1610492421943-24402757a3e6?auto=format&fit=crop&q=80&w=800" alt="Eco Jewelry" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
        </div>

        <!-- Initiative 3: Women in Jewellery -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="rounded-2xl overflow-hidden shadow-lg h-96 group">
                <img src="https://images.unsplash.com/photo-1544928147-79a2dbc1f389?auto=format&fit=crop&q=80&w=800" alt="Women Entrepreneurs" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div>
                <span class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-bold mb-4 uppercase tracking-wider">Empowerment</span>
                <h2 class="text-4xl font-bold mb-6 italic">Jewel-Empower Program</h2>
                <p class="text-lg text-gray-700 mb-6">Dedicated to supporting female entrepreneurs and artisans in the jewellery sector. From financial literacy to marketing training, we help women build sustainable and profitable jewellery businesses.</p>
                <button class="btn btn-outline">Explore Stories</button>
            </div>
        </div>
    </div>
</section>

<!-- INTERNAL CSS FOR SPECIFIC PADDING/UTILITIES -->
<style>
    .Initiatives-card {
        padding: 5rem 0;
    }
    .secondary-bg-light {
        background-color: #f8fafc;
    }
    .bg-green-100 { background-color: #dcfce7; }
    .text-green-600 { color: #16a34a; }
    .bg-blue-100 { background-color: #dbeafe; }
    .text-blue-600 { color: #2563eb; }
    .btn-outline {
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-outline:hover {
        background-color: var(--primary-color);
        color: white;
    }
    
    @media (max-width: 768px) {
        .section-padding {
            padding: 3rem 0;
        }
        .text-4xl {
            font-size: 2.25rem;
        }
    }
</style>

<?php include '../includes/footer.php'; ?>
