<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_create');
    }

    public function rules()
    {
        return [
            'country' => [
                'string',
                'required',
            ],
            'company' => [
                'string',
                'required',
            ],
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'skype' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'text' => [
                'string',
                'nullable',
            ],
            'vergi_dairesi' => [
                'string',
                'nullable',
            ],
            'banka_adi' => [
                'string',
                'nullable',
            ],
            'banka_iban_no' => [
                'string',
                'nullable',
            ],
        ];
    }
}
