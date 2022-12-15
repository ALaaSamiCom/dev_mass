<?php

namespace App\Http\Requests;

use App\Models\OurMission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOurMissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_mission_edit');
    }

    public function rules()
    {
        return [
            'order' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
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
