<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorios', function (Blueprint $table) {

            $table->timestamps();
            $table->rememberToken();
            $table->string('nomelaboratorio',20);
            $table->string('codicelabpubblico')->unique();
            $table->string('codicelabprivato')->unique();
            $table->string('codiceaspubblico',15);
            $table->string('citta',40);
            $table->string('indirizzo',40);
            $table->string('provincia',3);
            $table->string('email');
            $table->string('password',16);
            $table->primary(array('codicelabpubblico','codicelabprivato'));
            $table->foreign('codiceaspubblico')->references('codiceaspubblico')->on('asls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratorios');
    }
}