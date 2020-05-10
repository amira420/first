<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonerReqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doner_req', function (Blueprint $table) {
            $table->id();
            $table->string('name',200); 
            $table->string('fullAddress');
            $table->integer('phoneNumber'); 
            $table->integer('anotherNumber'); 
            $table->Enum('bloodType',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->ENUM('are you smoking',['yes','No']);
            $table->ENUM('time of calling',['24 hours','from 8am to 3pm','from 3pm to 11pm']);
            $table->ENUM('calling way',['SMS','phoneCall']);
            $table->ENUM('gender',['male','fmale']);
           

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
        Schema::dropIfExists('doner_req');
    }
}
