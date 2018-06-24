<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome')->nullable();
            $table->string('campo1')->nullable();
            $table->string('campo2')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testes');
    }
}
