<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Gauri Creations</title>
    <?php include 'includes/head.php'; ?>
</head>

<?php $activePage = "contact"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include 'includes/nav.php'; ?>

    <!-- ===== PAGE HERO ===== -->
    <section class="bg-[#2a2522] py-14 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#fc880d_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10 text-center">
            <h1 class="font-serif text-4xl md:text-5xl text-white font-bold mb-4">Contact Us</h1>
            <p class="text-white/70 text-lg max-w-2xl mx-auto">Get in touch with us for inquiries, custom orders, or any questions about our workshops.</p>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="py-12 md:py-16 bg-[#FAF7F2] relative overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
            <div class="bg-dark rounded-[2rem] relative overflow-hidden text-white shadow-2xl">
                <!-- Mustard top accent bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-[#fc880d] via-[#e27a0c] to-[#fc880d]"></div>

                <div class="p-8 md:p-12 flex flex-col lg:flex-row gap-10 lg:gap-16 relative">
                    <!-- Background Decorations -->
                    <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>

                    <!-- Left Side: Form -->
                    <div class="lg:w-1/2 flex flex-col relative z-10">
                        <span class="text-mustard font-bold tracking-widest uppercase text-sm mb-2 block">Connect</span>
                        <h2 class="font-bold text-4xl md:text-5xl lg:text-5xl font-serif mb-3 leading-tight tracking-wide">
                            Write to Us</h2>
                        <p class="text-lg md:text-xl font-serif text-white/70 mb-8 mt-2">Book a free demo class or enquire.</p>

                        <form accept-charset="UTF-8" action="https://app.formester.com/forms/T650XV4zy/submissions" method="POST" class="bg-[#2A2522] rounded-[1.5rem] p-5 md:p-6 flex flex-col gap-3 text-white shadow-xl w-full max-w-lg mt-auto border border-white/5">
                            <div>
                                <label class="block text-xs font-medium text-white/50 mb-1.5 pl-2">Your Name</label>
                                <input type="text" name="name" placeholder="Enter your full name" required
                                    class="w-full bg-white/5 text-white placeholder:text-white/40 font-medium rounded-full px-5 py-3 outline-none focus:ring-2 focus:ring-mustard border border-white/5 transition-all">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-white/50 mb-1.5 pl-2">Phone Number</label>
                                <input type="tel" name="phone" placeholder="+91 8527780181" required
                                    class="w-full bg-white/5 text-white placeholder:text-white/40 font-medium rounded-full px-5 py-3 outline-none focus:ring-2 focus:ring-mustard border border-white/5 transition-all">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-white/50 mb-1.5 pl-2">Email</label>
                                <input type="email" name="email" placeholder="email@example.com"
                                    class="w-full bg-white/5 text-white placeholder:text-white/40 font-medium rounded-full px-5 py-3 outline-none focus:ring-2 focus:ring-mustard border border-white/5 transition-all">
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-white/50 mb-1.5 pl-2">Message</label>
                                <textarea name="message" placeholder="How can we help you?"
                                    class="w-full bg-white/5 text-white placeholder:text-white/40 font-medium rounded-2xl px-5 py-3 outline-none focus:ring-2 focus:ring-mustard h-28 resize-none border border-white/5 transition-all"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-mustard hover:bg-[#e27a0c] text-white font-bold rounded-full py-3.5 transition-all text-base shadow-[0_4px_20px_rgba(252,136,13,0.3)] hover:shadow-[0_6px_28px_rgba(252,136,13,0.45)] mt-2 inline-flex items-center justify-center gap-2">
                                <i data-lucide="send" class="w-4 h-4"></i> Send Message
                            </button>
                        </form>
                     </div>

                    <!-- Vertical Divider -->
                    <div class="hidden lg:block w-[1px] bg-white/20 absolute left-[52%] top-10 bottom-10"></div>

                    <!-- Right Side: Info -->
                    <div class="lg:w-1/2 flex flex-col relative z-10 lg:pl-8">
                        <h3 class="font-serif text-2xl md:text-3xl text-white font-bold mb-6 mt-2 relative z-10">We'd love to hear from you</h3>
                        <p class="text-[15px] text-white/70 mb-10 leading-relaxed">Whether you have a question about our classes, need a custom order, or anything else, our team is ready to answer all your questions.</p>
                        
                        <div class="flex flex-col gap-6 relative z-10">
                            <!-- Location -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 rounded-full bg-mustard/20 flex items-center justify-center shrink-0 border border-mustard/30 text-white">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-base mb-1">Our Location</h4>
                                    <p class="text-white/70 leading-relaxed text-[14px]">Gauri Creations<br>Gurgaon Sec 38, Haryana, India</p>
                                </div>
                            </div>
                            <hr class="border-white/10">
                            <!-- Phone -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 rounded-full bg-mustard/20 flex items-center justify-center shrink-0 border border-mustard/30 text-white">
                                    <i data-lucide="phone" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-base mb-1">Phone / WhatsApp</h4>
                                    <p class="text-white/70 leading-relaxed text-[14px]"><a href="tel:+918527780181" class="text-white/70 hover:text-mustard">+91 8527780181</a></p>
                                    <p class="text-white/70 leading-relaxed text-[14px]"><a href="tel:+919999453960" class="text-white/70 hover:text-mustard">+91 9999453960</a></p>
                                </div>
                            </div>
                            <hr class="border-white/10">
                            <!-- Email -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 rounded-full bg-mustard/20 flex items-center justify-center shrink-0 border border-mustard/30 text-white">
                                    <i data-lucide="mail" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-base mb-1">Email</h4>
                                    <p class="text-white/70 leading-relaxed text-[14px]"><a href="mailto:gauricreationsmkt@gmail.com" class="text-white/70 hover:text-mustard">gauricreationsmkt@gmail.com</a></p>
                                </div>
                            </div>
                            <hr class="border-white/10">
                            <!-- Instagram -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 rounded-full bg-mustard/20 flex items-center justify-center shrink-0 border border-mustard/30 text-white">
                                    <i data-lucide="instagram" class="w-5 h-5 text-mustard"></i>
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="font-bold text-white font-sans text-base mb-1">Instagram</h4>
                                    <p class="text-white/70 leading-relaxed text-[14px]"><a href="https://www.instagram.com/gauricreations_/" target="_blank" class="text-white/70 hover:text-mustard">@gauricreations_</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
