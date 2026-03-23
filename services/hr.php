<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── HR PAGE ── */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:640px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3,1fr)}.lg\:grid-cols-2{grid-template-columns:1fr 1fr}.lg\:grid-cols-4{grid-template-columns:repeat(4,1fr)}}
.gap-8{gap:2rem}.gap-12{gap:3rem}.gap-6{gap:1.5rem}.gap-4{gap:1rem}
.mb-16{margin-bottom:4rem}.mb-12{margin-bottom:3rem}.mb-8{margin-bottom:2rem}.mb-6{margin-bottom:1.5rem}.mb-4{margin-bottom:1rem}
.mt-4{margin-top:1rem}.mt-8{margin-top:2rem}
.text-center{text-align:center}.mx-auto{margin:0 auto}.max-w-4xl{max-width:56rem}.max-w-3xl{max-width:48rem}
.font-bold{font-weight:700}.font-black{font-weight:900}.italic{font-style:italic}.leading-relaxed{line-height:1.8}
.text-xl{font-size:1.2rem}.text-lg{font-size:1.1rem}.text-3xl{font-size:1.875rem;font-weight:800}
.text-gray-600{color:var(--text-gray)}.text-white{color:white}.text-orange-500{color:var(--primary)}
.bg-gray-50{background:#f8fafc}

/* HR Service Cards — magazine stylecards */
.hr-pillar{background:white;border-radius:var(--radius-lg);padding:2rem;box-shadow:var(--shadow-sm);text-align:center;transition:all var(--transition);border-bottom:3px solid transparent}
.hr-pillar:hover{border-bottom-color:var(--primary);transform:translateY(-8px);box-shadow:0 24px 48px var(--shadow-orange)}
.hr-pillar-icon{width:4rem;height:4rem;border-radius:50%;background:var(--primary-light);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.4rem;margin:0 auto 1.25rem;transition:all var(--transition)}
.hr-pillar:hover .hr-pillar-icon{background:var(--primary);color:white;transform:scale(1.15) rotate(10deg)}
.hr-pillar h3{font-weight:800;font-size:1rem;color:var(--text-dark);margin-bottom:.5rem}
.hr-pillar p{color:var(--text-gray);font-size:.875rem;line-height:1.7}

/* Stagger animation */
@keyframes pillarFadeIn{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.hr-pillar:nth-child(1){animation:pillarFadeIn .5s .05s both}
.hr-pillar:nth-child(2){animation:pillarFadeIn .5s .15s both}
.hr-pillar:nth-child(3){animation:pillarFadeIn .5s .25s both}
.hr-pillar:nth-child(4){animation:pillarFadeIn .5s .35s both}
.hr-pillar:nth-child(5){animation:pillarFadeIn .5s .45s both}
.hr-pillar:nth-child(6){animation:pillarFadeIn .5s .55s both}

/* Process steps */
.process-step{display:flex;gap:1.5rem;align-items:flex-start;padding:1.5rem;border-radius:1.25rem;background:white;box-shadow:var(--shadow-sm);transition:all var(--transition)}
.process-step:hover{transform:translateX(6px);box-shadow:var(--shadow-md)}
.step-number{width:3rem;height:3rem;border-radius:50%;background:var(--primary);color:white;font-weight:900;font-size:1.1rem;display:flex;align-items:center;justify-content:center;flex-shrink:0}

/* CTA */
.bg-gradient-orange{background:linear-gradient(135deg,var(--primary) 0%,#c2490d 100%)}
.text-white{color:white}
.object-cover{object-fit:cover}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}
.shadow-xl{box-shadow:0 25px 60px rgba(0,0,0,.12)}.shadow-lg{box-shadow:var(--shadow-lg)}
.overflow-hidden{overflow:hidden}.w-full{width:100%}.relative{position:relative}
.flex{display:flex}.items-center{align-items:center}.items-start{align-items:flex-start}
.gap-3{gap:.75rem}.gap-6{gap:1.5rem}
.h-12{height:3rem}.w-12{width:3rem}.h-10{height:2.5rem}.w-10{width:2.5rem}
.p-8{padding:2rem}.p-6{padding:1.5rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}
.bg-white.rounded-3xl{background:white;border-radius:1.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=1600"
            alt="Intelligent HR Services">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Intelligent HR</h1>
            <nav class="breadcrumb-light justify-center mt-3">
                <a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Services</span> <i
                    class="fas fa-chevron-right mx-2"></i> <span>Intelligent HR</span>
            </nav>
        </div>
    </div>
</section>

<!-- INTRODUCTION -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="section-title mb-6">Premium <span class="orange">Human Resource</span> Services for Jewellers
                </h2>
                <p class="text-medium mb-4">Welcome to our Intelligent HR services, where we provide comprehensive human
                    resources solutions tailored specifically for jewelers.</p>
                <p class="text-medium mb-6">At Mahavir Business Solution, we understand the unique challenges that
                    jewelers face in managing their businesses efficiently while also ensuring smooth HR operations.
                    With our Intelligent HR package, we take care of all your HR needs, allowing you to focus on the
                    growth and success of your jewellery business without worrying about staffing issues.</p>
                <div class="flex items-center gap-4 mt-8 p-6 bg-orange-50 rounded-xl border-l-4 border-orange-500">
                    <i class="fas fa-gem text-orange-500 text-3xl"></i>
                    <p class="font-bold text-lg text-gray-800 italic">"Empowering Your Jewels of Talent: HR Solutions
                        That Shine as Bright as Your Business"</p>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-soft">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800"
                        alt="HR Professional"
                        class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500">
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-orange-500 opacity-10 rounded-full blur-2xl -z-10">
                </div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-primary opacity-10 rounded-full blur-xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES GRID -->
<section class="section-padding bg-gray-50">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="section-title">Our <span class="orange">Intelligent HR</span> Services</h2>
            <p class="text-medium mt-4">We handle everything from hiring to compliance, so you can focus on your core
                business.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Staff Recruitment</h3>
                <p class="text-gray-600 text-sm">We handle the entire recruitment process for you, from sourcing
                    candidates to conducting interviews and selecting the best-fit talent.</p>
            </div>

            <!-- Service 2 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Salary Negotiation</h3>
                <p class="text-gray-600 text-sm">Our team negotiates competitive salaries on your behalf, ensuring that
                    you attract and retain top talent in the industry.</p>
            </div>

            <!-- Service 3 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Training & Development</h3>
                <p class="text-gray-600 text-sm">We design programs to enhance staff skills, ensuring they stay updated
                    with the latest industry trends and developments.</p>
            </div>

            <!-- Service 4 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Work Reporting</h3>
                <p class="text-gray-600 text-sm">We provide detailed work reports from each staff member, giving you
                    clear insights into their performance and productivity.</p>
            </div>

            <!-- Service 5 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Employment Contracts</h3>
                <p class="text-gray-600 text-sm">Our team prepares and maintains employment contracts, ensuring legal
                    compliance and protecting your interests as an employer.</p>
            </div>

            <!-- Service 6 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Leave Management</h3>
                <p class="text-gray-600 text-sm">We handle all staff leave applications, ensuring smooth workflow
                    management and minimal disruption to your operations.</p>
            </div>

            <!-- Service 7 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Query Resolution</h3>
                <p class="text-gray-600 text-sm">Our HR experts are available to resolve staff queries or issues,
                    ensuring a positive and productive work environment.</p>
            </div>

            <!-- Service 8 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Payroll & Benefits</h3>
                <p class="text-gray-600 text-sm">We manage payroll processing, insurance coverage, and other employee
                    perks to keep your team motivated and satisfied.</p>
            </div>

            <!-- Service 9 -->
            <div
                class="service-card p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div
                    class="w-14 h-14 rounded-lg bg-orange-50 text-orange-500 flex items-center justify-center text-xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Performance Management</h3>
                <p class="text-gray-600 text-sm">We help you track staff performance, setting clear goals and providing
                    professional feedback to help them excel.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section-padding">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=600"
                    alt="HR Consultation" class="w-full h-80 object-cover rounded-2xl shadow-md">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=600"
                    alt="Team Meeting" class="w-full h-80 object-cover rounded-2xl shadow-md mt-12">
            </div>
            <div>
                <h2 class="section-title mb-6">Why Choose <span class="orange">Intelligent HR</span>?</h2>
                <p class="text-medium mb-6">At Mahavir Business Solution, we are committed to providing you with
                    comprehensive and reliable HR solutions that meet your unique business needs.</p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-orange-500 text-xl"></i>
                        <span class="text-gray-700 font-medium">Industry-specific HR expertise for jewellery
                            retail</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-orange-500 text-xl"></i>
                        <span class="text-gray-700 font-medium">End-to-end recruitment to retention strategy</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-orange-500 text-xl"></i>
                        <span class="text-gray-700 font-medium">Compliance-first approach to employment law</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fas fa-check-circle text-orange-500 text-xl"></i>
                        <span class="text-gray-700 font-medium">Focus on building a long-term performing culture</span>
                    </li>
                </ul>
                <p class="text-medium mt-6">With our Intelligent HR services, you can rest assured that your HR
                    operations are in good hands, allowing you to focus on what you do best – growing your jewellery
                    business.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 bg-gray-900 text-white text-center relative overflow-hidden">
    <!-- Visual Accents -->
    <div
        class="absolute top-0 right-0 w-64 h-64 bg-primary opacity-20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
    </div>
    <div
        class="absolute bottom-0 left-0 w-64 h-64 bg-orange-500 opacity-20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
    </div>

    <div class="container relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Build Your Dream Team Today</h2>
        <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">Don't let human resource challenges slow down your
            business. Partner with our HR experts and experience the difference of professional management.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php" class="btn btn-primary px-10 py-4 rounded-full text-lg font-bold">Contact Our HR
                Team</a>
            <a href="tel:+917046900096"
                class="btn bg-white text-gray-900 px-10 py-4 rounded-full text-lg font-bold hover:bg-gray-100 transition-colors">Call
                Now</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>