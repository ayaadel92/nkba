<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluate_hospitals', function (Blueprint $table) {
            $table->integer('hospital_id')->unsigned();
            $table->integer('eng_id')->unsigned();
            $table->float('rate');
            $table->foreign('eng_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->primary(array('hospital_id', 'eng_id')); 
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
        Schema::drop('evaluate_hospitals');
    }
}
