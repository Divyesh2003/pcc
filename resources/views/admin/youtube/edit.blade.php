
@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card p-4">
                <h2>Youtube Edit</h2>
                <form name="youtube" id="youtube" class="needs-validation"
                action="{{ route('admin.youtube.update', $youtube->id) }}"
                method="POST" enctype="multipart/form-data" novalidate>
                @csrf()
                @method('PUT')
        <div class="intro-y box p-1">
            <!-- START TAG -->
            <div class="input-form  @error('title') has-error @enderror">
                <label for="title" class="form-label">Name<span
                        class="danger">*</span><span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="title" type="text" name="title"
                    value="{{ $youtube->title }}" class="form-control"
                    placeholder="Product Title" required>
                @error('title')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
              <!-- START TAG -->
              <div class="input-form mt-3 @error('url') has-error @enderror">
                <label for="url" class="form-label">URL<span
                        class="danger">*</span><span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input type="text" id="url" name="url"
                    value="{{ $youtube->url }}" class="form-control slug-input"
                    placeholder="URl" required>
                @error('url')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
           <!-- END TAG -->
            <!-- START TAG -->
            <div class="">
            <div class='input-form mb-1 @error('description') has-error @enderror'>
                <label class='form-label'
                    for='description'>{{ __('admin.description') }}</label>
                    <input type="text" id="description" name="description"
                    value="{{ $youtube->description}}" class="form-control slug-input" 
                    placeholder="Description" required>
                @error('description')
                    <div class='pristine-error text-theme-24 mb-2'>
                        {{ $message }}</div>
                @enderror
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="mt-5">
                <button type="submit" id="submit" name="submit"
                    class="btn btn-sm btn-primary w-24 mr-1 p-1">Save</button>
                <button type="reset" id="reset" name="reset"
                    class="btn btn-sm btn-primary w-24 mr-1 p-1">Reset</button>
            </div>
            <!-- END TAG -->
        </div>
        </form>
              </div>
            </div>
          </div>
        </section>
      </main><!-- End #main -->
@endsection
@push('scripts')
<script>
      const quill = new Quill('#editor', {
      theme: 'snow'
    });
      $(document).ready(function() {
        $(document).on('blur', '#editor', function() {
            var myEditor = document.querySelector('#editor')
            var html = myEditor.children[0].innerHTML
        $("#description").val(html);
        });
    });
</script>

<script>
  // Track whether there are unsaved changes
  let isDirty = false;

  // Mark the form as dirty when the user makes changes
  document.getElementById('youtube').addEventListener('input', function() {
      isDirty = true;
  });

  // Reset the dirty flag when the form is submitted
  document.getElementById('youtube').addEventListener('submit', function() {
      isDirty = false;
  });

  // Warn the user if there are unsaved changes
  window.addEventListener('beforeunload', function(event) {
      if (isDirty) {
          // Show a confirmation message (standard message is used, you cannot customize this)
          event.preventDefault(); // For older browsers
          event.returnValue = ''; // For modern browsers
      }
  });
</script>
@endpush