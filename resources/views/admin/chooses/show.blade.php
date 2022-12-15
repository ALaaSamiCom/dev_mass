@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.choose.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.chooses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.choose.fields.id') }}
                        </th>
                        <td>
                            {{ $choose->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.choose.fields.icon') }}
                        </th>
                        <td>
                            @if($choose->icon)
                                <a href="{{ $choose->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $choose->icon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.choose.fields.title_en') }}
                        </th>
                        <td>
                            {{ $choose->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.choose.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $choose->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.choose.fields.description_en') }}
                        </th>
                        <td>
                            {!! $choose->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.choose.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $choose->description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.chooses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection