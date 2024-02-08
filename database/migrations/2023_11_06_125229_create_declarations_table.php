<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declarations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_entreprise')->constrained("entreprises");
            $table->string('date_declaration');
            $table->string('periodicite');
            $table->string('mois');
            $table->integer('anne');
            $table->string('etat');
            $table->integer('montant');
            
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
        Schema::table("declarations", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_entreprise");
        });
        Schema::dropIfExists('declarations');
    }
}
