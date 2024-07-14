@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Aposittle Show</h5>
                      <table class="table">
                        <tr>
                            <th>Id</th>
                            <td>{{ $youtube->id }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $youtube->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $youtube->description }}</td>
                        </tr>
                        <tr>
                            <th>Url</th>
                            <td>{{ $youtube->url }}</td>
                        </tr>
                    </table>
                    <div class='mt-3'>
                        <a href='{{ route('admin.youtube.edit',$youtube->id) }}'
                        class='btn btn-primary float-start'>
                        <i class="bi bi-check-circle"></i>
                        {{ __('Edit') }}</a>
                        <a href='{{ route('admin.youtube.index') }}'
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
                  <div class="row">
                    <div class="col-sm-4">
                        <iframe width="315" height="560" class="border-radius"
                        src="https://youtube.com/embed/Kvp_pdkIdQ4?si=7FhsJ6IUEqp688BU" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                  </div>
            </div>
          </div>
        </section>
      </main>
@endsection