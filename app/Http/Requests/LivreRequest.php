<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class LivreRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
			'image'=>'required|image',
            'titre'=>'required',
			'prix'=>'required'
        ];
    }
}
