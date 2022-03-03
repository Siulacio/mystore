<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{

    public function authorize() : bool
    {
        return true;
    }


    public function rules() : array
    {
        return [
            'customer_name'=>['bail','required','max:80', 'min:3'],
            'customer_email'=>['bail','required', 'email', 'max:120', 'min:7'],
            'customer_mobile'=>['bail','required','numeric', 'digits_between:5,40'],
        ];
    }

    public function messages() : array
    {
        return [
            'customer_name.required'=>'falta nombre comprador',
            'customer_name.max'=>'nombre comprador no puede superar 80 caracteres',
            'customer_name.min'=>'nombre comprador debe tener tener mas de 2 caracteres',
            'customer_email.required'=>'falta email comprador',
            'customer_email.email'=>'el email no tiene el formato esperado | user@example.com',
            'customer_email.max'=>'email comprador no puede superar 120 caracteres',
            'customer_email.min'=>'email comprador debe tener mas de 6 caracteres',
            'customer_mobile.required'=>'falta celular comprador',
            'customer_mobile.digits_between'=>'celular debe tener una longitud entre 5 y 40 digitos',
            'customer_mobile.numeric'=>'celular comprador debe ser de tipo numérico',
        ];
    }
}
