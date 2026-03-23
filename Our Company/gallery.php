<?php $path_prefix = '../'; $page_title = 'Gallery'; include '../includes/header.php'; ?>
<style>
.gallery-filter{display:flex;justify-content:center;gap:.75rem;flex-wrap:wrap;margin-bottom:3rem;}
.filter-btn{padding:.5rem 1.5rem;border-radius:50px;font-size:.85rem;font-weight:700;border:2px solid var(--border-color);color:var(--text-medium);transition:all var(--t-base);cursor:pointer;}
.filter-btn.active,.filter-btn:hover{background:var(--primary);color:white;border-color:var(--primary);}
.gallery-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;}
.gallery-item{border-radius:var(--r-lg);overflow:hidden;position:relative;aspect-ratio:1;box-shadow:var(--shadow-sm);}
.gallery-item.wide{grid-column:span 2;}
.gallery-item.tall{grid-row:span 2;aspect-ratio:auto;}
.gallery-item img{width:100%;height:100%;object-fit:cover;transition:transform var(--t-slow);}
.gallery-item:hover img{transform:scale(1.08);}
.gallery-overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.75),transparent 50%);opacity:0;transition:opacity var(--t-base);display:flex;align-items:flex-end;padding:1.25rem;}
.gallery-item:hover .gallery-overlay{opacity:1;}
.gallery-overlay p{color:white;font-size:.88rem;font-weight:600;}
@media(max-width:1024px){.gallery-grid{grid-template-columns:repeat(3,1fr);}.gallery-item.wide{grid-column:span 1;}}
@media(max-width:768px){.gallery-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:480px){.gallery-grid{grid-template-columns:1fr;}}
</style>

<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1920" alt="Headway Gallery">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title">Our <span style="color:var(--primary)">Gallery</span></h1>
            <p class="page-hero-sub" style="margin:0 auto;">A visual journey through our events, workshops, client partnerships, and celebrations of success.</p>
            <nav class="breadcrumb-light justify-center">
                <a href="../index.php">Home</a><i class="fas fa-chevron-right"></i><span>Our Company</span><i class="fas fa-chevron-right"></i><span>Gallery</span>
            </nav>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="section-header centered reveal">
            <span class="section-label">Visual Stories</span>
            <h2 class="section-title">Moments That <span class="orange">Define Us</span></h2>
        </div>
        <div class="gallery-filter reveal">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">Events</button>
            <button class="filter-btn">Workshops</button>
            <button class="filter-btn">Awards</button>
            <button class="filter-btn">Team</button>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item wide reveal delay-1">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=800" alt="Headway Annual Summit">
                <div class="gallery-overlay"><p>Annual Jewellery Knowledge Summit 2025</p></div>
            </div>
            <div class="gallery-item reveal delay-2">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&q=80&w=600" alt="Team Workshop">
                <div class="gallery-overlay"><p>Leadership Workshop</p></div>
            </div>
            <div class="gallery-item reveal delay-3">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&1&fit=crop&q=80&w=600" alt="Training Program">
                <div class="gallery-overlay"><p>Vidhyapith Training Session</p></div>
            </div>
            <div class="gallery-item reveal delay-4">
                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&q=80&w=600" alt="Award Ceremony">
                <div class="gallery-overlay"><p>Industry Award Recognition</p></div>
            </div>
            <div class="gallery-item reveal delay-5">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&q=80&w=600" alt="Team Meeting">
                <div class="gallery-overlay"><p>Strategy Planning Session</p></div>
            </div>
            <div class="gallery-item wide reveal delay-6">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=900" alt="Corporate Event">
                <div class="gallery-overlay"><p>Corporate Jewellery Business Conference</p></div>
            </div>
            <div class="gallery-item reveal">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=600" alt="Client Event">
                <div class="gallery-overlay"><p>Client Success Celebration</p></div>
            </div>
            <div class="gallery-item reveal delay-1">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600" alt="Team Photo">
                <div class="gallery-overlay"><p>Headway Core Team 2025</p></div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
