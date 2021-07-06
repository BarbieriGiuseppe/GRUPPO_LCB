<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrenotazioneDatoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prenotazione_Datore', function (Blueprint $table) {
            $table->timestamps();
            $table->rememberToken();
            $table->string('Codice_Fiscale_Tamponato',16);
            $table->string('ID_Tampone');
            $table->string ('CF_Tamponato_Datore',16);
            $table->string('Codice_AS_Pubblico',15);
            $table->string ('Codice_Lab_Pubblico',15);
            $table->string('Mail_Datore');
            $table->timestamp('Data_Tampone');
            $table->string('Esito',15);
            $table->boolean ('Pagato');
            $table->primary(array('ID_Tampone'));
            $table->foreign('Mail_Datore')->references('Mail')->on('Profilo_Datore_Lavoro');
            $table->foreign('CF_Tamponato_Datore')->references('Codice_Fiscale_Tamponato')->on('Tamponato_Datore');
            $table->foreign('Codice_AS_Pubblico')->references('Codice_AS_Pub')->on('Profilo_Azienda_Sanitaria');
            $table->foreign('Codice_Lab_Pubblico')->references('Codice_Lab_Pub')->on('Profilo_Laboratorio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prenotazione_Datore');
    }
}
