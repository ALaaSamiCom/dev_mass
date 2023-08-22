@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.article.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.id') }}
                        </th>
                        <td>
                            {{ $article->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.image') }}
                        </th>
                        <td>
                            @if($article->image)
                                <a href="{{ $article->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $article->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.title_en') }}
                        </th>
                        <td>
                            {{ $article->title_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.title_ar') }}
                        </th>
                        <td>
                            {{ $article->title_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.description_en') }}
                        </th>
                        <td>
                            {!! $article->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $article->description_ar !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.author_name_en') }}
                        </th>
                        <td>
                            {{ $article->service->author_name_en ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.author_name_ar') }}
                        </th>
                        <td>
                            {{ $article->service->author_name_ar ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.author_job_en') }}
                        </th>
                        <td>
                            {{ $article->service->author_job_en ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.author_job_ar') }}
                        </th>
                        <td>
                            {{ $article->service->author_job_ar ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.article.fields.author_image') }}
                        </th>
                        <td>
                                @if($article->author_image)
                                <a href="{{ $article->author_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $article->author_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.articles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
