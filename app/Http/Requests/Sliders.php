<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sliders extends FormRequest
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
            'description_en'=>'nullable|string',
            'description_ar'=>'nullable|string',
            'alt'=>'required',
            'image_path'=>'mimes:jpeg,jpg,png,gif,svg|required|max:10000',
        ];
    }
}
