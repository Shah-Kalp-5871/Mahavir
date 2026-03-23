<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── TEAM PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:768px){.md\:flex{display:flex}}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3,1fr)}}
.gap-10{gap:2.5rem}.gap-4{gap:1rem}.mb-20{margin-bottom:5rem}.mb-6{margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}.mb-1{margin-bottom:.25rem}
.text-center{text-align:center}.mx-auto{margin:0 auto}.max-w-3xl{max-width:48rem}.max-w-4xl{max-width:56rem}
.text-3xl{font-size:1.875rem;font-weight:800}.text-xl{font-size:1.25rem}.text-2xl{font-size:1.5rem;font-weight:700}
.font-bold{font-weight:700}.italic{font-style:italic}.leading-relaxed{line-height:1.8}
.text-gray-600{color:var(--text-gray)}.text-gray-900{color:var(--text-dark)}.text-orange-500{color:var(--primary)}

/* Founder spotlight card */
.founder-card { background:white; border-radius:2rem; overflow:hidden; box-shadow:0 30px 70px rgba(0,0,0,.12); border:1px solid rgba(249,115,22,.1); display:flex; flex-direction:column; max-width:56rem; margin:0 auto 5rem; animation:founderReveal .9s .1s both ease; }
@media(min-width:768px){.founder-card{flex-direction:row}}
@keyframes founderReveal{from{opacity:0;transform:scale(.97) translateY(20px)}to{opacity:1;transform:scale(1) translateY(0)}}
.founder-card .founder-img{width:100%;height:16rem;object-fit:cover;object-position:top;transition:transform .7s ease}
.founder-card:hover .founder-img{transform:scale(1.04)}
@media(min-width:768px){.founder-card .founder-img{width:50%;height:auto}}
.founder-info{padding:2.5rem;display:flex;flex-direction:column;justify-content:center}
.founder-info span{display:block;font-size:.8rem;font-weight:800;text-transform:uppercase;letter-spacing:.1em;color:var(--primary);margin-bottom:.5rem}
.founder-info h2{font-size:2rem;font-weight:900;margin-bottom:1rem;color:var(--text-dark)}
.founder-divider{width:3rem;height:4px;background:var(--primary);border-radius:2px;margin-bottom:1.5rem}
.founder-info blockquote{font-style:italic;color:var(--text-gray);line-height:1.8;margin-bottom:1.5rem}
.social-links{display:flex;gap:.75rem}
.social-btn{width:2.5rem;height:2.5rem;border-radius:50%;background:#f3f4f6;display:flex;align-items:center;justify-content:center;color:var(--text-gray);font-size:.85rem;transition:all var(--transition)}
.social-btn:hover{background:var(--primary);color:white;transform:translateY(-3px)}

/* Team cards */
.team-card{background:white;border-radius:1.5rem;overflow:hidden;box-shadow:var(--shadow-sm);transition:all var(--transition)}
.team-card:hover{transform:translateY(-10px);box-shadow:0 30px 60px rgba(0,0,0,.12)}
.team-card .card-img-wrap{height:20rem;overflow:hidden;position:relative}
.team-card img{width:100%;height:100%;object-fit:cover;object-position:top;transition:transform .7s ease}
.team-card:hover img{transform:scale(1.08)}
.card-overlay{position:absolute;inset:0;background:rgba(249,115,22,.85);display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity var(--transition)}
.team-card:hover .card-overlay{opacity:1}
.card-overlay a{color:white;font-size:1.3rem;margin:0 .5rem;transition:transform var(--transition)}
.card-overlay a:hover{transform:scale(1.25)}
.card-body{padding:1.5rem;text-align:center}
.card-body h4{font-size:1.1rem;font-weight:800;color:var(--text-dark);margin-bottom:.25rem}
.card-body p{color:var(--primary);font-weight:600;font-size:.9rem}

/* Stagger animation */
@keyframes teamCardIn{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.team-card:nth-child(1){animation:teamCardIn .6s .1s both}
.team-card:nth-child(2){animation:teamCardIn .6s .25s both}
.team-card:nth-child(3){animation:teamCardIn .6s .4s both}

/* CTA */
.bg-gray-50{background:#f8fafc}.border-t{border-top:1px solid #f0f0f0}
.text-lg{font-size:1.1rem}.max-w-2xl{max-width:42rem}.mb-10{margin-bottom:2.5rem}
.px-10{padding-left:2.5rem;padding-right:2.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}.founder-card .founder-img{height:15rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1600" alt="Headway Team">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Our Team</h1>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Our Company</span> <i class="fas fa-chevron-right mx-2"></i> <span>Team</span>
            </nav>
        </div>
    </div>
</section>

<!-- LEADERSHIP SECTION -->
<section class="section-padding">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">The People Behind <span class="orange">Success</span></h2>
            <p class="text-gray-600 mt-4 italic text-lg">"Individually, we are one drop. Together, we are an ocean."</p>
        </div>

        <!-- FOUNDER CARD (SPECIAL) -->
        <div class="max-w-4xl mx-auto bg-white rounded-3xl overflow-hidden shadow-xl border border-gray-100 flex flex-col md:flex-row mb-20 group">
            <div class="md:w-1/2 h-96 md:h-auto overflow-hidden">
                <!-- Using a high-end corporate portrait placeholder -->
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=800" alt="Mr. Paresh Rajpara" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <span class="text-orange-500 font-bold uppercase tracking-widest text-sm mb-2">Founder & CMD</span>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Mr. Paresh Rajpara</h2>
                <div class="h-1 w-20 bg-orange-500 mb-6"></div>
                <p class="text-gray-600 leading-relaxed mb-6 italic">"Our focus is not just business growth, but the sustainable evolution of the jewellery sector. We believe in 100% solutions."</p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-orange-500 hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-orange-500 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-orange-500 hover:text-white transition-colors"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- TEAM GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Team Member 1 -->
            <div class="team-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                <div class="h-80 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Executive" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="team-social-overlay absolute inset-0 bg-orange-500/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex gap-4">
                            <a href="#" class="text-white text-xl hover:scale-125 transition-transform"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white text-xl hover:scale-125 transition-transform"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900">Anita Sharma</h4>
                    <p class="text-orange-500 font-medium">Head of Operations</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                <div class="h-80 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=600" alt="Executive" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="team-social-overlay absolute inset-0 bg-orange-500/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex gap-4">
                            <a href="#" class="text-white text-xl hover:scale-125 transition-transform"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white text-xl hover:scale-125 transition-transform"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900">Vikram Mehta</h4>
                    <p class="text-orange-500 font-medium">Senior Consultant</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group">
                <div class="h-80 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=600" alt="Executive" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="team-social-overlay absolute inset-0 bg-orange-500/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex gap-4">
                            <a href="#" class="text-white text-xl hover:scale-125 transition-transform"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-white text-xl hover:scale-125 transition-transform"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h4 class="text-xl font-bold text-gray-900">Sneha Patel</h4>
                    <p class="text-orange-500 font-medium">Marketing Strategy Lead</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="section-padding bg-gray-50 border-t border-gray-100">
    <div class="container text-center">
        <h2 class="text-3xl font-bold mb-6">Join Our Growing Team</h2>
        <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">We are always looking for passionate people to help us shape the future of the jewellery industry.</p>
        <a href="../Career/Staff Required.php" class="btn btn-primary px-10">View Careers</a>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
