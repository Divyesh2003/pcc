@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Redirect Edit</h5>
                            <form name="redirect" id="redirect" class="needs-validation"
                            action="{{ route('admin.redirect.update', $redirect->id) }}"
                            method="POST" enctype="multipart/form-data" novalidate>
                            @csrf()
                            @method('PUT')
                        <div class="intro-y box p-1">
                            <!-- START TAG -->
                            <div class="input-form mt-3 @error('source_url') has-error @enderror">
                                <label for="source_url" class="form-label">Source Url<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input type="text" id="source_url" name="source_url"
                                    value="{{  $redirect->source_url }}" class="form-control slug-input"
                                    placeholder="Add The Title" required>
                                @error('source_url')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <!-- END TAG -->
                              <!-- START TAG -->
                              <div class="input-form mt-3 @error('destination_url') has-error @enderror">
                                <label for="destination_url" class="form-label">Destination Url<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input type="text" id="destination_url" name="destination_url"
                                    value="{{ $redirect->destination_url }}" class="form-control slug-input"
                                    placeholder="Add The Title" required>
                                @error('destination_url')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <!-- END TAG -->
                            <!-- START TAG -->
                            <div class='mt-3'>
                                <button type=' submit ' form='redirect'
                                class="btn btn-outline-primary">Save </button>
                                    {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                                <button type='reset' form='apositlle'
                                    class='btn btn-outline-secondary'>Reset</button>
                                <a href='{{ route('admin.redirect.index') }}'
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
        </section>
    </main>
@endsection
@push('scripts')

<script>
    // Track whether there are unsaved changes
    let isDirty = false;

    // Mark the form as dirty when the user makes changes
    document.getElementById('redirect').addEventListener('input', function() {
        isDirty = true;
    });

    // Reset the dirty flag when the form is submitted
    document.getElementById('redirect').addEventListener('submit', function() {
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