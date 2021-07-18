<section id="projects" class="w-screen min-h-full overflow-hidden md:px-0 px-2 py-12 bg-[#FEFEFE]">
   
    <h1 class="lg:text-4xl xl:text-5xl mb-24 text-3xl font-extrabold tracking-wider text-center text-[#001E4F]">
        <span>PROJECTS</span>
    </h1>
    
    <div>
        <div 
            class="relative flex flex-row w-10/12 mx-auto"
            x-data="{swiper: null}"
            x-init="swiper = new Swiper($refs.container, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
                {{-- autoplay: {
                    delay: 10000,
                    disableOnInteraction: false,
                }, --}}
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                },
                })"
        >
            <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                <button @click="swiper.slidePrev()" class="lg:-ml-4 text-green focus:outline-none flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </button>
            </div>
    
            <div x-ref="container" class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl mb-6 tracking-wider bg-gray-100 border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_task_manager.jpg') }}" alt="kep1" class="h-60 rounded-xl object-fit w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-content text-lg font-extrabold tracking-normal text-gray-800 uppercase">
                                        {!! 'Bakery Task Manager<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Business Management Software for a bakery to make the everyday task management a breeze.' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly flex items-center border-t">
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-5" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-5" src="https://cdn.freebiesupply.com/logos/large/2x/bootstrap-4-logo-png-transparent.png" alt="Bootstrap Logo" title="Bootstrap" />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-5" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <x-svg.icons.livewire />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-9" src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl mb-6 tracking-wider bg-gray-100 border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_javasolj.svg') }}" alt="kep1" class="h-60 rounded-xl object-fit w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-content text-lg font-extrabold tracking-normal text-gray-800 uppercase">
                                        {!! 'Javasolj!<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Web Application for everyday inquiries and commission for the winner proposals.' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly flex items-center border-t">
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <x-svg.icons.tailwind />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-4" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <x-svg.icons.livewire />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-8" src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl mb-6 tracking-wider bg-gray-100 border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/glenn-carstens-peters-npxXWgQ33ZQ-unsplash@2x.png') }}" alt="kep1" class="h-60 rounded-xl object-fit w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-content text-lg font-extrabold tracking-normal text-gray-800 uppercase">
                                        {!! 'Logistics and Inventory Management' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Business Management Software of an airfilter vendor and service company.' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly flex items-center border-t">
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <x-svg.icons.tailwind />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-4" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <x-svg.icons.livewire />
                                    </div>
                                    <div class="flex justify-center mx-auto">
                                        <img class="h-8" src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                </div>
            </div>
    
            <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <button @click="swiper.slideNext()" class="lg:-mr-4 focus:outline-none text-green flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    {{-- @push('styles')
        @once
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        @endonce
    @endpush
    
    @push('scripts')
        @once
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        @endonce
    @endpush --}}
        
</section>
