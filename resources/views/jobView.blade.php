@extends('layouts.master')
<!-- Page title -->
@section("page__title", 'Selected Job')
<!-- Body of website-->
@section('body__content')

<!-- Job Introduction -->
<section>
    <!-- Logo -->
    <div class="flex justify-center">
        <div>
            <img src="{{ asset('assets/company info/n-blem.svg') }}" 
            alt="Company logo" width="40" height="40">
        </div>
   
    </div>
    <!-- Job title -->
    <div class="flex justify-center">
        <div>
            <h1
            class="m-0 p-4 font-sans text-xl font-bold tracking-widest md:text-2xl"
            >
                Software Engineer
            </h1>
        </div>

       
    </div>

    <div class="flex justify-center">
        <div>
            <div class="font-sans text-base font-semibold 
                tracking-wide text-black md:text-sm">
                <h3>Ksh 100000</h3>
            </div>
            
            <div class="flex justify-center font-sans text-xxs font-semibold 
                text-black/75 tracking-wide md:text-sm">
                <P> Nairobi, Kenya </P>
            </div>
        
        </div>
    </div>
    

</section>

@stop