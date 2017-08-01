<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('momentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('educadora_id')->default('1');
            $table->string('nome');
            $table->text('descricao');
            $table->timestamps();

        #foreigg key references to Midia id
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('momentos');
    }
}
