<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePazienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paziente', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('codicefiscalepaziente',16)->unique();
            $table->string('cognome',20);
            $table->string('nome',20);
            $table->string('email')->unique();
            $table->string('telefono',15);
            $table->string('luogonascita',20);
            $table->date('datanascita');  
            $table->string('residenza',40)->nullable();
            $table->string('nazione',40)->nullable();
            $table->string('citta',20);
            $table->string('provincia',3);
            $table->string('cap',5);
            $table->string('emailmedico')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('id','codicefiscalepaziente','email'));
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
        Schema::dropIfExists('Paziente');
    }
}
