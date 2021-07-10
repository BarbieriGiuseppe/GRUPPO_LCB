<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrenotazioneMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prenotazione_Medico', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('codicefiscalepaziente',16)->unique();
            $table->string('codicelabpubblico')->unique();
            $table->string('emailmedico')->unique();
            $table->timestamp('datatampone');
            $table->string('tipologia');
            $table->string('esito');
            $table->boolean('pagato');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('codicefiscalepaziente')->references('codicefiscalepaziente')->on('paziente');
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
            $table->foreign('emailmedico')->references('email')->on('medicos');
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
        Schema::dropIfExists('Prenotazione_Medico');
    }
}
