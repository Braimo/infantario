<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educadoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->default('Sem nome');
            $table->string('sobrenome')->nullable();
            $table->string('apelido')->default('Sem apelido');
            $table->date('data_nascimento')->defaul('1000-01-01');
            $table->string('morada')->default('Morada');
            $table->string('contacto')->default('XXXXXXX');
            $table->string('nivel_academico')->default('Licenciatura');
            $table->string('formacao')->nullable();

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
        Schema::dropIfExists('educadoras');
    }
}
