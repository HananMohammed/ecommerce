<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormReq extends FormRequest
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
      //  dd('flfl');
        return [
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|min:10|numeric',
            'file'=>'mimes:jpeg,jpg,png,gif,svg,pdf,docx,xlsx,txt,pptx|max:10000',
            'message'=>'required|string',
            'subject'=>'required|string'
        ];
    }
}
