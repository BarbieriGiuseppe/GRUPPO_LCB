<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorios', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('codicelabpubblico')->unique();
            $table->string('codicelabprivato')->unique();
            $table->string('nomelaboratorio',20);
            $table->string('telefono',20);
            $table->string('indirizzo',40);
            $table->string('citta',40);
            $table->string('provincia',3);
            $table->string('cap',5);
            $table->string('email');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->primary(array('id','codicelabpubblico','codicelabprivato'));
            $table->foreign('provincia')->references('provincia')->on('asls');

        });

        DB::statement('ALTER TABLE laboratorios MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratorios');
    }
}