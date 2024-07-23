<?php

namespace App\Http\Requests;

use App\Models\MarketingBlogCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMarketingBlogCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('marketing_blog_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:marketing_blog_categories,id',
        ];
    }
}
