<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOurMissionRequest;
use App\Http\Requests\StoreOurMissionRequest;
use App\Http\Requests\UpdateOurMissionRequest;
use App\Models\OurMission;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OurMissionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_mission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourMissions = OurMission::all();

        return view('admin.ourMissions.index', compact('ourMissions'));
    }

    public function create()
    {
        abort_if(Gate::denies('our_mission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourMissions.create');
    }

    public function store(StoreOurMissionRequest $request)
    {
        $ourMission = OurMission::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ourMission->id]);
        }

        return redirect()->route('admin.our-missions.index');
    }

    public function edit(OurMission $ourMission)
    {
        abort_if(Gate::denies('our_mission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourMissions.edit', compact('ourMission'));
    }

    public function update(UpdateOurMissionRequest $request, OurMission $ourMission)
    {
        $ourMission->update($request->all());

        return redirect()->route('admin.our-missions.index');
    }

    public function show(OurMission $ourMission)
    {
        abort_if(Gate::denies('our_mission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourMissions.show', compact('ourMission'));
    }

    public function destroy(OurMission $ourMission)
    {
        abort_if(Gate::denies('our_mission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourMission->delete();

        return back();
    }

    public function massDestroy(MassDestroyOurMissionRequest $request)
    {
        OurMission::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('our_mission_create') && Gate::denies('our_mission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OurMission();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
