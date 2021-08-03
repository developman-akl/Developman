{{-- Inventory & Stock --}}

@extends('layouts.app')
@section('content')

    <section id="project-2" >
        <div>
            <h2 class="xl:text-4xl mb-4 text-2xl italic font-bold text-center">
                {{ trans('Javasolj!') }}
            </h2>
        </div>

        <div class="lg:-mx-4 xl:-mx-4 flex flex-wrap overflow-hidden">
            <div class="lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4 w-full mb-4 overflow-hidden">
                <div class="sm:-mx-px md:-mx-px lg:-mx-1 xl:-mx-1 flex flex-wrap items-center -mx-px overflow-hidden">

                    <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                        <img class="h-28 object-contain mx-auto" src="{{ asset('storage/images/questions.svg') }}" alt="Szolgáltató és szakember megtalálása" >
                    </div>
                
                    <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                        <p class="explainer">{!! nl2br('Kérj javaslatot! ...Amennyiben neked, a vállalkozásodnak, vagy a munkáltatódnak bármilyen legális szolgáltatásra van szüksége.') !!}</p>
                    </div>
                
                </div>
            </div>
            
            <div class="lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4 w-full mb-4 overflow-hidden">
                <div class="sm:-mx-px md:-mx-px lg:-mx-1 xl:-mx-1 flex flex-wrap items-center -mx-px overflow-hidden">
        
                        <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                            <div class="lg:block hidden">
                                <img class="h-28 object-contain mx-auto" src="{{ asset('storage/images/javaslattetel.svg') }}" alt="Szolgáltató és szakember megtalálása" >
                            </div>
                            <div class="lg:hidden block my-auto">
                                <p class="explainer">{!! nl2br('Tegyél javaslatot! ...Amennyiben számos szakterületen rendelkezel ismerősökkel, jó tapasztalattal szolgáltatókkal kapcsolatban, vagy netán te is megbízható szolgáltató/szakember vagy és szeretnél pénzt keresni egy jó javaslattal, vagy akár munkához is jutni.') !!}</p>
                            </div>
                        </div>
                        <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                            <div class="lg:block hidden">
                                <p class="explainer">{!! nl2br('Tegyél javaslatot! ...Amennyiben számos szakterületen rendelkezel ismerősökkel, jó tapasztalattal szolgáltatókkal kapcsolatban, vagy netán te is megbízható szolgáltató/szakember vagy és szeretnél pénzt keresni egy jó javaslattal, vagy akár munkához is jutni.') !!}</p>
                            </div>
                            <div class="lg:hidden block my-auto">
                                <img class="h-28 object-contain mx-auto" src="{{ asset('storage/images/javaslattetel.svg') }}" alt="Szolgáltató és szakember megtalálása" >
                            </div>
                        </div>
                </div>
            </div>
        
            <div class="lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4 w-full mb-4 overflow-hidden">
                <div class="sm:-mx-px md:-mx-px lg:-mx-1 xl:-mx-1 flex flex-wrap items-center -mx-px overflow-hidden">

                    <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                        <img class="h-28 object-contain mx-auto" src="{{ asset('storage/images/hogyanmukodik3.svg') }}" alt="Szolgáltató és szakember megtalálása" >
                    </div>
                
                    <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                        <p class="explainer">{!! nl2br('Ha javaslatkérő vagy, akkor a kapott javaslatok közül válaszd ki a számodra legmegfelelőbb szolgáltatót.') !!}</p>
                    </div>
                
                </div>
            </div>
        
            
            <div class="lg:my-4 lg:px-4 lg:w-1/4 xl:my-4 xl:px-4 xl:w-1/4 w-full mb-4 overflow-hidden">
                <div class="sm:-mx-px md:-mx-px lg:-mx-1 xl:-mx-1 flex flex-wrap items-center -mx-px overflow-hidden">
                        <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                            <div class="lg:block hidden">
                                <img class="h-28 object-contain mx-auto" src="{{ asset('storage/images/money.svg') }}" alt="Szolgáltató és szakember megtalálása" >
                            </div>
                            <div class="lg:hidden block my-auto">
                                <p class="explainer">{!! nl2br('Ha javaslattevő vagy, és a javaslatkérő az általad javasolt szolgáltatót választja, akkor a javaslatkérésben feltüntetett jutalék téged illet.') !!}</p>
                            </div>
                        </div>
                        <div class="sm:my-px sm:px-px sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-1 lg:px-1 lg:w-full xl:my-1 xl:px-1 xl:w-full w-1/2 px-px my-px overflow-hidden">
                            <div class="lg:block hidden">
                                <p class="explainer">{!! nl2br('Ha javaslattevő vagy, és a javaslatkérő az általad javasolt szolgáltatót választja, akkor a javaslatkérésben feltüntetett jutalék téged illet.') !!}</p>
                            </div>
                            <div class="lg:hidden block my-auto">
                                <img class="h-28 object-contain mx-auto" src="{{ asset('storage/images/money.svg') }}" alt="Szolgáltató és szakember megtalálása" >
                            </div>
                        </div>
                </div>
            </div>
        </div>
                    
    </section>
@stop