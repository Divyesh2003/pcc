
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
                    <form name="page" id="page" class="needs-validation"
                        action="{{ route('admin.page.store') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf()
                    @method('POST')
                    <div class="intro-y box p-1">
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
                                
                              </div >
                            @error('description')
                                <div class='pristine-error text-theme-24 mb-2'>
                                    {{ $message }}</div>
                            @enderror
                        </div>
                        <!-- END TAG -->
                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                            <label class='form-label'  for='description'>Description With coding</label>
                            {{-- <input type="hidden" id="description" name="description" value="{{ old('description') }}"/> --}}
                           <textarea name="description_coding" class="form-control" id="description_coding" cols="30" rows="10">{{ old('description') }}</textarea>
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
                        <div
                        class="input-form mt-3 @error('canonical') has-error @enderror">
                        <label for="canonical" class="form-label">Canonical
                            <span
                                class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                        <input id="canonical" type="text" name="canonical"
                            value="{{ old('canonical') }}" class="form-control"
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
                            <div class="pristine-error text-theme-24 mt-2">
                                {{ $message }}</div>
                            @enderror
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <!-- END TAG -->
                        <!-- START TAG -->
                        <div class='mt-3'>
                            <button type=' submit ' form='page'
                            class="btn btn-outline-primary">Save </button>
                                {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                            <button type='reset' form='page'
                                class='btn btn-outline-secondary'>Reset</button>
                            <a href='{{ route('admin.page.index') }}'
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
    // ID or DOM object
const editor = SUNEDITOR.create((document.getElementById('editor') || 'editor'),{
    // All of the plugins are loaded in the "window.SUNEDITOR" object in dist/suneditor.min.js file
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
        'table', 'link', 'image', 'video', 'audio', /** 'math', */ // You must add the 'katex' library at options to use the 'math' plugin.
        /** 'imageGallery', */ // You must add the "imageGalleryUrl".
        'fullScreen', 'showBlocks', 'codeView',
        'preview', 'print', 'save', 'template',
        /** 'dir', 'dir_ltr', 'dir_rtl' */ // "dir": Toggle text direction, "dir_ltr": Right to Left, "dir_rtl": Left to Right
        ]
    ],
    // lang: SUNEDITOR_LANG['ko']
});
    //   const quill = new Quill('#editor', {
    //   theme: 'snow'
    // });
           
            editor.onChange = function (contents, core) {
                // You can update another element with the new text if needed
                document.querySelector('#description_coding').value = contents;
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