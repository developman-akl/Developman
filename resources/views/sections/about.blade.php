<section class="section" id="about" x-ref="about">
    <div
        x-data="{ shown_about: false }" 
        x-intersect.once="shown_about = true"
        class="md:px-0 bg-dvlpmn-gray-light lg:h-screen flex flex-col justify-around w-screen px-2 pt-8 space-y-10"
    >
        <h1 class="lg:text-4xl xl:text-5xl text-dvlpmn-blue-dark text-3xl font-extrabold tracking-wider text-center">
            <span 
                x-cloak
                x-show="shown_about"
                x-transition.duration.1000ms
            >
                ABOUT
            </span>
        </h1>
        <div class="font-montserrat xl:px-5 container items-center max-w-6xl px-8 m-auto font-semibold text-right">
            <div class="sm:-mx-3 flex flex-wrap items-center my-auto space-y-10">
                <div 
                    x-cloak
                    x-show="shown_about"
                    x-transition.duration.1000ms..delay.100ms.opacity.enter.scale.10.leave.scale.50.origin.left
                    class="lg:w-1/2 w-full"
                >
                    <div class="sm:rounded w-full h-auto rounded" style="box-shadow: 10px 13px #001E4F;">
                        <img class="sm:rounded rounded" src="{{ asset('storage/images/about.png') }}" alt="About Developman" />
                    </div>
                </div>
                <div class="lg:w-1/2 lg:pl-8 lg:pr-0 lg:pt-0 w-full px-3 space-y-8 tracking-wider">
                    <h3 
                        x-cloak
                        x-show="shown_about"
                        x-transition.duration.1000ms.delay.200ms.opacity.enter.scale.10.leave.scale.50.origin.right
                        class="lg:text-lg lg:text-right text-dvlpmn-blue-light mx-auto text-base text-center"
                    >
                        {!!  
                            '<b>DEVELOPMAN</b> is here to help <b>Startups</b> and <b>Small-sized</b> businesses by creating affordable custom software solutions, with more than a decade of experience in BMS and ERP system implementations.'
                        !!}
                    </h3>
                    <h3 
                    x-cloak
                        x-show="shown_about"
                        x-transition.duration.1000ms.delay.300ms.opacity.enter.scale.10.leave.scale.50.origin.left
                        class="lg:text-lg lg:text-right text-dvlpmn-blue-light mx-auto text-base text-center"
                    >
                        {!!  
                            '<b>DEVELOPMAN</b> could work with you remotely meanwhile you will have detailed insight over the whole implementation process,<br> milestone by milestone.'
                        !!}
                    </h3>
                </div>
            </div>
           
        </div>
        <div 
            x-cloak
            x-show="shown_about"
            x-transition.duration.1000ms.delay.300ms.opacity.enter.scale.10.leave.scale.50.origin.bottom
            class="lg:text-left flex items-center justify-center my-10 text-center"
        >
            <a href="#contact" type="button" class="ripple font-orbitron lg:my-10 hover:bg-dvlpmn-blue-light hover:shadow-none hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dvlpmn-blue-light lg:px-8 lg:py-4 lg:text-base text-dvlpmn-blue-light border-dvlpmn-blue-light caret-transparent bg-gray-50 inline-flex items-center justify-center px-5 py-2 my-auto text-sm font-black leading-6 tracking-widest uppercase transition border-2 rounded-md shadow-lg">
                CONTACT DEVELOPMAN
            </a>
        </div>
    </div>
</section>