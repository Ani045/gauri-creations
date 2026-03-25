<!DOCTYPE html>
<html lang="en">

<head>
    <title>Professional Cake Baking Master Class | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
    <style>
        .hero-gradient { background: linear-gradient(135deg, #1a1714 0%, #2d2520 50%, #1a1714 100%); }
        .glow-line { height: 3px; background: linear-gradient(90deg, transparent, #fc880d, transparent); }
        .curriculum-item { transition: all 0.3s ease; }
        .curriculum-item:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(252,136,13,0.15); }
        .stat-card { backdrop-filter: blur(10px); }
        .floating-badge { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
    </style>
</head>

<?php $activePage = "courses"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include __DIR__ . '/../includes/nav.php'; ?>

    <!-- ===== HERO BANNER ===== -->
    <section class="hero-gradient relative overflow-hidden py-16 md:py-24">
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#fc880d]/8 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-[#fc880d]/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm mb-8">
                <a href="/" class="text-white/40 hover:text-[#fc880d] transition-colors">Home</a>
                <span class="text-white/20">/</span>
                <a href="/courses" class="text-white/40 hover:text-[#fc880d] transition-colors">Courses</a>
                <span class="text-white/20">/</span>
                <span class="text-[#fc880d] font-medium">Master Class</span>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <!-- Left: Text -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="inline-flex items-center gap-2 bg-[#fc880d]/15 text-[#fc880d] font-bold tracking-widest uppercase text-[11px] px-4 py-2 rounded-full border border-[#fc880d]/20">
                            <i data-lucide="award" class="w-3.5 h-3.5"></i> Bestseller
                        </span>
                        <span class="inline-flex items-center gap-2 bg-white/5 text-white/60 font-semibold text-[11px] px-4 py-2 rounded-full border border-white/10">
                            <i data-lucide="users" class="w-3.5 h-3.5"></i> 6-7 Students per Batch
                        </span>
                    </div>
                    <h1 class="font-serif text-4xl md:text-5xl lg:text-[3.5rem] text-white font-bold leading-[1.15] mb-6">
                        Professional Cake Baking <span class="text-[#fc880d]">Master Class</span>
                    </h1>
                    <p class="text-white/50 text-lg leading-relaxed mb-8 max-w-xl">Complete hands-on icing & baking course. Learn 30+ cake varieties from scratch and start your own business as a professional home baker.</p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-3 mb-8">
                        <div class="stat-card bg-white/5 border border-white/10 rounded-2xl p-4 text-center">
                            <p class="text-[#fc880d] text-2xl font-bold font-serif">30+</p>
                            <p class="text-white/40 text-[11px] font-medium mt-1">Cake Varieties</p>
                        </div>
                        <div class="stat-card bg-white/5 border border-white/10 rounded-2xl p-4 text-center">
                            <p class="text-[#fc880d] text-2xl font-bold font-serif">100%</p>
                            <p class="text-white/40 text-[11px] font-medium mt-1">Hands-On</p>
                        </div>
                        <div class="stat-card bg-white/5 border border-white/10 rounded-2xl p-4 text-center">
                            <p class="text-[#fc880d] text-2xl font-bold font-serif">3 Days</p>
                            <p class="text-white/40 text-[11px] font-medium mt-1">Intensive</p>
                        </div>
                    </div>

                    <!-- Desktop only CTA -->
                    <div class="hidden lg:flex gap-4">
                        <a href="https://wa.me/918527780181" target="_blank" class="bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-4 px-8 rounded-xl transition-all shadow-lg inline-flex items-center gap-2 text-sm">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Register on WhatsApp
                        </a>
                        <a href="tel:+918527780181" class="bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-4 px-8 rounded-xl transition-all shadow-[0_4px_20px_rgba(252,136,13,0.3)] inline-flex items-center gap-2 text-sm">
                            <i data-lucide="phone" class="w-5 h-5"></i> Call Now
                        </a>
                    </div>
                </div>

                <!-- Right: Image Grid -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="rounded-2xl overflow-hidden shadow-2xl aspect-[3/4] border-2 border-white/10">
                            <img src="/assets/images/cake-wedding-purple.jpeg" alt="Wedding Cake with flowers" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="rounded-2xl overflow-hidden shadow-2xl aspect-square border-2 border-white/10">
                                <img src="/assets/images/cake-photo-pink.jpeg" alt="Photo Print Cake" class="w-full h-full object-cover">
                            </div>
                            <div class="rounded-2xl overflow-hidden shadow-2xl aspect-square border-2 border-white/10">
                                <img src="/assets/images/cake-doll-blue.jpeg" alt="Doll Cake" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                    <!-- Floating cards -->
                    <div class="floating-badge absolute -bottom-4 left-4 bg-white rounded-2xl shadow-xl p-4 flex items-center gap-3 border border-gray-100 z-10">
                        <div class="w-10 h-10 rounded-full bg-[#fc880d]/10 flex items-center justify-center">
                            <i data-lucide="map-pin" class="w-5 h-5 text-[#fc880d]"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Venue</p>
                            <p class="text-dark font-bold text-sm">Gurgaon Sec 38</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT THIS COURSE ===== -->
    <section class="py-14 md:py-20 bg-white">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-4">
                    <i data-lucide="info" class="w-3.5 h-3.5"></i> About This Course
                </span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-dark mb-5">Everything You Need to Become a <span class="text-[#fc880d]">Professional Baker</span></h2>
                <p class="text-muted text-[16px] leading-relaxed mb-8">Complete Hands-On Class — all icing & baking is done in class under expert guidance. This certified course is designed to help you start your own business as a home baker. You'll learn over 30+ cake varieties from scratch, from basic sponges to trending designer cakes.</p>
            </div>

            <!-- Highlights Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4 mt-2">
                <div class="flex items-center gap-4 bg-[#FAF7F2] rounded-2xl p-5 border border-[#EDE4D8] hover:border-[#fc880d]/30 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-[#fc880d]/10 flex items-center justify-center shrink-0">
                        <i data-lucide="badge-check" class="w-5 h-5 text-[#fc880d]"></i>
                    </div>
                    <div>
                        <p class="font-bold text-dark text-sm">Certified Course</p>
                        <p class="text-muted text-[12px]">Get official certificate</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 bg-[#FAF7F2] rounded-2xl p-5 border border-[#EDE4D8] hover:border-[#fc880d]/30 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-[#fc880d]/10 flex items-center justify-center shrink-0">
                        <i data-lucide="utensils" class="w-5 h-5 text-[#fc880d]"></i>
                    </div>
                    <div>
                        <p class="font-bold text-dark text-sm">Lunch Included</p>
                        <p class="text-muted text-[12px]">With refreshments</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 bg-[#FAF7F2] rounded-2xl p-5 border border-[#EDE4D8] hover:border-[#fc880d]/30 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-[#fc880d]/10 flex items-center justify-center shrink-0">
                        <i data-lucide="cake" class="w-5 h-5 text-[#fc880d]"></i>
                    </div>
                    <div>
                        <p class="font-bold text-dark text-sm">Take-Home Cake</p>
                        <p class="text-muted text-[12px]">Your own creation</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 bg-[#FAF7F2] rounded-2xl p-5 border border-[#EDE4D8] hover:border-[#fc880d]/30 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-[#fc880d]/10 flex items-center justify-center shrink-0">
                        <i data-lucide="users" class="w-5 h-5 text-[#fc880d]"></i>
                    </div>
                    <div>
                        <p class="font-bold text-dark text-sm">Small Batches</p>
                        <p class="text-muted text-[12px]">Max 6-7 students</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 bg-[#FAF7F2] rounded-2xl p-5 border border-[#EDE4D8] hover:border-[#fc880d]/30 transition-colors">
                    <div class="w-11 h-11 rounded-xl bg-[#fc880d]/10 flex items-center justify-center shrink-0">
                        <i data-lucide="leaf" class="w-5 h-5 text-[#fc880d]"></i>
                    </div>
                    <div>
                        <p class="font-bold text-dark text-sm">100% Eggless</p>
                        <p class="text-muted text-[12px]">Pure vegetarian</p>
                    </div>
                </div>
            </div>

            <!-- What's Included -->
            <div class="mt-12 bg-gradient-to-r from-[#FAF7F2] to-[#FFF8F0] rounded-2xl p-6 md:p-8 border border-[#EDE4D8]">
                <h4 class="font-bold text-dark text-lg mb-5 flex items-center gap-2 font-serif"><i data-lucide="gift" class="w-5 h-5 text-[#fc880d]"></i> What's Included in the Course</h4>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
                    <div class="flex items-center gap-3 text-[14px] text-muted"><i data-lucide="check-circle-2" class="w-5 h-5 text-[#16a34a] shrink-0"></i> Hands-on practical training</div>
                    <div class="flex items-center gap-3 text-[14px] text-muted"><i data-lucide="check-circle-2" class="w-5 h-5 text-[#16a34a] shrink-0"></i> Printed recipe booklet</div>
                    <div class="flex items-center gap-3 text-[14px] text-muted"><i data-lucide="check-circle-2" class="w-5 h-5 text-[#16a34a] shrink-0"></i> Lunch & refreshments</div>
                    <div class="flex items-center gap-3 text-[14px] text-muted"><i data-lucide="check-circle-2" class="w-5 h-5 text-[#16a34a] shrink-0"></i> All ingredients & tools provided</div>
                    <div class="flex items-center gap-3 text-[14px] text-muted"><i data-lucide="check-circle-2" class="w-5 h-5 text-[#16a34a] shrink-0"></i> Certificate of completion</div>
                    <div class="flex items-center gap-3 text-[14px] text-muted"><i data-lucide="check-circle-2" class="w-5 h-5 text-[#16a34a] shrink-0"></i> Lifetime post-class support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GALLERY + INSTRUCTOR ===== -->
    <section class="py-14 md:py-20 bg-[#1a1714] relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-[1fr_400px] gap-10 lg:gap-16 items-center">
                <!-- Left: Gallery -->
                <div>
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-4">
                        <i data-lucide="image" class="w-3.5 h-3.5"></i> Our Creations
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl font-bold text-white mb-8">Cakes Made by Our <span class="text-[#fc880d]">Students</span></h2>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="rounded-2xl overflow-hidden aspect-square border-2 border-white/10 hover:border-[#fc880d]/40 transition-all hover:scale-[1.02]">
                            <img src="/assets/images/cake-mickey.jpeg" alt="Mickey Mouse Theme Cake" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden aspect-square border-2 border-white/10 hover:border-[#fc880d]/40 transition-all hover:scale-[1.02]">
                            <img src="/assets/images/cake-photo-pink.jpeg" alt="Photo Print Cake" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden aspect-square border-2 border-white/10 hover:border-[#fc880d]/40 transition-all hover:scale-[1.02]">
                            <img src="/assets/images/cake-doll-blue.jpeg" alt="Doll Cake" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden aspect-square border-2 border-white/10 hover:border-[#fc880d]/40 transition-all hover:scale-[1.02]">
                            <img src="/assets/images/cake-wedding-purple.jpeg" alt="Wedding Theme Cake" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-2xl overflow-hidden aspect-square border-2 border-white/10 hover:border-[#fc880d]/40 transition-all hover:scale-[1.02] col-span-2">
                            <img src="/assets/images/cupcakes-brownies-box.jpeg" alt="Cupcakes & Brownies" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Right: Instructor -->
                <div class="flex flex-col items-center text-center">
                    <div class="rounded-[2rem] overflow-hidden shadow-2xl w-full aspect-[3/4] border-2 border-white/10 mb-6">
                        <img src="/assets/images/chef-decorating.jpeg" alt="Chef Gauri decorating a cake" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-white mb-2">Learn from the Expert</h3>
                    <p class="text-white/50 text-sm leading-relaxed max-w-sm">Trained by professionals with years of experience in cake artistry, icing techniques, and running a successful home bakery business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COURSE CURRICULUM ===== -->
    <section class="py-14 md:py-20 bg-[#FAF7F2]">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                    <i data-lucide="list-checks" class="w-3.5 h-3.5"></i> What You'll Learn
                </span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-dark">Complete Course Curriculum</h2>
                <p class="text-muted text-sm mt-2 max-w-lg mx-auto">Master 32 professional cake techniques — from classic sponges to trending designer cakes</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Wedding Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Pro Vanilla & Choco Sponge</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Basic Sponge Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Shimmer Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Wave Design Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Pinata Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Red Velvet Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Geode Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Painting Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Faultline Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Oreo Mousse Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Doll Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Two Tier Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Photo Print Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Gel Carving Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Glass Effect Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Tiger Print Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Mirror Glaze Marble</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Thread Designing</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Dutch Chocolate Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Sphere Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Black Forest Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Fresh Fruit Gateau</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-white px-4 py-3.5 rounded-xl border border-[#EDE4D8] shadow-sm"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Sharp Edges Cake</span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Rasmalai Cake <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Mango Mousse Cake <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Heart Shape Cake <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Flower Bouquet Cake <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Standing Photo Cake <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Crunchy Cake <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Piping Designs <span class="text-[#fc880d]">NEW</span></span></div>
                <div class="curriculum-item flex items-center gap-3 bg-[#fc880d]/5 px-4 py-3.5 rounded-xl border border-[#fc880d]/20 shadow-sm"><i data-lucide="sparkles" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-bold">Bomb Cake <span class="text-[#fc880d]">NEW</span></span></div>
            </div>
        </div>
    </section>

    <!-- ===== OTHER COURSES ===== -->
    <section class="py-14 md:py-20 bg-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-2">
                        <i data-lucide="heart" class="w-3.5 h-3.5"></i> Explore More
                    </span>
                    <h2 class="font-serif text-3xl font-bold text-dark">Other Workshops</h2>
                </div>
                <a href="/courses" class="text-[#fc880d] font-semibold text-sm hover:underline inline-flex items-center gap-1">View All <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="/courses/sugar-craft" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[180px] bg-[#FFF8F0]">
                        <img src="/assets/images/caterpillar-cupcakes.jpeg" alt="Sugar Craft Cake Decorating Course" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide" style="background:#16a34a">New</span>
                    </div>
                    <div class="p-5">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Cake Decorating</p>
                        <h3 class="font-bold text-dark text-base mb-2 leading-tight group-hover:text-[#fc880d] transition-colors">Sugar Craft Cake Decorating Course</h3>
                    </div>
                </a>
                <a href="/courses/italian" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[180px] bg-[#FFF8F0]">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide" style="background:#9333ea">Popular</span>
                    </div>
                    <div class="p-5">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Italian Cuisine</p>
                        <h3 class="font-bold text-dark text-base mb-2 leading-tight group-hover:text-[#fc880d] transition-colors">Italian Food Class</h3>
                    </div>
                </a>
                <a href="/courses/mughlai" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[180px] bg-[#FFF8F0]">
                        <img src="/assets/images/snacks-spread-collage.jpeg" alt="Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide" style="background:#9333ea">Popular</span>
                    </div>
                    <div class="p-5">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Mughlai Cuisine</p>
                        <h3 class="font-bold text-dark text-base mb-2 leading-tight group-hover:text-[#fc880d] transition-colors">Mughlai Food Class</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== FINAL CTA (appears last on mobile) ===== -->
    <section class="py-16 bg-[#1a1714] relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[500px] h-[200px] bg-[#fc880d]/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="max-w-[700px] mx-auto px-6 md:px-12 text-center relative z-10">
            <span class="inline-flex items-center gap-2 bg-[#fc880d]/15 text-[#fc880d] font-bold tracking-widest uppercase text-xs px-4 py-2 rounded-full mb-6 border border-[#fc880d]/20"><i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Ready to Join?</span>
            <h3 class="font-serif text-3xl md:text-4xl font-bold text-white mb-4">Start Your Baking Journey Today</h3>
            <p class="text-white/50 text-[15px] mb-8 leading-relaxed">For registration & details, call or WhatsApp. Batches are small — secure your spot early.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/918527780181" target="_blank" class="bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-4 px-8 rounded-xl transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                    <i data-lucide="message-circle" class="w-5 h-5"></i> WhatsApp Now
                </a>
                <a href="tel:+918527780181" class="bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold py-4 px-8 rounded-xl transition-all shadow-[0_4px_20px_rgba(252,136,13,0.35)] inline-flex items-center justify-center gap-2 text-sm">
                    <i data-lucide="phone" class="w-5 h-5"></i> Call +91 8527780181
                </a>
            </div>
            <p class="text-white/30 text-xs mt-5">Also reach us at <strong class="text-white/50">+91 9999453960</strong></p>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
