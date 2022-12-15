@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ourMission.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.our-missions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ourMission.fields.id') }}
                        </th>
                        <td>
                            {{ $ourMission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourMission.fields.order') }}
                        </th>
                        <td>
                            {{ $ourMission->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourMission.fields.title_en') }}
                        </th>
                        <td>
                            {{ $ourMission->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourMission.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $ourMission->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourMission.fields.description_en') }}
                        </th>
                        <td>
                            {!! $ourMission->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ourMission.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $ourMission->description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.our-missions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection