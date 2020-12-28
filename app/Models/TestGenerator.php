<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestGenerator extends Model
{
    use HasFactory;

    public static function generateTest($levelFrom, $lewelTo, $questionsByTopic){
        $involvedTopics = Topic::all()->whereBetween('relatedLevel', [$levelFrom->id, $lewelTo->id])->toArray();
        /*foreach ($involvedTopics as $topic){
            echo($topic['description'].' '.$topic['relatedLevel'].'<br>');
        }*/
    }
}
