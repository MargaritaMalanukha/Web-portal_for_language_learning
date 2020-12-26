<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'email', 'password', 'usertype', 'level', 'subscriptionType'];

    public static function findByEmail($email) {
        return DB::table('users')->where('email', '=', $email)->first();
    }
}
