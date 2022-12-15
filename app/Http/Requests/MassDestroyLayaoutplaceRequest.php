<?php

namespace App\Http\Requests;

use App\Models\Layaoutplace;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLayaoutplaceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('layaoutplace_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:layaoutplaces,id',
        ];
    }
}
