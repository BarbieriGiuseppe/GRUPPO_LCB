<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrezzoTamponeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prezzo_Tampone', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('tipologia')->unique();
            $table->string('codicelabpubblico')->unique();
            $table->string('prezzo');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('id','tipologia','codicelabpubblico'));
            $table->foreign('codicelabpubblico')->references('codicelabpubblico')->on('laboratorios');
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
        Schema::dropIfExists('Prezzo_Tampone');
    }
}