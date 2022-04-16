<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Traits\Tenantable;

class User extends Authenticatable
{
    use Tenantable, HasApiTokens, Notifiable;

    protected $fillable = [
        'tenant_id', 'name', 'email', 'email_verified_at',
        'nickname', 'password', 'active'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Find the user instance for the given username.
     *
     * @param  string  $username
     * @return \App\Models\User
     */
    public function findForPassport($username)
    {
        return $this->where('email', $username)
            ->orWhere('nickname', $username)
            ->first();
    }
}
