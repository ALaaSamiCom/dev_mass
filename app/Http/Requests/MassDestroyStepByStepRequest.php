<?php

namespace App\Http\Requests;

use App\Models\StepByStep;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStepByStepRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('step_by_step_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:step_by_steps,id',
        ];
    }
}
