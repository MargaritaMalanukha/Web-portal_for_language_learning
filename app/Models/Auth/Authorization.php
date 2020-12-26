<?php

namespace App\Models\Auth;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Authorization extends Model
{
    use HasFactory;

    public static function validate(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255|email:rfc,dns',
            'password' => 'required|max:255',
        ]);
    }

    public static function authenticate(Request $request)
    {
        $user = User::findByEmail($request->input('email'));
        if ($user == null || $user->password != $request->input('password')) {
            return false;
        }
        self::insertAllIntoSession($user, $request);
        return true;
    }

    private static function insertAllIntoSession($user, Request $request)
    {
        $request->session()->put('name', $user->name);
        $request->session()->put('email', $user->email);
        $request->session()->put('password', $user->password);
        $request->session()->put('usertype', $user->usertype);
        $request->session()->put('level', $user->level);
        $request->session()->put('subscriptionType', $user->subscriptionType);
    }

    public static function is_authenticated(Request $request)
    {
        if ($request->session()->has('email')) return true;
        return false;
    }
}
