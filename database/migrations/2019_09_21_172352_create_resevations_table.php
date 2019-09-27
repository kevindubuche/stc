<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResevationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id_reservation');
            $table->BigInteger('id_cours');
            $table->string('nom_user');
            $table->string('prenom_user');
            $table->string('adresse');
            $table->string('email_user');
            $table->string('telephone');
            $table->DateTime('date_cours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resevations');
    }
}
