<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[
        'type_code','description','service_life','pdf',
    ];
}
