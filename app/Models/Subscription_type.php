<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subscription_type extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'description', 'descriptionRU', 'cost'];

    public static function findByDescription($description) {
        return DB::table('subscription_types')->where('description', '=', $description)->first()->id;
    }

    public static function findDescriptionById($id)
    {
        return DB::table('subscription_types')->where('id', '=', $id)->first()->description;
    }

    public static function findDescriptionRUById($id)
    {
        return DB::table('subscription_types')->where('id', '=', $id)->first()->descriptionRU;
    }

    public static function findById($id) {
        return DB::table('subscription_types')->where('id', '=', $id)->first();
    }
}
