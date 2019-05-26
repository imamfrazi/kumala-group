<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_drives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('nama');
            $table->string('jk');
            $table->string('hp');
            $table->string('kota');
            $table->string('alamat');
            $table->string('daerah');
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
        Schema::dropIfExists('test_drives');
    }
}
