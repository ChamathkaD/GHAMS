<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacture extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'manufacture_code',
        'country',
        'manufacture_name',
        'zip',
        'contact_person',
        'phone',
        'address',
        'fax',
        'city',
        'email',
        'state',
    ];
}
