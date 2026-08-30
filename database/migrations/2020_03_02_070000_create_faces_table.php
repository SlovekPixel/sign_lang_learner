<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacesTable extends Migration
{
    public function up()
    {
        Schema::create('faces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('default');
            $table->string('type')->default('1');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faces');
    }
}
