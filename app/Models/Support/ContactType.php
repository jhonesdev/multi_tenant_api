<?php

namespace App\Models\Support;

use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{

    protected $table = "contact_types";

    protected $fillable = [
        'description'
    ];

    protected $guarded = ['id'];

    protected $timestamp = false;
}
