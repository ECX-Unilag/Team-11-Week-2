<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextOfKinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_of_kins', function (Blueprint $table) {
            $table->increments('kin_id');
            $table->integer('applicant_id');
            $table->string('kin_firstname');
            $table->string('kin_lastname');
            $table->string('kin_address');
            $table->string('kin_phone');
            $table->string('kin_email');
            $table->string('kin_relationship');
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
        Schema::dropIfExists('next_of_kins');
    }
}
