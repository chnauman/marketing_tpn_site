@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('marketing_testimonial_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.marketing-testimonials.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.marketingTestimonial.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.marketingTestimonial.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-MarketingTestimonial">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.designation') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingTestimonial.fields.photo') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($marketingTestimonials as $key => $marketingTestimonial)
                                    <tr data-entry-id="{{ $marketingTestimonial->id }}">
                                        <td>
                                            {{ $marketingTestimonial->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marketingTestimonial->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marketingTestimonial->designation ?? '' }}
                                        </td>
                                        <td>
                                            @if($marketingTestimonial->photo)
                                                <a href="{{ $marketingTestimonial->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $marketingTestimonial->photo->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @can('marketing_testimonial_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.marketing-testimonials.show', $marketingTestimonial->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('marketing_testimonial_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.marketing-testimonials.edit', $marketingTestimonial->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('marketing_testimonial_delete')
                                                <form action="{{ route('frontend.marketing-testimonials.destroy', $marketingTestimonial->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('marketing_testimonial_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.marketing-testimonials.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-MarketingTestimonial:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection