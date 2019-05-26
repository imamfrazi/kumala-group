<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('name');
            $table->longText('deskripsi');
            $table->longText('desc');
            $table->integer('quantity');
            $table->float('price',9,2);
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
        Schema::dropIfExists('minings');
    }
}
