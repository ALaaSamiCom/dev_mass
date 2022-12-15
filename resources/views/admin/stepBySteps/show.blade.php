@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.stepByStep.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.step-by-steps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.stepByStep.fields.id') }}
                        </th>
                        <td>
                            {{ $stepByStep->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stepByStep.fields.title_en') }}
                        </th>
                        <td>
                            {{ $stepByStep->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.stepByStep.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $stepByStep->title_ar }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.step-by-steps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#step_item_items" role="tab" data-toggle="tab">
                {{ trans('cruds.item.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="step_item_items">
            @includeIf('admin.stepBySteps.relationships.stepItemItems', ['items' => $stepByStep->stepItemItems])
        </div>
    </div>
</div>

@endsection