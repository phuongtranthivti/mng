<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('code');
            $table->string('name');
            $table->integer('cpn_code')->unsigned();
            $table->foreign('cpn_code')->references('Code')->on('company');
            $table->integer('br_code')->unsigned();
            $table->foreign('br_code')->references('br_code')->on('branch');
            $table->integer('dvs_code');
            $table->string('pm');
            $table->date('start_date');
            $table->string('status');
            $table->string('quality');
            $table->string('tool');
            $table->string('documentation');
            $table->string('description');
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
        Schema::dropIfExists('project');

    }
}
