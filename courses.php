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
    <section class="bg-dark py-12 md:py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-mustard/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 bg-mustard/15 text-mustard font-bold tracking-widest uppercase text-xs px-4 py-2 rounded-full mb-5">
                <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Workshops & Classes
            </span>
            <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight">Learn, Create & <span class="text-mustard">Master</span></h1>
            <p class="text-white/60 text-lg max-w-2xl mx-auto mb-8">Explore our professional culinary, baking, and craft workshops. Small batches, hands-on learning, and certified courses.</p>
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
    <section class="py-16 md:py-20 bg-[#FAF7F2] relative overflow-hidden" id="courses-section">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="mb-10 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div>
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-2">
                        <i data-lucide="book-open" class="w-3.5 h-3.5"></i> All Courses
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl font-bold text-dark">Our Workshops & Courses</h2>
                </div>
                <p id="course-count" class="text-sm text-muted font-medium">Showing all 9 courses</p>
            </div>

            <!-- No results message -->
            <div id="no-results" class="hidden text-center py-16">
                <i data-lucide="search-x" class="w-12 h-12 text-gray-300 mx-auto mb-4"></i>
                <p class="text-muted font-medium">No courses found in this category.</p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="courses-grid">
                <!-- Course home-baker -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="baking">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/cupcakes-brownies-box.jpeg" alt="Start your own business as home baker" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#fc880d] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Bestseller</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Baking & Icing</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/home-baker">Start Your Own Business as Home Baker</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 15th, 16th & 17th March</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 11:30 am – 5:30 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon Sec 38</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Complete hands-on class. Learn complete icing & baking from scratch. Over 30 varieties covered.</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Certified</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Lunch Included</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Take-Home Cake</span>
                        </div>
                        <a href="/courses/home-baker" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course sugar-craft -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="cake-decorating">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/caterpillar-cupcakes.jpeg" alt="Sugar Craft Cake Decorating" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">New</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Cake Decorating</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/sugar-craft">Sugar Craft Cake Decorating Course</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 8th & 9th April</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 11:30 am – 6:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Learn all techniques to decorate cakes with fondant, ganache, sugar paste, flowers and more!</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Certified</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">All Materials</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Lunch Included</span>
                        </div>
                        <a href="/courses/sugar-craft" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course italian -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="italian">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Popular</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Italian</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/italian">Italian Food Class</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 4th & 5th January</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 12:00 pm – 4:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Karol Bagh</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Learn 20+ Italian recipes — Pizzas, Pastas, Risottos, Tiramisu and much more at home!</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">20+ Recipes</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Printed Recipes</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Lunch Included</span>
                        </div>
                        <a href="/courses/italian" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course mughlai -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="mughlai">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/snacks-spread-collage.jpeg" alt="Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Popular</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Mughlai</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/mughlai">Mughlai Food Class</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 22nd & 23rd March</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 12:00 pm – 5:30 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon Sec 38</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Mughlai food is known for its richness and exotic spices. Learn 20+ traditional beloved recipes.</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">20+ Recipes</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">100% Vegetarian</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Lunch Included</span>
                        </div>
                        <a href="/courses/mughlai" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course swiss-roll-pastries -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="pastries">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/strawberry-cheesecake.jpeg" alt="Swiss Roll & Pastries Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#dc2626] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Specialty</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Pastries</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/swiss-roll-pastries">Swiss Roll & Pastries Class</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 23rd & 24th May</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 11:00 am – 4:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon
                            </div>
                        </div>

                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Learn delicious Swiss rolls & pastries with different shapes. Master slitting, soaking, filling, and finishing.</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">18 Varieties</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Eggless</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Samples Take Home</span>
                        </div>
                        <a href="/courses/swiss-roll-pastries" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course brownies -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="pastries">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/chocolate-mousse-cups.jpeg" alt="Eggless Brownies" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#dc2626] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Trending</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Brownies</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/brownies">Eggless Brownies, Crownies, Brookies & Blondies</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 23rd & 24th July</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 12:00 pm – 5:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">From fudgy brownie to cakey brownie — 18 eggless recipes including brookies, crownies & blondies!</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">100% Eggless</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Samples Take Home</span>
                        </div>
                        <a href="/courses/brownies" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course kids-special -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="kids">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/kids-yellow-aprons-group.jpeg" alt="Kids Special Workshop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#ef4444] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Kids Fav</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Kids Special</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/kids-special">Kids Special Workshop (Mini Chefs)</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 8th, 9th & 10th June</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 12:00 pm – 3:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Calling all Mini Chefs! Make delicious, healthy food while having fun. 18–20 practicals over 3 days.</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Age 6–18 yrs</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Certificate</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Fun & Interactive</span>
                        </div>
                        <a href="/courses/kids-special" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course subways-sauces -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="subways">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/club-sandwich-fries.jpeg" alt="Subways & Sauces" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">New</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Subways & Dips</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/subways-sauces">Subways, Sauces, Fillings & Kababs</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 28th & 29th March</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 11:30 am – 6:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon Sec 38</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">30+ dips & sauces, restaurant-style subways and kababs. 100% Pure Vegetarian.</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">30+ Sauces</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">100% Veg</span>
                        </div>
                        <a href="/courses/subways-sauces" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- Course cheesecakes -->
                <div class="course-card bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden" data-category="subways">
                    <div class="relative overflow-hidden h-[240px] bg-[#FFF8F0]">
                        <img src="/assets/images/dessert-spread-table.jpeg" alt="Eggless Cheesecakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 left-4 bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1.5 rounded-full tracking-wide shadow-md">Premium</span>
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">Cheesecakes</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-dark text-lg mb-3 leading-tight group-hover:text-[#fc880d] transition-colors"><a href="/courses/cheesecakes">Eggless Gelatin-Free Cheesecakes</a></h3>
                        <div class="flex flex-col gap-1.5 mb-4 text-[12px] text-gray-500 font-medium">
                            <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 21st & 22nd December</div>
                            <div class="flex items-center gap-2"><i data-lucide="clock" class="w-3.5 h-3.5 text-[#fc880d]"></i> 11:30 am – 6:00 pm</div>
                            <div class="flex items-center gap-2"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#fc880d]"></i> Gurgaon</div>
                        </div>
                        <p class="text-gray-400 text-[13px] leading-relaxed mb-5 line-clamp-2">Rich, creamy, tangy-sweet perfection — baked & no-baked, gelatin-free & eggless cheesecakes.</p>
                        <div class="flex flex-wrap gap-1.5 mb-5">
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Gelatin Free</span>
                            <span class="text-[10px] bg-[#FFF8F0] text-[#fc880d] border border-[#fc880d]/20 px-2.5 py-1 rounded-full font-semibold">Homemade Cream Cheese</span>
                        </div>
                        <a href="/courses/cheesecakes" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-3 px-5 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(252,136,13,0.3)]">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== UNIQUE WHY CHOOSE US ===== -->
    <section class="py-16 md:py-20 bg-[#2A2522] text-white relative overflow-hidden">
        <!-- Floating shapes background -->
        <div class="absolute -top-[10%] -left-[5%] w-96 h-96 bg-[#fc880d] rounded-full mix-blend-multiply filter blur-[100px] opacity-20"></div>
        <div class="absolute bottom-[10%] -right-[5%] w-96 h-96 bg-[#fc880d] rounded-full mix-blend-multiply filter blur-[100px] opacity-10"></div>
        
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <!-- Content Side -->
                <div>
                    <span class="inline-block px-4 py-1.5 rounded-full bg-mustard/20 text-mustard border border-mustard/30 text-xs font-bold uppercase tracking-widest mb-6">
                        The Gauri Difference
                    </span>
                    <h2 class="font-serif text-4xl md:text-5xl lg:text-5xl font-bold tracking-tight mb-6 leading-tight">Baked with Passion, Delivered with Care.</h2>
                    <p class="text-white/60 text-[16px] leading-relaxed mb-10 font-light">
                        We don't just bake; we craft experiences. Every pastry, cake, and cookie is a testament to our commitment to excellence, combining time-honored techniques with a modern culinary twist.
                    </p>

                    <div class="space-y-8">
                        <div class="flex gap-5 group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-white group-hover:bg-[#fc880d] group-hover:border-[#fc880d] transition-all duration-300">
                                <i data-lucide="award" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2 font-serif text-white">Premium Ingredients</h4>
                                <p class="text-white/50 text-[14px] leading-relaxed">We source the finest Belgian chocolate, authentic Madagascar vanilla bean, and high-quality organic flour. No compromises.</p>
                            </div>
                        </div>

                        <div class="flex gap-5 group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-white group-hover:bg-[#fc880d] group-hover:border-[#fc880d] transition-all duration-300">
                                <i data-lucide="leaf" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2 font-serif text-white">100% Preservative-Free</h4>
                                <p class="text-white/50 text-[14px] leading-relaxed">Our focus is on your health as much as it is on flavor. Every item is baked fresh without artificial enhancers.</p>
                            </div>
                        </div>

                        <div class="flex gap-5 group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center shrink-0 border border-white/10 text-white group-hover:bg-[#fc880d] group-hover:border-[#fc880d] transition-all duration-300">
                                <i data-lucide="chef-hat" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2 font-serif text-white">Handcrafted Artistry</h4>
                                <p class="text-white/50 text-[14px] leading-relaxed">Our chefs pour their heart into the intricate details, from delicate mirror glazes to hand-piped artisanal buttercream.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Side / Bento Look -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col gap-4 pt-12">
                            <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-2xl relative">
                                <img src="https://images.unsplash.com/photo-1558961363-a20c576572a1?q=80&w=600" alt="Baking process" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-dark/20 mix-blend-overlay"></div>
                            </div>
                            <div class="bg-[#fc880d] rounded-3xl p-6 text-dark flex flex-col justify-center">
                                <i data-lucide="star" class="w-8 h-8 mb-3 fill-current text-dark"></i>
                                <h4 class="font-bold font-serif text-xl mb-1">5-Star</h4>
                                <p class="text-sm font-medium opacity-80">Rated by Customers</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="bg-white/5 border border-white/10 rounded-3xl p-6 text-white text-center flex flex-col items-center justify-center aspect-square">
                                <p class="text-4xl font-bold font-serif mb-2 text-[#fc880d]">200+</p>
                                <p class="text-sm text-white/60">Workshops Conducted</p>
                            </div>
                            <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-2xl relative">
                                <img src="https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62?q=80&w=600" alt="Presentation" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-dark/20 mix-blend-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== FAQS SECTION ===== -->
    <section class="py-16 md:py-20 bg-[#FAF7F2] relative">
        <div class="max-w-[800px] mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <span class="inline-flex items-center justify-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                    <i data-lucide="help-circle" class="w-3.5 h-3.5"></i> Common Questions
                </span>
                <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-100 rounded-2xl overflow-hidden hover:border-[#fc880d]/50 transition-colors bg-gray-50/50">
                    <button class="w-full text-left p-6 flex items-center justify-between focus:outline-none" onclick="toggleFaq('rec-1')">
                        <span class="font-bold text-dark text-lg pr-4">Do you offer eggless options?</span>
                        <div class="w-8 h-8 shrink-0 rounded-full bg-white flex items-center justify-center text-[#fc880d] border border-gray-200 shadow-sm" id="rec-icon-1" style="transition: transform 0.3s;">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 hidden" id="rec-content-1">
                        <p class="text-gray-500 font-light text-[15px] leading-relaxed">Yes! Almost all of our desserts and cakes can be completely customized to be 100% eggless. Just mention your preference when placing the order.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-gray-100 rounded-2xl overflow-hidden hover:border-[#fc880d]/50 transition-colors bg-gray-50/50">
                    <button class="w-full text-left p-6 flex items-center justify-between focus:outline-none" onclick="toggleFaq('rec-2')">
                        <span class="font-bold text-dark text-lg pr-4">How far in advance do I need to place an order?</span>
                        <div class="w-8 h-8 shrink-0 rounded-full bg-white flex items-center justify-center text-[#fc880d] border border-gray-200 shadow-sm" id="rec-icon-2" style="transition: transform 0.3s;">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 hidden" id="rec-content-2">
                        <p class="text-gray-500 font-light text-[15px] leading-relaxed">For our signature cakes and large batches of pasties, we require at least 24 hours of notice. For custom tiered cakes or large event orders, we would appreciate a 1-week notice.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-gray-100 rounded-2xl overflow-hidden hover:border-[#fc880d]/50 transition-colors bg-gray-50/50">
                    <button class="w-full text-left p-6 flex items-center justify-between focus:outline-none" onclick="toggleFaq('rec-3')">
                        <span class="font-bold text-dark text-lg pr-4">Do you provide delivery services?</span>
                        <div class="w-8 h-8 shrink-0 rounded-full bg-white flex items-center justify-center text-[#fc880d] border border-gray-200 shadow-sm" id="rec-icon-3" style="transition: transform 0.3s;">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="px-6 pb-6 hidden" id="rec-content-3">
                        <p class="text-gray-500 font-light text-[15px] leading-relaxed">Yes, we provide safe and hygienic doorstep delivery within the city limits. A small delivery fee may apply depending on your exact location distance.</p>
                    </div>
                </div>
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

    // FAQ toggle
    function toggleFaq(id) {
        const content = document.getElementById(id.replace('rec-', 'rec-content-'));
        const icon = document.getElementById(id.replace('rec-', 'rec-icon-'));
        if (!content) return;
        content.classList.toggle('hidden');
        if (icon) icon.style.transform = content.classList.contains('hidden') ? '' : 'rotate(180deg)';
    }
    </script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
