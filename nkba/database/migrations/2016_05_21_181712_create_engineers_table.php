<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('engineers', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('member_number'); //colum el id 
            $table->string('number_health_care'); // colum el rkm el t2men el s7y 
            $table->string('national_id'); // dah rkm el bt2a 
            $table->string('name'); // 2sm el mohnds 
            $table->string('address'); // 3nwan el mohds 
            $table->string('phone_number'); // rkm el phone el mohnds 
            $table->date('date_of_birth'); // melad el mohnds 
            $table->string('graduation_year'); // snt el t5rog 
            $table->string('number_part'); // dah 3dat el moshrken m3h 
            $table->enum('Gidender', ['Male', 'Female']); // dah el no3 
            $table->string('credit_number'); // dah rkm el credit bt3o lw mwgod
            $table->string('email'); // dah l email 
            $table->string('path'); // dah l sora 

            $table->timestamps();
            $table->primary('member_number'); //deh el primry key


            $table->integer('limit_id')->unsigned();

            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade'); // delete on cascade 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('engineers');
    }

}
