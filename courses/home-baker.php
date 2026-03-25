<!DOCTYPE html>
<html lang="en">

<head>
    <title>Professional Cake Baking Master Class | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .ci:hover { transform: translateY(-1px); box-shadow: 0 4px 16px rgba(252,136,13,0.12); }
    </style>
</head>

<?php $activePage = "courses"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include __DIR__ . '/../includes/nav.php'; ?>

    <!-- ===== PRODUCT HERO ===== -->
    <section class="bg-white py-8 md:py-14">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-xs text-gray-400 mb-6">
                <a href="/" class="hover:text-[#fc880d] transition-colors">Home</a>
                <span>/</span>
                <a href="/courses" class="hover:text-[#fc880d] transition-colors">Courses</a>
                <span>/</span>
                <span class="text-dark font-medium">Master Class</span>
            </div>

            <div class="grid lg:grid-cols-[1fr_440px] gap-8 lg:gap-14 items-start">
                <!-- Left: Images -->
                <div>
                    <!-- Main Image -->
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3">
                        <img id="mainImg" src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class" class="w-full h-full object-cover">
                    </div>
                    <!-- Thumbnails -->
                    <div class="grid grid-cols-5 gap-2">
                        <button onclick="document.getElementById('mainImg').src='/assets/images/cake-wedding-purple.jpeg'" class="rounded-xl overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100 hover:opacity-100 transition-opacity">
                            <img src="/assets/images/cake-wedding-purple.jpeg" alt="Wedding Cake" class="w-full h-full object-cover">
                        </button>
                        <button onclick="document.getElementById('mainImg').src='/assets/images/cake-photo-pink.jpeg'" class="rounded-xl overflow-hidden aspect-square border-2 border-transparent hover:border-[#fc880d] opacity-70 hover:opacity-100 transition-all">
                            <img src="/assets/images/cake-photo-pink.jpeg" alt="Photo Cake" class="w-full h-full object-cover">
                        </button>
                        <button onclick="document.getElementById('mainImg').src='/assets/images/cake-doll-blue.jpeg'" class="rounded-xl overflow-hidden aspect-square border-2 border-transparent hover:border-[#fc880d] opacity-70 hover:opacity-100 transition-all">
                            <img src="/assets/images/cake-doll-blue.jpeg" alt="Doll Cake" class="w-full h-full object-cover">
                        </button>
                        <button onclick="document.getElementById('mainImg').src='/assets/images/cake-mickey.jpeg'" class="rounded-xl overflow-hidden aspect-square border-2 border-transparent hover:border-[#fc880d] opacity-70 hover:opacity-100 transition-all">
                            <img src="/assets/images/cake-mickey.jpeg" alt="Mickey Cake" class="w-full h-full object-cover">
                        </button>
                        <button onclick="document.getElementById('mainImg').src='/assets/images/chef-decorating.jpeg'" class="rounded-xl overflow-hidden aspect-square border-2 border-transparent hover:border-[#fc880d] opacity-70 hover:opacity-100 transition-all">
                            <img src="/assets/images/chef-decorating.jpeg" alt="Chef at work" class="w-full h-full object-cover">
                        </button>
                    </div>
                </div>

                <!-- Right: Product Info -->
                <div class="lg:sticky lg:top-[90px]">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="bg-[#fc880d] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide">Bestseller</span>
                        <span class="bg-[#16a34a]/10 text-[#16a34a] text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide">100% Eggless</span>
                    </div>

                    <h1 class="font-serif text-2xl md:text-3xl font-bold text-dark leading-snug mb-3">Professional Cake Baking Master Class</h1>

                    <p class="text-muted text-[14px] leading-relaxed mb-5">Learn 30+ cake varieties from scratch — complete hands-on icing & baking. Start your own business as a professional home baker.</p>

                    <!-- Key Details -->
                    <div class="flex flex-wrap gap-x-5 gap-y-2 text-sm text-muted mb-5 pb-5 border-b border-gray-100">
                        <span class="flex items-center gap-1.5"><i data-lucide="clock" class="w-4 h-4 text-[#fc880d]"></i> 3 Days Intensive</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="users" class="w-4 h-4 text-[#fc880d]"></i> 6-7 per Batch</span>
                        <span class="flex items-center gap-1.5"><i data-lucide="map-pin" class="w-4 h-4 text-[#fc880d]"></i> Gurgaon Sec 38</span>
                    </div>

                    <!-- Includes -->
                    <div class="grid grid-cols-2 gap-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a]"></i> Certified Course</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a]"></i> Lunch & Refreshments</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a]"></i> Take-Home Cake</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a]"></i> Recipe Booklet</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a]"></i> All Tools Provided</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a]"></i> Post-Class Support</span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col gap-3">
                        <a href="https://wa.me/918527780181" target="_blank" class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-4 rounded-xl text-center transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Register on WhatsApp
                        </a>
                        <a href="tel:+918527780181" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-4 rounded-xl text-center transition-all shadow-[0_4px_20px_rgba(252,136,13,0.3)] inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="phone" class="w-5 h-5"></i> Call +91 8527780181
                        </a>
                    </div>
                    <p class="text-gray-400 text-[11px] text-center mt-3">Seats are limited. Register early to confirm your spot.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CURRICULUM ===== -->
    <section class="py-10 md:py-14 bg-[#FAF7F2]">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-dark">What You'll Learn</h2>
                <span class="text-[#fc880d] text-sm font-bold">32 Recipes</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Wedding Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Vanilla & Choco Sponge</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Basic Sponge</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Shimmer Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Wave Design</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Pinata Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Red Velvet</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Geode Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Painting Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Faultline Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Oreo Mousse</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Doll Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Two Tier Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Photo Print Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Gel Carving</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Glass Effect</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Tiger Print</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Mirror Glaze</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Thread Design</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Dutch Chocolate</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Sphere Cake</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Black Forest</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Fruit Gateau</div>
                <div class="ci flex items-center gap-2.5 bg-white px-3.5 py-2.5 rounded-lg border border-[#EDE4D8] transition-all text-[13px] font-medium text-dark"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Sharp Edges</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Rasmalai Cake</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Mango Mousse</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Heart Shape</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Flower Bouquet</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Standing Photo</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Crunchy Cake</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Piping Designs</div>
                <div class="ci flex items-center gap-2.5 bg-[#fc880d]/5 px-3.5 py-2.5 rounded-lg border border-[#fc880d]/20 transition-all text-[13px] font-bold text-dark"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#fc880d] shrink-0"></i>Bomb Cake</div>
            </div>
        </div>
    </section>

    <!-- ===== OTHER COURSES ===== -->
    <section class="py-10 md:py-14 bg-white">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-serif text-2xl md:text-3xl font-bold text-dark">Other Workshops</h2>
                <a href="/courses" class="text-[#fc880d] font-semibold text-sm hover:underline inline-flex items-center gap-1">View All <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <a href="/courses/sugar-craft" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[160px] bg-[#FFF8F0]">
                        <img src="/assets/images/caterpillar-cupcakes.jpeg" alt="Sugar Craft" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full" style="background:#16a34a">New</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Cake Decorating</p>
                        <h3 class="font-bold text-dark text-sm leading-tight group-hover:text-[#fc880d] transition-colors">Sugar Craft Cake Decorating Course</h3>
                    </div>
                </a>
                <a href="/courses/italian" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[160px] bg-[#FFF8F0]">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full" style="background:#9333ea">Popular</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Italian Cuisine</p>
                        <h3 class="font-bold text-dark text-sm leading-tight group-hover:text-[#fc880d] transition-colors">Italian Food Class</h3>
                    </div>
                </a>
                <a href="/courses/mughlai" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[160px] bg-[#FFF8F0]">
                        <img src="/assets/images/snacks-spread-collage.jpeg" alt="Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full" style="background:#9333ea">Popular</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Mughlai Cuisine</p>
                        <h3 class="font-bold text-dark text-sm leading-tight group-hover:text-[#fc880d] transition-colors">Mughlai Food Class</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== MOBILE STICKY CTA ===== -->
    <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 p-3 z-50 flex gap-2 shadow-[0_-4px_20px_rgba(0,0,0,0.08)]">
        <a href="https://wa.me/918527780181" target="_blank" class="flex-1 bg-[#25D366] text-white font-bold py-3 rounded-xl text-center inline-flex items-center justify-center gap-2 text-sm">
            <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp
        </a>
        <a href="tel:+918527780181" class="flex-1 bg-[#fc880d] text-white font-bold py-3 rounded-xl text-center inline-flex items-center justify-center gap-2 text-sm">
            <i data-lucide="phone" class="w-4 h-4"></i> Call Now
        </a>
    </div>
    <!-- Spacer for mobile sticky bar -->
    <div class="lg:hidden h-[68px]"></div>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
    // Thumbnail click highlight
    document.querySelectorAll('[onclick]').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.grid').querySelectorAll('button').forEach(b => {
                b.classList.remove('border-[#fc880d]');
                b.classList.add('border-transparent', 'opacity-70');
            });
            this.classList.remove('border-transparent', 'opacity-70');
            this.classList.add('border-[#fc880d]');
        });
    });
    </script>
</body>
</html>
