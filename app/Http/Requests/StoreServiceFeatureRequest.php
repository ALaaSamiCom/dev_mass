<?php

namespace App\Http\Requests;

use App\Models\ServiceFeature;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreServiceFeatureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_feature_create');
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
