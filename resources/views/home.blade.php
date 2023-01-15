@extends('template')

@section('content')
    <div class="bg-gradient-to-r from-sky-900 to-indigo-600 px-20 py-16 rounded-lg mb-8 relative">
        <span class="text-sm uppercase text-white bg-sky-400 rounded-full px-2 py-1">Code</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-cyan-200 mt-2">Web Development Project</p>
        <img src="{{ asset('images/dev-png-1-1049627534.png') }}" alt="dev" class="absolute h-52 w-52 opacity-70 right-20 top-3">
    </div>

{{-- <h1 class="text-xl">Home Cat Blog</h1> --}}
<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Content</h1>

    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach ($posts as $post)
        <a href="" class="bg-slate-700 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-slate-900 bg-sky-300 rounded-full px-2 py-1 font-medium">Tutorial</span>
                <span class="text-white">{{ $post->created_at->format('d/m/Y') }}</span>
            </p>
            <h2 class="text-xl font-bold text-white mt-2">{{ $post->title }}</h2>
        </a>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>

@endsection
