<?php

namespace App\Models\Tenants;

use App\Models\Support\AddressType;
use Illuminate\Database\Eloquent\Model;

class TenantAddress extends Model
{

    protected $table = 'tenants_addresses';

    protected $fillable = [
        'tenant_id', 'type_id', 'street_name', 'street_number', 'neighborhood',
        'city', 'state', 'zip_code', 'country', 'comment'
    ];

    protected $guards = ['id'];

    /**
     * Get type associated with the address.
     */

    public function type(){
        return $this->hasOne(AddressType::class, 'id', 'type_id');
    }
}
