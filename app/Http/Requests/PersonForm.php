<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonForm extends Request
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
        //validar cliente
            "personCliente_document" => "required|numeric|min:9999|max:999999999999",
            "personCliente_documentType" => "required|min:2|max:3",
            "personCliente_firstName" => "required|min:3|max:60",
            "personCliente_lastName" => "required|min:3|max:60",
            "personCliente_company" => "max:60",
            "personCliente_emailAddress" => "required|email|min:5|max:80",
            "personCliente_address" => "max:100",
            "personCliente_city" => "max:50",

            "personCliente_province" => "max:50",
            "personCliente_country" => "min:2|max:2",
            "personCliente_phone" => "max:30",
            "personCliente_mobile" => "max:30",

        //validamos pagador, sabiendo que no puede ser requeridos
            "document" => "numeric|min:9999|max:999999999999",
            "documentType" => "min:2|max:3",
            "firstName" => "min:3|max:60",
            "lastName" => "min:3|max:60",
            "company" => "max:60",
            "emailAddress" => "email|min:5|max:80",
            "address" => "max:100",
            "city" => "max:50",

            "province" => "max:50",
            "country" => "min:2|max:2",
            "phone" => "max:30",
            "mobile" => "max:30",

        //validamos ls bancos
            "bankInterface"=>"required|numeric|min:0|max:1",
            //segun documentacion solo admite  4 digitos
            "bankCode"=>"required|numeric|digits_between:4,4"
        ];
    }
}
