<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_personne');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('telephon');
            $table->date('date_N');
            $table->string('adresse');
            $table->string('email')->nullable()->unique();
            $table->string('github');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('password')->nullable();
            $table->string('img');
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
        Schema::dropIfExists('personnes');
    }
}
