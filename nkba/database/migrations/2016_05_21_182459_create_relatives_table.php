<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelativesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('relatives', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->date('date_of_birth'); // melad el mohnds 
            $table->string('name'); // 2sm el mohnds 
            $table->enum('gender', ['Male', 'Female']); // dah el no3 
            $table->enum('relation_type', ['father', 'mother', 'sons', 'husband']); // dah el no3 
            $table->string('national_id'); // dah rkm el bt2a 
            $table->string('member_number');
            $table->string('number_health_care');
            $table->string('email'); // dah l email 
            $table->string('path'); // dah l sora 
            $table->primary(array('member_number', 'number_health_care')); //deh el primry key
            $table->integer('limit_id')->unsigned();
            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade'); // delete on cascade 
            $table->foreign('member_number')->references('member_number')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('relatives');
    }

}
