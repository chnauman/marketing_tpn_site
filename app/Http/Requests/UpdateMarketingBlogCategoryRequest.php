<?php

namespace App\Http\Requests;

use App\Models\MarketingBlogCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMarketingBlogCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marketing_blog_category_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:marketing_blog_categories,title,' . request()->route('marketing_blog_category')->id,
            ],
        ];
    }
}
