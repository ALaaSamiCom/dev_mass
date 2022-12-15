<?php

namespace App\Http\Requests;

use App\Models\SpecialSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySpecialSectionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('special_section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:special_sections,id',
        ];
    }
}
