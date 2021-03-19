<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class ImageUploadRequest extends FormRequest
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
            //
        ];
    }

    public function imageUpload($input, $path, $item, $column)
    {
        if ($this->hasFile($input)){


            if (Storage::disk('public')->exists($path. $item->{$column})){
                try {
                    Storage::disk('public')->delete($path. $item->{$column});

                }catch (\Exception $exception){
                    return null;
                }
            }

            if ($this->file($input)->isValid()){
                $extention = $this->file($input)->getClientOriginalExtension();
                $filename = date('Y_m_d_h_i_s') . "." . $extention;
                Storage::disk('public')->put($path. $filename, file_get_contents($this->file($input)));

                //update database

                $item->{$column} = $filename;
            }

        }
    }
}
