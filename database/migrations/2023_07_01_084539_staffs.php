<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Staffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('staffName');
            $table->string('staffAddress');
            $table->string('email')->unique();
            $table->string('gender');
            $table->bigInteger('phoneNumber');
            $table->string('petStatus');
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
        //
    }
}
