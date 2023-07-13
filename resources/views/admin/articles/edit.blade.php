@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.article.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.articles.update", [$article->id]) }}"
                  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="image">{{ trans('cruds.article.fields.image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}"
                         id="image-dropzone">
                    </div>
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="title_en">{{ trans('cruds.article.fields.title_en') }}</label>
                    <input class="form-control {{ $errors->has('title_en') ? 'is-invalid' : '' }}" type="text"
                           name="title_en" id="title_en" value="{{ old('title_en', $article->title_en) }}" required>
                    @if($errors->has('title_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.title_en_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="title_ar">{{ trans('cruds.article.fields.title_ar') }}</label>
                    <input class="form-control {{ $errors->has('title_ar') ? 'is-invalid' : '' }}" type="text"
                           name="title_ar" id="title_ar" value="{{ old('title_ar', $article->title_ar) }}" required>
                    @if($errors->has('title_ar'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title_ar') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.title_ar_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="description_en">{{ trans('cruds.article.fields.description_en') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('description_en') ? 'is-invalid' : '' }}"
                              name="description_en"
                              id="description_en">{!! old('description_en', $article->description_en) !!}</textarea>
                    @if($errors->has('description_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.description_en_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="description_ar">{{ trans('cruds.article.fields.description_ar') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('description_ar') ? 'is-invalid' : '' }}"
                              name="description_ar"
                              id="description_ar">{!! old('description_ar', $article->description_ar) !!}</textarea>
                    @if($errors->has('description_ar'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description_ar') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.description_ar_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="author_name_en">{{ trans('cruds.article.fields.author_name_en') }}</label>
                    <input type="text"
                           class="form-control  {{ $errors->has('author_name_en') ? 'is-invalid' : '' }}"
                           name="author_name_en" id="author_name_en"
                           value=" {!! old('author_name_en', $article->author_name_en) !!}">
                    @if($errors->has('author_name_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_name_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.author_name_en_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="author_name_ar">{{ trans('cruds.article.fields.author_name_ar') }}</label>
                    <input type="text"
                           class="form-control  {{ $errors->has('author_name_ar') ? 'is-invalid' : '' }}"
                           name="author_name_ar"
                           id="author_name_ar" value=" {!! old('author_name_ar', $article->author_name_ar) !!}">
                    @if($errors->has('author_name_ar'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_name_ar') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.author_name_ar_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="author_job_en">{{ trans('cruds.article.fields.author_job_en') }}</label>
                    <input type="text"
                           class="form-control  {{ $errors->has('author_job_en') ? 'is-invalid' : '' }}"
                           name="author_job_en"
                           id="author_job_en" value=" {!! old('author_job_en', $article->author_job_en) !!}">
                    @if($errors->has('author_job_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_job_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.author_name_en_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="author_job_ar">{{ trans('cruds.article.fields.author_job_ar') }}</label>
                    <input type="text"
                           class="form-control  {{ $errors->has('author_job_ar') ? 'is-invalid' : '' }}"
                           name="author_job_ar"
                           id="author_job_ar" value=" {!! old('author_job_ar', $article->author_job_ar) !!}>
                    @if($errors->has('author_job_ar'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_job_ar') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.author_job_ar_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="author_image">{{ trans('cruds.article.fields.author_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('author_image') ? 'is-invalid' : '' }}"
                         id="image-dropzone">
                    </div>
                    @if($errors->has('author_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('author_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.article.fields.author_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        Dropzone.options.imageDropzone = {
            url: '{{ route('admin.articles.storeMedia') }}',
            maxFilesize: 500, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 500,
                width: 4096,
                height: 4096
            },
            success: function (file, response) {
                $('form').find('input[name="image"]').remove()
                $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
            },
            removedfile: function (file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function () {
                @if(isset($article) && $article->image)
                var file = {!! json_encode($article->image) !!}
                this.options.addedfile.call(this, file)
                this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }

    </script>
    <script>
        $(document).ready(function () {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function (loader) {
                    return {
                        upload: function () {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function (resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '{{ route('admin.articles.storeCKEditorImages') }}', true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText = `Couldn't upload file: ${file.name}.`;
                                        xhr.addEventListener('error', function () {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function () {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function () {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                                            }

                                            $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                                            resolve({default: response.url});
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function (e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $article->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

@endsection
