@extends('layouts.app')

@section('title')
    Create Post
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10 mb-4 md:mb-0">
            <form method="POST" enctype="multipart/form-data" action="{{ route('images.store') }}" id="dropzone"
                class="dropzone border-dashed border border-[#181C40] w-full h-[256px] rounded flex flex-col justify-center items-center"
                action="">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 px-10">
            <form class="w-full h-full" action="{{ route('posts.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-2">
                    <label class="mb-2 block  text-[#181C40] font-bold" for="title">Title Post</label>
                    <input id="title" name="title" type="text" placeholder="Title Post"
                        class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('title') border-red-500 @enderror"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="mb-2 block  text-[#181C40] font-bold" for="description">Description Post</label>
                    <textarea id="description" name="description" placeholder="Description Post"
                        class="focus:border-[#181C40] focus:outline-none focus:shadow-outline border p-3 w-full rounded-lg @error('description') border-red-500 @enderror">
                    </textarea>
                    @error('description')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <input name="image" type="hidden" value="{{ old('image') }}">
                    @error('image')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" type="submit" value="Create Post"
                    class="bg-[#D90566] hover:bg-[#b7145d] transition-colors cursor-pointer  font-bold w-full p-3 text-white rounded-lg" />

            </form>
        </div>
    </div>
@endsection
