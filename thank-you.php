<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank You | Gauri Creations</title>
    <?php include 'includes/head.php'; ?>
</head>

<?php $activePage = ""; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include 'includes/nav.php'; ?>

    <!-- ===== THANK YOU SECTION ===== -->
    <section class="min-h-[70vh] flex items-center justify-center py-20 bg-[#FAF7F2] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-mustard/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-[600px] mx-auto px-6 text-center relative z-10">
            <!-- Success Icon -->
            <div class="w-24 h-24 mx-auto mb-8 bg-gradient-to-br from-[#fc880d] to-[#e27a0c] rounded-full flex items-center justify-center shadow-[0_8px_30px_rgba(252,136,13,0.3)]">
                <i data-lucide="check" class="w-12 h-12 text-white" style="stroke-width:3;"></i>
            </div>

            <h1 class="font-serif text-4xl md:text-5xl text-dark font-bold mb-4">Thank You!</h1>
            <p class="text-gray-500 text-lg md:text-xl leading-relaxed mb-3">Your enquiry has been submitted successfully.</p>
            <p class="text-gray-400 text-base mb-10">Our team will get back to you within 24 hours. You can also reach us directly on WhatsApp for a quicker response.</p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="https://wa.me/918527780181?text=Hi%20Gauri%20Creations!%20I%20just%20submitted%20an%20enquiry%20on%20your%20website." target="_blank"
                   class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold px-8 py-4 rounded-full transition-all shadow-lg text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat on WhatsApp
                </a>
                <a href="/"
                   class="inline-flex items-center gap-2 bg-[#fc880d] hover:bg-[#e27a0c] text-white font-bold px-8 py-4 rounded-full transition-all shadow-[0_4px_20px_rgba(252,136,13,0.3)] text-base">
                    <i data-lucide="home" class="w-5 h-5"></i> Back to Home
                </a>
            </div>

            <!-- Contact Info -->
            <div class="bg-white rounded-2xl p-6 border border-[#EDE4D8] shadow-sm">
                <p class="text-sm font-semibold text-dark mb-3">Need immediate help?</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-gray-500">
                    <a href="tel:+918527780181" class="flex items-center gap-2 hover:text-[#fc880d] transition-colors">
                        <i data-lucide="phone" class="w-4 h-4 text-[#fc880d]"></i> +91 8527780181
                    </a>
                    <span class="hidden sm:block text-gray-300">|</span>
                    <a href="tel:+919999453960" class="flex items-center gap-2 hover:text-[#fc880d] transition-colors">
                        <i data-lucide="phone" class="w-4 h-4 text-[#fc880d]"></i> +91 9999453960
                    </a>
                    <span class="hidden sm:block text-gray-300">|</span>
                    <a href="mailto:gauricreationsmkt@gmail.com" class="flex items-center gap-2 hover:text-[#fc880d] transition-colors">
                        <i data-lucide="mail" class="w-4 h-4 text-[#fc880d]"></i> gauricreationsmkt@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
