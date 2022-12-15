@extends('layouts.admin')
@section('content')
@can('layaoutplace_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.layaoutplaces.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.layaoutplace.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.layaoutplace.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Layaoutplace">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.layaoutplace.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.layaoutplace.fields.title') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($layaoutplaces as $key => $layaoutplace)
                        <tr data-entry-id="{{ $layaoutplace->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $layaoutplace->id ?? '' }}
                            </td>
                            <td>
                                {{ $layaoutplace->title ?? '' }}
                            </td>
                            <td>
                                @can('layaoutplace_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.layaoutplaces.show', $layaoutplace->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('layaoutplace_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.layaoutplaces.edit', $layaoutplace->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('layaoutplace_delete')
                                    <form action="{{ route('admin.layaoutplaces.destroy', $layaoutplace->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('layaoutplace_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.layaoutplaces.massDestroy') }}",
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
  let table = $('.datatable-Layaoutplace:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection