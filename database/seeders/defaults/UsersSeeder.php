<?php

namespace Database\Seeders\defaults;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        DB::table('users')->insert([
            'name' => 'Kessy Jhones Rodrigues de Sousa',
            'email' => 'kessy.contato@yahoo.com.br',
            'nickname' => 'KJhones',
            'password' => Hash::make('KJ@dev'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
