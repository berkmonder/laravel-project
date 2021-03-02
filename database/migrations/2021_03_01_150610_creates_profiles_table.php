<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesProfilesTable extends Migration
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
            $table->string('name');
//            $table->string('surename');
//            $table->string('nickname');
//            $table->boolean('gender');
//            $table->string('country');
//            $table->string('countryCode')->nullable();
//            $table->string('phone')->nullable();
//            $table->string('password');
            $table->string('email')->unique();
//            $table->unsignedBigInteger('reference')->nullable();
//            $table->foreign('referance')->references('id')->on('profiles')->onDelete('cascade');
//            $table->unsignedBigInteger('parent')->nullable();
//            $table->foreign('parent')->references('id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
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
