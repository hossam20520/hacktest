<?php

namespace App\Http\Requests;

use App\Models\Dnahistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDnahistoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dnahistory_edit');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
            'dna_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
