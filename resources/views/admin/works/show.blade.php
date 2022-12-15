@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.work.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.works.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.work.fields.id') }}
                        </th>
                        <td>
                            {{ $work->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.work.fields.image') }}
                        </th>
                        <td>
                            @if($work->image)
                                <a href="{{ $work->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $work->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.work.fields.title_en') }}
                        </th>
                        <td>
                            {{ $work->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.work.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $work->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.work.fields.description_en') }}
                        </th>
                        <td>
                            {!! $work->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.work.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $work->description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.works.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection