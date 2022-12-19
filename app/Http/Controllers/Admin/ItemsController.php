<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyItemRequest;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use App\Models\StepByStep;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ItemsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $items = Item::with(['step_item', 'media'])->get();

        return view('admin.items.index', compact('items'));
    }

    public function create()
    {
        abort_if(Gate::denies('item_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $step_items = StepByStep::pluck('title_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.items.create', compact('step_items'));
    }

    public function store(StoreItemRequest $request)
    {
        $item = Item::create($request->all());

        if ($request->input('image', false)) {
            $item->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $item->id]);
        }

        return redirect()->route('admin.items.index');
    }

    public function edit(Item $item)
    {
        abort_if(Gate::denies('item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $step_items = StepByStep::pluck('title_en', 'id')->prepend(trans('global.pleaseSelect'), '');

        $item->load('step_item');

        return view('admin.items.edit', compact('item', 'step_items'));
    }

    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->all());

        if ($request->input('image', false)) {
            if (!$item->image || $request->input('image') !== $item->image->file_name) {
                if ($item->image) {
                    $item->image->delete();
                }
                $item->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($item->image) {
            $item->image->delete();
        }

        return redirect()->route('admin.items.index');
    }

    public function show(Item $item)
    {
        abort_if(Gate::denies('item_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $item->load('step_item');

        return view('admin.items.show', compact('item'));
    }

    public function destroy(Item $item)
    {
        abort_if(Gate::denies('item_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $item->delete();

        return back();
    }

    public function massDestroy(MassDestroyItemRequest $request)
    {
        Item::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('item_create') && Gate::denies('item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Item();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
