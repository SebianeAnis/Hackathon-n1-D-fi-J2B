<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("numero_affaire");
            $table->string('numero_stage');
            $table->string('numero_bdc');
            $table->string('numero_facture');
            $table->string('nom_formation');
            $table->string('nom_comedien');
            $table->string('nom_entreprise');
            $table->string('adresse_entreprise');
            $table->string('ville_formation');
            $table->string('objet_facture');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
