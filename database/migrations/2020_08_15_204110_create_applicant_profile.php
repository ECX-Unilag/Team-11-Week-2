<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->integer('application_number');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->date('date_of_birth');
            $table->string('phone_no');
            $table->string('email');
            $table->integer('faculties_id');
            $table->integer('dept_id');
            $table->enum('enrollment_type', ['JAMB', 'Direct Entry']);
            $table->integer('jamb_no');
            $table->integer('jamb_score');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('marital_status', ['single', 'Married', 'Divorced', 'Other']);
            $table->string('nationality');
            $table->string('state_of_origin');
            $table->string('local_government');
            $table->string('home_town');
            $table->text('home_address');
            $table->string('applicant_passport');
            $table->enum('religion', ['Christianity', 'Islam', 'Traditional', 'Other']);
            $table->enum('genotype', ['AA', 'AS', 'SS']);
            $table->enum('bloodgroup', ['A', 'B', 'AB', 'O']);
            $table->string('session');
            $table->enum('admission_status', ['admitted', 'processing', 'rejected'])->default('processing');
            $table->enum('admission_batch', ['A', 'B', 'C', 'N'])->default('N');
            $table->string('school_id')->default(1);
            $table->enum('register_status', ['started', 'in progress', 'finished'])->default('started');
            $table->string('guardian');
            $table->string('guardian_email');
            $table->string('guardian_phone_no');
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
        Schema::dropIfExists('applicants');
    }
}
