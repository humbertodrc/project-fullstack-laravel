@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="container mx-auto flex flex-col gap-6 2xl:gap-0 md:flex-row px-6">
        <div class="md:w-1/2 mx-auto">
            <img class="object-cover xl:max-w-xl" src="{{ asset('uploads' . '/' .$post->image) }}" alt="Imagen del post {{$post->title}}">
            <div class="pt-3">
                <p class="text-[#181C40] text-xs">0 likes</p>
            </div>
            <p class="text-[#181C40] text-xs">{{$post->user->username}}</p>
            <p class="text-[#181C40] text-xs">{{$post->created_at->diffForHumans()}}</p>
        </div>
        <div class="md:w-1/2">
            <p class="text-[#181C40] text-2xl font-bold">{{$post->title}}</p>
            <p class="text-[#181C40] text-base font-normal">{{$post->description}}</p>
        </div>
    </div>
@endsection
