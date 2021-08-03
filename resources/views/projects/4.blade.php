{{-- Seiyra Design --}}

@extends('layouts.app')
@section('content')

    <section id="project-4" class="gradient-background">
        <div class="flex justify-center">
            <div class="max-w-7xl space-y-4">
                <div>
                    <h2 class="xl:text-4xl mb-4 text-2xl font-bold text-center">
                        {!! 'Medical Shoes Manufacturing' !!}
                    </h2>
                </div>

                <div class="font-montserrat space-y-8"></div>
                    <div class="p-6">
                        <div class=" flex flex-wrap mx-auto">
                            <div class="sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 flex flex-wrap mx-auto">
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto rounded-lg shadow">
                                    <img class="h-80 object-contain mx-auto"
                                        src="{{ asset('storage/images/project_shoes_scr_1.png') }}"
                                        alt="Szolgáltató és szakember megtalálása">
                                </div>
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <p class=" xl:text-lg items-center text-sm tracking-wide text-center uppercase">
                                        {!! nl2br('Szolgáltatásra van szükséged, de nincs ismeretséged ezen a téren? Ha azt sem tudod, hogy hol keresd, vagy próbáltad, de nem találtál? Ha nem csak egy véges adatbázisból akarsz meríteni, hanem azok a szolgáltatók is érdekelnek, akiket máshogy nem találnál meg? Akkor a legjobb helyen jársz!') !!}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 flex flex-wrap mx-auto">
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <p class=" xl:text-lg items-center text-sm tracking-wide text-center uppercase">
                                        {!! nl2br('Gyors regisztráció és bejelentkezést követően add fel javaslatkérésed, hogy mielőbb megtaláld az ár/érték arányban legkedvezőbb szolgáltatót.') !!}
                                    </p>
                                </div>
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <img class="h-80 object-contain mx-auto"
                                        src="{{ asset('storage/images/project_shoes_scr_2.png') }}"
                                        alt="Szolgáltató és szakember megtalálása">
                                </div>
                            </div>
                            <div class="sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 flex flex-wrap mx-auto">
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <img class="h-80 object-contain mx-auto"
                                        src="{{ asset('storage/images/project_shoes_scr_5.png') }}"
                                        alt="Szolgáltató és szakember megtalálása">
                                </div>
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <p class=" xl:text-lg items-center text-sm tracking-wide text-center uppercase">
                                        {!! nl2br('A javaslatkérésedre beérkezett javaslatokról értesítést küldünk, melyben tájékoztatunk a javaslatkérés díjának befizetésével kapcsolatos részletekről is.') !!}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 flex flex-wrap mx-auto">
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <p class=" xl:text-lg items-center text-sm tracking-wide text-center uppercase">
                                        {!! nl2br('Amint beérkezett a javaslatkérés díja, elküldjük neked a javaslatokat.') !!}
                                    </p>
                                </div>
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <img class="h-80 object-contain mx-auto"
                                        src="{{ asset('storage/images/project_shoes_scr_3.png') }}"
                                        alt="Szolgáltató és szakember megtalálása">
                                </div>
                            </div>
                            <div class="sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 flex flex-wrap mx-auto">
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <img class="h-80 object-contain mx-auto"
                                        src="{{ asset('storage/images//project_shoes_scr_6.png') }}"
                                        alt="Szolgáltató és szakember megtalálása">
                                </div>
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <p class=" xl:text-lg items-center text-sm tracking-wide text-center uppercase">
                                        {!! nl2br('Vedd fel a kapcsolatot valamennyi javasolt szolgáltatóval és válaszd ki a számodra legmegfelelőbbet.') !!}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 flex flex-wrap mx-auto">
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <p class=" xl:text-lg items-center text-sm tracking-wide text-center uppercase">
                                        {!! nl2br('Jelezz vissza nekünk, hogy kit választottál, és mi a javaslatkérés díját megosztjuk a „nyertes” javaslattevővel.') !!}
                                    </p>
                                </div>
                                <div class="sm:px-3 sm:w-1/2 md:px-3 md:w-1/2 lg:px-3 lg:w-1/2 xl:px-3 xl:w-1/2 flex w-1/2 px-3 m-auto">
                                    <img class="h-80 object-contain mx-auto"
                                        src="{{ asset('storage/images/project_shoes_scr_4.png') }}"
                                        alt="Szolgáltató és szakember megtalálása">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop