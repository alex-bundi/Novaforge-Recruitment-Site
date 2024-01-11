@extends('layouts.master')

<!-- Page title -->
@section("page__title", 'Selected Job')

<!-- Body of website-->
@section('body__content')
    <!-- Application form header -->
    <section>
        <div
            class="flex flex-col mb-2 p-2 bg-whiteSmoke drop-shadow-md">
            <div>
                <h1 class="font-mono text-base font-extrabold tracking-wide mb-1
                    md:text-xl">
                    Profile
                </h1>
            </div>

            <!-- Applicatants Name -->
            <div class="flex flex-row pl-2 space-x-2">
                <h2 class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                      md:text-sm">
                    Name:
                </h2>
                <p class="font-normal font-sans text-xxs tracking-widest text-black-600/50
                      md:text-sm">
                    Alex Bundi
                </p>
            </div>
            
        </div>

        <!-- Job Details -->
        <div
            class="flex flex-col p-2 bg-whiteSmoke drop-shadow-md">
            <div>
                <h1 class="font-mono text-sm font-extrabold tracking-wide mb-1
                    md:text-base">
                    Job Details
                </h1>
            </div>

            <div class="flex flex-col md:flex-row ">
                <!-- Job Title -->
                <div class="flex flex-row pl-2 space-x-2">
                    <h2 class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        Job Title:
                    </h2>
                    <p class="font-normal font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        Software Engineer
                    </p>
                </div>

                <!-- Job Salary -->
                <div class="flex flex-row pl-2 space-x-2">
                    <h2 class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        Salary:
                    </h2>
                    <p class="font-normal font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        Ksh 90000
                    </p>
                </div>

                <!-- Job Positions -->
                <div class="flex flex-row pl-2 space-x-2">
                    <h2 class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        Positions:
                    </h2>
                    <p class="font-normal font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        2
                    </p>
                </div>

                <!-- Job Location -->
                <div class="flex flex-row pl-2 space-x-2">
                    <h2 class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                    Location:
                    </h2>
                    <p class="font-normal font-sans text-xxs tracking-widest text-black-600/50
                        md:text-sm">
                        Nairobi, Kenya
                    </p>
                </div>
            </div>
            
        </div>

    
    </section>






@endsection
@php
    $excludeFooter = true;
@endphp 