
@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <form name="page" id="page" class="needs-validation"
                action="{{ route('admin.page.update', $page->id) }}"
                method="POST" enctype="multipart/form-data" novalidate>
                @csrf()
                @method('PUT')
        <div class="intro-y box p-1">
            <!-- START TAG -->
            <div class="input-form  @error('name') has-error @enderror">
                <label for="name" class="form-label">Name<span
                        class="danger">*</span><span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="name" type="text" name="name"
                    value="{{ $page->name }}" class="form-control"
                    placeholder="product name" required>
                @error('name')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form  @error('slug') has-error @enderror">
                <label for="slug" class="form-label">Slug<span
                        class="danger">*</span><span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="slug" type="text" name="slug"
                    value="{{ $page->slug }}" class="form-control"
                    placeholder="Page slug" required pattern= "[a-z\\d]+(?:-[a-z\\d]+)*">
                @error('slug')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- START TAG -->
            <div class="">
            <div class='input-form mb-1 @error('description') has-error @enderror'>
                <label class='form-label'
                    for='description'>{{ __('admin.description') }}</label>
                    <input type="hidden" id="description" name="description" value="{{ $page->body }}"/>
                    <div id="editor">
                        {!! $page->body !!}
                    </div>
                @error('description')
                    <div class='pristine-error text-theme-24 mb-2'>
                        {{ $message }}</div>
                @enderror
            </div>
            <!-- END TAG -->
            <div class='input-form mb-1 @error('description') has-error @enderror'>
                <label class='form-label'  for='description'>Description With coding</label>
                {{-- <input type="hidden" id="description" name="description" value="{{ old('description') }}"/> --}}
               <textarea name="description_coding" class="form-control" id="description_coding" cols="30" rows="10">
               {{ $page->body }}</textarea>
                @error('description')
                    <div class='pristine-error text-theme-24 mb-2'>
                        {{ $message }}</div>
                @enderror
            </div>
            <!-- START TAG -->
            <div class="input-form  @error('image') has-error @enderror">
                <label for="image" class="form-label">Image <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input id="image" type="file" name="gallary[]" class="form-control" placeholder="Image" multiple>
                @error('image')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div
                class="input-form  @error('meta_description') has-error @enderror">
                <label for="meta_description" class="form-label">Meta
                    Description <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <textarea rows="4" cols="50" name="meta_description" class="form-control"
                    placeholder="input meta description">{{ $page->meta_description }}</textarea>
                @error('meta_description')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form  @error('meta_title') has-error @enderror">
                <label for="meta_title" class="form-label">Meta Title <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input type="text" name="meta_title"
                    value="{{ $page->meta_title }}" class="form-control"
                    placeholder="input meta title">
                @error('meta_title')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div
                class="input-form  @error('meta_keywords') has-error @enderror">
                <label for="meta_keywords" class="form-label">Meta Keyword <span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                <input type="text" name="meta_keywords"
                    value="{{ $page->meta_keywords }}" class="form-control"
                    placeholder="input meta keywords">
                @error('meta_keywords')
                <div class="pristine-error text-theme-24 ">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <div
            class="input-form mt-3 @error('canonical') has-error @enderror">
            <label for="canonical" class="form-label">Canonical
                <span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
            <input id="canonical" type="text" name="canonical"
                value="{{ $page->canonical }}" class="form-control"
                placeholder="Enter meta keywords">
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
                <div class="pristine-error text-theme-24 ">
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
                {{-- <a href="{{ route('admin.cms.blog.list.index') }}"
                    class="btn btn-sm btn-primary w-24 float-end p-1">Back</a> --}}
                <!-- DELETE -->
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
const editor = SUNEDITOR.create((document.getElementById('editor') || 'editor'),{
    buttonList: [
        [
        'undo', 'redo',
        'font', 'fontSize', 'formatBlock',
        'paragraphStyle', 'blockquote',
        'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript',
        'fontColor', 'hiliteColor', 'textStyle',
        'removeFormat',
        'outdent', 'indent',
        'align', 'horizontalRule', 'list', 'lineHeight',
        'table', 'link', 'image', 'video', 'audio',
        'fullScreen', 'showBlocks', 'codeView',
        'preview', 'print', 'save', 'template',
        ]
    ],
});   
            editor.onChange = function (contents, core) {
                document.querySelector('#description_coding ').value = contents;
            };
</script>
<script>
    // Track whether there are unsaved changes
    let isDirty = false;

    // Mark the form as dirty when the user makes changes
    document.getElementById('page').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('page').addEventListener('submit', function() {
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