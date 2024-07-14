@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User List</h5>
                  <a class="btn btn-primary mt-2 mb-2" href="{{ route('admin.users.create')}}">Create</a> 
                  <!-- Table with stripped rows -->
                  {{ $dataTable->table() }}
                  <!-- End Table with stripped rows -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </main><!-- End #main -->
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush