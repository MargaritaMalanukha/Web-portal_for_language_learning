<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_questions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('question')->unique();
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
            $table->unsignedInteger('correctAnswerNumber');
            $table->unsignedBigInteger('relatedTopic');

            //keys
            $table->foreign('relatedTopic')->references('id')->on('topics');
        });

        DB::statement(
            'ALTER TABLE test_questions ADD CONSTRAINT chk_correct_answer_num CHECK (correctAnswerNumber < 5 AND correctAnswerNumber > 0);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_questions');
    }
}
