<?php

namespace App\Http\Requests;

use App\Models\Dna;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDnaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('dna_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:dnas,id',
        ];
    }
}
