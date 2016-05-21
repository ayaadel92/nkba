<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limits', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('remainder_of_total');// dah motbaky mn el flos 
            $table->integer('credit_of_sugrgeries');// flos el 3mlyt 
            $table->integer('credit_medical_tests_and_rumors');// flos el t7lel w el 2sh3a 
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('limits');
    }
}
