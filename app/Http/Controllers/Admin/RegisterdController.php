<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRegisterdRequest;
use App\Http\Requests\StoreRegisterdRequest;
use App\Http\Requests\UpdateRegisterdRequest;
use App\Models\Registerd;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterdController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('registerd_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registerds = Registerd::all();

        return view('admin.registerds.index', compact('registerds'));
    }

    public function create()
    {
        abort_if(Gate::denies('registerd_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registerds.create');
    }

    public function store(Request $request)
    {
        $registerd = Registerd::create($request->all());
        return redirect('https://www.facebook.com/');
       // return redirect()->route('admin.registerds.index');
    }

    public function edit(Registerd $registerd)
    {
        abort_if(Gate::denies('registerd_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registerds.edit', compact('registerd'));
    }

    public function update(UpdateRegisterdRequest $request, Registerd $registerd)
    {
        $registerd->update($request->all());

        return redirect()->route('admin.registerds.index');
    }

    public function show(Registerd $registerd)
    {
        abort_if(Gate::denies('registerd_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registerds.show', compact('registerd'));
    }

    public function destroy(Registerd $registerd)
    {
        abort_if(Gate::denies('registerd_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registerd->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegisterdRequest $request)
    {
        Registerd::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}