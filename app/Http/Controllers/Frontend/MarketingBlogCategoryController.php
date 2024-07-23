<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMarketingBlogCategoryRequest;
use App\Http\Requests\StoreMarketingBlogCategoryRequest;
use App\Http\Requests\UpdateMarketingBlogCategoryRequest;
use App\Models\MarketingBlogCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarketingBlogCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('marketing_blog_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingBlogCategories = MarketingBlogCategory::all();

        return view('frontend.marketingBlogCategories.index', compact('marketingBlogCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('marketing_blog_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.marketingBlogCategories.create');
    }

    public function store(StoreMarketingBlogCategoryRequest $request)
    {
        $marketingBlogCategory = MarketingBlogCategory::create($request->all());

        return redirect()->route('frontend.marketing-blog-categories.index');
    }

    public function edit(MarketingBlogCategory $marketingBlogCategory)
    {
        abort_if(Gate::denies('marketing_blog_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.marketingBlogCategories.edit', compact('marketingBlogCategory'));
    }

    public function update(UpdateMarketingBlogCategoryRequest $request, MarketingBlogCategory $marketingBlogCategory)
    {
        $marketingBlogCategory->update($request->all());

        return redirect()->route('frontend.marketing-blog-categories.index');
    }

    public function show(MarketingBlogCategory $marketingBlogCategory)
    {
        abort_if(Gate::denies('marketing_blog_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.marketingBlogCategories.show', compact('marketingBlogCategory'));
    }

    public function destroy(MarketingBlogCategory $marketingBlogCategory)
    {
        abort_if(Gate::denies('marketing_blog_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingBlogCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarketingBlogCategoryRequest $request)
    {
        $marketingBlogCategories = MarketingBlogCategory::find(request('ids'));

        foreach ($marketingBlogCategories as $marketingBlogCategory) {
            $marketingBlogCategory->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
