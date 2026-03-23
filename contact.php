<?php $path_prefix = ''; include 'includes/header.php'; ?>
<style>
/* ── CONTACT PAGE ── */
.grid { display:grid; } .grid-cols-1{grid-template-columns:1fr}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:1fr 1fr 1fr}.lg\:col-span-1{grid-column:span 1}.lg\:col-span-2{grid-column:span 2}}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
.gap-6{gap:1.5rem}.gap-8{gap:2rem}.gap-12{gap:3rem}.gap-4{gap:1rem}.gap-3{gap:.75rem}.gap-2{gap:.5rem}
.text-3xl{font-size:1.875rem;font-weight:800}.text-xl{font-size:1.2rem}.text-lg{font-size:1.1rem}.text-2xl{font-size:1.5rem;font-weight:700}
.font-bold{font-weight:700}.font-black{font-weight:900}
.mb-1{margin-bottom:.25rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.mb-12{margin-bottom:3rem}.mb-10{margin-bottom:2.5rem}.mt-4{margin-top:1rem}.pt-6{padding-top:1.5rem}
.flex{display:flex}.flex-col{flex-direction:column}.items-center{align-items:center}.items-start{align-items:flex-start}.justify-center{justify-content:center}.flex-wrap{flex-wrap:wrap}
.space-y-8>*+*{margin-top:2rem}.space-y-6>*+*{margin-top:1.5rem}
.text-center{text-align:center}.text-gray-600{color:var(--text-gray)}.text-gray-900{color:var(--text-dark)}.text-gray-400{color:#9ca3af}
.text-orange-500{color:var(--primary)}.bg-white{background:white}.bg-gray-100{background:#f3f4f6}
.max-w-2xl{max-width:42rem}.max-w-md{max-width:28rem}
.mx-auto{margin:0 auto}
.relative{position:relative}.absolute{position:absolute}.overflow-hidden{overflow:hidden}
.rounded-xl{border-radius:.75rem}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}.rounded-full{border-radius:9999px}
.p-8{padding:2rem}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-12{padding-left:3rem;padding-right:3rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}
.w-full{width:100%}.w-12{width:3rem}.h-12{height:3rem}.w-10{width:2.5rem}.h-10{height:2.5rem}
.border{border:1px solid var(--border-color)}.border-t{border-top:1px solid var(--border-color)}.border-gray-100{border-color:#f3f4f6}.border-gray-200{border-color:#e5e7eb}
.shadow-xl{box-shadow:0 20px 50px rgba(0,0,0,.12)}.shadow-lg{box-shadow:var(--shadow-lg)}
.shrink-0{flex-shrink:0}
.leading-relaxed{line-height:1.8}
.italic{font-style:italic}
.uppercase{text-transform:uppercase}.tracking-widest{letter-spacing:.1em}
.opacity-80{opacity:.8}
.hover\:bg-orange-500:hover{background:var(--primary)}.hover\:text-white:hover{color:white}
.transition-colors{transition:color var(--transition),background var(--transition)}
.transition-all{transition:all var(--transition)}

/* Contact Info Fade In */
@keyframes slideUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.container .grid > *:nth-child(1){animation:slideUp .7s .1s both}
.container .grid > *:nth-child(2){animation:slideUp .7s .25s both}

/* Icons */
.w-12.h-12.rounded-xl{background:var(--primary-light);color:var(--primary);font-size:1.2rem}
.fab.fa-facebook-f,.fab.fa-instagram,.fab.fa-linkedin-in{font-size:.85rem}

/* Form inputs */
input,textarea{font-family:var(--font);font-size:.95rem}
input:focus,textarea:focus{border-color:var(--primary);box-shadow:0 0 0 4px rgba(249,115,22,.12);outline:none}

/* Map pin bounce */
@keyframes bounce{0%,100%{transform:translateX(-50%) translateY(-55%)}50%{transform:translateX(-50%) translateY(-65%)}}

/* Submit button pulse */
button[type=submit]{transition:all var(--transition)}
button[type=submit]:hover{transform:translateY(-2px);box-shadow:0 12px 28px var(--shadow-orange)}

.hidden{display:none}
.inset-0{top:0;right:0;bottom:0;left:0}
.bg-black\/10{background:rgba(0,0,0,.1)}
.bg-white{background:white}
.text-4xl{font-size:2.25rem}.text-sm{font-size:.875rem}
.font-bold{font-weight:700}

@media(max-width:768px){.section-padding{padding:3rem 0}}
@media(min-width:640px){.sm\:flex-row{flex-direction:row}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?auto=format&fit=crop&q=80&w=1600" alt="Connect with Headway">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Contact Us</h1>
            <p class="text-xl text-white/90 mt-2">We're Here to Help Your Business Grow</p>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Contact Us</span>
            </nav>
        </div>
    </div>
</section>

<!-- CONTACT INFO & FORM -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- LEFT: CONTACT INFO -->
            <div class="lg:col-span-1 space-y-8">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Get In <span class="orange">Touch</span></h2>
                    <p class="text-gray-600 mb-8">Have questions about our consultancy? Reach out to us today. Our experts are ready to provide the 100% solution you've been looking for.</p>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Our Location</h4>
                        <p class="text-gray-600">101-Shree Kashi Parekh Complex, Near Swastik Cross Rd, Navrangpura, Ahmedabad, Gujarat 380009</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Call Us</h4>
                        <p class="text-gray-600">+91 70469 00096</p>
                        <p class="text-gray-400 text-sm">Mon - Sat: 10AM - 7PM</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center text-xl flex-shrink-0">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Email Support</h4>
                        <p class="text-gray-600">info@headway.com</p>
                        <p class="text-gray-600">consult@headway.com</p>
                    </div>
                </div>
                
                <!-- SOCIAL LINKS -->
                <div class="pt-6 border-t border-gray-100">
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center hover:bg-orange-500 transition-all"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center hover:bg-orange-500 transition-all"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-900 text-white flex items-center justify-center hover:bg-orange-500 transition-all"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <!-- RIGHT: CONTACT FORM -->
            <div class="lg:col-span-2 bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-bl-full opacity-50 -mr-16 -mt-16"></div>
                
                <h3 class="text-2xl font-bold mb-8">Send Us a <span class="orange">Message</span></h3>
                
                <form action="#" class="space-y-6 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Your Name" class="w-full px-6 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all">
                        <input type="email" placeholder="Email Address" class="w-full px-6 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="tel" placeholder="Phone Number" class="w-full px-6 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all">
                        <input type="text" placeholder="Subject" class="w-full px-6 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all">
                    </div>
                    <textarea rows="5" placeholder="Your Message..." class="w-full px-6 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all"></textarea>
                    
                    <button type="submit" class="bg-orange-500 text-white font-bold px-12 py-5 rounded-xl hover:bg-orange-600 transition-all shadow-lg hover:shadow-orange-200 uppercase tracking-widest flex items-center gap-3">
                        Submit Now <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="section-padding pt-0">
    <div class="container">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold italic"><i class="fas fa-map-marked-alt text-orange-500 mr-2"></i> Find Us on <span class="orange">Google Maps</span></h2>
        </div>
        
        <div class="rounded-3xl overflow-hidden shadow-lg border-8 border-white h-[450px] relative group">
            <!-- Using an high-quality map placeholder -->
            <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&q=80&w=1600" alt="Map Location" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-all duration-500"></div>
            
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center pointer-events-none">
                <div class="w-20 h-20 bg-orange-500 text-white rounded-full flex items-center justify-center text-4xl shadow-xl animate-bounce border-4 border-white">
                    <i class="fas fa-map-pin"></i>
                </div>
                <div class="mt-4 bg-white px-6 py-2 rounded-full shadow-md font-bold text-gray-900 border border-gray-100">
                    Ahmedabad HQ
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
