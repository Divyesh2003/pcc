@section('title', 'Welox Pharma || Category Edit')
@extends('admin.layouts.app')
@section('title', __('admin.edit') . ' ' . __('admin.blogcategory'))
@section('content')
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            <div class="card p-4">
                <form name='blogcategory' id='blogcategory' class='validate-form1 needs-validation'
                action='{{ route('admin.blog.category.update', $blogcategory->id) }}'
                method='POST' enctype='multipart/form-data' novalidate>
                @csrf()
                @method('PUT')
                <div class="input-form mb-1  @error('parent_id') has-error @enderror">
                    <label for="parent_id" class="form-label">Blog Category<span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                    <select name="parent_id" id="parent_id" class="select2 form-select form-control">
                        <option value="" selected>Select Category</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}"
                                @if (old('parent_id')) { selected } @elseif($cat->id == $blogcategory->parent_id) selected @endif>
                                {{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('parent_id')
                        <div class="pristine-error text-theme-24 mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class='input-form mb-1 @error('name') has-error @enderror'>
                    <label class='form-label' for='name'>Name<span
                            class='danger'>*</span>
                    </label>
                    <input type='text' id='name' name='name'
                        class='form-control' value='{{ $blogcategory->name }}'
                        placeholder='Hello' autofocus required />
                    @error('name')
                        <div class='pristine-error text-theme-24 mt-2'>
                            {{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">{{ __('admin.please fill out this field.') }}
                    </div>
                </div>

                <div class='input-form mb-1 @error('slug') has-error @enderror'>
                    <label class='form-label' for='slug'>Slug<span
                            class='danger'>*</span>
                    </label>
                    <input type='text' id='slug' name='slug'
                        class='form-control ' value='{{ $blogcategory->slug }}'
                        placeholder='{{ __('admin.hello') }}'pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*'
                        required /> @error('slug')
                        <div class='pristine-error text-theme-24 mt-2'>
                            {{ $message }}</div>
                    @enderror
                    <div class="invalid-feedback">
                        {{ __('admin.please fill out this field.[a-z0-9-]') }}</div>
                </div>

                <div class='input-form mb-1 @error('description') has-error @enderror'>
                    <label class='form-label'
                        for='description'>Description</label>
                    <div id='toolbar-container'></div>
                    <div class='editor' id='description' name='description'>
                        {{ $blogcategory->description }}</div>
                    @error('description')
                        <div class='pristine-error text-theme-24 mb-2'>
                            {{ $message }}</div>
                    @enderror
                </div>

                <div class='input-form mb-1 @error('image') has-error @enderror'>
                    <label class='form-label' for='image'>Image</label>
                    <input type='file' id='image' name='image' class='form-control'>
                    @error('image')
                        <div class='pristine-error text-theme-24 '>{{ $message }}</div>
                    @enderror
                </div>



                <div class='input-form mb-1 @error('meta_title') has-error @enderror'>
                    <label class='form-label' for='meta_title'>Meta Title
                    </label>
                    <input type='text' id='meta_title' name='meta_title' class='form-control'
                        value='{{ $blogcategory->meta_title }}'
                        placeholder='{{ __('admin.title') }}' />
                    @error('meta_title')
                        <div class='pristine-error text-theme-24 mt-2'>
                            {{ $message }}</div>
                    @enderror
                </div>

                <div class='input-form mb-1  @error('meta_description') has-error @enderror'>
                    <label class='d-block form-label'
                        for='meta_description'>Description</label>
                    <textarea id='meta_description' name='meta_description' class='form-control'
                        placeholder='{{ __('admin.description') }}' rows='3'> {{ $blogcategory->meta_description }}
                        </textarea>
                    @error('meta_description')
                        <div class='pristine-error text-theme-24 mb-2'>
                            {{ $message }}</div>
                    @enderror
                </div>
                <div class='input-form mb-1 @error('meta_keywords') has-error @enderror'>
                    <label class='form-label'
                        for='meta_keywords'>Meta Keyword
                    </label>
                    <input type='text' id='meta_keywords' name='meta_keywords'
                        class='form-control ' value='{{ $blogcategory->meta_keyword }}'
                        placeholder='{{ __('admin.keywords') }}' />
                    @error('meta_keywords')
                        <div class='pristine-error text-theme-24 mt-2'>
                            {{ $message }}</div>
                    @enderror
                </div>
                     <!-- START TAG -->
                     <div
                     class="input-form mt-3 @error('canonical') has-error @enderror">
                     <label for="canonical" class="form-label">Canonical
                         <span
                             class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                     <input id="canonical" type="text" name="canonical"
                         value="{{ $blogcategory->canonical }}" class="form-control"
                         placeholder="Enter canonical">
                     @error('canonical')
                     <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                     </div>
                     @enderror
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                 </div>
                   <!-- END TAG -->
                   {{-- @dd($blogcategory) --}}
                <div class='input-form mb-1 @error('status') has-error @enderror'>
                    <label class='form-label'
                        for='fp-default'>Status (Active/Deactive)</label>
                    <div class='form-check form-switch form-check-primary ps-0'>
                        <input type='checkbox' id='status' value='A' name='status'
                            class='form-check-input ms-0'
                            @if ($blogcategory->status == 'A') checked @endif>
                        <label class='form-check-label' for='status'>
                            @error('status')
                                <div class='pristine-error text-theme-24 mb-2'>
                                    {{ $message }}</div>
                            @enderror
                        </label>
                    </div>
                </div>
                <div class='mt-3'>
                    <button type='submit' form='blogcategory'
                    class="btn btn-outline-primary">Update </button>
                        {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                    <button type='reset' form='blogcategory'
                        class='btn btn-outline-secondary'>Reset</button>
                    <a href='{{ route('admin.blog.category.index') }}'
                        class='btn btn-outline-dark'>
                      Back</a>
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
    document.getElementById('blogcategory').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('blogcategory').addEventListener('submit', function() {
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