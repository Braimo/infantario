<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       if(!Schema::hasTable('criancas'))
        {
         Schema::create('criancas', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('turma_id')->default('1');
            $table->integer('educadora_id')->default('1');
            $table->integer('momento_id')->default('1');
            $table->integer('parente_id')->default('1');
            ;
            $table->string('nome');
            $table->string('sobrenome')->nullable();
            $table->string('apelido');
            $table->date('data_nascimento');
            $table->string('genero');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criancas');
            }
}
