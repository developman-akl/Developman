<div>
    <div 
        class="relative flex flex-row w-10/12 mx-auto"
        x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
            loop: true,
            loopFillGroupWithBlank: true,
            slidesPerView: 1,
            spaceBetween: 0,
            {{-- autoplay: {
                delay: 5000,
            }, --}}
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
            },
        })"
    >
        <div class="absolute inset-y-0 left-0 z-10 flex items-center">
            <button @click="swiper.slidePrev()" class="lg:-ml-4 text-green focus:outline-none flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </button>
        </div>

        <div x-ref="container" class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div 
                    x-data="{ extended: false }" 
                    class="swiper-slide p-1 transition duration-1000" 
                    wire:key="proj_1"
                >
                    <div class="max-w-2xl p-2 mx-auto">
                        <div class="shadow-news mb-6 tracking-wide bg-white border rounded" >
                            <div class="md:flex-shrink-0">
                                <img src="{{ asset('storage/images/glenn-carstens-peters-npxXWgQ33ZQ-unsplash@2x.png') }}" alt="kep1" class="h-52 object-fit w-full rounded rounded-b-none">
                            </div>
                            <div
                                @click="extended = !extended"
                                @click.away="extended = false"
                            >
                                <template x-if="extended">
                                    <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                        <h2 class="text-lg font-extrabold tracking-normal text-gray-800 uppercase">
                                            {!! 'TOPIC' !!}
                                        </h2>
                                        <article class="max-w-full px-2 mt-2 mr-1 prose text-gray-700 break-words">
                                            {!! 'content' !!}
                                        </article> 
                                    </div>
                                </template>
                                <template x-if="!extended">
                                    <div class="cursor-help relative px-4 py-2 mt-2 text-center">
                                        <h2 class="text-lg font-extrabold tracking-normal text-gray-800 uppercase">
                                            {!! 'TOPIC' !!}
                                        </h2>
                                        {{ trans('...') }}
                                    </div>
                                </template>
                            </div>
                            <div class="flex items-center mt-4 mb-3 ml-3 text-xs text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ \Carbon\Carbon::createFromTimeStamp(strtotime(now()))->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <div class="absolute inset-y-0 right-0 z-10 flex items-center">
            <button @click="swiper.slideNext()" class="lg:-mr-4 focus:outline-none text-green flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </div>
</div>