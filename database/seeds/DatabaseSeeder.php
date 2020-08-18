<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            userSeeder::class,
            DepartmentSeeder::class,
            SessionSeeder::class,
            ApplicantSeeder::class,
            FacultySeeder::class,
            olevelSeeder::class,
            NextOfKinSeeder::class,
            SponsorSeeder::class,
        ]);
    }
}
