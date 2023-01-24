<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('text');
            $table->string('slug')->nullable()->default('text');
            $table->string('NIK')->nullable()->default('text');
            $table->string('sex')->nullable()->default('text');
            $table->text('alamat')->default('text');
            $table->string('nomer_hp')->nullable();
            $table->string('email')->nullable()->default('text');
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
        Schema::dropIfExists('customers');
    }
}
