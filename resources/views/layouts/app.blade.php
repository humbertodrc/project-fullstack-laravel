<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>Test-Fullstack @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#E1F5FE]">
    <header>
        <nav
            class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 text-lg text-gray-700">
            <div>
                <a href="#">
                    <img class="h-8 w-8 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class="pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
                    <li>
                        <a class="md:p-4 py-2 block text-[#181C40] hover:text-[#050720]" href="{{ route('posts.create')}}">Create</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block text-[#181C40] hover:text-[#050720]" href="{{route('wall.index', ['user' => auth()->user()])}}">Posts</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block text-[#181C40] hover:text-[#050720]" href="{{ route('posts.index',['user' => auth()->user()])}}">Profile</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block text-[#181C40] hover:text-[#050720]" href="#">Favorites</a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="md:p-4 py-2 block text-[#181C40] hover:text-[#050720]">Sign off</button>
                    </form>
                </ul>
            </div>
        </nav>
    </header>

    {{-- Contenido --}}
    <main class="container mx-auto mt-10">
        {{-- <h2 class=" font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2> --}}

        @yield('content')

    </main>

    {{-- <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Test - Fullstack {{ now()->year }}
    </footer> --}}

</body>

</html>
