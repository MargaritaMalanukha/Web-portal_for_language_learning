<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Authorization;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function show_login() {
        return view('auth.login');
    }

    public function login() {
        Authorization::validate();
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }
}
