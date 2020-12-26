<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subscription_type extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'description', 'cost'];

    public static function findByDescription($description) {
        return DB::table('subscription_types')->where('description', '=', $description)->first()->id;
    }
}
