<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email')->unique();
            $table->string('institution', 150)->nullable();
            $table->integer('age')->nullable();
            $table->integer('phone')->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('nacionality', 50)->nullable();
            $table->string('civilStatus', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('city', 50)->nullable();
            $table->boolean('state')->nullable();
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
        Schema::dropIfExists('students');
    }
}

/*
 * v


    var gender: String? = null
    var nacionality: String? = null
    var civilStatus: String? = null
    var address: String? = null
    var city: String? = null
    var state: String? = null
    var phone: String? = null
    var institution: Institution? = null
 * */