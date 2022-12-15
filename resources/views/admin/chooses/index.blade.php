@extends('layouts.admin')
@section('content')
@can('choose_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.chooses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.choose.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.choose.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Choose">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.choose.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.choose.fields.icon') }}
                        </th>
                        <th>
                            {{ trans('cruds.choose.fields.title_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.choose.fields.title_ar') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($chooses as $key => $choose)
                        <tr data-entry-id="{{ $choose->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $choose->id ?? '' }}
                            </td>
                            <td>
                                @if($choose->icon)
                                    <a href="{{ $choose->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $choose->icon->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $choose->title_en ?? '' }}
                            </td>
                            <td>
                                {{ $choose->title_ar ?? '' }}
                            </td>
                            <td>
                                @can('choose_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.chooses.show', $choose->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('choose_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.chooses.edit', $choose->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('choose_delete')
                                    <form action="{{ route('admin.chooses.destroy', $choose->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('choose_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.chooses.massDestroy') }}",
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
  let table = $('.datatable-Choose:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection