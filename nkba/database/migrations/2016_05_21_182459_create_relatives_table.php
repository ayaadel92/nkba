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
            $table->string('eng_id');
            $table->string('health_id');
            $table->date('birth_date'); // melad el mohnds 
            $table->string('name'); // 2sm el mohnds 
            $table->enum('gender', ['Male', 'Female']); // dah el no3 
            $table->enum('relation_type', ['father', 'mother', 'son/daugter', 'husband','wife']); // dah el no3 
            $table->string('national_id'); // dah rkm el bt2a 
            $table->string('email'); // dah l email 
            $table->string('path'); // dah l sora 
            $table->primary(array('eng_id', 'health_id')); //deh el primry key
            $table->integer('limit_id')->unsigned()->notNull();
            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade'); // delete on cascade 
            $table->foreign('eng_id')->references('member_id')->on('users')->onDelete('cascade');
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
