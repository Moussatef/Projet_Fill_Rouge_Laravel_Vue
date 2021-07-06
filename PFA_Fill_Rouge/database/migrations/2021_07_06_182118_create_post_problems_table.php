<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_problems', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_problemPost');
            $table->unsignedBigInteger('id_post')->nullable();
            $table->foreign('id_post')->references('id_post')->on('Posts')->onDelete('cascade');
            // $table->foreignId('id_post')->constrained('Posts')->onDelete('cascade');
            $table->unsignedBigInteger('id_categorie')->nullable();
            $table->foreign('id_categorie')->references('id_categorie')->on('Categories')->onDelete('cascade');
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
        Schema::dropIfExists('post_problems');
    }
}
