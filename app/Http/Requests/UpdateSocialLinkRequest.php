<?php

namespace App\Http\Requests;

use App\Models\SocialLink;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSocialLinkRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('social_link_edit');
    }

    public function rules()
    {
        return [
            'value' => [
                'string',
                'required',
            ],
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
