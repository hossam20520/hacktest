@extends('layouts.admin')
@section('content')
@can('registerd_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.registerds.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.registerd.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.registerd.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Registerd">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.password') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.mac') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.ip') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.time') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.registerd.fields.count') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registerds as $key => $registerd)
                        <tr data-entry-id="{{ $registerd->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registerd->id ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->email ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->password ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->mac ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->location ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->ip ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->time ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->type ?? '' }}
                            </td>
                            <td>
                                {{ $registerd->count ?? '' }}
                            </td>
                            <td>
                                @can('registerd_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.registerds.show', $registerd->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('registerd_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.registerds.edit', $registerd->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('registerd_delete')
                                    <form action="{{ route('admin.registerds.destroy', $registerd->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('registerd_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registerds.massDestroy') }}",
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
  let table = $('.datatable-Registerd:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection