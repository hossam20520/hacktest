<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.info.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.infos.update", [$info->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.info.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $info->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="url">{{ trans('cruds.info.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', $info->url) }}">
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="desc">{{ trans('cruds.info.fields.desc') }}</label>
                <textarea class="form-control {{ $errors->has('desc') ? 'is-invalid' : '' }}" name="desc" id="desc">{{ old('desc', $info->desc) }}</textarea>
                @if($errors->has('desc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('desc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="need">{{ trans('cruds.info.fields.need') }}</label>
                <input class="form-control {{ $errors->has('need') ? 'is-invalid' : '' }}" type="text" name="need" id="need" value="{{ old('need', $info->need) }}">
                @if($errors->has('need'))
                    <div class="invalid-feedback">
                        {{ $errors->first('need') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.need_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="redirecturl">{{ trans('cruds.info.fields.redirecturl') }}</label>
                <input class="form-control {{ $errors->has('redirecturl') ? 'is-invalid' : '' }}" type="text" name="redirecturl" id="redirecturl" value="{{ old('redirecturl', $info->redirecturl) }}">
                @if($errors->has('redirecturl'))
                    <div class="invalid-feedback">
                        {{ $errors->first('redirecturl') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.info.fields.redirecturl_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection