<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    
    public function authorize()
    {
        return True;
    }

    public function rules()
    {
        return [
             'nom'=>'required',
			 'email'=>'required',
             'sujet'=>'required',
             'msg'=>'required'

        ];
    }
}
