<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailUsersR extends FormRequest
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
            'ind_to'=>'required|email',
            'ind_cc'=>'required|string',
            'com_to'=>'required|email',
            'com_cc'=>'required|string',
            'gov_to'=>'required|email',
            'gov_cc'=>'required|string',
            'nind_to'=>'required|email',
            'nind_cc'=>'required',
            'cont_to'=>'required|email',
            'cont_cc'=>'required|string',
        ];
    }
}
