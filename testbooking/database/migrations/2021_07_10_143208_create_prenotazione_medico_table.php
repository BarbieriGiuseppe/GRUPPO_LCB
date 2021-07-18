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
            $table->string('codicefiscalepaziente',16);
            $table->string('codicelabpubblico');
            $table->string('emailmedico');
            $table->date('datatampone');
            $table->time('orario');
            $table->decimal('prezzo', $precision = 6, $scale = 2);
            $table->string('tipologia');
            $table->string('metodopagamento')->nullable();
            $table->string('pagato')->default('no');
            $table->string('esito')->default('n.d.');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('codicefiscalepaziente')->references('codicefiscalepaziente')->on('paziente');
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
            $table->foreign('emailmedico')->references('email')->on('medicos');
        });
        DB::statement('ALTER TABLE Prenotazione_Medico MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
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
