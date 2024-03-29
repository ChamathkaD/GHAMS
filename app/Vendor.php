<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'vendor_code',
        'zip',
        'supplier_name',
        'country',
        'contact_person',
        'phone',
        'address',
        'fax',
        'city',
        'email',
        'state',

    ];
}
