<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'email', 'password', 'usertype', 'level', 'subscriptionType', 'creditCardNum'];

    public static function findByEmail($email) {
        return DB::table('users')->where('email', '=', $email)->first();
    }

    public static function updateName($newName, $oldName) {
        DB::table('users')->where('name', '=', $oldName)->update([
            'name' => $newName
        ]);
    }

    public static function reduceEmail($email) {
        if (strlen($email) < 14) return '***' . $email;
        return '****' . substr($email, -14);
    }

    public static function updateEmail($newEmail, $id)
    {
        DB::table('users')->where('id', '=', $id)->update([
            'email' => $newEmail
        ]);
    }

    public static function updatePassword($newPassword, $id)
    {
        DB::table('users')->where('id', '=', $id)->update([
            'password' => $newPassword
        ]);
    }

    public static function findById($id)
    {
        return DB::table('users')->where('id', '=', $id)->first();
    }

    public static function reduceCreditCardNum($creditCardNum)
    {
        return '****' . substr($creditCardNum, -4);
    }
}
