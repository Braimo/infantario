<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriancaEducadoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('crianca_educadora')){
         Schema::create('crianca_educadora', function (Blueprint $table) {
            $table->integer('crianca_id')->default('1');

            $table->integer('educadora_id')->default('1'); 
        
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
                Schema::dropIfExists('crianca_educadora');
    }
    
}
