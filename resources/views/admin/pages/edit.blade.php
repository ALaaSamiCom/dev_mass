@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.page.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pages.update", [$page->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="image">{{ trans('cruds.page.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="keywords_en">{{ trans('cruds.page.fields.keywords_en') }}</label>
                <textarea class="form-control {{ $errors->has('keywords_en') ? 'is-invalid' : '' }}" name="keywords_en" id="keywords_en">{{ old('keywords_en', $page->keywords_en) }}</textarea>
                @if($errors->has('keywords_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('keywords_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.keywords_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="keywords_ar">{{ trans('cruds.page.fields.keywords_ar') }}</label>
                <textarea class="form-control {{ $errors->has('keywords_ar') ? 'is-invalid' : '' }}" name="keywords_ar" id="keywords_ar">{{ old('keywords_ar', $page->keywords_ar) }}</textarea>
                @if($errors->has('keywords_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('keywords_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.keywords_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title_en">{{ trans('cruds.page.fields.title_en') }}</label>
                <input class="form-control {{ $errors->has('title_en') ? 'is-invalid' : '' }}" type="text" name="title_en" id="title_en" value="{{ old('title_en', $page->title_en) }}" required>
                @if($errors->has('title_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.title_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title_ar">{{ trans('cruds.page.fields.title_ar') }}</label>
                <input class="form-control {{ $errors->has('title_ar') ? 'is-invalid' : '' }}" type="text" name="title_ar" id="title_ar" value="{{ old('title_ar', $page->title_ar) }}" required>
                @if($errors->has('title_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.title_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_en">{{ trans('cruds.page.fields.description_en') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description_en') ? 'is-invalid' : '' }}" name="description_en" id="description_en">{!! old('description_en', $page->description_en) !!}</textarea>
                @if($errors->has('description_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.description_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description_ar">{{ trans('cruds.page.fields.description_ar') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description_ar') ? 'is-invalid' : '' }}" name="description_ar" id="description_ar">{!! old('description_ar', $page->description_ar) !!}</textarea>
                @if($errors->has('description_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.description_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="short_description_en">{{ trans('cruds.page.fields.short_description_en') }}</label>
                <textarea class="form-control {{ $errors->has('short_description_en') ? 'is-invalid' : '' }}" name="short_description_en" id="short_description_en">{!! old('short_description_en', $page->short_description_en) !!}</textarea>
                @if($errors->has('short_description_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_description_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.short_description_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="short_description_ar">{{ trans('cruds.page.fields.short_description_ar') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('short_description_ar') ? 'is-invalid' : '' }}" name="short_description_ar" id="short_description_ar">{!! old('short_description_ar', $page->short_description_ar) !!}</textarea>
                @if($errors->has('short_description_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_description_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.short_description_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_title">{{ trans('cruds.page.fields.page_title') }}</label>
                <input class="form-control {{ $errors->has('page_title') ? 'is-invalid' : '' }}" type="text" name="page_title" id="page_title" value="{{ old('page_title', $page->page_title) }}">
                @if($errors->has('page_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.page_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.page.fields.layout') }}</label>
                @foreach(App\Models\Page::LAYOUT_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('layout') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="layout_{{ $key }}" name="layout" value="{{ $key }}" {{ old('layout', $page->layout) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="layout_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('layout'))
                    <div class="invalid-feedback">
                        {{ $errors->first('layout') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.page.fields.layout_helper') }}</span>
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
    url: '{{ route('admin.pages.storeMedia') }}',
    maxFilesize: 50, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 50,
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
@if(isset($page) && $page->image)
      var file = {!! json_encode($page->image) !!}
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
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.pages.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $page->id ?? 0 }}');
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
