<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chocolate Truffle Cake Class | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .thumb { cursor: pointer; transition: all 0.2s; }
        .thumb:hover, .thumb.active { border-color: #fc880d !important; opacity: 1 !important; }
        .ci { transition: all 0.2s; }
        .ci:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(252, 136, 13, 0.1); }
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
                <span class="text-dark">Chocolate Truffle Cake</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

                <div class="flex flex-col-reverse sm:flex-row gap-3">
                    <div class="flex sm:flex-col gap-2 sm:w-[72px] shrink-0">
                        <div class="thumb active rounded-lg overflow-hidden aspect-square border-2 border-[#fc880d] opacity-100"
                            onclick="switchImg(this, '/assets/images/chocolate-truffle-cake.png')">
                            <img src="/assets/images/chocolate-truffle-cake.png" alt="Chocolate Truffle Cake" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/chocolate-truffle-cake-2.png')">
                            <img src="/assets/images/chocolate-truffle-cake-2.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/chocolate-truffle-cake-3.png')">
                            <img src="/assets/images/chocolate-truffle-cake-3.png" alt="" class="w-full h-full object-cover">
                        </div>
                        <div class="thumb rounded-lg overflow-hidden aspect-square border-2 border-transparent opacity-60"
                            onclick="switchImg(this, '/assets/images/chocolate-truffle-cake-4.png')">
                            <img src="/assets/images/chocolate-truffle-cake-4.png" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="flex-1 rounded-2xl overflow-hidden bg-[#FAF7F2] aspect-[3/4] sm:aspect-[4/5]">
                        <img id="mainImg" src="/assets/images/chocolate-truffle-cake.png" alt="Chocolate Truffle Cake"
                            class="w-full h-full object-cover object-center">
                    </div>
                </div>

                <div class="lg:sticky lg:top-[80px]">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-[#16a34a] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">100% Eggless</span>
                        <span class="bg-[#9333ea] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full">Masterclass</span>
                    </div>

                    <h1 class="font-serif text-[26px] md:text-[32px] font-bold text-dark leading-tight mb-2">🍫 Chocolate Truffle Cake Class 🎂</h1>
                    <p class="text-muted text-[14px] leading-relaxed mb-5">The Ultimate Indulgence! Chocolate truffle cake is perfect for all the cake lovers. Learn to make this dense, moist cake paired with silky chocolate truffle frosting and chocolate flakes. We share simple recipe hacks required to get the best cake!</p>

                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="flex items-center gap-2.5 bg-[#FAF7F2] rounded-xl px-3.5 py-2.5 border border-[#EDE4D8]">
                            <i data-lucide="clock" class="w-4 h-4 text-[#fc880d] shrink-0"></i>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Duration</p>
                                <p class="text-sm text-dark font-bold">1 Day Workshop</p>
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

                    <div class="flex items-center gap-3 mb-5">
                        <span class="bg-[#fc880d]/10 text-[#fc880d] text-xs font-bold px-3 py-1.5 rounded-full">5 Yummy Variants</span>
                        <span class="bg-[#fc880d]/10 text-[#fc880d] text-xs font-bold px-3 py-1.5 rounded-full">Professional Garnishing</span>
                    </div>

                    <div class="mb-5 pb-5 border-b border-gray-100"></div>

                    <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-3">What's Included</p>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-2 mb-6 text-[13px]">
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> All Materials Included</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Lunch & Refreshment</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Printed Notes Provided</span>
                        <span class="flex items-center gap-2 text-muted"><i data-lucide="check" class="w-3.5 h-3.5 text-[#16a34a] shrink-0"></i> Hands-on Practice</span>
                    </div>

                    <p class="text-[12px] text-red-500 font-semibold mb-5">* Preregistration compulsory, to block your seat.</p>

                    <!-- CTA -->
                    <div class="flex flex-col gap-2.5">
                        <a href="https://wa.me/918527780181" target="_blank" class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Register on WhatsApp
                        </a>
                        <a href="tel:+918527780181" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-[0_4px_20px_rgba(252,136,13,0.25)] inline-flex items-center justify-center gap-2 text-sm">
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
            <h2 class="font-serif text-xl md:text-2xl font-bold text-dark mb-6">✨ What You Will Learn</h2>
            
            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">🎂 Truffle Cake Variants</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2 mb-6">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Eggless Caramel Cake</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Eggless Ferrero Rocher Cake With Nutella Icing</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Blueberry or Raspberry Truffle Cake</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Yule Log Cake</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Truffle Cake With Sharp Edge</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Basic Chocolate Base</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Professional Chocolate Base</div>
            </div>

            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">👨‍🍳 Techniques & Frosting</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2 mb-6">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Different Types of Flavors & Layering</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Ganache for Dripping & Layering</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">Ganache for Piping</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Colored Ganache</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Ganache with Milk, White & Dark Chocolate</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Golden Dripping Technique</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Professional Piping Techniques</div>
            </div>

            <p class="text-sm font-bold text-dark mb-3 flex items-center gap-2">✨ Chocolate Garnishing</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 mb-6">
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Chocolate Collar</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Printed Collar</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Chocolate Cigarette</div>
                <div class="ci bg-white px-3 py-2.5 rounded-lg border border-[#EDE4D8] text-[12px] font-medium text-dark">Chocolate Fan</div>
                <div class="ci bg-[#fc880d]/5 px-3 py-2.5 rounded-lg border border-[#fc880d]/20 text-[12px] font-bold text-[#fc880d]">And Many More Garnishing Styles...</div>
            </div>
        </div>
    </section>

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
