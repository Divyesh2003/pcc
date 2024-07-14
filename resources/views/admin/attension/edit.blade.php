@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aposittle Edit</h5>
                            <form name="attension" id="attension" class="needs-validation"
                                action="{{ route('admin.attension.update', $attension->id) }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf()
                                @method('PUT')
                                <div class="intro-y box p-1">
                                    <!-- START TAG -->
                                    <div class="input-form  @error('name') has-error @enderror">
                                        <label for="name" class="form-label">Name<span class="danger">*</span><span
                                                class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                        <input id="name" type="text" name="name" value="{{ $attension->name }}"
                                            class="form-control" placeholder="Attension name" required>
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
                                        <label for="slug" class="form-label">Slug<span class="danger">*</span><span
                                                class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                        <input id="slug" type="text" name="slug" value="{{ $attension->slug }}"
                                            class="form-control" placeholder="Aposittle slug" required
                                            pattern= "[a-z\\d]+(?:-[a-z\\d]+)*">
                                        @error('attension')
                                            <div class="pristine-error text-theme-24 ">{{ $message }}
                                            </div>
                                        @enderror
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <!-- START TAG -->
                                    <!-- START TAG -->
                                    <div class="">
                                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                                            <label class='form-label'
                                                for='description'>{{ __('admin.description') }}</label>
                                            <input type="hidden" id="description" name="description"
                                                value="{{ $attension->body }}" />
                                            <div id="editor">
                                                {!! $attension->body !!}
                                            </div>
                                            @error('description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- END TAG -->
                                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                                            <label class='form-label' for='description'>Flag</label>
                                            <input type="file" class="form-control" id="flag" name="flag"
                                                value="{{ old('flag') }}" />

                                            @error('flag')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                                            <label class='form-label' for='description'>Text Image</label>
                                            <input type="file" class="form-control" id="nameImage" name="nameImage"
                                                value="{{ old('nameImage') }}" />

                                            @error('nameImage')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- START TAG -->
                                        <div class="border p-4 mt-3">
                                            <div class='input-form mb-1 @error('section_1') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 1.</label>
                                                <textarea class="textarea" required="" name="section_1">
                                                    {{ $attension->section_1 }}
                                                    </textarea>
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

                                                <label class='form-label' for='description'>Section 2.</label>
                                                <textarea class="textarea" required="" name="section_2_text">
                                                    {{ $attension->section_2_text }}
                                        </textarea>
                                                <input type="file" class="form-control mt-2" name="section_2_image" value="  {{ $attension->section_2_image }}">
                                        <input type="text" name="section_2_alt" class="form-control mt-2" placeholder="Enter Image Alt" value="{{ $attension->section_2_alt  }}">
                                                
                                                @error('section_2')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                                        <!-- START TAG -->
                                            <div class="border p-4 mt-3">
                                                <div class='input-form mb-1 @error('section_3') has-error @enderror'>
                                                    <label class='form-label' for='description'>Section 3.</label>
                                                    <textarea class="textarea" required="" name="section_3_text">
                                                        {{ $attension->section_3_text }}
                                            </textarea>
                                                    <input type="file" class="form-control mt-2" name="section_3_image" value="  {{ $attension->section_3_image  }}">
                                            <input type="text" name="section_3_alt" class="form-control mt-2" placeholder="Enter Image Alt" value="{{ $attension->section_3_alt  }}">
                                                    
                                                    @error('section_3')
                                                        <div class='pristine-error text-theme-24 mb-2'>
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        <!-- END TAG -->
                                        <!-- START TAG -->
                                        <div class="border p-4 mt-3">
                                            <div class='input-form mb-1 @error('section_4') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 4.</label>
                                                <textarea class="textarea" required="" name="section_4_text">
                                                    {{ $attension->section_4_text }}
                                        </textarea>
                                                <input type="file" class="form-control mt-2" name="section_4_image" value="  {{ $attension->section_4_image  }}">
                                        <input type="text" name="section_4_alt" class="form-control mt-2" placeholder="Enter Image Alt" value="{{ $attension->section_4_alt  }}">
                                                
                                                @error('section_3')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                                        <!-- START TAG -->
                                        <div class="border p-4 mt-3">
                                            <div
                                                class='input-form mb-1 @error('section_5') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 5.</label>
                                                <textarea class="textarea" required="" name="section_5_text">
                                                    {{ $attension->section_5_text }}
                                        </textarea>
                                                <input type="file" class="form-control mt-2" name="section_5_image">
                                                <input type="text" name="section_5_alt" class="form-control mt-2" placeholder="Enter Image Alt" value="{{ $attension->section_5_alt  }}">

                                                @error('section_5')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                                           <!-- START TAG -->
                                           <div class="border p-4 mt-3">
                                            <div
                                                class='input-form mb-1 @error('section_6') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 6.</label>
                                                <textarea class="textarea" required="" name="section_6_text">
                                                    {{ $attension->section_6_text }}
                                        </textarea>
                                                <input type="file" class="form-control mt-2" name="section_6_image">
                                                <input type="text" name="section_5_alt" class="form-control mt-2" placeholder="Enter Image Alt" value="{{ $attension->section_6_alt  }}">

                                                @error('section_6')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                                          <!-- START TAG -->
                                          <div class="border p-4 mt-3">
                                            <div
                                                class='input-form mb-1 @error('section_6') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 7.</label>
                                                <textarea class="textarea" required="" name="section_7_text">
                                                    {{ $attension->section_7_text }}
                                        </textarea>
                                                <input type="file" class="form-control mt-2" name="section_7_image">
                                                <input type="text" name="section_7_alt" class="form-control mt-2" placeholder="Enter Image Alt" value="{{ $attension->section_7_alt  }}">

                                                @error('section_6')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                                          <!-- START TAG -->
                                          <div class="border p-4 mt-3">
                                            <div
                                                class='input-form mb-1 @error('section_9') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 9.</label>
                                                <textarea class="textarea" required="" name="section_9_text">
                                                    {{ $attension->section_9_text }}
                                        </textarea>
                                                @error('section_9')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                                          <!-- START TAG -->
                                          <div class="border p-4 mt-3">
                                            <div
                                                class='input-form mb-1 @error('section_10') has-error @enderror'>
                                                <label class='form-label' for='description'>Section 10.</label>
                                                <textarea class="textarea" required="" name="section_10_text">
                                                    {{ $attension->section_10_text }}
                                        </textarea>
                                                @error('section_10')
                                                    <div class='pristine-error text-theme-24 mb-2'>
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- END TAG -->
                    <!-- START TAG -->
                    <div class="input-form mt-3 @error('embasy_phone') has-error @enderror">
                       <label for="embasy_phone" class="form-label">Enter Embasy Phone <span
                               class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                       <input id="embasy_phone" type="number" name="embasy_phone" class="form-control" value="{{ $attension->embasy_phone}}"  placeholder="Enter Embasy Phone" >
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
                         <input id="address" type="text" name="address" class="form-control"
                             placeholder="Enter Embasy Address" value="{{ $attension->address }}">
                         @error('address')
                         <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                         </div>
                         @enderror
                         <div class="valid-feedback">Valid.</div>
                         <div class="invalid-feedback">Please fill out this field.</div>
                     </div>
                     <!-- End TAG -->
                                        <!-- START TAG -->
                                        <div class="input-form  @error('meta_title') has-error @enderror">
                                            <label for="meta_title" class="form-label">Meta Title <span
                                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                            <input type="text" name="meta_title" value="{{ $attension->meta_title }}"
                                                class="form-control" placeholder="input meta title">
                                            @error('meta_title')
                                                <div class="pristine-error text-theme-24 ">{{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <!-- END TAG -->
                                        <!-- START TAG -->
                                        <div class="input-form  @error('meta_description') has-error @enderror">
                                            <label for="meta_description" class="form-label">Meta
                                                Description <span
                                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                            <textarea rows="4" cols="50" name="meta_description" class="form-control"
                                                placeholder="input meta description">{{ $attension->meta_description }}</textarea>
                                            @error('meta_description')
                                                <div class="pristine-error text-theme-24 ">{{ $message }}
                                                </div>
                                            @enderror
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <!-- END TAG -->
                                        <!-- START TAG -->
                                        <div class="input-form  @error('meta_keywords') has-error @enderror">
                                            <label for="meta_keywords" class="form-label">Meta Keyword <span
                                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                            <input type="text" name="meta_keywords"
                                                value="{{ $attension->meta_keywords }}" class="form-control"
                                                placeholder="input meta keywords">
                                            @error('meta_keywords')
                                                <div class="pristine-error text-theme-24 ">{{ $message }}
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
                                    value="{{ $attension->canonical }}" class="form-control"
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
                                <input class="form-check-input ms-3" type="checkbox" name="nav_bar" value="A" id="nav_bar" @if($attension->nav_bar == 'A') checked @endif>
                                <input class="form-control ms-3" type="text" name="nav_bar_name" value="{{ $attension->nav_bar_name }}" id="nav_bar_name">
                            </div>
                                <!-- END TAG -->
                                 <!-- START TAG -->
                                        <div class="input-form mt-3 @error('meta_keywords') has-error @enderror">
                                            <label for="meta_keywords" class="form-label">Faq Page
                                                <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                                            </label>
                                            <div id="customTable" class="mt-3">
                                                <button class="btn btn-primary" onclick="newrow()">Add</button>
                                                @php
                                                    $cities_faq = json_decode($attension->faq, true);
                                                    $kies = 0;
                                                @endphp
                                                @if ($cities_faq != null)
                                                    @foreach ($cities_faq as $key => $faq)
                                                        <div class="row mt-2">
                                                            <div class="col-md-5"><input type="text"
                                                                    class="form-control"
                                                                    name="faq[{{ $key }}][title]"
                                                                    placeholder="title" fdprocessedid="dzyz5"
                                                                    value="{{ $faq['title'] }}"></div>
                                                            <div class="col-md-6"><input type="text"
                                                                    class="form-control"
                                                                    name="faq[{{ $key }}][message]"
                                                                    placeholder="message" fdprocessedid="o3ram"
                                                                    value="{{ $faq['message'] }}"></div>
                                                            <div class="col-sm-1"><button class="btn btn-dark"
                                                                    onclick="del(this)" fdprocessedid="evw7lo">X</button>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $kies = $key;
                                                        @endphp
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <!-- END TAG -->
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
                                            <a href="{{ route('admin.attension.index') }}"
                                                class="btn btn-sm btn-primary w-24 float-end p-1">Back</a>
                                            <!-- DELETE -->
                                        </div>
                                        <!-- END TAG -->
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript">
        let rowIndex = "<?php echo $kies; ?>"; // Initialize the index variable
        function newrow() {
            rowIndex++; // Increment the index for each new row
            let newRow = "<div class='row mt-2'><div class='col-md-5'><input type='text' class='form-control' name='faq[" +
                rowIndex +
                "][title]' placeholder='title'></div><div class='col-md-6'><input type='text' class='form-control' name='faq[" +
                rowIndex +
                "][message]' placeholder='message'></div><div class='col-sm-1'><button class='btn btn-dark' onclick='del(this)'>X</button></div></div>";
            document.getElementById("customTable").innerHTML += newRow;
        }
        function del(field) {
            field.parentNode.parentNode.outerHTML = "";
        }
    </script>
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
    document.getElementById('attension').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('attension').addEventListener('submit', function() {
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
