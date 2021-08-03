@extends('layouts.app')
@section('content')
    
    <div class="bg-dvlpmn-gray-light min-h-screen">
    
        <!-- Page Content -->
        <main role="main">
            <div id="section-container">
                <!-- Section Welcome -->
                @include('sections.welcome')
    
                <!-- Section Services -->
                @include('sections.services')
    
                <!-- Section Projects -->
                @include('sections.projects')
                
                <!-- Section About -->
                @include('sections.about')
                
                <!-- Section Contact -->
                @include('sections.contact')
            </div>
        </main>
        
    </div>
@stop
