<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        $rules =  [
            'serTitle'  =>  'required|string|max:50',
            'serState'  => 'required|integer',
            'location'  => 'required|integer',
            'serSec'    => 'required|integer',
            'serCat'    => 'required|integer',
            'subCat'    => 'nullable|integer',
            'serImg'    => 'array',
            'image.*'  => 'image|mimes:jpeg,jpg,png|max:1024',
            'serPrice' => "integer",
            'description'  => 'required|string',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'serTitle.required'     => 'a title is required',
            'serTitle.max'          => 'Maximum of 40 characters allowed',
            'serState.required'     => 'Select the state  where you currently provide this service',
            'serState.integer'     => 'Select the state  where you currently provide this service',
            'location.required'     => 'Select the location',
            'location.integer'     => 'Select the location',
            'description.required'  => 'a short detailed description is required',
            'serCat.required'       => 'Select a Category',
            'serCat.integer'       => 'Select a Category',
            'subCat.required'       => 'Select a Sub Category',
            'subCat.integer'       => 'Select a Sub Category',
            // 'serPrice.integer' => 'The price must be in digits e.g 50000',
            'serImg.mimes'          => 'The image must be in jpeg, jpg or png format',
            'serImg.max'            => 'The Image is too large, It must not be more than 1MB',
        ];
    }
}
