<?php

namespace Database\Seeders\defaults;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts_types')->insert([
            'description' => 'padrão'
        ]);

        DB::table('contacts_types')->insert([
            'description' => 'financeiro'
        ]);        
    }
}
