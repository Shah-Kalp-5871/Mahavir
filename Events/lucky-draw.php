<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── LUCKY DRAW PAGE ── */
.text-center{text-align:center}.max-w-4xl{max-width:56rem}.max-w-2xl{max-width:42rem}.mx-auto{margin:0 auto}
.mb-16{margin-bottom:4rem}.mb-12{margin-bottom:3rem}.mt-12{margin-top:3rem}.pt-6{padding-top:1.5rem}
.space-y-6>*+*{margin-top:1.5rem}
.italic{font-style:italic}
.text-xl{font-size:1.2rem}.text-2xl{font-size:1.5rem;font-weight:700}.text-3xl{font-size:1.875rem;font-weight:800}
.font-bold{font-weight:700}.font-black{font-weight:900}
.text-gray-600{color:var(--text-gray)}.text-gray-500{color:#6b7280}.text-orange-500{color:var(--primary)}
.text-xl-font{font-size:1.2rem}
.relative{position:relative}.group{position:relative}

/* Ticket image */
.ticket-wrapper { position:relative; transition:transform var(--transition); box-shadow:0 30px 60px -12px rgba(249,115,22,.3); border-radius:1.5rem; }
.ticket-wrapper:hover { transform: scale(1.03) rotate(-1deg); }
.ticket-wrapper img { border-radius:1.5rem; border:4px solid white; }
.inset-0{top:0;right:0;bottom:0;left:0}.absolute{position:absolute}
.rounded-3xl{border-radius:1.5rem}.rounded-full{border-radius:9999px}

/* Gradient overlay */
.bg-gradient-to-t { background: linear-gradient(to top, rgba(249,115,22,.2), transparent); }

/* Limited badge */
.-top-6{top:-1.5rem}.-right-6{right:-1.5rem}
.bg-orange-500{background:var(--primary)}.text-white{color:white}
.w-24{width:6rem}.h-24{height:6rem}
.flex{display:flex}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}
.shadow-lg{box-shadow:var(--shadow-lg)}.border-4{border:4px solid white}
.rotate-12{transform:rotate(12deg)}
.text-xs{font-size:.75rem}.text-xl-font{font-size:1.2rem}

@keyframes spin-badge{0%{transform:rotate(12deg) scale(1)}50%{transform:rotate(18deg) scale(1.05)}100%{transform:rotate(12deg) scale(1)}}
.-top-6.-right-6.bg-orange-500{animation:spin-badge 3s ease-in-out infinite}

.animate-pulse{animation:pulse 2s cubic-bezier(.4,0,.6,1) infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.5}}

/* Register Button glow */
.btn-primary.px-12.py-5 {
  background: var(--primary);
  font-size:1.1rem;
  box-shadow: 0 0 0 0 rgba(249,115,22,.5);
  animation: ctaGlow 2s ease-in-out infinite;
}
@keyframes ctaGlow{0%,100%{box-shadow:0 0 0 0 rgba(249,115,22,.5)}70%{box-shadow:0 0 0 16px rgba(249,115,22,0)}}

/* Ticket hero entrance */
@keyframes ticketReveal{from{opacity:0;transform:translateY(40px) rotate(-3deg)}to{opacity:1;transform:translateY(0) rotate(0deg)}}
.max-w-2xl.mx-auto.mb-12{animation:ticketReveal .9s .3s both ease}

.uppercase{text-transform:uppercase}.tracking-widest{letter-spacing:.1em}
.hover\:scale-110:hover{transform:scale(1.1)}
.fa-ticket-alt{margin-left:.5rem}
.space-y-6>*+*{margin-top:1.5rem}

@media(max-width:768px){.section-padding{padding:3rem 0}.w-24{width:5rem}.h-24{height:5rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?auto=format&fit=crop&q=80&w=1600" alt="Special Events">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Lucky Draw</h1>
            <p class="text-xl text-white/90 mt-2">Win Big with Headway Business Solutions</p>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Events</span> <i class="fas fa-chevron-right mx-2"></i> <span>Lucky Draw</span>
            </nav>
        </div>
    </div>
</section>

<!-- TICKET SECTION -->
<section class="section-padding">
    <div class="container text-center">
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="section-title mb-6 italic">Grab Your <span class="orange">Lucky Ticket</span> Today!</h2>
            <p class="text-xl text-gray-600">Be a part of our exclusive lucky draw event and stand a chance to win incredible rewards for your jewellery business.</p>
        </div>

        <!-- TWO TICKETS IMAGE -->
        <div class="max-w-2xl mx-auto mb-12 relative group">
            <div class="ticket-wrapper relative transition-transform duration-500 hover:scale-105">
                <!-- Using a high-quality ticket-related image or illustration -->
                <img src="https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?auto=format&fit=crop&q=80&w=800" alt="Two Lucky Tickets" class="rounded-3xl shadow-2xl border-4 border-white">
                <div class="absolute inset-0 bg-gradient-to-t from-orange-500/20 to-transparent rounded-3xl"></div>
            </div>
            
            <!-- FLOATING TAG -->
            <div class="absolute -top-6 -right-6 bg-orange-500 text-white w-24 h-24 rounded-full flex flex-col items-center justify-center shadow-lg border-4 border-white rotate-12 animate-pulse">
                <span class="text-xs uppercase font-bold">Limited</span>
                <span class="text-xl font-black">2026</span>
            </div>
        </div>

        <div class="mt-12 space-y-6">
            <h3 class="text-2xl font-bold">Are you ready to change your fortune?</h3>
            <p class="text-gray-500 max-w-xl mx-auto">Registration is open for a limited time only. Make sure you fill in all your professional details to be eligible for the draw.</p>
            <div class="pt-6">
                <a href="register.php" class="btn btn-primary px-12 py-5 rounded-full text-xl font-black shadow-orange-200 hover:scale-110 transition-all uppercase tracking-widest">
                    Register Now <i class="fas fa-ticket-alt ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- INTERNAL CSS -->
<style>
    .ticket-wrapper {
        box-shadow: 0 30px 60px -12px rgba(249, 115, 22, 0.25);
    }
</style>

<?php include '../includes/footer.php'; ?>
