@extends('layouts.app')
@section('content')
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Status extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Status', function (Blueprint $table) {
            $table->string('Date')->nullable;
            $table->string('Single')->nullable;
            $table->string('Duo')->nullable;
            $table->string('Family')->nullable;
            $table->string('Group')->nullable;
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
