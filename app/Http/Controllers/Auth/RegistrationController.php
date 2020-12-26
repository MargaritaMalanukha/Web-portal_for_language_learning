<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function show_registration(Request $request) {
        return view('auth.register');
    }

    public function register(Request $request) {
        Registration::validate($request);
        Registration::create($request);
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('password', $request->input('password'));
        return redirect('/home');
    }
}
