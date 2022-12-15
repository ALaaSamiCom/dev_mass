<?php

namespace App\Http\Requests;

use App\Models\Choose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateChooseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('choose_edit');
    }

    public function rules()
    {
        return [
            'icon' => [
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
            'description_en' => [
                'required',
            ],
            'description_ar' => [
                'required',
            ],
        ];
    }
}
