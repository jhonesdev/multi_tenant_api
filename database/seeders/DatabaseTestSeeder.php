<?php

namespace Database\Seeders;

use Database\Seeders\tests\TenantSeeder;
use Illuminate\Database\Seeder;

class DatabaseTestSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TenantSeeder::class
        ]);
    }
}
