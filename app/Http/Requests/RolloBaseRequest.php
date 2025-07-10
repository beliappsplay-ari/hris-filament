<?php
namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RolloBaseRequest extends FormRequest
{
    public function failedValidation(Validator $validator)
    {
        $errors = '';
        foreach($validator->errors()->all() as $key => $error){
            if($key > 0){
                $errors .= ' & ';
            }
            $errors .= $error;
        }
        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors. '. $errors,

            'data'      => $validator->errors()
        ],400));
    }
}