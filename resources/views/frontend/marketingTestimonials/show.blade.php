@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.marketingTestimonial.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.marketing-testimonials.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $marketingTestimonial->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $marketingTestimonial->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.designation') }}
                                    </th>
                                    <td>
                                        {{ $marketingTestimonial->designation }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.photo') }}
                                    </th>
                                    <td>
                                        @if($marketingTestimonial->photo)
                                            <a href="{{ $marketingTestimonial->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $marketingTestimonial->photo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.review_text') }}
                                    </th>
                                    <td>
                                        {!! $marketingTestimonial->review_text !!}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.marketing-testimonials.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection