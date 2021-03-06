<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PropertyRequest extends Request
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
            'title'=>['required','min:3'],
            'description'=>'required',
            'price'=>'required',
            'published_at'=>['required','date'],
            //'category'=>['required'],
            'images'=>['required'],
            
            'address'=>['required'],
            'lat'=>['required'],
            'lng'=>['required'],

        ];
    }
}
