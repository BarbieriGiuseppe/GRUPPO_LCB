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
            $table->date('datatampone');
            $table->time('orario');
            $table->string('tipologia');
            $table->string('metodopagamento')->nullable();
            $table->string('pagato')->default('no');
            $table->string('esito')->default('nd');        
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('codicefiscaletamponato')->references('codicefiscaletamponato')->on('Tamponato_Privato');
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
            $table->foreign('emailprivato')->references('email')->on('privatos');
        });
        DB::statement('ALTER TABLE Prenotazione_Privato MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
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
