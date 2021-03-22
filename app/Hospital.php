<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use SoftDeletes;
   protected $fillable =[
       'hospital_code',
'hospital_name',
'region',
'address',
'telephone',
'fax',
'email',
'wo_prefix',
'wocm_sl_no',
'wopm_sl_no',
'hospital_code_prefix',
   ];
}
