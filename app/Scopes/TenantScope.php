<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class TenantScope implements Scope{


    public function apply(Builder $builder, Model $model)
    {
        if(!empty(Auth::User()->tenant_id)){
            $builder->where('tenant_id', Auth::User()->tenant_id);
        }
    }

}