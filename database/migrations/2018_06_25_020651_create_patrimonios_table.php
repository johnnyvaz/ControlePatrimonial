<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descricao')->nullable();
            $table->string('estado')->nullable();
            $table->decimal('valor')->nullable();
            $table->integer('quantidade')->nullable();
            $table->decimal('total')->nullable();
            $table->date('dataAquisicao')->nullable();
            $table->text('observacao')->nullable();
            $table->string('foto')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patrimonios');
    }
}
