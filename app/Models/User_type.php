<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_type extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'description', 'descriptionRU'];

    public static function findByDescription($description)
    {
        return DB::table('user_types')->where('description', '=', $description)->first()->id;
    }

    public static function findByDescriptionRU($description)
    {
        return DB::table('user_types')->where('descriptionRU', '=', $description)->first()->id;
    }

    public static function allWithoutAdmin()
    {
        return DB::table('user_types')->where('description', '!=', 'admin')->get();
    }

    public static function findDescriptionById($id)
    {
        return DB::table('user_types')->where('id', '=', $id)->first()->description;
    }

    public static function isUserIsSetType($id, $description)
    {
        $desc = self::findDescriptionById($id);
        return $desc == $description;
    }
}
