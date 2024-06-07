@extends('layouts.app')

@section('content')
    @include('partials.header')
<div class="max-w-7xl mx-auto py-12">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="{{ $post->banner_url }}" alt="Изображение новости" class="w-full h-96 object-cover">
        <div class="p-6">
            <h2 class="text-3xl font-bold mb-2">{{ $post->title }}</h2>
            <p class="text-gray-600">{!! $post->content !!} </p>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
