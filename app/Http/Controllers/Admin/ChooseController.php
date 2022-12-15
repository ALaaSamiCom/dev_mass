<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyChooseRequest;
use App\Http\Requests\StoreChooseRequest;
use App\Http\Requests\UpdateChooseRequest;
use App\Models\Choose;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ChooseController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('choose_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $chooses = Choose::with(['media'])->get();

        return view('admin.chooses.index', compact('chooses'));
    }

    public function create()
    {
        abort_if(Gate::denies('choose_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.chooses.create');
    }

    public function store(StoreChooseRequest $request)
    {
        $choose = Choose::create($request->all());

        if ($request->input('icon', false)) {
            $choose->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $choose->id]);
        }

        return redirect()->route('admin.chooses.index');
    }

    public function edit(Choose $choose)
    {
        abort_if(Gate::denies('choose_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.chooses.edit', compact('choose'));
    }

    public function update(UpdateChooseRequest $request, Choose $choose)
    {
        $choose->update($request->all());

        if ($request->input('icon', false)) {
            if (!$choose->icon || $request->input('icon') !== $choose->icon->file_name) {
                if ($choose->icon) {
                    $choose->icon->delete();
                }
                $choose->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
            }
        } elseif ($choose->icon) {
            $choose->icon->delete();
        }

        return redirect()->route('admin.chooses.index');
    }

    public function show(Choose $choose)
    {
        abort_if(Gate::denies('choose_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.chooses.show', compact('choose'));
    }

    public function destroy(Choose $choose)
    {
        abort_if(Gate::denies('choose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $choose->delete();

        return back();
    }

    public function massDestroy(MassDestroyChooseRequest $request)
    {
        Choose::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('choose_create') && Gate::denies('choose_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Choose();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
