<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomotifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automotifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merek',60);
            $table->string('nama');
            $table->string('name');
            $table->string('brocure');
            $table->longText('deskripsi');
            $table->longText('desc');
            $table->integer('quantity');
            $table->float('price',13,2);
            $table->string('gambar');
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
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
        Schema::dropIfExists('automotifs');
    }
}
