<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantOlevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant-olevels', function (Blueprint $table) {
            $table->increments('olevel_id');
            $table->integer('application_number');
            $table->enum('type', ['WASSCE', 'NECO', 'IGCSE', 'Other']);
            $table->string('subject1');
            $table->enum('grade1', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject2');
            $table->enum('grade2', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject3');
            $table->enum('grade3', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject4');
            $table->enum('grade4', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject5');
            $table->enum('grade5', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject6');
            $table->enum('grade6', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject7');
            $table->enum('grade7', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject8');
            $table->enum('grade8', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
            $table->string('subject9');
            $table->enum('grade9', ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']);
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
        Schema::dropIfExists('applicant-olevels');
    }
}
