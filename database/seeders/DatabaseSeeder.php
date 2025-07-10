<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::unprepared(file_get_contents(database_path('hris.sql')));
        // Employee::factory(1000)->create();

        // User::factory()->create([
        //     'name' => 'Basrul',
        //     'email' => 'rolloic@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);

    }
}
