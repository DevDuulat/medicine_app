<div class="flex justify-center items-center py-12 bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md flex justify-between w-2/3">
        <!-- Колонка с картинкой -->
        <div class="w-1/2 mr-4 flex items-center">
            <img src="https://aqualab.kg/templates/aqualab/img/about-us.png" alt="Your Image" class="w-full my-auto">
        </div>
        <!-- Колонка с формой -->
        <div class="w-1/2">
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Имя</label>
                    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Введите ваше" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Введите ваш email" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Ваше сообщение</label>
                    <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-indigo-500" placeholder="Введите ваше сообщение" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 focus:outline-none">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
