<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWorkRequest;
use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Work;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WorksController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('work_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $works = Work::with(['media'])->get();

        return view('admin.works.index', compact('works'));
    }

    public function create()
    {
        abort_if(Gate::denies('work_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.works.create');
    }

    public function store(StoreWorkRequest $request)
    {
        $work = Work::create($request->all());

        if ($request->input('image', false)) {
            $work->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $work->id]);
        }

        return redirect()->route('admin.works.index');
    }

    public function edit(Work $work)
    {
        abort_if(Gate::denies('work_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.works.edit', compact('work'));
    }

    public function update(UpdateWorkRequest $request, Work $work)
    {
        $work->update($request->all());

        if ($request->input('image', false)) {
            if (!$work->image || $request->input('image') !== $work->image->file_name) {
                if ($work->image) {
                    $work->image->delete();
                }
                $work->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($work->image) {
            $work->image->delete();
        }

        return redirect()->route('admin.works.index');
    }

    public function show(Work $work)
    {
        abort_if(Gate::denies('work_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.works.show', compact('work'));
    }

    public function destroy(Work $work)
    {
        abort_if(Gate::denies('work_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $work->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkRequest $request)
    {
        Work::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('work_create') && Gate::denies('work_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Work();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
