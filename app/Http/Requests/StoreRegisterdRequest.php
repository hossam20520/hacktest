<?php

namespace App\Http\Requests;

use App\Models\Registerd;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRegisterdRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('registerd_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'string',
                'nullable',
            ],
            'password' => [
                'string',
                'nullable',
            ],
            'mac' => [
                'string',
                'nullable',
            ],
            'location' => [
                'string',
                'nullable',
            ],
            'ip' => [
                'string',
                'nullable',
            ],
            'time' => [
                'string',
                'nullable',
            ],
            'type' => [
                'string',
                'nullable',
            ],
            'count' => [
                'string',
                'nullable',
            ],
        ];
    }
}