<!DOCTYPE html>
<html lang="en">

<head>
    <title>Italian Food Class | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .ci { transition: all 0.2s; }
        .ci:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(252,136,13,0.1); }
        .thumb { cursor: pointer; transition: all 0.2s; }
        .thumb:hover { opacity: 0.9 !important; }
        .thumb.active { border-color: #fc880d !important; opacity: 1 !important; }
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
                <span class="text-dark">Italian Class</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- LEFT: Image Gallery -->
                <div class="flex flex-col-reverse sm:flex-row gap-3">
                    <div class="flex sm:flex-col gap-2 sm:w-[72px] shrink-0">
                        <div class="thumb active rounded-lg overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100"
                            onclick="switchImg(this, '/assets/images/321.jpeg')">
                            <img src="/assets/images/321.jpeg" alt="Italian Class" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/322.jpeg')">
                            <img src="/assets/images/322.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/323.jpeg')">
                            <img src="/assets/images/323.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/324.jpeg')">
                            <img src="/assets/images/324.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/325.jpeg')">
                            <img src="/assets/images/325.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="flex-1 rounded-2xl overflow-hidden bg-[#FAF7F2] aspect-[3/4] sm:aspect-[4/5]">
                        <img id="mainImg" src="/assets/images/321.jpeg" alt="Italian Class"
                            class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- RIGHT: Product Info -->
                <div class="lg:sticky lg:top-[80px]">
                    <!-- Badges -->
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">Popular</span>
                        <span class="bg-[#16a34a]/10 text-[#16a34a] text-[10px] font-bold uppercase px-3 py-1 rounded-full">100% Vegetarian</span>
                    </div>

                    <!-- Title -->
                    <h1 class="font-serif text-[26px] md:text-[32px] font-bold text-dark leading-tight mb-2">Italian Class</h1>
                    <p class="text-muted text-[14px] leading-relaxed mb-5">Italian food is one of the most popular and widely adopted cuisines the world over. Our cooking lessons include some of the most important recipes in Italian cuisine and the perfect way to learn & enjoy Italian food at home.</p>

                    <!-- Duration & Timings -->
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="clock" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Timings</p>
                                <p class="text-sm text-dark font-bold">12:00 – 4:00 PM</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="calendar-days" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Duration</p>
                                <p class="text-sm text-dark font-bold">2 Days</p>
                            </div>
                        </div>
                    </div>

                    <!-- Practicals & Recipes Badge -->
                    <div class="flex items-center gap-3 mb-5">
                        <span class="bg-[#fc880d]/10 text-[#fc880d] text-xs font-bold px-3 py-1.5 rounded-full">21 Recipes</span>
                        <span class="bg-[#9333ea]/10 text-[#9333ea] text-xs font-bold px-3 py-1.5 rounded-full">Hands-On Practical</span>
                    </div>

                    <div class="mb-5 pb-5 border-b border-gray-100"></div>

                    <!-- What's Included -->
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What's Included</p>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> 21 Italian Recipes</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Lunch & Refreshments</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Printed Recipe Booklet</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Hands-On Practical</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Certified Course</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Post-Class Support</span>
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
                    <p class="text-gray-300 text-[11px] text-center mt-2">Confirmation mandatory. Limited seats per batch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COURSE CONTENT ===== -->
    <section class="py-10 md:py-12 bg-[#FAF7F2] border-t border-[#EDE4D8]">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">
            <div class="flex items-center justify-between mb-5">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">Course Content</h2>
                <span class="text-[#fc880d] text-xs font-bold bg-[#fc880d]/10 px-3 py-1 rounded-full">21 Recipes</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2.5">
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Home Made Lasagna & Pasta
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Dough for Lasagna
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Farfalle Pasta in Basil Pesto Sauce
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Baked Lasagne
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Garlic Bread
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Tomato Bruschetta
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Italian Salad
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Cannelloni
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Almond Panna Cotta with Ruby Sauce
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Spaghetti in Bolognese Sauce
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Classic Pizza
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Ravioli Pasta in Pink Cream Sauce
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Vegetable Risotto Rice
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Peri Peri Pasta
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Baby Corn Crostini
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Pasta with Spinach & Sundried Tomatoes
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Fusilli Pasta with Creamy Cheese Sauce
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Baked Vegetables with Basil Pesto
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Veggie Crispy Paneer Stick
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Sicilian Feta Cheese in Peri Peri Sauce
                </div>
                <div class="ci bg-white px-4 py-3 rounded-lg border border-[#EDE4D8] text-[13px] font-medium text-dark flex items-start gap-2.5">
                    <span class="text-[#16a34a] mt-0.5 shrink-0">✅</span> Home Made Peri Peri Sauce
                </div>
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
                <a href="/courses/mexican" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/143.jpeg" alt="Mexican Cuisine Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Mexican Cuisine</span>
                    </div>
                    <h3 class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">Authentic Mexican Cuisines</h3>
                    <p class="text-gray-400 text-xs mt-1">20 Practicals, 35 Recipes</p>
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
        function switchImg(thumb, src) {
            document.getElementById('mainImg').src = src;
            document.querySelectorAll('.thumb').forEach(t => {
                t.classList.remove('active');
                t.style.borderColor = 'transparent';
                t.style.opacity = '0.6';
            });
            thumb.classList.add('active');
            thumb.style.borderColor = '#fc880d';
            thumb.style.opacity = '1';
        }
    </script>
</body>
</html>
