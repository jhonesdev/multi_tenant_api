<?php

namespace Database\Seeders\defaults;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_types')->insert([
            'description' => 'padrão'
        ]);

        DB::table('contact_types')->insert([
            'description' => 'financeiro'
        ]);        
    }
}
