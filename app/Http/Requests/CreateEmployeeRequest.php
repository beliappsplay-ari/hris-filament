<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends RolloBaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "empno" => "required|unique:employees,empno",
            "fullname"=> "required",
            "dateOfBirth"=> "required|date",
            // "PlaceOfBirth"=> "required",
            "MaritalStatus"=> "required",
            "Sex"=> "required",
            "Religion"=> "required",
            // "Nationality"=> "required",
            // "JamsostekNo"=> "required",
            // "NPWPNo"=> "required",
            "ktp"=> "required",
            // "hp"=> "required",
            // "officetelp"=> "required",
            "email"=> "required",
            // "HTIEmail"=> "required",
            // "ibu_kandung"=> "required",
            "CorrespondenceAddress"=> "required",
            "CorrespondenceCity"=> "required",
            // "CorrespondencePostCode"=> "required",
            // "PermanentAddress"=> "required",
            // "PermanentCity"=> "required",
            // "PermanentPostCode"=> "required",
            "TelephoneNo"=> "required",
            // "BankName"=> "required",
            // "BankAddress"=> "required",
            // "BankACNo"=> "required",
            // "AccountHolder"=> "required",
        ];
    }
}
