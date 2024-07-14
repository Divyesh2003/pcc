
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
                    <form name="product" id="product" class="needs-validation"
                        action="{{ route('admin.category.store') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf()
                    @method('POST')
                    <div class="intro-y box p-1">
                        {{-- <div class="input-form @error('category_id') has-error @enderror">
                            <label for="category_id" class="form-label">Category <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <select name="category_id" id="category_id" class="form-select"
                                autofocus>
                                <option value="" >Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div> --}}
                        <!-- START TAG -->
                        <div class="input-form mt-3 @error('name') has-error @enderror">
                            <label for="name" class="form-label">Name<span
                                    class="danger">*</span><span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input type="text" id="name" name="name"
                                value="{{ old('name') }}" class="form-control slug-input"
                                placeholder="offer name" required>
                            @error('name')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <!-- END TAG -->
                        <!-- START TAG -->
                        <div class="input-form mt-3 @error('slug') has-error @enderror">
                            <label for="slug" class="form-label">Slug <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input name="slug" id="slug" value="{{ old('slug') }}"
                                class="form-control slug-output" placeholder="enter slug">
                            @error('slug')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                            <label class='form-label'  for='description'>Description</label>
                            <input type="hidden" id="description" name="description" value="{{ old('description') }}"/>
                            <div id="editor">
                                <p>Hello World!</p>
                                <p>Some initial <strong>bold</strong> text</p>
                                <p><br /></p>
                              </div>
                            @error('description')
                                <div class='pristine-error text-theme-24 mb-2'>
                                    {{ $message }}</div>
                            @enderror
                        </div>
                        <!-- END TAG -->
                        <!-- START TAG -->
                        <div class="input-form mt-3 @error('image') has-error @enderror">
                            <label for="image" class="form-label">Image <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input id="image" type="file" name="image" class="form-control">
                            @error('image')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <!-- END TAG -->
                        <!-- START TAG -->
                        <div
                            class="input-form mt-3 @error('meta_title') has-error @enderror">
                            <label for="meta_title" class="form-label">Meta Title <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input id="meta_title" type="text" name="meta_title"
                                value="{{ old('meta_title') }}" class="form-control"
                                placeholder="Enter Meta title">
                            @error('meta_title')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div
                            class="input-form mt-3 @error('meta_description') has-error @enderror">
                            <label for="editor1" class="form-label">Meta
                                Description <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <textarea rows="4" cols="50" id="editor1"
                                name="meta_description" class="form-control"
                                placeholder="Enter meta description"></textarea>
                            @error('meta_description')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div
                            class="input-form mt-3 @error('meta_keywords') has-error @enderror">
                            <label for="meta_keywords" class="form-label">Meta keywords
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                            <input id="meta_keywords" type="text" name="meta_keywords"
                                value="{{ old('meta_keywords') }}" class="form-control"
                                placeholder="Enter meta keywords">
                            @error('meta_keywords')
                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                            </div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <!-- END TAG -->
                         <!-- START TAG -->
                     <div
                     class="input-form mt-3 @error('canonical') has-error @enderror">
                     <label for="canonical" class="form-label">Canonical
                         <span
                             class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                     <input id="canonical" type="text" name="canonical"
                         value="{{ old('canonical') }}" class="form-control"
                         placeholder="Enter canonical">
                     @error('canonical')
                     <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                     </div>
                     @enderror
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                 </div>
                   <!-- END TAG -->
                        <!-- START TAG -->
                        <div class="input-form @error('status') has-error @enderror">
                            <label class="form-label pt-2">Status (Active / Deactive) <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional,
                                    prefered to select
                                    Active</span></label>
            
                            <div class="form-check form-check-primary form-switch ps-0">
                                <input type="checkbox" checked="" value='A' name="status"
                                    class="form-check-input ms-0" id="customSwitch3">
                            </div>
                            @error('status')
                            <div class="pristine-error text-theme-24 mt-2">
                                {{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <!-- END TAG -->
                        <!-- START TAG -->
                        <div class='mt-3'>
                            <button type=' submit ' form='product'
                            class="btn btn-outline-primary">Save </button>
                                {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                            <button type='reset' form='blogcategory'
                                class='btn btn-outline-secondary'>Reset</button>
                            <a href='{{ route('admin.product.index') }}'
                                class='btn btn-outline-dark'>
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
    document.getElementById('product').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('product').addEventListener('submit', function() {
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