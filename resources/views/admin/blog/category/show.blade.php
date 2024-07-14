@section('title', 'Welox Pharma || Category Show')

@extends('admin.layouts.app')
@section('title', __('admin.show') . ' ' . __('admin.blogcategory'))
@section('content')
<main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            <div class="card p-4">
                <div class='card-header pb-0'>
                    <h4 class='card-title'>Blog Category</h4>
                </div>
                <hr class="invoice-spacing" />
                <div class='card-body pt-0'>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <td>{{ $blogcategory->id }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{ $blogcategory->parent_id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $blogcategory->name }}</td>
                        </tr>
                        <tr>
                            <th>Slug</th>
                            <td>{{ $blogcategory->slug }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $blogcategory->description !!}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{ $blogcategory->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{ $blogcategory->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>Meta Keyword</th>
                            <td>{{ $blogcategory->meta_keyword }}</td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td>{{ $blogcategory->status == '1' ? 'Active' : 'Deactive'}}</td>
                        </tr>
                    </table>
                    <div class='mt-3'>
                        <a href='{{ route('admin.blog.category.edit',$blogcategory->id) }}'
                        class='btn btn-primary float-start'>
                        <i class="bi bi-check-circle"></i>
                        {{ __('Edit') }}</a>
                        <a href='{{ route('admin.blog.category.index') }}'
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
      </div>
    </section>
  </main><!-- End #main -->
@endsection
