<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mexican Cuisine Class | Gauri Creations</title>
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
                <span class="text-dark">Mexican Cuisine</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- LEFT: Image Gallery -->
                <div class="flex flex-col-reverse sm:flex-row gap-3">
                    <!-- Thumbnail strip -->
                    <div class="flex sm:flex-col gap-2 sm:w-[72px] shrink-0">
                        <div class="thumb active rounded-lg overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100" onclick="switchImg(this, '/assets/images/141.jpeg')">
                            <img src="/assets/images/141.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/142.jpeg')">
                            <img src="/assets/images/142.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/143.jpeg')">
                            <img src="/assets/images/143.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/144.jpeg')">
                            <img src="/assets/images/144.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/145.jpeg')">
                            <img src="/assets/images/145.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60" onclick="switchImg(this, '/assets/images/146.jpeg')">
                            <img src="/assets/images/146.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Main image -->
                    <div class="flex-1 rounded-2xl overflow-hidden bg-[#FAF7F2] aspect-[3/4] sm:aspect-[4/5]">
                        <img id="mainImg" src="/assets/images/141.jpeg" alt="Mexican Cuisine Class" class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- RIGHT: Product Info -->
                <div class="lg:sticky lg:top-[80px]">
                    <!-- Badges -->
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-[#dc2626] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">New</span>
                        <span class="bg-[#16a34a]/10 text-[#16a34a] text-[10px] font-bold uppercase px-3 py-1 rounded-full">100% Vegetarian</span>
                    </div>

                    <!-- Title -->
                    <h1 class="font-serif text-[26px] md:text-[32px] font-bold text-dark leading-tight mb-2">🌶️ Authentic & Exotic Mexican Cuisines 🇲🇽</h1>
                    <p class="text-muted text-[14px] leading-relaxed mb-5">Dive into the world of bold flavors, vibrant colors, and irresistible aromas! From crispy tacos to cheesy enchiladas — learn everything homemade, healthy, and absolutely delicious.</p>

                    <!-- Duration & Timings -->
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="clock" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Timings</p>
                                <p class="text-sm text-dark font-bold">11:30 AM – 5:00 PM</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="map-pin" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Venue</p>
                                <p class="text-sm text-dark font-bold">Gurgaon</p>
                            </div>
                        </div>
                    </div>

                    <!-- Practicals & Recipes Badge -->
                    <div class="flex items-center gap-3 mb-5">
                        <span class="bg-[#fc880d]/10 text-[#fc880d] text-xs font-bold px-3 py-1.5 rounded-full">20 Practicals</span>
                        <span class="bg-[#fc880d]/10 text-[#fc880d] text-xs font-bold px-3 py-1.5 rounded-full">35 Recipes</span>
                    </div>

                    <div class="mb-5 pb-5 border-b border-gray-100"></div>

                    <!-- What's Included -->
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What's Included</p>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Printed Recipe Provided</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Refreshment & Lunch</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Hands-On Practical</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Future Assistance Welcome</span>
                    </div>

                    <p class="text-[12px] text-red-500 font-semibold mb-5">* Confirmation Mandatory</p>

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
            <div class="flex items-center justify-between mb-5">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">✨ What You'll Learn</h2>
                <span class="text-[#fc880d] text-xs font-bold bg-[#fc880d]/10 px-3 py-1 rounded-full">20 Practicals | 35 Recipes</span>
            </div>

            <!-- Soups -->
            <p class="text-sm font-bold text-dark mb-3 mt-6 flex items-center gap-2">🌮 Soups</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 mb-6">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Chilly Bean Soup</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Tortilla Soup</div>
            </div>

            <!-- Starters & Snacks -->
            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">🌯 Starters & Snacks</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 mb-6">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Nachos with Cheese Sauce</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Tacos with Crunchy Bean Masala</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Burritos Platter</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Vegetable Mexican Fajitas Platter</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Quesadillas with Fresh Salsa 🧀</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Creyol Paneer Shklet</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Stuffed Capsicum</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Trio Platter</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Pineapple Salsa</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Spinach Corn Quineis</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Red Rice</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Onion Rings</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Sunrise Passion</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Brinjal</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Guacamole</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Tit Bit</div>
            </div>

            <!-- Baked Dishes -->
            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">🥘 Baked Dishes</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 mb-6">
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Spinach Corn Mexican Tart</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Two-Corn Enchiladas</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Mexican Trio</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Stuffed Bell Peppers with Mexican Rice</div>
            </div>

            <!-- Sauces & Dips -->
            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">🥣 Sauces & Dips</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 mb-6">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Mexican Sauce</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Salsa Sauce</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Pineapple Salsa</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Cheese Sauce</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Sour Cream</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Avocado Dip</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Spinach Dip</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Guacamole 🥑</div>
            </div>

            <!-- More -->
            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">🍚 More</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2 mb-4">
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Mexican Rice</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Flour Dough for Tortilla</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Corn Dough for Tortilla, Nachos & Tacos</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Mediterranean Salad</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Homemade Taco Shells & Nachos</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Mexican Brinjals</div>
            </div>
            <p class="text-[#fc880d] font-bold text-sm mt-2">🎉 And Lots More…</p>
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
                <a href="/courses/chinese" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/131.jpeg" alt="Chinese Cooking Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Chinese Cooking</span>
                    </div>
                    <h3 class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">Chinese Cooking Class</h3>
                    <p class="text-gray-400 text-xs mt-1">20+ Recipes — Momos, Manchurian, Noodles & More</p>
                </a>
                <a href="/courses/italian" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Italian Cuisine</span>
                    </div>
                    <h3 class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">Italian Food Class</h3>
                    <p class="text-gray-400 text-xs mt-1">20+ Recipes — Pizza, Pasta, Risotto & More</p>
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
