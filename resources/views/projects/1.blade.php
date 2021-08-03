{{-- JAVASOLJ --}}


@extends('layouts.app')
@section('content')

    <section id="project-1" class="py-7 bg-dvlpmn-gray-light">
        <div class="flex justify-center px-4">
            <div class="max-w-7xl sm:space-y-8 space-y-4">
                <div>
                    <h1 class="lg:text-4xl xl:text-5xl text-dvlpmn-blue-dark text-3xl font-extrabold tracking-wider text-center">
                        <span>{!! 'Medical Shoes Manufacturing BMS' !!}</span>
                    </h1>
                </div>

                <div class="space-y-14 flex"></div>
                    <div class="space-y-4">
                        <div class="flex px-2 mx-auto">
                            <img 
                                class="border-1 rounded-xl border"
                                src="{{ asset('storage/images/project_shoes_scr_9.png') }}"
                                alt="Szolgáltató és szakember megtalálása"
                                style="box-shadow: 10px 13px #001E4F;">
                        </div>  

                        <div class="">
                            <h2 class="font-montserrat lg:text-xl xl:text-2xl text-dvlpmn-blue-light mt-6 mb-4 text-lg font-extrabold tracking-wider text-center">Send exactly what your contacts want to&nbsp;see</h2>
                            <p class="font-montserrat text-dvlpmn-blue-light text-center">What happens when you need to send different messages to different audiences? Segmentation and dynamic content make it easy to customize your message and send targeted emails to exactly the right contact.</p>
                        </div>
                    </div>

                    <hr class="bg-dvlpmn-blue-light border-1 flex mx-auto border shadow" />

                    <div class="sm:space-y-4 space-y-2">
                        <div class="flex mx-auto shadow">
                            <img 
                                class="rounded-lg"
                                src="{{ asset('storage/images/project_shoes_scr_3.png') }}"
                                alt="Szolgáltató és szakember megtalálása"
                                style="box-shadow: 10px 13px #001E4F;">
                        </div>  

                        <div class="">
                            <h2 class="font-montserrat lg:text-xl xl:text-2xl text-dvlpmn-blue-light mt-6 mb-4 text-lg font-extrabold tracking-wider text-center">Send exactly what your contacts want to&nbsp;see</h2>
                            <p class="font-montserrat text-dvlpmn-blue-light text-center">What happens when you need to send different messages to different audiences? Segmentation and dynamic content make it easy to customize your message and send targeted emails to exactly the right contact.</p>
                        </div>
                    </div>

                    <hr class="bg-dvlpmn-blue-light border-1 flex mx-auto border shadow" />

                    <div class="space-y-4">
                        <div class="flex mx-auto shadow">
                            <img 
                                class="rounded-lg"
                                src="{{ asset('storage/images/project_shoes_scr_7.png') }}"
                                alt="Szolgáltató és szakember megtalálása"
                                style="box-shadow: 10px 13px #001E4F;">
                        </div>  

                        <div class="">
                            <h2 class="font-montserrat lg:text-xl xl:text-2xl text-dvlpmn-blue-light mt-6 mb-4 text-lg font-extrabold tracking-wider text-center">Send exactly what your contacts want to&nbsp;see</h2>
                            <p class="font-montserrat text-dvlpmn-blue-light text-center">What happens when you need to send different messages to different audiences? Segmentation and dynamic content make it easy to customize your message and send targeted emails to exactly the right contact.</p>
                        </div>
                    </div>

                    <hr class="bg-dvlpmn-blue-light border-1 flex mx-auto border shadow" />
                    
                </div>
            </div>
        </div>
    </section>
@stop