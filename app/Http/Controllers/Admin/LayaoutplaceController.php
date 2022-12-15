<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLayaoutplaceRequest;
use App\Http\Requests\StoreLayaoutplaceRequest;
use App\Http\Requests\UpdateLayaoutplaceRequest;
use App\Models\Layaoutplace;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LayaoutplaceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('layaoutplace_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $layaoutplaces = Layaoutplace::all();

        return view('admin.layaoutplaces.index', compact('layaoutplaces'));
    }

    public function create()
    {
        abort_if(Gate::denies('layaoutplace_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.layaoutplaces.create');
    }

    public function store(StoreLayaoutplaceRequest $request)
    {
        $layaoutplace = Layaoutplace::create($request->all());

        return redirect()->route('admin.layaoutplaces.index');
    }

    public function edit(Layaoutplace $layaoutplace)
    {
        abort_if(Gate::denies('layaoutplace_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.layaoutplaces.edit', compact('layaoutplace'));
    }

    public function update(UpdateLayaoutplaceRequest $request, Layaoutplace $layaoutplace)
    {
        $layaoutplace->update($request->all());

        return redirect()->route('admin.layaoutplaces.index');
    }

    public function show(Layaoutplace $layaoutplace)
    {
        abort_if(Gate::denies('layaoutplace_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.layaoutplaces.show', compact('layaoutplace'));
    }

    public function destroy(Layaoutplace $layaoutplace)
    {
        abort_if(Gate::denies('layaoutplace_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $layaoutplace->delete();

        return back();
    }

    public function massDestroy(MassDestroyLayaoutplaceRequest $request)
    {
        Layaoutplace::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
