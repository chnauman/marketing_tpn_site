<?php

namespace App\Http\Requests;

use App\Models\MarketingBlogArticle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMarketingBlogArticleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marketing_blog_article_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'author' => [
                'string',
                'required',
            ],
            'duration' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'image' => [
                'array',
            ],
            'article_text' => [
                'required',
            ],
            'marketing_blog_category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
