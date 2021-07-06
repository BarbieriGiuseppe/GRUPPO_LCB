<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrenotazionePrivatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prenotazione_Privato', function (Blueprint $table) {
            $table->timestamps();
            $table->rememberToken();
            $table->string('Codice_Fiscale_Tamponato',16);
            $table->string('ID_Tampone');
            $table->string ('CF_Tamponato_Privato',16);
            $table->string('Codice_AS_Pubblico',15);
            $table->string ('Codice_Lab_Pubblico',15);
            $table->string('Mail_Privato');
            $table->timestamp('Data_Tampone');
            $table->string('Esito',15);
            $table->boolean ('Pagato');
            $table->primary(array('ID_Tampone'));
            $table->foreign('Mail_Privato')->references('profilo_privato')->on('Mail');
            $table->foreign('CF_Tamponato_Privato')->references('Tamponato_Privato')->on('Codice_Fiscale_Tamponato');
            $table->foreign('Codice_AS_Pubblico')->references('Profilo_Azienda_Sanitaria')->on('Codice_AS_Pubblico');
            $table->foreign('Codice_Lab_Pubblico')->references('Profilo_Laboratorio')->on('Codice_Lab_Pubblico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prenotazione_Privato');
    }
}
