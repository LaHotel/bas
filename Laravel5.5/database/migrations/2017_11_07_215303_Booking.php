<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Booking', function (Blueprint $table) {
            $table->integer('Booking_id');
            $table->string('Name');
            $table->string('RoomType');
            $table->date('DateStart');
            $table->date('DateEnd');            
            $table->string('People');
            $table->string('HowMany');
            $table->string('Optional1');
            $table->string('Optional2');
            $table->string('Optional3');
            $table->string('Optional4');            
            $table->string('Price');
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
