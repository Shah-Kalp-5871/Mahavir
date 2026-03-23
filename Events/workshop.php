<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── WORKSHOP COMING SOON PAGE ── */
.min-h-\[60vh\]{min-height:60vh}.flex{display:flex}.items-center{align-items:center}.bg-gray-50{background:#f8fafc}
.text-center{text-align:center}.max-w-2xl{max-width:42rem}.mx-auto{margin:0 auto}.space-y-8>*+*{margin-top:2rem}
.w-24{width:6rem}.h-24{height:6rem}.bg-orange-100{background:var(--primary-light)}.text-orange-500{color:var(--primary)}
.rounded-full{border-radius:9999px}.text-4xl{font-size:2.25rem}.mx-auto{margin-left:auto;margin-right:auto}
.shadow-sm{box-shadow:var(--shadow-sm)}

/* Headline */
.text-5xl{font-size:3rem;font-weight:900;text-transform:uppercase;letter-spacing:-.04em;line-height:1.05}
.font-black{font-weight:900}.italic{font-style:italic}

/* Dots */
.gap-2{gap:.5rem}.w-3{width:.75rem}.h-3{height:.75rem}.bg-current{background:currentColor}
@keyframes bounceDot{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
.animate-bounce{animation:bounceDot 1s ease-in-out infinite}
.\[animation-delay\:0\.2s\]{animation-delay:.2s}
.\[animation-delay\:0\.4s\]{animation-delay:.4s}

/* Notify form */
.pt-10{padding-top:2.5rem}.border-t{border-top:1px solid #e5e7eb}.border-gray-200{border-color:#e5e7eb}
.mb-4{margin-bottom:1rem}.uppercase{text-transform:uppercase}.tracking-widest{letter-spacing:.1em}.text-sm{font-size:.875rem}
.flex-col{flex-direction:column}.gap-4{gap:1rem}.max-w-md{max-width:28rem}
@media(min-width:640px){.sm\:flex-row{flex-direction:row}}
.flex-grow{flex:1}
input[type=email]{width:100%;padding:.9rem 1.5rem;border-radius:9999px;border:1px solid #e2e8f0;font-family:var(--font);outline:none;transition:border-color var(--transition),box-shadow var(--transition)}
input[type=email]:focus{border-color:var(--primary);box-shadow:0 0 0 4px rgba(249,115,22,.12)}
.btn.btn-primary.px-8.rounded-full{padding:.9rem 2rem;border-radius:9999px}

/* Entry animation */
@keyframes comingSoonReveal{0%{opacity:0;transform:translateY(40px) scale(.95)}100%{opacity:1;transform:translateY(0) scale(1)}}
.animate-fade-in{animation:comingSoonReveal .9s .15s both ease}

/* Icon bounce */
@keyframes iconFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
.w-24.h-24.bg-orange-100{animation:iconFloat 3s ease-in-out infinite}

@media(max-width:768px){.text-5xl{font-size:2.2rem}.section-padding{padding:3rem 0}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1600" alt="Workshops">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Industry Workshops</h1>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Events</span> <i class="fas fa-chevron-right mx-2"></i> <span>Workshop</span>
            </nav>
        </div>
    </div>
</section>

<!-- COMING SOON -->
<section class="section-padding min-h-[60vh] flex items-center bg-gray-50">
    <div class="container text-center">
        <div class="max-w-2xl mx-auto space-y-8 animate-fade-in">
            <div class="w-24 h-24 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-4xl mx-auto shadow-sm">
                <i class="fas fa-tools"></i>
            </div>
            <h2 class="text-5xl font-black italic uppercase tracking-tighter text-gray-900 leading-none">
                Something <span class="orange">Brilliant</span> <br> is Coming Soon
            </h2>
            <p class="text-xl text-gray-600 italic">"Knowledge is the most precious jewel." We are currently polishing our upcoming workshop modules to ensure you get the absolute best expertise.</p>
            
            <div class="flex justify-center gap-2 text-orange-500">
                <span class="w-3 h-3 rounded-full bg-current animate-bounce"></span>
                <span class="w-3 h-3 rounded-full bg-current animate-bounce [animation-delay:0.2s]"></span>
                <span class="w-3 h-3 rounded-full bg-current animate-bounce [animation-delay:0.4s]"></span>
            </div>

            <div class="pt-10 border-t border-gray-200">
                <p class="font-bold text-gray-900 mb-4 uppercase tracking-widest text-sm">Stay Informed</p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" class="flex-grow px-6 py-4 rounded-full border border-gray-200 outline-none focus:border-orange-500 transition-all shadow-sm">
                    <button class="btn btn-primary px-8 rounded-full font-bold">Notify Me</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
