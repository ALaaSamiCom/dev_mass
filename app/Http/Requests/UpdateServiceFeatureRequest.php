<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateServiceFeatureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_feature_edit');
    }

    public function rules()
    {
        return [
            'image' => [
                'required',
            ],
            'title_en' => [
                'string',
                'required',
            ],
            'title_ar' => [
                'string',
                'required',
            ],

            'service_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
