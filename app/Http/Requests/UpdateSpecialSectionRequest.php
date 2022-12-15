<?php

namespace App\Http\Requests;

use App\Models\SpecialSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSpecialSectionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('special_section_edit');
    }

    public function rules()
    {
        return [
            'title_en' => [
                'string',
                'required',
            ],
            'title_ar' => [
                'string',
                'required',
            ],
            'order' => [
                'string',
                'required',
            ],
        ];
    }
}
