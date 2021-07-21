<section id="projects" class="md:px-0 bg-dvlpmn-gray-dark w-screen min-h-screen px-2 py-12 overflow-hidden">
   
    <h1 class="lg:text-4xl xl:text-5xl text-dvlpmn-blue-dark mb-24 text-3xl font-extrabold tracking-wider text-center">
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
                autoplay: {
                    delay: 10000,
                    disableOnInteraction: false,
                },
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
                <button @click="swiper.slidePrev()" class="hover:text-dvlpmn-blue-light hover:scale-125 lg:-ml-4 text-green focus:outline-none text-dvlpmn-blue-dark flex items-center justify-center w-10 h-10 -ml-2 duration-700 transform bg-white rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                      </svg>
                </button>
            </div>
    
            <div x-ref="container" class="swiper-container">
                <div class="swiper-wrapper">
                    
                    {{-- Javasolj! --}}
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl bg-gray-50 mb-6 tracking-wider border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_javasolj_scr_0.png') }}" alt="kep1" class="h-60 rounded-xl object-cover w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-montserrat text-lg font-extrabold tracking-normal text-gray-800">
                                        {!! 'Javasolj!<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Web Application for general inquiries with commission for the winner proposals.<br><br><br>' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly sm:flex-row sm:space-y-0 flex flex-col items-center py-1 space-y-2 border-t">
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <x-svg.icons.tailwind />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto space-x-1">
                                        <img class="h-4" src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" title="Laravel" />
                                        <img class="h-3" src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <x-svg.icons.livewire />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    

                    {{-- BMS --}}
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl bg-gray-50 mb-6 tracking-wider border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_novaerus.jpg') }}" alt="kep1" class="h-60 rounded-xl object-cover w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-montserrat text-lg font-extrabold tracking-normal text-gray-800">
                                        {!! 'Inventory & Stock Management<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Business Management Software for an airfiltration machines vendor and servicing company.<br><br>' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly sm:flex-row sm:space-y-0 flex flex-col items-center py-1 space-y-2 border-t">
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <x-svg.icons.tailwind />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto space-x-1">
                                        <img class="h-4" src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" title="Laravel" />
                                        <img class="h-3" src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <x-svg.icons.livewire />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    {{-- Manufacturing --}}
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl bg-gray-50 mb-6 tracking-wider border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_shoes_scr_4.png') }}" alt="kep1" class="h-60 rounded-xl object-cover w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-montserrat text-lg font-extrabold tracking-normal text-gray-800">
                                        {!! 'Medical Shoes Manufacturing<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Business Management Software for a medical shoes manufacturing company.<br><br><br>' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly sm:flex-row sm:space-y-0 flex flex-col items-center py-1 space-y-2 border-t">
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://cdn.freebiesupply.com/logos/large/2x/bootstrap-4-logo-png-transparent.png" alt="Bootstrap Logo" title="Bootstrap" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg" alt="JQuery Logo" title="JQuery" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto space-x-1">
                                        <img class="h-4" src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" title="Laravel" />
                                        <img class="h-3" src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    {{-- SeiyraDesign --}}
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl bg-gray-50 mb-6 tracking-wider border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_seiyradesign_0.png') }}" alt="kep1" class="h-60 rounded-xl object-cover w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-montserrat text-lg font-extrabold tracking-normal text-gray-800">
                                        {!! 'SeiyraDesign<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'The official website of SeiyraDesign.<br><br><br><br>' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly sm:flex-row sm:space-y-0 flex flex-col items-center py-1 space-y-2 border-t">
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Sass_Logo_Color.svg" alt="SASS" title="SASS">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg" alt="JQuery Logo" title="JQuery" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto space-x-1">
                                        <img class="h-4" src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" title="Laravel" />
                                        <img class="h-3" src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    {{-- Developman --}}
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl bg-gray-50 mb-6 tracking-wider border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_developman.png') }}" alt="kep1" class="h-60 rounded-xl object-cover w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-montserrat text-lg font-extrabold tracking-normal text-gray-800">
                                        {!! 'Developman website<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'The official website of Developman.<br><br><br><br>' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly sm:flex-row sm:space-y-0 flex flex-col items-center py-1 space-y-2 border-t">
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Sass_Logo_Color.svg" alt="SASS" title="SASS">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <x-svg.icons.tailwind />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto space-x-1">
                                        <img class="h-4" src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" title="Laravel" />
                                        <img class="h-3" src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    {{-- Task Manager --}}
                    <div class="swiper-slide p-1 transition duration-1000">
                        <div class="max-w-2xl p-2 mx-auto">
                            <div class="shadow-news rounded-xl bg-gray-50 mb-6 tracking-wider border" >
                                <div class="md:flex-shrink-0 border-b">
                                    <img src="{{ asset('storage/images/project_task_manager_scr_0.png') }}" alt="kep1" class="h-60 rounded-xl object-cover w-full rounded-b-none">
                                </div>
                                <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                    <h2 class="font-montserrat text-lg font-extrabold tracking-normal text-gray-800">
                                        {!! 'Bakery Task Manager<br><br>' !!}
                                    </h2>
                                    <article class=" max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                        {!! 'Business Management Software for a bakery to make the everyday task management a breeze.<br><br>' !!}
                                    </article> 
                                </div>
                                <div class="justify-evenly sm:flex-row sm:space-y-0 flex flex-col items-center py-1 space-y-2 border-t">
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" alt="HTML5 Powered" title="HTML5 Powered">
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://cdn.freebiesupply.com/logos/large/2x/bootstrap-4-logo-png-transparent.png" alt="Bootstrap Logo" title="Bootstrap" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <img class="h-4" src="https://alpinejs.dev/alpine_long.svg" alt="AlpineJS Logo" title="AlpineJS" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto space-x-1">
                                        <img class="h-4" src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" title="Laravel" />
                                        <img class="h-3" src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logo" title="Laravel" />
                                    </div>
                                    <div class="flex items-center justify-center mx-auto">
                                        <x-svg.icons.livewire />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                </div>
            </div>
    
            <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <button @click="swiper.slideNext()" class="hover:text-dvlpmn-blue-light hover:scale-125 lg:-mr-4 focus:outline-none text-green text-dvlpmn-blue-dark flex items-center justify-center w-10 h-10 -mr-2 duration-700 transform bg-white rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:text-left flex justify-center my-8 text-center">
            <a href="#about" type="button" class="ripple md:w-auto hover:bg-dvlpmn-blue-mid hover:shadow-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dvlpmn-blue-light md:px-8 md:py-4 md:text-base bg-dvlpmn-blue-light caret-transparent inline-flex items-center justify-center w-full px-5 py-2 text-sm font-bold leading-6 tracking-widest text-white uppercase transition border border-transparent rounded-md shadow-lg">
                ABOUT DEVELOPMAN
            </a>
        </div>
    </div>
        
</section>
