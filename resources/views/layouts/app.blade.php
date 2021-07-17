<!DOCTYPE html>
<html lang="en">
    <head>
        
        {{-- SEO --}}
        <title>{{ config('app.name', 'Developman') }}</title>
        <meta name="description" content="Tailor-made Web Application and Business Management System Development, Auckland New Zealand">
        <meta name="keywords" content="business management system, bms development, web application, web application development, web app, tailor-made software development, custom software development, erp development, enterprise resource planning, software development, web development, web development auckland, web developer, web developer auckland, web developer new zealand, full-stack developer, full-stack developer auckland, full-stack developer new zealand, software for startups, software for small business, custom business management system nz, custom software nz, what is custom software development, custom software development pricing, why custom software development is important, custom software solutions, custom software examples, benefits of custom software development, custom software development services, custom software for small business, custom software for startups">
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
        <link href="https://fonts.gstatic.com" rel="preconnect" >
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Orbitron" media="all">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- robots.txt -->
        {!! Robots::metaTag() !!}

    </head>
    <body class="antialiased" style="font-family: Orbitron">
        <div class="bg-gray-50 min-h-screen">

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
            </main>
            
        </div>
    </body>
</html>
