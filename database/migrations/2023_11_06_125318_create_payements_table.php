<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_decl')->constrained("declarations");
            $table->foreignId('id_entreprise')->constrained("entreprises");
            
            $table->string('code_banque_payeur');
            $table->integer('montant');
            $table->string('date_paiment');
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
        Schema::table("payements", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_decl");
        });
        Schema::table("payements", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_entreprise");
        });
        
        Schema::dropIfExists('payements');
    }
}
