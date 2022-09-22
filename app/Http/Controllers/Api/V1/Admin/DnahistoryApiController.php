<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDnahistoryRequest;
use App\Http\Requests\UpdateDnahistoryRequest;
use App\Http\Resources\Admin\DnahistoryResource;
use App\Models\Dnahistory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DnahistoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dnahistory_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DnahistoryResource(Dnahistory::with(['user', 'dna'])->get());
    }

    public function store(StoreDnahistoryRequest $request)
    {
        $dnahistory = Dnahistory::create($request->all());

        return (new DnahistoryResource($dnahistory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Dnahistory $dnahistory)
    {
        abort_if(Gate::denies('dnahistory_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DnahistoryResource($dnahistory->load(['user', 'dna']));
    }

    public function update(UpdateDnahistoryRequest $request, Dnahistory $dnahistory)
    {
        $dnahistory->update($request->all());

        return (new DnahistoryResource($dnahistory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Dnahistory $dnahistory)
    {
        abort_if(Gate::denies('dnahistory_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dnahistory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
