<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'username' => 'admin_123',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'level' => 'admin',
            ],
        ]);

        User::factory()->count(20)->create();
    }
}
