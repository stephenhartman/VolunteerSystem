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
        $user = App\User::where('email', 'admin@example.com')->first();
        if ($user === null) {
            DB::table('users')->insert([
                'name' => "Admin",
                'email' => 'admin@example.com',
                'password' => bcrypt('secret'),
            ]);
        }
        $members = factory(App\Member::class, 50)
            ->create()
            ->each(function ($m) {
            for($i = 1; $i < 6; $i++) {
                $m->schedules()->save(factory(App\Schedule::class)->make(['day_id' => $i]));
            }
        });
        $interests = factory(App\Interests::class, 100)->create();
        $contacts = factory(App\EmergencyContact::class, 50)->create();
        $volunteer_centers = factory(App\VolunteerCenter::class, 10)->create();
        $opportunities = factory(App\Opportunity::class, 50)->create();
        $skills = factory(App\Skill::class, 200)->create();
    }

}
