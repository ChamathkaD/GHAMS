<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveVendorRequest extends FormRequest
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
            'vendor_code' => [ 'required', 'string' ],
            'zip' => [ 'required', 'string' ],
            'supplier_name' => [ 'required', 'string' ],
            'country' => [ 'required', 'string' ],
            'contact_person' => [ 'required', 'string' ],
            'phone' => [ 'required', 'string' ],
            'address' => [ 'required', 'string' ],
            'fax' => [ 'required', 'string' ],
            'city' => [ 'required', 'string' ],
            'email' => [ 'required', 'string' ,'email'],
            'state' => [ 'required', 'string' ],
        ];
    }
}
