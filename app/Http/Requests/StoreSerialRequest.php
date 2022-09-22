<?php

namespace App\Http\Requests;

use App\Models\Serial;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSerialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('serial_create');
    }

    public function rules()
    {
        return [
            'serial' => [
                'string',
                'nullable',
            ],
        ];
    }
}
