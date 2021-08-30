<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- SEO --}}
        <title>{{ config('app.name', 'Developman') }}</title>
        <meta name="description" content="Tailor-made Web Application and Business Management Software Development, Auckland New Zealand">
        <meta name="keywords" content="business management software, business management software development, bms development, web application, web application development, web app, tailor-made software development, custom software development, software development auckland, web development, web development auckland, web developer, web developer auckland, web developer new zealand, freelancer web developer, full-stack developer, full-stack developer auckland, full-stack developer new zealand, freelancer full-stack developer, software for startups, software for small business, custom business management software nz, custom software nz, what is custom software development, custom software development pricing, why custom software development is important, custom software solutions, custom software examples, benefits of custom software development, custom software development services, custom software for small business, custom software for startups">
        <link rel="canonical" href="{{ url()->current() }}" />

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="{{ URL::asset('storage/images/favicon.svg') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ URL::asset('storage/images/favicon.svg') }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q097766DT4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-Q097766DT4');
        </script>

        <!-- Hotjar Tracking Code for www.developman.tech -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2577758,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7.0.1/swiper.min.css" />
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        @yield('styles')
        @stack('styles')
        @livewireStyles

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@7.0.1/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- robots.txt -->
        {!! Robots::metaTag() !!}

    </head>
    <body x-data="{ showToTopBtn: false }" x-cloak class="font-orbitron caret-transparent antialiased"  >
        
        <!-- Page Heading Fixed Nav Bar-->
        <header>
            @include('sections.navigation')
        </header>

        @yield('content')

        {{-- To the top button --}}
        <div class="bottom-12 right-2 sm:bottom-6 sm:right-5 hover:opacity-100 fixed z-10 opacity-50">
            <button x-show="showToTopBtn" onclick="window.scrollTo({top: 0, behavior: 'smooth'});" aria-label="To the top button" title="Jump to the top">
                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-dvlpmn-blue-light text-dvlpmn-blue-dark hover:scale-125 hover:-translate-y-2.5 w-16 h-16 duration-700 transform bg-white rounded-full" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        
        <!-- Section Footer -->
        <footer></footer>
            @include('sections.footer')
        </footer>
        
        @livewireScripts
        @yield('scripts')
        @stack('scripts')
        
    </body>
</html>
