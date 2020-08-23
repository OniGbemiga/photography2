<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            //$table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->integer('number');
            $table->string('address');
            $table->string('image');
            $table->string('about');
            $table->string('skill');
            $table->integer('pound');
            $table->integer('studio');
            $table->integer('finished');
            $table->integer('happy');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
