<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMarketingBlogArticleRequest;
use App\Http\Requests\StoreMarketingBlogArticleRequest;
use App\Http\Requests\UpdateMarketingBlogArticleRequest;
use App\Models\MarketingBlogArticle;
use App\Models\MarketingBlogCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MarketingBlogArticleController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('marketing_blog_article_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingBlogArticles = MarketingBlogArticle::with(['marketing_blog_category', 'media'])->get();

        return view('frontend.marketingBlogArticles.index', compact('marketingBlogArticles'));
    }

    public function create()
    {
        abort_if(Gate::denies('marketing_blog_article_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketing_blog_categories = MarketingBlogCategory::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.marketingBlogArticles.create', compact('marketing_blog_categories'));
    }

    public function store(StoreMarketingBlogArticleRequest $request)
    {
        $marketingBlogArticle = MarketingBlogArticle::create($request->all());

        foreach ($request->input('image', []) as $file) {
            $marketingBlogArticle->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $marketingBlogArticle->id]);
        }

        return redirect()->route('frontend.marketing-blog-articles.index');
    }

    public function edit(MarketingBlogArticle $marketingBlogArticle)
    {
        abort_if(Gate::denies('marketing_blog_article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketing_blog_categories = MarketingBlogCategory::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marketingBlogArticle->load('marketing_blog_category');

        return view('frontend.marketingBlogArticles.edit', compact('marketingBlogArticle', 'marketing_blog_categories'));
    }

    public function update(UpdateMarketingBlogArticleRequest $request, MarketingBlogArticle $marketingBlogArticle)
    {
        $marketingBlogArticle->update($request->all());

        if (count($marketingBlogArticle->image) > 0) {
            foreach ($marketingBlogArticle->image as $media) {
                if (! in_array($media->file_name, $request->input('image', []))) {
                    $media->delete();
                }
            }
        }
        $media = $marketingBlogArticle->image->pluck('file_name')->toArray();
        foreach ($request->input('image', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $marketingBlogArticle->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('image');
            }
        }

        return redirect()->route('frontend.marketing-blog-articles.index');
    }

    public function show(MarketingBlogArticle $marketingBlogArticle)
    {
        abort_if(Gate::denies('marketing_blog_article_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingBlogArticle->load('marketing_blog_category');

        return view('frontend.marketingBlogArticles.show', compact('marketingBlogArticle'));
    }

    public function destroy(MarketingBlogArticle $marketingBlogArticle)
    {
        abort_if(Gate::denies('marketing_blog_article_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingBlogArticle->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarketingBlogArticleRequest $request)
    {
        $marketingBlogArticles = MarketingBlogArticle::find(request('ids'));

        foreach ($marketingBlogArticles as $marketingBlogArticle) {
            $marketingBlogArticle->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('marketing_blog_article_create') && Gate::denies('marketing_blog_article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MarketingBlogArticle();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
