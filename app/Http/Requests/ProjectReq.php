<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectReq extends FormRequest
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
            'proj_name_en'=>'required|string',
            'proj_name_ar'=>'required|string',
            'link'=>'required|string',

            'images.*'=>'mimes:jpeg,jpg,png,gif,svg|required|max:10000'
        ];
    }
}
