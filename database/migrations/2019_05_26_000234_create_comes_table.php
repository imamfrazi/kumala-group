<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('nama');
            $table->string('hp');
            $table->string('rencana');
            $table->string('mobil');
            $table->string('kota');
            $table->string('dealer');
            $table->boolean('verify')->default(0);
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
        Schema::dropIfExists('comes');
    }
}
