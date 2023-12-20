@extends('layouts.master')

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
                action="{{ route('search_all_jobs') }}" 
                method="GET" 
                class="flex pt-6 items-center space-x-2">
                @csrf
                <div>
                    <label for="jobs_search"></label>
                    <input
                        id="search_jobs"
                        name="jobs_search"
                        type="text" 
                        placeholder="Search..."
                        value="{{ old('jobs_search') }}"
                        class="bg-gray-200 p-2 w-full rounded-md border border-slate-300
                            focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500
                            font-mono text-base">
                </div>
                
                <!--Search button-->
                <button type="submit"
                    class=" p-2 rounded-lg bg-darkBlue text-white font-mono font-medium
                                tracking-wide hover:bg-lightBlue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                </button>
                
            </form>
            @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p
                            class="pl-2 m-0 font-mono font-semibold text-red-500 text-xxs tracking-wide"
                        >{{ $error }}</p>
                    @endforeach
            @endif
            <p 
                id='error_message'
                style="visibility: hidden;"
                class="pl-2 m-0 font-mono font-semibold text-xxs  tracking-wide"
                >Error message</p>
      
            

    </section>
@stop