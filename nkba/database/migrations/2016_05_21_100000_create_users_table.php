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
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('member_id'); //colum el id 
            $table->string('health_id'); // colum el rkm el t2men el s7y 
            $table->string('national_id'); // dah rkm el bt2a 
            $table->string('name'); // 2sm el mohnds 
            $table->string('address'); // 3nwan el mohds 
            $table->string('phone_number'); // rkm el phone el mohnds 
            $table->date('date_of_birth'); // melad el mohnds 
            $table->string('graduation_year'); // snt el t5rog 
            $table->string('number_part'); // dah 3dat el moshrken m3h 
            $table->enum('Gidender', ['Male', 'Female']); // dah el no3 
            $table->string('credit_number'); // dah rkm el credit bt3o lw mwgod          
            $table->string('path'); // dah l sora 
            $table->timestamps();
            $table->primary('member_id'); //deh el primry key
            $table->integer('limit_id')->unsigned();
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
