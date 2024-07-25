<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMarketingTestimonialRequest;
use App\Http\Requests\StoreMarketingTestimonialRequest;
use App\Http\Requests\UpdateMarketingTestimonialRequest;
use App\Models\MarketingTestimonial;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MarketingTestimonialController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('marketing_testimonial_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingTestimonials = MarketingTestimonial::with(['media'])->get();

        return view('frontend.marketingTestimonials.index', compact('marketingTestimonials'));
    }

    public function create()
    {
        abort_if(Gate::denies('marketing_testimonial_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.marketingTestimonials.create');
    }

    public function store(StoreMarketingTestimonialRequest $request)
    {
        $marketingTestimonial = MarketingTestimonial::create($request->all());

        if ($request->input('photo', false)) {
            $marketingTestimonial->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $marketingTestimonial->id]);
        }

        return redirect()->route('frontend.marketing-testimonials.index');
    }

    public function edit(MarketingTestimonial $marketingTestimonial)
    {
        abort_if(Gate::denies('marketing_testimonial_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.marketingTestimonials.edit', compact('marketingTestimonial'));
    }

    public function update(UpdateMarketingTestimonialRequest $request, MarketingTestimonial $marketingTestimonial)
    {
        $marketingTestimonial->update($request->all());

        if ($request->input('photo', false)) {
            if (! $marketingTestimonial->photo || $request->input('photo') !== $marketingTestimonial->photo->file_name) {
                if ($marketingTestimonial->photo) {
                    $marketingTestimonial->photo->delete();
                }
                $marketingTestimonial->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($marketingTestimonial->photo) {
            $marketingTestimonial->photo->delete();
        }

        return redirect()->route('frontend.marketing-testimonials.index');
    }

    public function show(MarketingTestimonial $marketingTestimonial)
    {
        abort_if(Gate::denies('marketing_testimonial_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.marketingTestimonials.show', compact('marketingTestimonial'));
    }

    public function destroy(MarketingTestimonial $marketingTestimonial)
    {
        abort_if(Gate::denies('marketing_testimonial_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marketingTestimonial->delete();

        return back();
    }

    public function massDestroy(MassDestroyMarketingTestimonialRequest $request)
    {
        $marketingTestimonials = MarketingTestimonial::find(request('ids'));

        foreach ($marketingTestimonials as $marketingTestimonial) {
            $marketingTestimonial->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('marketing_testimonial_create') && Gate::denies('marketing_testimonial_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MarketingTestimonial();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
