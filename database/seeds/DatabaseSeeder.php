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
        $members = factory(App\Member::class, 10)->create();
        $interests = factory(App\Interests::class, 30)->create();
    }

}
