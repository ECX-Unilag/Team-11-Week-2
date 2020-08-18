<?php

use Illuminate\Database\Seeder;

class NextOfKinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kin = factory(App\Next_of_kin::class, 5)->create();
    }
}
