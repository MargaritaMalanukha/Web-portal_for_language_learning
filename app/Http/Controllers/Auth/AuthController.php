<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Authorization;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function show_login(Request $request) {
        $request->session()->put('page_caption', 'LOGIN');
        return view('auth.login');
    }

    public function login(Request $request) {
        Authorization::validate($request);
        $data_is_correct = Authorization::authenticate($request);
        if (!$data_is_correct)
            return view('auth.login')->with('error', 'Вы ввели неправильный электронный адрес/пароль');
        return redirect('/home');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
