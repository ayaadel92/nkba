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
             $table->date('transfer_date');
            $table->integer('percentage');
             $table->enum('status', ['Accepted', 'Refused']); 
              $table->integer('total_cost');
              $table->string('medical_diagnosis');
              $table->foreign('eng_id')->references('member_number')->on('engineers')->onDelete('cascade');
              $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
              $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
              $table->foreign('lap_id')->references('id')->on('laps')->onDelete('cascade');
              $table->foreign('type_id')->references('id')->on('transfer_types')->onDelete('cascade');
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
