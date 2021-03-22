<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveHospitalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'hospital_code' =>['required','string'],
            'hospital_name' =>['required','string'],
            'region' =>['required','string'],
            'address' =>['required','string'],
            'telephone' =>['required','string'],
            'fax' =>['required','string'],
            'email' =>['required','email','string'],
            'wo_prefix' =>['required','string'],
            'wocm_sl_no' =>['required','string'],
            'wopm_sl_no' =>['required','string'],
            'hospital_code_prefix' =>['required','string'],
        ];
    }
}
