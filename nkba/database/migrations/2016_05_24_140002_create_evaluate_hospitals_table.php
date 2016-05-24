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
        Schema::create('evaluate_hospital', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('hospital_id')->unsigned()->notNull();
            $table->string('eng_id')->notNull();
            $table->float('rate');
            $table->foreign('eng_id')->references('member_id')->on('users')->onDelete('cascade');
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
        Schema::drop('evaluate_hospital');
    }
}
