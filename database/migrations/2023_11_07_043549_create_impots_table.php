<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_entreprise')->constrained("entreprises");
            $table->integer('total_impot');
            
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
        Schema::table("impots", function(Blueprint $table){
            $table->dropConstrainedForeignId("id_entreprise");
        });
        Schema::dropIfExists('impots');
    }
}
