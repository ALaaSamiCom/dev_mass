@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.specialSection.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.special-sections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.id') }}
                        </th>
                        <td>
                            {{ $specialSection->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.title_en') }}
                        </th>
                        <td>
                            {{ $specialSection->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $specialSection->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.description_en') }}
                        </th>
                        <td>
                            {!! $specialSection->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $specialSection->description_ar !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.image') }}
                        </th>
                        <td>
                            @if($specialSection->image)
                                <a href="{{ $specialSection->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $specialSection->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.place') }}
                        </th>
                        <td>
                            {{ $specialSection->place->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.section_place') }}
                        </th>
                        <td>
                            {{ App\Models\SpecialSection::SECTION_PLACE_SELECT[$specialSection->section_place] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\SpecialSection::STATUS_RADIO[$specialSection->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.order') }}
                        </th>
                        <td>
                            {{ $specialSection->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.short_description_en') }}
                        </th>
                        <td>
                            {!! $specialSection->short_description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.specialSection.fields.short_description_ar') }}
                        </th>
                        <td>
                            {!! $specialSection->short_description_ar !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.special-sections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection