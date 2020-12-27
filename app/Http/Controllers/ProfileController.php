<?php

namespace App\Http\Controllers;

use App\Models\Auth\Authorization;
use App\Models\Language_level;
use App\Models\Subscription_type;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

//todo 1)оформление подписки
class ProfileController extends Controller
{
    public function index(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $email = User::reduceEmail($request->session()->get('email'));

        $level = Language_level::findDescriptionById($request->session()->get('level'));
        $usertype = User_type::findDescriptionById($request->session()->get('usertype'));
        $subscriptionType = Subscription_type::findDescriptionById($request->session()->get('subscriptionType'));
        return view('profile.profile')
            ->with('email', $email)
            ->with('level', $level)
            ->with('usertype', $usertype)
            ->with('subscriptionType', $subscriptionType);
    }

    public function edit_name(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        return view('profile.edit_name');
    }

    public function update_name(Request $request) {
        $request->validate([
            'name' => 'required|max:20'
        ]);
        User::updateName($request->input('name'), $request->session()->get('name'));
        $request->session()->put('name', $request->input('name'));
        return redirect('/profile');
    }

    public function edit_email_password(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        return view('profile.edit_email_password');
    }

    public function update_email_password(Request $request) {
        $request->validate([
            'email' => 'required|max:30|email:rfc,dns',
            'old-password' => 'max:20',
            'new-password' => 'max:20',
            'repeat-password' => 'max:20'
        ]);
        User::updateEmail($request->input('email'), $request->session()->get('id'));

        if ($request->input('old-password') != null
            && $request->input('new-password') != null
            && $request->input('repeat-password') != null) {

            if ($request->session()->get('password') != $request->input('old-password')){
                throw ValidationException::withMessages(['old-password' => 'Неправильный старый пароль!']);
            }
            if ($request->input('new-password') != $request->input('repeat-password')){
                throw ValidationException::withMessages(['repeat-password' => 'Пароль не подтверждён!']);
            }
            User::updatePassword($request->input('new-password'), $request->session()->get('id'));
            $request->session()->put('password', $request->input('new-password'));
        }

        $request->session()->put('email', $request->input('email'));

        return redirect('/profile');
    }

    public static function premium(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        return view('profile.premium');
    }
}
