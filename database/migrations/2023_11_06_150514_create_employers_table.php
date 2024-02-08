<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_decl')->constrained("declarations");
            $table->foreignId('id_entreprise')->constrained("entreprises");
            $table->string('nom_prenom');
            $table->string('fonction');
            $table->string('cin');
            $table->string('cnaps');
            $table->integer('renumeration');
            $table->integer('avantage');
            $table->integer('pension');
            $table->integer('sanitaire');
            $table->integer('enfant');
            $table->integer('impot');
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
        Schema::table("employers", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_decl");
        });
        Schema::table("employers", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_entreprise");
        });
        Schema::dropIfExists('employers');
    }
}
