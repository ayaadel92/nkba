<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('renews', function (Blueprint $table) {
            $table->integer('eng_id')->unsigned();
            $table->string('health_id');
            $table->string('year');
            $table->string('path')->nullable(); // dah l sora 
            $table->primary(array('eng_id', 'health_id')); //deh el primry key
            $table->foreign('eng_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('renews');
    }

}
