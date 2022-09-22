<?php

namespace App\Http\Requests;

use App\Models\Serial;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySerialRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('serial_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:serials,id',
        ];
    }
}
