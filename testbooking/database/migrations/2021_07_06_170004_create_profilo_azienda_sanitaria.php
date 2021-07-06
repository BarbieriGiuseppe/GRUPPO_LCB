<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiloAziendaSanitaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profilo_Azienda_Sanitaria', function (Blueprint $table) {
            $table->string('Codice_AS_Pub')->unique();
            $table->string('Codice_AS_Priv')->unique();
            $table->timestamps();
            $table->rememberToken();
            $table->string('Mail');
            $table->string('Password',20);
            $table->string('Provincia',3);
            $table->primary(array('Codice_AS_Pub','Codice_AS_Priv'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profilo_Azienda_Sanitaria');
    }
}
