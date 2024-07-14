@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Attension Create</h5>
                      <div class="card p-4">
                        <form name="apositlle" id="apositlle" class="needs-validation"
                            action="{{ route('admin.attension.store') }}" method="POST"
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
                                    placeholder="Name" required>
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
                                    class="form-control slug-output" placeholder="slug">
                                @error('slug')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div> 
                            <!-- END TAG -->
                            <div class='input-form mb-1 @error('description') has-error @enderror'>
                                <label class='form-label'  for='description'>Flag</label>
                                <input type="file" id="flag" class="form-control" name="flag" value="{{ old('flag') }}"/>
                                @error('flag')
                                    <div class='pristine-error text-theme-24 mb-2'>
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            <div class='input-form mb-1 @error('description') has-error @enderror'>
                                <label class='form-label'  for='description'>Text Image</label>
                                <input type="file" id="nameImage" class="form-control" name="nameImage" value="{{ old('nameImage') }}"/>
                             
                                @error('nameImage')
                                    <div class='pristine-error text-theme-24 mb-2'>
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- START TAG -->
                            <div class="border p-4 mt-3">
                                <div class='input-form mb-1 @error('section_1') has-error @enderror'>
                                    <label class='form-label'
                                        for='description'>Section 1.</label>
                                        <textarea class="textarea" required="" name="section_1"></textarea>
                                    @error('section_1')
                                        <div class='pristine-error text-theme-24 mb-2'>
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                                <!-- END TAG -->
                                <!-- START TAG -->
                                <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_2') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 2.</label>
                                        <textarea class="textarea" required="" name="section_2_text" ></textarea>
                                        <input type="file" class="form-control mt-2" name="section_2_image">
                                        <input type="text" name="section_2_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                        @error('section_1_description')
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
                                        <textarea class="textarea" required="" name="section_3_text"></textarea>
                                        <input type="file" class="form-control mt-2" name="section_3_image">
                                        <input type="text" name="section_3_alt" class="form-control mt-2" placeholder="Enter Image Alt">

                                        @error('section_3_description')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                   <!-- END TAG -->
                                  <!-- START TAG -->
                                  <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_4_text') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 4.</label>
                                        <textarea class="textarea" required="" name="section_4_text" ></textarea>
                                        <input type="file" class="form-control mt-2" name="section_4_image">
                                        <input type="text" name="section_4_alt" class="form-control mt-2" placeholder="Enter Image Alt">

                                        @error('section_4_text')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                   <!-- END TAG -->
                                  <!-- START TAG -->
                                  <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_5_description') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 5.</label>
                                        <textarea class="textarea" required="" name="section_5_text" ></textarea>
                                        <input type="file" class="form-control mt-2" name="section_5_image">
                                        <input type="text" name="section_5_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                        @error('section_5_description')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                   <!-- END TAG -->
                                  <!-- START TAG -->
                                  <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_6_description') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 6.</label>
                                        <textarea class="textarea" required="" name="section_6_text" ></textarea>
                                        <input type="file" class="form-control mt-2" name="section_6_image">
                                        <input type="text" name="section_6_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                        @error('section_6_description')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                  <!-- START TAG -->
                                  <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_7_description') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 7.</label>
                                    <textarea class="textarea" required="" name="section_7_text" ></textarea>
                                        <input type="file" class="form-control mt-2" name="section_7_image">
                                        <input type="text" name="section_7_alt" class="form-control mt-2" placeholder="Enter Image Alt">
                                        @error('section_7_description')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                              
                                 <!-- START TAG -->
                                 <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_9_text') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 9.</label>
                                            <textarea class="textarea" required="" name="section_9_text" ></textarea>
                                        {{-- <input type="file" class="form-control mt-2" name="file_8"> --}}
                                        @error('section_9_text')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                  <!-- START TAG -->
                                  <div class="border p-4 mt-3">
                                    <div class='input-form mb-1 @error('section_10_text') has-error @enderror'>
                                        <label class='form-label'
                                            for='description'>Section 10.</label>
                                            <textarea class="textarea" required="" name="section_10_text" ></textarea>
                                        {{-- <input type="file" class="form-control mt-2" name="file_8"> --}}
                                        @error('section_10_text')
                                            <div class='pristine-error text-theme-24 mb-2'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- END TAG -->
                                  <!-- START TAG -->
                       <div
                       class="input-form mt-3 @error('embasy_phone') has-error @enderror">
                       <label for="embasy_phone" class="form-label">Enter Embasy Phone <span
                               class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                       <input id="embasy_phone" type="number" name="embasy_phone"
                           value="{{ old('embasy_phone') }}" class="form-control"
                           placeholder="Enter Embasy Phone">
                       @error('embasy_phone')
                       <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                       </div>
                       @enderror
                       <div class="valid-feedback">Valid.</div>
                       <div class="invalid-feedback">Please fill out this field.</div>
                   </div>
                   <!-- End TAG -->
                         <!-- START TAG -->
                         <div
                         class="input-form mt-3 @error('address') has-error @enderror">
                         <label for="address" class="form-label">Embasy Address <span
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
                      <div class="input-form mt-3 @error('nav_bar') has-error @enderror">
                        <label for="nav_bar" class="form-label"> Nav Bar
                        <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                        </label>
                        <input class="form-check-input ms-3" type="checkbox" name="nav_bar" value="A" id="nav_bar">
                        <input class="form-control ms-3" type="text" name="nav_bar_name" value="" id="nav_bar_name">
                    </div>
                        <!-- END TAG -->
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
