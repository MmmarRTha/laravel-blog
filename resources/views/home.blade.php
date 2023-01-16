@extends('template')

@section('content')
    <div class="bg-gradient-to-r from-sky-800 to-indigo-600 px-6 py-10 md:px-14 md:py-16 mx-4 rounded-lg mb-8 relative">
        <span class="text-sm uppercase text-white bg-sky-400 rounded-full px-2 py-1">Code</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-cyan-200 mt-2">Web Development Project</p>
        <img src="{{ asset('images/dev-png-1-1049627534.png') }}" alt="dev" class="absolute h-28 w-28 opacity-70 right-5 top-7 md:h-52 md:w-52 md:right-20 md:top-3">
    </div>

{{-- <h1 class="text-xl">Home Cat Blog</h1> --}}
<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Content</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach ($posts as $post)
        <a href="{{ route('post', $post->slug) }}" class="bg-gradient-to-b from-slate-700 to-slate-500 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-slate-900 bg-sky-300 rounded-full px-2 py-1 font-medium">Tutorial</span>
                <span class="text-white">{{ $post->created_at->format('d/m/Y') }}</span>
            </p>
            <h2 class="text-xl font-bold text-white mt-2">{{ $post->title }}</h2>

            <div class="text-xs text-white opacity-75 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                </svg>
                {{ $post->user->name }}
            </div>
        </a>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>

@endsection
