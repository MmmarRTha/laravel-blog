@extends('template')

@section('content')
<div>

</div>
{{-- <h1 class="text-xl">Home Cat Blog</h1> --}}
<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Cat Content</h1>

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
