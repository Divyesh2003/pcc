@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <h4 class='card-title'>Faq Show</h4>
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>{{ $faq->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $faq->description }}</td>
                        </tr>
                    </table>
                    <div class='mt-3'>
                        <a href='{{ route('admin.faq.edit',$faq->id) }}'
                        class='btn btn-primary float-start'>
                        <i class="bi bi-check-circle"></i>
                        {{ __('Edit') }}</a>
                        <a href='{{ route('admin.faq.index') }}'
                            class='btn btn-dark float-end'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                                viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                stroke-width='2' stroke-linecap='round' stroke-linejoin='round'
                                class='feather feather-chevrons-left'>
                                <polyline points='11 17 6 12 11 7'></polyline>
                                <polyline points='18 17 13 12 18 7'></polyline>
                            </svg>
                            {{ __('back') }}</a>
                    </div>
                </div>
            </div>
          </div>
        </section>
      </main>
@endsection