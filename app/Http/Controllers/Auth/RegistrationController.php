<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Authorization;
use App\Models\Auth\Registration;
use App\Models\Language_level;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    //todo 1)проверить всё ли есть в сессии
    //todo 2)протестировать авторизацию\регистрацию
    //todo 3)установить ворота (is_Authorized под каждым рутом)
    //todo 4)пофиксить фронт.
    //todo 5)дебаг названия страницы без добавления в сессию.(? нету русской версии)

    public function show_registration(Request $request) {
        $user_types = User_type::all();
        $levels = Language_level::all();
        $request->session()->put('page_caption', 'REGISTER');
        return view('auth.register')
            ->with('user_types', $user_types)
            ->with('levels', $levels);
    }

    public function register(Request $request) {
        Registration::validate($request);
        Registration::create($request);
        Registration::insertAllIntoSession($request);
        return redirect('/home');
    }
}
