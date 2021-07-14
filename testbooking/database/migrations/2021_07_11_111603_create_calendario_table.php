<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Calendario', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('codicelabpubblico')->unique();
            $table->date('data')->unique();
            $table->time('orario');
            $table->boolean('occupata');
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('id', 'codicelabpubblico','data')); 
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
            
        });
        DB::statement('ALTER TABLE calendario MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Calendario');
    }
}
