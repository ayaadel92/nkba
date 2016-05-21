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
            $table->engine = 'InnoDB';
            $table->string('member_number');
            $table->string('number_health_care');
            $table->date('year');
            $table->string('path'); // dah l sora 
            $table->primary(array('member_number', 'number_health_care')); //deh el primry key
            $table->foreign('member_number')->references('member_number')->on('engineers')->onDelete('cascade');
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
