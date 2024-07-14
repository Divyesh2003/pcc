@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Aposittle Create</h5>
                      <div class="card p-4">
                        <form name="apositlle" id="apositlle" class="needs-validation"
                            action="{{ route('admin.apositlle.store') }}" method="POST"
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
                                    placeholder="Add The Title" required>
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
                                    class="form-control slug-output" placeholder="Add The Slug">
                                @error('slug')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                             <!-- START TAG -->
                             <div class="border p-4 mt-3">
                                <div class='input-form mb-1 @error('section_1_description') has-error @enderror'>
                                    <label class='form-label'
                                        for='description'>Section 1.</label>
                                        <textarea class="textarea"  required="" id="editor" name="question_option_1"></textarea>
                                        {{-- <textarea>
                                            Welcome to TinyMCE!
                                          </textarea> --}}
                                    @error('section_1_description')
                                        <div class='pristine-error text-theme-24 mb-2'>
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                                <!-- END TAG -->
                                <!-- START TAG -->
                                <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_2_description') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 2.</label>
                                        <textarea class="textarea" required="" id="editor1" name="section_2" ></textarea>
                                        <input type="file" class="form-control mt-2" name="file_2">
                                        <input type="text" name="file_2_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                        @error('section_2_description')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                <!-- START TAG -->
                                <div class="border p-4 mt-3">
                                <div class='input-form mb-1 @error('section_3_description') has-error @enderror'>
                                    <label class='form-label'
                                        for='description'>Section 3.</label>
                                    <textarea class="textarea" required="" id="editor2" name="section_3" ></textarea>
                                    @error('section_3_description')
                                        <div class='pristine-error text-theme-24 mb-2'>
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- END TAG -->
                               <!-- START TAG -->
                               <div class="border p-4 mt-3">
                                <div class='input-form mb-1 @error('section_4_description') has-error @enderror'>
                                    <label class='form-label'
                                        for='description'>Section 4.</label>
                                        <input type="file" class="form-control mt-2" name="section_4">
                                        <input type="text" name="section_4_alt" class="form-control mt-2" placeholder="Enter Image Alt">

                                    @error('section_4_description')
                                        <div class='pristine-error text-theme-24 mb-2'>
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                               </div>
                        <!-- END TAG -->
                         <!-- START TAG -->
                         <div class="border p-4 mt-3">
                            <div class='input-form mb-1 @error('section_5_description') has-error @enderror'>
                                <label class='form-label'
                                    for='description'>Section 5.</label>
                                    <textarea class="textarea" required="" id="editor3" name="question_option_5" ></textarea>
                                @error('section_5_description')
                                    <div class='pristine-error text-theme-24 mb-2'>
                                        {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <!-- END TAG -->
                            <!-- START TAG -->
                         <div class="border p-4 mt-3">
                            <div class='input-form mb-1 @error('section_6_description') has-error @enderror'>
                                <label class='form-label'
                                    for='description'>Section 6.</label>
                                    <input type="file" class="form-control mt-2" name="section_6">
                                    <input type="text" name="section_6_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                @error('section_6_description')
                                    <div class='pristine-error text-theme-24 mb-2'>
                                        {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- END TAG -->
                        {{-- //////////////////////// --}}
                         <!-- START TAG -->
                         <div class="border p-4 mt-3">
                            <div class='input-form mb-1 @error('process_apostille_1') has-error @enderror'>
                                <label class='form-label'
                                    for='process_apostille_1'>Process of apostille section 1.</label>
                                <textarea class="textarea" required="" id="process_apostille_1" name="process_apostille_1_text"></textarea>
                                <input type="file" class="form-control mt-2" name="process_apostille_1_file">
                                <input type="text" name="process_apostille_1_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                @error('process_apostille_1')
                                    <div class='pristine-error text-theme-24 mb-2'>
                                        {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- END TAG -->
                            <!-- START TAG -->
                            <div class="border p-4 mt-3">
                                <div class='input-form mb-1 @error('process_apostille_2_file') has-error @enderror'>
                                    <label class='form-label'
                                        for='process_apostille_1_file'>Process of apostille section 2.</label>
                                    <textarea class="textarea" required="" id="editor1" name="process_apostille_2_text" ></textarea>
                                    <input type="file" class="form-control mt-2" name="process_apostille_2_file">
                                    <input type="text" name="process_apostille_2_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                    @error('process_apostille_1_file')
                                        <div class='pristine-error text-theme-24 mb-2'>
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- END TAG -->
                            <!-- START TAG -->
                            <div class="border p-4 mt-3">
                                <div class='input-form mb-1 @error('section_2_description') has-error @enderror'>
                                    <label class='form-label'
                                        for='description'>Process of apostille section 3.</label>
                                    <textarea class="textarea" required="" id="editor1" name="process_apostille_3_text" ></textarea>
                                    <input type="file" class="form-control mt-2" name="process_apostille_3_file">
                                    <input type="text" name="process_apostille_3_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                    @error('section_2_description')
                                        <div class='pristine-error text-theme-24 mb-2'>
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- END TAG -->
                        {{-- //////////////////////// --}}
                         <!-- START TAG -->
                         <div
                         class="input-form mt-3 @error('address') has-error @enderror">
                         <label for="address" class="form-label">Meta Title <span
                                 class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                         <input id="address" type="text" name="address"
                             value="{{ old('address') }}" class="form-control"
                             placeholder="Enter Embasy Address">
                         @error('address')
                         <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                         </div>
                         @enderror
                         <div class="valid-feedback">Valid.</div>
                         <div class="invalid-feedback">Please fill out this field.</div>
                     </div>
                     <!-- End TAG -->
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
                            <!-- End TAG -->
                            <!-- START TAG -->
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
                            <!-- End TAG -->
                            <!-- START TAG -->
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
                           <div class="input-form mt-3 @error('nav_bar') has-error @enderror">
                            <label for="nav_bar" class="form-label"> Nav Bar
                            <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                            </label>
                            <input class="form-check-input ms-3" type="checkbox" name="nav_bar" value="A" id="nav_bar">
                            <input class="form-control" type="text" name="nav_bar_name" value="" id="nav_bar_name">
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
                            <div
                            class="input-form mt-3 @error('meta_keywords') has-error @enderror">
                            <label for="meta_keywords" class="form-label">Faq  Page 
                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                            </label>
                            <div id="customTable" class="mt-3">
                                <button class="btn btn-primary" onclick="newrow()">Add</button> 
                            </div>
                        </div>
                            <!-- START TAG -->
                            <div class="input-form @error('status') has-error @enderror">
                                <label class="form-label pt-2">Status (Active / Deactive) <span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional,
                                        prefered to select
                                        Active</span></label>
                
                                <div class="form-check form-check-primary form-switch p-0">
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
                                <button type=' submit ' form='apositlle'
                                class="btn btn-outline-primary">Save </button>
                                    {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                                <button type='reset' form='apositlle'
                                    class='btn btn-outline-secondary'>Reset</button>
                                <a href='{{ route('admin.apositlle.index') }}'
                                    class='btn btn-outline-dark'>
                                  Back</a>
                            </div>
                            <!-- END TAG -->
                        </div>
                    </form>
                            </div>
                    </div>
                  </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@push('scripts')
<script src="https://cdn.tiny.cloud/1/5eqmwghqqpn3d1mxrdrgrajwng2tm61c7ze8a2p8po4pdaoh/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '.textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>

<script>
    // Track whether there are unsaved changes
    let isDirty = false;

    // Mark the form as dirty when the user makes changes
    document.getElementById('apositlle').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('apositlle').addEventListener('submit', function() {
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
