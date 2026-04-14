<!DOCTYPE html>
<html lang="en">

<head>
    <title>Puff Pastries & Cream Horn Masterclass | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .ci {
            transition: all 0.2s;
        }

        .ci:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(252, 136, 13, 0.1);
        }

        .thumb {
            cursor: pointer;
            transition: all 0.2s;
        }

        .thumb:hover {
            opacity: 0.9 !important;
        }

        .thumb.active {
            border-color: #fc880d !important;
            opacity: 1 !important;
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
                <span class="text-dark">Puff Pastries & Cream Horn</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <!-- LEFT: Image Gallery -->
                <div class="flex flex-col-reverse sm:flex-row gap-3">
                    <div class="flex sm:flex-col gap-2 sm:w-[72px] shrink-0">
                        <div class="thumb active rounded-lg overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100"
                            onclick="switchImg(this, '/assets/images/puff_pastry_main_1776170197994.png')">
                            <img src="/assets/images/puff_pastry_main_1776170197994.png" alt="Puff Pastries Class"
                                class="w-full h-full object-cover">
                        </div>
                        <!-- <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/puff_pastry_cover_1776170214496.png')">
                            <img src="/assets/images/puff_pastry_cover_1776170214496.png" alt="" class="w-full h-full object-cover">
                        </div> -->
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/342.jpeg')">
                            <img src="/assets/images/342.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/343.jpeg')">
                            <img src="/assets/images/343.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/344.jpeg')">
                            <img src="/assets/images/344.jpeg" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="flex-1 rounded-2xl overflow-hidden bg-[#FAF7F2] aspect-[3/4] sm:aspect-[4/5]">
                        <img id="mainImg" src="/assets/images/puff_pastry_main_1776170197994.png"
                            alt="Puff Pastries & Cream Horn Class" class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <!-- RIGHT: Product Info -->
                <div class="lg:sticky lg:top-[80px]">
                    <!-- Badges -->
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">New
                            Class</span>
                        <span
                            class="bg-[#16a34a]/10 text-[#16a34a] text-[10px] font-bold uppercase px-3 py-1 rounded-full">100%
                            Vegetarian</span>
                    </div>

                    <!-- Title -->
                    <h1 class="font-serif text-[26px] md:text-[32px] font-bold text-dark leading-tight mb-2">Exotic Puff
                        Pastry & Cream Horn Masterclass</h1>
                    <p class="text-muted text-[14px] leading-relaxed mb-5 whitespace-pre-line">🥐✨ Master the Art of Flaky, Buttery & Irresistible Puff Pastries!
Layers of crisp perfection, melt-in-mouth texture, and bakery-style elegance — join our 2 Days Exotic Puff Pastry & Cream Horn Masterclass and learn to create stunning sweet & savoury delights professionally.
From golden khari to stuffed patties, cheesy straws, chocolate croissants, cream rolls & French palmiers — this class is a dream for every foodie and baking lover 💫

With multiple layers of lip smacking taste and exotic contours of light, flaky & tender sweet & savoury Eggless puff pastries and cream horns for every foodies fantasy....
....It's All About
#Learn to make perfect Laminated Dough with right techniques n in different ways...</p>

                    <!-- Duration & Timings -->
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div
                            class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="clock" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Timings</p>
                                <p class="text-sm text-dark font-bold">11:30 AM – 5:00 PM</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="calendar-days" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Duration</p>
                                <p class="text-sm text-dark font-bold">2 Days</p>
                            </div>
                        </div>
                    </div>

                    <!-- Practicals & Recipes Badge -->
                    <div class="flex items-center gap-3 mb-5">
                        <span class="bg-[#fc880d]/10 text-[#fc880d] text-xs font-bold px-3 py-1.5 rounded-full">Bakery
                            Techniques</span>
                        <span class="bg-[#9333ea]/10 text-[#9333ea] text-xs font-bold px-3 py-1.5 rounded-full">Beginner
                            Friendly</span>
                    </div>

                    <div class="mb-5 pb-5 border-b border-gray-100"></div>

                    <!-- What's Included -->
                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What Makes This Class
                        Special?</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Learn Perfect Laminated Dough</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Professional bakery techniques</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Healthier fat & flour options</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Freeze & store dough for 2 months</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> 1 Dough, multiple premium creations</span>
                        <span class="flex gap-2 text-muted"><span class="shrink-0 text-[#16a34a]">#</span>100% pure vegetarian</span>
                        <span class="flex gap-2 text-muted"><span class="shrink-0 text-[#16a34a]">#</span>Set of printed notes will be provided</span>
                        <span class="flex gap-2 text-muted"><span class="shrink-0 text-[#16a34a]">#</span>Refreshment & lunch included</span>
                        <span class="flex gap-2 text-muted"><span class="shrink-0 text-[#16a34a]">#</span>All samples provided</span>
                        <span class="flex gap-2 text-muted"><span class="shrink-0 text-[#16a34a]">#</span>Box will be provided</span>
                        <span class="flex gap-2 text-muted"><span class="shrink-0 text-[#16a34a]">#</span>Partially hands on class</span>
                    </div>

                    <!-- CTA -->
                    <div class="flex flex-col gap-2.5">
                        <a href="https://wa.me/918527780181" target="_blank"
                            class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Register on WhatsApp
                        </a>
                        <a href="tel:+918527780181"
                            class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-[0_4px_20px_rgba(252,136,13,0.25)] inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="phone" class="w-5 h-5"></i> Call +91 8527780181
                        </a>
                    </div>
                    <p class="text-gray-300 text-[11px] text-center mt-2">Confirmation mandatory. Limited seats per
                        batch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COURSE CONTENT ===== -->
    <section class="py-10 md:py-12 bg-[#FAF7F2] border-t border-[#EDE4D8]">
        <div class="max-w-[1200px] mx-auto px-5 md:px-10">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-serif text-xl md:text-2xl font-bold text-dark">Course Content</h2>
                <span class="text-[#fc880d] text-xs font-bold bg-[#fc880d]/10 px-3 py-1 rounded-full">Premium
                    Creations</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-2.5 text-[14px] text-dark mb-8">
                <p>✅ 🥐 Khari Varieties</p>
                <p>✅ 🥟 Veg & Cheese Puffs</p>
                <p>✅ 🧀 Flavoured Sticks & Straws</p>
                <p>✅ 🍦 Cream Rolls (Vanilla, Chocolate, Strawberry & Pineapple)</p>
                <p>✅ 🍫 Chocolate Croissants</p>
                <p>✅ 🍓 Strawberry Mille Feuille</p>
                <p>✅ 🍎 Apple Roses</p>
                <p>✅ ✨ And many more bakery favourites!</p>
            </div>

            <div class="max-w-[1200px] border-t border-[#EDE4D8] mb-8 pt-8"></div>

            <div class="space-y-1.5 text-[14px] text-dark">
                <p>*Learn in professional way as bakeries do...</p>
                <p>*Learn in healthier way without using unhealthy fat n with wheat flour too...</p>
                <p>#Learn varieties of delicacies using the puff pastry sheets...</p>
                <p>#It can be Frozen for 2 months n just thaw it, unroll cut fill n bake whenever you want...</p>

                <p class="font-bold pt-3 pb-1">#Varieties of khari -</p>
                <p>*Classic khari</p>
                <p>*Jeera khari</p>
                <p>*Twisted khari</p>
                <p>*Wheat khari</p>
                <p>*Punjabi khari</p>
                <p>*Stuff khari</p>
                <p>*Blueberry khari</p>

                <p class="font-bold pt-3 pb-1">#Varieties of puffs -</p>
                <p>*Potato Patties</p>
                <p>*Veg Chinese puff</p>
                <p>*Cheesy Italian puff</p>
                <p>*Paneer ring puff</p>
                <p>*Mushroom Parcel puff...</p>

                <p class="font-bold pt-3 pb-1">#Sticks n Straws -</p>
                <p>*Cheesy straws</p>
                <p>*Cinnamon sticks</p>
                <p>*Peri-Peri sticks</p>
                <p>*Italian herb sticks</p>
                <p>*Chilli garlic sticks</p>

                <p class="font-bold pt-3 pb-1">#Cream Roll -</p>
                <p>*Vanilla</p>
                <p>*Chocolate</p>
                <p>*Strawberry</p>
                <p>*Pineapple...</p>
                
                <p class="pt-3">*Sweet n Crunchy French Palmiers</p>
                <p>*Glazed puff pastry apple roses</p>
                <p>*Pepperoni pizza puffs</p>
                <p>*Chocolate Croissant</p>
                <p>*Strawberry mille feuille</p>
            </div>
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
                <a href="/courses/home-baker" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Baking
                            & Icing</span>
                    </div>
                    <h3
                        class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">
                        Professional Cake Baking Master Class</h3>
                    <p class="text-gray-400 text-xs mt-1">30+ Cake Varieties from Scratch</p>
                </a>
                <a href="/courses/cookies-biscuits" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/111.jpeg" alt="Cookies and Biscuits"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Cookies</span>
                    </div>
                    <h3
                        class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">
                        Bakery Style Cookies</h3>
                    <p class="text-gray-400 text-xs mt-1">33 Varieties of Cookies & Biscuits</p>
                </a>
                <a href="/courses/italian" class="group block">
                    <div class="rounded-2xl overflow-hidden aspect-[4/3] bg-[#FAF7F2] mb-3 relative">
                        <img src="/assets/images/321.jpeg" alt="Italian Food Class"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-dark text-[10px] font-bold uppercase px-2.5 py-1 rounded-full">Italian
                            Cuisine</span>
                    </div>
                    <h3
                        class="font-bold text-dark text-[15px] leading-snug group-hover:text-[#fc880d] transition-colors">
                        Italian Masterclass</h3>
                    <p class="text-gray-400 text-xs mt-1">21+ Dishes — Pizza, Pasta, Risotto</p>
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