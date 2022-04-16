<?php

namespace App\Models\Tenants;

use Illuminate\Database\Eloquent\Model;

class TenantsContacts extends Model
{

    protected $table = 'tenants_contacts';

    protected $fillable = [
        'type_id', 'tenant_id', 'name',
        'phone', 'email'
    ];

    protected $guards = ['id'];
}
