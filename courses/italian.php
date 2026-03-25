<!DOCTYPE html>
<html lang="en">

<head>
    <title>Italian Food Class | Gauri Creations</title>
    <?php include __DIR__ . '/../includes/head.php'; ?>
</head>

<?php $activePage = "courses"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include __DIR__ . '/../includes/nav.php'; ?>

    <!-- ===== BREADCRUMB ===== -->
    <div class="bg-gray-50 border-b border-gray-100 py-3">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 flex items-center gap-2 text-sm">
            <a href="/" class="text-gray-400 hover:text-[#fc880d]">Home</a>
            <span class="text-gray-300">/</span>
            <a href="/courses" class="text-gray-400 hover:text-[#fc880d]">Courses</a>
            <span class="text-gray-300">/</span>
            <span class="text-dark font-medium">Italian Food Class</span>
        </div>
    </div>

    <!-- ===== COURSE HERO ===== -->
    <section class="py-16 md:py-20 bg-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-[1fr_420px] gap-10 lg:gap-12 items-start">

                <!-- Left: Image + info -->
                <div class="flex flex-col gap-5">
                    <div class="rounded-[2rem] overflow-hidden shadow-xl relative aspect-[16/10] bg-[#FFF8F0] group border border-[#EDE4D8]">
                        <img src="/assets/images/pad-thai-dish.jpeg" alt="Italian Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <span class="absolute top-5 left-5 text-white text-xs font-bold uppercase px-4 py-2 rounded-full tracking-wide shadow-lg" style="background: #9333ea">Popular</span>
                    </div>

                    <!-- Description -->
                    <div class="bg-[#FAF7F2] rounded-2xl p-6 border border-[#EDE4D8]">
                        <h3 class="font-serif font-bold text-dark text-xl mb-3">About This Course</h3>
                        <p class="text-muted text-[15px] leading-relaxed">Italian food is one of the most popular and loved cuisines all around the world. Learn the perfect way to enjoy Italian food at home — from Pizzas to Pastas, Risottos to Ravioli and much more!</p>
                    </div>

                    <!-- Highlights -->
                    <ul class="flex flex-col gap-3">
                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-[#fc880d]/10 flex items-center justify-center shrink-0 mt-0.5"><i data-lucide="check" class="w-3.5 h-3.5 text-[#fc880d]"></i></div><span>20+ Italian Recipes</span></li>
                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-[#fc880d]/10 flex items-center justify-center shrink-0 mt-0.5"><i data-lucide="check" class="w-3.5 h-3.5 text-[#fc880d]"></i></div><span>Hands-On Practical</span></li>
                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-[#fc880d]/10 flex items-center justify-center shrink-0 mt-0.5"><i data-lucide="check" class="w-3.5 h-3.5 text-[#fc880d]"></i></div><span>Lunch Provided</span></li>
                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-[#fc880d]/10 flex items-center justify-center shrink-0 mt-0.5"><i data-lucide="check" class="w-3.5 h-3.5 text-[#fc880d]"></i></div><span>Printed Recipes</span></li>
                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-[#fc880d]/10 flex items-center justify-center shrink-0 mt-0.5"><i data-lucide="check" class="w-3.5 h-3.5 text-[#fc880d]"></i></div><span>Future Assistance</span></li>
                    </ul>
                </div>

                <!-- Right: Sticky enrollment card -->
                <div class="lg:sticky lg:top-[90px] flex flex-col gap-4">
                    <div class="bg-dark rounded-[1.5rem] p-6 text-white relative overflow-hidden">
                        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
                        <div class="absolute bottom-0 right-0 w-40 h-40 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>
                        <div class="relative z-10">
                            <div class="flex items-center gap-2 text-mustard font-bold text-xs tracking-widest uppercase mb-2">
                                <i data-lucide="graduation-cap" class="w-3.5 h-3.5"></i>
                                <span>Italian Cuisine</span>
                            </div>
                            <h1 class="text-xl md:text-2xl font-serif text-white font-bold leading-snug mb-5">Italian Food Class</h1>
                            <div class="flex flex-col gap-3 mb-5">
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                    <i data-lucide="calendar" class="w-4 h-4 text-mustard shrink-0"></i>
                                    <div>
                                        <p class="text-[10px] text-white/40 uppercase tracking-wider">Date</p>
                                        <p class="text-sm text-white font-bold">4th & 5th January</p>
                                        <p class="text-[11px] text-white/50">(Saturday & Sunday)</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                        <i data-lucide="clock" class="w-4 h-4 text-mustard shrink-0"></i>
                                        <div>
                                            <p class="text-[10px] text-white/40 uppercase tracking-wider">Timing</p>
                                            <p class="text-xs text-white font-bold">12:00 PM to 4:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                        <i data-lucide="users" class="w-4 h-4 text-mustard shrink-0"></i>
                                        <div>
                                            <p class="text-[10px] text-white/40 uppercase tracking-wider">Batch</p>
                                            <p class="text-xs text-white font-bold">6-7 Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                    <i data-lucide="map-pin" class="w-4 h-4 text-mustard shrink-0"></i>
                                    <div>
                                        <p class="text-[10px] text-white/40 uppercase tracking-wider">Venue</p>
                                        <p class="text-sm text-white font-bold">Karol Bagh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3">
                                <a href="https://wa.me/918527780181" target="_blank" class="w-full bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-lg inline-flex items-center justify-center gap-2 text-sm">
                                    <i data-lucide="message-circle" class="w-5 h-5"></i> Register on WhatsApp
                                </a>
                                <a href="tel:+918527780181" class="w-full bg-mustard hover:bg-[#e27a0c] text-white font-bold py-3.5 rounded-xl text-center transition-all shadow-[0_4px_20px_rgba(252,136,13,0.3)] inline-flex items-center justify-center gap-2 text-sm">
                                    <i data-lucide="phone" class="w-5 h-5"></i> Call +91 8527780181
                                </a>
                            </div>
                            <p class="text-white/40 text-[11px] text-center mt-3">Seats are limited. Register early to confirm your spot.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl border border-[#EDE4D8] p-5">
                        <h4 class="font-bold text-dark text-sm mb-3 flex items-center gap-2"><i data-lucide="gift" class="w-4 h-4 text-mustard"></i> What's Included</h4>
                        <ul class="flex flex-col gap-2 text-[13px] text-muted">
                            <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#16a34a] shrink-0"></i> Hands-on practical training</li>
                            <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#16a34a] shrink-0"></i> Printed recipe booklet</li>
                            <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#16a34a] shrink-0"></i> Lunch & refreshments</li>
                            <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#16a34a] shrink-0"></i> All ingredients & tools</li>
                            <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#16a34a] shrink-0"></i> Certificate of completion</li>
                            <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#16a34a] shrink-0"></i> Post-class assistance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COURSE CURRICULUM ===== -->
    <section class="py-16 bg-[#FAF7F2]">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12">
            <div class="text-center mb-10">
                <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                    <i data-lucide="list-checks" class="w-3.5 h-3.5"></i> What You'll Learn
                </span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-dark">Course Curriculum</h2>
                <p class="text-muted text-sm mt-2">Everything covered in this workshop</p>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Pizza (Margarita, Farmhouse, Peppy Paneer)</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">White Sauce Pasta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Red Sauce Pasta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Pink Sauce Pasta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Alfredo Pasta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Macaroni</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Lasagne</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Baked Pasta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Spaghetti</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Penne Arrabiata</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Ravioli</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Risotto</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Bruschetta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Garlic Bread</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Focaccia Bread</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Minestrone Soup</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Tiramisu</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Panna Cotta</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Italian Dressing</span></div>
                <div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">Marinara Sauce</span></div>
            </div>

            <!-- Registration CTA -->
            <div class="mt-14 bg-dark rounded-[2rem] p-8 md:p-12 text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-80 h-40 bg-mustard/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="relative z-10">
                    <span class="inline-flex items-center gap-2 bg-mustard/15 text-mustard font-bold tracking-widest uppercase text-xs px-4 py-2 rounded-full mb-5"><i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Ready to Join?</span>
                    <h3 class="font-serif text-2xl md:text-3xl font-bold text-white mb-3">Start Your Creative Journey Today</h3>
                    <p class="text-white/60 text-[15px] mb-7 max-w-xl mx-auto">For registration & details, call or WhatsApp <strong class="text-white">+91 8527780181</strong> or <strong class="text-white">+91 9999453960</strong>. Batches are small — secure your spot early.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                        <a href="https://wa.me/918527780181" target="_blank" class="flex-1 bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-4 rounded-xl transition-all shadow-lg inline-flex items-center justify-center gap-2">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> WhatsApp Now
                        </a>
                        <a href="tel:+918527780181" class="flex-1 bg-mustard hover:bg-[#e27a0c] text-white font-bold py-4 rounded-xl transition-all shadow-[0_4px_20px_rgba(252,136,13,0.35)] inline-flex items-center justify-center gap-2">
                            <i data-lucide="phone" class="w-5 h-5"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== OTHER COURSES ===== -->
    <section class="py-16 md:py-20 bg-white relative overflow-hidden">
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
                <a href="/courses/home-baker" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[180px] bg-[#FFF8F0]">
                        <img src="/assets/images/cake-wedding-purple.jpeg" alt="Professional Cake Baking Master Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide" style="background:#fc880d">Bestseller</span>
                    </div>
                    <div class="p-5">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Baking & Icing</p>
                        <h3 class="font-bold text-dark text-base mb-2 leading-tight group-hover:text-[#fc880d] transition-colors">Professional Cake Baking Master Class</h3>
                        <div class="flex items-center gap-2 text-[12px] text-gray-500"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 15th, 16th & 17th March</div>
                    </div>
                </a>
                <a href="/courses/sugar-craft" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden block">
                    <div class="relative overflow-hidden h-[180px] bg-[#FFF8F0]">
                        <img src="/assets/images/caterpillar-cupcakes.jpeg" alt="Sugar Craft Cake Decorating Course" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide" style="background:#16a34a">New</span>
                    </div>
                    <div class="p-5">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Cake Decorating</p>
                        <h3 class="font-bold text-dark text-base mb-2 leading-tight group-hover:text-[#fc880d] transition-colors">Sugar Craft Cake Decorating Course</h3>
                        <div class="flex items-center gap-2 text-[12px] text-gray-500"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 8th & 9th April</div>
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
                        <div class="flex items-center gap-2 text-[12px] text-gray-500"><i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> 22nd & 23rd March</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
