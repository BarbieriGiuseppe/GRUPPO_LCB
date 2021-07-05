<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentePrenotanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Utente_Prenotante', function (Blueprint $table) {
            $table->string('Mail')->unique();
            $table->string('Codice_Fiscale')->unique();
            $table->string('Password')->unique();
            $table->string('Cognome');
            $table->string('Nome');
            $table->integer('Eta');
            $table->string('Telefono');
            $table->string('Luogo_Nascita');
            $table->date('Data_Nascita');
            $table->string('Nazione_Nascita');
            $table->string('Residenza');
            $table->string('Citta');
            $table->string('Provincia');
            $table->string('CAP');
            $table->string('Domicilio');
            $table->primary(array('Mail','Codice_Fiscale','Password'));
            $table->foreign('Codice_Fiscale')->references('Codice_Fiscale')->on('Profilo_Privato');
            $table->foreign('Codice_Fiscale')->references('Codice_Fiscale')->on('Profilo_Datore_Di_Lavoro');
            $table->foreign('Codice_Fiscale')->references('Codice_Fiscale')->on('Profilo_Medico_Curante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Utente_Prenotante');
    }
}
