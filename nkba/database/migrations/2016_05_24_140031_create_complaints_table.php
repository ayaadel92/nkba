<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eng_id')->unsigned();
            $table->string('hospital_name')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('lab_name')->nullable();
            $table->string('description');
            $table->string('vedio_path')->nullable();
            $table->string('img_path')->nullable();
            $table->foreign('eng_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('complaints');
    }
}
