<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    //todo 1)create method findAll in language_level model
    //todo 2)вставить данные из него вместо уровня в шаблоне
    //todo 3)дальше по накатанной получить создать пользователя
    //todo 4)bugfix регистрации
    //todo 5)Authorization::authenticate.
    //todo 6)Настройки сессии.
    //todo 7)front bugfix.

    public function show_registration(Request $request) {
        $request->session()->put('page_caption', 'REGISTER');
        return view('auth.register');
    }

    public function register(Request $request) {
        Registration::validate($request);
        Registration::create($request);
        Registration::insertAllIntoSession($request);
        return redirect('/home');
    }
}
