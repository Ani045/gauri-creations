<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses & Workshops | Gauri Creations</title>
    <?php include 'includes/head.php'; ?>
    <style>
        .course-card-new {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .course-card-new:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08), 0 0 0 1px rgba(252,136,13,0.12);
        }
        .course-card-new:hover .card-img {
            transform: scale(1.08);
        }
        .course-card-new:hover .card-overlay {
            opacity: 1;
        }
        .course-card-new:hover .card-cta {
            opacity: 1;
            transform: translateY(0);
        }
        .card-img {
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .card-overlay {
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .card-cta {
            opacity: 0;
            transform: translateY(8px);
            transition: all 0.3s ease 0.1s;
        }
        .filter-pill {
            transition: all 0.3s ease;
        }
        .filter-pill.active {
            background: #fc880d;
            color: white;
            box-shadow: 0 4px 14px rgba(252,136,13,0.3);
            border-color: #fc880d;
        }
        .filter-pill:not(.active):hover {
            background: #FFF5EB;
            border-color: #fc880d;
            color: #fc880d;
        }
        @keyframes fadeInCard {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .course-card-new { animation: fadeInCard 0.5s ease forwards; }
        .course-card-new:nth-child(2) { animation-delay: 0.05s; }
        .course-card-new:nth-child(3) { animation-delay: 0.1s; }
        .course-card-new:nth-child(4) { animation-delay: 0.15s; }
        .course-card-new:nth-child(5) { animation-delay: 0.2s; }
        .course-card-new:nth-child(6) { animation-delay: 0.25s; }
    </style>
</head>

<?php $activePage = "courses"; ?>
<body class="font-sans bg-[#FEFCF9] text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include 'includes/nav.php'; ?>

    <!-- ===== PAGE HERO ===== -->
    <section class="relative overflow-hidden" style="background: linear-gradient(135deg, #1a1512 0%, #2A2522 40%, #3d2e1f 100%);">
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
        <div class="absolute top-[-50%] right-[-10%] w-[600px] h-[600px] bg-[#fc880d]/8 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-[-30%] left-[-10%] w-[400px] h-[400px] bg-[#fc880d]/5 rounded-full blur-[100px] pointer-events-none"></div>
        
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 pt-14 pb-10 md:pt-20 md:pb-14 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 bg-white/[0.06] backdrop-blur-sm text-[#fc880d] font-bold tracking-widest uppercase text-[11px] px-5 py-2.5 rounded-full mb-5 border border-white/[0.08]">
                <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Workshops & Classes
            </span>
            <h1 class="font-serif text-4xl md:text-5xl lg:text-[3.6rem] text-white font-bold mb-4 leading-[1.15] tracking-tight">Learn, Create & <span class="text-[#fc880d]">Master</span></h1>
            <p class="text-white/50 text-[15px] max-w-xl mx-auto mb-8 leading-relaxed">Explore our professional culinary, baking, and craft workshops. Small batches, hands-on learning, and certified courses.</p>

            <!-- Stats Bar -->
            <div class="inline-flex flex-wrap items-center justify-center gap-3 md:gap-1 bg-white/[0.04] backdrop-blur-sm rounded-2xl border border-white/[0.08] px-2 py-2 md:px-3">
                <div class="flex items-center gap-2 text-white/80 text-[13px] font-medium px-4 py-2">
                    <div class="w-8 h-8 rounded-lg bg-[#fc880d]/15 flex items-center justify-center"><i data-lucide="users" class="w-4 h-4 text-[#fc880d]"></i></div>
                    <span>10,000+ Students</span>
                </div>
                <div class="hidden md:block w-px h-8 bg-white/10"></div>
                <div class="flex items-center gap-2 text-white/80 text-[13px] font-medium px-4 py-2">
                    <div class="w-8 h-8 rounded-lg bg-[#fc880d]/15 flex items-center justify-center"><i data-lucide="award" class="w-4 h-4 text-[#fc880d]"></i></div>
                    <span>Certified</span>
                </div>
                <div class="hidden md:block w-px h-8 bg-white/10"></div>
                <div class="flex items-center gap-2 text-white/80 text-[13px] font-medium px-4 py-2">
                    <div class="w-8 h-8 rounded-lg bg-[#fc880d]/15 flex items-center justify-center"><i data-lucide="leaf" class="w-4 h-4 text-[#fc880d]"></i></div>
                    <span>100% Eggless</span>
                </div>
                <div class="hidden md:block w-px h-8 bg-white/10"></div>
                <div class="flex items-center gap-2 text-white/80 text-[13px] font-medium px-4 py-2">
                    <div class="w-8 h-8 rounded-lg bg-[#fc880d]/15 flex items-center justify-center"><i data-lucide="star" class="w-4 h-4 text-[#fc880d]"></i></div>
                    <span>4.9 Rated</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COURSES GRID ===== -->
    <section class="py-10 md:py-14 bg-[#FEFCF9] relative overflow-hidden" id="courses-section">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[#fc880d]/[0.03] rounded-full blur-[100px] pointer-events-none"></div>
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            
            <!-- Header + Filters -->
            <div class="mb-8">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6">
                    <div>
                        <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-[11px] mb-2">
                            <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Browse All
                        </span>
                        <h2 class="font-serif text-2xl md:text-3xl font-bold text-dark">Our Workshops & Courses</h2>
                    </div>
                    <p id="course-count" class="text-[13px] text-muted font-medium bg-[#FAF7F2] px-4 py-2 rounded-full border border-[#EDE4D8]">Showing all 27 courses</p>
                </div>

                <!-- Filter Tabs -->
                <div class="flex flex-wrap gap-2">
                    <button onclick="filterCourses('all')" data-filter="all" class="filter-pill active text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 cursor-pointer">All Courses</button>
                    <button onclick="filterCourses('baking')" data-filter="baking" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Baking</button>
                    <button onclick="filterCourses('pastries')" data-filter="pastries" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Pastries</button>
                    <button onclick="filterCourses('cooking')" data-filter="cooking" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Chinese</button>
                    <button onclick="filterCourses('mughlai')" data-filter="mughlai" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Mughlai</button>
                    <button onclick="filterCourses('italian')" data-filter="italian" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Italian</button>
                    <button onclick="filterCourses('mexican')" data-filter="mexican" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Mexican</button>
                    <button onclick="filterCourses('thai')" data-filter="thai" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Thai</button>
                    <button onclick="filterCourses('lebanese')" data-filter="lebanese" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Lebanese</button>
                    <button onclick="filterCourses('chaat')" data-filter="chaat" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Street Food</button>
                    <button onclick="filterCourses('packing')" data-filter="packing" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Packing</button>
                    <button onclick="filterCourses('daily')" data-filter="daily" class="filter-pill text-[12px] font-bold px-4 py-2 rounded-full border border-gray-200 bg-white text-gray-600 cursor-pointer">Daily Cooking</button>
                </div>
            </div>

            <!-- No results message -->
            <div id="no-results" class="hidden text-center py-16">
                <i data-lucide="search-x" class="w-12 h-12 text-gray-300 mx-auto mb-4"></i>
                <p class="text-muted font-medium">No courses found in this category.</p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="courses-grid">

                <a href="/courses/chocolate-lollipop" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="pastries">
                    <div class="relative overflow-hidden aspect-[4/3]">
    <img src="/assets/images/choco_lollipop_2_1776079166490.png" alt="Chocolate Lollipop & Candy" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#eab308] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Chocolate Making</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Chocolate Lollipop & Candy Treats</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">43 Chocolate Varieties — Fruit & Nut, Marzipan, Center Filled Truffle, and many more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11:30 AM – 5:00 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/veg-snacks" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="chaat">
                    <div class="relative overflow-hidden aspect-[4/3]">
    <img src="/assets/images/veg_snacks_1_1776079312785.png" alt="Veg Snacks & Starters" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Vegetarian</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Snacks & Starters</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Veg Snacks, Starters & Dips</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Learn to master 13 delicious snacks & 5 special dips — Paneer Poppers, Schezwan Fingers & more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11 AM – 5:30 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/chocolate-truffle-cake" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="baking">
                    <div class="relative overflow-hidden aspect-[4/3]">
    <img src="/assets/images/truffle_cake_1_1776079412900.png" alt="Chocolate Truffle Cake" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Masterclass</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cake Baking</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Chocolate Truffle Cake Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">5 Yummy variants with silkiest truffle frosting, sharp edges, and professional garnishing.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 1 Day</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/baklava-turkish" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="pastries">
                    <div class="relative overflow-hidden aspect-[4/3]">
    <img src="/assets/images/baklava_1_1776079377771.png" alt="Baklava & Turkish Desserts" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Online</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Middle Eastern</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Baklava & Turkish Desserts Workshop</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">15 Varieties of traditional desserts, eggless phyllo sheet making, storage and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="monitor-play" class="w-3 h-3 text-[#fc880d]"></i> Online</span>
                            <span class="flex items-center gap-1"><i data-lucide="award" class="w-3 h-3 text-[#fc880d]"></i> Sugar-Free & Vegan</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/tea-time-cakes" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="baking">
                    <div class="relative overflow-hidden aspect-[4/3]">
    <img src="/assets/images/healthy_tea_cakes_1_1776079433142.png" alt="Tea Time Cakes" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Healthy</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Tea Cakes</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Tea Time Dry, Healthy & Sugar-Free Cakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">16 Eggless varieties — super soft, moist, healthy English cakes, and more exciting flavors.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 12:30 PM – 5:30 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="monitor-play" class="w-3 h-3 text-[#fc880d]"></i> Online / Studio</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/home-baker" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="baking">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <div class="card-overlay absolute inset-0 bg-[#fc880d]/10"></div>
                        <span class="absolute top-3 left-3 bg-[#fc880d] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Bestseller</span>
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold px-2.5 py-1 rounded-full">30+ Recipes</span>
                        <div class="card-cta absolute bottom-3 left-3 right-3">
                            <span class="w-full bg-white/95 backdrop-blur-sm text-dark font-bold py-2 rounded-xl text-[12px] flex items-center justify-center gap-1.5 shadow-lg">View Details <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></span>
                        </div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Baking & Icing</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Professional Cake Baking Master Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Learn 30+ cake varieties from scratch — Wedding Cake, Pinata, Geode, Red Velvet, and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/sugar-craft" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="cake-decorating">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/sugar-craft-1.jpeg" alt="Sugar Craft Rolled Fondant Cakes" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-green-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cake Decorating</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Sugar Craft Rolled Fondant Cakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Fondant, ganache, sugar paste, flowers, figures and professional cake covering.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/subways-sauces" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="subways">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/91.jpeg" alt="Subways, Dips, Burger & Kababs" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Popular</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Subways & Dips</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Subways, Dips, Burger & Kababs</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">15 subways + 30+ dips & sauces, burgers and kababs. 100% vegetarian.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/kids-special" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="kids">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/121.jpeg" alt="Kids Special Workshop" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Kids</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Kids Special</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Kids Special — Healthy Cooking & Baking</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Pizza, Cupcakes, Mocktails, Pasta & more! Fun-filled learning for ages 6-18.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11 AM – 2 PM</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/swiss-roll-pastries" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="pastries">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/71.jpeg" alt="Swiss Roll & Pastries Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Pastries & Baking</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Swiss Roll & Pastries Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">29 varieties — master slitting, soaking, filling and finishing like a pro.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/chinese" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="cooking">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/131.jpeg" alt="Chinese Cooking Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Chinese Cooking</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Chinese Cooking Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20+ recipes — Momos, Manchurian, Noodles, Spring Rolls & Schezwan Fried Rice.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 12 – 5 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/mughlai" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="mughlai">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/81.jpeg" alt="Veg Mughlai Food Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Popular</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Mughlai Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Veg Mughlai Food Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20+ dishes — Biryani, Korma, Malai Kofta, Paneer Butter Masala and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/italian" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="italian">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Italian Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Italian Food Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20+ recipes — Pizzas, Pastas, Risottos, Tiramisu and much more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/brownies" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="pastries">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/brownie-1.jpeg" alt="Eggless Brownies" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Brownies & Bars</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Eggless Brownies, Crownies, Brookies & Blondies</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">18 eggless recipes — fudgy, cakey, chewy and everything in between.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/cheesecakes" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="cheesecakes">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/cheesecake-1.jpeg" alt="Eggless Cheesecakes" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cheesecakes</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Eggless Gelatin-Free Cheesecakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Baked & no-bake cheesecakes. Learn to make cream cheese & mascarpone at home.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/tea-cakes" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="baking">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/healthy_tea_cakes_1_1776079433142.png" alt="Super Soft Healthy Time Cakes" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Tea Cakes</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Super Soft Healthy Tea Cakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Eggless tea cakes with different flavors — moist, fluffy and incredibly easy.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/bread-baking" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="bread">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/101.jpeg" alt="Exotic Healthy Bread Baking Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Bread Baking</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Exotic Healthy Bread Baking Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">34 breads over 2 days — Croissant, Focaccia, Baguette, Pizza, Cinnamon Rolls and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/cookies-biscuits" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="cookies">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/111.jpeg" alt="Bakery Style Cookies & Biscuits" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cookies & Biscuits</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Bakery & Subway Style Cookies & Biscuits</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">33 varieties — Choco Chip, Red Velvet, Naan Khatai, Pinwheel, Bourbon & more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/mexican" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="mexican">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/143.jpeg" alt="Mexican Cuisine Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Mexican Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Authentic & Exotic Mexican Cuisines</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20 practicals, 35 recipes — Tacos, Enchiladas, Burritos, Nachos, Sauces & much more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11:30 AM – 5 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/thai" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="thai">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/thai-cuisine-hero.png" alt="Thai Cuisine Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Thai Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Thai Cuisine Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">21+ recipes — Thai Curries, Pad Noodles, Satay, Tom Yum Soup, Fried Rice & more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11:30 AM – 4:30 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/variety-combo" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="combo">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/variety-combo-hero.png" alt="Variety Combo Package" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Combo</span>
                        <span class="absolute top-3 right-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Discounted</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Multi-Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Variety Combo Package</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">80+ recipes, 9 cuisines, 13 days — Sweets, Snacks, Italian, Mughlai, Punjabi, South Indian, Chinese, Mexican & Thai.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 10:30 AM – 1:30 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="calendar-days" class="w-3 h-3 text-[#fc880d]"></i> 13 Days</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/lebanese-1" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="lebanese">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/lebanese-cuisine-hero.png" alt="Lebanese Cuisine Part-1" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Lebanese Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Online Lebanese Cuisine Part-1</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">19+ recipes — Falafel, Hummus, Manakeesh, Pita Bread, Basbousa & much more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11 AM – 5 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/lebanese-2" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="lebanese">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/lebanese-shawarma.png" alt="Lebanese Cuisine Part-2" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Online</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Lebanese Cuisine</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Online Lebanese Cuisine Part-2</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">18 recipes — Paneer Shawarma, Kunafa, Fattoush, Baba Ganoush, Kibeh & more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="monitor-play" class="w-3 h-3 text-[#fc880d]"></i> Online (Facebook)</span>
                            <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3 text-[#fc880d]"></i> ₹3,000</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/delhi-chaat" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="chaat">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/161.jpeg" alt="Authentic Delhi Chaat Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Street Food</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Authentic Delhi Chaat</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">30+ recipes — Samosa, Gol Gappa, Pav Bhaji, Chole Bhature, Dabeli, Raj Kachori & much more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11:30 AM – 5 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/trousseau-packing" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="packing">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/181.jpeg" alt="Trousseau Packing Class" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Crafts & Packing</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Trousseau Packing & Gift Wrapping</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Professional course: Designer trays, ring platters, bridal trousseau, baskets & bows.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 20 Classes</span>
                            <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3 text-[#fc880d]"></i> ₹35,000</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/everyday-cooking" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="daily">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/191.jpeg" alt="Basic Everyday Cookery" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Essential</span>
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold px-2.5 py-1 rounded-full">68+ Items</span>
                        <div class="card-cta absolute bottom-3 left-3 right-3">
                            <span class="w-full bg-white/95 backdrop-blur-sm text-dark font-bold py-2 rounded-xl text-[12px] flex items-center justify-center gap-1.5 shadow-lg">View Details <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></span>
                        </div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Daily Cooking</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">Basic Everyday Kitchen Expert</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">68 practical recipes: Breads, rice, dals, curries, sabzis, snacks, and basics.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 5 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3 text-[#fc880d]"></i> ₹8,500</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/millet-cookies" class="course-card course-card-new block bg-white rounded-2xl overflow-hidden border border-gray-100/80" data-category="cookies">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/201.jpeg" alt="Millet Cookies Masterclass" class="card-img w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">100% Eggless</span>
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold px-2.5 py-1 rounded-full">4-in-1 Class</span>
                        <div class="card-cta absolute bottom-3 left-3 right-3">
                            <span class="w-full bg-white/95 backdrop-blur-sm text-dark font-bold py-2 rounded-xl text-[12px] flex items-center justify-center gap-1.5 shadow-lg">View Details <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i></span>
                        </div>
                    </div>
                    <div class="p-4 pb-5">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cookies & Biscuits</p>
                        <h3 class="font-bold text-dark text-[15px] leading-snug mb-2">4-in-1 Gourmet Millet Cookies Masterclass</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Millet Cookies + Classic Cookies + Centre-Filled Gooey Cookies + Cookie Tins. No Maida, No Atta!</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US — Bento with real images ===== -->
    <section class="py-14 md:py-20 text-white relative overflow-hidden" style="background: linear-gradient(135deg, #1a1512 0%, #2A2522 40%, #3d2e1f 100%);">
        <div class="absolute -top-[10%] -left-[5%] w-[500px] h-[500px] bg-[#fc880d] rounded-full mix-blend-multiply filter blur-[120px] opacity-15"></div>
        <div class="absolute bottom-[10%] -right-[5%] w-[500px] h-[500px] bg-[#fc880d] rounded-full mix-blend-multiply filter blur-[120px] opacity-8"></div>

        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Content Side -->
                <div>
                    <span class="inline-block px-4 py-1.5 rounded-full bg-mustard/20 text-mustard border border-mustard/30 text-xs font-bold uppercase tracking-widest mb-5">
                        The Gauri Difference
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight mb-5 leading-tight">Baked with Passion, Delivered with Care.</h2>
                    <p class="text-white/60 text-[15px] leading-relaxed mb-8">
                        We don't just teach recipes — we craft experiences. Every course is 100% hands-on, eggless, and taught in small batches for personalized attention.
                    </p>

                    <div class="space-y-6">
                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-white group-hover:bg-[#fc880d] group-hover:border-[#fc880d] transition-all duration-300">
                                <i data-lucide="award" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1 font-serif text-white">Premium Ingredients</h4>
                                <p class="text-white/50 text-[13px] leading-relaxed">Finest Belgian chocolate, real vanilla, and organic flour. No compromises on quality.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-white group-hover:bg-[#fc880d] group-hover:border-[#fc880d] transition-all duration-300">
                                <i data-lucide="leaf" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1 font-serif text-white">100% Preservative-Free</h4>
                                <p class="text-white/50 text-[13px] leading-relaxed">Every item is baked fresh without artificial enhancers. Health meets flavor.</p>
                            </div>
                        </div>

                        <div class="flex gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-white group-hover:bg-[#fc880d] group-hover:border-[#fc880d] transition-all duration-300">
                                <i data-lucide="chef-hat" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1 font-serif text-white">Handcrafted Artistry</h4>
                                <p class="text-white/50 text-[13px] leading-relaxed">From mirror glazes to hand-piped buttercream — learn techniques used by professionals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Side — Bento with real course images -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex flex-col gap-3 pt-10">
                            <div class="rounded-2xl overflow-hidden aspect-[4/5] shadow-2xl relative">
                                <img src="/assets/images/cake-wedding-purple.jpeg" alt="Cake Baking" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-[#fc880d] rounded-2xl p-5 text-dark flex flex-col justify-center">
                                <i data-lucide="star" class="w-7 h-7 mb-2 fill-current text-dark"></i>
                                <h4 class="font-bold font-serif text-lg mb-0.5">4.9 Rating</h4>
                                <p class="text-sm font-medium opacity-80">by 10,000+ Students</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="bg-white/5 border border-white/10 rounded-2xl p-5 text-white text-center flex flex-col items-center justify-center aspect-square">
                                <p class="text-4xl font-bold font-serif mb-1 text-[#fc880d]">200+</p>
                                <p class="text-sm text-white/60">Recipes Taught</p>
                            </div>
                            <div class="rounded-2xl overflow-hidden aspect-[4/5] shadow-2xl relative">
                                <img src="/assets/images/91.jpeg" alt="Subway & Sauces" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== CTA STRIP ===== -->
    <section class="relative overflow-hidden" style="background: linear-gradient(135deg, #fc880d 0%, #e27a0c 50%, #d06b08 100%);">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 py-6 flex flex-col sm:flex-row justify-between items-center gap-4 relative z-10">
            <div class="flex items-center gap-3 text-white">
                <i data-lucide="zap" class="w-5 h-5 flex-shrink-0"></i>
                <p class="font-semibold text-sm md:text-base">Ready to start your culinary journey? Seats are limited — register now!</p>
            </div>
            <a href="https://wa.me/918527780181" target="_blank" class="bg-white text-[#e27a0c] px-6 py-2.5 rounded-full font-bold text-sm hover:bg-gray-50 transition-all shadow-lg shrink-0 inline-flex items-center gap-2">
                <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Now
            </a>
        </div>
    </section>

    <!-- ===== FAQS SECTION ===== -->
    <section class="py-12 md:py-16 bg-[#FAF7F2] relative">
        <div class="max-w-[800px] mx-auto px-6 md:px-12">
            <div class="text-center mb-10">
                <span class="inline-flex items-center justify-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                    <i data-lucide="help-circle" class="w-3.5 h-3.5"></i> Common Questions
                </span>
                <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-white rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark text-base">
                        <span>Are all courses 100% eggless?</span>
                        <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                        Yes! All baking and dessert workshops at Gauri Creations are 100% eggless and pure vegetarian. We believe great food doesn't need eggs to be exceptional.
                    </div>
                </details>

                <details class="group bg-white rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark text-base">
                        <span>How do I book a cooking workshop?</span>
                        <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                        Simply reach out to us via WhatsApp at +91 8527780181 or call +91 9999453960 to secure your spot. Classes fill up quickly and are kept small for personalized attention.
                    </div>
                </details>

                <details class="group bg-white rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark text-base">
                        <span>What's included in the course fee?</span>
                        <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                        Every course includes hands-on practical training, all ingredients & tools, printed recipe booklet, lunch & refreshments, certificate of completion, and post-class support.
                    </div>
                </details>

                <details class="group bg-white rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark text-base">
                        <span>How many students per batch?</span>
                        <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                        We keep batches small — only 6-7 students per class. This ensures every student gets personalized attention and hands-on practice from scratch to finish.
                    </div>
                </details>

                <details class="group bg-white rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark text-base">
                        <span>Where are the classes conducted?</span>
                        <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>
                    </summary>
                    <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                        All workshops are conducted at our studio in Gurgaon, Sector 38, Haryana. The studio is fully equipped with professional-grade baking and cooking tools.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <script>
    // Course filtering
    function filterCourses(category) {
        const cards = document.querySelectorAll('.course-card');
        const btns = document.querySelectorAll('.filter-pill');
        let count = 0;

        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = '';
                count++;
            } else {
                card.style.display = 'none';
            }
        });

        btns.forEach(btn => {
            btn.classList.remove('active');
            btn.classList.add('bg-white', 'text-gray-600');
            if (btn.dataset.filter === category) {
                btn.classList.add('active');
                btn.classList.remove('bg-white', 'text-gray-600');
            }
        });

        document.getElementById('course-count').textContent = `Showing ${count} course${count !== 1 ? 's' : ''}`;
        document.getElementById('no-results').classList.toggle('hidden', count > 0);
    }
    </script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
