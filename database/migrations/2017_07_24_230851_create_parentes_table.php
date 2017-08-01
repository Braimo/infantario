<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome')->nullable();
            $table->string('apelido');
            $table->date('data_nascimento');
            $table->string('genero');
            $table->string('grau_parentesco');
            $table->string('contacto');
            $table->string('morada');
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
        Schema::dropIfExists('parentes');
    }
}
