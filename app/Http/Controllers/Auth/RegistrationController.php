<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Registration;
use App\Models\Language_level;
use App\Models\User_type;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function show_registration(Request $request) {
        $user_types = User_type::allWithoutAdmin();
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
