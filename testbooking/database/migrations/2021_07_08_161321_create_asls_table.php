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
            $table->integer('id')->unique();
            $table->string('provincia',3)->unique();
            $table->string('codprivato')->unique(); 
            $table->string('email');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary(array('id','codprivato','provincia'));

        });
        DB::statement('ALTER TABLE asls MODIFY id INTEGER NOT NULL AUTO_INCREMENT');

        DB::table('asls')->insert(
            array(
                'id' => '0',
                'provincia' => 'BA',
                'codprivato' => 'aslbari',
                'email' => 'aslbari@gmail.com',
                'password' => '$2y$12$93AELzJ8qCP95vT5RClu1Og5CW9wlVB9bWifDSHaJ2b6t6MKv0ubC',
                'email_verified_at' => '2021-07-12 22:22:01',
                'remember_token' => 'null',
                'created_at' => '2021-07-12 22:22:01',
                'updated_at' => '2021-07-12 22:22:01',
            )
        );

        DB::table('asls')->insert(
            array(
                'id' => '0',
                'provincia' => 'TA',
                'codprivato' => 'asltaranto',
                'email' => 'asltaranto@gmail.com',
                'password' => '$2y$12$SAt7lK0/OkHOW3zP6uUa0ePRWMEJd/MWtgn8Xk5lrCK4M83R9zp72',
                'email_verified_at' => '2021-07-12 22:22:01',
                'remember_token' => 'null',
                'created_at' => '2021-07-12 22:22:01',
                'updated_at' => '2021-07-12 22:22:01',
            )
        );

        DB::table('asls')->insert(
            array(
                'id' => '0',
                'provincia' => 'FG',
                'codprivato' => 'aslfoggia',
                'email' => 'aslfoggia@gmail.com',
                'password' => '$2y$12$PXo/CZ2ETvrRPuxD6gS.fORzFFdAQ3iL832dlvz98I7t9oByOsIpi',
                'email_verified_at' => '2021-07-12 22:22:01',
                'remember_token' => 'null',
                'created_at' => '2021-07-12 22:22:01',
                'updated_at' => '2021-07-12 22:22:01',
            )
        );

        DB::table('asls')->insert(
            array(
                'id' => '0',
                'provincia' => 'BT',
                'codprivato' => 'aslbat',
                'email' => 'aslbat@gmail.com',
                'password' => '$2y$12$.9y8PkhPETgk/7veN63ncO3GaHcQ7mn/e2Km.ZMgg8erwcADtUBwi',
                'email_verified_at' => '2021-07-12 22:22:01',
                'remember_token' => 'null',
                'created_at' => '2021-07-12 22:22:01',
                'updated_at' => '2021-07-12 22:22:01',
            )
        );

        DB::table('asls')->insert(
            array(
                'id' => '0',
                'provincia' => 'BR',
                'codprivato' => 'aslbrindisi',
                'email' => 'aslbrindisi@gmail.com',
                'password' => '$2y$12$c9vi/Feti/L1ca7hWgcqM.8/X1XjUeO.o5tVv3W6pW88av5TPx8wu',
                'email_verified_at' => '2021-07-12 22:22:01',
                'remember_token' => 'null',
                'created_at' => '2021-07-12 22:22:01',
                'updated_at' => '2021-07-12 22:22:01',
            )
        );

        DB::table('asls')->insert(
            array(
                'id' => '0',
                'provincia' => 'LE',
                'codprivato' => 'asllecce',
                'email' => 'asllecce@gmail.com',
                'password' => '$2y$12$kUTB97.Mxl9IG24EvOOHkuaRcsCCmsWzmjiwWVgagSBSKgcwMWgwq',
                'email_verified_at' => '2021-07-12 22:22:01',
                'remember_token' => 'null',
                'created_at' => '2021-07-12 22:22:01',
                'updated_at' => '2021-07-12 22:22:01',
            )
        );
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