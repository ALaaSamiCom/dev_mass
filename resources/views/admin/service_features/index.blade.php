@extends('layouts.admin')
@section('content')
@can('service_feature_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.service_features.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.service_feature.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.service_feature.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-service_feature">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.service_feature.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.service_feature.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.service_feature.fields.title_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.service_feature.fields.title_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.service_feature.fields.service') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($service_features as $key => $service_feature)
                        <tr data-entry-id="{{ $service_feature->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $service_feature->id ?? '' }}
                            </td>
                            <td>
                                @if($service_feature->image)
                                    <a href="{{ $service_feature->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $service_feature->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $service_feature->title_en ?? '' }}
                            </td>
                            <td>
                                {{ $service_feature->title_ar ?? '' }}
                            </td>
                            <td>
                                {{ $service_feature->service->title_en ?? '' }}
                            </td>
                            <td>
                                @can('service_feature_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.service_features.show', $service_feature->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('service_feature_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.service_features.edit', $service_feature->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('service_feature_delete')
                                    <form action="{{ route('admin.service_features.destroy', $service_feature->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('service_feature_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.service_features.massDestroy') }}",
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
  let table = $('.datatable-service_feature:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
