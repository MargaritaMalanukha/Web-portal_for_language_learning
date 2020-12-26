<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Authorization extends Model
{
    use HasFactory;

    public static function validate(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255|unique:users,email|email:rfc,dns',
            'password' => 'required|max:255',
        ]);
    }

    public static function authenticate(Request $request)
    {
        $user = self::findByEmail($request->input('email'));
        //todo find user by email and check his password, if it's correct return with true.
    }

    public static function findByEmail($input)
    {

    }
}
