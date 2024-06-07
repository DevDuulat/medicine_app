@extends('layouts.app')

@section('content')
    @include('partials.header')
<div class="max-w-4xl mx-auto py-12 px-4">
    <h1 class="text-2xl font-bold mb-4">Список анализов</h1>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Название</th>
                <th class="py-3 px-6 text-left">Описание</th>
                <th class="py-3 px-6 text-left">Цена</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach($analyses as $analysis)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $analysis->name }}</td>
                    <td class="py-3 px-6 text-left">{{ $analysis->description }}</td>
                    <td class="py-3 px-6 text-left">{{ $analysis->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

    @include('partials.footer')
@endsection
