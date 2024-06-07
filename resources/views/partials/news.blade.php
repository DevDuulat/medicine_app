<div class="max-w-7xl mx-auto py-12">
    <h2 class="text-3xl font-bold mb-6">Последние новости</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($posts as $post)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ $post->banner_url }}" alt="Изображение новости" class="w-full h-40 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($post->excerpt, 200, $end='...') }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
