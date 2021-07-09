<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('nome',20);
            $table->string('cognome',20);
            $table->string('codicefiscale',16)->unique();
            $table->date('datanascita');
            $table->string('nazionalita',30);
            $table->string('luogonascita',20);
            $table->string('residenza',40)->nullable();
            $table->string('citta',20);
            $table->string('provincia',3);
            $table->string('cap',5);
            $table->string('telefono',15);
            $table->string('studiomedico',20);
            $table->string('partitaiva',20);
            $table->string('cittastudio',20);
            $table->string('indirizzostudio',20);
            $table->string('provinciastudio',20);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('id','codicefiscale','email'));

        });
        DB::statement('ALTER TABLE medicos MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}