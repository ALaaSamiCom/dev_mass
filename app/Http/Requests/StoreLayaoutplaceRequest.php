<?php

namespace App\Http\Requests;

use App\Models\Layaoutplace;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLayaoutplaceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('layaoutplace_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
