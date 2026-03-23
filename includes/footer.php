    <!-- Footer -->
    <footer id="footer" class="bg-dark text-gray-300 pt-14 pb-8 border-t border-white/5">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8 mb-10">
                <div class="lg:col-span-2">
                    <a href="/" class="block mb-6">
                        <img src="assets/logo-removebg-preview.png" alt="Gauri Creations" class="h-16 w-auto object-contain brightness-0 invert">
                    </a>
                    <p class="text-gray-400 mb-8 max-w-md leading-relaxed text-lg">A space to explore your talent, enhance your skills, and turn your passion into mastery through professional culinary & craft courses.</p>
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/gauricreations_/" target="_blank" class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-mustard transition-all duration-300 hover:-translate-y-1"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                        <a href="https://wa.me/918527780181" target="_blank" class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-mustard transition-all duration-300 hover:-translate-y-1"><i data-lucide="message-circle" class="w-5 h-5"></i></a>
                        <a href="tel:+918527780181" class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-mustard transition-all duration-300 hover:-translate-y-1"><i data-lucide="phone" class="w-5 h-5"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white text-xl font-medium mb-6">Quick Links</h4>
                    <ul class="space-y-4 text-base">
                        <li><a href="/" class="hover:text-mustard transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-mustard"></div> Home</a></li>
                        <li><a href="/about" class="hover:text-mustard transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-mustard"></div> About Us</a></li>
                        <li><a href="/courses" class="hover:text-mustard transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-mustard"></div> Courses</a></li>
                        <li><a href="/contact" class="hover:text-mustard transition-colors flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-mustard"></div> Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-xl font-medium mb-6">Workshops</h4>
                    <ul class="space-y-4 text-base">
                        <li><a href="/courses" class="hover:text-mustard transition-colors">Cake Baking & Icing</a></li>
                        <li><a href="/courses" class="hover:text-mustard transition-colors">Sugar Craft Decorating</a></li>
                        <li><a href="/courses" class="hover:text-mustard transition-colors">Mughlai & Italian Class</a></li>
                        <li><a href="/courses" class="hover:text-mustard transition-colors">Subways & Sauces</a></li>
                        <li><a href="/courses" class="hover:text-mustard transition-colors">Kids Special</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-xl font-medium mb-6">Contact</h4>
                    <ul class="space-y-5 text-base">
                        <li class="flex items-start gap-4">
                            <div class="bg-mustard/20 p-2 rounded-lg text-mustard shrink-0"><i data-lucide="map-pin" class="w-5 h-5"></i></div>
                            Gurgaon Sec 38, Haryana
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="bg-mustard/20 p-2 rounded-lg text-mustard shrink-0"><i data-lucide="phone" class="w-5 h-5"></i></div>
                            <div>
                                <a href="tel:+918527780181" class="hover:text-mustard transition-colors block">+91 8527780181</a>
                                <a href="tel:+919999453960" class="hover:text-mustard transition-colors block">+91 9999453960</a>
                            </div>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="bg-mustard/20 p-2 rounded-lg text-mustard shrink-0"><i data-lucide="mail" class="w-5 h-5"></i></div>
                            <a href="mailto:gauricreationsmkt@gmail.com" class="hover:text-mustard transition-colors">gauricreationsmkt@gmail.com</a>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="bg-mustard/20 p-2 rounded-lg text-mustard shrink-0"><i data-lucide="instagram" class="w-5 h-5"></i></div>
                            <a href="https://www.instagram.com/gauricreations_/" target="_blank" class="hover:text-mustard transition-colors">@gauricreations_</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-white/10 text-sm text-gray-500 font-medium">
                <p>&copy; <?= date('Y') ?> Gauri Creations. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Initialize Scripts -->
    <script>
        lucide.createIcons();
        const hamburger = document.getElementById('ec-hamburger');
        const mobileMenu = document.getElementById('ec-mobile-menu');
        const mobileClose = document.getElementById('ec-mobile-close');

        if(hamburger) {
            hamburger.addEventListener('click', () => {
                mobileMenu.classList.add('open');
                document.body.style.overflow = 'hidden';
            });
        }
        if(mobileClose) {
            mobileClose.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        }

        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 10) nav.classList.add('scrolled');
            else nav.classList.remove('scrolled');
        });
    </script>

    <!-- Fixed WhatsApp Floating Button -->
    <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20want%20to%20enquire%20about%20your%20courses." target="_blank"
       style="position:fixed;bottom:24px;right:24px;z-index:999;background:#25D366;color:#fff;width:60px;height:60px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(37,211,102,0.4);transition:transform 0.3s,box-shadow 0.3s;"
       onmouseover="this.style.transform='scale(1.1)';this.style.boxShadow='0 6px 28px rgba(37,211,102,0.5)'"
       onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 4px 20px rgba(37,211,102,0.4)'"
       aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>
