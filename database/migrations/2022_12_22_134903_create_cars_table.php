<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('text');
            $table->string('nomer_lisensi')->nullable()->default('text');
            $table->string('warna')->nullable()->default('text');
            $table->string('tahun')->nullable()->default('text');
            $table->string('status')->nullable()->default('text');
            $table->integer('harga')->unsigned()->nullable();
            $table->integer('denda')->unsigned()->nullable();
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
        Schema::dropIfExists('cars');
    }
}
