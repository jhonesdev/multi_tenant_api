<?php

namespace Database\Seeders\tests;

use App\Models\Tenants\Tenants;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TenantSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {

            $tenant = Tenants::create([
                'corporate_name' => 'KJhones Company',
                'fantasy_name' => '********',
                'document' => '00.000.000/0000-00',
                'state_registration' => '000.000.000.000',
                'active' => true
            ]);

            DB::table('tenants_addresses')->insert([
                'tenant_id' => $tenant->id,
                'type_id' => 1,
                'street_name' => 'R. Santa Efigênia',
                'street_number' => '000',
                'neighborhood' => 'Centro',
                'city' => 'São Paulo',
                'state' => 'São Paulo',
                'zip_code' => '00000-000',
                'country' => 'Brasil',
                'comment' => ''
            ]);

            DB::table('tenants_contacts')->insert([
                'type_id' => 1,
                'tenant_id' => $tenant->id,
                'name' => 'Kessy Jhones',
                'phone' => '(00) 00000-0000',
                'email' => 'teste@teste.com.br'
            ]);

            DB::table('users')->insert([
                'tenant_id' => $tenant->id,
                'name' => 'Teste' . str_pad($tenant->id, 2, '0', STR_PAD_LEFT),
                'email' => 'teste@teste' . str_pad($tenant->id, 2, '0', STR_PAD_LEFT) . '.com.br',
                'nickname' => 'Teste' . str_pad($tenant->id, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('Teste' . str_pad($tenant->id, 2, '0', STR_PAD_LEFT)),
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
