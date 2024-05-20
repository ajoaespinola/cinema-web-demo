<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DEFAULT USER
        User::factory()->create([
            "name" => "Aldo Espínola",
            "email" => "aldo@espino.la",
            "password" => Hash::make('12345678'),
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
