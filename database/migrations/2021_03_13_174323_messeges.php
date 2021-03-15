<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messeges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messeges', function(Blueprint $table){
            $table->increments('Messege_id');
            $table->string('Messege_Sender_Name',25);
            $table->string('Messege_Sender_Email');
            $table-> string('Messege_Body',1000);
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
        Schema::dropIfExists('messeges');
    }
}
