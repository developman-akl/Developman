<section id="welcome" class="gradient-background relative flex flex-col justify-between h-screen pb-4">

    <!-- Main Hero Content -->
    <div class="px-4 pt-10 2xl:ml-[4.6%] ml-[3%] text-left">
        <div class="portrait:md:text-5xl lg:text-6xl portrait:sm:text-4xl sm:text-2xl absolute z-[9999] space-y-10 text-xl font-extrabold tracking-widest text-left text-dvlpmn-blue-dark">
            <h1 class="space-y-3">
                <div class="block font-extrabold text-left">
                    <span class="text-dvlpmn-blue-light font-black">C</span>ustom
                    <span class="text-dvlpmn-blue-light font-black">S</span>olutions,
                </div> 
                <div class="block font-extrabold text-left">
                    <span class="text-dvlpmn-blue-light font-black">O</span>utstanding
                    <span class="text-dvlpmn-blue-light font-black">R</span>esults.
                </div>
            </h1>
            
            <div class="md:block absolute text-left">
                <a href="#services" type="button" class="ripple md:w-auto hover:bg-dvlpmn-blue-mid hover:shadow-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dvlpmn-blue-light md:px-8 md:py-4 md:text-base bg-dvlpmn-blue-light caret-transparent inline-flex items-center justify-center w-full px-5 py-2 text-sm font-bold leading-6 tracking-widest text-white uppercase transition border border-transparent rounded-md shadow-lg">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    <!-- End Main Hero Content -->

    {{-- Auckland Silhouette --}}
    <figure class="image_container">
        <div class="header_city_wrapper">
            <div class="header_city_silhouette">
                <img src="{{ asset('storage/images/auckland-skyline-silhouette.svg') }}" alt="Developman Auckland Silhouette" />
            </div>
            <div class="header_city_signal">
                <img src="{{ asset("storage/images/developmanlogosignal.svg") }}" alt="Developman Logo Signal"/>
            </div>
        </div>
    </figure>
    {{-- End Auckland Silhouette --}}

</section>