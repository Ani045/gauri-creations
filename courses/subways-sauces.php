<!DOCTYPE html>
<html lang="en">

<head>
    <title>Subways, Sauces, Fillings & Kababs Workshop | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .thumb { cursor: pointer; transition: all 0.2s; }
        .thumb:hover, .thumb.active { border-color: #fc880d !important; opacity: 1 !important; }
        .ci { transition: all 0.2s; }
        .ci:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(252,136,13,0.1); }
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
                <span class="text-dark">Subways & Sauces</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- LEFT: Image Gallery -->
                <div class="flex flex-col-reverse sm:flex-row gap-3">
                    <!-- Thumbnail strip -->
                    <div class="flex sm:flex-col gap-2 sm:w-[72px] shrink-0">
                        <div class="thumb active rounded-lg overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100" onclick="switchImg(this, '/assets/images/subway-1.jpeg')">
                            <img src="/assets/images/subway-1.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/subway-2.jpeg')">
                            <img src="/assets/images/subway-2.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/subway-3.jpeg')">
                            <img src="/assets/images/subway-3.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/subway-4.jpeg')">
                            <img src="/assets/images/subway-4.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/subway-5.jpeg')">
                            <img src="/assets/images/subway-5.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Main image -->
                    <div class="flex-1 rounded-2xl overflow-hidden bg-[#FAF7F2] aspect-[3/4] sm:aspect-[4/5]">
                        <img id="mainImg" src="/assets/images/subway-1.jpeg" alt="Subways, Sauces, Fillings & Kababs Workshop" class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- RIGHT: Product Info -->
                <div class="lg:sticky lg:top-[80px]">
                    <!-- Badges -->
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">New</span>
                        <span class="bg-[#16a34a]/10 text-[#16a34a] text-[10px] font-bold uppercase px-3 py-1 rounded-full">100% Pure Vegetarian</span>
                    </div>

                    <!-- Title -->
                    <h1 class="font-serif text-[26px] md:text-[32px] font-bold text-dark leading-tight mb-2">Subways, Sauces, Fillings & Kababs Workshop</h1>
                    <p class="text-muted text-[14px] leading-relaxed mb-5">Varieties of Subways and 30+ Dip n Sauces! Master homemade fillings and amazing flavour combinations.</p>

                    <!-- Duration & Timings -->
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="calendar-days" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Duration</p>
                                <p class="text-sm text-dark font-bold">2 Days</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="clock" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Timings</p>
                                <p class="text-sm text-dark font-bold">11:30 AM – 5:30 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 pb-5 border-b border-gray-100"></div>

                    <!-- What's Included -->
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What's Included</p>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> 100% Pure vegetarian</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Partially handson class</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> All samples take home</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Lunch & refreshment included</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Confirmation mandatory</span>
                    </div>

                    <!-- CTA -->
                    <div class="flex flex-col gap-2.5">
                        <a href="https://wa.me/918527780181" target="_blank" class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Register on WhatsApp
                        </a>
                        <a href="tel:+918527780181" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-[0_4px_20px_rgba(252,136,13,0.25)] inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="phone" class="w-5 h-5"></i> Call +91 8527780181
                        </a>
                    </div>
                    <p class="text-gray-300 text-[11px] text-center mt-2">Limited seats per batch. Register early.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CURRICULUM ===== -->
    <section class="py-10 md:py-12 bg-[#FAF7F2] border-t border-[#EDE4D8]">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">

            <!-- Varieties of Subways -->
            <div class="flex items-center justify-between mb-5">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">Varieties of Subways</h2>
                <span class="text-[#fc880d] text-xs font-bold bg-[#fc880d]/10 px-3 py-1 rounded-full">15 Varieties</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Paneer tikka submarine(with home made paneer tikka)</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Corn & peas subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Aloo patty subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Tandoori subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Veg sub sandwich</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican patty subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Green peas patty subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Veggie delight subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Vegetable submarine</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Grilled cheese subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Veg shammi subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Harabhara kabab subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Veggie patty subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Chatpata chana subway</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Multi grain healthy Subway</div>
            </div>

            <!-- Dip n Sauces -->
            <div class="flex items-center justify-between mb-5 mt-8">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">Dip n Sauces</h2>
                <span class="text-[#fc880d] text-xs font-bold bg-[#fc880d]/10 px-3 py-1 rounded-full">30 Sauces</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Teriyaki dip</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Stuffed Subway Veggie toastier with home made Masala</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Southwest chipotle</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Sweet onion sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Thousand island</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Mint mayo dip</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Barbeque sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Black pepper ranch</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Sweet chilli vinaigrette</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Honey mustard</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Mayonnaise</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Tomato ketchup</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Tarter dip</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Italian herb sandwich spread</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Diet bell pepper Dip</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Cocktail sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Harissa sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Sirracha sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Russian sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Avacado ranch</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Chimi churri sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Nachos Cheesy sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Marinara sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Spicy sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Garlic aioli</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Tandoori Mayo</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Chilly garlic sauce</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Cheese jalepeno dip</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Subway Salad</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Peri-peri sauce</div>
            </div>
        </div>
    </section>

    <!-- ===== OTHER COURSES ===== -->
    <section class="py-10 md:py-12 bg-white border-t border-gray-100">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">Other Workshops</h2>
                <a href="/courses" class="text-[#fc880d] font-semibold text-xs hover:underline inline-flex items-center gap-1">View All <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i></a>
            </div>
            <div class="grid sm:grid-cols-3 gap-5">
                <a href="/courses/home-baker" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Baking & Icing</span>
                    </div>
                    <h3 class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">Professional Cake Baking Master Class</h3>
                    <p class="text-gray-400 text-xs mt-1">30+ Cake Varieties from Scratch</p>
                </a>
                <a href="/courses/mughlai" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/81.jpeg" alt="Veg Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Mughlai Cuisine</span>
                    </div>
                    <h3 class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">Mughlai Food Class</h3>
                    <p class="text-gray-400 text-xs mt-1">20+ Dishes — Biryani, Korma, Kebabs & More</p>
                </a>
                <a href="/courses/brownies" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/brownie-1.jpeg" alt="Eggless Brownies Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Brownies & Bars</span>
                    </div>
                    <h3 class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">Eggless Brownies, Crownies, Brookies & Blondies</h3>
                    <p class="text-gray-400 text-xs mt-1">37 Recipes — Fudgy, Cakey & More</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Mobile sticky CTA -->
    <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white/95 backdrop-blur-md border-t border-gray-200 px-4 py-2.5 z-50 flex gap-2">
        <a href="https://wa.me/918527780181" target="_blank" class="flex-1 bg-[#25D366] text-white font-bold py-3 rounded-xl text-center inline-flex items-center justify-center gap-2 text-[13px]">
            <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp
        </a>
        <a href="tel:+918527780181" class="flex-1 bg-[#fc880d] text-white font-bold py-3 rounded-xl text-center inline-flex items-center justify-center gap-2 text-[13px]">
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
