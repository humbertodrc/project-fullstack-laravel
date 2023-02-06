@extends('layouts.auth')

@section('title')
    Sign In
@endsection

@section('content')
    <form class="w-full mb-24" action="{{ route('login') }}" method="POST" novalidate>
        @csrf

        @if(session('mensaje'))
        <span class="text-red-500 text-sm italic">{{ session('mensaje') }}</span>
        @endif

        <div class="mb-2">
            <label class="mb-2 block  text-[#181C40] font-bold" for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Tu Email de Registro"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-5">
            <label class="mb-2 block  text-[#181C40] font-bold" for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password de Registro"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
            @error('password')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <input type="submit" type="submit" value="Sign In"
            class="bg-[#D90566] hover:bg-[#b7145d] transition-colors cursor-pointer  font-bold w-full p-3 text-white rounded-lg" />
    </form>

    <nav class="flex items-center justify-between w-full">
        <a class="text-[#181C40]" href="{{ route('register') }}">Forgot Password?</a>
        <a class="text-[#D90566]" href="{{ route('register') }}">Create Count</a>
    </nav>
@endsection
