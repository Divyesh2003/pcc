@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <h4 class='card-title'>Faq List</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-primary mt-2 mb-2" href="{{ route('admin.faq.create')}}">Create</a>                            </div>
                    </div>
                    {{ $dataTable->table(['class' => 'table table-report sm:mt-2 '], true) }}
                    </div>
            </div>
          </div>
        </section>
      </main><!-- End #main -->
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush