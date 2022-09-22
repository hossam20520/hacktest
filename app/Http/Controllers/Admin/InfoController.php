<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInfoRequest;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Models\Info;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $infos = Info::all();

        return view('admin.infos.index', compact('infos'));
    }

    public function create()
    {
        abort_if(Gate::denies('info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.infos.create');
    }

    public function store(StoreInfoRequest $request)
    {
        $info = Info::create($request->all());

        return redirect()->route('admin.infos.index');
    }

    public function edit(Info $info)
    {
        abort_if(Gate::denies('info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.infos.edit', compact('info'));
    }

    public function update(UpdateInfoRequest $request, Info $info)
    {
        $info->update($request->all());

        return redirect()->route('admin.infos.index');
    }

    public function show(Info $info)
    {
        abort_if(Gate::denies('info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.infos.show', compact('info'));
    }

    public function destroy(Info $info)
    {
        abort_if(Gate::denies('info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $info->delete();

        return back();
    }

    public function massDestroy(MassDestroyInfoRequest $request)
    {
        Info::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}