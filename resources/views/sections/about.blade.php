<section id="about">
    <div
        x-data="{ shown: false }" 
        x-intersect.once="shown = true"
        class="md:px-0 bg-dvlpmn-gray-light w-screen min-h-screen px-2 py-12 overflow-hidden"
    >
        <h1 
            x-cloak
            x-show="shown"
            x-transition.duration.1500ms.delay.100ms.opacity.enter.scale.50.leave.scale.60
            class="lg:text-4xl xl:text-5xl lg:mb-24 text-dvlpmn-blue-dark mb-6 text-3xl font-extrabold tracking-wider text-center"
        >
            <span>ABOUT</span>
        </h1>
        <div class="font-montserrat xl:px-5 container items-center max-w-6xl px-8 pb-16 m-auto font-semibold text-right">
            <div class="sm:-mx-3 flex flex-wrap items-center justify-between my-auto">
                <div 
                    x-cloak
                    x-show="shown"
                    x-transition.duration.1000ms..delay.100ms.opacity.enter.scale.10.leave.scale.50.origin.left
                    class="md:w-1/2 w-full"
                >
                    <div class="sm:rounded w-full h-auto overflow-hidden rounded" style="box-shadow: 10px 13px #001E4F;">
                        <img src="{{ asset('storage/images/about.png') }}" alt="About Developman" />
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-8 md:pr-0 md:tracking-widest md:pt-0 w-full px-3 pt-8 space-y-8 tracking-wider">
                    <h3 
                        x-cloak
                        x-show="shown"
                        x-transition.duration.1000ms.delay.300ms.opacity.enter.scale.10.leave.scale.50.origin.right
                        class="lg:text-lg mx-auto text-sm leading-normal md:leading-[4rem] text-center md:text-right text-dvlpmn-blue-light"
                    >
                        {!!  
                            '<b>DEVELOPMAN</b> is here to help <b>Startups</b> and <b>Small-sized</b> businesses by creating affordable custom software solutions, with more than a decade of experience in BMS and ERP system implementations.'
                        !!}
                    </h3>
                    <h3 
                    x-cloak
                        x-show="shown"
                        x-transition.duration.1000ms.delay.300ms.opacity.enter.scale.10.leave.scale.50.origin.left
                        class="lg:text-lg md:leading-10 md:text-right text-dvlpmn-blue-light mx-auto text-sm leading-normal text-center"
                    >
                        {!!  
                            '<b>DEVELOPMAN</b> could work with you remotely meanwhile you will have detailed insight over the whole implementation process, milestone by milestone.'
                        !!}
                    </h3>
                    
                    
                </div>
            </div>
           
        </div>
        <div 
            x-cloak
            x-show="shown"
            x-transition.duration.1000ms.delay.300ms.opacity.enter.scale.10.leave.scale.50.origin.bottom
            class="md:text-left lg:my-10 flex items-center justify-center my-auto text-center"
        >
            <a href="#contact" type="button" class="ripple font-orbitron lg:my-10 md:w-auto hover:bg-dvlpmn-blue-light hover:shadow-none hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dvlpmn-blue-light md:px-8 md:py-4 md:text-base text-dvlpmn-blue-light border-dvlpmn-blue-light caret-transparent inline-flex items-center justify-center w-full px-5 py-2 my-auto text-sm font-bold leading-6 tracking-widest uppercase transition bg-white border-2 rounded-md shadow-lg">
                CONTACT DEVELOPMAN
            </a>
        </div>
    </div>
</section>