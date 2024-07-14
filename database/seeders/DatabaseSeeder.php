<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(FaqSeeder::class);
        // $this->call(FaqSeeder::class);
    }
}