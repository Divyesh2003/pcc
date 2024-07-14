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
                        <h2>Profile Update User</h2>
                        <form name="profile" id="profile" class="needs-validation"
                            action="{{ route('admin.profile.update') }}" method="POST"
                        enctype="multipart/form-data" novalidate>
                        @csrf()
                        @method('POST')
                        <div class="intro-y box p-1">
                            <div class="input-form mt-3 @error('title') has-error @enderror">
                                <label for="name" class="form-label">Name<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input type="text" id="name" name="name"
                                    value="{{ $profile->name }}" class="form-control slug-input"
                                    placeholder="Admin Name" required>
                                @error('name')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <!-- END TAG -->
                            <div class="input-form mt-3 @error('email') has-error @enderror">
                                <label for="email" class="form-label">Email<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input type="email" id="email" name="email"
                                    value="{{ $profile->email }}" class="form-control slug-input"
                                    placeholder="Enter Email" required>
                                @error('email')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                             <!-- START TAG -->
                            <div class="input-form mt-3 @error('password') has-error @enderror">
                                <label for="password" class="form-label">Password<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input type="password" id="password" name="password"
                                    value="" class="form-control slug-input"
                                    placeholder="Enter password" required>
                                @error('password')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                           <!-- END TAG -->
                            <!-- START TAG -->
                             <!-- START TAG -->
                             {{-- <div class="input-form mt-3 @error('') has-error @enderror">
                                <label for="description" class="form-label">Description<span
                                        class="danger">*</span><span
                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                <input type="text" id="description" name="description"
                                    value="{{ old('description') }}" class="form-control slug-input"
                                    placeholder="Description" required>
                                @error('description')
                                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                </div>
                                @enderror
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div> --}}
                           <!-- END TAG -->
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