<?php

namespace Database\Seeders\defaults;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses_types')->insert([
            'description' => 'padrão'
        ]);

        DB::table('addresses_types')->insert([
            'description' => 'entrega'
        ]);

        DB::table('addresses_types')->insert([
            'description' => 'cobrança'
        ]);
    }
}
