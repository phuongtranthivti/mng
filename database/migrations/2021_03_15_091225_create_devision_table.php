<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devision', function (Blueprint $table) {
            $table->increments('code');
            $table->string('name');
            $table->integer('cpn_code')->unsigned();
            $table->foreign('cpn_code')->references('Code')->on('company');
            $table->integer('br_code')->unsigned();
            $table->foreign('br_code')->references('br_ode')->on('branch');
            $table->string('email');
            $table->string('dvs_address');
            $table->string('area');
            $table->string('phone');
            $table->string('status');
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
        Schema::dropIfExists('devision');
    }
}
