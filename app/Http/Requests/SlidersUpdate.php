<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlidersUpdate extends FormRequest
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
            'title_en'=>'required',
            'title_ar'=>'required',
            'description_en'=>'',
            'description_ar'=>'',
            'alt'=>'required',
            'image_path'=>'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ];
    }
}
