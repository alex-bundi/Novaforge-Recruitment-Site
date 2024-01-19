@extends('layouts.master')
@vite('resources/js/jobApplication.js')
<!-- Page title -->
@section("page__title", 'Apply - ' . $selectedCareer['job_title'])

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
                        {{ $selectedCareer['job_title']  }}
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
                        Ksh {{ $selectedCareer['Salary']  }} 
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
                        {{ $selectedCareer['positions']  }} 
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
                        {{ $selectedCareer['location']  }}
                    </p>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Application Tabs -->
    <section>
        <!-- Personal Details -->
        <div>
            @if ($errors->any())
                <div class="alert alert-danger font-mono text-sm font-semibold tracking-wide text-black/75 active:text-green-500	
                        md:text-base">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
        </div>
        <div class="tab-container flex m-4 space-x-9 md:space-x-16">
            <div class="tab font-mono text-sm font-semibold tracking-wide text-black/75 active:text-green-500	
                        md:text-base"
                id="personal__info__tab"
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
                <form action="" id="personal__info">
                    <div class="flex flex-col md:flex-row md:gap-4 flex-wrap">
                        {{-- First Name --}}
                        <div class="flex flex-col">
                            <label for="firstname"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                First Name
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="firstname" 
                                id="fname">
                            <p 
                                id='fname_error_message'
                                class="hidden pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide">
                                Error message
                            </p>
                        </div>

                        {{-- Second Name --}}
                        <div class="flex flex-col" >
                            <label for="secondname" 
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm">
                                Second Name
                            </label>
                            <input type="text" 
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="secondname" id="sname">
                        </div>

                        {{-- Surname --}}
                        <div class="flex flex-col" >
                            <label 
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                     md:text-sm"
                                for="surname">
                                Last Name
                            </label>
                            <input type="text" 
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                name="surname" id="lname">
                            <p 
                                id='lname_error_message'
                                class="hidden pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide">
                                Error message
                            </p>
                        </div>

                        {{-- Date of Birth --}}
                        <div class="flex flex-col" >
                            <label 
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm"
                                for="surname">
                                Date of Birth
                            </label>
                            <input type="date" 
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans font-normal
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                name="surname" id="dbirth">
                            <p 
                                id='db_error_message'
                                class="hidden pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide">
                                Error message
                            </p>
                        </div>

                        
                        {{-- Mobile --}}
                        <div class="flex flex-col" >
                            <label for="mobile"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm">
                                Mobile No (Optional)
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="mobile" 
                                id="phoneno">
                        </div>

                        {{-- Email --}}
                        <div class="flex flex-col" >
                            <label for="email"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm">
                                Email Address
                            </label>
                            <input type="email"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="email" 
                                id="emAddress">
                            <p 
                                id='em_error_message'
                                class="hidden pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide">
                                Error message
                            </p>
                        </div>

                        {{-- Address --}}
                        <div class="flex flex-col" >
                            <label for="address"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm">
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
                        <div class="flex flex-col" >
                            <label for="location"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    md:text-sm">
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
                    <div class="flex mt-4">
                        <input type="button"
                            class="basis-1/2 rounded-lg p-2 bg-darkBlue text-white font-mono font-bold
                                tracking-wide hover:bg-lightBlue md:basis-1/4"
                            value="Next"
                            name="" 
                            id="next"
                            onclick="openTab('tab2', 'Experience', this)">
                    </div>
                </form>
            </div>

            <!-- Work Experience -->
            <div id="tab2" class="tab-content hidden">
                <!-- Form Opener -->
                <div class="flex">
                    <div class="flex basis-1/2 flex-row gap-x-48">
                        <div>
                            <h1 class="font-normal font-sans text-xxs tracking-widest text-black-600/50
                                md:text-sm">
                                Experience
                            </h1>
                        </div>
                        <div>
                            <input type="button"
                                class="p-1 rounded-lg bg-darkBlue text-xxs text-white font-mono font-bold
                                    tracking-wide hover:bg-lightBlue"
                                value="Add"
                                name="" 
                                id=""
                                onclick="displayForm()">
                            
                        </div>
                        
                    </div>
                       
                </div>

                <div class="hidden" id="addexperience">
                    <form action="">
                        <div class="flex flex-col md:flex-row md:gap-4 flex-wrap">
                            <!-- Job Title -->
                            <div class="flex flex-col">
                                <label for="jobtitle"
                                    class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                        mr-2 md:text-sm">
                                    Job Title
                                </label>
                                <input type="text"
                                    class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                    name="" 
                                    id="jobtitle">
                                <p 
                                    id='em_error_message'
                                    class="hidden pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide">
                                    Error message
                                </p>
                            </div>

                            <!-- Company Name -->
                            <div class="flex flex-col">
                                <label for="company"
                                    class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                        mr-2 md:text-sm">
                                    Company
                                </label>
                                <input type="text"
                                    class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                    name="" 
                                    id="company">
                            </div>

                            <!--Duration -->
                            <div class="flex flex-col">
                                <label for="duration"
                                    class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                        mr-2 md:text-sm">
                                    Duration
                                </label>
                                <input type="text"
                                    class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                    name="" 
                                    id="duration">
                            </div>

                            <!-- Is current -->
                            <div class="flex items-center mt-2 mb-2">
                                <label for="current"
                                    class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                        mr-2 md:text-sm">
                                    Current
                                </label>
                                <input type="radio"
                                    name="" 
                                    id="iscurrent">
                            </div>
                        </div>
                        <!-- Responsibilities -->
                            <div class="flex flex-col">
                                <label for="Responsibilities"
                                    class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                        mr-2 md:text-sm">
                                    Responsibilities                               
                                </label>
                                <textarea name="responsibilities"
                                    class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                        md:w-96"
                                    id="roles" 
                                    cols="30"
                                    rows="10"></textarea>

                            </div>
                            <div class="flex mt-4">
                            <input type="button"
                                class="basis-1/2 rounded-lg p-2 bg-darkBlue text-white font-mono font-bold
                                    tracking-wide hover:bg-lightBlue md:basis-1/4"
                                value="Next"
                                name="" 
                                id="next-tab3"
                                onclick="openTab('tab3', 'Documents', this)">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

            <!-- Documents -->
            <div id="tab3" class="tab-content hidden">
                <p 
                    id='empty-values'
                    class="hidden pl-2 m-0 font-mono font-semibold text-lg  tracking-wide">
                    Error message
                </p>
                <form action="{{ route('application__submitted') }}" id="applicant__details" method="POST">
                    @csrf
                    <div class="flex flex-col md:flex-row md:gap-4 flex-wrap">
                        <!-- Schools -->
                        <div class="flex flex-col">
                            <label for="schools"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                School(s)
                            </label>
                            <select 
                                name="schools"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96" 
                                id="school_type">
                                <option value="">High School</option>
                                <option value="">College</option>
                                <option value="">Technical School</option>
                                <option value="">University</option>
                            </select>
                        </div>

                        <!-- School Name -->
                        <div class="flex flex-col">
                            <label for="schoolname"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                School Name 
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="" 
                                id="schoolname">
                        </div>

                        <!-- School Address -->
                        <div class="flex flex-col">
                            <label for="schooladdress"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                School Address
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="" 
                                id="schooladdress">
                        </div>

                        {{-- School City --}}
                         <div class="flex flex-col">
                            <label for="schoolcity"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                School City
                            </label>
                            <input type="text"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="" 
                                id="schoolcity">
                        </div>

                        {{-- Number of years --}}
                        <div class="flex flex-col">
                            <label for="noofyears"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                Number of years
                            </label>
                            <input type="number"
                                class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                name="noofyears" 
                                id="noofyears">
                        </div>
                        
                        {{-- file Upload --}}
                        <div class="flex flex-col">
                            <label for="fupload"
                                class="font-semibold font-sans text-xxs tracking-widest text-black-600/50
                                    mr-2 md:text-sm">
                                Upload file
                            </label>
                            <input type="file"
                                    name="fupload"
                                    class="bg-gray-100 border-2 border-gray-200 rounded-md w-64 py-1.5 px-2 font-sans 
                                    text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500
                                    md:w-96"
                                    id="cv_file" >

                        </div>
                    </div>

                    <div class="flex mt-4">
                        <input type="submit"
                            class="basis-1/2 rounded-lg p-2 bg-darkBlue text-white font-mono font-bold
                                tracking-wide hover:bg-lightBlue md:basis-1/4"
                            value="Submit"
                            name="" 
                            id="next-tab3">
                    </div>
                </form>
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
        // element.querySelector('h1').style.color = 'green';
    }

    function displayForm() {
        let expForm = document.getElementById('addexperience');
        expForm.classList.remove('hidden'); 
    }

</script>

@endsection
@php
    $excludeFooter = true;
@endphp


