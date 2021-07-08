<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_apprenant');
            // $table->unsignedBigInteger('id_personne')->nullable();
            // $table->foreign('id_personne')->references('id')->on('Personnes')->onDelete('cascade');
            $table->foreignId('id_personne')->constrained('Personnes')->onDelete('cascade');
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
        Schema::dropIfExists('apprenants');
    }
}
