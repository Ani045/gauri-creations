<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic Everyday Cookery Class | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .thumb {
            cursor: pointer;
            transition: all 0.2s;
        }

        .thumb:hover,
        .thumb.active {
            border-color: #fc880d !important;
            opacity: 1 !important;
        }

        .ci {
            transition: all 0.2s;
        }

        .ci:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(252, 136, 13, 0.1);
        }
    </style>
</head>

<?php $activePage = "courses"; ?>

<body class="font-sans bg-white text-dark antialiased overflow-x-hidden">

    <?php include __DIR__ . '/../includes/nav.php'; ?>

    <!-- ===== PRODUCT PAGE ===== -->
    <section class="py-6 md:py-12">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-xs text-gray-400 mb-5">
                <a href="/" class="hover:text-[#fc880d]">Home</a><span>/</span>
                <a href="/courses" class="hover:text-[#fc880d]">Courses</a><span>/</span>
                <span class="text-dark">Basic Everyday Cookery</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- LEFT: Image Gallery -->
                <div class="flex flex-col-reverse sm:flex-row gap-3">
                    <!-- Thumbnail strip -->
                    <div class="flex sm:flex-col gap-2 sm:w-[72px] shrink-0">
                        <div class="thumb active rounded-lg overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100"
                            onclick="switchImg(this, '/assets/images/191.jpeg')">
                            <img src="/assets/images/191.jpeg" alt="Everyday Cookery Class" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/192.jpeg')">
                            <img src="/assets/images/192.jpeg" alt="Everyday Cookery Class" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/193.jpeg')">
                            <img src="/assets/images/193.jpeg" alt="Everyday Cookery Class" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/194.jpeg')">
                            <img src="/assets/images/194.jpeg" alt="Everyday Cookery Class" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/195.jpeg')">
                            <img src="/assets/images/195.jpeg" alt="Everyday Cookery Class" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Main image -->
                    <div class="flex-1 rounded-2xl overflow-hidden bg-[#FAF7F2] aspect-[3/4] sm:aspect-[4/5]">
                        <img id="mainImg" src="/assets/images/191.jpeg" alt="Basic Everyday Cookery Masterclass"
                            class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- RIGHT: Product Info -->
                <div class="lg:sticky lg:top-[80px]">
                    <!-- Badges -->
                    <div class="flex items-center gap-2 mb-4">
                        <span
                            class="bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">Essential Skills</span>
                        <span
                            class="bg-[#fc880d]/10 text-[#fc880d] text-[10px] font-bold uppercase px-3 py-1 rounded-full">68+ Items Covered</span>
                    </div>

                    <!-- Title -->
                    <h1 class="font-serif text-[26px] md:text-[32px] font-bold text-dark leading-tight mb-2">🍳
                        Get Expert in The Kitchen</h1>
                    <p class="text-muted text-[14px] leading-relaxed mb-5">A few simple cooking tricks can make a boring dish even more delicious & simplify your cooking process to start from the very beginning. Learn essential daily cooking in this intensive 5-day class.</p>

                    <!-- Duration & Timings -->
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div
                            class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="clock" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Duration</p>
                                <p class="text-sm text-dark font-bold">5 Days</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="calendar" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Schedule</p>
                                <p class="text-[12px] text-dark font-bold">11:30 AM to 2:30 PM</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="tag" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Fees</p>
                                <p class="text-sm text-dark font-bold">₹8,500</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="map-pin" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Venue</p>
                                <p class="text-sm text-dark font-bold">Gurgaon</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 pb-5 border-b border-gray-100"></div>

                    <!-- What's Included -->
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What's Included</p>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check"
                                class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> 68+ Essential Daily Recipes</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check"
                                class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Set of Printed Notes</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check"
                                class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Kitchen Expert Tips</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check"
                                class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Comprehensive Training</span>
                    </div>

                    <!-- CTA -->
                    <div class="flex flex-col gap-2.5">
                        <a href="https://wa.me/918527780181" target="_blank"
                            class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Chat on WhatsApp
                        </a>
                        <a href="tel:+918527780181"
                            class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-[0_4px_20px_rgba(252,136,13,0.25)] inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="phone" class="w-5 h-5"></i> Call +91 8527780181
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CURRICULUM ===== -->
    <section class="py-10 md:py-12 bg-[#FAF7F2] border-t border-[#EDE4D8]">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">
            <div class="flex items-center justify-between mb-5">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">✨ Syllabus We Cover</h2>
                <span class="text-[#fc880d] text-xs font-bold bg-[#fc880d]/10 px-3 py-1 rounded-full">68 Items</span>
            </div>
            
            <p class="text-sm text-gray-500 mb-6">Gain confidence and expertise with our comprehensive list of Indian home cooking staples, snacks, breads, and sides.</p>

            <!-- Items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mb-6 mt-6">
                <!-- 1 to 68 -->
                <?php
                $items = [
                    "Rice kheer", "Sooji halwa", "Poori", "Kale chane", "Bhandhare ki aloo subji",
                    "Masaledaar Gravy Chole", "Special Rajma", "Mix Veg Pulao", "Jeera Rice", "Kadi with roasted gramflour",
                    "Punjabi kadi", "Banghan bharta", "Baghare bangan", "Bhindi plain", "Masala bhindi",
                    "Lauki ki subji", "Lauki kofta with greavy", "Sitafal ki subzi", "Tinda", "Bharva tinda",
                    "Gatte ki subzi", "Karela pyazi", "Bharva karela", "Malai Karela", "Poha",
                    "Upma", "Punchmal dal", "Arbi with curd greavy", "Fried ocra", "Veg dalia",
                    "Masala khichadi", "Bappa Dohi", "Mix veg raita", "Tea making", "Ginger lamanade",
                    "Chatpatta aloo salad", "Fruit cream", "Chappati, parantha", "Malabaar Parantha, all types of stuff Parantha making", "Veg saviyan",
                    "Mix Veg Subzi", "Minty yoghurt dip", "Boiled rice", "Jeera rice", "Palak paneer",
                    "Sarso saag", "Makki roti", "Dough making of poori", "Dough making of chappati", "Methi malai matar",
                    "Aloo gobhi", "Aloo methi", "Kathel", "Tori ki subgi", "Multigrain Stuffed Healthy Paranthas",
                    "Lentils Healthy Stuffed Chillas", "Wheat burger with lauki kabab", "Heathy Green Oat Cake", "Fruit Perafit", "Soyabean Subzi",
                    "Apple chutney", "Lahsun ki Chutney", "Papad ki subzi", "Hara pulao", "Tomato Chutney",
                    "With One Rava Batter (Appe making, Masala idli making, Uttapam making)", "Coconut Chutney", "Potato Cheese toast"
                ];
                
                foreach ($items as $index => $item) {
                    echo '
                    <div class="ci bg-white px-4 py-3 rounded-xl border border-[#EDE4D8] flex gap-3 items-center">
                        <span class="bg-[#fc880d]/10 text-[#fc880d] shrink-0 w-6 h-6 rounded-full flex items-center justify-center text-[10px] font-bold">'.($index + 1).'</span>
                        <p class="text-[12px] font-medium text-dark leading-snug">'.$item.'</p>
                    </div>';
                }
                ?>
            </div>
            
            <p class="text-[#fc880d] font-bold text-sm mt-4 text-center">🎉 ... And many more tips & recipes!</p>
        </div>
    </section>

    <!-- ===== OTHER COURSES ===== -->
    <section class="py-10 md:py-12 bg-white border-t border-gray-100">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">Other Workshops</h2>
                <a href="/courses"
                    class="text-[#fc880d] font-semibold text-xs hover:underline inline-flex items-center gap-1">View All
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i></a>
            </div>
            <div class="grid sm:grid-cols-3 gap-5">
                <a href="/courses/variety-combo" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/variety-combo-hero.png" alt="Variety Combo"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Multi-Cuisine</span>
                    </div>
                    <h3
                        class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">
                        Variety Combo Package</h3>
                    <p class="text-gray-400 text-xs mt-1">80+ Recipes — 9 cuisines across 13 days</p>
                </a>
                <a href="/courses/mughlai" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/81.jpeg" alt="Mughlai Cuisine"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Mughlai</span>
                    </div>
                    <h3
                        class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">
                        Veg Mughlai Food Class</h3>
                    <p class="text-gray-400 text-xs mt-1">20+ dishes — Biryani, Korma, Malai Kofta & more</p>
                </a>
                <a href="/courses/lebanese-1" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/lebanese-cuisine-hero.png" alt="Lebanese Part-1"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute bottom-3 left-3 bg-red-600 text-white text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">New</span>
                    </div>
                    <h3
                        class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">
                        Online Lebanese Cuisine Part-1</h3>
                    <p class="text-gray-400 text-xs mt-1">19+ recipes — Falafel, Hummus, Manakeesh & more</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Mobile sticky CTA -->
    <div
        class="lg:hidden fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-md border-t border-gray-200 px-4 py-2.5 z-50 flex gap-2">
        <a href="https://wa.me/918527780181" target="_blank"
            class="flex-1 bg-[#25D366] text-white font-bold py-3 rounded-xl text-center inline-flex items-center justify-center gap-2 text-[13px]">
            <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp
        </a>
        <a href="tel:+918527780181"
            class="flex-1 bg-[#fc880d] text-white font-bold py-3 rounded-xl text-center inline-flex items-center justify-center gap-2 text-[13px]">
            <i data-lucide="phone" class="w-4 h-4"></i> Call Now
        </a>
    </div>
    <div class="lg:hidden h-16"></div>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
        function switchImg(el, src) {
            document.getElementById('mainImg').src = src;
            el.closest('.flex').querySelectorAll('.thumb').forEach(t => {
                t.classList.remove('active', 'border-[#fc880d]');
                t.classList.add('border-transparent', 'opacity-60');
            });
            el.classList.add('active', 'border-[#fc880d]');
            el.classList.remove('border-transparent', 'opacity-60');
        }
    </script>
</body>

</html>
