<?php

namespace App\Http\Requests;

use App\Models\MarketingTestimonial;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMarketingTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marketing_testimonial_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'designation' => [
                'string',
                'required',
            ],
            'photo' => [
                'required',
            ],
        ];
    }
}
