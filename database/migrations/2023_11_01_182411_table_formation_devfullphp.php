<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFormationDevfullphp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FormationDevfullphp', function (Blueprint $table){ 
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('consigne');
            $table->string('video');
            $table->string('lienvc');
            $table->string('sujetvm');
            $table->string('lienvm');
            $table->string('imagevm');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
