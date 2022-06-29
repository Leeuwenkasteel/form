<div class="mb-3 row">
    <div class="col-md-3">
        <label for="{{$label}}" class="form-label">{{ucfirst($label)}}</label>
    </div>
    <div class="col-md-9">
        <textarea id="summernote" name="{{$name}}"></textarea>
        @error($name)
            <div class="small text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>

@pushonce('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpushonce

@pushonce('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    height: 150,
    toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
  });
});
</script>
@endpushonce