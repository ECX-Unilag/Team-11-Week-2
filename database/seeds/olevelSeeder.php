<?php

use Illuminate\Database\Seeder;

class olevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $olevel = factory(App\Applicant_olevel::class, 1)->create();
    }
}
