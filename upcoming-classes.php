<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Classes | Gauri Creations — Culinary & Artistic Workshops</title>
    <meta name="description" content="Check out upcoming cooking, baking & craft workshops at Gauri Creations. Book your seat for hands-on classes in Sugar Craft, Lebanese, Mexican cuisine and more.">
    <link rel="icon" type="image/png" href="assets/logo-removebg-preview.png">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        mustard: '#fc880d',
                        'mustard-dark': '#e27a0c',
                        dark: '#222222',
                        muted: '#555555',
                        light: '#FCFAF8',
                        accent: '#F4ECCF',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                    }
                }
            }
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* Hide scrollbar */
        .hide-scroll-bar::-webkit-scrollbar { display: none; }
        .hide-scroll-bar { -ms-overflow-style: none; scrollbar-width: none; }

        /* ===== NAVBAR ===== */
        @media (max-width: 768px) {
            .ec-cat-bar { display: none; }
        }

        .ec-nav-main {
            background: #fff;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 100;
            transition: box-shadow 0.3s;
        }

        .ec-nav-main.scrolled {
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        }

        .ec-nav-inner {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
            height: 70px;
            gap: 20px;
        }

        .ec-logo img {
            height: 60px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s;
        }

        .ec-logo:hover img {
            transform: scale(1.05);
        }

        .ec-nav-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .ec-book-btn {
            background: #fc880d;
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 100px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            white-space: nowrap;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 4px 16px rgba(252, 136, 13, 0.25);
            text-decoration: none;
        }

        .ec-book-btn:hover {
            background: #e27a0c;
            transform: translateY(-1px);
        }

        .ec-wa-btn {
            background: #25D366;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 100px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            white-space: nowrap;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 4px 16px rgba(37, 211, 102, 0.25);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .ec-wa-btn:hover {
            background: #20bd5a;
            transform: translateY(-1px);
        }

        /* Mobile hamburger */
        .ec-hamburger {
            display: none;
            background: none;
            border: none;
            color: #222;
            cursor: pointer;
            padding: 4px;
        }

        @media (max-width: 768px) {
            .ec-hamburger {
                display: flex;
            }

            .ec-book-btn-desktop {
                display: none !important;
            }

            .ec-nav-inner {
                height: 56px;
                padding: 0 16px;
                gap: 12px;
            }

            .ec-logo img {
                height: 44px;
            }
        }

        /* Mobile Menu Overlay */
        .ec-mobile-menu {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 200;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        .ec-mobile-menu.open {
            opacity: 1;
            pointer-events: auto;
        }

        .ec-mobile-panel {
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            max-width: 85vw;
            height: 100%;
            background: #fff;
            transform: translateX(100%);
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            box-shadow: -8px 0 30px rgba(0, 0, 0, 0.1);
        }

        .ec-mobile-menu.open .ec-mobile-panel {
            transform: translateX(0);
        }

        .ec-mobile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px;
            border-bottom: 1px solid #eee;
        }

        .ec-mobile-links {
            flex: 1;
            padding: 16px 20px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            overflow-y: auto;
        }

        .ec-mobile-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            color: #222;
            font-weight: 500;
            font-size: 15px;
            border-radius: 12px;
            text-decoration: none;
            transition: background 0.2s;
        }

        .ec-mobile-link:hover {
            background: #FFF3E0;
        }

        .ec-mobile-link i {
            color: #fc880d;
        }

        .ec-mobile-cta {
            padding: 16px 20px;
            border-top: 1px solid #eee;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.92); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(252,136,13,0.3); }
            50% { box-shadow: 0 0 24px 6px rgba(252,136,13,0.15); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .animate-fade-up {
            animation: fadeInUp 0.7s cubic-bezier(0.22,1,0.36,1) both;
        }
        .animate-fade-left {
            animation: fadeInLeft 0.7s cubic-bezier(0.22,1,0.36,1) both;
        }
        .animate-scale-in {
            animation: scaleIn 0.6s cubic-bezier(0.22,1,0.36,1) both;
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Countdown timer styling */
        .countdown-unit {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(252,136,13,0.08);
            border: 1px solid rgba(252,136,13,0.15);
            border-radius: 12px;
            padding: 10px 14px;
            min-width: 64px;
            transition: all 0.3s;
        }
        .countdown-unit:hover {
            background: rgba(252,136,13,0.15);
            border-color: rgba(252,136,13,0.3);
            transform: translateY(-2px);
        }
        .countdown-number {
            font-size: 1.75rem;
            font-weight: 700;
            color: #fc880d;
            line-height: 1;
            font-family: 'Poppins', sans-serif;
        }
        .countdown-label {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #888;
            font-weight: 600;
            margin-top: 4px;
        }

        /* Course card enhancements */
        .upcoming-card {
            background: #fff;
            border-radius: 1.5rem;
            overflow: hidden;
            border: 1px solid #f0ebe3;
            transition: all 0.4s cubic-bezier(0.22,1,0.36,1);
            position: relative;
        }
        .upcoming-card:hover {
            box-shadow: 0 20px 60px rgba(0,0,0,0.1), 0 4px 20px rgba(252,136,13,0.1);
            transform: translateY(-6px);
            border-color: rgba(252,136,13,0.3);
        }
        .upcoming-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #fc880d, #f5a623, #fc880d);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
            z-index: 2;
        }

        /* Glow badge for "Seats Filling Fast" */
        .glow-badge {
            animation: pulseGlow 2.5s ease-in-out infinite;
        }

        /* Hero breadcrumb page header */
        .page-hero {
            background: linear-gradient(135deg, #222222 0%, #1a1a2e 50%, #16213e 100%);
            position: relative;
            overflow: hidden;
        }
        .page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 80% 20%, rgba(252,136,13,0.12) 0%, transparent 60%),
                        radial-gradient(ellipse at 20% 80%, rgba(252,136,13,0.08) 0%, transparent 50%);
            pointer-events: none;
        }
        .page-hero::after {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0.04;
            background-image: radial-gradient(#ffffff 1px, transparent 1px);
            background-size: 20px 20px;
            pointer-events: none;
        }

        /* Timeline connector */
        .timeline-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #fc880d;
            border: 3px solid #FFF3E0;
            box-shadow: 0 0 0 3px rgba(252,136,13,0.2);
            flex-shrink: 0;
            z-index: 2;
        }
        .timeline-line {
            width: 2px;
            background: linear-gradient(to bottom, #fc880d, rgba(252,136,13,0.15));
            flex-shrink: 0;
            z-index: 1;
        }
    </style>
</head>

<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <!-- ===== MAIN NAVBAR ===== -->
    <header class="ec-nav-main" id="navbar">
        <div class="ec-nav-inner">
            <a href="/" class="ec-logo" id="logo">
                <img id="logo-img" src="assets/logo-removebg-preview.png" alt="Gauri Creations">
            </a>
            <nav class="hidden md:flex items-center gap-8">
                <a href="/" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">Home</a>
                <a href="/about" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">About</a>
                <a href="/courses" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">Courses</a>
                <a href="/upcoming-classes" class="text-[15px] font-semibold text-[#fc880d] transition-colors">Upcoming Classes</a>
                <a href="/contact" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">Contact</a>
            </nav>
            <div class="ec-nav-right">
                <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank" class="ec-wa-btn ec-book-btn-desktop"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp</a>
                <a href="/courses" class="ec-book-btn ec-book-btn-desktop">Book Now</a>
                <button class="ec-hamburger" id="ec-hamburger" aria-label="Open Menu">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- ===== MOBILE MENU OVERLAY ===== -->
    <div class="ec-mobile-menu" id="ec-mobile-menu">
        <div class="ec-mobile-panel">
            <div class="ec-mobile-header">
                <img src="assets/logo-removebg-preview.png" alt="Gauri Creations" style="height:36px;">
                <button id="ec-mobile-close" style="background:none;border:none;cursor:pointer;color:#222;"><i data-lucide="x" class="w-6 h-6"></i></button>
            </div>
            <div class="ec-mobile-links">
                <a href="/" class="ec-mobile-link"><i data-lucide="home" class="w-5 h-5"></i> Home</a>
                <a href="/about" class="ec-mobile-link"><i data-lucide="info" class="w-5 h-5"></i> About</a>
                <a href="/courses" class="ec-mobile-link"><i data-lucide="book-open" class="w-5 h-5"></i> Courses</a>
                <a href="/upcoming-classes" class="ec-mobile-link" style="background: #FFF3E0; color: #fc880d;"><i data-lucide="calendar-clock" class="w-5 h-5"></i> Upcoming Classes</a>
                <a href="/contact" class="ec-mobile-link"><i data-lucide="phone" class="w-5 h-5"></i> Contact</a>
            </div>
            <div class="ec-mobile-cta" style="display:flex;flex-direction:column;gap:8px;">
                <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank" class="ec-wa-btn" style="display:flex;align-items:center;justify-content:center;gap:8px;width:100%;"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Enquiry</a>
                <a href="/courses" class="ec-book-btn" style="display:block;text-align:center;width:100%;">Book Now</a>
            </div>
        </div>
    </div>

    <!-- ===== PAGE HERO HEADER ===== -->
         <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2 text-mustard font-bold tracking-widest uppercase text-xs mb-2">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> The Gauri Creations Advantage
                </span>
                <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight">Why Students Love Our Workshops</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Feature 1 -->
                <div class="bg-[#FFF8F0] rounded-2xl p-6 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-mustard/15 flex items-center justify-center mx-auto mb-4 group-hover:bg-mustard group-hover:text-white transition-all">
                        <i data-lucide="hand-platter" class="w-7 h-7 text-mustard group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="font-bold text-dark text-base mb-2">100% Hands-On</h4>
                    <p class="text-gray-400 text-[13px] leading-relaxed">Every student practices from scratch — no watching, only doing.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-[#FFF8F0] rounded-2xl p-6 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-mustard/15 flex items-center justify-center mx-auto mb-4 group-hover:bg-mustard group-hover:text-white transition-all">
                        <i data-lucide="users" class="w-7 h-7 text-mustard group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="font-bold text-dark text-base mb-2">Small Batches</h4>
                    <p class="text-gray-400 text-[13px] leading-relaxed">Max 6-7 students per batch for personalized attention and guidance.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-[#FFF8F0] rounded-2xl p-6 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-mustard/15 flex items-center justify-center mx-auto mb-4 group-hover:bg-mustard group-hover:text-white transition-all">
                        <i data-lucide="award" class="w-7 h-7 text-mustard group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="font-bold text-dark text-base mb-2">Certified Program</h4>
                    <p class="text-gray-400 text-[13px] leading-relaxed">Receive a professional certificate on completion of every course.</p>
                </div>
                <!-- Feature 4 -->
                <div class="bg-[#FFF8F0] rounded-2xl p-6 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-mustard/15 flex items-center justify-center mx-auto mb-4 group-hover:bg-mustard group-hover:text-white transition-all">
                        <i data-lucide="leaf" class="w-7 h-7 text-mustard group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="font-bold text-dark text-base mb-2">100% Eggless</h4>
                    <p class="text-gray-400 text-[13px] leading-relaxed">Pure vegetarian recipes — every baking course is completely eggless.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Page Scripts -->
    <script>
        // ===== COUNTDOWN TIMERS =====
        function updateCountdowns() {
            document.querySelectorAll('.countdown').forEach(timer => {
                const target = new Date(timer.dataset.date).getTime();
                const now = Date.now();
                const diff = target - now;

                const daysEl = timer.querySelector('.days');
                const hoursEl = timer.querySelector('.hours');
                const minsEl = timer.querySelector('.mins');

                if (diff <= 0) {
                    daysEl.textContent = '0';
                    hoursEl.textContent = '0';
                    minsEl.textContent = '0';
                    return;
                }

                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));

                daysEl.textContent = days;
                hoursEl.textContent = hours;
                minsEl.textContent = mins;
            });
        }

        updateCountdowns();
        setInterval(updateCountdowns, 60000); // Update every minute

        // ===== SCROLL REVEAL =====
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.upcoming-card').forEach(card => {
            observer.observe(card);
        });
    </script>


</body>

</html>
