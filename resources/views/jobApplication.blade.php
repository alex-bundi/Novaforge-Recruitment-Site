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
        <hr class="m-4 w-3/4 bg-gray-100 border-0">
        

    </section>

    <!-- Application Forms -->
    <section>
        <div id="tab1" class="tab-content active-content">
            <h1>Personal Information</h1>
        </div>

        <div id="tab2" class="tab-content hidden">
            <h1>Work Experience</h1>
        </div>

        <div id="tab3" class="tab-content hidden">
            <h1>Documents</h1>
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