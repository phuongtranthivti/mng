<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('company', function (Blueprint $table) {
            $table->increments('Code');
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Status');
            $table->string('address');
            $table->string('website');
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
        Schema::dropIfExists('company');

        Schema::create('company', function (Blueprint $table) {
            $table->increments('Code');
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Status');
            $table->string('address');
            $table->string('website');
            $table->timestamps();
        });

        Schema::dropIfExists('company');
    }
}

