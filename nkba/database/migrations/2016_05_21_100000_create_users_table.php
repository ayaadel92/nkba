<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ( $table) {
            $table->increments('id');
            $table->string('name'); // 2sm el mohnds 
            $table->string('email')->unique();
            $table->string('password');
            $table->string('national_id')->nullable(); // dah rkm el bt2a 
            $table->string('address'); // 3nwan el mohds 
            $table->string('phone_number')->nullable(); // rkm el phone el mohnds 
            $table->string('birth_date'); // melad el mohnds 
            $table->string('gradu_year')->nullable(); // snt el t5rog 
            $table->string('relative_num')->nullable(); // dah 3dat el moshrken m3h 
            $table->enum('gender', ['Male', 'Female']); // dah el no3 
            
            $table->rememberToken();
            $table->string('eng_id')->unique(); //colum el id 
            $table->string('health_id')->nullable(); // colum el rkm el t2men el s7y 
            $table->string('credit_number')->nullable(); // dah rkm el credit bt3o lw mwgod          
            $table->string('path')->nullable(); // dah l sora 
            $table->timestamps();
            $table->integer('limit_id')->unsigned()->nullable();
            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade'); // delete on cascade 
            
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
