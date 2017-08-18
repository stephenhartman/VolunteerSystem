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
        $user = App\User::where('email', '=', 'admin@example.org');
        if ($user === null) {
            DB::table('users')->insert([
                'name' => "Admin",
                'email' => 'admin@example.com',
                'password' => bcrypt('secret'),
            ]);
        }
        $members = factory(App\Member::class, 25)
            ->create()
            ->each(function ($m) {
            $m->schedules()->save(factory(App\Schedule::class)->make());
        });
        $interests = factory(App\Interests::class, 50)->create();
        $contacts = factory(App\EmergencyContact::class, 30)->create();
        $opportunities = factory(App\Opportunity::class, 30)->create();
    }

}
