<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluateLapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluate_lap', function (Blueprint $table) {
            $table->integer('lab_id')->unsigned()->notNull();
            $table->string('eng_id')->notNull();
            $table->float('rate');
            $table->foreign('eng_id')->references('member_id')->on('users')->onDelete('cascade');
            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
            $table->primary(array('lab_id', 'eng_id')); 
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
        Schema::drop('evaluate_lap');
    }
}
