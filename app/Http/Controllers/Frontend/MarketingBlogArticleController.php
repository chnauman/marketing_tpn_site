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
        $marketingBlogCategories = MarketingBlogCategory::with(['articles.media'])->get();
        //$marketingBlogArticles = MarketingBlogArticle::with(['media'])->get();
        dd($marketingBlogCategories);

        return view('frontend.marketingBlogArticles.index', compact('marketingBlogArticles'));
    }


}
