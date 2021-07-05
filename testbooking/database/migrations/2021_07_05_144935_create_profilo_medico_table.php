<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiloMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profilo_Medico', function (Blueprint $table) {
            $table->string('Codice_Fiscale')->unique();
            $table->string('Nome_Studio_Medico');
            $table->integer('Partita_IVA');
            $table->string('Sede_Studio');
            $table->string('Nazione_Studio');
            $table->string('Citta_Studio');
            $table->string('Indirizzo_Studio');
            $table->string('Provincia_Studio');
            $table->string('CAP_Studio');
            $table->primary('Codice_Fiscale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profilo_Medico');
    }
}
