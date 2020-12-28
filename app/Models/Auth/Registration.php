<?php

namespace App\Models\Auth;

use App\Models\Language_level;
use App\Models\Subscription_type;
use App\Models\User;
use App\Models\User_type;
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
            'name' => 'required|max:20',
            'email' => 'required|max:30|unique:users,email|email:rfc,dns',
            'password' => 'required|max:20',
            'repeat-password' => 'required|max:20',
            'usertype' => 'required',
            'level' => 'required'
        ]);
        if ($request->input('password') != $request->input('repeat-password')) {
            throw ValidationException::withMessages(['repeat-password' => 'Пароль не подтверждён!']);
        }
    }

    public static function create(Request $request) {
        $subscription_id = Subscription_type::findByDescription('none');
        $usertype_id = User_type::findByDescriptionRU($request->input('usertype'));
        $level_id = Language_level::findByDescription($request->input('level'));
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'usertype' => $usertype_id,
            'level' => $level_id,
            'subscriptionType' => $subscription_id
        ]);
    }
}
