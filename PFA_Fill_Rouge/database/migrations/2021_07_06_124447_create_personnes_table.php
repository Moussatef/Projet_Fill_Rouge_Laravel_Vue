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
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephon')->nullable()->default('');
            $table->date('date_N');
            $table->string('adresse')->nullable()->default('');
            $table->string('email')->unique();
            $table->string('github')->nullable()->default('');
            $table->string('linkedin')->nullable()->default('');
            $table->string('facebook')->nullable()->default('');
            $table->string('instagram')->nullable()->default('');
            $table->string('password');
            $table->string('img')->nullable();
            $table->string('cover')->nullable();
            $table->string('bio')->nullable();
            $table->boolean('validation')->default(false);
            $table->rememberToken();
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
