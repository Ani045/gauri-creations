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
                <p id="course-count" class="text-sm text-muted font-medium">Showing all 10 courses</p>
            </div>

            <!-- No results message -->
            <div id="no-results" class="hidden text-center py-16">
                <i data-lucide="search-x" class="w-12 h-12 text-gray-300 mx-auto mb-4"></i>
                <p class="text-muted font-medium">No courses found in this category.</p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="courses-grid">

                <a href="/courses/home-baker" class="course-card group block" data-category="baking">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Baking & Icing</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Professional Cake Baking Master Class</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">Learn 30+ cake varieties from scratch — complete hands-on icing & baking course.</p>
                </a>

                <a href="/courses/sugar-craft" class="course-card group block" data-category="cake-decorating">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/sugar-craft-1.jpeg" alt="Sugar Craft Rolled Fondant Cakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cake Decorating</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Sugar Craft Rolled Fondant Cakes</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">Fondant, ganache, sugar paste, flowers, figures and more!</p>
                </a>

                <a href="/courses/italian" class="course-card group block" data-category="italian">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Italian Cuisine</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Italian Food Class</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">20+ recipes — Pizzas, Pastas, Risottos, Tiramisu and much more.</p>
                </a>

                <a href="/courses/mughlai" class="course-card group block" data-category="mughlai">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/snacks-spread-collage.jpeg" alt="Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Mughlai Cuisine</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Mughlai Food Class</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">20+ traditional dishes — Biryani, Korma, Kebabs, Shahi Paneer and more.</p>
                </a>

                <a href="/courses/swiss-roll-pastries" class="course-card group block" data-category="pastries">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="assets/images/72.jpeg" alt="Swiss Roll & Pastries Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Pastries & Baking</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Swiss Roll & Pastries Class</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">18 varieties — master slitting, soaking, filling and finishing like a pro.</p>
                </a>

                <a href="/courses/brownies" class="course-card group block" data-category="pastries">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/brownie-1.jpeg" alt="Eggless Brownies" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Brownies & Bars</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Eggless Brownies, Crownies, Brookies & Blondies</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">18 eggless recipes — fudgy, cakey, chewy and everything in between.</p>
                </a>

                <a href="/courses/kids-special" class="course-card group block" data-category="kids">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/kids-yellow-aprons-group.jpeg" alt="Kids Special Workshop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Kids Special</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Kids Special Workshop (Mini Chefs)</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">Ages 6-18. Make delicious food while having fun — 18-20 practicals over 3 days.</p>
                </a>

                <a href="/courses/subways-sauces" class="course-card group block" data-category="subways">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/subway-1.jpeg" alt="Subways & Sauces" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Subways & Dips</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Subways, Sauces, Fillings & Kababs</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">30+ dips & sauces, restaurant-style subways and kababs. 100% vegetarian.</p>
                </a>

                <a href="/courses/cheesecakes" class="course-card group block" data-category="cheesecakes">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/cheesecake-1.jpeg" alt="Eggless Cheesecakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Cheesecakes</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Eggless Gelatin-Free Cheesecakes</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">Baked & no-bake cheesecakes. Learn to make cream cheese & mascarpone at home.</p>
                </a>

                <a href="/courses/tea-cakes" class="course-card group block" data-category="baking">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-4 relative">
                        <img src="/assets/images/tea-cakes-1.jpeg" alt="Super Soft Healthy Time Cakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    </div>
                    <p class="text-[11px] text-[#fc880d] font-bold uppercase tracking-wider mb-1.5">Tea Cakes</p>
                    <h3 class="font-bold text-dark text-[17px] leading-snug group-hover:text-[#fc880d] transition-colors mb-1.5">Super Soft Healthy Time Cakes</h3>
                    <p class="text-gray-400 text-[13px] leading-relaxed line-clamp-2">Eggless tea cakes with different flavors — moist, fluffy and incredibly easy.</p>
                </a>

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
