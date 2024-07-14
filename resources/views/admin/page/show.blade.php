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
                            <td>{{ $page->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $page->name }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $page->slug }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $page->body !!}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{ $page->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{ $page->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Meta Keyword</th>
                            <td>{{ $page->meta_keyword }}</td>
                        </tr>
                        <tr>
                            <th>Meta Keyword</th>
                            <td>{{ $page->canonical }}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>{{ $page->status == '1' ? 'Active' : 'Deactive'}}</td>
                        </tr>
                    </table>
                    <div class='mt-3'>
                        <a href='{{ route('admin.page.edit',$page->id) }}'
                        class='btn btn-primary float-start'>
                        <i class="bi bi-check-circle"></i>
                        {{ __('Edit') }}</a>
                        <a href='{{ route('admin.page.index') }}'
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
                        <div class="col-sm-3">
                            <img src="{{ asset($page->image)}}" alt="" width="100%">
                        </div>
                        
                  </div>
            </div>
          </div>
        </section>
      </main>
@endsection