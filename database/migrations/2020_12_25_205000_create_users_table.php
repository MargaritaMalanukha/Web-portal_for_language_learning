<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('usertype');
            $table->unsignedBigInteger('level');
            $table->unsignedBigInteger('subscriptionType');

            //keys
            $table->foreign('usertype')->references('id')->on('user_types');
            $table->foreign('level')->references('id')->on('language_levels');
            $table->foreign('subscriptionType')->references('id')->on('subscrition_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
