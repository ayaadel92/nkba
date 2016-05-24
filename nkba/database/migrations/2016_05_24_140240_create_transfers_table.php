<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer', function (Blueprint $table) {
             $table->increments('id');
              $table->string('transfer_date');
              $table->string('eng_id')->notNull();
              $table->string('patient_name')->notNull();
              $table->enum('patient_type', ['Engineer', 'Relative']); 
              $table->integer('percentage');
              $table->enum('status', ['Accepted', 'Refused']); 
              $table->enum('type', ['Rediopology', 'Analysis','surgery']); 
              $table->integer('total_cost');
              $table->string('medical_diagnosis');
              $table->integer('doctor_id')->unsigned();
              $table->integer('hospital_id')->unsigned();
              $table->integer('lab_id')->unsigned();
              $table->foreign('eng_id')->references('member_id')->on('users')->onDelete('cascade');
              $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
              $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
              $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
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
        Schema::drop('transfer');
    }
}
