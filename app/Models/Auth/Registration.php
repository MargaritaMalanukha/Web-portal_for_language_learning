<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class Registration extends Model
{
    use HasFactory;

    public static function validate(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => 'required|max:255',
            'repeat-password' => 'required|max:255',
            'userType' => 'required',
            'level' => 'required'
        ]);
        if ($request->input('password') != $request->input('repeat-password')) {
            throw ValidationException::withMessages(['repeat-password' => 'Пароль не подтверждён!']);
        }
    }

    public static function create(Request $request) {
        DB::table('users')->insert([

        ]);
    }
}
