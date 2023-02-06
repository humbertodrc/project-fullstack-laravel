@extends('layouts.auth')

@section('title')
    Create Account
@endsection

@section('content')
    <form class="w-full mb-9" action="{{ route('register') }}" method="POST" novalidate>
        @csrf
        <div class="mb-2">
            <label class="mb-2 block  text-[#181C40] font-bold" for="username">Name</label>
            <input id="name" name="name" type="text" placeholder="name"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{ old('name') }}">
            @error('name')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-2">
            <label class="mb-2 block  text-[#181C40] font-bold" for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                value="{{ old('username') }}">
            @error('username')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-2">
            <label class="mb-2 block  text-[#181C40] font-bold" for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Email"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                value="{{ old('email') }}">
            @error('email')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-2">
            <label class="mb-2 block  text-[#181C40] font-bold" for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
            @error('password')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-5">
            <label class="mb-2 block  text-[#181C40] font-bold" for="password_confirmation">Repetir Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password"
                placeholder="Repetir Password"
                class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
            @error('password')
                <span class="text-red-500 text-sm italic">{{ $message }}</span>
            @enderror
        </div>
        <input type="submit" type="submit" value="Create Account" class="bg-[#D90566] hover:bg-[#b7145d] transition-colors cursor-pointer  font-bold w-full p-3 text-white rounded-lg" />

    </form>
@endsection
