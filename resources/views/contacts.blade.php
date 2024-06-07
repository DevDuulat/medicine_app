@extends('layouts.app')

@section('content')
    @include('partials.header')

    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                        marginwidth="0" scrolling="no"
                        src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%D0%9A%D0%BB%D0%B8%D0%BD%D0%B8%D0%BA%D0%B0%20(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%92%D0%B0%D1%88%D0%B5%D0%B9%20%D0%BA%D0%BB%D0%B8%D0%BD%D0%B8%D0%BA%D0%B8)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                        style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Обратная связь</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Оставьте нам сообщение</p>
                <form action="{{ route('feedback.submit') }}" method="POST" class="px-4 py-6">
                    @csrf
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Имя</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Введите ваше" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Введите ваш email" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Сообщение</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="Введите ваше сообщение" required></textarea>
                    </div>
                    <button type="submit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Отправить</button>
                    <p class="text-xs text-gray-500 mt-3">Ваш отзыв поможет нам стать лучше.</p>
                </form>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
