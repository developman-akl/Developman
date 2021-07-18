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

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>
        
        @yield('styles')
        @stack('styles')
        @livewireStyles
        
        <!-- robots.txt -->
        {!! Robots::metaTag() !!}

    </head>
    <body class="font-body caret-transparent antialiased">
        <div class="bg-[#FEFEFE] min-h-screen">

            <!-- Page Heading Fixed Nav Bar-->
            <header>
                @include('sections.navigation')
            </header>

            <!-- Page Content -->
            <main>
                <!-- Section Welcome -->
                @include('sections.welcome')

                <!-- Section Services -->
                @include('sections.services')

                <!-- Section About -->
                @include('sections.about')
                
                <!-- Section Case studies -->
                {{-- @include('sections.case-studies') --}}
               
                <!-- Section Contact -->
                @include('sections.contact')
                
                <!-- Section Footer -->
                @include('sections.footer')

                <div class="bottom-4 right-2 sm:bottom-8 sm:right-5 fixed" title="Jump to the top" class="bg-white">
                    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
                        <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-[#0050D1] text-[#001E4F] bg-white w-14 h-14 rounded-full" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </main>
            
        </div>

        @livewireScripts
        @yield('scripts')
        @stack('scripts')

    </body>
</html>
