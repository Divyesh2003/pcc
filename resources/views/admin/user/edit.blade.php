
@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card p-4">
                <h2>User Edit</h2>
                <form name="users" id="users" class="needs-validation"
                action="{{ route('admin.users.update', $user->id) }}"
                method="POST" enctype="multipart/form-data" novalidate>
                @csrf()
                @method('PUT')
            <div class="intro-y box p-1">
                <div class="input-form mt-3 @error('name') has-error @enderror">
                    <label for="name" class="form-label">Name<span
                            class="danger">*</span><span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                    <input type="text" id="name" name="name"
                        value="{{ $user->name }}" class="form-control slug-input"
                        placeholder="Enter Name" required>
                    @error('name')
                    <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                    </div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <!-- END TAG -->
                 <!-- START TAG -->
                <div class="input-form mt-3 @error('email') has-error @enderror">
                    <label for="email" class="form-label">Email<span
                            class="danger">*</span><span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                    <input type="text" id="email" name="email"
                        value="{{ $user->email }}" class="form-control slug-input"
                        placeholder="Enter Mail" required>
                    @error('email')
                    <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                    </div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
               <!-- END TAG -->
                <!-- START TAG -->
                <div class="input-form mt-3 @error('password') has-error @enderror">
                    <label for="password" class="form-label">Password<span
                            class="danger">*</span><span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                    <input type="password" id="password" name="password"
                        value="{{ old('password') }}" class="form-control slug-input"
                        placeholder="Enter Password" required>
                    @error('password')
                    <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                    </div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
               <!-- END TAG -->
                  <!-- START TAG -->
                  <div class="input-form mt-3 @error('is_admin') has-error @enderror">
                    <label for="is_admin" class="form-label">Role<span
                            class="danger">*</span><span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                        <select name="is_admin" class="form-control" id="is_admin">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                    @error('is_admin')
                    <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                    </div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
               <!-- END TAG -->
                <!-- START TAG -->
                <div class='mt-3'>
                    <button type='submit' form='users'
                    class="btn btn-primary">Save </button>
                    <button type='reset' form='users'
                        class='btn btn-secondary'>Reset</button>
                    <a href='{{ route('admin.users.index') }}'
                        class='btn btn-dark'>
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