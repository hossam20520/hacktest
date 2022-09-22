<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterdsTable extends Migration
{
    public function up()
    {
        Schema::create('registerds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('mac')->nullable();
            $table->string('location')->nullable();
            $table->string('ip')->nullable();
            $table->string('time')->nullable();
            $table->string('type')->nullable();
            $table->string('count')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}