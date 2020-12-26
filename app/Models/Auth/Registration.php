<?php

namespace App\Models\Auth;

use App\Models\Language_level;
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
            'email' => 'required|max:255|unique:users,email|email:rfc,dns',
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
        $id = Language_level::findByDescription($request);
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'usertype' => $request->input('usertype'), //когда будут добавлены типы пользователя, изменить
            'level' => $id
        ]);
    }

    public static function insertAllIntoSession(Request $request)
    {
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('password', $request->input('password'));
        $request->session()->put('usertype', $request->input('usertype'));
        $request->session()->put('level', $request->input('level'));
    }
}
