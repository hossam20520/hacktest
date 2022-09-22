<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'en_title' => [
                'string',
                'required',
            ],
            'ar_title' => [
                'string',
                'required',
            ],
            'sku' => [
                'string',
                'nullable',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
            'photo' => [
                'required',
            ],
            'gallery' => [
                'array',
                'required',
            ],
            'gallery.*' => [
                'required',
            ],
            'stock' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'price' => [
                'required',
            ],
            'product_link' => [
                'string',
                'nullable',
            ],
            'license' => [
                'string',
                'nullable',
            ],
        ];
    }
}
