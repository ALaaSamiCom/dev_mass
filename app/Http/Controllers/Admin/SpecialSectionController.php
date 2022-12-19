<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySpecialSectionRequest;
use App\Http\Requests\StoreSpecialSectionRequest;
use App\Http\Requests\UpdateSpecialSectionRequest;
use App\Models\Layaoutplace;
use App\Models\SpecialSection;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SpecialSectionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('special_section_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $specialSections = SpecialSection::with(['place', 'team', 'media'])->get();

        return view('admin.specialSections.index', compact('specialSections'));
    }

    public function create()
    {
        abort_if(Gate::denies('special_section_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $places = Layaoutplace::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.specialSections.create', compact('places'));
    }

    public function store(StoreSpecialSectionRequest $request)
    {
        $specialSection = SpecialSection::create($request->all());

        if ($request->input('image', false)) {
            $specialSection->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $specialSection->id]);
        }

        return redirect()->route('admin.special-sections.index');
    }

    public function edit(SpecialSection $specialSection)
    {
        abort_if(Gate::denies('special_section_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $places = Layaoutplace::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $specialSection->load('place', 'team');

        return view('admin.specialSections.edit', compact('places', 'specialSection'));
    }

    public function update(UpdateSpecialSectionRequest $request, SpecialSection $specialSection)
    {
        $specialSection->update($request->all());

        if ($request->input('image', false)) {
            if (!$specialSection->image || $request->input('image') !== $specialSection->image->file_name) {
                if ($specialSection->image) {
                    $specialSection->image->delete();
                }
                $specialSection->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($specialSection->image) {
            $specialSection->image->delete();
        }

        return redirect()->route('admin.special-sections.index');
    }

    public function show(SpecialSection $specialSection)
    {
        abort_if(Gate::denies('special_section_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $specialSection->load('place', 'team');

        return view('admin.specialSections.show', compact('specialSection'));
    }

    public function destroy(SpecialSection $specialSection)
    {
        abort_if(Gate::denies('special_section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $specialSection->delete();

        return back();
    }

    public function massDestroy(MassDestroySpecialSectionRequest $request)
    {
        SpecialSection::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('special_section_create') && Gate::denies('special_section_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SpecialSection();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
