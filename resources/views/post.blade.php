@extends('template')
@section('content')
<div class="max-w-4xl mx-auto text-justify">
    <h1 class="text-3xl md:text-5xl mb-8 px-6 lg:p-0">{{ $post->title }}</h1>
    <p class="leading-loose text-lg text-gray-800 px-6 lg:p-0">
        {{ $post->content }}
    </p>
</div>
@endsection
