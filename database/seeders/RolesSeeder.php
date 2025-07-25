<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name'=>'Admin'
        ]);

        Role::create([
            'name'=>'Manger'
        ]);

        Role::create([
            'name'=>'TeamLead'
        ]);

        Role::create([
            'name'=>'Employee'
        ]);
    }
}
