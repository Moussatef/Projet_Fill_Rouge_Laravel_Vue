<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('github')->nullable()->default('');
            $table->string('discord')->nullable()->default('');
            $table->string('linkedin')->nullable()->default('');
            $table->string('facebook')->nullable()->default('');
            $table->string('instagram')->nullable()->default('');
            $table->string('reddit')->nullable()->default('');
            $table->foreignId('personne_id')->constrained('personnes')->onDelete('cascade');


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
        Schema::dropIfExists('media');
    }
}
