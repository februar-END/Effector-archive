<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('maker');
            $table->string('category');
            $table->integer('year');
            $table->integer('month');
            $table->integer('date');
            $table->integer('price');
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
        Schema::dropIfExists('effectors');
    }
};
