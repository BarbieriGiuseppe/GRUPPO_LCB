<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDipendenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dipendente', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('codicefiscaledipendente',16)->unique();
            $table->string('cognome',20);
            $table->string('nome',20);
            $table->string('telefono',15);
            $table->string('luogonascita',20);
            $table->date('datanascita');  
            $table->string('residenza',40)->nullable();         
            $table->string('citta',20);
            $table->string('provincia',3);
            $table->string('cap',5);
            $table->string('nazione',40)->nullable();
            $table->string('email')->unique();
            $table->string('emaildatore')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('id','codicefiscaledipendente','email'));
            $table->foreign('emaildatore')->references('email')->on('aziendas');

        });
        DB::statement('ALTER TABLE dipendente MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Dipendente');
    }
}
