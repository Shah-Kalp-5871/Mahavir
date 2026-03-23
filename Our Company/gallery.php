<?php $path_prefix = '../'; include '../includes/header.php'; ?>
<style>
/* ── GALLERY PAGE ── */
.section-padding.pb-0{padding-bottom:0}
.flex-wrap{flex-wrap:wrap}.justify-center{justify-content:center}.gap-4{gap:1rem}.mb-12{margin-bottom:3rem}

/* Filter buttons */
.gallery-filter-btn{padding:.5rem 1.5rem;border-radius:50px;background:white;border:1px solid #e2e8f0;color:var(--text-gray);font-weight:600;cursor:pointer;transition:all var(--transition);font-size:.9rem}
.gallery-filter-btn:hover,.gallery-filter-btn.active{background:var(--primary);color:white;border-color:var(--primary);box-shadow:0 4px 16px var(--shadow-orange)}

/* Gallery grid */
.grid{display:grid}.grid-cols-1{grid-template-columns:1fr}
@media(min-width:768px){.md\:grid-cols-2{grid-template-columns:1fr 1fr}}
@media(min-width:1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3,1fr)}}
.gap-6{gap:1.5rem}

/* Items */
.gallery-item{border-radius:1.5rem;overflow:hidden;box-shadow:var(--shadow-sm);transition:all var(--transition);cursor:pointer;position:relative}
.gallery-item:hover{box-shadow:var(--shadow-md);transform:translateY(-4px)}
.gallery-item img{width:100%;height:20rem;object-fit:cover;transition:transform .6s ease;display:block}
.gallery-item:hover img{transform:scale(1.06)}

/* Overlay */
.gallery-item .item-overlay{position:absolute;inset:0;background:rgba(0,0,0,.6);opacity:0;transition:opacity var(--transition);display:flex;align-items:center;justify-content:center;padding:1.5rem;text-align:center}
.gallery-item:hover .item-overlay{opacity:1}
.gallery-item .item-overlay h4{color:white;font-size:1.15rem;font-weight:800;margin-bottom:.5rem}
.gallery-item .item-overlay p{color:var(--primary);font-size:.85rem;font-weight:600;text-transform:uppercase;letter-spacing:.05em}

/* Stagger animation on load */
@keyframes galleryItemIn{from{opacity:0;transform:scale(.96)}to{opacity:1;transform:scale(1)}}
.gallery-item:nth-child(1){animation:galleryItemIn .5s .05s both}
.gallery-item:nth-child(2){animation:galleryItemIn .5s .15s both}
.gallery-item:nth-child(3){animation:galleryItemIn .5s .25s both}
.gallery-item:nth-child(4){animation:galleryItemIn .5s .35s both}
.gallery-item:nth-child(5){animation:galleryItemIn .5s .45s both}
.gallery-item:nth-child(6){animation:galleryItemIn .5s .55s both}

/* Filter transition */
.gallery-item{opacity:1;transition:opacity .3s ease, transform .3s ease, box-shadow var(--transition)}

/* Remove the inline overlay structure if needed by replacing them */
.absolute.inset-0.bg-black\/60{position:absolute;inset:0;background:rgba(0,0,0,.6);opacity:0;transition:opacity var(--transition);display:flex;align-items:center;justify-content:center;padding:1.5rem;text-align:center}
.group:hover .absolute.inset-0.bg-black\/60{opacity:1}

.text-center.p-6 h4{color:white;font-size:1.1rem;font-weight:800;margin-bottom:.5rem}
.text-center.p-6 p{color:var(--primary);text-transform:uppercase;font-size:.85rem;font-weight:600;letter-spacing:.05em}
.text-white{color:white}.text-orange-400{color:#fb923c}.text-sm{font-size:.875rem}
.mb-2{margin-bottom:.5rem}.font-bold{font-weight:700}

@media(max-width:768px){.section-padding{padding:3rem 0}.gallery-item img{height:16rem}}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-bg">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1600" alt="Gallery Hero">
        <div class="page-hero-overlay"></div>
    </div>
    <div class="container relative z-10">
        <div class="page-hero-content text-center">
            <h1 class="page-title text-white">Our Gallery</h1>
            <nav class="breadcrumb-light justify-center mt-4">
                <a href="../index.php">Home</a> <i class="fas fa-chevron-right mx-2"></i> <span>Our Company</span> <i class="fas fa-chevron-right mx-2"></i> <span>Gallery</span>
            </nav>
        </div>
    </div>
</section>

<!-- GALLERY FILTERS -->
<section class="section-padding pb-0">
    <div class="container">
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="gallery-filter-btn active" data-filter="all">All</button>
            <button class="gallery-filter-btn" data-filter="events">Events</button>
            <button class="gallery-filter-btn" data-filter="training">Training</button>
            <button class="gallery-filter-btn" data-filter="awards">Awards</button>
            <button class="gallery-filter-btn" data-filter="office">Our Workspace</button>
        </div>
        
        <!-- MASONRY-STYLE GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
            <!-- Image 1 -->
            <div class="gallery-item events overflow-hidden rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1540575861501-7ad0582373f3?auto=format&fit=crop&q=80&w=800" alt="Event" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-center p-6">
                        <h4 class="text-white text-xl font-bold mb-2">Jewellery Tech Summit</h4>
                        <p class="text-orange-400 text-sm">Events</p>
                    </div>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="gallery-item training overflow-hidden rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800" alt="Training" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-center p-6">
                        <h4 class="text-white text-xl font-bold mb-2">Business Strategy Workshop</h4>
                        <p class="text-orange-400 text-sm">Training</p>
                    </div>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="gallery-item awards overflow-hidden rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1531050171669-014494144716?auto=format&fit=crop&q=80&w=800" alt="Awards" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-center p-6">
                        <h4 class="text-white text-xl font-bold mb-2">Jewellery Excellence Award</h4>
                        <p class="text-orange-400 text-sm">Awards</p>
                    </div>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="gallery-item office overflow-hidden rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&q=80&w=800" alt="Office" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-center p-6">
                        <h4 class="text-white text-xl font-bold mb-2">Our Ahmedabad HQ</h4>
                        <p class="text-orange-400 text-sm">Our Workspace</p>
                    </div>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="gallery-item training overflow-hidden rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800" alt="Team" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-center p-6">
                        <h4 class="text-white text-xl font-bold mb-2">Team Brainstorming</h4>
                        <p class="text-orange-400 text-sm">Training</p>
                    </div>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="gallery-item events overflow-hidden rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?auto=format&fit=crop&q=80&w=800" alt="Concert" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <div class="text-center p-6">
                        <h4 class="text-white text-xl font-bold mb-2">Global Jewellery Conclave</h4>
                        <p class="text-orange-400 text-sm">Events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .gallery-filter-btn {
        padding: 8px 24px;
        border-radius: 50px;
        background: white;
        border: 1px solid #e2e8f0;
        color: #64748b;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .gallery-filter-btn:hover, .gallery-filter-btn.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
    }
</style>

<script>
    // Simple Filter Logic
    document.querySelectorAll('.gallery-filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Update Active State
            document.querySelectorAll('.gallery-filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            const items = document.querySelectorAll('.gallery-item');
            
            items.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 10);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });
</script>

<?php include '../includes/footer.php'; ?>
