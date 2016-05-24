<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequiredMedicalTestssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('required_medical_test', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
               $table->foreign('transfer_id')->references('id')->on('transfers')->onDelete('cascade');
             $table->string('test');
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
