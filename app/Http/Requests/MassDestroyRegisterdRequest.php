<?php

namespace App\Http\Requests;

use App\Models\Registerd;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRegisterdRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registerd_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:registerds,id',
        ];
    }
}