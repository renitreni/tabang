<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agency;
use App\Models\AgencyUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Agency::factory(3)->create();
        User::factory(100)->create()->each(function ($value) {
            if ($value->roles == 2) {
                AgencyUser::query()->create([
                    'agency_id' => Agency::inRandomOrder()->first()->id,
                    'user_id' => $value->id,
                ]);
            }
        });

        User::factory()->create([
            'first_name' => 'Firstname',
            'last_name' => 'Lastname',
            'roles' => '1',
            'email' => 'admin@site.com',
        ]);
    }
}
