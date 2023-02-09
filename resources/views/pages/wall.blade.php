@extends('layouts.app')

@section('title')
    Perfil: {{ $user->username}}
@endsection

@section('content')
    <section class="container mx-auto mt-10 px-4">
        <h2 class="text-[#181C40] text-4xl text-center font-black my-10">Publicaciónes</h2>

        @if ($posts->count())
        <div class="grid md:gird-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('posts.show', ['post' => $post, 'user' => $user]) }}">
                        <img src="{{ asset('uploads' . '/' .$post->image) }}" alt="Imagen del post {{$post->title}}">
                    </a>
                    <p class="text-[#181C40] text-base font-bold">{{$post->title}}</p>
                </div>
            @endforeach
        </div>

        <div class="my-10">
            {{ $posts->links() }}
        </div>
        @else
            <p class="text-[#181C40] uppercase text-sm text-center font-bold">No hay posts</p>
        @endif
    </section>
@endsection
