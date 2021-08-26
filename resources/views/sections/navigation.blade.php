<section id="navigation" class="body-font relative min-h-full text-gray-700 bg-white">
    <div class="bg-dvlpmn-blue-nav items-center w-full px-4">
        <nav class="2xl:max-w-[90vw] z-[999999999] max-w-[95vw] border-1 relative flex items-center justify-between mx-auto space-x-12 text-lg tracking-widest">
            <a href="{{ route('home') }}">
                <img class="w-[280px]" src="{{ asset('storage/images/developmanlogo.svg') }}" alt="Developman Logo" />
            </a>

            <button id="mobileMenuButton" class="focus:outline-none lg:hidden py-3 text-gray-900" title="Open side menu">
                <div id="nav-icon2">
                    <span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
            </button>

            <!-- List of nav item -->
            @php
                $backSlash = strpos(Route::currentRouteName(), 'projects') === 0 ? '/' : '';
            @endphp
            <div 
                id="sideMenuHideOnMobile"
                class="lg:mt-4 lg:w-auto lg:px-4 lg:flex-row lg:translate-y-0 lg:inline-flex lg:items-center lg:mx-1 lg:uppercase border-1 lg:shadow-none text-dvlpmn-blue-light bg-white/90 lg:bg-transparent duration-50 lg:space-x-8 lg:pl-0 lg:pr-0 absolute top-0 right-0 z-10 flex flex-col w-auto pl-4 pr-10 font-extrabold transition-all transform translate-x-0 -translate-y-full border-gray-900 rounded-md shadow-lg"
            >
                <button @click.prevent="$refs.services.scrollIntoView({behavior: 'smooth'})" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    SERVICES
                </button>
                <button @click.prevent="$refs.projects.scrollIntoView({behavior: 'smooth'})" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    PROJECTS
                </button>
                <button @click.prevent="$refs.about.scrollIntoView({behavior: 'smooth'})" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    ABOUT
                </button>
                <button @click.prevent="$refs.contact.scrollIntoView({behavior: 'smooth'})" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    CONTACT
                </button>
            </div>
        </nav>
    </div>
</section>


<script>
    var mobileMenuButton = document.getElementById("mobileMenuButton");
    mobileMenuButton.onclick = function() {
        document.getElementById("sideMenuHideOnMobile").classList.toggle("-translate-y-full");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("mt-[4rem]");
    }
    // Hide element when click outside nav
    var theElementContainer = document.getElementById("nav-icon2");
    document.addEventListener('click', function(event) {
        if (!theElementContainer.contains(event.target)) {
            if ($('#nav-icon2').hasClass('open')) {
                $('#nav-icon2').removeClass('open');
            }
            document.getElementById("sideMenuHideOnMobile").classList.add("-translate-y-full");
            document.getElementById("sideMenuHideOnMobile").classList.remove("mt-[4rem]");
        }
    });
</script>
