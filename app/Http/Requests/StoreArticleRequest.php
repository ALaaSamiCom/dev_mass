<?php

namespace App\Http\Requests;

use App\Models\ServiceFeature;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreArticleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('article_create');
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
            'description_ar' => [
                'string',
                'required',
            ],
            'description_en' => [
                'string',
                'required',
            ],
            'author_name_ar' => [
                'string',
                'required',
            ],
            'author_name_en' => [
                'string',
                'required',
            ],
            'author_job_ar' => [
                'string',
                'required',
            ],
            'author_job_en' => [
                'string',
                'required',
            ],


        ];
    }
}
