@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marketingBlogArticle.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marketing-blog-articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.id') }}
                        </th>
                        <td>
                            {{ $marketingBlogArticle->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.title') }}
                        </th>
                        <td>
                            {{ $marketingBlogArticle->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.author') }}
                        </th>
                        <td>
                            {{ $marketingBlogArticle->author }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.duration') }}
                        </th>
                        <td>
                            {{ $marketingBlogArticle->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.image') }}
                        </th>
                        <td>
                            @foreach($marketingBlogArticle->image as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.article_text') }}
                        </th>
                        <td>
                            {!! $marketingBlogArticle->article_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marketingBlogArticle.fields.marketing_blog_category') }}
                        </th>
                        <td>
                            {{ $marketingBlogArticle->marketing_blog_category->title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marketing-blog-articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection