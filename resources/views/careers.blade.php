@extends('layouts.master')

<!-- Page title -->
@section("page__title", 'Careers - Novaforge')
<!-- Body of website-->
@section('body__content')

    <!-- Introduction to the careers page -->
    <section>
        <div class="flex flex-col md:items-center md:flex-row">
             <!-- Application illustration -->
            <div class="md:order-last">
                <img src="{{ asset('assets/site_illustrations/novaforge_illustration.png') }}" 
                    alt="Application Illustration">
            </div>
            <div class="flex flex-col md:basis-3/4">
                <div>
                    <h1
                    class="py-2 font-mono text-2xl font-extrabold tracking-wider
                        md:text-xl"
                    >
                    Join Novaforge: Empowering Innovators, Fuelling Futures
                    </h1>
                </div>
                <div>
                    <p
                    class="font-mono text-xxs font-normal tracking-widest
                        md:text-base"
                    >
                        Embark on a Journey with Novaforge: Where Innovation Meets Investment. 
                        We're not just a venture capital firm; we're a catalyst for transformative change. 
                        Join us in shaping the future of emerging technologies and disruptive innovations.
                    </p>
                </div>
                 <!-- Application Button -->
                <div 
                    class=" flex mt-10">
                    <div>
                        <a href="{{ route('available__jobs') }}"
                            class="p-4 rounded-lg bg-darkBlue text-white font-mono font-medium
                                tracking-wide hover:bg-lightBlue">
                            Apply now
                        </a>
                    </div>
                    
                
                </div>
            </div>
            
        </div>

       
    </section>

@stop