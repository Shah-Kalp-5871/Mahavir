<?php $path_prefix = '../'; $page_title = 'Our Team'; include '../includes/header.php'; ?>
<style>
.founder-spotlight{max-width:900px;margin:0 auto 5rem;background:white;border-radius:var(--r-2xl);overflow:hidden;box-shadow:var(--shadow-xl);display:flex;border:1px solid var(--border-color);}
.founder-spotlight-img{width:45%;flex-shrink:0;overflow:hidden;}
.founder-spotlight-img img{width:100%;height:100%;object-fit:cover;object-position:center top;transition:transform var(--t-slow);}
.founder-spotlight:hover .founder-spotlight-img img{transform:scale(1.05);}
.founder-spotlight-info{padding:3rem;display:flex;flex-direction:column;justify-content:center;}
.founder-role-tag{font-size:.72rem;font-weight:800;text-transform:uppercase;letter-spacing:.12em;color:var(--primary);margin-bottom:.5rem;}
.founder-spotlight-info h2{font-size:2rem;font-weight:900;margin-bottom:1rem;}
.founder-divider{width:50px;height:4px;background:linear-gradient(90deg,var(--primary),transparent);border-radius:2px;margin-bottom:1.5rem;}
.founder-spotlight-info blockquote{font-style:italic;color:var(--text-medium);line-height:1.8;margin-bottom:1.5rem;font-size:.95rem;}
.founder-socials{display:flex;gap:.6rem;}
.founder-socials a{width:38px;height:38px;border-radius:50%;background:var(--bg-light);display:flex;align-items:center;justify-content:center;color:var(--text-gray);font-size:.85rem;transition:all var(--t-spring);}
.founder-socials a:hover{background:var(--primary);color:white;transform:translateY(-3px);}
.team-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;}
.team-card{background:white;border-radius:var(--r-xl);overflow:hidden;box-shadow:var(--shadow-sm);border:1px solid var(--border-color);transition:all var(--t-base);}
.team-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-xl);}
.team-card-img{height:20rem;overflow:hidden;position:relative;}
.team-card-img img{width:100%;height:100%;object-fit:cover;object-position:top;transition:transform var(--t-slow);}
.team-card:hover .team-card-img img{transform:scale(1.07);}
.team-card-overlay{position:absolute;inset:0;background:rgba(249,115,22,.88);display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity var(--t-base);}
.team-card:hover .team-card-overlay{opacity:1;}
.team-card-overlay a{color:white;font-size:1.2rem;margin:0 .4rem;transition:transform var(--t-spring);}
.team-card-overlay a:hover{transform:scale(1.25);}
.team-card-body{padding:1.5rem;text-align:center;}
.team-card-body h4{font-size:1rem;font-weight:800;}
.team-card-body p{color:var(--primary);font-weight:600;font-size:.875rem;margin-top:.2rem;}
@media(max-width:1024px){.founder-spotlight{flex-direction:column;}.founder-spotlight-img{width:100%;height:280px;}.team-grid{grid-template-columns:1fr 1fr;}}
@media(max-width:640px){.team-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1920" alt="Mahavir Team">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">The People Behind <span style="color:var(--primary)">Success</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">"Individually, we are one drop. Together, we are an ocean."</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Our Company</span><i class="fas fa-chevron-right"></i><span>Team</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="section-header centered reveal" style="margin-bottom:3rem;">
            <span class="section-label">Our Leadership</span>
            <h2 class="section-title">Meet the <span class="orange">Visionaries</span></h2>
        </div>

        <!-- Founder Spotlight -->
        <div class="founder-spotlight reveal">
            <div class="founder-spotlight-img">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=800" alt="Mr. Tushar Shah – Founder & CMD">
            </div>
            <div class="founder-spotlight-info">
                <p class="founder-role-tag"><i class="fas fa-star" style="color:var(--primary);"></i> &nbsp;Founder & CMD</p>
                <h2>Mr. Tushar Shah</h2>
                <div class="founder-divider"></div>
                <blockquote>"Our focus is not just business growth, but the sustainable evolution of every client we touch. We believe in 100% solutions — every single day."</blockquote>
                <div class="founder-socials">
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Team Grid -->
        <div class="team-grid">
            <div class="team-card reveal delay-1">
                <div class="team-card-img">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Anita Sharma">
                    <div class="team-card-overlay">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="team-card-body"><h4>Anita Sharma</h4><p>Head of Operations</p></div>
            </div>
            <div class="team-card reveal delay-2">
                <div class="team-card-img">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=600" alt="Vikram Mehta">
                    <div class="team-card-overlay">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="team-card-body"><h4>Vikram Mehta</h4><p>Senior Business Consultant</p></div>
            </div>
            <div class="team-card reveal delay-3">
                <div class="team-card-img">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=600" alt="Sneha Patel">
                    <div class="team-card-overlay">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="team-card-body"><h4>Sneha Patel</h4><p>Marketing Strategy Lead</p></div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-warm">
    <div class="container"><div class="cta-banner reveal">
        <h2 class="section-title">Join Our Growing Team</h2>
        <p class="section-subtitle">We're always looking for passionate people to help us shape the future of business consultancy.</p>
        <div class="btn-group"><a href="../Career/job-required.php" class="btn btn-white">View Open Positions <i class="fas fa-arrow-right"></i></a></div>
    </div></div>
</section>

<?php include '../includes/footer.php'; ?>
