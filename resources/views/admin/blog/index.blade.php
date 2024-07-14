@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Blog List</h5>
        <a class="btn btn-primary mt-2 mb-2" href="{{ route('admin.blog.create')}}">Create</a> 
                  {{ $dataTable->table() }}
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