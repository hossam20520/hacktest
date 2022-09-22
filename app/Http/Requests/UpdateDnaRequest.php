<?php

namespace App\Http\Requests;

use App\Models\Dna;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDnaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dna_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'code' => [
                'string',
                'required',
                'unique:dnas,code,' . request()->route('dna')->id,
            ],
            'amount' => [
                'required',
            ],
        ];
    }
}
