<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'ownerId', 'created_at'];

    public static function create($ownerId)
    {
        DB::table('rooms')->insert([
            'ownerId' => $ownerId
        ]);
        return DB::table('rooms')
            ->where('ownerId', '=', $ownerId)
            ->orderBy('id', 'desc')->first();
    }

    public static function deleteR($roomId) {
        DB::table('rooms')->where('id', '=', $roomId)->delete();
    }

    public static function getAllOrderByDesc()
    {
        return DB::table('rooms')->orderBy('id', 'desc')->get();
    }
}
