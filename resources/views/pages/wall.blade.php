@extends('layouts.app')

@section('title')
    Perfil: {{ $user->username }}
@endsection

@section('content')
    <section class="flex flex-col items-center justify-between px-4 md:min-h-[85vh] md:max-w-xs mx-auto">
        <div class="flex flex-col w-full items-center">
            <div class="mb-2 md:mb-6 h-40 w-40">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=160"
                    alt="" class="rounded-full">
            </div>

            <p class="text-4xl font-semibold capitalize pb-4">{{ $user->name }}</p>
            <div class="flex items-center mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                    <g clip-path="url(#a)">
                        <path fill="#181C40"
                            d="M7.5 1.25a4.372 4.372 0 0 0-4.375 4.375c0 3.281 4.375 8.125 4.375 8.125s4.375-4.844 4.375-8.125A4.372 4.372 0 0 0 7.5 1.25Zm0 5.938a1.563 1.563 0 1 1 .001-3.127A1.563 1.563 0 0 1 7.5 7.188Z" />
                    </g>
                    <defs>
                        <clipPath id="a">
                            <path fill="#fff" d="M0 0h15v15H0z" />
                        </clipPath>
                    </defs>
                </svg>

                <p class="text-[#181C40] font-medium ml-2">Buenos Aires</p>
            </div>

            <div class="w-full flex items-center  border-y-2 border-[#181C40] py-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none">
                    <path fill="#181C40"
                        d="M15.825 15.225c4.306 0 7.797-3.15 7.797-7.036 0-3.885-3.49-7.035-7.797-7.035-4.306 0-7.797 3.15-7.797 7.035 0 3.886 3.49 7.036 7.797 7.036ZM15.825 18.743c-7.813 0-14.175 4.728-14.175 10.553 0 .394.343.704.78.704h26.79c.437 0 .78-.31.78-.704 0-5.825-6.362-10.553-14.175-10.553Z" />
                </svg>
                <p class="text-[#181C40] font-semibold text-lg md:text-2xl ml-2">Personal Information</p>
            </div>

            <div class="w-full flex items-center  border-b-2 border-[#181C40] py-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" fill="none">
                    <path fill="#181C40"
                        d="M18.55.875A6.936 6.936 0 0 0 13 3.663 6.936 6.936 0 0 0 7.45.875C3.612.875.5 4 .5 7.862c0 1.488.238 2.863.65 4.138 1.975 6.25 8.063 9.988 11.075 11.012.425.15 1.125.15 1.55 0 3.013-1.024 9.1-4.762 11.075-11.012.412-1.275.65-2.65.65-4.138C25.5 4 22.387.875 18.55.875Z" />
                </svg>
                <p class="text-[#181C40] font-semibold text-lg md:text-2xl ml-2">Saved</p>
            </div>
        </div>

        <div class="w-full mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none">
                <path fill="#181C40"
                    d="M26.47 16.469c.064-.469.096-.953.096-1.469 0-.5-.032-1-.113-1.469l3.261-2.469c.29-.218.37-.64.193-.953l-3.084-5.187c-.193-.344-.595-.453-.948-.344l-3.84 1.5a11.43 11.43 0 0 0-2.602-1.469L18.855.641a.77.77 0 0 0-.77-.641h-6.17a.754.754 0 0 0-.754.64l-.578 3.97c-.948.374-1.816.89-2.603 1.468l-3.839-1.5a.777.777 0 0 0-.948.344L.125 10.109c-.192.329-.128.735.193.954l3.26 2.468c-.08.469-.144.985-.144 1.469 0 .484.032 1 .113 1.469L.286 18.937a.752.752 0 0 0-.193.954l3.084 5.187c.193.344.595.453.948.344l3.84-1.5a11.43 11.43 0 0 0 2.601 1.469l.579 3.968c.08.375.385.641.77.641h6.17a.743.743 0 0 0 .754-.64l.578-3.97a11.096 11.096 0 0 0 2.603-1.468l3.839 1.5c.353.125.755 0 .948-.344l3.084-5.187c.193-.344.112-.735-.193-.953l-3.229-2.47ZM15 20.625c-3.18 0-5.783-2.531-5.783-5.625S11.82 9.375 15 9.375c3.18 0 5.783 2.531 5.783 5.625S18.18 20.625 15 20.625Z" />
            </svg>
        </div>
    </section>

    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Publicaciónes</h2>

        @foreach ($posts as $post)
            <div>
                <a href="">
                    <img src="{{ $post->image }}" alt="Imagen del post {{ $post->title }}">
                </a>
            </div>
        @endforeach
    </section>
@endsection
