<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nif');
            $table->foreignId('id_fiscale')->constrained("centres");
            $table->string('mdp');
            $table->string('nom_societe');
            $table->string('activite');
            $table->string('adresse');
            $table->integer('nb_message');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints(); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
