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
            $table->integer('id')->unique();
            $table->string('codicefiscaletamponato',16);
            $table->string('codicelabpubblico');
            $table->string('emailprivato');
            $table->timestamp('datatampone');
            $table->string('tipologia');
            $table->string('esito');
            $table->boolean('pagato');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('codicefiscaletamponato')->references('codicefiscale')->on('privatos');
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
            $table->foreign('emailprivato')->references('email')->on('privatos');
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
