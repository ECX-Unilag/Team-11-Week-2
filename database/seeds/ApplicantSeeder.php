<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicant = factory(App\Applicant::class, 1)->create();
    }
}
