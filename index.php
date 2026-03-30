<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gauri Creations | Culinary & Artistic Mastery</title>
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
        /* Fix text clamp for line numbers */
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

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

        /* Category bar */
        .ec-cat-bar {
            background: #222;
            overflow: hidden;
        }

        .ec-cat-inner {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 0;
            padding: 0 24px;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .ec-cat-inner::-webkit-scrollbar {
            display: none;
        }

        .ec-cat-link {
            color: #ddd;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 20px;
            white-space: nowrap;
            transition: color 0.2s, background 0.2s;
            position: relative;
            text-decoration: none;
            letter-spacing: 0.02em;
        }

        .ec-cat-link:hover,
        .ec-cat-link.active {
            color: #fc880d;
            background: rgba(252, 136, 13, 0.08);
        }

        .ec-cat-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20px;
            right: 20px;
            height: 2px;
            background: #fc880d;
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .ec-cat-link:hover::after,
        .ec-cat-link.active::after {
            transform: scaleX(1);
        }

        .ec-cat-all {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff;
            font-weight: 600;
            font-size: 13px;
            padding: 12px 20px;
            background: #fc880d;
            cursor: pointer;
            white-space: nowrap;
            transition: background 0.2s;
            text-decoration: none;
        }

        .ec-cat-all:hover {
            background: #e27a0c;
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

        /* Full-page hero wrapper */
        .hero-full-wrapper {
            display: flex;
            flex-direction: column;
            height: 100vh;
            min-height: 600px;
        }

        @media (max-width: 768px) {
            .hero-full-wrapper {
                height: auto;
                min-height: 0;
            }
        }

        /* ===== HERO BANNER SLIDER ===== */
        .hero-slider {
            width: 100%;
            position: relative;
            overflow: hidden;
            flex: 1;
        }

        .hero-slides {
            display: flex;
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: transform;
            height: 100%;
        }

        .hero-slide {
            min-width: 100%;
            position: relative;
            overflow: hidden;
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-slide-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.15) 55%, transparent 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 48px 60px;
        }

        @media (max-width: 768px) {
            .hero-slider {
                height: 55vh;
                min-height: 320px;
                flex: none;
            }
            .hero-slide-overlay {
                padding: 20px 20px;
                background: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.1) 100%);
                justify-content: flex-end;
            }
        }

        .hero-slide-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(252, 136, 13, 0.9);
            color: #fff;
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            width: fit-content;
            margin-bottom: 16px;
            backdrop-filter: blur(8px);
        }

        .hero-slide-title {
            font-family: 'Lora', serif;
            color: #fff;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.15;
            max-width: 560px;
            margin-bottom: 12px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 768px) {
            .hero-slide-title {
                font-size: 1.4rem;
                max-width: 100%;
            }
        }

        .hero-slide-desc {
            color: rgba(255, 255, 255, 0.85);
            font-size: 15px;
            max-width: 420px;
            margin-bottom: 24px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .hero-slide-desc {
                font-size: 12px;
                max-width: 100%;
                margin-bottom: 14px;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            .hero-slide-btn {
                padding: 10px 24px;
                font-size: 13px;
            }
            .hero-slide-tag {
                font-size: 10px;
                padding: 4px 12px;
                margin-bottom: 10px;
            }
        }

        .hero-slide-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fc880d;
            color: #fff;
            padding: 12px 32px;
            border-radius: 100px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            width: fit-content;
            box-shadow: 0 4px 20px rgba(252, 136, 13, 0.35);
        }

        .hero-slide-btn:hover {
            background: #e27a0c;
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(252, 136, 13, 0.45);
        }

        /* Slider Arrows */
        .hero-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.25s, transform 0.25s;
        }

        .hero-arrow:hover {
            background: #fc880d;
            border-color: #fc880d;
            transform: translateY(-50%) scale(1.1);
        }

        @media (max-width: 768px) {
            .hero-arrow { width: 36px; height: 36px; }
        }

        .hero-arrow-left {
            left: 12px;
        }

        .hero-arrow-right {
            right: 20px;
        }

        @media (max-width: 768px) {
            .hero-arrow {
                width: 36px;
                height: 36px;
            }

            .hero-arrow-left {
                left: 10px;
            }

            .hero-arrow-right {
                right: 10px;
            }
        }

        /* Slider Dots */
        .hero-dots {
            position: absolute;
            bottom: 90px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .hero-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            border: none;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s, width 0.3s;
        }

        .hero-dot.active {
            background: #fc880d;
            width: 28px;
            border-radius: 100px;
            transform: scale(1);
        }

        /* Promo strip - sits at bottom of hero */
        .promo-strip {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 12;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        .promo-strip-inner {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
        }

        @media (max-width: 768px) {
            .promo-strip { display: none; }
        }

        .promo-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px 24px;
            border-right: 1px solid #f0ebe3;
        }

        .promo-item:last-child {
            border-right: none;
        }

        @media (max-width: 768px) {
            .promo-item {
                padding: 12px 16px;
                gap: 8px;
            }

            .promo-item:nth-child(2) {
                border-right: none;
            }
        }

        .promo-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #FFF3E0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fc880d;
            flex-shrink: 0;
        }

        .promo-text strong {
            display: block;
            font-size: 13px;
            color: #222;
            font-weight: 600;
        }

        .promo-text span {
            font-size: 11px;
            color: #888;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-animate .hero-slide-tag {
            animation: fadeInUp 0.6s 0.1s both;
        }

        .slide-animate .hero-slide-title {
            animation: fadeInUp 0.6s 0.25s both;
        }

        .slide-animate .hero-slide-desc {
            animation: fadeInUp 0.6s 0.4s both;
        }

        .slide-animate .hero-slide-btn {
            animation: fadeInUp 0.6s 0.55s both;
        }
    </style>
</head>

