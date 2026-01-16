@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('marketing_blog_article_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.marketing-blog-articles.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.marketingBlogArticle.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.marketingBlogArticle.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-MarketingBlogArticle">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.marketingBlogArticle.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingBlogArticle.fields.title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingBlogArticle.fields.author') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingBlogArticle.fields.duration') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.marketingBlogArticle.fields.image') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($marketingBlogArticles as $key => $marketingBlogArticle)
                                    <tr data-entry-id="{{ $marketingBlogArticle->id }}">
                                        <td>
                                            {{ $marketingBlogArticle->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marketingBlogArticle->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marketingBlogArticle->author ?? '' }}
                                        </td>
                                        <td>
                                            {{ $marketingBlogArticle->duration ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($marketingBlogArticle->image as $key => $media)
                                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $media->getUrl('thumb') }}">
                                                </a>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('marketing_blog_article_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.marketing-blog-articles.show', $marketingBlogArticle->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('marketing_blog_article_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.marketing-blog-articles.edit', $marketingBlogArticle->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('marketing_blog_article_delete')
                                                <form action="{{ route('frontend.marketing-blog-articles.destroy', $marketingBlogArticle->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('marketing_blog_article_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.marketing-blog-articles.massDestroy') }}",
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
  let table = $('.datatable-MarketingBlogArticle:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection