@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.service_feature.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.service_features.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.id') }}
                        </th>
                        <td>
                            {{ $service_feature->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.image') }}
                        </th>
                        <td>
                            @if($service_feature->image)
                                <a href="{{ $service_feature->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $service_feature->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.title_en') }}
                        </th>
                        <td>
                            {{ $service_feature->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $service_feature->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.description_en') }}
                        </th>
                        <td>
                            {!! $service_feature->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $service_feature->description_ar !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.service_feature.fields.service') }}
                        </th>
                        <td>
                            {{ $service_feature->service->title_en ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.service_features.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
