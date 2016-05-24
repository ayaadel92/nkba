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
            $table->string('member_id');
            $table->string('health_id');
            $table->date('year');
            $table->string('path'); // dah l sora 
            $table->primary(array('member_id', 'health_id')); //deh el primry key
            $table->foreign('member_id')->references('member_id')->on('users')->onDelete('cascade');
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
