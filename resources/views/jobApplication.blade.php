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

    <!-- Application Tabs -->
    <section>
        <!-- Personal Details -->
        <div class="tab-container flex m-4 space-x-9 md:space-x-16">
            <div class="tab font-mono text-sm font-semibold tracking-wide text-black/75 active:text-green-500	
                        md:text-base" 
                onclick="openTab('tab1', 'Personal', this)">
                <h1>Personal</h1>
            </div>
        
            <!-- Experience -->
            <div class="tab font-mono text-sm font-semibold tracking-wide text-black/75 active:text-green-500	
                        md:text-base" 
                onclick="openTab('tab2', 'Experience', this)">
                <h1>Experience</h1>
            </div>
       
            <!-- Documents -->
            <div class="tab font-mono text-sm font-semibold tracking-wide text-black/75 active:text-green-500	
                        md:text-base" 
                onclick="openTab('tab3', 'Documents', this)">
                <h1>Documents</h1>
            </div>
            
        </div>        

    </section>

    <!-- Application Forms -->
    <section>
        <div class="ml-4">
            <!-- Personal Information -->
            <div id="tab1" class="tab-content active-content">
                <form action="">
                    <div class="flex flex-col md:flex-row md:gap-4 flex-wrap">
                        {{-- First Name --}}
                        <div>
                            <label for="firstname"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm">
                                First Name
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="firstname" 
                                id="">
                        </div>

                        {{-- Second Name --}}
                        <div>
                            <label for="secondname" 
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm">
                                Second Name
                            </label>
                            <input type="text" 
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="secondname" id="">
                        </div>

                        {{-- Surname --}}
                        <div>
                            <label 
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm"
                                for="surname">
                                Last Name
                            </label>
                            <input type="text" 
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                name="surname" id="">
                        </div>

                        {{-- Date of Birth --}}
                        <div >
                            <label 
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm"
                                for="surname">
                                Date of Birth
                            </label>
                            <input type="date" 
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans font-semibold
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                name="surname" id="">
                        </div>

                        
                        {{-- Mobile --}}
                        <div>
                            <label for="mobile"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm">
                                Mobile No
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="mobile" 
                                id="">
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm">
                                Email Address
                            </label>
                            <input type="email"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="email" 
                                id="">
                        </div>

                        {{-- Address --}}
                        <div>
                            <label for="address"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm">
                                Home Address
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="address" 
                                id="">
                        </div>

                        {{-- Current Location --}}
                        <div>
                            <label for="location"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 mb-2 md:text-sm">
                               Current Location
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="location" 
                                id="">
                        </div>

                    </div>

                    
                   
                
                
                </form>
            </div>

            <!-- Work Experience -->
            <div id="tab2" class="tab-content hidden">
                <h1>Work Experience</h1>
            </div>

            <!-- Documents -->
            <div id="tab3" class="tab-content hidden">
                <h1>Documents</h1>
            </div>
        
        </div>
        
    </section>


<script>
    function openTab(tabId, tabName, element) {
        let tabContents = document.getElementsByClassName('tab-content');
        
        
        for (let i=0; i < tabContents.length; i++) {
            
            if (!tabContents[i].classList.contains('hidden')) {
                tabContents[i].classList.add('hidden');
            }            
        }

        let selectedTab = document.getElementById(tabId);
        selectedTab.classList.remove('hidden');
        element.querySelector('h1').style.color = 'green';
    }

</script>

@endsection
@php
    $excludeFooter = true;
@endphp 