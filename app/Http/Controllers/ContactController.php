<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Тут можно, например, отправить письмо
        // Или сохранить в базу

        // В этом примере просто выведем "Спасибо"
        return redirect('/')->with('success', 'Спасибо! Мы свяжемся с вами.');
    }
}
