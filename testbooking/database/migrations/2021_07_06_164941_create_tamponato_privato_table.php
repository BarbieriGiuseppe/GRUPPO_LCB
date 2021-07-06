<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamponatoPrivatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tamponato_Privato', function (Blueprint $table) {
            $table->timestamps();
            $table->rememberToken();
            $table->string('Codice_Fiscale_Tamponato',16);
            $table->string('Mail');
            $table->string('Mail_Privato');
            $table->string('Partita_IVA',11);
            $table->string('Cognome',40);
            $table->string('Nome',40);
            $table->string('Telefono',15);
            $table->string('Luogo_Nascita',40);
            $table->date('Data_Nascita');
            $table->string('Nazione_Nascita',40);
            $table->string('Citta',40);
            $table->string('Provincia',3);
            $table->string('CAP',5);
            $table->string('Domicilio',40)->nullable();
            $table->primary(array('Codice_Fiscale_Tamponato','Mail_Privato'));
            $table->foreign('Mail_Privato')->references('Mail')->on('Profilo_Privato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tamponato_Privato');
    }
}
