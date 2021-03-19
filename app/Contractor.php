<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contractor extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'reference_code',
        'contractor_name',
        'type',
        'contractor_value',
        'start_date',
        'contractor_no',
        'end_date',
    ];

    public static function types()
    {
        return array(
            'Project Contractor',
            'Full Time Contractor',
            'Parmanent Contactor',

        );
    }
}
