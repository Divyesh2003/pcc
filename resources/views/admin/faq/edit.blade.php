@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <h4 class='card-title'>Faq Create</h4>
                    <form name="blog" id="blog" class="needs-validation"
            action="{{ route('admin.faq.update', $faq->id) }}"
            method="POST" enctype="multipart/form-data" novalidate>
            @csrf()
            @method('PUT')
        <div class="input-form  @error('title') has-error @enderror">
            <label for="title" class="form-label">Name<span
                    class="danger">*</span><span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
            <input id="title" type="text" name="title"
                value="{{ $faq->title }}" class="form-control"
                placeholder="Faq Title" required>
            @error('title')
            <div class="pristine-error text-theme-24 ">{{ $message }}
            </div>
            @enderror
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <!-- END TAG -->
        <!-- START TAG -->
        <div class="input-form  @error('description') has-error @enderror">
            <label for="description" class="form-label">Description<span
                    class="danger">*</span><span
                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
            <input id="description" type="text" name="description"
                value="{{ $faq->description }}" class="form-control"
                placeholder="Faq Title" required>
            @error('description')
            <div class="pristine-error text-theme-24 ">{{ $message }}
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
    
            <div class="form-check form-check-primary form-switch p-0">
                <input type="checkbox"  value='A' name="status"
                    class="form-check-input ms-0" id="customSwitch3" @if($faq->status == "A") checked="" @endif>
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
      </main>
      <!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
$(document).on('blur', '#description', function() {
    var myEditor = document.querySelector('#description')
var html = myEditor.children[0].innerHTML
console.log(html)
$("#descriptions_ce").val(html);
});
});
</script>
<script>
    // Track whether there are unsaved changes
    let isDirty = false;

    // Mark the form as dirty when the user makes changes
    document.getElementById('blog').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('blog').addEventListener('submit', function() {
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
@endsection