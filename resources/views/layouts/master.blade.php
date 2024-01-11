<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/index.js')
    <title>
        
        @yield("page__title", "Novaforge")
    </title>
</head>
<body class="scroll-smooth  grid grid-cols-1 grid-rows-[100px, auto] gap-y-1 font-sans bg-whiteSmoke">
    <!-- Loader for information -->
    <div id="preloader">
        <div class="spinner p-0 m-0">
        </div>
    </div>
    
    <!-- Header -->
    <h1
        class="m-0 p-4 font-sans text-xl font-bold tracking-widest text-darkBlue md:text-2xl"
    >
        <a href="{{ route('careers__homepage') }}"></a> NovaForge
    </h1>

    <main class="m-0 p-4">
        <!-- Body of website-->
        @yield('body__content')
    </main>

 @if (!isset($excludeFooter) || !$excludeFooter)
        @include('layouts.footer')
@endif
</body>
</html>