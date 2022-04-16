<?php

namespace App\Models\Support;

use Illuminate\Database\Eloquent\Model;

class AddressType extends Model
{

    protected $table = "address_types";

    protected $fillable = [
        'description'
    ];

    protected $guarded = ['id'];

    protected $timestamp = false;
}
