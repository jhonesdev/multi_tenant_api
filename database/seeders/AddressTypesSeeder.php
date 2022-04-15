<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address_types')->insert([
            'description' => 'padrão'
        ]);

        DB::table('address_types')->insert([
            'description' => 'entrega'
        ]);

        DB::table('address_types')->insert([
            'description' => 'cobrança'
        ]);
    }
}
