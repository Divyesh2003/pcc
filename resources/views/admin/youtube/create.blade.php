
@extends('admin.layouts.app')
@section('content')
<style>
    #quill-editor {
  height: 375px;
  box-shadow: 6px 6px 6px 0 rgba(0, 0, 0, 0.75);
}
</style>
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <h2>Youtube Create</h2>
                    <form name="youtube" id="youtube" class="needs-validation"
                        action="{{ route('admin.youtube.store') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf()
                    @method('POST')
                    <div class="intro-y box p-1">
                        <div class="input-form mt-3 @error('title') has-error @enderror">
                            <label for="title" class="form-label">Title<span
                                    class="danger">*</span><span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input type="text" id="title" name="title"
                                value="{{ old('title') }}" class="form-control slug-input"
                                placeholder="Title" required>
                            @error('title')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
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
                                value="{{ old('url') }}" class="form-control slug-input"
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
                         <!-- START TAG -->
                         <div class="input-form mt-3 @error('description') has-error @enderror">
                            <label for="description" class="form-label">Description<span
                                    class="danger">*</span><span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input type="text" id="description" name="description"
                                value="{{ old('description') }}" class="form-control slug-input"
                                placeholder="Description" required>
                            @error('description')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                       <!-- END TAG -->
                        <!-- START TAG -->
                        <div class='mt-3'>
                            <button type='submit' form='youtube'
                            class="btn btn-primary">Save </button>
                            <button type='reset' form='blogcategory'
                                class='btn btn-secondary'>Reset</button>
                            <a href='{{ route('admin.youtube.index') }}'
                                class='btn btn-dark'>
                              Back</a>
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