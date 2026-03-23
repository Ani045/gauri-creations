<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us | Gauri Creations</title>
    <?php include 'includes/head.php'; ?>
</head>

<?php $activePage = "about"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include 'includes/nav.php'; ?>

    <!-- ===== PAGE HERO ===== -->
    <section class="bg-[#2a2522] py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10 text-center">
            <h1 class="font-serif text-4xl md:text-5xl text-white font-bold mb-4">About Gauri Creations</h1>
            <p class="text-white/70 text-lg max-w-2xl mx-auto">Discover our story, our passion, and our dedication to culinary mastery.</p>
        </div>
    </section>

    <!-- ===== ABOUT SECTION ===== -->
    <section class="py-16 md:py-24 bg-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid md:grid-cols-[380px_1fr] lg:grid-cols-[420px_1fr] gap-10 lg:gap-16 items-center">
                
                <div class="relative group mx-auto md:mx-0">
                    <div class="w-[320px] h-[400px] md:w-[380px] md:h-[460px] lg:w-[420px] lg:h-[500px] rounded-3xl overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.12)] relative">
                        <img src="assets/images/sarika-teaching-class.jpeg" alt="Sarika Jindal — Founder" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-5 left-5 right-5 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#fc880d] flex items-center justify-center text-white flex-shrink-0">
                                <i data-lucide="chef-hat" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-white font-bold text-sm leading-tight">Sarika Jindal</p>
                                <p class="text-white/70 text-xs">Founder & Head Chef</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Our Story
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight leading-tight mb-4">
                        Crafting Culinary Excellence Since Day One
                    </h2>
                    <p class="text-gray-500 text-[15px] leading-relaxed mb-4 max-w-[560px]">
                        <strong class="text-dark">Gauri Creations</strong> was founded by Sarika Jindal — a passionate culinary expert who built her baking and cooking academy from the ground up. What started as a small kitchen experiment is now a thriving community of food lovers.
                    </p>
                    <p class="text-gray-500 text-[15px] leading-relaxed mb-6 max-w-[560px]">
                        She simplifies professional-level cooking techniques for homemakers, beginners, and aspiring bakers — teaching with clarity, confidence, and perfection. Over the years, our academy has blossomed into a recognized name for exquisite recipes and impeccable training.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
                        <div class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-all">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">10K+</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Students</p>
                        </div>
                        <div class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-all">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">200+</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Recipes</p>
                        </div>
                        <div class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-all">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">50+</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Courses</p>
                        </div>
                        <div class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-all">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">4.9</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MISSION & VISION ===== -->
    <section class="py-16 md:py-24 bg-dark relative overflow-hidden text-white">
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-20">
                <!-- Mission -->
                <div class="bg-[#2A2522] rounded-[2rem] p-8 md:p-12 border border-white/5 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#fc880d] rounded-full blur-[80px] opacity-20 group-hover:opacity-40 transition-opacity duration-500 z-0"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-full bg-mustard/20 flex items-center justify-center text-mustard border border-mustard/30 mb-6">
                            <i data-lucide="target" class="w-6 h-6"></i>
                        </div>
                        <h3 class="font-serif text-3xl font-bold mb-4">Our Mission</h3>
                        <p class="text-[15px] text-white/70 leading-relaxed font-light">
                            To empower home chefs and baking enthusiasts by providing high-quality, easy-to-understand culinary education. We strive to bring the joy of cooking into every home, making professional techniques accessible to everyone, regardless of their prior experience.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="bg-[#2A2522] rounded-[2rem] p-8 md:p-12 border border-white/5 relative overflow-hidden group">
                    <div class="absolute bottom-0 left-0 w-32 h-32 bg-[#fc880d] rounded-full blur-[80px] opacity-20 group-hover:opacity-40 transition-opacity duration-500 z-0"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-full bg-mustard/20 flex items-center justify-center text-mustard border border-mustard/30 mb-6">
                            <i data-lucide="eye" class="w-6 h-6"></i>
                        </div>
                        <h3 class="font-serif text-3xl font-bold mb-4">Our Vision</h3>
                        <p class="text-[15px] text-white/70 leading-relaxed font-light">
                            To become the leading culinary academy that not only creates masterchefs out of everyday people but also fosters a warm community of food lovers who share, learn, and grow together while celebrating the art of fine food and baking.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OUR VALUES ===== -->
    <section class="py-16 md:py-24 bg-[#FAF7F2] relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-flex items-center justify-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                    <i data-lucide="heart" class="w-3.5 h-3.5 fill-current border"></i> Core Values
                </span>
                <h2 class="font-serif text-3xl md:text-5xl text-dark font-bold tracking-tight">What We Stand For</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-white p-8 rounded-[2rem] hover:shadow-xl transition-shadow border border-gray-100/50">
                    <div class="w-12 h-12 bg-[#FFF3E0] rounded-xl flex items-center justify-center text-[#fc880d] mb-6">
                        <i data-lucide="award" class="w-6 h-6"></i>
                    </div>
                    <h4 class="font-serif text-xl font-bold text-dark mb-3">Excellence</h4>
                    <p class="text-gray-500 text-[14px] leading-relaxed">We settle for nothing but the best, whether it's our ingredients, our curriculum, or the support we provide to our students.</p>
                </div>

                <!-- Value 2 -->
                <div class="bg-white p-8 rounded-[2rem] hover:shadow-xl transition-shadow border border-gray-100/50">
                    <div class="w-12 h-12 bg-[#FFF3E0] rounded-xl flex items-center justify-center text-[#fc880d] mb-6">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                    <h4 class="font-serif text-xl font-bold text-dark mb-3">Community</h4>
                    <p class="text-gray-500 text-[14px] leading-relaxed">We believe in building a family. A supportive network of learners who inspire and encourage each other to bake their hearts out.</p>
                </div>

                <!-- Value 3 -->
                <div class="bg-white p-8 rounded-[2rem] hover:shadow-xl transition-shadow border border-gray-100/50">
                    <div class="w-12 h-12 bg-[#FFF3E0] rounded-xl flex items-center justify-center text-[#fc880d] mb-6">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <h4 class="font-serif text-xl font-bold text-dark mb-3">Creativity</h4>
                    <p class="text-gray-500 text-[14px] leading-relaxed">Food is an art. We encourage going beyond recipes, helping students tap into their own imaginative creativity for presentation and flavors.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Inline CTA 2 -->
    <section class="bg-mustard py-12 relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 flex flex-col md:flex-row justify-between items-center gap-6 relative z-10">
            <div>
                <h3 class="font-serif text-3xl font-bold text-white text-center md:text-left mb-2">Ready to embark on a culinary adventure?</h3>
                <p class="text-white/80 text-center md:text-left">Join thousands of students and transform your skills today.</p>
            </div>
            <a href="/#courses" class="bg-white text-dark px-8 py-3.5 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all shadow-lg shrink-0 inline-flex items-center gap-2">
                Explore Courses <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
        <!-- Decorative subtle pattern -->
        <div class="absolute inset-0 opacity-[0.1] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
