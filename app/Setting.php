<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

     protected $fillable = [
            'site_full_name',
            'site_short_name',
            'login_background',
            'logo',
            'favicon',
            'footer_text',
            'date_format',
            'time_format',
            'timezone',
            'currency_code',
     ];

    public static function dateFormats(){
        return array(
            'F j, Y, ',
            'j, n, Y',
            'j/ n/ Y',
            'j-n-y'

        );
    }

    public static function timeFormats(){
        return array(
            'g:i a',
            'H:i:s',
            'g:i'
        );
    }

}
