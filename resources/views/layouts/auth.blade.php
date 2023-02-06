<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test-Fullstack @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#E1F5FE]">

    <section class="flex flex-col items-center px-4 mt-24 md:max-w-lg mx-auto">
        <div class="bg-white w-[150px] h-[150px] rounded-full flex items-center justify-center mb-10">
            <span class="text-[#D90566] font-extrabold text-xl">TrApp</span>
        </div>

        <div class="w-full mb-8">
            <h1 class="text-[#181C40] font-medium text-4xl">@yield('title')</h1>
        </div>

        @yield('content')

    </section>

</body>

</html>
