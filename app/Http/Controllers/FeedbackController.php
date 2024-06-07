<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{

    public function submit(Request $request)
    {
        // Проверка и валидация данных из формы
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        // Создание новой записи обратной связи
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Перенаправление пользователя с сообщением об успешном сохранении данных
        return redirect()->back()->with('success', 'Данные успешно отправлены!');

    }
}
