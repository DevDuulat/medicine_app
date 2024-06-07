@extends('layouts.app')

@section('content')
    @include('partials.header')
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            @foreach($doctors as $doctor)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 shadow-md rounded-lg">
                        <div class="text-center">
                            <img class="mx-auto h-32 w-32 rounded-full object-cover mb-4" src="{{ asset('storage/' . $doctor->photo)  }}" alt="{{ $doctor->name }}">
                            <h2 class="text-xl font-semibold">{{ $doctor->name }}</h2>
                            <p class="text-gray-600">{{ $doctor->position }}</p>
                            <p class="mt-2">{{ $doctor->email }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.footer')
@endsection
