<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('nama');
            $table->string('hp');
            $table->string('alamat');
            $table->string('foto');
            $table->string('cv');
            $table->string('pelamar');
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
        Schema::dropIfExists('pelamars');
    }
}
