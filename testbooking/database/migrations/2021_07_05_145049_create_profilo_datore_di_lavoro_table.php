<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiloDatoreDiLavoroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profilo_Datore_Di_Lavoro', function (Blueprint $table) {
            $table->string('Codice_Fiscale')->unique()->primary();
            $table->string('Ragione_Sociale');
            $table->integer('Partita_IVA');
            $table->string('Ruolo_Aziendale');
            $table->string('Nazione_Azienda');
            $table->string('Citta_Azienda');
            $table->string('Indirizzo_Azienda');
            $table->string('Provincia_Azienda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profilo_Datore_Di_Lavoro');
    }
}
