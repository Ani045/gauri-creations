    <!-- ===== MAIN NAVBAR ===== -->
    <header class="ec-nav-main" id="navbar">
        <div class="ec-nav-inner">
            <a href="/" class="ec-logo" id="logo">
                <img id="logo-img" src="assets/logo-removebg-preview.png" alt="Gauri Creations">
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="/" class="text-[15px] font-semibold <?= ($activePage ?? '') === 'home' ? 'text-[#fc880d]' : 'text-dark hover:text-[#fc880d]' ?> transition-colors">Home</a>
                <a href="/about" class="text-[15px] font-semibold <?= ($activePage ?? '') === 'about' ? 'text-[#fc880d]' : 'text-dark hover:text-[#fc880d]' ?> transition-colors">About</a>
                <a href="/courses" class="text-[15px] font-semibold <?= ($activePage ?? '') === 'courses' ? 'text-[#fc880d]' : 'text-dark hover:text-[#fc880d]' ?> transition-colors">Courses</a>
                <a href="/contact" class="text-[15px] font-semibold <?= ($activePage ?? '') === 'contact' ? 'text-[#fc880d]' : 'text-dark hover:text-[#fc880d]' ?> transition-colors">Contact</a>
            </nav>

            <div class="ec-nav-right">
                <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank" class="ec-wa-btn ec-book-btn-desktop"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp</a>
                <a href="/#courses" class="ec-book-btn ec-book-btn-desktop">Book Now</a>
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
                <button id="ec-mobile-close" style="background:none;border:none;cursor:pointer;color:#222;"><i
                        data-lucide="x" class="w-6 h-6"></i></button>
            </div>
            <div class="ec-mobile-links">
                <a href="/" class="ec-mobile-link <?= ($activePage ?? '') === 'home' ? 'style=background:#FFF3E0;color:#fc880d;' : '' ?>"><i data-lucide="home" class="w-5 h-5"></i> Home</a>
                <a href="/about" class="ec-mobile-link <?= ($activePage ?? '') === 'about' ? 'style=background:#FFF3E0;color:#fc880d;' : '' ?>"><i data-lucide="info" class="w-5 h-5"></i> About</a>
                <a href="/courses" class="ec-mobile-link <?= ($activePage ?? '') === 'courses' ? 'style=background:#FFF3E0;color:#fc880d;' : '' ?>"><i data-lucide="book-open" class="w-5 h-5"></i> Courses</a>
                <a href="/contact" class="ec-mobile-link <?= ($activePage ?? '') === 'contact' ? 'style=background:#FFF3E0;color:#fc880d;' : '' ?>"><i data-lucide="phone" class="w-5 h-5"></i> Contact</a>
            </div>
            <div class="ec-mobile-cta" style="display:flex;flex-direction:column;gap:8px;">
                <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank" class="ec-wa-btn" style="display:flex;align-items:center;justify-content:center;gap:8px;width:100%;"><i data-lucide="message-circle" class="w-4 h-4"></i> WhatsApp Enquiry</a>
                <a href="/#courses" class="ec-book-btn" style="display:block;text-align:center;width:100%;">Book Now</a>
            </div>
        </div>
    </div>
