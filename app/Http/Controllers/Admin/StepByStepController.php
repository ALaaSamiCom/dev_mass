<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStepByStepRequest;
use App\Http\Requests\StoreStepByStepRequest;
use App\Http\Requests\UpdateStepByStepRequest;
use App\Models\StepByStep;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StepByStepController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('step_by_step_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stepBySteps = StepByStep::all();

        return view('admin.stepBySteps.index', compact('stepBySteps'));
    }

    public function create()
    {
        abort_if(Gate::denies('step_by_step_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stepBySteps.create');
    }

    public function store(StoreStepByStepRequest $request)
    {
        $stepByStep = StepByStep::create($request->all());

        return redirect()->route('admin.step-by-steps.index');
    }

    public function edit(StepByStep $stepByStep)
    {
        abort_if(Gate::denies('step_by_step_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stepBySteps.edit', compact('stepByStep'));
    }

    public function update(UpdateStepByStepRequest $request, StepByStep $stepByStep)
    {
        $stepByStep->update($request->all());

        return redirect()->route('admin.step-by-steps.index');
    }

    public function show(StepByStep $stepByStep)
    {
        abort_if(Gate::denies('step_by_step_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stepByStep->load('stepItemItems');

        return view('admin.stepBySteps.show', compact('stepByStep'));
    }

    public function destroy(StepByStep $stepByStep)
    {
        abort_if(Gate::denies('step_by_step_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stepByStep->delete();

        return back();
    }

    public function massDestroy(MassDestroyStepByStepRequest $request)
    {
        StepByStep::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
