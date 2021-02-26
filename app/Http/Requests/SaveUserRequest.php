<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SaveUserRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'alpha', 'max:50'],
            'last_name' => ['required', 'string', 'alpha', 'max:50'],
            'phone' => ['required', 'digits:10', 'numeric', 'regex:/^[0-9]{10}/'],
            'website' => ['required', 'string'],
            'address'=>['required', 'string'],
            'city'=>['required', 'string'],
            'state'=>['required', 'string'],
            'zip'=>['required', 'string'],
            'country'=>['required', 'string'],
            'note'=>['required', 'string'],
            'image' => ['mines:jpeg,gif,png,svg,ico'],

            'email' => ['required',
                'string',
                'email',
                'max:75',
                Rule::unique('users', 'email')->ignore(Auth::id()),]


        ];
    }
}
