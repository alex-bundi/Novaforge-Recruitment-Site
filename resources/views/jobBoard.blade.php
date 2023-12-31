@extends('layouts.master')
@vite('resources/js/jobBoard.js')
<!-- Page title -->
@section("page__title", 'Job Board')
<!-- Body of website-->
@section('body__content')

    <!-- Introduction to the careers page -->
    <section>
        <div class="flex flex-col">
            <div> <!-- Saluatation to user -->
                <h1 
                    class=" font-mono text-sm font-medium tracking-wide text-black/75
                        md:text-base">
                    Hello Alex
                </h1>
            </div>
            <div>
                <p
                    class="font-mono text-sm font-semibold tracking-wide
                        md:text-base">
                    Find your perfect job.
                </p>
            </div>
        </div>
    </section>

    <!-- Search Function -->
    <section>
        
            <form id="job_search_form"                 
                class="flex pt-6 items-center space-x-2">
                @csrf
                <div>
                    <label for="jobs_search"></label>
                    <input
                        id="search_jobs"
                        name="jobs_search"
                        type="text" 
                        placeholder="Search..."
                       
                        class="bg-gray-200 m-0 p-2 w-full rounded-md border border-slate-300
                            focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500
                            font-mono text-base">
                </div>
                
                <!--Search button-->
                <button type="submit"
                    id="search_button"
                    class=" p-2 rounded-lg bg-darkBlue text-white font-mono font-medium
                                tracking-wide hover:bg-lightBlue">
                                
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                </button>
                <p 
                    id='error_message'
                    style="visibility: hidden;"
                    class="pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide"
                    >Error message
                </p>
            </form>

            {{-- If search value equals to none --}}
            <div id="not_found"
                class="invisible flex space-x-1 ml-2 pl-2 pt-0 text-red-400
                    font-mono text-xxs font-bold tracking-wide md:text-sm"
                >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p></p>
            </div>

            {{-- If search value exists --}}
            <div class="flex flex-col md:flex-row gap-y-2 md:space-x-4">
                <ul>
                    {{-- Search items --}}
                    <a href="{{ route('selected__job') }}">
                        {{-- Specific job --}}
                        <div id="found_search_value"></div> 
                    </a>
                </ul>
            </div>
    </section>

    {{-- All Available job posts --}}
    <section>
        <div>
            <p class="font-mono text-base font-extrabold tracking-wide mb-3
                md:text-xl">
                Available Jobs
            </p>
        </div>
        <div class="flex flex-col md:flex-row gap-y-2 md:space-x-4">
            <ul>
                {{-- Search items --}}
                
                    {{-- Specific job --}}
                    <div id="job__info__container">
                    
                    </div> 
            </ul>
        </div>
        
    </section>
@stop
