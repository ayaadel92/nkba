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
             $table->string('eng_id')->notNull();
             $table->string('hospital_name');
             $table->string('doctor_name');
             $table->string('lab_name');
             $table->string('description');
             $table->string('vedio_path');
             $table->string('img_path');
             $table->foreign('eng_id')->references('member_id')->on('users')->onDelete('cascade');
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
        Schema::drop('complaint');
    }
}
