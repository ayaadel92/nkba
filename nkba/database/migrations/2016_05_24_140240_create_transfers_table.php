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
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transfer_date');
            $table->string('eng_id');
            $table->string('patient_name');
            $table->enum('patient_type', ['Engineer', 'Relative']); 
            $table->integer('percentage');
            $table->enum('status', ['Accepted', 'Refused'])->nullable(); 
            $table->enum('type', ['Rediopology', 'Analysis','Surgery']); 
            $table->integer('total_cost');
            $table->string('medical_diagnosis');
            $table->integer('doctor_name')->unsigned()->nullable();
            $table->integer('hospital_name')->unsigned()->nullable();
            $table->integer('lab_name')->unsigned()->nullable();
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
        Schema::drop('transfers');
    }
}
