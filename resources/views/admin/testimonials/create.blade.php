@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.testimonial.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.testimonials.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name_ar">{{ trans('cruds.testimonial.fields.name_ar') }}</label>
                <input class="form-control {{ $errors->has('name_ar') ? 'is-invalid' : '' }}" type="text" name="name_ar" id="name_ar" value="{{ old('name_ar', '') }}" required>
                @if($errors->has('name_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.name_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en">{{ trans('cruds.testimonial.fields.name_en') }}</label>
                <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en" id="name_en" value="{{ old('name_en', '') }}" required>
                @if($errors->has('name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.name_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="text_ar">{{ trans('cruds.testimonial.fields.text_ar') }}</label>
                <textarea class="form-control {{ $errors->has('text_ar') ? 'is-invalid' : '' }}" name="text_ar" id="text_ar" required>{{ old('text_ar') }}</textarea>
                @if($errors->has('text_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.text_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="text_en">{{ trans('cruds.testimonial.fields.text_en') }}</label>
                <textarea class="form-control {{ $errors->has('text_en') ? 'is-invalid' : '' }}" name="text_en" id="text_en" required>{{ old('text_en') }}</textarea>
                @if($errors->has('text_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.text_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_title_ar">{{ trans('cruds.testimonial.fields.job_title_ar') }}</label>
                <input class="form-control {{ $errors->has('job_title_ar') ? 'is-invalid' : '' }}" type="text" name="job_title_ar" id="job_title_ar" value="{{ old('job_title_ar', '') }}">
                @if($errors->has('job_title_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_title_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.job_title_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_title_en">{{ trans('cruds.testimonial.fields.job_title_en') }}</label>
                <input class="form-control {{ $errors->has('job_title_en') ? 'is-invalid' : '' }}" type="text" name="job_title_en" id="job_title_en" value="{{ old('job_title_en', '') }}">
                @if($errors->has('job_title_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_title_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.job_title_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.testimonial.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.image_helper') }}</span>
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
    url: '{{ route('admin.testimonials.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
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
@if(isset($testimonial) && $testimonial->image)
      var file = {!! json_encode($testimonial->image) !!}
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
@endsection