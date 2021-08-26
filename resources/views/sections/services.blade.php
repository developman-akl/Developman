<section class="section" id="services" x-ref="services" >
    <div
        x-data="{ shown_services: false }" 
        x-intersect:enter.once="shown_services = true"
        class="md:px-0 bg-dvlpmn-gray-light items-center w-screen min-h-screen px-2 py-12 overflow-hidden"
    >
        <h1 class="lg:text-4xl xl:text-5xl text-dvlpmn-blue-dark mb-12 text-3xl font-extrabold tracking-wider text-center">
            <span 
                x-cloak 
                x-show="shown_services" 
                x-transition.duration.1000ms
            >
                SERVICES
            </span>
        </h1>
        <div class="font-montserrat xl:px-5 md:text-left container items-center max-w-6xl px-8 mx-auto font-semibold text-center">
            <div class="sm:-mx-3 flex flex-wrap items-center">
                <div class="md:w-1/2 md:px-3 text-dvlpmn-blue-dark w-full">
                    <div class="sm:max-w-md lg:max-w-lg md:space-y-3 lg:space-y-4 xl:space-y-5 sm:pr-5 lg:pr-0 md:pb-0 w-full pb-6 space-y-6">
                        <h2 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.100ms.opacity.enter.scale.50.leave.scale.60
                            class="sm:max-w-md lg:text-xl md:max-w-3xl md:leading-10 mx-auto text-lg leading-normal tracking-widest"
                        >
                            {!!  
                                'Looking for a tailor-made but affordable <b>Web Application</b> or <b>Business Management Software (BMS)</b>?'
                            !!}
                        </h2>
                        <h3 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.200ms.opacity.enter.scale.50.leave.scale.60
                            class="sm:max-w-md lg:text-lg md:max-w-3xl md:leading-10 mx-auto text-base leading-normal tracking-wider">
                            {!!  
                                'Which will be created solely according to <b>your business</b> needs?'
                            !!}
                        </h3>
                        <h3 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.300ms.opacity.enter.scale.50.leave.scale.60
                            class="sm:max-w-md lg:text-lg md:max-w-3xl md:leading-10 mx-auto text-base leading-normal tracking-wider">
                            {!!  
                                'Which takes the <b>efficiency</b> and <b>revenue</b> of your business to the next level?'
                            !!}
                        </h3>
                        <h3 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.400ms.opacity.enter.scale.50.leave.scale.60
                            class="sm:max-w-md lg:text-base md:max-w-3xl md:leading-10 mx-auto text-sm leading-[1] tracking-wider">
                            {!!  
                                'Have your own custom software to manage all your'
                            !!}
                        </h3>
                        
                        <div 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.500ms.opacity.enter.scale.50.leave.scale.60
                            class="sm:-mx-2 flex flex-wrap overflow-hidden">

                            <div class="sm:my-1 sm:px-2 sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 w-full overflow-hidden">
                                <ul class="lg:text-base text-sm leading-3 text-left list-none">
                                    <li class="leading-[1.2rem] pb-0 lg:pb-2">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('clients, partners and vendors') !!}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="leading-[1.75rem] pb-0 lg:pb-2">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('logistics') !!}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="leading-[1.75rem] pb-0 lg:pb-2">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('finances') !!}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="leading-[1.75rem] pb-0 lg:pb-2">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('manufacturing') !!}
                                            </span>
                                        </span>
                                    </li>
                                    
                                </ul>
                            </div>
                        
                            <div class="sm:my-2 sm:px-2 sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 w-full overflow-hidden">
                                <ul class="lg:text-base lg:text-center md:text-left text-sm text-center list-none">
                                    <li class="leading-[1.75rem] pb-0 lg:pb-3">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('workflows') !!}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="leading-[1.75rem] pb-0 lg:pb-3">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('tasks') !!}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="leading-[1.75rem] pb-0 lg:pb-3">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="first-letter:uppercase ml-3 tracking-widest">
                                                {!! nl2br('reporting') !!}
                                            </span>
                                        </span>
                                    </li>
                                    <li class="leading-[1.75rem] pb-0 lg:pb-3">
                                        <span class="w-fill flex pl-3 rounded-lg cursor-default">
                                            <span class="mt-0 text-green-600">
                                                <x-svg.icons.check />
                                            </span>
                                            <span class="ml-3 tracking-widest">
                                                {!! nl2br('KPI\'s') !!}
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        
                        </div>
                            
                        <h3 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.500ms.opacity.enter.scale.50.leave.scale.60.origin.left
                            class="sm:max-w-md lg:text-lg md:max-w-3xl md:leading-10 mx-auto text-base leading-normal tracking-widest text-gray-900">
                            {!!  
                                'in <b>ONE</b> place utilising the <b>latest technologies</b> and equipped with an <b>easy to use</b> and <b>intuitive user interface</b>.'
                            !!}
                        </h3>
                        
                        <div 
                            x-cloak 
                            x-show="shown_services" 
                            x-transition.duration.1500ms.delay.500ms.opacity.enter.scale.50.leave.scale.60.origin.bottom
                            class="md:text-left mt-6 text-center">
                            <a href="#projects" type="button" class="hover:shadow-none ripple font-orbitron md:w-auto hover:bg-dvlpmn-blue-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-dvlpmn-blue-light md:px-8 md:py-4 md:text-base bg-dvlpmn-blue-dark caret-transparent inline-flex items-center justify-center w-full px-5 py-2 text-sm font-bold leading-6 tracking-widest text-white uppercase transition border border-transparent rounded-md shadow-lg">
                                GO TO PROJECTS
                            </a>
                        </div>
                
                    </div>
                </div>

                <div 
                    x-cloak 
                    x-show="shown_services" 
                    x-transition.duration.1000ms.opacity.enter.scale.10.leave.scale.50.origin.right
                    class="md:w-1/2 w-full">
                    <div class="sm:rounded w-full h-auto overflow-hidden rounded" style="box-shadow: 10px 13px #001E4F;">
                        <img src="{{ asset('storage/images/services.png') }}" alt="Developman Services" />
                    </div>
                </div>
            
            </div>
            
        </div>
    </div>
</section>