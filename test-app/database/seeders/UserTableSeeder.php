<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::factory()->count(5)->create();
        // User::create([
        //     'name' => 'krishnaprasad',
        //     'email' => 'kp@gmail.com',
        // ]);
        // User::create([
        //     'name' => 'sruthy',
        //     'email' => 'sru@gmail.com',
        // ]);
        // User::create([
        //     'name' => 'dakshina',
        //     'email' => 'dhaksh@gmail.com',
        // ]);
    }
}
