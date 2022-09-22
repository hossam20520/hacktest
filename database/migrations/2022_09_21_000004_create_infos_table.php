<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->longText('desc')->nullable();
            $table->string('need')->nullable();
            $table->string('redirecturl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}