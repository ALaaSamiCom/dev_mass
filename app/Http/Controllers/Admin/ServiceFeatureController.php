<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\StoreServiceFeatureRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateServiceFeatureRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\ServiceFeature;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ServiceFeatureController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('service_feature_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service_features = ServiceFeature::with(['service', 'media'])->get();

        return view('admin.service_features.index', compact('service_features'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_feature_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $services = Service::pluck('title_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.service_features.create', compact('services'));
    }

    public function store(StoreServiceFeatureRequest $request)
    {
        $feature = ServiceFeature::create($request->all());
        //dd($feature);

        if ($request->input('image', false)) {
            $feature->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $feature->id]);
        }

        return redirect()->route('admin.service_features.index');
    }

    public function edit(ServiceFeature $service_feature)
    {
        abort_if(Gate::denies('service_feature_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $services = Service::pluck('title_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $service_feature->load('service');

        return view('admin.service_features.edit', compact('services', 'service_feature'));
    }

    public function update(UpdateServiceFeatureRequest $request, ServiceFeature $service_feature)
    {
        $service_feature->update($request->all());

        if ($request->input('image', false)) {
            if (!$service_feature->image || $request->input('image') !== $service_feature->image->file_name) {
                if ($service_feature->image) {
                    $service_feature->image->delete();
                }
                $service_feature->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($service_feature->image) {
            $service_feature->image->delete();
        }

        return redirect()->route('admin.service_features.index');
    }

    public function show(ServiceFeature $service_feature)
    {
        abort_if(Gate::denies('service_feature_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service_feature->load('service');

        return view('admin.service_features.show', compact('service_feature'));
    }

    public function destroy(ServiceFeature $service_feature)
    {
        abort_if(Gate::denies('service_feature_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service_feature->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        ServiceFeature::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('service_feature_create') && Gate::denies('service_feature_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ServiceFeature();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
