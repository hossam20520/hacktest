<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDnaRequest;
use App\Http\Requests\UpdateDnaRequest;
use App\Http\Resources\Admin\DnaResource;
use App\Models\Dna;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DnaApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('dna_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DnaResource(Dna::all());
    }

    public function store(StoreDnaRequest $request)
    {
        $dna = Dna::create($request->all());

        return (new DnaResource($dna))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Dna $dna)
    {
        abort_if(Gate::denies('dna_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DnaResource($dna);
    }

    public function update(UpdateDnaRequest $request, Dna $dna)
    {
        $dna->update($request->all());

        return (new DnaResource($dna))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Dna $dna)
    {
        abort_if(Gate::denies('dna_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dna->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
