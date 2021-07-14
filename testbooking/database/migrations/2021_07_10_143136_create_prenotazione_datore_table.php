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
            $table->integer('id')->unique();
            $table->string('codicefiscaledipendente',16);
            $table->string('codicelabpubblico');
            $table->string('emaildatore');
            $table->date('datatampone');
            $table->time('orario');
            $table->string('tipologia');
            $table->string('pagato');
            $table->string('esito');           
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('codicefiscaledipendente')->references('codicefiscaledipendente')->on('dipendente');
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
            $table->foreign('emaildatore')->references('email')->on('aziendas');
        });
        DB::statement('ALTER TABLE privatos MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
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
