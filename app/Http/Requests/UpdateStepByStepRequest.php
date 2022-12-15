<?php

namespace App\Http\Requests;

use App\Models\StepByStep;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStepByStepRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('step_by_step_edit');
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
        ];
    }
}
