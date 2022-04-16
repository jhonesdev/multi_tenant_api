<?php

namespace App\Models\Tenants;

use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{

    protected $table = 'tenants';

    protected $fillable = [
        'corporate_name', 'fantasy_name',
        'document', 'state_registration',
        'active',
    ];

    protected $guards = ['id'];

    /**
     * Get addresses associated with the tentant.
     */

    public function address()
    {
        return $this->hasMany(TenantsAddresses::class, 'tenant_id', 'id');
    }

    /**
     * Get contacts associated with the tentant.
     */

    public function contacts()
    {
        return $this->hasMany(TenantsContacts::class, 'tenant_id', 'id');
    }
}
