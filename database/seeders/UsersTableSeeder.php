<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Rishabh Aryal',
            'email' => 'admin@merointernship.com.np',
            'phone_number' => '9821413393',
            'city' => 'Kathmandu',
            'address' => 'Civil Homes, Dhapakhel',
            'password' => bcrypt('password@123')
        ]);

        $user->assignRole('Admin');
    }
}
