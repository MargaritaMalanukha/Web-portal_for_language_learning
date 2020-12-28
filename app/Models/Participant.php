<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'userId', 'roomId', 'created_at'];

    public static function createIfNotExists($roomId, $userId)
    {
            DB::table('participants')->insert([
                'userId' => $userId,
                'roomId' => $roomId
            ]);
    }

    public static function participantIsInRoom($roomId, $userId) {
        if (DB::table('participants')->count() == 0) return true;
        $participant = DB::table('participants')
            ->where([
                ['userId', '=', $userId],
                ['roomId', '=', $roomId]])
            ->get();
        return $participant != null;
    }

    public static function deleteP($roomId)
    {
        DB::table('participants')->where('roomId', '=', $roomId)->delete();
    }

    public static function getAllInRoom($roomId)
    {
        return DB::table('participants')->where('roomId', '=', $roomId)->count();
    }

    public static function getByUserId($userId)
    {
        return DB::table('participants')->where('userId', '=', $userId)->count();
    }
}
