@extends('admin.layouts.app')
@section('content')
@php
    $profile = Auth::guard('admin')->user();
@endphp
<main id="main" class="main">
            <section class="section">
              <div class="row">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <h2>Head Tag Editing</h2>
                        <form name="profile" id="profile" class="needs-validation"
                            action="{{ route('admin.head.update') }}" method="POST"
                        enctype="multipart/form-data" novalidate>
                        @csrf()
                        @method('POST')
                        <div class="intro-y box p-1">
                            <div class="input-form mt-3 @error('head_tag') has-error @enderror">
                                <label for="head_tag" class="form-label">Text<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                        <input type="hidden" value="{{ $settings->id }}">
                                    <textarea class="form-control" placeholder="Head Tag More Custome Script and Css File" name="head_tag" id="head_tag">{{ $settings->description }}</textarea>
                                @error('head_tag')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <!-- START TAG -->
                            <div class='mt-3'>
                                <button type='submit' form='profile'
                                class="btn btn-primary">Save </button>
                            </div>
                            <!-- END TAG -->
                        </div>
                    </form>
                            </div>
                </div>
              </div>
            </section>
          </main><!-- End #main -->

</main>
@endsection