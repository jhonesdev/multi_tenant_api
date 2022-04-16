<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\defaults\AddressTypesSeeder;
use Database\Seeders\defaults\ContactTypesSeeder;
use Database\Seeders\defaults\UsersSeeder;
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
        $this->call([
            UsersSeeder::class,
            AddressTypesSeeder::class,
            ContactTypesSeeder::class
        ]);
    }
}
