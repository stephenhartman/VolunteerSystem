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
        $members = factory(App\Member::class, 25)->create();
        $interests = factory(App\Interests::class, 50)->create();
        $contacts = factory(App\EmergencyContact::class, 30)->create();
    }

}
