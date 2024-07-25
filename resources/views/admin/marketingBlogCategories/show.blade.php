@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marketingBlogCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marketing-blog-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $marketingBlogCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogCategory.fields.title') }}
                        </th>
                        <td>
                            {{ $marketingBlogCategory->title }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marketing-blog-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#marketing_blog_category_marketing_blog_articles" role="tab" data-toggle="tab">
                {{ trans('cruds.marketingBlogArticle.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="marketing_blog_category_marketing_blog_articles">
            @includeIf('admin.marketingBlogCategories.relationships.marketingBlogCategoryMarketingBlogArticles', ['marketingBlogArticles' => $marketingBlogCategory->marketingBlogCategoryMarketingBlogArticles])
        </div>
    </div>
</div>

@endsection