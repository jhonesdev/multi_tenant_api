<?php

namespace App\Models\Tenants;

use Illuminate\Database\Eloquent\Model;

class TenantsAddresses extends Model
{

    protected $table = 'tenants_addresses';

    protected $fillable = [
        'tenant_id', 'type_id', 'street_name', 'street_number', 'neighborhood',
        'city', 'state', 'zip_code', 'country', 'comment'
    ];

    protected $guards = ['id'];
}
