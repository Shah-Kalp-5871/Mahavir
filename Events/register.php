<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── REGISTER PAGE ── */
.bg-gray-50{background:#f8fafc}
.max-w-3xl{max-width:48rem}.mx-auto{margin:0 auto}
.rounded-3xl{border-radius:1.5rem}.overflow-hidden{overflow:hidden}
.shadow-2xl{box-shadow:0 25px 60px rgba(0,0,0,.18)}
.border{border:1px solid var(--border-color)}.border-gray-100{border-color:#f3f4f6}

/* Animated header strip */
.bg-orange-500{background:var(--primary)}
.p-8{padding:2rem}.p-12{padding:3rem}
@media(max-width:768px){.md\:p-12{padding:2rem}}
.text-white{color:white}.text-white\/80{color:rgba(255,255,255,.8)}
.text-2xl{font-size:1.5rem;font-weight:700}.text-xl{font-size:1.25rem}
.font-bold{font-weight:700}.font-black{font-weight:900}
.flex{display:flex}.items-center{align-items:center}.justify-between{justify-content:space-between}
.text-2xl.font-bold.uppercase{letter-spacing:.05em}
.uppercase{text-transform:uppercase}.tracking-widest{letter-spacing:.1em}
.relative{position:relative}.absolute{position:absolute}
.-bottom-10{bottom:-2.5rem}.-right-10{right:-2.5rem}.w-40{width:10rem}.h-40{height:10rem}
.bg-white\/10{background:rgba(255,255,255,.1)}.rounded-full{border-radius:9999px}

/* Form space */
.space-y-6>*+*{margin-top:1.5rem}
.form-group label{display:block;font-size:.8rem;font-weight:800;text-transform:uppercase;letter-spacing:.05em;color:var(--text-dark);margin-bottom:.5rem}
.form-group input,.form-group textarea{width:100%;padding:1rem 1.25rem;border-radius:.75rem;border:2px solid #e5e7eb;font-family:var(--font);font-size:.95rem;transition:border-color var(--transition),box-shadow var(--transition)}
.form-group input:focus,.form-group textarea:focus{border-color:var(--primary);box-shadow:0 0 0 4px rgba(249,115,22,.12);outline:none}
.form-group input::placeholder,.form-group textarea::placeholder{color:#94a3b8}

/* Grid */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
.gap-6{gap:1.5rem}

/* Radio buttons */
.grid-cols-3{grid-template-columns:1fr 1fr 1fr}
@media(max-width:480px){.grid-cols-3{grid-template-columns:1fr}}
label[for]{cursor:pointer}
.accent-orange-500{accent-color:var(--primary)}
.p-4{padding:1rem}.rounded-xl{border-radius:.75rem}.bg-gray-50{background:#f8fafc}
.hover\:border-orange-200:hover{border-color:#fdba74}
.text-sm{font-size:.875rem}.font-semibold{font-weight:600}
.mt-2{margin-top:.5rem}.text-xs{font-size:.75rem}.text-gray-400{color:#9ca3af}.italic{font-style:italic}

/* File Upload */
.hidden{display:none}
.group:hover label{border-color:var(--primary);background:var(--primary-light)}
.text-3xl{font-size:1.875rem}.text-gray-400{color:#9ca3af}.mb-2{margin-bottom:.5rem}.text-gray-600{color:var(--text-gray)}
.group-hover\:text-orange-500{}.group:hover .transition-colors{color:var(--primary)}

/* Submit */
.pt-6{padding-top:1.5rem}
.w-full{width:100%}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}
.text-lg{font-size:1.1rem}
.hover\:bg-black:hover{background:#000}
.transform{transform:translateZ(0)}
.hover\:-translate-y-1:hover{transform:translateY(-3px)}

/* Border dashed */
.border-2{border-width:2px}.border-dashed{border-style:dashed}.border-gray-300{border-color:#d1d5db}

/* Page entry animation */
@keyframes formCardDrop { from{opacity:0;transform:translateY(40px) scale(.98)} to{opacity:1;transform:translateY(0) scale(1)} }
.max-w-3xl.mx-auto { animation: formCardDrop .7s .1s both ease; }

/* Responsive */
@media(max-width:768px){.section-padding{padding:3rem 0}.grid-cols-3{grid-template-columns:1fr 1fr}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?auto=format&fit=crop&q=80&w=1600" alt="Register">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Event Registration</h1>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Events</span> <i class="fas fa-chevron-right mx-2"></i> <span>Register</span>
            </nav>
        </div>
    </div>
</section>

<!-- REGISTRATION FORM SECTION -->
<section class="section-padding bg-gray-50">
    <div class="container">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                <!-- FORM HEADER -->
                <div class="bg-orange-500 p-8 text-white relative">
                    <div class="flex justify-between items-center relative z-10">
                        <h2 class="text-2xl font-bold uppercase tracking-widest">Event Registration</h2>
                        <a href="lucky-draw.php" class="text-white/80 hover:text-white text-2xl"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-white/10 rounded-full"></div>
                </div>

                <div class="p-8 md:p-12">
                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                        
                        <!-- Name Field -->
                        <div class="form-group">
                            <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">Name:</label>
                            <input type="text" name="full_name" required placeholder="Enter your full name" 
                                   class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition-all">
                        </div>

                        <!-- Grid: Contact Numbers -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">Contact Number:</label>
                                <input type="tel" name="contact_number" required placeholder="Enter your contact number" 
                                       class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition-all">
                            </div>
                            <div class="form-group">
                                <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">WhatsApp Number:</label>
                                <div class="relative">
                                    <input type="tel" name="whatsapp_number" required placeholder="Enter WhatsApp number" 
                                           class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-4 focus:ring-orange-100 outline-none transition-all">
                                    <i class="fab fa-whatsapp absolute right-5 top-1/2 -translate-y-1/2 text-green-500 text-xl"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Nature of Business -->
                        <div class="form-group">
                            <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">Nature of Business:</label>
                            <div class="grid grid-cols-3 gap-4">
                                <label class="flex items-center gap-2 p-4 rounded-xl border border-gray-100 bg-gray-50 cursor-pointer hover:border-orange-200 transition-all">
                                    <input type="radio" name="business_nature" value="Retail" class="accent-orange-500">
                                    <span class="text-sm font-semibold">Retail</span>
                                </label>
                                <label class="flex items-center gap-2 p-4 rounded-xl border border-gray-100 bg-gray-50 cursor-pointer hover:border-orange-200 transition-all">
                                    <input type="radio" name="business_nature" value="Wholesale" class="accent-orange-500">
                                    <span class="text-sm font-semibold">Wholesale</span>
                                </label>
                                <label class="flex items-center gap-2 p-4 rounded-xl border border-gray-100 bg-gray-50 cursor-pointer hover:border-orange-200 transition-all">
                                    <input type="radio" name="business_nature" value="Manufacturer" class="accent-orange-500">
                                    <span class="text-sm font-semibold">Manufacturer</span>
                                </label>
                            </div>
                            <p class="text-xs text-gray-400 mt-2 italic">e.g. Retail, Wholesale, Manufacturer</p>
                        </div>

                        <!-- Product -->
                        <div class="form-group">
                            <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">Product:</label>
                            <input type="text" name="product_name" required placeholder="Enter your product name(s)" 
                                   class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all">
                        </div>

                        <!-- GST Number (Optional) -->
                        <div class="form-group">
                            <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">GST Number:</label>
                            <input type="text" name="gst_number" placeholder="Enter GST Number (optional)" 
                                   class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all">
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">Address:</label>
                            <textarea name="address" required rows="3" placeholder="Full address with city, state and PIN code" 
                                      class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-orange-500 outline-none transition-all"></textarea>
                        </div>

                        <!-- File Upload -->
                        <div class="form-group">
                            <label class="block text-sm font-black text-gray-700 mb-2 uppercase tracking-wide">Upload Visiting Card Photo:</label>
                            <div class="relative group">
                                <input type="file" name="visiting_card" id="visiting_card" class="hidden">
                                <label for="visiting_card" class="flex flex-col items-center justify-center gap-2 w-full p-8 rounded-2xl border-2 border-dashed border-gray-300 bg-gray-50 group-hover:bg-orange-50 group-hover:border-orange-500 cursor-pointer transition-all">
                                    <i class="fas fa-camera text-3xl text-gray-400 group-hover:text-orange-500 mb-2"></i>
                                    <span class="font-bold text-gray-600" id="file_name_display">Click to upload or take a photo</span>
                                    <span class="text-xs text-gray-400">JPG, PNG allowed (Max 5MB)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-6">
                            <button type="submit" class="w-full bg-orange-500 text-white font-black py-5 rounded-xl text-lg uppercase tracking-widest shadow-lg hover:bg-black transition-all transform hover:-translate-y-1">
                                Complete Registration
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Real-time file name display
    document.getElementById('visiting_card').addEventListener('change', function(e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : "Click to upload or take a photo";
        document.getElementById('file_name_display').textContent = fileName;
    });
</script>

<?php include '../includes/footer.php'; ?>
