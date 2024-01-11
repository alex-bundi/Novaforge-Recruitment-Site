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
                {{ $selectedCareersDetails['job_title']  }}
            </h1>
        </div>

       
    </div>

    <div class="flex justify-center">
        <div>
            <div class="font-sans text-base font-semibold 
                tracking-wide text-black md:text-sm">
                <h3>
                    Ksh {{ $selectedCareersDetails['Salary']  }} 
                </h3>
            </div>
            
            <div class="flex justify-center font-sans text-xxs font-semibold 
                text-black/75 tracking-wide md:text-sm">
                <P> {{ $selectedCareersDetails['location']  }}</P>
            </div>
        </div>
    </div>
</section>

<!-- Job Details -->
<section>
    <div class="flex  mt-3">
        <h1
            class="m-0 font-sans text-xl font-bold tracking-widest md:text-2xl">
            Description
        </h1>
    </div>
    <div
        class="p-2 font-sans text-sm tracking-widest md:text-base">
        <p>{{ $selectedCareersDetails['job_description']  }}</p>
    </div>
     <!-- Application Button -->
    <div class="flex mt-8">
        <a href=""
            class="flex justify-center basis-full rounded-lg p-2 bg-darkBlue text-white font-mono font-bold
                tracking-wide hover:bg-lightBlue md:basis-1/4">
            Apply Now
        </a>
    </div>

</section>

@stop