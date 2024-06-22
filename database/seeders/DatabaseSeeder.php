<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan UserSeeder ke sini
        $this->call([
            UserSeeder::class,
            // Tambahkan seeder lain di sini jika ada
        ]);
    }
}