<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── CAREER PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:1024px){.lg\:grid-cols-2{grid-template-columns:1fr 1fr}}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
.gap-16{gap:4rem}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.gap-3{gap:.75rem}.gap-2{gap:.5rem}
.text-3xl{font-size:1.875rem;font-weight:800}.text-xl{font-size:1.2rem}.text-lg{font-size:1.1rem}.text-2xl{font-size:1.5rem;font-weight:700}
.font-bold{font-weight:700}.font-black{font-weight:900}
.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.mb-10{margin-bottom:2.5rem}.mt-1{margin-top:.25rem}
.space-y-6>*+*{margin-top:1.5rem}
.text-gray-600{color:var(--text-gray)}.text-gray-400{color:#9ca3af}.text-white{color:white}
.text-orange-500{color:var(--primary)}
.bg-white{background:white}.bg-orange-50{background:var(--primary-light)}.bg-gray-900{background:#111827}
.leading-relaxed{line-height:1.8}.italic{font-style:italic}

/* Info cards */
.flex{display:flex}.items-center{align-items:center}.items-start{align-items:flex-start}
.p-5{padding:1.25rem}.rounded-2xl{border-radius:1rem}.border{border:1px solid var(--border-color)}.border-orange-100{border-color:#fed7aa}
@keyframes slideInFeature{from{opacity:0;transform:translateX(-20px)}to{opacity:1;transform:translateX(0)}}
.space-y-6>div:nth-child(1){animation:slideInFeature .6s .2s both}
.space-y-6>div:nth-child(2){animation:slideInFeature .6s .4s both}

/* Dark contact card */
.p-8{padding:2rem}.rounded-3xl{border-radius:1.5rem}.relative{position:relative}.overflow-hidden{overflow:hidden}
.relative.z-10{position:relative;z-index:1}
.text-2xl.font-bold.mb-4{font-size:1.5rem;font-weight:700;margin-bottom:1rem}
.opacity-80{opacity:.8}.mb-6{margin-bottom:1.5rem}
.text-9xl{font-size:8rem}.-bottom-4{bottom:-1rem}.-right-4{right:-1rem}.opacity-10{opacity:.1}
.text-orange-500{color:var(--primary)}

/* Form */
.bg-white.rounded-3xl.shadow-xl{box-shadow:0 20px 50px rgba(0,0,0,.12)}
.p-12{padding:3rem}
@media(max-width:768px){.md\:p-12{padding:1.5rem}}
.border-gray-100{border-color:#f3f4f6}
.text-sm{font-size:.875rem}.uppercase{text-transform:uppercase}.tracking-wide{letter-spacing:.025em}
.form-group input, .form-group select, .form-group textarea { width:100%;padding:1rem 1.25rem;border-radius:.75rem;border:2px solid #e5e7eb;font-family:var(--font);font-size:.95rem;transition:all var(--transition) }
.form-group input:focus,.form-group select:focus,.form-group textarea:focus{border-color:var(--primary);box-shadow:0 0 0 4px rgba(249,115,22,.1);outline:none}
.form-group label{display:block;font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:var(--text-dark);margin-bottom:.5rem}
.mb-2{margin-bottom:.5rem}
.space-y-6 .form-group{margin:0}

/* File upload */
.border-dashed{border-style:dashed}.border-2{border-width:2px}.border-gray-300{border-color:#d1d5db}
.w-full.p-8{padding:2rem}.cursor-pointer{cursor:pointer}
.hidden{display:none}

/* Submit */
.w-full.bg-orange-500{background:var(--primary);color:white;font-weight:700;font-size:1rem;padding:1.25rem;border-radius:.75rem;border:none;transition:all var(--transition);box-shadow:0 4px 20px var(--shadow-orange)}
.w-full.bg-orange-500:hover{background:var(--primary-dark);transform:translateY(-2px);box-shadow:0 8px 30px var(--shadow-orange)}

/* Page entry */
@keyframes formAppear{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.lg\:grid-cols-2 > *:last-child{animation:formAppear .8s .2s both}

/* Select arrow */
select{appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 1.25rem center;background-size:1rem;padding-right:2.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=1600" alt="Career at Headway">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Career Opportunities</h1>
            <p class="text-xl text-white/90 mt-2">Grow with India's No.1 Jewellery Business Consultant</p>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Career</span> <i class="fas fa-chevron-right mx-2"></i> <span>Job Required</span>
            </nav>
        </div>
    </div>
</section>

<!-- MAIN CONTENT GRID -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- LEFT: INFO SECTION -->
            <div>
                <h2 class="section-title mb-6">Build Your Future <span class="orange">With Us</span></h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    At Headway Business Solutions LLP, we believe that our strength lies in our people. We're looking for passionate, driven individuals who want to make a real impact in the jewellery consulting and coaching industry.
                </p>

                <div class="space-y-6 mb-10">
                    <div class="flex gap-4 p-5 rounded-2xl bg-orange-50 border border-orange-100 italic">
                        <i class="fas fa-rocket text-orange-500 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">Innovation First</h4>
                            <p class="text-gray-600">We encourage fresh ideas and creative solutions for our clients.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-5 rounded-2xl bg-orange-50 border border-orange-100 italic">
                        <i class="fas fa-user-friends text-orange-500 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">Collaborative Culture</h4>
                            <p class="text-gray-600">Work with the best consultants in the gold and diamond industry.</p>
                        </div>
                    </div>
                </div>

                <div class="p-8 rounded-3xl bg-gray-900 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h4 class="text-2xl font-bold mb-4">Questions?</h4>
                        <p class="opacity-80 mb-6">If you have questions about the recruitment process, feel free to contact our HR team.</p>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-orange-500"></i>
                            <span>+91 70469 00096</span>
                        </div>
                    </div>
                    <i class="fas fa-briefcase absolute -bottom-4 -right-4 text-9xl opacity-10"></i>
                </div>
            </div>

            <!-- RIGHT: APPLICATION FORM -->
            <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-gray-100">
                <h3 class="text-2xl font-bold mb-8 text-center uppercase tracking-wider">Candidate <span class="orange">Registration</span></h3>
                
                <form action="#" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" placeholder="John Doe" class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                        </div>
                        <div class="form-group">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" placeholder="+91 XXXXX XXXXX" class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Email Address *</label>
                        <input type="email" placeholder="john@example.com" class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Position Applied For *</label>
                        <select class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all appearance-none bg-no-repeat bg-[right_1.5rem_center] bg-[length:1em]">
                            <option value="">Select Position</option>
                            <option value="consultant">Business Consultant</option>
                            <option value="marketing">Marketing Executive</option>
                            <option value="hr">HR Professional</option>
                            <option value="it">IT Support / Developer</option>
                            <option value="trainer">Corporate Trainer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Experience (Years) *</label>
                        <input type="number" placeholder="e.g. 5" class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Upload CV / Resume (PDF/DOC) *</label>
                        <div class="relative">
                            <input type="file" class="hidden" id="cv_upload">
                            <label for="cv_upload" class="w-full flex items-center justify-between px-5 py-4 rounded-xl border-2 border-dashed border-gray-300 hover:border-orange-500 hover:bg-orange-50 cursor-pointer transition-all">
                                <span class="text-gray-500">Choose file...</span>
                                <i class="fas fa-cloud-upload-alt text-orange-500"></i>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-bold text-gray-700 mb-2">About You / Additional Info</label>
                        <textarea rows="4" placeholder="Briefly introduce yourself..." class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-orange-500 text-white font-bold py-5 rounded-xl hover:bg-orange-600 transition-all shadow-lg hover:shadow-orange-200 uppercase tracking-widest">
                        Submit Application
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- INTERNAL CSS FOR CUSTOM FORM ELEMENTS -->
<style>
    select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    }
    input::placeholder, textarea::placeholder {
        color: #94a3b8;
    }
</style>

<?php include '../includes/footer.php'; ?>
