<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_test', function (Blueprint $table) {
            $table->integer('id')->unsigned()->notNull();
            $table->integer('transfer_id')->unsigned()->notNull();
            $table->foreign('transfer_id')->references('id')->on('transfer')->onDelete('cascade');
            $table->string('test');
            $table->primary(array('id', 'transfer_id')); 
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
        Schema::drop('required_medical_test');
    }
}
