<section id="navigation" class="body-font relative min-h-full text-gray-700 bg-white">
    <div class="items-center w-full px-4 bg-[#0050D16B]">
        <nav class="2xl:max-w-[90vw] z-[999999999] max-w-[95vw] border-1 relative flex items-center justify-between mx-auto space-x-12 text-lg tracking-widest">
            <a href="#navigation">
                <img class="w-[280px]" src="{{ asset('storage/images/developmanlogo.svg') }}" alt="Developman Logo" />
            </a>

            <button id="mobileMenuButton" class="focus:outline-none lg:hidden p-3 text-gray-900" title="Open side menu">
                <!-- SVG For "x" button -->
                <svg id="mobileMenuButtonClose" class="hidden w-8 h-8 rounded-md"
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
            <div 
                id="sideMenuHideOnMobile"
                class="rounded-md lg:mt-4 lg:w-auto lg:px-4 lg:flex-row lg:translate-y-0 lg:inline-flex lg:items-center lg:mx-1 lg:uppercase  border-1 lg:shadow-none text-[#0050D1] absolute top-0 right-0 z-10 flex flex-col w-auto pl-4 pr-10 font-extrabold transition-all duration-500 transform translate-x-0 -translate-y-full bg-white/80 lg:bg-transparent border-gray-900 shadow-lg"
            >
                <a href="#services" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    SERVICES
                </a>
                <a href="#about" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    ABOUT
                </a>
                <a href="#projects" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    PROJECTS
                </a>
                <a href="#contact" class="lg:mx-2 hover:border-blue-900 hover:text-blue-900 lg:p-0 py-1 mx-0 my-2 transition-all duration-500 border-b-2 border-transparent">
                    CONTACT
                </a>
            </div>
        </nav>
    </div>
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
