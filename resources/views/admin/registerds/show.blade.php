@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.registerd.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registerds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.id') }}
                        </th>
                        <td>
                            {{ $registerd->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.email') }}
                        </th>
                        <td>
                            {{ $registerd->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.password') }}
                        </th>
                        <td>
                            {{ $registerd->password }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.mac') }}
                        </th>
                        <td>
                            {{ $registerd->mac }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.location') }}
                        </th>
                        <td>
                            {{ $registerd->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.ip') }}
                        </th>
                        <td>
                            {{ $registerd->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.time') }}
                        </th>
                        <td>
                            {{ $registerd->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.type') }}
                        </th>
                        <td>
                            {{ $registerd->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.registerd.fields.count') }}
                        </th>
                        <td>
                            {{ $registerd->count }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.registerds.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection