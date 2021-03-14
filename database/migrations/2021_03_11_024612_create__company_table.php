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
        Schema::table('company', function (Blueprint $table) {
            $table->string('address', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('_company', function (Blueprint $table) {
            $table->increments('Code');
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Status');
            $table->timestamps();
        });
        Schema::dropIfExists('_company');
    }
}

