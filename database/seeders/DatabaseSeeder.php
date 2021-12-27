<?php

namespace Database\Seeders;

use Database\Factories\TodoFactory;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Todo::factory()->count(5)->create();
    }
}
