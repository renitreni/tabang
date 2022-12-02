<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         User::factory(10)->create();

         User::factory()->create([
             'first_name' => 'Firstname',
             'last_name' => 'Lastname',
             'roles' => '1',
             'email' => 'admin@site.com',
         ]);
    }
}
