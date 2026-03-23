<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course Details | Gauri Creations</title>
    <?php include 'includes/head.php'; ?>
</head>

<?php $activePage = "courses"; ?>
<body class="font-sans bg-light text-dark antialiased overflow-x-hidden transition-all duration-300">

    <?php include 'includes/nav.php'; ?>

    <!-- ===== BREADCRUMB ===== -->
    <div class="bg-gray-50 border-b border-gray-100 py-3">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 flex items-center gap-2 text-sm">
            <a href="/" class="text-gray-400 hover:text-[#fc880d]">Home</a>
            <span class="text-gray-300">/</span>
            <a href="/courses" class="text-gray-400 hover:text-[#fc880d]">Courses</a>
            <span class="text-gray-300">/</span>
            <span class="text-dark font-medium" id="breadcrumb-title">Course Details</span>
        </div>
    </div>

    <!-- ===== COURSE HERO ===== -->
    <section class="py-16 md:py-20 bg-white relative overflow-hidden">
        <div class="max-w-[1300px] mx-auto px-6 md:px-12 relative z-10">
            <div class="grid lg:grid-cols-[1fr_420px] gap-10 lg:gap-12 items-start">

                <!-- Left: Image + info -->
                <div class="flex flex-col gap-5">
                    <div class="rounded-[2rem] overflow-hidden shadow-xl relative aspect-[16/10] bg-[#FFF8F0] group border border-[#EDE4D8]">
                        <img id="course-image" src="assets/images/cupcakes-brownies-box.jpeg" alt="Course" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <span id="course-badge" class="absolute top-5 left-5 bg-[#fc880d] text-white text-xs font-bold uppercase px-4 py-2 rounded-full tracking-wide shadow-lg">Featured</span>
                    </div>

                    <!-- Description -->
                    <div class="bg-[#FAF7F2] rounded-2xl p-6 border border-[#EDE4D8]">
                        <h3 class="font-serif font-bold text-dark text-xl mb-3">About This Course</h3>
                        <p id="course-desc" class="text-muted text-[15px] leading-relaxed">Course description will appear here.</p>
                    </div>

                    <!-- Highlights -->
                    <ul id="course-highlights" class="flex flex-col gap-3">
                        <!-- Populated by JS -->
                    </ul>
                </div>

                <!-- Right: Sticky enrollment card -->
                <div class="lg:sticky lg:top-[90px] flex flex-col gap-4">
                    <!-- Course Info Card -->
                    <div class="bg-dark rounded-[1.5rem] p-6 text-white relative overflow-hidden">
                        <div class="absolute inset-0 opacity-[0.04] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
                        <div class="absolute bottom-0 right-0 w-40 h-40 bg-mustard/10 rounded-full blur-3xl pointer-events-none"></div>

                        <div class="relative z-10">
                            <div class="flex items-center gap-2 text-mustard font-bold text-xs tracking-widest uppercase mb-2">
                                <i data-lucide="graduation-cap" class="w-3.5 h-3.5"></i>
                                <span id="course-category">Workshop</span>
                            </div>
                            <h1 id="course-title" class="text-xl md:text-2xl font-serif text-white font-bold leading-snug mb-5">Course Title</h1>

                            <!-- Key Info -->
                            <div class="flex flex-col gap-3 mb-5">
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                    <i data-lucide="calendar" class="w-4 h-4 text-mustard shrink-0"></i>
                                    <div>
                                        <p class="text-[10px] text-white/40 uppercase tracking-wider">Date</p>
                                        <p id="course-date" class="text-sm text-white font-bold">TBD</p>
                                        <p id="course-days" class="text-[11px] text-white/50"></p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                        <i data-lucide="clock" class="w-4 h-4 text-mustard shrink-0"></i>
                                        <div>
                                            <p class="text-[10px] text-white/40 uppercase tracking-wider">Timing</p>
                                            <p id="course-timing" class="text-xs text-white font-bold">TBD</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                        <i data-lucide="users" class="w-4 h-4 text-mustard shrink-0"></i>
                                        <div>
                                            <p class="text-[10px] text-white/40 uppercase tracking-wider">Batch</p>
                                            <p id="course-batch" class="text-xs text-white font-bold">6–7 Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                    <i data-lucide="map-pin" class="w-4 h-4 text-mustard shrink-0"></i>
                                    <div>
                                        <p class="text-[10px] text-white/40 uppercase tracking-wider">Venue</p>
                                        <p id="course-venue" class="text-sm text-white font-bold">Gurgaon</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
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

                    <!-- What's Included -->
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

            <div id="course-curriculum" class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                <!-- Populated by JS -->
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
            <div id="other-courses" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Populated by JS -->
            </div>
        </div>
    </section>

    <script>
    // ===== ALL COURSE DATA =====
    const allCourses = {
        "home-baker": {
            title: "Start Your Own Business as Home Baker",
            category: "Baking & Icing",
            badge: "Bestseller",
            badgeColor: "#fc880d",
            image: "assets/images/cupcakes-brownies-box.jpeg",
            date: "15th, 16th & 17th March",
            days: "(Monday, Tuesday & Wednesday)",
            timing: "11:30 AM to 5:30 PM",
            venue: "Gurgaon Sec 38",
            batch: "6-7 Students",
            desc: "Complete Hands-On Class — Complete Icing & Baking would be done in class. This is a Certified Course designed to help you start your own business as a home baker. Learn over 30+ cake varieties from scratch!",
            highlights: ["Certified Course", "Lunch & Refreshment Provided", "Take Home Made Cake", "Maximum 6-7 Students", "100% Pure Vegetarian / Eggless"],
            curriculum: [
                "Wedding Cake", "Professional Vanilla & Chocolate Sponge", "Basic Vanilla & Chocolate Sponge",
                "Shimmer Cake", "Wave Design Cake", "Pinata Cake", "Red Velvet Cake", "Geode Cake",
                "Painting Cake", "Faultline Cake", "Oreo Mousse Cake", "Doll Cake", "Two Tier Cake",
                "Photo Print Cake", "Gel Carving Cake", "Glass Effect Cake", "Tiger Print Cake",
                "Mirror Glaze Marble", "Thread Designing", "Dutch Chocolate Cake", "Sphere Cake",
                "Black Forest Cake", "Fresh Fruit Gateau", "Sharp Edges Cake",
                "Rasmalai Cake (NEW)", "Mango Mouse Cake (NEW)", "Heart Shape Cake (NEW)",
                "Flower Bouquet Cake (NEW)", "Standing Photo Cake (NEW)", "Crunchy Cake (NEW)",
                "Piping Designs (NEW)", "Bomb Cake (NEW)"
            ]
        },
        "sugar-craft": {
            title: "Sugar Craft Cake Decorating Course",
            category: "Cake Decorating",
            badge: "New",
            badgeColor: "#16a34a",
            image: "assets/images/caterpillar-cupcakes.jpeg",
            date: "8th & 9th April",
            days: "(Tuesday & Wednesday)",
            timing: "11:30 AM to 6:00 PM",
            venue: "Gurgaon",
            batch: "6-7 Students",
            desc: "This TWO DAYS Sugar Craft Cake Decorating course will teach you all of the techniques to decorate cakes that would be amazing! Learn how to cover a cake with Ganache, Sugar paste, and make incredible decorations.",
            highlights: ["Fully Hands-On Class", "Lunch Provided", "Includes Cake Covered with Ganache", "All Materials Provided", "Certified Course"],
            curriculum: [
                "How to Make Fondant Dough From Scratch", "Covering Cake with Ganache",
                "Covering Cake with Sugar Paste", "Ruffles", "Rose Making", "Flower Making",
                "Leaves Making", "Animal Figure Making", "Cartoon Character Figure Making",
                "Sugar Craft Baby Shower and Birthday Theme Cake", "Rainbow Cake",
                "Use of Sugar Craft Tools", "Message Plaque Making"
            ]
        },
        "italian": {
            title: "Italian Food Class",
            category: "Italian Cuisine",
            badge: "Popular",
            badgeColor: "#9333ea",
            image: "assets/images/pad-thai-dish.jpeg",
            date: "4th & 5th January",
            days: "(Saturday & Sunday)",
            timing: "12:00 PM to 4:00 PM",
            venue: "Karol Bagh",
            batch: "6-7 Students",
            fee: "₹4,500",
            desc: "Italian food is one of the most popular and loved cuisines all around the world. Learn the perfect way to enjoy Italian food at home — from Pizzas to Pastas, Risottos to Ravioli and much more!",
            highlights: ["20+ Italian Recipes", "Hands-On Practical", "Lunch Provided", "Printed Recipes", "Future Assistance"],
            curriculum: [
                "Pizza (Margarita, Farmhouse, Peppy Paneer)", "White Sauce Pasta",
                "Red Sauce Pasta", "Pink Sauce Pasta", "Alfredo Pasta", "Macaroni",
                "Lasagne", "Baked Pasta", "Spaghetti", "Penne Arrabiata",
                "Ravioli", "Risotto", "Bruschetta", "Garlic Bread",
                "Focaccia Bread", "Minestrone Soup", "Tiramisu",
                "Panna Cotta", "Italian Dressing", "Marinara Sauce"
            ]
        },
        "mughlai": {
            title: "Mughlai Food Class",
            category: "Mughlai Cuisine",
            badge: "Popular",
            badgeColor: "#9333ea",
            image: "assets/images/snacks-spread-collage.jpeg",
            date: "22nd & 23rd March",
            days: "(Saturday & Sunday)",
            timing: "12:00 PM to 5:30 PM",
            venue: "Gurgaon Sec 38",
            batch: "6-7 Students",
            desc: "Mughlai food is known for its richness and exotic use of spices. Learn the most popular, traditional and beloved Mughlai recipes with complete hands-on practice. This class covers over 20 aromatic dishes!",
            highlights: ["Printed Recipe Provided", "Lunch Provided", "Future Assistance", "100% Pure Vegetarian", "Hands-On Practical"],
            curriculum: [
                "Dal Maharani", "Paneer Lababdar", "Dum Biryani", "Gulab Jamun",
                "Malai Kofta", "Navratan Korma", "Shahi Paneer", "Kadhai Paneer",
                "Dum Aloo", "Butter Paneer", "Mughlai Paratha", "Roomali Roti",
                "Lucknowi Pulao", "Mughlai Curry", "Paneer Tikka Masala",
                "Zafrani Kheer", "Phirni", "Korma Sauce",
                "Mughlai Raita", "Kashmiri Naan"
            ]
        },
        "swiss-roll-pastries": {
            title: "Swiss Roll & Pastries Class",
            category: "Pastries & Baking",
            badge: "Specialty",
            badgeColor: "#dc2626",
            image: "assets/images/strawberry-cheesecake.jpeg",
            date: "23rd & 24th May",
            days: "(Friday & Saturday)",
            timing: "11:00 AM to 4:00 PM",
            venue: "Gurgaon",
            batch: "6-7 Students",
            desc: "Learn Delicious Swiss Roll & Pastries with different shapes. Master the art of slitting, soaking, filling, and finishing pastries like a professional baker! All recipes are 100% eggless.",
            highlights: ["Professional Baking Tricks", "Different Pastry Shapes", "Eggless Recipes", "Samples Take Home", "Lunch Included"],
            curriculum: [
                "Mango Swiss Roll", "Chocolate Swiss Roll", "Red Velvet Swiss Roll",
                "Butterscotch Swiss Roll", "Pineapple Swiss Roll",
                "Chocolate Pastry", "Butterscotch Pastry", "Pineapple Pastry",
                "Black Forest Pastry", "White Forest Pastry", "Strawberry Pastry",
                "Mango Pastry", "Red Velvet Pastry", "Blueberry Pastry",
                "Opera Pastry", "Tiramisu Pastry", "Coffee Pastry",
                "Rainbow Pastry"
            ]
        },
        "brownies": {
            title: "Eggless Brownies, Crownies, Brookies & Blondies",
            category: "Brownies & Bars",
            badge: "Trending",
            badgeColor: "#dc2626",
            image: "assets/images/chocolate-mousse-cups.jpeg",
            date: "23rd & 24th July",
            days: "(Wednesday & Thursday)",
            timing: "12:00 PM to 5:00 PM",
            venue: "Gurgaon",
            batch: "6-7 Students",
            desc: "Looking for the best homemade Brownie recipe? From fudgy brownie to cakey brownie, you are sure to find a favorite here. Learn the complete range of brownies, blondies, crownies, and brookies — all 100% eggless!",
            highlights: ["100% Pure Vegetarian", "Samples Take Home", "Lunch Included", "All Materials Provided", "Printed Recipes"],
            curriculum: [
                "Classic Fudgy Brownie", "Cakey Brownie", "Chewy Brownie",
                "Stuffed Brownie", "Red Velvet Brownie", "Nutella Brownie",
                "Cream Cheese Brownie", "Lotus Biscoff Brownie", "Cookie Brownie (Brookies)",
                "Crownies (Croissant + Brownies)", "Classic Blondie", "White Chocolate Blondie",
                "Peanut Butter Blondie", "Brownie Cake", "Brownie Truffle",
                "Brownie in a Jar", "S'mores Brownie", "Mint Chocolate Brownie"
            ]
        },
        "kids-special": {
            title: "Kids Special Workshop (Mini Chefs)",
            category: "Kids Special",
            badge: "Kids Favorite",
            badgeColor: "#ef4444",
            image: "assets/images/kids-yellow-aprons-group.jpeg",
            date: "8th, 9th & 10th June",
            days: "(Sunday, Monday & Tuesday)",
            timing: "12:00 PM to 3:00 PM",
            venue: "Gurgaon",
            batch: "8-10 Kids",
            fee: "₹4,500",
            desc: "Calling all Mini Chefs! Make Delicious and Healthy food while having fun. This workshop is specially designed for children aged 6 to 18 years. 18-20 practicals included over 3 fun-filled days!",
            highlights: ["Age Limit 6 to 18 Years", "18-20 Practicals", "Certificate Provided", "Fun & Interactive", "All Materials Included"],
            curriculum: [
                "Shakes & Smoothies", "Sandwiches", "Cupcakes", "Muffins",
                "Pizza from Scratch", "Pasta", "Garlic Bread", "Cookies",
                "Chocolate Truffles", "Brownies", "Pancakes", "French Fries",
                "Spring Rolls", "Fruit Salad", "Mocktails", "Burgers",
                "Wraps & Rolls", "Pudding"
            ]
        },
        "subways-sauces": {
            title: "Subways, Sauces, Fillings & Kababs Workshop",
            category: "Subways & Dips",
            badge: "New",
            badgeColor: "#16a34a",
            image: "assets/images/club-sandwich-fries.jpeg",
            date: "28th & 29th March",
            days: "(Friday & Saturday)",
            timing: "11:30 AM to 6:00 PM",
            venue: "Gurgaon Sec 38",
            batch: "6-7 Students",
            desc: "Varieties of Subways and 30+ Dips & Sauces! Master homemade fillings and amazing flavour combinations. Learn to make restaurant-style subways with professional techniques. 100% Pure Vegetarian.",
            highlights: ["100% Pure Vegetarian", "Samples Take Home", "Lunch Included", "30+ Dips & Sauces", "Printed Recipes"],
            curriculum: [
                "Paneer Tikka Subway", "Veggie Delight Subway", "Aloo Patty Subway",
                "Corn & Peas Subway", "Mexican Subway", "Italian BMT Subway",
                "Tandoori Subway", "Mushroom Subway", "Thai Chilli Subway",
                "BBQ Paneer Subway", "Club Subway", "Schezwan Subway",
                "Chipotle Subway", "Honey Mustard Subway", "Herb & Cheese Subway",
                "Mayonnaise (5 types)", "Chipotle Sauce", "Honey Mustard Sauce",
                "Barbeque Sauce", "Ranch Sauce", "Sriracha Sauce",
                "Teriyaki Sauce", "Marinara Sauce", "Sweet Chilli Sauce",
                "Harissa Sauce", "Peri Peri Sauce", "Tandoori Mayo",
                "Hara Bhara Kabab", "Paneer Tikka Kabab", "Seekh Kabab (Veg)",
                "Shammi Kabab (Veg)"
            ]
        },
        "cheesecakes": {
            title: "Eggless Gelatin Free Baked & Non-Baked Cheesecakes",
            category: "Cheesecakes",
            badge: "Premium",
            badgeColor: "#9333ea",
            image: "assets/images/dessert-spread-table.jpeg",
            date: "21st & 22nd December",
            days: "(Sunday & Monday)",
            timing: "11:30 AM to 6:00 PM",
            venue: "Gurgaon",
            batch: "6-7 Students",
            desc: "Learn to make Eggless, Gelatin Free Baked & Non-Baked Cheesecakes. Rich, Creamy, Tangy-Sweet perfection with NO gelatin at all! Learn to make your own Mascarpone cheese and Cream cheese at home.",
            highlights: ["Perfect Baking Techniques", "Make Homemade Mascarpone", "Make Cream Cheese at Home", "All Cakes Delivered to You", "Gelatin Free & Eggless"],
            curriculum: [
                "New York Cheesecake", "Jiggly Japanese Cheesecake", "Baklava Cheesecake",
                "Tiramisu Cheesecake", "Biscoff (Lotus) Cheesecake", "Blueberry Cheesecake",
                "Mango Cheesecake", "Strawberry Cheesecake", "Oreo Cheesecake",
                "Nutella Cheesecake", "Red Velvet Cheesecake", "Chocolate Cheesecake",
                "Pumpkin Spice Cheesecake", "Basque Burnt Cheesecake",
                "Raspberry Cheesecake", "Lemon Cheesecake", "Pineapple Cheesecake",
                "Homemade Cream Cheese", "Homemade Mascarpone Cheese",
                "Cheesecake Biscuit Base Techniques", "No-Bake Setting Methods"
            ]
        }
    };

    // ===== LOAD COURSE DATA =====
    function loadCourseData() {
        const hash = window.location.hash.substring(1) || "home-baker";
        const course = allCourses[hash];
        if (!course) { window.location.href = "/courses"; return; }

        document.getElementById('breadcrumb-title').textContent = course.title;
        document.getElementById('course-image').src = course.image;
        document.getElementById('course-title').textContent = course.title;
        document.getElementById('course-badge').textContent = course.badge;
        document.getElementById('course-badge').style.background = course.badgeColor;
        document.getElementById('course-category').textContent = course.category;
        document.getElementById('course-date').textContent = course.date;
        document.getElementById('course-days').textContent = course.days;
        document.getElementById('course-timing').textContent = course.timing;
        document.getElementById('course-venue').textContent = course.venue;
        document.getElementById('course-batch').textContent = course.batch;
        document.getElementById('course-desc').textContent = course.desc;

        const highlightsList = document.getElementById('course-highlights');
        highlightsList.innerHTML = course.highlights.map(h =>
            `<li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-[#fc880d]/10 flex items-center justify-center shrink-0 mt-0.5"><i data-lucide="check" class="w-3.5 h-3.5 text-[#fc880d]"></i></div><span>${h}</span></li>`
        ).join('');

        const curriculumGrid = document.getElementById('course-curriculum');
        curriculumGrid.innerHTML = course.curriculum.map(item =>
            `<div class="flex items-center gap-3 bg-[#FFF8F0] px-4 py-3 rounded-xl border border-[#fc880d]/10"><i data-lucide="chef-hat" class="w-4 h-4 text-[#fc880d] shrink-0"></i><span class="text-dark text-sm font-medium">${item}</span></div>`
        ).join('');

        // Other courses
        const otherCourses = document.getElementById('other-courses');
        const otherKeys = Object.keys(allCourses).filter(k => k !== hash).slice(0, 3);
        otherCourses.innerHTML = otherKeys.map(key => {
            const c = allCourses[key];
            return `<a href="/course-details#${key}" onclick="window.location.href='/course-details#${key}';window.location.reload();" class="bg-white rounded-2xl border border-[#EDE4D8] shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group overflow-hidden block">
                <div class="relative overflow-hidden h-[180px] bg-[#FFF8F0]">
                    <img src="${c.image}" alt="${c.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 left-3 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wide" style="background:${c.badgeColor}">${c.badge}</span>
                </div>
                <div class="p-5">
                    <p class="text-[11px] text-[#fc880d] font-semibold uppercase tracking-wide mb-1">${c.category}</p>
                    <h3 class="font-bold text-dark text-base mb-2 leading-tight group-hover:text-[#fc880d] transition-colors">${c.title}</h3>
                    <div class="flex items-center gap-2 text-[12px] text-gray-500">
                        <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#fc880d]"></i> ${c.date}
                    </div>
                </div>
            </a>`;
        }).join('');

        lucide.createIcons();
        document.title = course.title + " | Gauri Creations";
    }

    loadCourseData();
    window.addEventListener('hashchange', function() {
        loadCourseData();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    </script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
