<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses & Workshops | Gauri Creations</title>
    <?php include 'includes/head.php'; ?>
</head>

<?php $activePage = "courses"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include 'includes/nav.php'; ?>

    <!-- ===== PAGE HERO ===== -->
    <section class="bg-dark py-10 md:py-14 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 bg-mustard/15 text-mustard font-bold tracking-widest uppercase text-xs px-4 py-2 rounded-full mb-4">
                <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Workshops & Classes
            </span>
            <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-3 leading-tight">Learn, Create & <span class="text-mustard">Master</span></h1>
            <p class="text-white/60 text-base max-w-2xl mx-auto mb-6">Explore our professional culinary, baking, and craft workshops. Small batches, hands-on learning, and certified courses.</p>
            <div class="flex flex-wrap items-center justify-center gap-4 text-sm">
                <div class="flex items-center gap-2 text-white/70"><i data-lucide="users" class="w-4 h-4 text-mustard"></i> 10,000+ Students</div>
                <div class="w-1 h-1 bg-white/30 rounded-full hidden sm:block"></div>
                <div class="flex items-center gap-2 text-white/70"><i data-lucide="award" class="w-4 h-4 text-mustard"></i> Certified Courses</div>
                <div class="w-1 h-1 bg-white/30 rounded-full hidden sm:block"></div>
                <div class="flex items-center gap-2 text-white/70"><i data-lucide="leaf" class="w-4 h-4 text-mustard"></i> 100% Eggless</div>
                <div class="w-1 h-1 bg-white/30 rounded-full hidden sm:block"></div>
                <div class="flex items-center gap-2 text-white/70"><i data-lucide="star" class="w-4 h-4 text-mustard"></i> 4.9 Rated</div>
            </div>
        </div>
    </section>

    <!-- ===== COURSES GRID ===== -->
    <section class="py-12 md:py-16 bg-white relative overflow-hidden" id="courses-section">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="mb-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div>
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-2">
                        <i data-lucide="book-open" class="w-3.5 h-3.5"></i> All Courses
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl font-bold text-dark">Our Workshops & Courses</h2>
                </div>
                <p id="course-count" class="text-sm text-muted font-medium">Showing all 15 courses</p>
            </div>

            <!-- No results message -->
            <div id="no-results" class="hidden text-center py-16">
                <i data-lucide="search-x" class="w-12 h-12 text-gray-300 mx-auto mb-4"></i>
                <p class="text-muted font-medium">No courses found in this category.</p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5" id="courses-grid">

                <a href="/courses/home-baker" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="baking">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-[#fc880d] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Bestseller</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Baking & Icing</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Professional Cake Baking Master Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Learn 30+ cake varieties from scratch — Wedding Cake, Pinata, Geode, Red Velvet, and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/sugar-craft" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="cake-decorating">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/sugar-craft-1.jpeg" alt="Sugar Craft Rolled Fondant Cakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-green-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Cake Decorating</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Sugar Craft Rolled Fondant Cakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Fondant, ganache, sugar paste, flowers, figures and professional cake covering.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/subways-sauces" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="subways">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/91.jpeg" alt="Subways, Dips, Burger & Kababs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Popular</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Subways & Dips</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Subways, Dips, Burger & Kababs</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">15 subways + 30+ dips & sauces, burgers and kababs. 100% vegetarian.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/kids-special" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="kids">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/121.jpeg" alt="Kids Special Workshop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Kids</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Kids Special</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Kids Special — Healthy Cooking & Baking</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Pizza, Cupcakes, Mocktails, Pasta & more! Fun-filled learning for ages 6-18.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11 AM – 2 PM</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/swiss-roll-pastries" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="pastries">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/71.jpeg" alt="Swiss Roll & Pastries Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Pastries & Baking</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Swiss Roll & Pastries Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">29 varieties — master slitting, soaking, filling and finishing like a pro.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/chinese" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="cooking">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/131.jpeg" alt="Chinese Cooking Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Chinese Cooking</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Chinese Cooking Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20+ recipes — Momos, Manchurian, Noodles, Spring Rolls & Schezwan Fried Rice.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 12 – 5 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/mughlai" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="mughlai">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/81.jpeg" alt="Veg Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">Popular</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Mughlai Cuisine</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Veg Mughlai Food Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20+ dishes — Biryani, Korma, Malai Kofta, Paneer Butter Masala and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/italian" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="italian">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Italian Cuisine</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Italian Food Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20+ recipes — Pizzas, Pastas, Risottos, Tiramisu and much more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/brownies" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="pastries">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/brownie-1.jpeg" alt="Eggless Brownies" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Brownies & Bars</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Eggless Brownies, Crownies, Brookies & Blondies</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">18 eggless recipes — fudgy, cakey, chewy and everything in between.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/cheesecakes" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="cheesecakes">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/cheesecake-1.jpeg" alt="Eggless Cheesecakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Cheesecakes</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Eggless Gelatin-Free Cheesecakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Baked & no-bake cheesecakes. Learn to make cream cheese & mascarpone at home.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/tea-cakes" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="baking">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/tea-cakes-1.jpeg" alt="Super Soft Healthy Time Cakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Tea Cakes</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Super Soft Healthy Tea Cakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">Eggless tea cakes with different flavors — moist, fluffy and incredibly easy.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/bread-baking" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="bread">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/101.jpeg" alt="Exotic Healthy Bread Baking Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Bread Baking</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Exotic Healthy Bread Baking Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">34 breads over 2 days — Croissant, Focaccia, Baguette, Pizza, Cinnamon Rolls and more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/cookies-biscuits" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="cookies">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/111.jpeg" alt="Bakery Style Cookies & Biscuits" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Cookies & Biscuits</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Bakery & Subway Style Cookies & Biscuits</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">33 varieties — Choco Chip, Red Velvet, Naan Khatai, Pinwheel, Bourbon & more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/mexican" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="mexican">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/141.jpeg" alt="Mexican Cuisine Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Mexican Cuisine</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Authentic & Exotic Mexican Cuisines</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">20 practicals, 35 recipes — Tacos, Enchiladas, Burritos, Nachos, Sauces & much more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11:30 AM – 5 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

                <a href="/courses/thai" class="course-card group block bg-white rounded-2xl border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-category="thai">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="/assets/images/thai-cuisine-hero.png" alt="Thai Cuisine Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full shadow-md">New</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1">Thai Cuisine</p>
                        <h3 class="font-bold text-dark text-[16px] leading-snug group-hover:text-[#fc880d] transition-colors mb-2">Thai Cuisine Class</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed line-clamp-2 mb-3">21+ recipes — Thai Curries, Pad Noodles, Satay, Tom Yum Soup, Fried Rice & more.</p>
                        <div class="flex items-center gap-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 11:30 AM – 4:30 PM</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US — Bento with real images ===== -->
    <section class="py-12 md:py-16 bg-[#2A2522] text-white relative overflow-hidden">
        <div class="absolute -top-[10%] -left-[5%] w-96 h-96 bg-[#fc880d] rounded-full mix-blend-multiply filter blur-[100px] opacity-20"></div>
        <div class="absolute bottom-[10%] -right-[5%] w-96 h-96 bg-[#fc880d] rounded-full mix-blend-multiply filter blur-[100px] opacity-10"></div>

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
        const btns = document.querySelectorAll('.filter-btn');
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
            btn.classList.remove('active', 'bg-[#fc880d]', 'text-white', 'shadow-sm');
            btn.classList.add('bg-[#FAF7F2]', 'text-gray-600', 'border', 'border-gray-200');
            if (btn.dataset.filter === category) {
                btn.classList.add('active', 'bg-[#fc880d]', 'text-white', 'shadow-sm');
                btn.classList.remove('bg-[#FAF7F2]', 'text-gray-600');
            }
        });

        document.getElementById('course-count').textContent = `Showing ${count} course${count !== 1 ? 's' : ''}`;
        document.getElementById('no-results').classList.toggle('hidden', count > 0);
    }
    </script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
