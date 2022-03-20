<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'College',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'User',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Company',
            'guard_name' => 'web'
        ]);
    }
}
