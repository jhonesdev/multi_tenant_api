<?php

namespace App\Models\Tenants;

use App\Models\Support\ContactType;
use Illuminate\Database\Eloquent\Model;

class TenantContact extends Model
{

    protected $table = 'tenants_contacts';

    protected $fillable = [
        'type_id', 'tenant_id', 'name',
        'phone', 'email'
    ];

    protected $guards = ['id'];

    /**
     * Get type associated with the contact.
     */

    public function type(){
        return $this->hasOne(ContactType::class, 'id', 'type_id');
    }
}
