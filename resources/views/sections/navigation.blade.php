<section class="body-font lg:py-10 flex items-center w-full px-4 py-6 text-gray-800 bg-white">
    <nav class="max-w-7xl border-1 fixed inset-x-0 top-0 z-10 flex items-center justify-between mx-auto space-x-12 text-lg tracking-widest bg-white border-gray-500">
        <a href="/">
            <img class="w-[280px]" src="{{ asset('storage/images/developmanlogo.svg') }}" alt="Developman Logo" />
        </a>

        <button id="mobileMenuButton" class="focus:outline-none lg:hidden p-3" title="Open side menu">
            <!-- SVG For "x" button -->
            <svg id="mobileMenuButtonClose" class="hidden w-8 h-8 text-gray-800 rounded-md"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <!-- SVG For "Menu burger" button -->
            <svg id="mobileMenuButtonOpen" fill="currentColor" class="w-10 h-10" viewBox="0 0 1792 1792"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>

        <!-- List of nav item -->
        <div id="sideMenuHideOnMobile"
            class="rounded-l-md lg:mt-4 lg:w-auto lg:px-4 lg:flex-row lg:translate-y-0 lg:inline-flex lg:items-center lg:mx-1 lg:uppercase border-r-white border-1 lg:shadow-none lg:bg-white backdrop-filter backdrop-blur-lg absolute top-0 right-0 z-10 flex flex-col w-1/2 px-3 font-semibold transition-all duration-500 transform translate-x-0 -translate-y-full bg-gray-100 bg-opacity-50 border-gray-900 shadow-lg">
            <a href="#" class="lg:mx-2 hover:border-[#0050D1] hover:text-[#0050D1] lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                SERVICES
            </a>
            <a href="#" class="lg:mx-2 hover:border-[#0050D1] hover:text-[#0050D1] lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                ABOUT
            </a>
            <a href="#" class="lg:mx-2 hover:border-[#0050D1] hover:text-[#0050D1] lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                CASE STUDIES
            </a>
            <a href="#" class="lg:mx-2 hover:border-[#0050D1] hover:text-[#0050D1] lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                CONTACT
            </a>
        </div>
    </nav>
</section>


<script>
    var mobileMenuButton = document.getElementById("mobileMenuButton");
    mobileMenuButton.onclick = function() {
        document.getElementById("sideMenuHideOnMobile").classList.toggle("-translate-y-full");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("mt-[3.5rem]");
        document.getElementById("sideMenuHideOnMobile").classList.toggle("shadow");
        document.getElementById("mobileMenuButtonClose").classList.toggle("hidden");
        document.getElementById("mobileMenuButtonOpen").classList.toggle("hidden");
    }
    // Hide element when click outside nav
    var theElementContainer = document.getElementsByTagName("nav")[0];
    document.addEventListener('click', function(event) {
        if (!theElementContainer.contains(event.target)) {
            document.getElementById("sideMenuHideOnMobile").classList.add("-translate-y-full");
            document.getElementById("sideMenuHideOnMobile").classList.remove("mt-[3.5rem]");
            document.getElementById("sideMenuHideOnMobile").classList.remove("shadow");
            document.getElementById("mobileMenuButtonOpen").classList.remove("hidden");
            document.getElementById("mobileMenuButtonClose").classList.add("hidden");
        }
    });
</script>
