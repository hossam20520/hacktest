<?php

namespace App\Http\Requests;

use App\Models\Bill;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBillRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('bill_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'bill_name' => [
                'string',
                'nullable',
            ],
            'land_line' => [
                'string',
                'nullable',
            ],
            'payment_refrence' => [
                'string',
                'nullable',
            ],
        ];
    }
}
