<?php

namespace App\Http\Requests;

use App\Models\Testimonial;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('testimonial_create');
    }

    public function rules()
    {
        return [
            'name_ar' => [
                'string',
                'required',
            ],
            'name_en' => [
                'string',
                'required',
            ],
            'text_ar' => [
                'required',
            ],
            'text_en' => [
                'required',
            ],
            'job_title_ar' => [
                'string',
                'nullable',
            ],
            'job_title_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
