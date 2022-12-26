<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Rizvi Sharis',
            'email' => 'rizvisharis@email.com',
            'password' => bcrypt('12341234'),
            'is_admin' => 0,
            'status' => 'student',
        ]);
    }
}
