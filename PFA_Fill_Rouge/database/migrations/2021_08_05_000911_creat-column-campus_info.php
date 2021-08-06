<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatColumnCampusInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campuses', function (Blueprint $table) {
            //
            $table->string('ville');
            $table->string('adresse');
            $table->string('fex');
            $table->string('email');
            $table->string('password');
            $table->string('github')->nullable()->default('');
            $table->string('discord')->nullable()->default('');
            $table->string('linkedin')->nullable()->default('');
            $table->string('facebook')->nullable()->default('');
            $table->string('instagram')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campuses', function (Blueprint $table) {
            //
        });
    }
}
