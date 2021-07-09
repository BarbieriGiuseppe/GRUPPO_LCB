<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAslsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asls', function (Blueprint $table) {
       
            $table->timestamps();
            $table->rememberToken();
            $table->string('codprivato')->unique();
            $table->string('codpubblico')->unique();
            $table->string('provincia',3);
            $table->string('email');
            $table->string('password',20);
            $table->primary(array('codprivato','codpubblico'));

        });
        DB::statement('ALTER TABLE asls MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asls');
    }
}