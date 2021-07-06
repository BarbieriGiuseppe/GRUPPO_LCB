<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiloLaboratorio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profilo_Laboratorio', function (Blueprint $table) {
            $table->string('Codice_Lab_Pubblico');
            $table->string('Codice_Lab_Privato');
            $table->timestamps();
            $table->rememberToken();
            $table->string('Mail_Laboratorio');
            $table->string('Password',16);
            $table->string('Nome_Laboratorio',20);
            $table->timestamp('Calendario_Disponibilita',40);
            $table->string('Nazione',40);
            $table->string('Citta',40);
            $table->string('Indirizzo',40);
            $table->string('Provincia',3);
            $table->string('CAP',5);
            $table->string('Codice_AS_Pubblico',15);
            $table->primary(array('Codice_Lab_Pubblico','Codice_Lab_Privato'));
            $table->foreign('Codice_AS_Pubblico')->references('Codice_AS_Pubblico')->on('Profilo_Azienda_Sanitaria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profilo_Laboratorio');
    }
}
