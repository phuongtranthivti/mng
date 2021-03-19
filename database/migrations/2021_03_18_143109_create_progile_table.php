<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('progile');
        Schema::create('progile', function (Blueprint $table) {
            $table->increments('code');
            $table->integer('dvs_code')->unsigned();
            $table->foreign('dvs_code')->references('code')->on('devision');
            $table->integer('pr_code')->unsigned();
            $table->foreign('pr_code')->references('code')->on('project');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('email_work');
            $table->date('birthday');
            $table->date('join_date');
            $table->string('passport');
            $table->date('date_passport');
            $table->string('experience');
            $table->string('contract');
            $table->string('image');
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
        Schema::dropIfExists('progile');
    }
}
