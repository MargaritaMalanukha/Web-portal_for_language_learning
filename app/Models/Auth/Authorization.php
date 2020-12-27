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
            'email' => 'required|max:30|email:rfc,dns',
            'password' => 'required|max:20',
        ]);
    }

    public static function authenticate(Request $request)
    {
        $user = User::findByEmail($request->input('email'));
        if ($user == null || $user->password != $request->input('password')) {
            return false;
        }
        $request->session()->put('id', $user->id);
        return true;
    }

    public static function is_authenticated(Request $request)
    {
        if ($request->session()->has('id')) return true;
        return false;
    }
}
