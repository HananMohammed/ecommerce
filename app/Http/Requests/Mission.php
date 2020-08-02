<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Mission extends FormRequest
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
            'mission_ar'=>'required|string',
            'mission_en'=>'required|string',
            'vission_en'=>'required|string',
            'vission_ar'=>'required|string',
        ];
    }
}