<?php $activePage = "home"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <!-- ===== FULL-PAGE HERO WRAPPER ===== -->
    <div class="hero-full-wrapper">

        <!-- ===== MAIN NAVBAR ===== -->
        <header class="ec-nav-main" id="navbar">
            <div class="ec-nav-inner">
                <!-- Logo -->
                <a href="/" class="ec-logo" id="logo">
                    <img id="logo-img" src="assets/logo-removebg-preview.png" alt="Gauri Creations">
                </a>

                <!-- Center Links for Desktop -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">Home</a>
                    <a href="/about" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">About</a>
                    <a href="/courses" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">Courses</a>
                    <a href="/contact" class="text-[15px] font-semibold text-dark hover:text-[#fc880d] transition-colors">Contact</a>
                </nav>

                <!-- Right side: Book Now + Hamburger -->
                <div class="ec-nav-right">
                    <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank" class="ec-wa-btn ec-book-btn-desktop"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp</a>
                    <a href="/courses" class="ec-book-btn ec-book-btn-desktop">Book Now</a>
                    <button class="ec-hamburger" id="ec-hamburger" aria-label="Open Menu">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- ===== CATEGORY BAR ===== -->
        <nav class="ec-cat-bar" id="ec-cat-bar">
            <div class="ec-cat-inner">
                <a href="/courses" class="ec-cat-all"><i data-lucide="layout-grid" class="w-4 h-4"></i> All
                    Categories</a>
                <a href="/courses" class="ec-cat-link active">Desserts</a>
                <a href="/courses" class="ec-cat-link">Baking</a>
                <a href="/courses" class="ec-cat-link">Main Course</a>
                <a href="/courses" class="ec-cat-link">Healthy Diet</a>
                <a href="#about" class="ec-cat-link">Workshops</a>
                <a href="/courses" class="ec-cat-link">Courses</a>
                <a href="/courses" class="ec-cat-link">Trousseau</a>
                <a href="/courses" class="ec-cat-link">Gift Hampers</a>
            </div>
        </nav>

        <!-- ===== MOBILE MENU OVERLAY ===== -->
        <div class="ec-mobile-menu" id="ec-mobile-menu">
            <div class="ec-mobile-panel">
                <div class="ec-mobile-header">
                    <img src="assets/logo-removebg-preview.png" alt="Gauri Creations" style="height:36px;">
                    <button id="ec-mobile-close" style="background:none;border:none;cursor:pointer;color:#222;"><i
                            data-lucide="x" class="w-6 h-6"></i></button>
                </div>
                <div class="ec-mobile-links">
                    <a href="/" class="ec-mobile-link" style="background: #FFF3E0; color: #fc880d;"><i data-lucide="home" class="w-5 h-5"></i> Home</a>
                    <a href="/about" class="ec-mobile-link"><i data-lucide="info" class="w-5 h-5"></i> About</a>
                    <a href="/courses" class="ec-mobile-link"><i data-lucide="book-open" class="w-5 h-5"></i> Courses</a>
                    <a href="/contact" class="ec-mobile-link"><i data-lucide="phone" class="w-5 h-5"></i> Contact</a>
                </div>
                <div class="ec-mobile-cta" style="display:flex;flex-direction:column;gap:8px;">
                    <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank" class="ec-wa-btn" style="display:flex;align-items:center;justify-content:center;gap:8px;width:100%;"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Enquiry</a>
                    <a href="/courses" class="ec-book-btn" style="display:block;text-align:center;width:100%;">Book
                        Now</a>
                </div>
            </div>
        </div>

        <!-- ===== HERO BANNER SLIDER ===== -->
        <section id="home" class="hero-slider">
            <div class="hero-slides" id="heroSlides">
                <!-- Slide 1 -->
                <div class="hero-slide">
                    <img src="assets/images/dessert-spread-table.jpeg" alt="Artisan Desserts Workshop">
                    <div class="hero-slide-overlay slide-animate">
                        <span class="hero-slide-tag"><i data-lucide="sparkles" class="w-3.5 h-3.5"></i> New
                            Workshop</span>
                        <h2 class="hero-slide-title">Master Artisan Desserts with Expert Guidance</h2>
                        <p class="hero-slide-desc">Join our hands-on workshop and learn to craft show-stopping pastries,
                            cakes, and treats from scratch.</p>
                        <a href="/courses" class="hero-slide-btn">Explore Courses <i data-lucide="arrow-right"
                                class="w-4 h-4"></i></a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="hero-slide">
                    <img src="assets/images/sarika-teaching-class.jpeg" alt="Cooking Class">
                    <div class="hero-slide-overlay slide-animate">
                        <span class="hero-slide-tag"><i data-lucide="percent" class="w-3.5 h-3.5"></i> Limited
                            Offer</span>
                        <h2 class="hero-slide-title">Cake Decorating Masterclass — 30% Off</h2>
                        <p class="hero-slide-desc">Learn professional frosting, fondant art, and modern cake design in
                            our
                            flagship course.</p>
                        <a href="/courses" class="hero-slide-btn">Enroll Now <i data-lucide="arrow-right"
                                class="w-4 h-4"></i></a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="hero-slide">
                    <img src="assets/images/kids-chef-hats-outdoor.jpeg" alt="Baking Masterclass">
                    <div class="hero-slide-overlay slide-animate">
                        <span class="hero-slide-tag"><i data-lucide="leaf" class="w-3.5 h-3.5"></i> Trending</span>
                        <h2 class="hero-slide-title">Healthy Gourmet — Cook Delicious, Eat Nutritious</h2>
                        <p class="hero-slide-desc">Discover wholesome recipes that are as beautiful as they are
                            nourishing.
                            Perfect for all levels.</p>
                        <a href="/courses" class="hero-slide-btn">Start Learning <i data-lucide="arrow-right"
                                class="w-4 h-4"></i></a>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="hero-slide">
                    <img src="assets/images/food-platter-spread.jpeg" alt="Healthy Food">
                    <div class="hero-slide-overlay slide-animate">
                        <span class="hero-slide-tag"><i data-lucide="gift" class="w-3.5 h-3.5"></i> Best Seller</span>
                        <h2 class="hero-slide-title">Curated Gift Hampers for Every Occasion</h2>
                        <p class="hero-slide-desc">Handpicked gourmet treats, artisan snacks, and beautifully crafted
                            trousseau — delivered fresh.</p>
                        <a href="/courses" class="hero-slide-btn">Shop Hampers <i data-lucide="arrow-right"
                                class="w-4 h-4"></i></a>
                    </div>
                </div>
            </div>

            <!-- Arrows -->
            <button class="hero-arrow hero-arrow-left" id="heroArrowLeft"><i data-lucide="chevron-left"
                    class="w-5 h-5"></i></button>
            <button class="hero-arrow hero-arrow-right" id="heroArrowRight"><i data-lucide="chevron-right"
                    class="w-5 h-5"></i></button>

            <!-- Dots -->
            <div class="hero-dots" id="heroDots"></div>

            <!-- ===== PROMO STRIP (inside slider) ===== -->
            <div class="promo-strip">
                <div class="promo-strip-inner">
                    <div class="promo-item">
                        <div class="promo-icon"><i data-lucide="award" class="w-5 h-5"></i></div>
                        <div class="promo-text"><strong>Certified Courses</strong><span>Get certified on completion</span></div>
                    </div>
                    <div class="promo-item">
                        <div class="promo-icon"><i data-lucide="leaf" class="w-5 h-5"></i></div>
                        <div class="promo-text"><strong>100% Eggless</strong><span>Pure vegetarian recipes</span></div>
                    </div>
                    <div class="promo-item">
                        <div class="promo-icon"><i data-lucide="users" class="w-5 h-5"></i></div>
                        <div class="promo-text"><strong>Small Batches</strong><span>Max 6-7 students only</span></div>
                    </div>
                    <div class="promo-item">
                        <div class="promo-icon"><i data-lucide="utensils" class="w-5 h-5"></i></div>
                        <div class="promo-text"><strong>Hands-On Learning</strong><span>Scratch to finish in class</span></div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- END hero-full-wrapper -->

    <!-- ===== ABOUT SECTION — Compact Ecommerce Style ===== -->
    <section id="about" class="py-16 md:py-20 bg-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid md:grid-cols-[380px_1fr] lg:grid-cols-[420px_1fr] gap-10 lg:gap-16 items-center">

                <!-- Left: Chef Image -->
                <div class="relative group mx-auto md:mx-0">
                    <div
                        class="w-[320px] h-[400px] md:w-[380px] md:h-[460px] lg:w-[420px] lg:h-[500px] rounded-3xl overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.12)] relative">
                        <img src="assets/images/sarika-teaching-class.jpeg" alt="Sarika Jindal — Founder of Gauri Creations"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <!-- Gradient overlay at bottom -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none">
                        </div>
                        <!-- Name badge -->
                        <div class="absolute bottom-5 left-5 right-5 flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-[#fc880d] flex items-center justify-center text-white flex-shrink-0">
                                <i data-lucide="chef-hat" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-white font-bold text-sm leading-tight">Sarika Jindal</p>
                                <p class="text-white/70 text-xs">Founder & Head Chef</p>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative accent -->
                    <div class="absolute -bottom-3 -right-3 w-24 h-24 bg-[#fc880d]/10 rounded-2xl -z-10"></div>
                    <div class="absolute -top-3 -left-3 w-16 h-16 bg-[#fc880d]/8 rounded-xl -z-10"></div>
                </div>

                <!-- Right: Content -->
                <div class="flex flex-col">
                    <!-- Label -->
                    <span
                        class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                        <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> About Gauri Creations
                    </span>

                    <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight leading-tight mb-4">
                        Crafting Culinary Excellence<br class="hidden md:inline"> Since Day One
                    </h2>

                    <p class="text-gray-500 text-[15px] leading-relaxed mb-3 max-w-[560px]">
                        <strong class="text-dark">Gauri Creations</strong> was founded by Sarika Jindal — a passionate
                        culinary expert who built her baking and cooking academy from the ground up. What started as a
                        small kitchen experiment is now a thriving community of food lovers.
                    </p>
                    <p class="text-gray-500 text-[15px] leading-relaxed mb-6 max-w-[560px]">
                        She simplifies professional-level cooking techniques for homemakers, beginners, and aspiring
                        bakers — teaching with clarity, confidence, and perfection.
                    </p>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
                        <div
                            class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-colors">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">10K+</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Students</p>
                        </div>
                        <div
                            class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-colors">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">200+</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Recipes</p>
                        </div>
                        <div
                            class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-colors">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">50+</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Courses</p>
                        </div>
                        <div
                            class="bg-[#FFF8F0] rounded-2xl px-4 py-4 text-center border border-[#fc880d]/10 hover:border-[#fc880d]/30 transition-colors">
                            <p class="text-2xl md:text-3xl font-bold text-[#fc880d] leading-none mb-1">4.9</p>
                            <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wide">Rating</p>
                        </div>
                    </div>

                    <!-- Actions Row -->
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="/courses"
                            class="inline-flex items-center gap-2 bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold px-7 py-3 rounded-full shadow-[0_4px_16px_rgba(252,136,13,0.3)] transition-all text-sm">
                            Explore Courses <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <!-- Social -->
                        <a href="https://www.instagram.com/gauricreations_/" target="_blank"
                            class="w-9 h-9 rounded-full bg-gray-100 hover:bg-[#fc880d] hover:text-white text-gray-500 flex items-center justify-center transition-all ml-auto">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Slim CTA Banner -->
    <section class="relative overflow-hidden"
        style="background: linear-gradient(135deg, #fc880d 0%, #e27a0c 50%, #d06b08 100%);">
        <div
            class="max-w-[1300px] mx-auto px-6 md:px-12 py-6 flex flex-col sm:flex-row justify-between items-center gap-4 relative z-10">
            <div class="flex items-center gap-3 text-white">
                <i data-lucide="zap" class="w-5 h-5 flex-shrink-0"></i>
                <p class="font-semibold text-sm md:text-base">Experience the finest culinary creations — freshly made &
                    delivered to your door.</p>
            </div>
            <a href="/courses"
                class="bg-white text-[#e27a0c] px-6 py-2.5 rounded-full font-bold text-sm hover:bg-gray-50 transition-all shadow-lg shrink-0 inline-flex items-center gap-2">
                Explore Menu <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>
        <!-- Subtle pattern -->
        <div
            class="absolute inset-0 opacity-[0.08] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none">
        </div>
    </section>

    <!-- ===== SHOP BY CATEGORY — Slider ===== -->
    <section class="py-16 md:py-20 bg-[#FAFAFA] relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <!-- Header -->
            <div class="flex justify-between items-end mb-8">
                <div>
                    <span
                        class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-2">
                        <i data-lucide="grid-3x3" class="w-3.5 h-3.5"></i> Browse
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight">Shop by Category</h2>
                </div>
            </div>

            <!-- Category Slider -->
            <div class="flex gap-6 md:gap-8 overflow-x-auto hide-scroll-bar scroll-smooth pb-4 snap-x" id="cat-slider">
                <!-- Category 1 -->
                <a href="/courses" class="flex flex-col items-center gap-3 min-w-[130px] group snap-start shrink-0">
                    <div
                        class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full overflow-hidden border-3 border-transparent group-hover:border-[#fc880d] transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <img src="assets/images/chocolate-mousse-cups.jpeg" alt="Desserts"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span
                        class="text-sm font-semibold text-dark group-hover:text-[#fc880d] transition-colors">Desserts</span>
                </a>
                <!-- Category 2 -->
                <a href="/courses" class="flex flex-col items-center gap-3 min-w-[130px] group snap-start shrink-0">
                    <div
                        class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full overflow-hidden border-3 border-transparent group-hover:border-[#fc880d] transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <img src="assets/images/cupcakes-brownies-box.jpeg" alt="Baking"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span
                        class="text-sm font-semibold text-dark group-hover:text-[#fc880d] transition-colors">Baking</span>
                </a>
                <!-- Category 3 -->
                <a href="/courses" class="flex flex-col items-center gap-3 min-w-[130px] group snap-start shrink-0">
                    <div
                        class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full overflow-hidden border-3 border-transparent group-hover:border-[#fc880d] transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <img src="assets/images/caterpillar-cupcakes.jpeg" alt="Cakes"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span
                        class="text-sm font-semibold text-dark group-hover:text-[#fc880d] transition-colors">Cakes</span>
                </a>
                <!-- Category 4 -->
                <a href="/courses" class="flex flex-col items-center gap-3 min-w-[130px] group snap-start shrink-0">
                    <div
                        class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full overflow-hidden border-3 border-transparent group-hover:border-[#fc880d] transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <img src="assets/images/pad-thai-dish.jpeg" alt="Main Course"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-sm font-semibold text-dark group-hover:text-[#fc880d] transition-colors">Main
                        Course</span>
                </a>
                <!-- Category 5 -->
                <a href="/courses" class="flex flex-col items-center gap-3 min-w-[130px] group snap-start shrink-0">
                    <div
                        class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full overflow-hidden border-3 border-transparent group-hover:border-[#fc880d] transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <img src="assets/images/fresh-salad-plate.jpeg" alt="Healthy Diet"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-sm font-semibold text-dark group-hover:text-[#fc880d] transition-colors">Healthy
                        Diet</span>
                </a>
                <!-- Category 6 -->
                <a href="/courses" class="flex flex-col items-center gap-3 min-w-[130px] group snap-start shrink-0">
                    <div
                        class="w-[110px] h-[110px] md:w-[130px] md:h-[130px] rounded-full overflow-hidden border-3 border-transparent group-hover:border-[#fc880d] transition-all duration-300 shadow-md group-hover:shadow-lg">
                        <img src="assets/images/fun-face-sandwich-art.jpeg" alt="Gift Hampers"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <span class="text-sm font-semibold text-dark group-hover:text-[#fc880d] transition-colors">Gift
                        Hampers</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== OUR COURSES — Course Cards ===== -->
    <section id="courses" class="py-16 md:py-20 bg-gradient-to-b from-white via-[#FFF9F2] to-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
                <div>
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-2">
                        <i data-lucide="graduation-cap" class="w-3.5 h-3.5"></i> Our Offerings
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight">Featured Courses</h2>
                    <p class="text-gray-400 text-sm mt-1">Learn from the best — hands-on workshops & professional courses</p>
                </div>
                <div class="flex gap-3">
                    <button id="slider-btn-left" class="w-10 h-10 rounded-full border border-gray-200 text-gray-500 flex items-center justify-center hover:bg-[#fc880d] hover:border-[#fc880d] hover:text-white transition-colors">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button id="slider-btn-right" class="w-10 h-10 rounded-full border border-gray-200 text-gray-500 flex items-center justify-center hover:bg-[#fc880d] hover:border-[#fc880d] hover:text-white transition-colors">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>

            <!-- Course Slider -->
            <div id="recipe-slider" class="flex overflow-x-auto gap-5 md:gap-6 snap-x snap-mandatory hide-scroll-bar scroll-smooth pb-6">

                <!-- Course Card 1: Cake Baking & Icing -->
                <div class="min-w-[280px] w-[280px] md:min-w-[300px] md:w-[300px] bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 snap-start shrink-0 group overflow-hidden">
                    <div class="relative overflow-hidden h-[200px] bg-[#FFF8F0]">
                        <img src="assets/images/cake-wedding-purple.jpeg" alt="Eggless Cake Baking & Icing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 left-3 bg-[#fc880d] text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide shadow-md">Bestseller</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Baking & Icing</p>
                        <h3 class="font-bold text-dark text-[15px] mb-2 leading-tight">Eggless Complete Cake Baking & Icing</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed mb-3 line-clamp-3">Start your own home baker business! 30+ cake varieties — Wedding Cake, Pinata, Geode, Red Velvet, and more from scratch.</p>
                        <div class="flex items-center gap-3 mb-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 15-17 Mar</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 3 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                        <a href="/courses/home-baker" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-2.5 rounded-xl text-sm transition-colors inline-flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Course Card 2: Sugar Craft -->
                <div class="min-w-[280px] w-[280px] md:min-w-[300px] md:w-[300px] bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 snap-start shrink-0 group overflow-hidden">
                    <div class="relative overflow-hidden h-[200px] bg-[#FFF8F0]">
                        <img src="assets/images/sugar-craft-1.jpeg" alt="Sugar Craft Cake Decorating" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 left-3 bg-green-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide shadow-md">New</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Cake Decorating</p>
                        <h3 class="font-bold text-dark text-[15px] mb-2 leading-tight">Sugar Craft Cake Decorating</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed mb-3 line-clamp-3">Learn fondant dough from scratch, sugarpaste techniques, flower making, animal figures & professional cake covering.</p>
                        <div class="flex items-center gap-3 mb-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 8-9 Apr</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                        <a href="/courses/sugar-craft" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-2.5 rounded-xl text-sm transition-colors inline-flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Course Card 3: Mughlai -->
                <div class="min-w-[280px] w-[280px] md:min-w-[300px] md:w-[300px] bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 snap-start shrink-0 group overflow-hidden">
                    <div class="relative overflow-hidden h-[200px] bg-[#FFF8F0]">
                        <img src="assets/images/snacks-spread-collage.jpeg" alt="Mughlai Food Class" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide shadow-md">Popular</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Mughlai Cooking</p>
                        <h3 class="font-bold text-dark text-[15px] mb-2 leading-tight">Mughlai Food Masterclass</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed mb-3 line-clamp-3">Mughlai richness! Learn Dal Maharani, Paneer Lababdar, Dum Biryani, Malai Kofta, Navratan Korma & 17 more recipes.</p>
                        <div class="flex items-center gap-3 mb-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 22-23 Mar</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                        <a href="/courses/mughlai" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-2.5 rounded-xl text-sm transition-colors inline-flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Course Card 4: Subways -->
                <div class="min-w-[280px] w-[280px] md:min-w-[300px] md:w-[300px] bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 snap-start shrink-0 group overflow-hidden">
                    <div class="relative overflow-hidden h-[200px] bg-[#FFF8F0]">
                        <img src="assets/images/subway-1.jpeg" alt="Subways & Sauces" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Subways & Dips</p>
                        <h3 class="font-bold text-dark text-[15px] mb-2 leading-tight">Subways, Sauces & Kababs</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed mb-3 line-clamp-3">15 varieties of subways + 30 dips & sauces! From Paneer Tikka to Harissa — learn it all hands-on.</p>
                        <div class="flex items-center gap-3 mb-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 28-29 Mar</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                        <a href="/courses/subways-sauces" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-2.5 rounded-xl text-sm transition-colors inline-flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Course Card 5: Kids Special -->
                <div class="min-w-[280px] w-[280px] md:min-w-[300px] md:w-[300px] bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 snap-start shrink-0 group overflow-hidden">
                    <div class="relative overflow-hidden h-[200px] bg-[#FFF8F0]">
                        <img src="assets/images/kids-yellow-aprons-group.jpeg" alt="Kids Special" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                        <span class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide shadow-md">Kids</span>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Kids Special</p>
                        <h3 class="font-bold text-dark text-[15px] mb-2 leading-tight">Mini Chefs — Kids Workshop</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed mb-3 line-clamp-3">Ages 6-18! Shakes, Sandwiches, Cupcakes, Pizza, Pasta — 18-20 practicals over 3 fun days.</p>
                        <div class="flex items-center gap-3 mb-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 8-10 Jun</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 3 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="tag" class="w-3 h-3 text-[#fc880d]"></i> ₹4,500</span>
                        </div>
                        <a href="/courses/kids-special" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-2.5 rounded-xl text-sm transition-colors inline-flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Course Card 6: Cheesecakes -->
                <div class="min-w-[280px] w-[280px] md:min-w-[300px] md:w-[300px] bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 snap-start shrink-0 group overflow-hidden">
                    <div class="relative overflow-hidden h-[200px] bg-[#FFF8F0]">
                        <img src="assets/images/cheesecake-1.jpeg" alt="Cheesecakes" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                    </div>
                    <div class="p-4">
                        <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">Cheesecakes</p>
                        <h3 class="font-bold text-dark text-[15px] mb-2 leading-tight">Eggless Baked & Non-Baked Cheesecakes</h3>
                        <p class="text-gray-400 text-[12px] leading-relaxed mb-3 line-clamp-3">Gelatin free! NY Cheesecake, Jiggly Japanese, Baklava, Tiramisu, Biscoff & 20+ flavours.</p>
                        <div class="flex items-center gap-3 mb-3 text-[11px] text-gray-500">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3 text-[#fc880d]"></i> 21-22 Dec</span>
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-[#fc880d]"></i> 2 Days</span>
                            <span class="flex items-center gap-1"><i data-lucide="map-pin" class="w-3 h-3 text-[#fc880d]"></i> Gurgaon</span>
                        </div>
                        <a href="/courses/cheesecakes" class="w-full bg-[#fc880d] hover:bg-[#e27a0c] text-white font-semibold py-2.5 rounded-xl text-sm transition-colors inline-flex items-center justify-center gap-2">
                            View Course Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <div class="shrink-0 w-4 md:w-8"></div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="py-16 md:py-20 bg-white relative overflow-hidden">
        <!-- Subtle background pattern to match brand -->
        <div
            class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none">
        </div>

        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
            <div class="mb-12 md:mb-16 flex flex-col items-start w-full text-left">
                <span class="text-mustard font-bold tracking-widest uppercase text-sm mb-2 block">Our Quality</span>
                <h2 class="font-serif text-4xl md:text-5xl lg:text-5xl text-dark font-bold tracking-wide">Why is it so
                    delicious?</h2>
            </div>

            <div class="grid lg:grid-cols-3 gap-y-16 lg:gap-8 items-center relative">

                <!-- Left Column Features -->
                <div class="flex flex-col gap-8 lg:gap-16 order-2 lg:order-1 relative z-20">

                    <!-- Feature 1 (Top Left) -->
                    <div class="relative text-left group">
                        <div class="flex items-center gap-3 mb-2">
                            <i data-lucide="chef-hat" class="w-6 h-6 text-mustard"></i>
                            <h4 class="text-xl font-serif text-dark font-bold">Unique Recipes</h4>
                        </div>
                        <!-- Horizontal Dashed Base -->
                        <div class="border-b-[3px] border-dashed border-mustard/50 w-full max-w-[300px] mb-3 relative">
                            <!-- Connecting Line to Dessert -->
                            <div
                                class="hidden lg:block absolute left-full top-0 w-[140px] border-b-[3px] border-dashed border-mustard/50 rotate-[25deg] origin-left z-0">
                                <div
                                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-4 h-4 bg-white border-[4px] border-mustard rounded-full shadow-[0_0_10px_rgba(252,136,13,0.3)]">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted leading-relaxed text-[14px] max-w-[280px]">We use only the freshest and
                            highest quality ingredients to create unique artisanal recipes.</p>
                    </div>

                    <!-- Feature 2 (Mid Left) -->
                    <div class="relative text-left group lg:translate-x-[-20px]">
                        <div class="flex items-center gap-3 mb-2">
                            <i data-lucide="handshake" class="w-6 h-6 text-mustard"></i>
                            <h4 class="text-xl font-serif text-dark font-bold">Flexible Terms</h4>
                        </div>
                        <!-- Horizontal Dashed Base -->
                        <div class="border-b-[3px] border-dashed border-mustard/50 w-full max-w-[300px] mb-3 relative">
                            <!-- Connecting Line to Dessert -->
                            <div
                                class="hidden lg:block absolute left-full top-0 w-[80px] border-b-[3px] border-dashed border-mustard/50 rotate-[5deg] origin-left z-0">
                                <div
                                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-4 h-4 bg-white border-[4px] border-mustard rounded-full shadow-[0_0_10px_rgba(252,136,13,0.3)]">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted leading-relaxed text-[14px] max-w-[280px]">We offer both one-time orders
                            and long-term cooperation for deliveries.</p>
                    </div>

                    <!-- Feature 3 (Bot Left) -->
                    <div class="relative text-left group">
                        <div class="flex items-center gap-3 mb-2">
                            <i data-lucide="layers" class="w-6 h-6 text-mustard"></i>
                            <h4 class="text-xl font-serif text-dark font-bold">Diversity</h4>
                        </div>
                        <!-- Horizontal Dashed Base -->
                        <div class="border-b-[3px] border-dashed border-mustard/50 w-full max-w-[300px] mb-3 relative">
                            <!-- Connecting Line to Dessert -->
                            <div
                                class="hidden lg:block absolute left-full top-0 w-[140px] border-b-[3px] border-dashed border-mustard/50 rotate-[-25deg] origin-left z-0">
                                <div
                                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-4 h-4 bg-white border-[4px] border-mustard rounded-full shadow-[0_0_10px_rgba(252,136,13,0.3)]">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted leading-relaxed text-[14px] max-w-[280px]">Our assortment includes many
                            flavors of desserts. With us, everyone finds something to their taste.</p>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="relative flex justify-center items-center py-6 lg:py-10 order-1 lg:order-2 z-30">
                    <div class="w-[280px] h-[280px] md:w-[320px] md:h-[320px] lg:w-[400px] lg:h-[400px] rounded-full overflow-hidden shadow-[0_12px_40px_rgba(252,136,13,0.15)] border-4 border-[#fc880d]/20">
                        <img src="assets/images/workshop-food-spread.jpeg" alt="Workshop Food Spread"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

                <!-- Right Column Features -->
                <div class="flex flex-col gap-8 lg:gap-16 order-3 relative z-20">

                    <!-- Feature 4 (Top Right) -->
                    <div class="relative text-left lg:text-right group lg:ml-auto">
                        <div class="flex items-center lg:justify-end gap-3 mb-2">
                            <i data-lucide="leaf" class="w-6 h-6 text-mustard lg:hidden"></i>
                            <h4 class="text-xl font-serif text-dark font-bold">Freshness</h4>
                            <i data-lucide="leaf" class="w-6 h-6 text-mustard hidden lg:block"></i>
                        </div>
                        <!-- Horizontal Dashed Base -->
                        <div
                            class="border-b-[3px] border-dashed border-mustard/50 w-full max-w-[300px] mb-3 relative lg:ml-auto">
                            <!-- Connecting Line to Dessert -->
                            <div
                                class="hidden lg:block absolute right-full top-0 w-[140px] border-b-[3px] border-dashed border-mustard/50 rotate-[-25deg] origin-right z-0">
                                <div
                                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 h-4 w-4 bg-white border-[4px] border-mustard rounded-full shadow-[0_0_10px_rgba(252,136,13,0.3)]">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted leading-relaxed text-[14px] max-w-[280px] lg:ml-auto">All our recipes are
                            made fresh, so you get them straight from the oven — flavorful and perfect.</p>
                    </div>

                    <!-- Feature 5 (Mid Right) -->
                    <div class="relative text-left lg:text-right group lg:translate-x-[20px] lg:ml-auto">
                        <div class="flex items-center lg:justify-end gap-3 mb-2">
                            <i data-lucide="truck" class="w-6 h-6 text-mustard lg:hidden"></i>
                            <h4 class="text-xl font-serif text-dark font-bold">Delivery</h4>
                            <i data-lucide="truck" class="w-6 h-6 text-mustard hidden lg:block"></i>
                        </div>
                        <!-- Horizontal Dashed Base -->
                        <div
                            class="border-b-[3px] border-dashed border-mustard/50 w-full max-w-[300px] mb-3 relative lg:ml-auto">
                            <!-- Connecting Line to Dessert -->
                            <div
                                class="hidden lg:block absolute right-full top-0 w-[90px] border-b-[3px] border-dashed border-mustard/50 rotate-[-5deg] origin-right z-0">
                                <div
                                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 h-4 w-4 bg-white border-[4px] border-mustard rounded-full shadow-[0_0_10px_rgba(252,136,13,0.3)]">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted leading-relaxed text-[14px] max-w-[280px] lg:ml-auto">We deliver our treats
                            throughout the city directly to your event at a time convenient for you.</p>
                    </div>

                    <!-- Feature 6 (Bot Right) -->
                    <div class="relative text-left lg:text-right group lg:ml-auto">
                        <div class="flex items-center lg:justify-end gap-3 mb-2">
                            <i data-lucide="users" class="w-6 h-6 text-mustard lg:hidden"></i>
                            <h4 class="text-xl font-serif text-dark font-bold">Individual Approach</h4>
                            <i data-lucide="users" class="w-6 h-6 text-mustard hidden lg:block"></i>
                        </div>
                        <!-- Horizontal Dashed Base -->
                        <div
                            class="border-b-[3px] border-dashed border-mustard/50 w-full max-w-[300px] mb-3 relative lg:ml-auto">
                            <!-- Connecting Line to Dessert -->
                            <div
                                class="hidden lg:block absolute right-full top-0 w-[140px] border-b-[3px] border-dashed border-mustard/50 rotate-[25deg] origin-right z-0">
                                <div
                                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 h-4 w-4 bg-white border-[4px] border-mustard rounded-full shadow-[0_0_10px_rgba(252,136,13,0.3)]">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted leading-relaxed text-[14px] max-w-[280px] lg:ml-auto">We care about every student
                            and provide personalized attention with small batches of 6-7 students.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ===== WORKSHOP GALLERY ===== -->
    <section class="py-16 md:py-20 bg-[#FAFAFA] relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="text-center mb-12">
                <span class="inline-flex items-center justify-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-3">
                    <i data-lucide="camera" class="w-3.5 h-3.5"></i> Our Kitchen Stories
                </span>
                <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight">Glimpses from Our Workshops</h2>
                <p class="text-gray-500 text-[15px] mt-3 max-w-xl mx-auto">Real moments from our cooking classes — kids baking, students creating, and delicious food made with love.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-4 auto-rows-[200px] md:auto-rows-[220px]">
                <!-- Tall: Kids Workshop -->
                <div class="rounded-2xl overflow-hidden group relative row-span-2">
                    <img src="assets/images/kids-yellow-aprons-group.jpeg" alt="Kids in chef hats and aprons" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Kids Workshop</span>
                </div>
                <!-- Brownies -->
                <div class="rounded-2xl overflow-hidden group relative">
                    <img src="assets/images/brownie-1.jpeg" alt="Brownies & Blondies" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Brownies</span>
                </div>
                <!-- Kids Pizza -->
                <div class="rounded-2xl overflow-hidden group relative">
                    <img src="assets/images/kids-making-pizza.jpeg" alt="Kids making pizza" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Pizza Making</span>
                </div>
                <!-- Cheesecake -->
                <div class="rounded-2xl overflow-hidden group relative">
                    <img src="assets/images/cheesecake-2.jpeg" alt="Cheesecake course" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Cheesecakes</span>
                </div>
                <!-- Sugar Craft -->
                <div class="rounded-2xl overflow-hidden group relative">
                    <img src="assets/images/sugar-craft-2.jpeg" alt="Sugar Craft decorating" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Sugar Craft</span>
                </div>
                <!-- Subway -->
                <div class="rounded-2xl overflow-hidden group relative">
                    <img src="assets/images/subway-2.jpeg" alt="Subway sandwich course" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Subways & Sauces</span>
                </div>
                <!-- Kids Fruit -->
                <div class="rounded-2xl overflow-hidden group relative">
                    <img src="assets/images/kids-fruit-skewers.jpeg" alt="Kids making fruit skewers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Fun Activities</span>
                </div>
                <!-- Tall: Cake Decorating -->
                <div class="rounded-2xl overflow-hidden group relative row-span-2 lg:block hidden">
                    <img src="assets/images/cake-photo-pink.jpeg" alt="Cake decorating course" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Cake Decorating</span>
                </div>
                <!-- Tea Cakes -->
                <div class="rounded-2xl overflow-hidden group relative md:block hidden">
                    <img src="assets/images/tea-cakes-1.jpeg" alt="Tea Cakes course" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Tea Cakes</span>
                </div>
                <!-- Kids Outdoor -->
                <div class="rounded-2xl overflow-hidden group relative md:block hidden">
                    <img src="assets/images/kids-chef-hats-outdoor.jpeg" alt="Kids outdoor workshop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Outdoor Class</span>
                </div>
                <!-- Cake Mickey -->
                <div class="rounded-2xl overflow-hidden group relative lg:block hidden">
                    <img src="assets/images/cake-mickey.jpeg" alt="Mickey theme cake" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="absolute bottom-3 left-3 text-white text-xs font-bold bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">Theme Cakes</span>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="https://www.instagram.com/gauricreations_/" target="_blank" class="inline-flex items-center gap-2 bg-gradient-to-r from-[#f09433] via-[#e6683c] to-[#bc1888] text-white font-semibold px-8 py-3.5 rounded-full hover:opacity-90 transition-all shadow-lg">
                    <i data-lucide="instagram" class="w-5 h-5"></i> Follow Us on Instagram
                </a>
            </div>
        </div>
    </section>

    <!-- Inline CTA 2 -->
    <section class="bg-mustard py-10 relative overflow-hidden">
        <div
            class="max-w-[1400px] mx-auto px-6 md:px-12 flex flex-col md:flex-row justify-between items-center gap-6 relative z-10">
            <h3 class="font-serif text-2xl md:text-3xl font-bold text-white text-center md:text-left">Planning a special
                event or custom celebration?</h3>
            <a href="#contact-testimonials"
                class="bg-white text-dark px-8 py-3.5 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all shadow-lg shrink-0">Contact
                Us Today</a>
        </div>
        <!-- Decorative subtle pattern -->
        <div
            class="absolute inset-0 opacity-[0.1] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none">
        </div>
    </section>

    <!-- ===== TESTIMONIAL VIDEO SLIDER ===== -->
  

    <section id="faq-info" class="py-16 md:py-20 bg-white relative overflow-hidden">
        <!-- Subtle background blobs -->
        <div class="absolute top-0 right-0 w-80 h-80 bg-mustard/5 rounded-full blur-3xl pointer-events-none -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-mustard/5 rounded-full blur-3xl pointer-events-none translate-y-1/3 -translate-x-1/3"></div>

        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">

            <!-- Section Header -->
            <div class="mb-12 md:mb-14 flex flex-col items-start w-full">
                <span class="inline-flex items-center gap-2 bg-mustard/10 text-mustard font-bold tracking-widest uppercase text-xs px-4 py-2 rounded-full mb-4">
                    <i data-lucide="help-circle" class="w-3.5 h-3.5"></i> Information
                </span>
                <h2 class="font-serif text-4xl md:text-5xl text-dark font-bold tracking-wide">FAQ & <span class="text-mustard">Contact</span></h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

                <!-- Left Side: FAQ -->
                <div class="flex flex-col">
                    <div class="space-y-3">
                        <!-- FAQ 1 -->
                        <details class="group bg-[#FAF7F2] rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden" open>
                            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark font-sans text-base md:text-lg">
                                <span>Do you customize orders for special events?</span>
                                <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                                    <i data-lucide="chevron-down" class="w-4 h-4 md:w-5 md:h-5"></i>
                                </span>
                            </summary>
                            <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                                Absolutely! All our creations can be customized to match your theme, dietary restrictions, or specific taste preferences. We request that you contact us at least 48 hours in advance so we can ensure perfection.
                            </div>
                        </details>

                        <!-- FAQ 2 -->
                        <details class="group bg-[#FAF7F2] rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark font-sans text-base md:text-lg">
                                <span>Do you deliver outside the city area?</span>
                                <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                                    <i data-lucide="chevron-down" class="w-4 h-4 md:w-5 md:h-5"></i>
                                </span>
                            </summary>
                            <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                                We currently handle deliveries exclusively within the immediate city limits to guarantee the freshness and structural integrity of our delicate pastries. However, pickup arrangements can always be made.
                            </div>
                        </details>

                        <!-- FAQ 3 -->
                        <details class="group bg-[#FAF7F2] rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark font-sans text-base md:text-lg">
                                <span>Are your ingredients organic?</span>
                                <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                                    <i data-lucide="chevron-down" class="w-4 h-4 md:w-5 md:h-5"></i>
                                </span>
                            </summary>
                            <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                                Yes, we pride ourselves on sourcing the highest quality, all-natural ingredients. We use premium organic flour, free-range eggs, and real butter. We never use artificial preservatives or harmful additives.
                            </div>
                        </details>

                        <!-- FAQ 4 -->
                        <details class="group bg-[#FAF7F2] rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark font-sans text-base md:text-lg">
                                <span>How do I book a cooking workshop?</span>
                                <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                                    <i data-lucide="chevron-down" class="w-4 h-4 md:w-5 md:h-5"></i>
                                </span>
                            </summary>
                            <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                                You can browse all our available creative workshops on the Courses page. Simply reach out to us via WhatsApp or phone to secure your spot — classes fill up quickly and are kept small for personalized attention.
                            </div>
                        </details>

                        <!-- FAQ 5 -->
                        <details class="group bg-[#FAF7F2] rounded-2xl border border-[#EDE4D8] hover:border-mustard/40 transition-colors [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-dark font-sans text-base md:text-lg">
                                <span>Are all courses 100% eggless?</span>
                                <span class="transition group-open:rotate-180 bg-mustard/15 p-1.5 rounded-full text-mustard shrink-0 ml-3">
                                    <i data-lucide="chevron-down" class="w-4 h-4 md:w-5 md:h-5"></i>
                                </span>
                            </summary>
                            <div class="text-muted p-5 pt-0 leading-relaxed text-[14px]">
                                Yes! All baking and dessert workshops at Gauri Creations are 100% eggless and pure vegetarian. We believe great food doesn't need eggs to be exceptional.
                            </div>
                        </details>
                    </div>

                    <!-- Category quick links -->
                    <div class="mt-8 p-5 bg-[#FAF7F2] rounded-2xl border border-[#EDE4D8]">
                        <p class="text-xs font-bold text-dark uppercase tracking-widest mb-3">Browse by Category</p>
                        <div class="flex flex-wrap gap-2">
                            <a href="/courses#baking" class="px-3 py-1.5 rounded-full bg-white border border-[#EDE4D8] text-dark hover:bg-mustard hover:text-white hover:border-mustard transition-all text-xs font-semibold">Baking & Icing</a>
                            <a href="/courses#cake-decorating" class="px-3 py-1.5 rounded-full bg-white border border-[#EDE4D8] text-dark hover:bg-mustard hover:text-white hover:border-mustard transition-all text-xs font-semibold">Cake Decorating</a>
                            <a href="/courses#mughlai" class="px-3 py-1.5 rounded-full bg-white border border-[#EDE4D8] text-dark hover:bg-mustard hover:text-white hover:border-mustard transition-all text-xs font-semibold">Mughlai</a>
                            <a href="/courses#italian" class="px-3 py-1.5 rounded-full bg-white border border-[#EDE4D8] text-dark hover:bg-mustard hover:text-white hover:border-mustard transition-all text-xs font-semibold">Italian</a>
                            <a href="/courses#pastries" class="px-3 py-1.5 rounded-full bg-white border border-[#EDE4D8] text-dark hover:bg-mustard hover:text-white hover:border-mustard transition-all text-xs font-semibold">Pastries & Brownies</a>
                            <a href="/courses#kids" class="px-3 py-1.5 rounded-full bg-white border border-[#EDE4D8] text-dark hover:bg-mustard hover:text-white hover:border-mustard transition-all text-xs font-semibold">Kids Special</a>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Contact Info -->
                <div class="flex flex-col h-full lg:pt-0">
                    <div class="bg-dark rounded-[1.5rem] p-6 md:p-8 shadow-xl h-full relative overflow-hidden">
                        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
                        <div class="absolute bottom-0 right-0 w-64 h-64 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>

                        <h3 class="font-serif text-2xl md:text-3xl text-white font-bold mb-6 relative z-10">Connect With Us</h3>

                        <div class="flex flex-col gap-5 relative z-10">
                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 rounded-xl bg-mustard/15 flex items-center justify-center shrink-0 border border-mustard/20">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-sm mb-1">Our Location</h4>
                                    <p class="text-white/60 leading-relaxed text-[13px]">Gauri Creations, Gurgaon Sec 38<br>Haryana, India</p>
                                </div>
                            </div>
                            <hr class="border-white/10">
                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 rounded-xl bg-mustard/15 flex items-center justify-center shrink-0 border border-mustard/20">
                                    <i data-lucide="phone" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-sm mb-1">Phone / WhatsApp</h4>
                                    <a href="tel:+918527780181" class="text-white/60 hover:text-mustard transition-colors text-[13px] block">+91 8527780181</a>
                                    <a href="tel:+919999453960" class="text-white/60 hover:text-mustard transition-colors text-[13px] block">+91 9999453960</a>
                                </div>
                            </div>
                            <hr class="border-white/10">
                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 rounded-xl bg-mustard/15 flex items-center justify-center shrink-0 border border-mustard/20">
                                    <i data-lucide="instagram" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-sm mb-1">Instagram</h4>
                                    <a href="https://www.instagram.com/gauricreations_/" target="_blank" class="text-white/60 hover:text-mustard transition-colors text-[13px]">@gauricreations_</a>
                                </div>
                            </div>
                            <hr class="border-white/10">
                            <div class="flex gap-4 items-start">
                                <div class="w-11 h-11 rounded-xl bg-mustard/15 flex items-center justify-center shrink-0 border border-mustard/20">
                                    <i data-lucide="clock" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-sm mb-1">Working Hours</h4>
                                    <p class="text-white/60 leading-relaxed text-[13px]">Mon – Sat: 9:00 AM – 8:00 PM<br>Sun: 10:00 AM – 4:00 PM</p>
                                </div>
                            </div>
                            <div class="mt-2 flex gap-3">
                                <a href="https://wa.me/918527780181" target="_blank" class="flex-1 bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold py-3 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2">
                                    <i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp
                                </a>
                                <a href="tel:+918527780181" class="flex-1 bg-mustard hover:bg-mustard-dark text-white font-bold py-3 rounded-xl text-sm transition-all inline-flex items-center justify-center gap-2">
                                    <i data-lucide="phone" class="w-4 h-4"></i> Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== VIDEO TESTIMONIALS (Gumlet) ===== -->
    <section id="video-testimonials" class="py-16 md:py-20 bg-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
                <div>
                    <span class="inline-flex items-center gap-2 text-[#fc880d] font-bold tracking-widest uppercase text-xs mb-2">
                        <i data-lucide="video" class="w-3.5 h-3.5"></i> Student Stories
                    </span>
                    <h2 class="font-serif text-3xl md:text-4xl text-dark font-bold tracking-tight">Video Testimonials</h2>
                    <p class="text-muted text-sm mt-1">Hear what our students have to say about their experience</p>
                </div>
                <div class="flex gap-3">
                    <button onclick="document.getElementById('vt-slider').scrollBy({left:-360,behavior:'smooth'})" class="w-10 h-10 rounded-full border border-gray-300 text-gray-400 flex items-center justify-center hover:bg-[#fc880d] hover:border-[#fc880d] hover:text-white transition-colors">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button onclick="document.getElementById('vt-slider').scrollBy({left:360,behavior:'smooth'})" class="w-10 h-10 rounded-full border border-gray-300 text-gray-400 flex items-center justify-center hover:bg-[#fc880d] hover:border-[#fc880d] hover:text-white transition-colors">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>

            <!-- Video Slider -->
            <div id="vt-slider" class="flex overflow-x-auto gap-5 md:gap-6 snap-x snap-mandatory hide-scroll-bar scroll-smooth pb-4">
                <!-- Video 1 -->
                <div class="min-w-[280px] w-[280px] md:min-w-[380px] md:w-[380px] snap-start shrink-0 rounded-2xl overflow-hidden shadow-md" style="aspect-ratio:9/16;max-height:480px;">
                    <iframe loading="lazy"
                        src="https://play.gumlet.io/embed/69c12b06c98b51e9c55617f2?background=false&autoplay=false&loop=false&disable_player_controls=false"
                        style="border:none;width:100%;height:100%;"
                        referrerpolicy="origin"
                        allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;fullscreen;"></iframe>
                </div>
                <!-- Video 2 -->
                <div class="min-w-[280px] w-[280px] md:min-w-[380px] md:w-[380px] snap-start shrink-0 rounded-2xl overflow-hidden shadow-md" style="aspect-ratio:9/16;max-height:480px;">
                    <iframe loading="lazy"
                        src="https://play.gumlet.io/embed/69c12b0638a6314ac398e874?background=false&autoplay=false&loop=false&disable_player_controls=false"
                        style="border:none;width:100%;height:100%;"
                        referrerpolicy="origin"
                        allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;fullscreen;"></iframe>
                </div>
                <!-- Video 3 -->
                <div class="min-w-[280px] w-[280px] md:min-w-[380px] md:w-[380px] snap-start shrink-0 rounded-2xl overflow-hidden shadow-md" style="aspect-ratio:9/16;max-height:480px;">
                    <iframe loading="lazy"
                        src="https://play.gumlet.io/embed/69c12b06c98b51e9c55617e9?background=false&autoplay=false&loop=false&disable_player_controls=false"
                        style="border:none;width:100%;height:100%;"
                        referrerpolicy="origin"
                        allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;fullscreen;"></iframe>
                </div>
                <!-- Video 4 -->
                <div class="min-w-[280px] w-[280px] md:min-w-[380px] md:w-[380px] snap-start shrink-0 rounded-2xl overflow-hidden shadow-md" style="aspect-ratio:9/16;max-height:480px;">
                    <iframe loading="lazy"
                        src="https://play.gumlet.io/embed/69c12b06c98b51e9c55617f5?background=false&autoplay=false&loop=false&disable_player_controls=false"
                        style="border:none;width:100%;height:100%;"
                        referrerpolicy="origin"
                        allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;fullscreen;"></iframe>
                </div>
                <div class="shrink-0 w-4 md:w-8"></div>
            </div>
        </div>
    </section>

    <!-- Contact & Enroll Section -->
    <section id="contact-testimonials" class="py-16 md:py-20 bg-[#FAF7F2] relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-mustard/5 rounded-full blur-3xl pointer-events-none -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-mustard/5 rounded-full blur-3xl pointer-events-none translate-y-1/2 -translate-x-1/3"></div>

        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2 bg-mustard/10 text-mustard font-bold tracking-widest uppercase text-xs px-4 py-2 rounded-full mb-4">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Enroll Now
                </span>
                <h2 class="font-serif font-bold text-4xl md:text-5xl text-dark leading-tight mb-3">
                    Start Your <span class="text-mustard">Creative Journey</span>
                </h2>
                <p class="text-muted text-lg max-w-xl mx-auto">Book a free demo class or enquire about our courses. We'd love to hear from you.</p>
            </div>

            <!-- Main Card: Left dark panel + Right light form -->
            <div class="flex flex-col lg:flex-row rounded-[2rem] overflow-hidden shadow-2xl border border-[#EDE4D8]">

                <!-- Left: Dark promo panel -->
                <div class="lg:w-[40%] bg-dark p-8 md:p-12 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 w-80 h-80 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-mustard/15 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="chef-hat" class="w-6 h-6 text-mustard"></i>
                        </div>
                        <h3 class="font-serif font-bold text-3xl md:text-4xl text-white leading-tight mb-4">
                            Learn from the<br><span class="text-mustard">Best Chefs</span>
                        </h3>
                        <p class="text-white/60 text-base leading-relaxed mb-8">
                            Join thousands of students who've transformed their passion for food and art into real skills with Gauri Creations.
                        </p>
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-mustard/15 rounded-full flex items-center justify-center shrink-0">
                                    <i data-lucide="users" class="w-4 h-4 text-mustard"></i>
                                </div>
                                <span class="text-white/80 text-sm font-medium">10,000+ students trained</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-mustard/15 rounded-full flex items-center justify-center shrink-0">
                                    <i data-lucide="award" class="w-4 h-4 text-mustard"></i>
                                </div>
                                <span class="text-white/80 text-sm font-medium">Certificate on completion</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-mustard/15 rounded-full flex items-center justify-center shrink-0">
                                    <i data-lucide="calendar-check" class="w-4 h-4 text-mustard"></i>
                                </div>
                                <span class="text-white/80 text-sm font-medium">Flexible batch timings</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 bg-mustard/15 rounded-full flex items-center justify-center shrink-0">
                                    <i data-lucide="hand-platter" class="w-4 h-4 text-mustard"></i>
                                </div>
                                <span class="text-white/80 text-sm font-medium">Hands-on practical sessions</span>
                            </div>
                        </div>
                    </div>

                    <!-- Rating at bottom -->
                    <div class="relative z-10 mt-10 pt-8 border-t border-white/10">
                        <div class="flex items-center gap-4">
                            <span class="text-5xl font-black text-white leading-none">4.9</span>
                            <div>
                                <div class="flex text-mustard mb-1">
                                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                </div>
                                <span class="text-white/50 text-xs">Based on 10,000+ students</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Light form panel -->
                <div class="lg:w-[60%] bg-white p-8 md:p-12">
                    <h3 class="font-serif font-bold text-2xl md:text-3xl text-dark mb-1">Book a Free Demo</h3>
                    <p class="text-muted text-sm mb-8">Fill in your details and we'll get back to you within 24 hours.</p>

                    <form accept-charset="UTF-8" action="https://app.formester.com/forms/T650XV4zy/submissions" method="POST" class="flex flex-col gap-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-dark flex items-center gap-1.5">
                                    <i data-lucide="user" class="w-3.5 h-3.5 text-mustard"></i> Your Name
                                </label>
                                <input type="text" name="name" placeholder="Enter your full name" required
                                    class="w-full bg-[#FAF7F2] text-dark placeholder:text-[#bbb] font-medium rounded-xl px-4 py-3 outline-none border-2 border-[#EDE4D8] focus:border-mustard hover:border-[#D5C8B8] transition-all text-sm">
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-dark flex items-center gap-1.5">
                                    <i data-lucide="phone" class="w-3.5 h-3.5 text-mustard"></i> Phone Number
                                </label>
                                <input type="tel" name="phone" placeholder="+91 85277 80181" required
                                    class="w-full bg-[#FAF7F2] text-dark placeholder:text-[#bbb] font-medium rounded-xl px-4 py-3 outline-none border-2 border-[#EDE4D8] focus:border-mustard hover:border-[#D5C8B8] transition-all text-sm">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-dark flex items-center gap-1.5">
                                <i data-lucide="mail" class="w-3.5 h-3.5 text-mustard"></i> Email
                            </label>
                            <input type="email" name="email" placeholder="email@example.com"
                                class="w-full bg-[#FAF7F2] text-dark placeholder:text-[#bbb] font-medium rounded-xl px-4 py-3 outline-none border-2 border-[#EDE4D8] focus:border-mustard hover:border-[#D5C8B8] transition-all text-sm">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-dark flex items-center gap-1.5">
                                <i data-lucide="book-open" class="w-3.5 h-3.5 text-mustard"></i> Interested Course
                            </label>
                            <div class="relative">
                                <select name="course" class="w-full bg-[#FAF7F2] text-dark font-medium rounded-xl px-4 py-3 outline-none border-2 border-[#EDE4D8] focus:border-mustard hover:border-[#D5C8B8] transition-all appearance-none cursor-pointer pr-10 text-sm">
                                    <option value="">Select a course</option>
                                    <option value="cake-baking">Eggless Cake Baking & Icing (15-17 Mar)</option>
                                    <option value="sugar-craft">Sugar Craft Cake Decorating (8-9 Apr)</option>
                                    <option value="mughlai">Mughlai Food Class (22-23 Mar)</option>
                                    <option value="subways">Subways, Sauces & Kababs (28-29 Mar)</option>
                                    <option value="pastries">Swiss Roll & Pastries (23-24 May)</option>
                                    <option value="kids">Kids Special Workshop (8-10 Jun)</option>
                                    <option value="brownies">Eggless Brownies & Blondies (23-24 Jul)</option>
                                    <option value="cheesecakes">Eggless Cheesecakes (21-22 Dec)</option>
                                    <option value="italian">Italian Cooking Class (4-5 Jan)</option>
                                </select>
                                <i data-lucide="chevron-down" class="w-4 h-4 text-mustard absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-dark flex items-center gap-1.5">
                                <i data-lucide="message-square" class="w-3.5 h-3.5 text-mustard"></i> Message
                                <span class="text-muted font-normal text-xs ml-1">(optional)</span>
                            </label>
                            <textarea placeholder="Any questions or preferences?"
                                class="w-full bg-[#FAF7F2] text-dark placeholder:text-[#bbb] font-medium rounded-xl px-4 py-3 outline-none border-2 border-[#EDE4D8] focus:border-mustard hover:border-[#D5C8B8] h-24 resize-none transition-all text-sm"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-mustard hover:bg-[#e27a0c] text-white font-bold rounded-xl py-4 transition-all text-base shadow-[0_4px_24px_rgba(252,136,13,0.3)] hover:shadow-[0_8px_32px_rgba(252,136,13,0.45)] hover:-translate-y-0.5 inline-flex items-center justify-center gap-2 tracking-wide">
                            <i data-lucide="send" class="w-4 h-4"></i> Book a Free Demo
                        </button>
                        <p class="text-center text-xs text-muted">We respect your privacy. No spam, ever.</p>
                    </form>
                </div>
            </div>

            <!-- Testimonials below the main card -->
            

        </div>
    </section>



    <!-- Page Scripts -->
    <script>
        // ===== HERO SLIDER =====
        const heroSlides = document.getElementById('heroSlides');
        const heroArrowLeft = document.getElementById('heroArrowLeft');
        const heroArrowRight = document.getElementById('heroArrowRight');
        const heroDots = document.getElementById('heroDots');
        let currentSlide = 0;
        const slideCount = heroSlides ? heroSlides.children.length : 0;

        function goToSlide(index) {
            if (!heroSlides) return;
            currentSlide = (index + slideCount) % slideCount;
            heroSlides.style.transform = `translateX(-${currentSlide * 100}%)`;
            // Update dots
            if (heroDots) {
                heroDots.querySelectorAll('button').forEach((dot, i) => {
                    dot.classList.toggle('bg-[#fc880d]', i === currentSlide);
                    dot.classList.toggle('bg-white/50', i !== currentSlide);
                });
            }
            // Animate slide content
            heroSlides.querySelectorAll('.hero-slide-overlay').forEach((overlay, i) => {
                overlay.classList.toggle('slide-animate', i === currentSlide);
            });
        }

        // Create dots
        if (heroDots && slideCount > 0) {
            for (let i = 0; i < slideCount; i++) {
                const dot = document.createElement('button');
                dot.className = `w-3 h-3 rounded-full transition-all ${i === 0 ? 'bg-[#fc880d]' : 'bg-white/50'}`;
                dot.addEventListener('click', () => goToSlide(i));
                heroDots.appendChild(dot);
            }
        }

        if (heroArrowLeft) heroArrowLeft.addEventListener('click', () => goToSlide(currentSlide - 1));
        if (heroArrowRight) heroArrowRight.addEventListener('click', () => goToSlide(currentSlide + 1));

        // Auto-slide
        let autoSlide = setInterval(() => goToSlide(currentSlide + 1), 5000);
        if (heroSlides) {
            heroSlides.parentElement.addEventListener('mouseenter', () => clearInterval(autoSlide));
            heroSlides.parentElement.addEventListener('mouseleave', () => {
                autoSlide = setInterval(() => goToSlide(currentSlide + 1), 5000);
            });
        }

        // Initial animation
        goToSlide(0);

        // ===== RECIPE SLIDER SCROLL =====
        const recipeSlider = document.getElementById('recipe-slider');
        const recipeBtnLeft = document.getElementById('recipe-slider-left');
        const recipeBtnRight = document.getElementById('recipe-slider-right');
        const recipeScrollAmount = 320;

        if (recipeBtnLeft && recipeSlider) {
            recipeBtnLeft.addEventListener('click', () => {
                recipeSlider.scrollBy({ left: -recipeScrollAmount, behavior: 'smooth' });
            });
        }
        if (recipeBtnRight && recipeSlider) {
            recipeBtnRight.addEventListener('click', () => {
                recipeSlider.scrollBy({ left: recipeScrollAmount, behavior: 'smooth' });
            });
        }

        // ===== FAQ TOGGLE =====
        function toggleFaq(id) {
            const content = document.getElementById(id + '-content');
            const icon = document.getElementById(id + '-icon');
            if (!content) return;
            content.classList.toggle('hidden');
            if (icon) icon.style.transform = content.classList.contains('hidden') ? '' : 'rotate(180deg)';
        }
    </script>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>