<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</head>

<x-navbar />

<body>
    <section class="relative h-screen w-full bg-[#0b0d10] overflow-hidden">

        <!-- Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29"
                class="w-full h-full object-cover opacity-70" alt="">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/10"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex items-center">
            <div class="max-w-2xl">

                <p class="uppercase tracking-[0.45em] text-white/70 text-sm mb-6">
                    Delia’s Ticketing
                </p>

                <h1 class="text-white text-7xl md:text-8xl font-light leading-[0.95] mb-8">
                    Your Way
                    <span class="block font-normal">To Every Journey</span>
                </h1>

                <p class="text-white/80 text-lg leading-relaxed mb-10">
                    Delia helps you book tickets for travel and events with clarity and elegance.
                    No clutter. No confusion. Just simple, reliable access to where you need to go.
                </p>

                <div class="flex items-center gap-8">
                    <a href="#tickets"
                        class="px-10 py-4 bg-white text-black rounded-full text-sm font-medium hover:bg-gray-200 transition">
                        Find Tickets
                    </a>

                    <a href="#about" class="text-white/70 hover:text-white underline underline-offset-4 text-sm">
                        About Delia
                    </a>
                </div>

            </div>
        </div>

        <!-- Bottom Credit -->
        <div class="absolute bottom-10 left-0 right-0">
            <div class="max-w-7xl mx-auto px-6 flex justify-end">
                <p class="text-white/60 text-sm tracking-wide">
                    Developed by <span class="text-white">Jessoulvee</span>
                </p>
            </div>
        </div>

    </section>



    <section class="relative bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

            <!-- LEFT TEXT -->
            <div>
                <p class="uppercase tracking-[0.35em] text-sm text-gray-400 mb-6">
                    About Us
                </p>

                <h2 class="text-5xl md:text-6xl font-light leading-tight text-gray-900 mb-8">
                    Stories That
                    <span class="block font-normal">Move the World</span>
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-8 max-w-xl">
                    <strong>Delia’s</strong> is a storytelling platform designed to capture the beauty of places,
                    cultures, and unforgettable moments across the globe.
                    Every story is curated to inspire curiosity, adventure, and deeper connections with the world.
                </p>

                <div class="border-l-2 border-gray-200 pl-6">
                    <p class="text-gray-500 text-sm uppercase tracking-wider mb-2">
                        Developed by
                    </p>
                    <p class="text-gray-900 font-medium text-lg">
                        Jessoulvee
                    </p>
                </div>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="relative">
                <div class="aspect-[4/5] overflow-hidden rounded-2xl shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                        class="w-full h-full object-cover" alt="Travel Story">
                </div>

                <!-- Floating Card -->
                <div class="absolute -bottom-10 -left-10 bg-white rounded-xl shadow-xl p-8 w-64">
                    <p class="text-sm text-gray-400 uppercase tracking-wider mb-2">
                        Delia’s
                    </p>
                    <p class="text-gray-900 font-medium leading-snug">
                        Turning journeys into stories that live forever.
                    </p>
                </div>
            </div>

        </div>
    </section>


    <section class="max-w-7xl mx-auto px-6 py-12">

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold">Top Locations to Explore</h2>
                <p class="text-gray-500">Here are some of the most visited places in 2023</p>
            </div>

            <div class="flex gap-3">
                <button id="prevBtn"
                    class="w-12 h-12 border-2 border-gray-400 rounded-full flex items-center justify-center hover:bg-gray-100 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="nextBtn"
                    class="w-12 h-12 bg-black text-white rounded-full flex items-center justify-center hover:bg-gray-800 transition">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="overflow-hidden relative">
            <div id="carouselTrack" class="flex transition-transform duration-500 ease-in-out">

                <!-- CARD -->
                <div class="min-w-full md:min-w-[33.3333%] p-3">
                    <img src="https://images.unsplash.com/photo-1549693578-d683be217e58"
                        class="w-full h-60 object-cover rounded-xl">
                    <p class="text-gray-500 mt-2">Kyoto, Japan</p>
                    <h3 class="font-bold">Kyoto Town</h3>
                </div>

                <div class="min-w-full md:min-w-[33.3333%] p-3">
                    <img src="https://images.unsplash.com/photo-1544986581-efac024faf62"
                        class="w-full h-60 object-cover rounded-xl">
                    <p class="text-gray-500 mt-2">Cairo, Egypt</p>
                    <h3 class="font-bold">Pyramid of Giza</h3>
                </div>

                <div class="min-w-full md:min-w-[33.3333%] p-3">
                    <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523"
                        class="w-full h-60 object-cover rounded-xl">
                    <p class="text-gray-500 mt-2">Agra, India</p>
                    <h3 class="font-bold">Taj Mahal</h3>
                </div>

                <div class="min-w-full md:min-w-[33.3333%] p-3">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e"
                        class="w-full h-60 object-cover rounded-xl">
                    <p class="text-gray-500 mt-2">Maldives</p>
                    <h3 class="font-bold">Beach Paradise</h3>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">

        <!-- Header -->
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Top Travel Stories</h2>
                <p class="text-gray-500 text-sm mt-1">
                    Explore our latest stories from our active users
                </p>
            </div>

            <button class="px-5 py-2 border border-gray-300 rounded-full text-sm hover:bg-gray-100 transition">
                View All Stories
            </button>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Card 1 -->
            <div>
                <img src="https://images.unsplash.com/photo-1549692520-acc6669e2f0c"
                    class="w-full h-94 object-cover rounded-xl mb-4">

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-2">
                    <span>Japan</span>
                    <span>March 27, 2024</span>
                    <span>4 min read</span>
                </div>

                <h3 class="text-lg font-bold mb-2">Cherry Blossom</h3>

                <p class="text-gray-500 text-sm mb-3">
                    In spring, Japan transforms with sakura, cherry blossoms adorning streets and parks. People gather
                    for hanami parties under the blossoms’ graceful canopy, celebrating nature’s fleeting beauty.
                </p>

                <a href="#" class="text-blue-600 text-sm font-medium hover:underline flex items-center gap-1">
                    Read Full Post
                    <span>↗</span>
                </a>
            </div>

            <!-- Card 2 -->
            <div>
                <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba"
                    class="w-full h-94 object-cover rounded-xl mb-4">

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-2">
                    <span>France</span>
                    <span>March 28, 2024</span>
                    <span>27 min read</span>
                </div>

                <h3 class="text-lg font-bold mb-2">Love in Eiffel Tower</h3>

                <p class="text-gray-500 text-sm mb-3">
                    Love flourishes at the Eiffel Tower, epitomizing romance against Paris’s iconic backdrop. Couples
                    worldwide flock to exchange vows and create cherished memories amidst its breathtaking views.
                </p>

                <a href="#" class="text-blue-600 text-sm font-medium hover:underline flex items-center gap-1">
                    Read Full Post
                    <span>↗</span>
                </a>
            </div>

            <!-- Card 3 -->
            <div>
                <img src="https://images.unsplash.com/photo-1503264116251-35a269479413"
                    class="w-full h-94 object-cover rounded-xl mb-4">

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-2">
                    <span>Italy</span>
                    <span>Feb 27, 2024</span>
                    <span>18 min read</span>
                </div>

                <h3 class="text-lg font-bold mb-2">Pisa Friendship</h3>

                <p class="text-gray-500 text-sm mb-3">
                    “Pisa Friendship” is an annual event in Italy celebrating cross-cultural bonds through music,
                    dance, and social activities, fostering global understanding and cooperation.
                </p>

                <a href="#" class="text-blue-600 text-sm font-medium hover:underline flex items-center gap-1">
                    Read Full Post
                    <span>↗</span>
                </a>
            </div>

            <!-- Card 4 -->
            <div>
                <img src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde"
                    class="w-full h-94 object-cover rounded-xl mb-4">

                <div class="flex items-center gap-4 text-xs text-gray-400 mb-2">
                    <span>Italy</span>
                    <span>December 21, 2023</span>
                    <span>4 min read</span>
                </div>

                <h3 class="text-lg font-bold mb-2">Colosseum Gladiator</h3>

                <p class="text-gray-500 text-sm mb-3">
                    The ancient Roman Colosseum was where thrilling gladiatorial battles and wild animal hunts
                    captivated audiences, showcasing bravery and skill that resonates through history.
                </p>

                <a href="#" class="text-blue-600 text-sm font-medium hover:underline flex items-center gap-1">
                    Read Full Post
                    <span>↗</span>
                </a>
            </div>

        </div>
    </section>


</body>

<x-footer />

<script>
    const track = document.getElementById("carouselTrack");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");

    let index = 0;

    function cardsPerView() {
        return window.innerWidth < 768 ? 1 : 3;
    }

    function updateCarousel() {
        const cardWidth = track.children[0].offsetWidth;
        track.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    nextBtn.addEventListener("click", () => {
        const maxIndex = track.children.length - cardsPerView();
        if (index < maxIndex) index++;
        updateCarousel();
    });

    prevBtn.addEventListener("click", () => {
        if (index > 0) index--;
        updateCarousel();
    });

    window.addEventListener("resize", () => {
        index = 0;
        updateCarousel();
    });

    updateCarousel();
</script>


</html>
