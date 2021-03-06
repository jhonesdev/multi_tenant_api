<?php

namespace App\Models\Traits;

use App\Scopes\TenantScope;
use App\Models\Tenants\Tenant;
use Illuminate\Support\Facades\Auth;

trait Tenantable
{
    protected static function bootTenantable()
    {        
        static::addGlobalScope(new TenantScope);
        if(!empty(Auth::User()->tenant_id)){
            static::creating(function($model){
                $model->tenant_id = Auth::User()->tenant_id;
            });
        }
    }

    public function tenant(){
        return $this->belongsTo(Tenant::class, 'tenant_id', 'id');
    }
}
