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

    //todo 4)bugfix регистрации
    //todo 5)Authorization::authenticate.
    //todo 6)Настройки сессии.
    //todo 7)front bugfix.

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
