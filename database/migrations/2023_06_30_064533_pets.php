<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('petName');
            $table->integer('petAge');
            $table->string('petBreed');
            $table->string('petGender');
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
