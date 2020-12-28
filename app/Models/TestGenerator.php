<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestGenerator extends Model
{
    use HasFactory;

    public static function generateTest($levelFrom, $lewelTo, $questionsByTopic){
        $involvedTopics = Topic::all()->whereBetween('relatedLevel', [$levelFrom->id, $lewelTo->id])->toArray();

        $questionArray = [];
        foreach ($involvedTopics as $topic){
            $topicQuestions = DB::table('test_questions')->select()->inRandomOrder()->where('relatedTopic', $topic['id'])->limit(3)->get()->toArray();
            foreach ($topicQuestions as $question) {
                array_push($questionArray, $question);
            }
        }

        return $questionArray;
        /*foreach ($questionArray as $k=>$v){
            echo('<b>'.$k.'<br></b>');
            foreach ($v as $question){
                echo($question->question.'<br>');
            }
            echo('<br>');
        }*/
    }
}
