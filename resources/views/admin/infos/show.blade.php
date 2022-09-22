@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.info.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.id') }}
                        </th>
                        <td>
                            {{ $info->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.name') }}
                        </th>
                        <td>
                            {{ $info->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.url') }}
                        </th>
                        <td>
                            {{ $info->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.desc') }}
                        </th>
                        <td>
                            {{ $info->desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.need') }}
                        </th>
                        <td>
                            {{ $info->need }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.info.fields.redirecturl') }}
                        </th>
                        <td>
                            {{ $info->redirecturl }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection